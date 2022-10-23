<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserService extends Model
{
    use HasFactory;

    protected $fillable =[
        'user_id',
        'type_id',
        'token',
        'url',
        'programming_lang_id',
        'subscription_id',
    ];
}
