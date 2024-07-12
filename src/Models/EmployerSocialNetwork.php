<?php

namespace Alam\AtbjobsSharedLibrary\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployerSocialNetwork extends Model
{
    protected $connection='mysql';
    protected $fillable = [
        'id',
        'employer_id',
        'social_network_id',
        'link',
    ];
    use HasFactory;
}
