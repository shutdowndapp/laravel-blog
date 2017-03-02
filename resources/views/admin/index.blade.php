@extends('layouts.admin-master')

@section('styles')
    <link rel="stylesheet" href="{{ URL::to('src/css/modal.css') }}">
@endsection

@section('content')
    <div class="container">
        @include('includes.info-box')
        <div class="card">
            <header>
                <nav>
                    <ul>
                        <li><a href="" class="btn">New Post</a></li>
                        <li><a href="" class="btn">Show all Post</a></li>
                    </ul>
                </nav>
            </header>
            <section>
                <ul>
                    {{-- if no posts      --}}
                    <li>No posts</li>
                    {{-- if posts --}}
                    <li>
                        <article>
                            <div class="post-info">
                                <h3>Post Title</h3>
                                <span class="info">Post Author | Date</span>
                            </div>
                            <div class="edit">
                                <nav>
                                    <ul>
                                        <li><a href="">View Post</a></li>
                                        <li><a href="">Edit</a></li>
                                        <li><a href="" class="danger">Delete</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </article>
                    </li>
                </ul>
            </section>
        </div>

          <div class="card">
            <header>
                <nav>
                    <ul>
                        <li><a href="" class="btn">Show all Message</a></li>
                    </ul>
                </nav>
            </header>
            <section>
                <ul>
                    {{-- if no Message      --}}
                    <li>No Message</li>
                    {{-- if Message --}}
                    <li>
                        <article data-message="Body" data-id="ID">
                            <div class="message-info">
                                <h3>Message subject</h3>
                                <span class="info">seeder ... | Date</span>
                            </div>
                            <div class="edit">
                                <nav>
                                    <ul>
                                        <li><a href="">View</a></li>
                                        <li><a href="" class="danger">Delete</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </article>
                    </li>
                </ul>
            </section>
        </div>
    </div>
    <div class="modal" id="contact-message-info">
        <button class="btn" id="modal-close">Close</button>
    </div>
@endsection

@section('scripts')
    <script>
        var token = "{{ csrf_token() }}";
    </script>
    <script src="{{ URL::to('src/js/modal.js') }}"></script>
    <script src="{{ URL::to('src/js/contact_message.js') }}"></script>
@endsection
