@extends('base-layout')


@section('content')

<div class="container">

    <div class="row mt-5">


        <div class="col-12">
            <h1 class="text-center">Certificate Issuances</h1>

            <div>
                {!! $chart->container() !!}
            </div>


        </div>

    </div>
</div>



@endsection


@section('scripts')

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>

{!! $chart->script() !!}


@endsection