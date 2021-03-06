<?php 
$hasil = 0;
if (isset($_POST['btn_hitung_glb'])) {
  $kecepatan = $_POST['kecepatan'];
  $waktu = $_POST['waktu'];

  $hasil = $kecepatan * $waktu;
}

 ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- include-css -->
    <?php include 'include/include-css.php'; ?>

    <title>GLB</title>
  </head>
  <body>
    <?php include 'navbar.php'; ?>
    
    <div class="container mb-5">
      <div class="row">
        <div class="col">
          <div class="row my-3">
            <div class="col-lg">
              <h3>Rumus GLB (m)</h3>
              <div class="border border-dark p-2 rounded" style="width: 6rem">s = V . t</div>
              <table class="my-2">
                <tr>
                  <td>s</td>
                  <td style="width: 2rem" class="text-center">=</td>
                  <td>Jarak (m)</td>
                </tr>
                <tr>
                  <td>V</td>
                  <td style="width: 2rem" class="text-center">=</td>
                  <td>Kecepatan (m/s)</td>
                </tr>
                <tr>
                  <td>t</td>
                  <td style="width: 2rem" class="text-center">=</td>
                  <td>Waktu (s)</td>
                </tr>
              </table>   
            </div>
          </div>
          <div class="row my-3">
            <div class="col-lg">
              <h4>Alat Perhitungan GLB</h4>          
              <form method="post">
                <div class="row">
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label for="kecepatan">Masukkan nilai kecepatan (m/s)</label>
                      <input type="number" class="form-control" name="kecepatan" required value="<?= isset($kecepatan) ? $kecepatan : 0 ?>">
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label for="waktu">Masukkan nilai waktu (s)</label>
                      <input type="number" class="form-control" name="waktu" required value="<?= isset($waktu) ? $waktu : 0 ?>">
                    </div>
                  </div>    
                </div>
                <button type="submit" class="btn btn-primary" name="btn_hitung_glb">Hitung</button>
                <a href="glb.php" class="btn btn-success">Reset</a>
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
          <div class="row my-3">
            <div class="col-lg">
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
      </div>
    </div>

    <!-- include-js -->
    <?php include 'include/include-js.php'; ?>
  </body>
</html>