<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('head')
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="navbar-brand text-monospace" href="{{ url('/') }}">
                            TypeWriter
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/online-text-editor') }}">
                            Try Online
                        </a>
                    </li>
                @if (Route::has('login'))
                        @auth
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/dashboard') }}">Dashboard</a>
                        </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Login</a>
                            </li>

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">Register</a>
                                </li>
                            @endif
                        @endif
                    </ul>
                @endif
            </div>
        </nav>

        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
        @include('footer')
    </body>
</html>
