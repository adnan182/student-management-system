-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2023 at 07:39 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sdmsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `class` varchar(255) DEFAULT NULL,
  `studentno` varchar(255) NOT NULL,
  `studentName` varchar(255) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `stream` varchar(255) DEFAULT NULL,
  `gender` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contactno` int(10) DEFAULT NULL,
  `nextphone` int(10) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `district` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `village` varchar(255) DEFAULT NULL,
  `studentImage` varchar(255) DEFAULT NULL,
  `parentName` varchar(255) DEFAULT NULL,
  `relation` varchar(255) DEFAULT NULL,
  `occupation` varchar(255) DEFAULT NULL,
  `postingDate` timestamp NULL DEFAULT current_timestamp(),
  `updationDate` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `class`, `studentno`, `studentName`, `age`, `stream`, `gender`, `email`, `contactno`, `nextphone`, `country`, `district`, `state`, `village`, `studentImage`, `parentName`, `relation`, `occupation`, `postingDate`, `updationDate`) VALUES
(10, '18-19', '1802001', 'Shyam Sunder', 20, 'West', 'Male', 'shyam@gmail.com', 770546590, 757537271, 'Bangladesh', 'Khulna', 'Bangladesh', 'Rupsa', '332912629_149305461320045_3939746107729529021_n.jpg', 'adrita', 'Mother', 'Doctor', '2021-01-19 13:22:01', NULL),
(23, '18-19', '1802007', 'A.B.M Shefar', 20, 'Select Stream', 'Male', 'habib@gmail.com', 123, 445, 'Bangladesh', 'Bhola', 'Bangladesh', 'Bhola', '223540423_2903544829899066_5899948041733581932_n.jpg', 'habib', 'Father', 'Teacher', '2023-05-31 02:09:47', NULL),
(24, '18-19', '1802008', 'Fozle Rabbi', 20, 'Select Stream', 'Male', 'asif', 1577744532, 112444, 'France', 'Jamalpur', 'Jamalpur', 'Jamalpur', '261044074_3033504863569748_502030591777363263_n.jpg', 'asif', 'Father', 'Bussiness man', '2023-05-31 02:15:31', NULL),
(25, '18-19', '1802009', 'MD. SHAHRIAR ', 20, 'Select Stream', 'Male', 'nazia@gmail.com', 2147483647, 455666444, 'Bangladesh', 'bhola', 'Bhola', 'Bhola', '125177689_363399411422338_4926754931313864166_n.jpg', 'nazia', 'Mother', 'Teacher', '2023-05-31 02:23:33', NULL),
(26, '18-19', '1802010', 'EPON CHANDRA', 20, 'Select Stream', 'Male', 'adsad', 123456789, 1234556789, 'Spain', 'chandpur', 'Bangladesh', 'Chandpur', '338298552_6141021522680268_5260199620544088607_n.jpg', 'adrita', 'Mother', 'Engineer', '2023-05-31 02:26:21', NULL),
(27, '18-19', '1802011', 'MOLLA TAMZID', 20, 'Select Stream', 'Male', 'adnan16@cse.pstu.ac.bd', 880, 445, 'Spain', 'Khulna', 'Bangladesh', 'Rupsa', '90158310_2302385326735917_6128641469210165248_n.jpg', 'asif', 'Father', 'Bussiness man', '2023-05-31 02:27:54', NULL),
(28, '18-19', '1802012', 'SHARMISTHA SARKAR', 20, 'Select Stream', 'Female', 'adnan16@cse.pstu.ac.bd', 880, 445, 'England', 'Khulna', 'Bangladesh', 'Rupsa', '330526713_175059708180773_4227789815083223287_n.jpg', 'adrita', 'Mother', 'Doctor', '2023-05-31 02:28:55', NULL),
(29, '18-19', '1802013', 'MAHFUZ TAIM', 20, 'Select Stream', 'Male', 'adnan16@cse.pstu.ac.bd', 880, 1234556789, 'England', 'Khulna', 'khulna', 'Rupsa', '146868709_2826845134224922_8141913210214605087_n.jpg', 'adrita', 'Mother', 'Doctor', '2023-05-31 02:30:09', NULL),
(30, '18-19', '1802014', 'MD. TASNIF ', 20, 'Select Stream', 'Male', 'adnan16@cse.pstu.ac.bd', 880, 445, 'England', 'Jamalpur', 'Jamalpur', 'Jamalpur', '68455463_720155528424045_2908917058215346176_n.jpg', 'asif', 'Father', 'Bussiness man', '2023-05-31 02:31:21', NULL),
(31, '18-19', '1802015', 'AYESHA SIDDIKA ', 20, 'Select Stream', 'Female', 'adnan16@cse.pstu.ac.bd', 880, 445, 'England', 'Dhaka', 'Bangladesh', 'Dhaka', '133488088_832260267332929_8850428102226162704_n.jpg', 'adrita', 'Mother', 'Doctor', '2023-05-31 02:32:34', NULL),
(32, '18-19', '1802016', 'TAMANNA AKTER', 20, 'Select Stream', 'Female', 'adnan16@cse.pstu.ac.bd', 1577744532, 1234556789, 'Spain', 'Noakhali', 'Bangladesh', 'Bhola', '242710252_403727824758952_3074430294437114562_n.jpg', 'adrita', 'Mother', 'Doctor', '2023-05-31 02:34:04', NULL),
(33, '18-19', '1802017', 'MD. IMDUD', 20, 'Select Stream', 'Male', 'adnan16@cse.pstu.ac.bd', 880, 445, 'England', 'bhola', 'Bangladesh', 'Bhola', '133488088_832260267332929_8850428102226162704_n.jpg', 'adrita', 'Mother', 'Doctor', '2023-05-31 02:35:20', NULL),
(34, '18-19', '1802018', 'SABBIR RASHID', 20, 'Select Stream', 'Male', 'adnan16@cse.pstu.ac.bd', 880, 1234556789, 'Spain', 'Jamalpur', 'Bangladesh', 'Dhaka', '343303695_762829115498492_6352012012847376740_n.jpg', 'asif', 'Father', 'Doctor', '2023-05-31 02:36:25', NULL),
(35, '18-19', '1802019', 'KAMRUN NAHAR', 20, 'Select Stream', 'Female', 'adnan16@cse.pstu.ac.bd', 880, 1234556789, 'England', 'Khulna', 'Khulna', 'Bhola', '275553893_637352224018458_1007780131538348751_n.jpg', 'habib', 'Father', 'Engineer', '2023-05-31 02:37:53', NULL),
(36, '18-19', '1802021', 'ANIK BISWAS', 20, 'Select Stream', 'Male', 'adnan16@cse.pstu.ac.bd', 880, 445, 'England', 'Khulna', 'Khulna', 'Dhaka', '69023494_2379521988971172_7826639094418505728_n.jpg', 'asif', 'Father', 'Doctor', '2023-05-31 02:39:11', NULL),
(37, '18-19', '1802023', 'HASAN MORSHED', 20, 'Select Stream', 'Male', 'adnan16@cse.pstu.ac.bd', 880, 445, 'England', 'Khulna', 'Khulna', 'Jamalpur', '344841936_932446697878142_6161778775286061897_n.jpg', 'asif', 'Father', 'Doctor', '2023-05-31 02:40:33', NULL),
(38, '18-19', '1802024', 'ALI HOSSAIN', 20, 'Select Stream', 'Male', 'adnan16@cse.pstu.ac.bd', 880, 1234556789, 'England', 'Jamalpur', 'Khulna', 'Bhola', '276149575_511404023914276_6808521382172244191_n.jpg', 'adrita', 'Mother', 'Doctor', '2023-05-31 02:41:31', NULL),
(39, '18-19', '1802025', 'MALIHA AFROJ ORNA', 20, 'Select Stream', 'Female', 'adnan16@cse.pstu.ac.bd', 880, 1234556789, 'Spain', 'Khulna', 'Khulna', 'Jamalpur', '133488088_832260267332929_8850428102226162704_n.jpg', 'nazia', 'Mother', 'Engineer', '2023-05-31 02:42:21', NULL),
(40, '18-19', '1802026', 'LAMIA FATIHA', 20, 'Select Stream', 'Female', 'adnan16@cse.pstu.ac.bd', 880, 1234556789, 'England', 'Khulna', 'Khulna', 'Jamalpur', '259595981_651603285840262_8540462522609019325_n.jpg', 'asif', 'Mother', 'Doctor', '2023-05-31 02:43:15', NULL),
(41, '18-19', '1802027', 'MD. BABUL HASAN', 20, 'Select Stream', 'Male', 'adnan16@cse.pstu.ac.bd', 2147483647, 1234556789, 'Spain', 'Khulna', 'Khulna', 'Jamalpur', '327896466_1273023706581456_8938427514556109113_n.jpg', 'adrita', 'Mother', 'Doctor', '2023-05-31 02:44:29', NULL),
(42, '18-19', '1802028', 'SHAMSUL KARIM', 20, 'Select Stream', 'Male', 'adnan16@cse.pstu.ac.bd', 1577744532, 1234556789, 'France', 'Jamalpur', 'Khulna', 'Dhaka', '288807970_749601056205103_5578647250419430208_n.jpg', 'nazia', 'Mother', 'Driver', '2023-05-31 02:45:33', NULL),
(43, '18-19', '1802030', 'NAZMUL HASAN', 20, 'Select Stream', 'Male', 'adnan16@cse.pstu.ac.bd', 1577744532, 1234556789, 'England', 'Jamalpur', 'Khulna', 'Rupsa', '293750093_2340787202726265_1772963709874505303_n.jpg', 'nazia', 'Mother', 'Doctor', '2023-05-31 02:46:33', NULL),
(44, '18-19', '1802031', 'FARZANA AKTAR', 20, 'Select Stream', 'Female', 'adnan16@cse.pstu.ac.bd', 1577744532, 1234556789, 'France', 'Khulna', 'Khulna', 'Dhaka', '344586961_1709942102783184_8075413630842825033_n.jpg', 'adrita', 'Mother', 'Doctor', '2023-05-31 02:47:50', NULL),
(45, '18-19', '1802032', 'MD. JAHIDUL', 20, 'Select Stream', 'Male', 'adnan16@cse.pstu.ac.bd', 2147483647, 1234556789, 'England', 'Jamalpur', 'Khulna', 'Dhaka', '349073191_151430611148837_5336947982210815169_n.jpg', 'adrita', 'Mother', 'Doctor', '2023-05-31 02:49:08', NULL),
(46, '18-19', '1802033', 'MD. MOHIUDDIN ', 20, 'Select Stream', 'Male', 'adnan16@cse.pstu.ac.bd', 880, 1234556789, 'USA', 'Jamalpur', 'Khulna', 'Bhola', '316690739_3118378905118739_613700551843746420_n.jpg', 'nazia', 'Mother', 'Doctor', '2023-05-31 02:50:24', NULL),
(47, '18-19', '1802034', ' AL-MUZAHID', 20, 'Select Stream', 'Male', 'adnan16@cse.pstu.ac.bd', 1577744532, 1234556789, 'Spain', 'Jamalpur', 'Khulna', 'Dhaka', '321254348_831903871238185_4057669798464007832_n.jpg', 'asif', 'Father', 'Doctor', '2023-05-31 02:51:29', NULL),
(48, '18-19', '1802035', 'MD. MAHDI HASAN', 20, 'Select Stream', 'Male', 'adnan16@cse.pstu.ac.bd', 880, 1234556789, 'Uganda', 'bhola', 'Khulna', 'Jamalpur', '335620818_748382483656930_4938431091788603460_n.jpg', 'asif', 'Father', 'Doctor', '2023-05-31 02:52:59', NULL),
(49, '17-18', '1702001', 'YEASHEN ARAFATH RABIB', 21, 'Select Stream', 'Male', 'adnan16@cse.pstu.ac.bd', 880, 1234556789, 'France', 'Jamalpur', 'Khulna', 'Dhaka', '336542265_590459639418514_32482213933451333_n.jpg', 'asif', 'Father', 'Engineer', '2023-05-31 02:54:04', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `permission` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile` int(11) NOT NULL,
  `userimage` varchar(255) NOT NULL DEFAULT 'but.jpg',
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`id`, `name`, `lastname`, `username`, `email`, `sex`, `permission`, `password`, `mobile`, `userimage`, `status`) VALUES
(15, 'Adnan', 'Hossain', 'admin', 'adnan16@cse.pstu.ac.bd', 'Male', 'Super User', '81dc9bdb52d04dc20036dbd8313ed055', 1950640182, 'EX  2534....jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

CREATE TABLE `userlog` (
  `id` int(11) NOT NULL,
  `username` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `lastname` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `userEmail` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `userip` binary(16) DEFAULT NULL,
  `loginTime` timestamp NOT NULL DEFAULT current_timestamp(),
  `logout` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userlog`
--

INSERT INTO `userlog` (`id`, `username`, `name`, `lastname`, `userEmail`, `userip`, `loginTime`, `logout`, `status`) VALUES
(212, 'admin', 'Adnan', 'Hossain', 'adnan16@cse.pstu.ac.bd', 0x3a3a3100000000000000000000000000, '2023-05-30 21:28:58', NULL, 1),
(213, 'admin', 'Adnan', 'Hossain', 'adnan16@cse.pstu.ac.bd', 0x3a3a3100000000000000000000000000, '2023-05-30 21:36:37', NULL, 1),
(215, 'admin', 'Adnan', 'Hossain', 'adnan16@cse.pstu.ac.bd', 0x3a3a3100000000000000000000000000, '2023-05-30 21:42:38', '31-05-2023 12:47:20 AM', 1),
(216, 'admin', 'Adnan', 'Hossain', 'adnan16@cse.pstu.ac.bd', 0x3a3a3100000000000000000000000000, '2023-05-30 21:47:25', '31-05-2023 01:08:53 AM', 1),
(217, 'admin', 'Adnan', 'Hossain', 'adnan16@cse.pstu.ac.bd', 0x3a3a3100000000000000000000000000, '2023-05-30 22:08:58', '31-05-2023 01:09:35 AM', 1),
(218, 'admin', 'Adnan', 'Hossain', 'adnan16@cse.pstu.ac.bd', 0x3a3a3100000000000000000000000000, '2023-05-30 22:11:37', NULL, 1),
(219, 'admin', 'Adnan', 'Hossain', 'adnan16@cse.pstu.ac.bd', 0x3a3a3100000000000000000000000000, '2023-05-30 22:41:56', NULL, 1),
(220, 'admin', 'Adnan', 'Hossain', 'adnan16@cse.pstu.ac.bd', 0x3a3a3100000000000000000000000000, '2023-05-31 02:03:27', NULL, 1),
(221, 'admin', 'Adnan', 'Hossain', 'adnan16@cse.pstu.ac.bd', 0x3a3a3100000000000000000000000000, '2023-05-31 04:43:19', NULL, 1),
(222, 'admin', 'Adnan', 'Hossain', 'adnan16@cse.pstu.ac.bd', 0x3a3a3100000000000000000000000000, '2023-05-31 05:32:09', NULL, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userlog`
--
ALTER TABLE `userlog`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `userlog`
--
ALTER TABLE `userlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=223;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
