<?php

namespace Alam\AtbjobsSharedLibrary\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidateResume extends Model
{
    protected $connection='mysql';

    public $timestamps = true;


    protected $fillable = [
        'id',
        'candidate_id',
        'resume_link',
        'resume_full_url',
        'resume_post_type',
        'resume_post_mime_type',

    ];




//    public $incrementing = false;

    public function candidate()
    {
        return $this->belongsTo(Candidate::class,'candidate_id','id');
    }
    use HasFactory;
}
