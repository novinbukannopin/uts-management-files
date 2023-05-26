<?= $this->extend('layouts/default') ?>
<?= $this->section('title') ?>
<title>Create Categories - MFUTS</title>
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<div class="card">

    <div class="card-body">
        <div class="d-sm-flex justify-content-between align-items-start">
            <div class="">
                <h4 class="card-title">Create Table Categories</h4>
                <p class="card-description">
                    Tabel Categories <code>untuk Management Files</code>
                </p>
            </div>
            <div>
                <a href="<?= base_url() ?>categories">

                    <div class="d-flex align-items-center">
                        <button class="btn btn-primary btn-lg text-white mb-0 me-0 align-items-center" type="button">
                            <i class="mdi mdi-arrow-left-circle">
                            </i> Back</button>
                    </div>
                </a>
            </div>
        </div>


        <form class="forms-sample" action="<?= site_url('categories') ?>" method="post" autocomplete="off">
            <?= csrf_field() ?>
            <div class="form-group">
                <label for="name_categories">Name</label>
                <input type="text" class="form-control" autofocus name="name_categories" placeholder="Name Categories">

            </div>
            <div class="form-group">
                <label for="detail_categories">Detail</label>
                <input type="text" class="form-control" id="detail_categories" name="detail_categories" placeholder="Detail Categories">
            </div>


            <button type="submit" class="btn btn-primary text-white me-2">Create</button>
            <button type="reset" class="btn btn-light">Reset</button>
        </form>
    </div>
</div>


<?= $this->endSection() ?>