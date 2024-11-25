<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi UPJA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: url('/img/upja.jpeg') no-repeat center center fixed;
            background-size: cover;
            color: #ffffff;
        }
        .welcome-section {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            text-align: center;
            background-color: rgba(0, 0, 0, 0.6);
            padding: 20px;
            border-radius: 10px;
        }
        .welcome-title {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }
        .welcome-buttons a {
            margin: 5px;
        }
        #loading-screen {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background-color: rgba(255, 255, 255, 0.9);
            display: none;
        }
    </style>
</head>
<body>
    <div id="loading-screen">
        <div class="d-flex justify-content-center align-items-center vh-100 bg-white">
            <div class="spinner-border text-primary" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>

    <div class="welcome-section">
        <h1 class="welcome-title">Selamat Datang di Sistem Informasi UPJA</h1>
        <p class="lead">Kelola data alat, bahan, dan laporan dengan mudah!</p>
        <div class="welcome-buttons">
            <a href="{{ route('login') }}" class="btn btn-primary btn-lg">Masuk ke Dashboard</a>
            <a href="{{ route('register') }}" class="btn btn-outline-secondary btn-lg">Daftar Akun Baru</a>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const buttons = document.querySelectorAll('.welcome-buttons a');
            const loadingScreen = document.getElementById('loading-screen');

            buttons.forEach(button => {
                button.addEventListener('click', (e) => {
                    e.preventDefault();
                    loadingScreen.style.display = 'block'; // Tampilkan loading screen
                    setTimeout(() => {
                        window.location.href = button.getAttribute('href'); // Redirect setelah loading
                    }, 1000); // Waktu delay animasi (dalam milidetik)
                });
            });
        });
    </script>
</body>
</html>
