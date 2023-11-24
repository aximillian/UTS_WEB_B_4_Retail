<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- My CSS -->
    <link rel="stylesheet" href="{{ asset('css/styleAdmin.css') }}">

    <title>ADMIN.KETHEBOOK</title>
    <style>
        .book-form {
            max-width: 400px;
            margin: 0 auto;
        }

        .book-form label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .book-form input {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
    </style>
</head>

<body>


    <!-- SIDEBAR -->
    <section id="sidebar">
        <a href="#" class="brand">
            <i class='bx bxs-user-detail'></i>
            <span class="text">KETHEBOOK</span>
        </a>
        <ul class="side-menu top">
            <li>
                <a href="/adminPage">
                    <i class='bx bxs-dashboard'></i>
                    <span class="text">Dashboard</span>
                </a>
            </li>
            <li class="active">
                <a href="/admin/Order">
                    <i class='bx bxs-group'></i>
                    <span class="text">User Management</span>
                </a>
            </li>
            <li>
                <a href="/admin/Produk">
                    <i class='bx bxs-data'></i>
                    <span class="text">Data Master</span>
                </a>
            </li>
        </ul>
        <ul class="side-menu">

            <li>
                <a href="/logout" class="logout">
                    <i class='bx bx-log-out'></i>
                    <span class="text">Logout</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- SIDEBAR -->



    <!-- CONTENT -->
    <section id="content">
        <!-- NAVBAR -->
        <nav>
            <form action="#">
                <div class="form-input">
                    <input type="search" placeholder="Search...">
                    <button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
                </div>
            </form>
            <a href="/adminPage#notif" class="notification">
                <i class='bx bxs-bell'></i>
                <span class="num">8</span>
            </a>
            <a href="/admin/p" class="profile">
                <img src="{{ asset('img/avatar4.png') }}">
            </a>
        </nav>
        <!-- NAVBAR -->

        <!-- MAIN -->
        <main>
            <div class="head-title">
                <div class="left">
                    <ul class="breadcrumb">
                        <li>
                            <h1>Edit Book</h1>
                        </li>
                        <li><i class='bx bxs-chevron-right'></i></li>
                    </ul>
                </div>

                <button id="showToastButton" class="btn" style="background-color: #574740; color:#CAC0A5">
                    <i class='bx bxs-plus-circle'></i>
                    <span class="text">Done</span>
                </button>

            </div>


            <!-- Menampilkan Toast -->

            <div style="position: fixed; bottom: 30px; right: 30px;">
                <div id="myToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true"
                    data-bs-delay="5000">
                    <div class="toast-header">
                        <strong class="me-auto">Book Edited</strong>
                        <small>Just now</small>
                        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                    <div class="toast-body">
                        Data successfully edited
                    </div>
                </div>
            </div>


            <script>
                const showToastButton = document.getElementById('showToastButton');

                showToastButton.addEventListener('click', () => {
                    // Menampilkan Toast
                    const toast = new bootstrap.Toast(document.getElementById('myToast'));
                    toast.show();

                    // Arahkan ke halaman "/admin/Order" setelah 5 detik
                    setTimeout(function() {
                        window.location.href = '/admin/Produk';
                    }, 5000); // 5000 milidetik (5 detik)
                });
            </script>

            <br />
            <form action="/submit" method="POST" class="book-form">
                <label for="isbn">ISBN:</label>
                <input type="text" id="isbn" name="isbn" required>

                <label for="judul">Judul Buku:</label>
                <input type="text" id="judul" name="judul" required>

                <label for="penerbit">Penerbit:</label>
                <input type="text" id="penerbit" name="penerbit" required>

                <label for="tahun_terbit">Tahun Terbit:</label>
                <input type="text" id="tahun_terbit" name="tahun_terbit" required>

                <label for="penulis">Penulis:</label>
                <input type="text" id="penulis" name="penulis" required>

                <label for="stok">Stok:</label>
                <input type="number" id="stok" name="stok" required>

                <label for="harga">Harga:</label>
                <input type="text" id="harga" name="harga" required>

                <label for="deskripsi">Deskripsi:</label>
                <input type="text" id="deskripsi" name="deskripsi" required>

            </form>

        </main>
    </section>

    <script>
        const showToastButton = document.getElementById('showToastButton');

        showToastButton.addEventListener('click', () => {
            const toast = new bootstrap.Toast(document.getElementById('myToast'));
            toast.show();
        });

        // Add a click event listener to the close button
        const closeButton = document.querySelector('#myToast .btn-close');
        closeButton.addEventListener('click', () => {
            // Redirect to the /admin/Order page
            window.location.href = '/admin/Produk';
        });
    </script>
    <script src="script.js"></script>
</body>

</html>
