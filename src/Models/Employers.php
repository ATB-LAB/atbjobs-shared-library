<?php

namespace Alam\AtbjobsSharedLibrary\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Employers extends Model
{
    protected $connection='mysql';

    public $timestamps = true;

    protected $fillable = [

        'user_id',
        'nickname',
        'first_name',
        'last_name',
        'desc',
        'contact',
        'profile_status',
        'profile_pic',
        'cover_pic',
        'headline',
        'web',
        'est',
        'nos',
        'intro',
        'video',
        'map_location',
        'map_lat',
        'map_long',
        'custom_location',
        'cand_is_search',
        'sub_offices',
        'medical_allowance',
        'new_openings',
        'total_offices',
        'wrc_ref_code',

    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    use HasFactory;
}
