@extends('base-entity-create-form')


@section('form')

@php
$faker = Faker\Factory::create() ;
@endphp

<form method="POST" @empty($confirmation) action="{{route('confirmations.store')}}" @endempty @isset($confirmation)
    action="{{route('confirmations.update',[
    'confirmation'=>$confirmation->id
])}}" @endisset>
    @csrf

    @isset($confirmation)
    @method('PUT')
    @endisset

    <div class="row">
        <div class="col-8 offset-2">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="col-12">
                        <h3 class="card-title text-heading">
                            New Confirmee
                        </h3>
                    </div>

                    <div class="col-12">
                        <div class="row">
                            <div class="form-group col-4 mt-3">
                                <label for="fn">First Name</label>
                                <input id="fn" placeholder="Ex. {{$faker->firstName}}" class="form-control" type="text"
                                    name="first_name" @isset($confirmation)
                                    value="{{$confirmation->customer->first_name}}" @endisset>
                            </div>

                            <div class="form-group col-4 mt-3">
                                <label for="mn">Middle Name</label>
                                <input id="mn" placeholder="Ex. {{$faker->lastName}}" class="form-control" type="text"
                                    name="middle_name" @isset($confirmation)
                                    value="{{$confirmation->customer->middle_name}}" @endisset>
                            </div>

                            <div class="form-group col-4 mt-3">
                                <label for="ln">Last Name</label>
                                <input id="ln" class="form-control" type="text" placeholder="Ex. {{$faker->lastName}}"
                                    name="last_name" @isset($confirmation)
                                    value="{{$confirmation->customer->last_name}}" @endisset>
                            </div>

                            <div class="form-group col-12 mt-3">
                                <label for="bd">Birthdate</label>
                                <input id="bd" class="form-control" type="date" name="birthdate" @isset($confirmation)
                                    value="{{$confirmation->customer->birthdate}}" @endisset>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <div class="card mt-3 shadow-sm">
                <div class="card-body">

                    <create-sponsor-input @isset($parents) :sponsorsprop='@json($parents)' @endisset @isset($showOnly)
                        :disablecontrol="true" @endisset formlabel="Parents" inputname="parents[]">
                    </create-sponsor-input>

                </div>
            </div>


            <div class="card my-3 shadow-sm">
                <div class="card-body">
                    <div class="col-12">
                        <div class="row">
                            <div class="form-group col-6 mt-3">
                                <label for="pn">Priest Name</label>
                                <input id="pn" class="form-control" type="text" name="priest_name"
                                    placeholder="Ex. {{$faker->name}}" @isset($confirmation)
                                    value="{{$confirmation->priest_name}}" @endisset>
                            </div>

                            <div class="form-group col-6 mt-3">
                                <label for="cd">Confirmation Date</label>
                                <input id="cd" class="form-control" type="date" name="confirmation_date"
                                    @isset($confirmation) value="{{$confirmation->confirmation_date->toDateString()}}"
                                    @endisset>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="card shadow-sm">
                <div class="card-body">

                    <create-sponsor-input @isset($sponsors) :sponsorsprop='@json($sponsors)' @endisset @isset($showOnly)
                        :disablecontrol="true" @endisset formlabel="Sponsors" inputname="sponsors[]">
                    </create-sponsor-input>

                </div>
            </div>


            <div class="float-right mt-3">
                @empty($showOnly)
                <button class="btn btn-primary shadow-sm" type="submit">
                    @isset($confirmation)
                    Update
                    @endisset

                    @empty($confirmation)
                    Create
                    @endempty
                </button>
                @endempty


                @isset($showOnly)
                <a href="{{route('issuances.create',[
                    'confirmation'=>$confirmation->id
                ])}} " class="btn btn-primary">
                    Issue Certificate
                </a>
                @endisset
            </div>



        </div>
    </div>



</form>
@endsection