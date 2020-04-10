-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 14 2020 г., 18:56
-- Версия сервера: 10.3.13-MariaDB-log
-- Версия PHP: 7.1.32

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
-- Структура таблицы `basket`
--

CREATE TABLE `basket` (
  `id_basket` int(11) NOT NULL,
  `id_good` int(11) NOT NULL,
  `id_order` int(255) NOT NULL DEFAULT 1,
  `name` varchar(255) NOT NULL,
  `price` int(100) NOT NULL,
  `count` int(255) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `basket`
--

INSERT INTO `basket` (`id_basket`, `id_good`, `id_order`, `name`, `price`, `count`) VALUES
(41, 3, 1, 'Donier SP-12 PRO', 2300, 4),
(42, 2, 1, 'SP-CARBON PRO', 3900, 2),
(53, 1, 1, 'SP-BALSA PRO', 4300, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `item`
--

CREATE TABLE `item` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `desk` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `item`
--

INSERT INTO `item` (`id`, `name`, `path`, `price`, `desk`) VALUES
(1, 'SP-BALSA PRO', '../assets/images/img1.jpg', 4300, 'Высококачественная ракетка пинг-понга с профессиональным основанием. В этой ракетке используются профессиональные накладки для атакующих игроков Donier MAX ATTACK (ITTF) с толщиной губки 2.2 мм. Эти накладки обеспечивают не только высокую скорость, но и непревзойденный контроль мяча. Благодаря использованию бальзы в конструкции основания ракетка получилась очень легкой.\r\n\r\n'),
(2, 'SP-CARBON PRO', '../assets/images/img2.jpg', 3900, 'Атакующая ракетка соревновательного уровня с хорошим контролем мяча. Позволяет проводить мощные атаки, оказывая сильное давление на соперника. Два карбоновых слоя в основании придают дополнительную скорость и увеличивают пятно наилучшего отскока. В ракетке используются профессиональные накладки Donier МAX ATTACK (ITTF) с толщиной губки 2.2 мм, которые дают возможность атаковать топ-спинами, накатами и прямыми ударами. Ракетка также позволяет успешно защищаться.'),
(3, 'Donier SP-12 PRO', '../assets/images/img3.jpg', 2300, 'В этой ракетке гармонично сочетаются характеристики скорости и контроля. Специально подобранное пятислойное основание, в меру быстрое, с большой зоной наилучшего отскока. Ракетка Donier SP-12 PRO проявляет свои лучшие игровые характеристики в точной игре по месту и техничных атаках.');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id_order` int(255) NOT NULL,
  `id_basket` int(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `login` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `login`, `password`) VALUES
(11, 'Олег', 'hikarokayto5@gmail.com', 'admin', '21232f297a57a5a743894a0e4a801fc3145541evsikov145541'),
(12, 'Иван', 'dsfsdfsdfsd@mail.ru', 'user', 'ee11cbb19052e40b07aac0ca060c23ee145541evsikov145541'),
(13, 'Олег', 'evsikov@cmsplanet.ru', 'admin', '21232f297a57a5a743894a0e4a801fc3145541evsikov145541'),
(14, 'Oleg', '123@list.ru', 'user123', '6ad14ba9986e3615423dfca256d04e3f145541evsikov145541'),
(15, 'Oleg', '123@list.ru', 'user123', '6ad14ba9986e3615423dfca256d04e3f145541evsikov145541');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `basket`
--
ALTER TABLE `basket`
  ADD PRIMARY KEY (`id_basket`);

--
-- Индексы таблицы `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id_order`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `basket`
--
ALTER TABLE `basket`
  MODIFY `id_basket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT для таблицы `item`
--
ALTER TABLE `item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id_order` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
