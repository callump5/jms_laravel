@extends('layouts.admin')


@include('partials/header')


@section('dash-title')
Blog Post
@endsection

@section('buttons')
<a href="{{route('create-post')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i>Create Post</a>
@endsection

@section('dashboard')


@foreach($posts as $post)
<div id="post-row-{{$post->id}}" class="card shadow mb-4">
    <div class="card-header d-sm-flex align-items-center justify-content-between mb-4">
      <h6 class="m-0 font-weight-bold text-primary"><a href="{{route( 'edit-post', $post->slug )}}">{{$post->title}}</a></h6>
      
      <div>
        <a class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" href="{{route( 'edit-post', $post->slug )}}">Edit</a>
        <button data-target='{{$post->id}}' value="{{$post->slug}}" class="delete-btn d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Delete</button>  
      </div>
      
    </div>
    <div class="card-body">
        <p>{{$post->excerpt}}</p>
    </div>
</div>

@endforeach


@endsection


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

