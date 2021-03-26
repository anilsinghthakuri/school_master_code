@livewireStyles

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('backend/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('backend/dist/css/adminlte.min.css')}}">
    {{-- gallery form --}}
  <link rel="stylesheet" href="{{asset('backend/plugins/select2/css/select2.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">

  {{-- over lay scroll bar --}}
  <link rel="stylesheet" href="{{asset('backend/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">

  <!-- gallery image Ekko Lightbox -->
  <link rel="stylesheet" href="{{asset('backend/plugins/ekko-lightbox/ekko-lightbox.css')}}">

 <!-- Toastr -->
  <link rel="stylesheet" href="{{asset('backend/plugins/toastr/toastr.min.css')}}">
  @toastr_css
  @stack('style')
