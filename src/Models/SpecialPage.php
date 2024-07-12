<?php

namespace Alam\AtbjobsSharedLibrary\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpecialPage extends Model
{
    use HasFactory;
    protected $connection='mysql';
    public $timestamps = true;

    protected $fillable = [
        'id',
        'route_name',
        'header_text',
        'footer_text', 'body_background_image',
        'header_background_image',
        'body_background_image',
        'footer_background_image',
        'param',
    ];
}
