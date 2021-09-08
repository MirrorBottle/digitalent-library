<?php include('../../layouts/header.php') ?>
<?php 
  $members = all("members");
?>
<div id="main-container" class="container-fluid">
  <div class="row">
    <?php include("../../layouts/sidebar.php") ?>
    <main role="main" class="col-md-9 offset-md-3 offset-lg-2 ml-sm-auto col-lg-10 px-4">
      <?php include("../../layouts/flash.php") ?>
      <div class="card mt-4">
        <div class="card-header d-flex align-items-center justify-content-between">
          <h4>Daftar Anggota</h4>
          <div>
            <a href="./export.php" target="_blank" class="btn btn-success">
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
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php $i = 1; ?>
                <?php foreach($members as $member): ?>
                <tr>
                  <th scope="row"><?= $i ?></th>
                  <td><?= $member['member_number'] ?></td>
                  <td><?= $member['name'] ?></td>
                  <td><?= $member['email'] ?></td>
                  <td><?= $member['gender'] == 1 ? 'Perempuan' : 'Laki-laki' ?> </td>
                  <td>
                    <a href="./print.php?id=<?= $member['id'] ?>" target="_blank" class="btn btn-primary me-1">Cetak</a>
                    <a href="./edit.php?id=<?= $member['id'] ?>" class="btn btn-warning me-1">Ubah</a>
                    <a href="./delete.php?id=<?= $member['id'] ?>" data-message="Data anggota akan dihapus!" class="btn btn-danger delete-btn">Hapus</a>
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