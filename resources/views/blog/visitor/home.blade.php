@extends('layouts.blog.master')
@section('css')

@section('title')
    empty
@stop
@endsection


@section('content')
@php
    use Illuminate\Support\Str;
@endphp
<!-- row -->
{{-- +++++++++++++++++++++ --}}
   <!-- News With Sidebar Start -->
   <div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title">
                            <h4 class="m-0 text-uppercase font-weight-bold">Latest News</h4>
                            <a class="text-secondary font-weight-medium text-decoration-none" href="">View All</a>
                        </div>
                    </div>


                    {{-- ++++++++++++++++++++++++++++++++++++++ --}}
                    @foreach ($posts as  $post)
                    <div class="col-lg-6">
                        <div class="position-relative mb-3">
                            <img class="img-fluid w-100" src="{{Storage::url('images/'.'/'.$post->cover_image.'')}}" style="object-fit: cover;">
                            <div class="bg-white border border-top-0 p-4">
                                <div class="mb-2">

                                </div>

                                <a class="h4 d-block mb-3 text-secondary text-uppercase font-weight-bold" href="">{{$post->title}}</a>

                                <p class="m-0">{!! str::limit(($post->body),200, '...') !!}<small>{{' published at: '.$post->published_at.'.  .'}}</small><a class="none" style="color: rgb(185, 182, 182); display: inline-block;"  href="#">read more...</a></p>
                            </div>
                            <div class="d-flex justify-content-between bg-white border border-top-0 p-4">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle mr-2" src="img/user.jpg" width="25" height="25" alt="">
                                    <small>John Doe</small>
                                </div>
                                <div class="d-flex align-items-center">
                                    <small class="ml-3"><i class="far fa-eye mr-2"></i>12345</small>
                                    <small class="ml-3"><i class="far fa-comment mr-2"></i>123</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    @endforeach

                    {{-- +++++++++++++++++++++++++++++++++++++++ --}}

                </div>
            </div>


        </div>
    </div>
</div>
<!-- News With Sidebar End -->
<!-- row closed -->
@endsection
@section('js')

@endsection
