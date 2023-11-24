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
    <link rel="stylesheet" href="{{ asset('/css/HomePage.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/footer.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css">
    <style>
        .icons {
            display: flex;
            justify-content: space-between;
            /* Mengatur jarak yang sama antara ikon-ikon dan teks */
            align-items: center;
            padding: 10px;
            /* Atur padding jika diperlukan */
        }

        .icons>* {
            display: flex;
            flex-direction: column;
            align-items: center;
            /* Mengatur ikon dan teks secara vertikal di tengah */
            text-decoration: none;
            color: white;
            /* Atur warna teks sesuai kebutuhan */
        }

        .icons i {
            font-size: 24px;
            /* Atur ukuran ikon sesuai kebutuhan */
            margin-bottom: 5px;
            /* Jarak antara ikon dan teks */
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
        <a href="#home" class="fas fa-home"></a>
        <a href="#offers" class="fas fa-tag"></a>
        <a href="#categories" class="fas fa-layer-group"></a>
        <a href="#wishlist" class="fas fa-bookmark"></a>
    </nav>



    {{-- konten 1 --}}
    <section class="home" id="home">
        <div class="row">
            <div class="content">
                <h3>Summer Sale Up To 75% off</h3>
                <p>
                    Don't miss this chance to stock up on captivating reads for yourself or find the perfect gift for
                    the bookworm in your life. Join us at our book sale and let the magic of reading take you on
                    incredible journeys!
                </p>
                <a href="#" class="btn"> Shop now</a>
            </div>

            <div class="swiper bookSlider">
                <div class="swiper-wrapper">
                    <a href="/store/bd" class="swiper-slide"><img src="{{ asset('img/bookDummy/1.png') }}"
                            alt=""></a>
                    <a href="/store/bd" class="swiper-slide"><img src="{{ asset('img/bookDummy/2.png') }}"
                            alt=""></a>
                    <a href="/store/bd" class="swiper-slide"><img src="{{ asset('img/bookDummy/3.png') }}"
                            alt=""></a>
                    <a href="/store/bd" class="swiper-slide"><img src="{{ asset('img/bookDummy/4.png') }}"
                            alt=""></a>
                    <a href="/store/bd" class="swiper-slide"><img src="{{ asset('img/bookDummy/5.png') }}"
                            alt=""></a>
                    <a href="/store/bd" class="swiper-slide"><img src="{{ asset('img/bookDummy/6.png') }}"
                            alt=""></a>
                </div>
                <img src="{{ asset('img/stand.png') }}" class="stand" alt="">
            </div>
        </div>
    </section>



    {{-- konten 2 --}}
    <section class="icons-container">
        <div class="icons">
            <i class="fas fa-plane"></i>
            <div class="content">
                <h3>Fast Shipping</h3>
                <p>Order over $1000</p>
            </div>
        </div>

        <div class="icons">
            <i class="fas fa-lock"></i>
            <div class="content">
                <h3>Secure Payment</h3>
                <p>100 secure payment</p>
            </div>
        </div>

        <div class="icons">
            <i class="fas fa-redo-alt"></i>
            <div class="content">
                <h3>Esay Returns</h3>
                <p>14 days returns</p>
            </div>
        </div>

        <div class="icons">
            <i class="fas fa-headset"></i>
            <div class="content">
                <h3>24/7 Support</h3>
                <p>Call us anytime</p>
            </div>
        </div>
    </section>



    {{-- konten 3 --}}
    <section class="featured">
        <h1 class="heading"> <span>Featured Books</span></h1>
        <div class="swiper featured-slider">
            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="/store/bd" class="fas fa-search"></a>
                        <a href="/store/bd#wishlist" class="fas fa-heart"></a>

                    </div>
                    <a href="/store/bd">
                        <div class="image">
                            <img src="{{ asset('img/bookDummy/6.png') }}" alt="">
                        </div>
                    </a>

                    <div class="content">
                        <h3>Lukisan Awan</h3>
                        <div class="price">$15.99 <span>$20.99</span></div>
                        <a href="/store/Cart" class="btn">add to cart</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="/store/bd" class="fas fa-search"></a>
                        <a href="/store/bd#wishlist" class="fas fa-heart"></a>
                    </div>
                    <a href="/store/bd">
                        <div class="image">
                            <img src="{{ asset('img/bookDummy/7.png') }}" alt="">
                        </div>
                    </a>
                    <div class="content">
                        <h3>Lukisan Awan</h3>
                        <div class="price">$15.99 <span>$20.99</span></div>
                        <a href="/store/Cart" class="btn">add to cart</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="/store/bd" class="fas fa-search"></a>
                        <a href="/store/bd#wishlist" class="fas fa-heart"></a>
                    </div>
                    <a href="/store/bd">
                        <div class="image">
                            <img src="{{ asset('img/bookDummy/8.png') }}" alt="">
                        </div>
                    </a>
                    <div class="content">
                        <h3>Lukisan Awan</h3>
                        <div class="price">$15.99 <span>$20.99</span></div>
                        <a href="/store/Cart" class="btn">add to cart</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="/store/bd" class="fas fa-search"></a>
                        <a href="/store/bd#wishlist" class="fas fa-heart"></a>
                    </div>
                    <a href="/store/bd">
                        <div class="image">
                            <img src="{{ asset('img/bookDummy/9.png') }}" alt="">
                        </div>
                    </a>
                    <div class="content">
                        <h3>Lukisan Awan</h3>
                        <div class="price">$15.99 <span>$20.99</span></div>
                        <a href="/store/Cart" class="btn">add to cart</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="/store/bd" class="fas fa-search"></a>
                        <a href="/store/bd#wishlist" class="fas fa-heart"></a>
                    </div>
                    <a href="/store/bd">
                        <div class="image">
                            <img src="{{ asset('img/bookDummy/9.png') }}" alt="">
                        </div>
                    </a>
                    <div class="content">
                        <h3>Lukisan Awan</h3>
                        <div class="price">$15.99 <span>$20.99</span></div>
                        <a href="/store/Cart" class="btn">add to cart</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="/store/bd" class="fas fa-search"></a>
                        <a href="/store/bd#wishlist" class="fas fa-heart"></a>
                    </div>
                    <a href="/store/bd">
                        <div class="image">
                            <img src="{{ asset('img/bookDummy/11.png') }}" alt="">
                        </div>
                    </a>
                    <div class="content">
                        <h3>Lukisan Awan</h3>
                        <div class="price">$15.99 <span>$20.99</span></div>
                        <a href="/store/Cart" class="btn">add to cart</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="/store/bd" class="fas fa-search"></a>
                        <a href="/store/bd#wishlist" class="fas fa-heart"></a>
                    </div>
                    <a href="/store/bd">
                        <div class="image">
                            <img src="{{ asset('img/bookDummy/12.png') }}" alt="">
                        </div>
                    </a>
                    <div class="content">
                        <h3>Lukisan Awan</h3>
                        <div class="price">$15.99 <span>$20.99</span></div>
                        <a href="/store/Cart" class="btn">add to cart</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="/store/bd" class="fas fa-search"></a>
                        <a href="/store/bd#wishlist" class="fas fa-heart"></a>
                    </div>
                    <a href="/store/bd">
                        <div class="image">
                            <img src="{{ asset('img/bookDummy/13.png') }}" alt="">
                        </div>
                    </a>
                    <div class="content">
                        <h3>Lukisan Awan</h3>
                        <div class="price">$15.99 <span>$20.99</span></div>
                        <a href="/store/Cart" class="btn">add to cart</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="/store/bd" class="fas fa-search"></a>
                        <a href="/store/bd#wishlist" class="fas fa-heart"></a>
                    </div>
                    <a href="/store/bd">
                        <div class="image">
                            <img src="{{ asset('img/bookDummy/14.png') }}" alt="">
                        </div>
                    </a>
                    <div class="content">
                        <h3>Lukisan Awan</h3>
                        <div class="price">$15.99 <span>$20.99</span></div>
                        <a href="/store/Cart" class="btn">add to cart</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="/store/bd" class="fas fa-search"></a>
                        <a href="/store/bd#wishlist" class="fas fa-heart"></a>
                    </div>
                    <a href="/store/bd">
                        <div class="image">
                            <img src="{{ asset('img/bookDummy/15.png') }}" alt="">
                        </div>
                    </a>
                    <div class="content">
                        <h3>Lukisan Awan</h3>
                        <div class="price">$15.99 <span>$20.99</span></div>
                        <a href="/store/Cart" class="btn">add to cart</a>
                    </div>
                </div>
            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>



    {{-- Konten 4 --}}
    <section class="arrivals">

        <h1 class="heading"> <span>New Arrivals</span></h1>

        <div class="swiper arrivals-slider">
            <div class="swiper-wrapper">

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="{{ asset('img/bookDummy/1.png') }}" alt="">
                    </div>
                    <div class="content">
                        <h3>New Arrivals</h3>
                        <div class="price">$15.99 <span>$20.99</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </a>

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="{{ asset('img/bookDummy/2.png') }}" alt="">
                    </div>
                    <div class="content">
                        <h3>New Arrivals</h3>
                        <div class="price">$15.99 <span>$20.99</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </a>

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="{{ asset('img/bookDummy/3.png') }}" alt="">
                    </div>
                    <div class="content">
                        <h3>New Arrivals</h3>
                        <div class="price">$15.99 <span>$20.99</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </a>

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="{{ asset('img/bookDummy/4.png') }}" alt="">
                    </div>
                    <div class="content">
                        <h3>New Arrivals</h3>
                        <div class="price">$15.99 <span>$20.99</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </a>

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="{{ asset('img/bookDummy/5.png') }}" alt="">
                    </div>
                    <div class="content">
                        <h3>New Arrivals</h3>
                        <div class="price">$15.99 <span>$20.99</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="swiper arrivals-slider">
            <div class="swiper-wrapper">

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="{{ asset('img/bookDummy/6.png') }}" alt="">
                    </div>
                    <div class="content">
                        <h3>New Arrivals</h3>
                        <div class="price">$15.99 <span>$20.99</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </a>

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="{{ asset('img/bookDummy/7.png') }}" alt="">
                    </div>
                    <div class="content">
                        <h3>New Arrivals</h3>
                        <div class="price">$15.99 <span>$20.99</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </a>

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="{{ asset('img/bookDummy/8.png') }}" alt="">
                    </div>
                    <div class="content">
                        <h3>New Arrivals</h3>
                        <div class="price">$15.99 <span>$20.99</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </a>

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="{{ asset('img/bookDummy/9.png') }}" alt="">
                    </div>
                    <div class="content">
                        <h3>New Arrivals</h3>
                        <div class="price">$15.99 <span>$20.99</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </a>

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="{{ asset('img/bookDummy/10.png') }}" alt="">
                    </div>
                    <div class="content">
                        <h3>New Arrivals</h3>
                        <div class="price">$15.99 <span>$20.99</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>



    {{-- konten 5 --}}
    <section class="deal" id="offers">
        <div class="content">
            <h3>Deal of the Day</h3>
            <h1>up to 50% off</h1>
            <p>
                Don't miss this chance to stock up on captivating reads for yourself or find the perfect gift for the
                bookworm in your life. Join us at our book sale and let the magic of reading take you on incredible
                journeys!
            </p>
            <a href="#" class="btn">Shop now</a>
        </div>

        <div class="image">
            <img src="{{ asset('img/deal.jpg') }}" alt="">
        </div>
    </section>



    {{-- konten 6 --}}
    <section class="reviews" id="review">
        <h1 class="heading"> <span>Reviews</span></h1>

        <div class="swiper reviews-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide box">
                    <img src="{{ asset('img/user/u1.jpg') }}" alt="">
                    <h3> john deo</h3>
                    <p>
                        I absolutely love shopping at this online book store. Their selection is immense, covering
                        everything from the latest bestsellers to rare and hard-to-find titles. The website is
                        user-friendly, making it a breeze to search for books and navigate through categories. The
                        checkout process is quick, and I've never had any issues with shipping. This store has become my
                        go-to for all my reading needs. Highly recommended!
                    </p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="{{ asset('img/user/u2.jpg') }}" alt="">
                    <h3> john deo</h3>
                    <p>
                        This online book store offers an excellent customer service experience. I recently had an issue
                        with a damaged book, and their support team was quick to respond and resolved the problem
                        without any hassle. The only reason I didn't give it a perfect score is that I occasionally find
                        their prices a bit higher than some other online retailers. Nevertheless, their customer service
                        makes up for it, and I'll continue to shop here.
                    </p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="{{ asset('img/user/u3.jpg') }}" alt="">
                    <h3> john deo</h3>
                    <p>
                        I absolutely love shopping at this online book store. Their selection is immense, covering
                        everything from the latest bestsellers to rare and hard-to-find titles. The website is
                        user-friendly, making it a breeze to search for books and navigate through categories. The
                        checkout process is quick, and I've never had any issues with shipping. This store has become my
                        go-to for all my reading needs. Highly recommended!
                    </p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="{{ asset('img/user/u4.jpg') }}" alt="">
                    <h3> john deo</h3>
                    <p>
                        I absolutely love shopping at this online book store. Their selection is immense, covering
                        everything from the latest bestsellers to rare and hard-to-find titles. The website is
                        user-friendly, making it a breeze to search for books and navigate through categories. The
                        checkout process is quick, and I've never had any issues with shipping. This store has become my
                        go-to for all my reading needs. Highly recommended!
                    </p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="{{ asset('img/user/u5.jpg') }}" alt="">
                    <h3> john deo</h3>
                    <p>
                        This online book store offers an excellent customer service experience. I recently had an issue
                        with a damaged book, and their support team was quick to respond and resolved the problem
                        without any hassle. The only reason I didn't give it a perfect score is that I occasionally find
                        their prices a bit higher than some other online retailers. Nevertheless, their customer service
                        makes up for it, and I'll continue to shop here.
                    </p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="{{ asset('img/user/u6.jpg') }}" alt="">
                    <h3> john deo</h3>
                    <p>
                        I absolutely love shopping at this online book store. Their selection is immense, covering
                        everything from the latest bestsellers to rare and hard-to-find titles. The website is
                        user-friendly, making it a breeze to search for books and navigate through categories. The
                        checkout process is quick, and I've never had any issues with shipping. This store has become my
                        go-to for all my reading needs. Highly recommended!
                    </p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </div>
        </div>

    </section>



    {{-- Subscription --}}
    <section class="subscription-section" id="r">
        <div class="subscription-wrapper">
            <div class="subscription__description">
                <h4>
                    Do you have criticism and suggestions for this application?
                </h4>

                <p>
                    We really appreciate your opinion
                </p>
            </div>
            <form class="subscribe-form">
                <input type="text" spellcheck="false" placeholder="Your opinion">
                <a href="#review" class="btn btn-primary">Submit</a>
            </form>

        </div>
    </section>




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
                        <h3>Our location</h3>
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
                                <a href="#"> <i class="fas fa-arrow-right"></i> Sumatra</a>
                            </li>
                            <li>
                                <a href="#"> <i class="fas fa-arrow-right"></i> Sumatra</a>
                            </li>
                            <li>
                                <a href="#"> <i class="fas fa-arrow-right"></i> Sumatra</a>
                            </li>
                            <li>
                                <a href="#"> <i class="fas fa-arrow-right"></i> Sumatra</a>
                            </li>
                            <li>
                                <a href="#"> <i class="fas fa-arrow-right"></i> Sumatra</a>
                            </li>
                        </ul>
                    </section>
                    <section>
                        <h3>Company</h3>
                        <ul>
                            <li>
                                <a href="#"> <i class="fas fa-arrow-right"></i> Sumatra</a>
                            </li>
                            <li>
                                <a href="#"> <i class="fas fa-arrow-right"></i> Sumatra</a>
                            </li>
                            <li>
                                <a href="#"> <i class="fas fa-arrow-right"></i> Sumatra</a>
                            </li>
                            <li>
                                <a href="#"> <i class="fas fa-arrow-right"></i> Sumatra</a>
                            </li>
                            <li>
                                <a href="#"> <i class="fas fa-arrow-right"></i> Sumatra</a>
                            </li>
                        </ul>
                    </section>
                    <section>
                        <h3>Contact info</h3>
                        <ul>
                            <li>
                                <a href="#"> <i class="fas fa-id-card"></i> 210711010</a>
                            </li>
                            </li>
                            <li>
                                <a href="#"> <i class="fas fa-id-card"></i> 210711046</a>
                            </li>
                            <li>
                                <a href="#"> <i class="fas fa-id-card"></i> 210711453</a>
                            </li>
                            <li>
                                <a href="#"> <i class="fas fa-envelope"></i> khetebook@gmail.com</a>
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
