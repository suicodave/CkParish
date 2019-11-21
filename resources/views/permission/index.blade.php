@extends('base-layout')


@section('content')
<div class="container mt-5 ">
    <div class="row">
        <h2 class="col-12">
            Permissions
        </h2>
    </div>

    <div class="row ">
        <div class="col-12">
            @include('partials.permission.table',['permissions'=>$permissions])
        </div>
    </div>
</div>

<div class="divider"></div>
@endsection