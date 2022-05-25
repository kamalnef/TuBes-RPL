-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Bulan Mei 2022 pada 04.49
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbkever`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username_admin` varchar(250) NOT NULL,
  `password_admin` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username_admin`, `password_admin`) VALUES
(1, 'admin', 'admin1234');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cart`
--

CREATE TABLE `cart` (
  `id_cart` int(11) NOT NULL,
  `id_produk` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `jumlah_barang` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `total_berat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_barang`
--

CREATE TABLE `kategori_barang` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori_barang`
--

INSERT INTO `kategori_barang` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Album'),
(2, 'DVD'),
(3, 'Merchandise');

-- --------------------------------------------------------

--
-- Struktur dari tabel `metode_pembayaran`
--

CREATE TABLE `metode_pembayaran` (
  `id_metode` int(11) NOT NULL,
  `nama_metode` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `metode_pengiriman`
--

CREATE TABLE `metode_pengiriman` (
  `id_ekspedisi` int(11) NOT NULL,
  `nama_ekspedisi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `id_kategori` int(11) DEFAULT NULL,
  `nama_produk` varchar(200) NOT NULL,
  `gambar_produk` varchar(255) DEFAULT NULL,
  `stok_barang` int(11) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `berat_produk` int(11) NOT NULL,
  `harga_produk` int(11) NOT NULL,
  `bonus_produk` varchar(100) DEFAULT NULL,
  `tgl_rilis` date DEFAULT NULL,
  `label` varchar(200) DEFAULT NULL,
  `produksi` varchar(50) DEFAULT NULL,
  `lokasi_produk` varchar(50) NOT NULL,
  `kondisi_produk` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `id_kategori`, `nama_produk`, `gambar_produk`, `stok_barang`, `deskripsi`, `berat_produk`, `harga_produk`, `bonus_produk`, `tgl_rilis`, `label`, `produksi`, `lokasi_produk`, `kondisi_produk`) VALUES
(1, 1, 'BE (Deluxe Edition)', 'BE (Deluxe Edition).jpg', 3, 'BTS merilis album terbaru bernama ‘BE’ pada tanggal 20 November 2020 di saat pandemi COVID-19 melanda dunia. Album ini terdiri dari delapan lagu termasuk Billboard No. 1 Hot 100 ‘Dynamite’ dan single utama ‘Life Goes On’.\r\n\r\nSuatu hari, dunia berhenti tanpa peringatan apa pun, jalan-jalan terhapus dari langkah kaki dan jalannya tidak terlihat. Ketika rasa keputusasaan membayangi setiap sudut dunia, BTS membuka diri untuk mengungkapkan perasaan kacau mereka—ketakutan dan kecemasan bercampur dengan tekad untuk mengatasi semua ini. BTS menggemakan pesan dengan suara rendah yang menghibur bahwa dalam menghadapi hal-hal yang tidak terduga, ternyata \"Life Goes On\" dan mengulurkan tangan mereka menuju masa depan.', 700, 3500000, 'Photocard', '2020-11-20', 'Label', 'Produksi', 'Bandung', 'Baru'),
(2, 1, 'Butter', 'Butter.jpg', 3, 'BTS merilis CD single \"Butter\" pada tanggal 9 Juli 2021. CD single ini berisi lagu musim panas ‘Butter’ yang berderai serta ‘Permission to Dance’ yang akan membuat jantung berdebar dan perasaan ingin menari. Versi instrumental dari masing-masing juga merupakan bagian dari daftar lagu.\r\n\r\nTermasuk dalam genre dance pop, ‘Permission to Dance’ terdiri atas suara piano dan dawai yang membuat pendengarnya menundukkan kepala dan melakukan beberapa gerakan tarian. Musisi terkenal dunia, Ed Sheeran, dan produser asal Inggris, Steve Mac, mengambil bagian dalam pembuatan lagu ini.\r\n', 700, 3500000, 'Photocard', '2021-07-09', 'Label', 'Produksi', 'Bandung', 'Baru'),
(3, 1, 'Map of The Soul: 7', 'map of the soul 7.jpg', 3, 'BTS merilis studio album keempat mereka, ‘MAP OF THE SOUL: 7’, pada 21 Februari 2020.\r\n\r\n‘MAP OF THE SOUL: 7’ mengenang tujuh tahun terakhir BTS sejak debut mereka sebagai tujuh anggota dalam satu tim. Perjalanan tidak selalu mulus, selalu ada kesulitan khusus yang harus mereka tanggung sebagai superstar global. Sekarang, memahami bahwa bekas luka yang ditinggalkan oleh kesulitan itu adalah bagian dari diri mereka yang sebenarnya, BTS menerima \"diri yang ingin mereka tunjukkan\" dan \"diri yang ingin mereka cemooh\" untuk akhirnya menceritakan kisah mereka sendiri tentang menemukan \"diri mereka yang sebenarnya\" dan ”diri mereka yang lengkap\".\r\n', 700, 3500000, 'Photocard', '2021-07-09', 'Label', 'Produksi', 'Bandung', 'Baru'),
(4, 1, 'Map of The Soul: Persona', 'map of the soul persona.jpg', 3, 'BTS memulai cerita baru dengan merilis EP terbaru mereka ‘MAP OF THE SOUL : PERSONA’ pada 12 April 2019.\r\n\r\nMembuka seri MAP OF THE SOUL dengan PERSONA, BTS berbicara tentang kegembiraan dalam menemukan cinta dan menjangkau dunia dengan pesan yang ingin mereka bagikan kepada penggemar mereka. Total ada tujuh lagu dalam album ini, di mana BTS menjalin bersama apa yang benar-benar mereka rasakan baik di dalam diri mereka sendiri maupun dunia yang terus meluas di sekitar mereka. Penyanyi asal Amerika, Halsey, mengambil bagian dalam single utama \'Boy With Luv (ft. Halsey)\' di mana BTS berbicara tentang bagaimana kekuatan dan cinta sejati datang dari menemukan kebahagiaan dari hal-hal kecil dalam hidup.\r\n', 700, 3500000, 'Photocard', '2019-04-12', 'Label', 'Produksi', 'Bandung', 'Baru'),
(5, 1, 'LOVE YOURSELF 結 ‘Answer’', 'LOVE YOURSELF 結 ‘Answer’.jpg', 3, 'Pertama kali diluncurkan pada bulan Maret 2016, seri BTS LOVE YOURSELF menciptakan narasi dengan menghubungkan lagu-lagu utama di setiap album ke dalam satu tema, menyampaikan pesan bahwa \"mencintai diri sendiri adalah cinta sejati\". Seperti novel yang ditulis dengan baik yang memiliki prolog, pengembangan karakter, lika-liku, dan epilog, BTS berbagi cerita yang menarik selama dua setengah tahun.\r\n\r\nDirilis pada 24 Agustus 2018, \'ANSWER’ adalah bagian terakhir dari teka-teki serial ini. Meskipun ini adalah album repackage, LOVE YOURSELF 結 \'ANSWER\' masih berisi tujuh lagu baru termasuk single utama, ‘IDOL’. Rapper kenamaan asal Amerika, Nicki Minaj, juga mendapat kesempatan untuk mengambil bagian di single ‘IDOL’.\r\n', 700, 3500000, 'Photocard', '2016-03-20', 'Label', 'Produksi', 'Bandung', 'Baru'),
(6, 1, 'LOVE YOURSELF 轉 \'Tear\'', 'LOVE YOURSELF 轉 \'Tear\'.jpg', 3, 'Album studio ketiga BTS ini dirilis pada 18 Mei 2018.\r\n\r\nSerial LOVE YOURSELF BTS membawa pesan bahwa mencintai diri sendiri adalah awal dari cinta sejati. Sementara album LOVE YOURSELF 起 \'WONDER\' dan LOVE YOURSELF 承 \'HER\' yang sebelumnya diluncurkan mengungkapkan momen-momen cinta yang mengharukan dan menggetarkan hati, album LOVE YOURSELF 轉 \'TEAR\' mewujudkan rasa sakit yang harus menghadapi perpisahan.\r\n', 700, 3500000, 'Photocard', '2018-05-12', 'Label', 'Produksi', 'Bandung', 'Baru'),
(7, 1, 'LOVE YOURSELF 承 \'Her\'', 'LOVE YOURSELF 承 \'Her\'.jpg', 3, 'Pada 18 September 2017, BTS merilis 承 \'Her\' sebagai album pertama di serial terbaru LOVE YOURSELF.\r\n\r\nLOVE YOURSELF 承 \'Her\' adalah ekspresi dari kecemasan dan kegembiraan cinta, diceritakan dalam gaya unik ala BTS. ‘Cinta’ yang ingin disampaikan BTS dalam seri LOVE YOURSELF adalah pesan perdamaian, persatuan bagi setiap insan dan pengalaman individu seorang anak laki-laki yang tumbuh dewasa. Dalam mini album 承 \'HER\' yang memulai narasi baru ini, citra anak laki-laki yang jatuh cinta untuk pertama kalinya diekspresikan dalam pengambilan yang menyegarkan dan ceria yang bertujuan untuk membicarakan topik ‘cinta’ sambil tenggelam dalam cerita yang akan datang.\r\n', 700, 3500000, 'Photocard', '2017-09-18', 'Label', 'Produksi', 'Bandung', 'Baru'),
(8, 1, 'YOU NEVER WALK ALONE', 'YOU NEVER WALK ALONE.jpg', 3, 'YOU NEVER WALK ALONE melengkapi cerita “youth and growth” yang tidak semuanya bisa dimuat dalam album WINGS. Sementara seri The Most Beautiful Moment in Life dan WINGS adalah narasi dari “youth and growth”, bab tambahan untuk WINGS ini adalah pesan penghiburan hangat dan harapan bagi pemuda yang menderita di generasi saat ini.\r\n', 700, 3500000, 'Photocard', '2019-04-12', 'Label', 'Produksi', 'Bandung', 'Baru'),
(9, 1, 'WINGS', 'WINGS.jpg', 3, 'BTS merilis album studio kedua mereka, ‘WINGS’. Setelah bertemu dengan serial ‘The Most Beautiful Moment in Life’, BTS kini berdiri di depan babak baru. Dirilis pada 10 Oktober 2016, WINGS berisi lagu-lagu tentang anak laki-laki yang menghadapi godaan untuk pertama kalinya dan harus merenungkan dan menderita dalam menghadapinya. Saat ketujuh anak laki-laki tersebut mengalami rasa sakit dan kebahagiaan, mereka memunculkan gambar burung yang keluar dari cangkangnya dan mencoba terbang untuk pertama kalinya.', 700, 3500000, 'Photocard', '2016-10-10', 'Label', 'Produksi', 'Bandung', 'Baru'),
(10, 1, 'BTS Young Forever in The Most Beautiful Moment in Life', 'BTS Young Forever in The Most Beautiful Moment in Life.jpg', 3, 'Setelah mendapatkan atensi dunia dengan dua bagian The Most Beautiful Moment in LIfe Series pada tahun 2015, BTS merilis album spesial mereka bernama ‘The Most Beautiful Moment in Life: YOUNG FOREVER’ pada 2 Mei 2016. Sesuai dengan judul albumnya, serial ini telah memungkinkan BTS yang sekarang untuk berada di momen paling indah dalam hidup mereka. ‘The Most Beautiful Moment in Life: YOUNG FOREVER’ adalah album spesial yang menandai akhir dari perjalanan epik serial ini di mana berisi kisah-kisah terakhir yang dituturkan oleh anak-anak muda yang meskipun kenyataan tidak pasti dan tidak aman (The Most Beautiful Moment in Life Pt. 1), mereka harus terus berjalan ke depan (The Most Beautiful Moment in Life Pt. 2).', 700, 3500000, 'Photocard', '2016-03-02', 'Label', 'Produksi', 'Bandung', 'Baru'),
(11, 2, 'BTS Memories of 2019 DVD', 'BTS Memories of 2019 DVD.jpg', 3, 'BTS Memories of 2019 menghadirkan 700 menit konten dan cuplikan menarik BTS dan ARMY selama tahun 2019. Dikemas dalam 6 CD, dari rekaman lengkap konser stadion Rose Bowl LA di hadapan 120.000 penggemar hingga semangat energik dimulainya BTS WORLD TOUR, LOVE YOURSELF: SPEAK YOURSELF. Selain itu, ikuti juga di balik layar pemotretan album \'MAP OF THE SOUL: PERSONA\' di bulan Januari hingga New Year\'s Rockin\' Eve pada tanggal 31 Desember.', 400, 200000, 'Signature', '2020-01-20', 'Label', 'Produksi', 'Bandung', 'Baru'),
(12, 2, 'BTS MAP OF THE SOUL ON:E DVD', 'BTS MAP OF THE SOUL ONE DVD.jpg', 3, 'DVD ini berisi penampilan konser online BTS MAP OF THE SOUL ON:E yang menunjukkan pesona BTS yang energik dan menyegarkan. Realisasi panggung dimungkinkan dengan teknologi AR dan VR dan komposisi unik yang menggunakan stage 360 derajat. \r\n\r\nBTS MAP OF THE SOUL ON:E DVD di mana kita dapat menghargai tahap terbaik BTS yang menunjukkan pertumbuhan BTS selama 7 tahun terakhir mereka berkarya.', 400, 200000, 'Signature', '2020-01-20', 'Label', 'Produksi', 'Bandung', 'Baru'),
(13, 2, 'BTS WORLD TOUR ‘LOVE YOURSELF: SPEAK YOURSELF’ LONDON DVD', 'BTS WORLD TOUR ‘LOVE YOURSELF SPEAK YOURSELF’ LONDON DVD.png', 3, 'Setelah memikat dunia dan ARMY dengan prestasi tanpa henti, BTS berhasil menulis sejarah lain dengan menggelar konser di Stadion Wembley yang bersejarah di London, Inggris.\r\n\r\nDVD ini akan membawamu jatuh ke pengalaman konser di dalam dan di luar panggung. Dari pertunjukan menawan yang mengguncang dunia hingga cuplikan di belakang layar 50 menit yang menayangkan wawancara pribadi anggota BTS yang mengungkapkan emosi dan rasa terima kasih mereka.\r\n', 400, 200000, 'Signature', '2020-01-20', 'Label', 'Produksi', 'Bandung', 'Baru'),
(14, 2, '2022 Season\'s Greetings', '2022 Season_s Greetings.png', 3, '2022 Season\'s Greetings menampilkan berbagai persona BTS. Box berisi season’s greeting telah dirancang menyerupai kios berita mini, dan seperti biasa hanya berisi barang-barang terbaik untuk menyambut ARMY di tahun baru.\r\n\r\nDalam DVD, terdapat video berdurasi 70 menit termasuk pembuatan season’s greeting di mana para anggota mencerminkan tahun 2021 dengan kata kunci: memainkan permainan bingo bertema BTS untuk menentukan siapa yang paling mengenal BTS dan membicarakan tujuan mereka untuk tahun 2022.\r\n', 400, 200000, 'Signature', '2022-05-21', 'Label', 'Produksi', 'Bandung', 'Baru'),
(15, 2, 'BTS Memories of 2020 DVD', 'BTS Memories of 2020 DVD.jpg', 3, 'BTS Memories of 2020 DVD menggambarkan momen-momen kejayaan BTS di tahun 2020. Momen-momen di mana BTS dan ARMY secara mental & spiritual terasa bersama meski terpisah secara fisik. DVD ini terdiri dari tujuh CD dengan durasi sekitar 722 menit. ', 400, 200000, 'Signature', '2022-05-21', 'Label', 'Produksi', 'Bandung', 'Baru'),
(16, 3, 'Graphic S/S T-Shirt', 'Graphic T-Shirt.png', 3, 'Kaos lengan pendek dengan desain grafis warna yang luar biasa. Terdapat aksen tulisan “Little stories found in the woods” yang identik dengan tema IN THE SOOP.', 500, 200000, 'Photocard + Signature', '2020-01-20', 'Label', 'Produksi', 'Bandung', 'Baru'),
(17, 3, 'Sweatshirt (sky blue)', 'Sweatshirt (sky blue).png', 3, 'Sweatshirt yang dibuat menggunakan bahan zurry dengan model oversize yang trendi. Terdapat tulisan “SOOPY” (karakter utama dari IN THE SOOP) yang dibordir di bagian lengan kiri, lalu cetakan grafis tipografi merk di bagian depan.', 700, 200000, 'Signature + Photocard', '2020-01-20', 'Label', 'Produksi', 'Bandung', 'Baru'),
(18, 3, 'Hoodie (melange grey)', 'Hoodie (melange grey).png', 3, 'Hoodie yang dibuat menggunakan bahan zurry dengan model oversize yang trendi. Terdapat tulisan “SOOPY” (karakter utama dari IN THE SOOP) yang dibordir di bagian depan, lalu cetakan grafis tipografi merek di bagian belakang\r\n', 800, 200000, 'Signature + Photocard', '2020-01-20', 'Label', 'Produksi', 'Bandung', 'Baru'),
(19, 3, 'Tote Bag', 'Tote Bag.png', 3, 'Tote bag yang bisa digunakan dimanapun di setiap kegiatan sehari-hari. Terbuat dari bahan canvas, terdapat kantong kecil di dalamnya dan tulisan “Little stories found in the woods”. ', 200, 150000, 'Signature + Photocard', '2022-05-21', 'Label', 'Produksi', 'Bandung', 'Baru'),
(20, 3, 'Woven Jacket', 'Woven Jacket.png', 3, 'Jaket woven ini sangat berguna saat terjadi perubahan suhu yang drastis antar musim. Ini adalah item yang sangat serbaguna yang dapat dipakai sendiri atau dikombinasikan dengan outfit lainnya. Terdapat tulisan IN THE SOOP yang tercetak di bagian depan dan simbol merk tercetak di bagian belakang.\r\n', 800, 300000, 'Signature + Photocard', '2022-05-21', 'Label', 'Produksi', 'Bandung', 'Baru');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `nomor_telepon` varchar(20) DEFAULT NULL,
  `kode_pos` varchar(10) DEFAULT NULL,
  `alamat_lengkap` varchar(50) DEFAULT NULL,
  `username_user` varchar(50) DEFAULT NULL,
  `password_user` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `email`, `nama_lengkap`, `nomor_telepon`, `kode_pos`, `alamat_lengkap`, `username_user`, `password_user`) VALUES
(1, 'anjanijani@gmail.com', 'Ratih Anjani', '081212345678', '11111111', 'Jalan Pegangsaan Timur No.56 06/04', 'anjani', '$2y$10$iU1AgcbOAuNi4wOmC61CvOKwvRFiOlApKBysaagACvTQEkK0B3qom'),
(2, 'moriarty@gmail.com', 'Moriarty XYZ', '081243215678', '12345', 'Jalan Pegangsaan Timur No.57 06/04', 'moriarty', '$2y$10$Z3/XElVYQz4FZEoafiHDlefvL1S0dcOYev49IJaME.9P3aC1j8cbi'),
(4, 'anburoot712@gmail.com', 'Rafi Arsalan', '085880329771', '43365', 'Kp. jamban 1 rt 03/04, Cikakak', 'raparsalan', '$2y$10$4v3F3W05o2JTlsa4M0kHbuxEhmKw8.Bs.Zr17zpcwtyFsB45Rm2vu');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id_cart`),
  ADD KEY `id_produk` (`id_produk`),
  ADD KEY `cart_ibfk_2` (`id_user`);

--
-- Indeks untuk tabel `kategori_barang`
--
ALTER TABLE `kategori_barang`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `metode_pembayaran`
--
ALTER TABLE `metode_pembayaran`
  ADD PRIMARY KEY (`id_metode`);

--
-- Indeks untuk tabel `metode_pengiriman`
--
ALTER TABLE `metode_pengiriman`
  ADD PRIMARY KEY (`id_ekspedisi`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `cart`
--
ALTER TABLE `cart`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kategori_barang`
--
ALTER TABLE `kategori_barang`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `metode_pembayaran`
--
ALTER TABLE `metode_pembayaran`
  MODIFY `id_metode` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `metode_pengiriman`
--
ALTER TABLE `metode_pengiriman`
  MODIFY `id_ekspedisi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori_barang` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
