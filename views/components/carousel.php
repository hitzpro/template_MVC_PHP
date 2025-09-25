<!-- views/components/carousel.php -->
<?php
// pastikan ada $id dan $images yang dikirim
$carouselId = $id ?? 'carouselExample';
?>

<div id="<?= $carouselId ?>" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <?php foreach ($images as $index => $img): ?>
      <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
        <img src="<?= $img ?>" class="d-block w-100" alt="carousel-<?= $index ?>">
      </div>
    <?php endforeach; ?>
  </div>

  <button class="carousel-control-prev" type="button" data-bs-target="#<?= $carouselId ?>" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#<?= $carouselId ?>" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>
