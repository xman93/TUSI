<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Hecho extends Model
{
    protected $fillable = ['titulo', 'descripcion', 'slug', 'status', 'user_id','curso_academico','fecha_hecho','etiquetas_id'];

    protected $hidden = [
        'nivel_autorizacion',
    ];

    public function etiquetas(){
        return $this->hasMany(Etiqueta::class);//Un Hecho tiene varias etiquetas

    }
}
