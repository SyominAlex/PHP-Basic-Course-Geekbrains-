-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 07 2020 г., 18:51
-- Версия сервера: 5.7.25
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
-- База данных: `gbphp_shop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `short_description` varchar(255) DEFAULT NULL,
  `description` text,
  `price` float DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `name`, `image`, `short_description`, `description`, `price`, `category_id`) VALUES
(1, 'Тест', 'no-photo.jpg', 'Краткое описание товара', 'Подробное описание товара', 100, 8),
(2, 'Смартфон 1', 'smartphone_001.jpg', 'Краткое описание 1', 'Описание 1', 200, 1),
(3, 'Смартфон 2', 'smartphone_002.jpg', 'Краткое описание 2', 'Описание 2', 300, 1),
(4, 'Телевизор LG 49LJ540V', 'tv-lg.jpg', '49\" (124 см) LED-телевизор LG 49LJ540V черный', 'LED-телевизор LG 49LJ540V с экраном в 49\", разрешение которого составляет 1920х1080. Такой экран обеспечит яркое, чёткое, реалистичное изображение и даст возможность получить максимум удовольствия от просмотра фильмов и телепередач. Телевизор оборудован аналоговым и цифровым тюнером. Вам не придётся приобретать дополнительное оборудование, чтобы смотреть передачи цифрового ТВ. В телевизоре присутствует технология Virtual Surround Plus, которая обеспечит Вам мощный и реалистичный объёмный звук. Технология Smart TV открывает телевизору доступ в интернет. Вы сможете смотреть видео с онлайн-ресурсов, пользоваться разнообразными приложениями. Разъёмы HDMI и USB позволят легко подключить к телевизору USB-накопители, проигрыватели дисков различного типа, а также другие устройства, чтобы воспроизводить видеоконтент на большом ярком экране.', 38999, 6),
(7, 'Пылесос', '20036974b5.jpg', 'Мощный мотор автоматически выключается при перегреве. Как только он остынет, то продолжит свою работу. ', 'Пылесос с контейнером Tefal Compact Power TW3731RA предназначен для проведения сухой уборки. Прибор укомплектован четырьмя разными насадками, которые помогут быстро и эффективно очистить ламинат, паркет, кафель, ковёр с коротким или длинным ворсом, мягкие диван и кресла, а также труднодоступные места, например, углы, от пыли и мусора', 6990, 9);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
