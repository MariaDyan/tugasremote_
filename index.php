<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman PHP Sederhana</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            color: #333;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        header {
            text-align: center;
            padding: 20px 0;
            background-color: #4CAF50;
            color: white;
            border-radius: 8px;
        }

        header h1 {
            margin: 0;
            font-size: 1.8rem;
        }

        nav ul {
            list-style: none;
            padding: 0;
            margin: 20px 0;
            display: flex;
            justify-content: center;
            gap: 15px;
        }

        nav ul li {
            margin: 0;
        }

        nav ul li a {
            text-decoration: none;
            color: #4CAF50;
            font-weight: bold;
            transition: color 0.3s ease;
        }

        nav ul li a:hover {
            color: #087f23;
        }

        main {
            text-align: center;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        main h2 {
            color: #4CAF50;
            font-size: 1.5rem;
        }

        footer {
            text-align: center;
            margin-top: 20px;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border-radius: 8px;
        }

        footer p {
            margin: 0;
            font-size: 0.9rem;
        }
    </style>
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
            <h2>Halo, Dunia!</h2>
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
