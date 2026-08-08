<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('judul-tab')</title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>

    <!-- header -->
    <header>
        <h1>Website Profil</h1>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/profil">Profil</a></li>
            <li><a href="/kontak">Kontak</a></li>
            <li><a href="/tentang">Tentang</a></li>
            <li><a href="/artikel">Artikel</a></li>
        </ul>
    </header>

    <!-- konten utama -->
    @yield('konten-utama')

    <!-- profil -->
    @yield('profil')

    <!-- kontak -->
    @yield('kontak')

    <!-- tentang -->
    @yield('tentang')

    <!-- artikel -->
    @yield('artikel')

    <!-- footer -->
    <footer>
        Copyright &copy; 2026
    </footer>
    
</body>
</html>