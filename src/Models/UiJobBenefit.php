<?php

namespace Alam\AtbjobsSharedLibrary\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UiJobBenefit extends Model
{
    protected $connection='mysql';
    protected $fillable = [
        'id',
        'benefit_option_id',
        'title',
        'total_job',
        'image',
        'priority',
    ];

    public function benefitOption()
    {
        return $this->hasOne(BenefitOption::class,'id','benefit_option_id');
    }
    use HasFactory;
}
