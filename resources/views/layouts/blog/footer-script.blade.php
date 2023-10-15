

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>


<script src="{{ URL::asset('assets/lib/easing/easing.min.js')}}"></script>
<script src="{{ URL::asset('assets/lib/owlcarousel/owl.carousel.min.js')}}"></script>

<script src="{{ URL::asset('assets/js/blog/main.js') }}"></script>

{{-- {{ URL::asset('assets/lib/')}} --}}
{{-- {{ URL::asset('assets/lib/owlcarousel/owl.carousel.min.js')}} --}}

@bukScripts(true)
@yield('js')



