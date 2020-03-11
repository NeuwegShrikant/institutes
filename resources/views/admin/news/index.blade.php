@extends('layouts.master')

@section('pageBar')
    <div class="kt-subheader__breadcrumbs">
        <a href="#" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
        <span class="kt-subheader__breadcrumbs-separator"></span>
        <a href="" class="kt-subheader__breadcrumbs-link">
            Dashboard </a>
        <span class="kt-subheader__breadcrumbs-separator"></span>
        <span class="kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link--active">News</span>
    </div>
@stop
@section('style')

@stop
@section('content')

<div class="row">
    <div class="col-xl-12">
        <div class="kt-portlet form-area" id="mainPanel">
            
        </div>
        <!--begin::Portlet-->
        <div class="kt-portlet">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                        News
                    </h3>
                </div>
                <div class="kt-portlet__head-toolbar">
                    <div class="dropdown dropdown-inline">
                        <a class="btn btn-brand btn-icon-sm"
                            href="{{ route('admin.news.create') }}" >
                            <i class="flaticon2-plus"></i> Add New
                        </a>
                        
                    </div>
                </div>
            </div>
            <div class="kt-portlet__body">
                <div class="kt-section">
                    
                    <div class="kt-section__content">

                        <div class="row">
                            {{-- <div style="border-right:1px solid lightgrey;" class="col-4 px-4">
                                @include('admin.masters.classes.create')
                            </div> --}}
                            <div class="col-12 ajax-collection">
                                
                                <table class="data-table table table-bordered table-sm">
                                    <thead class="thead-light">
                                        <tr>
                                            <th width="10%">#</th>
                                            <th> News Title </th>
                                            <th> Status </th>
                                            <th width="15%">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if(!count($collection))
                                            <tr>
                                                <td colspan="14" align="center"> No Record Found.</td>
                                            </tr>
                                        @else 
                                            @foreach( $collection as $model )
                                            <tr>
                                                <td> {{ $model->id }} </td>
                                                <td> {{ $model->title }} </td>
                                                <td> {{ $model->status }} </td>
                                                <td>
                                                @if(isSuperAdmin())
                                                    <a
                                                        href="{{ route('admin.news.delete', $model->id) }}"
                                                        class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill delete"
                                                        title="Delete"
                                                    >
                                                        <i class="la la-trash"></i>
                                                    </a>
                                                @endif
                                                </td>
                                            </tr>
                                            @endforeach
                                        @endif
                                    </tbody>
                                </table>
                                {{-- {{ $collection->appends(array_merge(request()->all(), ['isAjax' => 1]))->links() }} --}}
                            </div>
                        </div>

                        
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
            $('.news-menu').addClass('kt-menu__item--active');
        });
    </script>
@stop