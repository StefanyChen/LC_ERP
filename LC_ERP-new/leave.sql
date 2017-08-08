-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- 主機: localhost
-- 產生時間： 2017-08-01 09:25:04
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
-- 資料表結構 `leave`
--

CREATE TABLE `leave` (
  `id` int(11) NOT NULL,
  `l_name` varchar(30) NOT NULL,
  `l_startDate` date NOT NULL,
  `l_startTime` time NOT NULL,
  `l_endDate` date NOT NULL,
  `l_endTime` time NOT NULL,
  `l_type` varchar(30) NOT NULL,
  `l_compensatoryLevae` varchar(30) NOT NULL,
  `l_annualLeave` varchar(30) NOT NULL,
  `l_marriageLeave` varchar(30) NOT NULL,
  `l_officialLeave` varchar(30) NOT NULL,
  `l_personalLeave` varchar(30) NOT NULL,
  `l_funeralLeave` varchar(30) NOT NULL,
  `l_sickLeave` varchar(30) NOT NULL,
  `l_hrs` varchar(30) NOT NULL,
  `l_state` varchar(30) NOT NULL,
  `l_comment` varchar(30) NOT NULL,
  `l_hrCheck` varchar(30) NOT NULL DEFAULT 'unaccept',
  `l_bossCheck` varchar(30) NOT NULL DEFAULT 'unaccept',
  `l_applyDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `leave`
--

INSERT INTO `leave` (`id`, `l_name`, `l_startDate`, `l_startTime`, `l_endDate`, `l_endTime`, `l_type`, `l_compensatoryLevae`, `l_annualLeave`, `l_marriageLeave`, `l_officialLeave`, `l_personalLeave`, `l_funeralLeave`, `l_sickLeave`, `l_hrs`, `l_state`, `l_comment`, `l_hrCheck`, `l_bossCheck`, `l_applyDate`) VALUES
(8, 'Henry', '1234-01-01', '01:01:00', '5678-01-01', '15:03:00', '1', '2', '3', '4', '5', '6', '7', '8', '1', '2', '3', 'Apply', 'Apply', '2017-08-01 06:49:44'),
(34, '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '1', '12', '123', '123', '123', '123', '123', '123', '', '', '', 'unaccept', 'unaccept', '2017-08-01 07:06:17'),
(53, 'Henry', '1234-12-12', '01:01:00', '5678-12-12', '00:21:00', '病假', '0', '0', '0', '0', '0', '0', '1', '1', '2', '3', 'Apply', 'Apply', '2017-08-01 07:20:34'),
(54, 'Henry', '1234-12-12', '01:01:00', '5678-12-12', '00:21:00', '事假', '0', '0', '0', '0', '4', '0', '0', '2', 'asdasdasd', 'asdasdasdasdasd', 'Apply', 'Apply', '2017-08-01 07:22:48'),
(56, '', '0000-00-00', '02:01:00', '0123-02-01', '14:31:00', '病假', '0', '0', '0', '0', '0', '0', '12', '12', '21', '21', 'unaccept', 'unaccept', '2017-08-01 08:21:11'),
(57, '王小名', '0000-00-00', '02:01:00', '0213-02-01', '14:01:00', '病假', '0', '0', '0', '0', '0', '0', '0', '21', '21', '21', 'unaccept', 'unaccept', '2017-08-01 08:21:38'),
(58, '王小名', '1234-03-31', '02:01:00', '0213-02-01', '14:01:00', '病假', '0', '0', '0', '0', '0', '0', '21', '21', '21', '21', 'Apply', 'unaccept', '2017-08-01 08:21:54');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `leave`
--
ALTER TABLE `leave`
  ADD PRIMARY KEY (`id`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `leave`
--
ALTER TABLE `leave`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
