<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class appliedcareers extends Model
{
    protected $table = 'appliedcareers';

    protected $fillable = [
        'user_id',
        'job_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
