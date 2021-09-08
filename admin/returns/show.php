<?php include('../../layouts/header.php') ?>

<?php
  $id = $_GET["id"];
  $lend = find("lends", $_GET["id"]);
  $member = find("members", $lend['member_id']);
  $books = lend_books($lend['id']);

  if(!$lend['return_date']) {
    header("location:index.php");
  }
?>
<div id="main-container" class="container-fluid">
  <div class="row">
    <?php include("../../layouts/sidebar.php") ?>
    <main role="main" class="col-md-9 offset-md-3 offset-lg-2 ml-sm-auto col-lg-10 px-4">
      <div class="card mt-4">
        <div class="card-header d-flex align-items-center justify-content-between">
          <h4>Pengembalian #<?= $lend['number'] ?></h4>
          <button onclick="history.back(-1)" class="btn btn-danger">
            <i class="lni lni-arrow-left-circle me-2"></i>
            Kembali
          </button>
        </div>
        <div class="card-body">
          <table class="table table-striped table-bordered datatable">
            <tr>
              <th width="250">Anggota Peminjam</th>
              <td><?= $member['name'] ?> <b>(#<?= $member['member_number'] ?>)</b></td>
            </tr>
            <tr>
              <th width="250">Tanggal Peminjaman</th>
              <td><?= format_date($lend['lend_date']) ?></td>
            </tr>
            <tr>
              <th width="250">Tanggal Pengembalian</th>
              <td><?= format_date($lend['return_date']) ?></td>
            </tr>
          </table>
          <h5 class="mt-4 pt-2 mb-2">Daftar Buku Pinjaman</h5>
          <table id="datatable" class="table table-striped table-bordered datatable">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Judul</th>
                <th scope="col">Penulis</th>
                <th scope="col">Kategori</th>
              </tr>
            </thead>
            <tbody>
              <?php $i = 1; ?>
              <?php foreach($books as $book): ?>
                <tr>
                  <th scope="row"><?= $i ?></th>
                  <td><?= $book['title'] ?></td>
                  <td><?= $book['category'] ?></td>
                  <td><?= $book['author'] ?></td>
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