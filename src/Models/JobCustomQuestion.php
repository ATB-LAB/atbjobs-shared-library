<?php

namespace Alam\AtbjobsSharedLibrary\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobCustomQuestion extends Model
{
    public $timestamps = true;

    protected $fillable = [
        'id',
        'job_post_id',
        'question',
        'order',
    ];
    use HasFactory;

    public function options()
    {
        return $this->hasMany(JobCustomQuestionOptions::class);
    }

    public function jobApplyInfo()
    {
        return $this->belongsToMany(JobApplyInfo::class,'job_custom_question_answers','job_custom_question_id','job_apply_info_id');
    }

    public function jobPost()
    {
        return $this->belongsTo(JobPost::class,'job_post_id','post_id');
    }
}
