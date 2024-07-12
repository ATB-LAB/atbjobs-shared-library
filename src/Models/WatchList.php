<?php

namespace Alam\AtbjobsSharedLibrary\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WatchList extends Model
{
    protected $connection='mysql';


    public $timestamps = true;

    protected $fillable = [
        'employer_id',
        'candidate_id',
    ];
    public function employer()
    {
        return $this->belongsTo(Employer::class,'employer_id','id');
    }
    use HasFactory;
}
