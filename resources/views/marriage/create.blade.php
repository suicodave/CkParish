@extends('base-entity-create-form')


@section('form')

@php
$faker = Faker\Factory::create() ;
@endphp

<form method="POST" @empty($model) action="{{route('marriages.store')}}" @endempty @isset($model) action="{{route('marriages.update',[
    'marriage'=>$model->id
])}}" @endisset>
    @csrf

    @isset($model)
    @method('PUT')
    @endisset

    <div class="row">
        <div class="col-12">

            <h3 class="card-title  mb-3 text-heading">
                New Marriage
            </h3>

            <div class="card shadow-sm">
                <div class="card-body">


                    <div class="col-12">
                        <h3 class="card-title text-heading">
                            Husband
                        </h3>
                        <div class="row">
                            <div class="form-group col-4 mt-3">
                                <label for="gfn">First Name</label>
                                <input id="gfn" placeholder="Ex. {{$faker->firstName}}" class="form-control" type="text"
                                    name="customers[0][first_name]" @isset($model)
                                    value="{{$model->customer->first_name}}" @endisset>

                                <input type="hidden" name="customers[0][role]" value="Husband">
                            </div>

                            <div class="form-group col-4 mt-3">
                                <label for="gmn">Middle Name</label>
                                <input id="gmn" placeholder="Ex. {{$faker->lastName}}" class="form-control" type="text"
                                    name="customers[0][middle_name]" @isset($model)
                                    value="{{$model->customer->middle_name}}" @endisset>
                            </div>

                            <div class="form-group col-4 mt-3">
                                <label for="gln">Last Name</label>
                                <input id="gln" class="form-control" type="text" placeholder="Ex. {{$faker->lastName}}"
                                    name="customers[0][last_name]" @isset($model)
                                    value="{{$model->customer->last_name}}" @endisset>
                            </div>

                            <div class="form-group col-6 mt-3">
                                <label for="gbd">Birthdate</label>
                                <input id="gbd" class="form-control" type="date" name="customers[0][birthdate]"
                                    @isset($model) value="{{$model->customer->birthdate}}" @endisset>
                            </div>

                            <div class="form-group col-6 mt-3">
                                <label for="groomsex">Sex</label>

                                <select class="form-control" name="customers[0][sex]" id="groomsex">

                                    @foreach (['Male','Female'] as $sex)
                                    <option value="{{$sex}}" @isset($model)
                                        {{ $model->customer->sex == $sex ? 'selected' : null }} @endisset> {{$sex}}
                                    </option>
                                    @endforeach
                                </select>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <div class="card my-3 shadow-sm">
                <div class="card-body">

                    <create-sponsor-input @isset($parents) :sponsorsprop='@json($parents)' @endisset @isset($showOnly)
                        :disablecontrol="true" @endisset formlabel="Parents" inputname="customers[0][parents]" max="2"
                        :parental="true">
                    </create-sponsor-input>

                </div>
            </div>



            <div class="card shadow-sm">
                <div class="card-body">

                    <create-sponsor-input @isset($sponsors) :sponsorsprop='@json($sponsors)' @endisset @isset($showOnly)
                        :disablecontrol="true" @endisset formlabel="Sponsors" inputname="customers[0][sponsors]"
                        :includerelationship="true">
                    </create-sponsor-input>

                </div>
            </div>



        </div>
    </div>

    <div class="row my-3">
        <div class="col-12">
            <hr>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-body">


                    <div class="col-12">
                        <h3 class="card-title text-heading ">
                            Wife
                        </h3>
                        <div class="row">
                            <div class="form-group col-4 mt-3">
                                <label for="fn">First Name</label>
                                <input id="fn" placeholder="Ex. {{$faker->firstName}}" class="form-control" type="text"
                                    name="customers[1][first_name]" @isset($model)
                                    value="{{$model->customer->first_name}}" @endisset>

                                <input type="hidden" name="customers[1][role]" value="Wife">
                            </div>

                            <div class="form-group col-4 mt-3">
                                <label for="mn">Middle Name</label>
                                <input id="mn" placeholder="Ex. {{$faker->lastName}}" class="form-control" type="text"
                                    name="customers[1][middle_name]" @isset($model)
                                    value="{{$model->customer->middle_name}}" @endisset>
                            </div>

                            <div class="form-group col-4 mt-3">
                                <label for="ln">Last Name</label>
                                <input id="ln" class="form-control" type="text" placeholder="Ex. {{$faker->lastName}}"
                                    name="customers[1][last_name]" @isset($model)
                                    value="{{$model->customer->last_name}}" @endisset>
                            </div>

                            <div class="form-group col-6 mt-3">
                                <label for="bd">Birthdate</label>
                                <input id="bd" class="form-control" type="date" name="customers[1][birthdate]"
                                    @isset($model) value="{{$model->customer->birthdate}}" @endisset>
                            </div>

                            <div class="form-group col-6 mt-3">
                                <label for="sex">Sex</label>

                                <select class="form-control" name="customers[1][sex]" id="sex">

                                    @foreach (['Female','Male'] as $sex)
                                    <option value="{{$sex}}" @isset($model)
                                        {{ $model->customer->sex == $sex ? 'selected' : null }} @endisset> {{$sex}}
                                    </option>
                                    @endforeach
                                </select>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <div class="card my-3 shadow-sm">
                <div class="card-body">

                    <create-sponsor-input @isset($parents) :sponsorsprop='@json($parents)' @endisset @isset($showOnly)
                        :disablecontrol="true" @endisset formlabel="Parents" inputname="customers[1][parents]" max="2"
                        :parental="true">
                    </create-sponsor-input>

                </div>
            </div>

            <div class="card shadow-sm">
                <div class="card-body">

                    <create-sponsor-input @isset($sponsors) :sponsorsprop='@json($sponsors)' @endisset @isset($showOnly)
                        :disablecontrol="true" @endisset formlabel="Sponsors" :includerelationship="true"
                        inputname="customers[1][sponsors]">
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
                                    placeholder="Ex. {{$faker->name}}" @isset($model) value="{{$model->priest_name}}"
                                    @endisset>
                            </div>

                            <div class="form-group col-6 mt-3">
                                <label for="cd">Wedding Date</label>
                                <input id="cd" class="form-control" type="date" name="wedding_date" @isset($model)
                                    value="{{$model->baptismal_date->toDateString()}}" @endisset>
                            </div>
                        </div>
                    </div>
                </div>
            </div>





            <div class="float-right mt-3">
                @empty($showOnly)
                <button class="btn btn-primary shadow-sm" type="submit">
                    @isset($model)
                    Update
                    @endisset

                    @empty($model)
                    Create
                    @endempty
                </button>
                @endempty


                @isset($showOnly)
                <a href="{{route('baptismal.issuances.create',[
                    'baptismal'=>$model->id
                ])}} " class="btn btn-primary">
                    Issue Certificate
                </a>
                @endisset
            </div>



        </div>
    </div>



</form>
@endsection