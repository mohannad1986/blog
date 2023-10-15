@extends('layouts.blog.master')
@section('css')

@section('title')
    empty
@stop
@endsection


@section('content')
<!-- row -->
   <!-- Featured News Slider Start -->
   <div class="container-fluid pt-5 mb-3">
    <div class="container">
        <div class="section-title">

            <h4 class="m-0 text-uppercase font-weight-bold">categories</h4>
            <div class="container text-center">
            <a class="badge badge-primary  text-center font-weight-semi-bold p-2 mr-2" href="{{route('category.create')}}">Business</a>
            </div>
        </div>
        <div class="owl-carousel news-carousel carousel-item-4 position-relative">

            <div class="position-relative overflow-hidden" style="height: 300px;">
                <img class="img-fluid h-100" src="img/news-700x435-1.jpg" style="object-fit: cover;">
                <div class="overlay">
                    <div class="mb-2">
                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2" href="">Business</a>
                        <a class="text-white" href=""><small>Jan 01, 2045</small></a>
                    </div>
                    <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="">Lorem ipsum dolor sit amet elit...</a>
                </div>
            </div>
            {{-- ++++++++++++++++++++++++++++++++++ --}}
            @foreach ($categories as $cat )
            <div class="position-relative overflow-hidden" style="height: 300px;">
                <img class="img-fluid h-100" src="" style="object-fit: cover;">
                <div class="overlay">
                    <a class="text-white" href=""><small>{{$cat->slug}}</small></a>

                    <div class="mb-2">
                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2" href="{{route('category.edit',[$cat->id])}}">edite</a>
                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2" href="{{route('category.destroy',[$cat->id])}}">delete</a>

                    </div>
                    <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="">{{$cat->name}}</a>
                </div>
            </div>

            @endforeach
            {{-- ++++++++++++++++++++++++++++++ --}}



            <div class="position-relative overflow-hidden" style="height: 300px;">
                <img class="img-fluid h-100" src="img/news-700x435-5.jpg" style="object-fit: cover;">
                <div class="overlay">
                    <div class="mb-2">
                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2" href="">Business</a>
                        <a class="text-white" href=""><small>Jan 01, 2045</small></a>
                    </div>
                    <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="{{route('category.create')}}">ADD category...</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Featured News Slider End -->
<!-- row closed -->
@endsection
@section('js')

@endsection
