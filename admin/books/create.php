<?php include('../../layouts/header.php') ?>
<div id="main-container" class="container-fluid">
  <div class="row">
    <?php include("../../layouts/sidebar.php") ?>
    <main role="main" class="col-md-9 offset-md-3 offset-lg-2 ml-sm-auto col-lg-10 px-4">
      <div class="card mt-4">
        <form action="store.php" method="POST" enctype="multipart/form-data">
          <div class="card-header d-flex align-items-center justify-content-between">
            <h4>Tambah Buku</h4>
            <a href="./index.php" class="btn btn-danger">
            <i class="lni lni-arrow-left-circle me-2"></i>
              Kembali
            </a>
          </div>
          <div class="card-body">
            <div class="mb-3">
              <label for="title" class="form-label">Judul</label>
              <input required type="text" name="title" class="form-control" id="title">
            </div>
            <div class="mb-3">
              <label for="author" class="form-label">Nama Penulis</label>
              <input required type="text" name="author" class="form-control" id="author">
            </div>
            <div class="mb-3">
              <label for="pages" class="form-label">Total Halaman</label>
              <input required type="number" name="pages" class="form-control" id="pages">
            </div>
            <div class="mb-3">
              <label for="category" class="form-label">Kategori</label>
              <select required name="category" id="category" class="form-select" aria-label="Default select example">
                <option value="Novel" selected>Novel</option>
                <option value="Mata Kuliah">Mata Kuliah</option>
                <option value="Biografi">Biografi</option>
                <option value="Ensiklopedia">Ensiklopedia</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="plot" class="form-label">Plot</label>
              <textarea required name="plot" name="plot" class="form-control" cols="30" rows="3" id="plot"></textarea>
            </div>
            <div class="mb-3">
              <label for="cover" class="form-label">Cover Image</label>
              <input required class="form-control" name="cover" accept="image/*" type="file" id="cover">
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