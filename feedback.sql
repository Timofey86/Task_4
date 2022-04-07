-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 07 2022 г., 07:41
-- Версия сервера: 5.7.33-log
-- Версия PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `feedback`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `full_name`, `message`) VALUES
(2, 'Мухин Тимофей Валерьевич', '345634tertgdfg '),
(3, 'Мухин Тимофей Валерьевич', 'w252ert dfg'),
(4, 'Мухин Тимофей Валерьевич', 'привет всем'),
(5, 'Мухин Тимофей Валерьевич', '4 сообщение'),
(7, 'Мухин Тимофей Валерьевич', '5 сообщение'),
(8, 'Мухин Тимофей Валерьевич', '6 message'),
(9, 'Мухин Тимофей Валерьевич', '7 message'),
(10, 'Мухин Тимофей Валерьевич', '8 message'),
(11, 'Мухин Тимофей Валерьевич', '9 message'),
(15, 'Мухин Тимофей Валерьевич', '10 message'),
(16, 'Мухин Тимофей Валерьевич', '11 message'),
(17, 'Admin', '1 message'),
(18, 'Admin', '2 message'),
(19, 'Admin', '3 message'),
(20, 'Admin', '4 message'),
(21, 'Admin', '5 message'),
(22, 'Admin', '6 message'),
(23, 'Admin', '7 message'),
(24, 'Мухин Тимофей Валерьевич', 'last mesasge'),
(25, 'Мухин Тимофей Валерьевич', 'last message'),
(26, 'Admin', 'kyky');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
