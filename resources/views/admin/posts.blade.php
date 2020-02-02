@include('partials/header')



<a href="{{route('create-post')}}">Create Post</a>
<table>
<th>
    <tr>
        <td>Post</td>
        <td>Edit</td>
        <td>Delete</td>
    </tr>
</th>
<tbody>
@foreach($posts as $post)
<tr id="post-row-{{$post->id}}">
    <td><a href="{{route( 'edit-post', $post->slug )}}">{{$post->title}}</a></td>
    <td><a href="{{route( 'edit-post', $post->slug )}}">Edit</a></td>
    <td><button data-target='{{$post->id}}' value="{{$post->slug}}" class="delete-btn">Delete</button></td>
</tr>
@endforeach

</tbody>

</table>


<script type="text/javascript">

    $(function(){

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('.delete-btn').click(function(){
            var slug = $(this).attr('value');
            var id = $(this).attr('data-target');
            var target = '.post-row-' + id;
                
            $.ajax({
                type: 'DELETE',
                url: '/admin-panel/blog-post/delete-api',
                data: {
                    slug:slug
                },
                success:function(data){

                    $('#post-row-' + id).remove(); 
                    Swal.fire({
                        title: 'Record Deleted',
                        icon: 'success',
                        confirmButtonText: 'Close'
                    });
                },
                error:function(data){
                    Swal.fire({
                        title: 'Failed',
                        icon: 'error',
                        confirmButtonText: 'Close'
                    });
                }
            });
        
        
        });


    });

</script>
@include('partials/footer')

