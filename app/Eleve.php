<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Eleve extends Model
{
    protected $fillable = ['class_id', 'workplace_id', 'name'];

    public function classe(){
        return $this->belongsTo("App\Classe");
    }
    public function workplace(){
        return $this->belongsTo("App\Workplace");
    }
}
