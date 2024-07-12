<?php

namespace Alam\AtbjobsSharedLibrary\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployerBenefit extends Model
{
    protected $connection='mysql';
    protected $fillable = [
        'id',
        'employer_id',
        'employer_add_info_category_id',
        'employer_add_info_option_id'
    ];

    public function employerBenefitOptions()
    {
        return $this->hasOne(EmployerAddInfoOption::class,'id','employer_add_info_option_id');
    }
    public function employerBenefitCategories()
    {
        return $this->hasOne(EmployerAddInfoCategory::class,'id','employer_add_info_category_id');
    }
    use HasFactory;
}
