<?php

namespace Alam\AtbjobsSharedLibrary\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidatePreferredDistrict extends Model
{
    use HasFactory;
    protected $connection='mysql';
    protected $table = 'candidate_preferred_districts';
    public $timestamps = true;

    protected $fillable = [
        'id',
        'candidate_id',
        'district_id',
    ];
}