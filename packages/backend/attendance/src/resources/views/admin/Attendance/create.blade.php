
@extends('layouts.master')

@section('pageBar')
    <div class="kt-subheader__main">
        <h3 class="kt-subheader__title"> Attendance </h3>
        <span class="kt-subheader__separator kt-hidden"></span>
        <div class="kt-subheader__breadcrumbs">
            <a href="{{ route('home') }}" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
            <span class="kt-subheader__breadcrumbs-separator"></span>
            <span class="kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link--active">Create New</span>
        </div>
    </div>
@stop

@section('content')

    <div class="kt-portlet kt-portlet--mobile">

        <div class="kt-portlet__body">
            <div class="kt-section">
                <div class="kt-section__content">
                    {!! Form::open([ 'class' => '', 'route' => [ $repository->routeStore ], 'method' => 'POST', 'files' => true ]) !!}
                    @include( $repository->viewForm )

                    <div class="float-right kt-margin-t-15">
                        <a href="{{route( $repository->routeIndex )}}" class="btn btn-light active">
                            <i class="la la-arrow-left"></i>
                            Back
                        </a>
                        <button type="submit" class="btn btn-primary active">
                            <i class="la la-save"></i>
                            Save
                        </button>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

@stop
@section('script')
    <script>
        $(document).ready(function () {
            $('.attendance-menu').addClass('kt-menu__item--active');

            $('body').on('change', '#batch_id', function() {
                var url = "{{ route('admin.modules.attendances.studentList') }}?batchId="+$(this).val();
                var content = '#student-list';

                // refreshContentFromAjaxWithoutObject(url, '#contactPersonList', '');
                pageLoader();

                $.get(url, {isAjax:true}, function(data){

                    console.log(data);
                    $(content).html(data);
                    init();
                    removePageLoader();
                });
            });
        });
    </script>
@stop
