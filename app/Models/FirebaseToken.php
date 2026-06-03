<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FirebaseToken extends Model
{
    protected $fillable = [
        'user_id',
        'token',
        'device_id',
    ];

    protected $hidden = [
        'user_id',
        'token',
        'device_id',
        'created_at',
        'updated_at',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
