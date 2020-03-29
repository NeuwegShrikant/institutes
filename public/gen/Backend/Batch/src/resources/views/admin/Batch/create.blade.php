<div class="kt-portlet__body">
    <div class="kt-section">
        <div class="kt-section__content">
            {!! Form::open([ 'class' => '', 'route' => [ $repository->routeStore ], 'method' => 'POST', 'files' => true ]) !!}
                @include( $repository->viewForm )
            {!! Form::close() !!}
        </div>
    </div>
</div>
