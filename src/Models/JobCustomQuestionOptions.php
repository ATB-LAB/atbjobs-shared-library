<?php

namespace Alam\AtbjobsSharedLibrary\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobCustomQuestionOptions extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'job_custom_question_id',
        'option',
    ];

    public function jobCustomQuestion()
    {
        return $this->belongsTo(JobCustomQuestion::class);
    }
}
