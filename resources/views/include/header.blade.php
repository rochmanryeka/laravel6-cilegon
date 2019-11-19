<header>
    <ul class="nav nav-tabs justify-content-center mt-4">
        <li class="nav-item">
            <a class="nav-link {{\Request::is('/')?'active':''}}" href="{{ route('home') }}">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{\Request::is('blog*')?'active':''}}" href="{{ route('blog') }}">Blog</a>
        </li>
    </ul>
</header>