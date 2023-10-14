<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commentar extends Model
{
    use HasFactory;
    protected $fillable = [
        'invitation_id',
        'name',
        'commentar',
        'confirmation',
    ];
    public function invitation()
    {
        return $this->belongsTo(Invitation::class);
    }
}
