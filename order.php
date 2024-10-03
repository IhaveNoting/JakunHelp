<?php
if(isset($_GET['products'])){
    $selected_product = $_GET['products'];
}

else{
    $selected_product ="";
}?>



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
                <a class="nav-link active" aria-current="page" href="#">Order</a>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown link
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="index.php">Catalogue</a></li>
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
        <div class="col-6">
        <div class="h4 pb-4 mb-4 text-black border-bottom border-black">
            <center><br><br>Order Form</center>
        </div>
          <form method="post" action="payment.php">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Full Name</label>
              <input type="text" name="name_user" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Email Address</label>
              <input type="email" name="email_user" class="form-control" id="exampleInputEmail" required>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Phone Number</label>
              <input type="number" name="pn_user" class="form-control" id="exampleInputPN" required>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Address</label>
              <textarea type="text" name="add_user" class="form-control" id="exampleInputAdd" required></textarea>
            </div>
            <div class="h4 pb-4 mb-3 text-black border-bottom border-black"></div>

            <div class="input-group mb-3">
            <label class="input-group">Product</label>
            <select class="form-select" id="products" name="products" required>
              <option> --SELECT PRODUCT--</option>
              <option value="Cloud" <?php if($selected_product === "cloud")echo 'selected'; ?> >Cloud</option>
              <option value="Madara" <?php if($selected_product === "madara")echo 'selected'; ?> >Madara</option>
              <option value="Guts" <?php if($selected_product === "guts")echo 'selected'; ?> >Guts</option>
              <option value="Kira" <?php if($selected_product === "kira")echo 'selected'; ?> >Kira</option>
              <option value="Obito" <?php if($selected_product === "obito")echo 'selected'; ?> >Obito</option>
              <option value="Dio" <?php if($selected_product === "dio")echo 'selected'; ?> >Dio</option>


            </select>
            </div>
            <div class="mb-3 pb-4">
              <label for="exampleInputQuan" class="form-label">Quantity</label>
              <input type="number" name="Quan_order" class="form-control" id="examplequan" required>
            </div>
            <div class="d-grid gap-2">
              <button type="submit" class="btn btn-primary">Submit</button>
              <button type="reset" class="btn btn-danger">Reset</button>
            </div>
          </form>




        </div>
      </div>
    
   

    </div>

    <br>
    <br>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
      <br>
    </nav>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>