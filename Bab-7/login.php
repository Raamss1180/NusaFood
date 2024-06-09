<?php
//session_start();

// Cek apakah ada data yang dikirimkan melalui metode POST
// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//   $username = $_POST['username'];
//   $password = $_POST['password'];
//   $validUsername = "User";
//   $validPassword = "asd123";

//   if ($username === "" || $password === "") {
//     echo "<script>alert('Data Tidak Boleh Kosong.');</script>";
//   } elseif ($username === $validUsername && $password === $validPassword) {
//     // Simpan username ke session
//     $_SESSION['username'] = $username;
//     setcookie('username', $username, time() + (86400 * 30), '/'); // Set cookie dengan nama 'username' dan nilai username pengguna
//     echo "<script>alert('Login berhasil!'); window.location.href = 'Transaction/dashboard.php ';</script>";
//     exit();
//   } else {
//     echo "<script>alert('Username atau password salah.'); window.location.href = 'login.php';</script>";
//     exit();
//   }
// }
// ?>


<html>
    <head>
        <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../Bab-8/css/LoginStyles.css">
        <title>Login Form</title>
    </head>
    <body>
        <table width="100%" height="100%">
            <tr>
                <td align="center">
                    <div style="text-align: center; color: white;">
                        <h2>Login</h2>
                        <form action="login-proses.php" method="post">
                            <label for="username">Username:</label><br>
                            <input class="input" type="text" name="username" ><br>
                            <label for="password">Password:</label><br>
                            <input class="input" type="password" name="password" ><br>
                            <button type="submit" class="btn_login" name="login" id="login"> Login</button>
                        </form>
                        <p class="reg">Belum punya akun? <a href="register.php">Silahkan Register disini</a></p>
                    </div>
                </td>
            </tr>
        </table>
    </body>
</html>