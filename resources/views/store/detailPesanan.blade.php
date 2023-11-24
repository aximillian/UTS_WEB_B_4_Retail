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
    <link rel="stylesheet" href="{{ asset('/css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/CartPage.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/ShopPage.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/footer.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css">
    <style>
        .icons {
            display: flex;
            align-items: center;
        }

        .icons a {
            margin-right: 20px;
            /* Menambahkan jarak antara ikon dengan ikon berikutnya */
        }
    </style>
</head>


<body>
    <header class="header">
        <div class="header-1">

            <a href="#" class="logo"> KETHEBOOK</a>

            <form action="" class="search-form">
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



    {{-- Konten --}}
    <section class="mt-50 mb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="shop-product-fillter">
                        <div class="totall-product">
                            <p> We found <strong class="text-brand">688</strong> items for you!</p>
                        </div>
                        <div class="sort-by-product-area">
                            <div class="sort-by-cover mr-10">
                                <div class="sort-by-product-wrap">
                                    <div class="sort-by">
                                        <span><i class="fi-rs-apps"></i>Show:</span>
                                    </div>
                                    <div class="sort-by-dropdown-wrap">
                                        <span> 50 <i class="fi-rs-angle-small-down"></i></span>
                                    </div>
                                </div>
                                <div class="sort-by-dropdown">
                                    <ul>
                                        <li><a class="active" href="#">50</a></li>
                                        <li><a href="#">100</a></li>
                                        <li><a href="#">150</a></li>
                                        <li><a href="#">200</a></li>
                                        <li><a href="#">All</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sort-by-cover">
                                <div class="sort-by-product-wrap">
                                    <div class="sort-by">
                                        <span><i class="fi-rs-apps-sort"></i>Sort by:</span>
                                    </div>
                                    <div class="sort-by-dropdown-wrap">
                                        <span> Featured <i class="fi-rs-angle-small-down"></i></span>
                                    </div>
                                </div>
                                <div class="sort-by-dropdown">
                                    <ul>
                                        <li><a class="active" href="#">Featured</a></li>
                                        <li><a href="#">Price: Low to High</a></li>
                                        <li><a href="#">Price: High to Low</a></li>
                                        <li><a href="#">Release Date</a></li>
                                        <li><a href="#">Avg. Rating</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row product-grid-3">
                        <div class="col-lg-4 col-md-4 col-6 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="/store/bd">
                                            <img class="default-img" img src="{{ asset('img/bookDummy/1.png') }}"
                                                alt="">
                                            <img class="hover-img" img src="{{ asset('img/bookDummy/1.png') }}"
                                                alt="">
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal"
                                            data-bs-target="#quickViewModal" href="/store/bd">
                                            <i class="fas fa-search"></i></a>
                                        <a aria-label="Add To Wishlist" class="action-btn hover-up"
                                            href="/store/bd#wishlist"><i class="fas fa-heart"></i></a>

                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="hot">Hot</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="#">Book-Novel</a>
                                    </div>
                                    <h2><a href="/store/bd">Bahagia Itu sederhana</a></h2>
                                    <div class="rating-result" title="90%">
                                        <span>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <span>90%</span>
                                        </span>
                                    </div>
                                    <div class="product-price">
                                        <span>$15.99</span>
                                        <span class="old-price">$20.99</span>
                                    </div>
                                    <div class="product-action-1 show">
                                        <a aria-label="Add To Cart" class="action-btn hover-up"
                                            href="shop-cart.php"><i class="fas fa-cart-shopping"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-6 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="/store/bd">
                                            <img class="default-img" img src="{{ asset('img/bookDummy/2.png') }}"
                                                alt="">
                                            <img class="hover-img" img src="{{ asset('img/bookDummy/2.png') }}"
                                                alt="">
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal"
                                            data-bs-target="#quickViewModal" href="/store/bd">
                                            <i class="fas fa-search"></i></a>
                                        <a aria-label="Add To Wishlist" class="action-btn hover-up"
                                            href="/store/bd#wishlist"><i class="fas fa-heart"></i></a>

                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="new">New</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="#">Book-Novel</a>
                                    </div>
                                    <h2><a href="/store/bd">Mengenang Namanya</a></h2>
                                    <div class="rating-result" title="90%">
                                        <span>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <span>50%</span>
                                        </span>
                                    </div>
                                    <div class="product-price">
                                        <span>$15.99 </span>
                                        <span class="old-price">$20.99</span>
                                    </div>
                                    <div class="product-action-1 show">
                                        <a aria-label="Add To Cart" class="action-btn hover-up"
                                            href="shop-cart.php"><i class="fas fa-cart-shopping"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-6 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="/store/bd">
                                            <img class="default-img" img src="{{ asset('img/bookDummy/3.png') }}"
                                                alt="">
                                            <img class="hover-img" img src="{{ asset('img/bookDummy/3.png') }}"
                                                alt="">
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal"
                                            data-bs-target="#quickViewModal" href="/store/bd">
                                            <i class="fas fa-search"></i></a>
                                        <a aria-label="Add To Wishlist" class="action-btn hover-up"
                                            href="/store/bd#wishlist"><i class="fas fa-heart"></i></a>

                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="best">Best Sell</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="#">Book-Novel</a>
                                    </div>
                                    <h2><a href="/store/bd">Secangkir Selembar</a></h2>
                                    <div class="rating-result" title="90%">
                                        <span>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <span>95%</span>
                                        </span>
                                    </div>
                                    <div class="product-price">
                                        <span>$15.99 </span>
                                        <span class="old-price">$20.99</span>
                                    </div>
                                    <div class="product-action-1 show">
                                        <a aria-label="Add To Cart" class="action-btn hover-up"
                                            href="shop-cart.php"><i class="fas fa-cart-shopping"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-6 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="/store/bd">
                                            <img class="default-img" img src="{{ asset('img/bookDummy/4.png') }}"
                                                alt="">
                                            <img class="hover-img" img src="{{ asset('img/bookDummy/4.png') }}"
                                                alt="">
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal"
                                            data-bs-target="#quickViewModal" href="/store/bd">
                                            <i class="fas fa-search"></i></a>
                                        <a aria-label="Add To Wishlist" class="action-btn hover-up"
                                            href="/store/bd#wishlist"><i class="fas fa-heart"></i></a>

                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="sale">Sale</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="#">Book-Novel</a>
                                    </div>
                                    <h2><a href="/store/bd">Arus Deras Menenangkan</a></h2>
                                    <div class="rating-result" title="90%">
                                        <span>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <span>70%</span>
                                        </span>
                                    </div>
                                    <div class="product-price">
                                        <span>$15.99 </span>
                                        <span class="old-price">$20.99</span>
                                    </div>
                                    <div class="product-action-1 show">
                                        <a aria-label="Add To Cart" class="action-btn hover-up"
                                            href="shop-cart.php"><i class="fas fa-cart-shopping"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-6 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="/store/bd">
                                            <img class="default-img" img src="{{ asset('img/bookDummy/5.png') }}"
                                                alt="">
                                            <img class="hover-img" img src="{{ asset('img/bookDummy/5.png') }}"
                                                alt="">
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal"
                                            data-bs-target="#quickViewModal" href="/store/bd">
                                            <i class="fas fa-search"></i></a>
                                        <a aria-label="Add To Wishlist" class="action-btn hover-up"
                                            href="/store/bd#wishlist"><i class="fas fa-heart"></i></a>

                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="hot">-30%</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="#">Book-Novel</a>
                                    </div>
                                    <h2><a href="/store/bd">Ruang Sunyi</a></h2>
                                    <div class="rating-result" title="90%">
                                        <span>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <span>70%</span>
                                        </span>
                                    </div>
                                    <div class="product-price">
                                        <span>$15.99 </span>
                                        <span class="old-price">$20.99</span>
                                    </div>
                                    <div class="product-action-1 show">
                                        <a aria-label="Add To Cart" class="action-btn hover-up"
                                            href="shop-cart.php"><i class="fas fa-cart-shopping"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-6 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="/store/bd">
                                            <img class="default-img" img src="{{ asset('img/bookDummy/6.png') }}"
                                                alt="">
                                            <img class="hover-img" img src="{{ asset('img/bookDummy/6.png') }}"
                                                alt="">
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal"
                                            data-bs-target="#quickViewModal" href="/store/bd">
                                            <i class="fas fa-search"></i></a>
                                        <a aria-label="Add To Wishlist" class="action-btn hover-up"
                                            href="/store/bd#wishlist"><i class="fas fa-heart"></i></a>

                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="hot">-22%</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="#">Book-Novel</a>
                                    </div>
                                    <h2><a href="/store/bd">Lentera Senja</a></h2>
                                    <div class="rating-result" title="90%">
                                        <span>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <span>70%</span>
                                        </span>
                                    </div>
                                    <div class="product-price">
                                        <span>$15.99 </span>
                                        <span class="old-price">$20.99</span>
                                    </div>
                                    <div class="product-action-1 show">
                                        <a aria-label="Add To Cart" class="action-btn hover-up"
                                            href="shop-cart.php"><i class="fas fa-cart-shopping"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-6 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="/store/bd">
                                            <img class="default-img" img src="{{ asset('img/bookDummy/7.png') }}"
                                                alt="">
                                            <img class="hover-img" img src="{{ asset('img/bookDummy/7.png') }}"
                                                alt="">
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal"
                                            data-bs-target="#quickViewModal" href="/store/bd">
                                            <i class="fas fa-search"></i></a>
                                        <a aria-label="Add To Wishlist" class="action-btn hover-up"
                                            href="/store/bd#wishlist"><i class="fas fa-heart"></i></a>

                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="new">New</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="#">Book-Novel</a>
                                    </div>
                                    <h2><a href="/store/bd">Lukisan Awan</a></h2>
                                    <div class="rating-result" title="90%">
                                        <span>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <span>98%</span>
                                        </span>
                                    </div>
                                    <div class="product-price">
                                        <span>$20.99 </span>
                                    </div>
                                    <div class="product-action-1 show">
                                        <a aria-label="Add To Cart" class="action-btn hover-up"
                                            href="shop-cart.php"><i class="fas fa-cart-shopping"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-6 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="/store/bd">
                                            <img class="default-img" img src="{{ asset('img/bookDummy/8.png') }}"
                                                alt="">
                                            <img class="hover-img" img src="{{ asset('img/bookDummy/8.png') }}"
                                                alt="">
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal"
                                            data-bs-target="#quickViewModal" href="/store/bd">
                                            <i class="fas fa-search"></i></a>
                                        <a aria-label="Add To Wishlist" class="action-btn hover-up"
                                            href="/store/bd#wishlist"><i class="fas fa-heart"></i></a>

                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="#">Book-Novel</a>
                                    </div>
                                    <h2><a href="/store/bd">Jejak Kamera</a></h2>
                                    <div class="rating-result" title="90%">
                                        <span>
                                            <span>70%</span>
                                        </span>
                                    </div>
                                    <div class="product-price">
                                        <span>$15.99 </span>
                                        <span class="old-price">$20.99</span>
                                    </div>
                                    <div class="product-action-1 show">
                                        <a aria-label="Add To Cart" class="action-btn hover-up"
                                            href="shop-cart.php"><i class="fas fa-cart-shopping"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-6 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="/store/bd">
                                            <img class="default-img" img src="{{ asset('img/bookDummy/9.png') }}"
                                                alt="">
                                            <img class="hover-img" img src="{{ asset('img/bookDummy/9.png') }}"
                                                alt="">
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal"
                                            data-bs-target="#quickViewModal" href="/store/bd">
                                            <i class="fas fa-search"></i></a>
                                        <a aria-label="Add To Wishlist" class="action-btn hover-up"
                                            href="/store/bd#wishlist"><i class="fas fa-heart"></i></a>

                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="#">Book-Novel</a>
                                    </div>
                                    <h2><a href="/store/bd">Kedamaian</a></h2>
                                    <div class="rating-result" title="90%">
                                        <span>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <span>70%</span>
                                        </span>
                                    </div>
                                    <div class="product-price">
                                        <span>$15.99 </span>
                                        <span class="old-price">$20.99</span>
                                    </div>
                                    <div class="product-action-1 show">
                                        <a aria-label="Add To Cart" class="action-btn hover-up"
                                            href="shop-cart.php"><i class="fas fa-cart-shopping"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-6 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="/store/bd">
                                            <img class="default-img" img src="{{ asset('img/bookDummy/10.png') }}"
                                                alt="">
                                            <img class="hover-img" img src="{{ asset('img/bookDummy/10.png') }}"
                                                alt="">
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal"
                                            data-bs-target="#quickViewModal" href="/store/bd">
                                            <i class="fas fa-search"></i></a>
                                        <a aria-label="Add To Wishlist" class="action-btn hover-up"
                                            href="/store/bd#wishlist"><i class="fas fa-heart"></i></a>

                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="hot">Hot</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="#">Book-Novel</a>
                                    </div>
                                    <h2><a href="/store/bd">Perahu Tanmpa Nahkoda</a></h2>
                                    <div class="rating-result" title="90%">
                                        <span>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <span>90%</span>
                                        </span>
                                    </div>
                                    <div class="product-price">
                                        <span>$15.99 </span>
                                        <span class="old-price">$20.99</span>
                                    </div>
                                    <div class="product-action-1 show">
                                        <a aria-label="Add To Cart" class="action-btn hover-up"
                                            href="shop-cart.php"><i class="fas fa-cart-shopping"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-6 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="/store/bd">
                                            <img class="default-img" img src="{{ asset('img/bookDummy/11.png') }}"
                                                alt="">
                                            <img class="hover-img" img src="{{ asset('img/bookDummy/11.png') }}"
                                                alt="">
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal"
                                            data-bs-target="#quickViewModal" href="/store/bd">
                                            <i class="fas fa-search"></i></a>
                                        <a aria-label="Add To Wishlist" class="action-btn hover-up"
                                            href="/store/bd#wishlist"><i class="fas fa-heart"></i></a>

                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="new">New</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="#">Book-Novel</a>
                                    </div>
                                    <h2><a href="/store/bd">Batas Hari</a></h2>
                                    <div class="rating-result" title="90%">
                                        <span>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <span>50%</span>
                                        </span>
                                    </div>
                                    <div class="product-price">
                                        <span>$15.99 </span>
                                        <span class="old-price">$20.99</span>
                                    </div>
                                    <div class="product-action-1 show">
                                        <a aria-label="Add To Cart" class="action-btn hover-up"
                                            href="shop-cart.php"><i class="fas fa-cart-shopping"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-6 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="/store/bd">
                                            <img class="default-img" img src="{{ asset('img/bookDummy/12.png') }}"
                                                alt="">
                                            <img class="hover-img" img src="{{ asset('img/bookDummy/12.png') }}"
                                                alt="">
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal"
                                            data-bs-target="#quickViewModal" href="/store/bd">
                                            <i class="fas fa-search"></i></a>
                                        <a aria-label="Add To Wishlist" class="action-btn hover-up"
                                            href="/store/bd#wishlist"><i class="fas fa-heart"></i></a>

                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="best">Best Sell</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="#">Book-Novel</a>
                                    </div>
                                    <h2><a href="/store/bd">Senja</a></h2>
                                    <div class="rating-result" title="90%">
                                        <span>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <span>95%</span>
                                        </span>
                                    </div>
                                    <div class="product-price">
                                        <span>$15.99 </span>
                                        <span class="old-price">$20.99</span>
                                    </div>
                                    <div class="product-action-1 show">
                                        <a aria-label="Add To Cart" class="action-btn hover-up"
                                            href="shop-cart.php"><i class="fas fa-cart-shopping"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--pagination-->
                    <div class="pagination-area mt-15 mb-sm-5 mb-lg-0">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-start">
                                <li class="page-item active"><a class="page-link" href="#">01</a></li>
                                <li class="page-item"><a class="page-link" href="#">02</a></li>
                                <li class="page-item"><a class="page-link" href="#">03</a></li>
                                <li class="page-item"><a class="page-link dot" href="#">...</a></li>
                                <li class="page-item"><a class="page-link" href="#">16</a></li>
                                <li class="page-item"><a class="page-link" href="#"><i
                                            class="fi-rs-angle-double-small-right"></i></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-3 primary-sidebar sticky-sidebar">
                    <div class="row">
                        <div class="col-lg-12 col-mg-6"></div>
                        <div class="col-lg-12 col-mg-6"></div>
                    </div>
                    <div class="widget-category mb-30">
                        <h5 class="section-title style-1 mb-30 wow fadeIn animated">Category</h5>
                        <ul class="categories">
                            <li><a href="#">Fiksi</a></li>
                            <li><a href="#">Non-Fiksi</a></a></li>
                            <li><a href="#">Referensi</a></li>
                            <li><a href="#">Seni dan Budaya</a></li>
                            <li><a href="#">Education</a></li>
                            <li><a href="#">Life Style and Entertaiment</a></li>
                            <li><a href="#">Self-Help</a></li>
                        </ul>
                    </div>
                    <!-- Fillter By Price -->
                    <div class="sidebar-widget price_range range mb-30">
                        <div class="widget-header position-relative mb-20 pb-10">
                            <h5 class="widget-title mb-10">Fill by price</h5>
                            <div class="bt-1 border-color-1"></div>
                        </div>
                        <div class="price-filter">
                            <div class="price-filter-inner">
                                <div id="slider-range"></div>
                                <div class="price_slider_amount">
                                    <div class="label-input">
                                        <span>Range:</span><input type="text" id="amount" name="price"
                                            placeholder="Add Your Price">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list-group">
                            <div class="list-group-item mb-10 mt-10">
                                <label class="fw-900">Release Date</label>
                                <div class="custome-checkbox">
                                    <input class="form-check-input" type="checkbox" name="checkbox"
                                        id="exampleCheckbox1" value="">
                                    <label class="form-check-label" for="exampleCheckbox1"><span>New
                                            (56)</span></label>
                                    <br>
                                    <input class="form-check-input" type="checkbox" name="checkbox"
                                        id="exampleCheckbox2" value="">
                                    <label class="form-check-label" for="exampleCheckbox2"><span>Old
                                            (78)</span></label>
                                    <br>
                                    <input class="form-check-input" type="checkbox" name="checkbox"
                                        id="exampleCheckbox3" value="">
                                    <label class="form-check-label" for="exampleCheckbox3"><span>Very Old
                                            (54)</span></label>
                                </div>
                                <label class="fw-900 mt-15">Avg. Rating</label>
                                <div class="custome-checkbox">
                                    <input class="form-check-input" type="checkbox" name="checkbox"
                                        id="exampleCheckbox11" value="">
                                    <label class="form-check-label" for="exampleCheckbox11"><span>5 Star
                                            (82)</span></label>
                                    <br>
                                    <input class="form-check-input" type="checkbox" name="checkbox"
                                        id="exampleCheckbox21" value="">
                                    <label class="form-check-label" for="exampleCheckbox21"><span>4 star
                                            (127)</span></label>
                                    <br>
                                    <input class="form-check-input" type="checkbox" name="checkbox"
                                        id="exampleCheckbox31" value="">
                                    <label class="form-check-label" for="exampleCheckbox31"><span>3 Star
                                            (45)</span></label>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="btn btn-sm btn-default"><i class="fi-rs-filter mr-5"></i>
                            Fillter</a>
                    </div>

                    <!-- Product sidebar Widget -->
                    <div class="sidebar-widget product-sidebar  mb-30 p-30 bg-grey border-radius-10">
                        <div class="widget-header position-relative mb-20 pb-10">
                            <h5 class="widget-title mb-10">New Arrivals</h5>
                            <div class="bt-1 border-color-1"></div>
                        </div>

                        <div class="single-post clearfix">
                            <div class="image">
                                <img img src="{{ asset('img/bookDummy/13.png') }}" alt="#" width="80"
                                    height="80">
                            </div>
                            <div class="content pt-10">
                                <h5><a href="/store/bd">Udara Pagi</a></h5>
                                <p class="price mb-0 mt-5">$24.99</p>
                                <div class="product-rate">
                                    <div class="product-rating" style="width:90%"></div>
                                </div>
                            </div>
                        </div>

                        <div class="single-post clearfix">
                            <div class="image">
                                <img img src="{{ asset('img/bookDummy/14.png') }}" alt="#" width="80"
                                    height="80">
                            </div>
                            <div class="content pt-10">
                                <h6><a href="/store/bd">Kala Senja Menyapa</a></h6>
                                <p class="price mb-0 mt-5">$24.99</p>
                                <div class="product-rate">
                                    <div class="product-rating" style="width:80%"></div>
                                </div>
                            </div>
                        </div>

                        <div class="single-post clearfix">
                            <div class="image">
                                <img img src="{{ asset('img/bookDummy/15.png') }}" alt="#" width="80"
                                    height="80">
                            </div>
                            <div class="content pt-10">
                                <h6><a href="/store/bd">Ayah Aku Rindu</a></h6>
                                <p class="price mb-0 mt-5">$24.99</p>
                                <div class="product-rate">
                                    <div class="product-rating" style="width:60%"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="banner-img wow fadeIn mb-45 animated d-lg-block d-none">
                        <img src="{{ asset('img/deal.jpg') }}" alt="" width="400" height="400">
                        <div class="banner-text">
                            <span>Reading Zone</span>
                            <h4>Save 17% on <br>Office Books</h4>
                            <a href="#">Shop Now <i class="fi-rs-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
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
