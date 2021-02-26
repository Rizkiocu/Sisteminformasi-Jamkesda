-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2020 at 03:15 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jamkesda`
--

-- --------------------------------------------------------

--
-- Table structure for table `bdt`
--

CREATE TABLE `bdt` (
  `IDARTBDT` varchar(50) NOT NULL,
  `id_bdt` varchar(50) NOT NULL,
  `RUTA6` varchar(50) NOT NULL,
  `NoPesertaPBDT` varchar(50) NOT NULL,
  `Kecamatan` varchar(50) NOT NULL,
  `Desa` varchar(50) NOT NULL,
  `NoPesertaPKH` varchar(50) NOT NULL,
  `ada_pkh` varchar(50) NOT NULL,
  `No Peserta KKS 2016` varchar(50) NOT NULL,
  `NoPesertaPBI` varchar(50) NOT NULL,
  `NoArtPBI` varchar(50) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `TmpLahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `nik` varchar(50) NOT NULL,
  `KK` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bdt`
--

INSERT INTO `bdt` (`IDARTBDT`, `id_bdt`, `RUTA6`, `NoPesertaPBDT`, `Kecamatan`, `Desa`, `NoPesertaPKH`, `ada_pkh`, `No Peserta KKS 2016`, `NoPesertaPBI`, `NoArtPBI`, `Nama`, `jenis_kelamin`, `TmpLahir`, `tgl_lahir`, `nik`, `KK`) VALUES
('140602100100045502  ', '1406021001000455  ', '415M46', '140602100100000034            ', 'KOTO KAMPAR HULU', 'TANJUNG', '140602116050007                                   ', '      1', '       ', 'NULL         ', 'NULL         ', 'NILAWATI   ', '     2', 'PADANG   ', '1987-08-20', '1307056008870002              ', '1401211107180002    \r'),
('140605000200009803  ', '1406050002000098  ', '35ITHF', '140605000200910020            ', 'BANGKINANG KOTA', 'LANGGINI', '                                                  ', '      0', '       ', '0000289936462', '0000289937575', 'RIZKI KURNIAWAN ', '     1', 'BANGKINANG  ', '1999-10-01', '1401010110990002              ', '1401010301083952    \r'),
('140605000200002401  ', '1406050002000024  ', '35IT9J', '140605000205010002            ', 'BANGKINANG KOTA', 'LANGGINI', '                                                  ', '      0', '35it9j ', 'NULL         ', 'NULL         ', 'SUHATRI ', '     1', 'BUKIT TINGGI  ', '1947-02-02', '1401010202470002              ', '1401010402100008    \r'),
('140605000200006103  ', '1406050002000061  ', '35ITBH', '140605000201010011            ', 'BANGKINANG KOTA', 'LANGGINI', '                                                  ', '      0', '35itbh ', '0000289493785', '0000289493829', 'YURDA FADLI ', '     1', 'BANGKINANG  ', '1997-06-08', '1401010806970003              ', '1401010604180002    \r'),
('140605000200002901  ', '1406050002000029  ', '      ', '140605000200000034            ', 'BANGKINANG KOTA', 'LANGGINI', '                                                  ', '      2', '       ', 'NULL         ', 'NULL         ', 'YEFRI SANDRI   ', '     1', 'BUKITTINGGI   ', '1967-05-09', '1401010905670001              ', '1401010301083149    \r'),
('140605000200005103  ', '1406050002000051  ', '35ITB0', '140605000200910010            ', 'BANGKINANG KOTA', 'LANGGINI', '                                                  ', '      0', '       ', '0002601586214', '0002601586236', 'MHD. FAJAR ', '     1', 'BANGKINANG  ', '2007-08-09', '1401010908070003              ', '1401012305120003    \r'),
('140605000200004703  ', '1406050002000047  ', '35ITAV', '140605000200110006            ', 'BANGKINANG KOTA', 'LANGGINI', '                                                  ', '      0', '       ', 'NULL         ', 'NULL         ', 'M RIDHO ', '     1', 'BANGKINANG  ', '2003-10-09', '1401010910040001              ', '1401011409120002    \r'),
('140605000200007301  ', '1406050002000073  ', '35ITI7', '140605000200110016            ', 'BANGKINANG KOTA', 'LANGGINI', '                                                  ', '      0', '35iti7 ', '0002176642146', '0002176642146', 'ANAS RUDIN ', '     1', 'BANGKINANG  ', '1972-10-12', '1401011210720002              ', '1401010301083207    \r'),
('140605000200003601  ', '1406050002000036  ', 'DB5QVT', '140605000200020004            ', 'BANGKINANG KOTA', 'LANGGINI', '                                                  ', '      0', 'db5qvt ', '0002602073979', '0002602073979', 'A SISWANTO ', '     1', 'T. PINANG   ', '1963-12-12', '1401011212630002              ', '1401011608080002    \r'),
('140605000200009603  ', '1406050002000096  ', '35ITHD', '140605000200410006            ', 'BANGKINANG KOTA', 'LANGGINI', '                                                  ', '      0', '35ithd ', '0000289932232', '0000289932333', 'DAVID DAVIJUL  ', '     1', 'BANGKINANG  ', '1995-07-19', '1401011907950009              ', '1401010309120002    \r'),
('140605000200002602  ', '1406050002000026  ', '415NXD', '140605000200000180            ', 'BANGKINANG KOTA', 'LANGGINI', '140605016008858                                   ', '      1', '       ', '0002588889543', '0002588889543', 'GURIS   ', '     2', 'BANJAR NEGARA    ', '1975-05-02', '1401014205750001              ', '1401010301082546    \r'),
('140605000200011701  ', '1406050002000117  ', '4YX3F1', '140605000200000009            ', 'BANGKINANG KOTA', 'LANGGINI', '                                                  ', '      0', '       ', '0002601586271', '0002601586271', 'JUNIANTI   ', '     2', 'BANGKINANG  ', '1976-06-06', '1401014606760002              ', '1401011407140001    \r'),
('140605000200009006  ', '1406050002000090  ', '35ITH1', '140605000200810010            ', 'BANGKINANG KOTA', 'LANGGINI', '                                                  ', '      0', '35ith1 ', '0000289909754', '0000289911609', 'SHELA SEPTIANI ', '     2', 'BANGKINANG  ', '1998-09-08', '1401014809980003              ', '1401012109100005    \r'),
('140605000200007307  ', '1406050002000073  ', '35ITI7', '140605000200110016            ', 'BANGKINANG KOTA', 'LANGGINI', '                                                  ', '      0', '35iti7 ', '0000289718695', '0000289719281', 'MIFTAHUL JANNAH ', '     2', 'BANGKINANG  ', '1998-11-04', '1401016512980002              ', '1401010301083207    \r'),
('140605000200005106  ', '1406050002000051  ', '35ITB0', '140605000200910010            ', 'BANGKINANG KOTA', 'LANGGINI', '                                                  ', '      0', '       ', '0002526678562', '0002526678562', 'RIRI ARIANTI   ', '     2', 'BUKIT TINGGI  ', '1995-11-30', '1401017001950003              ', '1401012305120003    \r'),
('140602100100047905  ', '1406021001000479  ', '415K4S', '140602100100000042            ', 'KOTO KAMPAR HULU', 'TANJUNG', '                                                  ', '      0', '       ', 'NULL         ', 'NULL         ', 'ROY NALDI  ', '     1', 'TANJUNG  ', '1998-05-01', '1401040105980007              ', '1401040906100002    \r'),
('140602100100049301  ', '1406021001000493  ', '35IF8F', '140602100102410002            ', 'KOTO KAMPAR HULU', 'TANJUNG', '                                                  ', '      0', '35if8f ', '0000289956813', '0000289956813', 'ZAIRUL  ', '     1', 'TANJUNG  ', '1964-07-01', '1401040107640056              ', '1401041511100010    \r'),
('140602100100047907  ', '1406021001000479  ', '415K4S', '140602100100000042            ', 'KOTO KAMPAR HULU', 'TANJUNG', '                                                  ', '      0', '       ', '0002640112132', '0002589846524', 'M. ABDILLAH ', '     1', 'TANJUNG  ', '2009-11-25', '1401042511090001              ', '1401040906100002    \r'),
('140602100100052303  ', '1406021001000523  ', '415M7T', '140602100100000204            ', 'KOTO KAMPAR HULU', 'TANJUNG', '                                                  ', '      0', '       ', 'NULL         ', 'NULL         ', 'DWI PERNANDO   ', '     1', 'TANJUNG  ', '2004-02-29', '1401042902040001              ', '1401042102090025    \r'),
('140602100100053101  ', '1406021001000531  ', '35IFEV', '140602100100510008            ', 'KOTO KAMPAR HULU', 'TANJUNG', '                                                  ', '      0', '       ', '0002784683496', '0002784683496', 'NUARIS  ', '     2', 'TANJUNG  ', '1950-07-01', '1401044107500042              ', '1401041911100006    \r'),
('140602100100045905  ', '1406021001000459  ', '4YWOOB', '140602100100000041            ', 'KOTO KAMPAR HULU', 'TANJUNG', '                                                  ', '      0', '       ', '0000289933367', '0000289933457', 'INCIK   ', '     2', 'TANJUNG  ', '1978-08-02', '1401044208780001              ', '1401042212100013    \r'),
('140602100100052805  ', '1406021001000528  ', '35IFES', '140602100100110013            ', 'KOTO KAMPAR HULU', 'TANJUNG', '                                                  ', '      0', '35ifes ', 'NULL         ', 'NULL         ', 'ENNY SULEHAN TARI  ', '     2', 'BANGKALAN   ', '1982-10-02', '1401044210820002              ', '1401042303090009    \r'),
('140602100100052502  ', '1406021001000525  ', '4YWNHJ', '140602100100000162            ', 'KOTO KAMPAR HULU', 'TANJUNG', '                                                  ', '      2', '       ', '0002784688299', '0002784688301', 'LETRA NENGSI   ', '     2', 'TANJUNG  ', '1983-05-04', '1401044405830006              ', '1401042605100041    \r'),
('140603100200016303  ', '1406031002000163  ', '35IIQS', '140603100200410028            ', 'SALO', 'GANTING', '                                                  ', '      0', '35iiqs ', '0000290023018', '0000290023457', 'ZALDI ALFARUQI SAID   ', '     1', 'KOTO AIR MANIS   ', '2002-03-17', '1401131703020003              ', '1401132302090006    \r'),
('140603100200016804  ', '1406031002000168  ', '35IIQA', '140603100200410026            ', 'SALO', 'GANTING', '                                                  ', '      0', '35iiqa ', '0000289982564', '0000289984612', 'ASRI RAHAYU ', '     2', 'GANTING  ', '2007-11-10', '1401135011070001              ', '1401130712090002    \r'),
('140603100200016005  ', '1406031002000160  ', '35IIQP', '140603100200410027            ', 'SALO', 'GANTING', '                                                  ', '      0', '       ', '0000290014694', '0000290016494', 'NELFA YARSI ', '     2', 'SALO BARU   ', '1995-08-21', '1401136108950003              ', '1401132404090007    \r'),
('140602100100050901  ', '1406021001000509  ', '415MR8', '140602100100020005            ', 'KOTO KAMPAR HULU', 'TANJUNG', '                                                  ', '      0', '       ', '0001088821866', '0001088821866', 'ARIZON  ', '     1', 'TANJUNG  ', '1982-01-01', '1401210101820001              ', '1401211104110012    \r'),
('140602100100045801  ', '1406021001000458  ', '4YWOO6', '140602100100000247            ', 'KOTO KAMPAR HULU', 'TANJUNG', '                                                  ', '      0', '       ', '0002832236392', '0002832236392', 'ROMI SWANDI ', '     1', 'PAYAKUMBUH  ', '1983-06-06', '1401210606830002              ', '1401211712120007    \r'),
('140602100100048503  ', '1406021001000485  ', '35IF84', '140602100101010006            ', 'KOTO KAMPAR HULU', 'TANJUNG', '                                                  ', '      0', '35if84 ', '0000290091025', '0000290091699', 'JASMAN  ', '     1', 'TANJUNG  ', '1993-06-13', '1401211306930001              ', '1401212206110004    \r'),
('140602100100050902  ', '1406021001000509  ', '415MR8', '140602100100020005            ', 'KOTO KAMPAR HULU', 'TANJUNG', '140602116050043                                   ', '      1', '       ', '0002594272746', '0002594272746', 'ROSNI   ', '     2', 'TANJUNG  ', '1991-01-01', '1401214101910001              ', '1401211104110012    \r'),
('140602100100048401  ', '1406021001000484  ', '      ', '140602100102810003            ', 'KOTO KAMPAR HULU', 'TANJUNG', '                                                  ', '      2', '       ', '0000290082352', '0000290086874', 'PUTRI HERLINDA ', '     2', 'TANJUNG  ', '1995-01-10', '1401215001950001              ', '1401041512090008    \r'),
('140602100100045210  ', '1406021001000452  ', '415LP6', '140602100100810016            ', 'KOTO KAMPAR HULU', 'TANJUNG', '                                                  ', '      0', '35iffm ', 'NULL         ', 'NULL         ', 'DEPA TULHUSNA  ', '     2', 'TANJUNG  ', '2012-05-16', '1401215605120001              ', '1401211808110008    \r'),
('140602100100044803  ', '1406021001000448  ', '50NXU5', '140602100110000021            ', 'KOTO KAMPAR HULU', 'TANJUNG', '140602100100005                                   ', '      1', '       ', 'NULL         ', 'NULL         ', 'AGUSTI NARSIH  ', '     2', 'TANJUNG  ', '1989-08-23', '1401216808890001              ', '1401210704110003    \r'),
('140602100100043704  ', '1406021001000437  ', '50NXTU', '140602100110000010            ', 'KOTO KAMPAR HULU', 'TANJUNG', '                                                  ', '      0', '       ', 'NULL         ', 'NULL         ', 'PIHILMAN   ', '     1', '  ', '0000-00-00', '1507110809960002              ', '                    \r'),
('140602100100045003  ', '1406021001000450  ', '50NXU7', '140602100110000023            ', 'KOTO KAMPAR HULU', 'TANJUNG', '140602100100017                                   ', '      1', '       ', '0000302417559', '0000302419923', 'LISDAWATI  ', '     2', 'TANJUNG  ', '0000-00-00', '1507116904040001              ', '                    \r'),
('140605000200007001  ', '1406050002000070  ', '35ITHZ', '140605000205310018            ', 'BANGKINANG KOTA', 'LANGGINI', '                                                  ', '      0', '       ', 'NULL         ', 'NULL         ', 'NOFERDI ', '     1', '  ', '0000-00-00', 'NULL                          ', '                    \r');

-- --------------------------------------------------------

--
-- Table structure for table `kis`
--

CREATE TABLE `kis` (
  `IDARTBDT` varchar(50) NOT NULL,
  `NOKA_BPJS` varchar(50) NOT NULL,
  `PSNOKA_BPJS` varchar(50) NOT NULL,
  `NM_KECCAPIL` varchar(50) NOT NULL,
  `NM_DESACAPIL` varchar(50) NOT NULL,
  `ALAMAT` varchar(50) NOT NULL,
  `NAMA` varchar(50) NOT NULL,
  `NOKK` varchar(50) NOT NULL,
  `NIK` varchar(50) NOT NULL,
  `JENIS_KELAMIN` varchar(50) NOT NULL,
  `TGLLAHIR` date NOT NULL,
  `USIA` varchar(50) NOT NULL,
  `HUBKEL` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kis`
--

INSERT INTO `kis` (`IDARTBDT`, `NOKA_BPJS`, `PSNOKA_BPJS`, `NM_KECCAPIL`, `NM_DESACAPIL`, `ALAMAT`, `NAMA`, `NOKK`, `NIK`, `JENIS_KELAMIN`, `TGLLAHIR`, `USIA`, `HUBKEL`) VALUES
('\'140605100900005301', '\'0000289287325', '\'0000289287325', 'BANGKINANG', 'BINUANG', 'DUSUN BUKIT PERMAI RW 006 RT 003', 'RUSDI', '\'1401151008090006', '\'1401151710790003', '1', '1979-10-17', '35', 1),
('\'140605100900015507', '\'0000290038206', '\'0000290041828', 'BANGKINANG', 'BINUANG', 'DUSUN BUKIT PERMAI RW 006 RT 003', 'PARAS PAUZI', '\'1401151501082366', '\'1401152402060005', '1', '2006-02-24', '9', 3),
('\'140605100900019705', '\'0000289162258', '\'0000289162697', 'BANGKINANG', 'BINUANG', 'DUSUN BUKIT PERMAI RW 006 RT 003', 'ARDI NALTAMI', '\'1401151501082027', '\'1401152906030004', '1', '2003-06-29', '12', 3),
('\'140605100900005304', '\'0000289287325', '\'0000289288091', 'BANGKINANG', 'BINUANG', 'DUSUN BUKIT PERMAI RW 006 RT 003', 'MHD DIMAS ADITYA', '\'1401151008090006', '\'1401153008070004', '1', '2007-08-30', '7', 3),
('\'140605100900023202', '\'0000289087288', '\'0000289087334', 'BANGKINANG', 'BINUANG', 'DUSUN BUKIT PERMAI RW 006 RT 003', 'SITI AMINAH', '\'1401151405090005', '\'1401154107650020', '2', '1965-07-01', '50', 2),
('\'140605100900023203', '\'0000289087288', '\'0000289087446', 'BANGKINANG', 'BINUANG', 'DUSUN BUKIT PERMAI RW 006 RT 003', 'LASMA YANTI', '\'1401151405090005', '\'1401154203870001', '2', '1987-03-02', '28', 3),
('\'140605100900025405', '\'0000289130218', '\'0000289133234', 'BANGKINANG', 'BINUANG', 'DUSUN BUKIT PERMAI RW 006 RT 003', 'RINI PUTRIYANI', '\'1401150403100014', '\'1401154304050005', '2', '2005-04-03', '10', 3),
('\'140605100900025406', '\'0000289130218', '\'0000289132198', 'BANGKINANG', 'BINUANG', 'DUSUN BUKIT PERMAI RW 006 RT 003', 'SRI ASTUTI', '\'1401150403100014', '\'1401154707920004', '2', '1992-07-01', '22', 3),
('\'140605100900005305', '\'0000289287325', '\'0000289288811', 'BANGKINANG', 'BINUANG', 'DUSUN BUKIT PERMAI RW 006 RT 003', 'AZIZAH', '\'1401151008090006', '\'1401154712670001', '2', '1967-12-07', '47', 7),
('\'140605100900015502', '\'0000290038206', '\'0000290039343', 'BANGKINANG', 'BINUANG', 'DUSUN BUKIT PERMAI RW 006 RT 003', 'MARIATUN', '\'1401151501082366', '\'1401154807670002', '2', '1967-07-08', '47', 2),
('\'140605100900025402', '\'0000289130218', '\'0000289130589', 'BANGKINANG', 'BINUANG', 'DUSUN BUKIT PERMAI RW 006 RT 003', 'NURSIA', '\'1401150403100014', '\'1401154907670002', '2', '1967-07-09', '47', 2),
('\'140605100900023205', '\'0000289087288', '\'0000289089314', 'BANGKINANG', 'BINUANG', 'DUSUN BUKIT PERMAI RW 006 RT 003', 'EKA SARTIKA', '\'1401151405090005', '\'1401155512940003', '2', '1994-12-15', '25', 3),
('\'140605100900005302', '\'0000289287325', '\'0000289287628', 'BANGKINANG', 'BINUANG', 'DUSUN BUKIT PERMAI RW 006 RT 003', 'YUSMANITA', '\'1401151008090006', '\'1401156110860004', '2', '1986-10-21', '28', 2),
('\'140605100900023204', '\'0000289087288', '\'0000289089707', 'BANGKINANG', 'BINUANG', 'DUSUN BUKIT PERMAI RW 006 RT 003', 'ERLIZA', '\'1401151405090005', '\'1401156201980004', '2', '1998-01-22', '17', 3),
('\'140605100900019702', '\'0000289162258', '\'0000289162495', 'BANGKINANG', 'BINUANG', 'DUSUN BUKIT PERMAI RW 006 RT 003', 'NURBEIDHO', '\'1401151501082027', '\'1401156303810002', '2', '1981-03-23', '34', 2),
('\'140605100900025407', '\'0000289130218', '\'0000289132661', 'BANGKINANG', 'BINUANG', 'DUSUN BUKIT PERMAI RW 006 RT 003', 'ELVI HARIANI', '\'1401150403100014', '\'1401156505960001', '2', '1996-05-25', '19', 3),
('140605100900023201', '0000289087288', '0000289087288', 'BANGKINANG', 'BINUANG', 'DUSUN BUKIT PERMAI RW 006 RT 003', 'AZWAR', '1401151405090005', '1401150107600022', '1', '1960-07-01', '55', 1),
('140605100900015503', '0000290038206', '0000290040028', 'BANGKINANG', 'BINUANG', 'DUSUN BUKIT PERMAI RW 006 RT 003', 'AHMAD FIKRI', '1401151501082366', '1401150202960003', '1', '1996-02-02', '19', 3),
('140605100900025403', '0000289130218', '0000289132964', 'BANGKINANG', 'BINUANG', 'DUSUN BUKIT PERMAI RW 006 RT 003', 'MUHAMMAD REZKI', '1401150403100014', '1401150310990001', '1', '1999-10-03', '15', 3),
('140605100900015504', '0000290038206', '0000290041536', 'BANGKINANG', 'BINUANG', 'DUSUN BUKIT PERMAI RW 006 RT 003', 'ALFARIZI', '1401151501082366', '1401150406020004', '1', '2002-06-04', '13', 3),
('140605100900025404', '0000289130218', '0000289133087', 'BANGKINANG', 'BINUANG', 'DUSUN BUKIT PERMAI RW 006 RT 003', 'ASROL AFANDA', '1401150403100014', '1401150712010001', '1', '2001-12-07', '13', 3),
('140605100900019703', '0000289162258', '0000289164633', 'BANGKINANG', 'BINUANG', 'DUSUN BUKIT PERMAI RW 006 RT 003', 'ARIZAL RAMADHAN', '1401151501082027', '1401151209080001', '1', '2008-09-12', '6', 3),
('140605100900023206', '0000289087288', '0000289089112', 'BANGKINANG', 'BINUANG', 'DUSUN BUKIT PERMAI RW 006 RT 003', 'JUPRIADI', '1401151405090005', '1401151401920004', '1', '1992-01-14', '27', 3),
('140605100900019701', '0000289162258', '0000289162258', 'BANGKINANG', 'BINUANG', 'DUSUN BUKIT PERMAI RW 006 RT 003', 'TARMIZI', '1401151501082027', '1401151407700001', '1', '1970-07-14', '44', 1),
('140605100900019704', '0000289162258', '0000289163417', 'BANGKINANG', 'BINUANG', 'DUSUN BUKIT PERMAI RW 006 RT 003', 'IKHSAN RAHMADHANI', '1401151501082027', '1401151509050002', '1', '2005-09-15', '8', 3),
('140605100900015501', '0000290038206', '0000290038206', 'BANGKINANG', 'BINUANG', 'DUSUN BUKIT PERMAI RW 006 RT 003', 'BAKRI', '1401151501082366', '1401151705680003', '1', '1968-05-17', '47', 1);

-- --------------------------------------------------------

--
-- Table structure for table `surat_bdt`
--

CREATE TABLE `surat_bdt` (
  `id_surat` int(5) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `no_instansi` varchar(5) NOT NULL,
  `no_skeluar` varchar(20) NOT NULL,
  `tgl_suratkeluar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat_bdt`
--

INSERT INTO `surat_bdt` (`id_surat`, `nik`, `no_instansi`, `no_skeluar`, `tgl_suratkeluar`) VALUES
(1, '1401010202470002              ', '460', '7049', '2020-05-05'),
(6, '1307056008870002              ', '460', '7050', '2019-06-11');

-- --------------------------------------------------------

--
-- Table structure for table `surat_nonbdt`
--

CREATE TABLE `surat_nonbdt` (
  `id_snonbdt` int(5) NOT NULL,
  `kk` varchar(18) NOT NULL,
  `nik` varchar(18) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `no_instansi` varchar(5) NOT NULL,
  `no_skeluar` varchar(20) NOT NULL,
  `no_smiskin` varchar(25) NOT NULL,
  `tgl_smiskin` date NOT NULL,
  `tgl_skeluar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat_nonbdt`
--

INSERT INTO `surat_nonbdt` (`id_snonbdt`, `kk`, `nik`, `nama`, `no_instansi`, `no_skeluar`, `no_smiskin`, `tgl_smiskin`, `tgl_skeluar`) VALUES
(1, '123456765432234', '123456654321234', 'Atuk', '460', '7050', '34556ffgfg67', '2020-05-14', '2020-05-12'),
(3, '12345676543228', '34567897654334', 'nenek', '460', '7051', '34556ffgfg61', '2020-05-25', '2020-05-22'),
(4, '12345676543226', '12345678901233', 'adelia', '460', '7052', '3455/HHH/1616', '2020-05-19', '2019-07-17');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `nik` varchar(18) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `level` int(1) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`nik`, `username`, `password`, `nama`, `jabatan`, `email`, `level`, `no_hp`, `jenis_kelamin`) VALUES
('11551105411', 'yuli', '827ccb0eea8a706c4c34a16891f84e7b', 'Yulia Restiani', 'Administrator', 'yuliarestiani@gmail.com', 1, '081267118821', 'Perempuan'),
('1165110341', 'godok', '827ccb0eea8a706c4c34a16891f84e7b', 'godok', 'Administrator', 'godok@gmail.com', 1, '082284163929', 'Laki-Laki'),
('1233345', 'rizki', '827ccb0eea8a706c4c34a16891f84e7b', 'Prasetia', 'Kepala Dinas Sosial', 'Prasetia@gmail.com', 2, '09876543', 'Laki-Laki');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bdt`
--
ALTER TABLE `bdt`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `kis`
--
ALTER TABLE `kis`
  ADD PRIMARY KEY (`NIK`);

--
-- Indexes for table `surat_bdt`
--
ALTER TABLE `surat_bdt`
  ADD PRIMARY KEY (`id_surat`),
  ADD KEY `nik` (`nik`);

--
-- Indexes for table `surat_nonbdt`
--
ALTER TABLE `surat_nonbdt`
  ADD PRIMARY KEY (`id_snonbdt`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`nik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `surat_bdt`
--
ALTER TABLE `surat_bdt`
  MODIFY `id_surat` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `surat_nonbdt`
--
ALTER TABLE `surat_nonbdt`
  MODIFY `id_snonbdt` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `surat_bdt`
--
ALTER TABLE `surat_bdt`
  ADD CONSTRAINT `surat_bdt_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `bdt` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
