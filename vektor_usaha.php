<?php 

$hasil = 0;

if (isset($_POST['btn_hitung_vektor_usaha'])) {
  $gaya = $_POST['gaya'];
  $cos = $_POST['cos'];
  $perpindahan = $_POST['perpindahan'];

  $hasil = $gaya * cos(deg2rad($cos)) * $perpindahan;
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
          <div class="row my-3">
            <div class="col-lg">
              <h3>Rumus Vektor Usaha (W)</h3>
              <div class="border border-dark p-2 rounded" style="width: 10rem">W = F . cos . s</div>
              <table class="my-2">
                <tr>
                  <td>W</td>
                  <td style="width: 2rem" class="text-center">=</td>
                  <td>usaha (Joule)</td>
                </tr>
                <tr>
                  <td>F</td>
                  <td style="width: 2rem" class="text-center">=</td>
                  <td>gaya (Newton)</td>
                </tr>
                <tr>
                  <td>cos</td>
                  <td style="width: 2rem" class="text-center">=</td>
                  <td>arah gaya cosinus (&theta;)</td>
                </tr>
                <tr>
                  <td>s</td>
                  <td style="width: 2rem" class="text-center">=</td>
                  <td>perpindahan (meter)</td>
                </tr>
              </table>    
            </div>
          </div>           
          <div class="row my-3">
            <div class="col-lg">
              <h4>Alat Perhitungan Vektor Usaha</h4>  
              <form method="post">
                <div class="row">
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label for="gaya">Masukkan nilai F = gaya (N)</label>
                      <input type="number" class="form-control" name="gaya" required value="<?= (isset($gaya)) ? $gaya : 0 ?>">
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label for="cos">Masukkan nilai cos = arah gaya (&theta;)</label>
                      <input type="number" class="form-control" name="cos" required value="<?= (isset($cos)) ? $cos : 0 ?>">
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label for="perpindahan">Masukkan nilai s = perpindahan (m)</label>
                      <input type="number" class="form-control" name="perpindahan" required value="<?= (isset($perpindahan)) ? $perpindahan : 0 ?>">
                    </div>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary" name="btn_hitung_vektor_usaha"><i class="fas fa-fw fa-save"></i> Hitung</button>
                <a href="vektor_usaha.php" class="btn btn-success"><i class="fas fa-fw fa-redo"></i> Reset</a>
              </form>
              <div class="row mt-4">
                <div class="col">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroup-sizing-default">Hasil</span>
                    </div>
                    <input readonly type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="W = <?= $hasil; ?> (Joule)">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row my-3">
            <div class="col-lg">
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
                W = F . cos . s <br> 
                = F . cos (arah gaya) . s <br>
                = 10 N . cos(60) . 10 m <br>
                = 10 N . &#189; . 10 <br>
                = 50 Joule <br>
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