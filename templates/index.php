<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>EventCademy - Temukan Seminar & Workshop Terbaik</title>
    <link rel="stylesheet" href="../static/css/style.css" />
    <link rel="icon" type="image/x-icon" href="../static/images/logo-bg-removed.ico">
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
</head>
<body>
    <!-- Header -->
    <header>
        <div class="header-content">
            <!-- Logo dan Judul (Kiri) -->
            <div class="logo-title">
            <img src="../static/images/logo-bg-removed.png" alt="EventCademy Logo" class="navbar-logo">
            <h1>EventCademy</h1>
            </div>

            <!-- Menu Navigasi (Kanan) -->
            <nav>
            <ul>
                <li><a href="index.php">Beranda</a></li>
                <li><a href="#tentang-kami">Seminar</a></li>
                <li><a href="#kontak">Tentang Kami</a></li>
            </ul>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero" id="beranda">
        <div class="video-container">
            <video autoplay muted loop id="hero-video">
                <source src="../static/videos/hero-video.mp4" type="video/mp4" />
                Browser Anda tidak mendukung tag video.
            </video>
        </div>
        <div class="hero-overlay">
            <h2>Selamat Datang di EventCademy</h2>
            <p>
                Temukan seminar dan workshop terbaik untuk pengembangan diri Anda!
            </p>
            <a href="#daftar-seminar" class="btn">Lihat Daftar Acara</a>
        </div>
    </section>

    <!-- Dashboard -->
    <div class="dashboard" id="daftar-seminar">
        <h2>Daftar Seminar & Workshop</h2>
        <div class="card-container">
            <!-- Card 1 -->
            <div class="card">
                <img src="../static/images/seminar1.jpeg" alt="Seminar 1" />
                <h3>Seminar Teknologi 2023</h3>
                <p>25 Oktober 2023, 10:00 WIB</p>
                <span class="price">Rp 150.000</span>
                <div class="popup">
                    <h4>Deskripsi Singkat</h4>
                    <p>
                        Seminar ini membahas tren teknologi terbaru seperti AI, IoT, dan
                        blockchain. Cocok untuk profesional IT dan mahasiswa.
                    </p>
                    <p><strong>Pemateri:</strong> Dr. John Doe (Ahli Teknologi)</p>
                    <p><strong>Kuota tersedia:</strong> 50</p>
                    <a href="register.php?seminar=1" class="daftarButton btn">Daftar Sekarang</a>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="card">
                <img src="../static/images/seminar2.jpeg" alt="Seminar 2" />
                <h3>Workshop Kreativitas</h3>
                <p>30 Oktober 2023, 13:00 WIB</p>
                <span class="price free">Free</span>
                <div class="popup">
                    <h4>Deskripsi Singkat</h4>
                    <p>
                        Workshop ini mengajarkan teknik kreativitas untuk meningkatkan
                        produktivitas dan inovasi dalam pekerjaan.
                    </p>
                    <p><strong>Pemateri:</strong> Jane Smith (Konsultan Kreativitas)</p>
                    <p><strong>Kuota tersedia:</strong> 30</p>
                    <a href="register.php?seminar=2" class="daftarButton btn">Daftar Sekarang</a>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="card">
                <img src="../static/images/seminar3.jpeg" alt="Seminar 3" />
                <h3>Seminar Digital Marketing</h3>
                <p>5 November 2023, 09:00 WIB</p>
                <span class="price">Rp 200.000</span>
                <div class="popup">
                    <h4>Deskripsi Singkat</h4>
                    <p>
                        Pelajari strategi digital marketing terbaru untuk meningkatkan
                        penjualan dan engagement bisnis Anda.
                    </p>
                    <p>
                        <strong>Pemateri:</strong> Michael Lee (Digital Marketing Expert)
                    </p>
                    <p><strong>Kuota tersedia:</strong> 40</p>
                    <a href="register.php?seminar=3" class="daftarButton btn">Daftar Sekarang</a>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="card">
                <img src="../static/images/seminar4.jpeg" alt="Seminar 4" />
                <h3>Workshop Public Speaking</h3>
                <p>12 November 2023, 14:00 WIB</p>
                <span class="price">Rp 175.000</span>
                <div class="popup">
                    <h4>Deskripsi Singkat</h4>
                    <p>
                        Workshop ini dirancang untuk meningkatkan kemampuan public
                        speaking dan kepercayaan diri Anda.
                    </p>
                    <p>
                        <strong>Pemateri:</strong> Sarah Johnson (Public Speaking Coach)
                    </p>
                    <p><strong>Kuota tersedia:</strong> 25</p>
                    <a href="register.php?seminar=4" class="daftarButton btn">Daftar Sekarang</a>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="card">
                <img src="../static/images/seminar5.jpeg" alt="Seminar 5" />
                <h3>Seminar Keuangan Pribadi</h3>
                <p>19 November 2023, 11:00 WIB</p>
                <span class="price">Rp 100.000</span>
                <div class="popup">
                    <h4>Deskripsi Singkat</h4>
                    <p>
                        Pelajari cara mengelola keuangan pribadi dengan bijak dan
                        merencanakan masa depan finansial yang aman.
                    </p>
                    <p><strong>Pemateri:</strong> Robert Brown (Financial Planner)</p>
                    <p><strong>Kuota tersedia:</strong> 60</p>
                    <a href="register.php?seminar=5" class="daftarButton btn">Daftar Sekarang</a>
                </div>
            </div>

            <!-- Card 6 -->
            <div class="card hidden">
                <img src="../static/images/seminar6.jpeg" alt="Seminar 6" />
                <h3>Workshop Desain Grafis</h3>
                <p>26 November 2023, 10:00 WIB</p>
                <span class="price">Rp 250.000</span>
                <div class="popup">
                    <h4>Deskripsi Singkat</h4>
                    <p>
                        Workshop ini mengajarkan dasar-dasar desain grafis menggunakan tools populer seperti Adobe Photoshop dan Illustrator.
                    </p>
                    <p><strong>Pemateri:</strong> Emily Davis (Desainer Grafis Profesional)</p>
                    <p><strong>Kuota tersedia:</strong> 20</p>
                    <a href="register.php?seminar=6" class="daftarButton btn">Daftar Sekarang</a>
                </div>
            </div>

            <!-- Card 7 -->
            <div class="card hidden">
                <img src="../static/images/seminar7.jpeg" alt="Seminar 7" />
                <h3>Seminar Kesehatan Mental</h3>
                <p>3 Desember 2023, 13:00 WIB</p>
                <span class="price free">Free</span>
                <div class="popup">
                    <h4>Deskripsi Singkat</h4>
                    <p>
                        Seminar ini membahas pentingnya kesehatan mental dan cara mengelola stres dalam kehidupan sehari-hari.
                    </p>
                    <p><strong>Pemateri:</strong> Dr. Lisa Green (Psikolog Klinis)</p>
                    <p><strong>Kuota tersedia:</strong> 100</p>
                    <a href="register.php?seminar=7" class="daftarButton btn">Daftar Sekarang</a>
                </div>
            </div>
        </div>

        <!-- Tombol Load More -->
        <button id="loadMore" class="btn">Lihat Seminar Lainnya</button>
    </div>

    <!-- Footer -->
    <footer>
        <div class="footer-content" id="tentang-kami">
            <!-- Bagian Kiri (Tentang Kami) -->
            <div class="footer-section about">
                <h3>EventCademy</h3>
                <p>
                    EventCademy adalah platform terbaik untuk menemukan seminar dan
                    workshop berkualitas. Tingkatkan skill dan pengetahuan Anda bersama
                    kami!
                </p>
                <div class="social-links">
                    <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a href="#" target="_blank"><i class="fab fa-facebook"></i></a>
                    <a href="#" target="_blank"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>

            <!-- Bagian Tengah (Tautan Cepat) -->
            <div class="footer-section links">
                <h3>Tautan Cepat</h3>
                <ul>
                    <li><a href="index.php">Beranda</a></li>
                    <li><a href="/about">Tentang Kami</a></li>
                    <li><a href="/contact">Kontak</a></li>
                    <li><a href="/privacy">Kebijakan Privasi</a></li>
                    <li><a href="/terms">Syarat & Ketentuan</a></li>
                </ul>
            </div>

            <!-- Bagian Kanan (Kontak) -->
            <div class="footer-section contact" id="kontak">
                <h3>Hubungi Kami</h3>
                <p>
                    <i class="fas fa-map-marker-alt"></i> Jl. Contoh No. 123, Jakarta,
                    Indonesia
                </p>
                <p><i class="fas fa-phone"></i> +62 123 4567 890</p>
                <p><i class="fas fa-envelope"></i> info@eventcademy.com</p>
            </div>

            <!-- Bagian Maps -->
            <div class="footer-section maps">
            <h3>Lokasi Kami</h3>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d247.03679716681046!2d110.38307349782023!3d-7.833274388649155!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5701a2ae1c23%3A0x173dbeeddc56d9e!2sAhmad%20Dahlan%20University%20-%20Campus%204!5e0!3m2!1sen!2sid!4v1736042685780!5m2!1sen!2sid" 
                    width="600" 
                    height="450" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>

        <!-- Bagian Hak Cipta -->
        <div class="footer-bottom">
            <p>&copy; 2023 EventCademy. All rights reserved.</p>
        </div>
    </footer>

    <script src="../static/js/script.js"></script>
</body>
</html>