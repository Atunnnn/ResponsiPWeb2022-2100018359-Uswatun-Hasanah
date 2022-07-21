<html>
<head>
<title>Jasa Pengiriman</title>
<body style="background: #000000; color: white;">
<script type="text/javascript">
    function hitungtotal(){
                var jarak = document.input.ijapeng.value;
                var total = jarak * 5000;
            
                // gunakan untuk mengecek !!! 
                alert ("Hasilnya adalah : " + total);
                }
</script>
</head>
<body>
    <b>
    <header style="text-align: center;">
        <div class="jasa pengiriman" id="Jasa Pengiriman">
            <br>
            <h1>Jasa Pengiriman</h1>
    </b>
    <form name="input"  method="POST" action="proses.php">
        <table border="0" bgcolor=#f3971b width="50%" cellpadding="5" cellspacing="0" align="center">
            <tr>
                <td>Nama Pengirim</td><td> : </td>
                <td> <input type="text" name="inapeng" size="30"/> </td>
            </tr>
            <tr>
                <td>Nama Penerima</td><td> : </td>
                <td> <input type="text" name="inapen" size="30"/> </td>
            </tr>
            <tr>
                <td>Jarak Pengiriman(Km)</td><td> : </td>
                <td> <input type="text" name="ijapeng" size="30"/> </td>
            </tr>
            <tr>
                <td>Alamat</td><td> : </td>
                <td> <input type="text" name="ialamat" size="30"/> </td>
            </tr>
            <tr>
                <td>Tujuan</td><td> : </td>
                <td> <input type="text" name="itujuan" size="30"/> </td>
            </tr>
            <tr>
                <td>Telp</td><td> : </td>
                <td> <input type="text" name="itelp" size="30"/> </td>
            </tr>
            <tr>
                <td>Jenis Barang</td><td> : </td>
                <td> <input type="text" name="ijebar" size="30/"> </td>
            </tr>
            <tr>
                <td>Berat Barang(Kg)</td><td> : </td>
                <td> <input type="text" name="ibebar" size="30/"> </td>
                </td>
            </tr>
            <tr>
                <td colspan="3" align="right">
                    <input type="button" value="Hitung" onclick="hitungtotal()">
            <input type="reset" value="Ulang">
                </td>
            </table>
        </form>
    </header>
</div>
<div align="center">
    <strong>
        <a href="lihatt.php">::Lihat Jasa Pengiriman::</a>
    </strong>
</div>
<table align="center" border="0" bgcolor="black" cellpadding="5"cellspacing="0" width="100%">
                            <td width="25%" valign="top">
                                <table border="0" width="100%" cellpadding="15" cellspacing="0" align="center">
                                    <tr>
                                        <td align="center" valign="top">
                                            <font color="#f3971b" size="6">
                                                <img src="Email.jpg" width="100" height="100">
                                            </font>
                                            <br>
                                            <br>
                                            <font color="#f3971b" size="5" face="arial">
                                                Email
                                            </font>
                                            <p>
                                                <font color="#c2c0c3" size="3" face="arial">
                                                    uswtnhsnh16@gmail.com
                                                </font>
                                            </p>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            <td width="25%" valign="top">
                                <table border="0" width="100%" cellpadding="15" cellspacing="0" align="center">
                                    <tr>
                                        <td align="center" valign="top">
                                            <font color="#f3971b" size="6">
                                                <img src="Ig.jpg" width="100" height="100">
                                            </font>
                                            <br>
                                            <br>
                                            <font color="#f3971b" size="5" face="arial">
                                                Instagram
                                            </font>
                                            <p>
                                                <font color="#c2c0c3" size="3" face="arial">
                                                    _uhsnh
                                                </font>
                                            </p>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            <td width="25%" valign="top">
                                <table border="0" width="100%" cellpadding="15" cellspacing="0" align="center">
                                    <tr>
                                        <td align="center" valign="top">
                                            <font color="#f3971b" size="6">
                                                <img src="Location.png" width="100" height="100">
                                            </font>
                                            <br>
                                            <br>
                                            <font color="#f3971b" size="5" face="arial">
                                                Location
                                            </font>
                                            <p>
                                                <font color="#c2c0c3" size="3" face="arial">
                                                    Labuan Bajo, Manggarai Barat, NTT
                                                </font>
                                            </p>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                    </table>           
</form>
<hr>
    <footer style="text-align: center;">
        <p>Copyright &copy; Uswatun Hasanah | NIM 2100018359</p>
    </footer> 
</body>
</html>