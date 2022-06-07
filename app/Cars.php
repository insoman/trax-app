<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    protected $fillable = ['year', 'make', 'model'];

    public function trips()
    {
        return $this->hasMany(Trips::class);
    }
}
