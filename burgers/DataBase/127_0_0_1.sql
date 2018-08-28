-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 28 2018 г., 22:09
-- Версия сервера: 5.6.38
-- Версия PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `burgershop`
--
CREATE DATABASE IF NOT EXISTS `burgershop` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `burgershop`;

-- --------------------------------------------------------

--
-- Структура таблицы `Orders`
--

CREATE TABLE `Orders` (
  `orderID` int(11) NOT NULL,
  `clientID` int(11) DEFAULT NULL,
  `clientName` varchar(255) NOT NULL,
  `clientEmail` varchar(255) NOT NULL,
  `сomment` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `paymant` varchar(255) DEFAULT NULL,
  `callback` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Orders`
--

INSERT INTO `Orders` (`orderID`, `clientID`, `clientName`, `clientEmail`, `сomment`, `address`, `paymant`, `callback`) VALUES
(7, 4, 'Илья', 'ikustow@yandex.ru', NULL, NULL, NULL, NULL),
(8, 4, 'Илья', 'ikustow@yandex.ru', NULL, NULL, NULL, NULL),
(9, 4, 'Илья', 'ikustow@yandex.ru', NULL, NULL, NULL, NULL),
(10, 4, 'Илья', 'ikustow@yandex.ru', NULL, NULL, NULL, NULL),
(11, 4, 'Илья', 'ikustow@yandex.ru', NULL, NULL, NULL, NULL),
(12, 4, 'Илья', 'ikustow@yandex.ru', NULL, NULL, NULL, NULL),
(13, 4, 'Илья', 'ikustow@yandex.ru', NULL, NULL, NULL, NULL),
(14, 4, 'Илья', 'ikustow@yandex.ru', NULL, NULL, NULL, NULL),
(17, 7, 'Саша', 'kustova-photo@yandex.ru', NULL, NULL, NULL, NULL),
(18, 7, 'Саша', 'kustova-photo@yandex.ru', NULL, NULL, NULL, NULL),
(19, 4, 'Илья', 'ikustow@yandex.ru', NULL, NULL, NULL, NULL),
(20, 8, 'Кустов', 'ilya.kustov.90@mail.ru', NULL, NULL, NULL, NULL),
(21, 4, 'Илья', 'ikustow@yandex.ru', NULL, NULL, NULL, NULL),
(22, 4, 'Илья', 'ikustow@yandex.ru', NULL, NULL, NULL, NULL),
(23, 7, 'Саша', 'kustova-photo@yandex.ru', NULL, NULL, NULL, NULL),
(24, 7, 'Саша', 'kustova-photo@yandex.ru', NULL, NULL, NULL, NULL),
(25, 7, 'Саша', 'kustova-photo@yandex.ru', NULL, NULL, NULL, NULL),
(26, 4, 'Илья', 'ikustow@yandex.ru', NULL, NULL, NULL, NULL),
(27, 7, 'Саша', 'kustova-photo@yandex.ru', NULL, NULL, NULL, NULL),
(28, 4, 'Илья', 'ikustow@yandex.ru', NULL, NULL, NULL, NULL),
(29, 4, 'Илья', 'ikustow@yandex.ru', NULL, NULL, NULL, NULL),
(30, 7, 'Саша', 'kustova-photo@yandex.ru', NULL, NULL, NULL, NULL),
(31, 4, 'Илья', 'ikustow@yandex.ru', NULL, NULL, NULL, NULL),
(32, 7, 'Саша', 'kustova-photo@yandex.ru', NULL, NULL, NULL, NULL),
(33, 4, 'Илья', 'ikustow@yandex.ru', NULL, NULL, NULL, NULL),
(34, 7, 'Саша', 'kustova-photo@yandex.ru', NULL, NULL, NULL, NULL),
(35, 7, 'Саша', 'kustova-photo@yandex.ru', NULL, NULL, NULL, NULL),
(36, 4, 'Илья', 'ikustow@yandex.ru', NULL, NULL, NULL, NULL),
(37, 4, 'Илья', 'ikustow@yandex.ru', NULL, NULL, NULL, NULL),
(38, 4, 'Илья', 'ikustow@yandex.ru', NULL, NULL, NULL, NULL),
(39, 4, 'Илья', 'ikustow@yandex.ru', NULL, NULL, NULL, NULL),
(40, 4, 'Илья', 'ikustow@yandex.ru', NULL, NULL, NULL, NULL),
(41, 4, 'Илья', 'ikustow@yandex.ru', NULL, NULL, NULL, NULL),
(42, 7, 'Саша', 'kustova-photo@yandex.ru', NULL, NULL, NULL, NULL),
(43, 4, 'Илья', 'ikustow@yandex.ru', NULL, NULL, NULL, NULL),
(44, 4, 'Илья', 'ikustow@yandex.ru', '', 'проспект Ленина, д.25, кор.1, кв.14, эт.5', '', NULL),
(45, 4, 'Илья', 'ikustow@yandex.ru', '1213', 'проспект Ленина, д.25, кор.1, кв.14, эт.5', 'on', NULL),
(46, 4, 'Илья', 'ikustow@yandex.ru', '1321', 'проспект Ленина, д.25, кор.1, кв.14, эт.5', 'on', 'on');

-- --------------------------------------------------------

--
-- Структура таблицы `Users`
--

CREATE TABLE `Users` (
  `ID` int(11) NOT NULL,
  `client` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `orders` int(11) DEFAULT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Users`
--

INSERT INTO `Users` (`ID`, `client`, `email`, `orders`, `phone`, `address`) VALUES
(4, 'Илья', 'ikustow@yandex.ru', 25, '', ', д., кор., кв., эт.'),
(7, 'Саша', 'kustova-photo@yandex.ru', 11, '+7 (999) 999 99 99', 'проспект Ленина, д.25, кор.1, кв.14, эт.5'),
(8, 'Кустов', 'ilya.kustov.90@mail.ru', 1, '+7 (888) 888 88 88', 'проспект Ленина, д.25, кор.1, кв.14, эт.5');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `Orders`
--
ALTER TABLE `Orders`
  ADD PRIMARY KEY (`orderID`);

--
-- Индексы таблицы `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `Orders`
--
ALTER TABLE `Orders`
  MODIFY `orderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT для таблицы `Users`
--
ALTER TABLE `Users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
