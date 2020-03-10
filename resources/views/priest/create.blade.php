@extends('base-entity-create-form')

@section('form')

<form method="POST" @empty($priest) action="{{route('priests.store')}}" @endempty @isset($priest) action="{{route('priests.update',[
            'priest'=>$priest->id
        ])}}" @endisset>
    <div class="row">
        <div class="col-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="col-12">
                        <h3 class="card-title text-heading">
                            New Priest
                        </h3>
                    </div>

                    <div class="col-12">
                        @isset($priest)
                        @method('PUT')
                        @endisset
                        @csrf
                        <div class="form-group">
                            <label for="permissionName">Name</label>
                            <input type="text" class="form-control" name="name" id="permissionName" @isset($priest)
                                value="{{$priest->name}}" @endisset placeholder="Enter priest Name">

                        </div>
                    </div>
                </div>



                <div class="card-footer ">
                    <div class="col-12">
                        <button type="submit" class="btn col-12 btn-primary">
                            @empty($priest)
                            Create
                            @endempty

                            @isset($priest)
                            Update
                            @endisset
                        </button>
                    </div>

                </div>
            </div>

        </div>
    </div>

</form>

@endsection