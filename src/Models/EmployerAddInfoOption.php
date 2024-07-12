<?php

namespace Alam\AtbjobsSharedLibrary\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployerAddInfoOption extends Model
{
    protected $connection='mysql';

    public $timestamps = true;

    protected $fillable = [
        'id',
        'title',
        'employer_add_info_category_id',
    ];
    public function category(){
        return $this->belongsTo(EmployerAddInfoCategory::class,'employer_add_info_category_id','id');
    }
    use HasFactory;
}
