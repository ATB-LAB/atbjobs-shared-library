<?php

namespace Alam\AtbjobsSharedLibrary\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidateProject extends Model
{
    protected $connection='mysql';

    public $timestamps = true;

    protected $fillable = [
        'id',
        'candidate_id',
        'title',
        'description',
        'candidate_experience_id',
        'start_date',
        'end_date',
        'currently_working',
        'project_url',
    ];
    public function candidate(){
        return $this->belongsTo(Candidate::class,'candidate_id');
    }
    public function projectPictures(){
        return $this->hasMany(CandidateProjectPicture::class,'project_id','id');
    }
    public function employment(){
        return $this->hasOne(CandidateExperience::class,'id','candidate_experience_id');
    }


    use HasFactory;
}
