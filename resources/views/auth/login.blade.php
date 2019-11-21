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
                    <form method="POST" accept="{{route('auth.post')}}" >
                        <div class="form-group">
                            @csrf
                            <label for="email">Email address</label>
                            <input type="email" name="email" class="form-control form-control-lg" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="passwordInput">Password</label>
                            <input type="password" name="password" class="form-control form-control-lg" id="passwordInput" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-lg btn-primary col-12">Submit</button>
                    </form>

                    
                </div>
            </div>
        </div>

    </div>
</div>


@endsection