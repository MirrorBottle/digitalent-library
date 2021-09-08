<?php include('../../layouts/header.php') ?>
<?php 
  use Carbon\Carbon;
  $lends = all("lends");
?>
<div id="main-container" class="container-fluid">
  <div class="row">
    <?php include("../../layouts/sidebar.php") ?>
    <main role="main" class="col-md-9 offset-md-3 offset-lg-2 ml-sm-auto col-lg-10 px-4">
      <?php include("../../layouts/flash.php") ?>
      <div class="card mt-4">
        <div class="card-header d-flex align-items-center justify-content-between">
          <h4>Daftar Peminjaman</h4>
          <div>
            <a href="./export.php?type=lend" target="_blank" class="btn btn-success">
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
          <table id="datatable" class="table table-striped table-bordered ">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">ID</th>
                <th scope="col">Tanggal Peminjaman</th>
                <th scope="col">Nama Peminjam</th>
                <th scope="col">Buku Pinjaman</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php $i = 1; ?>
                <?php foreach($lends as $lend): ?>
                <?php $member = find("members", $lend['member_id']) ?>
                <?php $books = lend_books($lend['id']) ?>
                <tr>
                  <th scope="row"><?= $i ?></th>
                  <td><?= $lend['number'] ?></td>
                  <td><?= format_date($lend['lend_date']) ?></td>
                  <td><?= $member['name'] ?></td>
                  <td>
                    <?php foreach($books as $index => $book): ?>
                      <?php if($index <= 2): ?>
                        <span class="badge bg-primary me-2 mt-1"><?= $book['title'] ?></span>
                      <?php endif; ?>
                    <?php endforeach; ?>
                    <?php if(count($books) > 3): ?>
                      <span class="badge bg-primary me-2 mt-1">...</span>
                    <?php endif; ?>
                  </td>
                  <td>
                  <a href="./show.php?id=<?= $lend['id'] ?>" class="btn btn-primary me-1">Detail</a>
                    <a href="./edit.php?id=<?= $lend['id'] ?>" class="btn btn-warning me-1">Ubah</a>
                    <a href="./delete.php?id=<?= $lend['id'] ?>" data-message="Data anggota akan dihapus!" class="btn btn-danger delete-btn">Hapus</a>
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