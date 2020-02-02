@extends('layout');
@section('page')

<div class="u-container">
    <section>
        <h1 class="heading-tertiary u-trim">{{$post->title}}</h1>
        <div>{!!$post->body!!}</div>
    </section>
</div>
@endsection