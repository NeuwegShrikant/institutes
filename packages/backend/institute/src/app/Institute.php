<?php

namespace Backend\Institute\App;

use Illuminate\Database\Eloquent\Model;

class Institute extends Model
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
