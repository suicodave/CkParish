@extends('base-entity-create-form')


@section('form')
<form method="POST" @empty($user) action="{{route('users.store')}}" @endempty @isset($user) action="{{route('users.update',[
        'user'=>$user->id
    ])}}" @endisset>
    @csrf

    @isset($user)
    @method('PUT')
    @endisset
    <div class="row">
        <div class="inputs col-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="col-12">
                        <h3 class="card-title text-heading">
                            New User
                        </h3>
                    </div>
                    <div class="form-group col-12 mt-3">
                        <label for="email">Email</label>
                        <input id="email" class="form-control" type="email" name="email" @isset($user)
                            value="{{$user->email}}" @endisset>
                    </div>
                    <div class="form-group col-12">
                        <label for="firstname">First Name</label>
                        <input type="text" class="form-control" id="firstname" name="first_name" @isset($user)
                            value="{{$user->first_name}}" @endisset>
                    </div>

                    <div class="form-group col-12">
                        <label for="middlename">Middle Name</label>
                        <input type="text" class="form-control" id="middlename" name="middle_name" @isset($user)
                            value="{{$user->middle_name}}" @endisset>
                    </div>

                    <div class="form-group col-12">
                        <label for="lastname">Last Name</label>
                        <input type="text" class="form-control" id="lastname" name="last_name" @isset($user)
                            value="{{$user->last_name}}" @endisset>
                    </div>


                </div>

                <div class="card-footer">

                    <div class="col-12">
                        <input type="submit" class="btn btn-primary col-12"
                            value="{{isset($user) ? 'Update': 'Create'}}">
                    </div>

                </div>
            </div>

        </div>


        <div class="col">
            <div class="  mb-4">
                <div class="card shadow-sm card-body">
                    <h3 class="text-heading">
                        Roles
                    </h3>
                    <div class="col-12">
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
                </div>

            </div>

            <div class="mt-4">
                <div class="card shadow-sm card-body">
                    <h3 class="text-heading">
                        Direct Permissions
                    </h3>
                    <div class="col-12">
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

        </div>

    </div>

</form>

@endsection