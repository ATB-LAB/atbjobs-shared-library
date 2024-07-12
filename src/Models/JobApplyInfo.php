<?php

namespace Alam\AtbjobsSharedLibrary\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobApplyInfo extends Model
{

    protected $connection='mysql';
    protected $table = 'job_apply_infos';

    public const JOB_APPLIED    = 1;
    public const IN_REVIEW      = 2;
    public const REJECTED       = 3;
    public const SHORTLIST      = 4;
    public const INTERVIEW      = 5;
    public const SELECTED       = 6;
    public const HIRED          = 7;

    public $timestamps = true;

    protected $fillable = [
        'candidate_id',
        'job_post_id',
        'candidate_resume_id',
        'cover_letter_id',
        'cover_letter_unsaved',
        'apply_with',
        'apply_date',
        'apply_status',
        'platform'

    ];

    public function jobPosts()
    {
        return $this->belongsToMany(JobPost::class, 'job_apply_infos',"id", "job_post_id");
    }

    public function candidate()
    {
        return $this->belongsTo(Candidate::class);
    }

    public function candidates()
    {
        return $this->belongsToMany(Candidate::class, 'job_apply_infos',"id", "candidate_id")->withPivot(['candidate_resume_id','cover_letter_id','apply_status']);;
    }
    public function applidedResume()
    {
        return $this->hasOne(CandidateResume::class,'id','candidate_resume_id');
    }
    public function appliedCoverLetter()
    {
        return $this->hasOne(CandidateCoverLetter::class,'id','cover_letter_id');
    }
    public function applyStatus()
    {
        return $this->hasOne(ApplyStatus::class,'id','apply_status');
    }
    public function customQuestionAnswer()
    {
        return $this->hasMany(JobCustomQuestionAnswer::class,'job_apply_info_id','id');
    }

    public function jobCustomQuestion()
    {
        return $this->belongsToMany(JobCustomQuestion::class,'job_custom_question_answers','job_apply_info_id','job_custom_question_id')->using(JobCustomQuestionAnswer::class)->with('options')->withPivot('job_custom_question_option_id');
    }



    use HasFactory;
}
