<?php include('../../layouts/header.php') ?>
<?php
  $lend = find("lends", $_GET["id"]);
  $books = query("SELECT id, title, author FROM books WHERE is_borrowed = 0 ORDER BY id DESC");
  $lend_books = lend_books($lend['id']);
  $members = select('members', ['id', 'member_number', 'name']);
?>
<div id="main-container" class="container-fluid">
  <div class="row">
    <?php include("../../layouts/sidebar.php") ?>
    <main role="main" class="col-md-9 offset-md-3 offset-lg-2 ml-sm-auto col-lg-10 px-4">
      <div class="card mt-4">
        <form action="update.php" method="POST" enctype="multipart/form-data">
          <div class="card-header d-flex align-items-center justify-content-between">
            <h4>Ubah Peminjaman</h4>
            <a href="./index.php" class="btn btn-danger">
            <i class="lni lni-arrow-left-circle me-2"></i>
              Kembali
            </a>
          </div>
          <div class="card-body">
            <input value="<?= $lend['id'] ?>" required type="hidden" name="id" class="form-control" id="id">
            <div class="mb-3">
              <label for="number" class="form-label">ID Peminjaman</label>
              <input readonly value="<?= $lend['number'] ?>" required type="text" name="number" class="form-control" id="number">
            </div>
            <div class="mb-3">
              <label for="member_id" class="form-label">Anggota</label>
              <select required name="member_id" id="member_id" class="form-select select2" aria-label="Default select example">
                <?php foreach($members as $member): ?>
                  <option <?= $member['id'] == $lend['member_id'] ? 'selected' : '' ?> value="<?= $member['id'] ?>">
                    <?= $member['member_number'] ?> - <?= $member['name'] ?>
                  </option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="mb-3">
              <label for="books" class="form-label">Buku Pinjaman</label>
              <select required name="books[]" id="books" class="form-select select2" aria-label="Default select example" multiple>
                <?php foreach($lend_books as $book): ?>
                  <option selected value="<?= $book['id'] ?>">
                    <?= $book['author'] ?> - <?= $book['title'] ?>
                  </option>
                <?php endforeach; ?>
                <?php foreach($books as $book): ?>
                  <option value="<?= $book['id'] ?>">
                    <?= $book['author'] ?> - <?= $book['title'] ?>
                  </option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="mb-3">
              <label for="lend_date" class="form-label">Tanggal Peminjaman</label>
              <input required type="date" name="lend_date" class="form-control" id="lend_date" value="<?= $lend['lend_date']; ?>">
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