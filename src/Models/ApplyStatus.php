<?php

namespace Alam\AtbjobsSharedLibrary\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplyStatus extends Model
{
    protected $connection='mysql';
    protected $table = 'apply_status';

    public $timestamps = true;

    protected $fillable = [
        'id',
        'name',
    ];
    use HasFactory;
}
