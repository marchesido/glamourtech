<div class="col">
  <div class="card h-100">
    <img src="<?= $image ?>" class="card-img-top" alt="<?= htmlspecialchars($title) ?>" style="object-fit: fill;">
    <div class="card-body">
      <h5 class="card-title"><?= htmlspecialchars($title) ?></h5>
      <p class="card-text"><?= htmlspecialchars($description) ?></p>
      <p class="card-text"><?= htmlspecialchars($price) ?></p>
      <a href="detalhes.php?id=<?= $id ?>" class="btn btn-primary">Ver mais</a>
    </div>
  </div>
</div>
