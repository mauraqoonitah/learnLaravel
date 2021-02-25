<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    // protected $table = 'namaTabelDb';
    // protected $table = 'students';

    //$guarded : tidak diperbolehkan mengisi field tsb
    //$fillable : diperbolehkan mengisi field tsb
    protected $fillable = ['nama', 'nrm', 'email', 'jurusan'];

}
