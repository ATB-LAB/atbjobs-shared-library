<?php

namespace Alam\AtbjobsSharedLibrary\Models;

use App\Http\Controllers\Traits\MessageStatus;
use App\Http\Controllers\Traits\QueryMessages;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use MessageStatus, QueryMessages; 

    protected $fillable = [
        'from_id', 'to_id','content', 'attachment', 'state', 'root_id'
    ];

    /**
     * Get the conversation Messages
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    // public function conversation()
    // {
    //     return $this->hasMany(Message::class, 'root_id');
    // }

    /**
     * Get the parent of a message
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    // public function root()
    // {
    //     return $this->belongsTo(Message::class, 'root_id', 'id');
    // }

    /**
     * Create a new instance of message
     *
     * @param Message $message
     * @return static
     */
    public static function copyFrom(Message $message)
    {
        return new static([
            'content' => $message->content,
            'attachment' => $message->attachment,
            'from_id' => $message->from_id,
            'created_at' => $message->created_at,
            'updated_at' => $message->updated_at,
            'state' => $message->state,
        ]);
    }
}
