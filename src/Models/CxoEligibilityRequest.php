<?php

namespace Alam\AtbjobsSharedLibrary\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class CxoEligibilityRequest extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $connection='mysql';
    public $timestamps = true;

    protected $fillable = [
        'candidate_id',
        'job_id',
        'status',
        'cover_letter_id',
        'candidate_resume_id'
    ];
    protected $primaryKey = 'id';
}
