<?php 
require_once 'db_config.php';
$id = $_GET["id"];



$sql = "SELECT * FROM `product` WHERE `id` = $id";
$result = mysqli_query($conn,$sql);
$rows = mysqli_fetch_assoc($result);


mysqli_close($conn);



?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS v5.2.1 -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT"
      crossorigin="anonymous"
    />
  </head>

  <body>
    <header>
      <!-- place navbar here -->
    </header>
    <main>
      <div class="container border border-dark border-5 my-5 p-5">
        <h1 class="text-center">Edit User</h1>

        <form action="update.php" method="post">
          <div class="mb-3">
            <label class="visually-hidden" for="inputName">id</label>
            <input
              type="hidden"
              class="form-control"
              name="id"
              id="inputName"
              value='<?php echo "{$rows['id']}"; ?>'
              placeholder=""
            />
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Name</label>
            <input
              type="text"
              class="form-control"
              name="name"
              id=""
              value='<?php echo "{$rows['name']}"?>'
              aria-describedby="helpId"
              placeholder=""
            />
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Description</label>
            <input
              type="text"
              class="form-control"
              name="descrip"
              id=""
              value='<?php echo "{$rows['descrip']}"?>'
              aria-describedby="emailHelpId"
              placeholder="abc@mail.com"
            />
            <small id="emailHelpId" class="form-text text-muted"
              >Help text</small
            >
          </div>
          <div class="mb-3">
            <label for="" class="form-label">mrp</label>
            <input
              type="text"
              class="form-control"
              name="mrp"
              id=""
              value='<?php echo "{$rows['mrp']}"?>'
              aria-describedby="helpId"
              placeholder=""
            />
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Selling price</label>
            <input
              type="text"
              class="form-control"
              name="sp"
              id=""
              value='<?php echo "{$rows['sp']}"?>'
              aria-describedby="helpId"
              placeholder=""
            />
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Image</label>
            <input
              type="file"
              class="form-control"
              name="image"
              id=""
              value='<?php echo "{$rows['image']}"?>'
              aria-describedby="helpId"
              placeholder=""
            />
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </main>
    <footer>
      <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
      integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
      crossorigin="anonymous"
    ></script>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
      integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>