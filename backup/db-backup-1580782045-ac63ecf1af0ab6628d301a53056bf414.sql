DROP TABLE detail_disposisi_diteruskan_pada;

CREATE TABLE `detail_disposisi_diteruskan_pada` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_disposisi` varchar(25) NOT NULL,
  `diteruskan_pada` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

INSERT INTO detail_disposisi_diteruskan_pada VALUES("1","DSP0001","Kasie Pengujian Kimia");
INSERT INTO detail_disposisi_diteruskan_pada VALUES("2","DSP0001","Kasie Pengujian Mikrobiologi");
INSERT INTO detail_disposisi_diteruskan_pada VALUES("3","DSP0001","");
INSERT INTO detail_disposisi_diteruskan_pada VALUES("4","DSP0002","Kasie Pemeriksaan");
INSERT INTO detail_disposisi_diteruskan_pada VALUES("5","DSP0002","");
INSERT INTO detail_disposisi_diteruskan_pada VALUES("8","DSP0004","Kasie Pemeriksaan");
INSERT INTO detail_disposisi_diteruskan_pada VALUES("9","DSP0004","");
INSERT INTO detail_disposisi_diteruskan_pada VALUES("10","DSP0005","Kasie Penindakan");
INSERT INTO detail_disposisi_diteruskan_pada VALUES("11","DSP0005","");
INSERT INTO detail_disposisi_diteruskan_pada VALUES("12","DSP0006","Kasie Pengujian Kimia");
INSERT INTO detail_disposisi_diteruskan_pada VALUES("13","DSP0006","");
INSERT INTO detail_disposisi_diteruskan_pada VALUES("14","DSP0007","Kasie Pengujian Kimia");
INSERT INTO detail_disposisi_diteruskan_pada VALUES("15","DSP0007","");
INSERT INTO detail_disposisi_diteruskan_pada VALUES("16","DSP0008","Kasie Pengujian Kimia");
INSERT INTO detail_disposisi_diteruskan_pada VALUES("17","DSP0008","");
INSERT INTO detail_disposisi_diteruskan_pada VALUES("18","DSP0009","Kasie Pengujian Kimia");
INSERT INTO detail_disposisi_diteruskan_pada VALUES("19","DSP0009","");
INSERT INTO detail_disposisi_diteruskan_pada VALUES("20","DSP0010","Kasie Pengujian Kimia");
INSERT INTO detail_disposisi_diteruskan_pada VALUES("21","DSP0010","");
INSERT INTO detail_disposisi_diteruskan_pada VALUES("22","DSP0011","Kasie Pengujian Kimia");
INSERT INTO detail_disposisi_diteruskan_pada VALUES("23","DSP0011","");
INSERT INTO detail_disposisi_diteruskan_pada VALUES("24","DSP0001","");
INSERT INTO detail_disposisi_diteruskan_pada VALUES("25","DSP003","Kasie Pemeriksaan");
INSERT INTO detail_disposisi_diteruskan_pada VALUES("26","DSP003","");
INSERT INTO detail_disposisi_diteruskan_pada VALUES("27","DSP0001","");
INSERT INTO detail_disposisi_diteruskan_pada VALUES("28","DSP0002","");
INSERT INTO detail_disposisi_diteruskan_pada VALUES("29","DSP0004","");
INSERT INTO detail_disposisi_diteruskan_pada VALUES("30","DSP0005","");
INSERT INTO detail_disposisi_diteruskan_pada VALUES("31","DSP0006","");
INSERT INTO detail_disposisi_diteruskan_pada VALUES("32","DSP0007","");
INSERT INTO detail_disposisi_diteruskan_pada VALUES("33","DSP0008","");
INSERT INTO detail_disposisi_diteruskan_pada VALUES("34","DSP0009","");
INSERT INTO detail_disposisi_diteruskan_pada VALUES("35","DSP0010","");
INSERT INTO detail_disposisi_diteruskan_pada VALUES("36","DSP0011","");
INSERT INTO detail_disposisi_diteruskan_pada VALUES("37","DSP0012","Kasie Pemeriksaan");
INSERT INTO detail_disposisi_diteruskan_pada VALUES("38","DSP0012","");



DROP TABLE detail_disposisi_keterangan_disposisi;

CREATE TABLE `detail_disposisi_keterangan_disposisi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_disposisi` varchar(25) NOT NULL,
  `keterangan_disposisi` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

INSERT INTO detail_disposisi_keterangan_disposisi VALUES("1","DSP0001","Pengujian untuk dilaksanakan");
INSERT INTO detail_disposisi_keterangan_disposisi VALUES("2","DSP0002","Untuk ditelaah dan usulan");
INSERT INTO detail_disposisi_keterangan_disposisi VALUES("3","DSP0002","-");
INSERT INTO detail_disposisi_keterangan_disposisi VALUES("6","DSP0004","Sebagai bahan informasi dan evaluasi");
INSERT INTO detail_disposisi_keterangan_disposisi VALUES("7","DSP0004","-");
INSERT INTO detail_disposisi_keterangan_disposisi VALUES("8","DSP0005","Untuk dilakukan penilaian RB internal");
INSERT INTO detail_disposisi_keterangan_disposisi VALUES("9","DSP0006","di uji");
INSERT INTO detail_disposisi_keterangan_disposisi VALUES("10","DSP0007","Untuk direspons");
INSERT INTO detail_disposisi_keterangan_disposisi VALUES("11","DSP0007","di uji");
INSERT INTO detail_disposisi_keterangan_disposisi VALUES("12","DSP0008","di uji");
INSERT INTO detail_disposisi_keterangan_disposisi VALUES("13","DSP0009","di uji");
INSERT INTO detail_disposisi_keterangan_disposisi VALUES("14","DSP0010","di uji");
INSERT INTO detail_disposisi_keterangan_disposisi VALUES("15","DSP0011","di uji");
INSERT INTO detail_disposisi_keterangan_disposisi VALUES("16","DSP0001","di uji");
INSERT INTO detail_disposisi_keterangan_disposisi VALUES("17","DSP0003","Sebagai bahan informasi dan evaluasi");
INSERT INTO detail_disposisi_keterangan_disposisi VALUES("18","DSP0003","-");
INSERT INTO detail_disposisi_keterangan_disposisi VALUES("19","DSP0001","");
INSERT INTO detail_disposisi_keterangan_disposisi VALUES("20","DSP0002","");
INSERT INTO detail_disposisi_keterangan_disposisi VALUES("21","DSP0004","");
INSERT INTO detail_disposisi_keterangan_disposisi VALUES("22","DSP0005","");
INSERT INTO detail_disposisi_keterangan_disposisi VALUES("23","DSP0006","");
INSERT INTO detail_disposisi_keterangan_disposisi VALUES("24","DSP0007","");
INSERT INTO detail_disposisi_keterangan_disposisi VALUES("25","DSP0008","");
INSERT INTO detail_disposisi_keterangan_disposisi VALUES("26","DSP0009","");
INSERT INTO detail_disposisi_keterangan_disposisi VALUES("27","DSP0010","");
INSERT INTO detail_disposisi_keterangan_disposisi VALUES("28","DSP0011","");
INSERT INTO detail_disposisi_keterangan_disposisi VALUES("29","DSP0012","Untuk ditindaklanjuti");
INSERT INTO detail_disposisi_keterangan_disposisi VALUES("30","DSP0012","Kasie Pem kirimkan peserta yang belum ikut CPOTB");



DROP TABLE detail_disposisi_pegawai_penerima;

CREATE TABLE `detail_disposisi_pegawai_penerima` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_disposisi` varchar(25) NOT NULL,
  `nip_penerima` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

INSERT INTO detail_disposisi_pegawai_penerima VALUES("1","DSP0001","19681014 199703 2 001");
INSERT INTO detail_disposisi_pegawai_penerima VALUES("2","DSP0001","19660813 199603 2 001");
INSERT INTO detail_disposisi_pegawai_penerima VALUES("3","DSP0002","19670401 199803 2 001");
INSERT INTO detail_disposisi_pegawai_penerima VALUES("5","DSP0004","19670401 199803 2 001");
INSERT INTO detail_disposisi_pegawai_penerima VALUES("6","DSP0005","19860507 200812 1 001");
INSERT INTO detail_disposisi_pegawai_penerima VALUES("7","DSP0006","19810318 200604 2 003");
INSERT INTO detail_disposisi_pegawai_penerima VALUES("8","DSP0007","19810318 200604 2 003");
INSERT INTO detail_disposisi_pegawai_penerima VALUES("9","DSP0008","19810318 200604 2 003");
INSERT INTO detail_disposisi_pegawai_penerima VALUES("10","DSP0009","19810318 200604 2 003");
INSERT INTO detail_disposisi_pegawai_penerima VALUES("11","DSP0010","19810318 200604 2 003");
INSERT INTO detail_disposisi_pegawai_penerima VALUES("12","DSP0011","19830409 201212 2 001");
INSERT INTO detail_disposisi_pegawai_penerima VALUES("13","DSP0003","19670401 199803 2 001");
INSERT INTO detail_disposisi_pegawai_penerima VALUES("14","DSP0012","19670401 199803 2 001");



DROP TABLE detail_st;

CREATE TABLE `detail_st` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_sk` varchar(25) NOT NULL,
  `petugas_nip` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

INSERT INTO detail_st VALUES("1","SK0258","19681014 199703 2 001");
INSERT INTO detail_st VALUES("2","SK0258","19950418 201903 2 006");
INSERT INTO detail_st VALUES("5","SK0280","19621028 199002 1 001");
INSERT INTO detail_st VALUES("6","SK0284","19800907 200712 1 001");
INSERT INTO detail_st VALUES("7","SK0284","1001");
INSERT INTO detail_st VALUES("8","SK0286","19661015 198603 2 001");
INSERT INTO detail_st VALUES("9","SK0286","19630410 198403 2 001");
INSERT INTO detail_st VALUES("10","SK0287","19740811 200003 1 002");
INSERT INTO detail_st VALUES("11","SK0287","19720719 199603 2 002");



DROP TABLE detail_st_sppd;

CREATE TABLE `detail_st_sppd` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_sk` varchar(25) NOT NULL,
  `petugas_nip_sppd` varchar(25) NOT NULL,
  `no_sppd` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE disposisi;

CREATE TABLE `disposisi` (
  `id_disposisi` varchar(25) NOT NULL,
  `id_sm` varchar(25) NOT NULL,
  `tgl_disposisi` varchar(25) NOT NULL,
  `catatan` varchar(250) NOT NULL,
  `disposisi_nip` varchar(25) NOT NULL,
  PRIMARY KEY (`id_disposisi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO disposisi VALUES("DSP0001","SRM0287","02/03/2020","-","19630418 198903 1 001");
INSERT INTO disposisi VALUES("DSP0002","SRM0284","02/03/2020","-","19630418 198903 1 001");
INSERT INTO disposisi VALUES("DSP0003","SRM0282","02/03/2020","-","19630418 198903 1 001");
INSERT INTO disposisi VALUES("DSP0004","SRM0283","02/03/2020","-","19630418 198903 1 001");
INSERT INTO disposisi VALUES("DSP0005","SRM0285","02/03/2020","-","19630418 198903 1 001");
INSERT INTO disposisi VALUES("DSP0006","SRM0289","02/03/2020","-","19630418 198903 1 001");
INSERT INTO disposisi VALUES("DSP0007","SRM0288","02/03/2020","-","19630418 198903 1 001");
INSERT INTO disposisi VALUES("DSP0008","SRM0291","02/03/2020","-","19630418 198903 1 001");
INSERT INTO disposisi VALUES("DSP0009","SRM0290","02/03/2020","-","19630418 198903 1 001");
INSERT INTO disposisi VALUES("DSP0010","SRM0292","02/03/2020","-","19630418 198903 1 001");
INSERT INTO disposisi VALUES("DSP0011","SRM0295","02/03/2020","-","19630418 198903 1 001");
INSERT INTO disposisi VALUES("DSP0012","SRM0297","02/03/2020","-","19630418 198903 1 001");



DROP TABLE jenis_st;

CREATE TABLE `jenis_st` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jenis_st` varchar(25) NOT NULL,
  `status_st` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO jenis_st VALUES("1","luar_kota_sppd","belum_sppd");
INSERT INTO jenis_st VALUES("2","dalam_kota_tidak_sppd","tidak_sppd");
INSERT INTO jenis_st VALUES("3","luar_kota_tidak_sppd","tidak_sppd");



DROP TABLE pegawai;

CREATE TABLE `pegawai` (
  `id_pegawai` int(10) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `nip` varchar(25) NOT NULL,
  `pangkat` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `status` int(10) NOT NULL,
  `level` int(11) NOT NULL,
  PRIMARY KEY (`id_pegawai`)
) ENGINE=InnoDB AUTO_INCREMENT=74 DEFAULT CHARSET=latin1;

INSERT INTO pegawai VALUES("2","Dra. Evi Iriantina, Apt, (MH)","19630306 198903 2 001","IV/a","Kepala Sub Bag Tata Usaha","1","2");
INSERT INTO pegawai VALUES("4","Drs. Erhadi Adang Maria, Apt","19640317 199603 1 001","IV/a","PFM MUDA","1","3");
INSERT INTO pegawai VALUES("5","Armeiny Romita, S.Si, Apt","19681014 199703 2 001","IV/a","KASI. PENGUJIAN KIMIA","1","2");
INSERT INTO pegawai VALUES("6","Dra. Emli, Apt","19660813 199603 2 001","IV/a","KASI. PENGUJIAN MIKROBIOLOGI","1","2");
INSERT INTO pegawai VALUES("7","Dra. Lenggo Vivirianty, Apt","19670401 199803 2 001","IV/a","KASI. PEMERIKSAAN","1","2");
INSERT INTO pegawai VALUES("8","Erlina Ita Sinulingga, S.Si, Apt","19670517 199803 2 001","IV/a","PFM MUDA","1","3");
INSERT INTO pegawai VALUES("9","Nurizati, S.Si, Apt","19730916 200003 2 001","IV/a","PFM MADYA","1","3");
INSERT INTO pegawai VALUES("10","Ratnawita, S.Si, Apt","19730703 200003 2 001","IV/a","PFM MADYA","1","3");
INSERT INTO pegawai VALUES("12","Agus Jayadi, S.Si","19740811 200003 1 002","III/d","PFM PERTAMA","1","3");
INSERT INTO pegawai VALUES("13","Fuani Farid, S.Farm, Apt","19801027 200501 2 002","III/d","PFM PERTAMA","1","3");
INSERT INTO pegawai VALUES("14","Desmita Adriani Syamsu, S.Farm, Apt","19811209 200501 2 002","III/d","PFM PERTAMA","1","3");
INSERT INTO pegawai VALUES("15","Westi Novita, S.Si, Apt","19790405 200501 2 002","III/d","PFM MUDA","1","3");
INSERT INTO pegawai VALUES("16","Misna Delli","19620909 198402 2 001","III/d","PFM TERAMPIL PENYELIA","1","3");
INSERT INTO pegawai VALUES("17","R. Dawiyah","19600114 198502 2 001","III/d","PFM TERAMPIL PENYELIA","1","3");
INSERT INTO pegawai VALUES("18","Tutut Rospyanti Citra, S.Farm, Apt","19810318 200604 2 003","III/d","PFM PERTAMA","1","3");
INSERT INTO pegawai VALUES("19","Rahmawati, S.Farm, Apt","19820224 200604 2 007","III/d","PFM PERTAMA","1","3");
INSERT INTO pegawai VALUES("20","Riyanti, S.Farm, Apt","19821022 200604 2 002","III/d","PFM PERTAMA","1","3");
INSERT INTO pegawai VALUES("21","Yuli Fitriani, S.Si, Apt","19800719 200604 2 004","III/d","PFM MUDA","1","3");
INSERT INTO pegawai VALUES("22","Febriany Martiana Nasel, S.Si, Apt","19790223 200312 2 003","III/d","PFM  AHLI MUDA","1","3");
INSERT INTO pegawai VALUES("23","Sarino, S.Farm, Apt","19680504 199012 1 001","III/d","PFM  PERTAMA","1","3");
INSERT INTO pegawai VALUES("24","Ayeni","19661015 198603 2 001","III/c","PFM TERAMPIL PENYELIA","1","3");
INSERT INTO pegawai VALUES("25","Sri Rahmawati, A.Md","19671228 198803 2 001","III/c","PFM PERTAMA","1","3");
INSERT INTO pegawai VALUES("26","Marhamah, SE","19680311 198902 2 001","III/d","KASI. INFOKOM","1","2");
INSERT INTO pegawai VALUES("27","Linda Prasetyawati, S.Farm, Apt.","19821013 200712 2 001","III/c","PFM PERTAMA","1","3");
INSERT INTO pegawai VALUES("28","Novva Reddy Naldo, S.Farm, Apt","19800907 200712 1 001","III/c","PFM PERTAMA","1","3");
INSERT INTO pegawai VALUES("29","Rahmat Hidayat, S.Farm, Apt","19860507 200812 1 001","III/c","KASI. PENINDAKAN","1","2");
INSERT INTO pegawai VALUES("30","Fauziah","19680428 199002 2 001","III/c","PFM PENYELIA","1","3");
INSERT INTO pegawai VALUES("31","Maria Lies Purbahabsari Viandana, S.Farm, Apt","19791001 200912 2 002","III/c","PFM PERTAMA","1","3");
INSERT INTO pegawai VALUES("32","Adrafita Hanesty Hadi, S.Farm, Apt","19861231 201012 2 002","III/c","PFM PERTAMA","1","3");
INSERT INTO pegawai VALUES("33","Malhan Zaldi, SH","19750618 199503 1 001","III/c","FUNGSIONAL(Analis pengelola BMN)","1","3");
INSERT INTO pegawai VALUES("34","Darwil","19590504 198102 1 001","III/b","FUNGSIONAL(Pemelihara Sarana Prasarana)","1","3");
INSERT INTO pegawai VALUES("35","Kurniati","19630410 198403 2 001","III/b","FUNGSIONAL(Asisten Pemeriksa sarana Obat & Makanan)","1","3");
INSERT INTO pegawai VALUES("36","Hasniwati Ritonga","19611207 198403 2 001","III/b","FUNGSIONAL(Pengadministrasi Keuangan)","1","3");
INSERT INTO pegawai VALUES("37","Aswita Br. Pinem","19681016 199103 2 001","III/b","FUNGSIONAL(Bendahara Penerima)","1","3");
INSERT INTO pegawai VALUES("38","Sumarsono","19680529 199103 1 002","III/b","FUNGSIONAL(Asisten Pemeriksa sarana Obat & Makanan)","1","3");
INSERT INTO pegawai VALUES("39","Zuriati","19700331 199103 2 001","III/c","PFM TERAMPIL PELAKSANA LANJUTAN","1","3");
INSERT INTO pegawai VALUES("40","Gustina Yasak","19611217 199203 2 001","III/b","PFM TERAMPIL PELAKSANA LANJUTAN","1","3");
INSERT INTO pegawai VALUES("41","Fransisca Octanta Wijaya Nasution, STP","19830812 200712 1 001","III/b","FUNGSIONAL(Perencana Pertama)","1","3");
INSERT INTO pegawai VALUES("42","Rizal Effendi","19630924 198602 1 001","III/b","FUNGSIONAL(Pengadministrasi umum)","1","3");
INSERT INTO pegawai VALUES("43","Hertanti Trias Febriani, S.Farm, Apt","19860222 201212 2 003","III/b","PFM PERTAMA","1","3");
INSERT INTO pegawai VALUES("44","Rachmad Anres Dongoran, S.Farm, Apt","19890318 201212 1 002","III/b","Fungsional Umum","1","3");
INSERT INTO pegawai VALUES("45","Lusiana Wijayanti, S.Farm, Apt","19830409 201212 2 001","III/b","PFM PERTAMA","1","3");
INSERT INTO pegawai VALUES("46","Bambang","19610624 198402 1 001","III/b","FUNGSIONAL(Pengadministrasi umum)","1","3");
INSERT INTO pegawai VALUES("47","Denayu Aidha Nursanti","19730120 199303 2 002","III/b","PFM TERAMPIL PELAKSANA LANJUTAN","1","3");
INSERT INTO pegawai VALUES("48","Mursidah,  SH","19680611 199402 2 001","III/b","PFM PERTAMA","1","3");
INSERT INTO pegawai VALUES("49","Mega Ratnasari, S.Si.","19830503 200604 2 003","III/b","PFM Pertama","1","3");
INSERT INTO pegawai VALUES("50","Yuharidmi","19700205 199303 2 001","III/b","PFM PELAKSANA LANJUTAN","1","3");
INSERT INTO pegawai VALUES("51","Edy Syatria","19700829 199303 1 002","III/b","PFM TERAMPIL PELAKSANA LANJUTAN","1","3");
INSERT INTO pegawai VALUES("52","Sri Yulianti Putri , S.Farm, Apt","19870715 201402 2 002","III/b","PFM PERTAMA","1","3");
INSERT INTO pegawai VALUES("53","Fitri Hariani, S.farm, Apt","19900426 201402 2 004","III/b","PFM PERTAMA","1","3");
INSERT INTO pegawai VALUES("54","Inneke Koesumawaty","19720719 199603 2 002","III/a","PFM PELAKSANA LANJUTAN","1","3");
INSERT INTO pegawai VALUES("55","Supriyadi, SH","19730201 199703 1 001","III/b","FUNGSIONAL(Pengadministrasi Keuangan)","1","3");
INSERT INTO pegawai VALUES("56","Yostarita Muchtar","19740608 199703 2 001","III/a","PFM PELAKSANA LANJUTAN","1","3");
INSERT INTO pegawai VALUES("57","Rasidi","19751208 199903 1 001","III/a","FUNGSIONAL(Pemelihara Sarana Prasarana)","1","3");
INSERT INTO pegawai VALUES("58","Madalena","19721012 199903 2 001","III/a","FUNGSIONAL(Verifikator Keuangan)","1","3");
INSERT INTO pegawai VALUES("59","Tri Murnila","19760407 200003 2 001","II/d","Analis Kepegawaian Pelaksana","1","3");
INSERT INTO pegawai VALUES("60","Mardiah","19751118 200003 2 001","III/a","Arsiparis Pelaksana/ Arsiparis Terampil","1","3");
INSERT INTO pegawai VALUES("61","Rina Yunita, A.Md","19840617 200712 2 001","II/d","PFM Pelaksana","1","3");
INSERT INTO pegawai VALUES("62","Delyuvin Nasution, A.Md.","19840731 200712 1 001","II/d","PFM Pelaksana","1","3");
INSERT INTO pegawai VALUES("63","M.Fahrul Rahman, A.Md","19860825 200812 1 002","II/d","Pengelola layanan pengaduan Konsumen & Informasi Konsumen","1","3");
INSERT INTO pegawai VALUES("64","Aria Jaka, A.Md","19880331 200912 1 002","II/d","Pranata Komputer Pelaksana","1","3");
INSERT INTO pegawai VALUES("65","Doddy Radiansyah, A.Md","19871203 201012 1 003","II/d","Bendahara pengeluaran","1","3");
INSERT INTO pegawai VALUES("66","Mariana Nainggolan","19831012 201502 2 001","III/b","Analis Laboratorium","1","3");
INSERT INTO pegawai VALUES("67","Desiyuning Fatimatuz Zuhroh","19911204 201502 2 004","III/a"," Analis Laboratorium ","1","3");
INSERT INTO pegawai VALUES("68","Ruhai Lanang Prasojo","19890427 201502 1 004","III/a"," Analis Laboratorium ","1","3");
INSERT INTO pegawai VALUES("69","Nova Citra Rose Silitonga","19911121 201502 2 001","II/c","Asisten pengujian Laboratorium","1","3");
INSERT INTO pegawai VALUES("70","Drs. Antoni Asdi, M.Pharm","19630418 198903 1 001","IV/b","Kepala Balai POM di Jambi","1","1");
INSERT INTO pegawai VALUES("71","Ade Afrilia Ardinda","19950418 201903 2 006","III/a","Analis Pemeriksa Sarana dan Penyidik Obat dan Makanan","1","3");
INSERT INTO pegawai VALUES("72","Drs. H. Syartoni","19621028 199002 1 001","IIId","Fungsional Umum","1","3");
INSERT INTO pegawai VALUES("73","Dedi Sukmana","1001","-","PPNPN Administrasi","1","3");



DROP TABLE surat_keluar;

CREATE TABLE `surat_keluar` (
  `id_sk` varchar(25) NOT NULL,
  `kepala_sk` varchar(25) NOT NULL,
  `jenis` varchar(25) NOT NULL,
  `perihal` varchar(50) NOT NULL,
  `tujuan` varchar(25) NOT NULL,
  `tgl_sk` varchar(25) NOT NULL,
  `penandatangan_nip` varchar(25) NOT NULL,
  PRIMARY KEY (`id_sk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO surat_keluar VALUES("SK0257","KP.03.04.98.981.01.20","umum","Surat Keterangan Uraian Tugas","-","06/30/2020","19630418 198903 1 001");
INSERT INTO surat_keluar VALUES("SK0258","RT.02.01.98.981.01.20.","st","Bimtek Akuntabilitas Kinerja Instansi Pemerintah (","Jakarta Pusat","01/31/2020","19660813 199603 2 001");
INSERT INTO surat_keluar VALUES("SK0259","PP.01.01.98.982.01.20.","umum","Keterangan Pengujian","-","01/30/2020","19660813 199603 2 001");
INSERT INTO surat_keluar VALUES("SK0260","PP.01.01.98.01.20.","umum","Hasil Uji Sampel","Kepolisian Resor Merangin","01/30/2020","19660813 199603 2 001");
INSERT INTO surat_keluar VALUES("SK0261","PP.01.01.98.982.01.20.","umum","Keterangan Pengujian","-","01/30/2020","19660813 199603 2 001");
INSERT INTO surat_keluar VALUES("SK0262","PP.01.01.98.01.20","umum","Hasil Uji Sampel","Kepolisian Daerah Jambi","01/30/2020","19660813 199603 2 001");
INSERT INTO surat_keluar VALUES("SK0263","PP.01.01.98.982.01.20.","umum","Keterangan Pengujian","-","01/30/2020","19660813 199603 2 001");
INSERT INTO surat_keluar VALUES("SK0264","PP.01.01.98.01.20.","umum","Hasil Uji Sampel","Kepolisian Resor Muaro Ja","01/30/2020","19660813 199603 2 001");
INSERT INTO surat_keluar VALUES("SK0265","PP.01.01.98.982.01.20.","umum","Keterangan Pengujian","-","01/30/2020","19660813 199603 2 001");
INSERT INTO surat_keluar VALUES("SK0266","PP.01.01.98.01.20.","umum","Hasil Uji Sampel","Kepolisian Resor Merangin","01/30/2020","19660813 199603 2 001");
INSERT INTO surat_keluar VALUES("SK0267","PP.01.01.98.982.01.20.","umum","Keterangan Pengujian","Kepolisian Daerah Jambi","01/31/2020","19660813 199603 2 001");
INSERT INTO surat_keluar VALUES("SK0268","PP.01.01.98.01.20.","umum","Hasil Uji Sampel","Kepolisian Daerah Jambi","01/31/2020","19660813 199603 2 001");
INSERT INTO surat_keluar VALUES("SK0269","PP.01.01.98.982.01.20.","umum","Keterangan Pengujian","Kepolisian Resor Batangha","01/31/2020","19660813 199603 2 001");
INSERT INTO surat_keluar VALUES("SK0270","PP.01.01.98.01.20.","umum","Hasil Uji Sampel","Kepolisian Resor Batangha","01/31/2020","19660813 199603 2 001");
INSERT INTO surat_keluar VALUES("SK0271","PP.01.01.98.982.01.20.","umum","Keterangan Pengujian","Kepolisian Resor Batangha","01/31/2020","19660813 199603 2 001");
INSERT INTO surat_keluar VALUES("SK0272","PP.01.01.98.982.01.20.","umum","Keterangan Pengujian","Kepolisian Resor Batangha","01/31/2020","19660813 199603 2 001");
INSERT INTO surat_keluar VALUES("SK0273","PP.01.01.98.01.20.","umum","Hasil Uji Sampel","Kepolisian Resor Batangha","01/31/2020","19660813 199603 2 001");
INSERT INTO surat_keluar VALUES("SK0274","PP.01.01.98.982.01.20.","umum","Keterangan Pengujian","Kepolisian Resor Muaro Ja","01/31/2020","19660813 199603 2 001");
INSERT INTO surat_keluar VALUES("SK0275","PP.01.01.98.01.20.","umum","Hasil Uji Sampel","Kepolisian Resor Muaro Ja","01/31/2020","19660813 199603 2 001");
INSERT INTO surat_keluar VALUES("SK0276","PW.04.10.98.982.01.20.","umum","Berita Acara Serah Terima KIT","Balai POM di Bengkulu","01/31/2020","19660813 199603 2 001");
INSERT INTO surat_keluar VALUES("SK0277","B-PB.02.01.98.982.01.20.","umum","Usulan Pelatihan Internal Teknis Pengujian Kimia d","PPOMN","02/03/2020","19630418 198903 1 001");
INSERT INTO surat_keluar VALUES("SK0278","B.KP.09.01.98.981.02.20.","umum","Rekap Penilaian Prestasi Kerja ASN BPOM Ta. 2019, ","Biro Umum dan SDM","02/03/2020","19630418 198903 1 001");
INSERT INTO surat_keluar VALUES("SK0279","B.KP.03.04.98.981.01.20","umum","SKP Jabatan Struktural SKP Jabatan PFM Madya","Biro Umum dan SDM","02/03/2020","19630418 198903 1 001");
INSERT INTO surat_keluar VALUES("SK0280","RT.02.01.98.981.01.20.","st","Sosialisasi bagian PNS yang akan memasuki masa pen","KPPN Jambi","02/03/2020","19630418 198903 1 001");
INSERT INTO surat_keluar VALUES("SK0281","PW.07.01.984.02.20.","umum","Laporan Pengawasan Penandaan Label Sampel Kosmetik","Pengawasan Kosmetik Badan","02/03/2020","19630418 198903 1 001");
INSERT INTO surat_keluar VALUES("SK0282","B-OT.01.03.98.981.02.20.","umum","Nota Dinas Undangan Rapat Monitoring Evaluasi Impl","Koordinator dan Seluruh A","02/03/2020","19630418 198903 1 001");
INSERT INTO surat_keluar VALUES("SK0283","HM.03.01.894.02.20.","umum","Usulan Nama Sekolah dalam Lomba Sekolah Pangan Ama","Pemberdayaan Masyarakat d","02/03/2020","19630418 198903 1 001");
INSERT INTO surat_keluar VALUES("SK0284","RT.02.01.98.981.01.20.","st","Pengumpulan Bahan, Verifikasi Informasi","Kota Jambi","02/03/2020","19630418 198903 1 001");
INSERT INTO surat_keluar VALUES("SK0285","PW.02.03.98.984.02.20.","umum","Laporan Pengawasan Penandaan Label Sampel OT/SK","Pengawasan Obat Tradision","02/03/2020","19630418 198903 1 001");
INSERT INTO surat_keluar VALUES("SK0286","RT.02.01.98.984.02.20.","st","Pengadaan Sampel Obat, Obat Bahan Alam, Kosmetika,","Kota Jambi","02/04/2020","19630418 198903 1 001");
INSERT INTO surat_keluar VALUES("SK0287","RT.02.01.98.981.01.20.","st","Pengadaan Sampel Makanan","Kota Jambi","02/04/2020","19630418 198903 1 001");



DROP TABLE surat_masuk;

CREATE TABLE `surat_masuk` (
  `id_sm` varchar(25) NOT NULL,
  `tgl_catat_sm` varchar(25) NOT NULL,
  `nomor_sm` varchar(100) NOT NULL,
  `alamat_sm` varchar(50) NOT NULL,
  `tgl_sm` varchar(25) NOT NULL,
  `perihal` varchar(250) NOT NULL,
  `sifat_surat` varchar(25) NOT NULL,
  `status` varchar(25) NOT NULL,
  PRIMARY KEY (`id_sm`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO surat_masuk VALUES("SRM0282","02/03/2020","19.12/AKF/2019","APOTEK KARTIKA FARMA","01/24/2020","Laporan Pemaikaian prekursor dan OT , Laporan pemakaian narkotika dan psikotropika bulan desember 2019","Biasa","Sudah di Disposisi");
INSERT INTO surat_masuk VALUES("SRM0283","02/03/2020","R-PW.01.14.3.35.01.20.17","Deputi, bid.pengawasan obat, NAPPZA","01/28/2020","Penarikan obat TMS ","Penting","Sudah di Disposisi");
INSERT INTO surat_masuk VALUES("SRM0284","02/03/2020","pm.03.01.55.552.01.20.18","Direktur Pemberdayaan masyarakat dan pelaku usaha","01/31/2020","Pelaksanaan UMKM Award tahun 2020","Penting","Sudah di Disposisi");
INSERT INTO surat_masuk VALUES("SRM0285","02/03/2020","B-PI.06.7.72.01.20.116","Email, inspektorat2bpom@gmail.com","01/30/2020","Pelaksanaan survei integritas organisasi dan jabatan ","Penting","Sudah di Disposisi");
INSERT INTO surat_masuk VALUES("SRM0286","02/03/2020","S-310/WPB.06/KP.01/2020","Email, kppnjambi@gmail.com","01/30/2020","Persiapan PPDH tahun 2020","Penting","Belum di Disposisi");
INSERT INTO surat_masuk VALUES("SRM0287","02/03/2020","KS.01.01.83.831.01.20.007","Email, produkterapetik@yahoo.co.id","01/31/2020","Usulan pelatihan internal teknis pengujian kimia dan biologi BB/BPOM","Penting","Sudah di Disposisi");
INSERT INTO surat_masuk VALUES("SRM0288","02/03/2020","B/101/II/RES.4.2/2020","POLRES TEBO","02/03/2020","Permohonan pengujian BB narkotika jenis ganja","Rahasia","Sudah di Disposisi");
INSERT INTO surat_masuk VALUES("SRM0289","02/03/2020","B/102/II/RES.4.2/2020","POLRES TEBO","02/03/2020","Permohonan pengujian BB narkotika jenis shabu","Rahasia","Sudah di Disposisi");
INSERT INTO surat_masuk VALUES("SRM0290","02/03/2020","B/14/II/KA/PB.06/2020/BNN","BNNK Jambi","02/03/2020","Permohonan pemeriksaan secara laboratoris","Rahasia","Sudah di Disposisi");
INSERT INTO surat_masuk VALUES("SRM0291","02/03/2020","R/09/II/RES.4.2/2020","polres Tanjung Jabung Timur","02/03/2020","Permohonan pemeriksaan BB yang diduga narkotika berupa shabu","Rahasia","Sudah di Disposisi");
INSERT INTO surat_masuk VALUES("SRM0292","02/03/2020","B/76/II/RES.4/2020/Resnarkoba","POLRES BUNGO","02/03/2020","Mohon bantuan pemeriksaan secara laboratoris yg diduga narkotika jenis shabu","Rahasia","Sudah di Disposisi");
INSERT INTO surat_masuk VALUES("SRM0293","02/03/2020","T-PW.01.14.35.353.01.20.2","Keamanan mutu, ekspor impor obat , NAPPZA","01/21/2020","Permintaan laporan tindak lanjut","Penting","Belum di Disposisi");
INSERT INTO surat_masuk VALUES("SRM0294","02/03/2020","T-PW.01.14.35.353.09.19.2","Bid. pengawasan obat, NAPPZA","09/19/2019","Progress penarikan obat TMS","Penting","Belum di Disposisi");
INSERT INTO surat_masuk VALUES("SRM0295","02/03/2020","B/104/II/RES.4./2020/Ditr","POLDA JAMBI","02/03/2020","Permohonan pengujian BB diiduga narkotika jenis shabu","Rahasia","Sudah di Disposisi");
INSERT INTO surat_masuk VALUES("SRM0296","02/03/2020","-","Email, kerjasamaln_bpom@yahoo.co.id","02/03/2020","Undangan public speaking HUT BPOM ke 19 tahun 2020 tgl 11 feb 2020","Penting","Belum di Disposisi");
INSERT INTO surat_masuk VALUES("SRM0297","02/03/2020","PW.02.01.4.43.01.20.28","Email, sarana.otsk@gmail.com","02/03/2020","Pelaksanaan Bimtek sertifikasi CPOTB bertahap bagi petugas Balai","Penting","Sudah di Disposisi");



DROP TABLE surat_tugas;

CREATE TABLE `surat_tugas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_sk` varchar(25) NOT NULL,
  `kepala_st` varchar(25) NOT NULL,
  `jenis_sk` varchar(25) NOT NULL,
  `jenis_st` varchar(25) NOT NULL,
  `tujuan_st` varchar(25) NOT NULL,
  `tempat_st` varchar(25) NOT NULL,
  `kegiatan` varchar(50) NOT NULL,
  `tgl_st` varchar(25) NOT NULL,
  `penandatangan` varchar(25) NOT NULL,
  `status` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO surat_tugas VALUES("1","SK0258","RT.02.01.98.981.01.20.>  ","st","luar_kota_tidak_sppd","Jakarta Pusat","Novotel Cikini","Bimtek Sistem Akuntabilitas Kinerja Instansi Pemer","01/31/2020","19660813 199603 2 001","tidak_sppd");
INSERT INTO surat_tugas VALUES("2","SK0280","RT.02.01.98.981.01.20.>  ","st","dalam_kota_tidak_sppd","KPPN Jambi","Aula KPPN Jambi","Sosialisasi bagian PNS yang akan memasuki masa pen","02/03/2020","19630418 198903 1 001","tidak_sppd");
INSERT INTO surat_tugas VALUES("3","SK0284","RT.02.01.98.981.01.20.>  ","st","dalam_kota_tidak_sppd","Kota Jambi","Kota Jambi","Pengumpulan Bahan, Verifikasi Informasi","02/03/2020","19630418 198903 1 001","tidak_sppd");
INSERT INTO surat_tugas VALUES("4","SK0286","RT.02.01.98.984.02.20.","st","dalam_kota_tidak_sppd","Kota Jambi","Kota Jambi","Pengadaan Sampel Obat, Obat Bahan Alam, Kosmetika,","02/04/2020","19630418 198903 1 001","tidak_sppd");
INSERT INTO surat_tugas VALUES("5","SK0287","RT.02.01.98.981.01.20.","st","dalam_kota_tidak_sppd","Kota Jambi","Kota Jambi","Pengadaan Sampel Makanan","02/04/2020","19630418 198903 1 001","tidak_sppd");



DROP TABLE user;

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` int(5) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO user VALUES("1","admin","admin","admin","1");
INSERT INTO user VALUES("2","ayuk","ayuk","2e890e7fd9ae64e8c423289e937b8fa3","1");



