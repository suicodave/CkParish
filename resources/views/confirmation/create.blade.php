@extends('base-entity-create-form')


@section('form')

@php
$faker = Faker\Factory::create() ;
@endphp

<form method="POST" action="{{route('confirmations.store')}}">
    @csrf
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
                                    name="first_name">
                            </div>

                            <div class="form-group col-4 mt-3">
                                <label for="mn">Middle Name</label>
                                <input id="mn" placeholder="Ex. {{$faker->lastName}}" class="form-control" type="text"
                                    name="middle_name">
                            </div>

                            <div class="form-group col-4 mt-3">
                                <label for="ln">Last Name</label>
                                <input id="ln" class="form-control" type="text" placeholder="Ex. {{$faker->lastName}}"
                                    name="last_name">
                            </div>

                            <div class="form-group col-12 mt-3">
                                <label for="bd">Birthdate</label>
                                <input id="bd" class="form-control" type="date" name="birthdate">
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <div class="my-3"></div>

            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="col-12">
                        <div class="row">
                            <div class="form-group col-6 mt-3">
                                <label for="pn">Priest Name</label>
                                <input id="pn" class="form-control" type="text" name="priest_name"
                                    placeholder="Ex. {{$faker->name}}">
                            </div>

                            <div class="form-group col-6 mt-3">
                                <label for="cd">Confirmation Date</label>
                                <input id="cd" class="form-control" type="date" name="confirmation_date">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="float-right mt-3">
                <button class="btn btn-primary shadow-sm" type="submit">
                    Create
                </button>
            </div>
        </div>
    </div>



</form>
@endsection