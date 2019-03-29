-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2018 at 07:29 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `plumbing1`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_us_form`
--

CREATE TABLE `contact_us_form` (
  `customer_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile_number` varchar(20) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE `logo` (
  `id` int(11) NOT NULL,
  `imagepath` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`id`, `imagepath`) VALUES
(8, '15117982621.png');

-- --------------------------------------------------------

--
-- Table structure for table `manu`
--

CREATE TABLE `manu` (
  `manu_id` int(11) NOT NULL,
  `manu_name` varchar(100) NOT NULL,
  `manu_icon` varchar(150) NOT NULL,
  `manu_icon_last` varchar(30) NOT NULL,
  `manu_link` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manu`
--

INSERT INTO `manu` (`manu_id`, `manu_name`, `manu_icon`, `manu_icon_last`, `manu_link`) VALUES
(15, 'Home', 'fa fa-home', '', 'index.php'),
(16, 'Services', 'fa fa-wrench', 'fa fa-caret-down', ''),
(17, 'Location', 'fa fa-map-marker', 'fa fa-caret-down', ''),
(18, 'Contact Us', 'fa fa-phone', '', 'contect_us.php'),
(19, 'Blogs', 'fa fa-rss', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `our_work`
--

CREATE TABLE `our_work` (
  `image_id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `our_work`
--

INSERT INTO `our_work` (`image_id`, `image`) VALUES
(35, '5.jpg'),
(36, '9.jpg'),
(37, '15130071882.jpg'),
(38, '15130072153.jpg'),
(39, '15130072316.jpg'),
(40, '15130072419.jpg'),
(41, '15130072932plumbing.png'),
(42, '1-1.png'),
(44, '.22.png');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `pages_id` int(11) NOT NULL,
  `pages_sub_manu_id` int(11) NOT NULL,
  `pages_h1` varchar(100) NOT NULL,
  `pages_h2` varchar(100) NOT NULL,
  `pages_h3` varchar(100) NOT NULL,
  `pages_h4` varchar(100) NOT NULL,
  `pages_content` text NOT NULL,
  `pages_content2` text NOT NULL,
  `image` varchar(100) NOT NULL,
  `embed_maps` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`pages_id`, `pages_sub_manu_id`, `pages_h1`, `pages_h2`, `pages_h3`, `pages_h4`, `pages_content`, `pages_content2`, `image`, `embed_maps`) VALUES
(40, 24, 'Modus quaeque inermis Lorem', 'Modus quaeque inermis Lorem ipsum dolor sit odio luptatum amet!', 'Inermis Lorem ipsum', '', '  Lorem ipsum dolor sit amet, facer epicurei complectitur nam an. Ex unum natum consectetuer mel, eu luptatum mediocrem eos. An mel possit epicuri voluptaria, nusquam recusabo duo no. Dico pericula scriptorem cum ei. Meis recteque ut duo, vis no vivendo fastidii. Ad elaboraret adversarium quo, cum ut brute postea. Eu duo fastidii mandamus pertinacia, an nusquam expetenda incorrupte eum. Id quo dicant commodo, eum an odio luptatum. Modus quaeque inermis sed in, duo expetenda elaboraret sadipscing ei, est enim docendi te. Quo commodo integre placerat id, at pri mediocrem dissentiunt. Eam enim interesset at, volumus oporteat ex vim, liber tempor inermis vix eu. Dicta vidisse iracundia sea ei, vix ex numquam omittantur. Duo utinam convenire consetetur eu. Lorem ipsum dolor sit amet, facer epicurei complectitur nam an. Ex unum natum consectetuer mel, eu luptatum mediocrem eos. An mel possit epicuri voluptaria, nusquam recusabo duo no. Dico pericula scriptorem cum ei. Meis recteque ut duo, vis no vivendo fastidii. Ad ', '  Lorem ipsum dolor sit amet, facer epicurei complectitur nam an. Ex unum natum consectetuer mel, eu luptatum mediocrem eos. An mel possit epicuri voluptaria, nusquam recusabo duo no. Dico pericula scriptorem cum ei. Meis recteque ut duo, vis no vivendo fastidii. Ad elaboraret adversarium quo, cum ut brute postea.  Dico pericula scriptorem cum ei. Meis recteque ut duo, vis no vivendo fastidii. Ad elaboraret adversarium quo, cum ut brute postea. Eu duo fastidii mandamus pertinacia, an nusquam expetenda incorrupte eum. ', 'service-img.jpg', ' <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6509917.877622836!2d-123.7978802184839!3d37.184292772716745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb9fe5f285e3d%3A0x8b5109a227086f55!2sCalifornia!5e0!3m2!1sen!2s!4v1511369332452\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe> '),
(48, 29, 'Modus quaeque inermis Lorem', 'Modus quaeque inermis Lorem ipsum dolor sit odio luptatum amet!', 'Inermis Lorem ipsum', '', '  Lorem ipsum dolor sit amet, facer epicurei complectitur nam an. Ex unum natum consectetuer mel, eu luptatum mediocrem eos. An mel possit epicuri voluptaria, nusquam recusabo duo no. Dico pericula scriptorem cum ei. Meis recteque ut duo, vis no vivendo fastidii. Ad elaboraret adversarium quo, cum ut brute postea. Eu duo fastidii mandamus pertinacia, an nusquam expetenda incorrupte eum. Id quo dicant commodo, eum an odio luptatum. Modus quaeque inermis sed in, duo expetenda elaboraret sadipscing ei, est enim docendi te. Quo commodo integre placerat id, at pri mediocrem dissentiunt. Eam enim interesset at, volumus oporteat ex vim, liber tempor inermis vix eu. Dicta vidisse iracundia sea ei, vix ex numquam omittantur. Duo utinam convenire consetetur eu. Lorem ipsum dolor sit amet, facer epicurei complectitur nam an. Ex unum natum consectetuer mel, eu luptatum mediocrem eos. An mel possit epicuri voluptaria, nusquam recusabo duo no. Dico pericula scriptorem cum ei. Meis recteque ut duo, vis no vivendo fastidii. Ad ', '  Lorem ipsum dolor sit amet, facer epicurei complectitur nam an. Ex unum natum consectetuer mel, eu luptatum mediocrem eos. An mel possit epicuri voluptaria, nusquam recusabo duo no. Dico pericula scriptorem cum ei. Meis recteque ut duo, vis no vivendo fastidii. Ad elaboraret adversarium quo, cum ut brute postea.  Dico pericula scriptorem cum ei. Meis recteque ut duo, vis no vivendo fastidii. Ad elaboraret adversarium quo, cum ut brute postea. Eu duo fastidii mandamus pertinacia, an nusquam expetenda incorrupte eum. ', 'QualityPlumbing-BNR-pg1.jpg', '  <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2996.153914096747!2d2.117675115360986!3d41.327266379269716!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a49f3be555ff73%3A0x4778b8a6443d2a5c!2sColofruit!5e0!3m2!1sen!2s!4v1511369881136\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>  '),
(49, 30, 'Modus quaeque inermis Lorem', 'Modus quaeque inermis Lorem ipsum dolor sit odio luptatum amet!', 'Inermis Lorem ipsum', '', '  Lorem ipsum dolor sit amet, facer epicurei complectitur nam an. Ex unum natum consectetuer mel, eu luptatum mediocrem eos. An mel possit epicuri voluptaria, nusquam recusabo duo no. Dico pericula scriptorem cum ei. Meis recteque ut duo, vis no vivendo fastidii. Ad elaboraret adversarium quo, cum ut brute postea. Eu duo fastidii mandamus pertinacia, an nusquam expetenda incorrupte eum. Id quo dicant commodo, eum an odio luptatum. Modus quaeque inermis sed in, duo expetenda elaboraret sadipscing ei, est enim docendi te. Quo commodo integre placerat id, at pri mediocrem dissentiunt. Eam enim interesset at, volumus oporteat ex vim, liber tempor inermis vix eu. Dicta vidisse iracundia sea ei, vix ex numquam omittantur. Duo utinam convenire consetetur eu. Lorem ipsum dolor sit amet, facer epicurei complectitur nam an. Ex unum natum consectetuer mel, eu luptatum mediocrem eos. An mel possit epicuri voluptaria, nusquam recusabo duo no. Dico pericula scriptorem cum ei. Meis recteque ut duo, vis no vivendo fastidii. Ad ', '  Lorem ipsum dolor sit amet, facer epicurei complectitur nam an. Ex unum natum consectetuer mel, eu luptatum mediocrem eos. An mel possit epicuri voluptaria, nusquam recusabo duo no. Dico pericula scriptorem cum ei. Meis recteque ut duo, vis no vivendo fastidii. Ad elaboraret adversarium quo, cum ut brute postea.  Dico pericula scriptorem cum ei. Meis recteque ut duo, vis no vivendo fastidii. Ad elaboraret adversarium quo, cum ut brute postea. Eu duo fastidii mandamus pertinacia, an nusquam expetenda incorrupte eum. ', 'pvc-vs-cpvc.jpg', '  <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2996.153914096747!2d2.117675115360986!3d41.327266379269716!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a49f3be555ff73%3A0x4778b8a6443d2a5c!2sColofruit!5e0!3m2!1sen!2s!4v1511369881136\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>  '),
(50, 28, 'Modus quaeque inermis Lorem', 'Modus quaeque inermis Lorem ipsum dolor sit odio luptatum amet!', 'Inermis Lorem ipsum', '', '    Lorem ipsum dolor sit amet, facer epicurei complectitur nam an. Ex unum natum consectetuer mel, eu luptatum mediocrem eos. An mel possit epicuri voluptaria, nusquam recusabo duo no. Dico pericula scriptorem cum ei. Meis recteque ut duo, vis no vivendo fastidii. Ad elaboraret adversarium quo, cum ut brute postea. Eu duo fastidii mandamus pertinacia, an nusquam expetenda incorrupte eum. Id quo dicant commodo, eum an odio luptatum. Modus quaeque inermis sed in, duo expetenda elaboraret sadipscing ei, est enim docendi te. Quo commodo integre placerat id, at pri mediocrem dissentiunt. Eam enim interesset at, volumus oporteat ex vim, liber tempor inermis vix eu. Dicta vidisse iracundia sea ei, vix ex numquam omittantur. Duo utinam convenire consetetur eu. Lorem ipsum dolor sit amet, facer epicurei complectitur nam an. Ex unum natum consectetuer mel, eu luptatum mediocrem eos. An mel possit epicuri voluptaria, nusquam recusabo duo no. Dico pericula scriptorem cum ei. Meis recteque ut duo, vis no vivendo fastidii. Ad  ', '    Lorem ipsum dolor sit amet, facer epicurei complectitur nam an. Ex unum natum consectetuer mel, eu luptatum mediocrem eos. An mel possit epicuri voluptaria, nusquam recusabo duo no. Dico pericula scriptorem cum ei. Meis recteque ut duo, vis no vivendo fastidii. Ad elaboraret adversarium quo, cum ut brute postea.  Dico pericula scriptorem cum ei. Meis recteque ut duo, vis no vivendo fastidii. Ad elaboraret adversarium quo, cum ut brute postea. Eu duo fastidii mandamus pertinacia, an nusquam expetenda incorrupte eum.  ', 'svc-banner1.jpg', '   <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2996.153914096747!2d2.117675115360986!3d41.327266379269716!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a49f3be555ff73%3A0x4778b8a6443d2a5c!2sColofruit!5e0!3m2!1sen!2s!4v1511369881136\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>   ');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `user_id` int(11) NOT NULL,
  `hading` varchar(25) NOT NULL,
  `werbpage` varchar(200) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`user_id`, `hading`, `werbpage`, `image`) VALUES
(45, 'Serviec1 ', '   Lorem ipsum dolor sit amet, consectetur adipiscing elit, 									sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.   ', '8630850.jpg'),
(48, 'Serviec2  ', '  Lorem ipsum dolor sit amet, consectetur adipiscing elit, 									sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  ', 'integrated2.jpg'),
(49, 'Serviec3', '  Lorem ipsum dolor sit amet, consectetur adipiscing elit, 									sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  ', 'integrated.jpg'),
(50, 'Serviec4', '    Lorem ipsum dolor sit amet, consectetur adipiscing elit, 									sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.    ', 'boiler-repair-lichfield-dave-ashcroft-plumber.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `service_pages_form`
--

CREATE TABLE `service_pages_form` (
  `user_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sub_manu`
--

CREATE TABLE `sub_manu` (
  `sub_manu_id` int(11) NOT NULL,
  `manu_id` int(11) NOT NULL,
  `sub_manu_name` varchar(20) NOT NULL,
  `sub_manu_link` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_manu`
--

INSERT INTO `sub_manu` (`sub_manu_id`, `manu_id`, `sub_manu_name`, `sub_manu_link`) VALUES
(17, 17, 'location 1', 'landingpage1'),
(18, 17, 'location 2', 'landingpage2'),
(19, 17, 'location 3', 'landingpage3'),
(20, 17, 'location 4', 'landingpage4'),
(24, 16, 'service 1', 'service1'),
(28, 16, 'service 2', 'service2'),
(29, 16, 'service 3', 'service3'),
(30, 16, 'service 4', 'service4');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `userName` varchar(30) NOT NULL,
  `userEmail` varchar(60) NOT NULL,
  `userPass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `userName`, `userEmail`, `userPass`) VALUES
(1, 'ali', 'ali@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92'),
(2, 'umair latif', 'umair109109@gmail.com', '6297664bc2451adaa477350e376d87c3ed82d79fbf6b0e981569af2c73c987a5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_us_form`
--
ALTER TABLE `contact_us_form`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manu`
--
ALTER TABLE `manu`
  ADD PRIMARY KEY (`manu_id`);

--
-- Indexes for table `our_work`
--
ALTER TABLE `our_work`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`pages_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `service_pages_form`
--
ALTER TABLE `service_pages_form`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `sub_manu`
--
ALTER TABLE `sub_manu`
  ADD PRIMARY KEY (`sub_manu_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`),
  ADD UNIQUE KEY `userEmail` (`userEmail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_us_form`
--
ALTER TABLE `contact_us_form`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `logo`
--
ALTER TABLE `logo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `manu`
--
ALTER TABLE `manu`
  MODIFY `manu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `our_work`
--
ALTER TABLE `our_work`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `pages_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `service_pages_form`
--
ALTER TABLE `service_pages_form`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sub_manu`
--
ALTER TABLE `sub_manu`
  MODIFY `sub_manu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
