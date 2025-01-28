<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class event_images extends Model
{
    public $table = "event_images";
    protected $fillable = [
        'event_id',
        'image'
    ];

    public function event(){
            $this->hasOne(Event::class,'event_id','event_id');
    }
}
