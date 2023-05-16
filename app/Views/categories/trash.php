<?= $this->extend('layouts/default') ?>
<?= $this->section('title') ?>
<title>Trash Categories - MFUTS</title>
<?= $this->endSection() ?>

<?= $this->section('wrapper-print') ?>
<div class="btn-wrapper">
    <a href="#" class="btn btn-otline-dark align-items-center"><i class="icon-share"></i> Share</a>
    <a href="#" class="btn btn-otline-dark"><i class="icon-printer"></i> Print</a>
    <a href="#" class="btn btn-primary text-white me-0"><i class="icon-download"></i> Export</a>
</div>
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<div class="card">

    <div class="card-body">
        <?php

        use function PHPUnit\Framework\isEmpty;

        if (session()->getFlashdata('success')) : ?>
            <div class="alert alert-primary alert-icon d-flex" role="alert">
                <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                <div class="alert-icon-aside">
                    <i class="far fa-flag"></i>
                </div>
                <div class="alert-icon-content">
                    <h6 class="alert-heading">Success !!!</h6>
                    <!-- This alert uses an icon from Font Awesome! -->
                    <?= session()->getFlashdata('success') ?>
                </div>
            </div>
        <?php endif; ?>
        <!-- <div class="alert alert-success alert-dismissable show fade">
                <div class="alert-body">
                    <button class="mdi mdi-keyboard-backspace" data-dismiss="alert"></button>
                    <b>Success !! - </b>
                    <?= session()->getFlashdata('success') ?>
                </div>
            </div> -->
        <div class="d-sm-flex justify-content-between align-items-start">
            <div class="">
                <h4 class="card-title">Trash Table Categories</h4>
                <p class="card-description">
                    Trash Tabel Categories <code>untuk Management Files</code>
                </p>
            </div>
            <div class="d-flex align-items-center gap-2">
                <div class="d-flex align-items-center">
                    <a href="<?= base_url() ?>categories">
                        <button class="btn btn-primary btn-lg text-white mb-0 me-0 align-items-center" type="button">
                            <i class="mdi mdi-arrow-left-circle">
                            </i> Back</button>
                    </a>
                </div>
                <div class="">
                    <a href="<?= base_url() ?>categories/restore">
                        <button class="btn btn-warning btn-lg text-white mb-0 me-0" type="button"><i class="mdi mdi-file-restore"></i>Restore All</button>
                    </a>
                </div>
                <div class="">
                    <form action="<?= site_url('/categories/force') ?>" method="post">
                        <?= csrf_field() ?>
                        <button class="btn btn-danger btn-lg text-white mb-0 me-0">
                            <i class="mdi mdi-delete"></i> Delete All
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <div class="table-responsive mt-2">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Detail</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($categories != null) { ?>
                        <?php foreach ($categories as $key => $value) : ?>
                            <tr class="align-middle">
                                <td><?= $key + 1 ?></td>
                                <td><?= $value['name_categories'] ?></td>
                                <td><?= $value['detail_categories'] ?></td>
                                <td class="d-flex align-items-center gap-3">
                                    <div class="">
                                        <a href="<?= site_url('categories/restore/' . $value['id_categories']) ?>">
                                            <button class="btn btn-warning m-0">Restore</button>
                                        </a>
                                    </div>
                                    <div class="">
                                        <button class="btn btn-danger m-0" data-bs-toggle="modal" data-bs-target="#modal-Delete-<?= $value["id_categories"] ?>">Delete</button>
                                    </div>

                                    <div class="modal fade" id="modal-Delete-<?= $value["id_categories"] ?>" data-bs-backdrop="false">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">
                                                        Delete Categories</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Are you sure to delete <?= $value["name_categories"] ?>?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <form action="<?= site_url('/categories/force/' . $value["id_categories"]) ?>" method="post" class="d-inline">
                                                        <?= csrf_field() ?>
                                                        <button class="btn btn-danger">
                                                            Delete
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    <?php } else { ?>
                        <tr>
                            <td align="middle" colspan="4">NO DATA</td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection() ?>