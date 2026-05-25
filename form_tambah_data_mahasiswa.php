<html> 
 <head>        
  <title>Tambah Data Mahasiswa</title>
 </head>
 <body>
  <h1>Tambah Data Mahasiswa</h1>
  <form action="ctrl_mahasiswa.php?act=tambah" method ="POST"> 
   <table border ="0">
    
    <tr> 
     <td> NIM </td> 
     <td> : <input type="text" name="NIM"></td>
    </tr>
    <tr> 
     <td> Nama </td> 
     <td> : <input type="text" name="Nama"></td>
    </tr>
    <tr> 
     <td> Tempat Lahir </td> 
     <td> : <input type="text" name="Tempat_Lahir"> </td>
    </tr>
    <tr> 
     <td> Tanggal Lahir </td> 
     <td> : <input type="date" name="Tanggal_Lahir"> </td>
    </tr>
    <tr> 
     <td> Fakultas </td> 
     <td> : <input type="text" name="Fakultas"></td>
    </tr>
    <tr> 
     <td> Jurusan </td> 
     <td> : <input type="text" name="Jurusan"></td>
    </tr>
    <tr> 
        <td> IPK </td> 
        <!-- Name diganti jadi IPK, type jadi number dengan step desimal -->
        <td> : <input type="number" name="IPK" step="0.01" min="0" max="4"></td>
    </tr>
    <tr> 
     <td> <input type="submit" value="Save">   
          <input type=button value=Back onclick=self.history.back()> 
     </td>
    </tr>
   </table>            
  </form>
 </body>
</html>