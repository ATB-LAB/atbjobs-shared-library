<?php

namespace Alam\AtbjobsSharedLibrary\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


use Illuminate\Database\Eloquent\Casts\Attribute;


class CandidateType extends Model
{
    protected $connection='mysql';

    public $timestamps = true;

    protected $fillable = [
        'name',

    ];


    use HasFactory;
}
