<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1><?= $title ?></h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <!-- Tambahkan breadcrumb di sini jika diperlukan -->
          </ol>
        </div>
      </div>
    </div>
  </section>

  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <?= $this->session->flashdata('message'); ?>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary card-outline">
            <div class="card-body box-profile">
              <div class="text-center">
                <img class="profile-user-img img-fluid img-circle"
                     src="<?= base_url('assets/img/profile/'.$user['image']); ?>"
                     alt="User profile picture">
              </div>
              <h3 class="profile-username text-center">siti mahya</h3>
              <p class="text-muted text-center">siti.mahya@mhs.politala.ac.id</p>
              <p class="text-muted text-center">Anggota Sejak 14 Oktober 2023</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
