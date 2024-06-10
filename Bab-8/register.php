<html>
    <head>
        <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../Bab-8/css/LoginStyles.css">
        <title>NusaFood</title>
    </head>
    <body>
        <table width="100%" height="100%">
            <tr>
                <td align="center">
                    <div style="text-align: center; color: white;">
                        <h2>Register</h2>
                        <form action="register-proses.php" method="post">
                            <label for="reg-username">Username:</label><br>
                            <input class="input" type="text" name="username"><br>
                            <label for="email">Email:</label><br>
                            <input class="input" type="email" name="email"><br>
                            <label for="reg-password">Password:</label><br>
                            <input class="input" type="password" name="password"><br>
                            <button type="submit" class="btn_login" name="register"id="register">Register</button>
                        </form>
                        <p>Sudah punya akun? <a href="login.php">Login disini</a></p>
                        <p> Kembali Kehalaman Utama? <a href="index.php"> Klik disini</a></p>
                    </div>
                </td>
            </tr>
        </table>    
    </body>
</html>