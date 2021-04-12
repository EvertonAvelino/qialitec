-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 12-Abr-2021 às 05:27
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
-- Estrutura da tabela `cidade`
--

CREATE TABLE IF NOT EXISTS `cidade` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_representante` int(11) NOT NULL,
  `nome` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_representante` (`id_representante`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `cidade`
--

INSERT INTO `cidade` (`id`, `id_representante`, `nome`) VALUES
(2, 1, 'Ervalia'),
(3, 2, 'Coimbra'),
(4, 2, 'Vicosa');

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

-- --------------------------------------------------------

--
-- Estrutura da tabela `representante`
--

CREATE TABLE IF NOT EXISTS `representante` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefone` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `representante`
--

INSERT INTO `representante` (`id`, `nome`, `telefone`, `email`) VALUES
(1, 'Zaqueu Braga', '32999999999', ''),
(2, 'Weliton Pereira', '32888888888', '');

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `cidade`
--
ALTER TABLE `cidade`
  ADD CONSTRAINT `cidade_ibfk_1` FOREIGN KEY (`id_representante`) REFERENCES `representante` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
