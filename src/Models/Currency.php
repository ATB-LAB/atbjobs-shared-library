<?php

namespace Alam\AtbjobsSharedLibrary\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    protected $connection='mysql';

    public $timestamps = true;
    public static $CURRENCY_NAME = [
        'DOLLAR' => 83,
        'TAKA' => 248,
        'YEN' => 276,
    ];
    protected $fillable = [
        'name',
        'short_form',
        'symbol',

    ];
    use HasFactory;
}
