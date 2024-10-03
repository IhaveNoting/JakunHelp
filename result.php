<?php
          if ($_SERVER['REQUEST_METHOD'] == 'POST') {
              $payment = isset($_POST['payspays']) ? $_POST['payspays'] : '';
          }
?>

<?php
session_start();

// Ambil nilai harga dari sesi
$harga = isset($_SESSION['harga']) ? $_SESSION['harga'] : '';
$kembalian = 0;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $payment = isset($_POST['payspays']) ? $_POST['payspays'] : '';

  if ($harga < $payment) {
    if (!empty($harga)) {
      $kembalian = $payment - $harga;
      echo "<div class='alert alert-success' role='alert'>";
      echo "Total Kembalian: Rp " . number_format($kembalian, 0, ',', '.');
      echo "</div>";
    }
  } else {
    header("Location: declined.php");
    exit();
  }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>

    <div class="container">
      <div class="row justify-content-center">
        
        </div>

        
        <div class="card mt-5">
          <div class="card-header bg-primary text-white">
            <h5>Rincian Kembalian</h5>
          </div>
          <div class="card-body">
            <?php
            $temp = 0;
            $denominations = [100000, 50000, 20000, 10000, 5000, 2000, 1000, 500, 200, 100,50,25,5,3,2,1];

            if (isset($kembalian)) {
              foreach ($denominations as $denomination) {
                if ($kembalian >= $denomination) {
                  $temp = floor($kembalian / $denomination);
                  $kembalian -= $temp * $denomination;
                  echo "<p>Kembalian Rp " . number_format($denomination, 0, ',', '.') . " : <strong>$temp lembar</strong></p>";
                }
              }
            } else {
              echo "<p>Tidak ada kembalian.</p>";
            }
            ?>
          </div>
        </div>
        

        <br>
        <br>

        <div class="text-center">
          <a href="index.php" class="btn btn-primary">Kembali ke Halaman Utama</a>
        </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>