<?php
// Ambil data dari form
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$institution = $_POST['institution'];
$ticket = $_POST['ticket'];
$seminarId = $_POST['seminar']; // Ambil ID seminar dari form

// Validasi data
$errors = [];

// Validasi nama
if (empty($name)) {
    $errors[] = "Nama lengkap harus diisi.";
}

// Validasi email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Email tidak valid.";
}

// Validasi nomor telepon
if (!preg_match("/^\d{10,12}$/", $phone)) {
    $errors[] = "Nomor telepon harus terdiri dari 10-12 digit angka.";
}

// Validasi tiket
if (empty($ticket)) {
    $errors[] = "Jenis tiket harus dipilih.";
}

// Jika ada error, kembalikan ke halaman register dengan pesan error dan seminar ID
if (!empty($errors)) {
    $errorMessage = implode("<br>", $errors);
    header("Location: register.php?seminar=" . urlencode($seminarId) . "&status=error&message=" . urlencode($errorMessage));
    exit();
}

// Jika tidak ada error, tampilkan pesan sukses dan seminar ID
$successMessage = "Pendaftaran berhasil! Terima kasih telah mendaftar.";
header("Location: register.php?seminar=" . urlencode($seminarId) . "&status=success&message=" . urlencode($successMessage));
exit();
?>