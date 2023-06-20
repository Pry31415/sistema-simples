-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 19-Jun-2023 às 23:55
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
-- Banco de dados: `protocolo_db`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_protocolo`
--

DROP TABLE IF EXISTS `tb_protocolo`;
CREATE TABLE IF NOT EXISTS `tb_protocolo` (
  `nump` int(250) NOT NULL AUTO_INCREMENT,
  `descricao` text NOT NULL,
  `data` date NOT NULL,
  `prazo` date NOT NULL,
  `demandante` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  PRIMARY KEY (`nump`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_protocolo`
--

INSERT INTO `tb_protocolo` (`nump`, `descricao`, `data`, `prazo`, `demandante`) VALUES
(5, 'Demanda de potência elétrica não é passível, por si só, de tributação via ICMS, porquanto somente integram a base de cálculo desse imposto ', '2022-06-02', '2022-06-20', 'Carlos Ribeiro'),
(4, 'Demanda de potência elétrica não é passível, por si só, de tributação via ICMS, porquanto somente integram a base de cálculo desse imposto ', '2022-06-02', '2022-06-20', 'Andressa lemos'),
(6, 'Demanda de potência elétrica não é passível, por si só, de tributação via ICMS, porquanto somente integram a base de cálculo desse imposto ', '2022-06-02', '2022-06-20', 'Eduardo Freitas');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
