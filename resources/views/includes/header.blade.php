<header>
    <nav class="main-nav">
        <ul class="nav nav-pills nav-justified">
            <li><a class="{{ Request::is('blog/*') || Request::is('blog') ? 'main-nav-active' : '' }}" href="{{ route('blog.index') }}">Blog</a></li>
            <li><a class="{{ Request::is('about') ? 'main-nav-active' : '' }}" href="{{ route('about') }}">About</a></li>
            <li><a class="{{ Request::is('contact') ? 'main-nav-active' : '' }}" href="{{ route('contact') }}">Contact</a></li>
        </ul>
    </nav>
</header>