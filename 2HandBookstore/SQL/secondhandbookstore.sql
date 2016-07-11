-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- 主機: 127.0.0.1
-- 產生時間： 2016-07-06 02:33:45
-- 伺服器版本: 5.7.9
-- PHP 版本： 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `secondhandbookstore`
--

-- --------------------------------------------------------

--
-- 資料表結構 `book`
--

DROP TABLE IF EXISTS `book`;
CREATE TABLE IF NOT EXISTS `book` (
  `id_book` int(11) NOT NULL AUTO_INCREMENT,
  `author` text NOT NULL COMMENT '作者',
  `bookclass` text NOT NULL COMMENT '類別',
  `postdate` int(11) NOT NULL COMMENT '出版日期',
  `price` int(11) NOT NULL COMMENT '價格',
  `ISBN` int(11) NOT NULL,
  `name` text NOT NULL COMMENT '書名',
  `publishingHouse` text NOT NULL COMMENT '出版社',
  `id_seller` int(11) NOT NULL,
  PRIMARY KEY (`id_book`),
  KEY `id_seller` (`id_seller`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 資料表結構 `bookpicture`
--

DROP TABLE IF EXISTS `bookpicture`;
CREATE TABLE IF NOT EXISTS `bookpicture` (
  `id_bookpicture` int(11) NOT NULL AUTO_INCREMENT,
  `picture` varchar(20) NOT NULL COMMENT '圖片',
  `id_book` int(11) NOT NULL COMMENT '書籍id',
  PRIMARY KEY (`id_bookpicture`),
  KEY `id_book` (`id_book`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 資料表結構 `buyer`
--

DROP TABLE IF EXISTS `buyer`;
CREATE TABLE IF NOT EXISTS `buyer` (
  `id_buyer` int(11) NOT NULL AUTO_INCREMENT,
  `account` char(25) NOT NULL,
  `password` char(30) NOT NULL COMMENT '密碼',
  `name` char(15) NOT NULL COMMENT '買家名稱',
  `school` char(30) NOT NULL COMMENT '學校',
  `department` char(30) NOT NULL COMMENT '科系',
  `email_1` char(50) NOT NULL COMMENT '學校email',
  `email_2` char(50) DEFAULT NULL,
  PRIMARY KEY (`id_buyer`),
  KEY `id_buyer` (`id_buyer`),
  KEY `id_buyer_2` (`id_buyer`),
  KEY `id_buyer_3` (`id_buyer`),
  KEY `account` (`account`),
  KEY `id_buyer_4` (`id_buyer`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `buyer`
--

INSERT INTO `buyer` (`id_buyer`, `account`, `password`, `name`, `school`, `department`, `email_1`, `email_2`) VALUES
(2, '102403536', 'ciu199669', '沈涵羚', '中央大學', '資管三B', '102403536', '910159'),
(3, '102403537', 'ciu199559', 'sherry', 'NCU', 'MIX', '102403536', '0'),
(4, '102444444', '1508', '葛蘭', '明志國小', '三年二班', '1010274', '1010274'),
(5, '1234', '1234', '1234', 'NCu', 'MIT', '#@uiwydoqw', '#@lkjwdldw');

-- --------------------------------------------------------

--
-- 資料表結構 `chat`
--

DROP TABLE IF EXISTS `chat`;
CREATE TABLE IF NOT EXISTS `chat` (
  `chtime` datetime NOT NULL COMMENT '發言時間',
  `chat_id` int(11) NOT NULL AUTO_INCREMENT,
  `nick` char(10) NOT NULL COMMENT '發言者暱稱',
  `words` char(150) NOT NULL COMMENT '發言內容',
  PRIMARY KEY (`chat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `chat`
--

INSERT INTO `chat` (`chtime`, `chat_id`, `nick`, `words`) VALUES
('2016-06-27 05:03:38', 1, '7896', '789'),
('2016-06-27 05:03:49', 2, '7896', '789'),
('2016-06-27 06:21:32', 3, '7896', '1235'),
('2016-06-27 06:21:53', 4, '126', '7896'),
('2016-06-27 06:21:58', 5, '126', '431'),
('2016-06-27 06:22:20', 6, '126', '786'),
('2016-06-27 06:22:32', 7, '126', '7896'),
('2016-06-27 06:22:37', 8, '126', '789'),
('2016-06-27 06:24:06', 9, '126', '789'),
('2016-06-27 06:24:31', 10, '456123', '12368'),
('2016-06-28 10:48:47', 11, '78931', '456'),
('2016-06-28 10:56:24', 12, '786', '456'),
('2016-06-28 10:56:30', 13, '786', '1268769'),
('2016-06-28 10:56:36', 14, '786', '7893'),
('2016-06-28 11:02:11', 15, '7891351', '456'),
('2016-06-28 11:02:56', 16, '7891351', '78941231'),
('2016-06-28 11:03:09', 17, '7891351', '45621'),
('2016-06-29 08:14:45', 18, '7896', '456'),
('2016-07-06 10:28:34', 19, '', ' 21'),
('2016-07-06 10:29:35', 20, '', ' 12');

-- --------------------------------------------------------

--
-- 資料表結構 `evaluation`
--

DROP TABLE IF EXISTS `evaluation`;
CREATE TABLE IF NOT EXISTS `evaluation` (
  `id_evaluation` int(11) NOT NULL AUTO_INCREMENT,
  `buyer_level` int(11) NOT NULL COMMENT '買家評分',
  `seller_level` int(11) NOT NULL COMMENT '賣家評分',
  `buyer_advise` text COMMENT '買家評語',
  `seller_advise` text COMMENT '賣家評語',
  `buyer_date` int(11) NOT NULL COMMENT '買家評分日期',
  `seller_date` int(11) NOT NULL COMMENT '賣家評分日期',
  `id_buyer` int(11) NOT NULL,
  `id_seller` int(11) NOT NULL,
  `id_trade` int(11) NOT NULL,
  PRIMARY KEY (`id_evaluation`),
  KEY `id_buyer` (`id_buyer`),
  KEY `id_seller` (`id_seller`),
  KEY `id_trade` (`id_trade`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 資料表結構 `illegal`
--

DROP TABLE IF EXISTS `illegal`;
CREATE TABLE IF NOT EXISTS `illegal` (
  `id_illegal` int(11) NOT NULL AUTO_INCREMENT,
  `reason` text NOT NULL COMMENT '違規原因',
  `id_trade` int(11) NOT NULL,
  `id_buyer` int(11) NOT NULL,
  `id_seller` int(11) NOT NULL,
  PRIMARY KEY (`id_illegal`),
  KEY `id_seller` (`id_seller`),
  KEY `id_buyer` (`id_buyer`),
  KEY `id_trade` (`id_trade`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 資料表結構 `member`
--

DROP TABLE IF EXISTS `member`;
CREATE TABLE IF NOT EXISTS `member` (
  `account` int(11) NOT NULL COMMENT '帳號',
  `password` int(11) NOT NULL COMMENT '密碼',
  `isactived` tinyint(1) NOT NULL COMMENT '開通與否',
  PRIMARY KEY (`account`),
  KEY `account` (`account`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `member`
--

INSERT INTO `member` (`account`, `password`, `isactived`) VALUES
(102403536, 102403536, 1);

-- --------------------------------------------------------

--
-- 資料表結構 `mylove`
--

DROP TABLE IF EXISTS `mylove`;
CREATE TABLE IF NOT EXISTS `mylove` (
  `id_myLove` int(11) NOT NULL AUTO_INCREMENT,
  `id_buyer` int(11) NOT NULL,
  `id_book` int(11) NOT NULL,
  PRIMARY KEY (`id_myLove`),
  KEY `id_buer` (`id_buyer`),
  KEY `id_book` (`id_book`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 資料表結構 `seller`
--

DROP TABLE IF EXISTS `seller`;
CREATE TABLE IF NOT EXISTS `seller` (
  `id_seller` int(11) NOT NULL AUTO_INCREMENT,
  `school` text NOT NULL,
  `email_1` int(11) NOT NULL,
  `email_2` int(11) DEFAULT NULL,
  `department` text NOT NULL COMMENT '科系',
  `name` text NOT NULL COMMENT '賣家名稱',
  `account` int(11) NOT NULL,
  PRIMARY KEY (`id_seller`),
  KEY `account` (`account`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 資料表結構 `talktrace`
--

DROP TABLE IF EXISTS `talktrace`;
CREATE TABLE IF NOT EXISTS `talktrace` (
  `id_talktrace` int(11) NOT NULL AUTO_INCREMENT,
  `content` text NOT NULL COMMENT '內容',
  `jointime` int(11) NOT NULL COMMENT '加入對話時間',
  `talktime` int(11) NOT NULL COMMENT '各句話的時間',
  `id_trade` int(11) NOT NULL,
  PRIMARY KEY (`id_talktrace`),
  KEY `id_trade` (`id_trade`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 資料表結構 `traderecord`
--

DROP TABLE IF EXISTS `traderecord`;
CREATE TABLE IF NOT EXISTS `traderecord` (
  `id_trade` int(11) NOT NULL AUTO_INCREMENT,
  `tradecondition` text NOT NULL COMMENT '交易狀態',
  `tradetime` int(11) NOT NULL COMMENT '交易成立時間',
  `id_buyer` int(11) NOT NULL,
  `id_seller` int(11) NOT NULL,
  `id_book` int(11) NOT NULL,
  PRIMARY KEY (`id_trade`),
  KEY `id_buyer` (`id_buyer`),
  KEY `id_seller` (`id_seller`),
  KEY `id_book` (`id_book`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 資料表結構 `wishpool`
--

DROP TABLE IF EXISTS `wishpool`;
CREATE TABLE IF NOT EXISTS `wishpool` (
  `id_wishpool` int(11) NOT NULL AUTO_INCREMENT,
  `bookname` text NOT NULL COMMENT '書名',
  `willingPrice` int(11) NOT NULL COMMENT '願意購入價格',
  `bookCondition` text NOT NULL COMMENT '書況程度',
  `ISBN` int(11) NOT NULL,
  `author` text NOT NULL COMMENT '作者',
  `id_buyer` int(11) NOT NULL,
  `id_seller` int(11) NOT NULL,
  PRIMARY KEY (`id_wishpool`),
  KEY `id_seller` (`id_seller`),
  KEY `id_buyer` (`id_buyer`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 已匯出資料表的限制(Constraint)
--

--
-- 資料表的 Constraints `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `book_ibfk_1` FOREIGN KEY (`id_seller`) REFERENCES `seller` (`id_seller`);

--
-- 資料表的 Constraints `bookpicture`
--
ALTER TABLE `bookpicture`
  ADD CONSTRAINT `bookpicture_ibfk_1` FOREIGN KEY (`id_book`) REFERENCES `book` (`id_book`);

--
-- 資料表的 Constraints `evaluation`
--
ALTER TABLE `evaluation`
  ADD CONSTRAINT `evaluation_ibfk_1` FOREIGN KEY (`id_buyer`) REFERENCES `buyer` (`id_buyer`),
  ADD CONSTRAINT `evaluation_ibfk_2` FOREIGN KEY (`id_seller`) REFERENCES `seller` (`id_seller`),
  ADD CONSTRAINT `evaluation_ibfk_3` FOREIGN KEY (`id_trade`) REFERENCES `traderecord` (`id_trade`);

--
-- 資料表的 Constraints `illegal`
--
ALTER TABLE `illegal`
  ADD CONSTRAINT `illegal_ibfk_1` FOREIGN KEY (`id_trade`) REFERENCES `traderecord` (`id_trade`),
  ADD CONSTRAINT `illegal_ibfk_2` FOREIGN KEY (`id_buyer`) REFERENCES `buyer` (`id_buyer`),
  ADD CONSTRAINT `illegal_ibfk_3` FOREIGN KEY (`id_seller`) REFERENCES `seller` (`id_seller`);

--
-- 資料表的 Constraints `mylove`
--
ALTER TABLE `mylove`
  ADD CONSTRAINT `mylove_ibfk_1` FOREIGN KEY (`id_book`) REFERENCES `book` (`id_book`),
  ADD CONSTRAINT `mylove_ibfk_2` FOREIGN KEY (`id_buyer`) REFERENCES `buyer` (`id_buyer`);

--
-- 資料表的 Constraints `seller`
--
ALTER TABLE `seller`
  ADD CONSTRAINT `seller_ibfk_1` FOREIGN KEY (`account`) REFERENCES `member` (`account`);

--
-- 資料表的 Constraints `talktrace`
--
ALTER TABLE `talktrace`
  ADD CONSTRAINT `talktrace_ibfk_1` FOREIGN KEY (`id_trade`) REFERENCES `traderecord` (`id_trade`);

--
-- 資料表的 Constraints `traderecord`
--
ALTER TABLE `traderecord`
  ADD CONSTRAINT `traderecord_ibfk_1` FOREIGN KEY (`id_buyer`) REFERENCES `buyer` (`id_buyer`),
  ADD CONSTRAINT `traderecord_ibfk_2` FOREIGN KEY (`id_seller`) REFERENCES `seller` (`id_seller`),
  ADD CONSTRAINT `traderecord_ibfk_3` FOREIGN KEY (`id_book`) REFERENCES `book` (`id_book`);

--
-- 資料表的 Constraints `wishpool`
--
ALTER TABLE `wishpool`
  ADD CONSTRAINT `wishpool_ibfk_1` FOREIGN KEY (`id_buyer`) REFERENCES `buyer` (`id_buyer`),
  ADD CONSTRAINT `wishpool_ibfk_2` FOREIGN KEY (`id_seller`) REFERENCES `seller` (`id_seller`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
