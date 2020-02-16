@extends('layout')


@push('meta')
<title>Blog | JMS Commercial Cleaning Commercial | Cleaning Tips</title>
<meta name="title" content="JMS Commercial Cleaning - Professional Cleaning Services">
<meta name="description" content="Based in Southend, Essex, JMS Commercial Cleaning is a reliable cleaning company that has built up a solid reputation, purely built on trust in Southend, Basildon, and surrounding areas. We pride ourselves on our reliable, consistent and friendly commercial cleaning service for our customers.
"/>
@endpush

@section('page')
    <div class="page-header">
        <h1 class="heading-primary--type-1">Blog</h1>
    </div>
        <div class="container">
            <section class="u-section-padding posts">
                @foreach($posts as $post) 
                    <div class="blog-post">
                        <div class="blog-post__thumb" style="background-image: url('/landing/pic1.jpg')"></div>
                        <div class="blog-post__content">
                            <a href="/blog/{{$post->slug}}" class="blog-posts__title heading-tertiary u-margin-small">{{$post->title}}</a>
                            <p class="paragraph u-margin-small">{{date('L F Y', strtotime($post->created_at))}}</p>
                            <p class="paragraph">{{$post->excerpt}}...</p>
                        </div>    
                    </div>
                @endforeach
            </section>
        </div>
    </div>
@endsection