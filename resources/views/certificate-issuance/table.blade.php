@extends('base-entity-table',[
'tableHeaders'=>[
'#',
'Type',
'Purpose',
'Signed By',
'Issued By',
'Issued At',
]
])

@section('tbody')

@foreach ($certificates as $certificate)
<tr>
    <th>{{$certificate->id}}</th>
    <td>{{$certificate->formatted_type}}</td>
    <td>{{$certificate->purpose}}</td>
    <td>{{$certificate->priest_name}}</td>
    <td>{{($certificate->user->email)}}</td>

    <td>{{$certificate->created_at}}</td>
</tr>
@endforeach

@endsection