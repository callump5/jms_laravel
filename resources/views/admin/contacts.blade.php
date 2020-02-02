@extends('layouts.admin')


@include('partials/header')


@section('dash-title')
Contact Requests
@endsection

@section('buttons')
@endsection

@section('dashboard')

    @foreach($contacts as $contact)
        <div id="post-row-{{$contact->id}}" class="card shadow mb-4">
            <div class="card-header d-sm-flex align-items-center justify-content-between mb-4">
            <h6 class="m-0 font-weight-bold text-primary"><a href="{{route( 'view-contact', $contact )}}">{{$contact->name}}</a></h6>
            </div>
            <div class="card-body">
                <p>{{$contact->message}}</p>
            </div>
        </div>
    @endforeach


@endsection

@include('partials/footer')

