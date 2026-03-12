<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class verifyToken extends Model
{
    protected $table = 'verify_tokens';
    protected $fillable = [
        'token',
        'email',
    ];
    public $timestamps = false;
}
