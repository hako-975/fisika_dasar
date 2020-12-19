<?php 

$hasil = 0;

if (isset($_POST['btn_hitung_vektor_luas_jajaran_genjang'])) {
  $panjang = $_POST['panjang'];
  $lebar = $_POST['lebar'];
  $sin = $_POST['sin'];

  $hasil = $panjang * $lebar * sin(deg2rad($sin));
}

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Vektor Dot Product</title>
  </head>
  <body>
    <?php include 'navbar.php'; ?>
    
    <div class="container mb-5">
      <div class="row" id="luas_jajar_genjang">
        <div class="col">
          <h3>Rumus Vektor Dot Product (L)</h3>
          <p>
            L = p x l x sin sudut vector
            <hr style="height: 0px; margin: 0; padding: 0; width: 11rem">
            L = Luas (cm<sup>2</sup>)
            <br> 
            p = panjang (cm)
            <br> 
            l = lebar (cm)
          </p>
          <h4>Alat Perhitungan Vektor Usaha</h4>  
          <form method="post">
            <div class="row">
              <div class="col-sm-4">
                <div class="form-group">
                  <label for="panjang">Masukkan nilai panjang (cm)</label>
                  <input type="number" class="form-control" name="panjang" required value="<?= ($panjang != null) ? $panjang : '' ?>">
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label for="lebar">Masukkan nilai lebar (cm)</label>
                  <input type="number" class="form-control" name="lebar" required value="<?= ($lebar != null) ? $lebar : '' ?>">
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label for="sin">Masukkan nilai sudut vektor (sin)</label>
                  <input type="number" class="form-control" name="sin" required value="<?= ($sin != null) ? $sin : '' ?>">
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn-primary" name="btn_hitung_vektor_luas_jajaran_genjang">Hitung</button>
            <a href="vektor_luas_jajaran_genjang.php" class="btn btn-success">Reset</a>
          </form>
          <div class="row">
            <div class="col-4">
              <div class="form-group">
                <label for="hasil">Hasil</label>
                <input class="form-control" disabled readonly value="<?= $hasil; ?> cm2">
              </div>
            </div>
          </div>