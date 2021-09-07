<?php include('../../layouts/header.php') ?>
<?php
  $member = findById("members", $_GET["id"]);
?>
<div id="main-container" class="container-fluid">
  <div class="row">
    <?php include("../../layouts/sidebar.php") ?>
    <main role="main" class="col-md-9 offset-md-3 offset-lg-2 ml-sm-auto col-lg-10 px-4">
      <div class="card mt-4">
        <form action="update.php" method="POST" enctype="multipart/form-data">
          <div class="card-header d-flex align-items-center justify-content-between">
            <h4>Ubah Anggota</h4>
            <a href="./index.php" class="btn btn-danger">
            <i class="lni lni-arrow-left-circle me-2"></i>
              Kembali
            </a>
          </div>
          <div class="card-body">
          <input value="<?= $member['id'] ?>" required type="hidden" name="id" class="form-control" id="id">
            <div class="mb-3">
              <label for="name" class="form-label">Nama</label>
              <input value="<?= $member['name'] ?>" required type="text" name="name" class="form-control" id="name">
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input value="<?= $member['email'] ?>" required type="email" name="email" class="form-control" id="email">
            </div>
            <div class="mb-3">
              <label for="phone" class="form-label">No. HP</label>
              <input value="<?= $member['phone'] ?>" required type="tel" name="phone" class="form-control" id="phone">
            </div>
            <div class="mb-3">
              <label for="gender" class="form-labe d-block mb-1">Jenis Kelamin</label>
              <div div class="form-check form-check-inline">
                <input <?= $member['gender'] == 0 ? 'checked' : '' ?> class="form-check-input" required type="radio" name="gender" id="man" value="0">
                <label class="form-check-label" for="man">Laki-laki</label>
              </div>
              <div class="form-check form-check-inline">
                <input <?= $member['gender'] == 1 ? 'checked' : '' ?> class="form-check-input" required type="radio" name="gender" id="female" value="1">
                <label class="form-check-label" for="female">Perempuan</label>
              </div>
            </div>
          </div>
          <div class="card-footer d-flex align-items-center justify-content-end flex-row pt-2">
            <button type="submit" class="btn btn-primary">
              <i class="lni lni-pencil-alt me-2"></i>
              Ubah
            </button>
          </div>
        </form>
      </div>
    </main>
  </div>
</div>
<?php include("../../layouts/footer.php") ?>