<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,
    initial-scale=1">
    <title>The Bookstore</title> <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .container {
            margin-top: 0%;
        }

        .offcanvas {
            background-color: #9c6b40;
        }

        .offcanvas-header {
            padding-bottom: 0;
        }

        .offcanvas-body {
            padding-top: 0;
            flex-grow: 0;
            letter-spacing: 1px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .offcanvas-body img {
            width: 300px;
            height: 226px;
            object-fit: contain;
            margin-bottom: 40px;
        }

        .transparent-bg {
            background-color: transparent !important;
            color: white !important;
        }

        .header-option {
            font-family: goldenbook, serif;
            font-style: normal;
            font-size: 24px;
            text-decoration: none;
            color: white;
        }

        .header-option p {
            margin: 26px 0;
        }

        .header-option:hover {
            color: #D6B56E;
        }

        .header-content {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        body {
            font-family: 'figtree', sans-serif;
        }

        img {
            width: 400px;
            height: 400px;
            margin-top: 0;
        }

        section {
            width: 100%;
            min-height: 100vh;
        }

        .background-radial-gradient {
            background-color: #f0f0f0;
            background-image: radial-gradient(650px circle at 0% 0%,
                    #e5bf9c 15%, #d3a070 35%, #b18453 75%, #9c6b40 80%, transparent 100%), radial-gradient(1250px circle at 100% 100%,
                    #e5bf9c 15%, #d3a070 35%, #b18453 75%, #9c6b40 80%, transparent 100%);
        }

        .rounded-image {
            border-radius: 50%;
            /* Membuat gambar menjadi lingkaran (radius 50%) */
            width: 300px;
            /* Sesuaikan dengan lebar yang diinginkan */
            height: 300px;
            /* Sesuaikan dengan tinggi yang diinginkan */
            object-fit: cover;
            /* Sesuaikan dengan properti pemadatan yang diinginkan */
        }


        .bg-glass {
            background-color: hsla(0, 11%, 95%,
                    0.9) !important;
            backdrop-filter: saturate(200%) blur(25px);
        }
    </style>
</head>

<body class="antialiased">
    <section class="background-radial-gradient overflow-hidden">
        <div id="app">
            <nav class="navbar navbar-dark transparent-bg pt-0">
                <div class="ms-3 mt-3">
                    <button class="btn btn-outline transparent-bg" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
                        <i class="fa-solid fa-bars-staggered fa-xl" style="color:#FFFFFF;"></i>
                    </button>
                </div>
            </nav>
            <div class="offcanvas offcanvas-top h-100" tabindex="-1" id="offcanvasTop"
                aria-labelledby="offcanvasTopLabel">
                <div class="offcanvas-header">
                    <button style="float:left;" class="btn btn-outline transparent-bg ms-2 mt-2"
                        data-bs-dismiss="offcanvas" aria-label="Close">
                        <i class="fa-solid fa-xmark fa-xl" style="color: #ffffff;"></i>
                    </button>
                </div>
                <div class="offcanvas-body">
                    <img src="{{ asset('img/kethebook.jpg') }}" alt="Logo">
                    <a href="{{ url('/') }}" class="header-option">
                        <div>
                            <p>HOME</p>
                        </div>
                    </a>
                    <a href="{{ url('/login') }}" class="header-option">
                        <div>
                            <p>LOGIN OR REGISTER</p>
                        </div>
                    </a>

                </div>
            </div>
            <div class="container">
                @yield('content')
            </div>
        </div>

        <div class="container">
            <div class="row gx-lg-5 align-items-center mb-5">
                <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
                    <img src="{{ asset('img/kethebook.jpg') }}" alt="Logo" class="rounded-image">
                </div>


                <div class="col-lg-6 mb-5 mb-lg-0 position-relative">

                    <div class="card bg-glass">
                        <div class="card-body px-4 py-5 px-md-5">
                            <form class="form" action="{{ url('dashboard') }}">
                                @csrf
                                <div>
                                    <h3 class="mb-3 text-center" style="color: #44006b; font-weight: bold;">
                                        LOGIN</h3>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="Username"
                                        required />
                                    <label for="floatingInput">Username</label>
                                </div>
                                <div class="form-floating mb-4">
                                    <input type="password" class="form-control" id="floatingPassword"
                                        placeholder="Password" required />
                                    <label for="floatingPassword">Password</label>
                                </div>
                                <form class="form" action="{{ url('dashboard') }}">
                                    @csrf
                                    <!-- Form input fields here -->
                                    <div class="d-grid">
                                        <a href="/store/homePage" class="btn btn-primary btn-block">Login</a>
                                    </div>

                                </form>


                                <div class="text-center mt-3">
                                    <a href="{{ url('/adminPage') }}">Login as admin</a>
                                    <span class="mx-2">|</span>
                                    <a href="{{ url('register') }}">Register Here</a>
                                </div>

                            </form>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Cek apakah ada username yang tersimpan di local storage
            const username = localStorage.getItem("username");

            if (username) {
                // Jika ada, ubah teks di elemen "profile-link" menjadi username
                const profileLink = document.getElementById("profile-link");
                profileLink.textContent = username;
            }
        });
    </script>

</body>

</html>
