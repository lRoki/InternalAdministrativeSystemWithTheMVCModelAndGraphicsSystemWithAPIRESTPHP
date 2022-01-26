-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 25-Out-2021 às 19:49
-- Versão do servidor: 5.5.16
-- PHP Version: 7.1.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `poow`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `dtNascimento` date NOT NULL,
  `rg` varchar(50) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `cep` int(9) NOT NULL,
  `logradouro` varchar(50) NOT NULL,
  `nrLogradouro` varchar(10) NOT NULL,
  `bairro` varchar(30) NOT NULL,
  `telefone` varchar(14),
  `celular` varchar(50),
  `email` varchar(50),
   
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id`, `nome`, `dtNascimento`, `rg`, `cpf`, `cep`, `logradouro`, `nrLogradouro`, `bairro`, `telefone`, `celular`, `email` ) VALUES
(1, 'Administrador', 'admin', 'admin@teste.com', '123456', 1),
(2, 'Teste1', 'teste1', 'teste@teste.com', '123456', 1),
(3, 'Teste2', 'teste2', 'teste@teste.com', '123', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
