<div class="table-wrapper mb-3">
    <table class="table table-hover ">
        <thead>
            <tr>
                <th class="bg-white text-heading" scope="col">#</th>
                <th class="bg-white text-heading" scope="col">Email</th>
                <th class="bg-white text-heading" scope="col">Name</th>
                <th class="bg-white text-heading" scope="col">Created At</th>
                <th class="bg-white text-heading" scope="col">Last Update</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr  >
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



