@extends('base-entity-create-form',[
    'previousPageLinkName'=>'roles.index'
])


@section('form')

<form method="POST" @empty($role) action="{{route('roles.store')}}" @endempty @isset($role) action="{{route('roles.update',[
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
                            <input type="text" class="form-control" name="name" id="permissionName" @isset($role)
                                value="{{$role->name}}" @endisset placeholder="Enter Role Name">

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

        <div class="col">
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

@endsection