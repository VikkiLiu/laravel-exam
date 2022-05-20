-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1:3306
-- 生成日期： 2022-05-19 09:50:21
-- 服务器版本： 10.4.10-MariaDB
-- PHP 版本： 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `laravel-exam`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `aid` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `auser` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `apassword` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `updated_at` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `type` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`aid`, `auser`, `apassword`, `updated_at`, `type`) VALUES
('1', 'a', '123456', '2022', 2);

-- --------------------------------------------------------

--
-- 表的结构 `exam`
--

DROP TABLE IF EXISTS `exam`;
CREATE TABLE IF NOT EXISTS `exam` (
  `eid` int(100) NOT NULL AUTO_INCREMENT,
  `ename` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `etype` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `tname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `etime` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `enum` varchar(20) COLLATE utf8_unicode_ci DEFAULT '0',
  `escore` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `updated_at` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`eid`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `exam`
--

INSERT INTO `exam` (`eid`, `ename`, `etype`, `tname`, `etime`, `enum`, `escore`, `updated_at`, `created_at`) VALUES
(1, '考试1', '测试', '试卷1', '20210102', '12', '100', '', ''),
(2, '考试2', '1', '试卷3', '2022-05-17 03:03:03', NULL, '100', '2022-05-13 05:39:16', '2022-05-13 05:39:16'),
(3, '考试3', '0', '试卷3', '2022-05-27 14:00:00', '23', '120', '2022-05-17 01:32:45', '2022-05-17 01:32:45'),
(4, '考试4', '1', '试卷1', '2022-05-24 00:00:00', '0', '120', '2022-05-19 01:15:30', '2022-05-19 01:15:30'),
(6, '考试', '0', '试卷1', '2022-05-24 00:00:00', '0', '100', '2022-05-19 08:00:35', '2022-05-19 08:00:35'),
(7, '3123', '正式考试', '1', '2022-05-17 03:03:03', '0', '120', '2022-05-19 08:02:04', '2022-05-19 08:02:04');

-- --------------------------------------------------------

--
-- 表的结构 `grade`
--

DROP TABLE IF EXISTS `grade`;
CREATE TABLE IF NOT EXISTS `grade` (
  `gid` int(100) NOT NULL AUTO_INCREMENT,
  `sno` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `tname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `grades` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `etime` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `ename` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `updated_at` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`gid`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `grade`
--

INSERT INTO `grade` (`gid`, `sno`, `sname`, `tname`, `grades`, `etime`, `ename`, `updated_at`, `created_at`) VALUES
(1, '20220209', '张三', '试卷1', '13', '20210801', '考试1', '2022-05-19 07:09:29', ''),
(2, '20220210', '李四', '试卷1', '80', '2022', '考试1', '', ''),
(3, '20220209', '张三', '试卷3', '25', '2022', '考试3', '2022-05-19 07:05:33', ''),
(4, '20220209', '$sname2', '$tname2', '80', '$etime2', '$ename2', '', ''),
(5, '20220209', '$sname2', '$tname2', '80', '$etime2', '$ename2', '', ''),
(6, '20220209', '$sname2', '$tname2', '80', '$etime2', '$ename2', '', ''),
(7, '20220209', '$sname2', '$tname2', '80', '$etime2', '$ename2', '', ''),
(8, '20220209', '$sname2', '$tname2', '80', '$etime2', '$ename2', '', ''),
(9, '20220209', '$sname2', '$tname2', '80', '$etime2', '$ename2', '', ''),
(10, '20220209', '$sname2', '$tname2', '80', '$etime2', '$ename2', '', ''),
(11, '20220209', '$sname2', '$tname2', '80', '$etime2', '$ename2', '', ''),
(12, '20220209', '张三', '$tname2', '80', '$etime2', '$ename2', '', ''),
(13, '20220209', '张三', '1', '80', '$etime2', '$ename2', '', ''),
(14, '20220209', '张三', '116313', '80', '$etime2', '$ename2', '', '');

-- --------------------------------------------------------

--
-- 表的结构 `question`
--

DROP TABLE IF EXISTS `question`;
CREATE TABLE IF NOT EXISTS `question` (
  `qno` int(50) NOT NULL AUTO_INCREMENT,
  `tname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `qsection` varchar(50) CHARACTER SET utf8 NOT NULL,
  `qknow` varchar(50) CHARACTER SET utf8 NOT NULL,
  `qquestion` varchar(50) CHARACTER SET utf8 NOT NULL,
  `qa` varchar(100) CHARACTER SET utf8 NOT NULL,
  `qb` varchar(100) CHARACTER SET utf8 NOT NULL,
  `qc` varchar(100) CHARACTER SET utf8 NOT NULL,
  `qd` varchar(100) CHARACTER SET utf8 NOT NULL,
  `updated_at` varchar(100) CHARACTER SET utf8 NOT NULL,
  `created_at` varchar(100) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`qno`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `question`
--

INSERT INTO `question` (`qno`, `tname`, `qsection`, `qknow`, `qquestion`, `qa`, `qb`, `qc`, `qd`, `updated_at`, `created_at`) VALUES
(1, '试卷1', '章节一', '知识点1', '问题1', '选项a', '选项b', '选项c', '选项d', '', ''),
(4, '', '第三章', '知识点2', '15', '15', '15', '151', '15', '2022-05-12 00:43:45', '2022-05-12 00:43:45'),
(15, '试卷444', '第二章', '知识点2', '企鹅舞', '123', '213', '2132', '3123', '2022-05-19 09:41:52', '2022-05-19 09:41:52'),
(6, '', '第二章', '知识点2', '68', '768', '86', '86', '86', '2022-05-12 01:01:37', '2022-05-12 01:01:37'),
(14, '试卷666', '第二章', '知识点1', '改了', '1', '1', '1', '1', '2022-05-19 09:17:23', '2022-05-19 09:17:23'),
(8, '', '第二章', '知识点3', '24', '324', '3243', '43', '24', '2022-05-12 06:51:05', '2022-05-12 06:51:05'),
(9, '', '第二章', '知识点2', '34', '231', '231', '213', '321', '2022-05-13 03:29:13', '2022-05-13 03:29:13'),
(16, '试卷444', '第一章', '知识点3', '啊实打实', '去恶趣味', '32', '234', '234', '2022-05-19 09:44:40', '2022-05-19 09:44:40'),
(13, '试卷1', '第二章', '知识点1', '123', '231', '3123', '123', '213', '2022-05-19 09:16:54', '2022-05-19 09:16:54'),
(12, '试卷5', '第一章', '知识点2', '11111', '1', '11', '1', '1', '2022-05-19 09:06:15', '2022-05-19 09:06:15'),
(17, '试卷1', '第一章', '知识点2', '34234', '23423', '234234', '423423', '234', '2022-05-19 09:45:17', '2022-05-19 09:45:17');

-- --------------------------------------------------------

--
-- 表的结构 `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `sno` int(100) NOT NULL AUTO_INCREMENT,
  `sname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ssex` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `suser` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `spassword` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `updated_at` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `type` int(10) NOT NULL DEFAULT 0,
  PRIMARY KEY (`sno`)
) ENGINE=MyISAM AUTO_INCREMENT=20220211 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `student`
--

INSERT INTO `student` (`sno`, `sname`, `ssex`, `suser`, `spassword`, `updated_at`, `created_at`, `type`) VALUES
(20220209, '张三', '男', 'zhangsan', '123456', '', '', 0),
(20220210, '李四', '男', 'lisi', '123456', '', '', 0);

-- --------------------------------------------------------

--
-- 表的结构 `teacher`
--

DROP TABLE IF EXISTS `teacher`;
CREATE TABLE IF NOT EXISTS `teacher` (
  `tno` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tuser` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tpassword` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `type` int(10) NOT NULL DEFAULT 1
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `teacher`
--

INSERT INTO `teacher` (`tno`, `tname`, `tuser`, `tpassword`, `type`) VALUES
('20060102', '刘老师', 'techer1', '123456', 1),
('20060901', '张老师', 'techer2', '123456', 1);

-- --------------------------------------------------------

--
-- 表的结构 `test`
--

DROP TABLE IF EXISTS `test`;
CREATE TABLE IF NOT EXISTS `test` (
  `tno` int(200) NOT NULL AUTO_INCREMENT,
  `tname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ttype` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `updated_at` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`tno`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `test`
--

INSERT INTO `test` (`tno`, `tname`, `ttype`, `updated_at`, `created_at`) VALUES
(1, '试卷1', '分类1', '2022', ''),
(2, '二五', '试卷分类1', '2022-05-12 01:46:33', '2022-05-12 01:46:33'),
(4, '234', '试卷分类1', '2022-05-12 06:43:24', '2022-05-12 06:43:24'),
(5, '试卷5', '试卷分类1', '2022-05-13 03:30:37', '2022-05-13 03:30:37'),
(6, '试卷666', '试卷分类2', '2022-05-17 07:23:12', '2022-05-17 07:23:12'),
(7, '试卷777', '试卷分类2', '2022-05-18 08:30:48', '2022-05-18 08:30:48'),
(8, '试卷444', '试卷分类2', '2022-05-18 08:31:36', '2022-05-18 08:31:36');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
