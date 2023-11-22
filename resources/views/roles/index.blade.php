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
                {{-- ++++++++++++++++++++++++++++++++++++++++++++ --}}
                <div class="row">

                    <div class="col-lg-12 margin-tb">

                        <div class="pull-left">

                            <h2>Role Management</h2>

                        </div>

                        <div class="pull-right">

                        {{-- @can('role-create') --}}

                            <a class="btn btn-success" href="{{ route('roles.create') }}"> Create New Role</a>

                         {{-- @endcan --}}

                        </div>

                    </div>

                </div>



                @if ($message = Session::get('success'))

                    <div class="alert alert-success">

                        <p>{{ $message }}</p>

                    </div>

                @endif



                <table class="table table-bordered">

                  <tr>

                     <th>No</th>

                     <th>Name</th>

                     <th width="280px">Action</th>

                  </tr>

                    @foreach ($roles as $key => $role)

                    <tr>

                        <td>{{ ++$i }}</td>

                        <td>{{ $role->name }}</td>

                        <td>

                            <a class="btn btn-info" href="{{ route('roles.show',$role->id) }}">Show</a>

                            @can('role-edit')

                                <a class="btn btn-primary" href="{{ route('roles.edit',$role->id) }}">Edit</a>

                            @endcan

                            @can('role-delete')

                                {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}

                                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}

                                {!! Form::close() !!}

                            @endcan

                        </td>

                    </tr>

                    @endforeach

                </table>



                {!! $roles->render() !!}



                <p class="text-center text-primary"><small>Tutorial by ItSolutionStuff.com</small></p>



                {{-- ++++++++++++++++++++++++++++++++++++++++++++ --}}
            </div>
        </div>
    </div>
</div>
<!-- row closed -->
@endsection
@section('js')

@endsection
