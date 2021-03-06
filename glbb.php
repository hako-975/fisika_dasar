<?php 
$hasil = 0;
if (isset($_POST['btn_hitung_glbb'])) {
  $kecepatan_awal = $_POST['kecepatan_awal'];
  $waktu = $_POST['waktu'];
  $percepatan = $_POST['percepatan'];
  // s = Vo . t + 1/2 . a . t^2
  $hasil = $kecepatan_awal * $waktu + 1/2 * $percepatan * $waktu * $waktu;
}

 ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- include-css -->
    <?php include 'include/include-css.php'; ?>

    <title>GLBB</title>
  </head>
  <body>
    <?php include 'navbar.php'; ?>
    
    <div class="container mb-5">
      <div class="row">
        <div class="col">
          <div class="row my-3">
            <div class="col-lg">
              <h3>Rumus GLBB</h3>
              <div class="border border-dark p-2 rounded" style="width: 12rem">s = Vo . t + 1/2 . a . t<sup>2</sup></div>
              <table class="my-2">
                <tr>
                  <td>s</td>
                  <td style="width: 2rem" class="text-center">=</td>
                  <td>Jarak (m)</td>
                </tr>
                <tr>
                  <td>Vo</td>
                  <td style="width: 2rem" class="text-center">=</td>
                  <td>Kecepatan awal (m/s)</td>
                </tr>
                <tr>
                  <td>t</td>
                  <td style="width: 2rem" class="text-center">=</td>
                  <td>Waktu (s)</td>
                </tr>
                <tr>
                  <td>a</td>
                  <td style="width: 2rem" class="text-center">=</td>
                  <td>Percepatan (m/s<sup>2</sup>)</td>
                </tr>
              </table>   
            </div>
          </div>
          <div class="row my-3">
            <div class="col-lg">
              <h4>Alat Perhitungan GLBB</h4>          
              <form method="post">
                <div class="row">
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label for="kecepatan_awal">Masukkan nilai kecepatan awal (m/s)</label>
                      <input type="number" class="form-control" name="kecepatan_awal" required value="<?= isset($kecepatan_awal) ? $kecepatan_awal : 0 ?>">
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label for="waktu">Masukkan nilai waktu (s)</label>
                      <input type="number" class="form-control" name="waktu" required value="<?= isset($waktu) ? $waktu : 0 ?>">
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label for="percepatan">Masukkan nilai percepatan (m/s<sup>2</sup>)</label>
                      <input type="number" class="form-control" name="percepatan" required value="<?= isset($percepatan) ? $percepatan : 0 ?>">
                    </div>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary" name="btn_hitung_glbb">Hitung</button>
                <a href="glbb.php" class="btn btn-success">Reset</a>
              </form>
              <div class="row mt-4">
                <div class="col">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroup-sizing-default">Hasil</span>
                    </div>
                    <input readonly type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="s = <?= $hasil; ?> (m)">
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <!-- <h4>Contoh penggunaan GLBB</h4>
          <p>
            
          </p> -->

        </div>
      </div>
    </div>

    <!-- include-js -->
    <?php include 'include/include-js.php'; ?>
    
  </body>
</html>