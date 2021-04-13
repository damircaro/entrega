<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesional extends Model
{
    protected $fillablev= ['nrodocumento','nombre','apellido','habilida','salario','disponible'];
    use HasFactory;
}
