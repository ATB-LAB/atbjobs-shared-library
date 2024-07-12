<?php

namespace Alam\AtbjobsSharedLibrary\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class JobCustomQuestionAnswer extends Pivot
{
    use HasFactory;

    public $timestamps = true;
    protected $table = 'job_custom_question_answers';

    protected $fillable = [
        'id',
        'job_apply_info_id',
        'job_custom_question_id',
        'job_custom_question_option_id',
    ];

    public function jobCustomQuestionOption()
    {
        return $this->belongsTo(JobCustomQuestionOptions::class);
    }
}
