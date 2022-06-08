<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "daftar pesanan";
    
    $conn = mysqli_connect($servername, $username, $password, $database);
    if (!$conn) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }
    // echo "Berhasil;"
    
    $nama = $_REQUEST['nama'];
    $noID = $_REQUEST['ID'];
    $no_HP = $_REQUEST['no_HP'];
    $tempat = $_REQUEST['tempat'];
    $tgl_kunjungan = $_REQUEST['tgl_kunjungan'];
    $jml_dewasa = $_REQUEST['jml_dewasa'];
    $jml_anak = $_REQUEST['jml_anak'];
    $harga = 10000;

    $query ="INSERT INTO pesanan VALUES ('$nama', '$noID', '$no_HP', '$tempat', '$tgl_kunjungan', '$jml_dewasa', '$jml_anak', '$harga')";
    // if (mysqli_query($conn, $query)) {      
    //     echo "Berhasil";
    // } 

    $data = mysqli_query($conn, "select * from pesanan");
    foreach ($data as $value){
        echo "
        <table>
            <tr>
                <td> Nama Pemesan :  </td>
                <td>".$value['nama']." </td>
            </tr>
            <tr>
                <td> Nomor Identitas :  </td>
                <td>".$value['noID']." </td>
            </tr>
            <tr>
                <td> No HP :  </td>
                <td>".$value['no_HP']." </td>
            </tr>
            <tr>
                <td> Tempat Wisata :  </td>
                <td>".$value['nama_tempat']." </td>
            </tr>
            <tr>
                <td> Tanggal Kunjungan :  </td>
                <td>".$value['tgl_kunjungan']." </td>
            </tr>
            <tr>
                <td> Pengunjung Dewasa :  </td>
                <td>".$value['jml_dewasa']." </td>
            </tr>
            <tr>
                <td> Pengunjung Anak - Anak :  </td>
                <td>".$value['jml_anak']." </td>
            </tr>
            <tr>
                <td> Harga Tiket :  </td>
                <td>".$value['hrg_tiket']." </td>
            </tr>
        </table>
        ";
    }

    // mysqli_close($conn);
?>