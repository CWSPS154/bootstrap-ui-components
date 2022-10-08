<div class="form-group">
    <label for="{{ $id }}">
        {{ $label }}
        @if($required)
            <span class="text-danger">*</span>
        @endif
    </label>
    <textarea class="form-control" id="{{ $id }}" name="{{ $name }}" placeholder="{{ $placeholder }}" {{ $attributes }}>{{ $slot }}</textarea>
    @if(config('buicomponents.error'))
        @error($name)
        <span class="invalid-feedback" role="alert">
            <strong>{{ __($message) }}</strong>
        </span>
        @enderror
    @endif
</div>
