<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Invitation extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

    protected $connection = 'app';

    protected $guarded = [];

    public function invitable()
    {
        return $this->morphTo("invitable");
    }

    public function theme()
    {
        return $this->belongsTo(Theme::class);
    }
}
