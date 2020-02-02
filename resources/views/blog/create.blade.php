@include('partials/header')
<form id="posts-form" method="POST" action="/admin-panel/create-post">
    @csrf

    <label for="title">Title</label>
    <input value="{{old('title')}}" name="title" type="string">

    <label for="slug">Slug</label>
    <input value="" name="slug" type="text">
    
    <label for="excerpt">Excerpt</label>
    <input value="{{old('excerpt')}}"name="excerpt" type="text">

    <label for="body">Body</label>
    <input value="{{old('body')}}"name="body" type="textarea">

    <label for="image">Image</label>
    <input value="{{old('image')}}" name="image" type="text">

    <button id="create-post" type="submit">Create</button>

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
