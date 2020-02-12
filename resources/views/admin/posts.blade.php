@extends('layouts.admin')


@include('partials/header')


@section('dashboard-title')
Blog Posts
@endsection


@push('dashboard-buttons')
    @component('components/admin/button', [
        'href' => '/admin-panel/blog-post/create',
        'icon' => 'plus',
        'text' => 'Add Item'
    ])
    @endcomponent
@endpush

@section('dashboard-content')


@foreach($posts as $post)
@component('components/admin/post-card', [
    'post' => $post
])
@endcomponent
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

