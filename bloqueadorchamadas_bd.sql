-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 18-Dez-2017 às 05:28
-- Versão do servidor: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloqueadorchamadas_bd`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `agendatelefonica`
--

CREATE TABLE `agendatelefonica` (
  `id` int(11) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `telefoneFixo` varchar(20) NOT NULL,
  `telefoneCelular` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `agendatelefonica`
--

INSERT INTO `agendatelefonica` (`id`, `nome`, `telefoneFixo`, `telefoneCelular`) VALUES
(1, 'Renata', '', '(35) 99198-8699'),
(2, 'Paulo', '(35) 3641-1110', '(35) 99186-5533'),
(3, 'Regiane', '(35) 3622-869', ''),
(4, 'Andre', '(35) 3622-8697', '(35) 99856-6566'),
(5, 'Maria', '(35) 3699-5689', '(35) 98857-4526'),
(6, 'Jose', '(35) 3623-6989', '(36) 99149-9687');

-- --------------------------------------------------------

--
-- Estrutura da tabela `chamadasbloqueadas`
--

CREATE TABLE `chamadasbloqueadas` (
  `id` int(11) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `telefoneFixo` varchar(20) NOT NULL,
  `telefoneCelular` varchar(20) NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `numerosbloqueados`
--

CREATE TABLE `numerosbloqueados` (
  `id` int(11) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `telefoneFixo` varchar(20) NOT NULL,
  `telefoneCelular` varchar(20) NOT NULL,
  `data` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agendatelefonica`
--
ALTER TABLE `agendatelefonica`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chamadasbloqueadas`
--
ALTER TABLE `chamadasbloqueadas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `numerosbloqueados`
--
ALTER TABLE `numerosbloqueados`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agendatelefonica`
--
ALTER TABLE `agendatelefonica`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `chamadasbloqueadas`
--
ALTER TABLE `chamadasbloqueadas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `numerosbloqueados`
--
ALTER TABLE `numerosbloqueados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
