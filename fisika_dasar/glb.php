<?php 
$hasil_glb = 0;
if (isset($_POST['btn_hitung_glb'])) {
  $kecepatan = $_POST['kecepatan'];
  $waktu = $_POST['waktu'];

  $hasil_glb = $kecepatan * $waktu;
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

    <title>GLB</title>
  </head>
  <body>
    <?php include 'navbar.php'; ?>
    
    <div class="container mb-5">
      <div class="row">
        <div class="col">
          <h2>GLB</h2>
          <p>
            Gerak lurus beraturan (GLB) adalah gerak suatu benda pada lintasan lurus yang mempunyai
            kecepatan tetap. Adapun contoh dari GLB adalah kereta yang
            bergerak di rel yang lurus dan datar, serta mobil di jalan tol lurus yang
            dijalankan dengan kecepatan tetap.
          </p>
          <h3>Rumus GLB</h3>
          <p>
            s = V . t <br>
            <hr style="height: 0px; margin: 0; padding: 0; width: 11rem">
            s = jarak (m) <br>
            V = kecepatan (m/s) <br>
            t = waktu (s) <br>
          </p>
          <h4>Alat Perhitungan GLB</h4>          
          <form method="post">
            <div class="row">
              <div class="col-sm-4">
                <div class="form-group">
                  <label for="kecepatan">Masukkan nilai kecepatan (V)</label>
                  <input type="number" class="form-control" name="kecepatan" required value="<?= ($kecepatan != null) ? $kecepatan : '' ?>">
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label for="waktu">Masukkan nilai waktu (t)</label>
                  <input type="number" class="form-control" name="waktu" required value="<?= ($waktu != null) ? $waktu : '' ?>">
                </div>
              </div>    
            </div>
            <button type="submit" class="btn btn-primary" name="btn_hitung_glb">Hitung</button>
            <a href="glb.php" class="btn btn-success">Reset</a>
          </form>
          <div class="row">
            <div class="col-4">
              <div class="form-group">
                <label for="hasil">Hasil</label>
                <textarea class="form-control" disabled readonly><?= $hasil_glb; ?></textarea>
              </div>
            </div>
          </div>
          <h4>Contoh penggunaan GLB</h4>
          <p>
            Sebuah motor melaju di lintasan lurus dengan
            kecepatan 80 km/jam. Jika perjalanan dapat ditempuh
            dalam waktu 180 menit, hitunglah berapa jarak yang
            ditempuh oleh motor tersebut? <br>
            diketahui : <br>
            V = 80 km/jam <br>
            t = 180 menit = 3 jam <br>
            ditanya : s <br>
            jawab : <br>
            s = V . t <br>
            = 80 . 3 <br>
            = 240 km
          </p>

        </div>
      </div>
    </div>

    <!-- Javascript -->
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>