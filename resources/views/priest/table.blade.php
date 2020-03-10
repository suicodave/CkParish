@extends('base-entity-table',[
'tableHeaders'=>[
'#',
'Name',
'Created By',
'Created At',
'Last Updated'
]
])

@section('tbody')
@foreach ($priests as $priest)
<tr>
    <th>
        {{$priest->id}}
    </th>
    <td>
        <a href="{{route('priests.show',[
                    'priest'=>$priest->id
                    ])}}">{{ucwords($priest->name)}}</a>
    </td>
    <td>{{$priest->creator->name}} </td>
    <td>{{$priest->created_at->toDayDateTimeString()}}</td>
    <td>{{$priest->updated_at->toDayDateTimeString()}}</td>
</tr>
@endforeach
@endsection