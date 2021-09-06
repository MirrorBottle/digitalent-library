<?php include('../../layouts/header.php') ?>
<div id="main-container" class="container-fluid">
  <div class="row">
    <?php include("../../layouts/sidebar.php") ?>
    <main role="main" class="col-md-9 offset-md-3 offset-lg-2 ml-sm-auto col-lg-10 px-4">
      <div class="card mt-4">
        <div class="card-header d-flex align-items-center justify-content-between">
          <h4>Daftar Buku</h4>
          <a href="./create.php" class="btn btn-primary">
            <i class="lni lni-plus me-2"></i>
            Tambah
          </a>
        </div>
        <div class="card-body">
          <table id="datatable" class="table table-striped table-bordered">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Buku</th>
                <th scope="col">Kategori Buku</th>
                <th scope="col">Status</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>The Day</td>
                <td>Novel</td>
                <td>
                  <span class="badge bg-success w-100 p-2">Tersedia</span>
                </td>
                <td>
                  <a href="./edit.php" class="btn btn-warning me-1">Ubah</a>
                  <button type="button" data-message="Data buku akan dihapus!" class="btn btn-danger delete-btn">Hapus</button>
                </td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>May I Be With You</td>
                <td>Novel</td>
                <td>
                  <span class="badge bg-danger w-100 p-2">Dipinjam</span>
                </td>
                <td>
                <a href="./edit.php" class="btn btn-warning me-1">Ubah</a>
                  <button type="button" data-message="Data buku akan dihapus!" class="btn btn-danger delete-btn">Hapus</button>
                </td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Rain Fall Slowly</td>
                <td>Novel</td>
                <td>
                  <span class="badge bg-success w-100 p-2">Tersedia</span>
                </td>
                <td>
                <a href="./edit.php" class="btn btn-warning me-1">Ubah</a>
                  <button type="button" data-message="Data buku akan dihapus!" class="btn btn-danger delete-btn">Hapus</button>
                </td>
              </tr>
              <tr>
                <th scope="row">4</th>
                <td>The You Under The Oak Tree</td>
                <td>Novel</td>
                <td>
                  <span class="badge bg-danger w-100 p-2">Dipinjam</span>
                </td>
                <td>
                <a href="./edit.php" class="btn btn-warning me-1">Ubah</a>
                  <button type="button" data-message="Data buku akan dihapus!" class="btn btn-danger delete-btn">Hapus</button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </main>
  </div>
</div>
<?php include("../../layouts/footer.php") ?>