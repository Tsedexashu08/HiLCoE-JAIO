<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    
    protected $table = 'events';

    public function registrations()
    {
        return $this->hasMany(EventRegistration::class);
    }
}
