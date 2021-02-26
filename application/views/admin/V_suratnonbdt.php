<section class="content">

    <div class="row">
        <div class="col-xs-12">
            <!-- /.box -->

            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">DATA SURAT NON BDT</h3>
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
                                <th>NIK</th>
                                <th>Nama</th>
                                <th>No Surat</th>
                                <th>No Surat Miskin</th>
                                <th>Tgl Surat Keluar</th>
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
                                    <td><?php echo $s->nik; ?></td>
                                    <td><?php echo $s->nama; ?></td>
                                    <td><?php echo $s->no_instansi; ?>/DINSOS_BPJS/<?php $format = date('Y', strtotime($s->tgl_skeluar));
                                                                                    echo $format ?>/<?php echo $s->no_skeluar ?></td>
                                    <td><?php echo $s->no_smiskin; ?></td>
                                    <td><?php echo $s->tgl_skeluar; ?></td>

                                    <td style="text-align: center;">
                                        <a href="#lihat<?php echo $s->id_snonbdt; ?>" data-toggle="modal"><span class="glyphicon glyphicon-eye-open" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="lihat"></span></a> |
                                        <a href="<?php echo base_url('admin/C_suratnonbdt/print/' . $s->id_snonbdt); ?>" target="_blank"><span class="glyphicon glyphicon-print" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="print"></span></a> |
                                        <a href="#edit<?php echo $s->id_snonbdt; ?>" data-toggle="modal" style="color: #423e3eb5"><span class="glyphicon glyphicon-pencil" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Edit"></span></a> |
                                        <a href="<?php echo base_url('admin/C_suratnonbdt/hapus/' . $s->id_snonbdt); ?>" onclick="return confirm('Anda yakin?')" style="color: #423e3eb5"><span class="glyphicon glyphicon-trash" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Hapus"></span></a>
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
                <h4 class="modal-title">Tambah Surat Non BDT</h4>
            </div>


            <form class="form-horizontal" action="<?php echo base_url('admin/C_suratnonbdt/tambah'); ?>" method="post">

                <div class="box-body">

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Tanggal Surat Keluar</label>
                        <div class="col-sm-8">
                            <input type="date" class="form-control" placeholder="Tanggal Surat keluar" name="tgl_skeluar" required="">
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-sm-2 control-label">No KK</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" placeholder="No KK" name="kk" required="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">NIK</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" placeholder="NIK" name="nik" required="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Nama</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" placeholder="Nama" name="nama" required="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">No instansi</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" placeholder="No Instansi" value="460" name="no_instansi" required="" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">No Surat keluar</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" placeholder="No Surat Keluar" name="no_skeluar" required="">
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-sm-2 control-label">No Surat Miskin</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" placeholder="No Surat Miskin" name="no_smiskin" required="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Tanggal Surat Miskin</label>
                        <div class="col-sm-8">
                            <input type="date" class="form-control" placeholder="Tanggal Surat Miskin" name="tgl_smiskin" required="">
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
    <div class="modal fade" id="edit<?php echo $s->id_snonbdt ?>">
        <div class="modal-dialog" style="width:68%">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel2">Edit surat Non BDT</h4>
                </div>

                <form class="form-horizontal form-label-left" action="<?php echo base_url('admin/C_suratnonbdt/update'); ?>" method="post">
                    <div class="box-body">

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Tanggal Surat Keluar</label>
                            <div class="col-sm-8">
                                <input type="hidden" class="form-control" name="id_snonbdt" required="" value="<?php echo $s->id_snonbdt ?>">
                                <input type="date" class="form-control" placeholder="Tanggal Surat keluar" name="tgl_skeluar" value="<?php echo $s->tgl_skeluar ?>" required="">
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-sm-2 control-label">No KK</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" placeholder="No KK" name="kk" value="<?php echo $s->kk ?>" required="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">NIK</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" placeholder="NIK" name="nik" value="<?php echo $s->nik ?>" required="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Nama</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" placeholder="Nama" name="nama" value="<?php echo $s->nama ?>" required="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">No instansi</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" placeholder="No Instansi" name="no_instansi" value="<?php echo $s->no_instansi ?>" required="" readonly>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">No Surat keluar</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" placeholder="No Surat Keluar" name="no_skeluar" value="<?php echo $s->no_skeluar ?>" required="">
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-sm-2 control-label">No Surat Miskin</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" placeholder="No Surat Miskin" name="no_smiskin" value="<?php echo $s->no_smiskin ?>" required="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Tanggal Surat Miskin</label>
                            <div class="col-sm-8">
                                <input type="date" class="form-control" placeholder="Tanggal Surat Miskin" name="tgl_smiskin" required="" value="<?php echo $s->tgl_smiskin ?>">
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
    <div class="modal fade" id="lihat<?php echo $s->id_snonbdt ?>">
        <div class="modal-dialog" style="width:68%">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel2">Lihat surat Non BDT</h4>
                </div>

                <form class="form-horizontal form-label-left" action="<?php echo base_url('admin/C_suratnonbdt'); ?>" method="post">
                    <div class="box-body">

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Tanggal Surat Keluar</label>
                            <div class="col-sm-8">
                                <input type="hidden" class="form-control" name="id_snonbdt" required="" value="<?php echo $s->id_snonbdt ?>">
                                <input type="date" class="form-control" value="<?php echo $s->tgl_skeluar ?>" disabled>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-sm-2 control-label">No KK</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" value="<?php echo $s->kk ?>" disabled>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">NIK</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" value="<?php echo $s->nik ?>" disabled>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Nama</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" value="<?php echo $s->nama ?>" disabled>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">No instansi</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" value="<?php echo $s->no_instansi ?>" disabled>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">No Surat keluar</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" value="<?php echo $s->no_skeluar ?>" disabled>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-sm-2 control-label">No Surat Miskin</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="no_smiskin" value="<?php echo $s->no_smiskin ?>" disabled>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Tanggal Surat Miskin</label>
                            <div class="col-sm-8">
                                <input type="date" class="form-control" required="" value="<?php echo $s->tgl_smiskin ?>" disabled>
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