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
</head>

<body>


    <!-- SIDEBAR -->
    <section id="sidebar">
        <a href="#" class="brand">
            <i class='bx bxs-book'></i>
            <span class="text">KETHEBOOK</span>
        </a>
        <ul class="side-menu top">
            <li class="active">
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
                            <h1>Dashboard</h1>
                        </li>
                        <li><i class='bx bxs-chevron-right'></i></li>
                        <li>
                            <a class="active" href="#">Home</a>
                        </li>
                    </ul>
                </div>
            </div>

            <ul class="box-info">
                <li>
                    <i class='bx bxs-user-rectangle'></i>
                    <span class="text">
                        <h3>5834</h3>
                        <p>Visitors</p>
                    </span>
                </li>
                <li>
                    <i class='bx bxs-user-plus'></i>
                    <span class="text">
                        <h3>2543</h3>
                        <p>Registered</p>
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

            <ul class="box-info">
                <li>
                    <i class='bx bxs-cart-add'></i>
                    <span class="text">
                        <h3>2189</h3>
                        <p>Total Orders</p>
                    </span>
                </li>
                <li>
                    <i class='bx bxs-fast-forward-circle'></i>
                    <span class="text">
                        <h3>43</h3>
                        <p>Total Return Order</p>
                    </span>
                </li>
                <li>
                    <i class='bx bxs-plus-circle'></i>
                    <span class="text">
                        <h3>97</h3>
                        <p>Total Cancelled Orders</p>
                    </span>
                </li>
                <li>
                    <i class='bx bxs-wallet'></i>
                    <span class="text">
                        <h3>18</h3>
                        <p>Payout Request in Progress</p>
                    </span>
                </li>
                <li>
                    <i class='bx bxs-dollar-circle'></i>
                    <span class="text">
                        <h3>5.268.000.00</h3>
                        <p>Balance</p>
                    </span>
                </li>
            </ul>




            <div class="table-data" id="notif">
                <div class="order">
                    <div class="head">
                        <h3>Recent Orders</h3>
                        <i class='bx bx-search'></i>
                        <i class='bx bx-filter'></i>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>User</th>
                                <th>Order Date</th>
                                <th>Estimated Arrival</th>
                                <th>Status</th>
                                <th>Address</th>
                                <th>Details</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <img src="img/avatar/avatar4.png">
                                    <p>Jhon</p>
                                </td>
                                <td>01-10-2023</td>
                                <td>08-10-2023</td>
                                <td><span class="status completed">Completed</span></td>
                                <td>Jl.Singasari No.27, Papua Pegunungan</td>
                                <td>Novel_Bahagia Itu Sederhana</td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="img/avatar/avatar5.png">
                                    <p>Pardede</p>
                                </td>
                                <td>03-10-2023</td>
                                <td>07-10-2023</td>
                                <td><span class="status completed">Completed</span></td>
                                <td>Jl.Patimura No.12, Medan, Sumatra Utara</td>
                                <td>Novel_Secangkir Segelas</td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="img/avatar/avatar4.png">
                                    <p>Jovincent</p>
                                </td>
                                <td>04-10-2023</td>
                                <td>05-10-2023</td>
                                <td><span class="status process">Process</span></td>
                                <td>Jl.Sudardo No.09, Pontianak, Kalimantan Barat</td>
                                <td>Novel_Senja</td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="img/avatar/avatar2.png">
                                    <p>Cintya</p>
                                </td>
                                <td>08-10-2023</td>
                                <td>08-10-2023</td>
                                <td><span class="status pending">Pending</span></td>
                                <td>Jl.Patimura No.22, Bekasi</td>
                                <td>Novel_Tidur Yuk</td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="img/avatar/avatar3.png">
                                    <p>Nita</p>
                                </td>
                                <td>12-10-2023</td>
                                <td>15-10-2023</td>
                                <td><span class="status completed">Completed</span></td>
                                <td>Jl.Tikus No.5B, Semarang</td>
                                <td>Novel_Indahnya Pemandangan</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </section>


    <script src="script.js"></script>
</body>

</html>
