<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Formulir CWA Pusat</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="css/styles.css">
<script type="text/javascript" src="js/qrcode.js"></script>

</head>
    <title>CWA QR_Code</title>
  </head>
  <body>


        <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" class="active" href="#">CWA||QR_Code</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="../">Beranda <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item"><a class="nav-link" href="#">Kumpulan Formulir Pusat</a></li>
      <li class="nav-item"><a class="nav-link" href="#">Kumpulan Formulir TA</a></li>
      <li class="nav-item"><a class="nav-link" href="#">Kumpulan Form General</a></li>
    </ul>
  </div>
</nav>

    <center><center>
    <br/>
    <a href="tambah.php" class="btn btn-primary btn-lg" role="button" aria-pressed="true">Tambah Data QR</a>
    <table>
      <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Departemen</th>
          <th>Jabatan</th>
          <th>Alamat</th>
          <th>Signature</th>
          <th>Action</th>
        </tr>
    </thead>
    <tbody>
      <?php
      // jalankan query untuk menampilkan semua data diurutkan berdasarkan nim
      $query = "SELECT * FROM qrcode ORDER BY id ASC";
      $result = mysqli_query($koneksi, $query);
      //mengecek apakah ada error ketika menjalankan query
      if(!$result){
        die ("Query Error: ".mysqli_errno($koneksi).
           " - ".mysqli_error($koneksi));
      }

      //buat perulangan untuk element tabel dari data mahasiswa
      $no = 1; //variabel untuk membuat nomor urut
      // hasil query akan disimpan dalam variabel $data dalam bentuk array
      // kemudian dicetak dengan perulangan while
      while($row = mysqli_fetch_assoc($result))
      {
      ?>
       <tr>
          <td><?php echo $no; ?></td>
          <td><?php echo $row['nama_lengkap']; ?></td>
          <td><?php echo substr($row['departemen'], 0, 20); ?></td>
          <td><?php echo $row['jabatan']; ?></td>
          <td><?php echo $row['alamat']; ?></td>
          <td style="text-align: center;"><img src="gambar/<?php echo $row['gambar_qrcode']; ?>" style="width: 120px;"></td>
          <td>
              <a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a> |
              <a href="proses_hapus.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a>
          </td>
      </tr>
         


  
      <?php
        $no++; //untuk nomor urut terus bertambah 1
      }
      ?>
    </tbody>
    </table>

    <!--buat qrcode-->
    <div class="button">
          <h1>QR Code Generator</h1>
        </div>
        <div class="button">
          <button>
          <form onsubmit="generate();return false;">
          <span>Tulis Disini</span>
            <input type="text" id="qr" class="form-control"><br><br>
            <input type="submit" class="btn btn-primary" value="Generate QRCode">
          </form>
          </button>
          <div id="qrResult" ></div>
        </div>
        
   
  <script type="text/javascript">
    var qrcode= new QRCode(document.getElementById('qrResult'),{
    width:200,
    height:200
    });

    function generate(){
      var message = document.getElementById('qr');
      qrcode.makeCode(message.value);
    }
  </script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>


</html>


 
