<?php

namespace Alam\AtbjobsSharedLibrary\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidateRecommendedJobInfo extends Model
{
    use HasFactory;
    protected $connection='mysql';

    public $timestamps = true;

    protected $fillable = [
        'id',
        'candidate_id',
        'designation',
        'expected_salary',
        'candidate_type_id',
        'currency_id',
        'district_id',
    ];
    public function currency(){
        return $this->hasOne(Currency::class,'id','currency_id');
    }
    public function CandidateType(){
        return $this->hasOne(CandidateType::class,'id','candidate_type_id');
    }
    public function district(){
        return $this->hasOne(District::class,'id','district_id');
    }
}
