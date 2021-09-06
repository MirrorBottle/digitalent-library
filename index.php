<?php include("./layouts/header.php") ?>
<?php include("./layouts/navbar.php") ?>
<div id="main-container" class="container-fluid">
  <div class="row">
    <?php include("./layouts/sidebar.php") ?>
    <main role="main" class="col-md-9 offset-md-3 offset-lg-2 ml-sm-auto col-lg-10 px-4">
      <!-- INFOGRAPHICS -->
      <div class="row">
        <div class="col-xl-4 col-sm-6 col-12">
          <div class="card">
            <div class="card-content">
              <div class="media align-items-stretch d-flex">
                <div class="p-3 text-center bg-success d-flex align-items-center justify-content-center">
                  <i style="font-size: 3rem" class="lni lni-exit-down lni-4x text-white"></i>
                </div>
                <div class="p-3 media-body">
                  <h5>Pengembalian Hari Ini</h5>
                  <h5 class="text-muted mb-0">28</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-sm-6 col-12">
          <div class="card">
            <div class="card-content">
              <div class="media align-items-stretch d-flex">
                <div class="p-3 text-center bg-info d-flex align-items-center justify-content-center">
                  <i style="font-size: 3rem" class="lni lni-exit-up lni-4x text-white"></i>
                </div>
                <div class="p-3 media-body">
                  <h5>Peminjaman Hari Ini</h5>
                  <h5 class="text-muted mb-0">28</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-sm-6 col-12">
          <div class="card">
            <div class="card-content">
              <div class="media align-items-stretch d-flex">
                <div class="p-3 text-center bg-danger d-flex align-items-center justify-content-center">
                  <i style="font-size: 3rem" class="lni lni-graduation lni-4x text-white"></i>
                </div>
                <div class="p-3 media-body">
                  <h5>Total Anggota</h5>
                  <h5 class="text-muted mb-0">28</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- END OF INFOGRPAHICS -->
      <div class="card mt-4">
        <div class="card-header">
          <h4>Quick Info</h4>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-6 col-lg-6 col-12">
              <h5>Pengembalian Buku</h5>
              <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action p-4" aria-current="true">
                  <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">The Day (Novel)</h5>
                    <small>1 jam lalu</small>
                  </div>
                  <p class="mb-1">Peminjam: Hiroto</p>
                  <small>Tanggal Peminjaman: 12 September, 2019</small>
                </a>
                <a href="#" class="list-group-item list-group-item-action p-4" aria-current="true">
                  <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">Made By You (Novel)</h5>
                    <small>2 jam lalu</small>
                  </div>
                  <p class="mb-1">Peminjam: Aris</p>
                  <small>Tanggal Peminjaman: 12 September, 2019</small>
                </a>
                <a href="#" class="list-group-item list-group-item-action p-4" aria-current="true">
                  <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">The Ash of Time (Novel)</h5>
                    <small>4 jam lalu</small>
                  </div>
                  <p class="mb-1">Peminjam: Mai</p>
                  <small>Tanggal Peminjaman: 12 September, 2019</small>
                </a>
              </div>
            </div>
            <div class="col-md-6 col-lg-6 col-12">
              <h5>Peminjaman Buku</h5>
              <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action p-4" aria-current="true">
                  <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">Paper Towns (Novel)</h5>
                    <small>3 menit lalu</small>
                  </div>
                  <p class="mb-1">Peminjam: Hiroto</p>
                  <small>Tanggal Pengembalian: 12 September, 2019</small>
                </a>
                <a href="#" class="list-group-item list-group-item-action p-4" aria-current="true">
                  <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">Land By The Sea (Novel)</h5>
                    <small>15 menit lalu</small>
                  </div>
                  <p class="mb-1">Peminjam: Aris</p>
                  <small>Tanggal Pengembalian: 12 September, 2019</small>
                </a>
                <a href="#" class="list-group-item list-group-item-action p-4" aria-current="true">
                  <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">Through Time We Met (Novel)</h5>
                    <small>1 jam lalu</small>
                  </div>
                  <p class="mb-1">Peminjam: Mai</p>
                  <small>Tanggal Pengembalian: 12 September, 2019</small>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
  </div>
</div>
<?php include("./layouts/footer.php") ?>