<?= $this->extend('layouts/default') ?>
<?= $this->section('title') ?>
<title>Files - MFUTS</title>
<?= $this->endSection() ?>



<?= $this->section('content') ?>

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-1 mb-4">DataTables Files</h4>

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
                        <h5 class="card-title mb-0">Table Files</h5>
                    </div>
                    <div class="dt-action-buttons text-end pt-3 pt-md-0">
                        <div class="dt-buttons btn-group flex-wrap">
                            <div class="btn-group">
                                <button class="btn btn-label-primary btn-secondary buttons-collection dropdown-toggle me-2" tabindex="0" aria-controls="DataTables_Table_0" type="button" aria-haspopup="dialog" aria-expanded="false">
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
                    <div class="col-sm-12 col-md-6 d-flex justify-content-center justify-content-md-end">
                        <?php $request = \Config\Services::request() ?>
                        <form action="" method="get">
                            <div id="" class="dataTables_filter"><label>Search:
                                    <input type="text" name="keyword" value="<?= $request->getGet('keyword') ?>" class="form-control form-control-sm" placeholder="Search Here" aria-controls="DataTables_Table_0"></label></div>

                        </form>
                    </div>
                </div>
                <table class="datatables-basic table table-hover dataTable no-footer dtr-column" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info" style="width: 977px;">
                    <thead>
                        <tr>
                            <th class="control sorting_disabled dtr-hidden" rowspan="1" colspan="1" style="width: 22.3333px; display: none;" aria-label=""></th>
                            <th class="sorting_disabled dt-checkboxes-cell dt-checkboxes-select-all" rowspan="1" colspan="1" style="width: 22.3333px;" data-col="1" aria-label=""><input type="checkbox" class="form-check-input"></th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 86.3333px;" aria-label="Name: activate to sort column ascending">ID</th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 89.3333px;" aria-label="Email: activate to sort column ascending">Categories</th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 89.3333px;" aria-label="Email: activate to sort column ascending">Name</th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 78.3333px;" aria-label="Date: activate to sort column ascending">Files</th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 78.3333px;" aria-label="Date: activate to sort column ascending">Detail Files</th>
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
                        foreach ($files as $key => $value) : ?>
                            <?php if ($value) { ?>
                                <tr class="align-middle">
                                    <td class="sorting_disabled dt-checkboxes-cell dt-checkboxes-select-all" rowspan="1" colspan="1" style="width: 22.3333px;" data-col="1" aria-label=""><input type="checkbox" class="form-check-input"></td>
                                    <td><?= $no++ ?></td>
                                    <td><?= $value['name_categories'] ?></td>
                                    <td><?= $value['name_files'] ?></td>
                                    <td><img src="uploads/files/<?= $value['file'] ?>" alt="" style="border-radius: 0; max-width: 150px "></td>
                                    <td><?= $value['detail_files'] ?></td>
                                    <td class="">
                                        <div class="">
                                            <button class="btn btn-secondary btn-warning m-0" tabindex="0" t type="button" data-bs-toggle="offcanvas" data-bs-target="#offCanvasUpdate-<?= $value['id_files'] ?>">Edit</button>
                                        </div>
                                        <!--  -->
                                        <!-- modal edit -->
                                        <div class="offcanvas offcanvas-end" id="offCanvasUpdate-<?= $value['id_files'] ?>">
                                            <div class="offcanvas-header border-bottom">
                                                <h5 class="offcanvas-title" id="exampleModalLabel">Update Categories</h5>
                                                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                            </div>
                                            <div class="offcanvas-body flex-grow-1">
                                                <form class="update-record pt-0 row g-3 fv-plugins-bootstrap5 fv-plugins-framework" id="form-update-record" method="POST" action="<?= site_url('files/update/') . $value['id_files'] ?>" enctype="multipart/form-data">
                                                    <?= csrf_field() ?>
                                                    <div class="col-sm-12 fv-plugins-icon-container">
                                                        <div class="input-group input-group-merge">
                                                            <span id="name_categories" class="input-group-text"><i class="mdi mdi-shape-outline"></i></span>
                                                            <div class="form-floating form-floating-outline">
                                                                <select class="form-select" id="id_categories" name="id_categories" aria-label="Default select example" required>
                                                                    <option value="">Open this select menu</option>
                                                                    <?php foreach ($categories as $key => $data) : ?>
                                                                        <option value="<?= $data['id_categories'] ?>" <?= $value['id_categories'] == $data['id_categories'] ? "selected" : null ?>>
                                                                            <?= $data['name_categories'] ?></option>
                                                                    <?php endforeach   ?>
                                                                </select>
                                                                <label for="name_categories">Example select</label>
                                                            </div>
                                                        </div>
                                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                                    </div>

                                                    <div class="col-sm-12 fv-plugins-icon-container">
                                                        <div class="input-group input-group-merge">
                                                            <span id="basicPost2" class="input-group-text"><i class="mdi mdi-file-multiple"></i></span>
                                                            <div class="form-floating form-floating-outline">
                                                                <input type="text" id="name_files" value="<?= $value['name_files'] ?>" name="name_files" class="form-control dt-name_files" placeholder="Detail Category" aria-label="Web Developer" aria-describedby="basicPost2">
                                                                <label for="name_files">Name Files</label>
                                                            </div>
                                                        </div>
                                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                                    </div>

                                                    <div class="col-sm-12 fv-plugins-icon-container">
                                                        <img src="<?= base_url() ?>uploads/files/<?= $value['file'] ?>" alt="error" width="150px">
                                                    </div>
                                                    <div class="col-sm-12 fv-plugins-icon-container">
                                                        <div class="input-group">
                                                            <input type="file" class="form-control" id="file" aria-describedby="inputGroupFileAddon04" aria-label="Upload" name="file">
                                                            <button class="btn btn-outline-primary waves-effect" type="button" id="file">Button</button>
                                                        </div>
                                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                                    </div>

                                                    <div class="col-sm-12 fv-plugins-icon-container">
                                                        <div class="input-group input-group-merge">
                                                            <span id="basicPost2" class="input-group-text"><i class="mdi mdi-file-multiple"></i></span>
                                                            <div class="form-floating form-floating-outline">
                                                                <input type="text" id="detail_files" <?= $value['detail_files'] ?> name="detail_files" class="form-control dt-detail_files" placeholder="Detail Category" aria-label="Web Developer" aria-describedby="basicPost2">
                                                                <label for="detail_files">Detail Files</label>
                                                            </div>
                                                        </div>
                                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <button type="submit" class="btn btn-primary me-sm-3 me-1 waves-effect waves-light">Update</button>
                                                        <button type="reset" class="btn btn-outline-secondary waves-effect" data-bs-dismiss="offcanvas">Cancel</button>
                                                    </div>
                                                    <!-- <input type="hidden"> -->
                                                </form>
                                            </div>
                                        </div>
                                        <!--  -->
                                        <div class="">
                                            <button class="btn btn-secondary btn-danger m-0" data-bs-toggle="modal" data-bs-target="#modal-Delete-<?= $value["id_files"] ?>">Delete</button>
                                        </div>

                                        <div class="modal fade" id="modal-Delete-<?= $value["id_files"] ?>" data-bs-backdrop="false">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">
                                                            Delete Categories</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Are you sure to delete <?= $value["name_files"] ?>?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <form action="<?= site_url('/files/delete/' . $value["id_files"]) ?>" method="post" class="d-inline">
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
                            <?php } else { ?>
                                <tr>no data</tr>
                            <?php } ?>
                        <?php endforeach ?>
                    </tbody>
                </table>
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">
                            <div class="d-flex justify-content-between">
                                <?= $pager->links('default', 'pagination') ?>
                                <div class="">
                                    Showing <?= 1 + (5 * ($page - 1)) ?> to <?= $no - 1 ?> of <?= $pager->getTotal() ?> entries
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- modal add -->
    <div class="offcanvas offcanvas-end" id="add-new-record">
        <div class="offcanvas-header border-bottom">
            <h5 class="offcanvas-title" id="exampleModalLabel">New Files</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body flex-grow-1">
            <form class="add-new-record pt-0 row g-3 fv-plugins-bootstrap5 fv-plugins-framework" id="form-add-new-record" method="post" action="<?= site_url('files') ?>" enctype="multipart/form-data">
                <?= csrf_field() ?>
                <div class="col-sm-12 fv-plugins-icon-container">
                    <div class="input-group input-group-merge">
                        <span id="name_categories" class="input-group-text"><i class="mdi mdi-shape-outline"></i></span>
                        <div class="form-floating form-floating-outline">
                            <select class="form-select" id="id_categories" name="id_categories" aria-label="Default select example" required>
                                <option value="">Open this select menu</option>
                                <?php foreach ($categories as $key => $value) { ?>
                                    <option value="<?= $value['id_categories'] ?>"><?= $value['name_categories'] ?></option>
                                <?php } ?>
                            </select>
                            <label for="name_categories">Example select</label>
                        </div>
                    </div>
                    <div class="fv-plugins-message-container invalid-feedback"></div>
                </div>

                <div class="col-sm-12 fv-plugins-icon-container">
                    <div class="input-group input-group-merge">
                        <span id="basicPost2" class="input-group-text"><i class="mdi mdi-file-multiple"></i></span>
                        <div class="form-floating form-floating-outline">
                            <input type="text" id="name_files" name="name_files" class="form-control dt-name_files" placeholder="Detail Category" aria-label="Web Developer" aria-describedby="basicPost2">
                            <label for="name_files">Name Files</label>
                        </div>
                    </div>
                    <div class="fv-plugins-message-container invalid-feedback"></div>
                </div>

                <div class="col-sm-12 fv-plugins-icon-container">
                    <div class="input-group">
                        <input type="file" class="form-control" id="file" aria-describedby="inputGroupFileAddon04" aria-label="Upload" name="file">
                        <button class="btn btn-outline-primary waves-effect" type="button" id="file">Button</button>
                    </div>
                    <div class="fv-plugins-message-container invalid-feedback"></div>
                </div>

                <div class="col-sm-12 fv-plugins-icon-container">
                    <div class="input-group input-group-merge">
                        <span id="basicPost2" class="input-group-text"><i class="mdi mdi-file-multiple"></i></span>
                        <div class="form-floating form-floating-outline">
                            <input type="text" id="detail_files" name="detail_files" class="form-control dt-detail_files" placeholder="Detail Category" aria-label="Web Developer" aria-describedby="basicPost2">
                            <label for="detail_files">Detail Files</label>
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

</div>
<?= $this->endSection() ?>
<?= $this->section('script') ?>
<!-- <script src="<?= base_url() ?>assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script> -->
<script src="<?= base_url() ?>assets/js/tables-datatables-basic.js"></script>

<!-- Flat Picker -->
<script src="<?= base_url() ?>assets/js/forms-file-upload.js"></script>
<script src="<?= base_url() ?>assets/vendor/libs/moment/moment.js"></script>
<script src="<?= base_url() ?>assets/vendor/libs/flatpickr/flatpickr.js"></script>
<!-- Form Validation -->
<script src="<?= base_url() ?>assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/libs/dropzone/dropzone.js"></script>
<script src="<?= base_url() ?>assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js"></script>
<?= $this->endSection() ?>