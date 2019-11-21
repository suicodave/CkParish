@extends('base-layout')

@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col-12 mb-3">
            <h2 class="text-center">Components</h2>
        </div>

    </div>
    <div class="row">
        @foreach (App\UserModule::modules() as $module)
        <div class="col-3 d-flex align-items-stretch">
            <div class="card text-white bg-dark   mb-4">
                <div class="card-body">
                    <h5 class="card-title">
                        {{$module['name']}}
                    </h5>
                    <p class="card-text ">
                        {{$module['description']}}
                    </p>

                    <a class="btn btn-primary col-12" href="{{$module['link']}}">
                        Go
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

</div>

<style>

</style>

@endsection