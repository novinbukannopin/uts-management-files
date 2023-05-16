<?= $this->extend('layouts/default') ?>
<?= $this->section('title') ?>
<title>Update Categories - MFUTS</title>
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Update Form - Create Categories</h4>
        <p class="card-description">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, autem?
        </p>
        <form class="forms-sample" action="<?= site_url('categories/update/' . $categories['id_categories']) ?>" method="post">
            <?= csrf_field() ?>
            <div class="form-group">
                <label for="name_categories">Name</label>
                <input type="text" class="form-control" id="name_categories" value="<?= $categories['name_categories'] ?>" name="name_categories" placeholder="Username">
            </div>
            <div class="form-group">
                <label for="detail_categories">Detail</label>
                <input type="text" class="form-control" id="detail_categories" value="<?= $categories['detail_categories'] ?>" name="detail_categories" placeholder="Email">
            </div>

            <div class="form-check form-check-flat form-check-primary">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input">
                    Remember me
                    <i class="input-helper"></i></label>
            </div>
            <button type="submit" class="btn btn-primary text-white me-2">Submit</button>
            <button type="reset" class="btn btn-light">Reset</button>
        </form>
    </div>
</div>
<?= $this->endSection() ?>