@extends('layout')


@push('meta')
    <title>{{$post->meta}} | JMS Commercial Cleaning Commercial</title>
    <meta name="title" content="{{$post->meta}} | JMS Commercial Cleaning Commercial | Essex<">
    <meta name="description" content="{{$post->description}}" />
@endpush

@section('page')

<div class="page-header">
    <div class="container">
        <h1 class="heading-primary--type-1">Blog Post</h1>
    </div>
</div>

<div class="container">
    
    <section class="u-section-padding">
        <h2 href="/blog/{{$post->slug}}" class="post__title heading-tertiary u-margin-important">{{$post->title}}</h2>

        <div class="post__content">{!!$post->body!!}</div>
    </section>
</div>
@endsection