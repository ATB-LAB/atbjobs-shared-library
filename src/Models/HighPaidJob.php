<?php

namespace Alam\AtbjobsSharedLibrary\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HighPaidJob extends Model
{
    protected $connection='mysql';

    public $timestamps = true;

    protected $fillable = [
        'id',
        'job_post_id',
        'job_title',
        'employer_name',
        'employer_image',
        'minimum_salary',
        'maximum_salary',
        'salary_currency_name',
        'employer_id',
        'salary_type',
        'job_post_date',
        'job_deadline',
    ];

    public function jobPost(){
        return $this->belongsTo(JobPost::class,'job_post_id','post_id');
    }
    use HasFactory;
}
