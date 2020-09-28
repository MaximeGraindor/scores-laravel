<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    use HasFactory;

    public function matches()
    {
        return $this->belongsToMany(Match::class, 'participations')->withPivot('created_at', 'updated_at');
    }
}
