@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Admin Panel</div>
                <div class="card-body">
                    <a href="{{route('admin-post-index')}}">Blog Post</a>
                    <a href="{{route('admin-contact-index')}}">Contact Request</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


