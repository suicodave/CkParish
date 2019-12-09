@extends('base-layout')


@section('content')
<div class="container p-3 mt-1">

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