<?php

namespace Alam\AtbjobsSharedLibrary\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Cviebrock\EloquentSluggable\Sluggable;

class Employer extends Model
{
    use Sluggable;
    use HasFactory;
    protected $connection='mysql';

    public $timestamps = true;

    protected $fillable = [
        'id',
        'user_id',
        'nickname',
        'employer_name',
        'first_name',
        'last_name',
        'desc',
        'contact',
        'profile_status',
        'profile_pic',
        'organizational_structure_image',
        'cover_pic',
        'headline',
        'web',
        'specialization',
        'established',
        'number_of_employee',
        'intro',
        'video',
        'map_location',
        'map_lat',
        'map_long',
        'custom_location',
        'cand_is_search',
        'sub_offices',
        'medical_allowance',
        'posted_status',
        'posted_job',
        'new_openings',
        'viewed_resumes',
        'total_offices',
        'company_type',
        'district_id',
        'type_of_business',
        'wrc_ref_code',
        'created_at',
        'updated_at',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function jobPost()
    {
        return $this->hasMany(JobPost::class,'author_id','user_id');
    }
    public function publishedJobs()
    {
        return $this->jobPost()->where('job_status', 'published')->get();
    }

    public function candidateFollowCompany(){
        return $this->hasMany(CandidateFollowedCompany::class,'employer_id','id');
    }
    public function savedCandidates()
    {
        return $this->belongsToMany(Candidate::class, 'watch_lists', "employer_id", "candidate_id");
    }
    public function socialNetworks()
    {
        return $this->belongsToMany(SocialNetwork::class, 'employer_social_networks', "employer_id", "social_network_id")->withPivot('link','id');
    }
    // public function employerBenefits()
    // {
    //     return $this->belongsToMany(EmployerAddInfoOption::class, 'employer_benefits',"employer_id", "employer_add_info_option_id");
    // }
    public function employerBenefits()
    {
        return $this->hasMany(EmployerBenefit::class, 'employer_id','id');
    }
    public function employerDepartments()
    {
        return $this->hasMany(EmployerDepartment::class, 'employer_id','id');
    }
    public function employerIndustries()
    {
        return $this->hasMany(EmployerIndustry::class, 'employer_id','id');
    }
    public function employerGalleries()
    {
        return $this->hasMany(EmployerGallery::class, 'employer_id','id');
    }
    public function employerContents()
    {
        return $this->hasMany(EmployerContent::class, 'employer_id','id')->orderBy('employer_content_section_id');
    }
    public function employerLeaders()
    {
        return $this->hasMany(EmployerLeader::class, 'employer_id','id');
    }

    public function employerEmails()
    {
        return $this->hasMany(EmployerEmail::class, 'employer_id','id');
    }
    public function district()
    {
        return $this->hasOne(District::class, 'id','district_id');
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'employer_name'
            ]
        ];
    }
}
