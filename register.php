<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="login-container">
    <img class="brand" src="assets/logoperpustakaan.jpg" alt="logoperpustakaan" width="150">
        <h2>SELAMAT DATANG DI REGISTER PERPUS</h2>
        <?php if (isset($error)) { echo "<p class='error'>$error</p>"; } ?>
        <form action="" method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="email" name="email" placheldor="email" required>
            <input type="text" name="Nama Lengkap" placeholder="Nama Lengkap" required>
            <input type="text" name="Alamat" Placeholder="Alamat" required>
            <a href="dashboard/admindashboard.php/login.php"button type="submit">LOGIN</button>
        </form>
    </div>
</body>
</html>
