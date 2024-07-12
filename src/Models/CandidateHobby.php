<?php

namespace Alam\AtbjobsSharedLibrary\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidateHobby extends Model
{
    use HasFactory;
    protected $connection='mysql';
    protected $table = 'candidate_hobbies';

    public $timestamps = true;

    protected $fillable = [
        'id',
        'candidate_id',
        'hobby',
        'description',
    ];
}
