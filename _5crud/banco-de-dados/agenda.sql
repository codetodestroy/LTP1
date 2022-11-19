-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27-Maio-2022 às 05:52
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `agenda`
--
CREATE DATABASE `agenda`;
USE `agenda`;
-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_pessoa`
--

CREATE TABLE `tb_pessoa` (
  `id_pessoa` int UNSIGNED NOT NULL COMMENT 'chave primária',
  `ds_nome` varchar(255) NOT NULL COMMENT 'nome',
  `cd_sexo` varchar(1) NOT NULL COMMENT 'sexo: M, F, N',
  `dt_nasc` date NOT NULL COMMENT 'Data de nascimento',
  `nr_telefone` decimal(11,0) NOT NULL COMMENT 'Nr telefone com DDD (apenas dígitos)',
  `ds_email` varchar(255) NOT NULL COMMENT 'E-mail'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_pessoa`
--

INSERT INTO `tb_pessoa` (`id_pessoa`, `ds_nome`, `cd_sexo`, `dt_nasc`, `nr_telefone`, `ds_email`) VALUES
(1, 'João da Silva', 'M', '2002-05-02', '61999990000', 'joao@xyz.com.br'),
(2, 'José da Silva', 'M', '2003-10-05', '61912345678', 'jose@xyz.com.br'),
(3, 'Pedro da Silva', 'M', '1999-07-02', '61999991234', 'pedro@xyz.com.br'),
(4, 'Maria da Silva', 'F', '2003-10-05', '61912349876', 'maria@xyz.com.br');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_pessoa`
--
ALTER TABLE `tb_pessoa`
  ADD PRIMARY KEY (`id_pessoa`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_pessoa`
--
ALTER TABLE `tb_pessoa`
  MODIFY `id_pessoa` int UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'chave primária', AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
