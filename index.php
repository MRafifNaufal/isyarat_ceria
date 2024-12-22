<?php
session_start();
include 'koneksi.php';

?>
<html lang="en">
<body>
    <?php include 'navbar.php';?>
    <main>
        <section class="hero">
            <div class="content">
                <div class="post-content">
                    <div class="post-txt">
                        <h1>ISYARAT CERIA</h1>
                        <p>Website untuk membantu meningkatkan efisiensi dalam pembelajaran bahasa isyarat dengan menerapkan Kamus Visual dan Permainan Kuis.</p>
                    </div>
                    <img class="post-img" src="./assets/img/Vector/post_img_handGesture.png">
                </div>

                <ul class="materi-container">
                    <li class="materi-preview">
                        <h3>Materi Dasar</h3>
                        <p>Pengenalan dasar bahasa isyarat melalui Sistem Isyarat Bahasa Indonesia (SIBI) untuk membantu komunikasi sehari-hari bagi individu dengan keterbatasan pendengaran.</p>
                        <a href="./materi_dasar.php"><button class="materi-btn" type="button">Pelajari Selengkapnya!</button></a>
                    </li>
                    <li class="materi-preview">
                        <h3>Materi Pemula</h3>
                        <p>Pembelajaran kosakata dasar dan frasa sederhana dalam bahasa isyarat untuk meningkatkan keterampilan komunikasi sehari-hari siswa.</p>
                        <a href="./materi_pemula.php"><button class="materi-btn" type="button">Pelajari Selengkapnya!</button></a>
                    </li>
                    <li class="materi-preview">
                        <h3>Materi Lanjutan</h3>
                        <p>Pembelajaran struktur  kata sapaan dan kalimat sederhana dalam bahasa isyarat untuk membangun percakapan sederhana.</p>
                        <a><button class="materi-btn" type="button">Coming Soon!</button></a>
                    </li>
                </ul>

                <div class="benefit">
                    <img src="./assets/img/Vector/rb_2148354023 1.png">
                    <div class="benefit-txt">
                        <h2>Benefit pada pembelajaran bahasa isyarat</h2>
                        <ul>
                            <li>Pengguna dapat belajar kapan saja dan di mana saja.</li>
                            <li>Materi disampaikan melalui video, kuis, dan latihan interaktif, sehingga proses belajar lebih efektif dan menyenangkan.</li>
                            <li>Pengguna dapat mengikuti materi sesuai dengan kecepatan belajar masing-masing tanpa tekanan.</li>
                            <li>Menyediakan berbagai tingkat pembelajaran, mulai dari kosakata dasar, hingga menyusun kalimat sederhana.</li>
                            <li>Membantu pengguna mendukung komunikasi yang inklusif dan memahami kebutuhan individu tunarungu.</li>
                        </ul>
                    </div>
                </div>

                <div class="prequiz">
                    <div class="prequiz-container">
                        <div class="prequiz-txt">
                            <h2>Suaramu untuk Masa Depan Bahasa Isyarat!</h2>
                            <p>Pendapatmu sangat berarti bagi kami! 
                            Isi kuisioner ini dan bantu kami menciptakan website pembelajaran bahasa isyarat yang lebih menarik dan bermanfaat untuk semua!</p>
                            <a href="kuis.php"><button class="prequiz-btn" type="button">Ikuti Kuesioner Kami</button></a>
                        </div>
                        <img class="prequiz-img" src="./assets/img/Vector/rb_29429 1.png">
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include 'footer.php';?>
</body>
</html>