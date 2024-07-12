<?php

namespace Alam\AtbjobsSharedLibrary\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployerDepartment extends Model
{
    use HasFactory;
    protected $connection='mysql';

    protected $fillable = [
        'employer_id',
        'department_id',
    ];

    public function department()
    {
        return $this->hasOne(Department::class,'id','department_id');
    }
}
