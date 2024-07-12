<?php

namespace Alam\AtbjobsSharedLibrary\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployerSpecialization extends Model
{
    protected $connection='mysql';
    protected $fillable = [
        'id',
        'name',
        'created_at',
        'updated_at'
    ];
//    public function employer()
//    {
//        return $this->belongsTo(Employer::class);
//    }
    use HasFactory;
}
