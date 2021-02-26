<section class="content">
    <div class="row">
        <div class="col-xs-12">



            <!-- Custom Tabs -->

            <div class="box box-primary">
                <div class="box-header with-border">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab_1" data-toggle="tab">Laporan Surat Non BDT Perbulan</a></li>
                        <li><a href="#tab_2" data-toggle="tab">Laporan Surat Non BDT Pertahun</a></li>


                    </ul>
                    <div class="box-tools pull-right">

                        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"> <i class="fa fa-minus"></i></button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                    </div>


                </div>


                <div class="box-body">
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab_1">
                            <form class="form-horizontal" target="_blank" method="post" action="<?php echo base_url('kepala/C_laporannonbdt/laporan_perbulan') ?>">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="control-label col-sm-12">Bulan</label>
                                            </div>
                                            <div class="col-md-6">
                                                <select class="form-control select2" name="bulan" required="">

                                                    <option value="">-- Choose Option --</option>
                                                    <option value="1">Januari</option>
                                                    <option value="2">Februari</option>
                                                    <option value="3">Maret</option>
                                                    <option value="4">April </option>
                                                    <option value="5">Mei</option>
                                                    <option value="6">Juni</option>
                                                    <option value="7">Juli</option>
                                                    <option value="8">Agustus</option>
                                                    <option value="9">September</option>
                                                    <option value="10">Oktober</option>
                                                    <option value="11">November</option>
                                                    <option value="12">Desember</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="control-label col-sm-12">Tahun</label>
                                            </div>
                                            <div class="col-md-6">
                                                <select class="form-control select2" name="tahun" required="">

                                                    <option value="">-- Choose Option --</option>
                                                    <?php
                                                    $mulai = date('Y') - 5;
                                                    for ($i = $mulai; $i < $mulai + 15; $i++) {
                                                        $sel = $i == date('Y') ? ' selected="selected"' : '';
                                                        echo '<option value="' . $i . '"' . $sel . '>' . $i . '</option>';
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                </div><br>
                                <div class="row">
                                    <div class="col-md-5 ">
                                    </div>
                                    <div class="col-md-1 ">
                                        <button id="send" type="submit" class="btn btn-primary">Cetak</button>

                                    </div>

                                </div><br>

                            </form>
                        </div>
                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="tab_2">
                            <form class="form-horizontal" target="_blank" method="post" action="<?php echo base_url('kepala/C_laporannonbdt/laporan_pertahun') ?>">

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="control-label col-sm-12">Tahun</label>
                                            </div>
                                            <div class="col-md-6">
                                                <select class="form-control select2" name="tahun" required="">

                                                    <option value="">-- Choose Option --</option>
                                                    <?php
                                                    $mulai = date('Y') - 5;
                                                    for ($i = $mulai; $i < $mulai + 15; $i++) {
                                                        $sel = $i == date('Y') ? ' selected="selected"' : '';
                                                        echo '<option value="' . $i . '"' . $sel . '>' . $i . '</option>';
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                </div><br>
                                <div class="row">
                                    <div class="col-md-3 ">
                                    </div>
                                    <div class="col-md-1 ">
                                        <button id="send" type="submit" class="btn btn-primary">Cetak</button>

                                    </div>

                                </div><br>

                            </form>
                        </div>
                        <!-- /.tab-pane -->

                        <!-- /.tab-pane -->
                    </div>
                </div>
                <!-- /.tab-content -->
            </div>
            <!-- nav-tabs-custom -->

            <!-- /.box-header -->
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
    <!-- /.col -->

    <!-- /.row -->
</section>