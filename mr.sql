-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 13-Jun-2016 às 12:22
-- Versão do servidor: 5.5.34
-- versão do PHP: 5.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `mr`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE IF NOT EXISTS `categorias` (
  `codcategoria` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(60) DEFAULT NULL,
  `codtipo` int(20) DEFAULT NULL,
  PRIMARY KEY (`codcategoria`),
  KEY `codtipo` (`codtipo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`codcategoria`, `categoria`, `codtipo`) VALUES
(1, 'CARTEIRA', 2),
(3, 'CINTO', 2),
(4, 'CHAVEIRO', 2),
(5, 'PORTA DOCUMENTO', 2),
(7, 'SPORT', 6),
(8, 'ESPADRILLE', 6),
(9, 'MOCASSIM', 6),
(10, 'BALLERINA', 6),
(11, 'PEEP TOE', 6),
(12, 'SANDALIA ANABELA', 6),
(13, 'SANDALIA FLAT', 6),
(14, 'SANDALIA SALTO ALTO', 6),
(15, 'SANDÁLIA SALTO BAIXO', 6),
(16, 'SANDALIA SALTO MEDIO', 6),
(17, 'COMFORT', 6),
(18, 'SCARPIN', 6),
(19, 'BOTAS MONTARIA CANO ALTO', 6),
(20, 'BOTAS MONTARIA CANO BAIXO', 6),
(21, 'BOTAS FASHION', 6),
(22, 'BOTAS CONFORT', 6),
(23, 'BOTAS FLAT SPORT', 6),
(27, 'MOCHILA', 3),
(28, 'PETIT', 3),
(29, 'SHOPPING BAG', 3),
(30, 'SHOULDER BAG', 3),
(31, 'TIRA COLA', 3),
(32, 'NECESSAIRE', 2),
(33, 'PORTA-CARTAO', 2),
(34, 'PORTA-NIQUEL', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cores`
--

CREATE TABLE IF NOT EXISTS `cores` (
  `id_cor` int(11) NOT NULL AUTO_INCREMENT,
  `cor` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`id_cor`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Extraindo dados da tabela `cores`
--

INSERT INTO `cores` (`id_cor`, `cor`) VALUES
(11, 'CM'),
(12, 'MH'),
(14, 'PT'),
(15, 'NT'),
(16, 'RS'),
(17, 'VD'),
(18, 'VH'),
(19, 'RE'),
(20, 'TN'),
(21, 'BG'),
(22, 'CF');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE IF NOT EXISTS `produtos` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `referencia` varchar(50) DEFAULT NULL,
  `codcategoria` int(11) DEFAULT NULL,
  `id_cor` int(10) DEFAULT NULL,
  `ano` int(20) DEFAULT NULL,
  `fotop` varchar(200) DEFAULT NULL,
  `fotog` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `codcategoria` (`codcategoria`),
  KEY `id_cor` (`id_cor`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `referencia`, `codcategoria`, `id_cor`, `ano`, `fotop`, `fotog`) VALUES
(13, 'PAB290CM', 12, 11, NULL, 'rafael-fe5bb55edd72e74d35f74cef5f3ee1b1.jpg', 'rafael-f5052e00de62541c1141cda26dc1addd.jpg'),
(14, 'PAB290MH', 12, 12, NULL, 'rafael-0aba5a41ca0ea6230dc78c182958757f.jpg', 'rafael-8badee425e273374858d6402e5a95bc8.jpg'),
(15, 'PAB290PT', 12, 14, NULL, 'rafael-5318df745e223deaa697e841430b066a.jpg', 'rafael-1425bd776d61f7d9a2a9cc374b16a339.jpg'),
(16, 'PAB296NT', 12, 15, NULL, 'rafael-93a905cc7e37e6c1104530bd8104d2f0.jpg', 'rafael-5fea3f13b508d90132fc4a41c68c628d.jpg'),
(17, 'PAB297RS', 12, 16, NULL, 'rafael-c04df11b505c201e497e10d81d513fd9.jpg', 'rafael-c95e6b5cdff82e1460645903f63dc536.jpg'),
(18, 'PAB297VD', 12, 17, NULL, 'rafael-6ce280b7150f712bc3ebdb730271ebd6.jpg', 'rafael-9afcae2590426ca822135761e5eaf001.jpg'),
(19, 'PAB297VH', 12, 18, NULL, 'rafael-1345f5ee5405b5ed2f7fd1483b7bb6e8.jpg', 'rafael-95a7967bc922e1a72acbfb114df174b0.jpg'),
(20, 'PAB327PT', 12, 14, NULL, 'rafael-8931096b3e04bf86b370f52d3f029f3c.jpg', 'rafael-5fa4591972bfee6b7d051f4ab3ebfdac.jpg'),
(21, 'PAB327VH', 12, 18, NULL, 'rafael-122b02c82890e4deed3001046d14ea30.jpg', 'rafael-0ae4888d2e091ce60beb77090f11c623.jpg'),
(22, 'BBK055PT', 7, 14, NULL, 'rafael-88f6d270a5425137f9645c8e39ddca63.jpg', 'rafael-cec19b41ece882ee96d678505edc4b28.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo`
--

CREATE TABLE IF NOT EXISTS `tipo` (
  `codtipo` int(10) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`codtipo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Extraindo dados da tabela `tipo`
--

INSERT INTO `tipo` (`codtipo`, `tipo`) VALUES
(2, 'aces fem'),
(3, 'bolsa femi'),
(4, 'bolsa masc'),
(5, 'sapato mas'),
(6, 'sapato fem'),
(9, 'acess masc');

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `categorias`
--
ALTER TABLE `categorias`
  ADD CONSTRAINT `categorias_ibfk_1` FOREIGN KEY (`codtipo`) REFERENCES `tipo` (`codtipo`);

--
-- Limitadores para a tabela `produtos`
--
ALTER TABLE `produtos`
  ADD CONSTRAINT `produtos_ibfk_1` FOREIGN KEY (`codcategoria`) REFERENCES `categorias` (`codcategoria`),
  ADD CONSTRAINT `produtos_ibfk_2` FOREIGN KEY (`id_cor`) REFERENCES `cores` (`id_cor`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
