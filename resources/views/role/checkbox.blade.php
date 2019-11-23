@php
$roles = App\Role::oldest('name')->get(['name']);
@endphp


@foreach ($roles as $role)
<div class="form-check col-4 mb-3">
    <input type="checkbox" value="{{$role->name}}" name="roles[]" class="form-check-input"
        id="exampleCheckRole{{$loop->index}}" @isset($existingRoles)
        {{ in_array($role->name,$existingRoles) && isset($existingRoles) ? 'checked' : 'false' }} @endisset>
    <label class="form-check-label" for="exampleCheckRole{{$loop->index}}">{{ucwords($role->name)}}</label>
</div>
@endforeach