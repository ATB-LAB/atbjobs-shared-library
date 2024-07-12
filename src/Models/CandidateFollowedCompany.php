<?php

namespace Alam\AtbjobsSharedLibrary\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidateFollowedCompany extends Model
{
    protected $connection='mysql';

    public $timestamps = true;


    protected $fillable = [
        'candidate_id',
        'employer_id',
    ];

    public $incrementing = false;

//    public function candidates()
//    {
//        return $this->hasMany(Candidate::class,'candidate_id','id');
//    }
//    public function employers()
//    {
//        return $this->hasMany(Employer::class,'employer_id','id');
//    }
    use HasFactory;
}
