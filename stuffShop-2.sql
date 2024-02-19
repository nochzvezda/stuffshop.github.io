-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:8889
-- Время создания: Фев 19 2024 г., 13:16
-- Версия сервера: 5.7.39
-- Версия PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `stuffShop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `employees`
--

CREATE TABLE `employees` (
  `id_employee` int(11) UNSIGNED NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `employees`
--

INSERT INTO `employees` (`id_employee`, `password`, `email`) VALUES
(2, '1234567890', 'admin@gmail.com'),
(3, '$2y$10$G7O1WK8mBhIwZ9A5wtGKT.UEHh6E5o4wrqYQypWlKY/ifD.pSr.tG', 'prostoclassann@gmail');

-- --------------------------------------------------------

--
-- Структура таблицы `img`
--

CREATE TABLE `img` (
  `id_img` int(11) NOT NULL,
  `name_img` varchar(255) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `img`
--

INSERT INTO `img` (`id_img`, `name_img`) VALUES
(2, '../img/k3.png'),
(3, '../img/k4.png'),
(4, 'img/20231016100010345.jpg'),
(5, 'img/20231016100015180.jpg'),
(6, 'img/20231016100031695.jpg'),
(7, 'img/20231016100218248.jpg'),
(8, 'img/20231016100311438.jpg'),
(9, 'img/20231016100326649.jpg'),
(10, 'img/20231016100442102.jpg'),
(11, 'img/20231016100636333.jpg'),
(12, 'img/20231016104129585.jpg'),
(13, 'img/20231016104705291.jpg'),
(14, 'img/20231016104705977.jpg'),
(15, 'img/20231016105601164.jpg'),
(16, 'img/20231016153320497.jpg'),
(17, 'img/20231016153320621.jpg'),
(18, 'img/20231016153518955.jpg'),
(19, 'img/20231016154125217.jpg'),
(20, 'img/20231016154734227.jpg'),
(21, 'img/20231016154734666.jpg'),
(22, '../img/k2.png'),
(23, 'img/20231016154810715.jpg'),
(24, '../img/k3.png'),
(25, '../img/k2.png'),
(26, '../img/k1.png'),
(27, 'img/20231016192553948.jpg'),
(28, 'img/20231016202405528.jpg'),
(29, 'img/20231016202405134.jpg'),
(30, 'img/20231028101324785.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `img_kids`
--

CREATE TABLE `img_kids` (
  `id_img` int(11) NOT NULL,
  `name_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `img_kids`
--

INSERT INTO `img_kids` (`id_img`, `name_img`) VALUES
(1, '../img/ki1.png'),
(2, '../img/ki2.png'),
(3, '../img/ki3.png'),
(4, '../img/ki4.png');

-- --------------------------------------------------------

--
-- Структура таблицы `img_men_cloth`
--

CREATE TABLE `img_men_cloth` (
  `id_img` int(11) NOT NULL,
  `name_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `img_men_cloth`
--

INSERT INTO `img_men_cloth` (`id_img`, `name_img`) VALUES
(1, '../img/m1.png'),
(2, '../img/m2.png'),
(3, '../img/m3.jpg'),
(4, '../img/m4.png');

-- --------------------------------------------------------

--
-- Структура таблицы `img_men_sneakers`
--

CREATE TABLE `img_men_sneakers` (
  `id_img` int(11) NOT NULL,
  `name_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `img_men_sneakers`
--

INSERT INTO `img_men_sneakers` (`id_img`, `name_img`) VALUES
(1, '../img/p1.png'),
(2, '../img/p2.png'),
(3, '../img/p3.png'),
(4, '../img/p4.png'),
(5, '../img/p5.png'),
(6, '../img/p7.png');

-- --------------------------------------------------------

--
-- Структура таблицы `img_product`
--

CREATE TABLE `img_product` (
  `id_img_product` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `id_img` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `img_product`
--

INSERT INTO `img_product` (`id_img_product`, `id_product`, `id_img`) VALUES
(3, 11, 26),
(15, 19, 22),
(17, 21, 24),
(20, 23, 3),
(21, 24, 2),
(22, 24, 28),
(24, 11, 25),
(25, 25, 26),
(26, 26, 25),
(27, 27, 26),
(28, 28, 3);

-- --------------------------------------------------------

--
-- Структура таблицы `img_product_kids`
--

CREATE TABLE `img_product_kids` (
  `id_img_product` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `id_img` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `img_product_kids`
--

INSERT INTO `img_product_kids` (`id_img_product`, `id_product`, `id_img`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 3),
(4, 4, 4),
(5, 5, 4),
(6, 6, 1),
(7, 7, 2),
(8, 8, 3),
(9, 9, 4);

-- --------------------------------------------------------

--
-- Структура таблицы `img_product_men_cloth`
--

CREATE TABLE `img_product_men_cloth` (
  `id_img_product` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `id_img` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `img_product_men_cloth`
--

INSERT INTO `img_product_men_cloth` (`id_img_product`, `id_product`, `id_img`) VALUES
(1, 1, 2),
(2, 2, 1),
(3, 3, 4),
(4, 5, 1),
(5, 6, 2),
(6, 7, 1),
(7, 8, 2),
(8, 9, 3),
(9, 4, 3);

-- --------------------------------------------------------

--
-- Структура таблицы `img_product_men_sneakers`
--

CREATE TABLE `img_product_men_sneakers` (
  `id_img_product` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `id_img` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `img_product_men_sneakers`
--

INSERT INTO `img_product_men_sneakers` (`id_img_product`, `id_product`, `id_img`) VALUES
(1, 1, 2),
(2, 2, 1),
(3, 3, 3),
(4, 4, 4),
(5, 5, 5),
(6, 6, 6),
(7, 7, 1),
(8, 8, 2),
(9, 9, 4);

-- --------------------------------------------------------

--
-- Структура таблицы `img_product_women_cloth`
--

CREATE TABLE `img_product_women_cloth` (
  `id_img_product` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `id_img` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `img_product_women_cloth`
--

INSERT INTO `img_product_women_cloth` (`id_img_product`, `id_product`, `id_img`) VALUES
(1, 1, 2),
(2, 2, 1),
(3, 3, 3),
(4, 4, 4),
(5, 5, 6),
(6, 6, 5),
(7, 7, 7),
(8, 8, 1),
(9, 9, 2),
(10, 8, 3),
(11, 10, 3),
(12, 11, 4),
(13, 12, 5);

-- --------------------------------------------------------

--
-- Структура таблицы `img_product_women_sneakers`
--

CREATE TABLE `img_product_women_sneakers` (
  `id_img_product` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `id_img` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `img_product_women_sneakers`
--

INSERT INTO `img_product_women_sneakers` (`id_img_product`, `id_product`, `id_img`) VALUES
(1, 1, 2),
(2, 1, 1),
(3, 3, 3),
(4, 4, 4),
(5, 5, 5),
(6, 6, 6),
(7, 7, 2),
(8, 8, 1),
(9, 9, 5),
(10, 2, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `img_women_cloth`
--

CREATE TABLE `img_women_cloth` (
  `id_img` int(11) NOT NULL,
  `name_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `img_women_cloth`
--

INSERT INTO `img_women_cloth` (`id_img`, `name_img`) VALUES
(1, '../img/w1.png'),
(2, '../img/w2.png'),
(3, '../img/w3.png'),
(4, '../img/w4.png'),
(5, '../img/w5.png'),
(6, '../img/w6.png'),
(7, '../img/w7.png');

-- --------------------------------------------------------

--
-- Структура таблицы `img_women_sneakers`
--

CREATE TABLE `img_women_sneakers` (
  `id_img` int(11) NOT NULL,
  `name_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `img_women_sneakers`
--

INSERT INTO `img_women_sneakers` (`id_img`, `name_img`) VALUES
(1, '../img/wo1.png'),
(2, '../img/wo2.png'),
(3, '../img/wo1.png'),
(4, '../img/p1.png'),
(5, '../img/p4.png'),
(6, '../img/p5.png');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id_order` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_status` int(11) NOT NULL,
  `id_product` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id_order`, `id_user`, `id_status`, `id_product`) VALUES
(2, 15, 2, 23),
(4, 3, 1, 19),
(5, 15, 1, 11),
(7, 3, 2, 24);

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id_product` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `price` int(200) NOT NULL,
  `description` varchar(500) CHARACTER SET utf8mb4 NOT NULL,
  `name_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id_product`, `name`, `price`, `description`, `name_img`) VALUES
(11, 'Кроссовки Adidas originals Yeezy boost 500 “utillity black”', 1111, 'Винтажные баскетбольные кроссовки Nike Court Borough Low 2 SE для самых юных сникерхедов. Верх пары сделан из сочетания натуральной и искусственной кожи, что позволяет балансировать между мягкостью и износостойкостью. Плотность посадки контролируется с помощью шнуровки и застежки на липучке. ', '../img/k1.png'),
(19, 'Кроссовки Nike Air Jordan 1 High', 1000, 'frtgrВинтажные баскетбольные кроссовки Nike Court Borough Low 2 SE для самых юных сникерхедов. Верх пары сделан из сочетания натуральной и искусственной кожи, что позволяет балансировать между мягкостью и износостойкостью. Плотность посадки контролируется с помощью шнуровки и застежки на липучке. ', '../img/k2.png'),
(21, 'Кроссовки Nike Air Jordan 1 low', 2000, 'frtgr Винтажные баскетбольные кроссовки Nike Court Borough Low 2 SE для самых юных сникерхедов. Верх пары сделан из сочетания натуральной и искусственной кожи, что позволяет балансировать между мягкостью и износостойкостью. Плотность посадки контролируется с помощью шнуровки и застежки на липучке. ', '../img/k3.png'),
(23, 'Кроссовки Nike Air Jordan 1 low', 3400, 'fv Винтажные баскетбольные кроссовки Nike Court Borough Low 2 SE для самых юных сникерхедов. Верх пары сделан из сочетания натуральной и искусственной кожи, что позволяет балансировать между мягкостью и износостойкостью. Плотность посадки контролируется с помощью шнуровки и застежки на липучке. ', '../img/k4.png'),
(24, 'Кроссовки Nike Air Jordan 1 low', 5452, 'etgvr Винтажные баскетбольные кроссовки Nike Court Borough Low 2 SE для самых юных сникерхедов. Верх пары сделан из сочетания натуральной и искусственной кожи, что позволяет балансировать между мягкостью и износостойкостью. Плотность посадки контролируется с помощью шнуровки и застежки на липучке. ', '../img/k5.png'),
(25, 'Кроссовки Nike Air Jordan 1 low', 22200, 'Винтажные баскетбольные кроссовки Nike Court Borough Low 2 SE для самых юных сникерхедов. Верх пары сделан из сочетания натуральной и искусственной кожи, что позволяет балансировать между мягкостью и износостойкостью. Плотность посадки контролируется с помощью шнуровки и застежки на липучке. ', '../img/k4.png'),
(26, 'Кроссовки Adidas originals Yeezy boost 500 “utillity black”', 1100, 'Винтажные баскетбольные кроссовки Nike Court Borough Low 2 SE для самых юных сникерхедов. Верх пары сделан из сочетания натуральной и искусственной кожи, что позволяет балансировать между мягкостью и износостойкостью. Плотность посадки контролируется с помощью шнуровки и застежки на липучке. ', '../img/k6.png'),
(27, 'Кроссовки Adidas originals Yeezy boost 500 “utillity black”', 15000, 'Винтажные баскетбольные кроссовки Nike Court Borough Low 2 SE для самых юных сникерхедов. Верх пары сделан из сочетания натуральной и искусственной кожи, что позволяет балансировать между мягкостью и износостойкостью. Плотность посадки контролируется с помощью шнуровки и застежки на липучке. ', '../img/k1.png'),
(28, 'Кроссовки Adidas originals Yeezy boost 500 “utillity black”', 28299, 'Винтажные баскетбольные кроссовки Nike Court Borough Low 2 SE для самых юных сникерхедов. Верх пары сделан из сочетания натуральной и искусственной кожи, что позволяет балансировать между мягкостью и износостойкостью. Плотность посадки контролируется с помощью шнуровки и застежки на липучке. ', '../img/k3.png');

-- --------------------------------------------------------

--
-- Структура таблицы `products_kids_cloth`
--

CREATE TABLE `products_kids_cloth` (
  `id_product` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(200) NOT NULL,
  `description` varchar(255) NOT NULL,
  `name_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products_kids_cloth`
--

INSERT INTO `products_kids_cloth` (`id_product`, `name`, `price`, `description`, `name_img`) VALUES
(1, 'Куртка для девочки The North Face Pumori Down Parka', 10000, 'Куртка для девочки The North Face Pumori Down Parka', '../img/ki1.png'),
(2, 'Куртка для девочки The North Face Pumori Down Parka', 22000, 'Куртка для девочки The North Face Pumori Down Parka', '../img/ki2.png'),
(3, 'свитшот Nike Style Fleece champion', 3000, 'свитшот Nike Style Fleece champion', '../img/ki3.png'),
(4, 'свитшот Nike Style Fleece champion', 5000, 'свитшот Nike Style Fleece champion', '../img/ki4.png'),
(5, 'свитшот Nike Style Fleece champion', 12000, 'свитшот Nike Style Fleece champion', '../img/ki4.png'),
(6, 'свитшот Nike Style Fleece champion', 20000, 'свитшот Nike Style Fleece champion', '../img/ki1.png'),
(7, 'куртка The North Face Pumori Down Parka', 23000, 'куртка The North Face Pumori Down Parka', '../img/ki2.png'),
(8, 'куртка The North Face Pumori Down Parka', 20000, 'куртка The North Face Pumori Down Parka', '../img/ki3.png'),
(9, 'свитшот Nike Style Fleece champion', 3000, 'свитшот Nike Style Fleece champion', '../img/ki4.png');

-- --------------------------------------------------------

--
-- Структура таблицы `products_men_cloth`
--

CREATE TABLE `products_men_cloth` (
  `id_product` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(200) NOT NULL,
  `description` varchar(500) NOT NULL,
  `name_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products_men_cloth`
--

INSERT INTO `products_men_cloth` (`id_product`, `name`, `price`, `description`, `name_img`) VALUES
(1, 'Nike Sportswear Collection Essentials Fleece Hoody', 8990, 'Винтажные баскетбольные кроссовки Nike Court Borough Low 2 SE для самых юных сникерхедов. Верх пары сделан из сочетания натуральной и искусственной кожи, что позволяет балансировать между мягкостью и износостойкостью. Плотность посадки контролируется с помощью шнуровки и застежки на липучке. ', '../img/m2.png'),
(2, 'Nike Sportswear Collection Essentials Fleece Hoody', 5990, 'Nike Sportswear Collection Essentials Fleece Hoody Винтажные баскетбольные кроссовки Nike Court Borough Low 2 SE для самых юных сникерхедов. Верх пары сделан из сочетания натуральной и искусственной кожи, что позволяет балансировать между мягкостью и износостойкостью. Плотность посадки контролируется с помощью шнуровки и застежки на липучке. ', '../img/m1.png'),
(3, 'Мужская куртка The North Face Pumori Down Parka', 15290, 'Мужская куртка The North Face Pumori Down Parka', '../img/m4.png'),
(4, 'Мужская куртка The North Face Pumori Down Parka', 31900, 'Мужская куртка The North Face Pumori Down Parka', '../img/m3.jpg'),
(5, 'Nike Sportswear Collection Essentials Fleece Hoody', 12990, 'Nike Sportswear Collection Essentials Fleece Hoody', '../img/m1.png'),
(6, 'Мужская куртка The North Face Pumori Down Parka', 12990, 'Мужская куртка The North Face Pumori Down Parka', '../img/m2.png'),
(7, 'Nike Sportswear Collection Essentials Fleece Hoody', 8990, 'Nike Sportswear Collection Essentials Fleece Hoody', '../img/m1.png'),
(8, 'Nike Sportswear Collection Essentials Fleece Hoody', 8990, 'Nike Sportswear Collection Essentials Fleece Hoody', '../img/m2.png'),
(9, 'Мужская куртка The North Face Pumori Down Parka', 8990, 'Мужская куртка The North Face Pumori Down Parka', '../img/m3.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `products_men_sneakers`
--

CREATE TABLE `products_men_sneakers` (
  `id_product` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(200) NOT NULL,
  `description` varchar(255) NOT NULL,
  `name_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products_men_sneakers`
--

INSERT INTO `products_men_sneakers` (`id_product`, `name`, `price`, `description`, `name_img`) VALUES
(1, 'Кроссовки Nike Air Jordan 1 low', 18990, 'Кроссовки Nike Air Jordan 1 low', '../img/p2.png'),
(2, 'Кроссовки Nike Air Jordan 1 low', 15990, 'Кроссовки Nike Air Jordan 1 low', '../img/p1.png'),
(3, 'Кроссовки Nike Dunk PRO', 18990, 'Кроссовки Nike Dunk PRO', '../img/p3.png'),
(4, 'Кроссовки Nike Jordan “utillity black”', 26990, 'Кроссовки Nike Jordan “utillity black”', '../img/p4.png'),
(5, 'Кроссовки Adidas originals Yeezy boost 500 “utillity black”', 28990, 'Кроссовки Adidas originals Yeezy boost 500 “utillity black”', '../img/p5.png'),
(6, 'Кроссовки Nike Air Jordan 1 High', 18990, 'Кроссовки Nike Air Jordan 1 High', '../img/p7.png'),
(7, 'Кроссовки Nike Air Jordan 1 low', 12990, 'Кроссовки Nike Air Jordan 1 low', '../img/p1.png'),
(8, 'Кроссовки Nike Air Jordan 1 low', 12990, 'Кроссовки Nike Air Jordan 1 low', '../img/p2.png'),
(9, 'Кроссовки Nike Dunk PRO', 18800, 'Кроссовки Nike Dunk PRO', '../img/p4.png');

-- --------------------------------------------------------

--
-- Структура таблицы `products_women_cloth`
--

CREATE TABLE `products_women_cloth` (
  `id_product` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(200) NOT NULL,
  `description` varchar(255) NOT NULL,
  `name_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products_women_cloth`
--

INSERT INTO `products_women_cloth` (`id_product`, `name`, `price`, `description`, `name_img`) VALUES
(1, 'Nike Sportswear Collection Essentials Fleece Hoody', 8290, 'Nike Sportswear Collection Essentials Fleece Hoody', '../img/w2.png'),
(2, 'свитшот Nike Style Fleece champion', 9990, 'свитшот Nike Style Fleece champion', '../img/w1.png'),
(3, 'свитшот Nike Style Fleece champion', 5990, 'свитшот Nike Style Fleece champion', '../img/w3.png'),
(4, 'свитшот Nike Style Fleece champion', 8990, 'свитшот Nike Style Fleece champion', '../img/w4.png'),
(5, 'Nike Sportswear Collection Essentials Fleece Hoody', 6990, 'Nike Sportswear Collection Essentials Fleece Hoody', '../img/w6.png'),
(6, 'Nike Sportswear Collection Essentials Fleece Hoody', 8990, 'Nike Sportswear Collection Essentials Fleece Hoody', '../img/w5.png'),
(7, 'свитшот Nike Style Fleece champion', 5990, 'свитшот Nike Style Fleece champion', '../img/w7.png'),
(8, 'свитшот Nike Style Fleece champion', 2990, 'свитшот Nike Style Fleece champion', '../img/w1.png'),
(9, 'свитшот Nike Style Fleece champion', 12900, 'свитшот Nike Style Fleece champion', '../img/w2.png'),
(10, 'свитшот Nike Style Fleece champion', 2990, 'свитшот Nike Style Fleece champion', '../img/w3.png'),
(11, 'Nike Sportswear Collection Essentials Fleece Hoody', 18900, 'Nike Sportswear Collection Essentials Fleece Hoody', '../img/w4.png'),
(12, 'Nike Sportswear Collection Essentials Fleece Hoody', 29990, 'Nike Sportswear Collection Essentials Fleece Hoody', '../img/w5.png');

-- --------------------------------------------------------

--
-- Структура таблицы `products_women_sneakers`
--

CREATE TABLE `products_women_sneakers` (
  `id_product` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(200) NOT NULL,
  `description` varchar(255) NOT NULL,
  `name_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products_women_sneakers`
--

INSERT INTO `products_women_sneakers` (`id_product`, `name`, `price`, `description`, `name_img`) VALUES
(1, 'Кроссовки Nike Air Jordan 1 low', 15990, 'Кроссовки Nike Air Jordan 1 low', '../img/wo2.png'),
(2, 'Кроссовки Nike Dunk PRO', 18990, 'Кроссовки Nike Dunk PRO', '../img/wo1.png'),
(3, 'Кроссовки Nike Jordan “utillity black”', 14290, 'Кроссовки Nike Jordan “utillity black”', '../img/wo3.png'),
(4, 'Кроссовки Nike Jordan “utillity black”', 14290, 'Кроссовки Nike Jordan “utillity black”', '../img/wo2.png'),
(5, 'Кроссовки Adidas originals Yeezy boost 500 “utillity black”', 12990, 'Кроссовки Adidas originals Yeezy boost 500 “utillity black”', '../img/p4.png'),
(6, 'Кроссовки Nike Air Jordan 1 High', 18990, 'Кроссовки Nike Air Jordan 1 High', '../img/p5.png'),
(7, 'Кроссовки Nike Air Jordan 1 low', 15290, 'Кроссовки Nike Air Jordan 1 low', '../img/wo1.png'),
(8, 'Кроссовки Nike Air Jordan 1 low', 18990, 'Кроссовки Nike Air Jordan 1 low', '../img/p1.png'),
(9, 'Кроссовки Nike Air Jordan 1 low', 15990, 'Кроссовки Nike Air Jordan 1 low', '../img/wo2.png');

-- --------------------------------------------------------

--
-- Структура таблицы `status`
--

CREATE TABLE `status` (
  `id_status` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `status`
--

INSERT INTO `status` (`id_status`, `status`) VALUES
(1, 'не доставлен'),
(2, 'доставлен');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id_user`, `password`, `email`) VALUES
(3, '', 'qqqq@qwerty'),
(4, '', 'q@qwert'),
(15, '$2y$10$tULLgWsfS5Td6nQvROz5GOzwuder5f.hUltIo3kdLZ4tlq9257RX6', 'qaz@qaz'),
(17, '$2y$10$0.X8W2N1l018oOnVTl/FLut6cgxEqKpjDAFDfECc2tdf3u1IkthsS', 'test@yandex.com'),
(18, '$2y$10$eo/ek24T17s9SXJkKRY.1uEyNNwFKWxkTV0MUfzbvDpGr/1c2TOiW', 'asdf@asdf.ru');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id_employee`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Индексы таблицы `img`
--
ALTER TABLE `img`
  ADD PRIMARY KEY (`id_img`);

--
-- Индексы таблицы `img_kids`
--
ALTER TABLE `img_kids`
  ADD PRIMARY KEY (`id_img`);

--
-- Индексы таблицы `img_men_cloth`
--
ALTER TABLE `img_men_cloth`
  ADD PRIMARY KEY (`id_img`);

--
-- Индексы таблицы `img_men_sneakers`
--
ALTER TABLE `img_men_sneakers`
  ADD PRIMARY KEY (`id_img`);

--
-- Индексы таблицы `img_product`
--
ALTER TABLE `img_product`
  ADD PRIMARY KEY (`id_img_product`),
  ADD KEY `id_product` (`id_product`),
  ADD KEY `id_img` (`id_img`);

--
-- Индексы таблицы `img_product_kids`
--
ALTER TABLE `img_product_kids`
  ADD PRIMARY KEY (`id_img_product`),
  ADD KEY `id_product` (`id_product`),
  ADD KEY `id_img` (`id_img`);

--
-- Индексы таблицы `img_product_men_cloth`
--
ALTER TABLE `img_product_men_cloth`
  ADD PRIMARY KEY (`id_img_product`),
  ADD KEY `id_img` (`id_img`),
  ADD KEY `id_product` (`id_product`);

--
-- Индексы таблицы `img_product_men_sneakers`
--
ALTER TABLE `img_product_men_sneakers`
  ADD PRIMARY KEY (`id_img_product`),
  ADD KEY `id_img` (`id_img`),
  ADD KEY `id_product` (`id_product`);

--
-- Индексы таблицы `img_product_women_cloth`
--
ALTER TABLE `img_product_women_cloth`
  ADD PRIMARY KEY (`id_img_product`),
  ADD KEY `id_img` (`id_img`),
  ADD KEY `id_product` (`id_product`);

--
-- Индексы таблицы `img_product_women_sneakers`
--
ALTER TABLE `img_product_women_sneakers`
  ADD PRIMARY KEY (`id_img_product`),
  ADD KEY `id_product` (`id_product`),
  ADD KEY `id_img` (`id_img`);

--
-- Индексы таблицы `img_women_cloth`
--
ALTER TABLE `img_women_cloth`
  ADD PRIMARY KEY (`id_img`);

--
-- Индексы таблицы `img_women_sneakers`
--
ALTER TABLE `img_women_sneakers`
  ADD PRIMARY KEY (`id_img`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_status` (`id_status`),
  ADD KEY `id_product` (`id_product`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_product`);

--
-- Индексы таблицы `products_kids_cloth`
--
ALTER TABLE `products_kids_cloth`
  ADD PRIMARY KEY (`id_product`);

--
-- Индексы таблицы `products_men_cloth`
--
ALTER TABLE `products_men_cloth`
  ADD PRIMARY KEY (`id_product`);

--
-- Индексы таблицы `products_men_sneakers`
--
ALTER TABLE `products_men_sneakers`
  ADD PRIMARY KEY (`id_product`);

--
-- Индексы таблицы `products_women_cloth`
--
ALTER TABLE `products_women_cloth`
  ADD PRIMARY KEY (`id_product`);

--
-- Индексы таблицы `products_women_sneakers`
--
ALTER TABLE `products_women_sneakers`
  ADD PRIMARY KEY (`id_product`);

--
-- Индексы таблицы `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_status`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `employees`
--
ALTER TABLE `employees`
  MODIFY `id_employee` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `img`
--
ALTER TABLE `img`
  MODIFY `id_img` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT для таблицы `img_kids`
--
ALTER TABLE `img_kids`
  MODIFY `id_img` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `img_men_cloth`
--
ALTER TABLE `img_men_cloth`
  MODIFY `id_img` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `img_men_sneakers`
--
ALTER TABLE `img_men_sneakers`
  MODIFY `id_img` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `img_product`
--
ALTER TABLE `img_product`
  MODIFY `id_img_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT для таблицы `img_product_kids`
--
ALTER TABLE `img_product_kids`
  MODIFY `id_img_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `img_product_men_cloth`
--
ALTER TABLE `img_product_men_cloth`
  MODIFY `id_img_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `img_product_men_sneakers`
--
ALTER TABLE `img_product_men_sneakers`
  MODIFY `id_img_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `img_product_women_cloth`
--
ALTER TABLE `img_product_women_cloth`
  MODIFY `id_img_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `img_product_women_sneakers`
--
ALTER TABLE `img_product_women_sneakers`
  MODIFY `id_img_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `img_women_cloth`
--
ALTER TABLE `img_women_cloth`
  MODIFY `id_img` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `img_women_sneakers`
--
ALTER TABLE `img_women_sneakers`
  MODIFY `id_img` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT для таблицы `products_kids_cloth`
--
ALTER TABLE `products_kids_cloth`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `products_men_cloth`
--
ALTER TABLE `products_men_cloth`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `products_men_sneakers`
--
ALTER TABLE `products_men_sneakers`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `products_women_cloth`
--
ALTER TABLE `products_women_cloth`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `products_women_sneakers`
--
ALTER TABLE `products_women_sneakers`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `status`
--
ALTER TABLE `status`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `img_product`
--
ALTER TABLE `img_product`
  ADD CONSTRAINT `img_product_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `products` (`id_product`),
  ADD CONSTRAINT `img_product_ibfk_2` FOREIGN KEY (`id_img`) REFERENCES `img` (`id_img`);

--
-- Ограничения внешнего ключа таблицы `img_product_kids`
--
ALTER TABLE `img_product_kids`
  ADD CONSTRAINT `img_product_kids_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `products_kids_cloth` (`id_product`),
  ADD CONSTRAINT `img_product_kids_ibfk_2` FOREIGN KEY (`id_img`) REFERENCES `img_kids` (`id_img`);

--
-- Ограничения внешнего ключа таблицы `img_product_men_cloth`
--
ALTER TABLE `img_product_men_cloth`
  ADD CONSTRAINT `img_product_men_cloth_ibfk_1` FOREIGN KEY (`id_img`) REFERENCES `img_men_cloth` (`id_img`),
  ADD CONSTRAINT `img_product_men_cloth_ibfk_2` FOREIGN KEY (`id_product`) REFERENCES `products_men_cloth` (`id_product`);

--
-- Ограничения внешнего ключа таблицы `img_product_men_sneakers`
--
ALTER TABLE `img_product_men_sneakers`
  ADD CONSTRAINT `img_product_men_sneakers_ibfk_1` FOREIGN KEY (`id_img`) REFERENCES `img_men_sneakers` (`id_img`),
  ADD CONSTRAINT `img_product_men_sneakers_ibfk_2` FOREIGN KEY (`id_product`) REFERENCES `products_men_sneakers` (`id_product`);

--
-- Ограничения внешнего ключа таблицы `img_product_women_cloth`
--
ALTER TABLE `img_product_women_cloth`
  ADD CONSTRAINT `img_product_women_cloth_ibfk_1` FOREIGN KEY (`id_img`) REFERENCES `img_women_cloth` (`id_img`),
  ADD CONSTRAINT `img_product_women_cloth_ibfk_2` FOREIGN KEY (`id_product`) REFERENCES `products_women_cloth` (`id_product`);

--
-- Ограничения внешнего ключа таблицы `img_product_women_sneakers`
--
ALTER TABLE `img_product_women_sneakers`
  ADD CONSTRAINT `img_product_women_sneakers_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `products_women_sneakers` (`id_product`),
  ADD CONSTRAINT `img_product_women_sneakers_ibfk_2` FOREIGN KEY (`id_img`) REFERENCES `img_women_sneakers` (`id_img`);

--
-- Ограничения внешнего ключа таблицы `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`id_status`) REFERENCES `status` (`id_status`),
  ADD CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`id_product`) REFERENCES `products` (`id_product`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
