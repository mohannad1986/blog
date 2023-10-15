<!DOCTYPE html>
<html lang="en">

<head>
{{-- +++++++++++++++++++++++++++++++++++ --}}
{{-- استورد الهيد هنا  --}}
@include('layouts.blog.head')
</head>

<body>
    <!-- Topbar Start -->

    <!-- Topbar End -->


    <!-- Navbar Start -->
 {{-- هنا الناف  --}}
 @include('layouts.blog.main-header')
    <!-- Navbar End -->


    <!-- Main News Slider Start -->

    @yield('content')




    <!-- News With Sidebar End -->


    <!-- Footer Start -->
    {{-- +++++++++++++++++++++++++++ --}}
    {{-- الفونر --}}
    @include('layouts.blog.footer')

    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-square back-to-top"><i class="fa fa-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
  {{-- +++++++++++++++++++ --}}
  {{-- استودر السكربت هنا  --}}
  @include('layouts.blog.footer-script')
    <!-- Template Javascript -->

</body>

</html>
