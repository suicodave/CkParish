@extends('base-layout')


@section('content')
<div class="container mt-5">

    @if($errors->all())
    <div class="alert alert-danger col-12" role="alert">
        @foreach($errors->all() as $message)

        {{$message}}

        <br>
        @endforeach
    </div>
    @endif
    <form method="POST" action="{{route('users.store')}}">
        @csrf
        <div class="row">
            <div class="inputs col-4">
                <div class="row">
                    <div class="form-group col-6">
                        <label for="email">Email</label>
                        <input id="email" class="form-control" type="email" name="email">
                    </div>

                    <div class="form-group col-6">
                        <label for="firstname">First Name</label>
                        <input type="text" class="form-control" id="firstname" name="firstname">
                    </div>

                    <div class="form-group col-6">
                        <label for="middlename">Middle Name</label>
                        <input type="text" class="form-control" id="middlename" name="middlename">
                    </div>

                    <div class="form-group col-6">
                        <label for="lastname">Last Name</label>
                        <input type="text" class="form-control" id="lastname" name="lastname">
                    </div>


                </div>

                <input type="submit" class="btn btn-primary col-12" value="Create">
            </div>


            <div class="col-8">
                <div class="col-12 mb-5">
                    <div class="row mb-2">
                        <h3>Roles</h3>
                    </div>
                    <div class="row">
                        @include('role.checkbox')
                    </div>
                </div>

                <hr>

                <div class="col-12">
                    <div class="row mb-2">
                        <h3>Direct Permissions</h3>
                    </div>
                    <div class="row">
                        @include('permission.checkbox')
                    </div>
                </div>

            </div>





        </div>

    </form>
</div>
@endsection