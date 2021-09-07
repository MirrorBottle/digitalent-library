<?php include('../../layouts/header.php') ?>
<?php
  $book = find("books", $_GET["id"]);
?>
<div id="main-container" class="container-fluid">
  <div class="row">
    <?php include("../../layouts/sidebar.php") ?>
    <main role="main" class="col-md-9 offset-md-3 offset-lg-2 ml-sm-auto col-lg-10 px-4">
      <div class="card mt-4">
        <form action="update.php" method="POST" enctype="multipart/form-data">
          <div class="card-header d-flex align-items-center justify-content-between">
            <h4>Ubah Buku</h4>
            <a href="./index.php" class="btn btn-danger">
            <i class="lni lni-arrow-left-circle me-2"></i>
              Kembali
            </a>
          </div>
          <div class="card-body">
            <input value="<?= $book['id'] ?>" required type="hidden" name="id" class="form-control" id="id">
            <input value="<?= $book['cover'] ?>" required type="hidden" name="old_cover" class="form-control" id="id">
            <div class="mb-3">
              <div div class="form-check form-check-inline">
                <input <?= $book['is_borrowed'] == 1 ? 'checked' : '' ?> class="form-check-input" type="radio" name="is_borrowed" id="is_borrowed" value="1">
                <label class="form-check-label" for="is_borrowed">Dipinjam</label>
              </div>
              <div class="form-check form-check-inline">
                <input <?= $book['is_borrowed'] == 0 ? 'checked' : '' ?> class="form-check-input" type="radio" name="is_borrowed" id="is_not_borrowed" value="0">
                <label class="form-check-label" for="is_not_borrowed">Tidak Dipinjam</label>
              </div>
            </div>
            <div class="mb-3">
              <label for="title" class="form-label">Judul</label>
              <input value="<?= $book['title'] ?>" required type="text" name="title" class="form-control" id="title">
            </div>
            <div class="mb-3">
              <label for="author" class="form-label">Nama Penulis</label>
              <input value="<?= $book['author'] ?>" required type="text" name="author" class="form-control" id="author">
            </div>
            <div class="mb-3">
              <label for="pages" class="form-label">Total Halaman</label>
              <input value="<?= $book['pages'] ?>" required type="number" name="pages" class="form-control" id="pages">
            </div>
            <div class="mb-3">
              <label for="category" class="form-label">Kategori</label>
              <select required name="category" id="category" class="form-select" aria-label="Default select example">
                <option <?= $book['category'] == 'Novel' ? 'selected': '' ?> value="Novel">Novel</option>
                <option <?= $book['category'] == 'Mata Kuliah' ? 'selected': '' ?> value="Mata Kuliah">Mata Kuliah</option>
                <option <?= $book['category'] == 'Biografi' ? 'selected': '' ?> value="Biografi">Biografi</option>
                <option <?= $book['category'] == 'Ensiklopedia' ? 'selected': '' ?> value="Ensiklopedia">Ensiklopedia</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="plot" class="form-label">Plot</label>
              <textarea required name="plot" name="plot" class="form-control" cols="30" rows="3" id="plot"><?= $book['plot'] ?></textarea>
            </div>
            <div class="mb-3">
              <label for="cover" class="form-label">Cover Image</label>
              <input required class="form-control form-control-image-preview" data-target="#cover-image-preview" name="cover" accept="image/*" type="file" id="cover">
            </div>
            <img class="img-fluid img-thumbnail" style="height: 150px;" id="cover-image-preview" src="/digitalent-library/img/<?= $book['cover'] ?>" alt="your image" />
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