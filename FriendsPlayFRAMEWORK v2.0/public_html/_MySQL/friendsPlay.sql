-- phpMyAdmin SQL Dump
-- version 4.4.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Tempo de geração: 09/09/2015 às 04:12
-- Versão do servidor: 5.6.24
-- Versão do PHP: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de dados: `friendsPlay`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `categoria_esportiva`
--

CREATE TABLE IF NOT EXISTS `categoria_esportiva` (
  `idcategoria_esportiva` int(10) unsigned NOT NULL,
  `nome` varchar(30) NOT NULL,
  `num_min` int(11) NOT NULL,
  `num_max` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `convite`
--

CREATE TABLE IF NOT EXISTS `convite` (
  `id_convite` int(10) unsigned NOT NULL,
  `nome` varchar(30) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_evento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `evento`
--

CREATE TABLE IF NOT EXISTS `evento` (
  `id_evento` int(10) unsigned NOT NULL,
  `nome` varchar(45) NOT NULL,
  `data` date NOT NULL,
  `horario_inicial` time NOT NULL,
  `horario_final` time NOT NULL,
  `num_atual` int(11) NOT NULL,
  `privacidade` varchar(20) NOT NULL,
  `n_min` int(11) NOT NULL,
  `n_max` int(11) NOT NULL,
  `descricao` varchar(200) DEFAULT NULL,
  `id_usuario` int(11) NOT NULL,
  `idlocal_evento` int(11) NOT NULL,
  `idcategoria_esportiva` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `evento`
--

INSERT INTO `evento` (`id_evento`, `nome`, `data`, `horario_inicial`, `horario_final`, `num_atual`, `privacidade`, `n_min`, `n_max`, `descricao`, `id_usuario`, `idlocal_evento`, `idcategoria_esportiva`) VALUES
(46, 'Futsalsc', '2015-09-29', '03:02:00', '21:03:00', 0, '', 0, 0, '', 2147483647, 0, 0),
(47, 'Futsalsc', '2015-10-29', '03:02:00', '21:03:00', 0, '', 0, 0, '', 2147483647, 0, 0),
(48, 'Futsalsc', '2015-11-29', '03:02:00', '21:03:00', 0, '', 0, 0, '', 2147483647, 0, 0),
(49, 'Futsalscd', '2015-11-29', '03:02:00', '21:03:00', 0, '', 0, 0, '', 2147483647, 0, 0),
(50, 'Futsd', '2015-11-29', '03:02:00', '21:03:00', 0, '', 0, 0, '', 2147483647, 0, 0),
(51, 'Futsde', '2015-11-29', '03:02:00', '21:03:00', 0, '', 0, 0, '', 2147483647, 0, 0),
(52, 'Futsde1', '2015-11-29', '03:02:00', '21:03:00', 0, '', 0, 0, '', 2147483647, 0, 0),
(53, 'Futsde11', '2015-11-29', '03:02:00', '21:03:00', 0, '', 0, 0, '', 2147483647, 0, 0),
(54, 'Futsd', '2015-11-25', '03:02:00', '21:03:00', 0, '', 0, 0, '', 2147483647, 0, 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `local_evento`
--

CREATE TABLE IF NOT EXISTS `local_evento` (
  `idlocal_evento` int(10) unsigned NOT NULL,
  `nome` varchar(40) NOT NULL,
  `local` varchar(100) NOT NULL,
  `numero` int(11) NOT NULL,
  `cidade` varchar(45) NOT NULL,
  `estado` varchar(45) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `local_evento`
--

INSERT INTO `local_evento` (`idlocal_evento`, `nome`, `local`, `numero`, `cidade`, `estado`) VALUES
(1, 'Oqtob', 'Rua Lidio Sousa Estrela', 3, 'Santa BÃ¡rbara', 'BA'),
(2, 'Oqtob', 'Rua Lidio Sousa Estrela', 3, 'Santa BÃ¡rbara', 'BA'),
(3, 'olde', 'Rua Lidio Sousa Estrela', 10, 'Santa BÃ¡rbara', 'BA'),
(4, 'olde', 'Rua Lidio Sousa Estrela', 11, 'Santa BÃ¡rbara', 'BA');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` int(10) unsigned NOT NULL,
  `nome` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nome`) VALUES
(0, ''),
(4294967295, 'Cassio Aragao');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `categoria_esportiva`
--
ALTER TABLE `categoria_esportiva`
  ADD PRIMARY KEY (`idcategoria_esportiva`);

--
-- Índices de tabela `convite`
--
ALTER TABLE `convite`
  ADD PRIMARY KEY (`id_convite`,`nome`);

--
-- Índices de tabela `evento`
--
ALTER TABLE `evento`
  ADD PRIMARY KEY (`id_evento`,`nome`,`id_usuario`);

--
-- Índices de tabela `local_evento`
--
ALTER TABLE `local_evento`
  ADD PRIMARY KEY (`idlocal_evento`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `categoria_esportiva`
--
ALTER TABLE `categoria_esportiva`
  MODIFY `idcategoria_esportiva` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `convite`
--
ALTER TABLE `convite`
  MODIFY `id_convite` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `evento`
--
ALTER TABLE `evento`
  MODIFY `id_evento` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT de tabela `local_evento`
--
ALTER TABLE `local_evento`
  MODIFY `idlocal_evento` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
