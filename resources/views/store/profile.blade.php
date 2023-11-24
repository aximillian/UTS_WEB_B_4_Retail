<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KETHEBOOK</title>


    {{-- Font Awesome cdn link --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />

    {{-- Font  --}}
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;400;500;600&display=swap">

    {{-- Theme style  --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    {{-- Boostrap 5 --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    {{-- custom file link --}}
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/CartPage.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css">

    <style>
        .nama {
            align-items: center;
            text-align: center;
            margin: 0 auto;
            max-width: 300px;
        }

        .edit-icon {
            font-size: 18px;
            color: #007BFF;
            /* Warna ikon pensil */
            cursor: pointer;
        }

        .edit-icon:hover {
            text-decoration: underline;
        }

        /* CSS untuk elemen input */
        .editable-input {
            display: none;
            /* Sembunyikan input awal */
            border: 1px solid #ccc;
            padding: 5px;
        }

        /* CSS untuk tampilan data profil */
        .profile-data {
            display: inline;
        }

        /* CSS untuk ikon centang */
        .save-icon {
            display: none;
            /* Sembunyikan ikon centang awal */
            font-size: 18px;
            color: #28a745;
            /* Warna ikon centang */
            cursor: pointer;
        }

        .save-icon:hover {
            text-decoration: underline;
        }

        .profile-container {
            margin: 30px auto;
            /* Mengatur margin atas dan bawah menjadi 30px, dan margin horizontal menjadi auto */
            text-align: center;
            background-color: #fff;
            /* Warna latar belakang kontainer profil */
            max-width: 90%;
            height: 90%;
            /* Lebar maksimum kontainer */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            /* Efek bayangan */
        }

        .logo {
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            color: #007BFF;
            /* Warna logo */
            margin-bottom: 20px;
        }

        h1 {
            font-size: 28px;
            /* Ukuran tulisan judul profil */
            color: #333;
            /* Warna judul */
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li {
            font-size: 20px;
            /* Ukuran tulisan informasi profil */
            margin: 10px 0;
        }

        .btn {
            display: inline-block;
            background-color: #007BFF;
            /* Warna tombol */
            color: #fff;
            /* Warna teks tombol */
            padding: 12px 24px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #0056b3;
            /* Warna tombol saat dihover */
        }

        .custom-table {
            width: 80%;
            margin: 0 auto;
            /* Mengatur margin horizontal agar tabel berada di tengah */
            border-collapse: collapse;
            background: #ffffff;
            color: #000000;
            border-radius: 10px;
            margin-top: 24px;
            margin-bottom: 30px;
            text-align: center;
            /* Untuk mengatur teks di tengah seluruh sel dalam tabel */
        }

        td {
            text-align: center;
            /* Mengatur teks di tengah secara horizontal */
            vertical-align: middle;
            /* Mengatur teks di tengah secara vertikal */
            height: 220px;
            /* Atur tinggi sel sesuai kebutuhan Anda */
            border: 1px solid #000;
            /* Contoh garis batas sel */
        }

        .custom-table th {
            padding: 12px;
            font-size: 13px;
            text-align: left;
            border-bottom: 1px solid var(--grey);
            background-color: #CD853F;
        }

        .custom-table th,
        .custom-table td {
            padding: 16px 0;
            text-align: center;
            border: 2px solid #5e3a3a;
        }

        .custom-table th:first-child,
        .custom-table td:first-child {
            display: flex;
            align-items: center;
            grid-gap: 12px;
            padding-left: 6px;
        }

        .custom-table img {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            object-fit: cover;
        }

        .custom-table tbody tr:hover {
            background: var(--grey);
        }

        /* Styling for status labels */
        .custom-table .status {
            font-size: 10px;
            padding: 6px 16px;
            color: #FFF;
            border-radius: 20px;
            font-weight: 700;
        }

        .custom-table .status.completed {
            background: #228B22;
            border-bottom: 2px solid #005600;
        }

        .custom-table .status.process {
            background: #FFA500;
            /* Warna oranye */
        }

        .custom-table .status.pending {
            background: #FF0000;
            /* Warna merah */
        }
    </style>
</head>


<body>
    <header class="header">
        <div class="header-1">

            <a href="#" class="logo"> KETHEBOOK</a>

            <form action="" class="search-form" style="width: 300px">
                <input type="search" name="" placeholder="search here..." id="search-box">
                <label for="search-box" class="fas fa-search"></label>
            </form>


            <div class="icons">
                <div id="search-btn" class="fas fa-search"></div>
                <a href="/store/Cart" class="fas fa-cart-shopping"></a>
                <a href="/store/Profile" class="fas fa-circle-user"></a>
            </div>
        </div>

        <div class="header-2">
            <nav class="navbar">
                <a href="/store/homePage">Home</a>
                <a href="/store/homePage#offers">Offers</a>
                <a href="/store/detailPesanan">Categories</a>
                <a href="/store/bd#wishlist">wishlist</a>
            </nav>
        </div>
    </header>

    <nav class="bottom-navbar">
        <a href="/store/homePage" class="fas fa-home"></a>
        <a href="#offers" class="fas fa-tag"></a>
        <a href="#categories" class="fas fa-layer-group"></a>
        <a href="#wishlist" class="fas fa-bookmark"></a>
    </nav>

    <div class="profile-container">
        <div>
            <img src={{ asset('img/iconWeb/Kethebook.png') }} alt="">
        </div>
        <h1>PROFILE</h1>
        <br />
        <ul>
            <li>
                <strong>Nama:</strong>
                <span class="profile-data nama">Lalisa Manoban</span>
                <i class="edit-icon nama fas fa-pencil-alt" onclick="toggleEditMode('nama')"></i>
                <input type="text" class="editable-input nama" value="Lalisa Manoban">
                <i class="save-icon nama fas fa-check" onclick="saveData('nama')"></i>
            </li>
            <li>
                <strong>Email:</strong>
                <span class="profile-data email">lalisamanoban@gmail.com</span>
                <i class="edit-icon email fas fa-pencil-alt" onclick="toggleEditMode('email')"></i>
                <input type="text" class="editable-input email" value="lalisamanoban@gmail.com">
                <i class="save-icon email fas fa-check" onclick="saveData('email')"></i>
            </li>
            <li>
                <strong>Username:</strong>
                <span class="profile-data username">@lalisaa</span>
                <i class="edit-icon username fas fa-pencil-alt" onclick="toggleEditMode('username')"></i>
                <input type="text" class="editable-input username" value="lalisaa">
                <i class="save-icon username fas fa-check" onclick="saveData('username')"></i>
            </li>

        </ul>
        <a href="/logout" class="btn btn-primary">Logout</a>
    </div>

    <div class="table-data" id="rekap">
        <div class="order">
            <div class="head">
                <h1 style="text-align: center; margin-top:80px">Order Details</h1>
            </div>
            <table class="custom-table">
                <thead>
                    <tr>
                        <th>Item</th>
                        <th>Judul</th>
                        <th>Harga</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="image product-thumbnail">
                            <img src="{{ asset('img/bookDummy/1.png') }}" alt="Logo"
                                style="border-radius: 0; width:100px; height:auto; margin-left: 100px">
                        </td>

                        <td>Novel_Bahagia Itu Sederhana</td>
                        <td>15.99</td>
                        <td>
                            <a href="/store/Review">
                                <span class="status completed">Completed and Review</span>
                            </a>
                        </td>

                    </tr>
                    <tr>
                        <td class="image product-thumbnail">
                            <img src="{{ asset('img/bookDummy/1.png') }}" alt="Logo"
                                style="border-radius: 0; width:100px; height:auto; margin-left: 100px">
                        </td>

                        <td>Novel_Bahagia Itu Sederhana</td>
                        <td>15.99</td>
                        <td><span class="status pending">Pending</span></td>
                    </tr>
                    <tr>
                        <td class="image product-thumbnail">
                            <img src="{{ asset('img/bookDummy/1.png') }}" alt="Logo"
                                style="border-radius: 0; width:100px; height:auto; margin-left: 100px">
                        </td>

                        <td>Novel_Bahagia Itu Sederhana</td>
                        <td>15.99</td>
                        <td><span class="status process">On Proccess</span></td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>

    <footer>
        <div class="footer-wrapper">

            <div class="social-wrapper">
                <div class='social-links'>
                    <ul>
                        <li>
                            <a href="#" title="Instagram">
                                <img src="{{ asset('icon/instagram.png') }}" alt='Instagram'>
                            </a>
                        </li>
                        <li>
                            <a href="#" title="Linkedin">
                                <img src="{{ asset('icon/linkedin.png') }}" alt='Linkedin'>
                            </a>
                        </li>
                        <li>
                            <a href="#" title="X">
                                <img src="{{ asset('icon/x.png') }}" alt='X'>
                            </a>
                        </li>
                        <li>
                            <a href="#" title="Youtube">
                                <img src="{{ asset('icon/youtube.png') }}" alt='YouTube'>
                            </a>
                        </li>
                        <li>
                            <a href="#" title="GitHub">
                                <img src="{{ asset('icon/github.png') }}" alt='GitHub'>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="footer-columns">
                <div class="footer-links">
                    <div class="footer-logo">
                        <img src={{ asset('img/iconWeb/Kethebook.png') }} alt="">
                    </div>
                    <section>
                        <h3>Our Service</h3>
                        <ul>
                            <li>
                                <a href="#"> <i class="fas fa-location-dot"></i> Sumatra</a>
                            </li>
                            <li>
                                <a href="#"> <i class="fas fa-location-dot"></i> Jawa</a>
                            </li>
                            <li>
                                <a href="#"> <i class="fas fa-location-dot"></i> Kalimantan</a>
                            </li>
                            <li>
                                <a href="#"> <i class="fas fa-location-dot"></i> Sulawesi</a>
                            </li>
                            <li>
                                <a href="#"> <i class="fas fa-location-dot"></i> Papua</a>
                            </li>
                        </ul>
                    </section>
                    <section>
                        <h3>Quick Links</h3>
                        <ul>
                            <li>
                                <a href="#"> <i class="fas fa-arrow-right"></i> Home</a>
                            </li>
                            <li>
                                <a href="#"> <i class="fas fa-arrow-right"></i> Offerse</a>
                            </li>
                            <li>
                                <a href="#"> <i class="fas fa-arrow-right"></i> Categories</a>
                            </li>
                            <li>
                                <a href="#"> <i class="fas fa-arrow-right"></i> Wishlist</a>
                            </li>
                            <li>
                                <a href="#"> <i class="fas fa-arrow-right"></i> Cart</a>
                            </li>
                        </ul>
                    </section>
                    <section>
                        <h3>Extra Links</h3>
                        <ul>
                            <li>
                                <a href="#"> <i class="fas fa-arrow-right"></i> Account Info</a>
                            </li>
                            <li>
                                <a href="#"> <i class="fas fa-arrow-right"></i> Ordered</a>
                            </li>
                            <li>
                                <a href="#"> <i class="fas fa-arrow-right"></i> Privacy Policy</a>
                            </li>
                            <li>
                                <a href="#"> <i class="fas fa-arrow-right"></i> Payment Method</a>
                            </li>
                        </ul>
                    </section>
                    <section>
                        <h3>Contact info</h3>
                        <ul>
                            <li>
                                <a href="#"> <i class="fas fa-id-card"></i> 210711010</a>
                            </li>
                            <li>
                                <a href="#"> <i class="fas fa-id-card"></i> 210711046</a>
                            </li>
                            <li>
                                <a href="#"> <i class="fas fa-id-card"></i> 210711453</a>
                            </li>
                            <li>
                                <a href="#"> <i class="fas fa-envelope"></i> kethebook@gmail.com</a>
                            </li>
                        </ul>
                    </section>
                </div>


                <div class="footer-bottom">
                    <div class="footer-description">
                        <h3>Midterm Exam Website Project</h3>
                        <p>Development and design by Retail_4_B group
                        <p>
                    </div>
                    <small>© KETHEBOOK Ltd. <span id="year"></span>, All rights reserved</small>
                </div>
            </div>



    </footer>

    <script>
        const cartLink = document.getElementById("cart-link");
        let clickedOnce = false;

        cartLink.addEventListener("click", (e) => {
            if (clickedOnce) {
                e.preventDefault(); // Menghentikan navigasi
                alert("Anda telah mengklik dua kali ke Cart.");
            }
            clickedOnce = true;
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <script>
        document.getElementById("year").innerHTML = new Date().getFullYear();
    </script>
    <script src="{{ asset('js/script.js') }}"></script>
    <!-- Skrip JavaScript Bootstrap 5 -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-KYSLmAOYkvMzW0En2xG4vPUdZkkucmF2KNPQkCFAALs2aQovlKuoXKF8kyB+Hx9fh" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-dY8FPLTJATWr1ouu8KOpD5Rdvqz3sPP9Txz7S6VbY3nKRlSAofBxuKb0Cunw9rbo" crossorigin="anonymous">
    </script>
    <script>
        function toggleEditMode(field) {
            const profileData = document.querySelector(`.profile-data.${field}`);
            const editableInput = document.querySelector(`.editable-input.${field}`);
            const editIcon = document.querySelector(`.edit-icon.${field}`);
            const saveIcon = document.querySelector(`.save-icon.${field}`);

            profileData.style.display = 'none';
            editableInput.style.display = 'inline';
            editIcon.style.display = 'none';
            saveIcon.style.display = 'inline';
        }

        function saveData(field) {
            const profileData = document.querySelector(`.profile-data.${field}`);
            const editableInput = document.querySelector(`.editable-input.${field}`);
            const editIcon = document.querySelector(`.edit-icon.${field}`);
            const saveIcon = document.querySelector(`.save-icon.${field}`);

            const inputValue = editableInput.value;
            profileData.textContent = inputValue;

            profileData.style.display = 'inline';
            editableInput.style.display = 'none';
            editIcon.style.display = 'inline';
            saveIcon.style.display = 'none';
        }
    </script>

</body>

</html>
