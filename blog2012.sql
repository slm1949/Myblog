-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2012 年 09 月 14 日 23:47
-- 服务器版本: 5.5.24
-- PHP 版本: 5.3.10-1ubuntu3.2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `MY_blog`
--

-- --------------------------------------------------------

--
-- 表的结构 `blog2012`
--

CREATE TABLE IF NOT EXISTS `blog2012` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(256) NOT NULL,
  `content` text NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='一个博客的内容表' AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `blog2012`
--

INSERT INTO `blog2012` (`id`, `title`, `content`, `created`, `updated`) VALUES
(1, '第一条blog', '在PHPmyadin里写第一条博客的内容', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, '第二条', '还是用图形界面输入', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, '新的一条博客', '我不想写太多字', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, '有写一条吧，好查询', '也不知道这次会有问题不吗？？？', '2012-09-14 00:00:00', '2012-09-14 11:31:35');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
