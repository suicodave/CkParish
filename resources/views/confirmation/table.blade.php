@extends('base-entity-table',[
'tableHeaders'=>[
'#',
'Confirmee',
'Priest',
'Confirmation Date',
'Last Updated',
'Action'
]
])

@section('tbody')
@foreach ($confirmations as $confirmation)
<tr>
    <th>
        {{$confirmation->id}}
    </th>

    <td>
        <div class="block">
            {{$confirmation->customer->full_name}}
        </div>

        <div class="block text-muted">
            <small>By: {{$confirmation->customer->user->email}}</small>
        </div>
    </td>


    <td>
        {{$confirmation->priest_name}}
    </td>

    <td>
        {{$confirmation->confirmation_date->toFormattedDateString()}}
    </td>


    <td>
        <div class="block">
            {{$confirmation->updated_at->toFormattedDateString()}}
        </div>

        <div class="block text-muted">
            <small>{{$confirmation->updated_time}}</small>
        </div>
    </td>

    <td>


        <div class="btn-group" role="group" aria-label="Basic example">
            <a href="{{route('confirmations.print-preview',[
                'confirmation'=>$confirmation->id
            ])}} " class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Print Preview">
                <span class="fas fa-eye"></span>
            </a>

            <a href="{{route('confirmations.edit',[
                'confirmation'=>$confirmation->id
            ])}} " class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Edit">
                <span class="fas fa-edit"></span>
            </a>
        </div>

    </td>

</tr>


@endforeach
@endsection