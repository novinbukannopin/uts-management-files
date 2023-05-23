<?= $this->extend('layouts/default') ?>
<?= $this->section('title') ?>
<title>Files - MFUTS</title>
<?= $this->endSection() ?><?= $this->section('wrapper-print') ?>
<div class="btn-wrapper">
    <a href="#" class="btn btn-otline-dark align-items-center"><i class="icon-share"></i> Share</a>
    <a href="#" class="btn btn-otline-dark"><i class="icon-printer"></i> Print</a>
    <a href="#" class="btn btn-primary text-white me-0"><i class="icon-download"></i> Export</a>
</div>
<?= $this->endSection() ?><div class="row">
    <div class="col-md-12">
        <div class="box box-primary box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">Files/h3>


                    <div class="box-tools pull-right">
                        <a href="<?= base_url('file/add') ?>" class="btn btn-primary btn-sm btn-flat">
                            <i class="fa fa-plus"></i> Add</a>
                    </div>
                    <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">

                <?php
                if (session()->getFlashdata('pesan')) {
                    echo '<div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h4><i class="icon fa fa-check"></i> Success! - ';
                    echo session()->getFlashdata('pesan');
                    echo '</h4></div>';
                }
                ?>
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID</th>
                            <th>Nama </th>
                            <th>Kategori</th>
                            <th>Deskripsi</th>
                            <th>File</th>
                            <th width="100px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($_files as $key => $value) { ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $value['no_id']; ?></td>
                            <td><?= $value['nama_file']; ?></td>
                            <td><?= $value['nama_kategori']; ?></td>
                            <td><?= $value['detail_deskripsi']; ?></td>
                            <td class="text-center">
                                <a href="<?= base_url('file/viewpdf/' . $value['id_file']) ?>">
                                    <i class="fa fa-file-pdf-o fa-2x label-danger"></i></a><br>
                                <?= number_format($value['ukuran_file'], 0) ?> Byte
                            </td>
                            <td class="text-center">

                                <a href="<?= base_url('file/edit/' . $value['id_file']) ?>"
                                    class="btn btn-xs btn-warning">Edit</a>
                                <button class="btn btn-xs btn-danger" data-toggle="modal"
                                    data-target="#delete<?= $value['id_file']; ?>">Delete</button>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>

            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
</div>


<!-- /.modal delete kategori -->

<div class="modal-body">

    Apakah Anda Yakin Ingin Hapus <b><?= $value['nama_file']; ?></b>..?
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Tidak</button>
    <a href="<?= base_url('file/delete/' . $value['id_arsip']) ?>" type="submit" class="btn btn-primary">Ya</a>
</div>

</div>
<!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>
<?php ?>
<!-- end modal delete kategori -->