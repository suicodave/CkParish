@extends('base-layout')

@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col-12 mb-3">
            <h2 class="text-center">Components</h2>
        </div>

    </div>
    <div class="row">
        @foreach (App\UserModule::MODULES as $module)
        <div class="col-3 d-flex align-items-stretch">
            <div class="card text-white bg-dark  module-item mb-4">
                <div class="card-body">
                    <h5 class="card-title">
                        {{$module['name']}}
                    </h5>
                    <p class="card-text">
                        {{$module['description']}}
                    </p>
                </div>
            </div>
        </div>
        @endforeach
    </div>

</div>

<style>
    .module-item {
        cursor: pointer;
    }
</style>

@endsection