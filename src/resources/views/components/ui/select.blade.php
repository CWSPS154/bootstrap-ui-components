@if(config('buicomponents.select2.enable'))
    @pushonce('styles')
            <!-- Select2 -->
            <link rel="stylesheet" href="{{config('buicomponents.select2.css')}}">
            <link rel="stylesheet" href="{{config('buicomponents.select2.theme')}}">
            <style>
                .select2-selection__rendered {
                    line-height: 31px !important;
                }

                .select2-container .select2-selection--single {
                    height: 38px !important;
                }

                .select2-selection__arrow {
                    height: 38px !important;
                }
            </style>
    @endpushonce
@endif
<div class="form-group">
    <label>{{__($label)}} @if($required)
            <span class="text-danger">*</span>
        @endif</label>
    @if($multiple)
        <div class="select2-purple">
            @endif
            <select class="{{ 'form-control '.$class }} @if(config('buicomponents.select2.enable')) select2 @endif" @if($multiple) multiple="multiple" @endif name="{{$name}}"
                    id="{{$id}}" @if($required) required @endif style="width: 100%;" {{ $attributes }}>
                @if($default)
                    <option value="" selected disabled>{{ $default }}</option>
                @endif
                @if(is_array($options))
                    @forelse($options as $optionValue => $option)
                        <option @selected(old($name,$value)==$optionValue) value="{{$optionValue}}">{{__($option)}}</option>
                    @empty
                    @endforelse
                @endif
            </select>
            @if($multiple)
        </div>
    @endif
    @if(config('buicomponents.error'))
        @error($name)
        <span class="invalid-feedback" role="alert">
            <strong>{{ __($message) }}</strong>
        </span>
        @enderror
    @endif
</div>
<!-- /.form-group -->
@if(config('buicomponents.select2.enable'))
    @pushonce('scripts')
        @once
            <!-- Select2 -->
            <script src="{{config('buicomponents.select2.js')}}"></script>
        @endonce
        <script>
            $(function () {
                //Initialize Select2 Elements
                @if(!is_array($options))
                $('.{{$class}}').select2({
                    placeholder: '{{ $default }}',
                    triggerChange: true,
                    ajax: {
                        url: "{{ route($options) }}",
                        type: "get",
                        dataType: 'json',
                        delay: 250,
                        data: function (params) {
                            return {
                                search: params.term // search term
                            };
                        },
                        processResults: function (response) {
                            return {
                                results: response
                            };
                        },
                        cache: true
                    },
                    allowClear: true,
                    formatSelection: function (data) {
                        return data.text;
                    }@if(old($name,$value)),
                    initSelection: function (element, callback) {
                        let id = {{ old($name,$value) }};
                        if (id) {
                            $.ajax("{{ route($options) }}", {
                                data: {id: id},
                                dataType: "json"
                            }).done(function (data) {
                                let newOption = new Option(data[0].text, data[0].id, true, true);
                                $('.{{$class}}').append(newOption).trigger('change');
                                callback(data);
                            });
                        }
                    }@endif
                });
                @else
                $('.{{$class}}').select2();
                @endif
                //Initialize Select2 Elements
                // $('.select2bs4').select2({
                //     theme: 'bootstrap4'
                // })
            });
        </script>
    @endpushonce
@endif
