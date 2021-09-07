<?php include('../layouts/header.php') ?>
<div id="main-container" class="container-fluid">
  <div class="row">
    <?php include("../layouts/sidebar.php") ?>
    <main role="main" class="col-md-9 offset-md-3 offset-lg-2 ml-sm-auto col-lg-10 px-4">
      <?php include("../layouts/flash.php") ?>
      <div class="card mt-4">
        <form>
          <div class="card-header d-flex align-items-center justify-content-between">
            <h4>Ubah Password</h4>
          </div>
          <div class="card-body">
            <div class="mb-3">
              <label for="old_password" class="form-label">Password Lama</label>
              <input type="password" name="old_password" class="form-control" id="old_password">
            </div>
            <div class="mb-3">
              <label for="new_password" class="form-label">Password Baru</label>
              <input type="password" name="new_password" class="form-control" id="new_password">
            </div>
            <div class="mb-3">
              <label for="confirmation_password" class="form-label">Konfirmasi Password Baru</label>
              <input type="password" name="confirmation_password" class="form-control" id="confirmation_password">
            </div>
          </div>
          <div class="card-footer d-flex align-items-center justify-content-end flex-row pt-2">
            <button type="submit" class="btn btn-primary">
              <i class="lni lni-pencil me-2"></i>
              Ubah
            </button>
          </div>
        </form>
      </div>
    </main>
  </div>
</div>
<?php include("../layouts/footer.php") ?>