<?= $this->extend('layouts/default') ?>
<?= $this->section('title') ?>
<title>Trash Categories - MFUTS</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-1 mb-4">DataTables Trash Categories</h4>

    <?php if (session()->getFlashdata('success')) : ?>
        <div class="alert alert-solid-success alert-dismissible" role="alert">
            <?= session()->getFlashdata('success') ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>

    <div class="card">
        <div class="card-datatable table-responsive pt-0">
            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                <div class="card-header flex-column flex-md-row">
                    <div class="head-label text-center">
                        <h5 class="card-title mb-0">Trash Table Categories</h5>
                    </div>
                    <div class="dt-action-buttons text-end pt-3 pt-md-0">
                        <div class="dt-buttons btn-group flex-wrap">
                            <!-- <div class="btn-group">
                                <button class="btn btn-secondary buttons-collection dropdown-toggle btn-label-primary me-2" tabindex="0" aria-controls="DataTables_Table_0" type="button" aria-haspopup="dialog" aria-expanded="false">
                                    <span>
                                        <i class="mdi mdi-export-variant me-sm-1"></i>
                                        <span class="d-none d-sm-inline-block">Export</span>
                                    </span>
                                    <span class="dt-down-arrow"></span>
                                </button>
                            </div>

                            <button class="btn btn-secondary create-new btn-primary me-2" tabindex="0" aria-controls="DataTables_Table_0" type="button">
                                <span>
                                    <i class="mdi mdi-plus me-sm-1"></i>
                                    <span class="d-none d-sm-inline-block">Add New Record</span>
                                </span>
                            </button>

                            <button class="btn btn-secondary btn-danger" tabindex="0" aria-controls="DataTables_Table_0" type="button">
                                <span>
                                    <i class="mdi mdi-trash-can-outline me-sm-1"></i>
                                    <span class="d-none d-sm-inline-block">Trash</span>
                                </span>
                            </button> -->
                            <a href="<?= base_url() ?>categories">
                                <button class="btn btn-secondary btn-primary me-2">
                                    <i class="mdi mdi-arrow-left-circle me-sm-1"></i>
                                    <span class="d-none d-sm-inline-block">Back</span>
                                </button>
                            </a>
                            <a href="<?= base_url() ?>categories/restore">
                                <button class="btn btn-secondary btn-warning me-2">
                                    <i class="mdi mdi-file-restore me-sm-1"></i>
                                    <span class="d-none d-sm-inline-block">Restore All</span>
                                </button>
                            </a>
                            <form action="<?= base_url() ?>/categories/force" method="post">
                                <?= csrf_field() ?>
                                <button class="btn btn-secondary btn-danger">
                                    <i class="mdi mdi-delete me-sm-1"></i>
                                    <span class="d-none d-sm-inline-block">Delete All</span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="dataTables_length" id="DataTables_Table_0_length"><label>Show <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="form-select form-select-sm">
                                    <option value="7">7</option>
                                    <option value="10">10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="75">75</option>
                                    <option value="100">100</option>
                                </select> entries</label></div>
                    </div>

                </div>
                <table class="datatables-basic table table-hover dataTable no-footer dtr-column" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info" style="width: 977px;">
                    <thead>
                        <tr>
                            <th class="control sorting_disabled dtr-hidden" rowspan="1" colspan="1" style="width: 22.3333px; display: none;" aria-label=""></th>
                            <th class="sorting_disabled dt-checkboxes-cell dt-checkboxes-select-all" rowspan="1" colspan="1" style="width: 22.3333px;" data-col="1" aria-label=""><input type="checkbox" class="form-check-input"></th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 86.3333px;" aria-label="Name: activate to sort column ascending">ID</th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 89.3333px;" aria-label="Email: activate to sort column ascending">Categories</th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 78.3333px;" aria-label="Date: activate to sort column ascending">Detail</th>
                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 113px;" aria-label="Actions">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- <tr class="odd">
                            <td colspan="7" class="dataTables_empty" valign="top">Loading...</td>
                        </tr> -->
                        <?php
                        $page = isset($_GET['page']) ? $_GET['page'] : 1;
                        $no = 1 + (5 * ($page - 1));
                        if ($categories != null) { ?>
                            <?php foreach ($categories as $key => $value) : ?>
                                <tr class="align-middle">
                                    <td class="sorting_disabled dt-checkboxes-cell dt-checkboxes-select-all" rowspan="1" colspan="1" style="width: 22.3333px;" data-col="1" aria-label=""><input type="checkbox" class="form-check-input"></td>
                                    <td><?= $no++ ?></td>
                                    <td><?= $value['name_categories'] ?></td>
                                    <td><?= $value['detail_categories'] ?></td>
                                    <td class="d-flex align-items-center gap-3">

                                        <!--  -->
                                        <div class="">
                                            <a href="<?= site_url('categories/restore/') . $value['id_categories'] ?>">
                                                <button class="btn btn-secondary btn-warning">
                                                    <span class="d-none d-sm-inline-block">Restore</span>
                                                </button></a>
                                        </div>
                                        <!--  -->
                                        <div class="">
                                            <button class="btn btn-secondary btn-danger m-0" data-bs-toggle="modal" data-bs-target="#modal-Delete-<?= $value["id_categories"] ?>">Delete</button>
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
                                                            <button class="btn btn-secondary btn-danger">
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
                            <td align="middle" colspan="5">NO DATA</td>
                        <?php } ?>


                    </tbody>
                </table>

            </div>
        </div>
    </div>
    <!-- modal add -->
    <div class="offcanvas offcanvas-end" id="add-new-record">
        <div class="offcanvas-header border-bottom">
            <h5 class="offcanvas-title" id="exampleModalLabel">New Categories</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body flex-grow-1">
            <form class="add-new-record pt-0 row g-3 fv-plugins-bootstrap5 fv-plugins-framework" id="form-add-new-record" method="post" action="<?= site_url('categories') ?>">
                <?= csrf_field() ?>
                <div class="col-sm-12 fv-plugins-icon-container">
                    <div class="input-group input-group-merge">
                        <span id="name_categories" class="input-group-text"><i class="mdi mdi-shape-outline"></i></span>
                        <div class="form-floating form-floating-outline">
                            <input type="text" id="name_categories" class="form-control dt-name-categories" name="name_categories" placeholder="Categories" aria-label="Categories" aria-describedby="basicFullname2">
                            <label for="name_categories">Categories</label>
                        </div>
                    </div>
                    <div class="fv-plugins-message-container invalid-feedback"></div>
                </div>
                <div class="col-sm-12 fv-plugins-icon-container">
                    <div class="input-group input-group-merge">
                        <span id="basicPost2" class="input-group-text"><i class="mdi mdi-details"></i></span>
                        <div class="form-floating form-floating-outline">
                            <input type="text" id="detail_categories" name="detail_categories" class="form-control dt-detail-categories" placeholder="Detail Category" aria-label="Web Developer" aria-describedby="basicPost2">
                            <label for="detail_categories">Detail</label>
                        </div>
                    </div>
                    <div class="fv-plugins-message-container invalid-feedback"></div>
                </div>
                <div class="col-sm-12">
                    <button type="submit" class="btn btn-primary me-sm-3 me-1 waves-effect waves-light">Submit</button>
                    <button type="reset" class="btn btn-outline-secondary waves-effect" data-bs-dismiss="offcanvas">Cancel</button>
                </div>
                <!-- <input type="hidden"> -->
            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>