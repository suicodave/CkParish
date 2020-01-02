<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <title>Confirmation</title>
</head>

<body>
    <div class="print-preview">
        <div class="preview-body">
            <div class="container-fluid">
                <div class="row my-5">
                    <div class="col-3">
                        <div class="logo-placeholder col-6 ">
                            <img src="{{asset('ck logo.png')}}" height="120" width="130" alt="" srcset="">
                        </div>
                    </div>

                    <div class="col-6 text-center align-middle h-100">
                        <h1 class="mt-4 diocese-placeholder">
                            {{$config['diocese']}}
                        </h1>

                        <h5>
                            {{$config['parish']}}
                        </h5>

                        <h5>
                            {{$config['address']}}
                        </h5>
                    </div>

                    <div class="col-3">
                        <div class=" logo-placeholder col-6  offset-4">
                            <img height="120" src="{{asset('diocese logo.png')}} " alt="" srcset="">

                        </div>
                    </div>
                </div>

                <div class="row cert-label">
                    <div class="col-12 text-center">
                        <p class=" m-1 certificate-of-phrase">
                            Certificate of
                        </p>

                        <p class=" m-1 confirmation-word">
                            Confirmation
                        </p>
                        <h5 class="mb-5">is given to: </h5>

                        <div class="col-12">
                            <img class="watermark" src="{{$watermark}}" alt="" srcset="">
                        </div>

                        <h1>

                            <u>
                                {{$confirmation->customer->full_name}}
                            </u>


                        </h1>

                        <span>Child of {{$parents}}</span>
                    </div>
                </div>


                <div class="row  mt-5 ">
                    <div class="col-12 confirmation-details">
                        <h3 class="text-center">
                            The Holy Sacrament of Confirmation
                        </h3>

                        <p class="text-center"> Administered By:</p>

                        <p class="text-center">Most {{$confirmation->priest_name}}</p>

                        <p class="text-center">
                            According to the Rite of the Roman Catholic Church
                        </p>

                        <p>
                            The Sponsors:
                        </p>

                        @foreach ($sponsors as $sponsorsChunk)
                        <div class="row mt-3">
                            @foreach ($sponsorsChunk as $sponsor)
                            <div class="col-3">
                                {{$sponsor}}
                            </div>
                            @endforeach
                        </div>


                        @endforeach




                    </div>
                </div>


                <div class="row my-5 bg-a">
                    <div class="col-6 metadata-label mt-5">
                        <span class="d-block ">
                            Issue ID: {{$faker->uuid}}
                        </span>

                        <div class="d-block">
                            {{now()->toDayDateTimeString()}}
                        </div>

                        <div class="d-block">
                            {{ $purpose }} Purpose
                        </div>
                    </div>
                    <div class="col-6 text-center">

                        <h3>
                            <u>{{$priest}}</u>
                        </h3>
                        <h5>Parish Priest</h5>
                    </div>
                </div>




            </div>
        </div>
    </div>
</body>

</html>