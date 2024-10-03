        <?php
          if ($_SERVER['REQUEST_METHOD'] == 'POST') {
              $name = isset($_POST['name_user']) ? $_POST['name_user'] : '';
              $email = isset($_POST['email_user']) ? $_POST['email_user'] : '';
              $phone = isset($_POST['pn_user']) ? $_POST['pn_user'] : '';
              $address = isset($_POST['add_user']) ? $_POST['add_user'] : '';
              $product = isset($_POST['products']) ? $_POST['products'] : '';
              $quantity = isset($_POST['Quan_order']) ? $_POST['Quan_order'] : '';
              $harga;

              if($product=="Cloud")
              {
                $harga=(525000 * $quantity);
              }
              else if($product=="Obito")
              {
                $harga=(100000 * $quantity);
              }
              else if($product=="Madara")
              {
                $harga=(1500000 * $quantity);
              }
              else if($product=="Kira")
              {
                $harga=(250000 * $quantity);
              }
              else if($product=="Dio")
              {
                $harga=(500000 * $quantity) ;
              }
              else if($product=="Guts")
              {
                $harga=(750000 * $quantity);
              }
            }

              session_start();
              $_SESSION['harga'] = $harga;

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
<!--NAVBAR-->
    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="./asset/icon.png" height="60" width="100"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown link
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!--NAVBAR-->
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-8">
        <div class="card mt-5">
          <div class="card-header text-center">
            <h4>Recipient Information</h4>
          </div>
          <div class="card-body">
            <p class="card-text"><strong>Full Name     : </strong> <?php echo htmlspecialchars($name); ?></p>
            <p class="card-text"><strong>Email Address : </strong> <?php echo htmlspecialchars($email); ?></p>
            <p class="card-text"><strong>Phone Number  : </strong> <?php echo htmlspecialchars($phone); ?></p>
            <p class="card-text"><strong>Address       : </strong> <?php echo htmlspecialchars($address); ?></p>
          </div>
          <div class="card-footer text-center">
          </div>
        </div>
        <div class="card mt-5">
          <div class="card-header text-center">
            <h4>Order Summary</h4>
          </div>
          <div class="card-body">
            <p class="card-text"><strong>Product      : </strong> <?php echo htmlspecialchars($product); ?></p>
            <p class="card-text"><strong>Quantity     : </strong> <?php echo htmlspecialchars($quantity); ?></p>
          </div>
          <div class="card-footer text-center">
          </div>
          </div>


          <div class="card mt-5 bg-dark text-white">
            <div class="card-header text-center">
              <h4>Payment</h4>
            </div>
            <div class="card-body">
              <p class="card-text"><strong>Harga        : </strong> <?php echo htmlspecialchars($harga); ?></p>
            </div>
            <div class="card-footer text-center">
            </div>
          </div>      
          <br><br>
          <form method="post" action="result.php">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Enter Payment Here</label>
              <input type="number" name="payspays" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
            </div>

      
            <div class="d-grid gap-2">

              <button type="submit" class="btn btn-primary">Submit</button>
              <button type="reset" class="btn btn-danger">Reset</button>
             
            </div>
          </form>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>