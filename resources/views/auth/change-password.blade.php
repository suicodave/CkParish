@extends('base-layout')


@section('content')

<div class="login-bg">
    <div class="container ">
        <div class="row">
            <div class="col-4 offset-4">

            </div>
        </div>


        <div class="row form-container">

            <div class="col-6 offset-3 ">
                @if($errors->all())
                <div class="alert alert-danger" role="alert">
                    @foreach($errors->all() as $message)

                    {{$message}}

                    <br>
                    @endforeach
                </div>
                @endif
                <div class="card card-body bg-dark text-white  shadow  rounded-lg p-5">
                    <form method="POST" accept="{{route('auth.post')}}">
                        @csrf

                        <div class="row">
                            <div class="form-group col-12">
                                <label for="passwordInput">Current Password</label>
                                <input type="password" name="currentPassword" class="form-control form-control-lg"
                                    id="passwordInput">
                            </div>

                            <div class="form-group col-6">
                                <label for="passwordInputNew">New Password</label>
                                <input type="password" name="newPassword" class="form-control form-control-lg"
                                    id="passwordInputNew">
                            </div>

                            <div class="form-group col-6">
                                <label for="passwordInputNewConfirm">Confirm Password</label>
                                <input type="password" name="confirmPassword" class="form-control form-control-lg"
                                    id="passwordInputNewConfirm">
                            </div>
                        </div>

                        <button type="submit" class="btn btn-lg btn-primary col-12 mt-3">Change Password</button>
                    </form>

                </div>
            </div>
        </div>

    </div>
</div>


@endsection