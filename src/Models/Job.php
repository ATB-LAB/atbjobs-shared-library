<?php

namespace Alam\AtbjobsSharedLibrary\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $jobs = [
        'job_deadline' =>'dateTime:m/d/Y',
    ];
    public $timestamps = true;

    use HasFactory;
}
