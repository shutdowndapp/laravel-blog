@extends('layouts.master')

@section('title')
    Blog Index test
@endsection

@section('styles')
    <link href="//cdn.bootcss.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
@endsection

@section('content')
    @include('includes.info-box')
    <main class="col-md-8 col-xs-8 col-md-offset-2 col-xs-offset-2">
            @foreach($posts as $post)
                <article class="blog-post">
                    <h2>{{ $post->title }}</h2>
                    <div class="post-meta">
                        <span class="author">作者：<a href="">{{ $post->author }}</a></span> •
                        <time class="post-date" datetime="{{ $post->created_at }}" title="{{ $post->created_at }}">{{ $post->created_at }}</time>
                    </div>
                    <p>{{ $post->body }}</p>
                    <a class="btn btn-success" href="{{ route('blog.single',['post_id' => $post->id,'end' => 'frontend']) }}">Read more</a>
                </article>
            @endforeach
            @if($posts->lastPage() > 1)
                <section class="pagination">
                    @if ($posts->currentPage() !== 1)
                        <a href="{{ $posts->previousPageUrl() }}"><i class="fa fa-caret-left"></i></a>
                    @endif
                    @if ($posts->currentPage() !== $post->lastPage())
                        <a href="{{ $posts->nextPageUrl() }}"><i class="fa fa-caret-right"></i></a>
                    @endif
                </section>
            @endif
    </main>


        
    
@endsection