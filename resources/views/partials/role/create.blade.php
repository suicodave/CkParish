<div class="card bg-dark h-100 mb-5">

    <div class="card-body ">

        @if($errors->all())
        <div class="alert alert-danger col-12" role="alert">
            @foreach($errors->all() as $message)

            {{$message}}

            <br>
            @endforeach
        </div>
        @endif
        <form method="POST" class="col-3" action="{{route('roles.store')}}">
            @csrf
            <div class="form-group">
                <label for="permissionName" class="text-white">Name</label>
                <input type="text" class="form-control" name="name" id="permissionName"
                    placeholder="Enter Role Name">

            </div>

            <button type="submit" class="btn col-12 btn-primary">Create</button>
        </form>
    </div>

</div>