<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business Center Almuslim | The Future of Campus Business</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/businnes-center/assets/css/modern.css" />
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript">
        // Preloader Logic
        $(window).on('load', function() {
            $('#preloader').fadeOut('slow');
        });

        function slideSwitch() {
            var $active = $('#slideshow DIV.active');
            if ( $active.length == 0 ) $active = $('#slideshow DIV:last');
            var $next = $active.next().is('div') ? $active.next() : $('#slideshow DIV:first');
            $active.addClass('last-active');
            $next.css({opacity: 0.0}).addClass('active').animate({opacity: 1.0}, 1500, function() {
                $active.removeClass('active last-active');
            });
        }
        $(function() { setInterval(slideSwitch, 5000); });
        
        $(window).on('scroll', function() {
            $('.reveal').each(function() {
                var bottom_of_object = $(this).offset().top + $(this).outerHeight() / 5;
                var bottom_of_window = $(window).scrollTop() + $(window).height();
                if (bottom_of_window > bottom_of_object) {
                    $(this).addClass('active-reveal');
                }
            });
            
            // Back to Top Button
            if ($(this).scrollTop() > 300) {
                $('#backToTop').addClass('show');
            } else {
                $('#backToTop').removeClass('show');
            }
        });
        
        function scrollToTop() {
            window.scrollTo({top: 0, behavior: 'smooth'});
        }
    </script> 
    <style>
        .active-reveal { opacity: 1 !important; transform: translateY(0) !important; transition: all 1.2s cubic-bezier(0.165, 0.84, 0.44, 1); }
        
        .hero-v5 {
            height: 100vh; display: flex; align-items: center; justify-content: center;
            position: relative; background: #064022; overflow: hidden;
        }
        .hero-v5 #slideshow { position: absolute; top:0; left:0; width:100%; height:100%; z-index:1; }
        .hero-v5 #slideshow img { width:100%; height:100%; object-fit:cover; filter: brightness(0.25) saturate(1.1); transform: scale(1.1); transition: 10s linear; }
        .hero-v5 .active img { transform: scale(1); }
        
        .hero-v5-content { position: relative; z-index: 10; text-align: left; color: #fff; max-width: 1400px; width: 100%; padding: 0 50px; }
        
        .glass-tag {
            background: rgba(255,255,255,0.1); backdrop-filter: blur(5px);
            padding: 10px 25px; border-radius: 50px; border: 1px solid rgba(255,255,255,0.2);
            font-size: 12px; font-weight: 800; text-transform: uppercase; letter-spacing: 3px;
            display: inline-block; margin-bottom: 30px; color: var(--accent-green);
        }

        .cta-icon-btn {
            width: 60px; height: 60px; background: #fff; color: var(--primary-green);
            border-radius: 50%; display: flex; align-items: center; justify-content: center;
            font-size: 24px; transition: 0.4s; text-decoration: none;
        }
        .cta-icon-btn:hover { background: var(--accent-green); color: #fff; transform: scale(1.1); }

        /* Testimonial Section */
        .testimonial-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 30px; margin-top: 50px; }
        
        .user-avatar { width: 60px; height: 60px; border-radius: 50%; background: var(--accent-green); display: flex; align-items: center; justify-content: center; font-weight: 800; color: #fff; margin-bottom: 20px; font-size: 20px;}

        /* Floating WhatsApp */
        .whatsapp-float {
            position: fixed; bottom: 30px; left: 30px;
            width: 60px; height: 60px; background: #25d366;
            color: #fff; border-radius: 50%; display: flex;
            align-items: center; justify-content: center;
            font-size: 30px; z-index: 1000; box-shadow: 0 10px 25px rgba(37, 211, 102, 0.4);
            transition: 0.4s; text-decoration: none;
        }
        .whatsapp-float:hover { transform: scale(1.1); box-shadow: 0 15px 35px rgba(37, 211, 102, 0.6); }

    </style>
</head>
<body class="mesh-bg">

    <!-- Preloader -->
    <div id="preloader">
        <div style="text-align:center;">
            <div class="loader" style="margin: 0 auto 20px;"></div>
            <h2 style="color:#fff; font-weight:900; letter-spacing:5px; font-size:14px; text-transform:uppercase;">LOADING EXCELLENCE</h2>
        </div>
    </div>

    <!-- Back to Top -->
    <div id="backToTop" onclick="scrollToTop()">↑</div>

    <!-- Floating WhatsApp -->
    <a href="https://wa.me/628116543xxxx" class="whatsapp-float reveal reveal-delay-3" target="_blank">📱</a>

    <!-- Hyper-Modern Nav v4 -->
    <!-- Unified Premium Navbar -->
    <nav class="frontend-nav" id="mainNav">
        <a href="/businnes-center/user/index.php" class="nav-brand">
            <img src="/businnes-center/assets/images/logo%20almuslim.jpg" alt="Logo">
            <span>ALMUSLIM HUB</span>
        </a>
        <div class="nav-links-wrapper">
            <?php include 'menu.php'; ?>
        </div>
        <div style="display: flex; align-items: center; gap: 15px;">
            <a href="daftar_member.php" style="color:var(--accent-green); text-decoration:none; font-weight:800; font-size:13px; letter-spacing:1px; border:2px solid var(--accent-green); padding:10px 20px; border-radius:10px; transition:0.3s;">DAFTAR MEMBER</a>
            <a href="/businnes-center/login.php" class="admin-login-btn">ADMIN LOGIN</a>
        </div>
    </nav>

    <!-- Cinematic Overdrive Hero -->
    <section class="hero-v5">
        <div id="slideshow">
            <div class="active"><img src="../uploads/gallery/4.jpg" alt="Innovate"></div>
            <div><img src="../uploads/gallery/1.jpg" alt="Supply"></div>
            <div><img src="../uploads/gallery/7.jpg" alt="Produce"></div>
        </div>
        
        <div class="hero-v5-content reveal">
            <div class="glass-tag reveal-delay-1">Global Standard Since 2002</div>
            <h1 style="font-size: clamp(3.5rem, 12vw, 7.5rem); font-weight: 900; line-height: 0.9; margin-bottom: 20px; text-transform: uppercase;">
                Excellence <br><span class="gradient-text" style="filter: drop-shadow(0 0 20px rgba(21, 165, 86, 0.4));">In Motion.</span>
            </h1>
            <p style="font-size: 1.6rem; max-width: 850px; margin-bottom: 50px; opacity: 0.85; line-height: 1.4; border-left: 5px solid var(--accent-green); padding-left: 30px;">
                Transformasi layanan inventaris dan bisnis kampus menuju era digitalisasi paripurna. Solusi tepat untuk kebutuhan institusi dan mahasiswa.
            </p>
            <div style="display: flex; align-items: center; gap: 40px;">
                <a href="page/produk.php" class="btn-premium btn-glow" style="padding:22px 60px; font-size:18px;">EXPLORE CATALOG</a>
                <div style="display: flex; align-items: center; gap: 15px;">
                    <a href="daftar_member.php" class="cta-icon-btn" style="background:var(--accent-green); color:#fff;">✨</a>
                    <a href="daftar_member.php" style="font-weight: 800; font-size: 14px; letter-spacing: 1px; color:#fff; text-decoration:none;">JOIN AS MEMBER</a>
                </div>
            </div>
        </div>
        
        <!-- Scroll Prompt -->
        <div style="position:absolute; bottom:40px; left:50%; transform:translateX(-50%); text-align:center; color:#fff; z-index:10; opacity:0.6;">
            <div class="float-up" style="font-size:24px;">↓</div>
            <div style="font-size:10px; text-transform:uppercase; letter-spacing:3px; margin-top:10px;">Keep Scrolling</div>
        </div>
    </section>

    <main style="max-width: 1400px; margin: 0 auto; padding: 0 40px;">
        
        <!-- Stats with Luxury Cards -->
        <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 25px; margin-top: -60px; position: relative; z-index: 20;">
            <div class="luxury-card reveal" style="padding:30px; text-align:center; background:var(--glass-white); backdrop-filter:blur(20px);">
                <span style="display:block; font-size:40px; font-weight:900; color:var(--primary-green);">22+</span>
                <span style="font-size:11px; text-transform:uppercase; letter-spacing:2px; font-weight:700; color:#666;">Experience Years</span>
            </div>
            <div class="luxury-card reveal reveal-delay-1" style="padding:30px; text-align:center; background:var(--glass-white); backdrop-filter:blur(20px);">
                <span style="display:block; font-size:40px; font-weight:900; color:var(--primary-green);">5k+</span>
                <span style="font-size:11px; text-transform:uppercase; letter-spacing:2px; font-weight:700; color:#666;">Total Products</span>
            </div>
            <div class="luxury-card reveal reveal-delay-2" style="padding:30px; text-align:center; background:var(--glass-white); backdrop-filter:blur(20px);">
                <span style="display:block; font-size:40px; font-weight:900; color:var(--primary-green);">24h</span>
                <span style="font-size:11px; text-transform:uppercase; letter-spacing:2px; font-weight:700; color:#666;">System Uptime</span>
            </div>
            <div class="luxury-card reveal reveal-delay-3" style="padding:30px; text-align:center; background:var(--primary-gradient); border:none;">
                <span style="display:block; font-size:40px; font-weight:900; color:#fff;">1st</span>
                <span style="font-size:11px; text-transform:uppercase; letter-spacing:2px; font-weight:700; color:rgba(255,255,255,0.7);">Campus Choice</span>
            </div>
        </div>

        <!-- Excellence Pillars -->
        <section style="padding: 150px 0;">
            <div style="display: grid; grid-template-columns: 1fr 1 fr; gap: 80px; align-items: center;">
                <div class="reveal">
                    <h2 style="font-size: 55px; font-weight: 900; color: var(--primary-green); line-height: 1.1; margin-bottom: 40px;">Arsitektur Bisnis <br><span class="gradient-text">Terpercaya</span></h2>
                    <div style="display:grid; grid-template-columns: 1fr 1fr; gap:30px;">
                        <div>
                            <h4 style="color:var(--accent-green); margin-bottom:10px;">01. Keamanan</h4>
                            <p style="font-size:14px; color:#666;">Enkripsi data berlapis untuk melindungi privasi akun member.</p>
                        </div>
                        <div>
                            <h4 style="color:var(--accent-green); margin-bottom:10px;">02. Kecepatan</h4>
                            <p style="font-size:14px; color:#666;">Optimasi server super kencang untuk pemrosesan order kilat.</p>
                        </div>
                    </div>
                    <a href="tentang_kami.php" class="btn-premium" style="margin-top:50px; padding:18px 45px;">Pelajari Ekosistem Kami</a>
                </div>
                <div class="reveal reveal-delay-2" style="display:grid; grid-template-columns: 1fr 1fr; gap:20px;">
                    <div class="luxury-card" style="height:350px; background:url('../uploads/gallery/9.jpg') center/cover;"></div>
                    <div class="luxury-card" style="height:350px; margin-top:40px; background:url('../uploads/gallery/4.jpg') center/cover;"></div>
                </div>
            </div>
        </section>

        <!-- Testimonials -->
        <section style="padding: 120px 0; background: #064022; border-radius: 60px; margin-bottom: 120px; position: relative; overflow: hidden;">
            <div style="position:absolute; top:0; left:0; width:100%; height:100%; opacity:0.1; background:url('/businnes-center/abstract_green_tech_pattern_1773215609120.png') center/cover;"></div>
            <div style="position:relative; z-index:10; padding: 0 80px;">
                <div style="text-align:center; margin-bottom: 80px;">
                    <h2 style="color:#fff; font-size:45px; font-weight:900;">Dengar Dari <span style="color:var(--accent-green);">Pelanggan</span> Kami</h2>
                </div>
                <div class="testimonial-grid">
                    <div class="quote-card reveal">
                        <div class="user-avatar">RS</div>
                        <p style="color:#ddd; font-style:italic; line-height:1.8; margin-bottom:20px;">"Pelayanan yang sangat profesional. Proses pemesanan desain dan cetak di Business Center Almuslim sangat cepat dan hasilnya luar biasa."</p>
                        <h4 style="color:var(--accent-green);">Rahmat Syahputra</h4>
                        <small style="color:#888;">Ketua BEM Universitas</small>
                    </div>
                    <div class="quote-card reveal reveal-delay-1">
                        <div class="user-avatar">DL</div>
                        <p style="color:#ddd; font-style:italic; line-height:1.8; margin-bottom:20px;">"Sistem inventorynya sangat membantu kami dalam memantau stok ATK unit. Transparansinya benar-benar juara!"</p>
                        <h4 style="color:var(--accent-green);">Dina Larasati</h4>
                        <small style="color:#888;">Staf Administrasi Rektorat</small>
                    </div>
                </div>
            </div>
        </section>

        <!-- Interactive Hubs -->
        <section style="padding-bottom: 150px;">
            <div style="display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 40px;">
                <!-- Login Hub -->
                <div class="widget-luxury reveal">
                    <div class="widget-title-area">
                        <div class="widget-icon" style="background:var(--primary-gradient); color:#fff;">👤</div>
                        <h3 style="font-weight:900;">MEMBERS ONLY</h3>
                    </div>
                    <p style="font-size:13px; color:#888; margin-bottom:25px;">Masuk ke akun Anda untuk mendapatkan harga khusus mitra.</p>
                    <?php include 'reg.php'; ?>
                </div>
                
                <!-- Poll Hub -->
                <div class="widget-luxury reveal reveal-delay-1">
                    <div class="widget-title-area">
                        <div class="widget-icon" style="background:var(--primary-gradient); color:#fff;">💬</div>
                        <h3 style="font-weight:900;">COMMUNITY VOICE</h3>
                    </div>
                    <p style="font-size:13px; color:#888; margin-bottom:25px;">Satu suara Anda sangat berharga bagi peningkatan layanan kami.</p>
                    <?php include 'poll.php'; ?>
                </div>

                <!-- Calendar/Hits Combined Hub -->
                <div class="widget-luxury reveal reveal-delay-2" style="background:#0c6136; border:none; color:#fff;">
                    <div class="widget-title-area">
                        <div class="widget-icon" style="background:#fff; color:var(--primary-green);">⚡</div>
                        <h3 style="color:#fff; font-weight:900;">LIVE PULSE</h3>
                    </div>
                    <?php include 'hits.php'; ?>
                    <div style="height:1px; background:rgba(255,255,255,0.1); margin:40px 0;"></div>
                    <div style="text-align:center;">
                        <h4 style="font-size:12px; letter-spacing:3px; margin-bottom:20px; opacity:0.6;">SCHEDULED EVENTS</h4>
                        <div style="transform: scale(0.95); transform-origin: top center;">
                            <?php include 'dat.php'; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <!-- Hyper-Footer -->
    <footer style="background: #000; padding: 150px 0 60px; color: #fff; position: relative;">
        <div style="max-width: 1400px; margin: 0 auto; padding: 0 50px;">
            <div style="display: grid; grid-template-columns: 2fr 1fr 1fr 1.5fr; gap: 80px; padding-bottom: 100px;">
                <div>
                    <img src="/businnes-center/assets/images/logo%20almuslim.jpg" style="height:80px; filter:grayscale(1) invert(1); margin-bottom:40px;">
                    <h2 style="font-size:45px; font-weight:900; line-height:0.9; margin-bottom:30px;">FUTURE IS<br><span style="color:var(--accent-green);">GREEN.</span></h2>
                    <p style="color:rgba(255,255,255,0.5); line-height:1.8; font-size:15px;">Business Center Universitas Almuslim berkomitmen menghadirkan ekosistem bisnis yang berkelanjutan dan berbasis teknologi untuk masa depan pendidikan tinggi Indonesia.</p>
                </div>
                <div>
                    <h4 style="margin-bottom:35px; font-size:12px; letter-spacing:3px; color:var(--accent-green);">RESOURCES</h4>
                    <ul style="list-style:none; padding:0; font-size:14px;">
                        <li style="margin-bottom:20px;"><a href="page/produk.php" style="color:rgba(255,255,255,0.6); text-decoration:none;">Katalog Produk</a></li>
                        <li style="margin-bottom:20px;"><a href="kontak.php" style="color:rgba(255,255,255,0.6); text-decoration:none;">Hubungi Kami</a></li>
                        <li style="margin-bottom:20px;"><a href="tentang_kami.php" style="color:rgba(255,255,255,0.6); text-decoration:none;">Area Tentang Kami</a></li>
                    </ul>
                </div>
                <div>
                    <h4 style="margin-bottom:35px; font-size:12px; letter-spacing:3px; color:var(--accent-green);">OFFICE</h4>
                    <p style="color:rgba(255,255,255,0.5); font-size:14px; line-height:2;">
                        Gedung Business Center<br>Universitas Almuslim<br>Bireuen, Aceh
                    </p>
                </div>
                <div style="background:rgba(255,255,255,0.05); padding:40px; border-radius:30px;">
                    <h4 style="margin-bottom:25px; font-size:12px; letter-spacing:3px;">JOIN OUR NEWSLETTER</h4>
                    <form style="display:flex; gap:10px;">
                        <input type="text" placeholder="Your Email" style="background:rgba(255,255,255,0.1); border:none; color:#fff; padding:15px; border-radius:12px; flex:1;">
                        <button style="background:var(--accent-green); border:none; padding:15px; border-radius:12px; cursor:pointer;">➔</button>
                    </form>
                </div>
            </div>
            
            <div style="border-top:1px solid rgba(255,255,255,0.1); padding-top:60px; display:flex; justify-content:space-between; align-items:center; font-size:13px; color:rgba(255,255,255,0.3);">
                <p>&copy; <?php echo date("Y"); ?> FADHIL x Universitas Almuslim. Crafted with ❤️ for Education.</p>
                <div style="display:flex; gap:30px;">
                    <a href="#" style="color:inherit; text-decoration:none;">Instagram</a>
                    <a href="#" style="color:inherit; text-decoration:none;">Facebook</a>
                    <a href="#" style="color:inherit; text-decoration:none;">LinkedIn</a>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>
