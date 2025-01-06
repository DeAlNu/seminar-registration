// Ambil parameter URL
const urlParams = new URLSearchParams(window.location.search);
const seminarId = urlParams.get("seminar");

// Ambil elemen navbar
const navbar = document.querySelector("header");

// Jika elemen navbar tidak ditemukan, beri pesan error
if (!navbar) {
  console.error("Elemen header tidak ditemukan!");
} else {
  // Tambahkan event listener untuk scroll
  window.addEventListener("scroll", function () {
    if (window.scrollY > 50) {
      // Jika scroll lebih dari 50px
      navbar.classList.add("scrolled");
    } else {
      // Jika scroll kembali ke atas
      navbar.classList.remove("scrolled");
    }
  });
}

// Data seminar (contoh)
const seminars = {
  1: {
    title: "Seminar Teknologi 2023",
    date: "25 Oktober 2023, 10:00 WIB",
    price: "Rp 150.000",
    description:
      "Seminar ini membahas tren teknologi terbaru seperti AI, IoT, dan blockchain.",
    pemateri: "Dr. John Doe (Ahli Teknologi)",
    kuota: "50",
  },
  2: {
    title: "Workshop Kreativitas",
    date: "30 Oktober 2023, 13:00 WIB",
    price: "Free",
    description:
      "Workshop ini mengajarkan teknik kreativitas untuk meningkatkan produktivitas dan inovasi.",
    pemateri: "Jane Smith (Konsultan Kreativitas)",
    kuota: "30",
  },
  3: {
    title: "Seminar Digital Marketing",
    date: "5 November 2023, 09:00 WIB",
    price: "Rp 200.000",
    description:
      "Pelajari strategi digital marketing terbaru untuk meningkatkan penjualan dan engagement bisnis Anda.",
    pemateri: "Michael Lee (Digital Marketing Expert)",
    kuota: "40",
  },
  4: {
    title: "Workshop Public Speaking",
    date: "12 November 2023, 14:00 WIB",
    price: "Rp 175.000",
    description:
      "Workshop ini dirancang untuk meningkatkan kemampuan public speaking dan kepercayaan diri Anda.",
    pemateri: "Sarah Johnson (Public Speaking Coach)",
    kuota: "25",
  },
  5: {
    title: "Seminar Keuangan Pribadi",
    date: "19 November 2023, 11:00 WIB",
    price: "Rp 100.000",
    description:
      "Pelajari cara mengelola keuangan pribadi dengan bijak dan merencanakan masa depan finansial yang aman.",
    pemateri: "Robert Brown (Financial Planner)",
    kuota: "60",
  },
  6: {
    title: "Workshop Desain Grafis",
    date: "26 November 2023, 10:00 WIB",
    price: "Rp 250.000",
    description:
      "Workshop ini mengajarkan dasar-dasar desain grafis menggunakan tools populer seperti Adobe Photoshop dan Illustrator.",
    pemateri: "Emily Davis (Desainer Grafis Profesional)",
    kuota: "20",
  },
  7: {
    title: "Seminar Kesehatan Mental",
    date: "3 Desember 2023, 13:00 WIB",
    price: "Free",
    description:
      "Seminar ini membahas pentingnya kesehatan mental dan cara mengelola stres dalam kehidupan sehari-hari.",
    pemateri: "Dr. Lisa Green (Psikolog Klinis)",
    kuota: "100",
  },
};

// Tampilkan informasi seminar yang dipilih
if (seminarId && seminars[seminarId]) {
  const seminar = seminars[seminarId];
  document.getElementById("selectedSeminarTitle").textContent = seminar.title;
  document.getElementById("selectedSeminarDetails").innerHTML = `
        <p><strong>Tanggal:</strong> ${seminar.date}</p>
        <p><strong>Harga:</strong> ${seminar.price}</p>
        <p><strong>Deskripsi:</strong> ${seminar.description}</p>
        <p><strong>Pemateri:</strong> ${seminar.pemateri}</p>
        <p><strong>Kuota tersedia:</strong> ${seminar.kuota}</p>
    `;
} else {
  document.getElementById("selectedSeminarTitle").textContent =
    "Seminar tidak ditemukan.";
  document.getElementById("selectedSeminarDetails").textContent =
    "Silakan kembali ke halaman utama untuk memilih seminar.";
}

// Data gambar untuk setiap seminar
const seminarImages = {
  1: ["1a.jpeg", "2a.jpeg"], // Gambar untuk seminar 1
  2: ["1b.jpeg", "2b.jpeg"], // Gambar untuk seminar 2
  3: ["1c.jpeg", "2c.jpeg"], // Gambar untuk seminar 3
  4: ["1d.jpeg", "2d.jpeg"], // Gambar untuk seminar 4
  5: ["1e.jpeg", "2e.jpeg"], // Gambar untuk seminar 5
  6: ["1f.jpeg", "2f.jpeg"], // Gambar untuk seminar 6
  7: ["1g.jpeg", "2g.jpeg"], // Gambar untuk seminar 7
};

// Tampilkan slider gambar sesuai seminar yang dipilih
if (seminarId && seminarImages[seminarId]) {
  const slider = document.querySelector(".slider");
  seminarImages[seminarId].forEach((image, index) => {
    const imgElement = document.createElement("img");
    imgElement.src = `../static/images/seminars/${image}`; // Sesuaikan path gambar
    imgElement.alt = `Slide ${index + 1}`;
    if (index === 0) imgElement.classList.add("active"); // Tampilkan gambar pertama
    slider.appendChild(imgElement);
  });
}

// Fungsi untuk navigasi slider
let currentSlide = 0;

function showSlide(index) {
  const slides = document.querySelectorAll(".slider img");
  if (index >= slides.length) currentSlide = 0;
  if (index < 0) currentSlide = slides.length - 1;

  // Sembunyikan semua gambar
  slides.forEach((slide) => slide.classList.remove("active"));

  // Tampilkan gambar yang aktif
  slides[currentSlide].classList.add("active");
}

function nextSlide() {
  currentSlide++;
  showSlide(currentSlide);
}

function prevSlide() {
  currentSlide--;
  showSlide(currentSlide);
}

// Otomatis ganti slide setiap 5 detik
setInterval(nextSlide, 5000);

// Fungsi untuk menampilkan pesan
function showMessage(message, isSuccess) {
  const messageDiv = document.getElementById("message");
  messageDiv.textContent = message;
  messageDiv.style.display = "block";

  // Hapus class sebelumnya
  messageDiv.classList.remove("success", "error");

  // Tambahkan class sesuai jenis pesan
  if (isSuccess) {
    messageDiv.classList.add("success");
  } else {
    messageDiv.classList.add("error");
  }
}

// Fungsi untuk scroll ke kotak respons dan tambahkan efek highlight
function showResponse() {
  const responseBox = document.getElementById("response-box");
  if (responseBox) {
    // Scroll ke kotak respons
    responseBox.scrollIntoView({ behavior: "smooth", block: "center" });

    // Tambahkan efek highlight
    responseBox.style.animation = "highlight 1.5s ease-in-out";

    // Hapus animasi setelah selesai
    setTimeout(() => {
      responseBox.style.animation = "";
    }, 1500);
  }
}

// Jalankan fungsi saat halaman selesai dimuat
window.onload = showResponse;
