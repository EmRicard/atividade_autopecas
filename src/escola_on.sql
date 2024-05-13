-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30-Abr-2024 às 00:08
-- Versão do servidor: 10.4.28-MariaDB
-- versão do PHP: 8.2.4

-- Cria o banco de dados se ele não existir e seleciona como o banco de dados padrão
CREATE DATABASE IF NOT EXISTS `escola_on` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `escola_on`;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `escola_on`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cad_pessoais`
--

CREATE TABLE `cad_pessoais` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `cep` varchar(12) DEFAULT NULL,
  `endereco` varchar(200) DEFAULT NULL,
  `bairro` varchar(150) DEFAULT NULL,
  `cidade` varchar(150) DEFAULT NULL,
  `funcao` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `cad_pessoais`
--

INSERT INTO `cad_pessoais` (`id`, `nome`, `email`, `cep`, `endereco`, `bairro`, `cidade`, `funcao`) VALUES
(1, 'Erik', 'erikmarquesfsa@gmail.com', '44034-056', '', '', '', 'Professor'),
(2, 'Erik', 'erikmarquesfsa@gmail.com', '44034-056', '', '', '', 'Professor'),
(3, 'Erik', 'erikmarquesfsa@gmail.com', '44034-056', '', '', '', 'Professor'),
(4, 'Erik', 'erikmarquesfsa@gmail.com', '44034-056', '', '', '', 'Professor'),
(5, 'Erik', 'erikmarquesfsa@gmail.com', '44034-056', '', '', '', 'Professor'),
(6, 'Erik', 'erikmarquesfsa@gmail.com', '44034-056', 'Rua Ipuaçu', 'Campo Limpo', 'Feira de Santana', 'Professor'),
(7, 'Erik', 'erikmarquesfsa@gmail.com', '44034-056', 'Rua Ipuaçu', 'Campo Limpo', 'Feira de Santana', 'Professor'),
(8, 'Erik', 'erikmarquesfsa@gmail.com', '44034-056', 'Rua Ipuaçu', 'Campo Limpo', 'Feira de Santana', 'Professor'),
(9, 'Erik', 'erikmarquesfsa@gmail.com', '44034-056', 'Rua Ipuaçu', 'Campo Limpo', 'Feira de Santana', 'Professor'),
(10, 'Erik', 'erikmarquesfsa@gmail.com', '44034-056', 'Rua Ipuaçu', 'Campo Limpo', 'Feira de Santana', 'Professor');

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `senha` varchar(100) DEFAULT NULL,
  `funcao` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`id`, `nome`, `senha`, `funcao`) VALUES
(1, 'ERIK MARQUES', '1', 'SECRETARIA');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cad_pessoais`
--
ALTER TABLE `cad_pessoais`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cad_pessoais`
--
ALTER TABLE `cad_pessoais`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
