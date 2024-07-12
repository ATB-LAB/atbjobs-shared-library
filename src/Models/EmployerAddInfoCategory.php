<?php

namespace Alam\AtbjobsSharedLibrary\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployerAddInfoCategory extends Model
{
    protected $connection='mysql';

    public $timestamps = true;

    protected $fillable = [
        'id',
        'title',
    ];
    use HasFactory;
}
