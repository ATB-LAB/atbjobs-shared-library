<?php

namespace Alam\AtbjobsSharedLibrary\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidateSavedJob extends Model
{
    protected $connection='mysql';
    protected $fillable = [
        'id',
        'candidate_id',
        'job_post_id'
    ];

    use HasFactory;
}
