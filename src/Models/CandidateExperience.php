<?php

namespace Alam\AtbjobsSharedLibrary\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidateExperience extends Model
{
    use HasFactory;
    protected $connection='mysql';

    public $timestamps = true;

    protected $fillable = [
        'id',
        'candidate_id',
        'organization_name',
        'role',
        'start_date',
        'end_date',
        'work_experience',
        'technology',
        'organization_desc',
        'currently_working',
        'candidate_type_id',
        'industry_id',
        'department_id',
        'company_location',
        'candidate_work_type',

    ];



    // protected $primaryKey = 'candidate_id';
    // public $incrementing = false;

    public function candidate()
    {
        return $this->belongsTo(Candidate::class);
    }
    public function department(){
        return $this->hasOne(Department::class, "id", "department_id");
    }
    public function industry(){
        return $this->hasOne(Industry::class, "id", "industry_id");
    }
    public function candidateType(){
        return $this->hasOne(CandidateType::class, "id", "candidate_type_id");
    }
}
