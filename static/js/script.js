// Fungsi untuk menampilkan popup
function showPopup(id) {
  document.getElementById(`popup${id}`).style.display = "block";
}

// Fungsi untuk menyembunyikan popup
function hidePopup(id) {
  document.getElementById(`popup${id}`).style.display = "none";
}

// Ambil elemen navbar
const navbar = document.querySelector("header");

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

// Ambil semua tombol "Daftar Sekarang" dengan class "daftarButton"
const daftarButtons = document.querySelectorAll(".daftarButton");

// Tambahkan event listener untuk setiap tombol
daftarButtons.forEach(function(button) {
    button.addEventListener("click", function(event) {
        // Mencegah perilaku default (misalnya, mengikuti link)
        event.preventDefault();

        // Tambahkan class "clicked" untuk memicu animasi
        button.classList.add("clicked");

        // Setelah animasi selesai, lakukan aksi selanjutnya
        setTimeout(() => {
            // Ambil URL dari atribut href tombol
            const targetUrl = button.getAttribute("href");

            // Pindah ke halaman yang sesuai
            window.location.href = targetUrl;
        }, 500); // Sesuaikan waktu dengan durasi animasi (0.5 detik)
    });
});

// Fungsi untuk menampilkan lebih banyak card
document.getElementById("loadMore").addEventListener("click", function () {
  const hiddenCards = document.querySelectorAll(".card.hidden");
  const cardsToShow = 5; // Jumlah card yang ditampilkan per klik

  // Tampilkan card yang tersembunyi
  for (let i = 0; i < cardsToShow && i < hiddenCards.length; i++) {
    hiddenCards[i].classList.remove("hidden");
  }

  // Sembunyikan tombol jika tidak ada card tersembunyi lagi
  if (document.querySelectorAll(".card.hidden").length === 0) {
    this.style.display = "none";
  }
});
