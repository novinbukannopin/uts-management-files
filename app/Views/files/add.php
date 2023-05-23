<?= $this->extend('layouts/default') ?>
<?= $this->section('title') ?>
<title>Update Files - MFUTS</title>
<?= $this->endSection() ?>
<?= $this->section('content') ?><div class="row">
    <div class="col-md-3">
    </div>
    <div class="col-md-6">
        <div class="box box-primary box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">Edit File</h3>
                <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <?php
                $errors = session()->getFlashdata('errors');
                if (!empty($errors)) { ?>
                <div class="alert alert-danger alert-dismissible">
                    <h5>Ada Kesalahan !!!</h5>
                    <ul>
                        <?php foreach ($errors as $key => $value) { ?>
                        <li><?= esc($value) ?></li>
                        <?php } ?>
                    </ul>
                </div>
                <?php } ?>
                <?php
                echo form_open_multipart('file/insert');
                helper('text');
                $no_id = date('ymds') . '-' . random_string('alnum', 4);
                ?>

                <div class="form-group">
                    <label>No</label>
                    <input name="no_id" class="form-control" value="<?= $no_id?>" readonly>
                </div>

                <div class="form-group">
                    <label>File</label>
                    <select name="id_kategori" class="form-control">
                        <option value="">--Choose File--</option>
                        <?php foreach ($kategori as $key => $value) { ?>
                        <option value="<?= $value['id_kategori'] ?>"><?= $value['nama_file'] ?></option>
                        <?php } ?>

                    </select>
                </div>

                <div class="form-group">
                    <label>Nama</label>
                    <input name="nama_file" class="form-control" placeholder="Nama File">
                </div>

                <div class="form-group">
                    <label>Deskripsi</label>
                    <textarea name="deskripsi" class="form-control" rows="5"></textarea>
                </div>

                <div class="form-group">
                    <label>File</label>
                    <input type="file" name="file_arsip" class="form-control">
                    <label class="text-danger">File Harus Format .PDF</label>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="<?= base_url('arsip') ?>" class="btn btn-success">Kembali</a>
                </div>

                <?php echo form_close() ?>


            </div>
        </div>
        <!-- /.box -->
    </div>

    <div class="col-md-3">
    </div>
</div>