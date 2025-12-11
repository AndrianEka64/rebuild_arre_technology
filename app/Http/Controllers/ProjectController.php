<?php

namespace App\Http\Controllers;

use App\Models\project;
use Illuminate\Http\Request;
use Symfony\Component\Mime\MimeTypes;
use function PHPUnit\Framework\fileExists;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $project = project::all();
        return view('tabel', compact('project'));
    }

    public function lihat()
    {
        $project = project::limit(6)->get();
        // dd($project);
        return view('index', compact('project'));
    }

    public function info()
    {
        $total = project::count();
        return view('dashboard', compact('total'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'nama' => 'required',
                'deskripsi' => 'required',
                'image' => 'required|mimes:png,jpg,jpeg|max:2048'
            ]);

            $file = $request->file('image');
            $extensi = $file->getClientOriginalExtension();
            $namafile = time() . '.' . $extensi;
            $file->move(public_path('image'), $namafile);

            project::create([
                'nama_project' => $request->nama,
                'deskripsi_project' => $request->deskripsi,
                'image' => $namafile
            ]);
            return redirect('/dashboard/table')->with('success', 'Project berhasil ditambahkan!');
        } catch (\Exception $th) {
            return redirect('/dashboard/table')->with('error', 'Gagal menambahkan project!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $project = project::findOrFail($id);
        return view('content.detail', compact('project'));
    }
    public function semua(project $project)
    {
        $project = project::all();
        return view('content.portofolio', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $project = project::findOrFail($id);
        return view('/edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg|max:2048'
        ]);
        $data = project::find($id);
        if ($request->hasFile('image')) {
            if ($data->image && file_exists(public_path('image/' . $data->image))) {
                unlink(public_path('image/' . $data->image));
            }
            $file = $request->file('image');
            $extensi = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $extensi;
            $file->move(public_path('image'), $fileName);
            $data->image = $fileName;
        }
        $data->nama_project = $request->nama;
        $data->deskripsi_project = $request->deskripsi;
        $data->save();
        return redirect('/dashboard/table');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        project::find($id)->delete();
        return redirect('/dashboard/table');
    }
}
