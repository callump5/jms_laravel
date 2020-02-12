@extends('layouts.admin')

@section('dashboard-content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">
        <h2>Contact Request</h2></h6>
    </div>
    <div class="card-body">
            <h5>Name: {{$contact->name}}</h5>
            <h5>Number: {{$contact->number}}</h5>
            <h5>Email: {{$contact->email}}</h5>
            <h5>Service: {{$contact->service}}</h5>
            <h5>Name: {{$contact->location}}</h5>
            <h5>Name: {{$contact->message}}</h5>
         <form  method="POST" action="/admin-panel/contact-request/delete">
            @method('DELETE')
            @csrf
            <input name="contact-id" type="text" value="{{$contact->id}}" hidden>
            <button class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" style="margin-top:10px" type="submit">Delete</button>
        </form>
    </div>
  </div>

@endsection