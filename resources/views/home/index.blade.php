@extends('base-layout')

@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col-12 mb-3">
            <h2 class="text-center text-heading">Components</h2>
        </div>

    </div>
    <div class="row">
        @php
        $user = Auth::user()
        @endphp

        @foreach (App\UserModule::modules() as $module)

        @if ($user->hasModule($module['permission']))
        <div class="col-3 d-flex align-items-stretch">
            <div class="card text-dark shadow-sm     mb-4">


                <div class="card-body">
                    <h5 class="card-title text-heading">
                        {{$module['name']}}
                    </h5>
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
        @endif

        @endforeach
    </div>

</div>


@endsection