<?php

namespace Alam\AtbjobsSharedLibrary\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivityLog extends Model
{
    use HasFactory;
    protected $connection='mysql';

    public $timestamps = true;

    protected $fillable = [
        'user_id',
        'user_role_id',
        'job_post_id',
        'user_name',
        'page_title',
        'page_url',
        'action_type',
        'ip',
        'platform',
        'user_agent',
    ];
}
