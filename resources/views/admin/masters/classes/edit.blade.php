{!! Form::model($model, ['route' => [ 'admin.classes.update', $vendor->id, $model->id ], 'method' => 'put', 'files' => true ] ) !!}
@include('admin.masters.classes.form')
{!!  Form::close() !!}