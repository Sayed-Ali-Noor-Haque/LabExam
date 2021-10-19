-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2020 at 06:53 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";




--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `New_student`
--

CREATE TABLE `New_student` (
  `Firstname`` varchar(100) NOT NULL,
  `lastname`` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `Gender`` varchar(100) NOT NULL,
 
  `mobilenumber` varchar(100) NOT NULL,
   `Dateofbirth` varchar(100) NOT NULL,
  `HSCresult` varchar(100) NOT NULL,
  `SSCresult` varchar(100) NOT NULL,
  `Selectacourseyouwanttoscroll` varchar(200) NOT NULL,
  `Selectayearscrollingyear` varchar(200) NOT NULL,
  `Selectayearscrollingyear` varchar(200) NOT NULL
  
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `New_student`
--

INSERT INTO `New_student` (`Firstname`, `lastname`, `email`, `Gender`, `mobilenumber`, `Dateofbirth`, `HSCresult`, `SSCresult`, `Selectacourseyouwanttoscroll`, `Selectayearscrollingyear`,`Selectayearscrollingyear`) VALUES
('sayed', 'ali', 'vsgsvagv@gmail.com', 'male', '018+++++', '19/12/19', '5.00','5.00', 'CSE', '2017', 'spring');

COMMIT;
