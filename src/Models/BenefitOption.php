<?php

namespace Alam\AtbjobsSharedLibrary\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BenefitOption extends Model
{
    protected $connection='mysql';

    public $timestamps = true;

    protected $fillable = [
        'id',
        'title',
        'benefit_category_id',
        'status',
    ];
    public function category(){
        return $this->belongsTo(BenefitCategory::class,'benefit_category_id','id');
    }
    public function jobBenefitOptions(){
        return $this->hasOne(EmployerJobBenefit::class,'benefit_option_id','id');
    }
    use HasFactory;
}
