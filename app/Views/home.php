<?= $this->extend('layouts/default') ?>
<?= $this->section('title') ?>
<title>Home - MFUTS</title>
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<div class="row">
    <div class="col-lg-12">
        <div class="statistics-details d-flex align-items-center justify-content-start gap-5">
            <div>
                <p class="statistics-title">Count Categories</p>
                <h3 class="rate-percentage"><?= countData('categories') ?></h3>
                <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>-0.5%</span></p>
            </div>
            <div>
                <p class="statistics-title">Count Files</p>
                <h3 class="rate-percentage"><?= countData('files') ?></h3>
                <p class="text-success d-flex"><i class="mdi mdi-menu-up"></i><span>+0.1%</span></p>
            </div>
            <div>
                <p class="statistics-title">Count User</p>
                <h3 class="rate-percentage"><?= countData('users') ?></h3>
                <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>68.8</span></p>
            </div>
        </div>
    </div>

</div>

<?= $this->endSection() ?>