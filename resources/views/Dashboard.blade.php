<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,
    initial-scale=1">
    <title>Dashboard</title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastify/1.11.1/toastify.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastify/1.11.1/toastify.min.css">
</head>

<body class="hold - transition sidebar - mini ">
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand navbar-white navbar-light" style="position:static">
            <ul class="navbar-nav">
                <li class="nav-item"> <a class="nav-link" data-widget="pushmenu" href="#" role="button"> <i
                            class=" fas fa-bars"> </i> </a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item d-flex align-items-center"> <button type="button" class="btn btn-danger"
                        data-bs-toggle="modal" data-bs-target="#staticBackdrop" id="logoutButton?"><i
                            class="?fas fa-sign-out-alt"></i> Logout </button>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class=" input-group input-group-sm"> <input class="form-control form-control-navbar"
                                    type="search" placeholder="Search" aria-label="Search">
                                <div class="input-group-append"> <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>
            </ul>
        </nav>
        <aside class="main-sidebar sidebar-dark-primary elevation-4" style="position:fixed"> <a href="#"
                class="brand-link"> <img src="{{ asset('img/keTheBook.jpg') }}" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">keTheBook</span> </a>
            <div class="sidebar">
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{ asset('img/foto1.png') }}" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Username</a>
                    </div>
                </div>
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item" id="home-link">
                            <a href="{{ url('store') }}" class="nav-link">
                                <i class="nav-icon far fa-circle"></i>
                                <p>Home</p>
                            </a>
                        </li>
                        <li class="nav-item" id="presensi-link">
                            <a href="{{ url('store/Cart') }}" class="nav-link">
                                <i class="nav-icon far fa-circle"></i>
                                <p>Cart</p>
                            </a>
                        </li>

                        <li class="nav-item" id="presensi-link">
                            <a href="{{ url('store/detailPesanan') }}" class="nav-link">
                                <i class="nav-icon far fa-circle"></i>
                                <p>Orders</p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <div class="content-wrapper">
            @yield('content')
        </div>
        <footer class="main-footer">
            <div class="float-right d-none d-sm-inline">
                Kelompok4
            </div>
            <strong>Copyright &copy; {{ date('Y') }} <a href="#">keTheBook</a>. </strong> All rights
            reserved.
        </footer>
    </div>
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/adminlte.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $("#logoutButton").click(function() {
                $("#logoutModal").modal('show');
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('.btn-success').click(function() {
                var modal = $('#detailKelasModal');
                var button = $(this);
                modal.find('#instruktur').text(button.data('instruktur'));
                modal.find('#kodeInstruktur').text(button.data('kode-instruktur'));
                modal.find('#hariKelas').text(button.data('hari-kelas'));
                modal.find('#tanggalKelas').text(button.data('tanggal-kelas'));
                modal.find('#ruang').text(button.data('ruang'));
                modal.find('#rating').text(button.data('rating'));
                modal.modal('show');
            });
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastify/1.11.1/toastify.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastify/1.11.1/toastify.min.css">
    <script>
        const toastTrigger = document.getElementById('liveToastBtn')
        const toastLiveExample = document.getElementById('liveToast')
        if (toastTrigger) {
            const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExample)
            toastTrigger.addEventListener('click', () => {
                toastBootstrap.show()
            })
        }
    </script>


    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" tabindex="-1" role="dialog"
        aria-labelledby="logoutModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color:blue">
                    <h5 class="modal-title" id="logoutModalLabel staticBackdrop" style="color:white">Apakah Ingin
                        Logout?
                    </h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <a href="{{ url('logout') }}" class="btn btn-primary"
                        data-bs-button-style="background-color: #CC3946;">Logout</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
