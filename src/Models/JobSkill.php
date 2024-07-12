<?php

namespace Alam\AtbjobsSharedLibrary\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JobSkill extends Model
{
    use HasFactory, SoftDeletes; 
    protected $fillable = [
        'job_post_id',
        'skill_id',
        'year_of_experience',
    ];

    public function jobPost()
    {
        return $this->belongsTo(JobPost::class);
    }

    public function skill()
    {
        return $this->belongsTo(Skill::class);
    }
}