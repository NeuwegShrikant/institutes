<div class="row">
	<div class="col-4">
		{!! HTML::vtext('name', null, ['label' => 'Institute Name', 'data-validation' => 'required']) !!}
	</div>
	<div class="col-4">
		{!! HTML::vtext('owner_name', null, [ 'label' => 'Owner Name', 'data-validation' => 'required']) !!}
	</div>
	<div class="col-4">
		{!! HTML::vtext('mobile_no', null, [ 'label' => 'Mobile Number', 'data-validation' => 'required']) !!}
	</div>
</div>
<div class="row">
	<div class="col-4">
		{!! HTML::vemail('email', null, ['data-validation' => 'email']) !!}
	</div>
	<div class="col-4">
		@if(isset($model))
			{!! HTML::vpassword('password', ['placeholder' => '********' ]) !!}
		@else
			{!! HTML::vpassword('password', [ 'data-validation' => 'required', 'placeholder' => '*******']) !!}
		@endif
	</div>
	<div class="col-4">
		@if(isset($model))
			{!! HTML::vimage('image', ['label' => 'Logo']) !!}
		@else
			{!! HTML::vimage('image', ['label' => 'Logo']) !!}
		@endif
	</div>

</div>
<div class="row">
	<div class="col-4">
		{!! HTML::vtextarea('address', null, [ 'label' => 'Address', 'data-validation' => 'required']) !!}
	</div>
</div>
