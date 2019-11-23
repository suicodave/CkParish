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
    <form method="POST" @empty($user) action="{{route('users.store')}}" @endempty @isset($user) action="{{route('users.update',[
        'user'=>$user->id
    ])}}" @endisset>
        @csrf

        @isset($user)
        @method('PUT')
        @endisset
        <div class="row">
            <div class="inputs col-4">
                <div class="row">
                    <div class="form-group col-6">
                        <label for="email">Email</label>
                        <input id="email" class="form-control" type="email" name="email" @isset($user)
                            value="{{$user->email}}" @endisset>
                    </div>

                    <div class="form-group col-6">
                        <label for="firstname">First Name</label>
                        <input type="text" class="form-control" id="firstname" name="first_name" @isset($user)
                            value="{{$user->first_name}}" @endisset>
                    </div>

                    <div class="form-group col-6">
                        <label for="middlename">Middle Name</label>
                        <input type="text" class="form-control" id="middlename" name="middle_name" @isset($user)
                            value="{{$user->middle_name}}" @endisset>
                    </div>

                    <div class="form-group col-6">
                        <label for="lastname">Last Name</label>
                        <input type="text" class="form-control" id="lastname" name="last_name" @isset($user)
                            value="{{$user->last_name}}" @endisset>
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
                        @isset($user)
                        @include('role.checkbox',[
                        'existingRoles'=>$userRoleNames
                        ])
                        @endisset

                        @empty($user)
                        @include('role.checkbox')
                        @endempty

                    </div>
                </div>

                <hr>

                <div class="col-12">
                    <div class="row mb-2">
                        <h3>Direct Permissions</h3>
                    </div>
                    <div class="row">
                        @empty($user)
                        @include('permission.checkbox')
                        @endempty

                        @isset($user)
                        @include('permission.checkbox',[
                        'existingPermissions'=>$userPermissionNames
                        ])
                        @endisset

                    </div>
                </div>

            </div>





        </div>

    </form>
</div>
@endsection