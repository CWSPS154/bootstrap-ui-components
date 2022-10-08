@extends('bui-components::layout.app')
@section('contents')
    <div class="card">
        <div class="card-header">
            Form
        </div>
        <div class="card-body">
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <div class="form-group form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                    <label class="form-check-label" for="exampleRadios1">
                        Default radio
                    </label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
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
