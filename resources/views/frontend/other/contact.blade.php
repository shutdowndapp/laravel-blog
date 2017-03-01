@extends('layouts.master')

@section('title')
    Contact
@endsection

@section('styles')
    <link rel="stylesheet" href="{{ URL::to('src/css/form.css') }}">
@endsection

@section('content')
   @include('includes.info-box')
   <form action="" method="post" id="contact-form">
        <div class="input-group">
            <label for="name">Your name</label>
            <input type="text" name="name" id="name">
        </div>
        <div class="input-group">
            <label for="email">Your email</label>
            <input type="text" name="email" id="email">
        </div>
        <div class="input-group">
            <label for="subject">subject</label>
            <input type="text" name="subject" id="subject">
        </div>
        <div class="input-group">
            <label for="message">Your message</label>
            <textarea name="message" id="message" rows="10"></textarea>
        </div>
        <button type="submit">submit message</button>
        {{ csrf_field() }}
   </form>
@endsection