@extends('base-layout')


@section('content')

<div class="login-bg">
    <div class="container ">
        <div class="row">
            <div class="col-4 offset-4">

            </div>
        </div>


        <div class="row form-container">

            <div class="col-4 offset-4 ">
                @if($errors->all())
                <div class="alert alert-danger" role="alert">
                    @foreach($errors->all() as $message)

                    {{$message}}

                    <br>
                    @endforeach
                </div>
                @endif
                <div class="card card-body  shadow  rounded-lg p-5">
                    <form method="POST" accept="{{route('auth.post')}}">
                        @csrf
                        <div class="form-group">
                            <label for="passwordInput">Current Password</label>
                            <input type="password" name="currentPassword" class="form-control form-control-lg"
                                id="passwordInput" placeholder="Password">
                        </div>

                        <div class="form-group">
                            <label for="passwordInputNew">New Password</label>
                            <input type="password" name="newPassword" class="form-control form-control-lg"
                                id="passwordInputNew" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-lg btn-primary col-12">Change Password</button>
                    </form>

                </div>
            </div>
        </div>

    </div>
</div>


@endsection