<div class="table-wrapper">
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
      @foreach ($permissions as $permission)
      <tr>
        <th>{{$permission->id}}</th>
        <td>{{ucwords($permission->name)}}</td>
        <td>{{$permission->created_at->toDayDateTimeString()}}</td>
        <td>{{$permission->updated_at->toDayDateTimeString()}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>



