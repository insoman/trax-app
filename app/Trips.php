<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trips extends Model
{
    protected $fillable = ['date', 'miles', 'total', 'cars_id'];

    public function cars()
    {
        return $this->belongsTo(Cars::class);
    }
}
