<?php

namespace Alam\AtbjobsSharedLibrary\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployerIndustry extends Model
{
    use HasFactory;
    protected $connection='mysql';
    protected $table = 'employer_industries';
    protected $fillable = [
        'employer_id',
        'industry_id',
    ];

    public function industry()
    {
        return $this->hasOne(Industry::class,'id','industry_id');
    }
}
