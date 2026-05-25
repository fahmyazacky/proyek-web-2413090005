<?php
  require_once "koneksi.php";
  
  // Ambil NIM dari URL (biasanya dikirim lewat link edit di DaftarMahasiswa.php)
  $cari = $_GET['id'];
  
  // Query ambil data berdasarkan NIM
  $sql = "SELECT * FROM tb_mahasiswa WHERE NIM = '$cari'";
  $result = mysqli_query($con, $sql);
  
  // Mengambil data sebagai array indeks (0, 1, 2, dst)
  $data = mysqli_fetch_row($result);
  
  // Urutan kolom di database kita: 
  // 0:nim, 1:nama, 2:tempat_lahir, 3:tanggal_lahir, 4:fakultas, 5:jurusan, 6:ipk
?> 

<html>  
<head>         
    <title>Update Data Mahasiswa</title>
</head>
<body>
    <h1>Update Data Mahasiswa</h1>
    <form action="ctrl_mahasiswa.php?act=update" method="POST"> 
        <table border="0">
            <!-- Hidden input untuk mengirim NIM ke proses update -->
            <input type="hidden" name="NIM" value="<?php echo $data[0]; ?>">

            <tr> 
                <td> NIM </td> 
                <td> : <input type="text" value="<?php echo $data[0]; ?>" disabled> </td>
            </tr>
            <tr> 
                <td> Nama </td> 
                <td> : <input type="text" name="Nama" value="<?php echo $data[1]; ?>"> </td>
            </tr>
            <tr> 
                <td> Tempat Lahir </td> 
                <td> : <input type="text" name="Tempat_Lahir" value="<?php echo $data[2]; ?>"> </td>
            </tr>
            <tr> 
                <td> Tanggal Lahir </td> 
                <td> : <input type="date" name="Tanggal_Lahir" value="<?php echo $data[3]; ?>"> </td>
            </tr>
            <tr> 
                <td> Fakultas </td> 
                <td> : <input type="text" name="Fakultas" value="<?php echo $data[4]; ?>"> </td>
            </tr>
            <tr> 
                <td> Jurusan </td> 
                <td> : <input type="text" name="Jurusan" value="<?php echo $data[5]; ?>"> </td>
            </tr>
            <tr> 
                <td> IPK </td> 
                <td> : <input type="number" name="IPK" step="0.01" value="<?php echo $data[6]; ?>"> </td>
            </tr>
            <tr> 
                <td colspan="2"> 
                    <input type="submit" value="Save">   
                    <input type="button" value="Back" onclick="window.history.back()"> 
                </td>
            </tr>
        </table>            
    </form>
</body>
</html>