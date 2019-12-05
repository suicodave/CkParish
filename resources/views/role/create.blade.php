@extends('base-layout')

@section('content')

<div class="container p-3 mt-1">
    <div class=" h-100 mb-5">

        @if($errors->all())
        <div class="alert alert-danger col-12" role="alert">
            @foreach($errors->all() as $message)

            {{$message}}

            <br>
            @endforeach
        </div>
        @endif


        <form method="POST" class="col-12" @empty($role) action="{{route('roles.store')}}" @endempty @isset($role)
            action="{{route('roles.update',[
            'role'=>$role->id
        ])}}" @endisset>
            <div class="row">
                <div class="col-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <div class="col-12">
                                <h3 class="card-title text-heading">
                                    New Role
                                </h3>
                            </div>

                            <div class="col-12">
                                @isset($role)
                                @method('PUT')
                                @endisset
                                @csrf
                                <div class="form-group">
                                    <label for="permissionName">Name</label>
                                    <input type="text" class="form-control" name="name" id="permissionName"
                                        @isset($role) value="{{$role->name}}" @endisset placeholder="Enter Role Name">

                                </div>
                            </div>
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn col-12 btn-primary">
                                @empty($role)
                                Create
                                @endempty

                                @isset($role)
                                Update
                                @endisset
                            </button>
                        </div>
                    </div>



                </div>




                <div class="col-8 px-5">
                    <div class="card shadow-sm card-body">
                        <h3 class="text-heading">
                            Permissions
                        </h3>

                        <div class="col-12">
                            <div class="row">
                                @empty($role)
                                @include('permission.checkbox')
                                @endempty

                                @isset($role)
                                @include('permission.checkbox',[
                                'existingPermissions'=>$rolePermissionNames
                                ])
                                @endisset

                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </form>


    </div>
</div>

@endsection