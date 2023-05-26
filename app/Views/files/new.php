<?= $this->extend('layouts/default') ?>
<?= $this->section('title') ?>
<title>Create Files - MFUTS</title>
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<div class="card">

    <div class="card-body">
        <div class="d-sm-flex justify-content-between align-items-start">
            <div class="">
                <h4 class="card-title">Create Table Files</h4>
                <p class="card-description">
                    Tabel Files <code>untuk Management Files</code>
                </p>
            </div>
            <div>
                <a href="<?= base_url() ?>files">

                    <div class="d-flex align-items-center">
                        <button class="btn btn-primary btn-lg text-white mb-0 me-0 align-items-center" type="button">
                            <i class="mdi mdi-arrow-left-circle">
                            </i> Back</button>
                    </div>
                </a>
            </div>
        </div>
        <form class="forms-sample" action="<?= site_url('files') ?>" method="post">
            <?= csrf_field() ?>
            <div class="form-group">
                <label for="">Categories</label>
                <select name="id_categories" class="form-control" id="" required>
                    <option value="" hidden></option>
                    <?php foreach ($files as $key => $value) { ?>
                        <option value="<?= $value['id_categories'] ?>"><?= $value['name_categories'] ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label for="name_files">Name Files</label>
                <input type="text" class="form-control" id="name_files" name="name_files" placeholder="Name Files">
            </div>
            <div class="form-group">
                <label for="detail_files">Detail</label>
                <input type="text" class="form-control" id="detail_files" name="detail_files" placeholder="Detail Files">
            </div>


            <button type="submit" class="btn btn-primary text-white me-2">Create</button>
            <button type="reset" class="btn btn-light">Reset</button>
        </form>
    </div>
</div>


<?= $this->endSection() ?>