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
                <div class="aboutUs" id="latarblkng">
                    <h1>Latar Belakang</h1>
                    <p>Website Isyarat Ceria ini dibuat karena kurangnya akses pada metode pembelajaran bahasa isyarat. Pengguna dapat mempelajari bahasa isyarat yang mudah dipahami, praktis, dan terjangkau. Banyak individu, baik penyandang disabilitas pendengaran maupun orang-orang di sekitarnya, menghadapi tantangan dalam mempelajari bahasa isyarat karena terbatasnya sumber belajar, kurangnya pengajar, dan minimnya kesadaran masyarakat terhadap pentingnya komunikasi inklusif.</p>
                </div>
                <div class="timKami" id="tim">
                    <h1>Tim Kami</h1>
                    <div class="tim-container">
                        <div class="tim-detail">
                            <img class="tim-img" src="./assets/img/Tim/Kucing.jpg">
                            <h4>Haidar Zharif Nasution</h4>
                            <p>Project Leader</p>
                        </div>
                        <div class="tim-detail">
                            <img class="tim-img" src="./assets/img/Tim/astro.jpg">
                            <h4>Muhammad Rafif Naufal</h4>
                            <p>UI-UX Design & Back End Developer</p>
                        </div>
                        <div class="tim-detail">
                            <img class="tim-img" src="./assets/img/Tim/poggers.jpg">
                            <h4>Muhammad Naufal AlHafizh</h4>
                            <p>Front End Developer</p>
                        </div>
                        <div class="tim-detail">
                            <img class="tim-img" src="./assets/img/Tim/chicken vectors.jpeg">
                            <h4>Muhammad Arif Putra</br>Ramadhan</h4>
                            <p>Content Maker</p>
                        </div>
                        <div class="tim-detail">
                            <img class="tim-img" src="./assets/img/Tim/cute-deer-with-antlers-illustration-standing-cute-deer-cartoon-style-drawing-vector.jpg">
                            <h4>Filemon Kadarmanto</h4>
                            <p>Graphic Designer</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include 'footer.php';?>
</body>
</html>