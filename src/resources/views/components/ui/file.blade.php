<div class="form-group">
    @if($label)
        <label for="{{ $id }}" class="form-label">{{ $label }}
            @if($required)
                <span class="text-danger">*</span>
            @endif
        </label>
    @endif
    <input type="file" class="@if(config('buicomponents.error')) @error($name) is-invalid @enderror @endif {{ 'form-control '.$class }}" id="{{ $id }}" name="{{ $name }}" @if($help) aria-describedby="{{ $name }}Help" @endif {{ $attributes }} value="{{ old($name,$slot) }}" @if($required) required @endif>
    @if($help)
        <small id="{{ $name }}Help" class="form-text text-muted">{{ $help }}</small>
    @endif
    @if(config('buicomponents.error'))
        @error($name)
        <span class="invalid-feedback" role="alert">
            <strong>{{ __($message) }}</strong>
        </span>
        @enderror
    @endif
</div>
