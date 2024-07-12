<?php

namespace Alam\AtbjobsSharedLibrary\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRoles extends Model
{
    protected $connection='mysql';
    protected $fillable = [
        'id',
        'role',
    ];

    public function User()
    {
        return $this->belongsTo(User::class);
    }

    use HasFactory;
}
