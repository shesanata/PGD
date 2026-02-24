<?php
// ================== VARIABEL ==================
$nama_lengkap = "Shesanata Raf Sanjani";
$nama_panggilan = "Nata";
$agama = "Islam";
$tempat_lahir = "Grobogan";
$tanggal = 16;
$bulan = "September";
$tahun = 2010;
$alamat = "Gubug, Jawa Tengah";
$gender = "Perempuan";
$kewarganegaraan = "Indonesia";
$no_wa = "081564659286";
$email = "shesaskol02@gmail.com";
$hobi = ["Menonton Film/Drakor", "Memasak"];
$skills = ["HTML" =>80, "CSS" => 69, "PHP" => 69 ];
$makanan = ["Gendar Pecel", "Mie Ayam", "Mie Goreng Aceh" , "Seblak" , "Siomay/Batagor", "Risol Mayo"];
$minuman = ["Jus Alpukat", "Air Mineral", "Es Tebu", "Es Degan"];
$motto = "Tumbuh Lebih Baik, Disela-sela Keretakan dalam Hidup";

// Perhitungan umur
$tahun_sekarang = date("Y");
$umur = $tahun_sekarang - $tahun;
$tahun_10 = $tahun_sekarang + 10;
$umur_10 = $umur + 10;
?>
<!DOCTYPE html>
<html>
<head>
<title>Biodata <?php echo $nama_panggilan; ?></title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<style>
body{font-family:Arial;background:#f4f4f4;margin:0;padding:20px}
.card{background:white;padding:20px;border-radius:15px;box-shadow:0 5px 10px rgba(0,0,0,0.1)}
img{width:150px;border-radius:50%}
.progress{background:#ddd;border-radius:20px}
.bar{height:15px;background:#4CAF50;border-radius:20px}
marquee{color:red;font-weight:bold}
table{border-collapse:collapse;width:100%}
th,td{border:1px solid #ccc;padding:8px;text-align:center}
</style>
</head>
<body>
<div class="card">
<h2><i class="fa fa-user"></i> Biodata</h2>
<style>
      h2{
        text-align: center; 
       }
     </style>

<div class="profile-wrapper">
    <div class="foto-frame">
        <img src="nata.jpg.jpeg" alt="Foto Nata" class="foto">
    </div>
 </div>

<style>

.card{
    background:#ffffff;
    padding:20px;
    border-radius:20px;
    box-shadow:0 10px 25px rgba(0,0,0,0.15);
}

.profile-wrapper{
    display:flex;
    justify-content:center; 
    align-items:flex-start;
    gap:10px;
}

.foto-frame{
    padding:6px;
    border-radius:20px;
    background: linear-gradient(13deg, #2c3e50, #c9a227);
    box-shadow:0 8px 20px rgba(0,0,0,0.25);
}

.foto{
    width:200px;
    height:200px;
    border-radius:15px;
    object-fit:cover;
    display:block;
}
</style>

<p><b>Nama Lengkap:</b> <?php echo $nama_lengkap; ?></p>
<p><b>Nama Panggilan:</b> <?php echo $nama_panggilan; ?></p>
<p><b>Umur:</b> <?php echo $umur; ?> tahun</p>
<p><b>Agama:</b> <?php echo $agama; ?></p>
<p><b>Alamat:</b> <?php echo $alamat; ?></p>

<h3>Hobi</h3>
<ol>
<?php foreach($hobi as $h){ echo "<li>$h</li>"; } ?>
</ol>

<h3>Skills</h3>
<?php foreach($skills as $skill => $nilai){ ?>
<p><?php echo $skill; ?></p>
<div class="progress">
<div class="bar" style="width:<?php echo $nilai; ?>%"></div>
</div>
<?php } ?>

<h3>Makanan Favorit</h3>
<ul type="square">
<?php foreach($makanan as $m){ echo "<li>$m</li>"; } ?>
</ul>

<h3>Minuman Favorit</h3>
<ol type="A">
<?php foreach($minuman as $d){ echo "<li>$d</li>"; } ?>
</ol>

<h3>Riwayat Pendidikan</h3>
<table>
<tr><th>Tingkat</th><th>Nama Sekolah</th><th>Tahun Mulai</th><th>Tahun Lulus</th></tr>
<tr><td>SD</td><td>SDN 1 Mlilir </td><td>2016</td><td>2022</td></tr>
<tr><td>SMP</td><td>MTS N 1 Grobogan</td><td>2022</td><td>2025</td></tr>
<tr><td>SMK</td><td>SMKN 8 Semarang</td><td>2025</td><td>2028</td></tr>
</table>

<h3>Keinginan 10 Tahun Lagi</h3>
<p>
Hai namaku <?php echo $nama_panggilan; ?>, saat ini tahun <?php echo $tahun_sekarang; ?>, 
saya adalah seorang pelajar yang berumur <?php echo $umur; ?> tahun di SMKN 8 Semarang jurusan PPLG. 
10 tahun lagi di tahun <?php echo $tahun_10; ?>, di umur <?php echo $umur_10; ?> tahun 
saya adalah seorang wanita yang memiliki karir sangat tinggi,wanita yang berwibawa & wanita yg menginspirasi semua orang
 khususnya pada wanita diluar sana ,saling mendukung satu sama lain (women support women)
dan pastinya saya ingin membahagiakan keluargaku 
dan memiliki perusahaan sendiri. Rencana yang akan saya tempuh adalah 
belajar sungguh" kemajuan saat ini khususnya dibidang IT agar saya tidak ketinggalan dengan perkembangan yang cepat.
</p>

<marquee><?php echo $motto; ?></marquee>

<br><br>
<a href="jadwal.php"><i class="fa fa-calendar"></i> Lihat Jadwal</a>
</div>

</body>
</html>

