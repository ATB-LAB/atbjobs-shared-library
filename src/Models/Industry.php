<?php

namespace Alam\AtbjobsSharedLibrary\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Industry extends Model
{
    protected $connection='mysql';

    public $timestamps = true;

    protected $fillable = [
        'name',
        'parent',

    ];
    public function job()
    {
        return $this->hasMany(JobPost::class,'industry','id');
    }
    use HasFactory;
}
