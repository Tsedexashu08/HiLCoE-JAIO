<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobListing extends Model
{
    protected $table = 'job_listings';
    protected $primarykey='job_id';
    protected $fillable = [
        'title',
        'type',
        'company_name',
        'logo',
        'location',
        'description',
        'category',
        'application_deadline',
    ];
}
