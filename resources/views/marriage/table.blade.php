@extends('base-entity-table',[
'tableHeaders'=>[
'#',
'Husband & Wife',
'Priest',
'Wedding Date',
'Last Updated',
'Action'
]
])

@section('tbody')

@foreach ($marriages as $marriage)
<tr>
    <th>
        {{$marriage->id}}
    </th>

    <td>
        <div class="block">
            {{$marriage->married_names}}
        </div>

        <div class="block text-muted">
            <small>By: {{$marriage->user->email}}</small>
        </div>
    </td>


    <td>
        {{$marriage->priest_name}}
    </td>

    <td>
        {{$marriage->wedding_date}}
    </td>


    <td>
        <div class="block">
            {{$marriage->updated_at}}
        </div>

        <div class="block text-muted">
            <small>{{$marriage->updated_time}}</small>
        </div>
    </td>

    <td>


        <div class="btn-group" role="group" aria-label="Basic example">
            <a href="{{route('marriages.show',[
                'marriage'=>$marriage->id
            ])}} " class="btn btn-success" data-toggle="tooltip" data-placement="top" title="View">
                <span class="fas fa-eye"></span>
            </a>

            <a href="{{route('marriages.edit',[
                'marriage'=>$marriage->id
            ])}} " class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Edit">
                <span class="fas fa-edit"></span>
            </a>
        </div>

    </td>

</tr>


@endforeach
@endsection