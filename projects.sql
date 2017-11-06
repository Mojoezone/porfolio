-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2017 at 08:39 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

DROP TABLE IF EXISTS `projects`;
CREATE TABLE `projects` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(40) NOT NULL,
  `p_logo` varchar(100) NOT NULL,
  `p_m_image` varchar(100) NOT NULL,
  `p_d_image` varchar(100) NOT NULL,
  `p_roll` text NOT NULL,
  `p_objective` text NOT NULL,
  `p_language` text NOT NULL,
  `p_problems` text NOT NULL,
  `p_solutions` text NOT NULL,
  `p_url` varchar(2083) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`p_id`, `p_name`, `p_logo`, `p_m_image`, `p_d_image`, `p_roll`, `p_objective`, `p_language`, `p_problems`, `p_solutions`, `p_url`) VALUES
(1, 'Fashion Family', 'images/fashionFamily.svg', 'images/ffmobile.png', 'images/ffdesktop.png', 'Designer and Developer\r\n\r\n\r\n', 'Used PHP, MySQL, Javascript, CSS, HTML to design and develop a website from the given list. I chosed an ecomerce site inpired by family shirts. I gave it a warm\r\nname \"Family one brand and Family one fashion.', 'PHP, MySQL, Javascript, CSS and HTML\r\n \r\n   ', 'Output the availability of each product\'s \r\ngender, age group, size and color.', 'Queried 4 seperate times from data base  with a variable that get the id of current\r\nproduct,compared 3 times with fields id\r\nand field name Used same conditions for comments and reviews.<br />\r\n<span class=\"codes\">SELECT  pro_vars.product_id, pro_vars.variant_id, variants.variant_id, variants.variant, variants.value<br />\r\n            FROM variants, pro_vars<br />\r\n            WHERE pro_vars.product_id = $product_id\r\n            AND  variants.variant_id = pro_vars.variant_id\r\n            AND variants.value = \'gender\'</span>', 'http://mojoezone.com/fashionfamily/'),
(2, 'Shield', 'images/shield.svg', 'images/smobile.png', 'images/sdesktop.png', 'Designer and Developer\r\n\r\n', 'The company name was given by randomly with mini projects added between. I used \r\nminimum classes and ids on my own.', 'Language used: \r\n        Javascript, CSS and HTML\r\n', 'Responsive carousel with SRCSET images\r\nthat the container out off proportion in\r\ndifferent sizes.Intense timing was also a factor of this Web campaign project.', 'In css I added 80% padding bottom and \r\n0 height to the div that contained all \r\ncarousel html syntax. I stayed hours after each class just to finished it on time.', 'http://mojoezone.com/shield/'),
(3, 'Goblin Exile', '', '', 'images/edesktop.png', 'Designer and Developer\r\n\r\n\r\n ', 'Used jQuery and sprite to develop a game \r\nwithout use canvas.', 'jQuery, CSS and HTML\r\n\r\n', 'Make the object slash instead of shooting and the look vs the speed.', 'Spend 6 hours after class for the slash to\r\nfunctional. Sacrificed the high resolution sprite for a self made smoky effect sprite for speed.', 'http://mojoezone.com/GoblinExile/goblinExile.html'),
(4, 'Bike Shop', 'images/bikeshop.svg', 'images/bsmobile.png', 'images/bsdesktop.png', 'Designer and Developer\r\n\r\n', 'The Neighborhood Bike Shop was given to the class to design and develop a website for a local store to promote walk in traffic. Currently Updating the site with bootstrap v4.', 'Bootstrap 4, CSS and HTML\r\n\r\n        ', 'Learning bootstrap 4.', 'Combination of bootstrap 4 classes.', 'https://github.com/Mojoezone/bikeshopBS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`p_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
