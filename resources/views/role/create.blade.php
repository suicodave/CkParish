@extends('base-layout')

@section('content')

<div class="container mt-5">
    <div class=" h-100 mb-5">

        @if($errors->all())
        <div class="alert alert-danger col-12" role="alert">
            @foreach($errors->all() as $message)

            {{$message}}

            <br>
            @endforeach
        </div>
        @endif
        <form method="POST" class="col-12" action="{{route('roles.store')}}">
            <div class="row">
                <div class="col-3">
                    @csrf
                    <div class="form-group">
                        <label for="permissionName">Name</label>
                        <input type="text" class="form-control" name="name" id="permissionName"
                            placeholder="Enter Role Name">

                    </div>

                    <button type="submit" class="btn col-12 btn-primary">Create</button>


                </div>

                <div class="col-9 px-5">
                    <div class="row">
                        @foreach ($permissions as $permission)
                        <div class="form-check col-4">
                            <input type="checkbox" value="{{$permission->name}}" name="permissions[]" class="form-check-input"
                                id="exampleCheck{{$loop->index}}">
                            <label class="form-check-label"
                                for="exampleCheck{{$loop->index}}">{{$permission->name}}</label>
                        </div>
                        @endforeach
                    </div>

                </div>
            </div>


        </form>


    </div>
</div>

@endsection