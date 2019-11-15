@extends('base-layout')

@section('content')

<div class="container">

    <div class="row">
        <div class="col-4 offset-4 ">
            <div class="card card-body form-container shadow  rounded-lg p-5">
                <form>
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control form-control-lg" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="passwordInput">Password</label>
                        <input type="password" class="form-control form-control-lg" id="passwordInput" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-lg btn-primary col-12">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection