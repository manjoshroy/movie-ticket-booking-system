-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 14, 2022 at 01:43 AM
-- Server version: 5.7.40-cll-lve
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nsplproj_movietickets`
--

-- --------------------------------------------------------

--
-- Table structure for table `hallbooking`
--

CREATE TABLE `hallbooking` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `theatre` varchar(255) NOT NULL,
  `hall_booking_date` date NOT NULL,
  `from_time` varchar(255) NOT NULL,
  `to_time` varchar(255) NOT NULL,
  `cardnumber` varchar(255) NOT NULL,
  `cardname` varchar(255) NOT NULL,
  `cardexpiry` varchar(255) NOT NULL,
  `cardcvv` varchar(255) NOT NULL,
  `hall_booking_amount` varchar(255) NOT NULL,
  `hall_booked_date` varchar(255) NOT NULL,
  `hall_booked_time` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hallbooking`
--

INSERT INTO `hallbooking` (`id`, `user_id`, `theatre`, `hall_booking_date`, `from_time`, `to_time`, `cardnumber`, `cardname`, `cardexpiry`, `cardcvv`, `hall_booking_amount`, `hall_booked_date`, `hall_booked_time`) VALUES
(1, 2, 'Cinepolis: Mall of Amritsar', '2022-05-05', '5:40', '8:30', 'ffgfgd', 'ddh', 'ddd', 'ddd', '2,50,000', '2022-05-04', '10:36'),
(2, 0, 'PVR: SCT, Amritsar', '2022-05-11', '12:30', '2:10', 'rgerrge', 'kiran', '6-12', '852', '2,50,000', '2022-05-04', '11:05'),
(3, 2, 'Cinepolis: Mall of Amritsar', '2022-05-04', '12:30', '5:40', '123456789415512360', 'Nitika', '2/24', '045', '2,50,000', '2022-05-04', '12:24'),
(4, 0, 'Cinepolis: Mall of Amritsar', '2022-05-05', '12:30', '6:55', 'cvdv', 'ddv', 'dcv', 'v', '2,50,000', '2022-05-04', '15:23');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `movieid` int(10) NOT NULL,
  `moviename` varchar(50) NOT NULL,
  `cast` varchar(150) NOT NULL,
  `genre` varchar(50) NOT NULL,
  `language` varchar(50) NOT NULL,
  `director` varchar(20) NOT NULL,
  `image` varchar(255) NOT NULL,
  `trailer_link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`movieid`, `moviename`, `cast`, `genre`, `language`, `director`, `image`, `trailer_link`) VALUES
(1, 'K.G.F Chapter 2', 'Ash, Sanjay Dutt,  Raveena Tandon, Srinidhi Shetty ,Prakash Raj', 'Action,Drama,Period', 'Tamil, Malayalam, Hindi', 'Prashanth Neel', '1.jpg', 'https://www.youtube.com/embed/JKa05nyUmuQ'),
(2, 'RRR', 'Jr.Ntr,Ram Charan,Ajay Devgun,Alia Bhatt,Samuthirakani,Ray Stevenson', 'Action,Drama,histori', 'Telugu', 'S. S. Rajamouli', '2.jpg', 'https://www.youtube.com/embed/GY4BgdUSpbE'),
(3, 'MAA', 'Divya dutta, Gippy garewal, Jaggi Sing, Gurpreet Ghuggi', 'Social family drama', 'Punjabi', 'Baljit Singh Deo', '3.jpg', 'https://www.youtube.com/embed/mbzdcLmeNu8'),
(4, 'RUNWAY 34', 'Ajay Devgan, Sandeep Kewlani,Aamil Keeyan Khan,Amitabh Bachchan', 'Comedy, Thriller, Action', 'Hindi', 'Joshiy', '4.jpg', 'https://www.youtube.com/embed/Lb8mQCpZHco'),
(5, 'GALWAKDI', 'Tarsem Singh Jassar, Wamiqa Gabbi, B.N. Sharma, Noreen Khan, Rupinder Rupi and Sukhi Chahal.', 'Comedy,Drama,Romanti', 'Punjabi', 'Sharan Art', '5.jpg', 'https://www.youtube.com/embed/bDVRaPEgc-w');

-- --------------------------------------------------------

--
-- Table structure for table `ticketbooking`
--

CREATE TABLE `ticketbooking` (
  `ticketid` int(20) NOT NULL,
  `user_id` int(10) NOT NULL,
  `movieid` int(10) NOT NULL,
  `moviedate` date NOT NULL,
  `movietime` time NOT NULL,
  `ticketamount` varchar(5) NOT NULL,
  `seatnumber` varchar(255) NOT NULL,
  `cardnumber` varchar(255) NOT NULL,
  `cardname` varchar(255) NOT NULL,
  `cardexpiry` varchar(255) NOT NULL,
  `cardcvv` varchar(255) NOT NULL,
  `theatre` varchar(255) NOT NULL,
  `no_of_seats` int(11) NOT NULL,
  `booking_date` date NOT NULL,
  `booking_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ticketbooking`
--

INSERT INTO `ticketbooking` (`ticketid`, `user_id`, `movieid`, `moviedate`, `movietime`, `ticketamount`, `seatnumber`, `cardnumber`, `cardname`, `cardexpiry`, `cardcvv`, `theatre`, `no_of_seats`, `booking_date`, `booking_time`) VALUES
(1, 2, 5, '2022-05-10', '05:40:00', '340', 'L1,L3', '123456', 'Nitika', '2/24', '456', 'Movietime: Novelty Mall Lawrence Road, Amritsar', 2, '2022-05-04', '12:21:00'),
(2, 2, 4, '2022-05-05', '12:30:00', '320', 'G7, G8', '123456', 'Niytikas', '2/24', '254', 'PVR: SCT, Amritsar', 2, '2022-05-04', '13:10:00'),
(3, 2, 4, '2022-05-06', '05:40:00', '1600', 'F1 F2 F3', 'DFEFD', 'DGD', 'DD', 'DDD', 'Movietime: Novelty Mall Lawrence Road, Amritsar', 10, '2022-05-04', '14:02:00'),
(4, 2, 4, '2022-05-04', '02:10:00', '160', 'H2', 'sdsd', 'ds', 'sds', 'sds', 'Movietime: Novelty Mall Lawrence Road, Amritsar', 1, '2022-05-04', '15:08:00'),
(19, 4, 3, '2022-05-12', '04:20:00', '320', 'F1, F2', '123456', 'Nitika', '24/27', '0356', 'Cinepolis: Mall of Amritsar', 2, '2022-05-10', '16:22:00'),
(20, 4, 3, '2022-05-11', '02:10:00', '820', 'F1, F2', '12345678', 'Nitika', '24/27', '037', 'Cinepolis: Mall of Amritsar', 2, '2022-05-10', '16:41:00'),
(21, 4, 3, '2022-05-11', '02:10:00', '320', 'F1, F2', '123467', 'Nitika', '2427', '037', 'Cinepolis: Mall of Amritsar', 2, '2022-05-10', '16:42:00'),
(22, 4, 3, '2022-05-11', '02:10:00', '320', 'F3,F4', '123457', 'Litaaa', '24/237', '037', 'Cinepolis: Mall of Amritsar', 2, '2022-05-10', '16:43:00'),
(23, 4, 3, '2022-05-11', '02:10:00', '840', 'N7,N8', '123466789', 'Nitika', '1234567', '037', 'Cinepolis: Mall of Amritsar', 2, '2022-05-10', '16:45:00'),
(24, 4, 2, '2022-05-13', '02:10:00', '340', 'I1, I2', '654321876', 'HARMANDEEP KAUR', '3/22', '313', 'Cinepolis: Celebration Mall, Amritsar', 2, '2022-05-12', '09:25:00'),
(25, 4, 4, '2022-05-13', '12:30:00', '620', 'F1, F2', '12345678', 'Niyika', '24/22', '037', 'Cinepolis: Mall of Amritsar', 2, '2022-05-12', '09:55:00'),
(26, 4, 4, '2022-05-13', '12:30:00', '620', 'S9, S10', '12346', 'Nitika', '2/24', '045', 'Cinepolis: Mall of Amritsar', 2, '2022-05-12', '10:15:00'),
(27, 4, 1, '2022-05-16', '12:30:00', '360', 'H6', '7854832456', 'HARMANDEEP KAUR', '6/22', '131', 'Cinepolis: Mall of Amritsar', 1, '2022-05-15', '19:28:00'),
(28, 7, 5, '2022-12-13', '06:55:00', '520', 'H3,H4', '48596', 'NITIKA', '2022', '252', 'Cinepolis: Celebration Mall, Amritsar', 2, '2022-12-12', '14:53:00'),
(29, 7, 2, '2022-12-14', '05:40:00', '820', 'E4 E5', '123456', 'Nitika', '4/2022', '252', 'Cinepolis: Mall of Amritsar', 2, '2022-12-13', '13:58:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `emailid` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `emailid`, `password`, `status`) VALUES
(1, 'Admin', 'admin', '123456', 0),
(2, 'kiran', 'abc@gmail.com', '12345', 1),
(3, 'Bac', 'Hahah@abc.com', 'Kadxu1-wuj', 1),
(4, 'Harman', 'abc@gmail.com', 'dhillon17', 1),
(5, 'jasmine', 'jasminechug43@gmail.com', '123abc', 1),
(6, 'kiran', 'abc@gmail.com', '123', 1),
(7, 'nitika', 'Nitika@gmail.com', '123456', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hallbooking`
--
ALTER TABLE `hallbooking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`movieid`);

--
-- Indexes for table `ticketbooking`
--
ALTER TABLE `ticketbooking`
  ADD PRIMARY KEY (`ticketid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hallbooking`
--
ALTER TABLE `hallbooking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `movieid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ticketbooking`
--
ALTER TABLE `ticketbooking`
  MODIFY `ticketid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
