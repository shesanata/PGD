<?php
$nama = "Nata"; // Nama untuk highlight piket
?>

<!DOCTYPE html>
<html>
<head>
<title>Jadwal X PPLG 2</title>
<style>
body{
    font-family: Arial;
    background: #f0f8ff;
    padding: 20px;
}
h2{
    text-align:center;
}
table{
    border-collapse: collapse;
    width: 100%;
    margin-bottom: 30px;
}
th, td{
    border:1px solid #333;
    padding:8px;
    text-align:center;
}
th{
    background:#4CAF50;
    color:white;
}
.highlight{
    background: yellow;
    font-weight: bold;
}
.btn{
    padding:10px 15px;
    background:#4CAF50;
    color:white;
    text-decoration:none;
    border-radius:8px;
}
</style>
</head>
<body>

<h2>📚 Jadwal Pelajaran X PPLG 2</h2>

<table>
<tr>
<th>Jam</th>
<th>Waktu</th>
<th>Senin</th>
<th>Selasa</th>
<th>Rabu</th>
<th>Kamis</th>
<th>Jumat</th>
</tr>

<tr><td>1</td><td>07:00-07:45</td><td>MTK</td><td>IPAS</td><td>PGD(Bu Imanita)</td><td>POR</td><td>INF</td>
<tr><td>2</td><td>07:45-08:30</td><td>MTK</td><td>IPAS</td><td>PGD(Bu Imanita)</td><td>POR</td><td>INF</td>
<tr><td>3</td><td>08:30-09:15</td><td>SJR</td><td>IPAS</td><td>PGD(Bu Imanita)</td><td>POR</td><td>KKA</td>
<tr><td>4</td><td>09:30-10:15</td><td>PABP</td><td>IPAS</td><td>PGD(BU Imanita)</td><td>SJR</td><td>KKA</td>
<tr><td>5</td><td>10:15-11:00</td><td>PABP</td><td>PPS</td><td>PGD(Pak Agung)</td><td>BING</td><td>KKA</td>
<tr><td>6</td><td>11:00-11:45</td><td>PABP</td><td>PPS</td><td>PGD(Pak Agung)</td><td>BING</td><td>IPAS</td>
<tr><td>7</td><td>12:30-13:15</td><td>BING</td><td>BJW</td><td>GIM</td><td>MTK</td><td>IPAS</td></td></td>
<tr><td>8</td><td>13:15-14:00</td><td>BING</td><td>BJW</td><td>GIM</td><td>MTK</td><td>PGD</td></td></td>
<tr><td>9</td><td>14:00-14:45</td><td>BIN</td><td>SNM</td><td>GIM</td><td>BIN</td><td>PGD</td></td></td>
<tr><td>10</td><td>14:45-15:30</td><td>BIN</td><td>SNM</td><td>GIM</td><td>BIN</td><td>-</td></tr>

</table>

<hr>

<h2>🧹 Jadwal Piket Kelas</h2>

<table>
<tr><th>Hari</th><th>Nama Siswa</th></tr>

<tr><td>Senin</td>
<td>
Cindy, 
<span class="<?php echo ($nama=="Nata") ? 'highlight':''; ?>">Nata</span>, 
Tsabita, Naila, Kartika, Rasya, Yusuf, Habibi
</td></tr>

<tr><td>Selasa</td>
<td>Keisha, Shafanira, Aurora, Sila, Syauqi, Nail, Wahyu</td></tr>

<tr><td>Rabu</td>
<td>Anin, Shifa, Tania, Fasya, Eka, Dzaky, Vino</td></tr>

<tr><td>Kamis</td>
<td>Aida, Maharani, Alya, Denia, Ravid, Ibnu, Tegar</td></tr>

<tr><td>Jumat</td>
<td>Aqila, Alais, Gendhis, Cloudya, Aziz, Raka, Rahyan</td></tr>

</table>

<br>
<a href="./biodata.php" class="btn">⬅ Kembali ke Biodata</a>

</body>
</html>