<div class="row">
    <div class="col-12 col-sm-4">
        {!! HTML::vtext('title', null, ['data-validation' => 'required']) !!}
    </div>
    <div class="col-12 col-sm-4">
        {!! HTML::vselect('teacher_id', ['' => 'Select Teacher'] + $teacher, null, [ 'label' => 'Teacher', 'data-validation' => 'required']) !!}
    </div>
    <div class="col-12 col-sm-4">
        {!! HTML::vselect('subject', ['' => 'Select Subject'] + $subjects, null, [ 'label' => 'Subject', 'data-validation' => 'required']) !!}
    </div>
</div>
<div class="row">
    <div class="col-12 col-sm-4">
        {!! HTML::vtext('start_time', null, ['label' => 'Batch Start Time', 'data-validation' => 'required', 'class' => 'form-control timepicker']) !!}
    </div>
    <div class="col-12 col-sm-4">
        {!! HTML::vtext('end_time', null, ['label' => 'Batch End Time', 'data-validation' => 'required', 'class' => 'form-control timepicker']) !!}
    </div>
</div>
