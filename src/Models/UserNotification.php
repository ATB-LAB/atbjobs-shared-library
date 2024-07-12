<?php

namespace Alam\AtbjobsSharedLibrary\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserNotification extends Model
{
    protected $connection='mysql';

    public $timestamps = true;

    protected $fillable = [
        'user_id',
        'title',
        'body',
        'read_status',
        'type',
    ];
    use HasFactory;

    public function toArray()
    {
        $array = parent::toArray();
        if ($this->title === 'Job Application Status Change') {
            $array['type'] = 1;
        } elseif ($this->title === 'Following Company new job post') {
            $array['type'] = 2;
        } elseif ($this->title === 'New Applicant') {
            $array['type'] = 3;
        }
        return $array;
    }
}
