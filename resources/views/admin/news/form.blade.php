<div class="row">
	<div class="col-6">
		{!! HTML::vselect('category', ['' => 'Select Category'] + $newsCategories,  null, ['label' => 'News Category', 'data-validation' => '
        required']) !!}
	</div>
	<div class="col-6">
		{!! HTML::vtext('title', null, ['label' => 'News Title', 'data-validation' => '
        required']) !!}
	</div>
	
</div>
<div class="row">
	<div class="col-6">
		{!! HTML::vimage('image', ['label' => 'Image']) !!}
	</div>
	
</div>
<div class="row">
	<div class="col-12">
		{!! HTML::vtextarea('description', null, ['label' => 'News Description', 'class' => 'form-control editor']) !!}
	</div>
</div>
<div class="row">
	<div class="col-12">
		<button class="btn btn-primary">Save</button>
		{{-- <a href="javascript:void(0);" data-clearid="#mainPanel" class="btn btn-danger close-add-more">Close</a> --}}
	</div>
</div>