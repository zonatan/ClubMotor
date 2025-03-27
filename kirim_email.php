<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = htmlspecialchars($_POST['nama']);
    $email = htmlspecialchars($_POST['email']);
    $pesan = htmlspecialchars($_POST['pesan']);
    
    $to = "rustrumper@gmail.com"; // Email tujuan
    $subject = "Pesan dari $nama";
    $message = "Nama: $nama\nEmail: $email\n\nPesan:\n$pesan";
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "<script>alert('Pesan Anda telah terkirim. Terima kasih!'); window.location.href='index.html';</script>";
    } else {
        echo "<script>alert('Pengiriman pesan gagal. Silakan coba lagi.'); window.history.back();</script>";
    }
}
?>
