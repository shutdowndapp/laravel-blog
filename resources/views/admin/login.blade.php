@extends('layouts.admin-master')

@section('styles')
    <link rel="stylesheet" href="{{ URL::to('src/css/form.css') }}">
@endsection
@section('content')
    <div class="contaienr">
        @include('includes.info-box')
        <form action="{{route('admin.login')}}" method="post">
            <div class="input-group">
                <label for="email">E-mail</label>
                <input type="text" id="email" name="email" {{ $errors->has('email') ? 'class=has-error' : '' }} value="{{ Request::old('email') }}">
            </div>
            <div class="input-group">
                <label for="password">E-mail</label>
                <input type="password" id="password" name="password" {{ $errors->has('password') ? 'class=has-error' : '' }}>
            </div>
            <button type="submit" class="btn">Login</button>
            {{ csrf_field() }}
        </form>
    </div>
@endsection