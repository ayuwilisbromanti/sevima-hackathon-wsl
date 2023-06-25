-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2023 at 01:09 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wsl`
--

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(11) NOT NULL,
  `created_at` date DEFAULT NULL,
  `id_question` int(11) NOT NULL,
  `question` text NOT NULL,
  `answer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `created_at`, `id_question`, `question`, `answer`) VALUES
(28, NULL, 1, 'Hai!', 'Haloo, kamu lagi bingung masalah apa, nih?'),
(29, '2023-06-25', 1, 'Hai!', 'Haloo, kamu lagi bingung masalah apa, nih?'),
(30, '2023-06-25', 1, 'Hai!', 'Haloo, kamu lagi bingung masalah apa, nih?'),
(31, '2023-06-25', 1, 'Hai!', 'Haloo, kamu lagi bingung masalah apa, nih?'),
(32, '2023-06-25', 6, 'Apa yang perlu aku persiapkan untuk belajar PHP?', 'Untuk memulai belajar PHP, ada beberapa persiapan yang perlu kamu lakukan. Berikut adalah beberapa langkah yang dapat membantu kamu memulai belajar PHP:\r\n\r\nMemahami Dasar-dasar Pemrograman: Sebelum mempelajari PHP, penting untuk memiliki pemahaman dasar tentang konsep pemrograman seperti variabel, tipe data, pengendalian alur program (if, for, while), fungsi, dan sebagainya.\r\n\r\nMengenal HTML dan CSS: PHP sering digunakan untuk membuat halaman web dinamis. Memiliki pemahaman dasar tentang HTML dan CSS akan membantu kamu dalam memahami bagaimana PHP berinteraksi dengan elemen HTML dan bagaimana tampilan halaman web dapat dikendalikan dengan CSS.\r\n\r\nMemilih dan Menginstal Text Editor atau Integrated Development Environment (IDE): Pilihlah text editor atau IDE yang nyaman untuk digunakan saat menulis dan mengembangkan kode PHP. Beberapa pilihan populer adalah Visual Studio Code, Sublime Text, atau PHPStorm.\r\n\r\nMenginstal Server Web Lokal: Untuk mengembangkan dan menjalankan aplikasi PHP, kamu memerlukan server web lokal di komputer kamu. Beberapa opsi server web lokal yang populer adalah XAMPP, WAMP, atau MAMP. Server web lokal ini menyediakan lingkungan pengembangan yang memungkinkan kamu untuk menjalankan skrip PHP secara lokal di komputer.\r\n\r\nMembaca Dokumentasi PHP: PHP memiliki dokumentasi resmi yang sangat lengkap dan menjadi sumber pengetahuan yang sangat berharga. Pastikan untuk membaca dokumentasi PHP secara berkala untuk memahami sintaks, fungsi, dan fitur-fitur yang tersedia dalam PHP.\r\n\r\nMengikuti Tutorial dan Sumber Belajar: Ada banyak tutorial dan sumber belajar PHP yang tersedia secara online. Mulailah dengan tutorial dasar dan lanjut secara bertahap. Beberapa situs web populer yang menyediakan sumber belajar PHP adalah PHP.net, W3Schools, dan Laracasts.\r\n\r\nPraktik dan Proyek Kecil: Setelah memahami dasar-dasar PHP, praktiklah dengan menulis kode dan mencoba konsep-konsep yang telah dipelajari. Cobalah untuk membuat proyek kecil seperti formulir kontak, sistem pendaftaran, atau halaman dinamis sederhana. Praktik secara aktif akan membantu memperkuat pemahaman kamu.\r\n\r\nBergabung dengan Komunitas: Bergabung dengan komunitas PHP, forum diskusi, atau grup pengguna lokal dapat memberikan kesempatan untuk berinteraksi dengan para pengembang PHP lainnya, mendapatkan saran, dan berbagi pengetahuan.\r\n\r\nJangan lupa, belajar PHP (atau pemrograman secara umum) adalah proses yang berkelanjutan. Tetaplah konsisten dalam belajar, eksperimen dengan kode, dan selalu berusaha untuk memperluas pengetahuan kamu dengan membaca dan mencari tahu tentang perkembangan terbaru dalam bahasa pemrograman PHP.\r\n\r\n\r\n\r\n\r\n\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `id` int(11) NOT NULL,
  `question` text NOT NULL,
  `answer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id`, `question`, `answer`) VALUES
(1, 'Hai!', 'Haloo, kamu lagi bingung masalah apa, nih?'),
(2, 'Aku pengen belajar pemrograman, nih. Yang harus aku pelajari apa aja, ya?', 'Wah, pemrograman ya...\r\n\r\nKayanya kamu bisa mulai dari :<br>\r\n1. Apa sih pemrograman itu?<br>\r\n2. Hal-hal yang dilakukan oleh programmer.<br>\r\n3. Algoritma, flowchart, dan logika pemrograman.'),
(3, 'Kamu ada rekomendasi situs belajarnya, nggak?', 'Tentu, dong. Kamu bisa mencarinya di beberapa channel youtube berikut : 1. WEB Programming Unpas 2. Sekolah Koding 3. Petani Kode 4. deaafrizal 5. Dunia Coding'),
(4, 'Selain hal itu, apa lagi yang harus aku pelajari untuk ingin jadi programmer?', 'Setelah benar-benar paham materi tadi, kamu bisa melanjutkan dengan:\r\n1. Berkenalan dengan bahasa pemrograman.\r\nBerkenalanlah dengan bahasa pemrograman yang menarik minatmu. Kamu bisa memilih salah satu dari berapa bahasa pemrograman yang populer saat ini yaitu PHP, Java, Python, dll.\r\n2. Logika pemrograman.\r\nPelajari konsep dasar logika pemrograman seperti algoritma, struktur data, dan pemecahan masalah. Ini membantumu dalam merancang solusi efisien untuk masalah yang kompleks.\r\n3. Basis Data.\r\n Pelajari dasar-dasar basis data, seperti SQL dan desain basis data. Pahami konsep pengelolaan data, manipulasi data, dan integrasi basis data dalam aplikasi.'),
(5, 'Terima kasih', 'Sama-sama. Senang bisa membantu.'),
(6, 'Apa yang perlu aku persiapkan untuk belajar PHP?', 'Untuk memulai belajar PHP, ada beberapa persiapan yang perlu kamu lakukan. Berikut adalah beberapa langkah yang dapat membantu kamu memulai belajar PHP:\'\\n\'\r\n\r\nMemahami Dasar-dasar Pemrograman: Sebelum mempelajari PHP, penting untuk memiliki pemahaman dasar tentang konsep pemrograman seperti variabel, tipe data, pengendalian alur program (if, for, while), fungsi, dan sebagainya.\'\\n\'\r\n\r\nMengenal HTML dan CSS: PHP sering digunakan untuk membuat halaman web dinamis. Memiliki pemahaman dasar tentang HTML dan CSS akan membantu kamu dalam memahami bagaimana PHP berinteraksi dengan elemen HTML dan bagaimana tampilan halaman web dapat dikendalikan dengan CSS.\'\\n\'\r\n\r\nMemilih dan Menginstal Text Editor atau Integrated Development Environment (IDE): Pilihlah text editor atau IDE yang nyaman untuk digunakan saat menulis dan mengembangkan kode PHP. Beberapa pilihan populer adalah Visual Studio Code, Sublime Text, atau PHPStorm.\'\\n\'\r\n\r\nMenginstal Server Web Lokal: Untuk mengembangkan dan menjalankan aplikasi PHP, kamu memerlukan server web lokal di komputer kamu. Beberapa opsi server web lokal yang populer adalah XAMPP, WAMP, atau MAMP. Server web lokal ini menyediakan lingkungan pengembangan yang memungkinkan kamu untuk menjalankan skrip PHP secara lokal di komputer.\'\\n\'\r\n\r\nMembaca Dokumentasi PHP: PHP memiliki dokumentasi resmi yang sangat lengkap dan menjadi sumber pengetahuan yang sangat berharga. Pastikan untuk membaca dokumentasi PHP secara berkala untuk memahami sintaks, fungsi, dan fitur-fitur yang tersedia dalam PHP.\'\\n\'\r\n\r\nMengikuti Tutorial dan Sumber Belajar: Ada banyak tutorial dan sumber belajar PHP yang tersedia secara online. Mulailah dengan tutorial dasar dan lanjut secara bertahap. Beberapa situs web populer yang menyediakan sumber belajar PHP adalah PHP.net, W3Schools, dan Laracasts.\'\\n\'\r\n\r\nPraktik dan Proyek Kecil: Setelah memahami dasar-dasar PHP, praktiklah dengan menulis kode dan mencoba konsep-konsep yang telah dipelajari. Cobalah untuk membuat proyek kecil seperti formulir kontak, sistem pendaftaran, atau halaman dinamis sederhana. Praktik secara aktif akan membantu memperkuat pemahaman kamu.\'\\n\'\r\n\r\nBergabung dengan Komunitas: Bergabung dengan komunitas PHP, forum diskusi, atau grup pengguna lokal dapat memberikan kesempatan untuk berinteraksi dengan para pengembang PHP lainnya, mendapatkan saran, dan berbagi pengetahuan.\'\\n\'\r\n\r\nJangan lupa, belajar PHP (atau pemrograman secara umum) adalah proses yang berkelanjutan. Tetaplah konsisten dalam belajar, eksperimen dengan kode, dan selalu berusaha untuk memperluas pengetahuan kamu dengan membaca dan mencari tahu tentang perkembangan terbaru dalam bahasa pemrograman PHP.\'\\n\'');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_question` (`id_question`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `history`
--
ALTER TABLE `history`
  ADD CONSTRAINT `history_ibfk_1` FOREIGN KEY (`id_question`) REFERENCES `question` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
