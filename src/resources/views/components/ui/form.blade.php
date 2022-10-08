<form method="{{ strtoupper($method) }}" {{ $attributes }}>
    @if (strtoupper($method) != 'GET')
        @csrf
        @if($update)
            @method('PATCH'))
        @endif
    @endif
    {{ $slot }}
</form>
