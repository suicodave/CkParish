<div class="table-wrapper mb-3">
    <table class="table table-hover">
        <thead>
            <tr>
                <th class="bg-white" scope="col">#</th>
                <th class="bg-white" scope="col">Email</th>
                <th class="bg-white" scope="col">Name</th>
                <th class="bg-white" scope="col">Created At</th>
                <th class="bg-white" scope="col">Last Update</th>
            </tr>
        </thead>
        <tbody>
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
        </tbody>
    </table>
</div>


<div class="float-right">

    {{$users->links()}}
</div>

<style>
    .table-wrapper {
        height: 20em;
        overflow: auto;
    }

    table thead th {
        position: sticky;
        top: 0;
        border-top: 0 !important;
    }
</style>