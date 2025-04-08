<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $Guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function phrase()
    {
        return $this->belongsTo(Phrase::class);
    }
}
