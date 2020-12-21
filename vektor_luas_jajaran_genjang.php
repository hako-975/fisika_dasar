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
    <!-- include-css -->
    <?php include 'include/include-css.php'; ?>

    <title>Vektor Luas Jajaran Genjang</title>
  </head>
  <body>
    <?php include 'navbar.php'; ?>
    
    <div class="container mb-5">
      <div class="row" id="luas_jajar_genjang">
        <div class="col">
          <h3>Rumus Vektor Luas Jajar Genjang (L)</h3>
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
          <h4>Contoh penggunaan Vektor Luas Jajaran Genjang</h4>
          <p>
            Dua buah vektor masing-masing panjangnya 7 cm dan 12 cm. Kedua vektor
            membentuk sudut 30 deg
            . Hitung luas jajaran genjang yang dibentuk oleh kedua vektor
            tersebut.
            Diketahui : <br>
            P = 7 cm <br>
            L = 12 cm <br>
            Sudut vektor = 30 deg <br>
            Ditanya : L <br>
            Jawab : <br>
            L = P x L sin sudut vector <br>
            = 7 cm x 12 cm x sin(30) <br>
            = 7 cm x 12 cm x ½ <br>
            = 42 cm<sup>2</sup>
          </p>
        </div>
      </div>
    </div>

    <!-- include-js -->
    <?php include 'include/include-js.php'; ?>
  </body>
</html>
