-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 29-Jul-2020 às 05:05
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nome_categoria` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`id`, `nome_categoria`) VALUES
(1, 'Plantas Internas'),
(2, 'Plantas Externas'),
(3, 'Palmeiras'),
(4, 'Cauda de raposa');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

CREATE TABLE `contato` (
  `id` int(11) NOT NULL,
  `imagem` varchar(255) NOT NULL,
  `texto` varchar(255) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `cargo` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `contato`
--

INSERT INTO `contato` (`id`, `imagem`, `texto`, `nome`, `cargo`, `email`, `link`) VALUES
(1, 'https://s2.glbimg.com/jsaPuF7nO23vRxQkuJ_V3WgouKA=/e.glbimg.com/og/ed/f/original/2014/06/10/461777879.jpg', 'Colocar algo aqui', 'Pessoa Aleatória', 'Indefinido', 'pessoa@hotmaill,com', 'ainda nada'),
(2, 'https://www.chalestriunfo.com.br/estilo/Adilson/foto1.webp', 'Empresário sustentável que acredita no futuro', 'Adilson G. da Rocha', 'CEO', 'adilson.rocha69@hotmail.com', 'https://api.whatsapp.com/send?phone=5511974371974&text='),
(3, 'https://media-exp1.licdn.com/dms/image/C4E03AQE8XEFlihnvBQ/profile-displayphoto-shrink_200_200/0?e=1601510400&v=beta&t=eQiA-CVqfr0iplvnHSnz0ZdUDDqnSVEv0hgoQuphveQ', 'C0dando o futuro!', 'Guilherme F. G. Rocha', 'Dev', 'gufigr@hotmail.com', 'https://www.linkedin.com/in/guifgr/');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `id_categoria` int(11) DEFAULT NULL,
  `preco` decimal(7,2) DEFAULT NULL,
  `imagem_link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `id_categoria`, `preco`, `imagem_link`) VALUES
(4, 'palmeira imperial grande', 3, '300.00', 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/7a/Imperial_palm_trees.JPG/800px-Imperial_palm_trees.JPG'),
(5, 'palmeira imperial pequena', 3, '200.00', 'https://mudasherculandia.com.br/site/image/cache/catalog/A%20palmeiras/Palmeira%20Imperial%202%20mt-870x1110.jpg'),
(6, 'Rabo De Raposa', 4, '55.55', 'https://http2.mlstatic.com/kit-2-planta-submersa-rabo-de-raposa-low-tech-ceratophyllum-D_NQ_NP_904095-MLB42097203919_062020-F.webp'),
(7, 'jade', 1, '10.36', 'https://www.sitiodamata.com.br/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/p/l/planta-jade-crassula-ovata..jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'gui', '101001', '2020-07-15 23:11:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contato`
--
ALTER TABLE `contato`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `produtos`
--
ALTER TABLE `produtos`
  ADD CONSTRAINT `produtos_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
