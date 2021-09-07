<?php include('../../layouts/header.php') ?>

<?php
  $lends = query("SELECT lends.id, lends.number, members.name FROM lends JOIN members ON lends.member_id = members.id WHERE lends.return_date IS NULL ORDER BY lends.id DESC");
?>
<div id="main-container" class="container-fluid">
  <div class="row">
    <?php include("../../layouts/sidebar.php") ?>
    <main role="main" class="col-md-9 offset-md-3 offset-lg-2 ml-sm-auto col-lg-10 px-4">
      <div class="card mt-4">
        <form action="store.php" method="POST" enctype="multipart/form-data">
          <div class="card-header d-flex align-items-center justify-content-between">
            <h4>Tambah Pengembalian</h4>
            <a href="./index.php" class="btn btn-danger">
            <i class="lni lni-arrow-left-circle me-2"></i>
              Kembali
            </a>
          </div>
          <div class="card-body">
            <div class="mb-3">
              <label for="id" class="form-label">Peminjaman</label>
              <select required name="id" id="id" class="form-select select2" aria-label="Default select example">
                <?php foreach($lends as $lend): ?>
                  <option value="<?= $lend['id'] ?>">
                    <?= $lend['number'] ?> - <?= $lend['name'] ?>
                  </option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="mb-3">
              <label for="return_date" class="form-label">Tanggal Kembali</label>
              <input required type="date" name="return_date" class="form-control" id="return_date" value="<?= date('Y-m-d'); ?>">
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