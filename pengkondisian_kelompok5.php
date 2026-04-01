<?php
echo "<pre>";

echo "1. Jika aku punya modal usaha,maka aku akan memulai usaha makanan .\n";
$punya_modal = true;
echo "output: ";
if ($punya_modal){
    echo "aku bisa memulai usaha.\n";
} else {
    echo "tidak bisa memulai usaha.\n";
}

echo "\n2. Jika aku tidak promosi produk makananku,maka jualanku sepi.\n";
$promosi_makanan = false;
echo "output: ";
if ($promosi_makanan){
    echo "jualanku terjual.\n";
} else {
    echo "jualanku sepi.\n";
}

echo "\n3. Jika stok bahan habis, maka aku harus tutup lebih awal. Jika stok bahan masih banyak,maka aku bisa berjualan sampai malam.\n";
$stok_bahan_habis = true;
$stok_bahan_masih_banyak = true;
echo "output: \n";
if ($stok_bahan_habis){
    echo "tutup lebih awal.\n";
    if ($stok_bahan_masih_banyak)
        echo "berjualan sampai malam.\n";
} else {
    echo "tutup lebih awal.\n";
}

echo "\n4. usaha (7 kondisi).\n";
$senin_diskon = true;
$selasa_buy1_get1 = true;
$rabu_varian_baru = true;
$kamis_media_sosial = true;
$jumat_potongan_harga = true;
$sabtu_stok_bahan = true;
$minggu_membuka_stand = true;

echo "Output: ";
if ($senin_diskon) {
    echo "aku membuka promosi 10%.\n";
} else if ($selasa_buy1_get1) {
    echo "membuat promo beli 1 gratis 1 untuk makanan ringan.\n";
} else if ($rabu_varian_baru) {
    echo "aku menambah varian baru.\n";
} else if ($kamis_media_sosial) {
    echo "membuat konten dimedai sosial.\n";
} else if ($jumat_potongan_harga) {
    echo "memberikan potongan harga khusus pelajar.\n";
} else if ($sabtu_stok_bahan) {
    echo "menambah stok bahan karena biasanya ramai pembeli.\n";
} else if ($minggu_membuka_stand) {
    echo "membuka stand lebih awal karena banyak orang libur.\n";
} else {
    echo "tidak ada kondisi yang terjadi.\n";
}

echo "\n5. Jika jumlah pembeli meningkat,maka jika stok bahan cukup , kamu bisa melayani semua pelanggan. Jika stok habis, maka harus restok dulu sebelum lanjut jualan.\n";
$jumlah_pembeli_meningkat = true;
$stok_habis = true;
echo "Output: ";
if ($jumlah_pembeli_meningkat) {
    echo "stok bahan cukup.\n";
    if ($stok_habis) {
        echo "restok terlebih dahulu.\n";
    }
}

 echo "\n6. Jika pelanggan follow akun usahamu dan share postingan promo, maka pelanggan mendapat potongan harga.\n";
$follow_akun_usahamu = true;
$share_postingan_promo = true;
echo "output: ";
if ($follow_akun_usahamu && $share_postingan_promo) { 
   echo "pelanggan mendapat potongan harga.\n";
} else {
    echo "tidak mendapat potongan harga.\n";
}

echo "\n7. jika pelanggan bayar tunai atau pakai e-wallet, maka transaksi tetap bisa diproses.\n";
$tidak_tunai = true;
$tidak_wallet = true;
echo "output: ";
if ($tidak_tunai || $tidak_wallet) {
    echo "transaksi tetap bisa diproses.\n";
} else {
    echo "transaksi tetap bisa diproses.\n";
}

// echo "</pre>";

?>    