
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="script.js"></script>
        <title>Form Pemesanan</title>
    </head>
    <body style="background-color: burlywood; padding: 20px;">
        <table style="padding: 10px; justify-content: center; background-color: chocolate;">
            <tr >
                <td> Home </td>
            </tr>
        </table>
        <table style="justify-content: center; padding: 20px;">
            <tr>
                <td> <img src="museum.jpg" style="width: 100px; height: 80px;"> </td>
                <td> <img src="alun.jpg" style="width: 100px; height: 70px;"> </td>
                <td> <img src="simpang.jpg" style="width: 100px; height: 70px;"> </td>
            </tr>
            <tr>
                <td> Museum R. H. Wardoyo </td>
                <td> Alun Alun Boyolali </td>
                <td> Simpang Lima </td>
            </tr>
        </table>
        <h2> Form Pemesanan </h2>
        <form action="function.php" method="POST">
        <table style="padding-bottom: 10px;">
            <tr>
                <td> <strong> Nama : </strong> </td>
                <td> <input type="text" name="nama"></td>
            </tr>
            <tr>
                <td> <strong> No Identitas : </strong> </td>
                <td> <input type="number" name="ID"></td>
            </tr>
            <tr>
                <td> <strong> No. HP : </strong> </td>
                <td> <input type="text" name="no_HP"></td>
            </tr>
            <tr>
                <td> <strong> Tempat Wisata : </strong> </td>
                <td> 
                    <select name="tempat" id="tempat">
                        <option>-- Pilih Destinasi--</option>
                        <option value="Museum R. Hamong Wardoyo">Museum R. Hamong Wardoyo</option>
                        <option value="Simpang Lima">Simpang Lima</option>
                        <option value="Alun Alun Kaupaten">Alun Alun Kabupaten</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td> <strong> Tanggal Kunjungan : </strong> </td>
                <td> <input type="date" name="tgl_kunjungan"></td>
            </tr>
            <tr>
                <td> <strong> Pengunjung Dewasa : </strong> </td>
                <td> <input type="number" name="jml_dewasa" id="dewasa"></td>
            </tr>
            <tr>
                <td> <strong> Pengunjung Anak - Anak : </strong> </td>
                <td> <input type="number" name="jml_anak" id="anak"></td>
            </tr>
            <tr>
                <td> <strong> Harga Tiket : </strong> </td>
                <td> <strong> Rp10.000</strong> </td>
            </tr>
            <tr>
                <td> <strong> Total Bayar : </strong> </td>
                <td> <label for="total_harga" id="total_harga" name="total_harga"></label> </td>
            </tr>
        </table>
        <input type="button" value="Hitung Total Bayar" onclick="hitung()">
        <input type="submit" value="Pesan">
        <input type="button" value="Cancel">
        </form>  
    </body>
</html>