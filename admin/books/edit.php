<?php include('../../layouts/header.php') ?>
<div id="main-container" class="container-fluid">
  <div class="row">
    <?php include("../../layouts/sidebar.php") ?>
    <main role="main" class="col-md-9 offset-md-3 offset-lg-2 ml-sm-auto col-lg-10 px-4">
      <div class="card mt-4">
        <form>
          <div class="card-header d-flex align-items-center justify-content-between">
            <h4>Ubah Buku</h4>
            <a href="./index.php" class="btn btn-danger">
            <i class="lni lni-arrow-left-circle me-2"></i>
              Kembali
            </a>
          </div>
          <div class="card-body">
            <div class="mb-3">
              <label for="title" class="form-label">Judul</label>
              <input type="text" name="title" class="form-control" id="title">
            </div>
            <div class="mb-3">
              <label for="author" class="form-label">Nama Penulis</label>
              <input type="text" name="author" class="form-control" id="author">
            </div>
            <div class="mb-3">
              <label for="title" class="form-label">Kategori</label>
              <select class="form-select" aria-label="Default select example">
                <option selected>Novel</option>
                <option value="1">Biografi</option>
                <option value="2">Referensi</option>
                <option value="3">Pelajaran</option>
              </select>
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