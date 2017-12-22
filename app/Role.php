<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
        'display_role','descripcion',
    ];


    public function user(){

        //return $this->hasOne(User::class);//Un Rol tiene un usuario

    }


}
