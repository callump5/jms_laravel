@extends('layouts.admin')

@section('dash-title')
Dashboard
@endsection

@section('dashboard')
<!-- Approach -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Admin Panel</h6>
    </div>
    <div class="card-body">
        <a href="{{route('admin-post-index')}}">Blog Post</a><br>
        <a href="{{route('admin-contact-index')}}">Contact Request</a>
    </div>
</div>

@endsection


