@extends('base-layout')

@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <h2 class="text-center">Components</h2>
        </div>
        
    </div>
    <div class="row">
            @foreach ([1,2,3,4] as $item)
                <div class=" col-3">
                    <div class="card card-body module-item p-3">
                        {{$item}}
                    </div>
                </div>
            @endforeach
    </div>
    
</div>

<style>
    .module-item{
        cursor: pointer;
    }
</style>

@endsection