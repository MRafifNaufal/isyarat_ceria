<?php
include 'koneksi.php';
?>
<html>
    <body>
        <header>
            <nav>                
            <!-- Logo -->
            <div class="logo-navbar">
                <a class="logo" href="./index.php"><img src="./assets/img/Logo/white.png">
                    <p>Isyarat</br>Ceria</p>
                </a>

                <!-- Hamburger Icon -->
                <div class="hamburger" onclick="toggleMenu()">
                    <i class="bi bi-list"></i>
                </div>
            </div>
                <!-- Logo -->
                <ul class="nav_Menu">
                    <li><a href="./index.php">Beranda</a></li>
                    <li>
                        <a>Materi <i class="bi bi-caret-down-fill"></i></a>
                        <ul class="subnav">
                            <li><a href="./materi_dasar.php">Materi Dasar</a></li>
                            <li><a href="./materi_pemula.php">Materi Pemula</a></li>
                            <li><a>Coming Soon</a></li>
                        </ul>
                    </li>
                    <li><a href="./tentang_kami.php">Tentang Kami</a></li>
                    <li><a href="./kuis.php">Kuis</a></li>
                </ul>                        
            </nav>
        </header>
    </body>

    <script>
    function toggleMenu() {
        const menu = document.querySelector('.nav_Menu');
        menu.classList.toggle('active');
    }
    </script>
</html>