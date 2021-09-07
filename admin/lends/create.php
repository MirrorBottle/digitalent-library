<?php include('../../layouts/header.php') ?>

<?php
  $last_lend = last("lends");
  $curr_id  = $last_lend ? str_pad(intval(explode("LP", $last_lend['number'])[1]) + 1, 4, 0, STR_PAD_LEFT) : '0001';
  $books = query("SELECT id, title, author FROM books WHERE is_borrowed = 0 ORDER BY id DESC");
  $members = select('members', ['id', 'member_number', 'name']);
?>
<div id="main-container" class="container-fluid">
  <div class="row">
    <?php include("../../layouts/sidebar.php") ?>
    <main role="main" class="col-md-9 offset-md-3 offset-lg-2 ml-sm-auto col-lg-10 px-4">
      <div class="card mt-4">
        <form action="store.php" method="POST" enctype="multipart/form-data">
          <div class="card-header d-flex align-items-center justify-content-between">
            <h4>Tambah Anggota</h4>
            <a href="./index.php" class="btn btn-danger">
            <i class="lni lni-arrow-left-circle me-2"></i>
              Kembali
            </a>
          </div>
          <div class="card-body">
            <div class="mb-3">
              <label for="number" class="form-label">ID Peminjaman</label>
              <input readonly value="<?= "LP$curr_id" ?>" required type="text" name="number" class="form-control" id="number">
            </div>
            <div class="mb-3">
              <label for="member_id" class="form-label">Anggota</label>
              <select required name="member_id" id="member_id" class="form-select select2" aria-label="Default select example">
                <?php foreach($members as $member): ?>
                  <option value="<?= $member['id'] ?>">
                    <?= $member['member_number'] ?> - <?= $member['name'] ?>
                  </option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="mb-3">
              <label for="books" class="form-label">Buku Pinjaman</label>
              <select required name="books[]" id="books" class="form-select select2" aria-label="Default select example" multiple>
                <?php foreach($books as $book): ?>
                  <option value="<?= $book['id'] ?>">
                    <?= $book['author'] ?> - <?= $book['title'] ?>
                  </option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="mb-3">
              <label for="lend_date" class="form-label">Tanggal Peminjaman</label>
              <input required type="date" name="lend_date" class="form-control" id="lend_date" value="<?= date('Y-m-d'); ?>">
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