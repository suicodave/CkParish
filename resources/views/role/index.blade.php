@extends('base-layout')


@section('content')
<div class="container mt-5 ">
    <div class="col-10 offset-1">
        <div class="card shadow">
            <div class="card-body">
                <h2 class="card-title text-heading mb-3">
                    Roles
                </h2>

                <div class="row ">

                    <div class="col-12">
                        @include('role.table',['roles'=>$roles])

                        <div class="row">
                            <div class="col-3">
                                <a href="{{route('roles.create')}}" class="btn btn-primary">
                                    <span class="mr-1">New Role</span>

                                    <span class="fa fa-plus"></span>
                                </a>
                            </div>

                            <div class="col">
                                <div class="float-right">

                                    {{$roles->links()}}
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>



</div>

<div class="divider"></div>
@endsection