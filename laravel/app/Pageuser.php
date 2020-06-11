<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pageuser extends Model
{
    protected $fillable = [
        'email', 'password','filename'
    ];
}
