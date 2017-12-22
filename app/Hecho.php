<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Hecho extends Model
{
    protected $fillable = ['titulo', 'descripcion', 'slug', 'status', 'user_id','curso_academico','fecha_hecho','nivel_autorizacion','etiquetas_id'];
}
