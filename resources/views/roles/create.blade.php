@extends('layouts.admin.master')
@section('css')

@section('title')
    empty
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0"> ncvlxcnvxcnvxcv</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="#" class="default-color">Home</a></li>
                <li class="breadcrumb-item active">Page Title</li>
            </ol>
        </div>
    </div>
</div>
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
<div class="row">
    <div class="col-md-12 mb-30">
        <div class="card card-statistics h-100">
            <div class="card-body">
                {{-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ --}}
                <div class="row">

                    <div class="col-lg-12 margin-tb">

                        <div class="pull-left">

                            <h2>Create New Role</h2>

                        </div>

                        <div class="pull-right">

                            <a class="btn btn-primary" href="{{ route('roles.index') }}"> Back</a>

                        </div>

                    </div>

                </div>



                @if (count($errors) > 0)

                    <div class="alert alert-danger">

                        <strong>Whoops!</strong> There were some problems with your input.<br><br>

                        <ul>

                        @foreach ($errors->all() as $error)

                            <li>{{ $error }}</li>

                        @endforeach

                        </ul>

                    </div>

                @endif



                {!! Form::open(array('route' => 'roles.store','method'=>'POST')) !!}

                <div class="row">

                    <div class="col-xs-12 col-sm-12 col-md-12">

                        <div class="form-group">

                            <strong>Name:</strong>

                            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}

                        </div>

                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">

                        <div class="form-group">

                            <strong>Permission:</strong>

                            <br/>

                            @foreach($permission as $value)

                                <label>{{ Form::checkbox('permission[]', $value->id, false, array('class' => 'name')) }}

                                {{ $value->name }}</label>

                            <br/>

                            @endforeach

                        </div>

                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">

                        <button type="submit" class="btn btn-primary">Submit</button>

                    </div>

                </div>

                {!! Form::close() !!}



                <p class="text-center text-primary"><small>Tutorial by ItSolutionStuff.com</small></p>

                {{-- ++++++++++++++++++++++++++++++++++++++++++++++++ --}}
            </div>
        </div>
    </div>
</div>
<!-- row closed -->
@endsection
@section('js')

@endsection
