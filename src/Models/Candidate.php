<?php

namespace Alam\AtbjobsSharedLibrary\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Cviebrock\EloquentSluggable\Sluggable;

class Candidate extends Model
{
    use Sluggable;
    use HasFactory;
    protected $connection='mysql';

    public $timestamps = true;

    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'profession',
        'intro',
        'dob',
        'martial_status',
        'birth_city',
        'profile_pic',
        'cover_pic',
        'candidate_email',
        'phone_no',
        'gender',
        'qualification',
        'profile_status',
        'profile_percent',
        'available_date',
        'address',
        'candidate_applied_jobs',
        'map_lat',
        'map_long',
        'viewed_resumes',
        'searching_for_job_status',
        'ref_code',
        'profile_strength_check',
        'level',
        'candidate_type',
        'salary_range',
        'salary_type',
        'salary_currency',
        'present_salary',
        'expected_salary',
        'candidate_profile_status',
        'candidate_education',
        'candidate_certification',
        'candidate_experience',
        'candidate_resume',
        'candidate_social_network',
        'candidate_video',
        'candidate_project_picture',
        'candidate_skill',
        'total_experience',
        'slug',
        'father_name',
        'mother_name',
        'nationality',
        'is_fresher',
        'religion',
        'current_location',
        'industry_id',
        'district_id'

    ];


    //protected $primaryKey = 'user_id';

    public $incrementing = false;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function candidateResume()
    {
        return $this->hasMany(CandidateResume::class);
    }
    public function candidateEducation()
    {
        return $this->hasMany(CandidateEducation::class);
    }
    public function candidateExperience()
    {
        return $this->hasMany(CandidateExperience::class);
    }
    public function coverLetters()
    {
        return $this->hasMany(CandidateCoverLetter::class);
    }
    public function certification()
    {
        return $this->hasMany(CandidateCertification::class);
    }


    public function appliedJobs()
    {
        return $this->belongsToMany(JobPost::class, 'job_apply_infos', "candidate_id", "job_post_id")->withPivot(['apply_date','candidate_resume_id','cover_letter_id','apply_status'])->orderBY('apply_date','DESC');
    }
    public function followEmployers()
    {
        return $this->belongsToMany(Employer::class, 'candidate_followed_companies', "candidate_id", "employer_id");
    }
    public function savedJobs()
    {
        return $this->belongsToMany(JobPost::class, 'candidate_saved_jobs', "candidate_id", "job_post_id");
    }
    public function skills()
    {
        return $this->belongsToMany(Skill::class, 'candidate_skills', "candidate_id", "skill_id")->withPivot(['year_of_experience','status']);
    }
    public function socialNetworks()
    {
        return $this->belongsToMany(SocialNetwork::class, 'candidate_social_networks', "candidate_id", "social_network_id")->withPivot('link','id');
    }

//    public function skill()
//    {
//        return $this->hasMany(CandidateSkill::class);
//
//    }

    public function candidateLevel(){
        return $this->hasOne(CandidateLevel::class, "id", "level");
    }
    public function candidateQualification(){
        return $this->hasOne(Qualification::class, "id", "qualification");
    }

    public function level(){
        return $this->hasOne(CandidateLevel::class, "id", "level");
    }
    public function qualification(){
        return $this->hasOne(Qualification::class, "id", "qualification");
    }

    public function candidateType(){
        return $this->hasOne(CandidateType::class, "id", "candidate_type");
    }
    public function salaryType(){
        return $this->hasOne(SalaryType::class, "id", "salary_type");
    }
    public function salaryCurrency(){
        return $this->hasOne(Currency::class, "id", "salary_currency");
    }

    public function followedCompany(){
        return $this->hasMany(CandidateFollowedCompany::class,'candidate_id','id');
    }
    public function projects(){
        return $this->hasMany(CandidateProject::class,'candidate_id','id');
    }
    public function candidateTypes()
    {
        return $this->belongsToMany(CandidateType::class, 'candidate_candidate_types', "candidate_id", "candidate_type_id")->withPivot('expected_salary','present_salary','salary_type_id','salary_currency');
    }
    public function candidateApplyInfo()
    {
        return $this->hasMany(JobApplyInfo::class, "candidate_id", "id");
    }
    public function candidateSalaryInfos()
    {
        return $this->hasMany(CandidateCandidateType::class, 'candidate_id', 'id');
    }

    public function savedByEmployer()
    {
        return $this->hasMany(WatchList::class, "candidate_id", "id");
    }
    public function languages()
    {
        return $this->hasMany(CandidateLanguage::class, "candidate_id", "id");
    }
    public function JobPreference(){
        return $this->hasOne(CandidateRecommendedJobInfo::class, "candidate_id", "id");
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'first_name'
            ]
        ];
    }
    public function references()
    {
        return $this->hasMany(CandidateReference::class, "candidate_id", "id");
    }
    public function candidateHobbies()
    {
        return $this->hasMany(CandidateHobby::class, "candidate_id", "id");
    }
    public function preferredOrganizationTypes()
    {
        return $this->belongsToMany(Industry::class, 'candidate_preferred_organization_types', "candidate_id", "industry_id");
    }
    public function preferredJobcategories()
    {
        return $this->belongsToMany(Department::class, 'candidate_preferred_job_categories', "candidate_id", "department_id");
    }
    public function preferredDistricts()
    {
        return $this->belongsToMany(District::class, 'candidate_preferred_districts', "candidate_id", "district_id");
    }
}
