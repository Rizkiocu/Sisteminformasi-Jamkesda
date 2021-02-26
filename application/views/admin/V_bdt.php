<section class="content">

  <div class="row">
    <div class="col-xs-12">
      <!-- /.box -->

      <div class="box">
        <div class="box-header  with-border">
          <h3 class="box-title">Data Apa aja</h3>
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
                <th>ID BDT</th>
                <th>No KK</th>
                <th>NIK</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Tempat/Tgl Lahir</th>
                <th>Desa</th>
                <th>Kecamatan</th>

              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              foreach ($bdt as $u) {
              ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $u->id_bdt ?>
                  <td><?php echo $u->KK ?></td>
                  <td><?php echo $u->nik ?></td>
                  <td><?php echo $u->Nama ?></td>
                  <td><?php if ($u->jenis_kelamin == 1) {
                        echo "Laki-Laki";
                      } else {
                        echo "Perempuan";
                      }
                      ?></td>
                  <td><?php echo $u->TmpLahir ?><?php $format = date('d-m-Y', strtotime($u->tgl_lahir));
                                                echo $format ?></td>
                  <td><?php echo $u->Desa ?></td>
                  <td><?php echo $u->Kecamatan ?></td>
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
<!-- /.content -->