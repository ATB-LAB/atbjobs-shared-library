<?php

namespace Alam\AtbjobsSharedLibrary\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidatLevel extends Model
{
    protected $connection='mysql';

    public $timestamps = true;

    protected $fillable = [
        
        'candidate_level_name',
    ];

    use HasFactory;
}
