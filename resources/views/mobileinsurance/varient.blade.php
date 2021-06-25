@extends('mobileinsurance.index')
@section('content')
@if(Session::has('errors'))

@endif
@if(Session::has('Message'))

@endif

@livewire('varient.view-data')
@livewire('varient.add-form')
@livewire('varient.edit-form')
@livewire('varient.mobile-view')
@endsection
