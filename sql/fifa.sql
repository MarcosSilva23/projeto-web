-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 20-Maio-2014 às 07:10
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fifa`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `times`
--

CREATE TABLE IF NOT EXISTS `times` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) CHARACTER SET latin1 NOT NULL,
  `pontos` int(11) NOT NULL,
  `derrotas` int(11) NOT NULL,
  `vitorias` int(11) NOT NULL,
  `empates` int(11) NOT NULL,
  `partidas` int(11) NOT NULL,
  `gols-a-favor` int(11) NOT NULL,
  `gols-contra` int(11) NOT NULL,
  `saldo-de-gols` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=33 ;

--
-- Extraindo dados da tabela `times`
--

INSERT INTO `times` (`id`, `nome`, `pontos`, `derrotas`, `vitorias`, `empates`, `partidas`, `gols-a-favor`, `gols-contra`, `saldo-de-gols`) VALUES
(1, 'argelia', 0, 0, 0, 0, 0, 0, 0, 0),
(2, 'camaroes', 0, 0, 0, 0, 0, 0, 0, 0),
(3, 'costa do marfim', 0, 0, 0, 0, 0, 0, 0, 0),
(4, 'gana', 0, 0, 0, 0, 0, 0, 0, 0),
(5, 'nigeria', 0, 0, 0, 0, 0, 0, 0, 0),
(6, 'australia', 0, 0, 0, 0, 0, 0, 0, 0),
(7, 'coreia do sul', 0, 0, 0, 0, 0, 0, 0, 0),
(8, 'ira', 0, 0, 0, 0, 0, 0, 0, 0),
(9, 'japao', 0, 0, 0, 0, 0, 0, 0, 0),
(10, 'alemanha', 0, 0, 0, 0, 0, 0, 0, 0),
(11, 'belgica', 0, 0, 0, 0, 0, 0, 0, 0),
(12, 'bosnia e herzegovina', 0, 0, 0, 0, 0, 0, 0, 0),
(13, 'croacia', 0, 0, 0, 0, 0, 0, 0, 0),
(14, 'espanha', 0, 0, 0, 0, 0, 0, 0, 0),
(15, 'franca', 0, 0, 0, 0, 0, 0, 0, 0),
(16, 'grecia', 0, 0, 0, 0, 0, 0, 0, 0),
(17, 'holanda', 0, 0, 0, 0, 0, 0, 0, 0),
(18, 'inglaterra', 0, 0, 0, 0, 0, 0, 0, 0),
(19, 'italia', 0, 0, 0, 0, 0, 0, 0, 0),
(20, 'portugal', 0, 0, 0, 0, 0, 0, 0, 0),
(21, 'russia', 0, 0, 0, 0, 0, 0, 0, 0),
(22, 'suica', 0, 0, 0, 0, 0, 0, 0, 0),
(23, 'costa rica', 0, 0, 0, 0, 0, 0, 0, 0),
(24, 'eua', 0, 0, 0, 0, 0, 0, 0, 0),
(25, 'honduras', 0, 0, 0, 0, 0, 0, 0, 0),
(26, 'mexico', 0, 0, 0, 0, 0, 0, 0, 0),
(27, 'argentina', 0, 0, 0, 0, 0, 0, 0, 0),
(28, 'brasil', 0, 0, 0, 0, 0, 0, 0, 0),
(29, 'chile', 0, 0, 0, 0, 0, 0, 0, 0),
(30, 'colombia', 0, 0, 0, 0, 0, 0, 0, 0),
(31, 'equador', 0, 0, 0, 0, 0, 0, 0, 0),
(32, 'uruguai', 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sobrenome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `login` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pontos` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=29 ;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `sobrenome`, `login`, `senha`, `pontos`) VALUES
(20, 'Rafael', 'Braga', 'rafael@mail.com', '698dc19d489c4e4db73e28a713eab07b', 14),
(22, 'Eduardo', 'Braga', 'eduardo@mail.com', '698dc19d489c4e4db73e28a713eab07b', 8),
(23, 'Marcos', 'Silva', 'marcos@mail.com', '698dc19d489c4e4db73e28a713eab07b', 5),
(24, 'Julio', 'Abreu', 'julio@mail.com', '698dc19d489c4e4db73e28a713eab07b', 10),
(25, 'Carlos', 'Sissudo', 'carlos@mail.com', '698dc19d489c4e4db73e28a713eab07b', 0),
(26, 'JoÃ£o', 'Aldacir', 'joao@mail.com', '698dc19d489c4e4db73e28a713eab07b', 0),
(27, 'Paulo', 'Soares', 'paulo@mail.com', '698dc19d489c4e4db73e28a713eab07b', 0),
(28, 'Romeu', 'Montecchio', 'romeu@mail.com', '698dc19d489c4e4db73e28a713eab07b', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
