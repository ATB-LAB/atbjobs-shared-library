<?php

namespace Alam\AtbjobsSharedLibrary\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidatePreferredJobCategory extends Model
{
    use HasFactory;
    protected $connection='mysql';
    protected $table = 'candidate_preferred_job_categories';

    public $timestamps = true;

    protected $fillable = [
        'id',
        'candidate_id',
        'department_id',
    ];
}