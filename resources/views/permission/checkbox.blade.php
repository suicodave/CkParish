@php
$permissions = App\Permission::oldest('name')->get(['name']);
@endphp


@foreach ($permissions as $permission)
<div class="form-check col-4 mb-3">
    <input type="checkbox" value="{{$permission->name}}" name="permissions[]" class="form-check-input"
        id="exampleCheck{{$loop->index}}" @isset($existingPermissions)
        {{ in_array($permission->name,$existingPermissions) && isset($existingPermissions) ? 'checked' : 'false' }}
        @endisset>
    <label class="form-check-label" for="exampleCheck{{$loop->index}}">{{$permission->name}}</label>
</div>
@endforeach