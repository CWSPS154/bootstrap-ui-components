<div class="form-group form-check">
    <input type="checkbox" class="@if(config('buicomponents.error')) @error($name) is-invalid @enderror @endif {{ 'form-check-input '.$class }}" id="{{ $id }}" name="{{ $name }}" {{ $attributes }} value="{{ old($name,$value) }}" @checked(old($name,$value)) @if($required) required @endif>
    <label class="form-check-label" for="{{ $id }}">
        {{ $slot }}
        @if($required)
            <span class="text-danger">*</span>
        @endif
    </label>
    @if(config('buicomponents.error'))
        @error($name)
        <span class="invalid-feedback" role="alert">
            <strong>{{ __($message) }}</strong>
        </span>
        @enderror
    @endif
</div>
