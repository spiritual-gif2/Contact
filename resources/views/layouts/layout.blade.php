<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','ContactManagement') </title>

    @vite(['resources/js/app.js'])

    <style>
    .view {
        height: fit-content;
    }
    </style>

</head>

<body>
    <div class="container-fluid">

        <!-- Header -->
        <header
            class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom mx-2">
            <div class="col-md-3 mb-2 mb-md-0">
                <a href="/contacts" class="d-inline-flex link-body-emphasis text-decoration-none">
                    <h1 class="">ContactsManagement</h1>
                </a>
            </div>
            <div class="col-md-3 text-end">
                @guest
                    @if (Route::has('login'))
                        <a href="{{ route('login') }}" class="btn btn-outline-primary me-2">{{ __('Login') }}</a>
                    @endif

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn btn-primary">{{ __('Register') }}</a>
                    @endif
                @else
                <div class="dropdown">
                    <a id="navbarDropdown" class="fs-5 dropdown-toggle" href="#" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>
                @endguest


            </div>
        </header>

        <!-- Main -->
        <div class="row">
            <!-- Sidebar -->
            @auth
            <div class="d-flex flex-column flex-shrink-0 p-3 bg-body-tertiary border-3 border-end col-md-3"
                style="width: 280px;">
                <ul class="nav nav-pills flex-column mb-auto">
                    <li class="nav-item">
                        <a href="/contacts" class="nav-link fs-4 {{ Request::path() == 'contacts' ? 'active' : '' }}"
                            aria-current="{{ Request::path() == 'contacts' ? 'page' : '' }}">
                            <span class="d-flex flex-row justify-content-between align-item-center">
                                Contacts
                                <span class="badge text-bg-danger text-light fs-5">@yield('numContact',0) </span>
                            </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/favorite" class="nav-link fs-4 {{ Request::path() == 'favorite' ? 'active' : '' }}"
                            aria-current="{{ Request::path() == 'favorite' ? 'page' : '' }}">
                            <span class="d-flex flex-row justify-content-between align-item-center">
                                Favorite
                                <span class="badge text-bg-danger text-light fs-5">@yield('numFavorite',0)</span>
                            </span>
                        </a>
                    </li>
                    <li class="nav-item mb-4">
                        <a href="/trash" class="nav-link fs-4 {{ Request::path() == 'trash' ? 'active' : '' }}"
                            aria-current="{{ Request::path() == 'trash' ? 'page' : '' }}">
                            <span class="d-flex flex-row justify-content-between align-item-center">
                                Trash
                                <span class="badge text-bg-danger text-light fs-5">@yield('numTrash',0)</span>
                            </span>
                        </a>
                    </li>
                    <li class="nav-item d-grid">
                        <a href="/new" class="btn btn-success text-center fs-4">New Contact</a>
                    </li>
                </ul>
            </div>
            @endauth

            <!-- Content -->
            <div class="container-fluid align-item-center justify-content-center col-md-9">
                @yield('content')
            </div>

        </div>

        <!-- Footer -->
        <footer
            class="fixed-bottom d-flex flex-wrap justify-content-between align-items-center py-3 my-4 pe-4 border-top">
            <div class="col-md-4 d-flex align-items-center">
                <a href="/" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1">
                    <svg class="bi" width="30" height="24">
                        <use xlink:href="#bootstrap" />
                    </svg>
                </a>
                <span class="mb-3 mb-md-0 text-body-secondary">&copy; 2023 Company, Inc</span>
            </div>

            <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                <li class="ms-3"><a class="text-body-secondary link-decoration-none" href="#">test</a></li>
                <li class="ms-3"><a class="text-body-secondary link-decoration-none" href="#">test</a></li>
                <li class="ms-3"><a class="text-body-secondary link-decoration-none" href="#">test</a></li>
            </ul>
        </footer>
    </div>
</body>

</html>