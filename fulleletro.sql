-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 09-Nov-2020 às 00:29
-- Versão do servidor: 5.7.31
-- versão do PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `fulleletro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `mensagens`
--

DROP TABLE IF EXISTS `mensagens`;
CREATE TABLE IF NOT EXISTS `mensagens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(800) CHARACTER SET latin1 NOT NULL,
  `email` varchar(80) CHARACTER SET latin1 NOT NULL,
  `msg` varchar(255) CHARACTER SET latin1 NOT NULL,
  `data` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Extraindo dados da tabela `mensagens`
--

INSERT INTO `mensagens` (`id`, `nome`, `email`, `msg`, `data`) VALUES
(1, 'Maria', 'maria@gmail.com', 'Olá, aceita parcelamento em dois cartões', '2020-11-08 20:49:27'),
(2, 'Pedro', 'pedrito@yahoo.com', 'Olá, ótimas promoções, obg', '2020-11-08 20:51:24');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos`
--

DROP TABLE IF EXISTS `pedidos`;
CREATE TABLE IF NOT EXISTS `pedidos` (
  `idcliente` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(45) NOT NULL,
  `Telefone` varchar(45) NOT NULL,
  `Produto` varchar(45) NOT NULL,
  `Valor_unitário` decimal(8,2) NOT NULL,
  `Quantidade` int(11) NOT NULL,
  `Valor_total` decimal(8,2) NOT NULL,
  PRIMARY KEY (`idcliente`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pedidos`
--

INSERT INTO `pedidos` (`idcliente`, `Nome`, `Telefone`, `Produto`, `Valor_unitário`, `Quantidade`, `Valor_total`) VALUES
(1, 'Julia', '(11)5554-4444', 'Geladeira', '4962.00', 1, '4962.00'),
(2, 'José', '(11)8855-1452', 'Microondas', '949.00', 2, '1898.00'),
(3, 'Amélia', '(21)9998-8885', 'Lava-louça', '2355.00', 2, '4710.00'),
(4, 'João', '(37)7778-8888', 'Fogão', '849.00', 3, '2547.00'),
(5, 'Pedro', '(21)4555-5554', 'Fogão', '849.00', 1, '849.00'),
(6, 'Carolina', '(11)3334-4444', 'Geladeira', '3339.10', 1, '3339.10'),
(7, 'Maria', '(11)2224-5555', 'Lava-roupas', '3659.00', 1, '3659.00'),
(8, 'Caio', '(14)9555-5555', 'Microondas', '449.00', 3, '1347.00'),
(9, 'Paula', '(21)8888-7777', 'Lava-louças', '2355.00', 1, '2355.00'),
(11, 'Francisco', '(11)3666-5555', 'Microondas', '449.00', 1, '449.00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

DROP TABLE IF EXISTS `produtos`;
CREATE TABLE IF NOT EXISTS `produtos` (
  `idprodutos` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(45) CHARACTER SET latin1 NOT NULL,
  `descricao` varchar(150) CHARACTER SET latin1 NOT NULL,
  `preco` decimal(8,2) NOT NULL,
  `precofinal` decimal(8,2) NOT NULL,
  `imagem` varchar(255) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`idprodutos`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`idprodutos`, `categoria`, `descricao`, `preco`, `precofinal`, `imagem`) VALUES
(1, 'Lava-louca', '14 Serviços Brastemp Preta com Ciclo Pesado', '3696.00', '3634.10', 'Imagens/produtos/lavalou%C3%A7asBrastemp.jpg'),
(28, 'Lava roupas', 'Samsung 11Kg com EcoBubble', '4999.00', '3699.00', 'Imagens/produtos/lavadoraSamsung.jpg'),
(29, 'Lava roupas', 'Midea Storm Wash 11kg com 16 Programas de Lavagem', '3999.00', '3659.00', 'Imagens/produtos/lavadoraMidea.jpg'),
(30, 'Lava-louca', ' Electrolux 8 Serviços Cinza', '2989.00', '2355.00', 'Imagens/produtos/lavaLou%C3%A7asEletrolux.jpg'),
(31, 'Lava-louca', '14 Serviços Brastemp Preta com Ciclo Pesado', '3696.00', '3634.10', 'Imagens/produtos/lavalou%C3%A7asBrastemp.jpg'),
(27, 'microondas', 'Consul com Puxador na Porta 20L', '599.00', '449.00', 'Imagens/produtos/microondasConsul.jpg'),
(26, 'microondas', 'Electrolux com Painel Blue Touch 31L', '999.00', '949.00', 'Imagens/produtos/microondasEletrolux.jpg'),
(25, 'fogao', 'à Gás 4 Bocas Atlas Mônaco Acendimento Automático Inox', '1109.00', '849.00', 'Imagens/produtos/fog%C3%A3oAtlas.jpg'),
(24, 'fogao', 'Brastemp 4 bocas Inox com grill e timer digital', '1999.00', '1349.00', 'Imagens/produtos/fog%C3%A3oBrastemp.jpg'),
(23, 'geladeira', 'Samsung Side by Side Inox Look 501L', '8999.00', '6389.99', 'Imagens/produtos/geladeiraSamsungSide.jpg'),
(22, 'geladeira', 'Electrolux Side by Side Frost Free 504L', '5999.00', '4269.00', 'Imagens/produtos/geladeiraEletrolux.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
