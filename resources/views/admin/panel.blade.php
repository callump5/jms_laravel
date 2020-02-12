@extends('layouts.admin')

@section('dashboard-title')
Dashboard
@endsection

@section('dashboard-content')
<!-- Approach -->
<div class="row justify-content-around">

  <div class="card shadow mb-4">
    <div class="card-body">
        <a href="{{route('admin-post-index')}}"><h3>Blog Post</h3></a><br>
    </div>
</div>
<div class="card shadow mb-4">
    <div class="card-body">
        <a href="{{route('admin-contact-index')}}"><h3>Contact Request</h3></a>
    </div>
</div>

</div>

@endsection


