-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 03 2022 г., 06:48
-- Версия сервера: 10.2.38-MariaDB
-- Версия PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `loftschool`
--

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment` tinyint(4) DEFAULT NULL,
  `callback` tinyint(4) NOT NULL DEFAULT 1,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `comment`, `payment`, `callback`, `date`) VALUES
(1, 1, 'Комментарий', 1, 0, '2022-11-29 13:53:01'),
(2, 1, '123321', 1, 0, '2022-11-30 13:54:27'),
(3, 19, '', NULL, 1, '2022-11-30 15:25:47'),
(4, 19, '', NULL, 1, '2022-11-30 15:25:49'),
(5, 19, '', NULL, 1, '2022-11-30 15:26:00'),
(6, 21, '', NULL, 1, '2022-11-30 18:03:51'),
(7, 26, '', NULL, 1, '2022-11-30 18:11:54'),
(8, 26, '', NULL, 1, '2022-11-30 18:12:20'),
(9, 26, '', NULL, 1, '2022-11-30 18:12:31'),
(10, 26, '', NULL, 1, '2022-11-30 18:12:33'),
(11, 26, '', NULL, 1, '2022-11-30 18:13:04'),
(12, 20, '', NULL, 1, '2022-11-30 18:19:53'),
(13, 20, '', NULL, 1, '2022-11-30 18:19:58'),
(14, 27, '', NULL, 1, '2022-11-30 18:20:54'),
(15, 28, '', NULL, 1, '2022-11-30 18:23:40'),
(16, 29, '123123', 1, 0, '2022-11-30 18:26:22'),
(17, 30, '123', 1, 0, '2022-11-30 18:27:24'),
(18, 30, '', 1, 1, '2022-11-30 18:28:19'),
(19, 30, '', 1, 1, '2022-11-30 18:28:27'),
(20, 30, '', 1, 1, '2022-11-30 18:28:33'),
(21, 28, '', NULL, 1, '2022-11-30 18:32:55'),
(22, 31, '12', 12, 12, '2022-12-03 09:44:33'),
(23, 31, '12', 12, 12, '2022-12-03 09:44:38'),
(24, 31, '12', 12, 12, '2022-12-03 09:44:42'),
(25, 31, '12', 12, 12, '2022-12-03 09:44:43'),
(26, 31, '12', 12, 12, '2022-12-03 09:44:44'),
(27, 31, '12', 12, 12, '2022-12-03 09:44:46'),
(28, 31, '12', 12, 12, '2022-12-03 09:44:47');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `street` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `house` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `frame` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `apartment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `floor` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `street`, `house`, `frame`, `apartment`, `floor`) VALUES
(1, 'Anton', 'anton@email.com', '', 'street', '3a', NULL, '5b', NULL),
(6, '', 'anton@email.coms3', '', '', '', NULL, '', NULL),
(7, '', 'anton@email.coms6', '', '', '', NULL, '', NULL),
(8, '', 'anton@email.coms5', '', '', '', NULL, '', NULL),
(9, '', 'anton@email.coms5', '', '', '', NULL, '', NULL),
(10, '', 'anton@email.coms5', '', '', '', NULL, '', NULL),
(11, '', 'anton@email.coms5', '', '', '', NULL, '', NULL),
(12, '', 'anton@email.coms5', '', '', '', NULL, '', NULL),
(13, '', 'anton@email.coms5', '', '', '', NULL, '', NULL),
(14, '', 'anton@email.coms5', '', '', '', NULL, '', NULL),
(15, '', 'anton@email.coms100', '', '', '', NULL, '', NULL),
(16, '', 'anton@email.coms101', '', '', '', NULL, '', NULL),
(17, '', 'anton@email.coms102', '', '', '', NULL, '', NULL),
(18, '', 'anton@email.coms103', '', '', '', NULL, '', NULL),
(19, '', 'anton@email.coms104', '', '', '', NULL, '', NULL),
(20, '', '', '', '', '', NULL, '', NULL),
(21, '', 'anton@email.com22', '', '', '', NULL, '', NULL),
(22, '', 'anton@email.com24', '', '', '', NULL, '', NULL),
(23, '', 'anton@email.com25', '', '', '', NULL, '', NULL),
(24, '', 'anton@email.com26', '', '', '', NULL, '', NULL),
(25, '', 'anton@email.com27', '', '', '', NULL, '', NULL),
(26, '', 'anton@email.com29', '', '', '', NULL, '', NULL),
(27, 'sf', 'asdasd@asdasd.ru', '+7 (234) 243 24 23', '234234', '', NULL, '', 2),
(28, 'q2e', '123@mail.com', '+7 (122) 222 22 22', '123', '', NULL, '', 1),
(29, 'testoviy', 'admin@gmail.com', '+7 (777) 777 77 77', 'Улица', '', NULL, '', 5),
(30, 'testoviy', 'admin@efish.kz', '+7 (777) 777 77 7_', 'Улица', '', NULL, '', 1),
(31, '12', 'anton@email.com2222', '12', '12', '12', '12', '12', 12);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
