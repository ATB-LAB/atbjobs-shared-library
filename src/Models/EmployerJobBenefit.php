<?php

namespace Alam\AtbjobsSharedLibrary\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployerJobBenefit extends Model
{
    protected $connection='mysql';

    public $timestamps = true;

    protected $fillable = [
        'id',
        'employer_id',
        'job_post_id',
        'benefit_option_id',
        'benefit_category_id',
    ];
    public function jobBenefitOptions()
    {
        return $this->hasOne(BenefitOption::class,'id','benefit_option_id');
    }
    public function jobBenefitCategories()
    {
        return $this->hasOne(BenefitCategory::class,'id','benefit_category_id');
    }
    use HasFactory;
}
