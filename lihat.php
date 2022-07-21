<?php
    echo "<head><title>Jasa Pengiriman</title></head>";
    echo "<h1 align='center'>TABEL JAPENG</h1>";
    echo "<center>";
    echo "<a href=index.php>Isi Form Jasa Pengiriman</a><br>";
    echo "</center>>";
    $fp = fopen("jasapengiriman.txt", "r");

    echo " <table border=1 width=100%>";
    echo "<tr>
        <td>Tanggal</td>  
        <td>Nama   </td>
        <td>Jarak </td>
        <td>Alamat </td>
        <td>Tujuan </td>
        <td>Telp </td>
        <td>Jenis </td>
        <td>Berat </td>
        <td>Total </td>
    </tr>";

    while ($isi = fgets($fp,200))
    {
        $pisah = explode("|", $isi);
        echo "<tr>
            <td>$pisah[0]</td>  
            <td>$pisah[1]</td>
            <td>$pisah[2]</td>
            <td>$pisah[3]</td>
            <td>$pisah[4]</td>
            <td>$pisah[5]</td>
            <td>$pisah[6]</td>
            <td>$pisah[7]</td>
            <td>$pisah[8]</td>
        </tr>";
    }
    echo "</table>";
    echo "</center>";
?>