-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23-Set-2020 às 00:58
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `aula_php`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `itens_nf`
--

CREATE TABLE `itens_nf` (
  `id` int(11) NOT NULL,
  `cod_produto` int(11) DEFAULT NULL,
  `num_nf` int(11) DEFAULT NULL,
  `qtde` int(11) DEFAULT NULL,
  `valor_total` decimal(7,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `nota_fiscal`
--

CREATE TABLE `nota_fiscal` (
  `nf` int(11) NOT NULL,
  `data` date DEFAULT NULL,
  `valor_total` decimal(7,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `nota_fiscal`
--

INSERT INTO `nota_fiscal` (`nf`, `data`, `valor_total`) VALUES
(2, '2020-09-22', NULL),
(3, '2020-09-22', NULL),
(4, '2020-09-22', NULL),
(5, '2020-09-22', NULL),
(6, '2020-09-22', NULL),
(7, '2020-09-22', NULL),
(8, '2020-09-22', NULL),
(9, '2020-09-22', NULL),
(10, '2020-09-22', NULL),
(11, '2020-09-22', NULL),
(12, '0000-00-00', NULL),
(13, '2020-09-22', NULL),
(14, '2020-09-22', NULL),
(15, '2020-09-22', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) DEFAULT NULL,
  `preco` decimal(7,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `preco`) VALUES
(17, 'Arroz', '12.90'),
(18, 'Farinha de Trigo', '10.00'),
(19, 'Açúcar refinado', '8.90'),
(20, 'Sucrilhos', '12.99'),
(21, 'Pão Francês', '3.00'),
(22, 'Donut Colorido', '5.30'),
(23, 'Feijão', '3.90'),
(24, 'Alface', '9.90'),
(25, 'Couve-flor', '10.00'),
(26, 'Presunto', '4.90'),
(27, 'Suco Del Valle', '11.00'),
(28, 'Margarina', '7.00'),
(29, 'Desenfetante', '11.00'),
(30, 'Amido de milho', '4.00'),
(31, 'Achocolatado', '5.00'),
(32, 'Bolacha Recheada', '3.90');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `nivel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `nivel`) VALUES
(1, 'Isabelle Ferreira Damacena', 'damacenaisabelle@gmail.com', '12345', 1),
(2, 'Claúdio Montana', 'claudiomontana@gmail.com', '98765', 2);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `itens_nf`
--
ALTER TABLE `itens_nf`
  ADD PRIMARY KEY (`id`),
  ADD KEY `num_nf` (`num_nf`),
  ADD KEY `cod_produto` (`cod_produto`);

--
-- Índices para tabela `nota_fiscal`
--
ALTER TABLE `nota_fiscal`
  ADD PRIMARY KEY (`nf`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `itens_nf`
--
ALTER TABLE `itens_nf`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `nota_fiscal`
--
ALTER TABLE `nota_fiscal`
  MODIFY `nf` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `itens_nf`
--
ALTER TABLE `itens_nf`
  ADD CONSTRAINT `itens_nf_ibfk_1` FOREIGN KEY (`num_nf`) REFERENCES `nota_fiscal` (`nf`),
  ADD CONSTRAINT `itens_nf_ibfk_2` FOREIGN KEY (`cod_produto`) REFERENCES `produtos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;