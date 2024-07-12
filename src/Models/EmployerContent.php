<?php

namespace Alam\AtbjobsSharedLibrary\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployerContent extends Model
{
    use HasFactory;
    protected $connection='mysql';

    public $timestamps = true;

    protected $fillable = [
        'id',
        'employer_id',
        'employer_content_section_id',
        'align',
        'description',
        'url'
    ];

    public function employerContentSections()
    {
        return $this->hasOne(EmployerContentSection::class, 'id','employer_content_section_id');
    }
}
