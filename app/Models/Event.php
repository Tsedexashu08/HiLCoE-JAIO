<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    
    protected $table = 'events';
    protected $fillable = [
        'title',
        'location',
        'description',
        'date',
        'registration_link',
    ];

    public function registrations()
    {
        return $this->hasMany(EventRegistration::class);
    }
    public function eventImages()
    {
        return $this->hasMany(event_images::class,'event_id');
    }
}
