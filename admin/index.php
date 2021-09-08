<?php include("../layouts/header.php") ?>
<?php
  use Carbon\Carbon;
  // INFOGRAPHICS
  $members = query("SELECT COUNT(*) as count FROM members")[0];
  $lends_count = mysqli_fetch_array(mysqli_query($connection, "SELECT COUNT(*) FROM lends"));
  $returns_count = mysqli_fetch_array(mysqli_query($connection, "SELECT COUNT(return_date) FROM lends"));

  // QUICK INFO
  $lends = query("SELECT 
    lends.id as lends_id, lend_details.id, books.title, books.category, members.name , lends.return_date, lends.lend_date
    FROM lend_details 
    JOIN lends ON lend_details.lend_id = lends.id
    JOIN books ON lend_details.book_id = books.id
    JOIN members ON lends.member_id = members.id
    ORDER BY id DESC
    LIMIT 3"
  );

  $returns = query("SELECT 
    lends.id as lends_id, lend_details.id, books.title, books.category, members.name, lends.return_date, lends.lend_date
    FROM lend_details 
    JOIN lends ON lend_details.lend_id = lends.id
    JOIN books ON lend_details.book_id = books.id
    JOIN members ON lends.member_id = members.id
    WHERE lends.return_date IS NOT NULL ORDER BY id DESC LIMIT 3"
  );
?>
<div id="main-container" class="container-fluid">
  <div class="row">
    <?php include("../layouts/sidebar.php") ?>
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
                  <h5>Total Pengembalian</h5>
                  <h5 class="text-muted mb-0"><?= $returns_count[0] ?></h5>
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
                  <h5>Total Peminjaman</h5>
                  <h5 class="text-muted mb-0"><?= $lends_count[0] ?></h5>
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
                  <h5 class="text-muted mb-0"><?= $members['count'] ?></h5>
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
              <h5>Peminjaman Buku</h5>
              <div class="list-group">
                <?php foreach($lends as $lend): ?>
                  <a href="/digitalent-library/admin/lends/show.php?id=<?= $lend['lends_id'] ?>" class="list-group-item list-group-item-action p-4" aria-current="true">
                    <div class="d-flex w-100 justify-content-between">
                      <h5 class="mb-1"><?= $lend['title'] ?> (<?= $lend['category'] ?>)</h5>
                      <small><?= format_date($lend['lend_date']) ?></small>
                    </div>
                    <p class="mb-1">Peminjam: <?= $lend['name'] ?></p>
                  </a>
                <?php endforeach; ?>
              </div>
            </div>
            <div class="col-md-6 col-lg-6 col-12">
              <h5>Pengembalian Buku</h5>
              <div class="list-group">
                <?php foreach($returns as $return): ?>
                  <a href="/digitalent-library/admin/returns/show.php?id=<?= $return['lends_id'] ?>" class="list-group-item list-group-item-action p-4" aria-current="true">
                    <div class="d-flex w-100 justify-content-between">
                      <h5 class="mb-1"><?= $return['title'] ?> (<?= $return['category'] ?>)</h5>
                      <small><?= format_date($return['return_date']) ?></small>
                    </div>
                    <p class="mb-1">Peminjam: <?= $return['name'] ?></p>
                    <small>Tanggal Peminjaman: <?= Carbon::parse($return['lend_date'])->format('d M, Y') ?></small>
                  </a>
                <?php endforeach; ?>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </main>
  </div>
</div>
<?php include("../layouts/footer.php") ?>