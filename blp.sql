-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2019 at 09:06 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blp`
--

-- --------------------------------------------------------

--
-- Table structure for table `addiction`
--

CREATE TABLE `addiction` (
  `pid` bigint(20) NOT NULL,
  `addiction_type` varchar(50) NOT NULL,
  `addiction_start` varchar(20) NOT NULL,
  `addiction_end` varchar(20) NOT NULL,
  `addiction_frequency` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `addiction`
--

INSERT INTO `addiction` (`pid`, `addiction_type`, `addiction_start`, `addiction_end`, `addiction_frequency`) VALUES
(6, 'cigarette', '1996-04-18', '2013-03-08', '40'),
(9, 'cigarette', '1996-04-19', '2013-03-05', '20'),
(6, 'tobacco', '1996-04-19', '2000-05-12', '30');

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `pid` bigint(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `address_type` varchar(50) NOT NULL,
  `paddress` varchar(50) NOT NULL,
  `laddress` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`pid`, `address`, `address_type`, `paddress`, `laddress`) VALUES
(6, 'mas', 'permanent', 'london', 'dome'),
(6, 'paris', 'local', 'anitlla', 'warangal');

-- --------------------------------------------------------

--
-- Table structure for table `clinic`
--

CREATE TABLE `clinic` (
  `cid` bigint(20) NOT NULL,
  `cname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `pid` bigint(11) NOT NULL,
  `mobile` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`pid`, `mobile`) VALUES
(6, 1234556789),
(6, 1234567890),
(9, 1234567789);

-- --------------------------------------------------------

--
-- Table structure for table `disability`
--

CREATE TABLE `disability` (
  `rid` bigint(20) NOT NULL,
  `grade` int(1) NOT NULL DEFAULT '0',
  `disability_area` varchar(30) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `disability`
--

INSERT INTO `disability` (`rid`, `grade`, `disability_area`) VALUES
(1, 2, 'Hands,Wrist Drop,Right');

-- --------------------------------------------------------

--
-- Table structure for table `drugs`
--

CREATE TABLE `drugs` (
  `did` int(11) NOT NULL,
  `dname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `drugs`
--

INSERT INTO `drugs` (`did`, `dname`) VALUES
(100, 'Paracetamol');

-- --------------------------------------------------------

--
-- Table structure for table `drugs_prescribed`
--

CREATE TABLE `drugs_prescribed` (
  `rid` bigint(20) NOT NULL,
  `did` int(11) DEFAULT NULL,
  `type` varchar(20) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `dosage` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `drugs_prescribed`
--

INSERT INTO `drugs_prescribed` (`rid`, `did`, `type`, `start_date`, `end_date`, `dosage`) VALUES
(1, 100, 'something', '2019-06-12', '2019-06-26', '2gm');

-- --------------------------------------------------------

--
-- Table structure for table `family_members`
--

CREATE TABLE `family_members` (
  `pid` bigint(20) NOT NULL,
  `fm_relation` varchar(50) NOT NULL DEFAULT 'unknown',
  `fm_name` varchar(30) NOT NULL DEFAULT 'unknown',
  `fm_age` int(3) NOT NULL DEFAULT '0',
  `fm_disease` varchar(30) DEFAULT NULL,
  `fm_diagnosis` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `family_members`
--

INSERT INTO `family_members` (`pid`, `fm_relation`, `fm_name`, `fm_age`, `fm_disease`, `fm_diagnosis`) VALUES
(6, 'sis', 'priya', 20, 'leprosy', 'start stage');

-- --------------------------------------------------------

--
-- Table structure for table `follow_up_record`
--

CREATE TABLE `follow_up_record` (
  `fid` bigint(20) NOT NULL,
  `pid` bigint(20) NOT NULL,
  `clinical_notes` varchar(120) DEFAULT NULL,
  `prescription` varchar(120) DEFAULT NULL,
  `complaints` varchar(100) NOT NULL,
  `due_date` date DEFAULT NULL,
  `appointment_for` varchar(30) DEFAULT NULL,
  `date_for_next_appointment` date DEFAULT NULL,
  `further_observations` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `follow_up_record`
--

INSERT INTO `follow_up_record` (`fid`, `pid`, `clinical_notes`, `prescription`, `complaints`, `due_date`, `appointment_for`, `date_for_next_appointment`, `further_observations`) VALUES
(1, 6, 'kuch nahi', 'nothing', 'nothing', '2019-03-08', 'furtherdiagnosis', '2019-06-20', 'present nothing');

-- --------------------------------------------------------

--
-- Table structure for table `known_leprosy_contacts`
--

CREATE TABLE `known_leprosy_contacts` (
  `pid` bigint(20) NOT NULL,
  `kname` varchar(50) NOT NULL,
  `relation` varchar(50) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `known_leprosy_contacts`
--

INSERT INTO `known_leprosy_contacts` (`pid`, `kname`, `relation`, `contact`, `address`, `description`) VALUES
(6, 'keval', 'sis', 1234556677, 'uganda', 'nothing'),
(6, 'jaya', 'ghhh', 1234556644, 'nowhere', 'kuchnahi');

-- --------------------------------------------------------

--
-- Table structure for table `leprosy_relations`
--

CREATE TABLE `leprosy_relations` (
  `pid` bigint(20) NOT NULL,
  `klpid` bigint(20) NOT NULL,
  `relation` varchar(20) NOT NULL DEFAULT 'unknown'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `medical_history`
--

CREATE TABLE `medical_history` (
  `pid` bigint(20) NOT NULL,
  `disease` varchar(100) DEFAULT NULL,
  `mmyy_diagnosis` varchar(20) DEFAULT NULL,
  `mmyy_curation` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `medical_history`
--

INSERT INTO `medical_history` (`pid`, `disease`, `mmyy_diagnosis`, `mmyy_curation`) VALUES
(6, 'cold', 'march 1998', 'march 2018');

-- --------------------------------------------------------

--
-- Table structure for table `next_appointment`
--

CREATE TABLE `next_appointment` (
  `pid` bigint(11) NOT NULL,
  `appointment_reason` varchar(50) NOT NULL,
  `appointment_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `next_appointment`
--

INSERT INTO `next_appointment` (`pid`, `appointment_reason`, `appointment_date`) VALUES
(6, 'furtherdiagnosis', '2019-06-20');

-- --------------------------------------------------------

--
-- Table structure for table `obstetric_history`
--

CREATE TABLE `obstetric_history` (
  `pid` bigint(20) NOT NULL,
  `mmyy_pregnant` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `obstetric_history`
--

INSERT INTO `obstetric_history` (`pid`, `mmyy_pregnant`) VALUES
(6, 'no');

-- --------------------------------------------------------

--
-- Table structure for table `past_drugs`
--

CREATE TABLE `past_drugs` (
  `pid` bigint(20) NOT NULL,
  `hospital` varchar(50) NOT NULL,
  `drugs` varchar(20) NOT NULL,
  `mmyy_start` varchar(20) NOT NULL,
  `mmyy_end` varchar(20) NOT NULL,
  `dosage` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `past_drugs`
--

INSERT INTO `past_drugs` (`pid`, `hospital`, `drugs`, `mmyy_start`, `mmyy_end`, `dosage`) VALUES
(6, 'global', 'cocaine', '1998-09-05', '2015-02-01', '2gm');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `pid` bigint(20) NOT NULL,
  `clinic` tinyint(1) NOT NULL,
  `patient_code` varchar(20) NOT NULL,
  `diagnosed` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`pid`, `clinic`, `patient_code`, `diagnosed`) VALUES
(6, 1, 'pa12', 5);

-- --------------------------------------------------------

--
-- Table structure for table `peripheral_nerves`
--

CREATE TABLE `peripheral_nerves` (
  `rid` bigint(20) NOT NULL,
  `nerves` varchar(20) NOT NULL,
  `thickness` varchar(20) NOT NULL,
  `tenderness` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `peripheral_nerves`
--

INSERT INTO `peripheral_nerves` (`rid`, `nerves`, `thickness`, `tenderness`) VALUES
(1, 'Great Auricular', '', ''),
(1, 'Lateral Popliteal', '', ''),
(1, 'Medial Cutaneous', '', ''),
(1, 'Posterior Tibial', 'Thicken', ''),
(1, 'Radial Cutaneous', '', 'Tender'),
(1, 'Superficial Personal', 'Thicken', ''),
(1, 'Supra-orbital', '', 'Tender'),
(1, 'Sural Nerve', '', 'Tender'),
(1, 'Ulnar', 'Thicken', '');

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `pid` bigint(20) NOT NULL,
  `fname` varchar(30) DEFAULT NULL,
  `mname` varchar(30) DEFAULT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `sex` char(11) DEFAULT NULL,
  `aadhar` bigint(12) DEFAULT NULL,
  `occupation` varchar(30) DEFAULT NULL,
  `person_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `person_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `economical_status` char(10) DEFAULT NULL,
  `caste` char(10) DEFAULT NULL,
  `age` int(3) DEFAULT NULL,
  `allergy` varchar(50) NOT NULL,
  `clinic` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`pid`, `fname`, `mname`, `lname`, `dob`, `sex`, `aadhar`, `occupation`, `person_created`, `person_updated`, `economical_status`, `caste`, `age`, `allergy`, `clinic`) VALUES
(6, 'parval', NULL, NULL, '1998-03-05', 'female', 123456789098, 'asdfg', '2019-01-30 05:59:04', '2019-06-25 17:48:26', 'BLP', 'Others', 16, 'nothing', 0),
(7, 'dhruv', NULL, NULL, '2018-04-06', 'male', 123454321098, NULL, '2019-01-30 06:24:44', '2019-01-30 06:24:44', '', '', NULL, '', 0),
(8, 'milind', NULL, NULL, '2019-01-01', 'male', 890765432123, NULL, '2019-01-30 06:34:01', '2019-01-30 06:34:01', '', '', NULL, '', 0),
(9, 'keval', NULL, NULL, '2019-06-25', 'male', 678905432123, NULL, '2019-01-30 06:38:14', '2019-01-30 06:38:14', '', '', NULL, '', 0),
(10, 'ankita', NULL, NULL, '2019-03-13', 'female', 123454321678, NULL, '2019-01-30 06:38:54', '2019-01-30 06:38:54', '', '', NULL, '', 0),
(11, 'shekhar', NULL, NULL, '2018-08-14', 'male', 789043215678, NULL, '2019-01-30 06:41:10', '2019-01-30 06:41:10', '', '', NULL, '', 0),
(12, 'huzefa', NULL, NULL, '2019-01-09', 'male', 987631235765, NULL, '2019-01-30 08:03:44', '2019-01-30 08:03:44', '', '', NULL, '', 0),
(13, 'pooja', NULL, NULL, '2019-07-28', 'male', 129384756473, NULL, '2019-01-30 08:05:03', '2019-01-30 08:05:03', '', '', NULL, '', 0),
(14, 'Reema', NULL, NULL, '2019-01-02', 'female', 123456789098, NULL, '2019-01-30 08:50:17', '2019-01-30 08:50:17', '', '', NULL, '', 0),
(15, 'jaydeep', NULL, NULL, '2019-09-17', 'male', 890765432134, NULL, '2019-02-01 09:35:37', '2019-02-01 09:35:37', '', '', NULL, '', 0),
(34, 'poojab', NULL, NULL, '2019-06-26', 'male', 231221, 'adsdas', '2019-06-10 06:32:15', '2019-06-17 07:22:26', 'BLP', 'ST', 0, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `reactions`
--

CREATE TABLE `reactions` (
  `rid` bigint(20) NOT NULL,
  `type_reaction` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reactions`
--

INSERT INTO `reactions` (`rid`, `type_reaction`, `description`) VALUES
(1, 'Type 1', 'no sensation');

-- --------------------------------------------------------

--
-- Table structure for table `record`
--

CREATE TABLE `record` (
  `rid` bigint(20) NOT NULL,
  `pid` bigint(20) NOT NULL,
  `date_attend` datetime DEFAULT CURRENT_TIMESTAMP,
  `examiner` varchar(50) DEFAULT 'unknown'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `record`
--

INSERT INTO `record` (`rid`, `pid`, `date_attend`, `examiner`) VALUES
(1, 6, '2019-06-17 11:52:30', 'pai');

-- --------------------------------------------------------

--
-- Table structure for table `referred`
--

CREATE TABLE `referred` (
  `pid` bigint(20) NOT NULL,
  `doctor_name` varchar(50) NOT NULL,
  `hospital` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `referred`
--

INSERT INTO `referred` (`pid`, `doctor_name`, `hospital`) VALUES
(6, 'har', 'global');

-- --------------------------------------------------------

--
-- Table structure for table `sensory_test`
--

CREATE TABLE `sensory_test` (
  `tid` bigint(20) NOT NULL,
  `pinprick` varchar(20) NOT NULL,
  `touch` varchar(20) NOT NULL,
  `temperature` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sensory_test`
--

INSERT INTO `sensory_test` (`tid`, `pinprick`, `touch`, `temperature`) VALUES
(1, 'Partial', 'Absent', 'Hot Present,Cold Absent');

-- --------------------------------------------------------

--
-- Table structure for table `smear_test`
--

CREATE TABLE `smear_test` (
  `rid` bigint(20) NOT NULL,
  `site` varchar(50) NOT NULL,
  `pid` bigint(20) NOT NULL,
  `mi` float NOT NULL,
  `bi` float NOT NULL,
  `due_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `smear_test`
--

INSERT INTO `smear_test` (`rid`, `site`, `pid`, `mi`, `bi`, `due_date`) VALUES
(1, 'hand', 6, 10, 10, '2019-03-08');

-- --------------------------------------------------------

--
-- Table structure for table `treatment_record`
--

CREATE TABLE `treatment_record` (
  `pid` bigint(20) NOT NULL,
  `rid` bigint(20) NOT NULL DEFAULT '0',
  `opthalmic_involvement` varchar(50) DEFAULT NULL,
  `eyes` varchar(50) DEFAULT NULL,
  `skin_lesions` varchar(50) DEFAULT NULL,
  `result` varchar(50) DEFAULT NULL,
  `type_diagnosed` varchar(50) DEFAULT NULL,
  `symptoms` varchar(100) DEFAULT NULL,
  `other_mdt_courses` varchar(50) DEFAULT NULL,
  `t_notes` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `treatment_record`
--

INSERT INTO `treatment_record` (`pid`, `rid`, `opthalmic_involvement`, `eyes`, `skin_lesions`, `result`, `type_diagnosed`, `symptoms`, `other_mdt_courses`, `t_notes`) VALUES
(6, 1, 'no', 'yes', 'no', 'good', 'MB,TT', 'cold', 'no', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` bigint(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `password`) VALUES
(1, 'a@a.a', 'asd'),
(2, 'asd@asd.asd', 'asdasd'),
(3, 'rahulgupta', 'rahul123'),
(4, '', 'parval123'),
(5, 'Parva', 'Lika'),
(6, 'Dhruv', 'asdd'),
(7, 'Dhruv', 'asdsad'),
(8, 'Dhruv', 'ass'),
(9, 'Dhruv', 'asdasd'),
(10, 'Jalpa Mehta', 'jalpa123'),
(11, 'pooja', 'bedi'),
(12, 'pujan', 'baydi'),
(13, 'Topi', 'Shekhar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addiction`
--
ALTER TABLE `addiction`
  ADD PRIMARY KEY (`addiction_type`,`pid`),
  ADD KEY `pid` (`pid`);

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`pid`,`address`);

--
-- Indexes for table `clinic`
--
ALTER TABLE `clinic`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`pid`,`mobile`);

--
-- Indexes for table `disability`
--
ALTER TABLE `disability`
  ADD PRIMARY KEY (`rid`,`grade`,`disability_area`);

--
-- Indexes for table `drugs`
--
ALTER TABLE `drugs`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `drugs_prescribed`
--
ALTER TABLE `drugs_prescribed`
  ADD PRIMARY KEY (`rid`),
  ADD KEY `did` (`did`);

--
-- Indexes for table `family_members`
--
ALTER TABLE `family_members`
  ADD PRIMARY KEY (`pid`,`fm_relation`,`fm_name`,`fm_age`);

--
-- Indexes for table `follow_up_record`
--
ALTER TABLE `follow_up_record`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `known_leprosy_contacts`
--
ALTER TABLE `known_leprosy_contacts`
  ADD KEY `pid` (`pid`);

--
-- Indexes for table `leprosy_relations`
--
ALTER TABLE `leprosy_relations`
  ADD PRIMARY KEY (`pid`,`klpid`),
  ADD KEY `klpid` (`klpid`);

--
-- Indexes for table `medical_history`
--
ALTER TABLE `medical_history`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `next_appointment`
--
ALTER TABLE `next_appointment`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `obstetric_history`
--
ALTER TABLE `obstetric_history`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `past_drugs`
--
ALTER TABLE `past_drugs`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`pid`),
  ADD UNIQUE KEY `patient_code` (`patient_code`);

--
-- Indexes for table `peripheral_nerves`
--
ALTER TABLE `peripheral_nerves`
  ADD PRIMARY KEY (`rid`,`nerves`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `reactions`
--
ALTER TABLE `reactions`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `record`
--
ALTER TABLE `record`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `referred`
--
ALTER TABLE `referred`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `sensory_test`
--
ALTER TABLE `sensory_test`
  ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `smear_test`
--
ALTER TABLE `smear_test`
  ADD PRIMARY KEY (`rid`,`site`);

--
-- Indexes for table `treatment_record`
--
ALTER TABLE `treatment_record`
  ADD PRIMARY KEY (`rid`),
  ADD KEY `treatment_record_ibfk_1` (`pid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `drugs`
--
ALTER TABLE `drugs`
  MODIFY `did` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `follow_up_record`
--
ALTER TABLE `follow_up_record`
  MODIFY `fid` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `person`
--
ALTER TABLE `person`
  MODIFY `pid` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `record`
--
ALTER TABLE `record`
  MODIFY `rid` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `addiction`
--
ALTER TABLE `addiction`
  ADD CONSTRAINT `addiction_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `person` (`pid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `address_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `person` (`pid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `contact`
--
ALTER TABLE `contact`
  ADD CONSTRAINT `contact_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `person` (`pid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `disability`
--
ALTER TABLE `disability`
  ADD CONSTRAINT `disability_ibfk_1` FOREIGN KEY (`rid`) REFERENCES `record` (`rid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `drugs_prescribed`
--
ALTER TABLE `drugs_prescribed`
  ADD CONSTRAINT `drugs_prescribed_ibfk_3` FOREIGN KEY (`rid`) REFERENCES `record` (`rid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `drugs_prescribed_ibfk_4` FOREIGN KEY (`did`) REFERENCES `drugs` (`did`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `family_members`
--
ALTER TABLE `family_members`
  ADD CONSTRAINT `family_members_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `person` (`pid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `follow_up_record`
--
ALTER TABLE `follow_up_record`
  ADD CONSTRAINT `follow_up_record_ibfk_1` FOREIGN KEY (`fid`) REFERENCES `record` (`rid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `known_leprosy_contacts`
--
ALTER TABLE `known_leprosy_contacts`
  ADD CONSTRAINT `known_leprosy_contacts_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `person` (`pid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `leprosy_relations`
--
ALTER TABLE `leprosy_relations`
  ADD CONSTRAINT `leprosy_relations_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `person` (`pid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `leprosy_relations_ibfk_2` FOREIGN KEY (`klpid`) REFERENCES `person` (`pid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `medical_history`
--
ALTER TABLE `medical_history`
  ADD CONSTRAINT `medical_history_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `person` (`pid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `next_appointment`
--
ALTER TABLE `next_appointment`
  ADD CONSTRAINT `next_appointment_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `person` (`pid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `obstetric_history`
--
ALTER TABLE `obstetric_history`
  ADD CONSTRAINT `obstetric_history_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `person` (`pid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `patient`
--
ALTER TABLE `patient`
  ADD CONSTRAINT `patient_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `person` (`pid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `peripheral_nerves`
--
ALTER TABLE `peripheral_nerves`
  ADD CONSTRAINT `peripheral_nerves_ibfk_1` FOREIGN KEY (`rid`) REFERENCES `record` (`rid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reactions`
--
ALTER TABLE `reactions`
  ADD CONSTRAINT `reactions_ibfk_1` FOREIGN KEY (`rid`) REFERENCES `record` (`rid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `referred`
--
ALTER TABLE `referred`
  ADD CONSTRAINT `referred_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `person` (`pid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sensory_test`
--
ALTER TABLE `sensory_test`
  ADD CONSTRAINT `sensory_test_ibfk_1` FOREIGN KEY (`tid`) REFERENCES `treatment_record` (`rid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `smear_test`
--
ALTER TABLE `smear_test`
  ADD CONSTRAINT `smear_test_ibfk_1` FOREIGN KEY (`rid`) REFERENCES `record` (`rid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `treatment_record`
--
ALTER TABLE `treatment_record`
  ADD CONSTRAINT `treatment_record_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `person` (`pid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `treatment_record_ibfk_2` FOREIGN KEY (`rid`) REFERENCES `record` (`rid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
