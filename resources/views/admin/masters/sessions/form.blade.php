
<div class="row">
    <div class="col-md-12">
        {!! HTML::vtext('start_year',  null, ['label' => 'Start Year', 'data-validation' => '
        required' ]) !!}
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        {!! HTML::vtext('end_year',  null, ['label' => 'End Year', 'data-validation' => '
        required' ]) !!}
    </div>

</div>
<div class="row">
	<div class="col-md-8">
		<div class="form-group">
			<label>	{!! Form::checkbox('is_current', '1', null, []) !!} Check As Current Session</label>
		</div>
	</div>
</div>


            

    