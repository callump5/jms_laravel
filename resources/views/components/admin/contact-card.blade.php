<div id="post-row-{{$contact->id}}" class="card shadow mb-4">
    <div class="card-header d-sm-flex align-items-center justify-content-between mb-4">
    <h6 class="m-0 font-weight-bold text-primary"><a href="{{route( 'view-contact', $contact )}}">{{$contact->name}}</a></h6>
    @if ($contact->viewed == true)
        <i class="fas fa-eye"></i>
    @else
        <i class="fas fa-eye-slash"></i>    
    @endif
    
    </div>
    <div class="card-body">
        <p>{{$contact->message}}</p>
    </div>
</div>