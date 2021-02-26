<section class="content">

    <div class="row">
        <div class="col-xs-12">
            <!-- /.box -->

            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">DATA SURAT BDT</h3>
                    <div class="box-tools pull-right">
                        <?php echo $this->session->flashdata('gagal'); ?>
                        <?php echo $this->session->flashdata('message'); ?>

                        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"> <i class="fa fa-minus"></i></button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>

                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambah" style="margin: 15px"> <i class="fa fa-plus"></i> Tambah</button>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>ID BDT</th>
                                <th>Nama</th>
                                <th>No Surat</th>
                                <th>Tanggal Surat Keluar</th>
                                <th>AKSI</th>


                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($surat as $s) {
                            ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $s->id_bdt; ?></td>
                                    <td><?php echo $s->Nama; ?></td>
                                    <td><?php echo $s->no_instansi; ?>/DINSOS_BPJS/<?php $format = date('Y', strtotime($s->tgl_suratkeluar));
                                                                                    echo $format ?>/<?php echo $s->no_skeluar ?></td>
                                    <td><?php echo $s->tgl_suratkeluar; ?></td>

                                    <td style="text-align: center;">
                                        <a href="#lihat<?php echo $s->id_surat; ?>" data-toggle="modal"><span class="glyphicon glyphicon-eye-open" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="lihat"></span></a> |
                                        <a href="<?php echo base_url('admin/C_suratBdt/print/' . $s->id_surat); ?>" target="_blank"><span class="glyphicon glyphicon-print" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="print"></span></a> |
                                        <a href="#edit<?php echo $s->id_surat; ?>" data-toggle="modal" style="color: #423e3eb5"><span class="glyphicon glyphicon-pencil" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Edit"></span></a> |
                                        <a href="<?php echo base_url('admin/C_suratBdt/hapus/' . $s->id_surat); ?>" onclick="return confirm('Anda yakin?')" style="color: #423e3eb5"><span class="glyphicon glyphicon-trash" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Hapus"></span></a>
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
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>

<div class="modal fade" id="tambah">
    <div class="modal-dialog" style="width:68%">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tambah Surat BDT</h4>
            </div>


            <form class="form-horizontal" action="<?php echo base_url('admin/C_suratBdt/tambah'); ?>" method="post">

                <div class="box-body">

                    <div class="form-group">
                        <label class="col-sm-2 control-label">NIK</label>
                        <div class="col-sm-8">
                            <?php $yuli = "var prdName = new Array();";
                            $riski = "var prdNim = new Array();";
                            ?>
                            <select class="form-control select2" required="" name="nik" style="width: 100%;" onchange="
                            document.getElementById('namaorang').value=prdName[this.value];
                            document.getElementById('nikorang').value=prdNim[this.value];
                            ">
                                <option value="">--Choose Option--</option>
                                <?php
                                foreach ($bdt as $a) { ?>
                                    <option value="<?= $a->nik; ?>"><?php echo $a->nik; ?></option>
                                    <?php
                                    $yuli .= "prdName['" . $a->nik . "'] = '" . addslashes($a->Nama) . "';";
                                    $riski .= "prdNim['" . $a->nik . "'] = '" . addslashes($a->id_bdt) . "';";
                                    ?>
                                <?php } ?>
                            </select>

                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Nama</label>
                        <div class="col-sm-8">
                            <input type="text" id="namaorang" class="form-control" placeholder="Nama" disabled="">
                            <script type="text/javascript">
                                <?php echo $yuli; ?>
                            </script>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">ID BDT</label>
                        <div class="col-sm-8">
                            <input type="text" id="nikorang" class="form-control" placeholder="ID BDT" disabled="">
                            <script type="text/javascript">
                                <?php echo $riski; ?>
                            </script>
                        </div>
                    </div>




                    <div class="form-group">
                        <label class="col-sm-2 control-label">No Instansi</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" placeholder="No Instansi" value="460" name="no_instansi" required="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">No Surat keluar</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" placeholder="No Surat Keluar" name="no_skeluar" required="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Tanggal Surat Keluar</label>
                        <div class="col-sm-8">
                            <input type="date" class="form-control" placeholder="Tanggal Surat keluar" name="tgl_suratkeluar" required="">
                        </div>
                    </div>






                </div>



                <div class="modal-footer">

                    <button type="submit" id="send" class="btn btn-primary">Simpan</button>
                </div>
            </form>


        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<?php foreach ($surat as $s) { ?>
    <div class="modal fade" id="edit<?php echo $s->id_surat ?>">
        <div class="modal-dialog" style="width:68%">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel2">Edit surat BDT</h4>
                </div>

                <form class="form-horizontal form-label-left" action="<?php echo base_url('admin/C_suratBdt/update'); ?>" method="post">
                    <div class="box-body">

                        <div class="form-group">
                            <label class="col-sm-2 control-label">NIK</label>
                            <div class="col-sm-8">
                                <input type="hidden" class="form-control" name="id_surat" required="" value="<?php echo $s->id_surat ?>">
                                <input type="text" class="form-control" name="nik" required="" value="<?php echo $s->nik ?>" readonly>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-sm-2 control-label">Nama</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="Nama" required="" value="<?php echo $s->Nama ?>" disabled>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">ID BDT</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="nik" required="" value="<?php echo $s->id_bdt ?>" disabled>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">No Instansi</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" placeholder="No Surat" name="no_instansi" value="<?php echo $s->no_instansi ?>" required="" readonly>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">No Surat Keluar</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" placeholder="No Surat" name="no_skeluar" value="<?php echo $s->no_skeluar ?>" required="" readonly>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Tanggal Surat Keluar</label>
                            <div class="col-sm-8">
                                <input type="date" class="form-control" placeholder="Tanggal Surat keluar" name="tgl_suratkeluar" value="<?php echo $s->tgl_suratkeluar ?>" required="">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-remove" data-dismiss="modal">Batal</button>
                        <button type="submit" id="send" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
<?php } ?>

<?php foreach ($surat as $s) { ?>
    <div class="modal fade" id="lihat<?php echo $s->id_surat ?>">
        <div class="modal-dialog" style="width:68%">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel2">Lihat surat BDT</h4>
                </div>

                <form class="form-horizontal form-label-left" action="<?php echo base_url('admin/C_suratBdt'); ?>" method="post">
                    <div class="box-body">

                        <div class="form-group">
                            <label class="col-sm-2 control-label">NIK</label>
                            <div class="col-sm-8">
                                <input type="hidden" class="form-control" value="<?php echo $s->id_surat ?>" disabled>
                                <input type="text" class="form-control" value="<?php echo $s->nik ?>" disabled>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-sm-2 control-label">Nama</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" value="<?php echo $s->Nama ?>" disabled>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">ID BDT</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" value="<?php echo $s->id_bdt ?>" disabled>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">No Surat</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" value="<?php echo $s->no_instansi ?>/DINSOS-BPJS/<?php $format = date('Y', strtotime($s->tgl_suratkeluar));
                                                                                                                            echo $format ?>/<?php echo $s->no_skeluar ?>" disabled>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Tanggal Surat Keluar</label>
                            <div class="col-sm-8">
                                <input type="date" class="form-control" value="<?php echo $s->tgl_suratkeluar ?>" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-remove" data-dismiss="modal">Keluar</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
<?php } ?>