<?php 

$hasil = 0;

if (isset($_POST['btn_hitung_energi_kinetik'])) {
  $massa = $_POST['massa'];
  $kecepatan = $_POST['kecepatan'];

  $hasil = 1/2 * $massa * $kecepatan * $kecepatan;
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

    <title>Energi Kinetik</title>
  </head>
  <body>
    <?php include 'navbar.php'; ?>
    
    <div class="container mb-5">
      <div class="row">
        <div class="col-lg">
          <h2>Energi Kinetik</h2>
          <p class="text-justify">
            Energi kinetik adalah energi yang dimiliki benda yang sedang bergerak
            Benda yang ber-massa m dan sedang bergerak dengan kecepatan v
          </p>
          <h3>Rumus Energi Kinetik (Joule)</h3>
          <p>   
            Ek = 1/2 . m . v^2
            <hr style="height: 0px; margin: 0; padding: 0; width: 11rem">
            Ek = energi kinetik (Joule) <br>
            m = massa (Kg) <br>
            v = kecepatan (m/s) <br>
          </p>
          <h4>Alat Perhitungan Energi Kinetik</h4>  
          <form method="post">
            <div class="row">
              <div class="col-sm-4">
                <div class="form-group">
                  <label for="massa">Masukkan nilai massa (kg)</label>
                  <input type="number" class="form-control" name="massa" required value="<?= ($massa != null) ? $massa : '' ?>">
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label for="kecepatan">Masukkan nilai kecepatan (m/s)</label>
                  <input type="number" class="form-control" name="kecepatan" required value="<?= ($kecepatan != null) ? $kecepatan : '' ?>">
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn-primary" name="btn_hitung_energi_kinetik">Hitung</button>
            <a href="energi_kinetik.php" class="btn btn-success">Reset</a>
          </form>
          <div class="row">
            <div class="col-4">
              <div class="form-group">
                <label for="hasil">Hasil</label>
                <textarea class="form-control" disabled readonly><?= $hasil; ?></textarea>
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