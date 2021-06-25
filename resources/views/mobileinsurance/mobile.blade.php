@extends('mobileinsurance.index')
@section('content')
@if(Session::has('errors'))

@endif
@if(Session::has('Message'))

@endif
@if(Session::has('Success'))
<div class="btn btn-info sesion">
    <p class="btn btn-info sesion">{{ Session::get('Success') }}</p>
</div>
@endif

@livewire('view-data')
@livewire('add-form')
@livewire('edit-form')
@livewire('mobile-view')
@endsection
