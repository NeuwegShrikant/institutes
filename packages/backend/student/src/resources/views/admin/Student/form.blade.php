<div class="row">
    <div class="col-12 col-sm-4">
        {!! HTML::vtext('name', null, ['data-validation' => 'required']) !!}
    </div>
    <div class="col-12 col-sm-4">
        {!! HTML::vtext('mobile_no', null, ['label' => 'Mobile Number', 'data-validation' => 'required', 'class' => 'form-control phone-10-digit']) !!}
    </div>
    <div class="col-12 col-sm-4">
        {!! HTML::vtext('dob', null, ['label' => 'DOB', 'data-validation' => 'required', 'class' => 'form-control datepicker2']) !!}
    </div>
</div>
<div class="row">
    <div class="col-12 col-sm-4">
        {!! HTML::vselect('batch_id[]', ['' => 'Select Batch'] + $batches, null, [ 'label' => 'Batch', 'data-validation' => 'required']) !!}
    </div>
    <div class="col-12 col-sm-2">
        {!! HTML::vtext('fee[]', null, ['label' => 'Fee Amount', 'data-validation' => 'required']) !!}
    </div>
</div>
