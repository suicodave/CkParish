@extends('base-layout')

@section('content')

<div class="container mt-5">
    <div class="col-10 offset-1">

        <form action="{{route('confirmations.print-preview',[
            'confirmation'=>$confirmation
        ])}}" method="GET">

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
                                <input type="text" name="priest" class="form-control" id="priest">
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