<nav class="navbar navbar-dark bg-primary fixed-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-sm-3 col-md-2 p-3 d-flex align-items-center">
    <i class="lni lni-book fs-2 brand-icon"></i>
    <p class="ms-2 mb-0">Perpustakaan</p>
    <button id="navbar-toggle-btn" type="button" class="btn btn-primary ms-2">
      <i class="lni lni-menu"></i>
    </button>
  </a>
  <ul class="navbar-nav px-3 d-flex flex-row">
    <li class="nav-item text-nowrap">
      <a class="nav-link text-white" href="/digitalent-library/admin/profile.php"><?= $_SESSION['username']; ?></a>
    </li>
    <li class="nav-item text-nowrap ms-4">
      <a class="nav-link text-danger" href="/digitalent-library/admin/logout.php">Log out</a>
    </li>
  </ul>
</nav>