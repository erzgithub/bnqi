-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2018 at 08:25 AM
-- Server version: 5.7.9
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bnqi`
--

-- --------------------------------------------------------

--
-- Table structure for table `cashtype`
--

DROP TABLE IF EXISTS `cashtype`;
CREATE TABLE IF NOT EXISTS `cashtype` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `name` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cashtype`
--

INSERT INTO `cashtype` (`id`, `name`) VALUES
(1, 'cashin'),
(2, 'cashout');

-- --------------------------------------------------------

--
-- Table structure for table `cheke`
--

DROP TABLE IF EXISTS `cheke`;
CREATE TABLE IF NOT EXISTS `cheke` (
  `chek_id` int(11) NOT NULL AUTO_INCREMENT,
  `rx` varchar(255) DEFAULT NULL,
  `agent` varchar(255) DEFAULT NULL,
  `estab` varchar(255) DEFAULT NULL,
  `bank` varchar(255) DEFAULT NULL,
  `chekno` varchar(255) DEFAULT NULL,
  `price` decimal(11,2) DEFAULT NULL,
  `col` varchar(255) DEFAULT NULL,
  `date_ginawa` datetime DEFAULT NULL,
  PRIMARY KEY (`chek_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cheke`
--

INSERT INTO `cheke` (`chek_id`, `rx`, `agent`, `estab`, `bank`, `chekno`, `price`, `col`, `date_ginawa`) VALUES
(1, '11223344', 'x44', 'haig', 'china bank', '987654321', '100000.00', 'tonton', '2018-02-16 02:19:38'),
(2, '55667788', 'x4', 'mnda', 'bdo', '123456789', '200000.00', 'tintin', '2018-02-16 03:24:03');

-- --------------------------------------------------------

--
-- Table structure for table `cico`
--

DROP TABLE IF EXISTS `cico`;
CREATE TABLE IF NOT EXISTS `cico` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `acct` varchar(255) DEFAULT NULL,
  `reason` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `estab` varchar(255) DEFAULT NULL,
  `details` varchar(255) DEFAULT NULL,
  `amount` decimal(11,2) DEFAULT NULL,
  `cby` varchar(255) DEFAULT NULL,
  `date_requested` datetime DEFAULT NULL,
  `date_collected` datetime DEFAULT NULL,
  `cashtype` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cico`
--

INSERT INTO `cico` (`id`, `acct`, `reason`, `name`, `estab`, `details`, `amount`, `cby`, `date_requested`, `date_collected`, `cashtype`) VALUES
(1, '123', NULL, 'Errol Boneo', 'bldg', NULL, '10000.00', 'nikki', NULL, '2018-02-15 19:45:53', 1),
(2, '987', NULL, 'Irene Boneo', 'haig', NULL, '45.00', 'tina', NULL, '2018-02-15 20:38:20', 2),
(3, '456', NULL, 'karen', 'gov', NULL, '45.00', 'nikki', NULL, '2018-02-15 22:16:18', 1),
(4, NULL, 'Brunch', 'niki', NULL, 'kfc', '100.00', NULL, '2018-02-15 23:08:50', NULL, 2),
(5, NULL, 'gas', 'errol', NULL, 'reimburse', '500.00', NULL, '2018-02-15 23:16:37', NULL, 2),
(6, NULL, 'gas', 'errol', NULL, 'reimburse', '500.00', NULL, '2018-02-15 23:19:13', NULL, 2),
(7, 'afgag56456', NULL, 'rod', 'bnqi', NULL, '1000000.00', 'rod', NULL, '2018-02-16 00:48:16', 1);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
CREATE TABLE IF NOT EXISTS `customers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cname` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `contact` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `cname`, `address`, `mobile`, `contact`) VALUES
(1, 'erssol', 'pasi', '636363123', '1234'),
(2, 'ers boneo', 'haig', '6363123', '123'),
(3, 'erssss', 'mandaluyong', '63912345', '12345678'),
(4, 'karens boneo', 'batangas', '63988566', '8815657'),
(5, 'anggn boneo', 'sserwa', '6363631', '2'),
(6, 'errol', 'address', '25364564', '234253445'),
(9, 'sample', 'sample', '4526356', '3423535');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE IF NOT EXISTS `employee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `rate` double DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `address`, `contact`, `age`, `gender`, `position`, `rate`, `date_created`) VALUES
(1, 'Errol Boneo', 'haig', '09123456789', 28, 'male', 'programmer', 500, NULL),
(2, 'karen Magtibay', 'batangas', '0987123456', 28, 'female', 'engineer', 500, NULL),
(11, 'nongskie', 'quiapo', '0912345667', 33, 'male', 'assistant manager', 500, '2018-02-13 14:49:28');

-- --------------------------------------------------------

--
-- Table structure for table `job_orders`
--

DROP TABLE IF EXISTS `job_orders`;
CREATE TABLE IF NOT EXISTS `job_orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cust_name` varchar(255) DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `pname` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `jo_type` varchar(255) DEFAULT NULL,
  `cust_id` int(11) DEFAULT NULL,
  `amount` decimal(11,2) DEFAULT NULL,
  `mobile` varchar(25) DEFAULT NULL,
  `contact` varchar(25) DEFAULT NULL,
  `date_ginawa` datetime DEFAULT NULL,
  `term` varchar(255) DEFAULT NULL,
  `tin` varchar(255) DEFAULT NULL,
  `po` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_orders`
--

INSERT INTO `job_orders` (`id`, `cust_name`, `company`, `qty`, `description`, `pname`, `address`, `jo_type`, `cust_id`, `amount`, `mobile`, `contact`, `date_ginawa`, `term`, `tin`, `po`) VALUES
(1, 'errol', NULL, 8, 'delivery', NULL, 'haig', 'purchase', 2, NULL, '09725657775', '1234567', NULL, NULL, NULL, NULL),
(2, 'irene', NULL, 3, 'pick up', NULL, 'pasig', 'purchase', 1, NULL, '0966533434', '8815657', NULL, NULL, NULL, NULL),
(3, 'karen magtibay', NULL, 1, 'delivery', NULL, 'batangas', 'refill', NULL, NULL, '0966533434', '1234567', NULL, NULL, NULL, NULL),
(4, 'inday', NULL, 1, 'new customer', 'water and foam', 'pasig', 'Refill', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'karen magtibay', NULL, 3, 'old customer for delivery', 'water and foam', 'batangas', 'Purchase', NULL, NULL, '09123456789', '8815657', NULL, NULL, NULL, NULL),
(6, 'errol', NULL, 1, 'old customer', 'water and foam', 'haig', 'Purchase', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'irene', NULL, 1, 'old customer check database ', 'water and foam', 'makati', 'Purchase', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'hazel', NULL, 1, 'new customer for delivery', 'water and foam', 'pasig', 'Purchase', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'rodrigo bajaro', NULL, 1, 'new customer refill only', 'water and foam', 'sta ana', 'Refill', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'awo', NULL, 4, 'powered by BNQI ref only', 'water and foam', 'quiapo', 'Refill', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'errol', '1', 1, 'r', 'water and foam', '2', 'Refill', NULL, '10000.00', NULL, NULL, '2018-02-16 12:39:14', '2', '12345', 'box'),
(14, 'errol', '1', 1, 'r', 'dry chemical', '2', 'Refill', NULL, '10000.00', NULL, NULL, '2018-02-16 12:39:14', '2', '12345', 'box'),
(15, 'pala', '2', 1, 't', 'dry chemical', '3', 'Refill', NULL, '10000.00', NULL, NULL, '2018-02-16 12:45:30', '1', '12345', 'b'),
(16, 'pala', '2', 1, 't', 'dry chemical', '3', 'Refill', NULL, '10000.00', NULL, NULL, '2018-02-16 12:47:28', '1', '12345', 'b'),
(17, 'pala', '2', 1, 't', 'dry chemical', '3', 'Refill', NULL, '10000.00', NULL, NULL, '2018-02-16 12:51:21', '1', '12345', 'b'),
(18, 'pala', '2', 1, 't', 'dry chemical', '3', 'Refill', NULL, '10000.00', NULL, NULL, '2018-02-16 12:52:00', '1', '12345', 'b'),
(19, 'pala', '2', 1, 't', 'dry chemical', '3', 'Refill', NULL, '10000.00', NULL, NULL, '2018-02-16 12:52:13', '1', '12345', 'b'),
(20, 'pala', '2', 1, 't', 'dry chemical', '3', 'Refill', NULL, '10000.00', NULL, NULL, '2018-02-16 12:52:41', '1', '12345', 'b'),
(21, 'pala', '2', 1, 't', 'dry chemical', '3', 'Refill', NULL, '10000.00', NULL, NULL, '2018-02-16 12:53:18', '1', '12345', 'b');

-- --------------------------------------------------------

--
-- Table structure for table `jo_type`
--

DROP TABLE IF EXISTS `jo_type`;
CREATE TABLE IF NOT EXISTS `jo_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jname` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jo_type`
--

INSERT INTO `jo_type` (`id`, `jname`) VALUES
(1, 'Purchase'),
(2, 'Refill');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `supplier` varchar(255) DEFAULT NULL,
  `prod_name` varchar(255) DEFAULT NULL,
  `description` varchar(510) DEFAULT NULL,
  `dr_no` varchar(25) DEFAULT NULL,
  `prod_type` varchar(25) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `delivery_price` decimal(11,2) DEFAULT NULL,
  `date_delivered` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `supplier`, `prod_name`, `description`, `dr_no`, `prod_type`, `quantity`, `delivery_price`, `date_delivered`) VALUES
(1, NULL, 'water and foam', 'extinguish fire by taking heat away', NULL, 'sample', 20, NULL, NULL),
(4, NULL, 'dry chemical', 'sample', NULL, 'sample', 10, NULL, NULL),
(6, 'maersk', 'sample', NULL, '213141njdfkfl3', NULL, 10, '10000.00', '2018-02-15 12:54:45'),
(12, 'bnqi', 'prod2', NULL, '123', NULL, 2, '10000.00', '2018-02-15 16:17:58'),
(11, 'bnqi', 'prod1', NULL, '123', NULL, 1, '10000.00', '2018-02-15 16:17:58'),
(13, 'bnqi', 'prod3', NULL, '123', NULL, 3, '10000.00', '2018-02-15 16:17:58'),
(14, 'bnqi', 'prod4', NULL, '123', NULL, 4, '10000.00', '2018-02-15 16:17:58'),
(15, 'jpbajaro', 'pro1', NULL, '321', NULL, 1, '3000.00', '2018-02-15 16:21:38'),
(16, 'jpbajaro', 'pro2', NULL, '321', NULL, 2, '3000.00', '2018-02-15 16:21:38'),
(17, 'jpbajaro', 'pro3', NULL, '321', NULL, 3, '3000.00', '2018-02-15 16:21:38'),
(18, NULL, 'shanpoo', 'sammple', NULL, 'sample', 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

DROP TABLE IF EXISTS `product_category`;
CREATE TABLE IF NOT EXISTS `product_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prod_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `prod_type`
--

DROP TABLE IF EXISTS `prod_type`;
CREATE TABLE IF NOT EXISTS `prod_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

DROP TABLE IF EXISTS `salary`;
CREATE TABLE IF NOT EXISTS `salary` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` int(11) DEFAULT NULL,
  `salary` int(11) DEFAULT NULL,
  `ot` int(11) DEFAULT NULL,
  `deduction` int(11) DEFAULT NULL,
  `net_income` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`id`, `emp_id`, `salary`, `ot`, `deduction`, `net_income`) VALUES
(1, 1, 300, 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sample_product`
--

DROP TABLE IF EXISTS `sample_product`;
CREATE TABLE IF NOT EXISTS `sample_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `ptype` varchar(255) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sample_product`
--

INSERT INTO `sample_product` (`id`, `name`, `description`, `ptype`, `qty`) VALUES
(1, 'water and foam', 'extinguish fire by taking heat away', 'sample', 2),
(2, 'karen', 'purchase', 'carbon monoxide', 14),
(3, 'ireneo', 'for refill', 'chlorophyl', 11),
(4, 'guitars', 'color black', 'lte', 4),
(5, 'this is edited', 'purchased', 'carbon', 5),
(6, 'sample', 'purchase', 'carbon', 7),
(7, 'sargag', 'refill', 'chlorophyll', 9),
(8, 'erergag', 'descphahargf', 'typefghfghx', 6),
(9, 'water and foam', 'extinguish fire by taking away heat', 'water and foam my ass', 5),
(10, 'Water and foam', 'extinguish fire by taking away heat', 'water and foam', 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `password`) VALUES
(1, 'Errol', 'Boneo', 'errol', 'akosierrol'),
(2, 'errol', 'boneo', 'errol', '123');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
