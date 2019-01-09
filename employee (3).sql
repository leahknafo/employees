-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: ינואר 09, 2019 בזמן 10:08 PM
-- גרסת שרת: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employee`
--

-- --------------------------------------------------------

--
-- מבנה טבלה עבור טבלה `employee`
--

CREATE TABLE `employee` (
  `employee_id` int(100) NOT NULL,
  `employee_name` varchar(30) NOT NULL,
  `start_of_work_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- הוצאת מידע עבור טבלה `employee`
--

INSERT INTO `employee` (`employee_id`, `employee_name`, `start_of_work_date`) VALUES
(2, 'Ben', '1998-11-23'),
(25, 'Shimon', '2001-06-25'),
(11, 'Dani', '2016-05-23'),
(21, 'Yoram', '1111-11-30'),
(87, 'Avi', '1111-11-21'),
(24, 'Yossi', '0022-02-22'),
(14, 'Adi', '2015-10-24');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
