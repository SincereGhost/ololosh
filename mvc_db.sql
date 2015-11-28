-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Ноя 28 2015 г., 09:57
-- Версия сервера: 5.5.46-0ubuntu0.14.04.2
-- Версия PHP: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `mvc_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `manager_user`
--

CREATE TABLE IF NOT EXISTS `manager_user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `manager_user`
--

INSERT INTO `manager_user` (`id`, `login`, `password`, `salt`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '');

-- --------------------------------------------------------

--
-- Структура таблицы `page`
--

CREATE TABLE IF NOT EXISTS `page` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` varchar(4000) NOT NULL,
  `description` varchar(4000) NOT NULL,
  `slider` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `page`
--

INSERT INTO `page` (`id`, `title`, `content`, `description`, `slider`, `url`) VALUES
(2, 'Контакты', '<p>icq: 199199538<br />\r\nskypeid: vitalyswipe<br />\r\nemail: vitalyswipe@gmail.com<br />\r\n&nbsp;</p>\r\n\r\n<p><iframe frameborder="0" height="450" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2565.2416473756552!2d36.34492830849187!3d49.98807882197655!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x41270989d06b70ef%3A0x1baf8cf84550c04e!2z0KHQsNC70YLRltCy0YHRjNC60LUg0YguLCAyNDIsINCl0LDRgNC60ZbQsiwg0KXQsNGA0LrRltCy0YHRjNC60LAg0L7QsdC70LDRgdGC0Yw!5e0!3m2!1sru!2sua!4v1445013262401" style="border:0" width="600"></iframe></p>\r\n', '<p>icq: 199199538<br />\r\nskypeid: vitalyswipe<br /...', '', 'contacts'),
(3, 'Главная', '<p>Nietzsche is a solid, well designed and unique template for agencies or inviduals looking to put their work forward in a professional and coherent manner. Built on our own solid framework, it comes with a range of prestyled modules and content blocks, several in-hosue developed plugins such as sliders, parallax sections, counters and much much more.</p>\r\n', '<p>Nietzsche is a solid, well designed and unique ...', '', 'glavnaya');

-- --------------------------------------------------------

--
-- Структура таблицы `portfolio`
--

CREATE TABLE IF NOT EXISTS `portfolio` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `content` varchar(4000) NOT NULL,
  `description` varchar(4000) NOT NULL,
  `url` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Дамп данных таблицы `portfolio`
--

INSERT INTO `portfolio` (`id`, `title`, `content`, `description`, `url`) VALUES
(11, 'Портфолио запись 1', '<p>Многие думают, что Lorem Ipsum - взятый с потолка псевдо-латинский набор слов, но это не совсем так. Его корни уходят в один фрагмент классической латыни 45 года н.э., то есть более двух тысячелетий назад. Ричард МакКлинток, профессор латыни из колледжа Hampden-Sydney, штат Вирджиния, взял одно из самых странных слов в Lorem Ipsum, &quot;consectetur&quot;, и занялся его поисками в классической латинской литературе. В результате он нашёл неоспоримый первоисточник Lorem Ipsum в разделах 1.10.32 и 1.10.33 книги &quot;de Finibus Bonorum et Malorum&quot; (&quot;О пределах добра и зла&quot;), написанной Цицероном в 45 году н.э. Этот трактат по теории этики был очень популярен в эпоху Возрождения. Первая строка Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, происходит от одной из строк в разделе 1.10.32</p>\r\n', '<p>Многие думают, что Lorem Ipsum - взятый с потол...', 'portpholio_zapis_1'),
(12, 'Портфолио запись 2', '<p>Многие думают, что Lorem Ipsum - взятый с потолка псевдо-латинский набор слов, но это не совсем так. Его корни уходят в один фрагмент классической латыни 45 года н.э., то есть более двух тысячелетий назад. Ричард МакКлинток, профессор латыни из колледжа Hampden-Sydney, штат Вирджиния, взял одно из самых странных слов в Lorem Ipsum, &quot;consectetur&quot;, и занялся его поисками в классической латинской литературе. В результате он нашёл неоспоримый первоисточник Lorem Ipsum в разделах 1.10.32 и 1.10.33 книги &quot;de Finibus Bonorum et Malorum&quot; (&quot;О пределах добра и зла&quot;), написанной Цицероном в 45 году н.э. Этот трактат по теории этики был очень популярен в эпоху Возрождения. Первая строка Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, происходит от одной из строк в разделе 1.10.32Многие думают, что Lorem Ipsum - взятый с потолка псевдо-латинский набор слов, но это не совсем так. Его корни уходят в один фрагмент классической латыни 45 года н.э., то есть более двух тысячелетий назад. Ричард МакКлинток, профессор латыни из колледжа Hampden-Sydney, штат Вирджиния, взял одно из самых странных слов в Lorem Ipsum, &quot;consectetur&quot;, и занялся его поисками в классической латинской литературе. В результате он нашёл неоспоримый первоисточник Lorem Ipsum в разделах 1.10.32 и 1.10.33 книги &quot;de Finibus Bonorum et Malorum&quot; (&quot;О пределах добра и зла&quot;), написанной Цицероном в 45 году н.э. Этот трактат по теории этики был очень популярен в эпоху Возрождения. Первая строка Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, происходит от одной из строк в разделе 1.10.32</p>\r\n', '<p>Многие думают, что Lorem Ipsum - взятый с потол...', 'portpholio_zapis_2'),
(14, 'Запись портфолио 4', '<p>фа ва фвыа фвыа фвыа</p>\r\n', '<p>фа ва фвыа фвыа фвыа</p>\r\n...', 'zapis_portpholio_4'),
(15, 'Портфолио запись 5', '<p>sdf sr kerk greklsjg klesrjg skergj klsjg ksrej klresjg lkjglkz &nbsp;jдл оыплкофулд поклуфп одлкфоуд лпоыкдлпо ылплдкп&nbsp;</p>\r\n', '<p>sdf sr kerk greklsjg klesrjg skergj klsjg ksrej...', 'portpholio_zapis_5'),
(16, 'Портфолио запись 6', '<p>qf e fllk lrkjf wf kljawkl fjklafj klawejf aklf jklaf jfkle w</p>\r\n', '<p>qf e fllk lrkjf wf kljawkl fjklafj klawejf aklf...', 'portpholio_zapis_6');

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` varchar(4000) NOT NULL,
  `description` varchar(4000) NOT NULL,
  `url` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `description`, `url`) VALUES
(1, 'Привет папа!', '<p>Соня была сегодня очень послушной собакой. Соня любимая собачка.</p>\r\n', '<p>Соня была сегодня очень послушной собакой. Соня...', 'privet_papochka');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
