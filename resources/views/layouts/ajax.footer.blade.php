


</div> <!-- container -->

</div> <!-- content -->

<!-- Footer Start -->
<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
            &copy; Copyright {{ date('Y') }} by Recruiter Portal. Powered by Neuweg Technologies Pvt. Ltd.
            </div>
        </div>
    </div>
</footer>
<!-- end Footer -->

</div>

<!-- ============================================================== -->
<!-- End Page content -->
<!-- ============================================================== -->


</div>
<!-- END wrapper -->

<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>


<div aria-labelledby="dataModel" class="modal fade" id="dataModel" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="margin-top:15%;">
            <div class="modal-header">
                <h5 class="modal-title" id="dataModelTitle">Add New</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <button class="btn btn-sm btn-outline-secondary" data-dismiss="modal" type="button">
                    Close
                </button>
                <button class="btn btn-sm btn-primary dataModelSubmit" type="button">
                    Submit & save <i class="las la-arrow-right ml-3 "></i>
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Vendor js -->
<script src="{{ getMediaUrl('assets/js/vendor.min.js') }}"></script>

<script src="{{ getMediaUrl('assets/libs/switchery/switchery.min.js') }}"></script>

<!-- third party js -->
<script src="{{ getMediaUrl('assets/libs/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ getMediaUrl('assets/libs/datatables/dataTables.bootstrap4.js') }}"></script>
<script src="{{ getMediaUrl('assets/libs/datatables/dataTables.responsive.min.js') }}"></script>
<script src="{{ getMediaUrl('assets/libs/datatables/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ getMediaUrl('assets/libs/datatables/dataTables.buttons.min.js') }}"></script>
<script src="{{ getMediaUrl('assets/libs/datatables/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ getMediaUrl('assets/libs/datatables/buttons.html5.min.js') }}"></script>
<script src="{{ getMediaUrl('assets/libs/datatables/buttons.flash.min.js') }}"></script>
<script src="{{ getMediaUrl('assets/libs/datatables/buttons.print.min.js') }}"></script>
<script src="{{ getMediaUrl('assets/libs/datatables/dataTables.keyTable.min.js') }}"></script>
<script src="{{ getMediaUrl('assets/libs/datatables/dataTables.select.min.js') }}"></script>
<script src="{{ getMediaUrl('assets/libs/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ getMediaUrl('assets/libs/pdfmake/vfs_fonts.js') }}"></script>
<!-- third party js ends -->

<!-- Datatables init -->
<script src="{{ getMediaUrl('assets/js/pages/datatables.init.js') }}"></script>

<!-- App js -->
<script src="{{ getMediaUrl('assets/js/app.min.js') }}"></script>
<script src="{{ getMediaUrl('assets/libs/select2/select2.min.js') }}"></script>
<script src="{{ getMediaUrl('assets/libs/summernote/summernote-bs4.min.js') }}"></script>
<script src="{{ getMediaUrl('assets/libs/jquery-toast/jquery.toast.min.js') }}"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.20/jquery.form-validator.min.js"></script>

<script src="{{ getMediaUrl('assets/libs/flatpickr/flatpickr.min.js') }}"></script>

<!-- Sweet Alerts js -->
<script src="{{ getMediaUrl('assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.4/jquery.fancybox.min.js"></script>

<script>
        $(window).on('load', function () {
            $('#pre-loader').delay(0).fadeOut('slow');
        });

        function initFancyBox() {
            $(".light-image").fancybox();
        }

        function showErrorMsg(msg) {
            $.toast({
                heading: 'Error',
                showHideTransition: 'slide',
                icon: 'error',
                text: msg,
                allowToastClose: false,
                position: 'top-center',
            });
        }

        function showSuccessMsg(msg) {

            $.toast({
                heading: 'Success',
                text: msg,
                showHideTransition: 'slide',
                icon: 'success',
                allowToastClose: false,
                position: 'top-center',
            })
        }

        function inlinePageLoader(){
            document.getElementById("PreLoaderBar").style.display = "block";
        }

        function removeInlinePageLoader() {
            document.getElementById("PreLoaderBar").style.display = "none";
        }

        function pageLoader() {
            $('#pre-loader').delay(0).fadeIn('slow');
        }

        function removePageLoader() {
            $('#pre-loader').delay(0).fadeOut('slow');
        }

        function toggleHideShow() {
            $('body').on('change', '.toggleHideShow', function () {
                if( $(this).is(':checked') ) {
                    $($(this).attr('data-content')).show();
                } else {
                    $($(this).attr('data-content')).hide();
                }
            });
            $('.toggleHideShow').change();
        }

        function refreshContentFromAjax(url, content, callback) {
            inlinePageLoader();
            $.get(url, {isAjax:true}, function(data){

                //create jquery object from the response html
                var $response=$(data);

                //query the jq object for the values
                var dataToday = $response.find(content).html();
                $(content).html(dataToday);
                init();
                if( callback ) callback();
                removeInlinePageLoader();
            });

        }

        function ajaxRouteChange(url) {
            if (typeof (history.pushState) != "undefined") {
                var obj = { Title: '', Url: url };
                history.pushState(obj, obj.Title, obj.Url);
                refreshContentFromAjax(url, '#page-route-container');
            } else {
                window.location.href = url;
            }
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

            //modal
            $('body').on('click', '.dataModel', function(e) {
                console.log('hello');
                var url = $(this).data('href');
                var title = $(this).data('title');
                var type = $(this).data('type'); // modal-lg
                $.get(url, function(res){
                    if( type ) {
                        $('#dataModel .modal-dialog').addClass('modal-'+ type);
                    }
                    $('#dataModelTitle').text(title);
                    $('#dataModel .modal-body').html(res);

                    $('#dataModel').modal('show');
                });
            });

            $('body').on('click', '.dataModelSubmit', function () {
                var s = $(this).parent().parent().find('form').submit();
            });

            $('body').on('click', '.route-link', function(e) {
                e.preventDefault();
                if( $(this).attr('href') ) {
                    ajaxRouteChange($(this).attr('href'));
                } else {
                    ajaxRouteChange($(this).attr('data-href'))
                }
            });

            $('body').on('submit', '.ajax-form-submit', function(e){
                e.preventDefault();

                var refreshUrl = $(this).attr('data-href');

                const formData = new FormData(this);
                formData.append('isAjax', '1');

                $.ajax({
                    url: $(this).attr('action'),
                    type: $(this).attr("method"),
                    dataType: "JSON",
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function (data, status)  {
                        if(data.error || (!data.status)) {
                            showErrorMsg(data.msg);
                        } else {
                            showSuccessMsg(data.msg);
                            ajaxRouteChange(refreshUrl);
                        }
                    },
                    error: function (xhr, desc, err)  {
                        showErrorMsg('Something went wrong');
                    }
                });
            });

            $('body').on('click', '.route-link-confirm', function(e) {
                e.preventDefault();
                var that = this;
                Swal.fire({
                    title: "Are you sure?",
                    text: "You won't be able to revert this!",
                    type: "warning",
                    showCancelButton: !0,
                    confirmButtonText: "Yes, delete it!",
                    cancelButtonText: "No, cancel!",
                    confirmButtonClass: "btn btn-success mt-2",
                    cancelButtonClass: "btn btn-danger ml-2 mt-2",
                    buttonsStyling: !1
                }).then(function(result) {

                    if (result.value) {

                        inlinePageLoader();

                        var refreshUrl = $(that).attr('data-href');

                        $.ajax({
                            url: $(that).attr('href') + '?isAjax=1',
                            type: 'get',
                            dataType: "JSON",
                            processData: false,
                            contentType: false,
                            success: function (data, status)  {
                                removeInlinePageLoader();
                                if(data.error) {
                                    showErrorMsg(data.msg);
                                } else {
                                    showSuccessMsg(data.msg);
                                    ajaxRouteChange(refreshUrl);
                                }
                            },
                            error: function (xhr, desc, err)  {
                                removeInlinePageLoader();
                                showErrorMsg('Something went wrong');
                            }
                        });

                        // window.location.href = $(that).closest('a').attr('href');
                    }

                })

            });

        });

        function init() {

            $.validate();

            initFancyBox();

            $('.select2-select').select2();

            // select 2 ajax
            $('.select2-ajaxselect').select2({
                minimumInputLength: 3,
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

            $('.editor').each(function(index) {
                $(this).summernote({
                    minHeight: $(this).attr('rows') * 15,
                    toolbar: [
                        ['style', ['bold', 'italic', 'underline', 'clear']],
                        ['font', ['strikethrough', 'superscript', 'subscript']],
                        ['color', ['color']],
                        ['para', ['ul', 'paragraph']],
                    ]
                });
            });

            // menu list for mobile
            $("#mobile_toggle").click(function () {
                $("#custom_nav").animate({
                    left: 0
                }, 100);

                $(document).mouseup(function (e) {
                    if ($(e.target).closest("#custom_nav").length === 0) {
                        $("#custom_nav").animate({
                            left: -200
                        }, 50);
                    }
                });
            });

            // dashboard notification sidebar
            $("#user_toggle").click(function () {
                $("#right-sidebar").animate({
                    right: 0
                }, 100);

                $(document).mouseup(function (e) {
                    if ($(e.target).closest("#right-sidebar").length === 0) {
                        $("#right-sidebar").animate({
                            right: -280
                        }, 50);
                    }
                });
            });

            // tooltip
            $("[data-toggle=tooltip").tooltip();

            $('.dataTable').DataTable();

            $(".datepicker").flatpickr({
                dateFormat: 'd-m-Y',
                minDate: new Date(),
            });

            toggleHideShow();

        }

        init();

    </script>

    @yield('script')

</body>
</html>
