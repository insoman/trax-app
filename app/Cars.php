<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    public function trips()
    {
        return $this->hasMany(Trips::class);
    }
}
