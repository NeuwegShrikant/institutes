<?php

namespace Backend\Batch\App;

use Backend\Student\App\Student;
use Backend\Subject\App\Subject;
use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
    protected $guarded = [];

    public function setStartTimeAttribute( $value ) {
        $this->attributes['start_time'] = date('H:i:s', strtotime($value));
    }

    public function setEndTimeAttribute( $value ) {
        $this->attributes['end_time'] = date('H:i:s', strtotime($value));
    }

    public function studentsRel() {
        return $this->belongsToMany(Student::class, 'batch_student', 'batch_id', 'student_id');
    }
    public function subjectRel() {
        return $this->belongsTo(Subject::class, 'subject', 'tag');
    }
}
