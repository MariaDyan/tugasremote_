<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman PHP Dinamis</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
        /* Global Style */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
            color: #333;
        }

        .container {
            max-width: 1200px;
            margin: auto;
            padding: 20px;
        }

        header {
            text-align: center;
            background: linear-gradient(45deg, #6a5af9, #3db4f2);
            color: #fff;
            padding: 20px 0;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        header h1 {
            margin: 0;
            font-size: 2.5rem;
        }

        nav ul {
            list-style: none;
            padding: 0;
            display: flex;
            justify-content: center;
            gap: 20px;
            background: #3db4f2;
            border-radius: 8px;
            padding: 10px 0;
            margin: 0;
        }

        nav ul li {
            margin: 0;
        }

        nav ul li a {
            text-decoration: none;
            color: white;
            font-weight: bold;
            transition: color 0.3s ease;
        }

        nav ul li a:hover {
            color: #ffc107;
        }

        main {
            text-align: center;
            margin: 20px 0;
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        main h2 {
            color: #6a5af9;
            font-size: 2rem;
            margin-bottom: 10px;
        }

        main p {
            line-height: 1.8;
        }

        footer {
            text-align: center;
            background: #6a5af9;
            color: #fff;
            padding: 10px 0;
            border-radius: 8px;
            margin-top: 20px;
        }

        footer p {
            margin: 0;
        }

        .fas {
            margin-right: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Header -->
        <header>
            <h1>✨ Selamat Datang di Halaman PHP Dinamis ✨</h1>
        </header>

        <!-- Menu Navigasi -->
        <nav>
            <ul>
                <li><a href="#"><i class="fas fa-home"></i> Beranda</a></li>
                <li><a href="#"><i class="fas fa-info-circle"></i> Tentang</a></li>
                <li><a href="#"><i class="fas fa-envelope"></i> Kontak</a></li>
                <li><a href="#"><i class="fas fa-comment-dots"></i> Pesan</a></li>
            </ul>
        </nav>

        <!-- Konten Utama -->
        <main>
            <h2>Halo, Dunia!</h2>
            <p>Selamat datang di tampilan dinamis dengan PHP dan HTML. Mari jelajahi dunia coding bersama!</p>
            <?php
                echo "<p><strong>Hari ini adalah:</strong> " . date("l, d F Y") . "</p>";
            ?>
        </main>

        <!-- Footer -->
        <footer>
            <p>&copy; 2024. Dibuat dengan <i class="fas fa-heart"></i> oleh Anda.</p>
        </footer>
    </div>
</body>
</html>
