<?php

namespace Alam\AtbjobsSharedLibrary\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidateVideo extends Model
{
    protected $connection='mysql';
    protected $fillable = [
        'candidate_id',
        'candidate_portfolio_video_link',
        'candidate_intro_video_link'
    ];

    protected $primaryKey = 'candidate_id';
    public $incrementing = false;


    public function User()
    {
        return $this->belongsTo(User::class);
    }
    use HasFactory;
}
