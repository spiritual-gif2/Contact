<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    @vite(['resources/js/app.js'])
</head>

<body>
    <div class="container-fluid">

        <!-- Header -->
        <header
            class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom mx-2">
            <div class="col-md-3 mb-2 mb-md-0">
                <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
                    <h1 class="">ContactsManagement</h1>
                </a>
            </div>
            <div class="col-md-3 text-end">
                <button type="button" class="btn btn-outline-primary me-2">Login</button>
                <button type="button" class="btn btn-primary">Sign-up</button>
            </div>
        </header>

        <!-- Main -->
        <div class="row">
            <!-- Sidebar -->
            <div class="d-flex flex-column flex-shrink-0 p-3 bg-body-tertiary border-3 border-end col-md-3"
                style="width: 280px;">
                <ul class="nav nav-pills flex-column mb-auto">
                    <li class="nav-item">
                        <a href="/register" class="nav-link fs-4" aria-current="page">
                            <span class="d-flex flex-row justify-content-between align-item-center">
                                Home
                                <span class="badge text-bg-danger text-light fs-5">4</span>
                            </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link fs-4" aria-current="page">
                            <span class="d-flex flex-row justify-content-between align-item-center">
                                Home
                                <span class="badge text-bg-danger text-light fs-5">4</span>
                            </span>
                        </a>
                    </li><li class="nav-item">
                        <a href="#" class="nav-link fs-4" aria-current="page">
                            <span class="d-flex flex-row justify-content-between align-item-center">
                                Home
                                <span class="badge text-bg-danger text-light fs-5">4</span>
                            </span>
                        </a>
                    </li><li class="nav-item">
                        <a href="#" class="nav-link fs-4" aria-current="page">
                            <span class="d-flex flex-row justify-content-between align-item-center">
                                Home
                                <span class="badge text-bg-danger text-light fs-5">4</span>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Content -->
            <div class="container-fluid align-item-center col-md-8">
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