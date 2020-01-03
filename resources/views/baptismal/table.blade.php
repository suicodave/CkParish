@extends('base-entity-table',[
'tableHeaders'=>[
'#',
'Christian',
'Priest',
'Christen Date',
'Last Updated',
'Action'
]
])

@section('tbody')
@foreach ($baptismals as $baptismal)
<tr>
    <th>
        {{$baptismal->id}}
    </th>

    <td>
        <div class="block">
            {{$baptismal->customer->full_name}}
        </div>

        <div class="block text-muted">
            <small>By: {{$baptismal->customer->user->email}}</small>
        </div>
    </td>


    <td>
        {{$baptismal->priest_name}}
    </td>

    <td>
        {{$baptismal->baptismal_date->toFormattedDateString()}}
    </td>


    <td>
        <div class="block">
            {{$baptismal->updated_at->toFormattedDateString()}}
        </div>

        <div class="block text-muted">
            <small>{{$baptismal->updated_time}}</small>
        </div>
    </td>

    <td>


        <div class="btn-group" role="group" aria-label="Basic example">
            <a href="{{route('baptismals.show',[
                'baptismal'=>$baptismal->id
            ])}} " class="btn btn-success" data-toggle="tooltip" data-placement="top" title="View">
                <span class="fas fa-eye"></span>
            </a>

            <a href="{{route('baptismals.edit',[
                'baptismal'=>$baptismal->id
            ])}} " class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Edit">
                <span class="fas fa-edit"></span>
            </a>
        </div>

    </td>

</tr>


@endforeach
@endsection