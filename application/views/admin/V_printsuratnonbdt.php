<!DOCTYPE html>
<html>

<head>
    <style type="text/css">
        <!--
        body {
            font-family: Arial;
            font-size: 22.5px
        }

        .pos {
            position: absolute;
            z-index: 0;
            left: 0px;
            top: 0px
        }
        -->
    </style>
</head>

<body>

    <?php foreach ($surat_non as $s) { ?>
        <nobr>
            <nowrap>
                <div class="pos" id="_0:0" style="top:30;left: 100;">
                    <img name="_1400:850" src="assets/images/dinsos5.png" height="125" width="125" border="0" usemap="#Map">

                </div>
                <br><br><br><br><br><br>
                <hr class="line-title" style=" border: 2px solid black; left: 100; ">

                <div class="pos" id="_272:42" style="top:42;left:272">
                    <span id="_21.4" style="font-weight:bold; font-family:Times New Roman; font-size:21.4px; color:#000000">
                        PEMERINTAH KABUPATEN KAMPAR</span>
                </div>
                <div class="pos" id="_349:71" style="top:71;left:349">
                    <span id="_36.8" style="font-weight:bold; font-family:Times New Roman; font-size:36.8px; color:#000000">
                        DINAS SOSIAL </span>
                </div>
                <div class="pos" id="_335:108" style="top:108;left:335">
                    <span id="_14.8" style="font-weight:bold; font-family:Arial; font-size:14.8px; color:#000000">
                        JALAN TUANKU TAMBUSAI TELP. (0762)</span>
                </div>
                <div class="pos" id="_388:125" style="top:125;left:388">
                    <span id="_12.1" style=" font-family:Times New Roman; font-size:12.1px; color:#000000">
                        Email: dinassosialkampar@gmail.com</span>
                </div>
                <div class="pos" id="_394:140" style="top:140;left:394">
                    <span id="_18.9" style="font-weight:bold; font-family:Arial; font-size:18.9px; color:#000000">
                        B A N G K I N A N G</span>
                </div>

                <div class="pos" id="_707:142" style="top:142;left:650">
                    <span id="_10.8" style=" font-family:Arial; font-size:10.8px; color:#000000">
                        Kode Pos: 28412</span>
                </div>
                <div class="pos" id="_525:182" style="top:182;left:525">
                    <span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
                        Bangkinang,<span id="_14.8" style=" font-size:14.8px">
                            <?php
                            $tanggall = date('d', strtotime($s->tgl_skeluar));
                            $bulan = date('m', strtotime($s->tgl_skeluar));
                            $tahun = date('Y', strtotime($s->tgl_skeluar));
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
                            echo $format;
                            ?>
                        </span></span>

                </div>

                <div class="pos" id="_100:226" style="top:226;left:100">
                    <span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
                        Nomor </span>
                </div>
                <div class="pos" id="_178:226" style="top:226;left:178">
                    <span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
                        : <?php echo $s->no_instansi; ?>/DINSOS_BPJS/<?php $format = date('Y', strtotime($s->tgl_skeluar));
                                                                        echo $format ?>/<?php echo $s->no_skeluar ?></span>
                </div>
                <div class="pos" id="_493:226" style="top:226;left:493">
                    <span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
                        Kepada. </span>
                </div>
                <div class="pos" id="_100:248" style="top:248;left:100">
                    <span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
                        Lampiran : -</span>
                </div>
                <div class="pos" id="_454:248" style="top:248;left:454">
                    <span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
                        Yth. Kepala Dinas Kesehatan </span>
                </div>
                <div class="pos" id="_100:270" style="top:270;left:100">
                    <span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
                        Perihal : <span style="font-weight:bold"><u>Rekomendasi</u> </span></span>

                </div>
                <div class="pos" id="_499:270" style="top:270;left:499">
                    <span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
                        Kabupaten Kampar</span>
                </div>
                <div class="pos" id="_500:292" style="top:292;left:500">
                    <span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
                        di- </span>
                </div>
                <div class="pos" id="_464:314" style="top:314;left:464">
                    <span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
                    </span>
                </div>
                <div class="pos" id="_550:314" style="top:314;left:550">
                    <span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
                        <span style="font-weight:bold"><u> Bangkinang</u></span></span>
                </div>
                <div class="pos" id="_175:358" style="top:358;left:175">
                    <span id="_16.2" style="font-style:italic; font-family:Times New Roman; font-size:16.2px; color:#000000">
                        Bismillahirrahmanirrahim</span>
                </div>
                <div class="pos" id="_175:380" style="top:380;left:175">
                    <span id="_16.2" style="font-style:italic; font-family:Times New Roman; font-size:16.2px; color:#000000">
                        Assalamu&#146;alaikum Wr. Wb.</span>
                </div>
                <div class="pos" id="_200:424" style="top:424;left:200">
                    <span id="_16.8" style=" font-family:Times New Roman; font-size:16.8px; color:#000000">
                        Menindaklanjuti Surat dari Kepala Desa Sei Lembu Makmur Kecamatan Tapung </span>
                </div>
                <div class="pos" id="_175:446" style="top:446;left:175">
                    <span id="_16.8" style=" font-family:Times New Roman; font-size:16.8px; color:#000000">
                        Kabupaten Kampar Nomor: <?php echo $s->no_smiskin ?> tanggal <span id="_15.4" style=" font-size:15.4px"><?php echo $s->tgl_smiskin ?></span> tentang </span>
                </div>
                <div class="pos" id="_175:468" style="top:468;left:175">
                    <span id="_16.8" style=" font-family:Times New Roman; font-size:16.8px; color:#000000">
                        Keterangan Tidak Mampu atas nama: <span style="font-weight:bold"> <b><?php echo $s->nama ?></b> </span> Kami sampaikan hal
                    </span>
                </div>
                <div class="pos" id="_175:490" style="top:490;left:175">
                    <span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
                        sebagai berikut:</span>
                </div>
                <div class="pos" id="_173:532" style="top:532;left:173">
                    <span id="_16.8" style=" font-family:Times New Roman; font-size:16.8px; color:#000000">
                        1. Berdasarkan Undang- Undang Nomor 13 Tahun 2011 Tentang Penanganan Fakir </span>
                </div>
                <div class="pos" id="_200:560" style="top:560;left:200">
                    <span id="_16.1" style=" font-family:Times New Roman; font-size:16.1px; color:#000000">
                        Miskin Pasal 1 ayat 1, 2 dan 3.</span>
                </div>
                <div class="pos" id="_175:618" style="top:585;left:175">
                    <span id="_16.1" style=" font-family:Times New Roman; font-size:16.1px; color:#000000">
                        2. Sehubungan dengan hal tersebut kami memberikan Rekomendasi kepada<span style="font-weight:bold">
                        </span><span style="font-weight:bold"> </span> nama </span>
                </div>
                <div class="pos" id="_199:647" style="top:610;left:199">
                    <span id="_16.1" style=" font-family:Times New Roman; font-size:16.1px; color:#000000">
                        tersebut di atas untuk mendapatkan Pelayanan Kesehatan dengan sumber dana APBD </span>
                </div>
                <div class="pos" id="_199:675" style="top:630;left:199">
                    <span id="_16.1" style=" font-family:Times New Roman; font-size:16.1px; color:#000000">
                        Kabupaten Kampar melalui Dinas Kesehatan Kabupaten Kampar sesuai dengan </span>
                </div>
                <div class="pos" id="_199:704" style="top:650;left:199">
                    <span id="_16.1" style=" font-family:Times New Roman; font-size:16.1px; color:#000000">
                        aturan yang berlaku. </span>
                </div>
                <div class="pos" id="_199:747" style="top:700;left:199">
                    <span id="_16.1" style=" font-family:Times New Roman; font-size:16.1px; color:#000000">
                        Demikian disampaikan atas perhatian dan kerjasamanya diucapkan terima kasih.</span>
                </div>
                <div class="pos" id="_174:769" style="top:720;left:174">
                    <span id="_16.1" style="font-style:italic; font-family:Times New Roman; font-size:16.1px; color:#000000">
                        Wassalamu&#146;alaikum, Wr. Wb. </span>
                </div>
                <div class="pos" id="_188:813" style="top:813;left:188">
                    <span id="_16.1" style="font-style:italic; font-family:Times New Roman; font-size:16.1px; color:#000000">
                    </span>
                </div>
                <div class="pos" id="_511:835" style="top:780;left:490">
                    <span id="_16.1" style=" font-family:Times New Roman; font-size:16.1px; color:#000000">
                        a.n. KEPALA DINAS SOSIAL</span>
                </div>
                <div class="pos" id="_505:857" style="top:800;left:505">
                    <span id="_16.1" style=" font-family:Times New Roman; font-size:16.1px; color:#000000">
                        KABUPATEN KAMPAR</span>
                </div>
                <div class="pos" id="_420:879" style="top:820;left:470">
                    <span id="_16.1" style=" font-family:Times New Roman; font-size:16.1px; color:#000000">
                        Kabid Perlindungan & Jaminan Sosial </span>
                </div>
                <div class="pos" id="_567:967" style="top:900;left:525">
                    <span id="_16.1" style="font-weight:bold; font-family:Times New Roman; font-size:16.1px; color:#000000">
                        <u>HJ. ROSMIATI, SH</u> </span>
                </div>
                <div class="pos" id="_497:989" style="top:920;left:497">
                    <span id="_16.1" style=" font-family:Times New Roman; font-size:16.1px; color:#000000">
                        NIP. 19720101 199303 2 012</span>
                </div>
                <div class="pos" id="_100:1122" style="top:1122;left:100">
                    <span id="_16.1" style="font-weight:bold; font-family:Times New Roman; font-size:16.1px; color:#000000">
                    </span>
                </div>
                <div class="pos" id="_100:1166" style="top:1000;left:100;">
                    <span id="_16.1" style="font-weight:bold; font-family:Times New Roman; font-size:16.1px; color:#000000">
                        <u>Tembusan, Disampaikan Kepada Yth:</u> </span>

                </div>
                <div class="pos" id="_100:1187" style="top:1020;left:100">
                    <span id="_16.1" style=" font-family:Times New Roman;  font-size:16.1px; color:#000000">
                        1. Bupati Kampar di Bangkinang</span>
                </div>
                <div class="pos" id="_100:1209" style="top:1050;left:100">
                    <span id="_16.1" style=" font-family:Times New Roman; font-size:16.1px; color:#000000">
                        2. Arsip. </span>
                </div>
            </nowrap>
        </nobr>
    <?php } ?>


</body>

</html>