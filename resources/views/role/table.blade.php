<div class="table-wrapper mb-3">
    <table class="table table-hover">
        <thead>
            <tr>
                <th class="bg-white text-heading" scope="col">#</th>
                <th class="bg-white text-heading" scope="col">Name</th>
                <th class="bg-white text-heading" scope="col">Created At</th>
                <th class="bg-white text-heading" scope="col">Last Update</th>
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