<!-- views/components/navbar.php -->
<?php
// Pastikan $routes sudah di-include di index.php sebelum include navbar
// Tentukan halaman aktif
$currentPage = $_GET['page'] ?? 'beranda';
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php?page=beranda"><i class="fa fa-leaf"></i> MyApp</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <?php foreach($routes as $routeName => $controllerPath): ?>
          <li class="nav-item">
            <a class="nav-link <?= ($currentPage === $routeName) ? 'active' : '' ?>"
               href="index.php?page=<?= $routeName ?>">
               <i class="fa fa-circle"></i> <?= ucfirst($routeName) ?>
            </a>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</nav>
