<?php

namespace Alam\AtbjobsSharedLibrary\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialNetwork extends Model
{
    protected $connection='mysql';


    public $timestamps = true;



    protected $fillable = [
        'id',
        'name',
    ];

    public function User()
    {
        return $this->belongsTo(User::class);
    }

    public function socialNetwork()
    {
        return $this->belongsTo(CandidateSocialNetwork::class);
    }


    use HasFactory;
}
