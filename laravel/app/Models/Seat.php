<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    use HasFactory;

    protected $fillable = [
        "user_id",
        "content",
        "time"
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
