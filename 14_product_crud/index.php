<?php

$pdo = new PDO('mysql:host=localhost;port:3306;dbname:products_crud', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$statement = $pdo->prepare('SELECT * FROM products_crud.products ORDER BY create_date DESC');
$statement->execute();
$products = $statement->fetchAll(PDO::FETCH_ASSOC);

?>


<!doctype html>
<html lang="fr">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <title>Products CRUD</title>
</head>

<body>
  <h1>Products CRUD</h1>

  <p>
    <a href="create.php" class="btn btn-success">Create Product</a>
  </p>

  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Image</th>
        <th scope="col">Tilte</th>
        <th scope="col">Price</th>
        <th scope="col">Create date</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($products as $i => $product) { ?>
        <tr>
          <td scope="row"><?php echo $i++ ?></td>
          <td>
            <img src="<?php echo $product['image'] ?>" alt="" class="thumb-image">
          </td>
          <td><?php echo $product['title'] ?></td>
          <td><?php echo $product['price'] ?></td>
          <td><?php echo $product['create_date'] ?></td>
          <td>
            <a href="update.php?id=<?php echo $product['id']?>" type="button" class="btn btn-sm btn-outline-primary">Edit</>
            <form method="post" action="delete.php">
              <input type="hidden" name="id" value="<?php echo $product['id']?>">
              <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
            </form>
          </td>
        </tr>
      <?php } ?>
    </tbody>
  </table>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>