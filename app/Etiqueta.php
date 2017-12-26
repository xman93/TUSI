<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etiqueta extends Model
{

    protected $fillable = [
        'nombre',
        'id_hecho'];

    public function hecho(){
        return $this->belongsTo(Hecho::class);
    }

}
