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
               {{-- +++++++++++++++++++++++++++++++++++ --}}

               <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2>Users Management</h2>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-success" href="{{ route('users.create') }}"> Create New User</a>
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
               <th>Email</th>
               <th>Roles</th>
               <th width="280px">Action</th>
             </tr>
             @foreach ($data as $key => $user)
              <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                  @if(!empty($user->getRoleNames()))
                    @foreach($user->getRoleNames() as $v)
                       <label class="badge badge-success">{{ $v }}</label>
                    @endforeach
                  @endif
                </td>
                <td>
                   <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Show</a>
                   <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>
                    {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
              </tr>
             @endforeach
            </table>


            {!! $data->render() !!}


            <p class="text-center text-primary"><small>Tutorial by ItSolutionStuff.com</small></p>


               {{-- +++++++++++++++++++++++++++++++++++ --}}
            </div>
        </div>
    </div>
</div>
<!-- row closed -->
@endsection
@section('js')

@endsection
