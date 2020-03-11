<div class="panel panel-white">
    <div class="panel-heading">
        <div class="row">
            <div class="col-xs-8 col-sm-8 col-md-8">
                <h3 class="panel-title text-capitalize">Menus</h3> </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
                <a href="#panel-1" class="pull-right" data-toggle="collapse"> <i class="fa fa-angle-down fa-lg gray"></i> </a>
            </div>
        </div>
    </div>
    <div id="panel-1" class="collapse in">
        <div class="panel-body">
            {!! Form::open( [ 'route' => 'admin.departments.permission_store', 'method' => 'POST', 'files' => true, 'id' => 'assignPermission' ]) !!}
                <div class="permissionsList form-group">
                    @include('admin.permissions.permissions')
                </div>
                <button class="btn btn-primary btn-rounded" type="submit">Save</button>
            {!! Form::close() !!}
        </div>
    </div>
</div>