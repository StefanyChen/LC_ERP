-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- 主機: localhost
-- 產生時間： 2017-08-01 07:11:31
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
-- 資料表結構 `employees`
--

CREATE TABLE `employees` (
  `id` int(255) UNSIGNED NOT NULL,
  `e_sn` varchar(30) DEFAULT NULL,
  `e_password` varchar(30) NOT NULL,
  `e_date` date DEFAULT NULL,
  `e_name_cn` varchar(20) DEFAULT NULL,
  `e_name_en` varchar(15) DEFAULT NULL,
  `e_sex` varchar(6) DEFAULT NULL,
  `e_birth` date DEFAULT NULL,
  `e_personalID` varchar(10) NOT NULL,
  `e_marriage` varchar(6) DEFAULT NULL,
  `e_blood` varchar(2) DEFAULT NULL,
  `e_address` varchar(150) DEFAULT NULL,
  `e_mobile` int(20) DEFAULT NULL,
  `e_email` varchar(100) DEFAULT NULL,
  `e_emergency` varchar(15) DEFAULT NULL,
  `e_em_mobile` int(20) DEFAULT NULL,
  `e_edu` varchar(30) DEFAULT NULL,
  `e_edu_high` varchar(30) DEFAULT NULL,
  `e_edu_dep` varchar(30) DEFAULT NULL,
  `e_edu_start` date DEFAULT NULL,
  `e_edu_end` date DEFAULT NULL,
  `e_edu_gra` varchar(10) DEFAULT NULL,
  `e_exp_com` varchar(30) DEFAULT NULL,
  `e_exp_posi` varchar(30) DEFAULT NULL,
  `e_exp_start` date DEFAULT NULL,
  `e_exp_end` date DEFAULT NULL,
  `e_exp_reson` varchar(30) DEFAULT NULL,
  `e_license` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `employees`
--

INSERT INTO `employees` (`id`, `e_sn`, `e_password`, `e_date`, `e_name_cn`, `e_name_en`, `e_sex`, `e_birth`, `e_personalID`, `e_marriage`, `e_blood`, `e_address`, `e_mobile`, `e_email`, `e_emergency`, `e_em_mobile`, `e_edu`, `e_edu_high`, `e_edu_dep`, `e_edu_start`, `e_edu_end`, `e_edu_gra`, `e_exp_com`, `e_exp_posi`, `e_exp_start`, `e_exp_end`, `e_exp_reson`, `e_license`) VALUES
(0, 'A01', '1234', '2017-08-02', '王小名', 'wang', '男', '2017-08-31', 'A113456789', '未婚', 'A', '桃園市中壢區XX路XX段XX號', 937465748, 'wang@gmail.com', '王大明', 912345678, '大學', '台灣大學', '資工系', '2017-08-01', '2017-08-31', '畢業', '無', NULL, NULL, NULL, '因為心累了', '無');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
