<?php
// Setel informasi database Anda
$database_host = 'localhost';
$database_name = 'lab11';
$database_user = 'root';
$database_password = '';

try {
    // Buat koneksi ke database
    $pdo = new PDO("mysql:host=$database_host;dbname=$database_name", $database_user, $database_password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if (isset($_POST['login'])) {
        // Ambil data dari formulir login
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Cek apakah pengguna adalah admin atau user
        $stmtAdmin = $pdo->prepare("SELECT * FROM admin WHERE username = ?");
        $stmtAdmin->execute([$username]);
        $admin = $stmtAdmin->fetch(PDO::FETCH_ASSOC);

        $stmtUser = $pdo->prepare("SELECT * FROM users WHERE username = ?");
        $stmtUser->execute([$username]);
        $user = $stmtUser->fetch(PDO::FETCH_ASSOC);

        // Periksa apakah pengguna ditemukan dan password cocok
        if ($admin && password_verify($password, $admin['password'])) {
            // Redirect ke halaman admin
            header('Location: admin_dashboard.php');
            exit();
        } elseif ($user && password_verify($password, $user['password'])) {
            // Redirect ke halaman user
            header('Location: user_dashboard.php');
            exit();
        } else {
            echo "Login gagal. Periksa kembali username dan password Anda.";
        }
    }
} catch (PDOException $e) {
    echo "Koneksi database gagal: " . $e->getMessage();
}
?>
