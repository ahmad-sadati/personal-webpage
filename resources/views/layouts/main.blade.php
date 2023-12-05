<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/css/style.css" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ahmad</title>
    <link rel="apple-touch-icon" sizes="180x180" href="/img/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon-16x16.png" />
    <link rel="manifest" href="/img/site.webmanifest" />
    <link rel="mask-icon" href="/img/safari-pinned-tab.svg" color="#5bbad5" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Archivo+Black&display=swap" rel="stylesheet" />
    <meta name="msapplication-TileColor" content="#da532c" />
    <meta name="theme-color" content="#ffffff" />
</head>

<body class="bg-dark text-light">
    <!-- header -->
    <div class="container">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom border-secondary">
            <div class="d-flex align-items-center mb-3 mb-md-0 me-md-auto">
                <a href="/contact"
                    class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none text-white-50 hover">
                    <span class="fs-5"><i class="bi bi-envelope nav-logo"></i></span></a>
                <a href="/"
                    class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none text-white-50 hover">
                    Ahmad.Developer</a>
            </div>
            <ul class="nav nav-pills">
                <li class="nav-item"><a href="https://dribbble.com/" class="nav-link text-white-50">Dribbble</a></li>
                <li class="nav-item"><a href="https://www.linkedin.com/in/ahmad-sadati-208566292"
                        class="nav-link text-white-50">Linked in</a></li>
                <li class="nav-item"><a href="https://instagram.com/ahmaddeveloper2023?igshid=MzMyNGUyNmU2YQ=="
                        class="nav-link text-white-50">Instagram</a></li>
            </ul>
        </header>
    </div>
    @yield('content')
    <!-- footer -->
    <div class="container py-5">
        <div class="d-flex flex-column flex-sm-row justify-content-between py-4 footer text-center">
            <div>
                <p class="text-white-50">© 2023 ALL RIGHTS RESERVED.</p>
            </div>
            <div class="py-3 py-sm-0 text-white-50">
                <a class="icn-hver1" href="https://dribbble.com/"><i class="bi bi-dribbble"></i></a>
                <span class="mx-2">/</span>
                <a class="icn-hver2" href="https://instagram.com/ahmaddeveloper2023?igshid=MzMyNGUyNmU2YQ=="><i
                        class="bi bi-instagram"></i></a>
                <span class="mx-2">/</span>
                <a class="icn-hver3" href="https://github.com/ahmad-sadati/"><i class="bi bi-github"></i></a>
                <span class="mx-2">/</span>
                <a class="icn-hver4" href="https://t.me/ahmad_sadati_dev/"><i class="bi bi-telegram"></i></a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</body>

</html>
