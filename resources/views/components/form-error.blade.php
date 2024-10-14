@props(['name'])
@error($name)
    <div class="text-sm text-red-600 font-semibold mt-1">{{ $message }}</div>
@enderror