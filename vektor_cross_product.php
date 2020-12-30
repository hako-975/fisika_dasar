<?php 

$hasil = 0;

if (isset($_POST['btn_hitung_vektor_cross_product'])) {
  $a_i = $_POST['a_i'];
  $a_j = $_POST['a_j'];
  $a_k = $_POST['a_k'];

  $b_i = $_POST['b_i'];
  $b_j = $_POST['b_j'];
  $b_k = $_POST['b_k'];

  $a_titik_b = ($a_i * $b_i) + ($a_j * $b_j) + ($a_k * $b_k);

  $a = ($a_i * $a_i) + ($a_j * $a_j) + ($a_k * $a_k);
  $a = sqrt($a);

  $b = ($b_i * $b_i) + ($b_j * $b_j) + ($b_k * $b_k);
  $b = sqrt($b);

  $a_kali_b = $a * $b;

  $hasil = $a_titik_b / $a_kali_b;
  $hasil = asin($hasil);
  $hasil = rad2deg($hasil);
}
  
?>


<!doctype html>
<html lang="en">
  <head>

    <!-- include-css -->
    <?php include 'include/include-css.php'; ?>

    <title>Vektor Cross Product</title>
  </head>
  <body>
    <?php include 'navbar.php'; ?>
    
    <div class="container mb-5">
      <div class="row">
        <div class="col">
          <div class="row my-2">
            <div class="col-lg">
              <h3>Rumus Vektor Cross Product (&theta;)</h3>
              <div class="border border-dark p-2 rounded" style="width: 14rem">
                a . b = &radic;a<sup>2</sup> . &radic;b<sup>2</sup> . sin &theta;
                <div class="row">
                  <div class="col-4 pr-0">
                    sin &theta; = 
                  </div>
                  <div class="col-5 text-center pl-0">
                    a . b <hr class="ml-0 my-0 py-0" style="background-color: black; width: 5.5rem;">
                    &radic;a<sup>2</sup> . &radic;b<sup>2</sup>
                  </div>
                </div>
              </div>
              <table class="my-2">
                <tr>
                  <td>sin</td>
                  <td style="width: 2rem" class="text-center">=</td>
                  <td>sinus (&theta;)</td>
                </tr>
              </table> 
              </p>
            </div>
          </div>
          <div class="row my-2">
            <div class="col-lg">
              <h4>Alat Perhitungan Vektor Cross Product</h4>  
              <form method="post">
                <div class="row">
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label for="a_i">Masukkan nilai a (i)</label>
                      <input type="number" class="form-control" name="a_i" required value="<?= (isset($a_i)) ? $a_i : 0 ?>">
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label for="a_j">Masukkan nilai a (j)</label>
                      <input type="number" class="form-control" name="a_j" required value="<?= (isset($a_j)) ? $a_j : 0 ?>">
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label for="a_k">Masukkan nilai a (k)</label>
                      <input type="number" class="form-control" name="a_k" required value="<?= (isset($a_k)) ? $a_k : 0 ?>">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label for="b_i">Masukkan nilai b (i)</label>
                      <input type="number" class="form-control" name="b_i" required value="<?= (isset($b_i)) ? $b_i : 0 ?>">
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label for="b_j">Masukkan nilai b (j)</label>
                      <input type="number" class="form-control" name="b_j" required value="<?= (isset($b_j)) ? $b_j : 0 ?>">
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label for="b_k">Masukkan nilai b (k)</label>
                      <input type="number" class="form-control" name="b_k" required value="<?= (isset($b_k)) ? $b_k : 0 ?>">
                    </div>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary" name="btn_hitung_vektor_cross_product"><i class="fas fa-fw fa-save"></i> Hitung</button>
                <a href="vektor_cross_product.php" class="btn btn-success"><i class="fas fa-fw fa-redo"></i> Reset</a>
              </form>
              <div class="row mt-4">
                <div class="col">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroup-sizing-default">Hasil</span>
                    </div>
                    <input readonly type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="&theta; = <?= $hasil; ?>">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- include-js -->
    <?php include 'include/include-js.php'; ?>
  </body>
</html> 