<div class="kt-portlet__head">
    <div class="kt-portlet__head-label">
        <h3 class="kt-portlet__head-title">
            Ceate New
        </h3>
    </div>
</div>
<div class="kt-portlet__body">
    <div class="kt-section">
        <div class="kt-section__content">
            {!! Form::open([ 'class' => '', 'route' => ['admin.schools.store'], 'method' => 'POST', 'files' => true ]) !!}
                @include('admin.schools.form')
            {!! Form::close() !!}
        </div>
    </div>
</div>