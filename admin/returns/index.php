<?php include('../../layouts/header.php') ?>
<?php
  use Carbon\Carbon;
  $returns = query("SELECT * FROM lends WHERE return_date IS NOT NULL ORDER BY id DESC");
?>
<div id="main-container" class="container-fluid">
  <div class="row">
    <?php include("../../layouts/sidebar.php") ?>
    <main role="main" class="col-md-9 offset-md-3 offset-lg-2 ml-sm-auto col-lg-10 px-4">
      <?php include("../../layouts/flash.php") ?>
      <div class="card mt-4">
        <div class="card-header d-flex align-items-center justify-content-between">
          <h4>Daftar Pengembalian</h4>
          <div>
            <a href="../lends/export.php?type=return" target="_blank" class="btn btn-success">
              <i class="lni lni-download me-2"></i>
              Export
            </a>
            <a href="./create.php" class="btn btn-primary">
              <i class="lni lni-plus me-2"></i>
              Tambah
            </a>
          </div>
        </div>
        <div class="card-body">
          <table id="datatable" class="table table-striped table-bordered datatable">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">ID</th>
                <th scope="col">Nama Peminjam</th>
                <th scope="col">Tanggal Peminjaman</th>
                <th scope="col">Tanggal Pengembalian</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php $i = 1; ?>
                <?php foreach($returns as $return): ?>
                  <?php $member = find("members", $return['member_id']) ?>
                  <tr>
                    <th scope="row"><?= $i ?></th>
                    <td><?= $return['number'] ?></td>
                    <td><?= $member['name'] ?></td>
                    <td><?= format_date($return['lend_date']) ?></td>
                    <td><?= format_date($return['return_date']) ?></td>
                    <td>
                      <a href="./show.php?id=<?= $return['id'] ?>" class="btn btn-primary me-1">Detail</a>
                      <a href="./edit.php?id=<?= $return['id'] ?>" class="btn btn-warning me-1">Ubah</a>
                      <a href="./delete.php?id=<?= $return['id'] ?>" data-message="Data anggota akan dihapus!" class="btn btn-danger delete-btn">Hapus</a>
                    </td>
                  </tr>
                  <?php $i++; ?>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </main>
  </div>
</div>
<?php include("../../layouts/footer.php") ?>