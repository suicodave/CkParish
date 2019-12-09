@extends('base-entity-table',[
'tableHeaders'=>[
'#',
'Name',
'Created At',
'Last Updated'
]
])

@section('tbody')
@foreach ($roles as $role)
<tr>
    <th>
        {{$role->id}}
    </th>
    <td>
        <a href="{{route('roles.show',[
                    'role'=>$role->id
                    ])}}">{{ucwords($role->name)}}</a>
    </td>
    <td>{{$role->created_at->toDayDateTimeString()}}</td>
    <td>{{$role->updated_at->toDayDateTimeString()}}</td>
</tr>
@endforeach
@endsection