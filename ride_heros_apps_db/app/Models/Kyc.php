<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kyc extends Model
{
    use HasFactory;
    protected $guarded = [];

    // Kyc belongs to a user ((Driver))
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
