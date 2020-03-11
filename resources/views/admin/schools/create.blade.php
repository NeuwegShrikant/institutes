@extends('layouts.master')

@section('pageBar')
    <div class="kt-subheader__breadcrumbs">
        <a href="#" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
        <span class="kt-subheader__breadcrumbs-separator"></span>
        <a href="" class="kt-subheader__breadcrumbs-link">
            Dashboard </a>
        <span class="kt-subheader__breadcrumbs-separator"></span>
        <a href="" class="kt-subheader__breadcrumbs-link">
            Add School </a>

        {{-- <span class="kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link--active">Active link</span> --}}
    </div>
@stop
@section('style')

@stop
@section('content')
<?php $role = 1; ?>
<div class="row">
    <div class="col-xl-12">
        <div class="kt-portlet form-area" id="mainPanel">
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
        </div>
    </div>
</div>
@stop

@section('script')
    <script>
        $(document).ready(function(){
            $('.school-menu').addClass('kt-menu__item--active');
        });
    </script>
@stop
