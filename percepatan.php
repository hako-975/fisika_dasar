<?php 
$hasil = 0;
if (isset($_POST['btn_hitung_percepatan'])) {
  $kecepatan = $_POST['kecepatan'];
  $waktu = $_POST['waktu'];
  $hasil = $kecepatan / $waktu;
}

 ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- include-css -->
    <?php include 'include/include-css.php'; ?>

    <title>Percepatan</title>
  </head>
  <body>
    <?php include 'navbar.php'; ?>
    
    <div class="container mb-5">
      <div class="row">
        <div class="col">
          <div class="row my-3">
            <div class="col-lg">
              <h3>Rumus Percepatan (a)</h3>
              <div class="border border-dark p-2 rounded" style="width: 8rem">
                <div class="row">
                  <div class="col-4 pr-0">
                    a = 
                  </div>
                  <div class="col-4 text-center pl-0">
                    v<hr class="ml-0 my-0 py-0" style="background-color: black; width: 2.25rem;">
                    t
                  </div>
                </div>
              </div>
              <table class="my-2">
                <tr>
                  <td>a</td>
                  <td style="width: 2rem" class="text-center">=</td>
                  <td>Percepatan (m/s<sup>2</sup>)</td>
                </tr>
                <tr>
                  <td>v</td>
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
              <h4>Alat Perhitungan Percepatan</h4>          
              <form method="post">
                <div class="row">
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label for="kecepatan">Masukkan nilai v = kecepatan (m/s)</label>
                      <input type="number" class="form-control" name="kecepatan" required value="<?= isset($kecepatan) ? $kecepatan : 0 ?>">
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label for="waktu">Masukkan nilai t = waktu (s)</label>
                      <input type="number" class="form-control" name="waktu" required value="<?= isset($waktu) ? $waktu : 0 ?>">
                    </div>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary" name="btn_hitung_percepatan">Hitung</button>
                <a href="percepatan.php" class="btn btn-success">Reset</a>
              </form>
              <div class="row mt-4">
                <div class="col">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroup-sizing-default">Hasil</span>
                    </div>
                    <input readonly type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="a = <?= $hasil; ?> (m/s2)">
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <!-- <h4>Contoh penggunaan percepatan</h4>
          <p>
            
          </p> -->

        </div>
      </div>
    </div>

    <!-- include-js -->
    <?php include 'include/include-js.php'; ?>
    
  </body>
</html>