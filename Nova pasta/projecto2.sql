-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27-Dez-2021 às 15:17
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projecto2`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `nome` varchar(30) DEFAULT NULL,
  `mensagem` varchar(400) DEFAULT NULL,
  `data_da_mensagem` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `chat`
--

INSERT INTO `chat` (`id`, `nome`, `mensagem`, `data_da_mensagem`) VALUES
(4, 'ola', 'ghfgfgfd', '2021-12-24 00:00:00'),
(5, 'helevecio calau', '2020-10 Microsoft Edge Update do Windows 10 Version 1909 para sistemas baseados em x64 (KB4584229)', '2021-12-24 00:00:00'),
(6, 'helevecio calau', '2020-10 Microsoft Edge Update do Windows 10 Version 1909 para sistemas baseados em x64 (KB4584229)2020-10 Microsoft Edge Update do Windows 10 Version 1909 para sistemas baseados em x64 (KB4584229)', '2021-12-24 00:00:00'),
(7, 'helevecio calau', '2020-10 Microsoft Edge Update do Windows 10 Version 1909 para sistemas baseados em x64 (KB4584229)2020-10 Microsoft Edge Update do Windows 10 Version 1909 para sistemas baseados em x64 (KB4584229)2020-10 Microsoft Edge Update do Windows 10 Version 1909 para sistemas baseados em x64 (KB4584229)2020-10 Microsoft Edge Update do Windows 10 Version 1909 para sistemas baseados em x64 (KB4584229)', '2021-12-24 00:00:00'),
(8, 'Antonio joaquin', ' como estas?', '2021-12-24 00:00:00'),
(9, 'Franscisco', 'como sestas mano', '2021-12-24 00:00:00'),
(10, 'franscisco', 'ola mundo', '2021-12-24 00:00:00'),
(11, 'Gelson tuca', 'feito', '2021-12-24 00:00:00'),
(12, 'Mario tuca', 'yyhghgh', '2021-12-24 15:40:41'),
(13, 'Valdemar', 'ola mundo valdemar\r\n', '2021-12-24 17:21:06');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
