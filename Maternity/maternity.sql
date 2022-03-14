-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2022 at 07:44 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `maternity`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `buyproducts`
--

CREATE TABLE `buyproducts` (
  `bid` int(11) NOT NULL,
  `pcode` varchar(200) NOT NULL,
  `pid` varchar(200) NOT NULL,
  `cartid` varchar(200) NOT NULL,
  `userid` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `price` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `quantity` varchar(200) NOT NULL,
  `qty` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `customer_name` varchar(200) NOT NULL,
  `district` varchar(200) NOT NULL,
  `state` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `pincode` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `buyproducts`
--

INSERT INTO `buyproducts` (`bid`, `pcode`, `pid`, `cartid`, `userid`, `name`, `price`, `description`, `quantity`, `qty`, `image`, `customer_name`, `district`, `state`, `address`, `pincode`) VALUES
(3, '101', '5', '4', 7, 'jjkj', '200', 'abc', '100GM', '1', 'cc1.jpg', 'MARIYA V S', 'thrissur', 'kerala', 'fghbj', '680751'),
(4, '101', '5', '8', 0, 'jjkj', '200', 'abc', '100GM', '1', 'cc1.jpg', '', '', '', '', ''),
(5, '1010', '6', '9', 14, 'baby', '200', 'abc', '100GM', '1', 'd.jpg', '', '', '', '', ''),
(6, '1010', '6', '9', 14, 'baby', '200', 'abc', '100GM', '1', 'd.jpg', '', '', '', '', ''),
(7, '1010', '6', '9', 14, 'baby', '200', 'abc', '100GM', '1', 'd.jpg', '', '', '', '', ''),
(8, '101', '5', '12', 18, 'jjkj', '200', 'abc', '100GM', '1', 'cc1.jpg', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cid` int(11) NOT NULL,
  `pcode` varchar(200) NOT NULL,
  `pid` varchar(200) NOT NULL,
  `userid` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `price` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `quantity` varchar(200) NOT NULL,
  `qty` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cid`, `pcode`, `pid`, `userid`, `name`, `price`, `description`, `quantity`, `qty`, `image`) VALUES
(1, '1010', '6', '6', 'baby', '200', 'abc', '100GM', '1', 'd.jpg'),
(4, '101', '5', '7', 'jjkj', '200', 'abc', '100GM', '1', 'cc1.jpg'),
(5, '1010', '6', '7', 'baby', '200', 'abc', '100GM', '1', 'd.jpg'),
(6, '101', '5', '6', 'jjkj', '200', 'abc', '100GM', '1', 'cc1.jpg'),
(7, '101', '5', '7', 'jjkj', '200', 'abc', '100GM', '2', 'cc1.jpg'),
(8, '101', '5', '', 'jjkj', '200', 'abc', '100GM', '1', 'cc1.jpg'),
(9, '1010', '6', '14', 'baby', '200', 'abc', '100GM', '1', 'd.jpg'),
(10, '101', '5', '14', 'jjkj', '200', 'abc', '100GM', '1', 'cc1.jpg'),
(11, '101', '5', '15', 'jjkj', '200', 'abc', '100GM', '1', 'cc1.jpg'),
(12, '101', '5', '18', 'jjkj', '200', 'abc', '100GM', '1', 'cc1.jpg'),
(13, '101', '5', '18', 'jjkj', '200', 'abc', '100GM', '1', 'cc1.jpg'),
(14, '1010', '6', '18', 'baby', '200', 'ab', '100GM', '1', 'd.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cron`
--

CREATE TABLE `cron` (
  `crondate` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cron`
--

INSERT INTO `cron` (`crondate`) VALUES
('2022-02-23');

-- --------------------------------------------------------

--
-- Table structure for table `dietchart`
--

CREATE TABLE `dietchart` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `breakfast` varchar(255) NOT NULL,
  `lunch` varchar(255) NOT NULL,
  `dinner` varchar(255) NOT NULL,
  `water` varchar(255) NOT NULL,
  `workouts` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dietchart`
--

INSERT INTO `dietchart` (`id`, `category`, `breakfast`, `lunch`, `dinner`, `water`, `workouts`) VALUES
(10, 'Maternity Period', 'DOSHA', 'RICE', 'CHAPPATHI', '3 LITER', '2 TIMES');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `doc_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `qualification` varchar(200) NOT NULL,
  `experience` varchar(200) NOT NULL,
  `special` varchar(200) NOT NULL,
  `hospital` varchar(200) NOT NULL,
  `contact` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`doc_id`, `name`, `qualification`, `experience`, `special`, `hospital`, `contact`, `username`, `password`) VALUES
(1, 'MARIYA V S', 'MBBS', '2 year', 'Gynacology', 'Mission Hospital', '17034759586', 'mm', '123456'),
(2, '', '', '', '', '', '', '', ''),
(3, '', '', '', '', '', '', '', ''),
(4, '', '', '', '', '', '', '', ''),
(5, '', '', '', '', '', '', '', ''),
(6, '', '', '', '', '', '', '', ''),
(7, '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `e_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `place` varchar(200) NOT NULL,
  `event` varchar(200) NOT NULL,
  `contact` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`e_id`, `name`, `place`, `event`, `contact`) VALUES
(1, 'abc', 'thrissur', 'marriage,baptism', '9745093909'),
(2, '', '', '', ''),
(3, '', '', '', ''),
(4, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `feedbackdoctor`
--

CREATE TABLE `feedbackdoctor` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `doctor` varchar(200) NOT NULL,
  `dept` varchar(200) NOT NULL,
  `hospital` varchar(200) NOT NULL,
  `message` varchar(255) NOT NULL,
  `reply` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedbackdoctor`
--

INSERT INTO `feedbackdoctor` (`id`, `username`, `email`, `doctor`, `dept`, `hospital`, `message`, `reply`) VALUES
(1, 'amritha', 'amritha@gmail.com', '', '', '', 'hii', 'hi'),
(2, 'amritha', 'amritha@gmail.com', '', '', '', 'helo', 'hii amrita'),
(3, 'amritha', 'amritha@gmail.com', '', '', '', 'helo', ''),
(4, 'amritha', 'amritha@gmail.com', '', '', '', 'helo', ''),
(5, 'amritha', 'amritha@gmail.com', '', '', '', 'what is your advise..', ''),
(6, 'amritha', 'amritha@gmail.com', '', '', '', 'what is your advise..', ''),
(7, 'amritha', 'amritha@gmail.com', '', '', '', 'gggg', ''),
(8, 'amritha', 'amritha@gmail.com', '', '', '', 'gggg', ''),
(9, 'surya', 'surya@gmail.com', '', '', '', 'hii', 'hi  surya'),
(10, 'surya', 'surya@gmail.com', '', '', '', 'hii', ''),
(11, 'surya', 'surya@gmail.com', '', '', '', 'helo', ''),
(12, 'surya', 'surya@gmail.com', '', '', '', 'helo', ''),
(13, 'surya', 'surya@gmail.com', '', '', '', 'advise', ''),
(14, 'surya', 'surya@gmail.com', '', '', '', 'advise', ''),
(15, 'surya', 'surya@gmail.com', '', '', '', 'test', ''),
(16, 'anu', 'anu@gmail.com', '', '', '', 'hlo', 'hi'),
(17, 'anu', 'anu@gmail.com', 'ravi', 'psycology', 'mother', 'Too bad', ''),
(18, 'anu', 'anu@gmail.com', 'ravi', 'psycology', 'mother', 'Too bad', '');

-- --------------------------------------------------------

--
-- Table structure for table `feedbackproduct`
--

CREATE TABLE `feedbackproduct` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `product` varchar(255) NOT NULL,
  `proid` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `reply` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedbackproduct`
--

INSERT INTO `feedbackproduct` (`id`, `username`, `email`, `product`, `proid`, `message`, `reply`) VALUES
(16, 'anu', 'anu@gmail.com', 'toy', '56', 'good', 'thanks'),
(17, 'anu', 'anu@gmail.com', 'toy', '56', 'good', ''),
(18, 'anu', 'anu@gmail.com', 'toy', '56', 'good', '');

-- --------------------------------------------------------

--
-- Table structure for table `feedbacksite`
--

CREATE TABLE `feedbacksite` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `reply` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedbacksite`
--

INSERT INTO `feedbacksite` (`id`, `username`, `email`, `message`, `reply`) VALUES
(16, 'anu', 'anu@gmail.com', 'good', 'thankzz'),
(17, 'anu', 'anu@gmail.com', 'good', '');

-- --------------------------------------------------------

--
-- Table structure for table `foodchart`
--

CREATE TABLE `foodchart` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `breakfast` varchar(255) NOT NULL,
  `lunch` varchar(255) NOT NULL,
  `dinner` varchar(255) NOT NULL,
  `water` varchar(255) NOT NULL,
  `time` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `foodchart`
--

INSERT INTO `foodchart` (`id`, `category`, `breakfast`, `lunch`, `dinner`, `water`, `time`) VALUES
(5, 'Parent of 1 to 3 child age', 'DOSHA', 'RICE', 'CHAPPATHI', '3 LITER', '2 TIME');

-- --------------------------------------------------------

--
-- Table structure for table `kidsproducts`
--

CREATE TABLE `kidsproducts` (
  `pid` int(11) NOT NULL,
  `product_code` varchar(200) NOT NULL,
  `product_name` varchar(250) NOT NULL,
  `product_description` varchar(300) NOT NULL,
  `product_quantity` varchar(200) NOT NULL,
  `product_price` varchar(200) NOT NULL,
  `product_image` varchar(500) NOT NULL,
  `product_stock` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kidsproducts`
--

INSERT INTO `kidsproducts` (`pid`, `product_code`, `product_name`, `product_description`, `product_quantity`, `product_price`, `product_image`, `product_stock`) VALUES
(5, '101', 'jjkj kjj', 'abc', '100GM', '200', 'cc1.jpg', '15'),
(6, '1010', 'baby food', 'abc', '100GM', '200', 'd.jpg', '10'),
(7, '', '', '', '', '', '', ''),
(8, '', '', '', '', '', '', ''),
(9, '7', '', '', '', '', '', ''),
(10, '7', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `maternityproducts`
--

CREATE TABLE `maternityproducts` (
  `pid` int(11) NOT NULL,
  `product_code` varchar(200) NOT NULL,
  `product_name` varchar(250) NOT NULL,
  `product_description` varchar(300) NOT NULL,
  `product_quantity` varchar(200) NOT NULL,
  `product_price` varchar(200) NOT NULL,
  `product_image` varchar(500) NOT NULL,
  `product_stock` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `maternityproducts`
--

INSERT INTO `maternityproducts` (`pid`, `product_code`, `product_name`, `product_description`, `product_quantity`, `product_price`, `product_image`, `product_stock`) VALUES
(5, '101', 'jjkj kjj', 'abc', '100GM', '200', 'cc1.jpg', '15'),
(6, '1010', 'baby food', 'abc', '100GM', '200', 'd.jpg', '10'),
(7, '', '', '', '', '', '', ''),
(8, '', '', '', '', '', '', ''),
(9, '6', '', '', '', '', '', ''),
(10, '6', '', '', '', '', '', ''),
(11, 'm01', 'nighty', 'night wear', '50g', '599/-', 'maternity.jpeg', '9');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `name` varchar(400) NOT NULL,
  `email` varchar(400) NOT NULL,
  `password` varchar(400) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(600) NOT NULL,
  `maternity` varchar(255) NOT NULL,
  `parenta` varchar(255) NOT NULL,
  `parentb` varchar(255) NOT NULL,
  `period` int(100) NOT NULL,
  `logindate` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `email`, `password`, `phone`, `address`, `maternity`, `parenta`, `parentb`, `period`, `logindate`) VALUES
(4, 'nkimitha', 'admin@gmail.com', '12345678', '963852741', 'cfvbghnjmk', '', '', '', 0, '2022-02-01'),
(5, 'nkimitha', 'admin@gmail.com', '12345678', '1234567890', 'cfvbghnjmk', '', '', '', 0, '2022-02-22'),
(6, 'anju thomas', 'anju@gmail.com', '123456', '2147483647', 'veeran vilayil', '', '', '', 0, '2022-02-22'),
(7, 'MARIYA V S', 'mariyavs567@gmail.com', '123456', '2147483647', 'fghbj', '', '', '', 0, '2022-02-22'),
(9, 'jay', 'jay@gmail.com', '12345', '154641', 'jay jay', '', '', '', 0, '2022-02-22'),
(10, 'kani', 'kani@gmail.com', '123456', '154641', 'kani kani', '', '', '', 0, '2022-02-01'),
(11, 'kani', 'kanimol@gmail.com', '12345', '154641', 'kano', '', '', '', 0, '2022-02-22'),
(13, 'june', 'june@gmail.com', '123456', '154641', 'june', '', '', '', 0, '2022-02-22'),
(14, 'vismu', 'vismu@gmail.com', '123456', '154641', 'vismu', '', '1', '', 0, '2022-02-22'),
(15, 'surya', 'surya@gmail.com', '123456', '154641', 'surya', '1', '1', '1', 2, '2022-02-22'),
(17, 'see', 'see@gmail.com', '123456', '9847170740', 'Chemmanoor', '1', '', '', 0, '2022-02-22'),
(18, 'anu', 'anu@gmail.com', '123456', '9847141523', 'ajscj', '', '1', '1', 0, '2022-02-22'),
(19, 'amritha', 'amritha@gmail.com', '123456', '9847170740', 'Chemmanoor', '1', '1', '', 4, '2022-02-22'),
(20, 'anu', 'anu@gmail.com', '1234', '9876542356', 'thrissur', '1', '1', '1', 4, '2022-02-22'),
(21, 'sandhu', 'sandhyasanjaykumar085@gmail.com', '1234', '9876543', 'tghujn', '1', '1', '', 7, '2022-02-22'),
(22, 'ammu', 'ammu@gmail.com', '123', '98765432', 'thrissur', '1', '1', '1', 4, '2022-02-22'),
(23, 'amu', 'amu@gmail.com', '123', '98765432', 'thrissur', '', '', '1', 4, '2022-02-22'),
(24, 'anu', 'annu@gmail.com', '123', '764532', 'thrissur', '', '', '', 0, '2022-02-22');

-- --------------------------------------------------------

--
-- Table structure for table `toysproducts`
--

CREATE TABLE `toysproducts` (
  `pid` int(11) NOT NULL,
  `product_code` varchar(200) NOT NULL,
  `product_name` varchar(250) NOT NULL,
  `product_description` varchar(300) NOT NULL,
  `product_quantity` varchar(200) NOT NULL,
  `product_price` varchar(200) NOT NULL,
  `product_image` varchar(500) NOT NULL,
  `product_stock` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `toysproducts`
--

INSERT INTO `toysproducts` (`pid`, `product_code`, `product_name`, `product_description`, `product_quantity`, `product_price`, `product_image`, `product_stock`) VALUES
(5, '101', 'jjkj kjj', 'abc', '100GM', '200', 'cc1.jpg', '15'),
(6, '1010', 'baby food', 'abc', '100GM', '200', 'd.jpg', '10'),
(7, '', '', '', '', '', '', ''),
(8, '', '', '', '', '', '', ''),
(9, '8', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buyproducts`
--
ALTER TABLE `buyproducts`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `dietchart`
--
ALTER TABLE `dietchart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`doc_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `feedbackdoctor`
--
ALTER TABLE `feedbackdoctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedbackproduct`
--
ALTER TABLE `feedbackproduct`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedbacksite`
--
ALTER TABLE `feedbacksite`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foodchart`
--
ALTER TABLE `foodchart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kidsproducts`
--
ALTER TABLE `kidsproducts`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `maternityproducts`
--
ALTER TABLE `maternityproducts`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `toysproducts`
--
ALTER TABLE `toysproducts`
  ADD PRIMARY KEY (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `buyproducts`
--
ALTER TABLE `buyproducts`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `dietchart`
--
ALTER TABLE `dietchart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `doc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `e_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `feedbackdoctor`
--
ALTER TABLE `feedbackdoctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `feedbackproduct`
--
ALTER TABLE `feedbackproduct`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `feedbacksite`
--
ALTER TABLE `feedbacksite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `foodchart`
--
ALTER TABLE `foodchart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kidsproducts`
--
ALTER TABLE `kidsproducts`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `maternityproducts`
--
ALTER TABLE `maternityproducts`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `toysproducts`
--
ALTER TABLE `toysproducts`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
