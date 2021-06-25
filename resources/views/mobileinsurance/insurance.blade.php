@extends('mobileinsurance.index')
@section('content')

@if(Session::has('errors'))

@endif
@if(Session::has('Message'))

@endif
@livewire('insurance.view-data')
@livewire('insurance.add-form')
@livewire('insurance.edit-form')
@livewire('insurance.insurance-view')
@endsection
