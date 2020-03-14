<?php

namespace Backend\Classes\App;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
	protected $table = 'classes';

    protected $fillable = ['title', 'tag'];
}
