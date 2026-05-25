<?php 
  require_once "koneksi.php";   
  
  $act = isset($_GET['act']) ? $_GET['act'] : '';
  
  if($act == "tambah") {
    $sql = "INSERT INTO tb_mahasiswa 
            (nim, nama, tempat_lahir, tanggal_lahir, fakultas, jurusan, ipk) 
            VALUES 
            ('$_POST[NIM]', '$_POST[Nama]', '$_POST[Tempat_Lahir]', 
             '$_POST[Tanggal_Lahir]', '$_POST[Fakultas]', '$_POST[Jurusan]', '$_POST[IPK]')"; 
    
    // Pakai $con (sesuai koneksi.php)
    mysqli_query($con, $sql); 
  } 

  if($act == "update") {
    $sql = "UPDATE tb_mahasiswa SET                                     
            nama          = '$_POST[Nama]',
            tempat_lahir  = '$_POST[Tempat_Lahir]',
            tanggal_lahir = '$_POST[Tanggal_Lahir]',
            fakultas      = '$_POST[Fakultas]',
            jurusan       = '$_POST[Jurusan]',
            ipk           = '$_POST[IPK]'                     
            WHERE nim     = '$_POST[NIM]'"; 
                
    mysqli_query($con, $sql);
  }

  if($act == "hapus") {
    $nim = $_GET['id']; 
    // KOREKSI DI SINI: Ganti $conn menjadi $con
    $sql = "DELETE FROM tb_mahasiswa WHERE nim = '$nim'";
    mysqli_query($con, $sql); 
  }

  // Tutup koneksi pakai $con
  mysqli_close($con);

  header('location:tampil_data_mahasiswa3.php'); 
?>