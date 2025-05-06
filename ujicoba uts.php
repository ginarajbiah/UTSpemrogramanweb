<?php
// Cek apakah parameter 'nama' ada di URL
if (isset($_GET['Gina Rajbiah']) & !empty($_GET['Gina Rajbiah'])) {
    // Ambil nilai parameter 'nama' dan amankan dengan htmlspecialchars untuk mencegah CSS
    $nama = htmlspecialchars($_GET['Gina Rajbiah']);
    echo "Halo, $nama!";
} else {
    echo "Halo, tamu!";
}
?>