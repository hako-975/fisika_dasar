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

    <title>Vektor cross Product</title>
  </head>
  <body>
    <?php include 'navbar.php'; ?>
    
    <div class="container mb-5">
      <div class="row" id="luas_jajar_genjang">
        <div class="col">
          <h3>Rumus Vektor cross Product (&theta;)</h3>
          <p>
            a . b = a b sin &theta; <br>
            sin &theta; = a . b / a b <br>
            <hr style="height: 0px; margin: 0; padding: 0; width: 11rem">
            sin &theta; = cross Product 
          </p>
          <h4>Alat Perhitungan Vektor cross Product</h4>  
          <form method="post">
            <div class="row">
              <div class="col-sm-4">
                <div class="form-group">
                  <label for="a_i">Masukkan nilai a (i)</label>
                  <input type="number" class="form-control" name="a_i" required value="<?= ($a_i != null) ? $a_i : '' ?>">
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label for="a_j">Masukkan nilai a (j)</label>
                  <input type="number" class="form-control" name="a_j" required value="<?= ($a_j != null) ? $a_j : '' ?>">
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label for="a_k">Masukkan nilai a (k)</label>
                  <input type="number" class="form-control" name="a_k" required value="<?= ($a_k != null) ? $a_k : '' ?>">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-4">
                <div class="form-group">
                  <label for="b_i">Masukkan nilai b (i)</label>
                  <input type="number" class="form-control" name="b_i" required value="<?= ($b_i != null) ? $b_i : '' ?>">
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label for="b_j">Masukkan nilai b (j)</label>
                  <input type="number" class="form-control" name="b_j" required value="<?= ($b_j != null) ? $b_j : '' ?>">
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label for="b_k">Masukkan nilai b (k)</label>
                  <input type="number" class="form-control" name="b_k" required value="<?= ($b_k != null) ? $b_k : '' ?>">
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn-primary" name="btn_hitung_vektor_cross_product">Hitung</button>
            <a href="vektor_cross_product.php" class="btn btn-success">Reset</a>
          </form>
          <div class="row">
            <div class="col-4">
              <div class="form-group">
                <label for="hasil">Hasil</label>
                <input class="form-control" disabled readonly value="sin &theta; = <?= $hasil; ?>">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Javascript -->
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html> 