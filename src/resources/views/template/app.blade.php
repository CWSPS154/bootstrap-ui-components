@extends('bui-components::layout.app')
@section('contents')
    <x-buicomponents::ui.form method="POST" action="{{ route('test') }}">
            <x-buicomponents::ui.input type="text" name="test" label="Test" placeholder="Please Enter" data-id="taa" required>Sanoop</x-buicomponents::ui.input>
            <x-buicomponents::ui.checkbox name="checkbox" id="testc" value="1" required>Check me out</x-buicomponents::ui.checkbox>
            <x-buicomponents::ui.radio name="checkbox" id="test1" value="1" required>Check me out</x-buicomponents::ui.radio>
            <x-buicomponents::ui.radio name="checkbox" id="test3" value="1" required>Check me out</x-buicomponents::ui.radio>
            <x-buicomponents::ui.select label="Street Area" name="area_id" id="area_id" required :options="['test'=>'fff']" class="area" value="test"></x-buicomponents::ui.select>
            <x-buicomponents::ui.textarea name="textarea" required label="Textarea">Check me out</x-buicomponents::ui.textarea>
            <x-buicomponents::ui.button name="save" color="primary" class="test" data-id="test">Save</x-buicomponents::ui.button>
    </x-buicomponents::ui.form>
@endsection
