-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 19/11/2024 às 20:49
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `kattar`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `associado`
--

CREATE TABLE `associado` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) DEFAULT NULL,
  `cnpj_cooperativa` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `associado`
--

INSERT INTO `associado` (`id`, `nome`, `cnpj_cooperativa`) VALUES
(1, 'Regilan Meira Silva', '00.000.000/0000-00'),
(2, 'Antônio Junior', '00.000.000/0000-00'),
(3, 'Ana Marta da Silva', '00.000.000/0000-00\n'),
(4, 'José Vicente Silva', '00.000.000/0000-00'),
(5, 'Ricardo Silva', '00.000.000/0000-00'),
(6, 'Rafael Senna', '00.000.000/0000-00'),
(7, 'Celina Silva', '00.000.000/0000-00');

-- --------------------------------------------------------

--
-- Estrutura para tabela `coleta`
--

CREATE TABLE `coleta` (
  `id` int(11) NOT NULL,
  `data_coleta` date NOT NULL,
  `turno_coleta` varchar(60) NOT NULL,
  `estado` varchar(60) NOT NULL,
  `municipio` varchar(60) NOT NULL,
  `bairro` varchar(60) NOT NULL,
  `logradouro` varchar(80) NOT NULL,
  `descricao` text NOT NULL,
  `foto_residuo` text NOT NULL,
  `id_tipo_material` int(11) DEFAULT NULL,
  `email_usuario` varchar(200) DEFAULT NULL,
  `id_status` int(11) DEFAULT NULL,
  `latitude` decimal(10,8) DEFAULT NULL,
  `longitude` decimal(11,8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `coleta`
--

INSERT INTO `coleta` (`id`, `data_coleta`, `turno_coleta`, `estado`, `municipio`, `bairro`, `logradouro`, `descricao`, `foto_residuo`, `id_tipo_material`, `email_usuario`, `id_status`, `latitude`, `longitude`) VALUES
(20, '2024-11-08', 'Matutino', 'BA', 'Ilheus', 'Salobrinho', 'Rodovia Jorge Amado', 'Garrafas de refrigerante e suco', '../uploads/2024_11_07_20_38_46jpeg', 3, 'regilan@gmail.com', 4, -14.82199750, -39.02698467),
(21, '2024-11-07', 'Vespertino', 'BA', 'Ilheus', 'Boa Vista', 'Rua A', 'Caixas de papel de supermercado', '../uploads/2024_11_07_22_00_48jpeg', 2, 'regilan@gmail.com', 1, -14.82199750, -39.02698467),
(22, '2024-11-07', 'Matutino', 'BA', 'Ilheus', 'Salobrinho', 'Rua X', 'Garrafas de vinho', '../uploads/2024_11_07_23_49_00jpeg', 4, 'benicio@gmail.com', 4, -14.82218650, -39.02692050),
(24, '2024-11-12', 'Vespertino', 'BA', 'Ilhéus', 'Centro', 'Rua XYZ, n 45', 'Garrafas de azeite de oliva', '../uploads/2024_11_08_13_58_54jpeg', 4, 'regilan@gmail.com', 4, -14.82193207, -39.02711846),
(25, '2024-11-12', 'Matutino', 'BA', 'Ilhéus', 'Centro', 'Rua XYZ, n 45', 'Garrafas de vinho usadas', '../uploads/2024_11_08_14_18_19jpeg', 4, 'maria@gmail.com', 4, -14.82197414, -39.02709439),
(26, '2024-11-21', 'Matutino', 'BA', 'Ilheus', 'Boa Vista', 'Rua A', 'Embalagens de isopor', '../uploads/2024_11_08_14_23_09jpeg', 7, 'regilan@gmail.com', 1, -14.82220238, -39.02697050),
(27, '2024-11-13', 'Vespertino', 'BA', 'Ilhéus', 'Centro', 'Rua ZYC, n 56', 'Embalagens de isopor de pratos descartaveis', '../uploads/2024_11_08_14_34_35jpeg', 7, 'mayana@gmail.com', 3, -14.82201100, -39.02688900),
(28, '2024-11-13', 'Não informado', 'BA', 'Ilheus', 'São Francisco', 'Av. ABC, n 40', 'Garrafas de vinho', '../uploads/2024_11_08_14_39_34jpeg', 4, 'mayana@gmail.com', 4, -14.82197414, -39.02709439);

-- --------------------------------------------------------

--
-- Estrutura para tabela `cooperativa`
--

CREATE TABLE `cooperativa` (
  `cnpj` varchar(20) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `telefone` varchar(14) NOT NULL,
  `estado` varchar(60) NOT NULL,
  `municipio` varchar(60) NOT NULL,
  `bairro` varchar(60) NOT NULL,
  `logradouro` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `cooperativa`
--

INSERT INTO `cooperativa` (`cnpj`, `nome`, `email`, `senha`, `telefone`, `estado`, `municipio`, `bairro`, `logradouro`) VALUES
('00.000.000/0000-25', 'COOP URUCUCA', 'coop@urucuca.com.br', '$2y$10$4/yCPoKCGvtXb/vmFRq7B.PCUoUsfgVQsXUJlm2I.MBLfSpj.ayNS', '(73) 9875-6254', 'BA', 'Uruçuca', 'Boa Vista', 'Rua A'),
('00.000.000/0002-20', 'COOP ITACARE', 'coop@itacare.com.br', '$2y$10$uOtvzf24tNIVgG2lRl2EZe5Nvebnp0ly5z8a7xPKD3rzQWHe8YxVO', '(73) 9999-8888', 'BA', 'Ilhéus', 'Boa Vista', 'Rua A'),
('00.000.000/0002-21', 'COOP ITABUNA', 'regilan@gmail.com', '$2y$10$ZW266D58XGr3mS20oxNB7.oTh/Y8FYQypRJkGKwb.Dy20kH/0le3S', '(73) 8823-7123', 'BA', 'Ilheus', 'Boa Vista', 'Rua A'),
('00.000.000/0002-28', 'COOP CANAVIEIRAS', 'coop@canavieiras.com.br', '$2y$10$Lju6GFm0NxtluAZvFR1rke3EDDCghWbISKn13nzkM4gFRbLMMAZ3q', '(73) 8456-1265', 'MS', 'Canavieiras', 'Boa Vista', 'Rua A');

-- --------------------------------------------------------

--
-- Estrutura para tabela `historico_coleta`
--

CREATE TABLE `historico_coleta` (
  `id` int(11) NOT NULL,
  `data_historico` date DEFAULT NULL,
  `observacao` text NOT NULL,
  `id_status` int(11) DEFAULT NULL,
  `id_associado` int(11) DEFAULT NULL,
  `id_coleta` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `historico_coleta`
--

INSERT INTO `historico_coleta` (`id`, `data_historico`, `observacao`, `id_status`, `id_associado`, `id_coleta`) VALUES
(4, '2024-11-13', 'Quantidade pequena para ser coletada', 2, 1, 20),
(5, '2024-11-14', 'Uma equipe foi destinada para coletar', 2, 2, 20),
(6, '2024-11-15', 'As garrafas serão coletadas no dia 15/11', 3, 1, 22),
(7, '2024-11-08', 'Será feira uma tentativa', 2, 2, 20),
(8, '2024-11-08', 'Será analisado pelo nosso time técnico', 2, 3, 24),
(9, '2024-11-08', 'Não foi possível coletar pois o material não estava mais no local.', 4, 4, 24),
(10, '2024-11-08', 'Coleta realizada.', 4, 3, 20),
(11, '2024-11-09', 'Coleta concluída', 4, 3, 22),
(12, '2024-11-07', 'Material coletado', 4, 1, 25),
(13, '2024-11-08', 'A colaboradora Celina aguardará disponibilidade de horário para realizar a coleta', 6, 7, 27),
(14, '2024-11-09', 'O colaborador Rafael Senna foi encaminhado para realizar a coleta', 3, 6, 27),
(15, '2024-11-13', 'Chegando ao local não havia garrafas conforme indicado.', 4, 7, 28);

-- --------------------------------------------------------

--
-- Estrutura para tabela `status_coleta`
--

CREATE TABLE `status_coleta` (
  `id` int(11) NOT NULL,
  `descricao` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `status_coleta`
--

INSERT INTO `status_coleta` (`id`, `descricao`) VALUES
(1, 'Enviado'),
(2, 'Em análise'),
(3, 'Em andamento'),
(4, 'Concluído'),
(5, 'Pendência'),
(6, 'Aguardando disponibilidade');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tipo_material`
--

CREATE TABLE `tipo_material` (
  `id` int(11) NOT NULL,
  `descricao` text NOT NULL,
  `observacao` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tipo_material`
--

INSERT INTO `tipo_material` (`id`, `descricao`, `observacao`) VALUES
(2, 'Papelão', 'Caixas de papelão'),
(3, 'Plástico PET', 'Nada'),
(4, 'Vidro', 'Vidros'),
(5, 'Latas', 'Latas em geral'),
(6, 'Material eletrônico', 'Eletrônicos'),
(7, 'Isopor', 'Isopor'),
(8, 'Metal', 'Metal de eletronicos');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `email` varchar(255) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `senha` text NOT NULL,
  `telefone` varchar(14) NOT NULL,
  `estado` varchar(60) NOT NULL,
  `municipio` varchar(60) NOT NULL,
  `bairro` varchar(60) NOT NULL,
  `logradouro` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`email`, `nome`, `senha`, `telefone`, `estado`, `municipio`, `bairro`, `logradouro`) VALUES
('benicio@gmail.com', 'Benicio Freitas Silva', '$2y$10$qB5GtKFOWju6kNItBX.U6Ovv5czWNTDO.N17K36sIaTXp65RooynO', '(73) 9999-9999', 'BA', 'Ilheus', 'Boa Vista', 'Rua ABC'),
('maria@gmail.com', 'Maria da Silva Pereira', '$2y$10$gnxh0FjGqBLDxR6RKoJ1wOKqr4PzSx4gM3hyfpmxZosrkLnUZM1.m', '(73) 9999-6666', 'BA', 'Ilheus', 'Boa Vista', 'Rua ABC'),
('mayana@gmail.com', 'Mayana Leandra', '$2y$10$cmjmf4PrSIx/GOa0nRYkG.IaBmIPU4EI2an95esoyb9yaS3UlZ17u', '(73) 8888-4444', 'BA', 'Ilhéus', 'Centro', 'Rua ABC'),
('regilan@gmail.com', 'Regilan Meira Silva', '$2y$10$45iCcGkIe90qe94hELSRpexIZT5aaU7lywhnnahaLcfhuCi7iG9L6', '(73) 8823-7123', 'BA', 'Ilhéus', 'Boa Vista', 'Rua A');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `associado`
--
ALTER TABLE `associado`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `coleta`
--
ALTER TABLE `coleta`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `cooperativa`
--
ALTER TABLE `cooperativa`
  ADD PRIMARY KEY (`cnpj`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `telefone` (`telefone`);

--
-- Índices de tabela `historico_coleta`
--
ALTER TABLE `historico_coleta`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `status_coleta`
--
ALTER TABLE `status_coleta`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `tipo_material`
--
ALTER TABLE `tipo_material`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `telefone` (`telefone`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `associado`
--
ALTER TABLE `associado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `coleta`
--
ALTER TABLE `coleta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de tabela `historico_coleta`
--
ALTER TABLE `historico_coleta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `status_coleta`
--
ALTER TABLE `status_coleta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `tipo_material`
--
ALTER TABLE `tipo_material`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
