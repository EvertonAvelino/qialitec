-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 31-Mar-2021 às 02:39
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `qualitec`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `contatos_msgs`
--

CREATE TABLE IF NOT EXISTS `contatos_msgs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(220) CHARACTER SET armscii8 NOT NULL,
  `email` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `assunto` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mensagem` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_envio` datetime NOT NULL,
  `data_modif` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=8 ;

--
-- Extraindo dados da tabela `contatos_msgs`
--

INSERT INTO `contatos_msgs` (`id`, `name`, `email`, `assunto`, `mensagem`, `data_envio`, `data_modif`) VALUES
(2, 'Everton Arlindo', 'evertonvitorfdv@gmail.com', 'mensagem de teste', 'testando o envio de mensagem por email', '2021-03-28 23:49:05', NULL),
(7, 'Testando', 'evertonarlindo42@gmail.com', 'teste de email 2', 'asdjkasfjbsadvbvhbsavhsbvhsbvshvbshv', '2021-03-29 00:18:11', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
