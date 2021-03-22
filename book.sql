-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1
-- 生成日期： 2021-01-06 03:07:22
-- 服务器版本： 10.4.16-MariaDB
-- PHP 版本： 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `tsxt`
--

-- --------------------------------------------------------

--
-- 表的结构 `book`
--

CREATE TABLE `book` (
  `id` int(200) NOT NULL,
  `name` varchar(20) COLLATE utf8_bin NOT NULL COMMENT '书名',
  `user` varchar(20) COLLATE utf8_bin NOT NULL COMMENT '作者',
  `state` varchar(40) COLLATE utf8_bin NOT NULL COMMENT '状态',
  `price` int(20) NOT NULL COMMENT '价格',
  `say` varchar(50) COLLATE utf8_bin NOT NULL COMMENT '简介'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- 转存表中的数据 `book`
--

INSERT INTO `book` (`id`, `name`, `user`, `state`, `price`, `say`) VALUES
(1, '追风筝的人', '【美】卡勒特 胡赛尼', '在馆', 29, '追风筝的人~追着风筝跑的人'),
(2, '解忧杂货铺', '【日】东野佳吾', '在馆', 40, '解决一切忧愁~~~~'),
(3, '白夜行', '【日】东野佳吾', '在馆', 28, '白天也行走~~~'),
(4, '围城', '钱钟书', '在馆', 88, '爱情就像围城~~~'),
(5, '挪威的森林', '【日】树上春树', '在馆', 20, '挪威的森林~~~'),
(6, '红楼梦', '中国古典文学读书丛书', '在馆', 76, '四大名著之一'),
(7, '活着', '余华', '在馆', 34, '活着不易，且行且珍惜~~~'),
(8, '看见', '梁静', '在馆', 34, '看见~~~'),
(9, '三国演义', '罗贯中', '在馆', 28, '四大名著之一'),
(10, '平凡的世界', '路遥', '在馆', 66, '平凡的世界~平凡的一天~'),
(11, '三体', '刘慈欣', '在馆', 45, '三体~~~~');

--
-- 转储表的索引
--

--
-- 表的索引 `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `book`
--
ALTER TABLE `book`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
