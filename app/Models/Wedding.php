<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Wedding extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

    protected $connection = 'app';
    protected $guarded = [];

    public function song()
    {
        return $this->belongsTo(Song::class, 'song_id', 'id');
    }

    public function digital_gifts()
    {
        return $this->hasMany(WeddingDigitalGift::class, 'wedding_id', 'id');
    }

    public function galleries()
    {
        return $this->hasMany(WeddingGallery::class, 'wedding_id', 'id');
    }

    public function participants()
    {
        return $this->hasMany(WeddingParticipant::class, 'wedding_id', 'id');
    }

    public function love_stories()
    {
        return $this->hasMany(WeddingLoveStory::class, 'wedding_id', 'id');
    }

    public function invitation()
    {
        return $this->morphOne(Invitation::class, 'invitable');
    }

    public function greetings()
    {
        return $this->hasMany(WeddingGreeting::class, 'wedding_id', 'id');
    }
}
