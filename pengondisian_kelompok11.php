<?php

// Variabel kondisi
$makan_telur = true;
$minum_susu = true;
$minum_alkohol = false;
$makan_daging = true;
$makan_kacang = true;
$makan_ikan = true;
$olahraga = true;
$menjaga_pola_makan = true;
$makan_telur_rutin = true;
$sumber_protein_lain = false;


// 1. Hanya satu kondisi positif
if ($makan_telur == true) {
    echo "Protein di dalam tubuh saya akan cukup.<br>";
}


// 2. Hanya satu kondisi negatif
if ($minum_alkohol == true) {
    echo "Asupan protein dalam tubuh saya akan berkurang.<br>";
}


// 3. Dua kondisi
if ($makan_telur == true && $minum_susu == true) {
    echo "Kebutuhan protein tubuh saya akan terpenuhi.<br>";
}


// 4. Lebih dari 5 kondisi
if ($makan_telur == true && $minum_susu == true && $makan_daging == true && $makan_kacang == true && $makan_ikan == true && $olahraga == true) {
    echo "Tubuh saya akan sehat dan kebutuhan protein terpenuhi dengan optimal.<br>";
}


// 5. Kondisi bersarang (nested if)
if ($menjaga_pola_makan == true) {
    if ($makan_telur_rutin == true) {
        if ($minum_alkohol == false) {
            echo "Protein dalam tubuh saya tetap tercukupi dan terjaga dengan baik.<br>";
        }
    }
}


// 6. Menggunakan syarat DAN
if ($makan_telur == true && $minum_alkohol == false) {
    echo "Kadar protein dalam tubuh saya akan tetap stabil.<br>";
}


// 7. Menggunakan syarat ATAU
if ($makan_telur == true || $sumber_protein_lain == true) {
    echo "Kebutuhan protein tubuh saya akan tetap terpenuhi.<br>";
}

?>