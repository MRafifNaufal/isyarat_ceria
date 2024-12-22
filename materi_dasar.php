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
                <div class="title-materi">
                    <div class="tm-text">
                        <h1>Materi Dasar</h1>                        
                    </div> 
                    <img class="materi-banner" src="./assets/img//Lainnya/banner.png" alt="banner">
                </div>
                <div class="materi-txt" id="pengenalan">
                    <h1>Pengenalan Bahasa Isyarat</h1>
                    <p>Bahasa Isyarat adalah bahasa yang mengutamakan komunikasi manual, bahasa tubuh, dan gerak bibir. Bahasa isyarat merupakan bahasa yang digunakan oleh komunitas Tuli untuk berkomunikasi. Tidak hanya itu, bahasa isyarat juga merupakan alat bagi penggunanya untuk mengidentifikasi diri dan memperoleh informasi. Perbedaan mendasar antara bahasa isyarat dan bahasa lisan terletak pada modalitas atau sarana produksi dan persepsinya. Bahasa lisan diproduksi melalui alat ucap (oral) dan dipersepsi melalui alat pendengaran (auditoris), sementara bahasa isyarat diproduksi melalui gerakan tangan (gestur) dan dipersepsi melalui alat penglihatan (visual). Dengan demikian, bahasa lisan bahasa yang bersifat oral-auditoris, sementara bahasa isyarat bersifat visual-gestural (Wikipedia)</p>
                </div>
                <div class="materi-txt" id="sejarah">
                    <h1>Sejarah Bahasa Isyarat</h1>
                    <p>Sejarah bahasa isyarat yang tercatat di masyarakat Barat dimulai pada abad ke-17, sebagai bahasa visual atau metode komunikasi, meskipun referensi tentang bentuk komunikasi menggunakan gerakan tangan sudah ada sejak abad ke-5 SM di Yunani. Bahasa isyarat terdiri dari sistem gerakan konvensional, mimik, tanda tangan, dan ejaan jari, ditambah penggunaan posisi tangan untuk mewakili huruf-huruf alfabet. Tanda juga dapat mewakili ide atau frasa yang lengkap, bukan hanya kata-kata individual.
                    <br/><br/>
                    Sebagian besar bahasa isyarat adalah bahasa alami , berbeda dalam konstruksi dari bahasa lisan yang digunakan di sekitarnya, dan digunakan terutama oleh orang tuna rungu untuk berkomunikasi. Banyak bahasa isyarat telah berkembang secara independen di seluruh dunia, dan tidak ada bahasa isyarat pertama yang dapat diidentifikasi. Baik sistem isyarat maupun alfabet manual telah ditemukan di seluruh dunia. Hingga abad ke-19, sebagian besar dari apa yang kita ketahui tentang bahasa isyarat historis terbatas pada alfabet manual ( sistem ejaan jari ) yang diciptakan untuk memfasilitasi pemindahan kata dari bahasa lisan ke bahasa isyarat, daripada dokumentasi bahasa isyarat itu sendiri.</p>
                </div>
                <div class="materi-txt" id="SIBI">
                    <h1>SIBI (Sistem Isyarat Bahasa Indonesia)</h1>
                    <p>Sistem Isyarat Bahasa Indonesia (SIBI) merupakan bahasa isyarat yang diadopsi dari American Sign Langauge (ASL) dan sudah dianjurkan oleh pemerintah untuk dipakai berkomunikasi. Bahkan SIBI sudah berlaku di Sekolah Luar Biasa (SLB) untuk komunikasi antara guru dengan murid. SIBI merupakan buatan dari mantan pemimpin SLB dan diangap bahwa bahasa SIBI mutlak digunakan di Indonesia. SIBI ini mempunyai tata atau struktur bahasa yang sama dengan tata bahasa lisan dengan memakai awalan dan akhiran.</p>
                </div>
                <div class="materi-bigvid" id="alfabet">
                    <h1>Alfabet Isyarat</h1>
                    <iframe src="https://www.youtube.com/embed/QUWGn_y4njs?modestbranding=1&controls=0&mute=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <div class="materi-bigvid" id="angkadasar">
                    <h1>Angka Dasar</h1>
                    <iframe src="https://www.youtube.com/embed/jDCxMVz6Nac?modestbranding=1&controls=0&mute=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        </section>
    </main>
    <?php include 'footer.php';?>
</body>
</html>