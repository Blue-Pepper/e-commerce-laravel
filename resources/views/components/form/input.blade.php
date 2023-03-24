@props(['name'])
<label lass="form-label">{{ ucwords($name) }}</label>
<input type="{{ $name }}" class="form-control" {{ $attributes }}>
