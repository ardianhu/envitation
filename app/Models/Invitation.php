<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invitation extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'theme_id',
        'gallery_id',
        'story_id',
        'title',
        'male',
        'female',
        'location',
        'location_coordinate',
        'date',
        'time',
        'url',
        'music',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function theme()
    {
        return $this->belongsTo(Theme::class);
    }
    public function gallery()
    {
        return $this->belongsTo(Gallery::class);
    }
    public function story()
    {
        return $this->belongsTo(Story::class);
    }
    public function commentar()
    {
        return $this->hasMany(Commentar::class);
    }
}
