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
                        <h1>Materi Lanjutan</h1>                        
                    </div> 
                    <img class="materi-banner" src="./assets/img//Lainnya/banner.png" alt="banner">
                </div>
                <div class="materi-bigvid" id="imbuhandasar">
                    <h1>Memasukkan Imbuhan ke Kalimat Dasar</h1>
                    <video controls loop muted>
                        <source src="assets/vid/Place Holder Vid.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="materi-smallvid" id="kal-tunggal">
                    <h1>Kalimat Tunggal</h1>
                    <div class="vid-container">
                        <video controls loop muted>
                            <source src="assets/vid/Place Holder Vid.mp4" type="video/mp4">
                        </video>
                        <video controls loop muted>
                            <source src="assets/vid/Place Holder Vid.mp4" type="video/mp4">
                        </video>
                        <video controls loop muted>
                            <source src="assets/vid/Place Holder Vid.mp4" type="video/mp4">
                        </video>
                        <video controls loop muted>
                            <source src="assets/vid/Place Holder Vid.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>
                
                <div class="materi-smallvid" id="kal-majemuk">
                    <h1>Kalimat Majemuk </h1>
                    <div class="vid-container">
                        <video controls loop muted>
                            <source src="assets/vid/Place Holder Vid.mp4" type="video/mp4">
                        </video>
                        <video controls loop muted>
                            <source src="assets/vid/Place Holder Vid.mp4" type="video/mp4">
                        </video>
                        <video controls loop muted>
                            <source src="assets/vid/Place Holder Vid.mp4" type="video/mp4">
                        </video>
                        <video controls loop muted>
                            <source src="assets/vid/Place Holder Vid.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>

                <div class="materi-smallvid" id="kal-deklaratif">
                    <h1>Kalimat Deklaratif (Pernyataan)</h1>
                    <div class="vid-container">
                        <video controls loop muted>
                            <source src="assets/vid/Place Holder Vid.mp4" type="video/mp4">
                        </video>
                        <video controls loop muted>
                            <source src="assets/vid/Place Holder Vid.mp4" type="video/mp4">
                        </video>
                        <video controls loop muted>
                            <source src="assets/vid/Place Holder Vid.mp4" type="video/mp4">
                        </video>
                        <video controls loop muted>
                            <source src="assets/vid/Place Holder Vid.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>

                <div class="materi-smallvid" id="kal-tanya">
                    <h1>Kalimat Tanya (Kalimat Interogatif)</h1>
                    <div class="vid-container">
                        <video controls loop muted>
                            <source src="assets/vid/Place Holder Vid.mp4" type="video/mp4">
                        </video>
                        <video controls loop muted>
                            <source src="assets/vid/Place Holder Vid.mp4" type="video/mp4">
                        </video>
                        <video controls loop muted>
                            <source src="assets/vid/Place Holder Vid.mp4" type="video/mp4">
                        </video>
                        <video controls loop muted>
                            <source src="assets/vid/Place Holder Vid.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>

                <div class="materi-smallvid" id="kal-seruan">
                    <h1>Kalimat Seruan</h1>
                    <div class="vid-container">
                        <video controls loop muted>
                            <source src="assets/vid/Place Holder Vid.mp4" type="video/mp4">
                        </video>
                        <video controls loop muted>
                            <source src="assets/vid/Place Holder Vid.mp4" type="video/mp4">
                        </video>
                        <video controls loop muted>
                            <source src="assets/vid/Place Holder Vid.mp4" type="video/mp4">
                        </video>
                        <video controls loop muted>
                            <source src="assets/vid/Place Holder Vid.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include 'footer.php';?>
</body>
</html>