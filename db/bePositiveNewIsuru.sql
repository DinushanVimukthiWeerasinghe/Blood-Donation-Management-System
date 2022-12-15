-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 15, 2022 at 12:06 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bePositiveNew`
--

-- --------------------------------------------------------

--
-- Table structure for table `Accepted_Requests`
--

CREATE TABLE `Accepted_Requests` (
  `Refrence_NO` varchar(10) NOT NULL,
  `Request_Id` varchar(10) NOT NULL,
  `Donor_ID` varchar(10) NOT NULL,
  `Remark` text NOT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Approved_Campaign`
--

CREATE TABLE `Approved_Campaign` (
  `Campaign_ID` varchar(10) NOT NULL,
  `Approved_By` varchar(10) NOT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Approved_Campaign`
--

INSERT INTO `Approved_Campaign` (`Campaign_ID`, `Approved_By`, `Timestamp`) VALUES
('999', '001', '2022-11-28 18:00:25');

-- --------------------------------------------------------

--
-- Table structure for table `Assigned_Staff`
--

CREATE TABLE `Assigned_Staff` (
  `Refrence_NO` varchar(10) NOT NULL,
  `Officer_ID` varchar(10) NOT NULL,
  `Campaign_ID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Assigned_Staff`
--

INSERT INTO `Assigned_Staff` (`Refrence_NO`, `Officer_ID`, `Campaign_ID`) VALUES
('1235', '001', '999');

-- --------------------------------------------------------

--
-- Table structure for table `Blood_Bank_Report`
--

CREATE TABLE `Blood_Bank_Report` (
  `Report_Id` varchar(10) NOT NULL,
  `Remark` text NOT NULL,
  `Type` text NOT NULL,
  `Created_BY` varchar(10) NOT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Blood_Bank_Staff`
--

CREATE TABLE `Blood_Bank_Staff` (
  `Officer_ID` varchar(10) NOT NULL,
  `Branch_ID` varchar(10) NOT NULL,
  `Branch_Name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Blood_Bank_Staff`
--

INSERT INTO `Blood_Bank_Staff` (`Officer_ID`, `Branch_ID`, `Branch_Name`) VALUES
('001', '12345', 'gampaha main');

-- --------------------------------------------------------

--
-- Table structure for table `Blood_Packet`
--

CREATE TABLE `Blood_Packet` (
  `Packet_ID` varchar(10) NOT NULL,
  `Type` text NOT NULL,
  `Effect` text NOT NULL,
  `Remark` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Blood_Packet`
--

INSERT INTO `Blood_Packet` (`Packet_ID`, `Type`, `Effect`, `Remark`) VALUES
('1234', 'B+', 'Normal', 'Normal'),
('4562', 'B+', 'Too normsl', 'nill'),
('55555', 'O+', 'nil', 'nil'),
('5556', 'B+', 'Normal', 'Normal'),
('6541', 'B+', 'High Blood Sugar', 'rejected'),
('8794', 'B+', 'High Blood Pressure', 'Rejected');

-- --------------------------------------------------------

--
-- Table structure for table `Campaign`
--

CREATE TABLE `Campaign` (
  `Campaign_ID` varchar(10) NOT NULL,
  `Venue` text NOT NULL,
  `Date` date NOT NULL,
  `Created_AT` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Manage_By` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Campaign`
--

INSERT INTO `Campaign` (`Campaign_ID`, `Venue`, `Date`, `Created_AT`, `Manage_By`) VALUES
('999', 'gampaha', '2021-10-05', '2022-11-28 17:59:16', '444');

-- --------------------------------------------------------

--
-- Table structure for table `Donations`
--

CREATE TABLE `Donations` (
  `Packet_ID` varchar(10) NOT NULL,
  `Donor_Id` varchar(10) NOT NULL,
  `Officer_ID` varchar(10) NOT NULL,
  `Blood_Volume` varchar(5) NOT NULL,
  `In_Time` time NOT NULL,
  `Out_Time` time NOT NULL,
  `Date` date NOT NULL,
  `Venue` varchar(10) NOT NULL,
  `Effects` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Donations`
--

INSERT INTO `Donations` (`Packet_ID`, `Donor_Id`, `Officer_ID`, `Blood_Volume`, `In_Time`, `Out_Time`, `Date`, `Venue`, `Effects`) VALUES
('1234', '123', '001', '5l', '23:31:10', '23:40:10', '2021-10-05', '999', 'nil'),
('4562', '123', '001', '5l', '23:31:10', '23:40:10', '2022-11-28', '999', 'nil'),
('55555', '1669711559', '001', '10L', '15:42:13', '22:42:13', '2022-11-29', '999', 'nil'),
('5556', '123', '001', '2l', '23:31:10', '23:31:10', '2022-11-28', '999', 'hgdgr'),
('6541', '123', '001', '5l', '23:31:10', '23:31:10', '2022-11-28', '999', 'asd'),
('8794', '123', '001', '2l', '21:23:15', '23:31:10', '2022-11-28', '999', 'Normal');

-- --------------------------------------------------------

--
-- Table structure for table `Donation_Request`
--

CREATE TABLE `Donation_Request` (
  `Request_Id` varchar(10) NOT NULL,
  `Special_Remark` text NOT NULL,
  `Message` text NOT NULL,
  `Created_BY` varchar(10) NOT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Donor`
--

CREATE TABLE `Donor` (
  `Donor_ID` varchar(10) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `NIC` varchar(12) NOT NULL,
  `email` text NOT NULL,
  `address1` text NOT NULL,
  `address2` text NOT NULL,
  `city` text NOT NULL,
  `postalCode` text NOT NULL,
  `status` int(1) NOT NULL,
  `userImage` blob DEFAULT NULL,
  `contactNumber` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Donor`
--

INSERT INTO `Donor` (`Donor_ID`, `firstname`, `lastname`, `NIC`, `email`, `address1`, `address2`, `city`, `postalCode`, `status`, `userImage`, `contactNumber`) VALUES
('123', 'ISURU', 'HESHAN', '200018402787', 'isuru.heshan1@gmail.com', '142/1', 'Embaraluwa North', 'Weliweriya', '11007', 1, '', 775891969),
('1669711559', 'Binula', 'Rasanjith', '200012348795', 'binula@gmail.com', 'Address1', 'Address2', 'Gampaha', '11070', 1, '', 711234567);

-- --------------------------------------------------------

--
-- Table structure for table `Donor_Review`
--

CREATE TABLE `Donor_Review` (
  `Review_ID` varchar(10) NOT NULL,
  `Donor_Id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Donor_Review`
--

INSERT INTO `Donor_Review` (`Review_ID`, `Donor_Id`) VALUES
('001', '123'),
('002', '123');

-- --------------------------------------------------------

--
-- Table structure for table `Emergency_Request`
--

CREATE TABLE `Emergency_Request` (
  `Request_Id` varchar(10) NOT NULL,
  `Officer_ID` varchar(10) NOT NULL,
  `Remark` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Financial_Package`
--

CREATE TABLE `Financial_Package` (
  `Package_ID` varchar(10) NOT NULL,
  `Package_Name` text NOT NULL,
  `Amount` int(11) NOT NULL,
  `Remark` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Hospital_Staff`
--

CREATE TABLE `Hospital_Staff` (
  `Officer_ID` varchar(10) NOT NULL,
  `Hospital_ID` varchar(10) NOT NULL,
  `Hospital_Name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Login_History`
--

CREATE TABLE `Login_History` (
  `Login_ID` varchar(10) NOT NULL,
  `Officer_ID` varchar(10) NOT NULL,
  `logged_In` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Logged_Out` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Medical_Officer`
--

CREATE TABLE `Medical_Officer` (
  `Officer_ID` varchar(10) NOT NULL,
  `Name` text NOT NULL,
  `NIC` varchar(12) NOT NULL,
  `Joined_Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Medical_Officer`
--

INSERT INTO `Medical_Officer` (`Officer_ID`, `Name`, `NIC`, `Joined_Date`) VALUES
('001', 'Dr. Nawariyan', '200012345678', '2022-11-28');

-- --------------------------------------------------------

--
-- Table structure for table `Organization`
--

CREATE TABLE `Organization` (
  `Organization_ID` varchar(10) NOT NULL,
  `Organization_Name` text NOT NULL,
  `E_Mail` text NOT NULL,
  `Joined_Date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Telephone_Number` int(10) NOT NULL,
  `Address_Line1` text NOT NULL,
  `Address_Line2` text NOT NULL,
  `City` text NOT NULL,
  `Postal_Code` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Organization`
--

INSERT INTO `Organization` (`Organization_ID`, `Organization_Name`, `E_Mail`, `Joined_Date`, `Telephone_Number`, `Address_Line1`, `Address_Line2`, `City`, `Postal_Code`) VALUES
('444', 'Athuru Mithuru', 'athurumithuru@gmail.com', '2022-11-28 17:58:49', 332256218, 'safg', 'asetgss', 'adhj', '12356');

-- --------------------------------------------------------

--
-- Table structure for table `Package_Assignments`
--

CREATE TABLE `Package_Assignments` (
  `Campaign_ID` varchar(10) NOT NULL,
  `Package_ID` varchar(10) NOT NULL,
  `Sponsor_ID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Report`
--

CREATE TABLE `Report` (
  `Report_Id` varchar(10) NOT NULL,
  `Donor_ID` varchar(10) NOT NULL,
  `Weight` float NOT NULL,
  `Blood_Group` text NOT NULL,
  `Created_On` timestamp NOT NULL DEFAULT current_timestamp(),
  `Remark` text NOT NULL,
  `Updated_By` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Report`
--

INSERT INTO `Report` (`Report_Id`, `Donor_ID`, `Weight`, `Blood_Group`, `Created_On`, `Remark`, `Updated_By`) VALUES
('1123', '123', 60, 'B+', '2022-12-12 17:10:42', 'Normal', '001');

-- --------------------------------------------------------

--
-- Table structure for table `Review`
--

CREATE TABLE `Review` (
  `Review_ID` varchar(10) NOT NULL,
  `Type` text NOT NULL,
  `Messege` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Review`
--

INSERT INTO `Review` (`Review_ID`, `Type`, `Messege`) VALUES
('001', 'Critical', 'No heart'),
('002', 'Normal', 'Normal condition');

-- --------------------------------------------------------

--
-- Table structure for table `Sponsor`
--

CREATE TABLE `Sponsor` (
  `Sponsor_ID` varchar(10) NOT NULL,
  `Sponsor_Name` text NOT NULL,
  `E_Mail` text NOT NULL,
  `Address` text NOT NULL,
  `Telephone_Number` int(10) NOT NULL,
  `Joined_At` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Sponsor_Requests`
--

CREATE TABLE `Sponsor_Requests` (
  `Campaign_ID` varchar(10) NOT NULL,
  `Package_ID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `staff_credential`
--

CREATE TABLE `staff_credential` (
  `uid` varchar(8) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `role` int(11) NOT NULL,
  `type_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` varchar(16) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `firstname`, `lastname`, `role`) VALUES
('123', 'heshan@gmail.com', '$2y$10$sGo75w4VvX5gCkR0DIUrWu/l3Ysngxsdp8AwoTg6T7c1vK4l88PJW', 'Isuru', '', 0),
('1668978102', 'mahinda@gmail.com', '$2y$10$IqIdj88A6YDFATgnQnEZsOwOL5MZK.lHsuxs3C1K2VdQ5NEBntAeW', 'Mahinda', 'Rajapaksha', 0),
('1669147076', 'isurutest@gmail.com', '$2y$10$oJUC2QcWd4kqdcn78Kel5O1mzu8CAOHJ89YSQxWULqzKW/x1cwwBC', 'asdas', 'sdf', 0),
('1669444041', 'test@gmail.com', '$2y$10$xDrSwDlkFRCtefSbem0SR.98x1bSJBdyJosRkf7f2Hp5BzZZf.h8G', 'test', '2', 0),
('1669711559', 'binula@gmail.com', '$2y$10$l1fJMJANiYl5MS868Vpf3OLJHSG.nLP4dhM.6nfaUQxZ8XPQ3XlWe', 'Binula', 'Rasanjith', 0),
('1671066518', 'kavindu@gmail.com', '$2y$10$2ZmbfcsDPZuhI8ysBR3.n.yryAzZMwT6ZXS7ZQUkqx/MA7.BTOMv2', 'Kavindu', 'Priyanath', 0),
('1671085266', 'test@gmail.com', '$2y$10$cnPn8V5h.kpGJ9yY9Mq9Huy9em94zgiDf40yECh0MTRaJ2GkK0/GO', 'Test', 'User', 0),
('1671085285', 'test@gmail.com', '$2y$10$ycc0lvirF8H7rPla8XWeNuM10mAEkIm8QX078dvwx8Iucptndpwxq', 'Test', 'User', 0),
('1671093712', 'olinda@gmail.com', '$2y$10$281R8tDkHwiKeDjTkCdK2u4njVrntNSvf5Hw3V.Hv3EIYVMJJERRi', 'Dushantha', 'Olinda', 0);

-- --------------------------------------------------------

--
-- Table structure for table `Verified_Donor`
--

CREATE TABLE `Verified_Donor` (
  `Donor_ID` varchar(10) NOT NULL,
  `Officer_ID` varchar(10) NOT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Accepted_Requests`
--
ALTER TABLE `Accepted_Requests`
  ADD PRIMARY KEY (`Refrence_NO`),
  ADD KEY `Request_NO` (`Request_Id`),
  ADD KEY `Donor_ID` (`Donor_ID`);

--
-- Indexes for table `Approved_Campaign`
--
ALTER TABLE `Approved_Campaign`
  ADD PRIMARY KEY (`Campaign_ID`),
  ADD KEY `Officer_ID` (`Approved_By`);

--
-- Indexes for table `Assigned_Staff`
--
ALTER TABLE `Assigned_Staff`
  ADD PRIMARY KEY (`Refrence_NO`),
  ADD KEY `Officer_ID` (`Officer_ID`),
  ADD KEY `Campaign_ID` (`Campaign_ID`);

--
-- Indexes for table `Blood_Bank_Report`
--
ALTER TABLE `Blood_Bank_Report`
  ADD PRIMARY KEY (`Report_Id`),
  ADD KEY `Officer_ID` (`Created_BY`) USING BTREE;

--
-- Indexes for table `Blood_Bank_Staff`
--
ALTER TABLE `Blood_Bank_Staff`
  ADD PRIMARY KEY (`Officer_ID`);

--
-- Indexes for table `Blood_Packet`
--
ALTER TABLE `Blood_Packet`
  ADD PRIMARY KEY (`Packet_ID`);

--
-- Indexes for table `Campaign`
--
ALTER TABLE `Campaign`
  ADD PRIMARY KEY (`Campaign_ID`),
  ADD KEY `Organization_ID` (`Manage_By`);

--
-- Indexes for table `Donations`
--
ALTER TABLE `Donations`
  ADD PRIMARY KEY (`Packet_ID`),
  ADD KEY `Donor_ID` (`Donor_Id`),
  ADD KEY `Officer_ID` (`Officer_ID`) USING BTREE,
  ADD KEY `Venue` (`Venue`);

--
-- Indexes for table `Donation_Request`
--
ALTER TABLE `Donation_Request`
  ADD PRIMARY KEY (`Request_Id`),
  ADD KEY `Organization_ID` (`Created_BY`);

--
-- Indexes for table `Donor`
--
ALTER TABLE `Donor`
  ADD PRIMARY KEY (`Donor_ID`),
  ADD UNIQUE KEY `NIC` (`NIC`);

--
-- Indexes for table `Donor_Review`
--
ALTER TABLE `Donor_Review`
  ADD PRIMARY KEY (`Review_ID`),
  ADD KEY `Donor_Id` (`Donor_Id`);

--
-- Indexes for table `Emergency_Request`
--
ALTER TABLE `Emergency_Request`
  ADD PRIMARY KEY (`Request_Id`),
  ADD KEY `Officer_ID` (`Officer_ID`);

--
-- Indexes for table `Financial_Package`
--
ALTER TABLE `Financial_Package`
  ADD PRIMARY KEY (`Package_ID`);

--
-- Indexes for table `Hospital_Staff`
--
ALTER TABLE `Hospital_Staff`
  ADD PRIMARY KEY (`Officer_ID`),
  ADD KEY `Hospital_ID` (`Hospital_ID`);

--
-- Indexes for table `Login_History`
--
ALTER TABLE `Login_History`
  ADD PRIMARY KEY (`Login_ID`),
  ADD KEY `Officer_ID` (`Officer_ID`);

--
-- Indexes for table `Medical_Officer`
--
ALTER TABLE `Medical_Officer`
  ADD PRIMARY KEY (`Officer_ID`),
  ADD UNIQUE KEY `NIC` (`NIC`);

--
-- Indexes for table `Organization`
--
ALTER TABLE `Organization`
  ADD PRIMARY KEY (`Organization_ID`);

--
-- Indexes for table `Package_Assignments`
--
ALTER TABLE `Package_Assignments`
  ADD PRIMARY KEY (`Campaign_ID`),
  ADD KEY `Package_ID` (`Package_ID`),
  ADD KEY `Sponsor_ID` (`Sponsor_ID`);

--
-- Indexes for table `Report`
--
ALTER TABLE `Report`
  ADD PRIMARY KEY (`Report_Id`(8)),
  ADD UNIQUE KEY `Donor_ID` (`Donor_ID`),
  ADD KEY `Officer_ID` (`Updated_By`);

--
-- Indexes for table `Review`
--
ALTER TABLE `Review`
  ADD PRIMARY KEY (`Review_ID`);

--
-- Indexes for table `Sponsor`
--
ALTER TABLE `Sponsor`
  ADD PRIMARY KEY (`Sponsor_ID`);

--
-- Indexes for table `Sponsor_Requests`
--
ALTER TABLE `Sponsor_Requests`
  ADD PRIMARY KEY (`Campaign_ID`),
  ADD KEY `Package_ID` (`Package_ID`);

--
-- Indexes for table `staff_credential`
--
ALTER TABLE `staff_credential`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `Verified_Donor`
--
ALTER TABLE `Verified_Donor`
  ADD PRIMARY KEY (`Donor_ID`),
  ADD KEY `Officer_ID` (`Officer_ID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Accepted_Requests`
--
ALTER TABLE `Accepted_Requests`
  ADD CONSTRAINT `Accepted_Requests_ibfk_1` FOREIGN KEY (`Request_Id`) REFERENCES `Donation_Request` (`Request_Id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `Accepted_Requests_ibfk_2` FOREIGN KEY (`Donor_ID`) REFERENCES `Donor` (`Donor_ID`) ON UPDATE CASCADE;

--
-- Constraints for table `Approved_Campaign`
--
ALTER TABLE `Approved_Campaign`
  ADD CONSTRAINT `Approved_Campaign_ibfk_1` FOREIGN KEY (`Campaign_ID`) REFERENCES `Campaign` (`Campaign_ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `Approved_Campaign_ibfk_2` FOREIGN KEY (`Approved_By`) REFERENCES `Blood_Bank_Staff` (`Officer_ID`) ON UPDATE CASCADE;

--
-- Constraints for table `Assigned_Staff`
--
ALTER TABLE `Assigned_Staff`
  ADD CONSTRAINT `Assigned_Staff_ibfk_1` FOREIGN KEY (`Officer_ID`) REFERENCES `Medical_Officer` (`Officer_ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `Assigned_Staff_ibfk_2` FOREIGN KEY (`Campaign_ID`) REFERENCES `Approved_Campaign` (`Campaign_ID`) ON UPDATE CASCADE;

--
-- Constraints for table `Blood_Bank_Report`
--
ALTER TABLE `Blood_Bank_Report`
  ADD CONSTRAINT `Blood_Bank_Report_ibfk_1` FOREIGN KEY (`Created_BY`) REFERENCES `Blood_Bank_Staff` (`Officer_ID`) ON UPDATE CASCADE;

--
-- Constraints for table `Blood_Bank_Staff`
--
ALTER TABLE `Blood_Bank_Staff`
  ADD CONSTRAINT `Blood_Bank_Staff_ibfk_1` FOREIGN KEY (`Officer_ID`) REFERENCES `Medical_Officer` (`Officer_ID`) ON UPDATE CASCADE;

--
-- Constraints for table `Campaign`
--
ALTER TABLE `Campaign`
  ADD CONSTRAINT `Campaign_ibfk_1` FOREIGN KEY (`Manage_By`) REFERENCES `Organization` (`Organization_ID`) ON UPDATE CASCADE;

--
-- Constraints for table `Donations`
--
ALTER TABLE `Donations`
  ADD CONSTRAINT `Donations_ibfk_1` FOREIGN KEY (`Packet_ID`) REFERENCES `Blood_Packet` (`Packet_ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `Donations_ibfk_2` FOREIGN KEY (`Donor_Id`) REFERENCES `Donor` (`Donor_ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `Donations_ibfk_3` FOREIGN KEY (`Officer_ID`) REFERENCES `Assigned_Staff` (`Officer_ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `Donations_ibfk_4` FOREIGN KEY (`Venue`) REFERENCES `Assigned_Staff` (`Campaign_ID`) ON UPDATE CASCADE;

--
-- Constraints for table `Donation_Request`
--
ALTER TABLE `Donation_Request`
  ADD CONSTRAINT `Donation_Request_ibfk_1` FOREIGN KEY (`Created_BY`) REFERENCES `Organization` (`Organization_ID`) ON UPDATE CASCADE;

--
-- Constraints for table `Donor_Review`
--
ALTER TABLE `Donor_Review`
  ADD CONSTRAINT `Donor_Review_ibfk_1` FOREIGN KEY (`Review_ID`) REFERENCES `Review` (`Review_ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `Donor_Review_ibfk_2` FOREIGN KEY (`Donor_Id`) REFERENCES `Donor` (`Donor_ID`) ON UPDATE CASCADE;

--
-- Constraints for table `Emergency_Request`
--
ALTER TABLE `Emergency_Request`
  ADD CONSTRAINT `Emergency_Request_ibfk_1` FOREIGN KEY (`Officer_ID`) REFERENCES `Hospital_Staff` (`Officer_ID`) ON UPDATE CASCADE;

--
-- Constraints for table `Hospital_Staff`
--
ALTER TABLE `Hospital_Staff`
  ADD CONSTRAINT `Hospital_Staff_ibfk_1` FOREIGN KEY (`Officer_ID`) REFERENCES `Medical_Officer` (`Officer_ID`) ON UPDATE CASCADE;

--
-- Constraints for table `Login_History`
--
ALTER TABLE `Login_History`
  ADD CONSTRAINT `Login_History_ibfk_1` FOREIGN KEY (`Officer_ID`) REFERENCES `Medical_Officer` (`Officer_ID`) ON UPDATE CASCADE;

--
-- Constraints for table `Package_Assignments`
--
ALTER TABLE `Package_Assignments`
  ADD CONSTRAINT `Package_Assignments_ibfk_1` FOREIGN KEY (`Campaign_ID`) REFERENCES `Sponsor_Requests` (`Campaign_ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `Package_Assignments_ibfk_2` FOREIGN KEY (`Package_ID`) REFERENCES `Sponsor_Requests` (`Package_ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `Package_Assignments_ibfk_3` FOREIGN KEY (`Sponsor_ID`) REFERENCES `Sponsor` (`Sponsor_ID`) ON UPDATE CASCADE;

--
-- Constraints for table `Report`
--
ALTER TABLE `Report`
  ADD CONSTRAINT `Report_ibfk_1` FOREIGN KEY (`Donor_ID`) REFERENCES `Donor` (`Donor_ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `Report_ibfk_2` FOREIGN KEY (`Updated_By`) REFERENCES `Medical_Officer` (`Officer_ID`) ON UPDATE CASCADE;

--
-- Constraints for table `Sponsor_Requests`
--
ALTER TABLE `Sponsor_Requests`
  ADD CONSTRAINT `Sponsor_Requests_ibfk_2` FOREIGN KEY (`Package_ID`) REFERENCES `Financial_Package` (`Package_ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `Sponsor_Requests_ibfk_3` FOREIGN KEY (`Campaign_ID`) REFERENCES `Approved_Campaign` (`Campaign_ID`) ON UPDATE CASCADE;

--
-- Constraints for table `Verified_Donor`
--
ALTER TABLE `Verified_Donor`
  ADD CONSTRAINT `Verified_Donor_ibfk_1` FOREIGN KEY (`Donor_ID`) REFERENCES `Donor` (`Donor_ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `Verified_Donor_ibfk_2` FOREIGN KEY (`Officer_ID`) REFERENCES `Medical_Officer` (`Officer_ID`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
