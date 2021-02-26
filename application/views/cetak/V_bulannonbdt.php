<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/dinsos5.png" />
  <title>Dinas Sosial</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">


  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/morris.js/morris.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/bower_components/select2/dist/css/select2.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini">
  <p><?php foreach ($bln as $u) { ?><?php
                                    $tanggall = date('d', strtotime($u->tgl_skeluar));
                                    $bulan = date('m', strtotime($u->tgl_skeluar));
                                    $tahun = date('Y', strtotime($u->tgl_skeluar));
                                    $bulann = '';
                                    switch ($bulan) {
                                      case '01':
                                        $bulann = 'JANUARI';
                                        break;
                                      case '02':
                                        $bulann = 'FEBRUARI';
                                        break;
                                      case '03':
                                        $bulann = 'MARET';
                                        break;
                                      case '04':
                                        $bulann = 'APRIL';
                                        break;
                                      case '05':
                                        $bulann = 'MEI';
                                        break;
                                      case '06':
                                        $bulann = 'JUNI';
                                        break;
                                      case '07':
                                        $bulann = 'JULI';
                                        break;
                                      case '08':
                                        $bulann = 'AGUSTUS';
                                        break;
                                      case '09':
                                        $bulann = 'SEPTEMBER';
                                        break;
                                      case '10':
                                        $bulann = 'OKTOBER';
                                        break;
                                      case '11':
                                        $bulann = 'NOVEMBER';
                                        break;
                                      case '12':
                                        $bulann = 'DESEMBER';
                                        break;
                                    }
                                    $format = $tanggall . ' ' . $bulann . ' ' . $tahun;

                                    break; ?>
  <?php } ?></p>

  <img src="assets/images/dinsos5.png" style="position: absolute; width: 90px; height: auto;"><br>
  <table style="width: 100%;">
    <tr>
      <td align="center">
        <span style="line-height: 1.6; font-weight: bold;">
          LAPORAN DATA SURAT BDT
          <br>KANTOR DINAS SOSIAL
          <br>BULAN <?php echo $bulann; ?> TAHUN <?php echo $tahun; ?>
        </span>
      </td>
    </tr>
  </table>
  <hr class="line-title">
  <table id="example2" class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>No</th>
        <th>NIK</th>
        <th>Nama</th>
        <th>No Surat</th>
        <th>No Surat Miskin</th>
        <th>Tgl Surat Keluar</th>


      </tr>
    </thead>
    <tbody>
      <?php
      $no = 1;
      foreach ($bln as $s) {
      ?>
        <tr>
          <td><?php echo $no++; ?></td>
          <td><?php echo $s->nik; ?></td>
          <td><?php echo $s->nama; ?></td>
          <td><?php echo $s->no_instansi; ?>/DINSOS_BPJS/<?php $format = date('Y', strtotime($s->tgl_skeluar));
                                                          echo $format ?>/<?php echo $s->no_skeluar ?></td>
          <td><?php echo $s->no_smiskin; ?></td>
          <td><?php $format = date('d-m-Y', strtotime($s->tgl_skeluar));
              echo $format ?></td>


        </tr>
      <?php } ?>

    </tbody>

  </table>


  <!-- jQuery 3 -->
  <script src="<?php echo base_url(); ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="<?php echo base_url(); ?>assets/bower_components/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <!-- Morris.js charts -->
  <script src="<?php echo base_url(); ?>assets/bower_components/raphael/raphael.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/bower_components/morris.js/morris.min.js"></script>
  <!-- Sparkline -->
  <script src="<?php echo base_url(); ?>assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
  <!-- jvectormap -->
  <script src="<?php echo base_url(); ?>assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="<?php echo base_url(); ?>assets/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="<?php echo base_url(); ?>assets/bower_components/moment/min/moment.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
  <!-- datepicker -->
  <script src="<?php echo base_url(); ?>assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
  <!-- Bootstrap WYSIHTML5 -->
  <script src="<?php echo base_url(); ?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
  <!-- Slimscroll -->
  <script src="<?php echo base_url(); ?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  <!-- FastClick -->
  <script src="<?php echo base_url(); ?>assets/bower_components/fastclick/lib/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo base_url(); ?>assets/dist/js/adminlte.min.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="<?php echo base_url(); ?>assets/dist/js/pages/dashboard.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?php echo base_url(); ?>assets/dist/js/demo.js"></script>
  <script src="<?= base_url(); ?>assets/bower_components/select2/dist/js/select2.full.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- DataTables -->
  <script src="<?php echo base_url(); ?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

  <!-- page script -->
  <script>
    $(document).ready(function() {
      $('.sidebar-menu').tree()
    })
  </script>


  <script>
    $(function() {
      $('#example1').DataTable()
      $('#example2').DataTable({
        'paging': true,
        'lengthChange': false,
        'searching': false,
        'ordering': true,
        'info': true,
        'autoWidth': false
      })
    })
  </script>

  <script>
    $(function() {
      $("#from").datepicker({
        defaultDate: "+1w",
        changeMonth: true,
        numberOfMonths: 2,
        dateFormat: "yy-mm-dd",
        changeYear: true,
        onClose: function(selectedDate) {
          $("#to").datepicker("option", "minDate", selectedDate);
        }
      });
    });
  </script>

  <script>
    $(function() {
      //Initialize Select2 Elements
      $('.select2').select2()
    });
  </script>

  <script>
    $.widget.bridge('uibutton', $.ui.button);
  </script>
</body>

</html>