-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Мар 28 2018 г., 15:46
-- Версия сервера: 5.7.21-0ubuntu0.16.04.1
-- Версия PHP: 7.0.28-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `blog`
--

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description_short` text NOT NULL,
  `description` text NOT NULL,
  `author` varchar(255) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `image` varchar(255) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `title`, `description_short`, `description`, `author`, `date_created`, `image`, `content`) VALUES
(37, 'Test', 'Short Description', 'Full Description', 'Nudaulet', '2018-03-28 18:26:36', 'uploads/2018-03-28-12-26-36-5abb89fc7e53a-2.png', 'This is ContentThis is ContentThis is ContentThis is ContentThis is ContentThis is ContentThis is ContentThis is ContentThis is ContentThis is ContentThis is ContentThis is ContentThis is ContentThis is ContentThis is ContentThis is ContentThis is ContentThis is ContentThis is ContentThis is ContentThis is ContentThis is ContentThis is ContentThis is ContentThis is ContentThis is Content'),
(38, 'Test 2', 'asdasd', 'qweqwe', 'Nurdaulet', '2018-03-28 18:28:07', 'uploads/default.png', 'This is ContentThis is ContentThis is ContentThis is ContentThis is ContentThis is ContentThis is ContentThis is ContentThis is ContentThis is ContentThis is ContentThis is ContentThis is Content'),
(39, 'Test 3', 'short description', 'description', 'Admin', '2018-03-28 18:28:53', 'uploads/2018-03-28-12-28-53-5abb8a85a7c5a-services.png', 'Content'),
(40, 'Test asdasd', 'Test', 'qweqwrqer', 'Test', '2018-03-28 18:29:33', 'uploads/default.png', 'sdvThis is ContentThis is ContentThis is ContentThis is ContentThis is ContentThis is ContentThis is ContentThis is Content&lt;b&gt;This is Bold Text&lt;/b&gt;'),
(41, 'Test 5', 'qweasd', 'zxczxvxvc', 'Admin', '2018-03-28 18:30:02', 'uploads/default.png', 'This is ContentThis is ContentThis is ContentThis is ContentThis is ContentThis is ContentThis is ContentThis is ContentThis is ContentThis is ContentThis is ContentThis is ContentThis is ContentThis is ContentThis is ContentThis is ContentThis is ContentThis is ContentThis is ContentThis is ContentThis is ContentThis is ContentThis is ContentThis is ContentThis is ContentThis is ContentThis is ContentThis is ContentThis is ContentThis is ContentThis is ContentThis is ContentThis is ContentThis is ContentThis is ContentThis is ContentThis is ContentThis is ContentThis is ContentThis is ContentThis is ContentThis is ContentThis is ContentThis is ContentThis is ContentThis is ContentThis is ContentThis is ContentThis is ContentThis is ContentThis is ContentThis is ContentThis is ContentThis is ContentThis is ContentThis is ContentThis is ContentThis is ContentThis is ContentThis is ContentThis is ContentThis is ContentThis is ContentThis is ContentThis is ContentThis is ContentThis is ContentThis is ContentThis is ContentThis is ContentThis is ContentThis is Content');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
