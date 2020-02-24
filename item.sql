-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 03 2020 г., 00:46
-- Версия сервера: 8.0.15
-- Версия PHP: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `catalog`
--

-- --------------------------------------------------------

--
-- Структура таблицы `item`
--

CREATE TABLE `item` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `bigpath` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `desk` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `item`
--

INSERT INTO `item` (`id`, `name`, `path`, `bigpath`, `price`, `desk`) VALUES
(1, 'SP-BALSA PRO', 'img/img1.jpg', 'images/img1.jpg', 4300, 'Высококачественная ракетка пинг-понга с профессиональным основанием. В этой ракетке используются профессиональные накладки для атакующих игроков Donier MAX ATTACK (ITTF) с толщиной губки 2.2 мм. Эти накладки обеспечивают не только высокую скорость, но и непревзойденный контроль мяча. Благодаря использованию бальзы в конструкции основания ракетка получилась очень легкой.\r\n\r\n'),
(2, 'SP-CARBON PRO', 'img/img2.jpg', 'images/img2.jpg', 3900, 'Атакующая ракетка соревновательного уровня с хорошим контролем мяча. Позволяет проводить мощные атаки, оказывая сильное давление на соперника. Два карбоновых слоя в основании придают дополнительную скорость и увеличивают пятно наилучшего отскока. В ракетке используются профессиональные накладки Donier МAX ATTACK (ITTF) с толщиной губки 2.2 мм, которые дают возможность атаковать топ-спинами, накатами и прямыми ударами. Ракетка также позволяет успешно защищаться.'),
(3, 'Donier SP-12 PRO', 'img/img3.jpg', 'images/img3.jpg', 2300, 'В этой ракетке гармонично сочетаются характеристики скорости и контроля. Специально подобранное пятислойное основание, в меру быстрое, с большой зоной наилучшего отскока. Ракетка Donier SP-12 PRO проявляет свои лучшие игровые характеристики в точной игре по месту и техничных атаках.');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `item`
--
ALTER TABLE `item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
