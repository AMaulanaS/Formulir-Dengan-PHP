 <?php
include 'koneksi.php';
  if (isset($_GET['id'])) {
    $id = ($_GET["id"]);
    $query = "SELECT * FROM qrcode WHERE id='$id'";
    $result = mysqli_query($koneksi, $query);
    if(!$result){
      die ("Query Error: ".mysqli_errno($koneksi).
         " - ".mysqli_error($koneksi));
    }
    // mengambil data dari database
    $data = mysqli_fetch_assoc($result);
       if (!count($data)) {
          echo "<script>alert('Data tidak ditemukan pada database');window.location='index.php';</script>";
       }
  } else {
    echo "<script>alert('Masukkan data id.');window.location='index.php';</script>";
  }         
  ?>
<!DOCTYPE html>
<html>
  <head>
    <style type="text/css">
      * {
        font-family: "Trebuchet MS";
      }
      h1 {
        text-transform: uppercase;
        color: salmon;
      }
    button {
          background-color: salmon;
          color: #fff;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
          border: 0px;
          margin-top: 20px;
    }
    label {
      margin-top: 10px;
      float: left;
      text-align: left;
      width: 100%;
    }
    input {
      padding: 6px;
      width: 100%;
      box-sizing: border-box;
      background: #f8f8f8;
      border: 2px solid #ccc;
      outline-color: salmon;
    }
    div {
      width: 100%;
      height: auto;
    }
    .base {
      width: 400px;
      height: auto;
      padding: 20px;
      margin-left: auto;
      margin-right: auto;
      background: #ededed;
    }
    </style>
  </head>
  <body>
      <center>
        <h1>Edit <?php echo $data['nama_lengkap']; ?></h1>
      <center>
      <form method="POST" action="edit.php" enctype="multipart/form-data" >
      <section class="base">
        <!-- menampung nilai id produk yang akan di edit -->
        <input name="id" value="<?php echo $data['id']; ?>"  hidden />
        <div>
          <label>Nama Lengkap</label>
          <input type="text" name="nama_lengkap" value="<?php echo $data['nama_lengkap']; ?>" autofocus="" required="" />
        </div>
        <div>
          <label>Departemen</label>
         <input type="text" name="departemen" value="<?php echo $data['departemen']; ?>" />
        </div>
        <div>
          <label>Jabatan</label>
         <input type="text" name="jabatan" required=""value="<?php echo $data['jabatan']; ?>" />
        </div>
        <div>
          <label>Gambar QRcode</label>
          <img src="gambar/<?php echo $data['gambar_qrcode']; ?>" style="width: 120px;float: left;margin-bottom: 5px;">
          <input type="file" name="gambar_qrcode" />
          <i style="float: left;font-size: 11px;color: red">Abaikan jika tidak merubah gambar</i>
        </div>
        <div>
         <button type="submit">Simpan Perubahan</button>
        </div>
        </section>
      </form>
  </body>
</html>