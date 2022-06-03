-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08-Dez-2021 às 00:15
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `agendacina`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `vacina`
--

CREATE TABLE `vacina` (
  `vacina` varchar(50) NOT NULL,
  `ubs` varchar(50) NOT NULL,
  `data` date NOT NULL,
  `hora` time(6) NOT NULL,
  `id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `vacina`
--

INSERT INTO `vacina` (`vacina`, `ubs`, `data`, `hora`, `id`) VALUES
('Rotavírus', 'Se', '2021-11-02', '18:02:00.000000', 3),
('Covid 19', 'VilaPrudente', '2021-12-03', '16:30:00.000000', 5),
('Hepatite B', 'Humaita', '2021-12-10', '04:15:00.000000', 6),
('Hepatite B', 'VilaPrudente', '2021-12-17', '19:45:00.000000', 7),
('BCG', 'Cambuci', '2021-12-16', '01:04:00.000000', 8);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `vacina`
--
ALTER TABLE `vacina`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `vacina`
--
ALTER TABLE `vacina`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
