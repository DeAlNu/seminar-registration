<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran - EventCademy</title>
    <link rel="stylesheet" href="../static/css/style.css">
    <link rel="icon" type="image/x-icon" href="../static/images/logo-bg-removed.ico">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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

    <!-- Slider Gambar -->
    <div class="slider-container" >
        <div class="slider">
            <!-- Gambar akan dimasukkan secara dinamis oleh JavaScript -->
        </div>
        <button class="slider-button prev" onclick="prevSlide()">&#10094;</button>
        <button class="slider-button next" onclick="nextSlide()">&#10095;</button>
    </div>

    <!-- Informasi seminar/workshop yang dipilih -->
    <div class="selected-seminar">
        <h3 id="selectedSeminarTitle"></h3>
        <p id="selectedSeminarDetails"></p>
    </div>

    <!-- Form Pendaftaran -->
        <div class="register-container">
            <h2>Form Pendaftaran</h2>
            <form id="registrationForm" action="process_form.php" method="POST">
                <!-- Input hidden untuk menyimpan ID seminar -->
                <input type="hidden" name="seminar" value="<?php echo isset($_GET['seminar']) ? htmlspecialchars($_GET['seminar']) : ''; ?>">

                <!-- Nama Lengkap -->
                <label for="name">Nama Lengkap:</label>
                <input 
                    type="text" 
                    id="name" 
                    name="name" 
                    pattern="[a-zA-Z\s\.]+" 
                    title="Nama hanya boleh mengandung huruf, spasi, dan titik." 
                    required
                >

                <!-- Email -->
                <label for="email">Email:</label>
                <input 
                    type="email" 
                    id="email" 
                    name="email" 
                    pattern="([a-zA-Z0-9\.-_]+)@([a-zA-Z0-9\.-_]+)\.([a-z-_\.]+)" 
                    title="Format email tidak valid. Contoh: contoh@domain.com" 
                    required
                >

                <!-- Nomor Telepon -->
                <label for="phone">Nomor Telepon:</label>
                <input 
                    type="tel" 
                    id="phone" 
                    name="phone" 
                    pattern="[0][8][0-9]{8,11}" 
                    title="Nomor telepon harus dimulai dengan 08 dan terdiri dari 10-13 digit angka." 
                    required
                >

                <!-- Instansi/Perusahaan -->
                <label for="institution">Instansi/Perusahaan:</label>
                <input type="text" id="institution" name="institution">

                <!-- Jenis Tiket -->
                <label for="ticket">Jenis Tiket:</label>
                <select id="ticket" name="ticket" required>
                    <option value="regular">Regular</option>
                    <option value="vip">VIP</option>
                </select>

                <!-- Jika berbayar -->
                <div id="paymentSection" style="display: none;">
                    <label for="virtualAccount">Virtual Account:</label>
                    <input type="text" id="virtualAccount" name="virtualAccount" value="1234567890" readonly>
                </div>

                <button type="submit" class="btn">Daftar Sekarang</button>
            </form>

            <!-- Kotak Sukses atau Gagal -->
            <?php
            if (isset($_GET['status'])) {
                $status = $_GET['status'];
                $message = $_GET['message'];

                if ($status === 'success') {
                    echo '
                    <div id="response-box" class="alert-box success">
                        <div class="icon">
                            <i class="fas fa-check-circle"></i>
                        </div>
                        <div class="message">
                            <h3>Sukses!</h3>
                            <p>' . htmlspecialchars($message) . '</p>
                        </div>
                    </div>';
                } else {
                    echo '
                    <div id="response-box" class="alert-box error">
                        <div class="icon">
                            <i class="fas fa-times-circle"></i>
                        </div>
                        <div class="message">
                            <h3>Gagal!</h3>
                            <p>' . htmlspecialchars($message) . '</p>
                        </div>
                    </div>';
                }
            }
            ?>
        </div>

    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <!-- Bagian Kiri (Tentang Kami) -->
            <div class="footer-section about" id="tentang-kami">
                <h3>EventCademy</h3>
                <p>
                    EventCademy adalah platform terbaik untuk menemukan seminar dan workshop berkualitas. 
                    Tingkatkan skill dan pengetahuan Anda bersama kami!
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
                <p><i class="fas fa-map-marker-alt"></i> Jl. Contoh No. 123, Jakarta, Indonesia</p>
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
    <script src="../static/js/register.js"></script>
</body>
</html> 