<?php

namespace Alam\AtbjobsSharedLibrary\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidateLanguage extends Model
{
    use HasFactory;
    protected $connection='mysql';

    public $timestamps = true;

    protected $fillable = [
        'id',
        'candidate_id',
        'language_id',
        'proficiency',
    ];

    public function language(){
        return $this->hasOne(Language::class, "id", "language_id");
    }
}
