@extends('base-layout')

@section('content')

<div class="container mt-5">
    <div class="col-10 offset-1">

        <form action="{{route('issuances.store',[
            'confirmation'=>$confirmation
        ])}}" method="POST">
            @csrf
            <div class="row">
                <div class="col-4  offset-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <div class="form-group ">
                                <label for="purpose" class="col-form-label">Purpose</label>
                                <input type="text" name="purpose" class="form-control" id="purpose">
                            </div>

                            <div class="form-group ">
                                <label for="priest" class="col-form-label">Parish Priest</label>
                                <select name="priest_id" class="form-control">
                                    @isset($priests)
                                    @foreach ($priests as $priest)
                                    <option value="{{$priest->id}}" @isset($model) @if($model->priest_id == $priest->id)
                                        selected
                                        @endif
                                        @endisset
                                        >
                                        {{$priest->name}}
                                    </option>
                                    @endforeach
                                    @endisset

                                    @empty($priests)
                                    @isset($model)
                                    <option value="">{{$model->priest_name}} </option>
                                    @endisset
                                    @endempty

                                </select>
                            </div>
                        </div>

                        <div class="card-footer">
                            <button class="btn btn-block btn-primary">
                                Generate Certificate
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>


    </div>
</div>

@endsection