-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 13-Nov-2018 às 19:44
-- Versão do servidor: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aula`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `absenteeism`
--

CREATE TABLE `absenteeism` (
  `id` int(11) NOT NULL,
  `absent` varchar(45) NOT NULL,
  `date` date NOT NULL,
  `student_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `class`
--

CREATE TABLE `class` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `nivel` varchar(45) NOT NULL,
  `certificate` varchar(45) NOT NULL,
  `studentid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `class_has_absenteeism`
--

CREATE TABLE `class_has_absenteeism` (
  `class_id` int(11) NOT NULL,
  `absenteeism_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `class_has_test`
--

CREATE TABLE `class_has_test` (
  `class_id` int(11) NOT NULL,
  `test_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `payment` varchar(45) NOT NULL,
  `date` date NOT NULL,
  `student_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `surname` varchar(45) NOT NULL,
  `cpf` varchar(45) NOT NULL,
  `cep` varchar(45) NOT NULL,
  `class` varchar(45) NOT NULL,
  `nivel` varchar(45) NOT NULL,
  `phone` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `student`
--

INSERT INTO `student` (`id`, `name`, `surname`, `cpf`, `cep`, `class`, `nivel`, `phone`) VALUES
(1, 'admin', 'admin', '80005698', '81.250.300', 'ingles9', 'A2', '0125546'),
(3, 'Jesus', 'Velasquez', '562674848', '456451054', 'English', 'A!', '45465456'),
(18, 'cheo', 'mago', '3209800', '900909', 'espanol', 'b2', '9908998'),
(19, 'usuario3', 'usuairo3', '983900', '80980', 'ingles ', 'c1', '990-0');

-- --------------------------------------------------------

--
-- Estrutura da tabela `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `note` varchar(45) NOT NULL,
  `studentid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE `user` (
  `Id` int(255) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `studentid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`Id`, `usuario`, `email`, `senha`, `studentid`) VALUES
(4, 'jesus', 'clevermatias@hotmail.com', '12345', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `Id` int(255) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`Id`, `usuario`, `email`, `senha`) VALUES
(1, '', '', ''),
(2, '12345', 'gdfgdf@fgdfg.com', '5ty45'),
(3, '12345', 'fgbfghgf@dfhfhf.com', 'vnbbfvn'),
(4, '23434543563', 'clevermatias@hotmail.com', 'fgefgrgt'),
(5, '12345', 'clevermatias@hotmail.com', '12345'),
(6, 'jesus', 'jesusbvnhbd@kgbkjf.com', '12345'),
(7, '12345', 'clevermatias@hotmail.com', '12345'),
(8, '12345', 'clevermatias@hotmail.com', '12345'),
(9, '12345', 'clevermatias@hotmail.com', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absenteeism`
--
ALTER TABLE `absenteeism`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_absenteeism_student1_idx` (`student_id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_studentid_student_idx` (`studentid`);

--
-- Indexes for table `class_has_absenteeism`
--
ALTER TABLE `class_has_absenteeism`
  ADD PRIMARY KEY (`class_id`,`absenteeism_id`),
  ADD KEY `fk_class_has_absenteeism_absenteeism1_idx` (`absenteeism_id`),
  ADD KEY `fk_class_has_absenteeism_class1_idx` (`class_id`);

--
-- Indexes for table `class_has_test`
--
ALTER TABLE `class_has_test`
  ADD PRIMARY KEY (`class_id`,`test_id`),
  ADD KEY `fk_class_has_test_test1_idx` (`test_id`),
  ADD KEY `fk_class_has_test_class1_idx` (`class_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_payments_student1_idx` (`student_id`),
  ADD KEY `fk_payments_class1_idx` (`class_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_test_student1_idx` (`studentid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `fk_user_student1_idx` (`studentid`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absenteeism`
--
ALTER TABLE `absenteeism`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `absenteeism`
--
ALTER TABLE `absenteeism`
  ADD CONSTRAINT `fk_absenteeism_student1` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `class`
--
ALTER TABLE `class`
  ADD CONSTRAINT `fk_studentid_student` FOREIGN KEY (`studentid`) REFERENCES `student` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `class_has_absenteeism`
--
ALTER TABLE `class_has_absenteeism`
  ADD CONSTRAINT `fk_class_has_absenteeism_absenteeism1` FOREIGN KEY (`absenteeism_id`) REFERENCES `absenteeism` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_class_has_absenteeism_class1` FOREIGN KEY (`class_id`) REFERENCES `class` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `class_has_test`
--
ALTER TABLE `class_has_test`
  ADD CONSTRAINT `fk_class_has_test_class1` FOREIGN KEY (`class_id`) REFERENCES `class` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_class_has_test_test1` FOREIGN KEY (`test_id`) REFERENCES `test` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `fk_payments_class1` FOREIGN KEY (`class_id`) REFERENCES `class` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_payments_student1` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `test`
--
ALTER TABLE `test`
  ADD CONSTRAINT `fk_test_student1` FOREIGN KEY (`studentid`) REFERENCES `student` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_user_student1` FOREIGN KEY (`studentid`) REFERENCES `student` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
