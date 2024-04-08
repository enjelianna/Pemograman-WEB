<!DOCTYPE html>
<head>
</head>
<body>
    <?php
        // Memulai session
        session_start();

        // Memeriksa apakah pengguna telah login
        if ($_SESSION['status'] == 'login'){
            // Jika sudah login, tampilkan pesan selamat datang dan tautan untuk logout
            echo "Selamat datang " . $_SESSION['username'];
            ?>
            <br> <a href="sessionLogout.php">Log Out</a>
            <?php
        } else {
            // Jika belum login, tampilkan pesan bahwa pengguna belum login dan tautan untuk login
            echo "Anda belum login, silahkan ";?>
            <a href="sessionLoginForm.html">Log In</a>
            <?php
        }
    ?>
</body>
</html>