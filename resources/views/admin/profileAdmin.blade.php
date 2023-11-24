<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

    <!-- My CSS -->
    <link rel="stylesheet" href="{{ asset('css/styleAdmin.css') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <title>ADMIN.KETHEBOOK</title>
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

        <main>
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

            </div>
        </main>
    </section>


    <script src="script.js"></script>
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
