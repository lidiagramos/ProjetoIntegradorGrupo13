-- phpMyAdmin SQL Dump
-- version 4.6.0
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 20-Abr-2024 às 15:57
-- Versão do servidor: 5.7.12
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistema_petshop2024`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `atendimento`
--

CREATE TABLE `atendimento` (
  `idatendimento` int(11) NOT NULL,
  `pet_idpet` int(11) NOT NULL,
  `idcliente` int(11) NOT NULL,
  `funcionario_veterinario` int(11) NOT NULL,
  `funcionario_entrada` int(11) NOT NULL,
  `funcionario_saida` int(11) NOT NULL,
  `data_hora_entrada` datetime NOT NULL,
  `data_hora_saida` datetime NOT NULL,
  `descricao` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `atendimento`
--

INSERT INTO `atendimento` (`idatendimento`, `pet_idpet`, `idcliente`, `funcionario_veterinario`, `funcionario_entrada`, `funcionario_saida`, `data_hora_entrada`, `data_hora_saida`, `descricao`) VALUES
(1, 1, 1, 4, 3, 5, '2024-04-19 10:27:00', '2024-04-19 10:30:00', 'Gatolina'),
(2, 3, 1, 4, 4, 2, '2021-02-05 12:25:13', '2021-02-05 12:25:13', 'teste'),
(3, 3, 3, 3, 3, 3, '2024-03-20 12:52:01', '2024-03-20 12:58:01', 'Atendimento excelente.'),
(4, 4, 4, 4, 4, 4, '2024-03-20 12:56:01', '2024-03-20 12:52:01', 'Atendimento correto.'),
(5, 5, 5, 5, 5, 5, '2024-03-20 12:54:01', '2024-03-20 12:57:01', 'Atendimento comum.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `atendimento_itens`
--

CREATE TABLE `atendimento_itens` (
  `idservico` int(11) NOT NULL,
  `idatendimento` int(11) NOT NULL,
  `descricao` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `atendimento_itens`
--

INSERT INTO `atendimento_itens` (`idservico`, `idatendimento`, `descricao`) VALUES
(4, 1, 'teste'),
(4, 2, 'teste'),
(1, 1, 'Gatolina'),
(5, 1, 'testes hoje');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `idcliente` int(11) NOT NULL,
  `idpessoa` int(11) NOT NULL,
  `cpf_cnpj` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`idcliente`, `idpessoa`, `cpf_cnpj`) VALUES
(1, 5, '476.097.218-83'),
(2, 2, '98765432176'),
(3, 3, '39865432178'),
(4, 4, '65709843256'),
(5, 5, '23498754321');

-- --------------------------------------------------------

--
-- Estrutura da tabela `compra_venda`
--

CREATE TABLE `compra_venda` (
  `idcompra_venda` int(11) NOT NULL,
  `idfornecedor` int(11) NOT NULL,
  `cliente_idcliente` int(11) NOT NULL,
  `descricao` varchar(45) NOT NULL,
  `valor` double NOT NULL,
  `nro_nota` varchar(45) NOT NULL,
  `tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `compra_venda`
--

INSERT INTO `compra_venda` (`idcompra_venda`, `idfornecedor`, `cliente_idcliente`, `descricao`, `valor`, `nro_nota`, `tipo`) VALUES
(1, 3, 2, 'teste', 1250, '12345', 1),
(2, 2, 2, 'Okay', 350, '40028923', 2),
(3, 3, 3, 'Correto', 450, '40028924', 3),
(4, 4, 4, 'Correto', 550, '40028925', 4),
(5, 5, 5, 'Excelente', 650, '40028928', 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `financeiro`
--

CREATE TABLE `financeiro` (
  `idfinanceiro` int(11) NOT NULL,
  `idatendimento` int(11) NOT NULL,
  `compra_venda` int(11) NOT NULL,
  `valor` double NOT NULL,
  `data_vencimento` datetime NOT NULL,
  `data_pagamento` datetime NOT NULL,
  `status` int(11) NOT NULL,
  `financeiro_tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `financeiro`
--

INSERT INTO `financeiro` (`idfinanceiro`, `idatendimento`, `compra_venda`, `valor`, `data_vencimento`, `data_pagamento`, `status`, `financeiro_tipo`) VALUES
(1, 1, 1, 250, '2024-05-21 12:50:01', '2024-05-21 12:57:01', 1, 1),
(2, 2, 2, 350, '2024-05-21 12:50:01', '2024-05-21 12:58:01', 2, 2),
(3, 3, 3, 450, '2024-05-21 12:50:01', '2024-05-21 12:56:01', 3, 3),
(4, 2, 2, 250, '2024-04-19 11:07:00', '2024-04-19 11:07:00', 1, 1),
(5, 5, 5, 650, '2024-05-21 12:50:01', '2024-05-21 12:53:01', 5, 5),
(6, 2, 1, 1250, '2024-04-17 00:00:00', '2024-04-18 00:00:00', 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecedor`
--

CREATE TABLE `fornecedor` (
  `idfornecedor` int(11) NOT NULL,
  `idpessoa` int(11) NOT NULL,
  `nomefantasia` varchar(45) NOT NULL,
  `razaosocial` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `fornecedor`
--

INSERT INTO `fornecedor` (`idfornecedor`, `idpessoa`, `nomefantasia`, `razaosocial`) VALUES
(1, 1, 'Rações Renata', 'RAÇÕES RENATA LTDA.'),
(2, 2, 'Distribuidora Mundo Animal', 'DISTRIBUIDORA MUNDO ANIMAL LTDA.'),
(3, 3, 'Acelera PDV', 'ACELERA PDV LTDA.'),
(4, 4, 'Alcon Pet', 'ALCON PET'),
(5, 5, 'PremieRpet', 'PREMIERPET LTDA.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcao`
--

CREATE TABLE `funcao` (
  `idfuncao` int(11) NOT NULL,
  `descricao` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `funcao`
--

INSERT INTO `funcao` (`idfuncao`, `descricao`) VALUES
(1, 'Gerente'),
(2, 'Caixa'),
(3, 'Atendente'),
(4, 'Médico Veterinário'),
(5, 'Auxiliar de Serviços Gerais'),
(6, 'teste');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `matricula` int(11) NOT NULL,
  `pessoa_idpessoa` int(11) NOT NULL,
  `funcao_idfuncao` int(11) NOT NULL,
  `data_admissao` date NOT NULL,
  `data_demissao` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`matricula`, `pessoa_idpessoa`, `funcao_idfuncao`, `data_admissao`, `data_demissao`) VALUES
(1, 1, 1, '2021-05-24', '2021-05-26'),
(2, 2, 2, '2021-08-23', NULL),
(3, 3, 3, '2021-08-23', NULL),
(4, 4, 4, '2021-08-23', NULL),
(5, 5, 5, '2021-08-23', NULL),
(12, 7, 4, '2024-04-14', '2024-04-17');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario_funcao`
--

CREATE TABLE `funcionario_funcao` (
  `funcionario_matricula` int(11) NOT NULL,
  `funcao_idfuncao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `funcionario_funcao`
--

INSERT INTO `funcionario_funcao` (`funcionario_matricula`, `funcao_idfuncao`) VALUES
(1, 5),
(2, 2),
(3, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `orcamento`
--

CREATE TABLE `orcamento` (
  `idorcamento` int(11) NOT NULL,
  `idatendimento` int(11) NOT NULL,
  `valor` double NOT NULL,
  `data_validade` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `orcamento`
--

INSERT INTO `orcamento` (`idorcamento`, `idatendimento`, `valor`, `data_validade`) VALUES
(1, 1, 1250, '2024-05-23 00:00:00'),
(2, 2, 350, '2024-04-13 00:00:00'),
(3, 3, 450, '2024-04-13 00:00:00'),
(4, 1, 1250, '2024-04-19 11:26:00'),
(5, 5, 650, '2024-04-13 00:00:00'),
(8, 4, 1250.2, '2024-04-18 00:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoa`
--

CREATE TABLE `pessoa` (
  `idpessoa` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `idade` varchar(45) NOT NULL,
  `telefone` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pessoa`
--

INSERT INTO `pessoa` (`idpessoa`, `nome`, `idade`, `telefone`) VALUES
(1, 'Paolla Bracho Santos', '24', '11988008801'),
(2, 'Paulina Bracho', '24', '11977007700'),
(3, 'Carlos Daniel', '23', '11966006600'),
(4, 'Kerosene da Silva', '30', '11955005500'),
(5, 'Juventino dos Santos', '40', '11944004400'),
(6, 'Jonas Manoel', '37', '11940028922'),
(7, 'Marcos Paulo', '32', '11988376543'),
(8, 'Maria Clara', '45', '11923459876'),
(9, 'Karen Castro', '27', '11900882345'),
(10, 'Lorena Souza', '41', '11900225689'),
(12, 'LÃ­dia Garcia Ramos da Silva', '20', '11988174613');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pet`
--

CREATE TABLE `pet` (
  `idpet` int(11) NOT NULL,
  `cliente_idcliente` int(11) NOT NULL,
  `raca_idraca` int(11) NOT NULL,
  `pet_tipo_idpet_tipo` int(11) NOT NULL,
  `tipo` varchar(45) NOT NULL,
  `idade` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pet`
--

INSERT INTO `pet` (`idpet`, `cliente_idcliente`, `raca_idraca`, `pet_tipo_idpet_tipo`, `tipo`, `idade`) VALUES
(1, 1, 3, 9, '1', '20'),
(2, 2, 2, 2, 'Grande', '15'),
(3, 3, 3, 3, 'Pequeno', '3'),
(4, 4, 4, 4, 'Pequeno', '2'),
(5, 5, 5, 5, 'Médio', '8');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pet_raca`
--

CREATE TABLE `pet_raca` (
  `idpet_raca` int(11) NOT NULL,
  `descricao` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pet_raca`
--

INSERT INTO `pet_raca` (`idpet_raca`, `descricao`) VALUES
(1, 'Shi-Tzuuuu'),
(2, 'Siamês'),
(3, 'Maitaca'),
(4, 'Betta'),
(5, 'teste');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pet_tipo`
--

CREATE TABLE `pet_tipo` (
  `idpet_tipo` int(11) NOT NULL,
  `descricao` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pet_tipo`
--

INSERT INTO `pet_tipo` (`idpet_tipo`, `descricao`) VALUES
(1, 'Cachorro'),
(2, 'Gato'),
(3, 'Pássaro'),
(4, 'Peixe'),
(5, 'Coelho'),
(9, 'Shi-Tzuuuu');

-- --------------------------------------------------------

--
-- Estrutura da tabela `servico`
--

CREATE TABLE `servico` (
  `idservico` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `servico`
--

INSERT INTO `servico` (`idservico`, `nome`) VALUES
(1, 'Banho'),
(2, 'Tosa'),
(3, 'Corte de Unha'),
(4, 'Vacinação'),
(5, 'Veterinário'),
(12345, 'testezainho');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `atendimento`
--
ALTER TABLE `atendimento`
  ADD PRIMARY KEY (`idatendimento`),
  ADD KEY `pet_idpet` (`pet_idpet`),
  ADD KEY `idcliente` (`idcliente`);

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idcliente`),
  ADD KEY `idpessoa` (`idpessoa`);

--
-- Indexes for table `compra_venda`
--
ALTER TABLE `compra_venda`
  ADD PRIMARY KEY (`idcompra_venda`);

--
-- Indexes for table `financeiro`
--
ALTER TABLE `financeiro`
  ADD PRIMARY KEY (`idfinanceiro`);

--
-- Indexes for table `fornecedor`
--
ALTER TABLE `fornecedor`
  ADD PRIMARY KEY (`idfornecedor`),
  ADD KEY `idpessoa` (`idpessoa`);

--
-- Indexes for table `funcao`
--
ALTER TABLE `funcao`
  ADD PRIMARY KEY (`idfuncao`);

--
-- Indexes for table `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`matricula`),
  ADD KEY `pessoa_idpessoa` (`pessoa_idpessoa`);

--
-- Indexes for table `orcamento`
--
ALTER TABLE `orcamento`
  ADD PRIMARY KEY (`idorcamento`),
  ADD KEY `idatendimento` (`idatendimento`);

--
-- Indexes for table `pessoa`
--
ALTER TABLE `pessoa`
  ADD PRIMARY KEY (`idpessoa`);

--
-- Indexes for table `pet`
--
ALTER TABLE `pet`
  ADD PRIMARY KEY (`idpet`),
  ADD KEY `raca_idraca` (`raca_idraca`),
  ADD KEY `cliente_idcliente` (`cliente_idcliente`),
  ADD KEY `pet_tipo_idpet_tipo` (`pet_tipo_idpet_tipo`);

--
-- Indexes for table `pet_raca`
--
ALTER TABLE `pet_raca`
  ADD PRIMARY KEY (`idpet_raca`);

--
-- Indexes for table `pet_tipo`
--
ALTER TABLE `pet_tipo`
  ADD PRIMARY KEY (`idpet_tipo`);

--
-- Indexes for table `servico`
--
ALTER TABLE `servico`
  ADD PRIMARY KEY (`idservico`);

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `atendimento`
--
ALTER TABLE `atendimento`
  ADD CONSTRAINT `atendimento_ibfk_1` FOREIGN KEY (`pet_idpet`) REFERENCES `pet` (`idpet`),
  ADD CONSTRAINT `atendimento_ibfk_2` FOREIGN KEY (`idcliente`) REFERENCES `cliente` (`idcliente`);

--
-- Limitadores para a tabela `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `cliente_ibfk_1` FOREIGN KEY (`idpessoa`) REFERENCES `pessoa` (`idpessoa`);

--
-- Limitadores para a tabela `fornecedor`
--
ALTER TABLE `fornecedor`
  ADD CONSTRAINT `fornecedor_ibfk_1` FOREIGN KEY (`idpessoa`) REFERENCES `pessoa` (`idpessoa`);

--
-- Limitadores para a tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD CONSTRAINT `funcionario_ibfk_1` FOREIGN KEY (`pessoa_idpessoa`) REFERENCES `pessoa` (`idpessoa`);

--
-- Limitadores para a tabela `orcamento`
--
ALTER TABLE `orcamento`
  ADD CONSTRAINT `orcamento_ibfk_1` FOREIGN KEY (`idatendimento`) REFERENCES `atendimento` (`idatendimento`);

--
-- Limitadores para a tabela `pet`
--
ALTER TABLE `pet`
  ADD CONSTRAINT `pet_ibfk_1` FOREIGN KEY (`raca_idraca`) REFERENCES `pet_raca` (`idpet_raca`),
  ADD CONSTRAINT `pet_ibfk_2` FOREIGN KEY (`cliente_idcliente`) REFERENCES `cliente` (`idcliente`),
  ADD CONSTRAINT `pet_ibfk_3` FOREIGN KEY (`pet_tipo_idpet_tipo`) REFERENCES `pet_tipo` (`idpet_tipo`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
