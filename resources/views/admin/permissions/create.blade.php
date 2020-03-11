@extends('layouts.master')

@section('pageBar')
    <ul class="breadcrumb">
        <li class="breadcrumb-item text-capitalize">
            <h3>Permissions</h3>
        </li>
        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="#">Permissions</a></li>
    </ul>
@stop

@section('content')

    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-white">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-8 col-sm-8 col-md-8">
                            <h3 class="panel-title text-capitalize">Permission Master</h3> </div>
                        <div class="col-xs-4 col-sm-4 col-md-4">
                            <a href="#panel-1" class="pull-right" data-toggle="collapse"> <i class="fa fa-angle-down fa-lg gray"></i> </a>
                        </div>
                    </div>
                </div>
                <div id="panel-1" class="collapse in">
                    <div class="panel-body">
                        {!! HTML::vselect('department', $department_select  , null) !!}
                        <div id="designationPanel">
                            @include('admin.permissions.designation')
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div id="menuPanel">
                @include('admin.permissions.menu')
            </div>
        </div>
    </div>

@stop

@section('script')
<script>
    $(document).ready(function(){
        $('.permission-menu').addClass('active');

        $('body').on('change', '#department', function(){

            pageLoader();

            $.get('{{route('admin.departments.viewDesignation')}}', {'department' : $('#department').val() }, function(res){
                $('#designationPanel').html(res);
                removePageLoader();
                $('body #designation').trigger('change');
            });

        });

        $('body').on('change', '#designation', function(){

            pageLoader();
            var content = $(this).data('content');

            $.get('{{route('admin.departments.viewMenu')}}', {'designation' : $('#designation').val() }, function(res){
                $(content).html(res);
                removePageLoader();
            });

        });

        $('body').on('submit', '#assignPermission', function (e) {
            e.preventDefault();
            pageLoader()
            $.post($(this).attr('action'), $(this).serialize(), function (res) {
                successAlert('successfully updated');
                removePageLoader();
            });

        });

    });
</script>
@stop