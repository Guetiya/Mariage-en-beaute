<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posteo extends Model
{
    protected $fillable = ['name', 'email', 'message', 'avatarpath'];

    protected $nullable = ['avatarPath'];
}
