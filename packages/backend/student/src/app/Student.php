<?php

namespace Backend\Student\App;

use Backend\Batch\App\Batch;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['name', 'dob', 'mobile_no', 'image'];

    public function setDobAttribute( $value ) {
        $this->attributes['dob'] = date('Y-m-d', strtotime($value));
    }

    public function batchesRel() {
        return $this->belongsToMany(Batch::class, 'batch_student', 'student_id', 'batch_id');
    }
}
