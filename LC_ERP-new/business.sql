-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- 主機: localhost
-- 產生時間： 2017-08-01 09:25:10
-- 伺服器版本: 5.7.17-log
-- PHP 版本： 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `peopleresource`
--

-- --------------------------------------------------------

--
-- 資料表結構 `business`
--

CREATE TABLE `business` (
  `id` int(10) UNSIGNED NOT NULL,
  `b_startDate` date NOT NULL,
  `b_endDate` date NOT NULL,
  `b_startTime` time NOT NULL,
  `b_endTime` time NOT NULL,
  `b_totalTime` varchar(20) NOT NULL,
  `b_location` varchar(20) NOT NULL,
  `b_state` varchar(20) NOT NULL,
  `b_comment` varchar(50) DEFAULT NULL,
  `b_month` varchar(20) NOT NULL,
  `b_name` varchar(20) NOT NULL,
  `b_hrCheck` varchar(20) NOT NULL DEFAULT 'unaccept',
  `b_bossCheck` varchar(10) NOT NULL DEFAULT 'unaccept',
  `b_applyDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `business`
--

INSERT INTO `business` (`id`, `b_startDate`, `b_endDate`, `b_startTime`, `b_endTime`, `b_totalTime`, `b_location`, `b_state`, `b_comment`, `b_month`, `b_name`, `b_hrCheck`, `b_bossCheck`, `b_applyDate`) VALUES
(1, '2017-07-31', '2017-07-31', '00:00:00', '18:00:00', '9', '桃園市', '場刊', '平日公差', '7', 'Henry', 'Apply', 'Apply', '2017-08-01 02:23:04'),
(2, '2017-07-30', '2017-07-30', '00:00:00', '18:00:00', '12', '桃園市', 'ss', 'asd', '8', 'david', 'Apply', 'Apply', '2017-07-31 09:13:06'),
(13, '2017-07-06', '2017-08-03', '12:23:00', '00:23:00', '1', '1', '2', '123', '', 'Steph', 'Apply', 'unaccept', '2017-08-01 02:17:43'),
(17, '2017-08-02', '2017-08-10', '00:12:00', '00:23:00', '12', '2', '12', '123', '', 'Steph', 'Apply', 'Apply', '2017-08-01 08:22:25'),
(18, '2017-08-02', '2017-08-10', '00:12:00', '00:23:00', '12', '2', '12', '123', '', 'Steph', 'Apply', 'Apply', '2017-08-01 08:22:22');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `business`
--
ALTER TABLE `business`
  ADD PRIMARY KEY (`id`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `business`
--
ALTER TABLE `business`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
