<?php 
$hasil = 0;
if (isset($_POST['btn_hitung_perpindahan'])) {
  $xakhir = $_POST['xakhir'];
  $xawal = $_POST['xawal'];
  $hasil = $xakhir - $xawal;
}

 ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- include-css -->
    <?php include 'include/include-css.php'; ?>

    <title>Perpindahan</title>
  </head>
  <body>
    <?php include 'navbar.php'; ?>
    
    <div class="container mb-5">
      <div class="row">
        <div class="col">
          <div class="row my-3">
            <div class="col-lg">
              <h3>Rumus Perpindahan (&Delta;&#119909;)</h3>
              <div class="border border-dark p-2 rounded" style="width: 12rem">&Delta;&#119909; = &#119909; akhir - &#119909; awal</div>
              <table class="my-2">
                <tr>
                  <td>&Delta;&#119909;</td>
                  <td style="width: 2rem" class="text-center">=</td>
                  <td>Jarak (m)</td>
                </tr>
                <tr>
                  <td>&#119909; akhir</td>
                  <td style="width: 2rem" class="text-center">=</td>
                  <td>sumbu &#119909; akhir (m)</td>
                </tr>
                <tr>
                  <td>&#119909; awal</td>
                  <td style="width: 2rem" class="text-center">=</td>
                  <td>sumbu &#119909; awal (m)</td>
                </tr>
              </table>   
            </div>
          </div>
          <div class="row my-3">
            <div class="col-lg">
              <h4>Alat Perhitungan Perpindahan</h4>          
              <form method="post">
                <div class="row">
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label for="xakhir">Masukkan nilai &#119909; akhir (m)</label>
                      <input type="number" class="form-control" name="xakhir" required value="<?= isset($xakhir) ? $xakhir : 0 ?>">
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label for="xawal">Masukkan nilai &#119909; awal (m)</label>
                      <input type="number" class="form-control" name="xawal" required value="<?= isset($xawal) ? $xawal : 0 ?>">
                    </div>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary" name="btn_hitung_perpindahan">Hitung</button>
                <a href="perpindahan.php" class="btn btn-success">Reset</a>
              </form>
              <div class="row mt-4">
                <div class="col">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroup-sizing-default">Hasil</span>
                    </div>
                    <input readonly type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="&Delta;&#119909; = <?= $hasil; ?> (m)">
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <!-- <h4>Contoh penggunaan perpindahan</h4>
          <p>
            
          </p> -->

        </div>
      </div>
    </div>

    <!-- include-js -->
    <?php include 'include/include-js.php'; ?>
    
  </body>
</html>