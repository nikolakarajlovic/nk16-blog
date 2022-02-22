<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teams extends Model
{
    use HasFactory;



    public function players()
    {
        return $this->hasMany(players::class, 'team_id');
    }
    
}
