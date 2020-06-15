-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2018-12-18 12:06:55
-- 服务器版本： 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `boostrpt`
--
CREATE DATABASE IF NOT EXISTS `boostrpt` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `boostrpt`;

-- --------------------------------------------------------

--
-- 表的结构 `student`
--

CREATE TABLE `student` (
  `s_id` int(20) DEFAULT NULL COMMENT 'id',
  `s_name` varchar(50) DEFAULT NULL COMMENT '姓名',
  `s_sex` varchar(10) DEFAULT NULL COMMENT '性别',
  `s_km` varchar(20) DEFAULT NULL COMMENT '科目',
  `s_xh` varchar(50) DEFAULT NULL COMMENT '学号',
  `s_grade` float DEFAULT NULL COMMENT '成绩',
  `s_photo` int(12) DEFAULT NULL COMMENT '联系电话',
  `s_sheng` varchar(20) DEFAULT NULL COMMENT '生日',
  `s_di` varchar(50) DEFAULT NULL COMMENT '地址'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `student`
--

INSERT INTO `student` (`s_id`, `s_name`, `s_sex`, `s_km`, `s_xh`, `s_grade`, `s_photo`, `s_sheng`, `s_di`) VALUES
(NULL, '风', '女', '数学', '07170877', 98, 1380013800, '1996-12-11', '机电1'),
(2, '兰', '女', '数学', '07170878', 99, 10086, '1995-11-11', '珠海'),
(3, '气', '男', '数学', '07170879', 100, 1008611, '1994-11-11', '机电'),
(5, '火', '男', '数学', '07170880', 99, 1008612, '1995-11-9', '机电'),
(4, '土', '男', '数学', '07170881', 91, 10086123, '1995-9-11', '珠海'),
(6, '风', '男', '数学', '07170882', 98, 100861234, '1994-9-11', '珠海'),
(7, '草', '女', '数学', '07170883', 96, 2147483647, '1994-9-11', '机电'),
(8, '水', '女', '数学', '07170883', 100, 2147483647, '1994-8-11', '机电');

-- --------------------------------------------------------

--
-- 表的结构 `user1`
--

CREATE TABLE `user1` (
  `id` int(10) DEFAULT NULL COMMENT 'id',
  `username` varchar(50) DEFAULT NULL COMMENT '账号',
  `password1` varchar(50) DEFAULT NULL COMMENT '密码',
  `role` varchar(50) DEFAULT NULL COMMENT '用户类型'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `user1`
--

INSERT INTO `user1` (`id`, `username`, `password1`, `role`) VALUES
(1, 'guang', '123456', '管理员'),
(1, 'yuan', '123', '学生');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
