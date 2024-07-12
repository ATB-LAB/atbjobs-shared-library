<?php

namespace Alam\AtbjobsSharedLibrary\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidateCertification extends Model
{
    protected $connection='mysql';

    public $timestamps = true;

    protected $table = 'candidate_certifications';
    protected $fillable = [
        'id',
        'candidate_id',
        'name',
        'start',
        'end',
        'duration',
        'institute',
        'certificate_url',
        'description',
        'attachment'
    ];

    // protected $primaryKey = 'candidate_id';
    // public $incrementing = false;

    public function User()
    {
        return $this->belongsTo(User::class);
    }
    use HasFactory;
}
