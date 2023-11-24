<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- My CSS -->
    <link rel="stylesheet" href="{{ asset('css/styleAdmin.css') }}">

    <title>ADMIN.KETHEBOOK</title>
    <style>
        /* Gaya modal */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.7);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .modal-content {
            background: #fff;
            padding: 20px;
            text-align: center;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }

        /* Gaya tombol dalam modal */
        .modal-content button {
            padding: 10px 20px;
            margin: 5px;
            border: none;
            cursor: pointer;
        }

        .toast {
            display: none;
            position: fixed;
            bottom: 10px;
            right: 10px;
            background: #333;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }
    </style>
</head>

<body>


    <!-- SIDEBAR -->
    <section id="sidebar">
        <a href="#" class="brand">
            <i class='bx bxs-book'></i>
            <span class="text">KETHEBOOK</span>
        </a>
        <ul class="side-menu top">
            <li>
                <a href="/adminPage">
                    <i class='bx bxs-dashboard'></i>
                    <span class="text">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="/admin/Order">
                    <i class='bx bxs-group'></i>
                    <span class="text">User Management</span>
                </a>
            </li>
            <li class="active">
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
                            <h1>Data Master</h1>
                        </li>
                    </ul>
                    <a href="/admin/daftar" class="btn-download">
                        <i class='bx bxs-plus-circle'></i>
                        <span class="text">Add Book</span>
                    </a>
                </div>
            </div>

            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>Book List</h3>

                    </div>
                    <table>
                        <thead>

                            <tr>
                                <th>ISBN</th>
                                <th>Judul</th>
                                <th>Penulis</th>
                                <th>Penerbit</th>
                                <th>Tahun Terbit</th>
                                <th>Harga</th>
                                <th>Stock</th>
                                <th>Kategori</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>978-3-598-21500-1</td>
                                <td>Bahagia Itu Sederhana</td>
                                <td>FRANCOIS MERCES</td>
                                <td>KETHEBOOK</td>
                                <td>2023</td>
                                <td>15.99</td>
                                <td>299</td>
                                <td>Novel</td>
                                <td>
                                    <a href="/admin/edit" class="btn">
                                        <i class='bx bxs-edit'></i>
                                    </a>
                                    <a class="btn delete-button">
                                        <i class='bx bxs-trash'></i>
                                    </a>

                                    <div id="toast1" class="toast">
                                        Delete Success
                                    </div>

                                </td>
                            </tr>

                            <tr>
                                <td>978-0-06-112241-5</td>
                                <td>Lentera Senja</td>
                                <td>Cahaya Dewi</td>
                                <td>KETHEBOOK</td>
                                <td>2023</td>
                                <td>15.99</td>
                                <td>299</td>
                                <td>Novel</td>
                                <td>
                                    <a href="/admin/edit" class="btn">
                                        <i class='bx bxs-edit'></i>
                                    </a>
                                    <a class="btn delete-button">
                                        <i class='bx bxs-trash'></i>
                                    </a>

                                    <div id="toast2" class="toast">
                                        Delete Success
                                    </div>

                                </td>
                            </tr>



                            <tr>
                                <td>978-1-4028-9462-6</td>
                                <td>Lukisan Awan</td>
                                <td>SHAWN GARCIA</td>
                                <td>KETHEBOOK</td>
                                <td>2023</td>
                                <td>15.99</td>
                                <td>299</td>
                                <td>Novel</td>
                                <td>
                                    <a href="/admin/edit" class="btn">
                                        <i class='bx bxs-edit'></i>
                                    </a>
                                    <a class="btn delete-button">
                                        <i class='bx bxs-trash'></i>
                                    </a>

                                    <div id="toast3" class="toast">
                                        Delete Success
                                    </div>

                                </td>
                            </tr>

                            <tr>
                                <td>978-1-56881-210-1</td>
                                <td>Jejak Kamera</td>
                                <td>KENTUT SUSILO</td>
                                <td>KETHEBOOK</td>
                                <td>2023</td>
                                <td>15.99</td>
                                <td>299</td>
                                <td>Novel</td>
                                <td>
                                    <a href="/admin/edit" class="btn">
                                        <i class='bx bxs-edit'></i>
                                    </a>
                                    <a class="btn delete-button">
                                        <i class='bx bxs-trash'></i>
                                    </a>

                                    <div id="toast4" class="toast">
                                        Delete Success
                                    </div>

                                </td>
                            </tr>

                            <tr>
                                <td>978-0-7432-2674-0</td>
                                <td>Perahu Tampa Nahkoda</td>
                                <td>JULIANA SILVA</td>
                                <td>KETHEBOOK</td>
                                <td>2023</td>
                                <td>15.99</td>
                                <td>299</td>
                                <td>Novel</td>
                                <td>
                                    <a href="/admin/edit" class="btn">
                                        <i class='bx bxs-edit'></i>
                                    </a>
                                    <a class="btn delete-button">
                                        <i class='bx bxs-trash'></i>
                                    </a>

                                    <div id="toast5" class="toast">
                                        Delete Success
                                    </div>

                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </main>
    </section>
    <script>
        // Mengambil tombol-tombol delete dan elemen toast pada setiap baris
        const deleteButtons = document.querySelectorAll('.delete-button');
        const toasts = [];

        for (let i = 0; i < 5; i++) {
            toasts.push(document.getElementById(`toast${i + 1}`));
        }

        // Menampilkan toast saat tombol "Delete" diklik pada setiap baris
        deleteButtons.forEach((button, index) => {
            button.addEventListener('click', () => {
                toasts[index].style.display = 'block';

                // Menyembunyikan toast setelah beberapa detik
                setTimeout(() => {
                    toasts[index].style.display = 'none';
                }, 3000); // Mengganti 3000 dengan jumlah milidetik yang diinginkan
            });
        });
    </script>



    <script src="script.js"></script>
</body>

</html>
