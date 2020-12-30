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
      <div class="row">
        <div class="col">
          <div class="row my-3">
            <div class="col-lg">
              <h3>Rumus Vektor Luas Jajaran Genjang (L)</h3>
              <div class="border border-dark p-2 rounded" style="width: 7rem">L = p . l . sin</div>
              <table class="my-2">
                <tr>
                  <td>L</td>
                  <td style="width: 2rem" class="text-center">=</td>
                  <td>Luas (cm<sup>2</sup>)</td>
                </tr>
                <tr>
                  <td>p</td>
                  <td style="width: 2rem" class="text-center">=</td>
                  <td>panjang (cm)</td>
                </tr>
                <tr>
                  <td>l</td>
                  <td style="width: 2rem" class="text-center">=</td>
                  <td>lebar (cm)</td>
                </tr>
                <tr>
                  <td>sin</td>
                  <td style="width: 2rem" class="text-center">=</td>
                  <td>sudut vektor sinus (&theta;)</td>
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
                      <label for="panjang">Masukkan nilai p = panjang (cm)</label>
                      <input type="number" class="form-control" name="panjang" required value="<?= (isset($panjang)) ? $panjang : 0 ?>">
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label for="lebar">Masukkan nilai l = lebar (cm)</label>
                      <input type="number" class="form-control" name="lebar" required value="<?= (isset($lebar)) ? $lebar : 0 ?>">
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label for="sin">Masukkan nilai sin = sudut vektor (&theta;)</label>
                      <input type="number" class="form-control" name="sin" required value="<?= (isset($sin)) ? $sin : 0 ?>">
                    </div>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary" name="btn_hitung_vektor_luas_jajaran_genjang"><i class="fas fa-fw fa-save"></i> Hitung</button>
                <a href="vektor_luas_jajaran_genjang.php" class="btn btn-success"><i class="fas fa-fw fa-redo"></i> Reset</a>
              </form>
              <div class="row mt-4">
                <div class="col">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroup-sizing-default">Hasil</span>
                    </div>
                    <input readonly type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="<?= $hasil; ?> (cm2)">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row my-3">
            <div class="col-lg">
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
      </div>
    </div>

    <!-- include-js -->
    <?php include 'include/include-js.php'; ?>
  </body>
</html>
