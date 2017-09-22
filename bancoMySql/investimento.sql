-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 11-Set-2017 às 04:56
-- Versão do servidor: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uplant`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `investimento`
--

CREATE TABLE `investimento` (
  `id` int(11) NOT NULL,
  `nome_plantacao` varchar(255) DEFAULT NULL,
  `nome_agricultor` varchar(255) DEFAULT NULL,
  `texto` text,
  `thumb_plantacao` int(11) DEFAULT NULL,
  `numero_investidores` int(11) DEFAULT NULL,
  `total_arrecadado` double DEFAULT NULL,
  `nome_documento` int(11) DEFAULT NULL,
  `data_inicio` date NOT NULL,
  `total_dias` int(11) NOT NULL,
  `txt_resumo` tinytext NOT NULL,
  `ValorInvestimento` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `investimento`
--

INSERT INTO `investimento` (`id`, `nome_plantacao`, `nome_agricultor`, `texto`, `thumb_plantacao`, `numero_investidores`, `total_arrecadado`, `nome_documento`, `data_inicio`, `total_dias`, `txt_resumo`, `ValorInvestimento`) VALUES
(1, 'Hortela', 'Oshiro', '$hostname_config = \"mysql.hostinger.com.br\";\r\n  $database_config = \"u538122687_up\";\r\n $username_config = \"u538122687_upadm\";\r\n  $password_config = \"uplant#17\";$hostname_config = \"mysql.hostinger.com.br\";\r\n $database_config = \"u538122687_up\";\r\n $username_config = \"u538122687_upadm\";\r\n  $password_config = \"uplant#17\";$hostname_config = \"mysql.hostinger.com.br\";\r\n $database_config = \"u538122687_up\";\r\n $username_config = \"u538122687_upadm\";\r\n  $password_config = \"uplant#17\";$hostname_config = \"mysql.hostinger.co', 1, NULL, 0, 1, '0000-00-00', 0, 'texto resumotexto resumotexto resumotexto resumotexto resumotexto resumotexto resumotexto resumotexto resumotexto resumotexto resumotexto resumotexto resumotexto resumotexto resumotexto resumotexto resumotexto resumotexto resumotexto resumotexto resumotex', 60302),
(2, 'Banana', 'Oshiro', ' min=\"30\" max=\"365\" min=\"30\" max=\"365\" min=\"30\" max=\"365\" min=\"30\" max=\"365\" min=\"30\" max=\"365\" min=\"30\" max=\"365\" min=\"30\" max=\"365\" min=\"30\" max=\"365\" min=\"30\" max=\"365\" min=\"30\" max=\"365\" min=\"30\" max=\"365\" min=\"30\" max=\"365\" min=\"30\" max=\"365\" min=\"30\" max=\"365\" min=\"30\" max=\"365\" min=\"30\" max=\"365\" min=\"30\" max=\"365\" min=\"30\" max=\"365\" min=\"30\" max=\"365\" min=\"30\" max=\"365\" min=\"30\" max=\"365\" min=\"30\" max=\"365\" min=\"30\" max=\"365\" min=\"30\" max=\"365\" min=\"30\" max=\"365\" min=\"30\" max=\"365\" min=\"', 2, 2, 100003, 2, '2017-08-31', 300, 'texto resumotexto resumotexto resumotexto resumotexto resumotexto resumotexto resumotexto resumotexto resumotexto resumotexto resumotexto resumotexto resumotexto resumotexto resumotexto resumotexto resumotexto resumotexto resumotexto resumotexto resumotex', 500000),
(3, 'Chiclete', 'Bubalu', '\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-\"\"-', 3, 1, 4018, 3, '2018-06-25', 90, 'texto resumotexto resumotexto resumotexto resumotexto resumotexto resumotexto resumotexto resumotexto resumotexto resumotexto resumotexto resumotexto resumotexto resumotexto resumotexto resumotexto resumotexto resumotexto resumotexto resumotexto resumotex', 20000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `investimento`
--
ALTER TABLE `investimento`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `investimento`
--
ALTER TABLE `investimento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
