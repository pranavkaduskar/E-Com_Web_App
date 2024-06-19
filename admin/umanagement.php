

<!-- /*
* Bootstrap 5
* Template Name: Furni
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="favicon.png"> 

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />

		<!-- Bootstrap CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
		<link href="css/tiny-slider.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<title>Eye-Ware web store  </title>
		<!-- self -->
		<link rel="stylesheet" href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css">




	</head>

	<body>


		<!-- Start Header/Navigation -->
		<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

			<div class="container">
				<a class="navbar-brand" href="index.html"><img src="blasian_namelog.jpg" height="80" width="200" class="img-fluid rounded-top" alt=""></a>

				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarsFurni">
					<ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
                        <li >
							<a class="nav-link" href="index.html">Home</a>
						</li>
						<li class="nav-item active"><a class="nav-link" href="umanagement.php">User Management</a></li>
						<li><a class="nav-link" href="querymange.php">Querys Management</a></li>
						<li><a class="nav-link" href="addproduct.html">Add Product</a></li>
						<li><a class="nav-link" href="pmanagement.php">Product Management</a></li>
					</ul>

					<ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
						<li><a class="nav-link" href="login.html"><img src="images/user.svg"></a></li>
						<li><a class="nav-link" href="logout.html"><img src="bimg/logout.svg"></a></li>

					</ul>
				</div>
			</div>
				
		</nav>
		<!-- End Header/Navigation -->
  <main>




  <?php


session_start();

if (!isset($_SESSION['aname'])) {
    header("Location: login.html");
    
}
require_once 'db_config.php';

$sql = "SELECT * FROM `users` ";
$result = mysqli_query($conn,$sql);
if (mysqli_num_rows($result)>0) {
    # code... 
    echo "
    <div class='table-responsive'>
        <table class='table table-primary'>
            <thead>
                <tr>
                    <th scope='col'>ID</th>
                    <th scope='col'>Name</th>
                    <th scope='col'>Email</th>
                    <th scope='col'>User Name</th>
                    <th scope='col'>Password</th>
                    <th scope='col'>Action</th>
                </tr>
            </thead>
            <tbody>";
    while ($rows = mysqli_fetch_assoc($result) ) {
        # code...
        echo "
        <tr class=''>
            <td scope='row'>{$rows['id']}</td>
            <td>{$rows['name']}</td>
            <td>{$rows['email']}</td>
            <td>{$rows['username']}</td>
            <td>{$rows['password']}</td>
            <td>
                <a name='' id='' class='btn btn-warning' href='edituser.php?id={$rows['id']}' role='button'>Edit</a>
                <a name='' id='' class='btn btn-danger' href='udelete.php?id={$rows['id']}' role='button'>Delete</a>
            </td>
            
        </tr>";
    }
    echo "
        
    </tbody>
</table>
</div>
";
} else {
    # code...
    echo "0 Recored Found";
}
mysqli_close($conn);
?>




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
