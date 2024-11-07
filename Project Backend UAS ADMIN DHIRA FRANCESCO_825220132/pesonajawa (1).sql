-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2023 at 08:19 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pesonajawa`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `beritaKODE` varchar(200) NOT NULL,
  `beritaJUDUL` varchar(200) NOT NULL,
  `beritaFOTO` varchar(500) NOT NULL,
  `beritaISI` varchar(5000) NOT NULL,
  `kategoriKODE` varchar(20) NOT NULL,
  `beritaTANGGAL` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`beritaKODE`, `beritaJUDUL`, `beritaFOTO`, `beritaISI`, `kategoriKODE`, `beritaTANGGAL`) VALUES
('', '', '1.jpg', '', 'coba', '0000-00-00'),
('B001', 'RESTORAN VIRAL BALI', 'tanahliat.jpg', 'Bali tidak hanya terkenal dengan keindahan alamnya, tetapi juga dengan kelezatan kuliner lokalnya. Bagi para wisatawan yang ingin menikmati hidangan lezat tanpa harus menguras dompet, restoran yang enak tapi murah menjadi pilihan utama. Salah satu restoran yang patut dicoba adalah \"Warung Suka Rasa.\"\r\n\r\nTerletak strategis di pusat kota Denpasar, Warung Suka Rasa menawarkan pengalaman kuliner yang autentik dengan harga yang ramah di kantong. Dengan dekorasi yang sederhana namun nyaman, restoran ini menyajikan beragam hidangan khas Bali dan Indonesia.\r\n\r\nMenu andalan Warung Suka Rasa termasuk Nasi Campur Bali, Sate Ayam Madura, dan Bebek Betutu. Keunikan rasa dan kelezatan masakan mereka menjadi daya tarik utama bagi pelanggan setia. Meskipun harganya terjangkau, Warung Suka Rasa tetap memastikan kualitas bahan baku yang segar dan berkualitas.\r\n\r\nSalah satu pengunjung setia, Ibu Ani, mengatakan, \"Saya selalu kembali ke Warung Suka Rasa karena selain harganya yang terjangkau, rasanya juga tidak kalah dengan restoran mewah lainnya di Bali. Tempatnya bersih, pelayanannya ramah, dan saya selalu puas setiap kali makan di sini.\"', 'K002', '2023-11-28'),
('B002', 'PUSAT PEMBELANJAAN JAKARTA', 'tanahabang.jpg', 'Tanah Abang, pusat perbelanjaan ikonik di Jakarta, terus menarik perhatian pengunjung dengan berbagai penawaran menarik dan pengalaman berbelanja yang tak terlupakan. Sebagai salah satu destinasi belanja terbesar di Asia Tenggara, Tanah Abang tidak hanya menawarkan berbagai produk mode terkini, tetapi juga menjadi pusat aktivitas perdagangan yang ramai.\r\n\r\nPusat perbelanjaan ini terkenal dengan Pasar Tanah Abang, yang terdiri dari berbagai blok dan lantai yang menjual beragam produk, mulai dari pakaian, aksesoris, hingga barang elektronik. Salah satu daya tarik utama Pasar Tanah Abang adalah harga yang kompetitif dan pilihan yang sangat beragam, menjadikannya tempat ideal bagi para pecinta belanja.\r\n\r\nSalah seorang pengunjung setia, Bapak Iwan, mengatakan, \"Saya selalu kembali ke Tanah Abang karena di sini saya bisa menemukan semua yang saya butuhkan dalam satu tempat. Harga-harga yang ditawarkan juga sangat bersaing, jadi saya selalu merasa puas dengan pembelian saya di sini.\"\r\n\r\nSelain Pasar Tanah Abang, pusat perbelanjaan ini juga dikenal dengan pusat mode yang menyajikan koleksi terbaru dari para desainer lokal dan internasional. Berbagai butik dan toko pakaian menawarkan gaya yang beragam, mulai dari busana kasual hingga pakaian khusus untuk acara formal.\r\n\r\nNamun, bukan hanya belanja yang menjadi daya tarik Tanah Abang. Fasilitas seperti food court dengan berbagai pilihan kuliner, area bermain anak, dan parkir yang luas membuat pengalaman berbelanja di Tanah Abang menjadi lebih menyenangkan dan nyaman bagi seluruh keluarga.\r\n\r\nDengan terus berkembangnya dan peningkatan fasilitas yang ditawarkan, Tanah Abang tetap menjadi destinasi belanja favorit bagi warga Jakarta maupun wisatawan. Jadi, jika Anda mencari pengalaman berbelanja yang seru dan berkesan di Jakarta, Tanah Abang adalah tempat yang patut untuk dikunjungi. Selamat berbelanja!\r\n', 'K003', '2023-11-28'),
('B003', 'Bromo Kembali Menghijau', 'bromo.jpg', '\r\nSelama beberapa tahun terakhir, Gunung Bromo, yang sebelumnya terkenal dengan lanskapnya yang kering dan berdebu, kini mengalami perubahan dramatis setelah mengalami kebakaran yang cukup hebat. Berita positifnya adalah bahwa Gunung Bromo kembali hijau setelah pemulihan yang luar biasa pasca kejadian kebakaran tersebut. Proses alami suksesi tanaman dan pertumbuhan vegetasi baru secara perlahan namun pasti mengubah wajah gunung berapi ini.\r\n\r\nPara ahli lingkungan mencatat bahwa kebakaran di sekitar Gunung Bromo, yang pada awalnya dapat menyebabkan kerusakan signifikan pada vegetasi dan ekosistem lokal, kini telah memberikan kesempatan bagi tanaman-tanaman pionir dan semak belukar untuk tumbuh kembali. Warna hijau yang kembali menyelimuti lereng dan kawah Gunung Bromo bukan hanya tanda pemulihan ekosistem, tetapi juga memberikan harapan bahwa alam memiliki kemampuan untuk pulih setelah mengalami gangguan eksternal.\r\n\r\nKembalinya hijaunya Gunung Bromo setelah kebakaran tidak hanya menciptakan pemandangan yang memukau, tetapi juga memberikan pesan positif tentang ketahanan alam dan pentingnya menjaga keberlanjutan ekosistem. Sementara para peneliti terus memantau perkembangan ini, masyarakat dan pemerintah setempat diharapkan dapat bekerja sama untuk menjaga dan melindungi keindahan alam yang telah kembali pulih ini.', 'K005', '2023-12-04'),
('B004', 'Air Terjun Viral mengundang pengunjung', 'airterjun1.jpg', 'Air Terjun Sri Gethuk, yang terletak di Kabupaten Gunungkidul, Yogyakarta, Indonesia, menjadi salah satu destinasi alam yang memukau dan mempesona para pengunjung dengan keindahan alamnya. Dikelilingi oleh tebing-tebing tinggi dan hutan hijau yang rimbun, air terjun ini menawarkan pemandangan yang menakjubkan serta pengalaman rekreasi yang menyegarkan. Air Terjun Sri Gethuk terkenal tidak hanya karena kejernihan airnya tetapi juga karena keunikan formasi batu dan karang di sekitarnya.\r\n\r\nSalah satu daya tarik utama Air Terjun Sri Gethuk adalah adanya goa-goa alam yang tersembunyi di sekitarnya, menambah nuansa misteri dan petualangan bagi para pengunjung. Suara gemericik air yang jatuh dari ketinggian menciptakan suasana yang menenangkan dan menyejukkan, menjadi tempat ideal untuk bersantai atau bahkan bermeditasi. Selain itu, masyarakat lokal juga turut berperan aktif dalam menjaga kebersihan dan kelestarian lingkungan di sekitar air terjun, menciptakan atmosfer damai dan alami yang memikat.\r\n\r\nPengelolaan yang berkelanjutan dan upaya pelestarian alam yang terus dilakukan oleh pemerintah setempat dan komunitas sekitar telah menjadikan Air Terjun Sri Gethuk sebagai destinasi ekowisata yang ramah lingkungan. Melalui upaya ini, Air Terjun Sri Gethuk tidak hanya menjadi destinasi wisata yang indah secara alamiah, tetapi juga menjadi contoh positif dalam pelestarian keindahan alam dan kearifan lokal.', 'K006', '2023-12-04'),
('B005', 'Kulineran di Bogor', 'sotomie.jpg', 'Bogor, sebuah kota bersejarah yang dikelilingi oleh kehijauan alam di Jawa Barat, telah menjelma menjadi destinasi kuliner yang menarik hati wisatawan. Di tengah pesona alam dan suasana kota hujan yang asri, Bogor menawarkan pengalaman kuliner yang unik. Pelancong dapat menikmati sajian lezat seperti soto Betawi yang khas dan sate maranggi yang terkenal. Restoran dan warung lokal menyajikan kombinasi harmonis antara cita rasa tradisional dan sentuhan modern. Lebih dari sekadar memanjakan lidah, pengalaman kuliner di Bogor menjadi jendela untuk menggali kekayaan budaya melalui keunikan sajian. Dengan pemandangan alam yang memesona, Bogor menjadi destinasi kuliner yang mengundang untuk dieksplorasi lebih dalam.', 'K002', '2023-12-05'),
('B006', 'Bali si \"Pulau Para Dewa\"', 'KUTA.JPG', 'Bali, pulau surgawi di Indonesia, terus memukau dunia dengan keajaiban alamnya yang menakjubkan. Dari pantai-pantai berpasir putih hingga puncak-puncak gunung yang megah, Bali menyajikan pengalaman wisata alam yang tak terlupakan. Para wisatawan dapat mengeksplorasi keindahan Gunung Batur, menikmati matahari terbenam di Tanah Lot, atau merasakan ketenangan di Taman Nasional Bali Barat. Keanekaragaman ekosistem pulau ini menjadikannya surga bagi pecinta alam yang mencari petualangan dan kedamaian di tengah keelokan alam tropis. Budaya dan spiritualitas Bali juga tercermin dalam hubungannya dengan alam, menciptakan pengalaman wisata alam yang menyentuh hati dan jiwa.', 'K001', '2023-12-05'),
('B007', 'Restoran Fine Dinning ', 'finedining.jpg', 'Jakarta, ibukota sibuk Indonesia, memimpin panggung kuliner dengan keberagaman dan kegembiraan. Dari restoran mewah di pusat kota hingga warung kaki lima yang ramai, kota ini memuaskan selera setiap pengunjung. Keberagaman kuliner tercermin dalam hidangan internasional di pusat kota dan cita rasa otentik di setiap sudut Jakarta. Restoran-restoran bergaya memberikan nuansa modern, sementara warung-warung tradisional menyajikan rasa autentik Indonesia. Jakarta, yang tidak hanya pusat bisnis tetapi juga destinasi kuliner, menawarkan petualangan gastronomi di setiap perjalanan. Dengan setiap lorongnya menawarkan pengalaman kuliner yang unik, kota ini menjadi tempat untuk menikmati hidangan lezat dari seluruh dunia.', 'K002', '2023-12-05');

-- --------------------------------------------------------

--
-- Table structure for table `destinasi`
--

CREATE TABLE `destinasi` (
  `destinasiKODE` char(4) NOT NULL,
  `destinasiNAMA` varchar(120) NOT NULL,
  `destinasiKET` text NOT NULL,
  `destinasiDAERAH` varchar(100) NOT NULL,
  `destinasiFOTO` varchar(500) NOT NULL,
  `kategoriKODE` char(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `destinasi`
--

INSERT INTO `destinasi` (`destinasiKODE`, `destinasiNAMA`, `destinasiKET`, `destinasiDAERAH`, `destinasiFOTO`, `kategoriKODE`) VALUES
('D001', 'Labuan Bajo', 'Labuan Bajo di Pulau Flores, Indonesia, adalah gerbang utama ke Taman Nasional Komodo. Dikenal karena keindahan alamnya yang menakjubkan, Labuan Bajo menyuguhkan pemandangan teluk biru dan bukit hijau yang memikat hati. Taman Nasional Komodo menawarkan kesempatan langka untuk bertemu Komodo Dragon, reptil besar yang hanya dapat ditemukan di wilayah ini, dengan pulau-pulau seperti Rinca dan Komodo menjadi tempat trekking yang menarik.\n\nLabuan Bajo juga menjadi surga bagi penyelam dengan terumbu karangnya yang memukau dan kehidupan laut yang beragam. Para pengunjung dapat merasakan keajaiban bawah laut melalui aktivitas snorkeling dan diving. Sementara itu, desa-desa tradisional di sekitar Labuan Bajo memperkaya pengalaman wisata dengan kehidupan budaya masyarakat Flores.\n\nDengan keindahan alam yang memukau, kesempatan langka untuk bertemu Komodo Dragon, dan pesona bawah lautnya, Labuan Bajo menjadi destinasi yang sempurna bagi pencinta alam dan petualangan.', 'Labuan Bajo', 'labuanbajo.jpg', 'K004'),
('D002', 'Pantai Ora', 'Pantai Ora adalah salah satu pantai di Maluku yang namanya sudah dikenal hingga mancanegara. Keindahan alam di Pantai ini sudah banyak dikenal bahkan disamakan dengan pantai-pantai di Hawai maupun Maladewa. Namun, yang perlu diketahui adalah bahwa akses menuju pantai Ora hanya dapat dicapai dengan menggunakan perahu saja. Itu sebabnya mengapa pengalaman menuju tempat ini sangat mahal harganya. Di wilayah pantai ini hanya ada satu resort yang terkenal, namun bila kita ingin menginap di tempat lain, ada beberapa alternatif seperti di Desa Sawai maupun Saleman yang terletak tidak jauh dari pantai Ora.', 'Labuan Bajo', 'pantaiora.jpg', 'K004'),
('D003', 'Monas', 'Monumen Nasional (Monas) di Jakarta, Indonesia, adalah destinasi wisata bersejarah yang mencerminkan kekayaan budaya dan semangat kemerdekaan. Monas, setinggi 137 meter, menjadi ikon penting dengan lidah api emasnya yang menyala di puncaknya, melambangkan semangat perjuangan bangsa.\r\n\r\nPengunjung dapat menikmati keindahan Jakarta dari puncak Monas setelah menaiki tangga atau menggunakan lift. Di sekitar monumen, terdapat taman hijau yang menawan, air mancur, dan patung pahlawan nasional, menciptakan suasana yang nyaman untuk bersantai.\r\n\r\nMuseum Nasional Indonesia yang berada di bawah Monas menjadi daya tarik tambahan dengan koleksi seni, artefak sejarah, dan peninggalan budaya yang menggambarkan kekayaan warisan Indonesia.\r\n\r\nMonas bukan hanya landmark sejarah, tetapi juga menjadi pusat kegiatan masyarakat, sering digunakan untuk perayaan nasional dan acara olahraga. Pada malam hari, monumen diterangi lampu-lampu yang menciptakan suasana magis dan memesona.', 'Jakarta', 'monas.jpg', 'K001'),
('D004', 'Taman Kota', 'Taman Kota adalah destinasi wisata perkotaan yang menyajikan oase hijau di tengah hiruk-pikuk kehidupan urban. Berlokasi strategis di pusat kota, taman ini menjadi tempat populer bagi warga lokal dan wisatawan untuk beristirahat dan rekreasi.\r\n\r\nTaman Kota seringkali dilengkapi dengan area hijau yang luas, jalur pejalan kaki, dan taman bermain untuk anak-anak. Pepohonan rindang memberikan sejuk dan keteduhan, menciptakan atmosfer yang menyenangkan. Beberapa taman dilengkapi dengan kolam, air mancur, atau danau buatan, menambah daya tarik estetis dan memberikan ruang untuk kegiatan air.\r\n\r\nSelain menjadi tempat rekreasi, Taman Kota juga sering menjadi pusat kegiatan sosial dan budaya. Acara seni, konser musik, atau festival sering diadakan di taman ini, menciptakan ruang untuk pertemuan komunitas dan hiburan publik. Kegiatan ini memperkaya pengalaman pengunjung dan membangun kehidupan sosial di sekitar kota.sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', 'Bandung', 'tamankota.jpg', 'K001'),
('D005', 'Malioboro', 'Malioboro adalah sebuah jalan legendaris yang terletak di pusat kota Yogyakarta, Indonesia. Jalan ini memiliki nilai sejarah, budaya, dan komersial yang tinggi, menjadikannya salah satu destinasi wisata yang paling terkenal di Yogyakarta.\r\n\r\nMalioboro dikenal dengan keunikan arsitekturnya, dengan pedagang kaki lima yang menjajakan berbagai barang dagangan, seperti batik, kerajinan tangan, pakaian tradisional, dan souvenir. Selain itu, kawasan ini juga dipenuhi dengan warung makan tradisional, kafe, dan pertokoan modern yang menambah warna dan keramaian.\r\n\r\nSelain belanja, Malioboro juga merupakan tempat yang populer untuk merasakan kehidupan malam Yogyakarta. Pada malam hari, pedagang kaki lima dan penjual makanan khas muncul di sepanjang jalan, menciptakan suasana yang ramai dan penuh warna.\r\n\r\nDi ujung selatan Malioboro, Anda akan menemukan Tugu Jogja, landmark kota yang megah. Tugu ini sering menjadi titik pertemuan dan lokasi untuk berfoto bagi para wisatawan.', 'Jogjakarta', 'mariboro.jpg', 'K003'),
('D006', 'Gunung Rinjani', 'Taman Nasional Gunung Rinjani Lombok menjadi salah satu spot pendakian terfavorit para pendaki dan pecinta alam. Gunung ini memang sudah terkenal pesona dan keindahannya. Ia memiliki ketinggian 3.726 meter diatas permukaan laut. Rinjani sendiri merupakan gunung merapi tertinggi kedua yang ada di Indonesia.', 'Bali', 'gunung.jpg', 'K005'),
('D007', 'Air Terjun Sri Gethuk', '\r\nAir terjun di Indonesia menyuguhkan keindahan alam yang menakjubkan dengan air yang deras jatuh dari ketinggian, dikelilingi oleh kehijauan alam sekitar. ', 'Jogjakarta', 'airterjun.jpg', 'K006'),
('D008', 'Kota Tua', '\r\nKota tua adalah suatu area di sebuah kota yang memiliki nilai sejarah dan kebudayaan yang tinggi. Wisata budaya di kota tua biasanya menampilkan keindahan arsitektur klasik, warisan budaya, serta nuansa khas zaman dahulu.', 'Jakarta', 'kotatua.jpg', 'K001'),
('D009', 'martabak encek', 'Berdiri di sudut kota Bogor lengkap dengan gerobak sederhana, Martabak Encek Bogor masih mempertahankan konsistensi rasa sejak tahun 1975. Berkat keistimewaan tersebut, harga satu martabak satu ini sesuai dengan kualitas rasanya. Harga Martabak Encek Bogor bisa Anda dapatkan mulai dari Rp40.000 sampai Rp60.000-an per loyang. Harga menu yang ditawarkan sesuai dengan pilihan rasa atau topping yang Anda pilih. ', 'Bogor', 'martabak.jpg', 'K002'),
('D010', 'Pansit Goreng lek gino', 'Salah satu alasan pangsit goreng Le Gino viral adalah karena makanan ini laris manis sampai membuat pembeli harus rela antre selama dua minggu.', 'Jakarta', 'pangsit.jpg', 'K002'),
('D011', 'Rujak Cingur Viral Ibu Mella', 'ujak cingur ini sudah ada sebelum Indonesia merdeka. Kedia ini diperkirakan sudah ada sejak tahun 1943. Hingga saat ini rujak yang disajikan tidak berubah.\r\nSalah satu ciri khas rujak ini adalah petisnya yang kental dan pekat. Saat ini rujak yang berada di Jalan Genteng Durasim ini dikelola generasi keempat.\r\n Sumber: Ketik.co.id | Media Kolaborasi Indonesia. \r\n https://ketik.co.id/berita/deretan-rujak-viral-di-surabaya-nomor-5-sering-buat-konten', 'Solo', 'rujak.jpg', 'K002'),
('D012', 'Kartika Sari', 'Sebagai pionir oleh-oleh Bandung, Kartika Sari selalu berusaha menjaga konsistensi produk dan layanan berkualitas setiap harinya.', 'Bandung', 'kartikasari1.jpg', 'K003'),
('D013', 'Era Jaya Oleh', 'Toko Oleh-oleh Khas Kota Solo Era Jaya menjadi lokasi yang wajib dikunjungi bagi Anda yang ingin membawa buah tangan saat mudik Lebaran.\r\nSelain menyediakan beragam makanan khas Solo, Era Jaya juga menyediakan oleh-oleh khas seperti jenang, sambal petis, hingga jajanan daerah lainnya. ', 'Solo', 'erajaya.jpg', 'K003'),
('D014', 'Pantai Wediombo', 'Pantai Wediombo adalah sebuah pantai yang berada di Desa Jepitu, Girisubo, Gunungkidul di dekat Pantai Siung, berjarak 80 km dari kota Yogyakarta. Pantai tersebut meliputi sebuah teluk yang dikelilingi pegunungan batu karang dan pasir putih.', 'Jogjakarta', 'wediombo.jpg', 'K004'),
('D015', 'Gunung Bromo', 'Gunung Bromo terkenal sebagai objek wisata utama di Jawa Timur. Sebagai sebuah objek wisata, Bromo menjadi menarik karena statusnya sebagai gunung berapi yang masih aktif. Gunung Bromo termasuk dalam kawasan Taman Nasional Bromo Tengger Semeru.', 'Jogjakarta', 'bromo.jpg', 'K005'),
('D016', 'Gunung Semeru', 'Gunung Semeru atau Gunung Meru adalah sebuah gunung berapi kerucut di Jawa Timur, Indonesia. Gunung Semeru merupakan gunung tertinggi di Pulau Jawa, dengan puncaknya Mahameru, 3.676 meter dari permukaan laut.', 'Jogjakarta', 'semeru.jpg', 'K005'),
('D017', 'Curug Cikaso', 'Air Terjun Cikaso, adalah merupakan salahsatu air terjun yang terletak di selatan Kabupaten Sukabumi. Air terjun ini juga dikenal sebagai Curug Luhur, tetapi nama Curug Cikaso lebih dikenal masyarakat sekitar dikarenakan aliran airnya berasal dari anak Sungai Cikaso yaitu Sungai Cicurug', 'Bogor', 'cikaso.jpg', 'K006'),
('D018', 'Gitgit Waterfall', 'Air terjun Gitgit adalah air terjun yang terletak di kabupaten Buleleng, Bali. Air terjun ini terletak di Desa Gitgit, Kecamatan Sukasada, Buleleng yang berjarak 11 km ke arah selatan dari Singaraja. Air terjun ini mempunyai ketinggian 35 meter dan merupakan air terjun tertinggi di pulau Bali.', 'Bali', 'gitgit-waterfall.jpg', 'K006');

-- --------------------------------------------------------

--
-- Table structure for table `dhira_francesco`
--

CREATE TABLE `dhira_francesco` (
  `hotel0132` char(4) NOT NULL,
  `hotelNAMA` char(160) NOT NULL,
  `hotelALAMAT` varchar(250) NOT NULL,
  `hotelFOTO` varchar(5000) NOT NULL,
  `kategori0132` char(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dhira_francesco`
--

INSERT INTO `dhira_francesco` (`hotel0132`, `hotelNAMA`, `hotelALAMAT`, `hotelFOTO`, `kategori0132`) VALUES
('H001', 'Hotel Mulia', 'Jalan Asia Afrika Senayan, RT.1/RW.3, Gelora, Kecamatan Tanah Abang, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10270	', 'hotelmulia.jpg', 'Jaka'),
('H002', 'Four Seasons', 'Kuningan Bar., Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta', 'fourseason.jpg', 'Jaka'),
('H003', 'Mercure Convention Center Ancol', 'Jl. Pantai Indah, Ancol, Kec. Pademangan, Jkt Utara, Daerah Khusus Ibukota Jakarta 14430	', 'mecure.jpg', 'Jaka');

-- --------------------------------------------------------

--
-- Table structure for table `fotodestinasi`
--

CREATE TABLE `fotodestinasi` (
  `fotodestinasiKODE` char(4) NOT NULL,
  `fotodestinasiNAMA` char(120) NOT NULL,
  `fotodestinasiFILE` char(120) NOT NULL,
  `destinasiKODE` char(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fotodestinasi`
--

INSERT INTO `fotodestinasi` (`fotodestinasiKODE`, `fotodestinasiNAMA`, `fotodestinasiFILE`, `destinasiKODE`) VALUES
('F001', 'Labuan Bajo', 'labuanbajo.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `kategoriberita`
--

CREATE TABLE `kategoriberita` (
  `kategoriberitaKODE` char(4) NOT NULL,
  `kategoriberitaNAMA` varchar(60) NOT NULL,
  `kategoriberitaKET` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategoriberita`
--

INSERT INTO `kategoriberita` (`kategoriberitaKODE`, `kategoriberitaNAMA`, `kategoriberitaKET`) VALUES
('B001', 'APAAAA', 'ADADAADADA'),
('b002', 'fsfs', 'gdgd');

-- --------------------------------------------------------

--
-- Table structure for table `kategoriwisata`
--

CREATE TABLE `kategoriwisata` (
  `kategoriKODE` char(4) NOT NULL,
  `kategoriNAMA` char(25) NOT NULL,
  `kategoriKET` text NOT NULL,
  `kategoriREFERENCE` char(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategoriwisata`
--

INSERT INTO `kategoriwisata` (`kategoriKODE`, `kategoriNAMA`, `kategoriKET`, `kategoriREFERENCE`) VALUES
('K001', 'Budaya', 'Tempat berunsur Budaya yang sangat indah dan tenang', 'Buku Sejarah'),
('K002', 'Food & Drink', 'Tempat terbaik untuk makan dan minum', 'Media Social'),
('K003', 'Store', 'Pusat pembelanjaan yang terbaik di daerah', 'Wiki'),
('K004', 'Pantai', 'Pantai yang ada di Indonesia', 'Media Social'),
('K005', 'Gunung', 'Gunung Indonesia yang sangat Indah', 'Media Social'),
('K006', 'Air Terjun', 'Air terjun alami indonesia yang sangat indah', 'Media Social');

-- --------------------------------------------------------

--
-- Table structure for table `kendaraan`
--

CREATE TABLE `kendaraan` (
  `kendaraanKODE` varchar(20) NOT NULL,
  `kendaraanNAMA` varchar(50) NOT NULL,
  `kendaraanJENIS` varchar(50) NOT NULL,
  `kendaraanMUATAN` varchar(50) NOT NULL,
  `kendaraanFOTO` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kendaraan`
--

INSERT INTO `kendaraan` (`kendaraanKODE`, `kendaraanNAMA`, `kendaraanJENIS`, `kendaraanMUATAN`, `kendaraanFOTO`) VALUES
('BS001', 'Harapan Jaya', 'Bus', '47 orang', 'BIS1.jpg'),
('KP001', 'Symphony of the Seas', 'Kapal', '930 orang', 'kapal.jpg'),
('MB001', 'Toyota Alpard', 'Mobil', '9 orang', 'MOBIL1.jpg'),
('PS001', 'Garuda Air', 'Pesawat', '314 orang', 'pesawat1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `mobil`
--

CREATE TABLE `mobil` (
  `mobilKODE` varchar(10) NOT NULL,
  `mobilNAMA` varchar(30) NOT NULL,
  `mobilJENIS` varchar(30) NOT NULL,
  `hargaSEWA` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mobil`
--

INSERT INTO `mobil` (`mobilKODE`, `mobilNAMA`, `mobilJENIS`, `hargaSEWA`) VALUES
('M001', 'Avanza', 'Minibus', 'Rp.400.000'),
('M002', 'Ayla', 'Sedan', 'Rp.350.000'),
('M003', 'Alpard', 'Minibus', 'Rp.1.200.000');

-- --------------------------------------------------------

--
-- Table structure for table `oleh2`
--

CREATE TABLE `oleh2` (
  `olehKODE` varchar(10) NOT NULL,
  `olehNAMA` varchar(100) NOT NULL,
  `olehDAERAH` varchar(100) NOT NULL,
  `olehALAMAT` varchar(100) NOT NULL,
  `olehFOTO` varchar(100) NOT NULL,
  `olehRATING` varchar(200) NOT NULL,
  `olehMAPS` varchar(2000) DEFAULT NULL,
  `kategoriKODE` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `oleh2`
--

INSERT INTO `oleh2` (`olehKODE`, `olehNAMA`, `olehDAERAH`, `olehALAMAT`, `olehFOTO`, `olehRATING`, `olehMAPS`, `kategoriKODE`) VALUES
('O001', 'Pasar Tanah Abang', 'Jakarta', 'Kebon Kacang, Tanah Abang, Central Jakarta City, Jakarta', 'tanahabang.jpg', '★★★★★', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.5643505978373!2d106.80935627590601!3d-6.189004260639028!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f69b7ca68c63%3A0x5b53885371ab984!2sPs.%20Tanah%20Abang%2C%20Kb.%20Kacang%2C%20Kecamatan%20Tanah%20Abang%2C%20Kota%20Jakarta%20Pusat%2C%20Daerah%20Khusus%20Ibukota%20Jakarta!5e0!3m2!1sen!2sid!4v1700978077091!5m2!1sen!2sid\" width=\"200\" height=\"200\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'K003'),
('O002', 'Malioboro', 'Jogjakarta', 'Jl. Malioboro, Sosromenduran, Gedong Tengen, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55271', 'mariboro.jpg', '★★★★★', '  <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.973356752398!2d110.36584599999999!3d-7.7926455!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5825fa6106c5%3A0x3ea4c521a5ed1133!2sJl.%20Malioboro%2C%20Sosromenduran%2C%20Gedong%20Tengen%2C%20Kota%20Yogyakarta%2C%20Daerah%20Istimewa%20Yogyakarta!5e0!3m2!1sen!2sid!4v1700976385188!5m2!1sen!2sid\" width=\"200\" height=\"200\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'K003'),
('O003', 'Kartika Sari', 'Bandung', 'Jl. H. Akbar No.4, Pasir Kaliki, Kec. Cicendo, Kota Bandung, Jawa Barat 40171', 'kartikasari1.jpg', '★★★★★', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126746.28472032283!2d107.44742329726562!3d-6.911947100000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e63e6639dda3%3A0x2c8e03c7d4428ecb!2sKartika%20Sari%20Pusat.!5e0!3m2!1sen!2sid!4v1700977250175!5m2!1sen!2sid\" width=\"200\" height=\"200\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'K003'),
('O004', 'Rumah Talas Bogor', 'Bogor', 'Jl. Raya Pajajaran No.102, Bantarjati, Kec. Bogor Utara, Kota Bogor, Jawa Barat 16153', 'rumahtalas.jpg', '★★★★★', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31707.201366545887!2d106.79076621645919!3d-6.597086745742858!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c5c3530fd837%3A0xafaa22f4fec2c1ba!2sRumah%20Talas%20Bogor%20-%20Lapis%20Talas%20%26%20Pusat%20Oleh%20Oleh%20Khas%20Bogor!5e0!3m2!1sid!2sid!4v1701695274456!5m2!1sid!2sid\" width=\"250\" height=\"250\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'K003'),
('O005', 'Kampoeng Semarang', 'Semarang', 'Jl. Kaligawe Raya No.KM.1 No.96, Tambakrejo, Kec. Gayamsari, Kota Semarang, Jawa Tengah 50161', 'kampungsemarang.jpg', '★★★★★', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.4322042825615!2d110.44334927594468!3d-6.958234868127558!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70f3413af6483b%3A0x2b42657f59b8a044!2sKampoeng%20Semarang!5e0!3m2!1sid!2sid!4v1701695401738!5m2!1sid!2sid\" width=\"250\" height=\"250\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'K003'),
('O006', 'Era Jaya Oleh', 'Solo', 'Jl. Gatot Subroto No.132, Jayengan, Kec. Serengan, Kota Surakarta, Jawa Tengah 57152', 'erajaya.jpg', '★★★★', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.003549835093!2d110.81782067595186!3d-7.574590274824024!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a1664b85266a1%3A0x876964baa880c660!2sEra%20Jaya%20Oleh%20-%20Oleh%20Khas%20Solo!5e0!3m2!1sid!2sid!4v1701695554187!5m2!1sid!2sid\" width=\"250\" height=\"250\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'K003'),
('O007', 'Krisna Oleh-oleh Bali', 'Bali', 'Jl. Sunset Road No.88, Kuta, Kec. Kuta, Kabupaten Badung, Bali 80361', 'krisna.jpg', '★★★★★', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1011359.5750378583!2d113.35719791674902!3d-8.037712559875917!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd246d868306789%3A0xd34e5efbafb416dd!2sKrisna%20Oleh%20-%20Oleh%20Bali%20Sunset%20Road!5e0!3m2!1sid!2sid!4v1701695666942!5m2!1sid!2sid\" width=\"250\" height=\"250\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'K003'),
('O008', 'Exotic Komodo Souvenir Shop', 'Labuan Bajo', 'GV5P+VGQ, Labuan Bajo, Kec. Komodo, Kabupaten Manggarai Barat, Nusa Tenggara Tim.', 'exotickomodo.jpg', '★★★★★', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3946.0936996348273!2d119.88379807596338!3d-8.490270285915079!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2db4642b43eb50dd%3A0xd43188d880620954!2sExotic%20Komodo%20Souvenir%20Shop!5e0!3m2!1sid!2sid!4v1701695752274!5m2!1sid!2sid\" width=\"250\" height=\"250\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'K003'),
('O009', 'Pasar Baru', 'Jakarta', 'Jl. Gereja Ayam, RT.1/RW.3, Ps. Baru, Kecamatan Sawah Besar, Kota Jakarta Pusat, Daerah Khusus Ibuko', 'pasarbaru.jpg', '★★★★★', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.770520089738!2d106.83125677593576!3d-6.161480760388996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5c46d93d555%3A0x684829b7af9cfe3b!2sPs.%20Baru%2C%20Jl.%20Gereja%20Ayam%2C%20RT.1%2FRW.3%2C%20Ps.%20Baru%2C%20Kecamatan%20Sawah%20Besar%2C%20Kota%20Jakarta%20Pusat%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2010710!5e0!3m2!1sid!2sid!4v1701792168877!5m2!1sid!2sid\" width=\"250\" height=\"250\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'K003'),
('O010', 'Pasar Seni Sukawati', 'Bali', 'Jalan Raya Sukawati, Sukawati, Kec. Sukawati, Kabupaten Gianyar, Bali 80582', 'pasarseni.jpg', '★★★★★', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d252446.7153423096!2d115.26300861077439!3d-8.64582122587639!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd23e28616c410d%3A0x960eaffe9f543e3c!2sPasar%20Seni%20Sukawati!5e0!3m2!1sid!2sid!4v1701792326652!5m2!1sid!2sid\" width=\"250\" height=\"250\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'K003');

-- --------------------------------------------------------

--
-- Table structure for table `restoran`
--

CREATE TABLE `restoran` (
  `restoranKODE` varchar(10) NOT NULL,
  `restoranNAMA` varchar(100) DEFAULT NULL,
  `restoranDAERAH` varchar(20) NOT NULL,
  `restoranALAMAT` varchar(300) NOT NULL,
  `restoranTELP` varchar(50) NOT NULL,
  `restoranFOTO` varchar(300) NOT NULL,
  `restoranRATING` varchar(20) NOT NULL,
  `restoranMAPS` varchar(3000) DEFAULT NULL,
  `kategoriKODE` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `restoran`
--

INSERT INTO `restoran` (`restoranKODE`, `restoranNAMA`, `restoranDAERAH`, `restoranALAMAT`, `restoranTELP`, `restoranFOTO`, `restoranRATING`, `restoranMAPS`, `kategoriKODE`) VALUES
('R001', 'Tanah Liat Restaurant', 'Bali', 'Renaissance Bali Nusa Dua Resort, Benoa, South Kuta, Badung Regency, Bali', '812354697', 'tanahliat.jpg', '★★★★★', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3942.7734185060244!2d115.21145787593781!3d-8.807345190073566!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd24388fc99be93%3A0x86dc11302606d900!2sTanah%20Liat!5e0!3m2!1sen!2sid!4v1701011506740!5m2!1sen!2sid\" width=\"200\" height=\"200\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'K002'),
('R002', 'Solaria', 'Jakarta', 'Solaria Lokasari Square Lt Dasar Jl Mangga Besar Raya No 81 Komp. THR Lokasari Blok D10 RT.6/RW.2 RT.6, RT.6/RW.2, Tangki, Kec. Taman Sari, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11470', '84566431123', 'solaria.jpg', '★★★★', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.8803004600136!2d106.8206842759056!3d-6.14677506025587!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5e35948c22d%3A0xe4a8a7b30590ef5!2sSolaria%20-%20Lokasari%20Square!5e0!3m2!1sen!2sid!4v1701010434459!5m2!1sen!2sid\" width=\"200\" height=\"200\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'K002'),
('R003', 'Restoran Angke', 'Jakarta', 'Jl. Kyai Haji Zainul Arifin, RT.4/RW.7, Krukut, Kec. Taman Sari, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11140', '0216343030', 'angke2.jpg', '★★★★★', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.7831121361764!2d106.81432597590583!3d-6.159795760373683!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f6758d7769d5%3A0x3a72f6d89bf44ba4!2sAngke%20Restaurant%20-%20Ketapang!5e0!3m2!1sen!2sid!4v1701011185650!5m2!1sen!2sid\" width=\"200\" height=\"200\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'K002'),
('R004', 'Jl. Ganesa No.3, Lb. Siliwangi, Kecamatan Coblong,', 'Bandung', 'One Eighty Coffee and Music', '82218000155', 'restoranbandung.jpg', '★★★★★', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1015442.373357949!2d106.19890671437655!3d-6.188015766463702!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e650e167c1ab%3A0xdcc35bc2a4e6d1b1!2sOne%20Eighty%20Coffee%20and%20Music!5e0!3m2!1sen!2sid!4v1701011730958!5m2!1sen!2sid\" width=\"200\" height=\"200\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'K002'),
('R005', 'La Brasserie Restaurant', 'Jakarta', 'Jalan Jenderal Sudirman Kav 18-20, RT.10/RW.11, Karet Tengsin, Jakarta Pusat, DKI Jakarta, Daerah Khusus Ibukota Jakarta 10220', '212513131', 'resto1.jpg', '★★★★★', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.3831084557155!2d106.81614507593639!3d-6.213099660859021!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f401e8b61e37%3A0xaac5e7534a420e95!2sLa%20Brasserie%20Restaurant!5e0!3m2!1sid!2sid!4v1701587060628!5m2!1sid!2sid\" width=\"250\" height=\"250\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'K002'),
('R006', 'SKYE Bar & Restaurant', 'Jakarta', 'BCA Tower Lt. 56, Jl. M.H. Thamrin No. 1, RT.001 / RW.005, Menteng, RT.1/RW.5, Menteng, Kec. Menteng, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10350', '2123586996', 'resto2.jpg', '★★★★★', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.506370264915!2d106.82000707593632!3d-6.196722660709419!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f421e793eb33%3A0x86cfb3cf2e05bf25!2sSKYE%20Bar%20%26%20Restaurant!5e0!3m2!1sid!2sid!4v1701587356715!5m2!1sid!2sid\" width=\"250\" height=\"250\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', ' K002'),
('R007', 'El Kabron Bali', 'Bali', 'Jl. Pantai Cemongkak, Pecatu, Kec. Kuta Sel., Kabupaten Badung, Bali 80361', '81337235750', 'resto3.jpg', '★★★★★', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3942.831571775094!2d115.11475257596761!3d-8.801889290000663!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd24540856f8719%3A0x9fbbbc497714369e!2sEl%20Kabron%20Bali!5e0!3m2!1sid!2sid!4v1701587677870!5m2!1sid!2sid\" width=\"250\" height=\"250\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', ' K002'),
('R008', 'Gurih 7 Bogor - Saung Lesehan & Kuliner Sunda', 'Bogor', 'Gurih 7 Bogor - Saung Lesehan & Kuliner Sunda', '8317889', 'resto4.jpg', '★★★★★', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.5851072350592!2d106.80497067594028!3d-6.573929764265622!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c416cbdea47b%3A0x950e04927f76531f!2sGurih%207%20Bogor%20-%20Saung%20Lesehan%20%26%20Kuliner%20Sunda!5e0!3m2!1sid!2sid!4v1701588063877!5m2!1sid!2sid\" width=\"250\" height=\"250\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', ' K002'),
('R009', 'Bale Raos The Sultan Dishes', 'Jogjakarta', 'Jl. Magangan Kulon No.1, Panembahan, Kecamatan Kraton, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55131', '0274415550', 'resto5.jpg', '★★★★★', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.3831084557155!2d106.81614507593639!3d-6.213099660859021!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f401e8b61e37%3A0xaac5e7534a420e95!2sLa%20Brasserie%20Restaurant!5e0!3m2!1sid!2sid!4v1701587175859!5m2!1sid!2sid\" width=\"250\" height=\"250\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', ' K002'),
('R010', 'Mang engking Solo', 'Solo', 'Jl. A. Yani, Dusun IV, Pabelan, Kec. Kartasura, Surakarta, Jawa Tengah', '0271734158', 'resto6.jpg', '★★★★★', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.147622248368!2d110.77039856800113!3d-7.558878413135177!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a14211cb22b97%3A0xddcb92f45da15d2f!2sMang%20engking%20Solo!5e0!3m2!1sid!2sid!4v1701589802490!5m2!1sid!2sid\" width=\"250\" height=\"250\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', ' K002'),
('R011', 'Restoran Kampung Laut Semarang', 'Semarang', 'Puri Maerokoco Tawang Mas, Jl. Anjasmoro Raya, Tawangsari, Kec. Semarang Barat, Kota Semarang, Jawa Tengah 50144', '0247625988', 'resto7.jpg', '★★★★★', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.400106527875!2d110.38349537594475!3d-6.96203866816696!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70f4db9bba48f7%3A0x34e7dea74586cb2c!2sRestoran%20Kampung%20Laut%20Semarang!5e0!3m2!1sid!2sid!4v1701589906966!5m2!1sid!2sid\" width=\"250\" height=\"250\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', ' K002'),
('R012', 'Taman Laut Handayani Seafood Restaurant Labuan Bajo', 'Labuan Bajo', 'Ir. Soekarno Hatta No.9, Labuan Bajo, Kec. Komodo, Kabupaten Manggarai Barat, Nusa Tenggara Tim.', '085333888827', 'resto8.jpg', '★★★★★', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.3831084557155!2d106.81614507593639!3d-6.213099660859021!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f401e8b61e37%3A0xaac5e7534a420e95!2sLa%20Brasserie%20Restaurant!5e0!3m2!1sid!2sid!4v1701587175859!5m2!1sid!2sid\" width=\"250\" height=\"250\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'K002'),
('R013', 'Miss Bee Providore', 'Bandung', 'Jl. Rancabentang No.11A, Ciumbuleuit, Kec. Cidadap, Kota Bandung, Jawa Barat 40142', '0222033613', 'resto9.jpg', '★★★★★', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.1856384873104!2d107.60649437594363!3d-6.868345767202626!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6e87a67b421%3A0xb3485daf6ba40144!2sMiss%20Bee%20Providore!5e0!3m2!1sid!2sid!4v1701590515637!5m2!1sid!2sid\" width=\"250\" height=\"250\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', ' K002');

-- --------------------------------------------------------

--
-- Table structure for table `saran`
--

CREATE TABLE `saran` (
  `comEMAIL` varchar(200) NOT NULL,
  `comNAMA` varchar(50) NOT NULL,
  `comSARAN` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `saran`
--

INSERT INTO `saran` (`comEMAIL`, `comNAMA`, `comSARAN`) VALUES
('dhira1@gmail.com', '11', 'baguss banget'),
('dhira2@gmail.com', 'dhira', 'sudah sangat baik'),
('dhira@gmail.com', 'dhira', 'sangat baguss , hanya perbanyak foto destinasi next nya !!');

-- --------------------------------------------------------

--
-- Table structure for table `testimoni`
--

CREATE TABLE `testimoni` (
  `testiNAMA` varchar(100) NOT NULL,
  `testiJOB` varchar(100) NOT NULL,
  `testiKET` text NOT NULL,
  `testiRATING` varchar(200) NOT NULL,
  `testiFOTO` varchar(200) NOT NULL,
  `testiEMAIL` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `travel`
--

CREATE TABLE `travel` (
  `travelKODE` varchar(10) NOT NULL,
  `travelNAMA` varchar(30) NOT NULL,
  `travelTUJUAN` varchar(50) NOT NULL,
  `travelHARGA` varchar(30) NOT NULL,
  `travelFOTO` varchar(200) NOT NULL,
  `travelRATING` varchar(200) NOT NULL,
  `kendaraanKODE` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `travel`
--

INSERT INTO `travel` (`travelKODE`, `travelNAMA`, `travelTUJUAN`, `travelHARGA`, `travelFOTO`, `travelRATING`, `kendaraanKODE`) VALUES
('TB001', 'BIS KOTA TRAVEL', 'Jakarta', 'Rp.150.000 - Rp.700.000', 'BIS1.jpg', '★★★★★', 'BS001'),
('TK001', 'Cruise Holiday', 'Bali', '> Rp.3.500.000', 'kapal.jpg', '★★★★★', 'KP001'),
('TM001', 'SuryaCAR', 'Jakarta', 'Rp.800.000 - Rp.1.500.000', 'MOBIL1.jpg', '★★★★★', 'MB001'),
('TP001', 'GARUDA AIR', 'Labuan Bajo', '> Rp.3.500.000', 'pesawat1.jpg', '★★★★★', 'PS001');

-- --------------------------------------------------------

--
-- Table structure for table `useradmin`
--

CREATE TABLE `useradmin` (
  `userKODE` char(4) NOT NULL,
  `userNAMA` char(30) NOT NULL,
  `userEMAIL` char(60) NOT NULL,
  `userPASS` char(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `useradmin`
--

INSERT INTO `useradmin` (`userKODE`, `userNAMA`, `userEMAIL`, `userPASS`) VALUES
('DF01', 'dhira', 'dhiraemail@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
('DF02', 'dhira1', 'dhiraemail1@gmail.com', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`beritaKODE`);

--
-- Indexes for table `destinasi`
--
ALTER TABLE `destinasi`
  ADD PRIMARY KEY (`destinasiKODE`);

--
-- Indexes for table `dhira_francesco`
--
ALTER TABLE `dhira_francesco`
  ADD PRIMARY KEY (`hotel0132`);

--
-- Indexes for table `fotodestinasi`
--
ALTER TABLE `fotodestinasi`
  ADD PRIMARY KEY (`fotodestinasiKODE`);

--
-- Indexes for table `kategoriberita`
--
ALTER TABLE `kategoriberita`
  ADD PRIMARY KEY (`kategoriberitaKODE`);

--
-- Indexes for table `kategoriwisata`
--
ALTER TABLE `kategoriwisata`
  ADD PRIMARY KEY (`kategoriKODE`);

--
-- Indexes for table `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD PRIMARY KEY (`kendaraanKODE`);

--
-- Indexes for table `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`mobilKODE`);

--
-- Indexes for table `oleh2`
--
ALTER TABLE `oleh2`
  ADD PRIMARY KEY (`olehKODE`);

--
-- Indexes for table `restoran`
--
ALTER TABLE `restoran`
  ADD PRIMARY KEY (`restoranKODE`);

--
-- Indexes for table `saran`
--
ALTER TABLE `saran`
  ADD PRIMARY KEY (`comEMAIL`);

--
-- Indexes for table `travel`
--
ALTER TABLE `travel`
  ADD PRIMARY KEY (`travelKODE`);

--
-- Indexes for table `useradmin`
--
ALTER TABLE `useradmin`
  ADD PRIMARY KEY (`userKODE`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
