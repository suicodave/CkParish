@extends('base-entity-table',[
'tableHeaders'=>[
'#',
'Email',
'Name',
'Created At',
'Last Updated',
''
]
])

@section('tbody')
@foreach ($users as $user)
<tr @if ($user->trashed())
    data-toggle="tooltip"
    title="Deactivated at: {{$user->deleted_at->toDayDateTimeString()}}"
    @endif
    >
    <th>
        {{$user->id}}
    </th>
    <td>
        <span class="{{$user->trashed() ? 'text-danger' : ''}}">
            {{$user->email}}
        </span>

    </td>
    <td>
        <a href="{{route('users.show',[
                'user'=>$user->id
                ])}}">{{ucwords($user->name)}}</a>
    </td>
    <td>{{$user->created_at->toDayDateTimeString()}}</td>
    <td>{{$user->updated_at->toDayDateTimeString()}}</td>
    <td>

        @if ($user->trashed())
        <form action="{{route('users.reactivate',[
            'user'=>$user->id
        ])}} " method="post">
            @csrf
            @method('PUT')
            <button class="btn btn-success" data-toggle="tooltip" title="Reactivate">
                <i class="fas fa-recycle"></i>
            </button>
        </form>

        @endif

        @unless($user->trashed())

        <form method="post" action="{{route('users.destroy',[
            'user'=>$user->id
        ])}}" method="post">

            @csrf
            @method('DELETE')

            <button class="btn btn-danger" data-toggle="tooltip" title="Deactivate">
                <i class="fas fa-ban "></i>
            </button>

        </form>


        @endunless

    </td>
</tr>
@endforeach
@endsection