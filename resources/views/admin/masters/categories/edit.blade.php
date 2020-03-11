{!! Form::model($model, ['route' => [ 'admin.categories.update', $model->id ], 'method' => 'put', 'files' => true ] ) !!}
@include('admin.masters.categories.form')
{!!  Form::close() !!}