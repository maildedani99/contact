<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    /**
     * Get the event that owns the pin.
     */
    public function event()
    {
        return $this->belongsTo('App\Event');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'media_url', 'event_id' , 'note'
    ];
}
