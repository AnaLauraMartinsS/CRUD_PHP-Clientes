-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24/06/2024 às 17:36
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cadastro_clientes`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tabela_clientes`
--

CREATE TABLE `tabela_clientes` (
  `id_cliente` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `calendario` date NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `compra` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tabela_clientes`
--

INSERT INTO `tabela_clientes` (`id_cliente`, `nome`, `calendario`, `cpf`, `compra`) VALUES
(1, 'Maria da Silva', '2024-06-19', '1234567810', 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tabela_clientes`
--
ALTER TABLE `tabela_clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tabela_clientes`
--
ALTER TABLE `tabela_clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
