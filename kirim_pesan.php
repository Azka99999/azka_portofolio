<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Simpan nama dan komentar yang diisi pengguna
    $nama = $_POST['nama'];
    $subjek = $_POST['subjek'];
    $message = $_POST['message'];


    // Membuat pesan yang akan dikirimkan via WhatsApp
    $pesan_whatsapp = "Halo Saya $nama, Subjek : $subjek, Message : $message";

    // Format nomor WhatsApp admin (ganti dengan nomor WhatsApp admin Anda)
    $nomor_admin = "6281902847149";

    // Membuat tautan WhatsApp dengan pesan yang sudah disiapkan
    $tautan_whatsapp = "https://wa.me/$nomor_admin/?text=" . urlencode($pesan_whatsapp);

    // Redirect pengguna ke tautan WhatsApp
    header("Location: $tautan_whatsapp");
    exit();
}
?>
