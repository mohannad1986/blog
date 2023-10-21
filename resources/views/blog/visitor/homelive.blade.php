@extends('layouts.blog.master2')
@section('css')

@livewireStyles

@section('title')
    empty
@stop
@endsection


@section('content')

<!-- row -->
<livewire:Posts />
<!-- row closed -->
@endsection
@section('js')
@livewireScripts
@endsection
