<?php

namespace Alam\AtbjobsSharedLibrary\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidateLevel extends Model
{
    protected $connection='mysql';

    public $timestamps = true;

    protected $fillable = [
        'id',
        'candidate_level_name',
    ];

    public function candidate(){
        return $this->hasOne(Candidate::class, "level", "id");
    }

    use HasFactory;
}
