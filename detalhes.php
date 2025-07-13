<?php
require 'mock/produtos.php'; 

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

$produto = null;
foreach ($cards as $item) {
  if ($item['id'] === $id) {
    $produto = $item;
    break;
  }
}

if (!$produto) {
  echo "<div class='container py-5 text-center'><h2>Produto não encontrado</h2></div>";
  exit;
}
?>

<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $produto['id'];?></title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <?php include 'components/header.php'; ?>

  <div class="container py-5">
    <div class="row align-items-center">
      <div class="col-md-6 mb-4 mb-md-0">
        <img src="<?php echo $produto['image'];?>" class="img-fluid rounded shadow" alt="Foto do salão">
      </div>
      <div class="col-md-6">
        <h2 class="mb-4"><?php echo $produto['title'];?></h2>
        <p class="fs-5">
          <?php echo $produto['description'];?>
        </p>
        <p class="fs-5">
          <?php echo $produto['price'];?>
        </p>
      </div>
    </div>
  </div>

  <?php include 'components/footer.php'; ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
    crossorigin="anonymous"></script>

</body>
</html>
