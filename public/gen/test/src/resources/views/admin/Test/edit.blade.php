<div class="kt-portlet__body">
    <div class="kt-section">
        <div class="kt-section__content">
            {{ Form::model($model, ['route' => [ $repository->routeUpdate , $model->id ], 'method' => 'put', 'files' => true, 'class' => '' ] ) }}
            @include( $repository->viewForm )
            {{ Form::close() }}
        </div>
    </div>
</div>
