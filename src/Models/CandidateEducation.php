<?php

namespace Alam\AtbjobsSharedLibrary\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidateEducation extends Model
{
    protected $connection='mysql';

    public $timestamps = true;

    protected $table = 'candidate_educations';
    protected $fillable = [
        'id',
        'candidate_id',
        'degree_name',
        'degree_institute',
        'degree_start',
        'degree_end',
        'degree_percent',
        'degree_grade',
        'degree_detail',
        'major',
    ];


    //protected $primaryKey = 'candidate_id';
    // public $incrementing = false;

    public function candidate()
    {
        return $this->belongsTo(Candidate::class);
    }
    use HasFactory;
}
