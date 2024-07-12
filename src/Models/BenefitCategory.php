<?php

namespace Alam\AtbjobsSharedLibrary\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BenefitCategory extends Model
{
    protected $connection='mysql';

    public $timestamps = true;

    protected $fillable = [
        'id',
        'title',
        'category_icon',
        'parent',
        'status',
    ];
    use HasFactory;

    public function benefitCategory()
    {
        return $this->hasOne(BenefitCategory::class, 'parent');
    }
}
