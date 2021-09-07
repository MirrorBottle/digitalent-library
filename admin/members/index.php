<?php include('../../layouts/header.php') ?>
<div id="main-container" class="container-fluid">
  <div class="row">
    <?php include("../../layouts/sidebar.php") ?>
    <main role="main" class="col-md-9 offset-md-3 offset-lg-2 ml-sm-auto col-lg-10 px-4">
      <div class="card mt-4">
        <div class="card-header d-flex align-items-center justify-content-between">
          <h4>Daftar Anggota</h4>
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
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">No. HP</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Hiroto</td>
                <td>hiroto@gmail.com</td>
                <td>xxx</td>
                <td>
                  <a href="./edit.php" class="btn btn-warning me-1">Ubah</a>
                  <button type="button" data-message="Data anggota akan dihapus!" class="btn btn-danger delete-btn">Hapus</button>
                </td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Shyna</td>
                <td>shyna_official@gmail.com</td>
                <td>xxx</td>
                <td>
                <a href="./edit.php" class="btn btn-warning me-1">Ubah</a>
                  <button type="button" data-message="Data anggota akan dihapus!" class="btn btn-danger delete-btn">Hapus</button>
                </td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Aris</td>
                <td>arisia_g@gmail.com</td>
                <td>xxx</td>
                <td>
                <a href="./edit.php" class="btn btn-warning me-1">Ubah</a>
                  <button type="button" data-message="Data anggota akan dihapus!" class="btn btn-danger delete-btn">Hapus</button>
                </td>
              </tr>
              <tr>
                <th scope="row">4</th>
                <td>Mai</td>
                <td>maimaimai@gmail.com</td>
                <td>xxx</td>
                <td>
                <a href="./edit.php" class="btn btn-warning me-1">Ubah</a>
                  <button type="button" data-message="Data anggota akan dihapus!" class="btn btn-danger delete-btn">Hapus</button>
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