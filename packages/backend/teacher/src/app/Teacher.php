<?php

namespace Backend\Teacher\App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $table = 'users';
    protected $fillable = [
        'name',
        'owner_name',
        'email',
        'password',
        'mobile_no',
        'image',
        'address',
    ];
}
