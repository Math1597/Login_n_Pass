-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28-Fev-2020 às 19:36
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `store`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `Id` int(6) NOT NULL,
  `Nome` varchar(50) NOT NULL,
  `Usuário` varchar(20) NOT NULL,
  `Senha` varchar(40) NOT NULL,
  `Email` varchar(150) DEFAULT NULL,
  `DataRegistro` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`Id`, `Nome`, `Usuário`, `Senha`, `Email`, `DataRegistro`) VALUES
(1, 'Greta Thunberg', 'Grethun', '7ba80c3cb4f187c314c43cbf778e009b940ef3ef', 'grethun@x3mailer.com', '0000-00-00 00:00:00'),
(2, 'Teodoro Sampaio', 'Sampateo', '5b69765c1e648d0a5e7154bf1eed09f273ba38e0', NULL, '0000-00-00 00:00:00'),
(3, 'Naomi Seibt', 'NaoSei', '7a93b37251e3c1895e8a43e0d760fbed2cf72e6b', 'naosei@yahoo.com', '2020-02-27 08:58:16'),
(5, 'Mauro Cezar', 'Mac', '71c7f443ca92bda0c71b861ed9c06c72f9fecbcf', NULL, '2020-02-27 09:20:22'),
(6, 'Francisco Xavier', 'ChicoXavier', '42a5db6c7e3b9a17d360653dd2f1fb7de3e1bfe9', NULL, '2020-02-27 10:18:05'),
(7, 'Tomie Ohtake', 'Tomie', '9f228aac1f3b375d32448c3004ee80e2730d6d63', '', '2020-02-27 14:01:33'),
(8, 'Oscar Freire', 'Caneca', '5309d7216cd18aa5d27c72fe59b7cbed2ebc06e6', '', '2020-02-27 14:03:37'),
(11, 'Marília Pera', 'Marpel', 'b6048e44ab2824027c4249c5c159c501d6ef7564', '', '2020-02-28 11:32:55'),
(12, 'Vladimir Putin', 'Pudim', '3fde93baeb3a6d2243527cbd4a9bcf2deb72ef1f', 'pudim@kgb.com', '2020-02-28 13:13:57'),
(13, 'José Mourinho', 'SpecialOne', '7522b532c38308005fcb9e59e24d70740324ff4b', '', '2020-02-28 13:44:42');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD UNIQUE KEY `Usr` (`Id`,`Usuário`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `Id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
