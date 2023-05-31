<?= $this->extend('layouts/default') ?>
<?= $this->section('title') ?>
<title>Create Users - MFUTS</title>
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<div class="card">

    <div class="card-body">
        <div class="d-sm-flex justify-content-between align-items-start">
            <div class="">
                <h4 class="card-title">Create Users Categories</h4>
                <p class="card-description">
                    Tabel Users <code>untuk Management Files</code>
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
        <form class="forms-sample" action="<?= site_url('users') ?>" method="post">
            <?= csrf_field() ?>
            <div class="form-group">
                <label for="nama_user">Name</label>
                <input type="text" class="form-control" id="nama_user" name="nama_user" placeholder="Name User">
            </div>
            <div class="form-group">
                <label for="email_user">Email</label>
                <input type="text" class="form-control" id="email_user" name="email_user" placeholder="Email User">
            </div>

            <div class="form-group">
                <label for="password_user">Password</label>
                <input type="password" class="form-control" id="password_user" name="password_user" placeholder="Password User">
                <div class="form-check form-check-flat form-check-primary">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" onclick="showPassword()">
                        Show Password
                        <i class="input-helper"></i></label>
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
            </div>
            <div class="form-group">
                <label for="detail_user">Detail</label>
                <input type="text" class="form-control" id="detail_user" name="detail_user" placeholder="Detail User">
            </div>
            <button type="submit" class="btn btn-primary text-white me-2">Create</button>
            <button type="reset" class="btn btn-light">Reset</button>
        </form>
    </div>
</div>


<?= $this->endSection() ?>