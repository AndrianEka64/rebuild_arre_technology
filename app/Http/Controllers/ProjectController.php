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
        return view('welcome', compact('project'));
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
                'image' => 'required|array|min:1',
                'image.*' => 'image|mimes:png,jpg,jpeg|max:2048',
                'link' => 'required|url',
            ]);
            $images = [];
            foreach ($request->file('image') as $index => $file) {
                $extensi = $file->getClientOriginalExtension();
                $namafile = time() . '_' . $index . '.' . $extensi;
                $file->move(public_path('image'), $namafile);
                $images[] = $namafile;
            }
            // $file = $request->file('image');
            // $extensi = $file->getClientOriginalExtension();
            // $namafile = time() . '.' . $extensi;
            // $file->move(public_path('image'), $namafile);

            project::create([
                'nama_project' => $request->nama,
                'deskripsi_project' => $request->deskripsi,
                'image' => json_encode($images),
                'link_project' => $request->link
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
        try {
            $request->validate([
                'nama' => 'required',
                'deskripsi' => 'required',
                'image' => 'nullable',
                'image.*' => 'mimes:png,jpg,jpeg|max:2048',
                'link' => 'required|url',
            ]);
            $data = project::find($id);
            $imageold = $data->image ? json_decode($data->image, true) : [];
            $images = $imageold;
            if ($request->hasFile('image')) {
                foreach ($request->file('image') as $index => $file) {
                    if (isset($images[$index]) && file_exists(public_path('image/' . $images[$index]))) {
                        unlink(public_path('image/' . $images[$index]));
                    }
                    $fileName = time() . '_' . $index . '.' . $file->getClientOriginalExtension();
                    $file->move(public_path('image'), $fileName);
                    $images[$index] = $fileName;
                }
            }
            $data->nama_project = $request->nama;
            $data->deskripsi_project = $request->deskripsi;
            $data->link_project = $request->link;
            $data->image = json_encode(array_values($images));
            $data->save();
            return redirect('/dashboard/table')->with('success', 'Project berhasil diupdate!');
        } catch (\Exception $th) {
            return redirect('/dashboard/table')->with('error', 'Project gagal diupdate!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        project::find($id)->delete();
        return redirect('/dashboard/table');
    }
    public function hapusgambar($id, $index)
    {
        $data = project::find($id);
        $images = $data->image ? json_decode($data->image, true) : [];
        if (isset($images[$index])) {
            if (file_exists(public_path('image/' . $images[$index]))) {
                unlink(public_path('image/' . $images[$index]));
            }
            unset($images[$index]);
            $data->image = json_encode(array_values($images));
            $data->save();
        }
        return redirect('/dashboard/table')->with('success', 'Gambar berhasil dihapus!');
    }
}
