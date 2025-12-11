<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class project extends Model
{
    protected $table = 'projects';
    // protected $filable =[
    //     'nama_project',
    //     'deskripsi_project',
    //     'image',
    // ];
    protected $guarded = ['id'];
}
