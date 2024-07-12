<?php

namespace Alam\AtbjobsSharedLibrary\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidateSocialNetwork extends Model
{
    protected $connection='mysql';
    protected $fillable = [
        'id',
        'candidate_id',
        'social_network_id',
        'link'
    ];

    // protected $primaryKey = 'candidate_id';
    // public $incrementing = false;

    public function User()
    {
        return $this->belongsTo(User::class);
    }

    public function SocialNetwork()
    {
        return $this->hasMany(SocialNetwork::class);
    }
    use HasFactory;
}
