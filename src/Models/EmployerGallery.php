<?php

namespace Alam\AtbjobsSharedLibrary\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployerGallery extends Model
{
    use HasFactory;
    protected $connection='mysql';
    protected $table = 'employer_galleries';

    public $timestamps = true;

    protected $fillable = [
        'id',
        'employer_id',
        'title',
        'url'
    ];
}
