<?php

namespace Alam\AtbjobsSharedLibrary\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidateSkill extends Model
{
    use HasFactory;
    protected $connection='mysql';
    protected $fillable = [
        'candidate_id',
        'skill_id',
        'year_of_experience'
    ];

   public function candidate()
   {
       return $this->hasOne(Candidate::class,'id','candidate_id');
   }
   public function Skill()
   {
       return $this->hasMany(Skill::class);
   }
}
