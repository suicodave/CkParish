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

                <div class="card-header">
                    <h5 class="card-title">
                        {{$module['name']}}
                    </h5>
                </div>

                <div class="card-body">
                    <div class="description-wrapper">
                        <p class="card-text ">
                            {{$module['description']}}
                        </p>

                    </div>

                </div>

                <div class="card-footer">
                    <a class="btn btn-primary float-right col-3 " href="{{$module['link']}}">
                        <span class="fas fa-external-link-alt"></span>
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