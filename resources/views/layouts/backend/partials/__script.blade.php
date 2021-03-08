<!-- REQUIRED SCRIPTS -->
    @livewireScripts
    <!-- jQuery -->
    <script src="{{asset('backend/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('backend/dist/js/adminlte.min.js')}}"></script>
    {{-- gallery used form --}}
    <script src="{{asset('backend/plugins/select2/js/select2.full.min.js')}}"></script>

    <!-- gallery image light box -->
    <script src="{{asset('backend/plugins/ekko-lightbox/ekko-lightbox.min.js')}}"></script>
    @stack('script')
