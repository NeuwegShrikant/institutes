@extends('layouts.master')

@section('pageBar')
    <div class="kt-subheader__main">
        <h3 class="kt-subheader__title"> Teacher </h3>
        <span class="kt-subheader__separator kt-hidden"></span>
        <div class="kt-subheader__breadcrumbs">
            <a href="{{ route('home') }}" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
            <span class="kt-subheader__breadcrumbs-separator"></span>
            <span class="kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link--active">Teacher</span>
        </div>
    </div>
    <div class="kt-subheader__toolbar">
        <div class="kt-subheader__wrapper">
        	@if( checkAuth($permission, 'create') )
                <a
                    class="btn btn-label-primary btn-bold btn-sm btn-icon-h kt-margin-l-10"
                    href="{{ route( $repository->routeCreate ) }}"

                >Add New</a>
            @endif
        </div>
    </div>
@stop

@section('content')

    <div class="kt-portlet kt-portlet--mobile">

        <div class="kt-portlet__body">

            <!--begin: Datatable -->
            <table class="table datatable table-hover table-checkable">
                <thead>
                <tr>
                    <th>S.No.</th>
                    <th>Teacher Name</th>
                    <th>Email</th>
                    <th>Mobile Number</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach( $collection as $index => $model )
                    <tr>
                        <td> {{ $index+1 }} </td>
                        <td> {{ $model->name }} </td>
                        <td> {{ $model->email }} </td>
                        <td> {{ $model->mobile_no }} </td>
                        <td>

                            @if( checkAuth($permission, 'edit') )
                                <button
                                    data-id="#mainPanel"
                                    data-href="{{ route( $repository->routeEdit , $model->id) }}"
                                    class="btn-sm btn dataModel"
                                    data-title="Edit"
                                    type="button"
                                > <i class="la la-edit"></i>
                                </button>
                            @endif

                            @if( checkAuth($permission, 'destroy') )
                                <a href="{{route( $repository->routeDelete, $model->id)}}" class="btn-sm btn delete" > <i class="la la-trash"></i> </a>
                            @endif

                        </td>

                    </tr>
                @endforeach
                </tbody>
            </table>

            <!--end: Datatable -->
        </div>
    </div>

@stop
@section('script')
    <script>
        $(document).ready(function () {
            $('.teacher-menu').addClass('kt-menu__item--active');
        });
    </script>
@stop
