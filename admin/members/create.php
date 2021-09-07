<?php include('../../layouts/header.php') ?>
<div id="main-container" class="container-fluid">
  <div class="row">
    <?php include("../../layouts/sidebar.php") ?>
    <main role="main" class="col-md-9 offset-md-3 offset-lg-2 ml-sm-auto col-lg-10 px-4">
      <div class="card mt-4">
        <form>
          <div class="card-header d-flex align-items-center justify-content-between">
            <h4>Tambah Anggota</h4>
            <a href="./index.php" class="btn btn-danger">
            <i class="lni lni-arrow-left-circle me-2"></i>
              Kembali
            </a>
          </div>
          <div class="card-body">
            <div class="mb-3">
              <label for="name" class="form-label">Nama</label>
              <input type="text" name="name" class="form-control" id="name">
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" name="email" class="form-control" id="email">
            </div>
            <div class="mb-3">
              <label for="phone" class="form-label">No. HP</label>
              <input type="tel" name="phone" class="form-control" id="phone">
            </div>
          </div>
          <div class="card-footer d-flex align-items-center justify-content-end flex-row pt-2">
            <button type="reset" class="btn btn-info me-3">
              <i class="lni lni-reload me-2"></i>
              Reset
            </button>
            <button type="submit" class="btn btn-primary">
              <i class="lni lni-plus me-2"></i>
              Tambah
            </button>
          </div>
        </form>
      </div>
    </main>
  </div>
</div>
<?php include("../../layouts/footer.php") ?>