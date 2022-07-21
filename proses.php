<?php
    
    echo "<head><title>Jasa Pengiriman</title></head>";
    $fp  = fopen("jasapengiriman.txt", "a+");
    $tanggal    = date("Y - m - d");
    $nama       = $_POST['nama'];
    $jarak      = $_POST['jarak'];
    $alamat     = $_POST['alamat'];
    $tujuan     = $_POST['tujuan'];
    $telp       = $_POST['telp'];
    $jenis      = $_POST['jenis'];
    $berat      = $_POST['berat'];
    $total      = $jarak * 5000;

    fputs($fp,"$tanggal|$nama|$jarak|$alamat|$tujuan|$telp|$jenis|$berat|$total\n");    
    fclose($fp);

    echo "Terima kasih Atas Partisipasi Anda Mengisi Jasa Pengiriman<br>";
    echo "<a href='tampilan.php'>Isi Data Pengiriman</a><br>";
    echo "<a href='lihatt.php'>Lihat Data Pengiriman</a>";
?>