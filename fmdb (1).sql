-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 19, 2021 at 01:59 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fmdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `fm_accounts`
--

CREATE TABLE `fm_accounts` (
  `ID` int(11) NOT NULL,
  `accountname` text NOT NULL,
  `dateadded` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='list of all accounts';

-- --------------------------------------------------------

--
-- Table structure for table `fm_accounts_administrative`
--

CREATE TABLE `fm_accounts_administrative` (
  `ID` int(11) NOT NULL,
  `codes` text NOT NULL,
  `budget` float(15,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='accounts_administrative';

-- --------------------------------------------------------

--
-- Table structure for table `fm_accounts_economic_segment`
--

CREATE TABLE `fm_accounts_economic_segment` (
  `ID` int(11) NOT NULL,
  `codes` text NOT NULL,
  `budget` float(15,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='accounts_economic_segment';

-- --------------------------------------------------------

--
-- Table structure for table `fm_accounts_functional_segment`
--

CREATE TABLE `fm_accounts_functional_segment` (
  `ID` int(11) NOT NULL,
  `codes` text NOT NULL,
  `budget` float(15,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='accounts_administrative';

-- --------------------------------------------------------

--
-- Table structure for table `fm_accounts_fund_segment`
--

CREATE TABLE `fm_accounts_fund_segment` (
  `ID` int(11) NOT NULL,
  `codes` text NOT NULL,
  `budget` float(15,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='accounts_administrative';

-- --------------------------------------------------------

--
-- Table structure for table `fm_accounts_geo_segment`
--

CREATE TABLE `fm_accounts_geo_segment` (
  `ID` int(11) NOT NULL,
  `codes` text NOT NULL,
  `budget` float(15,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='accounts_administrative';

-- --------------------------------------------------------

--
-- Table structure for table `fm_accounts_program_segment`
--

CREATE TABLE `fm_accounts_program_segment` (
  `ID` int(11) NOT NULL,
  `codes` text NOT NULL,
  `budget` float(15,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='accounts_administrative';

-- --------------------------------------------------------

--
-- Table structure for table `fm_account_code_list`
--

CREATE TABLE `fm_account_code_list` (
  `ID` int(11) NOT NULL,
  `accountname` text NOT NULL,
  `description` text NOT NULL,
  `createdby` varchar(500) NOT NULL,
  `organization` text NOT NULL,
  `ministry` text NOT NULL,
  `sector` text NOT NULL,
  `state` text NOT NULL,
  `datecreated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fm_account_code_list`
--

INSERT INTO `fm_account_code_list` (`ID`, `accountname`, `description`, `createdby`, `organization`, `ministry`, `sector`, `state`, `datecreated`) VALUES
(10, 'economic', 'Furniture & Fittings', 'mda@gmail.com', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', '2021-05-08 22:49:33'),
(11, 'economic', 'Internet Suscription', 'mda@gmail.com', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', '2021-05-08 22:49:33'),
(12, 'economic', 'Laboratory consumables', 'mda@gmail.com', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', '2021-05-08 22:49:33'),
(13, 'economic', 'Lateral referral services (payment to another primary provider for services covered at primary level but facility cannot provide).', 'mda@gmail.com', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', '2021-05-08 22:49:33'),
(14, 'economic', 'Maintenance of hospital equipment.', 'mda@gmail.com', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', '2021-05-08 22:49:33'),
(15, 'economic', 'Medical Staff Hiring Locum (Medical Doctors and medical staff above the rank of a Nurse only).', 'mda@gmail.com', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', '2021-05-08 22:49:33'),
(16, 'economic', 'Meetings & Trainings', 'mda@gmail.com', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', '2021-05-08 22:49:33'),
(17, 'economic', 'Motor Vehicles', 'mda@gmail.com', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', '2021-05-08 22:49:33'),
(18, 'economic', 'Motorcycles', 'mda@gmail.com', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', '2021-05-08 22:49:33'),
(19, 'economic', 'Postages', 'mda@gmail.com', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', '2021-05-08 22:49:33'),
(20, 'economic', 'Power Generators', 'mda@gmail.com', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', '2021-05-08 22:49:33'),
(21, 'economic', 'Printing', 'mda@gmail.com', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', '2021-05-08 22:49:33'),
(22, 'economic', 'Renovation of facility (Maximum N250,000).', 'mda@gmail.com', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', '2021-05-08 22:49:33'),
(23, 'economic', 'Repair and Maintenance - Generators', 'mda@gmail.com', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', '2021-05-08 22:49:33'),
(24, 'economic', 'Repair and Maintenance - Refrigerators and Cold Rooms generators', 'mda@gmail.com', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', '2021-05-08 22:49:33'),
(25, 'economic', 'Repairs and Maintenance - Motor Vehicle', 'mda@gmail.com', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', '2021-05-08 22:49:33'),
(26, 'economic', 'Simple hospital Equipment', 'mda@gmail.com', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', '2021-05-08 22:49:33'),
(27, 'economic', 'Small Medical Tools', 'mda@gmail.com', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', '2021-05-08 22:49:33'),
(28, 'economic', 'Stationaries', 'mda@gmail.com', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', '2021-05-08 22:49:33'),
(29, 'economic', 'Transportation', 'mda@gmail.com', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', '2021-05-08 22:49:33'),
(30, 'economic', 'Vaccines', 'mda@gmail.com', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', '2021-05-08 22:49:33'),
(31, 'economic', 'Water Bills', 'mda@gmail.com', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', '2021-05-08 22:49:33'),
(32, 'administrative', 'OIC', 'mda@gmail.com', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', '2021-05-08 22:49:33'),
(33, 'functional', 'Aged', 'mda@gmail.com', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', '2021-05-08 22:49:33'),
(34, 'functional', 'All', 'mda@gmail.com', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', '2021-05-08 22:49:33'),
(35, 'functional', 'Ante Natal to Post Natal', 'mda@gmail.com', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', '2021-05-08 22:49:33'),
(36, 'functional', 'Others', 'mda@gmail.com', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', '2021-05-08 22:49:33'),
(37, 'functional', 'Under 5', 'mda@gmail.com', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', '2021-05-08 22:49:33'),
(38, 'fund', 'Aliko Dangote Foundation', 'mda@gmail.com', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', '2021-05-08 22:49:33'),
(39, 'fund', 'BHCPF - SPHCDA Gateway', 'mda@gmail.com', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', '2021-05-08 22:49:33'),
(40, 'fund', 'BHCPF - SSHIA Gateway', 'mda@gmail.com', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', '2021-05-08 22:49:33'),
(41, 'fund', 'BMGF', 'mda@gmail.com', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', '2021-05-08 22:49:33'),
(42, 'fund', 'CDC-NSTOP', 'mda@gmail.com', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', '2021-05-08 22:49:33'),
(43, 'fund', 'Chigari Foundation', 'mda@gmail.com', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', '2021-05-08 22:49:33'),
(44, 'fund', 'DFID', 'mda@gmail.com', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', '2021-05-08 22:49:33'),
(45, 'fund', 'EU-SIGN', 'mda@gmail.com', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', '2021-05-08 22:49:33'),
(46, 'fund', 'Global Fund', 'mda@gmail.com', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', '2021-05-08 22:49:33'),
(47, 'fund', 'Internally Generated Revenue', 'mda@gmail.com', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', '2021-05-08 22:49:33'),
(48, 'fund', 'KADCHMA', 'mda@gmail.com', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', '2021-05-08 22:49:33'),
(49, 'fund', 'KDSG- KADHSMA', 'mda@gmail.com', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', '2021-05-08 22:49:33'),
(50, 'fund', 'KDSG- SPHCDA', 'mda@gmail.com', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', '2021-05-08 22:49:33'),
(51, 'fund', 'KDSG-GH', 'mda@gmail.com', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', '2021-05-08 22:49:33'),
(52, 'fund', 'KDSG-KADSACA', 'mda@gmail.com', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', '2021-05-08 22:49:33'),
(53, 'fund', 'KDSG-SEMA', 'mda@gmail.com', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', '2021-05-08 22:49:33'),
(54, 'fund', 'KDSG-SMOH&HS', 'mda@gmail.com', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', '2021-05-08 22:49:33'),
(55, 'fund', 'Local Philanthropist', 'mda@gmail.com', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', '2021-05-08 22:49:33'),
(56, 'fund', 'PHC MOU', 'mda@gmail.com', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', '2021-05-08 22:49:33'),
(57, 'fund', 'RI-MOU', 'mda@gmail.com', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', '2021-05-08 22:49:33'),
(58, 'fund', 'Rotary International', 'mda@gmail.com', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', '2021-05-08 22:49:33'),
(59, 'fund', 'State Basket Fund', 'mda@gmail.com', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', '2021-05-08 22:49:33'),
(60, 'fund', 'UNFPA', 'mda@gmail.com', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', '2021-05-08 22:49:33'),
(61, 'fund', 'UNICEF', 'mda@gmail.com', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', '2021-05-08 22:49:33'),
(62, 'fund', 'WHO', 'mda@gmail.com', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', '2021-05-08 22:49:33'),
(63, 'fund', 'LGA Authority', 'mda@gmail.com', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', '2021-05-08 22:49:33'),
(64, 'fund', 'Volunteer Staff ', 'mda@gmail.com', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', '2021-05-08 22:49:33'),
(65, 'program', 'Adolescent health', 'mda@gmail.com', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', '2021-05-08 22:49:33'),
(66, 'program', 'Basic laboratory services', 'mda@gmail.com', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', '2021-05-08 22:49:33'),
(67, 'program', 'Community mental health', 'mda@gmail.com', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', '2021-05-08 22:49:33'),
(68, 'program', 'Curative care', 'mda@gmail.com', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', '2021-05-08 22:49:33'),
(69, 'program', 'Essential drugs', 'mda@gmail.com', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', '2021-05-08 22:49:33'),
(70, 'program', 'Family planning', 'mda@gmail.com', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', '2021-05-08 22:49:33'),
(71, 'program', 'Health education and promotion', 'mda@gmail.com', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', '2021-05-08 22:49:33'),
(72, 'program', 'Health management information system', 'mda@gmail.com', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', '2021-05-08 22:49:33'),
(73, 'program', 'HIV/AIDS', 'mda@gmail.com', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', '2021-05-08 22:49:33'),
(74, 'program', 'Immunization', 'mda@gmail.com', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', '2021-05-08 22:49:33'),
(75, 'program', 'Maintenance of PHC records', 'mda@gmail.com', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', '2021-05-08 22:49:33'),
(76, 'program', 'Malaria', 'mda@gmail.com', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', '2021-05-08 22:49:33'),
(77, 'program', 'Maternal newborn & child care', 'mda@gmail.com', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', '2021-05-08 22:49:33'),
(78, 'program', 'Monitoring', 'mda@gmail.com', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', '2021-05-08 22:49:33'),
(79, 'program', 'Oral health', 'mda@gmail.com', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', '2021-05-08 22:49:33'),
(80, 'program', 'Others  ', 'mda@gmail.com', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', '2021-05-08 22:49:33'),
(81, 'program', 'Promotion of proper nutrition and food education', 'mda@gmail.com', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', '2021-05-08 22:49:33'),
(82, 'program', 'Referrals', 'mda@gmail.com', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', '2021-05-08 22:49:33'),
(83, 'program', 'Routine home visits and community outreach', 'mda@gmail.com', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', '2021-05-08 22:49:33'),
(84, 'program', 'Supervision', 'mda@gmail.com', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', '2021-05-08 22:49:33'),
(85, 'program', 'Tuberculosis', 'mda@gmail.com', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', '2021-05-08 22:49:33'),
(86, 'program', 'Waste Disposal', 'mda@gmail.com', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', '2021-05-08 22:49:33'),
(87, 'program', 'Water and sanitation', 'mda@gmail.com', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', '2021-05-08 22:49:33'),
(88, 'economic', 'Annual Audit', 'mda@gmail.com', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', '2021-05-08 22:49:33'),
(89, 'economic', 'Bank Charges', 'mda@gmail.com', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', '2021-05-08 22:49:33'),
(90, 'economic', 'Cleaning Items', 'mda@gmail.com', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', '2021-05-08 22:49:33'),
(91, 'economic', 'Communication', 'mda@gmail.com', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', '2021-05-08 22:49:33'),
(92, 'economic', 'Computers', 'mda@gmail.com', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', '2021-05-08 22:49:33'),
(93, 'economic', 'Drug purchase and consumables.', 'mda@gmail.com', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', '2021-05-08 22:49:33'),
(94, 'economic', 'Electricity Bills', 'mda@gmail.com', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', '2021-05-08 22:49:33'),
(95, 'economic', 'Fuel and Lubricants', 'mda@gmail.com', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', '2021-05-08 22:49:33'),
(96, 'economic', 'Fuel for Generators', 'mda@gmail.com', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', '2021-05-08 22:49:33');

-- --------------------------------------------------------

--
-- Table structure for table `fm_account_list`
--

CREATE TABLE `fm_account_list` (
  `ID` int(11) NOT NULL,
  `accountname` text NOT NULL,
  `createdby` varchar(500) NOT NULL,
  `datecreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `organization` text NOT NULL,
  `ministry` text NOT NULL,
  `sector` text NOT NULL,
  `state` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fm_account_list`
--

INSERT INTO `fm_account_list` (`ID`, `accountname`, `createdby`, `datecreated`, `organization`, `ministry`, `sector`, `state`) VALUES
(1, 'economic', 'mda@gmail.com', '2021-05-08 22:02:05', 'Budget Organization', 'Ministry of Budget', 'Administrative', 'Kaduna'),
(2, 'administrative', 'mda@gmail.com', '2021-05-08 22:02:22', 'Budget Organization', 'Ministry of Budget', 'Administrative', 'Kaduna'),
(3, 'functional', 'mda@gmail.com', '2021-05-08 22:02:36', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna'),
(4, 'fund', 'mda@gmail.com', '2021-05-08 22:04:51', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna'),
(5, 'program', 'mda@gmail.com', '2021-05-08 22:05:39', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna');

-- --------------------------------------------------------

--
-- Table structure for table `fm_budget`
--

CREATE TABLE `fm_budget` (
  `ID` int(11) NOT NULL,
  `budgetname` text NOT NULL,
  `duration` int(11) NOT NULL,
  `createdby` varchar(500) NOT NULL,
  `organization` text NOT NULL,
  `ministry` text NOT NULL,
  `sector` text NOT NULL,
  `state` text NOT NULL,
  `datecreated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fm_budget`
--

INSERT INTO `fm_budget` (`ID`, `budgetname`, `duration`, `createdby`, `organization`, `ministry`, `sector`, `state`, `datecreated`, `status`) VALUES
(1, 'Test Name', 12, 'mda@gmail.com', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', '2021-06-10 11:52:35', 1),
(2, 'My second budget', 4, 'mda@gmail.com', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', '2021-06-10 12:00:28', 1),
(4, 'Party', 5, 'ukpaid@gmail.com', 'zena', 'Ministry of Health', 'Administrative', 'Abia', '2021-06-10 15:29:42', 1),
(6, 'Awwal Balling', 5, 'awwalseghosime@gmail.com', 'pHC', 'Ministry of Health', 'Economic', 'Anambra', '2021-06-10 17:42:09', 1),
(7, 'test budget too', 15, 'mda@gmail.com', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', '2021-06-11 12:23:12', 1),
(8, 'Build A New Hospital', 23, 'mda@gmail.com', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', '2021-06-15 09:37:54', 1),
(9, 'Fish Party', 8, 'bighead@gmail.com', 'zena', 'Ministry of Works', 'Administrative', 'Adamawa', '2021-06-15 11:21:19', 1),
(10, '', 0, '', '', '', '', '', '2021-06-15 11:23:09', 1),
(11, 'Birthdays', 12, 'freeme@gmail.com', 'kad pay', 'Ministry of Works', 'Administrative', 'Kaduna', '2021-07-07 15:38:06', 1);

-- --------------------------------------------------------

--
-- Table structure for table `fm_budgetactivity`
--

CREATE TABLE `fm_budgetactivity` (
  `ID` int(2) NOT NULL,
  `budget` text NOT NULL,
  `budgetname` text NOT NULL,
  `costelement` text NOT NULL,
  `economic` text NOT NULL,
  `admin` text NOT NULL,
  `fund` text NOT NULL,
  `func` text NOT NULL,
  `pro` text NOT NULL,
  `amount` double(15,2) DEFAULT NULL,
  `location` text NOT NULL,
  `priority` varchar(25) NOT NULL,
  `verify` text NOT NULL,
  `duration` varchar(25) NOT NULL,
  `createdby` text,
  `datecreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `organization` text,
  `ministry` text,
  `sector` text,
  `state` varchar(255) DEFAULT NULL,
  `status` int(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fm_budgetactivity`
--

INSERT INTO `fm_budgetactivity` (`ID`, `budget`, `budgetname`, `costelement`, `economic`, `admin`, `fund`, `func`, `pro`, `amount`, `location`, `priority`, `verify`, `duration`, `createdby`, `datecreated`, `organization`, `ministry`, `sector`, `state`, `status`) VALUES
(1, '', 'My second budget', 'this is sample cost element', 'Laboratory consumables', 'OIC', 'BMGF', 'BMGF', 'Essential drugs', 50000.00, 'SABON GARI', '', '', '', 'mda@gmail.com', '2021-06-10 13:47:30', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', 0),
(2, '', 'Party', 'hire dj', 'Furniture & Fittings', 'OIC', 'PHC MOU', 'PHC MOU', 'Referrals', 300000.00, 'UKWA WEST', '', '', '', 'ukpaid@gmail.com', '2021-06-10 16:19:57', 'zena', 'Ministry of Health', 'Administrative', 'Abia', 0),
(3, '', 'Awwal Balling', 'house', 'Furniture & Fittings', 'OIC', 'BMGF', 'BMGF', 'Others', 10000000.00, 'ANAOCHA', '', '', '', 'awwalseghosime@gmail.com', '2021-06-10 17:45:56', 'pHC', 'Ministry of Health', 'Economic', 'Anambr', 0),
(4, 'My second budget', 'End of year party', 'Buy drinks', 'Laboratory consumables', 'OIC', 'BHCPF - SSHIA Gateway', 'Ante Natal to Post Natal', 'Curative care', 25000.00, 'KACHIA', 'Medium', 'Test description', '08-Jun-2021', 'mda@gmail.com', '2021-06-15 09:34:02', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', 0),
(5, 'Birthdays', 'birthday ramat', 'Hall', 'Printing', 'OIC', 'PHC MOU', 'Ante Natal to Post Natal', 'Essential drugs', 400000.00, 'JEMAOAO', 'High', 'Reciepts', '01-Jul-2021', 'freeme@gmail.com', '2021-07-07 15:49:43', 'kad pay', 'Ministry of Works', 'Administrative', 'Kaduna', 0),
(6, 'Birthdays', 'birthday ramat', 'Music&DJ', 'Lateral referral services (payment to another primary provider for services covered at primary level but facility cannot provide).', 'OIC', 'Global Fund', 'Others', 'Essential drugs', 3000000.00, 'IGABI', 'High', 'reciept', '28-Jul-2021', 'freeme@gmail.com', '2021-07-07 15:50:32', 'kad pay', 'Ministry of Works', 'Administrative', 'Kaduna', 0);

-- --------------------------------------------------------

--
-- Table structure for table `fm_budgetactivitytable`
--

CREATE TABLE `fm_budgetactivitytable` (
  `ID` int(11) NOT NULL,
  `budgetname` text NOT NULL,
  `activityname` text NOT NULL,
  `createdby` varchar(500) NOT NULL,
  `datecreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `organization` text NOT NULL,
  `ministry` text NOT NULL,
  `sector` text NOT NULL,
  `state` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fm_budgetactivitytable`
--

INSERT INTO `fm_budgetactivitytable` (`ID`, `budgetname`, `activityname`, `createdby`, `datecreated`, `organization`, `ministry`, `sector`, `state`) VALUES
(1, 'My second budget', 'Test activity 1', 'mda@gmail.com', '2021-06-12 00:00:55', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna'),
(2, 'My second budget', 'another activity', 'mda@gmail.com', '2021-06-12 00:13:35', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna'),
(3, 'My second budget', 'End of year party', 'mda@gmail.com', '2021-06-14 22:03:43', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna'),
(4, 'My second budget', 'Bake cakes', 'mda@gmail.com', '2021-06-15 00:08:25', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna'),
(5, 'My second budget', 'GET A PRO DJ', 'mda@gmail.com', '2021-06-15 09:34:58', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna'),
(6, 'Birthdays', 'birthday ramat', 'freeme@gmail.com', '2021-07-07 15:46:58', 'kad pay', 'Ministry of Works', 'Administrative', 'Kaduna'),
(7, 'Birthdays', 'Birthday Daniel', 'freeme@gmail.com', '2021-07-07 15:47:15', 'kad pay', 'Ministry of Works', 'Administrative', 'Kaduna');

-- --------------------------------------------------------

--
-- Table structure for table `fm_cashbook`
--

CREATE TABLE `fm_cashbook` (
  `ID` int(2) NOT NULL,
  `ddate` varchar(9) DEFAULT NULL,
  `VoucherNo` varchar(8) DEFAULT NULL,
  `Description` varchar(30) DEFAULT NULL,
  `segment` varchar(10) DEFAULT NULL,
  `segmentcode` varchar(24) DEFAULT NULL,
  `amount` double(15,2) DEFAULT NULL,
  `createdby` varchar(13) DEFAULT NULL,
  `entrytype` varchar(7) DEFAULT NULL,
  `location` varchar(10) DEFAULT NULL,
  `datecreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `organization` varchar(21) DEFAULT NULL,
  `ministry` varchar(19) DEFAULT NULL,
  `sector` varchar(14) DEFAULT NULL,
  `state` varchar(6) DEFAULT NULL,
  `status` int(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fm_cashbook`
--

INSERT INTO `fm_cashbook` (`ID`, `ddate`, `VoucherNo`, `Description`, `segment`, `segmentcode`, `amount`, `createdby`, `entrytype`, `location`, `datecreated`, `organization`, `ministry`, `sector`, `state`, `status`) VALUES
(2, '26-May-21', 'NB0098as', 'Development of FM application', 'program', 'Essential drugs', 200000000.00, 'mda@gmail.com', 'Payment', 'SABON GARI', '2021-05-14 14:59:20', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', 1),
(3, '18-Feb-20', 'RC001', 'DRUGS &TRATMENT', 'program', 'Essential drugs', 400890.00, 'mda@gmail.com', 'Receipt', 'CHIKUN', '2021-05-14 14:59:20', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', 0),
(4, '18-Feb-20', 'RC002', 'DRUGS &TRATMENT', 'program', 'Essential drugs', 120090.00, 'mda@gmail.com', 'Receipt', 'CHIKUN', '2021-05-17 10:07:11', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', 1),
(5, '19-Feb-20', 'RC003', 'DRUGS &TRATMENT', 'program', 'Essential drugs', 180000.00, 'mda@gmail.com', 'Receipt', 'CHIKUN', '2021-05-14 14:59:20', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', 1),
(6, '19-Feb-20', 'RC004', 'DRUGS &TRATMENT', 'program', 'Essential drugs', 100890.00, 'mda@gmail.com', 'Receipt', 'SABON GARI', '2021-05-14 14:59:20', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', 1),
(7, '19-Feb-20', 'PV001', 'PRINTING OF ANC CARD', 'functional', 'Ante Natal to Post Natal', 100000.00, 'mda@gmail.com', 'Payment', 'SABON GARI', '2021-05-14 14:59:20', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', 1),
(8, '19-Feb-20', 'PV002', 'PURCHASE OF FUEL FOR GENERATOR', 'functional', 'All', 15000.00, 'mda@gmail.com', 'Payment', 'KAURU', '2021-05-14 14:59:20', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', 1),
(9, '20-Feb-20', 'RC005', 'DRUGS &TRATMENT', 'fund', 'KADCHMA', 180890.00, 'mda@gmail.com', 'Receipt', 'CHIKUN', '2021-05-14 14:59:20', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', 1),
(10, '20-Feb-20', 'RC006', 'DRUGS', 'fund', 'KADCHMA', 53000.00, 'mda@gmail.com', 'Receipt', 'CHIKUN', '2021-05-14 14:59:20', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', 0),
(11, '24-Feb-20', 'RC007', 'PURCHASE OF FUEL FOR GENERATOR', 'functional', 'Ante Natal to Post Natal', 15040.00, 'mda@gmail.com', 'Receipt', 'KAURU', '2021-05-14 14:59:20', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', 0),
(12, '24-Feb-20', 'RC008', 'DRUGS', 'program', 'Malaria', 50200.00, 'mda@gmail.com', 'Receipt', 'KAURU', '2021-05-14 14:59:20', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', 1),
(13, '24-Feb-20', 'PV003', 'PURCHASE OF STATIONARIES', 'functional', 'Ante Natal to Post Natal', 88030.00, 'mda@gmail.com', 'Payment', 'KAURU', '2021-05-14 14:59:20', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', 0),
(14, '25-Feb-20', 'RC009', 'DRUGS &TRATMENT', 'fund', 'UNICEF', 40020.00, 'mda@gmail.com', 'Receipt', 'KAURU', '2021-05-17 10:10:47', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', 1),
(16, '25-Feb-20', 'RC011', 'DRUGS', 'fund', 'WHO', 50000.00, 'mda@gmail.com', 'Receipt', 'SABON GARI', '2021-05-14 14:59:20', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', 0),
(17, '25-Feb-20', 'RC012', 'DRUGS', 'fund', 'WHO', 100200.00, 'mda@gmail.com', 'Receipt', 'KAURU', '2021-05-14 14:59:20', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', 1),
(18, '25-Feb-20', 'RC013', 'DRUGS', 'program', 'Tuberculosis', 150290.00, 'mda@gmail.com', 'Receipt', 'KAURU', '2021-05-14 14:59:20', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', 1),
(19, '25-Feb-20', 'RC014', 'DRUGS &TRATMENT', 'program', 'Tuberculosis', 410800.00, 'mda@gmail.com', 'Receipt', 'CHIKUN', '2021-05-14 14:59:20', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', 1),
(20, '25-Feb-20', 'RC015', 'DRUGS &TRATMENT', 'program', 'Tuberculosis', 10050.00, 'mda@gmail.com', 'Receipt', 'SABON GARI', '2021-05-14 14:59:20', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', 1),
(21, '25-Feb-20', 'RC016', 'DRUGS &TRATMENT', 'program', 'Malaria', 30000.00, 'mda@gmail.com', 'Receipt', 'CHIKUN', '2021-05-14 14:59:20', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', 0);

-- --------------------------------------------------------

--
-- Table structure for table `fm_cashbookold`
--

CREATE TABLE `fm_cashbookold` (
  `ID` int(11) NOT NULL,
  `Date` varchar(255) DEFAULT NULL,
  `VoucherNo` text,
  `Description` text,
  `EconomicCode` text,
  `AdminCode` text,
  `FunctionCode` text,
  `ProgrammeCode` text,
  `FundCode` text,
  `GeoCode` text,
  `RECEIPTS` double(15,2) NOT NULL DEFAULT '0.00',
  `PAYMENTS` double(15,2) NOT NULL DEFAULT '0.00',
  `month` varchar(15) NOT NULL,
  `year` year(4) NOT NULL,
  `datecreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `createdby` varchar(500) NOT NULL,
  `entrytype` varchar(255) NOT NULL,
  `location` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fm_cashbookold`
--

INSERT INTO `fm_cashbookold` (`ID`, `Date`, `VoucherNo`, `Description`, `EconomicCode`, `AdminCode`, `FunctionCode`, `ProgrammeCode`, `FundCode`, `GeoCode`, `RECEIPTS`, `PAYMENTS`, `month`, `year`, `datecreated`, `createdby`, `entrytype`, `location`) VALUES
(2, '18-Feb-20', 'RC001', 'DRUGS &TRATMENT', '', '', '', '', 'Internally Generated Revenue', '', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(3, '18-Feb-20', 'RC002', 'DRUGS &TRATMENT', '', '', '', '', 'Internally Generated Revenue', '', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(4, '19-Feb-20', 'RC003', 'DRUGS &TRATMENT', '', '', '', '', 'Internally Generated Revenue', '', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(5, '19-Feb-20', 'RC004', 'DRUGS &TRATMENT', '', '', '', '', 'Internally Generated Revenue', '', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(6, '19-Feb-20', 'PV001', 'PRINTING OF ANC CARD', 'Printing', 'OIC', 'All', 'All', 'Internally Generated Revenue', 'Chikun', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(7, '19-Feb-20', 'PV002', 'PURCHASE OF FUEL FOR GENERATOR', 'Fuel for Generators', 'OIC', 'All', 'All', 'Internally Generated Revenue', 'Chikun', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(8, '20-Feb-20', 'RC005', 'DRUGS &TRATMENT', '', '', '', '', 'Internally Generated Revenue', '', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(9, '20-Feb-20', 'RC006', '  DRUGS', '', '', '', '', 'Internally Generated Revenue', '', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(10, '24-Feb-20', 'RC007', 'PURCHASE OF FUEL FOR GENERATOR', '', '', '', '', 'Internally Generated Revenue', '', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(11, '24-Feb-20', 'RC008', ' DRUGS', '', '', '', '', 'Internally Generated Revenue', '', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(12, '24-Feb-20', 'PV003', 'PURCHASE OF STATIONARIES', 'Stationaries', 'OIC', 'All', 'All', 'Internally Generated Revenue', '', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(13, '25-Feb-20', 'RC009', 'DRUGS &TRATMENT', '', '', '', '', 'Internally Generated Revenue', '', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(14, '25-Feb-20', 'RC010', ' DRUGS', '', '', '', '', 'Internally Generated Revenue', '', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(15, '25-Feb-20', 'RC011', ' DRUGS', '', '', '', '', 'Internally Generated Revenue', '', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(16, '25-Feb-20', 'RC012', ' DRUGS', '', '', '', '', 'Internally Generated Revenue', '', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(17, '25-Feb-20', 'RC013', ' DRUGS', '', '', '', '', 'Internally Generated Revenue', '', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(18, '25-Feb-20', 'RC014', 'DRUGS &TRATMENT', '', '', '', '', 'Internally Generated Revenue', '', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(19, '25-Feb-20', 'RC015', 'DRUGS &TRATMENT', '', '', '', '', 'Internally Generated Revenue', '', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(20, '25-Feb-20', 'RC016', 'DRUGS &TRATMENT', '', '', '', '', 'Internally Generated Revenue', '', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(21, '10-Mar-20', 'PV004', 'PAYMENT FOR LIGHT BILL', 'Electricity Bills', 'OIC', 'All', 'All', 'Internally Generated Revenue', 'Chikun', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(22, '17-Mar-20', 'PV005', 'PURCHASE OF REAGENT', 'Laboratory consumables', 'OIC', 'All', 'All', 'Internally Generated Revenue', 'Chikun', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(23, '19-Mar-20', 'PV006', 'PURCHASE OF WIDAL TEST KITS', 'Laboratory consumables', 'OIC', 'All', 'All', 'Internally Generated Revenue', 'Chikun', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(24, '25-Mar-20', 'RC017', 'PURCHASE OF DRUGS', '', '', '', '', 'Internally Generated Revenue', '', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(25, '26-Mar-20', 'RC018', 'PURCHASE OF DRUGS', '', '', '', '', 'Internally Generated Revenue', '', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(26, '26-Mar-20', 'RC019', 'PURCHASE OF DRUGS', '', '', '', '', 'Internally Generated Revenue', '', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(27, '27-Mar-20', 'RC021', 'PURCHASE OF DRUGS', '', '', '', '', 'Internally Generated Revenue', '', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(28, '27-Mar-20', 'RC021', 'PURCHASE OF DRUGS', '', '', '', '', 'Internally Generated Revenue', '', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(29, '27-Mar-20', 'RC022', 'PURCHASE OF DRUGS', '', '', '', '', 'Internally Generated Revenue', '', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(30, '28-Mar-20', 'RC023', 'PURCHASE OF DRUGS', '', '', '', '', 'Internally Generated Revenue', '', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(31, '8-Apr-20', 'PV007', 'PURCHASE OF CLEANING ITEMS', 'Cleaning Items', 'OIC', 'All', 'All', 'Internally Generated Revenue', 'Chikun', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(32, '8-Apr-20', 'RC024', 'PURCHASE OF DRUGS', '', '', '', '', 'Internally Generated Revenue', '', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(33, '8-Apr-20', 'RC025', 'PURCHASE OF DRUGS', '', '', '', '', 'Internally Generated Revenue', '', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(34, '8-Apr-20', 'RC026', 'PURCHASE OF DRUGS', '', '', '', '', 'Internally Generated Revenue', '', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(35, '8-Apr-20', 'RC027', 'PURCHASE OF DRUGS', '', '', '', '', 'Internally Generated Revenue', '', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(36, '8-Apr-20', 'RC028', 'PURCHASE OF DRUGS', '', '', '', '', 'Internally Generated Revenue', '', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(37, '13-Apr-20', 'RC029', 'PURCHASE OF DRUGS', '', '', '', '', 'Internally Generated Revenue', '', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(38, '13-Apr-20', 'RC030', 'PURCHASE OF DRUGS', '', '', '', '', 'Internally Generated Revenue', '', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(39, '13-Apr-20', 'RC031', 'PURCHASE OF DRUGS', '', '', '', '', 'Internally Generated Revenue', '', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(40, '13-Apr-20', 'RC032', 'PURCHASE OF DRUGS', '', '', '', '', 'Internally Generated Revenue', '', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(41, '15-Apr-20', 'RC033', 'PURCHASE OF DRUGS', '', '', '', '', 'Internally Generated Revenue', '', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(42, '15-Apr-20', 'RC034', 'PURCHASE OF DRUGS', '', '', '', '', 'Internally Generated Revenue', '', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(43, '15-Apr-20', 'RC035', 'PURCHASE OF DRUGS', '', '', '', '', 'Internally Generated Revenue', '', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(44, '15-Apr-20', 'RC036', 'PURCHASE OF DRUGS', '', '', '', '', 'Internally Generated Revenue', '', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(45, '20-Apr-20', 'PV008', 'PURCHASE OF WATER DRUMS', 'Cleaning Items', 'OIC', 'All', 'All', 'Internally Generated Revenue', 'Chikun', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(46, '20-Apr-20', 'PV009', 'REPAIR OF BOHEHOLE', 'Simple hospital Equipment', 'OIC', 'All', 'All', 'Local Philanthropist', '', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(47, '20-Apr-20', 'PV010', 'PURCHASE OF WIDAL TEST KITS', 'Laboratory consumables', 'OIC', 'All', 'All', 'Internally Generated Revenue', 'Chikun', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(48, '20-Apr-20', 'RC037', 'PURCHASE OF DRUGS', '', '', '', '', 'Internally Generated Revenue', '', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(49, '23-Apr-20', 'RC038', 'PURCHASE OF DRUGS', '', '', '', '', 'Internally Generated Revenue', '', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(50, '23-Apr-20', 'RC039', 'PURCHASE OF DRUGS', '', '', '', '', 'Internally Generated Revenue', '', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(51, '29-Apr-20', 'RC040', 'PURCHASE OF DRUGS', '', '', '', '', 'Internally Generated Revenue', '', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(52, '29-Apr-20', 'RC041', 'PURCHASE OF DRUGS', '', '', '', '', 'Internally Generated Revenue', '', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(53, '29-Apr-20', 'PV011', 'PURCHASE OF HAND SANITIZER', 'Cleaning Items', 'OIC', 'All', 'All', 'Internally Generated Revenue', '', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(54, '4-May-20', 'RC042', 'PURCHASE OF DRUGS', '', '', '', '', 'Internally Generated Revenue', '', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(55, '4-May-20', 'RC043', 'PURCHASE OF DRUGS', '', '', '', '', 'Internally Generated Revenue', '', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(56, '4-May-20', 'RC044', 'PURCHASE OF DRUGS', '', '', '', '', 'Internally Generated Revenue', '', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(57, '5-May-20', 'RC045', 'PURCHASE OF DRUGS', '', '', '', '', 'Internally Generated Revenue', '', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(58, '6-May-20', 'RC046', 'PURCHASE OF DRUGS', '', '', '', '', 'Internally Generated Revenue', '', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(59, '6-May-20', 'RC047', 'PURCHASE OF DRUGS', '', '', '', '', 'Internally Generated Revenue', '', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(60, '10-May-20', 'PV012', 'PAYMENT FOR LIGHT BILL', 'Electricity Bills', 'OIC', 'All', 'All', 'Internally Generated Revenue', 'Chikun', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(61, '14-May-20', 'RC048', 'PURCHASE OF DRUGS', '', '', '', '', 'Internally Generated Revenue', '', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(62, '14-May-20', 'RC049', 'PURCHASE OF DRUGS', '', '', '', '', 'Internally Generated Revenue', '', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(63, '14-May-20', 'RC050', 'PURCHASE OF DRUGS', '', '', '', '', 'Internally Generated Revenue', '', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(64, '14-May-20', 'RC051', 'PURCHASE OF DRUGS', '', '', '', '', 'Internally Generated Revenue', '', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(65, '14-May-20', 'RC052', 'PURCHASE OF DRUGS', '', '', '', '', 'Internally Generated Revenue', '', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(66, '15-May-20', 'PV013', 'PRINTING OF ANC CARD', 'Printing', 'OIC', 'Under 5', 'Immunization', 'Local Philanthropist', 'Chikun', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(67, '18-May-20', 'RC053', 'PURCHASE OF DRUGS', '', '', '', '', 'Internally Generated Revenue', '', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(68, '2-Jun-20', 'RC054', 'PURCHASE OF DRUGS', '', '', '', '', 'Internally Generated Revenue', '', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(69, '2-Jun-20', 'RC055', 'PURCHASE OF DRUGS', '', '', '', '', 'Internally Generated Revenue', '', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(70, '2-Jun-20', 'RC056', 'PURCHASE OF DRUGS', '', '', '', '', 'Internally Generated Revenue', '', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(71, '2-Jun-20', 'RC057', 'PURCHASE OF DRUGS', '', '', '', '', 'Internally Generated Revenue', '', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(72, '3-Jun-20', 'RC058', 'PURCHASE OF DRUGS', '', '', '', '', 'Internally Generated Revenue', '', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(73, '11-Jun-20', 'RC059', 'PURCHASE OF DRUGS', '', '', '', '', 'Internally Generated Revenue', '', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(74, '11-Jun-20', 'RC060', 'PURCHASE OF DRUGS', '', '', '', '', 'Internally Generated Revenue', '', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(75, '12-Jun-20', 'PV014', 'PAYMENT FOR LIGHT BILL', 'Electricity Bills', 'OIC', 'All', 'All', 'Internally Generated Revenue', 'Chikun', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(76, '15-Jun-20', 'RC061', 'PAYMENT FOR SCAR URIN', '', '', '', '', 'Internally Generated Revenue', '', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(77, '17-Jun-20', 'RC062', 'PURCHASE OF DRUGS', '', '', '', '', 'Internally Generated Revenue', '', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(78, '17-Jun-20', 'RC063', 'PURCHASE OF DRUGS', '', '', '', '', 'Internally Generated Revenue', '', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(79, '20-Jun-20', 'PV015', 'PRINTING OF ANC CARD', 'Printing', 'OIC', 'Ante Natal to Post Natal', 'Maternal newborn & child care', 'Local Philanthropist', 'Chikun', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(80, '20-Jun-20', 'PV016', 'PURCHASE OF WIDAL TEST KITS', 'Small Medical Tools', 'OIC', 'All', 'All', 'Internally Generated Revenue', 'Chikun', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(81, '30-Jun-20', 'RC064', 'PURCHASE OF DRUGS', '', '', '', '', 'Internally Generated Revenue', '', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(82, '5-Jul-20', 'PV017', 'PURCHASE OF CLEANING ITEMS', 'Cleaning Items', 'OIC', 'All', 'All', 'Internally Generated Revenue', 'Chikun', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(83, '5-Jul-20', 'PV018', 'PURCHASE OF CORBON PAPERS', 'Stationaries', 'OIC', 'All', 'All', 'Internally Generated Revenue', 'Chikun', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(84, '10-Jul-20', 'PV019', 'REPAIR OF B/P APARATUS', 'Small Medical Tools', 'OIC', 'All', 'All', 'Local Philanthropist', 'Chikun', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(85, '15-Jul-20', 'PV020', 'PAYMENT OF LIGHT BILL', 'Electricity Bills', 'OIC', 'All', 'All', 'Internally Generated Revenue', 'Chikun', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(86, '20-Jul-20', 'RC0084979', 'PURCHASE OF ANC CARD', '', '', '', '', 'Internally Generated Revenue', '', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(87, '21-Jul-20', 'RC0084980', 'PURCHASE OF DRUGS', '', '', '', '', 'Internally Generated Revenue', '', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(88, '22-Jul-20', 'RC0084981', 'PURCHASE OF DRUGS', '', '', '', '', 'Internally Generated Revenue', '', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(89, '23-Jul-20', 'RC0084982', 'PURCHASE OF DRUGS', '', '', '', '', 'Internally Generated Revenue', '', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(90, '23-Jul-20', 'RC0084983', 'PURCHASE OF DRUGS', '', '', '', '', 'Internally Generated Revenue', '', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(91, '23-Jul-20', 'RC0084984', 'PURCHASE OF DRUGS', '', '', '', '', 'Internally Generated Revenue', '', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(92, '24-Jul-20', 'RC0084985', 'PURCHASE OF DRUGS', '', '', '', '', 'Internally Generated Revenue', '', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(93, '24-Jul-20', 'RC0084986', 'PURCHASE OF DRUGS', '', '', '', '', 'Internally Generated Revenue', '', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(94, '27-Jul-20', 'RC0084987', 'PURCHASE OF DRUGS', '', '', '', '', 'Internally Generated Revenue', '', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(95, '3-Aug-20', 'RC0084988', 'PURCHASE OF DRUGS', '', '', '', '', 'Internally Generated Revenue', '', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(96, '3-Aug-20', 'RC0084989', 'PURCHASE OF DRUGS', '', '', '', '', 'Internally Generated Revenue', '', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(97, '4-Aug-20', 'RC0084990', 'PURCHASE OF DRUGS', '', '', '', '', 'Internally Generated Revenue', '', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(98, '4-Aug-20', 'RC0084991', 'PURCHASE OF DRUGS', '', '', '', '', 'Internally Generated Revenue', '', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(99, '4-Aug-20', 'RC0084992', 'PURCHASE OF DRUGS', '', '', '', '', 'Internally Generated Revenue', '', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(100, '5-Aug-20', 'RC0084993', 'PURCHASE OF DRUGS', '', '', '', '', 'Internally Generated Revenue', '', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(101, '5-Aug-20', 'RC0084994', 'PURCHASE OF DRUGS', '', '', '', '', 'Internally Generated Revenue', '', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(102, '7-Aug-20', 'RC0084995', 'PURCHASE OF DRUGS', '', '', '', '', 'Internally Generated Revenue', '', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(103, '7-Aug-20', 'RC0084996', 'PURCHASE OF DRUGS', '', '', '', '', 'Internally Generated Revenue', '', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(104, '11-Aug-20', 'RC0084997', 'PURCHASE OF DRUGS', '', '', '', '', 'Internally Generated Revenue', '', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(105, '11-Aug-20', 'PV021', 'PAYMENT OF LIGHT BILL', 'Electricity Bills', 'OIC', 'All', 'All', 'Internally Generated Revenue', 'Chikun', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(106, '12-Aug-20', 'RC0084998', 'PURCHASE OF DRUGS', '', '', '', '', 'Internally Generated Revenue', '', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(107, '13-Aug-20', 'RC0084999', 'PURCHASE OF DRUGS', '', '', '', '', 'Internally Generated Revenue', '', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(108, '14-Aug-20', 'RC0085000', 'PURCHASE OF DRUGS', '', '', '', '', 'Internally Generated Revenue', '', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(109, '20-Aug-20', 'PV022', 'PRINTING OF  OPD CARD', 'Printing', 'OIC', 'All', 'All', 'Internally Generated Revenue', 'Chikun', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(110, '15-Sep-20', 'PV023', 'PAYMENT OF LIGHT BILL', 'Electricity Bills', 'OIC', 'All', 'All', 'KDSG- SPHCDA', 'Chikun', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(111, '30-Sep-20', 'PV024', 'PURCHASE OF STATIONARIES', 'Stationaries', 'OIC', 'All', 'All', 'KDSG- SPHCDA', 'Chikun', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(112, '20-Sep-20', 'PV025', 'PAYMENT OF VOLUNTIERS 2 PERSONS', 'Lateral referral services (payment to another primary provider for services covered at primary level but facility cannot provide).', 'OIC', 'All', 'All', 'Internally Generated Revenue', 'Chikun', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(113, '5-Oct-20', 'PV026', 'PURCHASE OF DRUGS', 'Drug purchase and consumables.', 'OIC', 'All', 'All', 'KADCHMA', 'Chikun', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(114, '6-Oct-20', 'PV027', 'PURCHASE OF DRUGS', 'Drug purchase and consumables.', 'OIC', 'All', 'All', 'KADCHMA', 'Chikun', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(115, '12-Oct-20', 'PV028', 'PURCHASE OF RAKE', 'Cleaning Items', 'OIC', 'All', 'All', 'BHCPF - SPHCDA Gateway', 'Chikun', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(116, '12-Oct-20', 'PV029', 'TRANSPORTATION', 'Transportation', 'OIC', 'All', 'All', 'BHCPF - SPHCDA Gateway', 'Chikun', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(117, '14-Oct-20', 'PV030', 'PURCHASE OF MOPPING STICK', 'Cleaning Items', 'OIC', 'All', 'All', 'BHCPF - SPHCDA Gateway', 'Chikun', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(118, '26-Oct-20', 'PV031', 'PAYMENT OF VOLUNTIERS 2 PERSONS', 'Maintenance of hospital equipment.', 'OIC', 'All', 'All', 'Internally Generated Revenue', 'Chikun', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(119, '10-Nov-20', 'PV032', 'TRANSPORT OF SEPTIC BOXES TO S/TASHA', 'Transportation', 'OIC', 'All', 'All', 'Internally Generated Revenue', 'Chikun', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(120, '11-Nov-20', 'PV033', 'TRANSPORTATION TO BANK', 'Transportation', 'OIC', 'All', 'All', 'Internally Generated Revenue', 'Chikun', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(121, '11-Nov-20', 'PV034', 'PURCHASE OF GRAIN/FOOD DOMOSTRATION', 'Meetings & Trainings', 'OIC', 'All', 'Maternal newborn & child care', 'Internally Generated Revenue', 'Chikun', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(122, '11-Nov-20', 'PV035', 'DRUG PURCHASE', 'Drug purchase and consumables.', 'OIC', 'All', 'All', 'Internally Generated Revenue', 'Chikun', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(123, '12-Nov-20', 'PV036', 'PHOTOCOPY', 'Stationaries', 'OIC', 'All', 'All', 'Internally Generated Revenue', 'Chikun', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(124, '12-Nov-20', 'PV037', 'PURCHASE OF FUEL FOR GENERATOR', 'Fuel for Generators', 'OIC', 'All', 'All', 'Internally Generated Revenue', 'Chikun', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(125, '14-Nov-20', 'PV038', 'MEETING WITH WDC', 'Meetings & Trainings', 'OIC', 'All', 'All', 'Internally Generated Revenue', 'Chikun', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(126, '16-Nov-20', 'PV039', 'PURCHASE OF DRUGS', 'Drug purchase and consumables.', 'OIC', 'All', 'All', 'Internally Generated Revenue', 'Chikun', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(127, '18-Nov-20', 'PV040', 'PHTOCOPY OF PRISCRIPTION PAPER', 'Stationaries', 'OIC', 'All', 'All', 'Internally Generated Revenue', 'Chikun', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(128, '1-Dec-20', 'PV041', 'MEETING WITH AFINET', 'Meetings & Trainings', 'OIC', 'All', 'All', 'Internally Generated Revenue', 'Chikun', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(129, '2-Dec-20', 'PV042', 'TRANSPORTATION OF SEPTIC BOXES TO SABO', 'Transportation', 'OIC', 'All', 'All', 'Internally Generated Revenue', 'Chikun', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(130, '2-Dec-20', 'PV043', 'TRANSPORTATION TO BANK', 'Transportation', 'OIC', 'All', 'All', 'Internally Generated Revenue', 'Chikun', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(131, '4-Dec-20', 'PV044', 'PHOTOCOPY OF PRESCRIPTION PAPER', 'Printing', 'OIC', 'All', 'All', 'Internally Generated Revenue', 'Chikun', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(132, '7-Dec-20', 'PV045', 'PURCHASE OF DRUGS', 'Drug purchase and consumables.', 'OIC', 'All', 'All', 'Internally Generated Revenue', 'Chikun', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(133, '15-Dec-20', 'PV046', 'PHOTOCOPY OF KACHMA ENROLEE FORM', 'Printing', 'OIC', 'All', 'All', 'Internally Generated Revenue', 'Chikun', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(134, '16-Dec-20', 'PV047', 'PURCHASE OF BROOMS', 'Cleaning Items', 'OIC', 'All', 'All', 'Internally Generated Revenue', 'Chikun', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0'),
(135, '21-Dec-20', 'RC0085721', 'CAPITATION FROM BHCPF', '', '', '', '', 'BHCPF - SPHCDA Gateway', '', 0.00, 0.00, '', 0000, '2021-05-04 14:18:38', '', '', '0');

-- --------------------------------------------------------

--
-- Table structure for table `fm_cashbookTemp`
--

CREATE TABLE `fm_cashbookTemp` (
  `ID` int(11) NOT NULL,
  `ddate` varchar(255) DEFAULT NULL,
  `VoucherNo` text,
  `Description` text,
  `segment` text,
  `segmentcode` text,
  `amount` double(15,2) NOT NULL DEFAULT '0.00',
  `createdby` varchar(500) NOT NULL,
  `entrytype` varchar(255) NOT NULL,
  `location` varchar(500) NOT NULL,
  `datecreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `organization` text NOT NULL,
  `ministry` text NOT NULL,
  `sector` text NOT NULL,
  `state` text NOT NULL,
  `status` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fm_cashbookTemp`
--

INSERT INTO `fm_cashbookTemp` (`ID`, `ddate`, `VoucherNo`, `Description`, `segment`, `segmentcode`, `amount`, `createdby`, `entrytype`, `location`, `datecreated`, `organization`, `ministry`, `sector`, `state`, `status`) VALUES
(1, '11-May-2021', 'VN00923', 'Test Descr', 'fund', 'PHC MOU', 290023.00, 'mda@gmail.com', 'Receipt', 'KAURU', '2021-05-11 15:08:00', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', 0),
(2, '26-May-2021', 'NB0098as', 'Development of FM application', 'program', 'Essential drugs', 200000000.00, 'mda@gmail.com', 'Payment', 'SABON GARI', '2021-05-13 22:54:06', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', 1);

-- --------------------------------------------------------

--
-- Table structure for table `fm_cashbook_accounts`
--

CREATE TABLE `fm_cashbook_accounts` (
  `ID` int(11) NOT NULL,
  `codes` text NOT NULL,
  `accountname` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='accounts_administrative';

-- --------------------------------------------------------

--
-- Table structure for table `fm_cashbook_accounts_budget`
--

CREATE TABLE `fm_cashbook_accounts_budget` (
  `ID` int(11) NOT NULL,
  `codes` text NOT NULL,
  `budget` float(15,2) NOT NULL,
  `accountname` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='accounts_administrative';

-- --------------------------------------------------------

--
-- Table structure for table `fm_funders`
--

CREATE TABLE `fm_funders` (
  `ID` int(11) NOT NULL,
  `funder` text NOT NULL,
  `createdby` varchar(500) NOT NULL,
  `datecreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `organization` text NOT NULL,
  `ministry` text NOT NULL,
  `sector` text NOT NULL,
  `state` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fm_funders`
--

INSERT INTO `fm_funders` (`ID`, `funder`, `createdby`, `datecreated`, `organization`, `ministry`, `sector`, `state`) VALUES
(1, 'World Bank', 'mda@gmail.com', '2021-06-10 11:46:16', 'Budget Organization', 'Ministry of Budget', 'Administrative', 'Kaduna'),
(2, 'World Health Organization', 'mda@gmail.com', '2021-06-10 11:46:28', 'Budget Organization', 'Ministry of Budget', 'Administrative', 'Kaduna'),
(3, 'European Union', 'mda@gmail.com', '2021-06-10 11:46:37', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna'),
(4, 'World Bank', 'mda@gmail.com', '2021-06-10 11:47:10', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna'),
(5, 'World Health Organization', 'mda@gmail.com', '2021-06-10 11:47:23', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna'),
(6, 'Test Funder', 'mda@gmail.com', '2021-06-11 14:52:15', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna'),
(7, 'Dangote Sugar Group', 'mda@gmail.com', '2021-06-15 09:36:04', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna'),
(8, 'Emma Ndukwe', 'bighead@gmail.com', '2021-06-15 11:23:44', 'zena', 'Ministry of Works', 'Administrative', 'Adamawa'),
(9, '', '', '2021-06-15 11:26:11', '', '', '', ''),
(10, 'CHAPMAN', 'freeme@gmail.com', '2021-07-07 15:34:49', 'kad pay', 'Ministry of Works', 'Administrative', 'Kaduna'),
(11, 'Crowdforce', 'freeme@gmail.com', '2021-07-07 15:43:32', 'kad pay', 'Ministry of Works', 'Administrative', 'Kaduna'),
(12, 'Zenaconcept', 'freeme@gmail.com', '2021-07-07 15:43:47', 'kad pay', 'Ministry of Works', 'Administrative', 'Kaduna');

-- --------------------------------------------------------

--
-- Table structure for table `fm_mdausers`
--

CREATE TABLE `fm_mdausers` (
  `id` int(11) NOT NULL,
  `username` varchar(500) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fullname` varchar(500) NOT NULL,
  `useremail` varchar(500) NOT NULL,
  `location` text NOT NULL,
  `status` int(1) DEFAULT '1',
  `roles` text NOT NULL,
  `permissions` text,
  `createdby` varchar(255) NOT NULL,
  `organization` text NOT NULL,
  `ministry` text NOT NULL,
  `sector` text NOT NULL,
  `states` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Users table for MDAs';

--
-- Dumping data for table `fm_mdausers`
--

INSERT INTO `fm_mdausers` (`id`, `username`, `password`, `fullname`, `useremail`, `location`, `status`, `roles`, `permissions`, `createdby`, `organization`, `ministry`, `sector`, `states`, `created_at`) VALUES
(1, 'endy.odoo@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'Ndukwe Onugu', 'trittons2003@yahoo.ca', 'test Location', 1, 'Reports', 'test', '', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', '2021-04-12 15:03:50'),
(16, 'endy.odoo@gmail.com12', '5f4dcc3b5aa765d61d8327deb882cf99', 'Ndukwe Onugu Ndukwe', 'trittons2003@yahoo.can2', 'This is my new Location 2', 1, 'System Administrator', 'jghgjhgjhgj', 'mda@gmail.com', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', '2021-04-13 09:31:42'),
(29, 'endy.odoo@gmail.con', '5f4dcc3b5aa765d61d8327deb882cf99', 'Ndukwe Onugu Ndukwe', 'trittons2003@yahoo.cn', 'hjghjgjg', 0, 'System Administrator', '', 'mda@gmail.com', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', '2021-04-13 09:48:25'),
(31, 'endy.odoo@gmail.cs', '5f4dcc3b5aa765d61d8327deb882cf99', 'Ndukwe Onugu', 'trittons2003@yahoo.cs', 'test Location', 1, 'Reports', 'test', '', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', '2021-04-12 15:03:50'),
(34, 'endy.odoo@gmail.cs2', '5f4dcc3b5aa765d61d8327deb882cf99', 'Ndukwe Onugu', 'trittons2003@yahoo.cs2', 'test Location', 1, 'Reports', 'test', '', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', '2021-04-12 15:03:50'),
(50, 'endy.odoo@gmail.comrr', '696d29e0940a4957748fe3fc9efd22a3', 'Ndukwe Onugu', 'trittons2003@yahoo.carr', 'test Location', 1, 'Reports', '', 'mda@gmail.com', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', '2021-04-26 22:23:47'),
(51, 'endy.odoo@gmail.com12rr', '696d29e0940a4957748fe3fc9efd22a3', 'Ndukwe Onugu Ndukwe', 'trittons2003@yahoo.can2rr', 'This is my new Location 2', 1, 'System Administrator', '', 'mda@gmail.com', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', '2021-04-26 22:23:47'),
(52, 'endy.odoo@gmail.conrr', '696d29e0940a4957748fe3fc9efd22a3', 'Ndukwe Onugu Ndukwe', 'trittons2003@yahoo.cnrr', 'hjghjgjg', 0, 'System Administrator', '', 'mda@gmail.com', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', '2021-04-26 22:23:47'),
(53, 'endy.odoo@gmail.csrr', '696d29e0940a4957748fe3fc9efd22a3', 'Ndukwe Onugu', 'trittons2003@yahoo.csrr', 'test Location', 1, 'Reports', '', 'mda@gmail.com', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', '2021-04-26 22:23:47'),
(54, 'endy.odoo@gmail.cs2rr', '696d29e0940a4957748fe3fc9efd22a3', 'Ndukwe Onugu', 'trittons2003@yahoo.cs2rr', 'test Location', 1, 'Reports', '', 'mda@gmail.com', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', '2021-04-26 22:23:47'),
(55, 'endy.odoo@gmail.comrr1', '696d29e0940a4957748fe3fc9efd22a3', 'Ndukwe Onugu', 'trittons2003@yahoo.carr1', 'test Location', 1, 'Reports', '', 'mda@gmail.com', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', '2021-04-26 22:33:22'),
(56, 'endy.odoo@gmail.com12rr1', '696d29e0940a4957748fe3fc9efd22a3', 'Ndukwe Onugu Ndukwe', 'trittons2003@yahoo.can2rr1', 'This is my new Location 2', 1, 'System Administrator', '', 'mda@gmail.com', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', '2021-04-26 22:33:22'),
(57, 'endy.odoo@gmail.conrr1', '696d29e0940a4957748fe3fc9efd22a3', 'Ndukwe Onugu Ndukwe', 'trittons2003@yahoo.cnrr1', 'hjghjgjg', 1, 'System Administrator', '', 'mda@gmail.com', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', '2021-04-26 22:33:22'),
(58, 'endy.odoo@gmail.csrr1', '696d29e0940a4957748fe3fc9efd22a3', 'Ndukwe Onugu', 'trittons2003@yahoo.csrr1', 'test Location', 1, 'Reports', '', 'mda@gmail.com', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', '2021-04-26 22:33:22'),
(59, 'endy.odoo@gmail.cs2rr1', '696d29e0940a4957748fe3fc9efd22a3', 'Ndukwe Onugu', 'trittons2003@yahoo.cs2rr1', 'test Location', 1, 'Reports', '', 'mda@gmail.com', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', '2021-04-26 22:33:22'),
(75, 'endy.odoo@gmail.comrr122', '5f4dcc3b5aa765d61d8327deb882cf99', 'Ndukwe Onugu', 'trittons2003@yahoo.carr122', 'test Location', 1, 'Reports', '', 'mda@gmail.com', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', '2021-04-27 22:35:27'),
(76, 'endy.odoo@gmail.com12rr122', '5f4dcc3b5aa765d61d8327deb882cf99', 'Ndukwe Onugu Ndukwe', 'trittons2003@yahoo.can2rr122', 'This is my new Location 2', 1, 'System Administrator', '', 'mda@gmail.com', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', '2021-04-27 22:35:27'),
(77, 'endy.odoo@gmail.conrr122', '5f4dcc3b5aa765d61d8327deb882cf99', 'Ndukwe Onugu Ndukwe', 'trittons2003@yahoo.cnrr122', 'hjghjgjg', 1, 'System Administrator', '', 'mda@gmail.com', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', '2021-04-27 22:35:27'),
(78, 'endy.odoo@gmail.csrr122', '5f4dcc3b5aa765d61d8327deb882cf99', 'Ndukwe Onugu', 'trittons2003@yahoo.csrr122', 'test Location', 1, 'Reports', '', 'mda@gmail.com', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', '2021-04-27 22:35:27'),
(79, 'endy.odoo@gmail.cs2rr122', '5f4dcc3b5aa765d61d8327deb882cf99', 'Ndukwe Onugu', 'trittons2003@yahoo.cs2rr122', 'test Location', 1, 'Reports', '', 'mda@gmail.com', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', '2021-04-27 22:35:27'),
(81, 'trittons2003@yahoo.crr', '5f4dcc3b5aa765d61d8327deb882cf99', 'test user', 'trittons2003@yahoo.crr', 'test Location', 1, 'Reports', '', 'mda@gmail.com', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', '2021-05-17 13:40:33'),
(82, 'testuser@yaho.cs2', '5f4dcc3b5aa765d61d8327deb882cf99', 'test2 user', 'testuser@yaho.cs2', 'test Location', 1, 'Reports', '', 'mda@gmail.com', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', '2021-05-17 13:40:33');

-- --------------------------------------------------------

--
-- Table structure for table `fm_organizations`
--

CREATE TABLE `fm_organizations` (
  `ID` int(11) NOT NULL,
  `organization` text NOT NULL,
  `ministry` text NOT NULL,
  `sector` text NOT NULL,
  `fmstate` varchar(15) NOT NULL,
  `status` varchar(255) DEFAULT '1',
  `reg_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='User Admin Panel for registering organizations';

--
-- Dumping data for table `fm_organizations`
--

INSERT INTO `fm_organizations` (`ID`, `organization`, `ministry`, `sector`, `fmstate`, `status`, `reg_time`, `username`) VALUES
(1, 'test', 'Ministry of Works', 'Administrative', 'Adamawa', '1', '2021-03-24 11:39:10', '0'),
(2, 'test org2', 'Ministry of Finance', 'Administrative', 'Bauchi', '1', '2021-03-29 22:43:43', 'endy.odoo@gmail.com2'),
(4, 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', '1', '2021-04-12 12:11:15', 'mda@gmail.com'),
(0, 'zena', 'Ministry of Health', 'Administrative', 'Abia', '1', '2021-06-10 15:28:15', 'ukpaid@gmail.com'),
(0, '', '', '', '', '1', '2021-06-10 15:30:16', ''),
(0, 'pHC', 'Ministry of Health', 'Economic', 'Anambra', '1', '2021-06-10 17:38:58', 'awwalseghosime@gmail.com'),
(0, 'zena', 'Ministry of Works', 'Administrative', 'Adamawa', '1', '2021-06-15 11:17:53', 'bighead@gmail.com'),
(0, 'kad pay', 'Ministry of Works', 'Administrative', 'Kaduna', '1', '2021-07-07 15:30:49', 'freeme@gmail.com'),
(0, 'Primary healthCare', 'Ministry of Health', 'Health', 'Kaduna', '1', '2021-07-07 15:33:43', 'awwal.seghosime@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `fm_projectfunding`
--

CREATE TABLE `fm_projectfunding` (
  `ID` int(2) NOT NULL,
  `budgetname` text NOT NULL,
  `funder` text NOT NULL,
  `start_date` varchar(25) DEFAULT NULL,
  `end_date` varchar(25) NOT NULL,
  `amount` double(15,2) DEFAULT NULL,
  `createdby` varchar(13) DEFAULT NULL,
  `datecreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `organization` varchar(21) DEFAULT NULL,
  `ministry` varchar(19) DEFAULT NULL,
  `sector` varchar(14) DEFAULT NULL,
  `state` varchar(6) DEFAULT NULL,
  `status` int(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fm_projectfunding`
--

INSERT INTO `fm_projectfunding` (`ID`, `budgetname`, `funder`, `start_date`, `end_date`, `amount`, `createdby`, `datecreated`, `organization`, `ministry`, `sector`, `state`, `status`) VALUES
(1, 'My second budget', 'World Bank', '01-Jun-2021', '31-Aug-2021', 200000.00, 'mda@gmail.com', '2021-06-10 12:38:24', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', 0),
(3, 'Awwal Balling', 'World Health Organization', '08-Jun-2021', '22-Jun-2021', 500000.00, 'mda@gmail.com', '2021-06-11 12:54:51', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', 0),
(4, 'My second budget', 'Dangote Sugar Group', '01-Jun-2021', '30-Jun-2021', 50000.00, 'mda@gmail.com', '2021-06-15 09:36:29', 'The Test Organization', 'Ministry of Finance', 'Administrative', 'Kaduna', 0),
(5, 'Fish Party', 'Emma Ndukwe', '30-Jun-2021', '29-Jun-2021', 300000.00, 'bighead@gmail', '2021-06-15 11:24:03', 'zena', 'Ministry of Works', 'Administrative', 'Adamaw', 0),
(6, '', '', '', '', 0.00, '', '2021-06-15 11:26:38', '', '', '', '', 0),
(7, 'Awwal Balling', 'CHAPMAN', '27-Jul-2021', '28-Jul-2021', 300000.00, 'freeme@gmail.', '2021-07-07 15:35:51', 'kad pay', 'Ministry of Works', 'Administrative', 'Kaduna', 0),
(8, 'Birthdays', 'Crowdforce', '06-Jul-2021', '30-Sep-2021', 1000000.00, 'freeme@gmail.', '2021-07-07 15:45:21', 'kad pay', 'Ministry of Works', 'Administrative', 'Kaduna', 0),
(9, 'Birthdays', 'Zenaconcept', '28-Jul-2021', '03-Nov-2021', 5000000.00, 'freeme@gmail.', '2021-07-07 15:46:14', 'kad pay', 'Ministry of Works', 'Administrative', 'Kaduna', 0);

-- --------------------------------------------------------

--
-- Table structure for table `fm_trail`
--

CREATE TABLE `fm_trail` (
  `id` int(11) NOT NULL,
  `fullname` varchar(500) NOT NULL,
  `username` varchar(500) NOT NULL,
  `actions` text NOT NULL,
  `performed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Audit trail';

--
-- Dumping data for table `fm_trail`
--

INSERT INTO `fm_trail` (`id`, `fullname`, `username`, `actions`, `performed_at`) VALUES
(1, 'MDA User One', 'mda@gmail.com', 'User Logged in', '2021-04-19 12:57:03'),
(2, 'MDA User One', 'mda@gmail.com', 'MDA User Updated trittons2003@yahoo.can2', '2021-04-19 13:54:59'),
(3, 'MDA User One', 'mda@gmail.com', 'MDA User Updated trittons2003@yahoo.can2', '2021-04-19 13:56:46'),
(4, 'MDA User One', 'mda@gmail.com', 'MDA User deleted endy.odoo@gmail.com1', '2021-04-20 14:59:02'),
(5, 'MDA User One', 'mda@gmail.com', 'MDA User Updated trittons2003@yahoo.ca', '2021-04-20 22:25:11'),
(6, 'MDA User One', 'mda@gmail.com', 'MDA User deleted endy.odoo@gmail.com2', '2021-04-22 14:35:51'),
(7, 'MDA User One', 'mda@gmail.com', 'MDA User deleted endy.odoo@gmail.co', '2021-04-22 14:36:50'),
(8, 'MDA User One', 'mda@gmail.com', 'MDA User deleted endy.odoo@gmail.cms', '2021-04-22 14:45:50'),
(9, 'MDA User One', 'mda@gmail.com', 'MDA User deleted endy.odoo@gmail.cs1', '2021-04-22 14:46:56'),
(10, 'MDA User One', 'mda@gmail.com', 'MDA User Deactivated endy.odoo@gmail.cs2', '2021-04-22 15:09:46'),
(11, 'MDA User One', 'mda@gmail.com', 'MDA User Reactivated endy.odoo@gmail.cs2', '2021-04-22 15:11:23'),
(12, 'endy.odoo@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'User Logged in', '2021-04-23 11:03:11'),
(13, 'endy.odoo@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'User Logged in', '2021-04-23 11:03:22'),
(14, 'endy.odoo@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'User Logged in', '2021-04-23 11:03:34'),
(15, 'Ndukwe Onugu', 'endy.odoo@gmail.com', 'User Logged in', '2021-04-23 11:20:04'),
(16, 'MDA User One', 'mda@gmail.com', 'User Logged in', '2021-04-26 22:10:43'),
(17, 'MDA User One', 'mda@gmail.com', 'MDA User Created endy.odoo@gmail.comrr122 with fullname Ndukwe Onugu', '2021-04-27 22:35:27'),
(18, 'MDA User One', 'mda@gmail.com', 'MDA User Created endy.odoo@gmail.com12rr122 with fullname Ndukwe Onugu Ndukwe', '2021-04-27 22:35:27'),
(19, 'MDA User One', 'mda@gmail.com', 'MDA User Created endy.odoo@gmail.conrr122 with fullname Ndukwe Onugu Ndukwe', '2021-04-27 22:35:27'),
(20, 'MDA User One', 'mda@gmail.com', 'MDA User Created endy.odoo@gmail.csrr122 with fullname Ndukwe Onugu', '2021-04-27 22:35:27'),
(21, 'MDA User One', 'mda@gmail.com', 'MDA User Created endy.odoo@gmail.cs2rr122 with fullname Ndukwe Onugu', '2021-04-27 22:35:27'),
(22, 'MDA User One', 'mda@gmail.com', 'User Logged in', '2021-05-05 12:11:22'),
(23, 'MDA User One', 'mda@gmail.com', 'MDA User Created  with fullname test account', '2021-05-05 14:35:34'),
(24, 'MDA User One', 'mda@gmail.com', 'Account Created - ', '2021-05-05 14:55:02'),
(25, 'MDA User One', 'mda@gmail.com', 'Account Created - test account', '2021-05-05 14:55:53'),
(26, 'MDA User One', 'mda@gmail.com', 'Account Created - test accounts 2', '2021-05-05 14:59:38'),
(27, 'MDA User One', 'mda@gmail.com', 'Account Created - testing account', '2021-05-05 15:00:46'),
(28, 'MDA User One', 'mda@gmail.com', 'Account Created - test2', '2021-05-05 15:01:56'),
(29, 'MDA User One', 'mda@gmail.com', 'Account Created - test33', '2021-05-05 15:02:30'),
(30, 'MDA User One', 'mda@gmail.com', 'Account Created - test44', '2021-05-05 15:09:35'),
(31, 'MDA User One', 'mda@gmail.com', 'Account Description Created - Donations From Dangote - testing account', '2021-05-06 12:28:52'),
(32, 'MDA User One', 'mda@gmail.com', 'Account Description Created - testing account - Donations From Dangote', '2021-05-06 12:33:29'),
(33, 'MDA User One', 'mda@gmail.com', 'Account Created - test entry 22', '2021-05-08 12:46:02'),
(34, 'MDA User One', 'mda@gmail.com', 'Cashbook entry Created - ', '2021-05-08 23:28:20'),
(35, 'MDA User One', 'mda@gmail.com', 'User Logged in', '2021-05-11 14:04:52'),
(36, 'MDA User One', 'mda@gmail.com', 'Cashbook entry Created - ', '2021-05-11 14:06:25'),
(37, 'MDA User One', 'mda@gmail.com', 'Cashbook entry Created - ', '2021-05-11 14:11:02'),
(38, 'MDA User One', 'mda@gmail.com', 'Cashbook entry Created - ', '2021-05-11 15:04:31'),
(39, 'MDA User One', 'mda@gmail.com', 'Cashbook entry Created - fund - 290023.00 - VN00923 - Test Descr', '2021-05-11 15:06:30'),
(40, 'MDA User One', 'mda@gmail.com', 'Cashbook entry Created - fund - 290023.00 - VN00923 - Test Descr', '2021-05-11 15:08:00'),
(41, 'MDA User One', 'mda@gmail.com', 'Cashbook entry Created - program - 200000000.00 - NB0098as - Development of FM application', '2021-05-13 22:11:12'),
(42, 'MDA User One', 'mda@gmail.com', 'Cashbook Entry Approved with ID 4', '2021-05-17 10:07:11'),
(43, 'MDA User One', 'mda@gmail.com', 'Cashbook Entry Approved with ID 14', '2021-05-17 10:10:47'),
(44, 'MDA User One', 'mda@gmail.com', 'Cashbook entry deleted for ID1', '2021-05-17 10:16:00'),
(45, 'MDA User One', 'mda@gmail.com', 'Cashbook entry deleted for ID15', '2021-05-17 10:16:19'),
(46, 'MDA User One', 'mda@gmail.com', 'MDA User Created trittons2003@yahoo.crr with fullname test user', '2021-05-17 13:40:33'),
(47, 'MDA User One', 'mda@gmail.com', 'MDA User Created testuser@yaho.cs2 with fullname test2 user', '2021-05-17 13:40:33'),
(48, 'MDA User One', 'mda@gmail.com', 'User Logged in', '2021-06-10 10:04:47'),
(49, 'MDA User One', 'mda@gmail.com', 'Budget Created - Test Name - with duration of 12 months', '2021-06-10 10:52:35'),
(50, 'MDA User One', 'mda@gmail.com', 'Budget Created - My second budget - with duration of 4 months', '2021-06-10 11:00:28'),
(51, 'MDA User One', 'mda@gmail.com', 'Budget Approved with ID 2', '2021-06-10 11:22:28'),
(52, 'MDA User One', 'mda@gmail.com', 'Budget Approved with ID 1', '2021-06-10 11:23:00'),
(53, 'MDA User One', 'mda@gmail.com', 'Budget Funder Created - My second budget - World Bank', '2021-06-10 12:38:24'),
(54, 'MDA User One', 'mda@gmail.com', 'Budget Funder Created - My second budget - ', '2021-06-10 13:32:46'),
(55, 'MDA User One', 'mda@gmail.com', 'Budget activity Created - My second budget - this is sample cost element', '2021-06-10 13:47:30'),
(56, 'MDA User One', 'mda@gmail.com', 'User Logged in', '2021-06-10 16:18:10'),
(57, 'MDA User One', 'mda@gmail.com', 'Budget Created - Sample Budget - with duration of 10 months', '2021-06-10 16:24:22'),
(58, 'daniel', 'ukpaid@gmail.com', 'User Logged in', '2021-06-10 16:28:31'),
(59, 'daniel', 'ukpaid@gmail.com', 'Password Reset done', '2021-06-10 16:28:46'),
(60, 'daniel', 'ukpaid@gmail.com', 'Budget Created - Party - with duration of 5 months', '2021-06-10 16:29:42'),
(61, '', '', 'Password Reset done', '2021-06-10 16:31:22'),
(62, '', '', 'Budget Created -  - with duration of  months', '2021-06-10 16:34:38'),
(63, 'daniel', 'ukpaid@gmail.com', 'Budget entry deleted for ID5', '2021-06-10 16:35:48'),
(64, 'daniel', 'ukpaid@gmail.com', 'Budget Approved with ID 4', '2021-06-10 16:40:32'),
(65, 'daniel', 'ukpaid@gmail.com', 'Budget activity Created - Party - hire dj', '2021-06-10 17:19:57'),
(66, 'Awwal Seghosime', 'awwalseghosime@gmail.com', 'User Logged in', '2021-06-10 18:40:24'),
(67, 'Awwal Seghosime', 'awwalseghosime@gmail.com', 'Password Reset done', '2021-06-10 18:40:45'),
(68, 'Awwal Seghosime', 'awwalseghosime@gmail.com', 'Budget Created - Awwal Balling - with duration of 5 months', '2021-06-10 18:42:09'),
(69, 'Awwal Seghosime', 'awwalseghosime@gmail.com', 'Budget Approved with ID 6', '2021-06-10 18:43:21'),
(70, 'Awwal Seghosime', 'awwalseghosime@gmail.com', 'Budget activity Created - Awwal Balling - house', '2021-06-10 18:45:56'),
(71, 'MDA User One', 'mda@gmail.com', 'Budget Created - test budget too - with duration of 15 months', '2021-06-11 13:23:12'),
(72, 'MDA User One', 'mda@gmail.com', 'Budget Approved with ID 7', '2021-06-11 13:43:16'),
(73, 'MDA User One', 'mda@gmail.com', 'Budget entry deleted for ID3', '2021-06-11 13:48:18'),
(74, 'MDA User One', 'mda@gmail.com', 'Budget Funder Created - Awwal Balling - World Health Organization', '2021-06-11 13:54:51'),
(75, 'MDA User One', 'mda@gmail.com', 'Budget Funder Created - Test Funder', '2021-06-11 15:52:15'),
(76, 'MDA User One', 'mda@gmail.com', 'User Logged in', '2021-06-15 10:18:46'),
(77, 'MDA User One', 'mda@gmail.com', 'Budget activity Created - End of year party - Buy drinks', '2021-06-15 10:34:02'),
(78, 'MDA User One', 'mda@gmail.com', 'Budget activityname Created - GET A PRO DJbudget name: My second budget', '2021-06-15 10:34:58'),
(79, 'MDA User One', 'mda@gmail.com', 'Budget Funder Created - Dangote Sugar Group', '2021-06-15 10:36:04'),
(80, 'MDA User One', 'mda@gmail.com', 'Budget Funder Created - My second budget - Dangote Sugar Group', '2021-06-15 10:36:29'),
(81, 'MDA User One', 'mda@gmail.com', 'Budget Created - Build A New Hospital - with duration of 23 months', '2021-06-15 10:37:54'),
(82, '', '', 'User Logged in From IP: 54.161.74.190', '2021-06-15 12:18:58'),
(83, 'daniel', 'bighead@gmail.com', 'User Logged in From IP: 196.188.14.81', '2021-06-15 12:19:42'),
(84, 'daniel', 'bighead@gmail.com', 'Password Reset done From IP: 196.188.14.81', '2021-06-15 12:19:53'),
(85, 'daniel', 'bighead@gmail.com', 'Budget Created - Fish Party - with duration of 8 months From IP: 196.188.14.81', '2021-06-15 12:21:19'),
(86, '', '', 'Password Reset done From IP: 54.196.0.183', '2021-06-15 12:22:15'),
(87, '', '', 'Budget Created -  - with duration of  months From IP: 3.84.149.34', '2021-06-15 12:23:09'),
(88, 'daniel', 'bighead@gmail.com', 'Budget Funder Created - Emma Ndukwe From IP: 196.188.14.81', '2021-06-15 12:23:44'),
(89, 'daniel', 'bighead@gmail.com', 'Budget Funder Created - Fish Party - Emma Ndukwe From IP: 196.188.14.81', '2021-06-15 12:24:03'),
(90, '', '', 'Budget Funder Created -  From IP: 34.207.162.65', '2021-06-15 12:26:11'),
(91, '', '', 'Budget Funder Created -  -  From IP: 54.161.74.190', '2021-06-15 12:26:38'),
(92, 'DANIELP ukpai', 'freeme@gmail.com', 'User Logged in From IP: 197.210.226.93', '2021-07-07 16:31:12'),
(93, 'DANIELP ukpai', 'freeme@gmail.com', 'Password Reset done From IP: 197.210.54.75', '2021-07-07 16:31:28'),
(94, 'Awwal Seghosime', 'awwal.seghosime@yahoo.com', 'User Logged in From IP: 197.210.52.193', '2021-07-07 16:34:12'),
(95, 'Awwal Seghosime', 'awwal.seghosime@yahoo.com', 'Password Reset done From IP: 197.210.52.193', '2021-07-07 16:34:36'),
(96, 'DANIELP ukpai', 'freeme@gmail.com', 'Budget Funder Created - CHAPMAN From IP: 197.210.55.73', '2021-07-07 16:34:49'),
(97, 'DANIELP ukpai', 'freeme@gmail.com', 'Budget Funder Created - Awwal Balling - CHAPMAN From IP: 197.210.55.73', '2021-07-07 16:35:51'),
(98, 'DANIELP ukpai', 'freeme@gmail.com', 'Budget Created - Birthdays - with duration of 12 months From IP: 197.210.54.75', '2021-07-07 16:38:06'),
(99, 'DANIELP ukpai', 'freeme@gmail.com', 'Budget Funder Created - Crowdforce From IP: 197.210.54.75', '2021-07-07 16:43:32'),
(100, 'DANIELP ukpai', 'freeme@gmail.com', 'Budget Funder Created - Zenaconcept From IP: 197.210.226.93', '2021-07-07 16:43:47'),
(101, 'DANIELP ukpai', 'freeme@gmail.com', 'Budget Funder Created - Birthdays - Crowdforce From IP: 197.210.54.75', '2021-07-07 16:45:21'),
(102, 'DANIELP ukpai', 'freeme@gmail.com', 'Budget Funder Created - Birthdays - Zenaconcept From IP: 197.210.55.73', '2021-07-07 16:46:14'),
(103, 'DANIELP ukpai', 'freeme@gmail.com', 'Budget activityname Created - birthday ramatbudget name: Birthdays From IP: 197.210.54.75', '2021-07-07 16:46:58'),
(104, 'DANIELP ukpai', 'freeme@gmail.com', 'Budget activityname Created - Birthday Danielbudget name: Birthdays From IP: 197.210.55.73', '2021-07-07 16:47:15'),
(105, 'DANIELP ukpai', 'freeme@gmail.com', 'Budget activity Created - birthday ramat - Hall From IP: 197.210.54.75', '2021-07-07 16:49:43'),
(106, 'DANIELP ukpai', 'freeme@gmail.com', 'Budget activity Created - birthday ramat - Music&DJ From IP: 197.210.54.75', '2021-07-07 16:50:32');

-- --------------------------------------------------------

--
-- Table structure for table `fm_users`
--

CREATE TABLE `fm_users` (
  `ID` int(11) NOT NULL,
  `fullname` varchar(500) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `usertype` varchar(255) NOT NULL DEFAULT 'normal',
  `priviledge` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT '1',
  `phone` varchar(255) NOT NULL,
  `reg_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='User Admin Panel for registering places, hotels, restaurants and shopping centers';

--
-- Dumping data for table `fm_users`
--

INSERT INTO `fm_users` (`ID`, `fullname`, `username`, `password`, `usertype`, `priviledge`, `status`, `phone`, `reg_time`) VALUES
(1, 'Ndukwe Onugu Ndukwe', 'endy.odoo@gmail.com', 'a722c63db8ec8625af6cf71cb8c2d939', 'normal', NULL, '0', '07067385283', '2021-04-09 13:28:27'),
(2, 'Ndukwe Onugu', 'endy.odoo@gmail.com2', '5f4dcc3b5aa765d61d8327deb882cf99', 'normal', NULL, '1', '07067385282', '2021-03-29 22:43:20'),
(3, 'MDA User One', 'mda@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'normal', NULL, '0', '08099009988', '2021-04-12 12:48:54'),
(4, 'daniel', 'ukpaid@gmail.com', '2db28a548e08a36198f30efce58a7c1a', 'normal', NULL, '0', '08038231380', '2021-06-10 15:28:46'),
(5, 'Awwal Seghosime', 'awwalseghosime@gmail.com', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'normal', NULL, '0', '09068111974', '2021-06-10 17:40:45'),
(6, 'daniel', 'bighead@gmail.com', '2db28a548e08a36198f30efce58a7c1a', 'normal', NULL, '0', '08038231380', '2021-06-15 11:19:53'),
(7, '', '', 'd41d8cd98f00b204e9800998ecf8427e', 'normal', NULL, '0', '', '2021-06-15 11:22:15'),
(8, 'DANIELP ukpai', 'freeme@gmail.com', '2db28a548e08a36198f30efce58a7c1a', 'normal', NULL, '0', '08038231380', '2021-07-07 15:31:28'),
(9, 'Awwal Seghosime', 'awwal.seghosime@yahoo.com', '6e9fdbb45248f2b33e805956a51f5610', 'normal', NULL, '0', '07946153024', '2021-07-07 15:34:36');

-- --------------------------------------------------------

--
-- Table structure for table `statelga`
--

CREATE TABLE `statelga` (
  `id` int(11) NOT NULL,
  `states` varchar(11) DEFAULT NULL,
  `lga` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `statelga`
--

INSERT INTO `statelga` (`id`, `states`, `lga`) VALUES
(1, 'ABIA', 'ABA NORTH'),
(2, 'ABIA', 'ABA SOUTH'),
(3, 'ABIA', 'AROCHUKWU'),
(4, 'ABIA', 'BENDE'),
(5, 'ABIA', 'IKWUANO'),
(6, 'ABIA', 'ISIALA NGWA NORTH'),
(7, 'ABIA', 'ISIALA NGWA SOUTH'),
(8, 'ABIA', 'ISUIKWUATO'),
(9, 'ABIA', 'OBINGWA'),
(10, 'ABIA', 'OHAFIA'),
(11, 'ABIA', 'OSISIOMA'),
(12, 'ABIA', 'UGWUNAGBO'),
(13, 'ABIA', 'UKWA EAST'),
(14, 'ABIA', 'UKWA WEST'),
(15, 'ABIA', 'UMUAHIA NORTH'),
(16, 'ABIA', 'UMUAHIA SOUTH'),
(17, 'ABIA', 'UMU-NNEOCHI'),
(18, 'ADAMAWA', 'DEMSA'),
(19, 'ADAMAWA', 'FURORE'),
(20, 'ADAMAWA', 'GANYE'),
(21, 'ADAMAWA', 'GEREI'),
(22, 'ADAMAWA', 'GOMBI'),
(23, 'ADAMAWA', 'GUYUK'),
(24, 'ADAMAWA', 'HONG'),
(25, 'ADAMAWA', 'JADA'),
(26, 'ADAMAWA', 'LAMURDE'),
(27, 'ADAMAWA', 'MADAGALI'),
(28, 'ADAMAWA', 'MAIHA'),
(29, 'ADAMAWA', 'MAYO-BELWA'),
(30, 'ADAMAWA', 'MICHIKA'),
(31, 'ADAMAWA', 'MUBI NORTH'),
(32, 'ADAMAWA', 'MUBI SOUTH'),
(33, 'ADAMAWA', 'NUMAN'),
(34, 'ADAMAWA', 'SHELLENG'),
(35, 'ADAMAWA', 'SONG'),
(36, 'ADAMAWA', 'TUNGO'),
(37, 'ADAMAWA', 'YOLA NORTH'),
(38, 'ADAMAWA', 'YOLA SOUTH'),
(39, 'AKWA_IBOM', 'ABAK'),
(40, 'AKWA_IBOM', 'EASTERN OBOLO'),
(41, 'AKWA_IBOM', 'EKET'),
(42, 'AKWA_IBOM', 'ESIT EKET'),
(43, 'AKWA_IBOM', 'ESSIEN UDIM'),
(44, 'AKWA_IBOM', 'ETIM EKPO'),
(45, 'AKWA_IBOM', 'ETINAN'),
(46, 'AKWA_IBOM', 'IBENO'),
(47, 'AKWA_IBOM', 'IBESIKPO/ASUTAN'),
(48, 'AKWA_IBOM', 'IBIONO IBOM'),
(49, 'AKWA_IBOM', 'IKA'),
(50, 'AKWA_IBOM', 'IKONO '),
(51, 'AKWA_IBOM', 'IKOT ABASI'),
(52, 'AKWA_IBOM', 'IKOT EKPENE'),
(53, 'AKWA_IBOM', 'INI'),
(54, 'AKWA_IBOM', 'ITU'),
(55, 'AKWA_IBOM', 'MBO'),
(56, 'AKWA_IBOM', 'MKPAT ENIN'),
(57, 'AKWA_IBOM', 'NSIT ATAI'),
(58, 'AKWA_IBOM', 'NSIT IBOM'),
(59, 'AKWA_IBOM', 'NSIT UBIUM'),
(60, 'AKWA_IBOM', 'OBOT AKARA'),
(61, 'AKWA_IBOM', 'OKOBO'),
(62, 'AKWA_IBOM', 'ONNAA'),
(63, 'AKWA_IBOM', 'ORON'),
(64, 'AKWA_IBOM', 'ORUKANAM'),
(65, 'AKWA_IBOM', 'UDUNG UKO'),
(66, 'AKWA_IBOM', 'UKANAFUN'),
(67, 'AKWA_IBOM', 'URUAN'),
(68, 'AKWA_IBOM', 'URUE OFFONG ORUKO'),
(69, 'AKWA_IBOM', 'UYO'),
(70, 'ANAMBRA', 'AGUATA'),
(71, 'ANAMBRA', 'AYAMELUM'),
(72, 'ANAMBRA', 'ANAMBRA EAST'),
(73, 'ANAMBRA', 'ANAMBRA WEST'),
(74, 'ANAMBRA', 'ANAOCHA'),
(75, 'ANAMBRA', 'AWKA-NORTH'),
(76, 'ANAMBRA', 'AWKA SOUTH'),
(77, 'ANAMBRA', 'DUNUKOFIA'),
(78, 'ANAMBRA', 'EKWUSIGO'),
(79, 'ANAMBRA', 'IDEMILI NORTH'),
(80, 'ANAMBRA', 'IDEMILI SOUTH'),
(81, 'ANAMBRA', 'IHIALA'),
(82, 'ANAMBRA', 'NJIKOKA'),
(83, 'ANAMBRA', 'NNEWI NORTH'),
(84, 'ANAMBRA', 'NNEWI SOUTH'),
(85, 'ANAMBRA', 'OGBARU'),
(86, 'ANAMBRA', 'ONITSHA NORTH'),
(87, 'ANAMBRA', 'ONITSHA SOUTH'),
(88, 'ANAMBRA', 'ORUMBA NORTH'),
(89, 'ANAMBRA', 'ORUMBA SOUTH'),
(90, 'ANAMBRA', 'OYI'),
(91, 'BAUCHI', 'ALKALERI'),
(92, 'BAUCHI', 'BAUCHI'),
(93, 'BAUCHI', 'BOGORO'),
(94, 'BAUCHI', 'DAMBAM'),
(95, 'BAUCHI', 'DARAZO'),
(96, 'BAUCHI', 'DASS'),
(97, 'BAUCHI', 'GAMAWA'),
(98, 'BAUCHI', 'GANJUWA'),
(99, 'BAUCHI', 'GIADE'),
(100, 'BAUCHI', 'ITAS/GADAU'),
(101, 'BAUCHI', 'JAMAOAREO'),
(102, 'BAUCHI', 'KATAGUM'),
(103, 'BAUCHI', 'KIRFI'),
(104, 'BAUCHI', 'MISAU'),
(105, 'BAUCHI', 'NINGI'),
(106, 'BAUCHI', 'SHIRA'),
(107, 'BAUCHI', 'TAFAWA BALEWA'),
(108, 'BAUCHI', 'TORO'),
(109, 'BAUCHI', 'WARJI'),
(110, 'BAUCHI', 'ZAKI'),
(111, 'BAYELSA', 'BRASS'),
(112, 'BAYELSA', 'EKEREMOR'),
(113, 'BAYELSA', 'KOLOKUMA/OPOKUMA'),
(114, 'BAYELSA', 'NEMBE'),
(115, 'BAYELSA', 'OGBIA'),
(116, 'BAYELSA', 'SAGBAMA'),
(117, 'BAYELSA', 'SOUTHERN IJAW'),
(118, 'BAYELSA', 'YENAGOA'),
(119, 'BENUE', 'ADO'),
(120, 'BENUE', 'AGATU'),
(121, 'BENUE', 'APA'),
(122, 'BENUE', 'BURUKU'),
(123, 'BENUE', 'GBOKO'),
(124, 'BENUE', 'GUMA'),
(125, 'BENUE', 'GWER EAST '),
(126, 'BENUE', 'GWER WEST'),
(127, 'BENUE', 'KATSINA-ALA'),
(128, 'BENUE', 'KONSHISHA'),
(129, 'BENUE', 'KWANDE'),
(130, 'BENUE', 'LOGO'),
(131, 'BENUE', 'MAKURDI'),
(132, 'BENUE', 'OBI'),
(133, 'BENUE', 'OGBADIBO'),
(134, 'BENUE', 'OHIMINI'),
(135, 'BENUE', 'OJU'),
(136, 'BENUE', 'OKPOKWU'),
(137, 'BENUE', 'OTUKPO'),
(138, 'BENUE', 'TARKA'),
(139, 'BENUE', 'UKUM'),
(140, 'BENUE', 'USHONGO'),
(141, 'BENUE', 'VENDEIKYA'),
(142, 'BORNO', 'ABADAM'),
(143, 'BORNO', 'ASKIRA/UBA'),
(144, 'BORNO', 'BAMA'),
(145, 'BORNO', 'BAYO'),
(146, 'BORNO', 'BIU'),
(147, 'BORNO', 'CHIBOK'),
(148, 'BORNO', 'DAMBOA'),
(149, 'BORNO', 'DIKWA'),
(150, 'BORNO', 'GUBIO'),
(151, 'BORNO', 'GUZAMALA'),
(152, 'BORNO', 'GWOZA'),
(153, 'BORNO', 'HAWUL'),
(154, 'BORNO', 'JERE'),
(155, 'BORNO', 'KAGA'),
(156, 'BORNO', 'KALA BALGE'),
(157, 'BORNO', 'KONDUGA'),
(158, 'BORNO', 'KUKAWA'),
(159, 'BORNO', 'KWAYA KUSAR'),
(160, 'BORNO', 'MAFA'),
(161, 'BORNO', 'MAGUMERI'),
(162, 'BORNO', 'MAIDUGURI'),
(163, 'BORNO', 'MARTE'),
(164, 'BORNO', 'MOBBAR'),
(165, 'BORNO', 'MONGUNO'),
(166, 'BORNO', 'NGALA'),
(167, 'BORNO', 'NGANZAI'),
(168, 'BORNO', 'SHANI'),
(169, 'CROSS_RIVER', 'ABI'),
(170, 'CROSS_RIVER', 'AKAMKPA'),
(171, 'CROSS_RIVER', 'AKPABUYO'),
(172, 'CROSS_RIVER', 'BAKASSI'),
(173, 'CROSS_RIVER', 'BEKWARRA'),
(174, 'CROSS_RIVER', 'BIASE'),
(175, 'CROSS_RIVER', 'BOKI'),
(176, 'CROSS_RIVER', 'CALABAR MUNICIPALITY'),
(177, 'CROSS_RIVER', 'CALABAR SOUTH'),
(178, 'CROSS_RIVER', 'ETUNG'),
(179, 'CROSS_RIVER', 'IKOM'),
(180, 'CROSS_RIVER', 'OBANLIKU'),
(181, 'CROSS_RIVER', 'OBUBRA'),
(182, 'CROSS_RIVER', 'OBUDU'),
(183, 'CROSS_RIVER', 'ODUKPANI'),
(184, 'CROSS_RIVER', 'OGOJA'),
(185, 'CROSS_RIVER', 'YAKURR'),
(186, 'CROSS_RIVER', 'YALA'),
(187, 'DELTA', 'ANIOCHA NORTH'),
(188, 'DELTA', 'ANIOCHA SOUTH'),
(189, 'DELTA', 'BOMADI'),
(190, 'DELTA', 'BURUTU'),
(191, 'DELTA', 'ETHIOPE-EAST'),
(192, 'DELTA', 'ETHIOPE-WEST'),
(193, 'DELTA', 'IKA NORTH-EAST'),
(194, 'DELTA', 'IKA-SOUTH'),
(195, 'DELTA', 'ISOKO-NORTH'),
(196, 'DELTA', 'ISOKO-SOUTH'),
(197, 'DELTA', 'NDOKWA-EAST'),
(198, 'DELTA', 'NDOKWA-WEST'),
(199, 'DELTA', 'OKPE'),
(200, 'DELTA', 'OSHIMILI-NORTH'),
(201, 'DELTA', 'OSHIMILI-SOUTH'),
(202, 'DELTA', 'PATANI'),
(203, 'DELTA', 'SAPELE'),
(204, 'DELTA', 'UDU'),
(205, 'DELTA', 'UGHELLI NORTH'),
(206, 'DELTA', 'UGHELLI-SOUTH'),
(207, 'DELTA', 'UKWUANI'),
(208, 'DELTA', 'UVWIE'),
(209, 'DELTA', 'WARRI-NORTH'),
(210, 'DELTA', 'WARRI-SOUTH'),
(211, 'DELTA', 'WARRI-SOUTH WEST'),
(212, 'EBONYI', 'ABAKALIKI'),
(213, 'EBONYI', 'AFIKPO NORTH'),
(214, 'EBONYI', 'AFIKPO SOUTH'),
(215, 'EBONYI', 'EBONYI'),
(216, 'EBONYI', 'EZZA NORTH'),
(217, 'EBONYI', 'EZZA SOUTH'),
(218, 'EBONYI', 'IKWO'),
(219, 'EBONYI', 'ISHIELU'),
(220, 'EBONYI', 'IVO'),
(221, 'EBONYI', 'IZZI'),
(222, 'EBONYI', 'OHAOZARA'),
(223, 'EBONYI', 'OHAUKWU'),
(224, 'EBONYI', 'ONICHA'),
(225, 'EDO', 'AKOKO EDO'),
(226, 'EDO', 'EGOR'),
(227, 'EDO', 'ESAN CENTRAL'),
(228, 'EDO', 'ESAN NORTH EAST'),
(229, 'EDO', 'ESAN SOUTH EAST'),
(230, 'EDO', 'ESAN WEST'),
(231, 'EDO', 'ETSAKO CENTRAL'),
(232, 'EDO', 'ETSAKO EAST'),
(233, 'EDO', 'ETSAKO WEST'),
(234, 'EDO', 'IGUEBEN'),
(235, 'EDO', 'IKPOBA/OKHA'),
(236, 'EDO', 'OREDO'),
(237, 'EDO', 'ORHIONMWON'),
(238, 'EDO', 'OVIA NORTH EAST'),
(239, 'EDO', 'OVIA SOUTH WEST'),
(240, 'EDO', 'OWAN EAST'),
(241, 'EDO', 'OWAN WEST'),
(242, 'EDO', 'UHUNMWODE'),
(243, 'EKITI', 'ADO EKITI'),
(244, 'EKITI', 'EFON'),
(245, 'EKITI', 'EKITI EAST'),
(246, 'EKITI', 'EKITI WEST'),
(247, 'EKITI', 'EKITI SOUTH WEST'),
(248, 'EKITI', 'EMURE'),
(249, 'EKITI', 'GBOYIN'),
(250, 'EKITI', 'IDO/OSI'),
(251, 'EKITI', 'IJERO'),
(252, 'EKITI', 'IKERE'),
(253, 'EKITI', 'IKOLE'),
(254, 'EKITI', 'ILEJEMEJE'),
(255, 'EKITI', 'IREPODU/IFELODUN'),
(256, 'EKITI', 'ISE/ORUN'),
(257, 'EKITI', 'MOBA'),
(258, 'EKITI', 'OYE'),
(259, 'ENUGU', 'ANINRI'),
(260, 'ENUGU', 'AWGU'),
(261, 'ENUGU', 'ENUGU-EAST'),
(262, 'ENUGU', 'ENUGU-NORTH'),
(263, 'ENUGU', 'ENUGU-SOUTH'),
(264, 'ENUGU', 'EZEAGU'),
(265, 'ENUGU', 'IGBO ETITI'),
(266, 'ENUGU', 'IGBO-EZE NORTH'),
(267, 'ENUGU', 'IGBO-EZE SOUTH'),
(268, 'ENUGU', 'ISI-UZO'),
(269, 'ENUGU', 'NKANU EAST'),
(270, 'ENUGU', 'NKANU WEST'),
(271, 'ENUGU', 'NSUKKA'),
(272, 'ENUGU', 'OJI-RIVER'),
(273, 'ENUGU', 'UDENU'),
(274, 'ENUGU', 'UDI'),
(275, 'ENUGU', 'UZO-UWANI'),
(276, 'FCT', 'ABAJI'),
(277, 'FCT', 'BWARI'),
(278, 'FCT', 'GWAGWALADA'),
(279, 'FCT', 'KUJE'),
(280, 'FCT', 'KWALI'),
(281, 'FCT', 'MUNICIPAL'),
(282, 'GOMBE', 'AKKO'),
(283, 'GOMBE', 'BALANGA'),
(284, 'GOMBE', 'BILLIRI'),
(285, 'GOMBE', 'DUKKU'),
(286, 'GOMBE', 'FUNAKAYE '),
(287, 'GOMBE', 'GOMBE'),
(288, 'GOMBE', 'KALTUNGO'),
(289, 'GOMBE', 'KWAMI'),
(290, 'GOMBE', 'NAFADA'),
(291, 'GOMBE', 'SHONGOM'),
(292, 'GOMBE', 'YAMALTU/DEBA'),
(293, 'IMO', 'ABOH MBAISE'),
(294, 'IMO', 'AHAIAZU MBAISE'),
(295, 'IMO', 'EHIME MBANO'),
(296, 'IMO', 'EZINIHITTE MBAISE'),
(297, 'IMO', 'IDEATO NORTH'),
(298, 'IMO', 'IDEATO SOUTH'),
(299, 'IMO', 'IHITTE/UBOMA'),
(300, 'IMO', 'IKEDURU'),
(301, 'IMO', 'ISIALA MBANO'),
(302, 'IMO', 'ISU'),
(303, 'IMO', 'MBAITOLU'),
(304, 'IMO', 'NGOW OKPALA'),
(305, 'IMO', 'NJABA'),
(306, 'IMO', 'NKWERRE'),
(307, 'IMO', 'NWANGELE'),
(308, 'IMO', 'OBOWO'),
(309, 'IMO', 'OGUTA'),
(310, 'IMO', 'OHAJI/EGBEMA'),
(311, 'IMO', 'OKIGWE'),
(312, 'IMO', 'ONUIMO'),
(313, 'IMO', 'ORLU'),
(314, 'IMO', 'ORSU'),
(315, 'IMO', 'ORU-EAST'),
(316, 'IMO', 'ORU-WEST'),
(317, 'IMO', 'OWERRI-URBAN'),
(318, 'IMO', 'OWERRI NORTH'),
(319, 'IMO', 'OWERRI WEST'),
(320, 'JIGAWA', 'AUYO'),
(321, 'JIGAWA', 'BABURA'),
(322, 'JIGAWA', 'BIRNIN-KUDU'),
(323, 'JIGAWA', 'BIRNIWA'),
(324, 'JIGAWA', 'BUJI'),
(325, 'JIGAWA', 'DUTSE'),
(326, 'JIGAWA', 'GARKI'),
(327, 'JIGAWA', 'GAGARAWA'),
(328, 'JIGAWA', 'GUMEL'),
(329, 'JIGAWA', 'GURI'),
(330, 'JIGAWA', 'GWARAM'),
(331, 'JIGAWA', 'GWIWA'),
(332, 'JIGAWA', 'HADEJIA'),
(333, 'JIGAWA', 'JAHUN'),
(334, 'JIGAWA', 'KAFIN-HAUSA'),
(335, 'JIGAWA', 'KAUGAMA'),
(336, 'JIGAWA', 'KAZAURE'),
(337, 'JIGAWA', 'K/KASAMMA'),
(338, 'JIGAWA', 'KIYAWA'),
(339, 'JIGAWA', 'MAIGATARI'),
(340, 'JIGAWA', 'M/MADORI'),
(341, 'JIGAWA', 'MIGA'),
(342, 'JIGAWA', 'RINGIM'),
(343, 'JIGAWA', 'RONI'),
(344, 'JIGAWA', 'S/TANKARKAR'),
(345, 'JIGAWA', 'TAURA'),
(346, 'JIGAWA', 'YANKWASHI'),
(347, 'KADUNA', 'BIRNIN GWARI'),
(348, 'KADUNA', 'CHIKUN'),
(349, 'KADUNA', 'GIWA'),
(350, 'KADUNA', 'IGABI'),
(351, 'KADUNA', 'IKARA'),
(352, 'KADUNA', 'JABA'),
(353, 'KADUNA', 'JEMAOAO'),
(354, 'KADUNA', 'KACHIA'),
(355, 'KADUNA', 'KADUN NORTH'),
(356, 'KADUNA', 'KADUN SOUTH'),
(357, 'KADUNA', 'KAGARKO'),
(358, 'KADUNA', 'KAJURU'),
(359, 'KADUNA', 'KAURA'),
(360, 'KADUNA', 'KAURU'),
(361, 'KADUNA', 'KUBAU'),
(362, 'KADUNA', 'KUDAN'),
(363, 'KADUNA', 'LERE     '),
(364, 'KADUNA', 'MAKARFI'),
(365, 'KADUNA', 'SABON GARI'),
(366, 'KADUNA', 'SANGA'),
(367, 'KADUNA', 'SOBA'),
(368, 'KADUNA', 'ZAGON KATAF'),
(369, 'KADUNA', 'ZARIA'),
(370, 'KANO', 'AJINGI'),
(371, 'KANO', 'ALBASU'),
(372, 'KANO', 'BAGWAI'),
(373, 'KANO', 'BEBEJI'),
(374, 'KANO', 'BICHI'),
(375, 'KANO', 'BUNKURE'),
(376, 'KANO', 'DALA'),
(377, 'KANO', 'DANBATTA'),
(378, 'KANO', 'DAWAKIN KUDU'),
(379, 'KANO', 'DAWAKIN TOFA'),
(380, 'KANO', 'DOGUWA'),
(381, 'KANO', 'FAGGE'),
(382, 'KANO', 'GABASAWA'),
(383, 'KANO', 'GARKO'),
(384, 'KANO', 'GARUN MALAM'),
(385, 'KANO', 'GAYA'),
(386, 'KANO', 'GEZAWA'),
(387, 'KANO', 'GWALE'),
(388, 'KANO', 'GWARZO'),
(389, 'KANO', 'KABO'),
(390, 'KANO', 'KANO MUNICIPAL'),
(391, 'KANO', 'KARAYE'),
(392, 'KANO', 'KIBIYA'),
(393, 'KANO', 'KIRU'),
(394, 'KANO', 'KUMBOTSO'),
(395, 'KANO', 'KUNCHI'),
(396, 'KANO', 'KURA'),
(397, 'KANO', 'MAKODA'),
(398, 'KANO', 'MINJIBIR'),
(399, 'KANO', 'MADOBI'),
(400, 'KANO', 'NASARAWA'),
(401, 'KANO', 'RANO'),
(402, 'KANO', 'RIMIN GADO'),
(403, 'KANO', 'ROGO'),
(404, 'KANO', 'SHANONO'),
(405, 'KANO', 'SUMAILA'),
(406, 'KANO', 'TAKAI'),
(407, 'KANO', 'TARAUNI'),
(408, 'KANO', 'TOFA'),
(409, 'KANO', 'TUDUN WADA'),
(410, 'KANO', 'TSANYAWA'),
(411, 'KANO', 'UNGOGO'),
(412, 'KANO', 'WARAWA'),
(413, 'KANO', 'WUDIL'),
(414, 'KATSINA', 'BAKORI'),
(415, 'KATSINA', 'BATAGARAWA'),
(416, 'KATSINA', 'BATSARI'),
(417, 'KATSINA', 'BAURE'),
(418, 'KATSINA', 'BINDAWA'),
(419, 'KATSINA', 'CHARANCHI'),
(420, 'KATSINA', 'DANDUME'),
(421, 'KATSINA', 'DANJA'),
(422, 'KATSINA', 'DANMUSA'),
(423, 'KATSINA', 'DAURA'),
(424, 'KATSINA', 'DUTSI'),
(425, 'KATSINA', 'DUTSIN- MA'),
(426, 'KATSINA', 'FASKARI'),
(427, 'KATSINA', 'FUNTUA'),
(428, 'KATSINA', 'INGAWA'),
(429, 'KATSINA', 'JIBIA'),
(430, 'KATSINA', 'KAFUR'),
(431, 'KATSINA', 'KAITA'),
(432, 'KATSINA', 'KANKARA'),
(433, 'KATSINA', 'KANKIA'),
(434, 'KATSINA', 'KATSINA'),
(435, 'KATSINA', 'KURFI'),
(436, 'KATSINA', 'KUSADA'),
(437, 'KATSINA', 'MAIADUA'),
(438, 'KATSINA', 'MALUMFASHI'),
(439, 'KATSINA', 'MANI'),
(440, 'KATSINA', 'MASHI'),
(441, 'KATSINA', 'MATAZU'),
(442, 'KATSINA', 'MUSAWA'),
(443, 'KATSINA', 'RIMI'),
(444, 'KATSINA', 'SABUWA'),
(445, 'KATSINA', 'SAFANA'),
(446, 'KATSINA', 'SANDAMU'),
(447, 'KATSINA', 'ZANGO'),
(448, 'KEBBI', 'ALIERO'),
(449, 'KEBBI', 'AREWA'),
(450, 'KEBBI', 'ARGUNGU'),
(451, 'KEBBI', 'AUGIE'),
(452, 'KEBBI', 'BAGUDO '),
(453, 'KEBBI', 'BIRNIN KEBBI'),
(454, 'KEBBI', 'BUNZA'),
(455, 'KEBBI', 'DANDI'),
(456, 'KEBBI', 'FAKAI'),
(457, 'KEBBI', 'GWANDU'),
(458, 'KEBBI', 'JEGA'),
(459, 'KEBBI', 'KALGO'),
(460, 'KEBBI', 'KOKO/BESSE'),
(461, 'KEBBI', 'MAIYAMA'),
(462, 'KEBBI', 'NGASKI'),
(463, 'KEBBI', 'SAKABA'),
(464, 'KEBBI', 'SHANGA'),
(465, 'KEBBI', 'SURU'),
(466, 'KEBBI', 'WASAGU/DANKO'),
(467, 'KEBBI', 'YAURI'),
(468, 'KEBBI', 'ZURU'),
(469, 'KOGI', 'ADAVI'),
(470, 'KOGI', 'AJAOKUTA'),
(471, 'KOGI', 'ANKPA'),
(472, 'KOGI', 'BASSA'),
(473, 'KOGI', 'DEKINA'),
(474, 'KOGI', 'IBAJI'),
(475, 'KOGI', 'IDAH'),
(476, 'KOGI', 'IGALA-MELA'),
(477, 'KOGI', 'IJUMU'),
(478, 'KOGI', 'KABBA/BUNU'),
(479, 'KOGI', 'KOGI (KK)'),
(480, 'KOGI', 'LOKOJA'),
(481, 'KOGI', 'MOPA-MORO'),
(482, 'KOGI', 'OFU'),
(483, 'KOGI', 'OGORI MAGONGO'),
(484, 'KOGI', 'OKEHI'),
(485, 'KOGI', 'OKEN'),
(486, 'KOGI', 'OLAMABORO'),
(487, 'KOGI', 'OMALA'),
(488, 'KOGI', 'YAGBA EAST'),
(489, 'KOGI', 'YAGBA WEST'),
(490, 'KWARA', 'ASA'),
(491, 'KWARA', 'BARUTEN'),
(492, 'KWARA', 'EDU'),
(493, 'KWARA', 'EKITI'),
(494, 'KWARA', 'IFELODUN'),
(495, 'KWARA', 'ILORIN EAST'),
(496, 'KWARA', 'ILORIN SOUTH'),
(497, 'KWARA', 'ILORIN WEST'),
(498, 'KWARA', 'IREPODUN'),
(499, 'KWARA', 'ISIN'),
(500, 'KWARA', 'KALAMA'),
(501, 'KWARA', 'MORO'),
(502, 'KWARA', 'OFFA'),
(503, 'KWARA', 'OKE-ERO'),
(504, 'KWARA', 'OYUN'),
(505, 'KWARA', 'PATIGI'),
(506, 'LAGOS', 'AGEGE'),
(507, 'LAGOS', 'AJEROMI/IFELODUN'),
(508, 'LAGOS', 'ALIMOSHO'),
(509, 'LAGOS', 'AMUWO-ODOFIN'),
(510, 'LAGOS', 'APAPA'),
(511, 'LAGOS', 'BADAGRY'),
(512, 'LAGOS', 'EPE'),
(513, 'LAGOS', 'ETI-OSA'),
(514, 'LAGOS', 'IBEJU/LEKKI'),
(515, 'LAGOS', 'IFAKO-IJAYE'),
(516, 'LAGOS', 'IKEJA'),
(517, 'LAGOS', 'IKORODU'),
(518, 'LAGOS', 'KOSOFE'),
(519, 'LAGOS', 'LAGOS ISLAND'),
(520, 'LAGOS', 'LAGOS MAINLAND'),
(521, 'LAGOS', 'MUSHIN'),
(522, 'LAGOS', 'OJO'),
(523, 'LAGOS', 'OSHODI-ISOLO'),
(524, 'LAGOS', 'SHOMOLU'),
(525, 'LAGOS', 'SURULERE'),
(526, 'NASARAWA', 'AKWANGA'),
(527, 'NASARAWA', 'AWE'),
(528, 'NASARAWA', 'DOMA'),
(529, 'NASARAWA', 'KARU'),
(530, 'NASARAWA', 'KEANA'),
(531, 'NASARAWA', 'KEFFI'),
(532, 'NASARAWA', 'KOKONA'),
(533, 'NASARAWA', 'LAFIA'),
(534, 'NASARAWA', ' NASARAWA'),
(535, 'NASARAWA', 'NASARAWA/EGGON'),
(536, 'NASARAWA', 'OBI'),
(537, 'NASARAWA', 'TOTO'),
(538, 'NASARAWA', 'WAMBA'),
(539, 'NIGER', 'AGAIE'),
(540, 'NIGER', 'AGWARA'),
(541, 'NIGER', 'BIDA'),
(542, 'NIGER', 'BORGU'),
(543, 'NIGER', 'BOSSO'),
(544, 'NIGER', 'CHANCHAGA'),
(545, 'NIGER', 'EDATI'),
(546, 'NIGER', 'GBAKO'),
(547, 'NIGER', 'GURARA'),
(548, 'NIGER', 'KATCHA'),
(549, 'NIGER', 'KONTAGORA'),
(550, 'NIGER', 'LAPAI'),
(551, 'NIGER', 'LAVUN'),
(552, 'NIGER', 'MAGAMA'),
(553, 'NIGER', 'MARIGA'),
(554, 'NIGER', 'MASHEGU'),
(555, 'NIGER', 'MOKWA'),
(556, 'NIGER', 'MUNYA'),
(557, 'NIGER', 'PAIKORO'),
(558, 'NIGER', 'RAFI'),
(559, 'NIGER', 'RIJAU'),
(560, 'NIGER', 'SHIRORO'),
(561, 'NIGER', 'SULEJA'),
(562, 'NIGER', 'TAFA'),
(563, 'NIGER', 'WUSHISHI'),
(564, 'OGUN', 'ABEOKUTA NORTH'),
(565, 'OGUN', 'ABEOKUTA SOUTH'),
(566, 'OGUN', 'ADO-ODO-OTA'),
(567, 'OGUN', 'EGBADO NORTH'),
(568, 'OGUN', 'EGBADO SOUTH'),
(569, 'OGUN', 'EWEKORO'),
(570, 'OGUN', 'IFO'),
(571, 'OGUN', 'IJEBU EAST'),
(572, 'OGUN', 'IJEBU NORTH'),
(573, 'OGUN', 'IJEBU NORTH EAST'),
(574, 'OGUN', 'IJEBU ODE'),
(575, 'OGUN', 'IKENNE'),
(576, 'OGUN', 'IMEKO/AFON'),
(577, 'OGUN', 'IPOKIA'),
(578, 'OGUN', 'OBAFEMI/OWODE'),
(579, 'OGUN', 'ODEDA'),
(580, 'OGUN', 'ODOGBOLU'),
(581, 'OGUN', 'OGUN WATER SIDE'),
(582, 'OGUN', 'REMO NORTH'),
(583, 'OGUN', 'SAGAMU'),
(584, 'ONDO', 'AKOKO NORTH EAST'),
(585, 'ONDO', 'AKOKO NORTH WEST'),
(586, 'ONDO', 'AKOKO SOUTH EAST'),
(587, 'ONDO', 'AKOKO SOUTH WEST'),
(588, 'ONDO', 'AKURE NORTH'),
(589, 'ONDO', 'AKURE SOUTH'),
(590, 'ONDO', 'ESE-ODO'),
(591, 'ONDO', 'IDANRE'),
(592, 'ONDO', 'IFEDORE'),
(593, 'ONDO', 'ILAJE'),
(594, 'ONDO', 'ILEOLUJI/OKE-IGBO'),
(595, 'ONDO', 'IRELE'),
(596, 'ONDO', 'ODIGBO'),
(597, 'ONDO', 'OKITIPUPA'),
(598, 'ONDO', 'ONDO EAST'),
(599, 'ONDO', 'ONDO WEST'),
(600, 'ONDO', 'OSE'),
(601, 'ONDO', 'OWO'),
(602, 'OSUN', 'ATAKUMOSA EAST'),
(603, 'OSUN', 'ATAKUNMOSA WEST'),
(604, 'OSUN', 'AYEDADE'),
(605, 'OSUN', 'AYEDIRE'),
(606, 'OSUN', 'BOLUWA-DURO'),
(607, 'OSUN', 'BORIPE'),
(608, 'OSUN', 'EDE NORTH'),
(609, 'OSUN', 'EDE SOUTH'),
(610, 'OSUN', 'EGBEDORE'),
(611, 'OSUN', 'EJIGBO'),
(612, 'OSUN', 'IFE CENTRAL'),
(613, 'OSUN', 'IFEDAYO'),
(614, 'OSUN', 'IFE EAST'),
(615, 'OSUN', 'IFELODUN'),
(616, 'OSUN', 'IFE NORTH'),
(617, 'OSUN', 'IFE SOUTH'),
(618, 'OSUN', 'ILA'),
(619, 'OSUN', 'ILESA EAST'),
(620, 'OSUN', 'ILESA WEST'),
(621, 'OSUN', 'IREPODUN'),
(622, 'OSUN', 'IREWOLE'),
(623, 'OSUN', 'ISOKAN'),
(624, 'OSUN', 'IWO'),
(625, 'OSUN', 'OBOKUN'),
(626, 'OSUN', 'ODO-OTIN'),
(627, 'OSUN', 'OLA-OLUWA'),
(628, 'OSUN', 'OLORUNDA'),
(629, 'OSUN', 'ORIADE'),
(630, 'OSUN', 'OROLU'),
(631, 'OSUN', 'OSOGBO'),
(632, 'OYO', 'AFIJIO'),
(633, 'OYO', 'AKINYELE'),
(634, 'OYO', 'ATIBA'),
(635, 'OYO', 'ATISBO'),
(636, 'OYO', 'EGBEDA'),
(637, 'OYO', 'IBADAN NORTH'),
(638, 'OYO', 'IBADAN NORTH EAST'),
(639, 'OYO', 'IBADAN NORTH WEST'),
(640, 'OYO', 'IBADAN SOUTH-EAST'),
(641, 'OYO', 'IBADAN SOUTH WEST'),
(642, 'OYO', 'IBARAPA CENTRAL'),
(643, 'OYO', 'IBARAPA EAST'),
(644, 'OYO', 'IBARAPA NORTH'),
(645, 'OYO', 'IDO'),
(646, 'OYO', 'IREPO'),
(647, 'OYO', 'ISEYIN'),
(648, 'OYO', 'ITESIWAJU'),
(649, 'OYO', 'IWAJOWA'),
(650, 'OYO', 'KAJOLA'),
(651, 'OYO', 'LAGELU'),
(652, 'OYO', 'OGBOMOSO NORTH'),
(653, 'OYO', 'OGBOMOSO SOUTH'),
(654, 'OYO', 'OGO-OLUWA'),
(655, 'OYO', 'OLORUNSOGO'),
(656, 'OYO', 'OLUYOLE'),
(657, 'OYO', 'ONA-ARA'),
(658, 'OYO', 'OORELOPE'),
(659, 'OYO', 'ORI IRE'),
(660, 'OYO', 'OYO EAST'),
(661, 'OYO', 'OYO WEST'),
(662, 'OYO', 'SAKI EAST'),
(663, 'OYO', 'SAKI WEST'),
(664, 'OYO', 'SURULERE'),
(665, 'PLATEAU', 'BARKIN LADI'),
(666, 'PLATEAU', 'BASSA'),
(667, 'PLATEAU', 'BOKKOS'),
(668, 'PLATEAU', 'JOS EAST'),
(669, 'PLATEAU', ' JOS NORTH'),
(670, 'PLATEAU', 'JOS SOUTH'),
(671, 'PLATEAU', 'KANAM'),
(672, 'PLATEAU', 'KANKE'),
(673, 'PLATEAU', 'LANG-TANG NORTH'),
(674, 'PLATEAU', 'LANG-TANG SOUTH'),
(675, 'PLATEAU', 'MANGU'),
(676, 'PLATEAU', 'MIKANG'),
(677, 'PLATEAU', 'PANKSHIN'),
(678, 'PLATEAU', 'QU AN PAN'),
(679, 'PLATEAU', 'RIYOM'),
(680, 'PLATEAU', 'SHENDAM'),
(681, 'PLATEAU', 'WASE'),
(682, 'RIVERS', 'ABUA-ODUAL'),
(683, 'RIVERS', 'AHODA EAST'),
(684, 'RIVERS', 'AHOADA WEST'),
(685, 'RIVERS', 'AKUKUTORU'),
(686, 'RIVERS', 'ANDONI'),
(687, 'RIVERS', 'ASARI-TORU'),
(688, 'RIVERS', 'BONNY'),
(689, 'RIVERS', 'DEGEMA'),
(690, 'RIVERS', 'ELEME'),
(691, 'RIVERS', 'EMOHUA'),
(692, 'RIVERS', 'ETCHE'),
(693, 'RIVERS', 'GOKANA'),
(694, 'RIVERS', 'IKWERRE'),
(695, 'RIVERS', 'KHANA'),
(696, 'RIVERS', 'OBIO/AKPOR'),
(697, 'RIVERS', 'OGBA/EGBEMA/NDONI'),
(698, 'RIVERS', 'OGU/BOLO'),
(699, 'RIVERS', 'OKRIKA'),
(700, 'RIVERS', 'OMUMA'),
(701, 'RIVERS', 'OPOBO/NKORO'),
(702, 'RIVERS', 'OYIGBO'),
(703, 'RIVERS', 'PORT HARCOURT'),
(704, 'RIVERS', 'TAI'),
(705, 'SOKOTO', 'BINJI'),
(706, 'SOKOTO', 'BODINGA'),
(707, 'SOKOTO', 'DANGE/SHUNI'),
(708, 'SOKOTO', 'GADA'),
(709, 'SOKOTO', 'GORONYO'),
(710, 'SOKOTO', 'GUDU'),
(711, 'SOKOTO', 'GWADABAWA'),
(712, 'SOKOTO', 'ILLELA'),
(713, 'SOKOTO', 'ISA'),
(714, 'SOKOTO', 'KWARE'),
(715, 'SOKOTO', 'KEBBE'),
(716, 'SOKOTO', 'RABAH'),
(717, 'SOKOTO', 'S/BIRNI'),
(718, 'SOKOTO', 'SHAGARI'),
(719, 'SOKOTO', 'SILAME'),
(720, 'SOKOTO', 'SOKOTO NORTH'),
(721, 'SOKOTO', 'SOKOTO SOUTH'),
(722, 'SOKOTO', 'TAMBUWAL'),
(723, 'SOKOTO', 'TANGAZA'),
(724, 'SOKOTO', 'TURETA'),
(725, 'SOKOTO', 'WAMAKKO'),
(726, 'SOKOTO', 'WURNO'),
(727, 'SOKOTO', 'YABO'),
(728, 'TARABA', 'ARDO KOLA'),
(729, 'TARABA', 'BALI'),
(730, 'TARABA', 'DONGA'),
(731, 'TARABA', 'GASHAKA'),
(732, 'TARABA', 'GASSOL'),
(733, 'TARABA', 'IBI'),
(734, 'TARABA', 'JALINGO'),
(735, 'TARABA', 'LAMIDO'),
(736, 'TARABA', 'KURMI'),
(737, 'TARABA', 'LAU'),
(738, 'TARABA', 'SARDAUNA'),
(739, 'TARABA', 'TAKUM'),
(740, 'TARABA', 'USSA'),
(741, 'TARABA', 'WUKARI'),
(742, 'TARABA', 'YORRO'),
(743, 'TARABA', 'ZING'),
(744, 'YOBE', 'BADE'),
(745, 'YOBE', 'BURSARI'),
(746, 'YOBE', 'DAMATURU'),
(747, 'YOBE', 'FIKA'),
(748, 'YOBE', 'FUNE'),
(749, 'YOBE', 'GEIDAM'),
(750, 'YOBE', 'GUJBA'),
(751, 'YOBE', 'GULANI'),
(752, 'YOBE', 'JAKUSKO'),
(753, 'YOBE', 'KARASUWA'),
(754, 'YOBE', 'MACHINA'),
(755, 'YOBE', 'NANGERE'),
(756, 'YOBE', 'NGURU'),
(757, 'YOBE', 'POTISKUM'),
(758, 'YOBE', 'TARMUWA'),
(759, 'YOBE', 'YUNUSARI'),
(760, 'YOBE', 'YUSUFARI'),
(761, 'ZAMFARA', 'ANKA'),
(762, 'ZAMFARA', 'BAKURA'),
(763, 'ZAMFARA', 'BIRNIN MAGAJI'),
(764, 'ZAMFARA', 'BUKKUYUM'),
(765, 'ZAMFARA', 'BUNGUDU'),
(766, 'ZAMFARA', 'GUMMI'),
(767, 'ZAMFARA', 'GUSAU'),
(768, 'ZAMFARA', 'KAURA NAMODA'),
(769, 'ZAMFARA', 'MARADUN'),
(770, 'ZAMFARA', 'MARU'),
(771, 'ZAMFARA', 'SHINKAFI'),
(772, 'ZAMFARA', 'TALATA MAFARA'),
(773, 'ZAMFARA', 'TSAFE'),
(774, 'ZAMFARA', 'ZURMI');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employee`
--

CREATE TABLE `tbl_employee` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `gender` varchar(10) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `age` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_employee`
--

INSERT INTO `tbl_employee` (`id`, `name`, `address`, `gender`, `designation`, `age`) VALUES
(1, 'Bruce Tom', '656 Edsel Road\r\nSherman Oaks, CA 91403', 'Male', 'Driver', 36),
(5, 'Clara Gilliam', '63 Woodridge Lane\r\nMemphis, TN 38138', 'Female', 'Programmer', 24),
(6, 'Barbra K. Hurley', '1241 Canis Heights Drive\r\nLos Angeles, CA 90017', 'Female', 'Service technician', 26),
(7, 'Antonio J. Forbes', '403 Snyder Avenue\r\nCharlotte, NC 28208', 'Male', 'Faller', 32),
(8, 'Charles D. Horst', '1636 Walnut Hill Drive\r\nCincinnati, OH 45202', 'Male', 'Financial investigator', 29),
(161, 'test1', 'test1 address', 'males', 'nothin', 22),
(162, 'test2', 'test2 address', 'female', 'staff', 33),
(163, 'test3user', 'test address', 'male', 'player', 25),
(164, 'test1', 'test1 address', 'males', 'nothin', 22),
(165, 'test2', 'test2 address', 'female', 'staff', 33),
(166, 'test3user', 'test address', 'male', 'player', 25);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fm_accounts_administrative`
--
ALTER TABLE `fm_accounts_administrative`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `fm_accounts_economic_segment`
--
ALTER TABLE `fm_accounts_economic_segment`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `fm_accounts_functional_segment`
--
ALTER TABLE `fm_accounts_functional_segment`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `fm_accounts_fund_segment`
--
ALTER TABLE `fm_accounts_fund_segment`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `fm_accounts_geo_segment`
--
ALTER TABLE `fm_accounts_geo_segment`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `fm_accounts_program_segment`
--
ALTER TABLE `fm_accounts_program_segment`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `fm_account_code_list`
--
ALTER TABLE `fm_account_code_list`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `fm_account_list`
--
ALTER TABLE `fm_account_list`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `fm_budget`
--
ALTER TABLE `fm_budget`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `fm_budgetactivity`
--
ALTER TABLE `fm_budgetactivity`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `fm_budgetactivitytable`
--
ALTER TABLE `fm_budgetactivitytable`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `fm_cashbook`
--
ALTER TABLE `fm_cashbook`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `fm_cashbookold`
--
ALTER TABLE `fm_cashbookold`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `fm_cashbookTemp`
--
ALTER TABLE `fm_cashbookTemp`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `fm_cashbook_accounts`
--
ALTER TABLE `fm_cashbook_accounts`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `fm_cashbook_accounts_budget`
--
ALTER TABLE `fm_cashbook_accounts_budget`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `fm_funders`
--
ALTER TABLE `fm_funders`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `fm_projectfunding`
--
ALTER TABLE `fm_projectfunding`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `fm_trail`
--
ALTER TABLE `fm_trail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fm_users`
--
ALTER TABLE `fm_users`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `statelga`
--
ALTER TABLE `statelga`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_employee`
--
ALTER TABLE `tbl_employee`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fm_accounts_administrative`
--
ALTER TABLE `fm_accounts_administrative`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `fm_accounts_economic_segment`
--
ALTER TABLE `fm_accounts_economic_segment`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `fm_accounts_functional_segment`
--
ALTER TABLE `fm_accounts_functional_segment`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `fm_accounts_fund_segment`
--
ALTER TABLE `fm_accounts_fund_segment`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `fm_accounts_geo_segment`
--
ALTER TABLE `fm_accounts_geo_segment`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `fm_accounts_program_segment`
--
ALTER TABLE `fm_accounts_program_segment`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `fm_account_code_list`
--
ALTER TABLE `fm_account_code_list`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;
--
-- AUTO_INCREMENT for table `fm_account_list`
--
ALTER TABLE `fm_account_list`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `fm_budget`
--
ALTER TABLE `fm_budget`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `fm_budgetactivity`
--
ALTER TABLE `fm_budgetactivity`
  MODIFY `ID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `fm_budgetactivitytable`
--
ALTER TABLE `fm_budgetactivitytable`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `fm_cashbook`
--
ALTER TABLE `fm_cashbook`
  MODIFY `ID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `fm_cashbookold`
--
ALTER TABLE `fm_cashbookold`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;
--
-- AUTO_INCREMENT for table `fm_cashbookTemp`
--
ALTER TABLE `fm_cashbookTemp`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `fm_cashbook_accounts`
--
ALTER TABLE `fm_cashbook_accounts`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `fm_cashbook_accounts_budget`
--
ALTER TABLE `fm_cashbook_accounts_budget`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `fm_funders`
--
ALTER TABLE `fm_funders`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `fm_projectfunding`
--
ALTER TABLE `fm_projectfunding`
  MODIFY `ID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `fm_trail`
--
ALTER TABLE `fm_trail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;
--
-- AUTO_INCREMENT for table `fm_users`
--
ALTER TABLE `fm_users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `statelga`
--
ALTER TABLE `statelga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=775;
--
-- AUTO_INCREMENT for table `tbl_employee`
--
ALTER TABLE `tbl_employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=167;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
