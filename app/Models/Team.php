<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $fillable = [
      'name',
      'slug',
        'logo'
    ];

    protected $withCount = ['matches'];

    public function matches()
    {
        return $this->belongsToMany(Match::class,'participations')->withPivot('goals', 'is_home');

    }

    public function getPointsAttribute()
    {
        return $this->wins * 3 + $this->draws;
    }

    public function getWinsAttribute()
    {
        $winsCount = 0;
        $matches = $this->matches;
        foreach ($matches as $match){
            if($match->teams[0]->pivot->goals > $match->teams[1]->pivot->goals){
                $winsCount++;
            }
        }
        return $winsCount;
    }

    public function getLossesAttribute()
    {
        $lossesCount = 0;
        $matches = $this->matches;
        foreach ($matches as $match){
            if($match->teams[0]->pivot->goals < $match->teams[1]->pivot->goals){
                $lossesCount++;
            }
        }
    }

    public function getDrawsAttribute()
    {
        $drawsCount = 0;
        $matches = $this->matches;
        foreach ($matches as $match){
            if($match->teams[0]->pivot->goals === $match->teams[1]->pivot->goals){
                $drawsCount++;
            }
        }
        return $drawsCount;
    }

    public function getGoalsForAttribute()
    {
        return $this->matches->sum(function ($match){
            return $match->pivot->goals;
        });
    }

    public function getGoalsAgainstAttribute()
    {

    }

    public function getGoalsDifferenceAttribute()
    {
        return $this->getGoalsForAttribute() - $this->getGoalsAgainstAttribute();
    }

}
