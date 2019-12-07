@extends('base-entity-table',[
'tableHeaders'=>[
'#',
'Email',
'Name',
'Created At',
'Last Updated'
]
])

@section('tbody')
@foreach ($users as $user)
<tr>
    <th>
        {{$user->id}}
    </th>
    <td>
        {{$user->email}}
    </td>
    <td>
        <a href="{{route('users.show',[
                'user'=>$user->id
                ])}}">{{ucwords($user->name)}}</a>
    </td>
    <td>{{$user->created_at->toDayDateTimeString()}}</td>
    <td>{{$user->updated_at->toDayDateTimeString()}}</td>
</tr>
@endforeach
@endsection