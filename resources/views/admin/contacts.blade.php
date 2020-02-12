@extends('layouts.admin')


@include('partials/header')


@section('dashboard-title')
Contact Requests
@endsection


@section('dashboard-content')

    @foreach($contacts as $contact)
        @component('components/admin/contact-card', ['contact' => $contact])
            
        @endcomponent
    @endforeach

@endsection

@include('partials/footer')

