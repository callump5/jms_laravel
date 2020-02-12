@extends('layouts.admin')

@section('dashboard-title')
Create Blog Post
@endsection

@section('dashboard-content')


<div class="row">
    <div class="col-12">
        <div class="card">
        <form class="card-body" id="posts-form" method="POST" action="/admin-panel/create-post">
            @csrf

            <div class="form-group row">
                <label for="title" class="col-2 col-form-label text-md-left">Title</label>

                <div class="col-10">
                    <input value="{{old('title')}}" id="title" type="string" class="form-control" name="title" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="slug" class="col-2 col-form-label text-md-left">Slug</label>

                <div class="col-10">
                    <input id="slug" type="text" class="form-control" name="slug" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="meta" class="col-2 col-form-label text-md-left">Meta Title</label>

                <div class="col-10">
                    <input value="{{old('meta')}}" id="meta" type="text" class="form-control" name="meta" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="description" class="col-2 col-form-label text-md-left">Meta Description</label>

                <div class="col-10">
                <textarea id="description" type="textarea" class="form-control textarea-height" style="height: 200px;" name="description" required>{{old('description')}}</textarea>
                </div>
            </div>

            <div class="form-group row">
                <label for="excerpt" class="col-2 col-form-label text-md-left">Excerpt</label>

                <div class="col-10">
                <textarea id="excerpt" type="textarea" class="form-control textarea-height" style="height: 500px;" name="excerpt" required>{{old('excerpt')}}</textarea>
                </div>
            </div>

            <div class="form-group row">
                <label for="body" class="col-2 col-form-label text-md-left">Body</label>

                <div class="col-10">
                    <textarea id="body" type="textarea" class="form-control textarea-height" style="height: 500px;" name="body" required>{{old('body')}}</textarea>
                </div>
            </div>
            <button id="create-post"  class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50" style="margin-right: 5px"></i>Create</button>
            
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            

        </form>
        </div>
    </div>
</div>
@endsection

