<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'estudiante';

    protected $fillable = [
        'nombre',
        'apellido',
        'email',
        'pin',
    ];

    protected $hidden = [
        'pin',
    ];
}