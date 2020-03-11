<div class="row">
	<div class="col-4">
		{!! HTML::vtext('name', null, ['label' => 'School Name', 'data-validation' => '
        required']) !!}
	</div>
	<div class="col-4">
		{!! HTML::vemail('email', null, ['label' => 'School Emial', 'data-validation' => '
        email']) !!}
	</div>
	<div class="col-4">
		{!! HTML::vpassword('password', ['data-validation' => '
        required']) !!}
	</div>
</div>
<div class="row">
	<div class="col-4">
		{!! HTML::vtext('mobile_no', null, ['label' => 'Contact Number', 'data-validation' => '
        required']) !!}
	</div>
	<div class="col-4">
		{!! HTML::vtext('address', null, ['label' => 'Address', 'data-validation' => '
        required']) !!}
	</div>
	<div class="col-4">
		<div class="form-group">
			@include('admin.permissions.permissions')
		</div>
	</div>
</div>
<div class="row">
	<div class="col-12">
		<button class="btn btn-primary">Save</button>
		{{-- <a href="javascript:void(0);" data-clearid="#mainPanel" class="btn btn-danger close-add-more">Close</a> --}}
	</div>
</div>