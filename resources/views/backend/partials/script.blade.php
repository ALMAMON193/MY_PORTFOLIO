    <!-- Library Bundle Script -->
    <script src="{{asset('backend/js/core/libs.min.js')}}"></script>

    <!-- External Library Bundle Script -->
    <script src="{{asset('backend/js/core/external.min.js')}}"></script>

    <!-- Widgetchart Script -->
    <script src="{{asset('backend/js/charts/widgetcharts.js')}}"></script>

    <!-- mapchart Script -->
    <script src="{{asset('backend/js/charts/vectore-chart.js')}}"></script>
    <script src="{{asset('backend/js/charts/dashboard.js')}}" ></script>

    <!-- fslightbox Script -->
    <script src="{{asset('backend/js/plugins/fslightbox.js')}}"></script>

    <!-- Settings Script -->
    <script src="{{asset('backend/js/plugins/setting.js')}}"></script>

    <!-- Slider-tab Script -->
    <script src="{{asset('backend/js/plugins/slider-tabs.js')}}"></script>

    <!-- Form Wizard Script -->
    <script src="{{asset('backend/js/plugins/form-wizard.js')}}"></script>

    <!-- AOS Animation Plugin-->
    <script src="{{asset('backend/vendor/aos/dist/aos.js')}}"></script>

    <!-- App Script -->
    <script src="{{asset('backend/js/hope-ui.js')}}" defer></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/41.2.0/classic/ckeditor.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script type="text/javascript" src="https://jeremyfagis.github.io/dropify/dist/js/dropify.min.js"></script>

    <script>
        $(document).ready(function() {
            // Set Toastr options
            toastr.options = {
                'closeButton': true,
                'debug': false,
                'newestOnTop': true,
                'progressBar': true,
                'positionClass': 'toast-top-right',
                'preventDuplicates': false,
                'showDuration': '1000',
                'hideDuration': '1000',
                'timeOut': '5000',
                'extendedTimeOut': '1000',
                'showEasing': 'swing',
                'hideEasing': 'linear',
                'showMethod': 'fadeIn',
                'hideMethod': 'fadeOut',
            };

            // Display success message
            @if (Session::has('t-success'))
                toastr.success("{{ session('t-success') }}");
            @endif

            // Display error message
            @if (Session::has('t-error'))
                toastr.error("{{ session('t-error') }}");
            @endif

            // Display info message
            @if (Session::has('t-info'))
                toastr.info("{{ session('t-info') }}");
            @endif

            // Display warning message
            @if (Session::has('t-warning'))
                toastr.warning("{{ session('t-warning') }}");
            @endif
        });
        $('.dropify').dropify();
    </script>

    @stack('scripts')
