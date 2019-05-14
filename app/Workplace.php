<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Workplace extends Model
{
    protected $fillable = ['site_id', 'name'];

    public function site(){
        return $this->belongsTo("App\Site");
    }
    public function eleve(){
        return $this->hasMany("App\Eleve");
    }
}
