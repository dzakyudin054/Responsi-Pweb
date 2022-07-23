<?php 

$nama       = $_POST['nama'];
$email      = $_POST['email'];
$alamat     = $_POST['alamat'];
$status     = $_POST['status'];
$komentar   = $_POST['komentar'];

echo "<head><title>My Guest Book</title></head>";
$fp = fopen("data.txt", "a+");
fputs($fp, "$nama|$alamat|$email|$status|$komentar\n");
fclose($fp);
echo '<p style="text-align:center;color:darkcyan;font-size:50px;font-family:calibri ;">Terima Kasih Telah Mengisi Buku Tamu :)</p>';
echo "<div style=\"text-align:center;\">";
echo "<a href=index.php>kembali ke menu utama</a><br><br>";
echo "<a href='lihat.php'>lihat buku tamu</a><br>";
echo "</div>";

 ?>
