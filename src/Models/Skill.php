<?php

namespace Alam\AtbjobsSharedLibrary\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $connection='mysql';


    public $timestamps = true;


    protected $fillable = [
        'id',
        'user_id',
        'skill_name'
    ];

    public function User()
    {
        return $this->belongsTo(User::class);
    }

    use HasFactory;
}
