@extends('layouts.master')

@section('title')
    {{ $post->title }}
@endsection

@section('content')
    <article class="col-md-8 col-xs-8 col-md-offset-2 col-xs-offset-2">
        <header class="post-head">
            <h1 class="post-title">{{ $post->title }}</h1>
            <section class="post-meta">
                <span class="author">作者：<a href="">{{ $post->author }}</a></span> •
                <time class="post-date" datetime="{{ $post->created_at }}" title="{{ $post->created_at }}">{{ $post->created_at }}</time>
            </section>
        </header>
        {{-- <span class="subtitle">{{ $post->author }} | {{ $post->created_at }}</span> --}}
        <p>{{ $post->body }}</p>
    </article>
@endsection