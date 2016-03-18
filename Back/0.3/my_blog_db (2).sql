-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 18 Mars 2016 à 15:26
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `my_blog_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `label` varchar(255) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Contenu de la table `category`
--

INSERT INTO `category` (`category_id`, `label`) VALUES
(1, 'evenement'),
(2, 'cours'),
(3, 'sport'),
(4, 'informatique'),
(5, 'cuisine'),
(6, 'bricolage'),
(7, 'jeux video'),
(8, 'electromenager'),
(9, 'vetement'),
(10, 'véhicules'),
(11, 'musique'),
(12, 'autre');

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`comment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Contenu de la table `comments`
--

INSERT INTO `comments` (`comment_id`, `user_id`, `post_id`, `comment`, `date_added`) VALUES
(9, 11, 21, 'Je suis intéressé peux tu me précisé les jeux vidéo en questions ?', '2016-03-16 08:56:09'),
(10, 12, 20, 'Je suis intéréssé \r\n', '2016-03-16 09:43:36'),
(11, 12, 31, 'azertyu', '2016-03-17 13:35:30'),
(12, 12, 31, 'azertyui', '2016-03-17 13:35:57'),
(13, 8, 48, 'azertyuik', '2016-03-18 09:37:58'),
(14, 8, 48, 'azertyuik', '2016-03-18 09:38:42'),
(15, 8, 47, 'azerftyjkl', '2016-03-18 09:48:00'),
(16, 12, 55, 'zertyujkl', '2016-03-18 09:58:05'),
(17, 16, 65, 'Je suis intéressée quelles sont des disponibilités ?', '2016-03-18 12:46:03'),
(18, 16, 64, 'J''ai une question, est ce que tu propose des cours de mathématiques ?', '2016-03-18 12:47:03'),
(19, 17, 64, 'Oui tout  à fait, envoi moi un mail avec ton emploi du temps en je te répondrais en conséquence.', '2016-03-18 12:48:32');

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `post_title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `post` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `active` int(11) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL,
  `category_id` varchar(255) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=74 ;

--
-- Contenu de la table `posts`
--

INSERT INTO `posts` (`post_id`, `post_title`, `post`, `active`, `date_added`, `user_id`, `category_id`) VALUES
(58, 'Jeux video', 'J''ai plusieurs jeux vidéo si ça intéresse quelqu''un. ', 1, '2016-03-18 10:59:56', 14, ''),
(59, 'Cuisine', 'Si quelqu''un souhaite que je lui prête des denrées alimentaires, qu''il me contacte par mail.', 1, '2016-03-18 11:02:07', 14, ''),
(64, 'Cours de soutient', 'Je propose des cours de soutient pour des personnes en difficultés.', 1, '2016-03-18 11:19:38', 17, ''),
(65, 'Cours de maths', 'Je propose des cours de mathématiques avancés.  ', 1, '2016-03-18 11:28:23', 17, ''),
(66, 'Sport', 'J''organise des matchs de football le samedi après midi', 1, '2016-03-18 11:33:03', 16, ''),
(73, 'Basketball', 'J''organise des entraînements de basketball', 1, '2016-03-18 14:21:27', 14, '3');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(4) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` enum('admin','author','user') NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`user_id`, `email`, `username`, `password`, `user_type`) VALUES
(3, 'author@gmail.com', 'author', 'f64cd8e32f5ac7553c150bd05d6f2252bb73f68d', 'author'),
(4, 'admin@gmail.com', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin'),
(6, 'aze@aze.com', 'aze', '9cf95dacd226dcf43da376cdb6cbba7035218921', 'user'),
(8, 'wxc@wxc.com', 'wxc', 'b766da2e10dffa1ec43773c3c5605e8c06ee491e', 'admin'),
(9, 'ert@ert.com', 'ert', '5484e54bf4a4ec6ddc26a6930c40f9f65db0bcff', 'user'),
(10, 'mahdi@stinson.com', 'mahdi', 'e3e97584a028189c3c27f040061771ecf3d8c4a6', 'admin'),
(11, 'qsd@qsd.com', 'qsd', '0dc9946c1158e7a9bdca0c59c98e89d559ffba8d', 'author'),
(12, 'dfg@dfg.com', 'dfg', 'd68be914fb9ab947593f2d7b291bad8e7f8893e8', 'author'),
(13, 'tyu@tyu.com', 'tyu', '70da75f4a4a5134de0c612b8a89c959063013a30', 'author'),
(14, 'ilyan.alouani@ynov.com', 'ilyan', '966cc9685774486385a228f90328c54bd8afd390', 'user'),
(16, 'neil@gmail.com', 'neil', '966cc9685774486385a228f90328c54bd8afd390', 'admin'),
(17, 'john@gmail.com', 'john', '966cc9685774486385a228f90328c54bd8afd390', 'author');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
