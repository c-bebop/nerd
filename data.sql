-- TODO: Timezone?!?!
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Table structure for table `products`
--

CREATE TABLE `talks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `title` varchar(256) NOT NULL,
  `url` varchar(1024) DEFAULT NULL,
  `image` varchar(1024) DEFAULT NULL,
  `votes` int(10) DEFAULT NULL,
  `host` varchar(256) NOT NULL,
  `description` varchar(140) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ;
