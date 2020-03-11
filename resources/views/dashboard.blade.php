
@extends('layouts.master')

@section('pageBar')
    <div class="kt-subheader__breadcrumbs">
        <a href="#" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
        <span class="kt-subheader__breadcrumbs-separator"></span>
        <a href="" class="kt-subheader__breadcrumbs-link">
            General </a>
        <span class="kt-subheader__breadcrumbs-separator"></span>
        <a href="" class="kt-subheader__breadcrumbs-link">
            Empty Page </a>

        {{-- <span class="kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link--active">Active link</span> --}}
    </div>
@stop
@section('content')
    <div class="row custom-dashboard">
        <div class="col-6 col-sm-3">
            <a href="javascript:void(0);">
                <div class="card p-3 bg-primary text-white">
                    <h1 class="text-light">5</h1>
                    <h5>Customers</h5>
                    <i class="flaticon-users-1 text-right h1"></i>
                </div>
            </a>
        </div>
        <div class="col-6 col-sm-3">
            <a href="javascript:void(0);">
                <div class="card p-3 bg-success text-white">
                    <h1 class="text-dark">5</h1>
                    <h5>Vendors</h5>
                    <i class="flaticon-users-1 text-right h1"></i>
                </div>
            </a>
        </div>
        <div class="col-6 col-sm-3">
            <a href="javascript:void(0);">
                <div class="card p-3 bg-info text-white">
                    <h1 class="text-light">5</h1>
                    <h5>Drivers</h5>
                    <i class="flaticon-users-1 text-right h1"></i>
                </div>
            </a>
        </div>
        <div class="col-6 col-sm-3">
            <a href="javascript:void(0);">
                <div class="card p-3 bg-dark text-white">
                    <h1 class="text-warning">2</h1>
                    <h5>Pending Bookings</h5>
                    <i class="flaticon-layers text-right h1"></i>
                </div>
            </a>
        </div>
    </div>
@stop
@section('script')
    <script>
        $(document).ready(function(){
            $('.home-menu').addClass('kt-menu__item--active');
        });
    </script>
@stop