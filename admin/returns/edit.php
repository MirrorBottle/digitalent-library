<?php include('../../layouts/header.php') ?>

<?php
  $id = $_GET["id"];
  $lend = find("lends", $_GET["id"]);
  $member = query("SELECT members.name FROM lends JOIN members ON lends.member_id = members.id WHERE lends.id = $id LIMIT 1")[0];
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
            <input type="hidden" name="id" class="form-control" id="id" value="<?= $lend['id'] ?>">
            <div class="mb-3">
              <label for="id" class="form-label">ID Peminjaman</label>
              <input readonly required type="text" name="return_date" class="form-control" id="return_date" value="<?= $lend['number'] ?> - - <?= $member['name'] ?>">
            </div>
            <div class="mb-3">
              <label for="return_date" class="form-label">Tanggal Kembali</label>
              <input required type="date" name="return_date" class="form-control" id="return_date" value="<?= $lend['return_date'] ?>">
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