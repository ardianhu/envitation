<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    use HasFactory;
    protected $fillable = [
        'tittle',
        'date',
        'story',
        'photo',
    ];
    public function invitation()
    {
        return $this->hasMany(Invitation::class);
    }
}
