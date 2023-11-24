<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>


    <!-- My CSS -->
    <link rel="stylesheet" href="{{ asset('css/styleAdmin.css') }}">


    <title>ADMIN.KETHEBOOK</title>

    <style>
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
                    <ul class="b">
                        <br />
                        <li>
                            <h1>User Management</h1>
                        </li>


                    </ul>
                </div>
                <a href="/admin/addUser" class="btn-download">
                    <i class='bx bxs-plus-circle'></i>
                    <span class="text">Add User</span>
                </a>
            </div>

            <ul class="box-info">
                <li>
                    <i class='bx bxs-user-rectangle'></i>
                    <span class="text">
                        <h3>8834</h3>
                        <p>Visitors</p>
                    </span>
                </li>
                <li>
                    <i class='bx bxs-user-plus'></i>
                    <span class="text">
                        <h3>2543</h3>
                        <p>Registerd</p>
                    </span>
                </li>
                <li>
                    <i class='bx bxs-user-check'></i>
                    <span class="text">
                        <h3>1020</h3>
                        <p>Logined</p>
                    </span>
                </li>
            </ul>



            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>Registered User</h3>

                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>Id Pelanggan</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>No Telp</th>
                                <th>Alamat</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>U-00001</td>
                                <td>Jennie</td>
                                <td>jennie@gmail.com</td>
                                <td>081215569600</td>
                                <td>Korea Selatan</td>
                                <td>
                                    <a href="/admin/editUser" class="btn">
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
                                <td>U-00002</td>
                                <td>Jennie</td>
                                <td>jennie@gmail.com</td>
                                <td>081215569600</td>
                                <td>Korea Selatan</td>
                                <td>
                                    <a href="/admin/editUser" class="btn">
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
                                <td>U-00003</td>
                                <td>Jennie</td>
                                <td>jennie@gmail.com</td>
                                <td>081215569600</td>
                                <td>Korea Selatan</td>
                                <td>
                                    <a href="/admin/editUser" class="btn">
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
                                <td>U-00004</td>
                                <td>Jennie</td>
                                <td>jennie@gmail.com</td>
                                <td>081215569600</td>
                                <td>Korea Selatan</td>
                                <td>
                                    <a href="/admin/editUser" class="btn">
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
                                <td>U-00005</td>
                                <td>Jennie</td>
                                <td>jennie@gmail.com</td>
                                <td>081215569600</td>
                                <td>Korea Selatan</td>
                                <td>
                                    <a href="/admin/editUser" class="btn">
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

            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>User Review</h3>

                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>Id Pelanggan</th>
                                <th>Username</th>
                                <th>Order id</th>
                                <th>Item</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>U-00001</td>
                                <td>Jennie</td>
                                <td>O-0001</td>
                                <td class="image product-thumbnail"><img src="{{ asset('img/bookDummy/1.png') }}"
                                        alt="Logo" alt="123">
                                </td>

                                <td>


                                    <div class="modal fade" id="modalReview" tabindex="-1"
                                        aria-labelledby="modalReviewLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="modalReviewLabel">Review</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close">
                                                        &times;
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    I absolutely love shopping at this online book store. Their
                                                    selection is immense, covering
                                                    everything from the latest bestsellers to rare and hard-to-find
                                                    titles. The website is
                                                    user-friendly, making it a breeze to search for books and navigate
                                                    through categories. The
                                                    checkout process is quick, and I've never had any issues with
                                                    shipping. This store has become my
                                                    go-to for all my reading needs. Highly recommended!
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button class="btn btn-primary" data-bs-target="#modalFeedback"
                                                        data-bs-toggle="modal">Send a feedback</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal fade" id="modalFeedback" tabindex="-1"
                                        aria-labelledby="modalFeedbackLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="modalFeedbackLabel">Send Feedback</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">

                                                    <textarea id="feedback" name="feedback" rows="8" cols="50" class="review-textarea"
                                                        placeholder="Provide feedback..."></textarea>
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button class="btn btn-primary"
                                                        data-bs-dismiss="modal">Send</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <button class="btn" data-bs-toggle="modal" data-bs-target="#modalReview">
                                        <i class='bx bx-show'></i>
                                    </button>


                                </td>
                            </tr>

                            <tr>
                                <td>U-00002</td>
                                <td>Jennie</td>
                                <td>O-0002</td>
                                <td class="image product-thumbnail"><img src="{{ asset('img/bookDummy/1.png') }}"
                                        alt="Logo" alt="123">
                                </td>

                                <td>


                                    <div class="modal fade" id="modalReview" tabindex="-1"
                                        aria-labelledby="modalReviewLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="modalReviewLabel">Review</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close">
                                                        &times;
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    I absolutely love shopping at this online book store. Their
                                                    selection is immense, covering
                                                    everything from the latest bestsellers to rare and hard-to-find
                                                    titles. The website is
                                                    user-friendly, making it a breeze to search for books and navigate
                                                    through categories. The
                                                    checkout process is quick, and I've never had any issues with
                                                    shipping. This store has become my
                                                    go-to for all my reading needs. Highly recommended!
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button class="btn btn-primary" data-bs-target="#modalFeedback"
                                                        data-bs-toggle="modal">Send a feedback</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal fade" id="modalFeedback" tabindex="-1"
                                        aria-labelledby="modalFeedbackLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="modalFeedbackLabel">Send Feedback</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">

                                                    <textarea id="feedback" name="feedback" rows="8" cols="50" class="review-textarea"
                                                        placeholder="Provide feedback..."></textarea>
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button class="btn btn-primary"
                                                        data-bs-dismiss="modal">Send</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <button class="btn" data-bs-toggle="modal" data-bs-target="#modalReview">
                                        <i class='bx bx-show'></i>
                                    </button>

                            </tr>



                            <tr>
                                <td>U-00003</td>
                                <td>Jennie</td>
                                <td>O-0003</td>
                                <td class="image product-thumbnail"><img src="{{ asset('img/bookDummy/1.png') }}"
                                        alt="Logo" alt="123">
                                </td>

                                <td>


                                    <div class="modal fade" id="modalReview" tabindex="-1"
                                        aria-labelledby="modalReviewLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="modalReviewLabel">Review</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close">
                                                        &times;
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    I absolutely love shopping at this online book store. Their
                                                    selection is immense, covering
                                                    everything from the latest bestsellers to rare and hard-to-find
                                                    titles. The website is
                                                    user-friendly, making it a breeze to search for books and navigate
                                                    through categories. The
                                                    checkout process is quick, and I've never had any issues with
                                                    shipping. This store has become my
                                                    go-to for all my reading needs. Highly recommended!
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button class="btn btn-primary" data-bs-target="#modalFeedback"
                                                        data-bs-toggle="modal">Send a feedback</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal fade" id="modalFeedback" tabindex="-1"
                                        aria-labelledby="modalFeedbackLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="modalFeedbackLabel">Send Feedback</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">

                                                    <textarea id="feedback" name="feedback" rows="8" cols="50" class="review-textarea"
                                                        placeholder="Provide feedback..."></textarea>
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button class="btn btn-primary"
                                                        data-bs-dismiss="modal">Send</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <button class="btn" data-bs-toggle="modal" data-bs-target="#modalReview">
                                        <i class='bx bx-show'></i>
                                    </button>

                            </tr>

                            <tr>
                                <td>U-00004</td>
                                <td>Jennie</td>
                                <td>O-0004</td>
                                <td class="image product-thumbnail"><img src="{{ asset('img/bookDummy/1.png') }}"
                                        alt="Logo" alt="123">
                                </td>

                                <td>


                                    <div class="modal fade" id="modalReview" tabindex="-1"
                                        aria-labelledby="modalReviewLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="modalReviewLabel">Review</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close">
                                                        &times;
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    I absolutely love shopping at this online book store. Their
                                                    selection is immense, covering
                                                    everything from the latest bestsellers to rare and hard-to-find
                                                    titles. The website is
                                                    user-friendly, making it a breeze to search for books and navigate
                                                    through categories. The
                                                    checkout process is quick, and I've never had any issues with
                                                    shipping. This store has become my
                                                    go-to for all my reading needs. Highly recommended!
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button class="btn btn-primary" data-bs-target="#modalFeedback"
                                                        data-bs-toggle="modal">Send a feedback</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal fade" id="modalFeedback" tabindex="-1"
                                        aria-labelledby="modalFeedbackLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="modalFeedbackLabel">Send Feedback</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">

                                                    <textarea id="feedback" name="feedback" rows="8" cols="50" class="review-textarea"
                                                        placeholder="Provide feedback..."></textarea>
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button class="btn btn-primary"
                                                        data-bs-dismiss="modal">Send</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <button class="btn" data-bs-toggle="modal" data-bs-target="#modalReview">
                                        <i class='bx bx-show'></i>
                                    </button>

                            </tr>

                            <tr>
                                <td>U-00005</td>
                                <td>Jennie</td>
                                <td>O-0005</td>
                                <td class="image product-thumbnail"><img src="{{ asset('img/bookDummy/1.png') }}"
                                        alt="Logo" alt="123">
                                </td>

                                <td>


                                    <div class="modal fade" id="modalReview" tabindex="-1"
                                        aria-labelledby="modalReviewLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="modalReviewLabel">Review</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close">
                                                        &times;
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    I absolutely love shopping at this online book store. Their
                                                    selection is immense, covering
                                                    everything from the latest bestsellers to rare and hard-to-find
                                                    titles. The website is
                                                    user-friendly, making it a breeze to search for books and navigate
                                                    through categories. The
                                                    checkout process is quick, and I've never had any issues with
                                                    shipping. This store has become my
                                                    go-to for all my reading needs. Highly recommended!
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button class="btn btn-primary" data-bs-target="#modalFeedback"
                                                        data-bs-toggle="modal">Send a feedback</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal fade" id="modalFeedback" tabindex="-1"
                                        aria-labelledby="modalFeedbackLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="modalFeedbackLabel">Send Feedback</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">

                                                    <textarea id="feedback" name="feedback" rows="8" cols="50" class="review-textarea"
                                                        placeholder="Provide feedback..."></textarea>
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button class="btn btn-primary"
                                                        data-bs-dismiss="modal">Send</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <button class="btn" data-bs-toggle="modal" data-bs-target="#modalReview">
                                        <i class='bx bx-show'></i>
                                    </button>

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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/js/bootstrap.min.js"></script>
    <script src="script.js"></script>
</body>

</html>
