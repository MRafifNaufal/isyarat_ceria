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
                <div class="kuis-container">
                <iframe src="https://docs.google.com/forms/d/e/1FAIpQLScgqQMFn6XShPPHqfh6bowt2KKsWVPxmyx7W85_9KlapoKQGQ/viewform?embedded=true" frameborder="0">Loading…</iframe>
                </div>
            </div>
        </section>
    </main>
    <?php include 'footer.php';?>
</body>
</html>