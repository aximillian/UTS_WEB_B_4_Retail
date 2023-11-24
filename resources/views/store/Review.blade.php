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
        .review-textarea::placeholder {
            color: white;

        }

        .profile-container {
            margin: 30px auto;
            /* Mengatur margin atas dan bawah menjadi 30px, dan margin horizontal menjadi auto */
            text-align: center;
            background-color: #fff;
            /* Warna latar belakang kontainer profil */
            min-height: 90vh;
            /* Ubah height menjadi min-height dan gunakan vh (viewport height) */
            max-width: 90%;
            /* Lebar maksimum kontainer */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            /* Efek bayangan */
        }

        .logo {
            display: flex;
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

        /* Tambahkan gaya untuk tampilan review */
        .review-content {

            text-align: center;
        }

        .image.product-thumbnail img {
            border-radius: 0;
            width: 100px;
            height: auto;
            margin-left: 100px;
        }

        .product-title {
            font-size: 14px;
            font-weight: 600;
            margin: 10px 0;
        }

        .review-textarea {
            width: 100%;
            height: 250px;
            padding: 10px;
            border: 1px solid #333;
            border-radius: 5px;
            background-color: #816D63;
            color: #fff;
            font-size: 16px;
            resize: none;
        }

        .btn.btn-primary {
            margin-top: 10px;
            padding: 10px 20px;
            background-color: #574740;
            /* Warna tombol biru */
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 18px;
        }

        /* Tambahan gaya sesuaikan dengan kebutuhan Anda */
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
        <div class="review-content">
            <h1>Review</h1>

            <div class="product-info">
                <img src="{{ asset('img/bookDummy/1.png') }}" alt="Novel Image"
                    style="max-width: 150px; max-height: 225px;">
                <div class="product-title">Novel_Bahagia Itu Sederhana</div>
            </div>


            <form>
                @csrf <!-- Token CSRF jika menggunakan Laravel -->
                <label for="review">Write a review:</label>
                <textarea id="review" name="review" rows="8" cols="50" class="review-textarea"
                    placeholder="Write a review..."></textarea>

                <br>
                <a href="/store/homePage#review" class="btn btn-primary">Submit</a>
            </form>
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



</body>

</html>
