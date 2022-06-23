<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contenent extends Model
{
    protected $table = 'contenents';

    public $timestamps=false;

    public function favourite() {
        return $this->hasMany('App\Model\Favourites');
    }
}
?>
