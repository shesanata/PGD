<?php

// Variabel kondisi
$punya_modal = true;
$promosi = false;

$stok_habis = false;
$stok_banyak = true;

$hari = "Senin"; // bisa diganti: Senin - Minggu

$jumlah_pembeli_meningkat = true;
$stok_cukup = true;

$follow = true;
$share = true;

$bayar_tunai = false;
$bayar_ewallet = true;


// 1. Satu kondisi positif
if ($punya_modal == true) {
    echo "Aku akan memulai usaha makanan.<br>";
}


// 2. Satu kondisi negatif
if ($promosi == false) {
    echo "Jualanku akan sepi.<br>";
}


// 3. Dua kondisi
if ($stok_habis == true) {
    echo "Aku harus tutup lebih awal.<br>";
}

if ($stok_banyak == true) {
    echo "Aku bisa berjualan sampai malam.<br>";
}


// 4. Lebih dari 5 kondisi (berdasarkan hari)
if ($hari == "Senin") {
    echo "Promo diskon 10%.<br>";
} elseif ($hari == "Selasa") {
    echo "Promo beli 1 gratis 1.<br>";
} elseif ($hari == "Rabu") {
    echo "Menambah varian rasa baru.<br>";
} elseif ($hari == "Kamis") {
    echo "Membuat konten promosi di media sosial.<br>";
} elseif ($hari == "Jumat") {
    echo "Potongan harga khusus pelajar.<br>";
} elseif ($hari == "Sabtu") {
    echo "Menambah stok bahan karena ramai.<br>";
} elseif ($hari == "Minggu") {
    echo "Membuka stand lebih awal.<br>";
}


// 5. Kondisi bersarang (nested if)
if ($jumlah_pembeli_meningkat == true) {
    if ($stok_cukup == true) {
        echo "Bisa melayani semua pelanggan.<br>";
    } else {
        echo "Harus restok dulu sebelum lanjut jualan.<br>";
    }
}


// 6. Menggunakan DAN (AND)
if ($follow == true && $share == true) {
    echo "Pelanggan mendapat potongan harga.<br>";
}


// 7. Menggunakan ATAU (OR)
if ($bayar_tunai == true || $bayar_ewallet == true) {
    echo "Transaksi berhasil diproses.<br>";
}

?>