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
            background-color: #f0f0f0;
            /* Warna latar belakang */
            background-image: radial-gradient(650px circle at 0% 0%, #f0f0f0 15%, #dcdcdc 35%, #c0c0c0 75%, #b0b0b0 80%, transparent 100%), radial-gradient(1250px circle at 100% 100%, #f0f0f0 15%, #dcdcdc 35%, #c0c0c0 75%, #b0b0b0 80%, transparent 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card {
            background-color: rgba(255, 255, 255, 0.9);
            /* Warna latar belakang card */
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

        </div>

        <div class="container">
            <div class="row gx-lg-5 align-items-center mb-5">
                <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
                    <h1 class="my-5 display-5 fw-bold ls-tight" style="color: #44006b">
                        Ke The Book<br />
                        <span style="color: #ad1fff">
                            <h3>Book is a window to the world</h3>
                        </span>
                    </h1>
                    <p class="mb-4 opacity-70 justify-content-center" style="color: #44006b; text-align: justify">
                        Are you ready to embark on literary adventures?<br>
                        Our bookstore is your gateway to a world of stories, <br> knowledge, and imagination.
                    </p>
                    <p class="mb-4 opacity-70 " style="color: #44006b; text-align: justify;">
                        We offer a vast selection of books, from timeless classics to the latest bestsellers. Whether
                        you're a fiction enthusiast, a non-fiction buff, or a young reader just starting your literary
                        journey, we have something for everyone. Our shelves are lined with the works of talented
                        authors, covering a wide range of genres and topics.
                    </p>
                </div>

                <div class="col-lg-6 mb-5 mb-lg-0" style="margin-top: 10px;">
                    <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
                    <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

                    <div class="card bg-glass">
                        <div class="card-body px-4 py-5 px-md-5">
                            <form class="form" action="{{ url('login') }}">
                                @csrf
                                <div>
                                    <h3 class="mb-3 text-center" style="color: #44006b; font-weight: bold;">
                                        Register
                                    </h3>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="Name"
                                        required />
                                    <label for="floatingInput">Name</label>
                                </div>

                                <div class="form-floating mb-4">
                                    <input type="email" class="form-control" id="floatingEmail" placeholder="Email"
                                        required />
                                    <label for="floatingEmail">Email</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingUsername"
                                        placeholder="Username" required />
                                    <label for="floatingUsername">Username</label>
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
                                        <button type="submit" class="btn btn-primary btn-block">Register</button>
                                    </div>
                                </form>


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


</body>

</html>
