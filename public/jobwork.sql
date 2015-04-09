-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Апр 09 2015 г., 13:04
-- Версия сервера: 5.6.14
-- Версия PHP: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `jobwork`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `sname` varchar(200) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(10) NOT NULL DEFAULT 'user',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `sname`, `email`, `password`, `role`) VALUES
(1, 'super', 'admin', 'superadmin@superadmin.superadmin', '17c4520f6cfd1ab53d8745e84681eb49', 'superadmin'),
(2, 'admin', 'admin', 'admin@admin.admin', '21232f297a57a5a743894a0e4a801fc3', 'user'),
(3, 'qwerty', 'asdfgh', 'a@a.a', 'aaa', 'user'),
(4, 'qqqq', 'qqqq', 'www@www.www', 'www', 'superadmin'),
(5, 'zzz', 'zzz', 'zzz@zzz.zzz', 'f3abb86bd34cf4d52698f14c0da1dc60', 'owner'),
(6, 'owner', 'owner', 'owner@owner.owner', '72122ce96bfec66e2396d2e25225d70a', 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
