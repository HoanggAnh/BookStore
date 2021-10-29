-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 29, 2021 lúc 12:04 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ban_sach`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `id_chi_tiet_hoadon` bigint(10) NOT NULL,
  `sodh` bigint(20) NOT NULL,
  `masp` bigint(20) NOT NULL,
  `soluong` int(11) NOT NULL,
  `dongia` float NOT NULL,
  `thanhtien` decimal(9,2) NOT NULL,
  `madv` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitiethoadon`
--

INSERT INTO `chitiethoadon` (`id_chi_tiet_hoadon`, `sodh`, `masp`, `soluong`, `dongia`, `thanhtien`, `madv`) VALUES
(144, 127, 214, 1, 214, '214.00', '15');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dichvu`
--

CREATE TABLE `dichvu` (
  `madv` bigint(20) NOT NULL,
  `tendv` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `gia` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dichvu`
--

INSERT INTO `dichvu` (`madv`, `tendv`, `gia`) VALUES
(15, 'Bọc sách', 10),
(16, 'Gói quà tặng', 20);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `sodh` bigint(20) NOT NULL,
  `emailkh` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ngaygiao` date NOT NULL,
  `tenkh` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `dienthoai` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `hinhthucthanhtoan` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `thanhtien` decimal(9,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`sodh`, `emailkh`, `ngaygiao`, `tenkh`, `diachi`, `dienthoai`, `hinhthucthanhtoan`, `thanhtien`) VALUES
(127, 'thanh@gmail.com', '2021-06-26', 'Thanh Truong', 'Hà Nội', '1234567890', 'ATM', '224.00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loginuser`
--

CREATE TABLE `loginuser` (
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `matkhau` int(200) NOT NULL,
  `HoTen` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `DienThoai` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loginuser`
--

INSERT INTO `loginuser` (`email`, `matkhau`, `HoTen`, `DienThoai`) VALUES
('chamanh@gmail.com', 123, 'Cham Anh', '0833454666'),
('hoanganh@gmail.com', 123, 'Hoang Anh', '0852635623'),
('kimanh@gmail.com', 123, 'Kim Anh', '0934237266');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhaxuatban`
--

CREATE TABLE `nhaxuatban` (
  `ID` bigint(10) NOT NULL,
  `Ten` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhaxuatban`
--

INSERT INTO `nhaxuatban` (`ID`, `Ten`) VALUES
(15, 'NXB ThomsonReuters'),
(16, 'NXB Bertelsmann'),
(17, 'NXB Wolters Kluwer'),
(18, 'NXB Hachette Livre');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `ID` bigint(10) NOT NULL,
  `Ten` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Gia` double NOT NULL,
  `HinhAnh` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Manhasx` bigint(10) NOT NULL,
  `Mota` text COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `KhuyenMai` tinyint(1) NOT NULL,
  `giakhuyenmai` double NOT NULL,
  `tacgia` varchar(256) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`ID`, `Ten`, `Gia`, `HinhAnh`, `Manhasx`, `Mota`, `date`, `KhuyenMai`, `giakhuyenmai`, `tacgia`) VALUES
(212, 'Tad', 176, 'book1.png', 18, '<p>Tad Sometimes the biggest stories come from the smallest beginnings… Meet Tad. She’s the smallest tadpole in a big pond, and lives there with all her tadbrothers and tadsisters. Although...</p>\r\n', '2021-10-27', 0, 0, 'Benji Davies'),
(213, 'On A Magical Do-Nothing Day', 365, 'book2.jpg', 17, '<p>Give the gift of a magical do-nothing day! There\'s so much to notice in the world, if we can un-plug long enough.\r\n\r\nThis picture book with startlingly beautiful words and pictures will spur imagination and a break from boredom or screen time.\r\n\r\nNow a New York Times Best Illustrated Book of the Year and Bank Street College of Education Best Children\'s Book of the Year!\r\n\r\nAll I want to do on a rainy day like today is play my game. My mom says it’s a waste of time, but without my game, nothing is fun! On the other hand, maybe I’m wrong about that…\r\n\r\nWhile reading On a Magical Do-Nothing Day, one gets the sense that the illustrator became lost in her drawings, and as a reader, you\'ll want to do the same. Perfect for fans of picture books by Julie Morstad, Carson Ellis, Jon Klassen, and Tomi Ungerer.\r\n\r\n“Hands down, Beatrice Alemagna is my favorite contemporary illustrator,\" said the Caldecott Honor-winning illustrator of Last Stop on Market Street, Christian Robinson.\r\n\r\nOn a Magical Do-Nothing Day has been recognized with a Gold Medal from the Society of Illustrators. Don\'t miss this picture book that beautifully encourages unplugged exploration.</p>\r\n', '2021-10-21', 1, 320, 'Beatrice Alemagna'),
(214, 'The Animals Of Farthing Wood', 145, 'book3.jpg', 16, '<p>A group of forest animals unite to help each other to safety in this classic tale of tolerance, cooperation, survival, and friendship. When bulldozers enter Farthing Wood, the animals must escape before their homes are destroyed. They promise to stick together and protect each other—but then they get caught in a fire and nearly drown crossing a river. Will their pact hold? Both heart-wrenching and heartwarming, this beloved story has been translated into 16 languages.</p>\r\n', '2007-07-01', 1, 100, 'Colin Dann'),
(218, 'My Frirst Book About Allah', 207, 'book5.jpg', 15, '<p>This simple but beautiful book helps children understand who Allah is. It introduces some of His divine attributes: His Oneness, His infinite Power, Love and Mercy, and it ends with the promise He has made to those who believe in Him and make Him happy.\r\n\r\nIt is a book to be treasured by children, with large, colourful illustrations and carefully written text that children will understand and enjoy.</p>', '2020-07-07', 0, 0, 'Sara Khan'),
(219, 'Here We Are', 368, 'book8.jpg', 18, '<p>Oliver Jeffers, arguably the most influential creator of picture books today, offers a rare personal look inside his own hopes and wishes for his child--and in doing so gifts children and parents everywhere with a gently sweet and humorous missive about our world and those who call it home.\r\n\r\nInsightfully sweet, with a gentle humor and poignancy, here is Oliver Jeffers\' user\'s guide to life on Earth. He created it specially for his son, yet with a universality that embraces all children and their parents. Be it a complex view of our planet\'s terrain (bumpy, sharp, wet), a deep look at our place in space (it’s big), or a guide to all of humanity (don’t be fooled, we are all people), Oliver\'s signature wit and humor combine with a value system of kindness and tolerance to create a must-have book for parents.</p>', '2021-06-26', 1, 299, 'Oliver Jeffers'),
(312, 'The Secret Garden', 265, 'book7.jpg', 16, '<p>Celebrate an unforgettable classic with this paperback edition featuring the timeless art of Tasha Tudor. Just in time for the movie adaptation starring Colin Firth and Julie Walters!\r\n\r\nThis gorgeous paperback includes Tasha Tudor’s iconic illustrations, an extended author biography, activities, and more, making it the perfect collector’s edition or a wonderful gift for young readers.\r\n\r\nWhen orphaned Mary Lennox comes to live at her uncle\'s great house on the Yorkshire Moors, she finds it full of secrets. The mansion has nearly one hundred rooms, and her uncle keeps himself locked up. And at night, she hears the sound of crying down one of the long corridors.\r\n\r\nThe gardens surrounding the large property are Mary\'s only escape. Then, Mary discovers a secret garden, surrounded by walls and locked with a missing key. With the help of two unexpected companions, Mary discovers a way in—and becomes determined to bring the garden back to life.</p>', '2019-09-11', 0, 229, 'Frances Hodgson Burnett '),
(325, 'I Want A Dog: My Opinion Essay', 115, 'book6.png', 18, '<p>Hurrah for Essays! All English composition writing lessons should be this much fun.\r\n\r\n\r\n\r\nWhen cousins Dennis and Mellie decide to get a dog, they consider carefully what breed would be best for each family. For example, Dennis wants a big dog, but Mellie wants tiny. He has no other pets, but she has other pets that a dog must get along with. They consider different dog personalities, family situations, and personal preferences. Dennis writes an opinion essay for his teacher, Mrs. Shirky. But will his essay convince his parents to get the dog of his dreams?\r\n\r\n\r\n\r\nThis story takes a popular subject—kids getting a pet—and adds dogs of all sizes and shapes: all writing lessons should be this much fun. In the end, it’s cousins and the dogs that keep a reader turning the page. What kind of dog will Dennis choose? Will Mellie want the same kind of dog?\r\n</p>', '2020-10-21', 0, 0, 'Darcy Pattison'),
(435, 'Die Zauberhaften Drei', 399, 'book4.jpg', 16, '<p>Der Bär Hoggs wäre gerne mutig. Aber er fürchtet sich vor Spinnen und Gespenstern. Da beschließen Hoggs und sein bester Freund, das Stinktier Poki, das mit dem Abenteuer mal ein bisschen zu üben - und zwar gleich hinter der Bienenwiese beim verlassenen Hexenhaus. Huh, da spukt es doch! Tatsächlich blubbert es dort ganz unheimlich aus einem Kessel …\r\n\r\n„Ist da jemand?“, fragt Hoggs vorsichtig. Ja! Das Kaninchen Fips braucht dringend Hilfe. Und - schwups! -  stecken die Freunde mitten in einem turbulenten Zauberabenteuer …\r\n\r\nEine warmherzige Geschichte über das Mutigsein - mit drei liebenswerten, tierischen Helden. Zum Vorlesen für Jungen und Mädchen. \r\n\r\nEntdecke weitere Bilderbuchwelten von Stefanie Dahle:\r\nFrida, die kleine Waldhexe\r\nWassili Waschbär - Zum Glück hat man Freunde\r\nSo lieb hab ich nur dich!</p>\r\n', '2020-07-17', 1, 369, 'Gebundene Ausgabe');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD PRIMARY KEY (`id_chi_tiet_hoadon`),
  ADD KEY `chitiethoadon` (`sodh`);

--
-- Chỉ mục cho bảng `dichvu`
--
ALTER TABLE `dichvu`
  ADD PRIMARY KEY (`madv`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`sodh`);

--
-- Chỉ mục cho bảng `loginuser`
--
ALTER TABLE `loginuser`
  ADD PRIMARY KEY (`email`);

--
-- Chỉ mục cho bảng `nhaxuatban`
--
ALTER TABLE `nhaxuatban`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Ten` (`Ten`),
  ADD KEY `sanpham` (`Manhasx`),
  ADD KEY `giakhuyenmai` (`giakhuyenmai`),
  ADD KEY `giakhuyenmai_2` (`giakhuyenmai`),
  ADD KEY `giakhuyenmai_3` (`giakhuyenmai`),
  ADD KEY `giakhuyenmai_4` (`giakhuyenmai`),
  ADD KEY `giakhuyenmai_5` (`giakhuyenmai`);
ALTER TABLE `sanpham` ADD FULLTEXT KEY `Ten_2` (`Ten`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  MODIFY `id_chi_tiet_hoadon` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;

--
-- AUTO_INCREMENT cho bảng `dichvu`
--
ALTER TABLE `dichvu`
  MODIFY `madv` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `sodh` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT cho bảng `nhaxuatban`
--
ALTER TABLE `nhaxuatban`
  MODIFY `ID` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `ID` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=437;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD CONSTRAINT `chitiethoadon` FOREIGN KEY (`sodh`) REFERENCES `hoadon` (`sodh`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham` FOREIGN KEY (`Manhasx`) REFERENCES `nhaxuatban` (`ID`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
