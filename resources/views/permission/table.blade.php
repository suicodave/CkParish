<div class="table-wrapper mb-5">
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
      @foreach ($permissions as $permission)
      <tr>
        <th>{{$permission->id}}</th>
        <td>{{$permission->name}}</td>
        <td>{{$permission->created_at->toDayDateTimeString()}}</td>
        <td>{{$permission->updated_at->toDayDateTimeString()}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>


<div class="float-right">

  {{$permissions->links()}}
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