<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        @can('index visitors')
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('visitors.index') }}">Visitors</a>
                        </li>
                        @endcan
                        @can ('create visitors')
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('visitors.create') }}">Create Visitor</a>
                        </li>
                        @endcan
                        <!-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="visitorDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Visitor
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="visitorDropdown">
                                <li><a class="dropdown-item" href="{{ route('visitors.index') }}">Visitor List</a></li>
                                <li><a class="dropdown-item" href="{{ route('visitors.create') }}">Create Visitor</a></li>
                            </ul>
                        </li> -->
                        <!-- @can('index blogs') -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('blogs.index') }}">Blogs</a>
                        </li>
                        <!-- @endcan -->
                        <!-- @can('create blogs') -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('blogs.create') }}">Create Blog</a>
                        </li>
                        <!-- @endcan -->
                        @can('index users')
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('users.index') }}">Users</a>
                        </li>
                        @endcan
                        @can('create users')
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('users.create') }}">Create User</a>
                        </li>
                        @endcan
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a class="nav-link position-relative" href="#" id="notificationDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" title="{{ __('Notifications') }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-bell" viewBox="0 0 16 16" aria-hidden="true">
                                        <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.98 8.178 12 6.756 12 6a4 4 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"/>
                                    </svg>
                                    @if (($navbarUnreadNotificationCount ?? 0) > 0)
                                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" style="font-size: 0.65rem;">
                                            {{ $navbarUnreadNotificationCount > 99 ? '99+' : $navbarUnreadNotificationCount }}
                                        </span>
                                    @endif
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end p-0" aria-labelledby="notificationDropdown" style="min-width: 320px; max-width: 360px;">
                                    <li class="px-3 py-2 border-bottom small text-muted">{{ __('Notifications') }}</li>
                                    @forelse (($navbarUnreadNotifications ?? []) as $n)
                                        @php
                                            $nData = $n->data;
                                            $nMessage = is_array($nData) && isset($nData['message']) ? $nData['message'] : null;
                                        @endphp
                                        <li>
                                            <a class="dropdown-item py-2 px-3 {{ $loop->last ? '' : 'border-bottom' }}" href="{{ route('notifications.show', $n->id) }}">
                                                <div class="fw-semibold small">{{ \Illuminate\Support\Str::headline(class_basename($n->type)) }}</div>
                                                @if ($nMessage)
                                                    <div class="text-muted small text-truncate">{{ $nMessage }}</div>
                                                @endif
                                                <div class="text-muted" style="font-size: 0.75rem;">{{ $n->created_at->diffForHumans() }}</div>
                                            </a>
                                        </li>
                                    @empty
                                        <li class="px-3 py-3 text-muted small">{{ __('No unread notifications.') }}</li>
                                    @endforelse
                                    <li class="border-top bg-light">
                                        <a class="dropdown-item text-center fw-semibold py-2" href="{{ route('notifications.index') }}">{{ __('View all notifications') }}</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name}}   
                                </a>
                                 
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('authentication-logs.index') }}">{{ __('Authentication Logs') }}</a>
                                    Last login: {{ Auth::user()->lastLoginAt()->format('d/m/Y H:i:s') }}
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
