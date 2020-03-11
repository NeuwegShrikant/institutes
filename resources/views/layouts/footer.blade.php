</div>

<!-- end:: Content -->
</div>

<!-- begin:: Footer -->
<div class="kt-footer  kt-grid__item kt-grid kt-grid--desktop kt-grid--ver-desktop" id="kt_footer">
    <div class="kt-container  kt-container--fluid ">
        <div class="kt-footer__copyright">
            {{date('Y')}}&nbsp;&copy;&nbsp;<a href="http://neuweg.co.in/" target="_blank" class="kt-link">Neuweg</a>
        </div>
        <div class="kt-footer__menu">

        </div>
    </div>
</div>

<div class="modal fade" id="dataViewModel" style="display: none;">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content" style="margin-top:15%;">
            <div class="modal-header">
                <h5 class="modal-title" id="dataViewModelTitle"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">

            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="dataModel" style="display: none;">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="margin-top:15%;">
            <div class="modal-header">
                <h5 class="modal-title" id="dataModelTitle">Add New</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" data-dismiss="modal" type="button">
                    Close
                </button>
                <button class="btn btn-primary dataModelSubmit" type="button">
                    Save
                </button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="proficiencyModel" style="display: none;" >
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="margin-top:15%;">
            <div class="modal-header">
                <h5 class="modal-title" id="dataModelTitle">How well you are proficient in selected skill ?</h5>
                {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button> --}}
            </div>
            <div class="modal-body" style="margin-top: 5%;">

            </div>
            <div class="modal-footer">
                {{-- <span></span> --}}
                {{-- <button class="btn btn-secondary" data-dismiss="modal" type="button">
                    Close
                </button>
                <button class="btn btn-primary dataModelSubmit" type="button">
                    Save
                </button> --}}
            </div>
        </div>
    </div>
</div>

{{-- Auto complete search Ajax --}}
<div aria-labelledby="dataModel" class="modal fade" id="searchModel" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="margin-top:15%;">
            <div class="modal-header">
                <h5 class="modal-title" id="dataModelTitle">Search</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">

                <div class="kt-section__content kt-section__content--border kt-section__content--fit">

                    <div class="kt-spinner kt-spinner--sm kt-spinner--right kt-spinner--input">
                        <input type="text" class="form-control" placeholder="Search..." id="searchModelText" name="searchModelText" />
                    </div>

                    <ul class="kt-nav" id="searchModelContent">

                    </ul>

                </div>

            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" data-dismiss="modal" type="button">
                    Close
                </button>
                <button class="btn btn-primary" type="button" id="autoCompleteSearchAddNew">
                    Add New
                </button>
            </div>
        </div>
    </div>
</div>
{{-- ./ Auto complete search Ajax --}}

<!-- end:: Footer -->
</div>
</div>
</div>

<!-- end:: Page -->

<!-- begin::Scrolltop -->
<div id="kt_scrolltop" class="kt-scrolltop">
    <i class="fa fa-arrow-up"></i>
</div>

<!-- end::Scrolltop -->




<!-- begin::Global Config(global config for global JS sciprts) -->
<script>
    var KTAppOptions = {
        "colors": {
            "state": {
                "brand": "#5d78ff",
                "dark": "#282a3c",
                "light": "#ffffff",
                "primary": "#5867dd",
                "success": "#34bfa3",
                "info": "#36a3f7",
                "warning": "#ffb822",
                "danger": "#fd6754"
            },
            "base": {
                "label": [
                    "#c5cbe3",
                    "#a1a8c3",
                    "#3d4465",
                    "#3e4466"
                ],
                "shape": [
                    "#f0f3ff",
                    "#d9dffa",
                    "#afb4d4",
                    "#646c9a"
                ]
            }
        }
    };
</script>

<!-- end::Global Config -->

{{--<script src="{{ getMediaUrl('js/app.js') }}"></script>--}}

<!--begin::Global Theme Bundle(used by all pages) -->
<script src="{{ getMediaUrl('assets/plugins/global/plugins.bundle.js') }}" type="text/javascript"></script>
<script src="{{ getMediaUrl('assets/js/scripts.bundle.js') }}" type="text/javascript"></script>

<!--end::Global Theme Bundle -->

<!--begin::Page Vendors(used by this page) -->
<script src="{{ getMediaUrl('assets/plugins/custom/fullcalendar/fullcalendar.bundle.js') }}" type="text/javascript"></script>
{{--<script src="//maps.google.com/maps/api/js?key=AIzaSyBTGnKT7dt597vo9QgeQ7BFhvSRP4eiMSM" type="text/javascript"></script>--}}
<script src="{{ getMediaUrl('assets/plugins/custom/gmaps/gmaps.js') }}" type="text/javascript"></script>

<!--end::Page Vendors -->

<!--begin::Page Scripts(used by this page) -->
<script src="{{ getMediaUrl('assets/js/pages/dashboard.js') }}" type="text/javascript"></script>

<script src="{{ getMediaUrl('assets/plugins/custom/datatables/datatables.bundle.js') }}" type="text/javascript"></script>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.20/jquery.form-validator.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyDC6FU6iM6b6JyG_gHPWjGPfZXWoc1rlLc"></script>
<script>

    function showErrorMsg(msg) {
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": true,
            "progressBar": true,
            "positionClass": "toast-top-center",
            "preventDuplicates": true,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "1500",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        };

        toastr.error(msg, "Errors");
    }

    function showSuccessMsg(msg) {

        toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": true,
            "progressBar": true,
            "positionClass": "toast-top-center",
            "preventDuplicates": true,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "1500",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        };

        toastr.success(msg, "Success");


    }

    function pageLoader() {
        KTApp.blockPage({
            overlayColor: '#000000',
            type: 'v2',
            state: 'primary',
            message: 'Please wait...'
        });
    }

    function removePageLoader() {
        KTApp.unblockPage();
    }

    function setStates(countryId) {
        var dataUrl = '{{route('frontend.states.search')}}?country_id='+countryId;

        $('select[id=state]').select2({
            width: "off",
            ajax: {
                url: dataUrl,
                dataType: 'json',
                delay: 250,
                data: function(params) {
                    return {
                        q: params.term, // search term
                        page: params.page
                    };
                },
                processResults: function(data, page) {
                    return {
                        results: data.items
                    };
                },
                cache: true
            }
        });
        // $('#state').html('')
    }

    function setCities(stateId) {
        var dataUrl = '{{route('frontend.cities.search')}}?state_id='+stateId;

        $('select[id=city]').html('<option>Please select</option>').select2({
            width: "off",
            ajax: {
                url: dataUrl,
                dataType: 'json',
                delay: 250,
                data: function(params) {
                    return {
                        q: params.term, // search term
                        page: params.page
                    };
                },
                processResults: function(data, page) {
                    return {
                        results: data.items
                    };
                },
                cache: true
            }
        });
        // $('#city').html('')

    }
    function setSkills(category) {
        var dataUrl = '{{route('frontend.cities.skills')}}?category='+category;
        $('select[id=skills]').attr('multiple', true);
        $('select[id=skills]').html('<option>Please select</option>').select2({
            width: "off",
            ajax: {
                url: dataUrl,
                dataType: 'json',
                delay: 250,
                data: function(params) {
                    return {
                        q: params.term, // search term
                        page: params.page
                    };
                },
                processResults: function(data, page) {
                    return {
                        results: data.items
                    };
                },
                cache: true
            }
        });
        // $('#city').html('')

    }

    function refreshContentFromAjax(url, content, callback) {

        $.get(url, {isAjax:true}, function(data){

            //create jquery object from the response html
            var $response=$(data);

            //query the jq object for the values
            var dataToday = $response.find(content).html();
            $(content).html(dataToday);
            init();
            if( callback ) callback();

        });

    }

    function googleMapAutoComplete() {
        var acInputs = document.getElementsByClassName("autocomplete");

        for (var i = 0; i < acInputs.length; i++) {

            var autocomplete = new google.maps.places.Autocomplete(acInputs[i], { componentRestrictions: {country: 'in' } });
            autocomplete.inputId = acInputs[i].id;

            google.maps.event.addListener(autocomplete, 'place_changed', function () {
                // console.log('You used input with id ' + this.inputId);
            });
        }
    }

    function selectTabFunction() {

        $('body').on('change', '.select-tab', function () {
            $('.select-tabs').hide();
            $('.select-tab-'+ $(this).val()).show();
        });

        $('.select-tab').change();

    }

    function setMobileNoInputMask() {
        $(".mobile_input_mask").inputmask({
            "mask": "9999999999",
            placeholder: ""
        });

        $(".aggregate_mask").inputmask({
            "mask": "999",
            placeholder: ""
        });
    }
    function init() {

        selectTabFunction();

        setMobileNoInputMask();

        googleMapAutoComplete();

        $.validate();

        $('[data-toggle="tooltip"]').tooltip();

        $('body').on('input', '.upper-input', function(){
            $(this).val( $(this).val().toUpperCase() );
        });

        $('.upper-input').val (function () {
            return this.value.toUpperCase();
        })

        $('.custom-file-input').on('change',function(){
            var fileName = $(this).val();
            $(this).next('.custom-file-label').html(fileName);
        });

        $('.editor').summernote({
            height: 70
        });

        $('.datepicker').attr('readonly', 'readonly');
        $('.datepicker').datetimepicker({
            weekStart: 1,
            todayBtn:  1,
            autoclose: 1,
            todayHighlight: 1,
            startView: 2,
            minView: 2,
            forceParse: 0,
            format: 'dd-mm-yyyy',
            startDate : new Date()
        });
        $('.yearpicker').datetimepicker({
            format: "yyyy",
            startView: 'decade',
            minView: 'decade',
            viewSelect: 'decade',
            autoclose: true,
            endDate: '+0d',
        })

        $('.datepicker2, .yearpicker').attr('readonly', 'readonly');
        $('.datepicker2').datetimepicker({
            weekStart: 1,
            todayBtn:  1,
            autoclose: 1,
            todayHighlight: 1,
            startView: 2,
            minView: 2,
            forceParse: 0,
            format: 'dd-mm-yyyy'
        });


        $(".phone-10-digit").inputmask({mask:"9",repeat:10,greedy:!1});

        $('.select2-select').select2();

        // select 2 ajax
        $('.select2-ajaxselect').select2({
            width: "off",
            ajax: {
                url: $('.select2-ajaxselect').data('url'),
                dataType: 'json',
                delay: 250,
                data: function(params) {
                    return {
                        q: params.term, // search term
                        page: params.page
                    };
                },
                processResults: function(data, page) {
                    return {
                        results: data.items
                    };
                },
                cache: true
            }
        });

        $('body').on('click', '.delete', function (e) {

            var that = this;
            e.preventDefault();
            swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!',
                reverseButtons: true
            }).then(function(result){
                if (result.value) {

                    pageLoader();
                    window.location.href = $(that).closest('a').attr('href');
                    // result.dismiss can be 'cancel', 'overlay',
                    // 'close', and 'timer'
                }
            });

        });

        $('.switch-checkbox').on('change', function(){

            if( $(this).is(':checked') ) {
                $($(this).data('content')).show();
            } else {
                $($(this).data('content')).hide();
            }

        });

        $('.switch-checkbox').change();

        // setStates(101);

        $('body').on('change', '#state', function(){

            var val = $(this).val();

            setCities(val);

        });

        $('.data-table').dataTable().fnDestroy();
        $('.datatable').dataTable().fnDestroy();

        $('.data-table').DataTable({
            responsive: true
        });
        $('.datatable').DataTable({
            responsive: true
        });

    }

    function autoCompleteSearch() {
        // autoCompleteSearch

        $('body').on('click', '.autoCompleteSearch', function () {

            $('#searchModel').attr('data-href', $(this).attr('data-href'));
            $('#searchModel').attr('data-id', $(this).attr('data-id'));
            $('#searchModelContent').html('');

            $('#searchModel').modal('show');


        });

        $('body').on('input', '#searchModelText', function () {

            $('#searchModelText').parent().addClass('kt-spinner--brand');

            var url = $('#searchModel').attr('data-href');
            var data = {
                q: $(this).val()
            };
            $.get( url, data, function (res) {
                $('#searchModelText').parent().removeClass('kt-spinner--brand');
                $('#searchModelContent').html(res.html);
            })

            // kt-spinner--brand

        });

        $('.autoCompleteSearch').attr('readonly', 'readonly');

        $('body').on('click', '.autoCompleteSearchItem', function (e) {
            e.preventDefault();
            $('#searchModel').modal('hide');
            $( $('#searchModel').attr('data-id') ).val( $(this).attr('data-title') );
        });

        $('body').on('click', '#autoCompleteSearchAddNew', function (e) {
            e.preventDefault();
            $('#searchModel').modal('hide');
            $( $('#searchModel').attr('data-id') ).val( $('#searchModelText').val() );
            $('.autoCompleteSearch').removeClass('error').css('borderColor', '#e2e5ec').parent().find('span').remove();
            $('.autoCompleteSearch').removeClass('error').parent().removeClass('has-error').addClass('has-success');
            $('#searchModelText').val('');
        });



        $("#searchModel").on('shown.bs.modal', function(){
            $('#searchModelText').trigger('input');
            $(this).find('#searchModelText').focus();
        });

        // ./ autoCompleteSearch
    }

    function setFormTags( idName ) {
        new Tagify( document.getElementById( idName  ) );
    }

    $(document).ready(function () {


        @if (count($errors) > 0)
            var msg = '';
            @foreach ($errors->all() as $error)
                msg += '{{ $error }} <br />';
            @endforeach
            showErrorMsg(msg);
        @endif

        @if(\Session::has('success'))
            var msg1 = '{{ \Session::get('success') }}';
            {{ Session::forget('success') }}
            showSuccessMsg(msg1);
        @endif

        $('body').on('click', '.dataModel', function(e) {

            var url = $(this).data('href');
            var title = $(this).data('title');
            var type = $(this).data('type'); // modal-lg
            var tag = $(this).data('tag');

            pageLoader(); 

            $.get(url, function(res){

                if( type ) {
                    $('#dataModel .modal-dialog').addClass('modal-'+ type);

                }
                $('#dataModelTitle').text(title);
                $('#dataModel .modal-body').html(res);
                // $('.editor').summernote({
                //     height: 70
                // });

                removePageLoader();
                $('#dataModel').modal({backdrop: 'static', keyboard: false});
                $('#dataModel').modal('show');

                // if(tag) setFormTags(tag);

                init();

            });
        });

        $('body').on('click', '.dataModelSubmit', function () {
            var s = $(this).parent().parent().find('form').submit();
        });

        autoCompleteSearch();

        $('.data-table').DataTable({
            responsive: true
        });
        $('.datatable').DataTable({
            responsive: true
        });

        $('body').on('click', '.addMore', function(e) {
            e.preventDefault();

            var dataId = $(this).data('append');
            var contentId = $(this).data('content');

            $(contentId).append( $(dataId).html() );
        });

        $('body').on('click', '.remove', function(e) {
            e.preventDefault();
            $(this).parent().parent().remove();
        });

        $('body').on('change', '#surveyType', function() {
            var option = $( "#surveyType option:selected" ).val();
            if(option == "description") {
                $('#options').hide();
            } else {
                $('#description').hide();
            }

            $('#'+option).show();
        });

        // add more items
        $('body').on('click', '.add-more-items', function(e){

            e.preventDefault();
            var htmlContent = $($(this).attr('data-sample')).html();
            $($(this).attr('data-content')).append(htmlContent);
            googleMapAutoComplete();

        });

        $('body').on('click', '.remove-item', function(e){
            e.preventDefault();

            var ele = $(this).closest('.row');
            swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!',
                reverseButtons: true
            }).then(function(result){
                if (result.value) {
                    ele.remove();
                }
            });

        });

        $('body').on('click', '.showAddPanel', function(e) {
            e.preventDefault();

            var panelID = $(this).data('panel');

            $(panelID).show('slow');

        });

        $('body').on('click', '.closePanel', function(e) {
            e.preventDefault();

            var panelID = $(this).data('panel');

            $(panelID).hide('slow');
        });

        $('body').on('keyup', '.textInputSingle', function(e) {
            e.preventDefault();

            var keycode = (e.keyCode ? e.keyCode : e.which);

            var tag = $(this).val();
            var content = $(this).data('list');
            var tagListId = $(this).data('addtag');
            var htmlTag = '';
            var inputName = $(this).data('inputname');
            var tagArr = [];
            if($('.tag-label').length) {
                $('.tag-label').each(function() {
                    tagArr.push($(this).data('tag').toLowerCase());
                    console.log(tagArr);
                });
            }
            if(keycode == '13') {

                if(tagArr.includes(tag.toLowerCase())) return false;

                htmlTag += '<label class="tag-label" data-tag="'+ tag +'"> '+ tag +'<input type="hidden" name="'+ inputName +'" value="'+ tag +'" /><i class="la la-check"></i></label>';
                $(tagListId).append(htmlTag);

                $('.tag-list').hide();
                return false;
            }

            if(tag.length >= 3) {

                $.get($(this).data('url'), {isAjax:true, q: tag}, function(data){

                    //create jquery object from the response html
                    // var $response=$(data);
                    // console.log(data.length);
                    var html = '';
                    if(data.length != 0) {
                        for(i = 0; i < data.items.length; i++) {
                            html += '<li class="list-item-single">'+ data.items[i].text +'</li>';
                        }
                    }

                    $(content).html(html);
                    $(content).parent().show();
                    //query the jq object for the values
                });
            } else {
                $('.tag-list').hide();
            }
        });

        $('body').on('click', '.list-item-single', function(e) {
            e.preventDefault();
            $(this).parent().parent().parent().find('.textInputSingle, .textInputSkillProficiency').val($(this).text());
            $(this).parent().parent().parent().find('.textInputSingle, .textInputSkillProficiency').focus();
            $('.tag-list').hide();
        });
        $('body').on('click', '.tag-label', function(e) {
            e.preventDefault();
            $(this).remove();
        });
        // $('.test').closest('.row').length;
        // ./ add more items

        $('body').on('keypress', '.only-text', function(event) {
            return (event.charCode == 32 || event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123);
        });
        $('body').on('submit', '.ajax-form-submit', function(e){

            e.preventDefault();

            pageLoader();
            $.post($(this).attr('action'), $(this).serialize(), function(res){
                removePageLoader();
                if(res.status) {
                    showSuccessMsg(res.msg);
                } else {
                    showErrorMsg(res.msg);
                }

            });

        });
        $('body').on('click', '.filterModel', function () {
            var contentId = $(this).attr('data-content');
            $(contentId).slideToggle();
        });

        $('body').on('click', '.clearFilterModel', function () {
            var contentId = $(this).attr('data-content');

            $(contentId+' form').trigger('reset')

            var content = $(this).attr('data-refresh');
            console.log(content);
            $.get($(this).attr('data-url'), {'isAjax':true}, function(data){

                //create jquery object from the response html
                var $response=$(data);
                //query the jq object for the values
                var dataToday = $response.find(content).html();

                console.log(dataToday);

                $(content).html(dataToday);
                $(contentId).slideUp();
                // initFancyBox();
                removePageLoader();

            });

        });
        init();

    });
</script>

@yield('script')

<!--end::Page Scripts -->
</body>

<!-- end::Body -->
</html>
