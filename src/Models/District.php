<?php

namespace Alam\AtbjobsSharedLibrary\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;
    protected $connection='mysql';

    public $timestamps = true;

    protected $fillable = [
        'id',
        'name',
    ];
}
