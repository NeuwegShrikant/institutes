<div class="row">
    <div class="col-12 col-sm-6">
        {!! HTML::vselect('month', ['' => 'Select Fee Month'] + $months, null, [ 'label' => 'Fee Month', 'data-validation' => 'required']) !!}
    </div>
    <div class="col-12 col-sm-6">
        {!! HTML::vselect('batch_id', ['' => 'Select Batch'] + $batches, null, [ 'label' => 'Batch', 'data-validation' => 'required']) !!}
    </div>
</div>
<div class="row" id="student-list">

</div>
