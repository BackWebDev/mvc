-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 24 2019 г., 16:39
-- Версия сервера: 5.7.23
-- Версия PHP: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `testmvc`
--

-- --------------------------------------------------------

--
-- Структура таблицы `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `sender_id` int(10) NOT NULL,
  `recipient_id` int(10) NOT NULL,
  `text` text NOT NULL,
  `sent_date` date DEFAULT NULL,
  `sent_time` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `messages`
--

INSERT INTO `messages` (`id`, `sender_id`, `recipient_id`, `text`, `sent_date`, `sent_time`) VALUES
(4, 3, 4, 'Hi:)', '2019-02-24', '14:53:01'),
(5, 4, 3, 'Privet', '2019-02-24', '15:23:12'),
(6, 4, 3, 'How are you?', '2019-02-24', '16:07:49'),
(7, 3, 4, 'I`m fine! What about you?', '2019-02-24', '16:12:07'),
(8, 6, 3, 'Hello!', '2019-02-24', '16:26:49');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(32) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(32) NOT NULL,
  `sname` varchar(32) NOT NULL,
  `hb` date NOT NULL,
  `location` varchar(150) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `addinfo` text NOT NULL,
  `infected` int(11) NOT NULL,
  `lastvisit` datetime DEFAULT NULL,
  `created_ad` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `name`, `sname`, `hb`, `location`, `contact`, `addinfo`, `infected`, `lastvisit`, `created_ad`) VALUES
(2, '380988406223@mail.ru', '827ccb0eea8a706c4c34a16891f84e7b', 'Vlad', 'Tarusov', '1999-05-10', 'Zaphorozhye', '380988406223', '19 years old, student', 0, '2019-02-24 16:38:42', '2019-02-20 17:29:03'),
(3, 'tawerballas2288@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Tarik', 'Azizov', '2000-10-01', 'Dnepr', '38832183128', 'My english is poor:(', 0, '2019-02-24 16:26:57', '2019-02-20 23:16:52'),
(4, '123@mail.ru', '827ccb0eea8a706c4c34a16891f84e7b', 'Khabib', 'Nurmagomedov', '1988-09-20', 'Дагестан', '738238485', 'Непобежденный российский боец', 0, '2019-02-24 15:22:57', '2019-02-22 11:57:08'),
(5, '345@mail.ru', '827ccb0eea8a706c4c34a16891f84e7b', 'Edik', 'Sadkgsdg', '1999-09-04', 'Харьков', '46546623423423', '35 years old', 0, '2019-02-24 16:20:04', '2019-02-24 14:19:54'),
(6, '456@mail.ru', '827ccb0eea8a706c4c34a16891f84e7b', 'Artyom', 'Gdfjgd', '2000-10-10', 'Львов', '43543654634', 'Student', 0, '2019-02-24 16:23:53', '2019-02-24 14:23:37');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
