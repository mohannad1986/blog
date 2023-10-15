@extends('layouts.blog.master')
@section('css')

@section('title')
    empty
@stop
@endsection


@section('content')
<!-- row -->
  <!-- Contact Start -->
  <div class="container-fluid mt-5 pt-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                <div class="section-title mb-0">
                    <h4 class="m-0 text-uppercase font-weight-bold">Contact Us For Any Queries</h4>
                </div>
                <div class="bg-white border border-top-0 p-4 mb-3">

                    <h6 class="text-uppercase font-weight-bold mb-3">Contact Us</h6>
                    <form  action="{{route('tag.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" name="name"  class="form-control p-4" placeholder="tag Name"/>
                                </div>
                            </div>

                        </div>


                        <div>

                            <button class="btn btn-primary font-weight-semi-bold px-4" style="height: 50px;"
                                type="submit">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Contact End -->

<!-- row closed -->
@endsection
@section('js')
@toastr_js
@toastr_render
@endsection
