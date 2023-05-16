<?= $this->extend('layouts/default') ?>
<?= $this->section('title') ?>
<title>Categories - MFUTS</title>
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
        <div class="d-sm-flex justify-content-between align-items-start">
            <div class="">
                <h4 class="card-title">Table Categories</h4>
                <p class="card-description">
                    Tabel Categories <code>untuk Management Files</code>
                </p>
            </div>
            <div>
                <a href="<?= base_url() ?>categories/new">
                    <button class="btn btn-primary btn-lg text-white mb-0 me-0" type="button"><i class="mdi mdi-account-plus"></i>Add new member</button>
                </a>
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
                    <tr class="">
                        <td>Jacob</td>
                        <td>Photoshop</td>
                        <td>Photoshop</td>
                        <td>
                            <button class="btn btn-danger h-100">Edit</button>
                            <button class="btn btn-warning">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Messsy</td>
                        <td>Flash</td>
                        <td class="text-danger"> 21.06% <i class="ti-arrow-down"></i></td>
                        <td><label class="badge badge-warning">In progress</label></td>
                    </tr>
                    <tr>
                        <td>John</td>
                        <td>Premier</td>
                        <td class="text-danger"> 35.00% <i class="ti-arrow-down"></i></td>
                        <td><label class="badge badge-info">Fixed</label></td>
                    </tr>
                    <tr>
                        <td>Peter</td>
                        <td>After effects</td>
                        <td class="text-success"> 82.00% <i class="ti-arrow-up"></i></td>
                        <td><label class="badge badge-success">Completed</label></td>
                    </tr>
                    <tr>
                        <td>Dave</td>
                        <td>53275535</td>
                        <td class="text-success"> 98.05% <i class="ti-arrow-up"></i></td>
                        <td><label class="badge badge-warning">In progress</label></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection() ?>