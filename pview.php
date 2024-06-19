<?php 

$id = $_GET["id"];

require_once 'db_config.php';



$sql = "SELECT * FROM `product` WHERE `id` = $id";
$result = mysqli_query($conn,$sql);
$rows = mysqli_fetch_assoc($result);


mysqli_close($conn);



?>

<!doctype html>
<html lang="en">

<head>
  <title>Product View</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
  <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
          <div class="container">
            <a class="navbar-brand" href="#">Management</a>
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="home.html" aria-current="page">Home<span class="visually-hidden">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="login.html" aria-current="page">Login<span class="visually-hidden">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="reg.html" aria-current="page">Registration<span class="visually-hidden">(current)</span></a>
                    </li>
                    
                </ul>
                <form class="d-flex my-2 my-lg-0">
                    <input class="form-control me-sm-2" type="text" placeholder="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
      </div>
    </nav>
  </header>
  <main>
<div class="container p-2  g-2">
    <div class="row justify-content-center align-items-center g-2">
        <img src="images4.jpeg" class=" rounded-top" height='400' width='200' alt="">
        <?php echo "
    <h4 class='card-title'>{$rows['name']}</h4>
    <p class='card-text'>{$rows['descrip']}</p>
    <p class='card-text'>MRP: {$rows['mrp']} OFfer: {$rows['sp']}</p>
    <center><a name='' id='' class='btn btn-primary' href='buy.php?id={$rows['id']}' role='button'>Buy Now</a>
    <a name='' id='' class='btn btn-primary' href='#' role='button'>Add to card</a></center>";
?>
    </div>

</div>
  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>