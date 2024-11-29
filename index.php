<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilan Sederhana PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <!-- Header -->
        <header>
            <h1>Selamat Datang di Halaman PHP</h1>
        </header>

        <!-- Menu Navigasi -->
        <nav>
            <ul>
                <li><a href="#">Beranda</a></li>
                <li><a href="#">Tentang</a></li>
                <li><a href="#">Kontak</a></li>
                <li><a href="#">Pesan</a></li>
            </ul>
        </nav>

        <!-- Konten Utama -->
        <main>
            <h2>Halo Dunia!</h2>
            <h2>Halo Dunia2</h2>
            <p>Ini adalah contoh tampilan sederhana dengan PHP dan HTML.</p>
            <?php
                echo "<p>Hari ini adalah: " . date("l, d F Y") . "</p>";
            ?>
        </main>

        <!-- Footer -->
        <footer>
            <p>&copy; 2024. Dibuat dengan ❤️ oleh Anda.</p>
        </footer>
    </div>
</body>
</html>
