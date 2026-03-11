<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang | WEBSITE BUSINESS CENTER UNIVERSITAS ALMUSLIM</title>
    <link rel="stylesheet" type="text/css" href="/businnes-center/assets/css/modern.css" />
    <script src="jquery-latest.js"></script>
    <script type="text/javascript">
        function slideSwitch() {
            var $active = $('#slideshow DIV.active');
            if ( $active.length == 0 ) $active = $('#slideshow DIV:last');
            var $next = $active.next().length ? $active.next() : $('#slideshow DIV:first');
            $active.addClass('last-active');
            $next.css({opacity: 0.0}).addClass('active').animate({opacity: 1.0}, 1100, function() {
                $active.removeClass('active last-active');
            });
        }
        $(function() {
            setInterval("slideSwitch()", 4000);
        });
    </script> 
</head>
<body>

<div class="app-container">
    
    <!-- Top Navigation Menu -->
    <nav class="frontend-nav">
        <?php include 'menu.php'; ?>
    </nav>
    
    <!-- Hero Slider -->
    <div id="slideshow">
        <div class="active"><img src="../uploads/gallery/1.jpg" alt="Slide 1" /></div>
        <div><img src="../uploads/gallery/2.jpg" alt="Slide 2" /></div>
        <div><img src="../uploads/gallery/3.jpg" alt="Slide 3" /></div>
        <div><img src="../uploads/gallery/4.jpg" alt="Slide 4" /></div>
        <div><img src="../uploads/gallery/5.jpg" alt="Slide 5" /></div>
        <div><img src="../uploads/gallery/6.jpg" alt="Slide 6" /></div>
        <div><img src="../uploads/gallery/7.jpg" alt="Slide 7" /></div>
        <div><img src="../uploads/gallery/8.jpg" alt="Slide 8" /></div>
        <div><img src="../uploads/gallery/9.jpg" alt="Slide 9" /></div>
    </div>

    <!-- Main Content Flex -->
    <div class="main-content-area">
        <!-- Sidebar Widgets -->
        <aside class="sidebar">
            <div style="margin-bottom: 25px;">
                <?php include 'reg.php'; ?>
            </div>
            <div style="margin-bottom: 25px;">
                <?php include 'poll.php'; ?>
            </div>
            <div style="margin-bottom: 25px;">
                <?php include 'dat.php'; ?>
            </div>
            <div>
                <?php include 'hits.php'; ?>
            </div>
        </aside>
        
        <!-- Center Content -->
        <main class="page-content">
            <h2 style="color:var(--primary-green); border-bottom:3px solid var(--accent-green); padding-bottom:10px; margin-bottom:20px;">
               Selamat Datang di Website<br>BUSINESS CENTER UNIVERSITAS ALMUSLIM
            </h2>
            
            <h3 style="color:#009999; margin-bottom:10px;">Business Center</h3>
            <p align="justify">
                Business center merupakan salah satu peluang bisnis yang bisa mendatangkan keuntungan besar secara cepat. Hal ini karena bisnis ini bukan sekedar menjual produk, namun lebih mengedepankan menjual kepercayaan dan kepuasan pelanggan.
            </p>
            <br>
            <p align="justify">
                Dikatakan menjual kepercayaan, karena pada layanan ini biasanya kita akan dihadapkan pada pembuatan dokumen penting sebuah instansi. Dengan menjaga kepercayaan akan rahasia dokumen tersebut, maka kita akan mendapatkan kredibilitas di mata konsumen dan dianggap mampu menjaga kepercayaan yang diberikan.
            </p>
            <br>
            <p align="justify">
                Berbeda jika kita berbuat sebaliknya, dengan membocorkan dokumen yang dimiliki instansi tersebut. Bukan tidak mungkin usaha yang kita rintis hanya akan seumur jagung, sebab tidak akan ada pelanggan yang mau mencetakkan dokumen mereka pada tempat kita. Jika ini terjadi, kerugianlah yang akan didapatkan. Itulah mengapa dikatakan bahwa dalam bisnis ini terdapat unsur bisnis kepercayaan.
            </p>
            <br>
            <p align="justify">
                Jika kepercayaan dari pelanggan sudah berhasil diraih, hal itu merupakan separuh dari kunci sukses usaha ini. Selain itu, beberapa trik dalam menjalankan usaha ini akan meningkatkan perolehan laba.
            </p>
            <br>
            <h3 style="color:#009999; margin-bottom:10px;">Tips Mengembangkan Jasa</h3>
            <ol style="margin-left: 20px; text-align: justify; line-height:1.8;">
                <li>Bagi pengusaha yang memiliki keterbatasan, tidak perlu memaksakan diri untuk memiliki semua mesin produksi. Kita cukup menjalankan proses pra desain dan pencarian konsumen, hingga proses mastering materi. Akan lebih baik jika kita bekerja sama dengan pusat layanan besar untuk melakukan proses akhir.</li>
                <li>Efisienkan penggunaan bahan baku. Tidak semua proses pengerjaan akan memakai seluruh bagian bahan baku. Bagian yang belum terpakai bisa digunakan untuk produk lain. Sehingga kita bisa menggunakan satu pengerjaan untuk sekaligus dua pesanan. Ini akan menghemat biaya produksi.</li>
            </ol>
        </main>
    </div>
    
    <!-- Footer -->
    <footer class="modern-footer">
        Created by: FADHIL &copy; <?php echo date("Y"); ?><br />
        Best viewed in Google Chrome, Mozilla Firefox, and Safari <br/>
        Business Center Universitas Almuslim
    </footer>

</div>

</body>
</html>
