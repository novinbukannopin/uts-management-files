<?= $this->extend('layouts/default') ?>
<?= $this->section('title') ?>
<title>Update Users - MFUTS</title>
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<div class="card">
    <div class="card-body">
        <?php if (session()->getFlashdata('error')) : ?>
            <div class="alert alert-danger alert-icon d-flex" role="alert">
                <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                <div class="alert-icon-aside">
                    <i class="far fa-flag"></i>
                </div>
                <div class="alert-icon-content">
                    <h6 class="alert-heading">Error !!!</h6>
                    <!-- This alert uses an icon from Font Awesome! -->
                    <?= session()->getFlashdata('error') ?>
                </div>
            </div>
        <?php endif; ?>
        <div class="d-flex justify-content-between align-items-center">
            <div class="">
                <h4 class="card-title">Update Form - Create Users</h4>
                <p class="card-description">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, autem?
                </p>
            </div>
            <div>
                <a href="<?= base_url() ?>users">
                    <div class="d-flex align-items-center">
                        <button class="btn btn-primary btn-lg text-white mb-0 me-0 align-items-center" type="button">
                            <i class="mdi mdi-arrow-left-circle">
                            </i> Back</button>
                    </div>
                </a>
            </div>
        </div>

        <form class="forms-sample" action="<?= site_url('users/update/' . $users['id_user']) ?>" method="post">
            <?= csrf_field() ?>
            <div class="form-group">
                <label for="nama_user">Name</label>
                <input type="text" class="form-control" value="<?= $users["nama_user"] ?>" id="nama_user" name="nama_user" placeholder="Name User">
            </div>
            <div class="form-group">
                <label for="email_user">Email</label>
                <input type="email" class="form-control" id="email_user" value="<?= $users["email_user"] ?>" name="email_user" placeholder="Email User">
            </div>

            <div class="form-group">
                <label for="password_user">Current Password</label>
                <input type="password" class="form-control" id="password_user" name="password_user" placeholder="Password User">
                <div class="form-check form-check-flat form-check-primary">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" onclick="showPassword()">
                        Show Password
                        <i class="input-helper"></i></label>
                </div>
            </div>

            <div class="form-group">
                <label for="new_password_user">New Password</label>
                <input type="password" class="form-control" id="new_password_user" name="new_password_user" placeholder="New Password User">
                <div class="form-check form-check-flat form-check-primary">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" onclick="showPassword()">
                        Show Password
                        <i class="input-helper"></i></label>
                </div>
            </div>
            <script>
                function showPassword() {
                    var x = document.getElementById("password_user");
                    if (x.type === "password") {
                        x.type = "text";
                    } else {
                        x.type = "password";
                    }
                }
            </script>
            <div class="form-group">
                <label for="detail_user">Detail</label>
                <input type="text" class="form-control" id="detail_user" value="<?= $users["detail_user"] ?>" name="detail_user" placeholder="Detail User">
            </div>
            <button type="submit" class="btn btn-primary text-white me-2">Update</button>
            <button type="reset" class="btn btn-light">Reset</button>
        </form>
    </div>
</div>
<?= $this->endSection() ?>