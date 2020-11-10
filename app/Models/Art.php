<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Art extends Model
{
    protected $table = 'arts';
    public function image()
    {
        return $this->hasOne('App\Models\ArtImage');
    }
}
