<?php

namespace Alam\AtbjobsSharedLibrary\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidateProjectPicture extends Model
{
    protected $connection='mysql';
    protected $fillable = [
        'id',
        'project_picture_link',
        'project_id'
    ];

    //protected $primaryKey = 'candidate_id';
    public $incrementing = false;


    public function User()
    {
        return $this->belongsTo(User::class);
    }
    public function project()
    {
        return $this->belongsTo(CandidateProject::class,'project_id','id');
    }
    use HasFactory;
}
