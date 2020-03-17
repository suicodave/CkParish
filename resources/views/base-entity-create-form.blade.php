@extends('base-layout')


@section('content')
<div class="container p-3 mt-1">
    <a href="{{route($previousPageLinkName)}}" class="btn btn-outline-danger mb-3 ">
        <i class="fas fa-arrow-left"></i>
        
    </a>

    @if($errors->all())

    <div class="alert alert-danger " role="alert">
        @foreach($errors->all() as $message)

        {{$message}}

        <br>
        @endforeach
    </div>

    @endif

    @yield('form')

</div>
@endsection