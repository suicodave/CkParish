@extends('base-entity-table',[
'tableHeaders'=>[
'#',
'Confirmee',
'Priest',
'Confirmation Date',
'Created At',
'Last Updated'
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
            {{$confirmation->created_at->toFormattedDateString()}}
        </div>

        <div class="block text-muted">
            <small>{{$confirmation->created_time}}</small>
        </div>
    </td>

    <td>
        <div class="block">
            {{$confirmation->updated_at->toFormattedDateString()}}
        </div>

        <div class="block text-muted">
            <small>{{$confirmation->updated_time}}</small>
        </div>
    </td>
</tr>
@endforeach
@endsection