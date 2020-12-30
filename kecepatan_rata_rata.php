<?php 
$hasil = 0;
if (isset($_POST['btn_hitung_kecepatan_rata_rata'])) {
  $perpindahan = $_POST['perpindahan'];
  $waktu = $_POST['waktu'];
  $hasil = $perpindahan / $waktu;
}

 ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- include-css -->
    <?php include 'include/include-css.php'; ?>

    <title>Kecepatan Rata-Rata</title>
  </head>
  <body>
    <?php include 'navbar.php'; ?>
    
    <div class="container mb-5">
      <div class="row">
        <div class="col">
          <div class="row my-3">
            <div class="col-lg">
              <h3>Rumus Kecepatan Rata-Rata (Vag)</h3>
              <div class="border border-dark p-2 rounded" style="width: 10rem">
                <div class="row">
                  <div class="col-5 pr-0">
                    Vag = 
                  </div>
                  <div class="col-4 text-center pl-1">
                    <a href="perpindahan.php">&Delta;&#119909;</a> <hr class="ml-0 my-0 py-0" style="background-color: black; width: 3rem;">
                    &Delta;t
                  </div>
                </div>
              </div>
              <table class="my-2">
                <tr>
                  <td>Vag</td>
                  <td style="width: 2rem" class="text-center">=</td>
                  <td>Kecepatan Rata-Rata (m/s)</td>
                </tr>
                <tr>
                  <td>&Delta;&#119909;</td>
                  <td style="width: 2rem" class="text-center">=</td>
                  <td>Perpindahan (m)</td>
                </tr>
                <tr>
                  <td>&Delta;t</td>
                  <td style="width: 2rem" class="text-center">=</td>
                  <td>waktu (s)</td>
                </tr>
              </table>   
            </div>
          </div>
          <div class="row my-3">
            <div class="col-lg">
              <h4>Alat Perhitungan Kecepatan Rata-Rata</h4>          
              <form method="post">
                <div class="row">
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label for="perpindahan">Masukkan nilai &Delta;&#119909; = perpindahan (m)</label>
                      <input type="number" class="form-control" name="perpindahan" required value="<?= isset($perpindahan) ? $perpindahan : 0 ?>">
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label for="waktu">Masukkan nilai &Delta;t = waktu (s)</label>
                      <input type="number" class="form-control" name="waktu" required value="<?= isset($waktu) ? $waktu : 0 ?>">
                    </div>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary" name="btn_hitung_kecepatan_rata_rata">Hitung</button>
                <a href="kecepatan_rata_rata.php" class="btn btn-success">Reset</a>
              </form>
              <div class="row mt-4">
                <div class="col">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroup-sizing-default">Hasil</span>
                    </div>
                    <input readonly type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="Vag = <?= $hasil; ?> (m/s)">
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <!-- <h4>Contoh penggunaan kecepatan_rata_rata</h4>
          <p>
            
          </p> -->

        </div>
      </div>
    </div>

    <!-- include-js -->
    <?php include 'include/include-js.php'; ?>
    
  </body>
</html>