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
    <link rel="stylesheet" href="{{ asset('css/BookDetailPage.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ShopPage.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
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

    <div class="icons">
        <div id="search-btn" class="fas fa-search"></div>
        <a href="store/detailPesanan" class="fas fa-bell"></a>
        <a href="store/Cart" class="fas fa-cart-shopping"></a>
        <a href="login" class="fas fa-circle-user"></a>
    </div>





    <main>
        <section class="mt-50 mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="product-detail accordion-detail">
                            <div class="row mb-50">
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="detail-gallery">
                                        <div class="product-image-slider">
                                            <figure class="border-radius-10">
                                                <img src="{{ asset('img/bookDummy/6.png') }}" alt="product image"
                                                    style="max-width: 100%; height: auto;" width="300"
                                                    height="385">
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="detail-info">
                                        <h1 class="title-detail">Lentera Senja</h1>
                                        <div class="product-detail-rating">
                                            <div class="pro-details-brand">
                                                <span>Penerbit : KeTheBook</span>
                                            </div>
                                            <div class="product-rate-cover text-end">
                                                <div class="product-rate d-inline-block">
                                                    <div class="product-rating" style="width:90%">
                                                    </div>
                                                </div>
                                                <span class="font-small ml-5 text-muted"> (25 reviews)</span>
                                            </div>
                                        </div>
                                        <div class="clearfix product-price-cover">
                                            <div class="product-price primary-color float-left">
                                                <ins><span class="text-brand">$15.99</span></ins>
                                                <ins><span class="old-price font-md ml-15">$20.99</span></ins>
                                                <span class="save-price  font-md color3 ml-15">5% Off</span>
                                            </div>
                                        </div>
                                        <div class="bt-1 border-color-1 mt-15 mb-15"></div>
                                        <div class="short-desc mb-30">
                                            <p>Don't Miss This Chance To Stock Up On Captivating Reads For Yourself Or
                                                Find The Perfect Gift For The Bookworm In Your Life. Join Us At Our Book
                                                Sale And Let The Magic Of Reading Take You On Incredible Journeys!</p>
                                        </div>
                                        <div class="product_sort_info font-xs mb-30">
                                            <ul>
                                                <li class="mb-10"><i class="fas fa-refresh mr-5"></i> 30 Day Return
                                                    Policy</li>
                                                <li><i class="fas fa-credit-card mr-5"></i> Cash on Delivery not
                                                    available</li>
                                            </ul>
                                        </div>
                                        <div class="attr-detail attr-color mb-15">
                                            <strong class="mr-10">Detail :</strong>
                                            <ul style="list-style-type: none; ">
                                                <li>- Jumlah Halaman : 368</li>
                                                <li>- Tanggal Terbit : 22 Nov 2023</li>
                                                <li>- Bahasa : Indonesia</li>
                                                <li>- Berat : 0.25 kg</li>
                                                <li>- Panjang : 20.0 cm</li>
                                                <li>- Lebar : 13.5 cm</li>
                                            </ul>
                                        </div>
                                        <div class="bt-1 border-color-1 mt-30 mb-30"></div>
                                        <div class="detail-extralink">
                                            <div class="detail-qty border radius">
                                                <a href="#" class="qty-down"><i
                                                        class="fi-rs-angle-small-down"></i></a>
                                                <span class="qty-val">1</span>
                                                <a href="#" class="qty-up"><i
                                                        class="fi-rs-angle-small-up"></i></a>
                                            </div>
                                            <div class="product-extra-link2">
                                                <a href="/store/Cart" class="button button-add-to-cart"
                                                    style="width: 250px">Add to
                                                    Cart</a>

                                                <a aria-label="Add To Wishlist" class="action-btn hover-up"
                                                    href="/store/bd#wishlist"><i class="fas fa-heart"></i></a>
                                            </div>
                                        </div>
                                        <ul class="product-meta font-xs color-grey mt-50">
                                            <li>Availability:<span class="in-stock text-success ml-5">98 Items In
                                                    Stock</span></li>
                                        </ul>
                                    </div>
                                </div>

                            </div>

                            {{-- detail info --}}
                            <div class="tab-style3">
                                <ul class="nav nav-tabs text-uppercase">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="Description-tab" data-bs-toggle="tab"
                                            href="#Sinopsis">Sinopsis</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="Reviews-tab" data-bs-toggle="tab"
                                            href="/store/bd#Reviews">Reviews (5)</a>
                                    </li>
                                </ul>
                                <div class="tab-content shop_info_tab entry-main-content">
                                    <div class="tab-pane fade show active" id="Description">
                                        <div class="">
                                            <p>Uninhibited carnally hired played in whimpered dear gorilla koala
                                                depending and much yikes off far quetzal goodness and from for grimaced
                                                goodness unaccountably and meadowlark near unblushingly crucial scallop
                                                tightly neurotic hungrily some and dear furiously this apart.</p>
                                            <p>Spluttered narrowly yikes left moth in yikes bowed this that grizzly much
                                                hello on spoon-fed that alas rethought much decently richly and wow
                                                against the frequent fluidly at formidable acceptably flapped
                                                besides and much circa far over the bucolically hey precarious goldfinch
                                                mastodon goodness gnashed a jellyfish and one however because.
                                            </p>
                                            <hr class="wp-block-separator is-style-dots">
                                            <p>Laconic overheard dear woodchuck wow this outrageously taut beaver hey
                                                hello far meadowlark imitatively egregiously hugged that yikes minimally
                                                unanimous pouted flirtatiously as beaver beheld above forward
                                                energetic across this jeepers beneficently cockily less a the raucously
                                                that magic upheld far so the this where crud then below after jeez
                                                enchanting drunkenly more much wow callously irrespective limpet.</p>
                                            <h4 class="mt-30">Packaging & Delivery</h4>
                                            <hr class="wp-block-separator is-style-wide">
                                            <p>Less lion goodness that euphemistically robin expeditiously bluebird
                                                smugly scratched far while thus cackled sheepishly rigid after due one
                                                assenting regarding censorious while occasional or this more crane
                                                went more as this less much amid overhung anathematic because much held
                                                one exuberantly sheep goodness so where rat wry well concomitantly.
                                            </p>
                                            <p>Scallop or far crud plain remarkably far by thus far iguana lewd
                                                precociously and and less rattlesnake contrary caustic wow this near
                                                alas and next and pled the yikes articulate about as less cackled
                                                dalmatian
                                                in much less well jeering for the thanks blindly sentimental whimpered
                                                less across objectively fanciful grimaced wildly some wow and rose
                                                jeepers outgrew lugubrious luridly irrationally attractively
                                                dachshund.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="col-lg-4" id="Reviews">
                                        <h4 class="mb-30">Customer reviews</h4>
                                        <div class="d-flex mb-20">
                                            <div class="product-rate d-inline-block mr-15">
                                                <div class="product-rating" style="width:90%">
                                                </div>
                                            </div>
                                            <h6>4.8 out of 5</h6>
                                        </div>
                                        <div class="progress">
                                            <span>5 star</span>
                                            <div class="progress-bar" role="progressbar" style="width: 50%;"
                                                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                                        </div>
                                        <div class="progress">
                                            <span>4 star</span>
                                            <div class="progress-bar" role="progressbar" style="width: 25%;"
                                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                        </div>
                                        <div class="progress">
                                            <span>3 star</span>
                                            <div class="progress-bar" role="progressbar" style="width: 45%;"
                                                aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">45%</div>
                                        </div>
                                        <div class="progress">
                                            <span>2 star</span>
                                            <div class="progress-bar" role="progressbar" style="width: 65%;"
                                                aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">65%</div>
                                        </div>
                                        <div class="progress mb-30">
                                            <span>1 star</span>
                                            <div class="progress-bar" role="progressbar" style="width: 85%;"
                                                aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">85%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 primary-sidebar sticky-sidebar">
                        <div class="widget-category mb-30">
                            <h5 class="section-title style-1 mb-30 wow fadeIn animated">Category</h5>
                            <ul class="categories">
                                <li><a href="/store/detailPesanan">Fiksi</a></li>
                                <li><a href="/store/detailPesanan">Non-Fiksi</a></a></li>
                                <li><a href="/store/detailPesanan">Referensi</a></li>
                                <li><a href="/store/detailPesanan">Seni dan Budaya</a></li>
                                <li><a href="/store/detailPesanan">Education</a></li>
                                <li><a href="/store/detailPesanan">Life Style and Entertaiment</a></li>
                                <li><a href="/store/detailPesanan">Self-Help</a></li>
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
                                Filter</a>
                        </div>

                        <!-- Product sidebar Widget -->
                        <div class="sidebar-widget product-sidebar  mb-30 p-30 bg-grey border-radius-10">
                            <div class="widget-header position-relative mb-20 pb-10">
                                <h5 class="widget-title mb-10">New Arrivals</h5>
                                <div class="bt-1 border-color-1"></div>
                            </div>

                            <div class="single-post clearfix">
                                <div class="image">
                                    <img src="{{ asset('img/bookDummy/13.png') }}" alt="#" width="80"
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
                                    <img src="{{ asset('img/bookDummy/14.png') }}" alt="#" width="80"
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
                                    <img src="{{ asset('img/bookDummy/15.png') }}" alt="#" width="80"
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
                    </div>

                    <div class="row mt-60" id="wishlist">
                        <div class="col-12">
                            <h3 class="section-title style-1 mb-30">Wishlist</h3>
                        </div>
                        <div class="col-12">
                            <div class="row related-products">
                                <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                    <div class="product-cart-wrap small hover-up">
                                        <div class="product-img-action-wrap">
                                            <div class="product-img product-img-zoom">
                                                <a href="/store/bd" tabindex="0">
                                                    <img class="default-img" src="{{ asset('img/bookDummy/7.png') }}"
                                                        alt="">
                                                    <img class="hover-img" src="{{ asset('img/bookDummy/7.png') }}"
                                                        alt="">
                                                </a>
                                            </div>

                                            <div class="product-badges product-badges-position product-badges-mrg">
                                                <span class="hot">Hot</span>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap">
                                            <h2><a href="/store/bd" tabindex="0">Lukisan Awan</a></h2>
                                            <div class="rating-result" title="90%">
                                                <span>
                                                </span>
                                            </div>
                                            <div class="product-price">
                                                <span>$20.99 </span>
                                                <span class="old-price">$24.99</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                    <div class="product-cart-wrap small hover-up">
                                        <div class="product-img-action-wrap">
                                            <div class="product-img product-img-zoom">
                                                <a href="/store/bd" tabindex="0">
                                                    <img class="default-img" src="{{ asset('img/bookDummy/8.png') }}"
                                                        alt="">
                                                    <img class="hover-img" src="{{ asset('img/bookDummy/8.png') }}"
                                                        alt="">
                                                </a>
                                            </div>

                                            <div class="product-badges product-badges-position product-badges-mrg">
                                                <span class="sale">-12%</span>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap">
                                            <h2><a href="/store/bd" tabindex="0">Jejak Kamera</a></h2>
                                            <div class="rating-result" title="90%">
                                                <span>
                                                </span>
                                            </div>
                                            <div class="product-price">
                                                <span>$15.99 </span>
                                                <span class="old-price">$20.99</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                    <div class="product-cart-wrap small hover-up">
                                        <div class="product-img-action-wrap">
                                            <div class="product-img product-img-zoom">
                                                <a href="/store/bd" tabindex="0">
                                                    <img class="default-img" src="{{ asset('img/bookDummy/9.png') }}"
                                                        alt="">
                                                    <img class="hover-img" src="{{ asset('img/bookDummy/9.png') }}"
                                                        alt="">
                                                </a>
                                            </div>

                                            <div class="product-badges product-badges-position product-badges-mrg">
                                                <span class="new">New</span>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap">
                                            <h2><a href="/store/bd" tabindex="0">Kedamaian</a></h2>
                                            <div class="rating-result" title="90%">
                                                <span>
                                                </span>
                                            </div>
                                            <div class="product-price">
                                                <span>$15.99 </span>
                                                <span class="old-price">$20.99</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                    <div class="product-cart-wrap small hover-up mb-0">
                                        <div class="product-img-action-wrap">
                                            <div class="product-img product-img-zoom">
                                                <a href="/store/bd" tabindex="0">
                                                    <img class="default-img"
                                                        src="{{ asset('img/bookDummy/10.png') }}" alt="">
                                                    <img class="hover-img" src="{{ asset('img/bookDummy/10.png') }}"
                                                        alt="">
                                                </a>
                                            </div>

                                            <div class="product-badges product-badges-position product-badges-mrg">
                                                <span class="hot">Hot</span>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap">
                                            <h2><a href="/store/bd" tabindex="0">Perahu Tanpa Nahkoda</a>
                                            </h2>
                                            <div class="rating-result" title="90%">
                                                <span>
                                                </span>
                                            </div>
                                            <div class="product-price">
                                                <span>$20.99 </span>
                                                <span class="old-price">$24.99</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
        </section>
    </main>

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
