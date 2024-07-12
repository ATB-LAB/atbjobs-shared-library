<?php

namespace Alam\AtbjobsSharedLibrary\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Qualification extends Model
{
    protected $connection='mysql';
    protected $fillable = [
       'name'
    ];

    public function candidates(){
        return $this->hasMany(Candidate::class, "qualification", "id");
    }
    use HasFactory;
}
