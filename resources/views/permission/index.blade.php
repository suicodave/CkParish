@extends('base-layout')


@section('content')
<div class="container mt-5 ">

    <div class="col-10 offset-1">
        <div class="card shadow">
            <div class="card-body">
                <h3 class="mb-3 card-title text-heading">
                    Permissions
                </h3>

                <div class="row ">
                    <div class="col-12">
                        @include('permission.table',['permissions'=>$permissions])
                    </div>

                    <div class="col">
                        <div class="float-right">
                            {{$permissions->links()}}
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </div>




</div>

<div class="divider"></div>
@endsection