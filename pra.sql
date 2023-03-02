-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2021 at 09:18 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pra`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE `aboutus` (
  `id` int(11) NOT NULL,
  `description` text NOT NULL,
  `sub_desc` text NOT NULL,
  `img` varchar(245) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`id`, `description`, `sub_desc`, `img`) VALUES
(1, '<p>We provide the best Beard oile all over the world. We are the worldd best store in indi for Beard Oil. You can buy our product without any hegitation because they truste us and buy our product without any hagitation because they belive and always happy buy our product.</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 15px; font-size: 14px; line-height: 24px; color: #898989; font-family: Rubik, sans-serif; background-color: #ffffff;\">Some of our customer say&rsquo;s that they trust us and buy our product without any hagitation because they belive us and always happy to buy our product.</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 15px; font-size: 14px; line-height: 24px; color: #898989; font-family: Rubik, sans-serif; background-color: #ffffff;\">We provide the beshat they trusted us and buy our product without any hagitation because they belive us and always happy to buy.</p>\r\n<p>\"&gt;</p>', '<p>Provide Best\"&gt;</p>', 'uploads/36707');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `role` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `role`) VALUES
(1, 'admin', 'admin', 'nadmin');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `img` varchar(245) NOT NULL,
  `title` varchar(250) NOT NULL,
  `description` longtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `img`, `title`, `description`, `created_at`, `updated_at`) VALUES
(8, 'uploads/649927.jpg', '<p><span style=\"color: #bdc1c6; font-family: arial, sans-serif; font-size: 14px; background-color: #202124;\">Best Uk Website Builder. Large Selection. Always Sale. Cheap Prices. Full Offer. Save Online. Compare Online. Simple Search. The Best Price. ', '<p><span style=\"color: #bdc1c6; font-family: arial, sans-serif; font-size: 14px; background-color: #202124;\">Best Uk Website Builder. Large Selection. Always Sale. Cheap Prices. Full Offer. Save Online. Compare Online. Simple Search. The Best Price. Compare Simpl</span></p>', '2021-11-24 22:14:47', '2021-11-24 22:14:47'),
(9, 'uploads/138461.jpg', '<p><span style=\"color: #bdc1c6; font-family: arial, sans-serif; font-size: 14px; background-color: #202124;\">Best Uk Website Builder. Large Selection. Always Sale. Cheap Prices. Full Offer. Save Online. Compare Online. Simple Search. The Best Price. ', '<p><span style=\"color: #bdc1c6; font-family: arial, sans-serif; font-size: 14px; background-color: #202124;\">Best Uk Website Builder. Large Selection. Always Sale. Cheap Prices. Full Offer. Save Online. Compare Online. Simple Search. The Best Price. Compare Simpl</span></p>', '2021-11-24 22:15:10', '2021-11-24 22:15:10'),
(10, 'uploads/3297012.jpg', '<p>the verga</p>', '<p><span style=\"color: rgba(0, 0, 0, 0.8); font-family: CharterITCStd-Regular, Arial, sans-serif; font-size: 16px; background-color: #ffffff;\">The Verge is an ambitious multimedia effort founded nine years ago to examine how technology will change life in the future for a massive mainstream audience.</span></p>', '2021-11-24 22:15:57', '2021-11-24 22:15:57');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`) VALUES
(10, 'Laptops'),
(11, 'TV & Audio'),
(12, 'Reach'),
(13, 'Smartphone'),
(14, 'Headphone'),
(15, 'Cameras '),
(16, 'Game And Consoles'),
(17, 'Desktops & Computers'),
(18, 'Watches');

-- --------------------------------------------------------

--
-- Table structure for table `clientquery`
--

CREATE TABLE `clientquery` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(250) NOT NULL,
  `subject` varchar(250) NOT NULL,
  `message` longtext NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clientquery`
--

INSERT INTO `clientquery` (`id`, `name`, `email`, `subject`, `message`, `create_at`) VALUES
(1, 'Nihir', 'test@test.com', 'Good Job', 'Hello Hthis is Good Job', '2021-11-23 21:47:36'),
(2, 'Nihir', 'new@new.com', 'asdf', 'bjhjh', '2021-11-23 22:15:28'),
(3, 'admin', 'admin@GMAIL.COM', 'asdasd', 'asdasda', '2021-11-23 22:16:14'),
(4, 'Nihir', 'tets@test.com', 'test', 'njhjh', '2021-11-25 21:50:05');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `address` varchar(245) NOT NULL,
  `phone` longtext NOT NULL,
  `email` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `address`, `phone`, `email`) VALUES
(2, '6688Princess Road, London, Greater London BAS 23JK, UK', ' (+123) 123 321 345', 'info@gmail.com.com');

-- --------------------------------------------------------

--
-- Table structure for table `in1`
--

CREATE TABLE `in1` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `in1`
--

INSERT INTO `in1` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE `logo` (
  `id` int(11) NOT NULL,
  `img` varchar(245) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`id`, `img`) VALUES
(1, 'uploads/75225google2.0.0.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `map`
--

CREATE TABLE `map` (
  `id` int(11) NOT NULL,
  `map` longtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `map`
--

INSERT INTO `map` (`id`, `map`, `created_at`, `updated_at`) VALUES
(1, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3691.9470308257046!2d70.77322241432027!3d22.279996249263313!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959cbc00054cdfb%3A0x28d1e1fa756e7b2!2sBig%20Bazaar!5e0!3m2!1sen!2sin!4v1637617113327!5m2!1sen!2sin', '2021-11-19 20:53:59', '2021-11-19 20:53:59');

-- --------------------------------------------------------

--
-- Table structure for table `nadmin`
--

CREATE TABLE `nadmin` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nadmin`
--

INSERT INTO `nadmin` (`id`, `username`, `password`) VALUES
(1, 'nadmin', 'nadmin');

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `sno` int(11) NOT NULL,
  `title` varchar(2566) NOT NULL,
  `description` text NOT NULL,
  `tstamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(245) NOT NULL,
  `description` varchar(250) NOT NULL,
  `img` varchar(250) NOT NULL,
  `price` varchar(200) NOT NULL,
  `category` varchar(200) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `img`, `price`, `category`, `create_at`, `update_at`) VALUES
(29, 'Television', '<p>This is New Television</p>', 'uploads/521431.jpg', '33', '11', '2021-11-23 21:23:50', '2021-11-23 21:23:50'),
(30, 'Camera', '<p>This is Camera</p>', 'uploads/503632.jpg', '88', '15', '2021-11-23 21:24:25', '2021-11-23 21:24:25'),
(31, 'Game', '<p>This is Game Console</p>', 'uploads/919353.jpg', '099', '16', '2021-11-23 21:25:23', '2021-11-23 21:25:23'),
(32, 'Dektop', '<p>This is Desktop</p>', 'uploads/144984.jpg', '', '17', '2021-11-23 21:26:23', '2021-11-23 21:26:23'),
(33, 'Jug', '<p>This is Jug</p>', 'uploads/943155.jpg', '', '12', '2021-11-23 21:27:00', '2021-11-23 21:27:00'),
(34, 'Sony Headphones', '<p>Sony Headphones</p>', 'uploads/307986.jpg', '', '14', '2021-11-23 21:27:35', '2021-11-23 21:27:35'),
(35, 'Speaker', '<p>This is speakerss</p>', 'uploads/805897.jpg', '', '11', '2021-11-23 21:28:06', '2021-11-23 21:28:06'),
(36, 'Smart Phones', '<p>SmartPHone</p>', 'uploads/344378.jpg', '', '13', '2021-11-23 21:28:33', '2021-11-23 21:28:33'),
(37, 'Smart Phones', '<p>SmartPhones</p>', 'uploads/590119.jpg', '', '13', '2021-11-23 21:28:59', '2021-11-23 21:28:59'),
(38, 'Smart Phones', '<p>Smart Phones</p>', 'uploads/6343810.jpg', '', '13', '2021-11-23 21:29:28', '2021-11-23 21:29:28'),
(39, 'Smart watches', '<p>Watches</p>', 'uploads/6362211.jpg', '', '18', '2021-11-23 21:30:48', '2021-11-23 21:30:48'),
(40, 'Smart Phones', '<p>Smart Phones</p>', 'uploads/6291712.jpg', '', '13', '2021-11-23 21:31:13', '2021-11-23 21:31:13'),
(41, 'Laptop', '<p>athaijfa</p>', 'uploads/294728.jpg', '', '10', '2021-11-24 00:38:46', '2021-11-24 00:38:46'),
(42, 'Laptop', '<p>LAPTOP</p>', 'uploads/238531.jpg', '', '10', '2021-11-24 00:39:09', '2021-11-24 00:39:09'),
(43, 'asjdasdasd', '<p>asdasdasd</p>', 'uploads/563966.jpg', '', '10', '2021-11-24 00:49:43', '2021-11-24 00:49:43');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `title` varchar(20) NOT NULL,
  `description` varchar(250) NOT NULL,
  `img` varchar(245) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `title`, `description`, `img`) VALUES
(12, '<p>Something New</p>', '<p>This is something new</p>', 'uploads/919252.jpg'),
(14, '<p>This is new one</', '<p>this is new one</p>', 'uploads/43233bg-banner.jpg'),
(15, '', '', 'uploads/776431.jpg'),
(16, '', '', 'uploads/124042.jpg'),
(17, '', '', 'uploads/108613.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `social`
--

CREATE TABLE `social` (
  `id` int(11) NOT NULL,
  `instagram` varchar(200) NOT NULL,
  `facebook` varchar(250) NOT NULL,
  `twitter` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `social`
--

INSERT INTO `social` (`id`, `instagram`, `facebook`, `twitter`) VALUES
(6, 'www.instagram.com', 'www.facebook.com', 'www.twitter.com');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(200) NOT NULL,
  `name` varchar(20) NOT NULL,
  `position` varchar(250) NOT NULL,
  `mail` varchar(250) NOT NULL,
  `img` varchar(250) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `name`, `position`, `mail`, `img`, `create_at`) VALUES
(2, 'Jonathan Scott', 'IT Expert', 'info@example.com', 'uploads/518471.png', '2021-11-22 20:22:37'),
(3, 'Oliver Bastin', 'Web Designer', 'info@example.com', 'uploads/805212.png', '2021-11-22 20:23:44'),
(4, 'Erik Jonson', 'Web Developer', 'info@example.com', 'uploads/626533.png', '2021-11-22 20:24:42'),
(5, 'Maria Mandy', 'Marketing officer', 'test@test.com', 'uploads/112864.png', '2021-11-22 20:25:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clientquery`
--
ALTER TABLE `clientquery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `in1`
--
ALTER TABLE `in1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `map`
--
ALTER TABLE `map`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nadmin`
--
ALTER TABLE `nadmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social`
--
ALTER TABLE `social`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `clientquery`
--
ALTER TABLE `clientquery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `in1`
--
ALTER TABLE `in1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `logo`
--
ALTER TABLE `logo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `map`
--
ALTER TABLE `map`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `nadmin`
--
ALTER TABLE `nadmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `social`
--
ALTER TABLE `social`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
