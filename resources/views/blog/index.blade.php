@extends('layout')



@section('page')
    <div class="page-header u-section-padding">
        <h1 class="heading-primary--type-1">Blog</h1>
    </div>
    <div>
        @foreach($posts as $post)
            <div class="blog-section @if($loop->index  % 2 == 0) @else u-color-offset @endif">
                <div class="u-container">
                    <div class="blog-posts">
                        <div class="row @if($loop->index  % 2 == 0)u-flex-row @else u-flex-row-reverse @endif">
                            <div class="fifty">
                                <img class="blog-posts__image" src="/landing/pic1.jpg">
                            </div>
                            <div class="fifty  @if( $loop->index  % 2 == 0) u-pad-left-10 @else u-pad-right-10 @endif">
                                <a href="/blog/{{$post->slug}}" class="blog-posts__title heading-tertiary u-margin-small">{{$post->title}}</a>
                                <p class="paragraph u-margin-small">{{date('L F Y', strtotime($post->created_at))}}</p>
                                <p class="paragraph">{{$post->excerpt}}...</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
@endsection