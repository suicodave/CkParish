@extends('base-layout')


@section('content')


<div class="container mt-5 ">
    <div class="col-10 offset-1">
        <div class="card shadow-sm">



            <div class="card-body">
                <a href="{{route('home')}}" class="btn btn-outline-danger mb-3 ">
                    <i class="fas fa-arrow-left"></i>
                    
                </a>
                <h3 class="card-title text-heading mb-1">
                    {{$indexName}}s
                </h3>
                <div class="row ">


                    <div class="col-12">



                        @include($tableName,[$tableKey=>$collection])

                        <div class="row">
                            @if ($createLink)
                            <div class="col-3 ">

                                <a href="{{route($formLink)}}" class=" btn  btn-primary ">
                                    <span class="mr-1">New {{$indexName}}</span>

                                    <span class="fa fa-plus"></span>
                                </a>
                            </div>
                            @endif


                            <div class="col">
                                <div class=" float-right">
                                    {{$collection->links()}}
                                </div>
                            </div>

                        </div>
                    </div>



                </div>
            </div>
        </div>

    </div>

</div>

@endsection