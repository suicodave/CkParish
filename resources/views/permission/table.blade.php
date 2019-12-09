@extends('base-entity-table',[
'tableHeaders'=>[
'#',
'Name',
'Created At',
]
])

@section('tbody')

@foreach ($permissions as $permission)
<tr>
  <th>{{$permission->id}}</th>
  <td>{{ucwords($permission->name)}}</td>
  <td>{{$permission->created_at->toDayDateTimeString()}}</td>
</tr>
@endforeach

@endsection