{{ Form::open( [ 'class' => '', 'route' => ['admin.classes.store'], 'method' => 'POST', 'files' => true ]) }}
    @include('admin.masters.classes.form')
    <div class="row">
	    <div class="col-12">
	        <button class="btn btn-primary">
	            Save
	        </button>
	    </div>
	</div>
{{ Form::close() }}