@extends('base-layout')


@section('content')
<div class="container mt-5 ">
    <div class="row">
        <h2 class="col-12">
            Roles
        </h2>
    </div>


    <div class="row ">

        <div class="col-3">
            <a href="" class="btn btn-primary">
                <span class="mr-1">New</span>

                <span class="fa fa-plus"></span>
            </a>
        </div>
        <div class="col-12">
            @include('partials.role.table',['roles'=>$roles])
        </div>
    </div>
</div>

<div class="divider"></div>
@endsection