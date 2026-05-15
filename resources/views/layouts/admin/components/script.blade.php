{{-- Plugin --}}
<script src="{{ asset('assets/plugins/js/jquery-3.7.1.min.js') }}"></script>
<script src="{{ asset('assets/plugins/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/plugins/js/jquery-confirm.min.js') }}"></script>
<script src="{{ asset('assets/plugins/js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('assets/plugins/js/toastr.min.js') }}"></script>

{{-- Custom --}}
<script src="{{ asset('assets/admin/js/custom.js') }}"></script>
<script src="{{ asset('assets/plugins/js/ajax-form.js') }}"></script>

@stack('js')

{{-- Toaster Message --}}
@if(Session::has('success'))
    <script>
        toastr.success( "{{ Session::get('message') }}");
    </script>
@endif
@if(Session::has('error'))
    <script>
        toastr.error( "{{ Session::get('error') }}");
    </script>
@endif
@if(Session::has('warning'))
    <script>
        toastr.warning( "{{ Session::get('warning') }}");
    </script>
@endif
@if($errors->any())
<script>
    toastr.warning('Error some occurs!');
</script>
@endif
