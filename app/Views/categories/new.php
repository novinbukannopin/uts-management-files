<?= $this->extend('layouts/default') ?>
<?= $this->section('title') ?>
<title>Create Categories - MFUTS</title>
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<div class="card">

    <div class="card-body">
        <h4 class="card-title">Form - Create Categories</h4>
        <p class="card-description">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, autem?
        </p>
        <form class="forms-sample">
            <div class="form-group">
                <label for="exampleInputUsername1">Name</label>
                <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Username">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Detail</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
            </div>

            <div class="form-check form-check-flat form-check-primary">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input">
                    Remember me
                    <i class="input-helper"></i></label>
            </div>
            <button type="submit" class="btn btn-primary text-white me-2">Submit</button>
            <button class="btn btn-light">Cancel</button>
        </form>
    </div>
</div>


<?= $this->endSection() ?>