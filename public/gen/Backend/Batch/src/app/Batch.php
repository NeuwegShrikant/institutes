<?php

namespace Backend\Batch\App;

use Backend\Student\App\Student;
use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
    protected $guarded = [];

    public function studentsRel() {
        return $this->belongsToMany(Student::class, 'batch_student');
    }
}
