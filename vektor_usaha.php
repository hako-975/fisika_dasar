<?php 

$hasil = 0;

if (isset($_POST['btn_hitung_vektor_usaha'])) {
  $f = $_POST['f'];
  $cos = $_POST['cos'];
  $s = $_POST['s'];

  $hasil = $f * cos(deg2rad($cos)) * $s;
}

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- include-css -->
    <?php include 'include/include-css.php'; ?>

    <title>Vektor Usaha</title>
  </head>
  <body>
    <?php include 'navbar.php'; ?>
    
    <div class="container mb-5">
      <div class="row">
        <div class="col-lg">
          <h2>Vektor</h2>
          <p class="text-justify">
            Vektor adalah besaran yang mempunyai nilai dan arah. Contoh dari besaran ini misalnya perpindahan, kecepatan, percepatan, gaya, dan sebagainya. Untuk menggambarkan vektor digunakan garis berarah yang bertitik pangkal. Panjang garis sebagai nilai vektor dah anak panah menunjukkan arahnya.
          </p>
          <h3>Rumus Vektor Usaha (W)</h3>
          <p>
            W = F . s 
            <hr style="height: 0px; margin: 0; padding: 0; width: 11rem">
            W = usaha (Joule)
            <br> 
            F = gaya (N)
            <br> 
            s = perpindahan (m)
          </p>
          <h4>Alat Perhitungan Vektor Usaha</h4>  
          <form method="post">
            <div class="row">
              <div class="col-sm-4">
                <div class="form-group">
                  <label for="f">Masukkan nilai gaya (F)</label>
                  <input type="number" class="form-control" name="f" required value="<?= ($f != null) ? $f : '' ?>">
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label for="cos">Masukkan nilai arah gaya (cos)</label>
                  <input type="number" class="form-control" name="cos" required value="<?= ($cos != null) ? $cos : '' ?>">
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label for="s">Masukkan nilai perpindahan (s)</label>
                  <input type="number" class="form-control" name="s" required value="<?= ($s != null) ? $s : '' ?>">
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn-primary" name="btn_hitung_vektor_usaha">Hitung</button>
            <a href="vektor_usaha.php" class="btn btn-success">Reset</a>
          </form>
          <div class="row">
            <div class="col-4">
              <div class="form-group">
                <label for="hasil">Hasil</label>
                <input class="form-control" disabled readonly value="<?= $hasil; ?> (Joule)"> 
              </div>
            </div>
          </div>
          <h4>Contoh penggunaan Vektor Usaha</h4>
          <p>
            Sebuah benda yang terletak di lantai ditarik dengan gaya 10 N dengan arah 600
            terhadap lantai. Hitunglah usaha yang dilakukan gaya untuk memindahkan benda
            sejauh 10 m
            Diketahui : <br>
            F = 10 N <br>
            Arah gaya = 60 deg <br>
            s = 10 m <br>
            Ditanya : W <br>
            Jawab : <br>
            W = F . s <br> 
            = F cos (arah gaya) . S <br>
            = 10 N cos(60) . 10 m <br>
            = 10 N . &#189; . 10 <br>
            = 50 Joule <br>
          </p>
        </div>
      </div>
    </div>    

    <!-- include-js -->
    <?php include 'include/include-js.php'; ?>
  </body>
</html>