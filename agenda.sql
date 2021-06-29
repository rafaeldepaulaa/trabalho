-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 29-Jun-2021 às 13:09
-- Versão do servidor: 5.7.31
-- versão do PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `agenda`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

DROP TABLE IF EXISTS `cadastro`;
CREATE TABLE IF NOT EXISTS `cadastro` (
  `idcadastro` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `sobrenome` varchar(50) NOT NULL,
  `datadenascimento` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  PRIMARY KEY (`idcadastro`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`idcadastro`, `nome`, `sobrenome`, `datadenascimento`, `email`, `senha`) VALUES
(5, 'rafael de paula', 'soares', '27012001', 'rafaeldepaula085@gmail.com', 'MTIzNDU='),
(6, 'maria vitoria', 'soares', '27012001', 'rafael085@gmail.com', 'MTIzNDU='),
(7, 'antonia', 'soares', '2000-08-22', 'paula50@gmail.com', 'MTIzNDU='),
(8, 'maria helen', 'soares', '2021-05-31', 'helen45@gmail.com', 'MTIzNDU='),
(9, 'Rafael de Paula ', 'Soares', '2001-01-27', 'rafaeldepaula085@gmail.com', 'MTIzNDU='),
(10, 'Sabrina ', 'Keli', '2011-08-17', 'sabrina01@gmail.com', 'MTIzNDU='),
(11, 'Leandro', 'Costa', '1999-10-18', 'leandro12@gmail.com', 'MTIzNDU=');

-- --------------------------------------------------------

--
-- Estrutura da tabela `dados`
--

DROP TABLE IF EXISTS `dados`;
CREATE TABLE IF NOT EXISTS `dados` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `turma` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `portugues1` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `portugues2` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `media1` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `espanhol1` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `espanhol2` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `media2` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ingles1` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ingles2` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `media3` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `edfisica1` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `edfisica2` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `media4` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `literatura1` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `literatura2` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `media5` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `geografia1` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `geografia2` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `media6` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `historia1` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `historia2` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `media7` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sociologia1` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sociologia2` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `media8` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filosofia1` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filosofia2` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `media9` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fisica1` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fisica2` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `media10` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `biologia1` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `biologia2` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `media11` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quimica1` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quimica2` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `media12` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matematica1` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matematica2` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `media13` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `dados`
--

INSERT INTO `dados` (`id`, `nome`, `turma`, `numero`, `portugues1`, `portugues2`, `media1`, `espanhol1`, `espanhol2`, `media2`, `ingles1`, `ingles2`, `media3`, `edfisica1`, `edfisica2`, `media4`, `literatura1`, `literatura2`, `media5`, `geografia1`, `geografia2`, `media6`, `historia1`, `historia2`, `media7`, `sociologia1`, `sociologia2`, `media8`, `filosofia1`, `filosofia2`, `media9`, `fisica1`, `fisica2`, `media10`, `biologia1`, `biologia2`, `media11`, `quimica1`, `quimica2`, `media12`, `matematica1`, `matematica2`, `media13`) VALUES
(4, 'Sabrina keli', '3 ano C', '16', '8', '9', '8.5', '8', '7', '7.5', '5.5', '9', '7.25', '10', '8', '9', '5.5', '5', '5.25', '6', '6', '6', '6.5', '5.9', '6.2', '10', '8', '9', '10', '6', '8', '7', '7', '7', '8.5', '5', '6.75', '6.5', '7', '6.75', '8', '8', '8'),
(2, 'maria vitoria', '1 ano b', '25', '10', '5', '7.5', '10', '7.5', '8.75', '8', '8', '8', '9', '10', '9.5', '5.5', '5', '5.25', '6', '6', '6', '6.5', '5.9', '6.2', '10', '8', '9', '10', '6', '8', '7', '7', '7', '8.5', '5', '6.75', '6.5', '7', '6.75', '9', '8', '8.5');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
