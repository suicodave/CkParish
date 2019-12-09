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
</tr>
@endforeach
@endsection