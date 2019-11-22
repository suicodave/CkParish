<div class="table-wrapper mb-3">
    <table class="table table-hover">
        <thead>
            <tr>
                <th class="bg-white" scope="col">#</th>
                <th class="bg-white" scope="col">Name</th>
                <th class="bg-white" scope="col">Created At</th>
                <th class="bg-white" scope="col">Last Update</th>
            </tr>
        </thead>
        <tbody>
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
        </tbody>
    </table>
</div>


<div class="float-right">

    {{$roles->links()}}
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