@extends('base-entity-table',[
'tableHeaders'=>[
'#',
'Type',
'Subject',
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
    <td>{{$certificate->issuable->customer_name}}</td>
    <td>{{$certificate->purpose}}</td>
    <td>{{$certificate->priest_name}}</td>
    <td>{{($certificate->user->email)}}</td>

    <td>{{$certificate->created_at->toDayDateTimeString()}}</td>

    <td>
        <a class="btn btn-primary text-white" href="{{$certificate->issuable->getLink($certificate->issuable_id)}} ">
            <span class="fas fa-external-link-alt"></span>
        </a>

    </td>
</tr>
@endforeach

@endsection