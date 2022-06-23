<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Favourite extends Model
{
    protected $table = 'favourites';

    public $timestamps=false;

    public function user() {
        return $this->belongsTo('App\Model\User');
    }

    public function contenent() {
        return $this->belongsTo('App\Model\Contenent');
    }
}
?>
