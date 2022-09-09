<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usuarios_diesel extends Model
{
    use HasFactory;
    public $table = "usuarios_diesel";
    protected $primaryKey = 'id_usuario';
    protected $fillable = [
        "NOMBRE", "APELLIDO", "USUARIO", "PASS","PERMISO_DIESEL"
    ];

    public $timestamps = false;

}
