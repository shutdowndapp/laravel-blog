@extends('layouts.master')

@section('title')
    Contact
@endsection

@section('styles')
    <style>
        form {
            margin: 15px 0;
        }
    </style>
@endsection

@section('content')
   @include('includes.info-box')

   <form action="{{route('contact.send')}}" method="post" id="contact-form">
        <div class="form-group">
            <label for="name">Your name</label>
            <input type="text" class="form-control" name="name" id="name" value="{{ Request::old('name') }}">
        </div>
        <div class="form-group">
            <label for="email">Your email</label>
            <input type="text" class="form-control" name="email" id="email" value="{{ Request::old('email') }}">
        </div>
        <div class="form-group">
            <label for="subject">subject</label>
            <input type="text" class="form-control" name="subject" id="subject" value="{{ Request::old('subject') }}">
        </div>
        <div class="form-group">
            <label for="message">Your message</label>
            <textarea name="message" class="form-control" id="message" rows="10">{{ Request::old('message') }}</textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success from-control">submit message</button>
        </div>
        {{ csrf_field() }}
   </form>
@endsection