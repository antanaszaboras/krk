-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2018 at 09:18 PM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `karkasai`
--

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `state` int(11) DEFAULT NULL,
  `company_name` varchar(150) NOT NULL,
  `short_name` varchar(150) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `date_updated` datetime DEFAULT NULL,
  `is_deleted` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `state`, `company_name`, `short_name`, `date_created`, `date_updated`, `is_deleted`) VALUES
(1, 1, 'Contoso Inc.', 'contoso', '2018-10-09 00:00:00', '2018-10-09 00:00:00', 0),
(2, 1, 'Varsum Ltd.', 'varsum', '2018-10-09 00:00:00', '2018-10-09 00:00:00', 0),
(3, 1, 'Green Planet Oil corp.', 'gpoil', '2018-10-09 00:00:00', '2018-10-09 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `state` int(11) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `date_updated` datetime DEFAULT NULL,
  `updated_by_user` int(11) DEFAULT NULL,
  `client_id` int(11) NOT NULL,
  `is_deleted` tinyint(4) DEFAULT NULL,
  `is_default` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `surname`, `email`, `phone`, `state`, `date_created`, `date_updated`, `updated_by_user`, `client_id`, `is_deleted`, `is_default`) VALUES
(1, 'Astible', 'Mastrken', 'astbil@contoso.com', '+3454484409844', 1, '2018-10-09 00:00:00', '2018-10-09 00:00:00', 1, 1, 0, 1),
(2, 'Eskoban', 'Glazdioni', 'eskoglaz@Verst.eu', '+3454122646', 1, '2018-10-09 00:00:00', '2018-10-09 00:00:00', 2, 2, 0, 1),
(3, 'Apsilon', 'Glrool', 'aspil.gr@gpoil.com', '+44566512321', 1, '2018-10-09 00:00:00', '2018-10-09 00:00:00', 2, 3, 0, 1),
(4, 'Greglom', 'Trasker', 'g.trasker@gpoil.com', '+48746546131', 1, '2018-10-09 00:00:00', '2018-10-09 00:00:00', NULL, 3, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `id` int(11) NOT NULL,
  `state` int(11) DEFAULT NULL,
  `created_user_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date_created` datetime DEFAULT NULL,
  `date_updated` datetime DEFAULT NULL,
  `date_completed` datetime DEFAULT NULL,
  `description` text,
  `is_deleted` tinyint(4) DEFAULT NULL,
  `task_group_id` int(11) NOT NULL,
  `contact_id` int(11) NOT NULL,
  `asigned_user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`id`, `state`, `created_user_id`, `client_id`, `title`, `date_created`, `date_updated`, `date_completed`, `description`, `is_deleted`, `task_group_id`, `contact_id`, `asigned_user_id`) VALUES
(1, 1, 1, 1, 'Atsisųsti ir įdiegti karkasą', '2018-10-09 00:00:00', NULL, NULL, NULL, NULL, 1, 1, 2),
(2, 1, 1, 1, 'Sukonfiguruoti karkasą', '2018-10-09 00:00:00', NULL, NULL, NULL, NULL, 1, 1, 2),
(3, 1, 1, 1, 'Sukurti logiką', '2018-10-09 00:00:00', NULL, NULL, '4.	Sukurti modelį, pagrindinį šabloną, valdiklį bei vaizdą informacijai iš duomenų bazės išrinkti bei pavaizduoti, naudojant pirmame laboratoriniame darbe sukurtą HTML svetainę.', NULL, 1, 1, 2),
(4, 1, 1, 2, 'Pagination TEST', '2018-10-30 00:00:00', '2018-10-30 00:00:00', NULL, 'Testing pagination lib', NULL, 2, 2, 1),
(5, 1, 1, 2, 'Pagination TEST', '2018-10-30 00:00:00', '2018-10-30 00:00:00', NULL, 'Testing pagination lib', NULL, 2, 2, 1),
(6, 1, 1, 2, 'Pagination TEST', '2018-10-30 00:00:00', '2018-10-30 00:00:00', NULL, 'Testing pagination lib', NULL, 2, 2, 1),
(7, 1, 1, 2, 'Pagination TEST', '2018-10-30 00:00:00', '2018-10-30 00:00:00', NULL, 'Testing pagination lib', NULL, 2, 2, 1),
(8, 1, 1, 2, 'Pagination TEST', '2018-10-30 00:00:00', '2018-10-30 00:00:00', NULL, 'Testing pagination lib', NULL, 2, 2, 1),
(9, 1, 1, 2, 'Pagination TEST', '2018-10-30 00:00:00', '2018-10-30 00:00:00', NULL, 'Testing pagination lib', NULL, 2, 2, 1),
(10, 1, 1, 2, 'Pagination TEST', '2018-10-30 00:00:00', '2018-10-30 00:00:00', NULL, 'Testing pagination lib', NULL, 2, 2, 1),
(11, 1, 1, 2, 'Pagination TEST', '2018-10-30 00:00:00', '2018-10-30 00:00:00', NULL, 'Testing pagination lib', NULL, 2, 2, 1),
(12, 1, 1, 2, 'Pagination TEST', '2018-10-30 00:00:00', '2018-10-30 00:00:00', NULL, 'Testing pagination lib', NULL, 2, 2, 1),
(13, 1, 1, 2, 'Pagination TEST', '2018-10-30 00:00:00', '2018-10-30 00:00:00', NULL, 'Testing pagination lib', NULL, 2, 2, 1),
(14, 1, 1, 2, 'Pagination TEST', '2018-10-30 00:00:00', '2018-10-30 00:00:00', NULL, 'Testing pagination lib', NULL, 2, 2, 1),
(15, 1, 1, 2, 'Pagination TEST', '2018-10-30 00:00:00', '2018-10-30 00:00:00', NULL, 'Testing pagination lib', NULL, 2, 2, 1),
(16, 1, 1, 2, 'Pagination TEST', '2018-10-30 00:00:00', '2018-10-30 00:00:00', NULL, 'Testing pagination lib', NULL, 2, 2, 1),
(17, 1, 1, 2, 'Pagination TEST', '2018-10-30 00:00:00', '2018-10-30 00:00:00', NULL, 'Testing pagination lib', NULL, 2, 2, 1),
(18, 1, 1, 2, 'Pagination TEST', '2018-10-30 00:00:00', '2018-10-30 00:00:00', NULL, 'Testing pagination lib', NULL, 2, 2, 1),
(19, 1, 1, 2, 'Pagination TEST', '2018-10-30 00:00:00', '2018-10-30 00:00:00', NULL, 'Testing pagination lib', NULL, 2, 2, 1),
(20, 1, 1, 2, 'Pagination TEST', '2018-10-30 00:00:00', '2018-10-30 00:00:00', NULL, 'Testing pagination lib', NULL, 2, 2, 1),
(21, 1, 1, 2, 'Pagination TEST', '2018-10-30 00:00:00', '2018-10-30 00:00:00', NULL, 'Testing pagination lib', NULL, 2, 2, 1),
(22, 1, 1, 2, 'Pagination TEST', '2018-10-30 00:00:00', '2018-10-30 00:00:00', NULL, 'Testing pagination lib', NULL, 2, 2, 1),
(23, 1, 1, 2, 'Pagination TEST', '2018-10-30 00:00:00', '2018-10-30 00:00:00', NULL, 'Testing pagination lib', NULL, 2, 2, 1),
(24, 1, 1, 2, 'Pagination TEST', '2018-10-30 00:00:00', '2018-10-30 00:00:00', NULL, 'Testing pagination lib', NULL, 2, 2, 1),
(25, 1, 1, 2, 'Pagination TEST', '2018-10-30 00:00:00', '2018-10-30 00:00:00', NULL, 'Testing pagination lib', NULL, 2, 2, 1),
(26, 1, 1, 2, 'Pagination TEST', '2018-10-30 00:00:00', '2018-10-30 00:00:00', NULL, 'Testing pagination lib', NULL, 2, 2, 1),
(27, 1, 1, 2, 'Pagination TEST', '2018-10-30 00:00:00', '2018-10-30 00:00:00', NULL, 'Testing pagination lib', NULL, 2, 2, 1),
(28, 1, 1, 2, 'Pagination TEST', '2018-10-30 00:00:00', '2018-10-30 00:00:00', NULL, 'Testing pagination lib', NULL, 2, 2, 1),
(29, 1, 1, 2, 'Pagination TEST', '2018-10-30 00:00:00', '2018-10-30 00:00:00', NULL, 'Testing pagination lib', NULL, 2, 2, 1),
(30, 1, 1, 2, 'Pagination TEST', '2018-10-30 00:00:00', '2018-10-30 00:00:00', NULL, 'Testing pagination lib', NULL, 2, 2, 1),
(31, 1, 1, 2, 'Pagination TEST', '2018-10-30 00:00:00', '2018-10-30 00:00:00', NULL, 'Testing pagination lib', NULL, 2, 2, 1),
(32, 1, 1, 2, 'Pagination TEST', '2018-10-30 00:00:00', '2018-10-30 00:00:00', NULL, 'Testing pagination lib', NULL, 2, 2, 1),
(33, 1, 1, 2, 'Pagination TEST', '2018-10-30 00:00:00', '2018-10-30 00:00:00', NULL, 'Testing pagination lib', NULL, 2, 2, 1),
(34, 1, 1, 2, 'Pagination TEST', '2018-10-30 00:00:00', '2018-10-30 00:00:00', NULL, 'Testing pagination lib', NULL, 2, 2, 1),
(35, 1, 1, 2, 'Pagination TEST', '2018-10-30 00:00:00', '2018-10-30 00:00:00', NULL, 'Testing pagination lib', NULL, 2, 2, 1),
(36, 1, 1, 2, 'Pagination TEST', '2018-10-30 00:00:00', '2018-10-30 00:00:00', NULL, 'Testing pagination lib', NULL, 2, 2, 1),
(37, 1, 1, 2, 'Pagination TEST', '2018-10-30 00:00:00', '2018-10-30 00:00:00', NULL, 'Testing pagination lib', NULL, 2, 2, 1),
(38, 1, 1, 2, 'Pagination TEST', '2018-10-30 00:00:00', '2018-10-30 00:00:00', NULL, 'Testing pagination lib', NULL, 2, 2, 1),
(39, 1, 1, 2, 'Pagination TEST', '2018-10-30 00:00:00', '2018-10-30 00:00:00', NULL, 'Testing pagination lib', NULL, 2, 2, 1),
(40, 1, 1, 2, 'Pagination TEST', '2018-10-30 00:00:00', '2018-10-30 00:00:00', NULL, 'Testing pagination lib', NULL, 2, 2, 1),
(41, 1, 1, 2, 'Pagination TEST', '2018-10-30 00:00:00', '2018-10-30 00:00:00', NULL, 'Testing pagination lib', NULL, 2, 2, 1),
(42, 1, 1, 2, 'Pagination TEST', '2018-10-30 00:00:00', '2018-10-30 00:00:00', NULL, 'Testing pagination lib', NULL, 2, 2, 1),
(43, 1, 1, 2, 'Pagination TEST', '2018-10-30 00:00:00', '2018-10-30 00:00:00', NULL, 'Testing pagination lib', NULL, 2, 2, 1),
(44, 1, 1, 2, 'Pagination TEST', '2018-10-30 00:00:00', '2018-10-30 00:00:00', NULL, 'Testing pagination lib', NULL, 2, 2, 1),
(45, 1, 1, 2, 'Pagination TEST', '2018-10-30 00:00:00', '2018-10-30 00:00:00', NULL, 'Testing pagination lib', NULL, 2, 2, 1),
(46, 1, 1, 2, 'Pagination TEST', '2018-10-30 00:00:00', '2018-10-30 00:00:00', NULL, 'Testing pagination lib', NULL, 2, 2, 1),
(47, 1, 1, 2, 'Pagination TEST', '2018-10-30 00:00:00', '2018-10-30 00:00:00', NULL, 'Testing pagination lib', NULL, 2, 2, 1),
(48, 1, 1, 2, 'Pagination TEST', '2018-10-30 00:00:00', '2018-10-30 00:00:00', NULL, 'Testing pagination lib', NULL, 2, 2, 1),
(49, 1, 1, 2, 'Pagination TEST', '2018-10-30 00:00:00', '2018-10-30 00:00:00', NULL, 'Testing pagination lib', NULL, 2, 2, 1),
(50, 1, 1, 2, 'Pagination TEST', '2018-10-30 00:00:00', '2018-10-30 00:00:00', NULL, 'Testing pagination lib', NULL, 2, 2, 1),
(51, 1, 1, 2, 'Pagination TEST', '2018-10-30 00:00:00', '2018-10-30 00:00:00', NULL, 'Testing pagination lib', NULL, 2, 2, 1),
(52, 1, 1, 2, 'Pagination TEST', '2018-10-30 00:00:00', '2018-10-30 00:00:00', NULL, 'Testing pagination lib', NULL, 2, 2, 1),
(53, 1, 1, 2, 'Pagination TEST', '2018-10-30 00:00:00', '2018-10-30 00:00:00', NULL, 'Testing pagination lib', NULL, 2, 2, 1),
(54, 1, 1, 2, 'Pagination TEST', '2018-10-30 00:00:00', '2018-10-30 00:00:00', NULL, 'Testing pagination lib', NULL, 2, 2, 1),
(55, 1, 1, 2, 'Pagination TEST', '2018-10-30 00:00:00', '2018-10-30 00:00:00', NULL, 'Testing pagination lib', NULL, 2, 2, 1),
(56, 1, 1, 2, 'Pagination TEST', '2018-10-30 00:00:00', '2018-10-30 00:00:00', NULL, 'Testing pagination lib', NULL, 2, 2, 1),
(57, 1, 1, 2, 'Pagination TEST', '2018-10-30 00:00:00', '2018-10-30 00:00:00', NULL, 'Testing pagination lib', NULL, 2, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `job_group`
--

CREATE TABLE `job_group` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `job_group`
--

INSERT INTO `job_group` (`id`, `title`, `description`) VALUES
(1, 'LAB2', NULL),
(2, 'LAB3', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `title`, `description`) VALUES
(1, 'user', 'Allowed to create jobs and tasks'),
(2, 'admin', 'System administrator');

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `id` int(11) NOT NULL,
  `comment` text,
  `comment_hidden` text,
  `time_consumed` int(11) DEFAULT NULL,
  `state` int(11) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `date_updated` datetime DEFAULT NULL,
  `date_completed` datetime DEFAULT NULL,
  `is_deleted` tinyint(4) DEFAULT NULL,
  `job_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `state` int(11) NOT NULL DEFAULT '0',
  `date_created` datetime DEFAULT NULL,
  `date_updated` datetime DEFAULT NULL,
  `date_last_login` datetime DEFAULT NULL,
  `role` int(11) NOT NULL DEFAULT '1',
  `name` varchar(200) NOT NULL,
  `surname` varchar(200) DEFAULT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) DEFAULT NULL,
  `role_id` int(11) NOT NULL,
  `is_deleted` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `state`, `date_created`, `date_updated`, `date_last_login`, `role`, `name`, `surname`, `email`, `phone`, `role_id`, `is_deleted`) VALUES
(1, 'john.doe@contoso.com', 'abc123', 1, '2018-10-09 00:00:00', '2018-10-09 00:00:00', '2018-10-09 00:00:00', 1, 'John', 'Doe', 'john.doe@contoso.com', '+427033215564', 1, 0),
(2, 'sue.doe@contoso.com', 'abc123', 1, '2018-10-09 00:00:00', '2018-10-09 00:00:00', '2018-10-09 00:00:00', 1, 'Sue', 'Doe', 'sude.doe@contoso.com', '+442556221651', 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_has_contact`
--

CREATE TABLE `user_has_contact` (
  `user_id` int(11) NOT NULL,
  `contact_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_contact_client1` (`client_id`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_job_user1` (`created_user_id`),
  ADD KEY `fk_job_client1` (`client_id`),
  ADD KEY `fk_job_job_group1` (`task_group_id`),
  ADD KEY `fk_job_contact1` (`contact_id`),
  ADD KEY `fk_job_asigned` (`asigned_user_id`);

--
-- Indexes for table `job_group`
--
ALTER TABLE `job_group`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_task_job1` (`job_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD UNIQUE KEY `username_UNIQUE` (`username`),
  ADD KEY `fk_user_role1` (`role_id`);

--
-- Indexes for table `user_has_contact`
--
ALTER TABLE `user_has_contact`
  ADD PRIMARY KEY (`user_id`,`contact_id`),
  ADD KEY `fk_user_has_contact_contact1` (`contact_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT for table `job_group`
--
ALTER TABLE `job_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `task`
--
ALTER TABLE `task`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `contact`
--
ALTER TABLE `contact`
  ADD CONSTRAINT `fk_contact_client1` FOREIGN KEY (`client_id`) REFERENCES `client` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `job`
--
ALTER TABLE `job`
  ADD CONSTRAINT `fk_job_asigned` FOREIGN KEY (`asigned_user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_job_client1` FOREIGN KEY (`client_id`) REFERENCES `client` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_job_contact1` FOREIGN KEY (`contact_id`) REFERENCES `contact` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_job_job_group1` FOREIGN KEY (`task_group_id`) REFERENCES `job_group` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_job_user1` FOREIGN KEY (`created_user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `task`
--
ALTER TABLE `task`
  ADD CONSTRAINT `fk_task_job1` FOREIGN KEY (`job_id`) REFERENCES `job` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_user_role1` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `user_has_contact`
--
ALTER TABLE `user_has_contact`
  ADD CONSTRAINT `fk_user_has_contact_contact1` FOREIGN KEY (`contact_id`) REFERENCES `contact` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_user_has_contact_user1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
