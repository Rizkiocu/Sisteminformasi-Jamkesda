<!DOCTYPE html>
<html>

<head>
    <style type="text/css">
        <!--
        body {
            font-family: Arial;
            font-size: 14px
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

    <?php foreach ($surat as $s) { ?>
        <nobr>
            <nowrap>
                <div class="pos" id="_0:0" style="top:5;left: 10;">
                    <img name="_1400:850" src="assets/images/dinsos5.png" height="125" width="125" border="0" usemap="#Map">

                </div>
                <br><br><br><br><br><br><br><br><br>
                <hr class="line-title" style=" border: 2px solid black; left: 100; ">

                <div class="pos" id="_272:42" style="top:8;left:150">
                    <span id="_21.4" style="font-weight:bold; font-family:Times New Roman; font-size:21.4px; color:#000000">
                        PEMERINTAH KABUPATEN KAMPAR</span>
                </div>
                <div class="pos" id="_349:71" style="top:30;left:205">
                    <span id="_36.8" style="font-weight:bold; font-family:Times New Roman; font-size:36.8px; color:#000000">
                        DINAS SOSIAL </span>
                </div>
                <div class="pos" id="_335:108" style="top:63;left:193">
                    <span id="_14.8" style="font-weight:bold; font-family:Arial; font-size:14.8px; color:#000000">
                        JALAN TUANKU TAMBUSAI TELP. (0762)</span>
                </div>
                <div class="pos" id="_388:125" style="top:78;left:240">
                    <span id="_12.1" style=" font-family:Times New Roman; font-size:12.1px; color:#000000">
                        Email: dinassosialkampar@gmail.com</span>
                </div>
                <div class="pos" id="_394:140" style="top:90;left:245">
                    <span id="_18.9" style="font-weight:bold; font-family:Arial; font-size:18.9px; color:#000000">
                        B A N G K I N A N G</span>
                </div>

                <div class="pos" id="_707:142" style="top:95;left:470">
                    <span id="_10.8" style=" font-family:Arial; font-size:10.8px; color:#000000">
                        Kode Pos: 28412</span>
                </div>
                <div class="pos" id="_493:204" style="top:130;left:370">
                    <span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
                        Bangkinang, <span id="_14.8" style=" font-size:14.8px">
                            <?php
                            $tanggall = date('d', strtotime($s->tgl_suratkeluar));
                            $bulan = date('m', strtotime($s->tgl_suratkeluar));
                            $tahun = date('Y', strtotime($s->tgl_suratkeluar));
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
                <div class="pos" id="_99:248" style="top:160;left:40">
                    <span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
                        Nomor </span>
                </div>
                <div class="pos" id="_178:248" style="top:160;left:100">
                    <span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
                        : <?php echo $s->no_instansi; ?>/DINSOS_BPJS/<?php $format = date('Y', strtotime($s->tgl_suratkeluar));
                                                                        echo $format ?>/<?php echo $s->no_skeluar ?></td>
                    </span>
                </div>
                <div class="pos" id="_493:248" style="top:160;left:370">
                    <span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
                        Kepada. </span>
                </div>
                <div class="pos" id="_99:270" style="top:180;left:40">
                    <span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
                        Lampiran &nbsp; &nbsp;: -</span>
                </div>
                <div class="pos" id="_454:270" style="top:180;left:347">
                    <span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
                        Yth. Kepala Dinas Kesehatan </span>
                </div>
                <div class="pos" id="_99:292" style="top:200;left:40">
                    <span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
                        Perihal &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <span style="font-weight:bold"><u> Rekomendasi </u></span></span>
                </div>
                <div class="pos" id="_499:292" style="top:200;left:370">
                    <span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
                        Kabupaten Kampar</span>
                </div>
                <div class="pos" id="_500:314" style="top:220;left:370">
                    <span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
                        di- </span>
                </div>
                <div class="pos" id="_464:336" style="top:336;left:464">
                    <span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
                    </span>
                </div>
                <div class="pos" id="_550:336" style="top:240;left:370">
                    <span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
                        <span style="font-weight:bold"> <u>Bangkinang</u></span></span>
                </div>
                <div class="pos" id="_175:380" style="top:290;left:100">
                    <span id="_16.2" style="font-style:italic; font-family:Times New Roman; font-size:16.2px; color:#000000">
                        Bismillahirrahmanirrahim</span>
                </div>
                <div class="pos" id="_175:402" style="top:308;left:100">
                    <span id="_16.2" style="font-style:italic; font-family:Times New Roman; font-size:16.2px; color:#000000">
                        Assalamu&#146;alaikum Wr. Wb.</span>
                </div>
                <div class="pos" id="_200:446" style="top:340;left:120">
                    <span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
                        Berpedoman pada Program Kerja Bidang Perlindungan dan Jaminan Sosial Dinas </span>
                </div>
                <div class="pos" id="_175:468" style="top:360;left:100">
                    <span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
                        Kabupaten Kampar Tahun 2020, Kami sampaikan hal sebagai berikut:</span>
                </div>
                <div class="pos" id="_173:509" style="top:390;left:100">
                    <span id="_16.8" style=" font-family:Times New Roman; font-size:16.8px; color:#000000">
                        1. Berdasarkan Undang- Undang Nomor 13 Tahun 2011 Tentang Penanganan Fakir </span>
                </div>
                <div class="pos" id="_200:538" style="top:415;left:113">
                    <span id="_16.1" style=" font-family:Times New Roman; font-size:16.1px; color:#000000">
                        Miskin Pasal 1 ayat 1, 2 dan 3.</span>
                </div>
                <div class="pos" id="_175:596" style="top:435;left:100;">
                    <span id="_16.1" style=" font-family:Times New Roman; font-size:16.1px; color:#000000;position: relative">
                        2. Nama <b><?php echo $s->Nama ?></b> terdaftar dalam BDT (Basis Data Terpadu) degan No. ID BDT </span>
                </div><br><br><br><br><br><br>
                <div class="pos" id="_200:624" style="top:460;left:113">
                    <span id="_16.1" style=" font-family:Times New Roman; font-size:16.1px; color:#000000">
                        <b> <?php echo $s->id_bdt ?></b> dan telah diusulkan pada PBI APBD/APBN</span>
                </div>
                <div class="pos" id="_175:675" style="top:485;left:100">
                    <span id="_16.1" style=" font-family:Times New Roman; font-size:16.1px; color:#000000">
                        3. Sehubungan dengan hal tersebut kami memberikan Rekomendasi untuk mendapatkan </span>
                </div>
                <div class="pos" id="_200:704" style="top:510;left:113">
                    <span id="_16.5" style=" font-family:Times New Roman; font-size:16.5px; color:#000000">
                        Pelayanan Kesehatan melalui Dinas Kesehatan Kabupaten Kampar sesuai dengan </span>
                </div>
                <div class="pos" id="_200:733" style="top:540;left:113">
                    <span id="_16.1" style=" font-family:Times New Roman; font-size:16.1px; color:#000000">
                        aturan yang berlaku. </span>
                </div>
                <div class="pos" id="_200:775" style="top:565;left:113">
                    <span id="_16.1" style=" font-family:Times New Roman; font-size:16.1px; color:#000000">
                        Demikian disampaikan atas perhatian dan kerjasamanya diucapkan terima kasih.</span>
                </div>
                <div class="pos" id="_175:797" style="top:585;left:100">
                    <span id="_16.1" style="font-style:italic; font-family:Times New Roman; font-size:16.1px; color:#000000">
                        Wassalamu&#146;alaikum, Wr. Wb. </span>
                </div>
                <div class="pos" id="_188:842" style="top:842;left:188">
                    <span id="_16.1" style="font-style:italic; font-family:Times New Roman; font-size:16.1px; color:#000000">
                    </span>
                </div>
                <div class="pos" id="_511:864" style="top:610;left:340">
                    <span id="_16.1" style=" font-family:Times New Roman; font-size:16.1px; color:#000000">
                        a.n. KEPALA DINAS SOSIAL</span>
                </div>
                <div class="pos" id="_505:886" style="top:622;left:360">
                    <span id="_16.1" style=" font-family:Times New Roman; font-size:16.1px; color:#000000">
                        KABUPATEN KAMPAR</span>
                </div>
                <div class="pos" id="_428:908" style="top:633;left:331">
                    <span id="_16.1" style=" font-family:Times New Roman; font-size:16.1px; color:#000000">
                        Kabid Perlindungan & Jaminan Sosial </span>
                </div>
                <div class="pos" id="_435:930" style="top:930;left:435">
                    <span id="_16.1" style=" font-family:Times New Roman; font-size:16.1px; color:#000000">
                    </span>
                </div>
                <div class="pos" id="_567:1018" style="top:695;left:360">
                    <span id="_16.1" style="font-weight:bold; font-family:Times New Roman; font-size:16.1px; color:#000000">
                        <u>HJ. ROSMIATI, SH</u></span>
                </div>
                <div class="pos" id="_497:1040" style="top:710;left:340">
                    <span id="_16.1" style=" font-family:Times New Roman; font-size:16.1px; color:#000000">
                        NIP. 19720101 199303 2 012</span>
                </div>
                <div class="pos" id="_100:1172" style="top:1172;left:100">
                    <span id="_16.1" style="font-weight:bold; font-family:Times New Roman; font-size:16.1px; color:#000000">
                    </span>
                </div>
                <div class="pos" id="_100:1166" style="top:740;left:100;">
                    <span id="_16.1" style="font-weight:bold; font-family:Times New Roman; font-size:16.1px; color:#000000">
                        <u>Tembusan, Disampaikan Kepada Yth:</u> </span>

                </div>
                <div class="pos" id="_100:1187" style="top:758;left:100">
                    <span id="_16.1" style=" font-family:Times New Roman;  font-size:16.1px; color:#000000">
                        1. Bupati Kampar di Bangkinang</span>
                </div>
                <div class="pos" id="_100:1209" style="top:770;left:100">
                    <span id="_16.1" style=" font-family:Times New Roman; font-size:16.1px; color:#000000">
                        2. Arsip. </span>
                </div>
            </nowrap>
        </nobr>
    <?php } ?>


</body>

</html>