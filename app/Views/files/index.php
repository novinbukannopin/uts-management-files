<?= $this->extend('layouts/default') ?>
<?= $this->section('title') ?>
<title>Files - MFUTS</title>
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
                <h4 class="card-title">Table Files</h4>
                <p class="card-description">
                    Tabel Files <code>untuk Management Files</code>
                </p>
            </div>
            <form class="search-form" action="" method="get">
                <div class="d-flex align-items-center gap-2">
                    <div class="">
                        <input type="text" name="keyword" class="form-control" placeholder="Search Here" title="Search here">
                    </div>
                    <div class="">
                        <?php $request = \Config\Services::request() ?>
                        <button class="btn btn-success btn-lg text-white mb-0 me-0" name="submit" type="submit
                              value=" <?= $request->getGet('keyword') ?>><i class="mdi mdi-search"></i>Cari</button>
                    </div>
            </form>
            <div class="">
                <a href="<?= base_url() ?>files/new">
                    <button class="btn btn-primary btn-lg text-white mb-0 me-0" type="button"><i class="mdi mdi-account-plus"></i>Add new Files</button>
                </a>
            </div>

        </div>
    </div>

    <div class="table-responsive mt-2">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Categories</th>
                    <th>Name</th>
                    <th>File</th>
                    <th>Detail</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $page = isset($_GET['page']) ? $_GET['page'] : 1;
                $no = 1 + (5 * ($page - 1));
                foreach ($files as $key => $value) : ?>
                    <?php if ($value) { ?>
                        <tr class="align-middle">
                            <td><?= $no++ ?></td>
                            <td><?= $value['name_categories'] ?></td>
                            <td><?= $value['name_files'] ?></td>
                            <td><img src="uploads/files/<?= $value['file'] ?>" alt="" style="border-radius: 0;"></td>
                            <td><?= $value['detail_files'] ?></td>
                            <td class="d-flex align-items-center gap-3">
                                <div class="">
                                    <a href="<?= site_url('files/edit/' . $value['id_files']) ?>">
                                        <button class="btn btn-warning m-0">Edit</button>
                                    </a>
                                </div>
                                <div class="">
                                    <button class="btn btn-danger m-0" data-bs-toggle="modal" data-bs-target="#modal-Delete-<?= $value["id_files"] ?>">Delete</button>
                                </div>

                                <div class="modal fade" id="modal-Delete-<?= $value["id_files"] ?>" data-bs-backdrop="false">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">
                                                    Delete Files</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Are you sure to delete <?= $value["name_files"] ?>?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <form action="<?= site_url('/files/delete/' . $value["id_files"]) ?>" method="post" class="d-inline">
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
                    <?php } else { ?>
                        <tr>no data</tr>
                    <?php } ?>
                <?php endforeach ?>


            </tbody>
        </table>
        <!-- <div class="card-footer text-right">
                <nav class="d-inline-block">
                    <ul class="pagination mb-0">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                        </li>
                    </ul>
                </nav>
            </div> -->
        <div class="mt-4 d-flex align-items-center justify-content-between">
            <?= $pager->links('default', 'pagination') ?>
            <div class="">
                <small>
                    Showing <?= 1 + (5 * ($page - 1)) ?> to <?= $no - 1 ?> of <?= $pager->getTotal() ?> entries
                </small>
            </div>
        </div>
    </div>
</div>
</div>
<?= $this->endSection() ?>