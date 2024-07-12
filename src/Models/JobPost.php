<?php

namespace Alam\AtbjobsSharedLibrary\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Casts\Attribute;


class JobPost extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $connection='mysql';
    public static $SIMILAR_JOB_RANDOM_NUMBER = 3;
    public $timestamps = true;
    public static $JOB_STATUS = [
        'PUBLISHED' => 'published',
        'EXPIRED'=> 'expired',
        'DRAFT'=> 'draft'
    ];
    protected $fillable = [

        'author_id',
        'post_date',
        'post_content',
        'post_title',
        'post_status',
        'comment_status',
        'ping_status',
        'post_name',
        'post_modified',
        'guid',
        'gender',
        'post_type',
        'post_mime_type',
        'comment_count',
        'job_deadline',
        'job_posts',
        'job_address',
        'job_lat',
        'job_long',
        'job_status',
        'job_type',
        'job_level',
        'job_shift',
        'job_title',
        'job_benefit',
        'minimum_salary',
        'maximum_salary',
        'job_skill',
        'industry',
        'qualification',
        'head_hunting',
        'position',
        'department',
        'job_currency',
        'job_description',
        'job_requirement',
        'salary_range',
        'salary_type',
        'question',
        'district_id',
        'salary_currency',
        'qualification_prefer',
        'remotely_work',
        'number_of_vacancy',
        'minimum_experience',
        'maximum_experience',
        'negotiable',
        'not_specific',
        'age_from',
        'age_to',
        'is_cxo',
    ];
    protected $primaryKey = 'post_id';

    public function employer()
    {
        return $this->hasOne(Employer::class,'user_id','author_id');
    }
    public function user()
    {
        return $this->hasOne(User::class,'id','author_id');
    }
    public function questions()
    {
        return $this->hasMany(JobCustomQuestion::class,'job_post_id','post_id');
    }
    public function candidates(){
        return $this->belongsToMany(Candidate::class, 'job_apply_infos',"job_post_id", "candidate_id")->withPivot(['candidate_resume_id','cover_letter_id','apply_status'])->orderBy('created_at','DESC');
    }
    public function candidatesWithResume(){
        return $this->belongsToMany(Candidate::class, 'job_apply_infos',"job_post_id", "candidate_id")->whereNotNull('job_apply_infos.candidate_resume_id');
    }

    public function industry()
    {
        return $this->hasOne(Industry::class,'id','industry');
    }
    public function department()
    {
        return $this->hasOne(Department::class,'id','department');
    }
    public function position()
    {
        return $this->hasOne(Position::class,'id','position');
    }
    public function jobType()
    {
        return $this->hasOne(CandidateType::class,'id','job_type');
    }
    public function jobShift()
    {
        return $this->hasOne(JobShift::class,'id','job_shift');
    }
    public function jobLevel()
    {
        return $this->hasOne(CandidateLevel::class,'id','job_level');
    }
    public function qualification()
    {
        return $this->hasOne(Qualification::class,'id','qualification');
    }
    public function qualificationPrefer()
    {
        return $this->hasOne(Qualification::class,'id','qualification_prefer');
    }
    public function salaryCurrency()
    {
        return $this->hasOne(Currency::class,'id','salary_currency');
    }
    public function salaryType()
    {
        return $this->hasOne(SalaryType::class,'id','salary_type');
    }

    public function benefits(){
        return $this->hasMany(EmployerJobBenefit::class,'job_post_id','post_id');
    }
    public function district()
    {
        return $this->hasOne(District::class,'id','district_id');
    }
    public function skills()
    {
        return $this->hasMany(JobSkill::class,'job_post_id','post_id')->whereNull('deleted_at');
    }
}
