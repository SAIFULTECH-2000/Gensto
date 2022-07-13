-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2022 at 02:42 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gensto`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `address` varchar(500) NOT NULL,
  `termsandconditions` varchar(500) NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `nama`, `address`, `termsandconditions`, `userid`) VALUES
(1, 'KAMI SDN BHD', 'TEST ALAMT', 'Diskaun', 2),
(2, 'Syakir SDN', 'test', 'test', 3);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `address` varchar(500) NOT NULL,
  `shipaddress` varchar(500) NOT NULL,
  `companyid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `nama`, `address`, `shipaddress`, `companyid`) VALUES
(1, 'Saiful nizam', 'puncak alam', '', 2);

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `customerid` int(11) NOT NULL,
  `companyid` int(11) NOT NULL,
  `duedate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `inv_details`
--

CREATE TABLE `inv_details` (
  `id` int(11) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `unit/price` varchar(255) NOT NULL,
  `qty` varchar(255) NOT NULL,
  `invid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `quotation`
--

CREATE TABLE `quotation` (
  `id` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `customerid` int(11) NOT NULL,
  `companyid` int(11) NOT NULL,
  `duedate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quotation`
--

INSERT INTO `quotation` (`id`, `date`, `customerid`, `companyid`, `duedate`) VALUES
(10, '2022-07-13', 1, 2, '2022-07-13');

-- --------------------------------------------------------

--
-- Table structure for table `quo_details`
--

CREATE TABLE `quo_details` (
  `id` int(11) NOT NULL,
  `description` varchar(2000) DEFAULT NULL,
  `unit` varchar(255) DEFAULT NULL,
  `qty` varchar(255) DEFAULT NULL,
  `quoid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quo_details`
--

INSERT INTO `quo_details` (`id`, `description`, `unit`, `qty`, `quoid`) VALUES
(10, '(RM17/hr 4th month and above)', '300', '1', 10);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `isdelete` varchar(255) DEFAULT 'SHOW',
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `role`, `isdelete`, `name`) VALUES
(1, 'Admin', 'admin@gensto.com', '$2y$10$w4V7t9xM9J.ldKW3xuYMNOUpf4.o5VK.NQqg02yBkj5TFn4dQtkY.', 'Admin', 'SHOW', 'SAIFUL NIZAM BIN ROKEDIN'),
(2, 'SAIFULNIZAM', 'saifultech.official@gmail.com', '$2y$10$/opkJ9JsyjLfWKDWJFinQeSlpJFUl0cv6/jQVMb3jCNC7S0i..zC2', 'Client', 'inactive', 'SAIFUL NIZAM BIN ROKEDIN'),
(3, 'Syakir', 'syakirshakri0125@gmail.com', '$2y$10$gYGRUghl3X0H2gDuidFyXeZb/KKI.YxtI3ICCkMgIcAWzZ4z03pBq', 'Client', 'SHOW', 'Syakir Bin syakir');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `companyid` (`companyid`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`),
  ADD KEY `companyid` (`companyid`),
  ADD KEY `customerid` (`customerid`);

--
-- Indexes for table `inv_details`
--
ALTER TABLE `inv_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `invid` (`invid`);

--
-- Indexes for table `quotation`
--
ALTER TABLE `quotation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `companyid` (`companyid`),
  ADD KEY `customerid` (`customerid`);

--
-- Indexes for table `quo_details`
--
ALTER TABLE `quo_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `quoid` (`quoid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE inv_details
RENAME COLUMN `unit/price` TO `unit`;

--
-- AUTO_INCREMENT for table `inv_details`
--
ALTER TABLE `inv_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `quotation`
--
ALTER TABLE `quotation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `quo_details`
--
ALTER TABLE `quo_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `company`
--
ALTER TABLE `company`
  ADD CONSTRAINT `company_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user` (`id`);

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`companyid`) REFERENCES `company` (`id`);

--
-- Constraints for table `invoice`
--
ALTER TABLE `invoice`
  ADD CONSTRAINT `invoice_ibfk_1` FOREIGN KEY (`companyid`) REFERENCES `company` (`id`),
  ADD CONSTRAINT `invoice_ibfk_2` FOREIGN KEY (`customerid`) REFERENCES `customer` (`id`);

--
-- Constraints for table `inv_details`
--
ALTER TABLE `inv_details`
  ADD CONSTRAINT `inv_details_ibfk_1` FOREIGN KEY (`invid`) REFERENCES `invoice` (`id`);

--
-- Constraints for table `quotation`
--
ALTER TABLE `quotation`
  ADD CONSTRAINT `quotation_ibfk_1` FOREIGN KEY (`companyid`) REFERENCES `company` (`id`),
  ADD CONSTRAINT `quotation_ibfk_2` FOREIGN KEY (`customerid`) REFERENCES `customer` (`id`);

--
-- Constraints for table `quo_details`
--
ALTER TABLE `quo_details`
  ADD CONSTRAINT `quo_details_ibfk_1` FOREIGN KEY (`quoid`) REFERENCES `quotation` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
