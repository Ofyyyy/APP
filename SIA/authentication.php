<?php
// Memulai session
session_start();

// Cek apakah form login telah di-submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Simpan username dan password dari form ke dalam variabel
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Validasi username dan password (contoh sederhana, Anda bisa menggantinya dengan validasi yang lebih kompleks)
    if ($username === "ofy" && $password === "ofy123") {
        // Jika username dan password benar, atur session dan redirect ke halaman selanjutnya
        $_SESSION["username"] = $username;
        header("Location: dashboard.php");
        exit;
    } else {
        // Jika username dan password salah, tampilkan pesan error
        $error = "Username atau password salah!";
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIA | Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body class="bg-secondary">
<div class="container">
    <div class="row">
        <div class="col-md-4 m-auto mt-5 shadow p-3 bg-white">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <h3 class="text-center">Login System</h3>
                <hr>
                <div class="input-group mb-3">
                    <span class="input-group-text">
                        <i class="bi bi-person-fill"></i>
                    </span>
                    <input type="text" class="form-control" name="username" placeholder="username">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">
                        <i class="bi bi-key-fill"></i>
                    </span>
                    <input type="password" class="form-control" name="password" placeholder="password">
                </div>
                <?php if(isset($error)) { ?>
                    <div class="alert alert-danger"><?php echo $error; ?></div>
                <?php } ?>
                <div class="mb-3 d-grid">
                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                </div>
            </form>
            <div class="text-center">
                <small>Aplikasi Sistem Informasi Akuntansi | 2024</small>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
