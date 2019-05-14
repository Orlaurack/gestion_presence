<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    protected $fillable = ['name', ];

    public function eleve(){
        return $this->hasMany("App\Eleve");
    }
}
