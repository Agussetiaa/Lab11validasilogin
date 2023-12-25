<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <!-- Tambahkan stylesheet atau style tambahan sesuai kebutuhan -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f3f3;
            color: #333;
            margin: 0;
            padding: 0;
        }

        header {
            background: linear-gradient(to right, #3498db, #2ecc71);
            color: white;
            text-align: center;
            padding: 1em;
        }

        nav {
            background-color: #3498db;
            overflow: hidden;
        }

        nav ul {
            padding: 0;
            margin: 0;
            list-style: none;
        }

        nav ul li {
            float: left;
        }

        nav ul li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        nav ul li a:hover {
            background-color: #2980b9;
        }

        .content {
            padding: 20px;
        }

        footer {
            background: linear-gradient(to right, #3498db, #2ecc71);
            color: white;
            text-align: center;
            padding: 1em;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>

<body>
    <header>
        <h1>Admin Dashboard</h1>
        <!-- Tambahkan elemen header admin sesuai kebutuhan -->
    </header>

    <nav>
        <!-- Tambahkan menu navigasi atau link ke halaman-halaman terkait -->
        <ul>
            <li><a href="admin_dashboard.php">Dashboard</a></li>
            <li><a href="admin_users.php">Users</a></li>
            <li><a href="admin_settings.php">Settings</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </nav>

    <div class="content">
        <!-- Tambahkan konten halaman admin sesuai kebutuhan -->
        <h2>Selamat Datang di Dashboard, Admin!</h2>
        <p>Ini adalah dasboard admin. Anda dapat melihat profil dan pengaturan Anda di sini..</p>
    </div>

    <footer>
        <!-- Tambahkan footer sesuai kebutuhan -->
        <p>Admin agus Dashboard - &copy; 2023</p>
    </footer>
</body>

</html>
