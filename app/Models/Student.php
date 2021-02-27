<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{

    use SoftDeletes;
    // protected $table = 'namaTabelDb';
    // protected $table = 'students';

    //$guarded : tidak diperbolehkan mengisi field tsb
    //$fillable : diperbolehkan mengisi field tsb
    protected $fillable = ['nama', 'nrm', 'email', 'jurusan'];

}
