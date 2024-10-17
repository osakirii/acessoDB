-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17-Out-2024 às 20:02
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_autoria`
--

CREATE DATABASE `bd_autoria`;
USE `bd_autoria`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `autor`
--

CREATE TABLE `autor` (
  `cod_autor` int(11) NOT NULL,
  `nomeAutor` varchar(30) NOT NULL,
  `sobrenome` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nasc` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `autor`
--

INSERT INTO `autor` (`cod_autor`, `nomeAutor`, `sobrenome`, `email`, `nasc`) VALUES
(1, 'Machado', 'de Assis', 'machado@autor.com', '1839-06-21'),
(2, 'George', 'Orwell', 'george.orwell@autor.com', '1903-06-25'),
(3, 'Gabriel', 'García Márquez', 'gabriel.marquez@autor.com', '1927-03-06'),
(4, 'J.R.R.', 'Tolkien', 'jrr.tolkien@autor.com', '1892-01-03'),
(5, 'J.K.', 'Rowling', 'jk.rowling@autor.com', '1965-07-31'),
(6, 'Aldous', 'Huxley', 'aldous.huxley@autor.com', '1894-07-26'),
(7, 'Harper', 'Lee', 'harper.lee@autor.com', '1926-04-28');

-- --------------------------------------------------------

--
-- Estrutura da tabela `autoria`
--

CREATE TABLE `autoria` (
  `cod_livro` int(11) NOT NULL,
  `cod_autor` int(11) NOT NULL,
  `dataLancamento` date NOT NULL,
  `editora` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `autoria`
--

INSERT INTO `autoria` (`cod_livro`, `cod_autor`, `dataLancamento`, `editora`) VALUES
(1, 1, '1899-01-01', 'Editora A'),
(2, 2, '1949-06-08', 'Editora B'),
(3, 3, '1967-05-30', 'Editora C'),
(4, 4, '1954-07-29', 'Editora D'),
(4, 5, '1954-07-29', 'Editora D'),
(5, 5, '1997-06-26', 'Editora E'),
(6, 6, '1932-03-28', 'Editora F'),
(7, 7, '1960-07-11', 'Editora G');

-- --------------------------------------------------------

--
-- Estrutura da tabela `livro`
--

CREATE TABLE `livro` (
  `cod_livro` int(11) NOT NULL,
  `titulo` varchar(40) NOT NULL,
  `categoria` varchar(20) NOT NULL,
  `isbn` varchar(13) NOT NULL,
  `idioma` varchar(10) NOT NULL,
  `qtdePag` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `livro`
--

INSERT INTO `livro` (`cod_livro`, `titulo`, `categoria`, `isbn`, `idioma`, `qtdePag`) VALUES
(1, 'Dom Casmurro', 'Romance', '978-85-359-02', 'Português', 256),
(2, '1984', 'Ficção Científica', '978-0-451-524', 'Inglês', 328),
(3, 'Cem Anos de Solidão', 'Realismo Mágico', '978-85-325-08', 'Espanhol', 368),
(4, 'O Senhor dos Anéis', 'Fantasia', '978-85-325-04', 'Português', 1184),
(5, 'Harry Potter e a Pedra Filosofal', 'Fantasia', '978-85-325-07', 'Português', 309);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `login` varchar(5) NOT NULL,
  `senha` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`login`, `senha`) VALUES
('a', 123),
('b', 456);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `autor`
--
ALTER TABLE `autor`
  ADD PRIMARY KEY (`cod_autor`);

--
-- Índices para tabela `livro`
--
ALTER TABLE `livro`
  ADD PRIMARY KEY (`cod_livro`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `autor`
--
ALTER TABLE `autor`
  MODIFY `cod_autor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `livro`
--
ALTER TABLE `livro`
  MODIFY `cod_livro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
