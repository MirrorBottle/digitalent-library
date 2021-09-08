<?php include('../../layouts/header.php') ?>

<?php
  $book = find("books", $_GET["id"]);
  $book_id = $book['id'];
  $lends = query("SELECT * FROM lend_details 
    JOIN lends ON lend_details.lend_id = lends.id 
    JOIN members ON lends.member_id = members.id
    WHERE book_id = $book_id");
?>
<div id="main-container" class="container-fluid">
  <div class="row">
    <?php include("../../layouts/sidebar.php") ?>
    <main role="main" class="col-md-9 offset-md-3 offset-lg-2 ml-sm-auto col-lg-10 px-4">
      <div class="card mt-4">
        <div class="card-header d-flex align-items-center justify-content-between">
          <h4>Detail Buku</h4>
          <a href="./index.php" class="btn btn-danger">
            <i class="lni lni-arrow-left-circle me-2"></i>
            Kembali
          </a>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-4 text-center">
              <img class="img-fluid img-thumbnail" style="height: 200px;" id="cover-image-preview" src="/digitalent-library/img/<?= $book['cover'] ?>" alt="your image" />
            </div>
            <div class="col-md-8">
            <table class="table table-striped table-bordered datatable">
              <tr>
                <th width="250">Judul</th>
                <td><?= $book['title'] ?></td>
              </tr>
              <tr>
                <th width="250">Penulis</th>
                <td><?= $book['author'] ?></td>
              </tr>
              <tr>
                <th width="250">Kategori</th>
                <td><?= $book['category'] ?></td>
              </tr>
              <tr>
                <th width="250">Total Halaman</th>
                <td><?= $book['pages'] ?></td>
              </tr>
              <tr>
                <th width="250">Plot</th>
                <td><?= $book['plot'] ?></td>
              </tr>
            </table>
            </div>
          </div>
          
          <h5 class="mt-4 pt-2 mb-2">Daftar Histori Peminjaman</h5>
          <table id="datatable" class="table table-striped table-bordered datatable">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">ID Peminjaman</th>
                <th scope="col">ID Anggota</th>
                <th scope="col">Nama Peminjam</th>
                <th scope="col">Tanggal Peminjaman</th>
              </tr>
            </thead>
            <tbody>
              <?php $i = 1; ?>
              <?php foreach($lends as $lend): ?>
                <tr>
                  <th scope="row"><?= $i ?></th>
                  <td><?= $lend['number'] ?></td>
                  <td><?= $lend['member_number'] ?></td>
                  <td><?= $lend['name'] ?></td>
                  <td><?= format_date($lend['lend_date']) ?></td>
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