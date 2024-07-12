<?php

namespace Alam\AtbjobsSharedLibrary\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use App\Http\Controllers\Traits\MessageAccessible;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable, MessageAccessible;

    public $timestamps = true;
    public static $USER_TYPE = [
        'ADMIN' => 1,
        'CANDIDATE' => 2,
        'EMPLOYER' => 3,
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'display_name',
        'email',
        'contact_number',
        'password',
        'user_role_id',
        'platform',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function candidate()
    {
        return $this->hasOne(Candidate::class);
    }
    public function employer()
    {
        return $this->hasOne(Employer::class);
    }
    public function jobPost()
    {
        return $this->hasMany(JobPost::class,'post_id');
    }

}
