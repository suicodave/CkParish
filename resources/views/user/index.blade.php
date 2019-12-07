@extends('base-layout')


@section('content')


<div class="container mt-5 ">
    <div class="col-10 offset-1">
        <div class="card shadow-sm">


            <div class="card-body">
                <h3 class="card-title text-heading mb-1">
                    Users
                </h3>
                <div class="row ">


                    <div class="col-12">
                        @include('user.table',['users'=>$users])

                        <div class="row">
                            <div class="col-3 ">
                                <a href="{{route('users.create')}}" class=" btn  btn-primary ">
                                    <span class="mr-1">New User</span>

                                    <span class="fa fa-plus"></span>
                                </a>
                            </div>

                            <div class="col">
                                <div class=" float-right">
                                    {{$users->links()}}
                                </div>
                            </div>


                        </div>
                    </div>



                </div>
            </div>
        </div>

    </div>

</div>

@endsection