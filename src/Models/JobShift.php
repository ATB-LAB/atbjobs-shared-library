<?php

namespace Alam\AtbjobsSharedLibrary\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


use Illuminate\Database\Eloquent\Casts\Attribute;


class JobShift extends Model
{
    protected $connection='mysql';

    public $timestamps = true;

    protected $fillable = [
        'id',
        'name',
        'created_at',
        'updated_at'
    ];

    use HasFactory;
}
