<?php
    echo "<head><title>Jasa Pengiriman</title></head>";
    $fp = fopen("jasapengiriman.txt", "r");  

    echo "<table border=0>";

    while ($isi = fgets($fp, 80))
    {
        $pisah = explode("|", $isi);
        echo "<tr> 
            <td>Nama   </td><td>$pisah[1]</td>
            <td>Jarak </td><td>$pisah[2]</td>
            <td>Alamat </td><td>$pisah[3]</td>
            <td>Tujuan </td><td>$pisah[4]</td>
            <td>Telp </td><td>$pisah[5]</td>
            <td>Jenis </td><td>$pisah[6]</td>
            <td>Berat </td><td>$pisah[7]</td>
            <td>Total </td><td>$pisah[8]</td>
        </tr>";
    }
    
   echo "</table>";
   echo "<a href=lihat.php>Klik Disini </a>Isi Form Jasa Pengiriman";       
?>