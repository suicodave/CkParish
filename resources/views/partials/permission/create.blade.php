<div class="card bg-dark h-100">

    <div class="card-body ">

        @if($errors->all())
        <div class="alert alert-danger" role="alert">
            @foreach($errors->all() as $message)

            {{$message}}

            <br>
            @endforeach
        </div>
        @endif
        <form method="POST"  action="{{route('permissions.store')}}">
            @csrf
            <div class="form-group">
                <label for="permissionName" class="text-white">Name</label>
                <input type="text" class="form-control" name="name" id="permissionName"
                    placeholder="Enter Permission Name">

            </div>

            <button type="submit" class="btn col-12 btn-primary">Create</button>
        </form>
    </div>

</div>
