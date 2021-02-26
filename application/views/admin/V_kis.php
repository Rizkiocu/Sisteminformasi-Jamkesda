<section class="content">

    <div class="row">
        <div class="col-xs-12">
            <!-- /.box -->

            <div class="box">
                <div class="box-header  with-border">
                    <h3 class="box-title">Data KIS</h3>
                    <div class="box-tools pull-right">
                        <?php echo $this->session->flashdata('message'); ?>
                        <?php echo $this->session->flashdata('gagal'); ?>

                        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"> <i class="fa fa-minus"></i></button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip"><i class="fa fa-times"></i></button>
                    </div>

                </div>


                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>No BPJS</th>
                                <th>NO KK</th>
                                <th>NIK</th>
                                <th>Nama</th>
                                <th>Tanggal Lahir</th>
                                <th>Jenis Kelamin</th>
                                <th>Alamat</th>
                                <th>Nama Kec CAPIL</th>
                                <th>Nama Desa CAPIL</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($kis as $u) {
                            ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $u->NOKA_BPJS ?></td>
                                    <td><?php echo $u->NOKK ?>
                                    <td><?php echo $u->NIK ?></td>
                                    <td><?php echo $u->NAMA ?></td>
                                    <td><?php $format = date('d-m-Y', strtotime($u->TGLLAHIR));
                                        echo $format ?></td>
                                    <td><?php echo $u->JENIS_KELAMIN ?></td>
                                    <td><?php echo $u->ALAMAT ?></td>
                                    <td><?php echo $u->NM_KECCAPIL ?></td>
                                    <td><?php echo $u->NM_DESACAPIL ?></td>



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
<!-- /.content -->