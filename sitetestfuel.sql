-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3307
-- Généré le : Dim 09 mai 2021 à 18:49
-- Version du serveur :  10.4.13-MariaDB
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `sitetestfuel`
--

CREATE DATABASE IF NOT EXISTS `sitetestfuel`
/*!40100 DEFAULT CHARACTER SET utf8 */;
USE `sitetestfuel`;

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `title`, `content`, `created_at`, `user_id`) VALUES
(9, 'Article de Tom', 'Lorem Ipsum is simply  simply dummy text  ttt of the printing and typesetting industry. Lorem Ipsum has been the industry\\\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2021-05-09 17:45:31', 8),
(8, 'Article de Jean', 'Nam dignissim, massa non varius elementum, diam nibh tempus nunc, ac volutpat justo odio sit amet nibh. Pellentesque tempor laoreet quam, id bibendum libero consequat nec. Cras id tellus tellus. Donec dui orci, efficitur at scelerisque a, sollicitudin a eros. Praesent placerat, nunc vel pulvinar condimentum, justo tortor pulvinar ipsum, non pulvinar leo elit non sapien. Aenean at turpis ac metus sagittis gravida vitae non enim. Praesent tristique nunc vitae eros fermentum, nec rutrum leo scelerisque. Etiam non rutrum nibh, quis fermentum lorem. Vestibulum et ante posuere, aliquam nunc quis, porta augue. Nunc auctor, felis vitae pellentesque sodales, felis dolor pretium est, tincidunt iaculis justo purus sit amet massa. Integer sed efficitur urna. In pharetra non lorem quis pretium. Suspendisse in elit orci. Vivamus luctus lacinia pellentesque. Maecenas sodales dui ac imperdiet pretium. Integer at dolor a ipsum imperdiet consectetur.', '2021-05-09 17:12:48', 6),
(7, 'Un second article', 'Pellentesque et velit eu sapien volutpat interdum. Aliquam placerat accumsan convallis. Sed eget orci felis. Ut molestie sagittis magna, in ultrices arcu convallis a. Cras non ante et velit facilisis rhoncus. Aenean posuere nisl elit, quis finibus tellus interdum at. Proin sed congue metus. Sed viverra placerat sodales. Sed mattis elit in urna gravida ultrices. Nullam ac erat a justo ornare luctus. Quisque lobortis venenatis ipsum ut gravida.', '2021-05-09 17:10:30', 5),
(6, 'Un article', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut molestie pharetra semper. Curabitur id faucibus lorem, sed scelerisque nisl. Integer tempus at eros non consequat. Sed mattis, purus at dapibus placerat, enim enim dapibus enim, ut faucibus nisl odio a purus. Quisque luctus at magna suscipit euismod. In arcu quam, ultrices et turpis in, fermentum iaculis quam. Nunc eget rutrum eros. Maecenas suscipit dapibus massa, quis laoreet tellus semper at. Suspendisse non nibh eu urna mollis condimentum. In venenatis enim et nunc ornare egestas. Maecenas eleifend elit nec facilisis interdum. Nam ut ligula massa. Mauris semper faucibus nulla vel pellentesque.</p>\r\n<p>\r\nAenean libero orci, accumsan nec viverra ut, egestas sit amet felis. Curabitur et condimentum eros, id pretium ligula. Cras dignissim ac leo sit amet euismod. In hac habitasse platea dictumst. Curabitur ut neque molestie, facilisis nunc a, auctor mauris. Nunc vel hendrerit nibh. Nam rhoncus ligula id dolor fringilla, eu malesuada risus finibus. Integer risus orci, pellentesque et aliquam et, hendrerit eu lectus. Suspendisse ex sapien, cursus nec sodales nec, ultricies id nulla. Curabitur tristique turpis at neque accumsan, ac malesuada elit rhoncus. Suspendisse a tempor est. Praesent sed nunc in felis tincidunt elementum. Nunc aliquet sagittis felis, id iaculis arcu accumsan vitae. Sed sed nulla mi. Donec malesuada felis urna.</p>', '2021-05-09 17:09:52', 5),
(10, 'Article de Tintin', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\\\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', '2021-05-09 18:09:48', 9),
(11, 'Article de Didier', 'Lorem ipsum dolor dolor sit amet, consectetur adipiscing elit. Proin in consequat purus. Aliquam at aliquam nulla, et ultricies massa. Aliquam eget purus tincidunt, auctor leo et, sodales urna. Vestibulum ac bibendum nunc. In auctor tellus non ante molestie aliquam. Nunc efficitur imperdiet sem, lacinia eleifend lorem porttitor ac. Morbi interdum, lacus eget ultricies mattis, sem tellus blandit odio, et tristique sapien metus at libero. Nunc eu vulputate ipsum. Vestibulum id augue feugiat, aliquam urna et, accumsan est. Maecenas faucibus hendrerit ex, eu sodales libero lacinia sit amet. Integer eget nisl turpis.', '2021-05-09 18:25:29', 10);

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id`, `content`, `user_id`, `article_id`, `created_at`) VALUES
(6, 'Bla bla bla ...', 6, 6, '2021-05-09 17:18:07'),
(5, 'Bien Dit , je suis complètement d accord', 6, 7, '2021-05-09 17:16:50'),
(7, 'Très bel article', 8, 8, '2021-05-09 17:46:21'),
(8, 'Bon article', 9, 9, '2021-05-09 18:07:10'),
(9, '', 10, 9, '2021-05-09 18:27:01'),
(10, 'Très bon article', 10, 9, '2021-05-09 18:27:18');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `password` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `created_at`, `password`) VALUES
(7, 'Vincent', 'vin@vin.fr', '2021-05-09 17:18:42', 'IkxbO8R1LtdD4DS2p50GjBZCPbnjsucz9bB4IKve51g='),
(6, 'Jean', 'jean@jean.fr', '2021-05-09 17:11:48', 'IkxbO8R1LtdD4DS2p50GjBZCPbnjsucz9bB4IKve51g='),
(5, 'Dan', 'dan@dan.fr', '2021-05-09 17:00:00', 'IkxbO8R1LtdD4DS2p50GjBZCPbnjsucz9bB4IKve51g='),
(8, 'tom', 'tom@tom.fr', '2021-05-09 17:44:02', 'IkxbO8R1LtdD4DS2p50GjBZCPbnjsucz9bB4IKve51g='),
(9, 'tintin', 'tin@tin.fr', '2021-05-09 18:05:39', 'IkxbO8R1LtdD4DS2p50GjBZCPbnjsucz9bB4IKve51g='),
(10, 'didier', 'didier@didier.fr', '2021-05-09 18:24:53', 'IkxbO8R1LtdD4DS2p50GjBZCPbnjsucz9bB4IKve51g=');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
