<?php 
$hasil_glbb = 0;
if (isset($_POST['btn_hitung_glbb'])) {
  $kecepatan_awal = $_POST['kecepatan_awal'];
  $waktu = $_POST['waktu'];
  $percepatan = $_POST['percepatan'];
  // s = Vo . t + 1/2 . a . t^2
  $hasil_glbb = $kecepatan_awal * $waktu + 1/2 * $percepatan * $waktu * $waktu;
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

    <title>GLBB</title>
  </head>
  <body>
    <?php include 'navbar.php'; ?>
    
    <div class="container mb-5">
      <div class="row">
        <div class="col">
          <h2>GLBB</h2>
          <p>
            Gerak lurus berubah beraturan (GLBB) adalah gerak suatu benda pada lintasan lurus yang
            mempunyai percepatan tetap. Artinya, kecepatan
            gerakan si benda ini berubah
            (bisa bertambah cepat
            atau bertambah lambat), tapi secara teratur.
            Contohnya, gerak penerjun payung, gerak benda
            jatuh bebas, atau gerak mobil yang sengaja
            ditambah kecepatannya secara konstan tadi.
          </p>
          <h3>Rumus GLBB</h3>
          <p>
            s = Vo . t + 1/2 . a . t^2
            <hr style="height: 0px; margin: 0; padding: 0; width: 11rem">
            s = jarak (m) <br>
            Vo = kecepatan awal (m/s) <br>
            t = waktu (s) <br>
            a = percepatan (m/s^2) <br>
          </p>
          <h4>Alat Perhitungan GLB</h4>          
          <form method="post">
            <div class="row">
              <div class="col-sm-4">
                <div class="form-group">
                  <label for="kecepatan_awal">Masukkan nilai kecepatan awal (Vo)</label>
                  <input type="number" class="form-control" name="kecepatan_awal" required value="<?= ($kecepatan_awal != null) ? $kecepatan_awal : '' ?>">
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label for="waktu">Masukkan nilai waktu (t)</label>
                  <input type="number" class="form-control" name="waktu" required value="<?= ($waktu != null) ? $waktu : '' ?>">
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label for="percepatan">Masukkan nilai percepatan (a)</label>
                  <input type="number" class="form-control" name="percepatan" required value="<?= ($percepatan != null) ? $percepatan : '' ?>">
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn-primary" name="btn_hitung_glbb">Hitung</button>
            <a href="glbb.php" class="btn btn-success">Reset</a>
          </form>
          <div class="row">
            <div class="col-4">
              <div class="form-group">
                <label for="hasil">Hasil</label>
                <textarea class="form-control" disabled readonly><?= $hasil_glbb; ?></textarea>
              </div>
            </div>
          </div>
          <!-- <h4>Contoh penggunaan GLBB</h4>
          <p>
            
          </p> -->

        </div>
      </div>
    </div>

    <!-- Javascript -->
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>