<?php

namespace Alam\AtbjobsSharedLibrary\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployerEmail extends Model
{
    protected $connection='mysql';
    protected $table = 'employer_emails';

    public $timestamps = true;

    protected $fillable = [
        'id',
        'employer_id',
        'email',
    ];
    use HasFactory;
}
