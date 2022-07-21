<?php
    
    echo "<head><title>Jasa Pengiriman</title></head>";
    $fp  = fopen("jasapengiriman.txt", "a+");
    $tgl = date("Y - m - d");
    $name = $_POST['nama'];
    $jarak = (float)$_POST['jarak'];
    $alamat = $_POST['alamat'];
    $tujuan = $_POST['tujuan'];
    $telp = $_POST['telp'];
    $jenis = $_POST['jenis'];
    $berat = $_POST['berat'];

    $total = $jarak * 5000;

    fputs($fp,"$tgl|$name|$jarak|$alamat|$tujuan|$telp|$jenis|$berat|$total\n");    
    fclose($fp);

    echo "Terima kasih Telah Menggunakan Layanan Kami<br>";
    echo "<a href='index.php'>Isi Data Pengiriman</a><br>";
    echo "<a href='lihat.php'>Lihat Data Pengiriman</a>";
?>