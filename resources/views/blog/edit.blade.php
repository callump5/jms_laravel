@include('partials/header')
<form id="posts-edit-form" method="POST" action="/admin-panel/edit-post">
    @csrf


    <label for="title">Title</label>
    <input name="title" type="string" value="{{$post->title}}">

    <label for="slug">Slug</label>
    <input name="slug" type="text" value="{{$post->slug}}">
    
    <label for="excerpt">Excerpt</label>
    <input name="excerpt" type="text" value="{{$post->excerpt}}">

    <label for="body">Body</label>
    <input name="body" type="text" value="{{$post->body}}">

    <label for="image">Image</label>
    <input name="image" type="text" value="{{$post->image}}">

    <input name='id' hidden type="text" value="{{$post->id}}">
ß
    <button id="create-post" type="submit">Create</button>
</form>

@push('footer-scripts')
    <script>
        $(function(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });      

            $('#create-post').click(function(e){
                var title = $("input[name=title]").val();
                var slug = $("input[name=slug]").val();
                var excerpt = $("input[name=excerpt]").val();
                var body = $("input[name=body]").val();
                var image = $("input[name=image]").val();  
                var id = $('input[name=id]').val();
                e.preventDefault();
                $.ajax({
                    data: $('form').serialize(),
                    type: 'POST',
                    url: '/admin-panel/edit-post',
                    data: {
                        id:id,
                        title:title,
                        slug:slug,
                        excerpt:excerpt,
                        body:body,
                        image:image
                    },
                    success:function(data){
                        console.log(data);
                        Swal.fire({
                            title: 'Thanks for getting in touch!',
                            icon: 'success',
                            confirmButtonText: 'Close'
                        });       
                    },
                    error:function(data){
                    Swal.fire({
                        title: 'Opps, There seems to have been a problem.',
                        text: 'Check all fields have been completed and try again.',
                        icon: 'error',
                        confirmButtonText: 'Close'
                    });
                    }
                });
            });
        });
    </script>
@endpush
@include('partials/footer')