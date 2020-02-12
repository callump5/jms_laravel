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