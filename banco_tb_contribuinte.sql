-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 19-Jun-2023 às 23:48
-- Versão do servidor: 5.7.36
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cadastro_contribuinte_db`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_contribuinte`
--

DROP TABLE IF EXISTS `tb_contribuinte`;
CREATE TABLE IF NOT EXISTS `tb_contribuinte` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `nascimento` date NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `sexo` varchar(20) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `bairro` varchar(100) NOT NULL,
  `numero` varchar(5) NOT NULL,
  `complemento` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_contribuinte`
--

INSERT INTO `tb_contribuinte` (`id`, `nome`, `nascimento`, `cpf`, `sexo`, `cidade`, `bairro`, `numero`, `complemento`) VALUES
(24, 'Eduardo Freitas', '1965-12-07', '25898632414', 'Masculino', 'Sao Leopoldo', 'Duque de Caxias', '206', 'casa'),
(23, 'Luisa Magson', '1950-02-02', '12222884489', 'Feminino', 'Sao Leopoldo', 'Campina', '13', 'apartamento'),
(22, 'Nayara Barbosa', '1960-09-06', '00011158758', 'Feminino', 'Novo Hamburgo', 'Pinheiro', '215', 'casa'),
(20, 'Andressa Lemos', '1989-06-05', '93178992271', 'Feminino', 'Novo Hamburgo', 'Floresta', '48', 'casa'),
(21, 'Carlos Ribeiro', '1959-12-12', '62012529858', 'Masculino', 'Sao Leopoldo', 'Santos Dumont', '150', 'casa');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
