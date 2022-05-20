<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiosusuarios extends Model
{
    protected $table = 'estudiosusuarios';
    protected $fillable = ['usuario_id', 'estudio_id', 'estatus', 'file'];
}
