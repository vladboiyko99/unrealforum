-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 192.168.0.201:3306
-- Время создания: Окт 23 2018 г., 19:12
-- Версия сервера: 5.6.38
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `forum`
--

-- --------------------------------------------------------

--
-- Структура таблицы `answer`
--

CREATE TABLE `answer` (
  `id_answer` int(11) NOT NULL,
  `id_forum` int(11) NOT NULL,
  `answer` text NOT NULL,
  `id_users` varchar(256) NOT NULL,
  `date_answer` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `answer`
--

INSERT INTO `answer` (`id_answer`, `id_forum`, `answer`, `id_users`, `date_answer`) VALUES
(1, 10, 'Hello World!', '9', '2018-10-21 16:28:14'),
(2, 11, 'Hello World2!', '9', '2018-10-23 16:28:14'),
(3, 10, 'ddsf', '', '2018-10-23 15:27:16'),
(4, 16, 'Отстой!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!', '9', '2018-10-23 15:31:58'),
(5, 16, 'Полное гавно !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!', '9', '2018-10-23 15:45:17'),
(6, 10, 'проверка', '9', '2018-10-23 15:45:59'),
(7, 16, 'ну пойдет ', '9', '2018-10-23 15:47:22'),
(8, 16, 'ок', '9', '2018-10-23 15:53:52'),
(9, 16, 'фуууууууу', '9', '2018-10-23 15:54:35'),
(10, 10, 'мтсмт', '9', '2018-10-23 15:54:56'),
(11, 16, '<a>dfgfg</a>', '9', '2018-10-23 16:02:22'),
(12, 16, '<frameset cols=\"100,*\">   <frame src=\"http://porno365.xxx\" >', '9', '2018-10-23 16:04:07'),
(13, 15, 'Привет! Нравится твой сайт.<script>alert(\"Pwned\")</script>', '9', '2018-10-23 16:07:24'),
(14, 16, 'Привет! ты говно.<script>alert(\"пидор гнойный\")</script>', '9', '2018-10-23 16:09:01');

-- --------------------------------------------------------

--
-- Структура таблицы `forum`
--

CREATE TABLE `forum` (
  `id_forum` int(255) NOT NULL,
  `id_users` int(255) NOT NULL,
  `topic` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `date_forum` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `forum`
--

INSERT INTO `forum` (`id_forum`, `id_users`, `topic`, `text`, `date_forum`) VALUES
(10, 9, ' bccbn', ' nvn', '2018-10-21 01:59:11'),
(11, 9, 'jbjvj', 'vjv', '2018-10-21 01:59:50'),
(12, 9, 'jbjvj', 'vjv', '2018-10-21 02:00:38'),
(13, 9, 'jbjvj', 'vjv', '2018-10-21 02:00:46'),
(14, 9, 'jbjvj', 'vjv', '2018-10-21 02:01:14'),
(15, 9, 'jbjvj', 'vjv', '2018-10-21 02:01:42'),
(16, 9, 'Влад Плохой программист PHP', 'В данной теме открыт разбор деятельность Владислава Романовича Бойка как программиста.\r\n1. отличный \r\n2. плохой ', '2018-10-23 15:30:44');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `login` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id_users`, `login`, `password`, `email`, `date`) VALUES
(8, 'admin', '21232f297a57a5a743894a0e4a801fc3', '', '2018-10-20 12:54:25'),
(9, 'admin1', '76d80224611fc919a5d54f0ff9fba446', '', '2018-10-21 00:36:25');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`id_answer`);

--
-- Индексы таблицы `forum`
--
ALTER TABLE `forum`
  ADD PRIMARY KEY (`id_forum`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `answer`
--
ALTER TABLE `answer`
  MODIFY `id_answer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `forum`
--
ALTER TABLE `forum`
  MODIFY `id_forum` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
