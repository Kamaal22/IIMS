<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=aldrich:400" rel="stylesheet" />


    <!-- FontAwesome JS-->
    <script defer src="assets/plugins/fontawesome/js/all.min.js"></script>

    <!-- App CSS -->
    <link id="theme-style" rel="stylesheet" href="assets/css/portal.css">

    <style>
        @import url(https://fonts.bunny.net/css?family=actor:400);
        @import url(https://fonts.bunny.net/css?family=open-sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i);
        @import url('https://fonts.cdnfonts.com/css/visby');

        .navbar {
            font-family: 'Visby', sans-serif;
            /* font-size: 1rem; */
            font-weight: 800;
            line-height: 1.5;
            color: #212529;

        }

        .nav-link {
            color: #5cb377;
            font-size: 1.2rem;
            font-weight: 500;
            line-height: 1.5;

        }
    </style>

</head>

<body class="antialiased">

    <nav class="navbar navbar-expand-lg"
        style="border-bottom-right-radius: 10px; border-bottom-left-radius: 10px; background-color: rgb(244, 255, 244);">
        <div class="container-fluid">
            <img src="assets/images/logo.svg" alt="No Image Found" style="width: 10%; height: auto;">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">Click</span>
            </button>

            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>

            <a href="login" class="btn app-btn-secondary rounded-0 h-50" style="width: 5rem;">Login</a>

        </div>
    </nav>




</body>

</html>
