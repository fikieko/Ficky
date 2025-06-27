<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengaduan Masyarakat | Ficky 15472</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-info">
        <div class="container">
            <a class="navbar-brand" href="index.php">Pengaduan Masyarakat</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=registrasi">Daftar Akun</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=login">Login</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="d-flex flex-justify-center flex-items-center flex-column-reverse flex-lg-row flex-wrap flex-nowrap">
    <div class="d-flex flex-items-center flex-shrink-0 mx-2">
        <span>© 2023 FICKYES</span>
    </div>
</div>
    </nav>
    <?php
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
        switch ($page) {
            case 'login';
                include 'login.php';
                break;
            case 'registrasi';
                include 'registrasi.php';
                break;
            default;
                echo "Halaman Tidak Tersedia";
                break;
        }
    } else {
        include 'home.php';
    }
    ?>
    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>