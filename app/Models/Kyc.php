<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kyc extends Model
{
    protected $fillable = [
        'user_id',
        'nagrita_number',
        'nagrita_front',
        'nagrita_back',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
