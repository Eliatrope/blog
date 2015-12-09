-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 09 Décembre 2015 à 21:18
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `ib_blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `auteur` varchar(45) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `heure` varchar(255) NOT NULL,
  `fk_id_cate` int(11) NOT NULL,
  `fk_id_univ` int(11) NOT NULL,
  `fk_id_type` int(11) NOT NULL,
  `fk_id_user` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_id_cate_in_articles_idx` (`fk_id_cate`),
  KEY `ki_id_univ_in_articles_idx` (`fk_id_univ`),
  KEY `fk_id_type_in_articles_idx` (`fk_id_type`),
  KEY `fk_id_user_in_articles_idx` (`fk_id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `articles`
--

INSERT INTO `articles` (`id`, `nom`, `content`, `auteur`, `date`, `heure`, `fk_id_cate`, `fk_id_univ`, `fk_id_type`, `fk_id_user`) VALUES
(3, '“Can i go find a bush, I need to pee?”', '<h3>Zero, <span>Intoner</span> déchue</h3><!--Pas dynamique ici du fait que je n''ai pas enregistré ça dans la colonne content-->\r\n				<p>\r\n					<span>L</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer bibendum porttitor neque, eu vulputate dui venenatis sit amet. Proin blandit, ante sed porttitor sollicitudin, nunc nunc vehicula arcu, non varius dui lacus eu enim. Pellentesque et risus porta, tincidunt dui vel, blandit nisi. Morbi luctus, dolor at sollicitudin facilisis, nisl orci ullamcorper nisl, non blandit diam sapien nec justo. Ut vehicula dui felis, ut rutrum ipsum venenatis ut. Aenean ligula augue, tempus vel lorem vitae, dictum consectetur velit. Fusce faucibus libero massa, id dignissim elit lobortis quis. In vitae auctor sapien. In sed feugiat nisl. Vestibulum elementum sapien eget dolor pharetra, at tempor enim laoreet.				</p>\r\n				<figure>\r\n					<img src="asset/images/biblimedia/DOD3_Zero_CGI11.png" alt="" title=""/>\r\n					<figcaption><span>+</span></figcaption>\r\n				</figure>\r\n				<span class="littleresume">Rose, alias Zero</span>\r\n				<p>\r\n					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer bibendum porttitor neque, eu vulputate dui venenatis sit amet. Proin blandit, ante sed porttitor sollicitudin, nunc nunc vehicula arcu, non varius dui lacus eu enim. Pellentesque et risus porta, tincidunt dui vel, blandit nisi. Morbi luctus, dolor at sollicitudin facilisis, nisl orci ullamcorper nisl, non blandit diam sapien nec justo. Ut vehicula dui felis, ut rutrum ipsum venenatis ut. Aenean ligula augue, tempus vel lorem vitae, dictum consectetur velit. Fusce faucibus libero massa, id dignissim elit lobortis quis. In vitae auctor sapien. In sed feugiat nisl. Vestibulum elementum sapien eget dolor pharetra, at tempor enim laoreet.				</p>\r\n				<h3>\r\n					Alors, Mikhail ou Mickael ?\r\n				</h3>\r\n				<p>\r\n					<span>D</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer bibendum porttitor neque, eu vulputate dui venenatis sit amet. Proin blandit, ante sed porttitor sollicitudin, nunc nunc vehicula arcu, non varius dui lacus eu enim. Pellentesque et risus porta, tincidunt dui vel, blandit nisi. Morbi luctus, dolor at sollicitudin facilisis, nisl orci ullamcorper nisl, non blandit diam sapien nec justo. Ut vehicula dui felis, ut rutrum ipsum venenatis ut. Aenean ligula augue, tempus vel lorem vitae, dictum consectetur velit. Fusce faucibus libero massa, id dignissim elit lobortis quis. In vitae auctor sapien. In sed feugiat nisl. Vestibulum elementum sapien eget dolor pharetra, at tempor enim laoreet.				</p>\r\n', 'BALLA', '2015-12-09 18:56:22', '21h00', 2, 2, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `categories`
--

INSERT INTO `categories` (`id`, `nom`) VALUES
(1, 'film'),
(2, 'jeu vidéo'),
(3, 'livre'),
(4, 'anime'),
(5, 'série'),
(6, 'manga');

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

CREATE TABLE IF NOT EXISTS `commentaires` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text NOT NULL,
  `fk_id_user` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_id_user_in_comm_idx` (`fk_id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `types`
--

CREATE TABLE IF NOT EXISTS `types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `types`
--

INSERT INTO `types` (`id`, `nom`) VALUES
(1, 'article'),
(2, 'bibliotheque');

-- --------------------------------------------------------

--
-- Structure de la table `univers`
--

CREATE TABLE IF NOT EXISTS `univers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `blason` varchar(255) NOT NULL,
  `fk_id_cate` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_id_cate_in_univers_idx` (`fk_id_cate`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Contenu de la table `univers`
--

INSERT INTO `univers` (`id`, `nom`, `image`, `blason`, `fk_id_cate`) VALUES
(1, 'Bioshock', 'univers/bioshock.jpg', 'univers/blason/bioshock.png', 2),
(2, 'Drakengard', 'univers/drakengard.jpg', 'univers/blason/drakengard.png', 2),
(3, 'The Last of Us', 'univers/thelastofus.jpg', 'univers/blason/thelastofus.png', 2),
(4, 'Mirror&rsquo;s Edge', 'univers/mirrorsedge.jpg', 'univers/blason/mirrorsedge.png', 2),
(5, 'American Horror Story', 'univers/americanhorrorstory.jpg', 'univers/blason/americanhorrorstory.png', 5),
(6, 'American Horror Story', 'univers/americanhorrorstory.jpg', 'univers/blason/americanhorrorstory.png', 5),
(7, 'Bioshock', 'univers/bioshock.jpg', 'univers/blason/bioshock.png', 2),
(8, 'Drakengard', 'univers/drakengard.jpg', 'univers/blason/drakengard.png', 2),
(9, 'The Last of Us', 'univers/thelastofus.jpg', 'univers/blason/thelastofus.png', 2),
(10, 'Mirror&rsquo;s Edge', 'univers/mirrorsedge.jpg', 'univers/blason/mirrorsedge.png', 2),
(11, 'Bioshock', 'univers/bioshock.jpg', 'univers/blason/bioshock.png', 2);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `pseudo`, `password`, `role`, `avatar`) VALUES
(1, 'BALLA', 'cocacerise65', 'Admin', '.png');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `fk_id_cate_in_articles` FOREIGN KEY (`fk_id_cate`) REFERENCES `categories` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_id_type_in_articles` FOREIGN KEY (`fk_id_type`) REFERENCES `types` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_id_univ_in_articles` FOREIGN KEY (`fk_id_univ`) REFERENCES `univers` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_id_user_in_articles` FOREIGN KEY (`fk_id_user`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD CONSTRAINT `fk_id_user_in_comm` FOREIGN KEY (`fk_id_user`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `univers`
--
ALTER TABLE `univers`
  ADD CONSTRAINT `fk_id_cate_in_univers` FOREIGN KEY (`fk_id_cate`) REFERENCES `categories` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
