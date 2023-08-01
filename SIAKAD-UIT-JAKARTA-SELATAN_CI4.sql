-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.27-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.5.0.6677
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for siakad_uit_jaksel
CREATE DATABASE IF NOT EXISTS `siakad_uit_jaksel` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `siakad_uit_jaksel`;

-- Dumping structure for table siakad_uit_jaksel.dosen
CREATE TABLE IF NOT EXISTS `dosen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_dosen` varchar(50) DEFAULT NULL,
  `gelar` varchar(50) DEFAULT NULL,
  `kd_dosen` char(4) DEFAULT NULL,
  `kd_matkul` char(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table siakad_uit_jaksel.dosen: ~25 rows (approximately)
REPLACE INTO `dosen` (`id`, `nama_dosen`, `gelar`, `kd_dosen`, `kd_matkul`) VALUES
	(1, 'Rahman Islam', 'M.KOM', 'D001', 'MK001'),
	(2, 'John Doe', 'M.Tech', 'D002', 'MK002'),
	(3, 'Jane Smith', 'Ph.D.', 'D003', 'MK003'),
	(4, 'Michael Johnson', 'M.Sc', 'D004', 'MK004'),
	(5, 'Emily Brown', 'M.E', 'D005', 'MK005'),
	(6, 'William Lee', 'M.Phil', 'D006', 'MK006'),
	(7, 'Olivia Wilson', 'M.Ed', 'D007', 'MK007'),
	(8, 'James Taylor', 'MBA', 'D008', 'MK008'),
	(9, 'Ava Anderson', 'M.S', 'D009', 'MK009'),
	(10, 'Alexander Thomas', 'M.Pharma', 'D010', 'MK010'),
	(11, 'Sophia Martin', 'MFA', 'D011', 'MK011'),
	(12, 'Ethan Clark', 'M.S.W', 'D012', 'MK012'),
	(13, 'Isabella Rodriguez', 'M.Ed', 'D013', 'MK013'),
	(14, 'Mason Martinez', 'MCA', 'D014', 'MK014'),
	(15, 'Mia Hernandez', 'M.E', 'D015', 'MK015'),
	(16, 'Noah Walker', 'M.S', 'D016', 'MK016'),
	(17, 'Avery Green', 'M.Tech', 'D017', 'MK017'),
	(18, 'Liam Hall', 'M.Com', 'D018', 'MK018'),
	(19, 'Ella Turner', 'M.Sc', 'D019', 'MK019'),
	(20, 'Logan Collins', 'M.S', 'D020', 'MK020'),
	(21, 'Sofia Bennett', 'M.Phil', 'D021', 'MK021'),
	(22, 'Benjamin Cook', 'MCA', 'D022', 'MK022'),
	(23, 'Amelia Rivera', 'M.Ed', 'D023', 'MK023'),
	(24, 'Lucas Ward', 'MBA', 'D024', 'MK024'),
	(25, 'Abigail Brooks', 'M.Tech', 'D025', 'MK025'),
	(26, 'Kereen gilaa', 'p.gl', 'D026', 'MK017');

-- Dumping structure for table siakad_uit_jaksel.mahasiswa
CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nim` int(11) DEFAULT NULL,
  `nama_mahasiswa` varchar(50) DEFAULT NULL,
  `jurusan` varchar(50) DEFAULT NULL,
  `pas_foto` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table siakad_uit_jaksel.mahasiswa: ~26 rows (approximately)
REPLACE INTO `mahasiswa` (`id`, `nim`, `nama_mahasiswa`, `jurusan`, `pas_foto`) VALUES
	(1, 411211069, 'Rahman Islam ', 'Teknik Informatika', 'foto_profil.jpg'),
	(2, 411211070, 'John Doe', 'Sistem Informasi', 'foto_profil.jpg'),
	(3, 411211071, 'Jane Smith', 'Teknik Elektro', 'foto_profil.jpg'),
	(4, 411211072, 'Michael Johnson', 'Teknik Mesin', 'foto_profil.jpg'),
	(5, 411211073, 'Emily Brown', 'Teknik Industri', 'foto_profil.jpg'),
	(6, 411211074, 'William Lee', 'Teknik Sipil', 'foto_profil.jpg'),
	(7, 411211075, 'Olivia Wilson', 'Akuntansi', 'foto_profil.jpg'),
	(8, 411211076, 'James Taylor', 'Manajemen', 'foto_profil.jpg'),
	(9, 411211077, 'Ava Anderson', 'Hubungan Internasional', 'foto_profil.jpg'),
	(10, 411211078, 'Alexander Thomas', 'Ilmu Komunikasi', 'foto_profil.jpg'),
	(11, 411211079, 'Sophia Martin', 'Desain Grafis', 'foto_profil.jpg'),
	(12, 411211080, 'Ethan Clark', 'Arsitektur', 'foto_profil.jpg'),
	(13, 411211081, 'Isabella Rodriguez', 'Kedokteran', 'foto_profil.jpg'),
	(14, 411211082, 'Mason Martinez', 'Farmasi', 'foto_profil.jpg'),
	(15, 411211083, 'Mia Hernandez', 'Psikologi', 'foto_profil.jpg'),
	(16, 411211084, 'Noah Walker', 'Hukum', 'foto_profil.jpg'),
	(17, 411211085, 'Avery Green', 'Ekonomi', 'foto_profil.jpg'),
	(18, 411211086, 'Liam Hall', 'Bahasa Inggris', 'foto_profil.jpg'),
	(19, 411211087, 'Ella Turner', 'Sastra Jepang', 'foto_profil.jpg'),
	(20, 411211088, 'Logan Collins', 'Sastra Indonesia', 'foto_profil.jpg'),
	(21, 411211089, 'Sofia Bennett', 'Teknik Kimia', 'foto_profil.jpg'),
	(22, 411211090, 'Benjamin Cook', 'Biologi', 'foto_profil.jpg'),
	(23, 411211091, 'Amelia Rivera', 'Matematika', 'foto_profil.jpg'),
	(24, 411211092, 'Lucas Ward', 'Fisika', 'foto_profil.jpg'),
	(25, 411211093, 'Abigail Brooks', 'Kimia', 'foto_profil.jpg'),
	(26, 411211144, 'hendra setiawan', 'Sistem Informasi', 'foto_profil.jpg');

-- Dumping structure for table siakad_uit_jaksel.matakuliah
CREATE TABLE IF NOT EXISTS `matakuliah` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_matkul` varchar(50) DEFAULT NULL,
  `kd_matkul` char(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table siakad_uit_jaksel.matakuliah: ~25 rows (approximately)
REPLACE INTO `matakuliah` (`id`, `nama_matkul`, `kd_matkul`) VALUES
	(1, 'Bahasa Inggris', 'MK001'),
	(2, 'Dasar Pemrograman Web', 'MK002'),
	(3, 'Pemrograman Berorientasi Objek', 'MK003'),
	(4, 'Matematika Diskrit', 'MK004'),
	(5, 'Sistem Operasi', 'MK005'),
	(6, 'Basis Data', 'MK006'),
	(7, 'Rekayasa Perangkat Lunak', 'MK007'),
	(8, 'Pemrograman Mobile', 'MK008'),
	(9, 'Algoritma dan Struktur Data', 'MK009'),
	(10, 'Jaringan Komputer', 'MK010'),
	(11, 'Komunikasi Data', 'MK011'),
	(12, 'Sistem Informasi', 'MK012'),
	(13, 'Keamanan Jaringan', 'MK013'),
	(14, 'Pemrograman Kompetitif', 'MK014'),
	(15, 'Interaksi Manusia dan Komputer', 'MK015'),
	(16, 'Kecerdasan Buatan', 'MK016'),
	(17, 'Analisis dan Perancangan Sistem Informasi', 'MK017'),
	(18, 'Pemrograman Paralel', 'MK018'),
	(19, 'Sistem Basis Data Terdistribusi', 'MK019'),
	(20, 'Pemrograman Fungsional', 'MK020'),
	(21, 'Desain Antarmuka Pengguna', 'MK021'),
	(22, 'Pemrograman Embedded', 'MK022'),
	(23, 'Manajemen Proyek', 'MK023'),
	(24, 'Pengenalan Pola', 'MK024'),
	(25, 'Teori Bahasa dan Automata', 'MK025');

-- Dumping structure for table siakad_uit_jaksel.pengumuman
CREATE TABLE IF NOT EXISTS `pengumuman` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) DEFAULT NULL,
  `konten` text DEFAULT NULL,
  `tgl_pengumuman` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table siakad_uit_jaksel.pengumuman: ~4 rows (approximately)
REPLACE INTO `pengumuman` (`id`, `judul`, `konten`, `tgl_pengumuman`) VALUES
	(6, 'Pendaftaran Ujian Akhir Semester (UAS) Genap 2023', '<p>Selamat pagi, mahasiswa/ Universitas UIT Jaksel!</p><p>Diberitahukan bahwa pendaftaran untuk Ujian Akhir Semester (UAS) Genap tahun 2023 telah dibuka. Mohon segera melakukan pendaftaran melalui portal akademis kami. Pastikan untuk memenuhi persyaratan dan jadwal yang telah ditentukan.</p><p>Informasi Penting:</p><ul><li>Periode pendaftaran: 1 Juli 2023 - 15 Juli 2023</li><li>Biaya pendaftaran: Rp 100.000,- per mata kuliah</li><li>Pembayaran dapat dilakukan melalui bank yang telah ditentukan</li><li>Peserta wajib mencetak kartu ujian sebagai syarat mengikuti UAS</li><li>Pastikan data pribadi dan mata kuliah terdaftar sudah benar sebelum mendaftar</li></ul><p>Bagi mahasiswa/i yang tidak melakukan pendaftaran sesuai jadwal, diharapkan untuk segera menghubungi bagian akademis. Semoga sukses dalam persiapan UAS! Terima kasih.</p>', '2023-07-17'),
	(8, 'Perubahan Jadwal Kuliah - Mata Kuliah Sistem Basis', 'Kepada seluruh mahasiswa/i yang mengambil mata kuliah Sistem Basis Data,\r\n\r\nDengan ini kami informasikan adanya perubahan jadwal kuliah untuk mata kuliah tersebut. Berikut adalah jadwal kuliah yang baru:\r\n\r\nHari/Tanggal: Rabu, 5 Juli 2023\r\nJam: 13:00 - 15:30\r\nRuang: A-202\r\nHarap diperhatikan bahwa jadwal kuliah sebelumnya telah dibatalkan dan tidak berlaku lagi. Mohon hadir tepat waktu sesuai jadwal yang terbaru. Jika ada pertanyaan atau kendala terkait perubahan ini, silakan hubungi dosen pengampu mata kuliah.\r\n\r\nTerima kasih atas perhatiannya.', '2023-07-16'),
	(9, 'Pengumuman Beasiswa Prestasi Semester Ganjil 2023/2024', 'Diberitahukan kepada seluruh mahasiswa/i berprestasi Universitas XYZ,\r\n\r\nKami dengan senang hati mengumumkan bahwa telah dibuka pendaftaran Beasiswa Prestasi untuk Semester Ganjil tahun ajaran 2023/2024. Beasiswa ini diperuntukkan bagi mahasiswa/i yang memiliki prestasi akademik yang luar biasa dan aktif berkontribusi dalam kegiatan kampus.\r\n\r\nInformasi Beasiswa:\r\n\r\nJumlah Beasiswa: 10 orang mahasiswa/i terbaik\r\nBesar Beasiswa: Rp 5.000.000,- per mahasiswa/i\r\nSyarat dan ketentuan berlaku\r\nSilakan segera ajukan pendaftaran melalui portal beasiswa kami. Batas akhir pendaftaran adalah tanggal 20 Juli 2023. Tim seleksi akan melakukan penilaian dan pengumuman penerimaan beasiswa akan dilakukan pada tanggal 30 Juli 2023.\r\n\r\nSemoga kesempatan ini dapat menjadi motivasi untuk terus berprestasi dalam akademik dan non-akademik. Sukses untuk para calon penerima beasiswa!', '2023-07-25'),
	(10, 'enundaan Pengambilan Transkrip Nilai', 'Kepada mahasiswa/i Universitas LMN,\r\n\r\nDiberitahukan bahwa pengambilan transkrip nilai untuk Semester Genap tahun 2022/2023 yang seharusnya dilakukan pada tanggal 15 Juli 2023 mengalami penundaan. Pengambilan transkrip nilai akan dilaksanakan mulai tanggal 20 Juli 2023.\r\n\r\nMohon maaf atas ketidaknyamanan ini. Penundaan ini terjadi karena adanya pemeliharaan sistem akademis yang sedang berlangsung. Semua data transkrip nilai tetap aman dan tidak ada perubahan pada hasil nilai mahasiswa/i.\r\n\r\nTerima kasih atas pengertiannya. Jika ada pertanyaan lebih lanjut, silakan hubungi bagian akademis.', '2023-07-25'),
	(11, 'Pembatalan Kuliah Pengganti Hari Libur Nasional', 'Kepada seluruh mahasiswa/i Fakultas Ilmu Sosial dan Humaniora,\r\n\r\nDengan hormat kami informasikan bahwa kuliah pengganti yang seharusnya dilaksanakan pada tanggal 23 Juli 2023 untuk menggantikan hari libur nasional telah dibatalkan. Mahasiswa/i dimohon untuk tidak hadir pada tanggal tersebut.\r\n\r\nKuliah akan tetap berlangsung sesuai jadwal yang telah ditetapkan sebelumnya, dan tidak ada perubahan terkait jadwal kuliah lainnya.\r\n\r\nTerima kasih atas perhatiannya dan selamat belajar!', '2023-07-25');

-- Dumping structure for table siakad_uit_jaksel.rekap_nilai
CREATE TABLE IF NOT EXISTS `rekap_nilai` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `matakuliah` varchar(50) DEFAULT NULL,
  `nilai` int(11) DEFAULT NULL,
  `pertemuan` int(11) DEFAULT NULL,
  `jenis_penilaian` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table siakad_uit_jaksel.rekap_nilai: ~25 rows (approximately)
REPLACE INTO `rekap_nilai` (`id`, `matakuliah`, `nilai`, `pertemuan`, `jenis_penilaian`) VALUES
	(1, 'Dasar Pemrograman Web', 78, 5, 'uts'),
	(2, 'Sistem Operasi', 86, 8, 'uas'),
	(3, 'Matematika Diskrit', 65, 3, 'tugas'),
	(4, 'Pengantar Database', 73, 4, 'uts'),
	(5, 'Algoritma dan Struktur Data', 92, 9, 'uas'),
	(6, 'Statistik', 88, 6, 'tugas'),
	(7, 'Pemrograman Mobile', 78, 7, 'uts'),
	(8, 'Bahasa Inggris', 75, 5, 'uas'),
	(9, 'Kecerdasan Buatan', 80, 10, 'tugas'),
	(10, 'Rekayasa Perangkat Lunak', 81, 8, 'uts'),
	(11, 'Pemrograman Berorientasi Objek', 95, 11, 'uas'),
	(12, 'Komunikasi Teknis', 70, 4, 'tugas'),
	(13, 'Jaringan Komputer', 85, 6, 'uts'),
	(14, 'Basis Data Lanjut', 88, 9, 'uas'),
	(15, 'Pengantar Teknologi Informasi', 68, 3, 'tugas'),
	(16, 'Pemrograman Python', 82, 7, 'uts'),
	(17, 'Arsitektur Komputer', 78, 5, 'uas'),
	(18, 'Manajemen Proyek', 90, 12, 'tugas'),
	(19, 'Interaksi Manusia dan Komputer', 76, 8, 'uts'),
	(20, 'Etika Profesi', 84, 10, 'uas'),
	(21, 'Pemrograman Java', 77, 6, 'tugas'),
	(22, 'Teori Graf', 93, 9, 'uts'),
	(23, 'Sistem Informasi Geografis', 79, 11, 'uas'),
	(24, 'Pengolahan Citra', 71, 4, 'tugas'),
	(25, 'Pemrograman C', 85, 7, 'uts');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
