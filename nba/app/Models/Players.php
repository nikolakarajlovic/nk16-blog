<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Players extends Model
{
    use HasFactory;

    public function teams()
    {
        return $this->belongsTo(Teams::class,'id');
    }
}
