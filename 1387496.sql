-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 15, 2023 at 06:14 PM
-- Server version: 10.4.20-MariaDB-log
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `1387496`
--

-- --------------------------------------------------------

--
-- Table structure for table `a`
--

CREATE TABLE `a` (
  `a` int(11) NOT NULL,
  `b` longtext NOT NULL DEFAULT 'Anonymous',
  `c` longtext NOT NULL,
  `d` int(1) NOT NULL,
  `e` varchar(100) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `a`
--

INSERT INTO `a` (`a`, `b`, `c`, `d`, `e`) VALUES
(1, '4ZyN4ZyM4ZyU4ZyQ4ZyS4ZyQ4ZyU', 'VXA=', 5, '2022-11-22 14:03:57');

-- --------------------------------------------------------

--
-- Table structure for table `b`
--

CREATE TABLE `b` (
  `a` int(11) NOT NULL,
  `b` longtext NOT NULL DEFAULT 'Anonymous',
  `c` longtext NOT NULL,
  `d` longtext NOT NULL DEFAULT '',
  `e` int(1) NOT NULL DEFAULT 0,
  `f` varchar(100) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `c`
--

CREATE TABLE `c` (
  `a` int(11) NOT NULL,
  `b` varchar(1000) NOT NULL,
  `c` varchar(100) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `c`
--

INSERT INTO `c` (`a`, `b`, `c`) VALUES
(1, 'Opera/9.80 (Android; Opera Mini/7.7.40394/191.236; U; en) Presto/2.12.423 Version/12.16', '2021-06-19 07:45:43'),
(2, 'Opera/9.80 (Android; Opera Mini/7.7.40394/191.236; U; en) Presto/2.12.423 Version/12.16', '2021-06-24 17:14:35'),
(3, 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', '2021-07-05 09:12:30'),
(4, 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', '2021-07-05 09:12:30'),
(5, 'Mozilla/5.0 (Linux; Android 11; Redmi Note 9 Pro Build/RKQ1.200826.002; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/91.0.4472.120 Mobile Safari/537.36 [FB_IAB/Orca-Android;FBAV/320.0.0.13.123;]', '2021-07-10 10:17:17'),
(6, 'Mozilla/5.0 (Linux; Android 11; Redmi Note 9 Pro) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.120 Mobile Safari/537.36', '2021-07-10 10:17:19'),
(7, 'Mozilla/5.0 (Linux; Android 10; RMX2040 Build/QP1A.190711.020; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/91.0.4472.164 Mobile Safari/537.36 [FB_IAB/Orca-Android;FBAV/321.0.0.16.119;]', '2021-07-20 09:56:09'),
(8, 'Mozilla/5.0 (Linux; Android 10; RMX2040) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.120 Mobile Safari/537.36', '2021-07-20 09:56:14'),
(9, 'Mozilla/5.0 (Linux; Android 9; itel W5005P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.116 Mobile Safari/537.36', '2021-08-05 13:48:46'),
(10, 'Mozilla/5.0 (Linux; Android 9; itel W5005P Build/PPR1.180610.011; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/79.0.3945.116 Mobile Safari/537.36', '2021-08-14 05:11:40'),
(11, 'Mozilla/5.0 (Linux; Android 9; itel W5005P Build/PPR1.180610.011; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/79.0.3945.116 Mobile Safari/537.36', '2021-08-14 05:11:48'),
(12, 'Mozilla/5.0 (Linux; Android 9; itel W5005P Build/PPR1.180610.011; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/79.0.3945.116 Mobile Safari/537.36', '2021-08-14 05:12:08'),
(13, 'Mozilla/5.0 (Linux; Android 9; itel W5005P Build/PPR1.180610.011; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/79.0.3945.116 Mobile Safari/537.36', '2021-08-14 05:12:37'),
(14, 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)', '2021-08-18 02:59:12'),
(15, 'Mozilla/5.0 (Linux; Android 8.1.0; itel A14) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.110 Mobile Safari/537.36', '2021-08-18 12:43:07'),
(16, 'Mozilla/5.0 (Linux; Android 8.1.0; itel A14) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.110 Mobile Safari/537.36', '2021-08-18 12:47:19'),
(17, 'Mozilla/5.0 (Linux; Android 6.0.1; vivo 1606 Build/MMB29M; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/87.0.4280.141 Mobile Safari/537.36 [FB_IAB/Orca-Android;FBAV/325.0.0.16.118;]', '2021-08-19 10:59:20'),
(18, 'Mozilla/5.0 (Linux; Android 6.0.1; vivo 1606) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.120 Mobile Safari/537.36', '2021-08-19 10:59:23'),
(19, 'Mozilla/5.0 (Linux; Android 6.0.1; vivo 1606 Build/MMB29M; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/87.0.4280.141 Mobile Safari/537.36 [FB_IAB/Orca-Android;FBAV/325.0.0.16.118;]', '2021-08-19 11:01:12'),
(20, 'Mozilla/5.0 (Linux; Android 6.0.1; vivo 1606) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.120 Mobile Safari/537.36', '2021-08-19 11:01:13'),
(21, 'Mozilla/5.0 (Linux; Android 6.0.1; vivo 1606 Build/MMB29M; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/87.0.4280.141 Mobile Safari/537.36 [FB_IAB/Orca-Android;FBAV/325.0.0.16.118;]', '2021-08-19 11:02:23'),
(22, 'Mozilla/5.0 (Linux; Android 6.0.1; vivo 1606) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.120 Mobile Safari/537.36', '2021-08-19 11:02:25'),
(23, 'Mozilla/5.0 (Linux; Android 6.0.1; vivo 1606) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.120 Mobile Safari/537.36', '2021-08-19 11:03:32'),
(24, 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', '2021-08-20 15:02:38'),
(25, 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', '2021-08-20 15:02:38'),
(26, 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)', '2021-08-20 15:19:57'),
(27, 'Mozilla/5.0 (Linux; Android 8.1.0; DUB-LX3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.120 Mobile Safari/537.36', '2021-08-23 05:03:15'),
(28, 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)', '2021-08-24 13:43:39'),
(29, 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)', '2021-08-28 14:26:18'),
(30, 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)', '2021-09-01 19:02:27'),
(31, 'Opera/9.80 (Android; Opera Mini/7.5.35188/191.243; U; en) Presto/2.12.423 Version/12.16', '2021-09-21 14:51:59'),
(32, 'Mozilla/5.0 (compatible; YandexBot/3.0; +http://yandex.com/bots)', '2021-10-06 15:54:25'),
(33, 'Mozilla/5.0 (Linux; Android 6.0.1; vivo 1606) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.166 Mobile Safari/537.36', '2021-10-11 12:40:58'),
(34, 'Opera/9.80 (Android; Opera Mini/7.6.35766/191.246; U; en) Presto/2.12.423 Version/12.16', '2021-10-11 12:47:04'),
(35, 'Opera/9.80 (Android; Opera Mini/7.6.35766/191.246; U; en) Presto/2.12.423 Version/12.16', '2021-10-11 12:47:19'),
(36, 'Opera/9.80 (Android; Opera Mini/7.6.35766/191.246; U; en) Presto/2.12.423 Version/12.16', '2021-10-11 12:47:19'),
(37, 'Opera/9.80 (Android; Opera Mini/7.6.35766/191.248; U; en) Presto/2.12.423 Version/12.16', '2021-10-11 18:07:59'),
(38, 'IE 7 - Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; .NET CLR 1.1.4322; .NET CLR 2.0.50727; .NET CLR 3.0.04506.30)', '2021-10-11 18:08:21'),
(39, 'Opera/9.80 (Android; Opera Mini/7.6.35766/191.248; U; en) Presto/2.12.423 Version/12.16', '2021-10-12 12:31:46'),
(40, 'Opera/9.80 (Android; Opera Mini/7.6.35766/191.248; U; en) Presto/2.12.423 Version/12.16', '2021-10-12 12:32:17'),
(41, 'Opera/9.80 (Android; Opera Mini/7.6.35766/191.248; U; en) Presto/2.12.423 Version/12.16', '2021-10-12 13:07:28'),
(42, 'Opera/9.80 (Android; Opera Mini/7.6.35766/191.248; U; en) Presto/2.12.423 Version/12.16', '2021-10-12 13:07:34'),
(43, 'Opera/9.80 (Android; Opera Mini/7.6.35766/191.248; U; en) Presto/2.12.423 Version/12.16', '2021-10-12 13:07:34'),
(44, 'Opera/9.80 (Android; Opera Mini/7.6.35766/191.248; U; en) Presto/2.12.423 Version/12.16', '2021-10-12 13:07:40'),
(45, 'Opera/9.80 (Android; Opera Mini/7.6.35766/191.248; U; en) Presto/2.12.423 Version/12.16', '2021-10-12 13:07:40'),
(46, 'Opera/9.80 (Android; Opera Mini/7.6.35766/191.248; U; en) Presto/2.12.423 Version/12.16', '2021-10-12 13:07:48'),
(47, 'Opera/9.80 (Android; Opera Mini/7.6.35766/191.248; U; en) Presto/2.12.423 Version/12.16', '2021-10-12 13:07:48'),
(48, 'Opera/9.80 (Android; Opera Mini/7.6.35766/191.248; U; en) Presto/2.12.423 Version/12.16', '2021-10-12 13:08:32'),
(49, 'Opera/9.80 (Android; Opera Mini/7.6.35766/191.248; U; en) Presto/2.12.423 Version/12.16', '2021-10-12 13:08:32'),
(50, 'Opera/9.80 (Android; Opera Mini/7.6.35766/191.248; U; en) Presto/2.12.423 Version/12.16', '2021-10-12 13:08:40'),
(51, 'Opera/9.80 (Android; Opera Mini/7.6.35766/191.248; U; en) Presto/2.12.423 Version/12.16', '2021-10-12 13:08:41'),
(52, 'Mozilla/5.0 (Linux; Android 11; M2101K7AG) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.210 Mobile Safari/537.36', '2021-10-19 15:27:05'),
(53, 'Mozilla/5.0 (Linux; Android 11; M2101K7AG) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.210 Mobile Safari/537.36', '2021-10-19 15:30:45'),
(54, 'Mozilla/5.0 (Linux; Android 9; CPH2083 Build/PPR1.180610.011; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/94.0.4606.85 Mobile Safari/537.36 [FB_IAB/Orca-Android;FBAV/334.0.0.15.118;]', '2021-10-19 15:40:37'),
(55, 'Mozilla/5.0 (Linux; Android 9; CPH2083) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.85 Mobile Safari/537.36', '2021-10-19 15:40:40'),
(56, 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', '2021-10-31 05:09:51'),
(57, 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', '2021-10-31 05:09:51'),
(58, 'Mozilla/5.0 (Linux; Android 8.1.0; vivo 1811 Build/OPM1.171019.026; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/90.0.4430.82 Mobile Safari/537.36 [FB_IAB/Orca-Android;FBAV/306.0.0.17.114;]', '2021-11-04 11:16:25'),
(59, 'Mozilla/5.0 (Linux; Android 8.1.0; vivo 1811) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.82 Mobile Safari/537.36', '2021-11-04 11:16:27'),
(60, 'Mozilla/5.0 (Linux; Android 8.1.0; vivo 1811) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.82 Mobile Safari/537.36', '2021-11-04 11:20:17'),
(61, 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', '2022-02-09 12:13:11'),
(62, 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', '2022-02-09 12:13:11'),
(63, 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)', '2022-03-27 06:03:02'),
(64, 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)', '2022-04-06 03:15:01'),
(65, 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', '2022-04-27 14:10:36'),
(66, 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', '2022-04-27 14:10:36'),
(67, 'Mozilla/5.0 (Linux; Android 7.0;) AppleWebKit/537.36 (KHTML, like Gecko) Mobile Safari/537.36 (compatible; PetalBot;+https://webmaster.petalsearch.com/site/petalbot)', '2022-06-22 22:29:35'),
(68, 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/110.0.5481.77 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2023-02-15 07:30:47'),
(69, 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/110.0.5481.177 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', '2023-03-01 04:34:44'),
(70, 'Mozilla/5.0 (Linux; Android 7.0;) AppleWebKit/537.36 (KHTML, like Gecko) Mobile Safari/537.36 (compatible; PetalBot;+https://webmaster.petalsearch.com/site/petalbot)', '2023-06-08 08:13:58');

-- --------------------------------------------------------

--
-- Table structure for table `d`
--

CREATE TABLE `d` (
  `a` int(11) NOT NULL,
  `b` longtext CHARACTER SET utf8mb4 NOT NULL,
  `c` longtext CHARACTER SET utf8mb4 NOT NULL,
  `d` varchar(100) CHARACTER SET utf8mb4 NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Dumping data for table `d`
--

INSERT INTO `d` (`a`, `b`, `c`, `d`) VALUES
(1, '4ZyH4ZyM4ZyI4ZyUIOGcg+GckuGci+GclA==', '3e10b6f3d49b147f7f09e5f1f97d4ceb81568bda', '2023-08-15 12:00:41');

-- --------------------------------------------------------

--
-- Table structure for table `e`
--

CREATE TABLE `e` (
  `a` int(11) NOT NULL,
  `b` int(11) NOT NULL,
  `c` longtext CHARACTER SET utf8mb4 NOT NULL,
  `d` varchar(100) CHARACTER SET utf8mb4 NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Dumping data for table `e`
--

INSERT INTO `e` (`a`, `b`, `c`, `d`) VALUES
(1, 1, '4ZyA4ZyF4ZyUIOGchOGcjuGckuGcheGclA==', '2023-08-15 12:01:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `a`
--
ALTER TABLE `a`
  ADD PRIMARY KEY (`a`);

--
-- Indexes for table `b`
--
ALTER TABLE `b`
  ADD PRIMARY KEY (`a`);

--
-- Indexes for table `c`
--
ALTER TABLE `c`
  ADD PRIMARY KEY (`a`);

--
-- Indexes for table `d`
--
ALTER TABLE `d`
  ADD PRIMARY KEY (`a`);

--
-- Indexes for table `e`
--
ALTER TABLE `e`
  ADD PRIMARY KEY (`a`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `a`
--
ALTER TABLE `a`
  MODIFY `a` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `b`
--
ALTER TABLE `b`
  MODIFY `a` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `c`
--
ALTER TABLE `c`
  MODIFY `a` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `d`
--
ALTER TABLE `d`
  MODIFY `a` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `e`
--
ALTER TABLE `e`
  MODIFY `a` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
