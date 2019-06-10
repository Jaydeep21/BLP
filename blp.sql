-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2019 at 08:46 AM
-- Server version: 5.7.21-log
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
(6, 'alcohol', '05-02-1992', '02-01-1967', '30'),
(6, 'cigarettes', '05-02-1999', '09-07-1233', '50'),
(6, 'tobacco', '05-03-1992', '10-02-2012', '20');

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
(6, 'antilla', 'permanent', 'sandust', 'hajiali'),
(6, 'sakes', 'local', '', ''),
(6, 'white house', 'local', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `clinic`
--

CREATE TABLE `clinic` (
  `cid` bigint(20) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `area_code` varchar(10) NOT NULL
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
(6, 1234567891),
(6, 9874561230);

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
  `did` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `dosage` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `drugs_prescribed`
--

INSERT INTO `drugs_prescribed` (`rid`, `did`, `type`, `start_date`, `end_date`, `dosage`) VALUES
(1, 100, 'something', '2019-03-20', '2019-03-21', '2gm');

-- --------------------------------------------------------

--
-- Table structure for table `family_history`
--

CREATE TABLE `family_history` (
  `pid` bigint(11) NOT NULL,
  `relation` varchar(20) NOT NULL,
  `disease` varchar(20) NOT NULL,
  `mmyy_diagnosis` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `family_history`
--

INSERT INTO `family_history` (`pid`, `relation`, `disease`, `mmyy_diagnosis`) VALUES
(6, 'sis', 'leprosy', '031998');

-- --------------------------------------------------------

--
-- Table structure for table `family_members`
--

CREATE TABLE `family_members` (
  `pid` bigint(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `age` int(11) NOT NULL,
  `relation` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `family_members`
--

INSERT INTO `family_members` (`pid`, `name`, `age`, `relation`) VALUES
(6, 'priyanka', 25, 'sis');

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
  `due_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `follow_up_record`
--

INSERT INTO `follow_up_record` (`fid`, `pid`, `clinical_notes`, `prescription`, `complaints`, `due_date`) VALUES
(1, 6, 'kuch nahi', 'nothing', 'nothing', '2019-03-08');

-- --------------------------------------------------------

--
-- Table structure for table `known_leprosy_contacts`
--

CREATE TABLE `known_leprosy_contacts` (
  `pid` bigint(20) NOT NULL,
  `type_leprosy` varchar(20) NOT NULL,
  `treatment` varchar(100) NOT NULL,
  `duration_treatment` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `known_leprosy_contacts`
--

INSERT INTO `known_leprosy_contacts` (`pid`, `type_leprosy`, `treatment`, `duration_treatment`) VALUES
(6, 'type1', 'xyz', 'march 2015');

-- --------------------------------------------------------

--
-- Table structure for table `leprosy_relations`
--

CREATE TABLE `leprosy_relations` (
  `pid` bigint(20) NOT NULL,
  `klpid` bigint(20) NOT NULL,
  `relation` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `medical_history`
--

CREATE TABLE `medical_history` (
  `pid` bigint(20) NOT NULL,
  `disease` varchar(100) NOT NULL,
  `mmyy_diagnosis` varchar(20) NOT NULL,
  `mmyy_curation` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `medical_history`
--

INSERT INTO `medical_history` (`pid`, `disease`, `mmyy_diagnosis`, `mmyy_curation`) VALUES
(6, 'cold', 'March 1998', 'March 2019');

-- --------------------------------------------------------

--
-- Table structure for table `obstetric_history`
--

CREATE TABLE `obstetric_history` (
  `pid` bigint(20) NOT NULL,
  `number_child` int(11) NOT NULL,
  `gender_child` varchar(10) NOT NULL,
  `mmmyy_birth` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `obstetric_history`
--

INSERT INTO `obstetric_history` (`pid`, `number_child`, `gender_child`, `mmmyy_birth`) VALUES
(6, 12, 'female', 'March 1998');

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
(6, 'sion hospital', 'cocaine', 'march 1998', 'march 2019', '2gm');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `pid` bigint(20) NOT NULL,
  `referred` tinyint(1) NOT NULL,
  `patient_code` varchar(20) NOT NULL,
  `diagnosed` tinyint(1) NOT NULL,
  `allergy` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`pid`, `referred`, `patient_code`, `diagnosed`, `allergy`) VALUES
(6, 1, 'pa12', 5, 'itching');

-- --------------------------------------------------------

--
-- Table structure for table `peripheral_nerves`
--

CREATE TABLE `peripheral_nerves` (
  `tid` bigint(20) NOT NULL,
  `nerves` varchar(20) NOT NULL,
  `thickness` varchar(20) NOT NULL,
  `tenderness` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `person_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `person_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `economical_status` char(10) DEFAULT NULL,
  `caste` char(10) DEFAULT NULL,
  `age` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`pid`, `fname`, `mname`, `lname`, `dob`, `sex`, `aadhar`, `occupation`, `person_created`, `person_updated`, `economical_status`, `caste`, `age`) VALUES
(6, 'parval', NULL, NULL, '1998-03-05', 'female', 123456789098, 'teaacher', '2019-03-15 05:45:06', '2019-01-30 05:59:04', 'bade log', 'anni', 60),
(7, 'dhruv', NULL, NULL, '2018-04-06', 'male', 123454321098, NULL, '2019-01-30 06:24:44', '2019-01-30 06:24:44', '', '', NULL),
(8, 'milind', NULL, NULL, '2019-01-01', 'male', 890765432123, NULL, '2019-01-30 06:34:01', '2019-01-30 06:34:01', '', '', NULL),
(9, 'keval', NULL, NULL, '2019-06-25', 'male', 678905432123, NULL, '2019-01-30 06:38:14', '2019-01-30 06:38:14', '', '', NULL),
(10, 'ankita', NULL, NULL, '2019-03-13', 'female', 123454321678, NULL, '2019-01-30 06:38:54', '2019-01-30 06:38:54', '', '', NULL),
(11, 'shekhar', NULL, NULL, '2018-08-14', 'male', 789043215678, NULL, '2019-01-30 06:41:10', '2019-01-30 06:41:10', '', '', NULL),
(12, 'huzefa', NULL, NULL, '2019-01-09', 'male', 987631235765, NULL, '2019-01-30 08:03:44', '2019-01-30 08:03:44', '', '', NULL),
(13, 'pooja', NULL, NULL, '2019-07-28', 'male', 129384756473, NULL, '2019-01-30 08:05:03', '2019-01-30 08:05:03', '', '', NULL),
(14, 'Reema', NULL, NULL, '2019-01-02', 'female', 123456789098, NULL, '2019-01-30 08:50:17', '2019-01-30 08:50:17', '', '', NULL),
(15, 'jaydeep', NULL, NULL, '2019-09-17', 'male', 890765432134, NULL, '2019-02-01 09:35:37', '2019-02-01 09:35:37', '', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pregnant_since`
--

CREATE TABLE `pregnant_since` (
  `pid` bigint(20) NOT NULL,
  `mmyy_pregnant_since` varchar(20) NOT NULL,
  `sys_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(1, 'itching', 'machar bahaut hai');

-- --------------------------------------------------------

--
-- Table structure for table `record`
--

CREATE TABLE `record` (
  `rid` bigint(20) NOT NULL,
  `pid` bigint(20) NOT NULL,
  `date_attend` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `record`
--

INSERT INTO `record` (`rid`, `pid`, `date_attend`) VALUES
(1, 6, '2019-03-01 00:00:00'),
(2, 14, '2019-03-02 00:00:00'),
(3, 15, '2019-03-03 00:00:00');

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
(6, 'prasad', 'sion hospital');

-- --------------------------------------------------------

--
-- Table structure for table `sensory_test`
--

CREATE TABLE `sensory_test` (
  `tid` bigint(20) NOT NULL,
  `pinprick` varchar(20) NOT NULL,
  `touch` varchar(20) NOT NULL,
  `temperature` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sensory_test`
--

INSERT INTO `sensory_test` (`tid`, `pinprick`, `touch`, `temperature`) VALUES
(1, 'yes', 'no', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `smear_test`
--

CREATE TABLE `smear_test` (
  `rid` bigint(20) NOT NULL,
  `site` varchar(50) NOT NULL,
  `mi` float NOT NULL,
  `bi` float NOT NULL,
  `pid` bigint(20) NOT NULL,
  `due_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `smear_test`
--

INSERT INTO `smear_test` (`rid`, `site`, `mi`, `bi`, `pid`, `due_date`) VALUES
(1, 'hand', 10, 10, 6, '2019-03-08');

-- --------------------------------------------------------

--
-- Table structure for table `treatment_record`
--

CREATE TABLE `treatment_record` (
  `pid` bigint(20) NOT NULL,
  `tid` bigint(20) NOT NULL,
  `opthalmic_involvement` varchar(50) NOT NULL,
  `eyes` varchar(50) NOT NULL,
  `disability` varchar(50) NOT NULL,
  `motor_testing` varchar(50) NOT NULL,
  `skin_lesions` varchar(50) NOT NULL,
  `complaints` varchar(50) NOT NULL,
  `result` varchar(50) NOT NULL,
  `type_diagnosed` varchar(50) NOT NULL,
  `examiner` varchar(50) NOT NULL,
  `symptoms` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `treatment_record`
--

INSERT INTO `treatment_record` (`pid`, `tid`, `opthalmic_involvement`, `eyes`, `disability`, `motor_testing`, `skin_lesions`, `complaints`, `result`, `type_diagnosed`, `examiner`, `symptoms`) VALUES
(6, 1, 'no', 'hai', 'no', 'no', 'no', 'yes', 'good', 'type1', 'xyz', 'cold'),
(14, 2, 'no', 'no', 'no', 'no', 'no', 'no', 'false', 'no', 'pooja', 'headache');

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
-- Indexes for table `family_history`
--
ALTER TABLE `family_history`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `family_members`
--
ALTER TABLE `family_members`
  ADD PRIMARY KEY (`pid`,`name`,`age`,`relation`);

--
-- Indexes for table `follow_up_record`
--
ALTER TABLE `follow_up_record`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `known_leprosy_contacts`
--
ALTER TABLE `known_leprosy_contacts`
  ADD PRIMARY KEY (`pid`);

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
  ADD PRIMARY KEY (`tid`,`nerves`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `pregnant_since`
--
ALTER TABLE `pregnant_since`
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
  ADD PRIMARY KEY (`rid`,`site`),
  ADD KEY `smear_test_ibfk_1` (`pid`);

--
-- Indexes for table `treatment_record`
--
ALTER TABLE `treatment_record`
  ADD PRIMARY KEY (`tid`),
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
-- AUTO_INCREMENT for table `follow_up_record`
--
ALTER TABLE `follow_up_record`
  MODIFY `fid` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `person`
--
ALTER TABLE `person`
  MODIFY `pid` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

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
-- Constraints for table `drugs_prescribed`
--
ALTER TABLE `drugs_prescribed`
  ADD CONSTRAINT `drugs_prescribed_ibfk_1` FOREIGN KEY (`rid`) REFERENCES `record` (`rid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `drugs_prescribed_ibfk_2` FOREIGN KEY (`did`) REFERENCES `drugs` (`did`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `family_history`
--
ALTER TABLE `family_history`
  ADD CONSTRAINT `family_history_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `person` (`pid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `family_members`
--
ALTER TABLE `family_members`
  ADD CONSTRAINT `family_members_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `person` (`pid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `follow_up_record`
--
ALTER TABLE `follow_up_record`
  ADD CONSTRAINT `asd` FOREIGN KEY (`fid`) REFERENCES `record` (`rid`);

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
-- Constraints for table `obstetric_history`
--
ALTER TABLE `obstetric_history`
  ADD CONSTRAINT `obstetric_history_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `person` (`pid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `past_drugs`
--
ALTER TABLE `past_drugs`
  ADD CONSTRAINT `past_drugs_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `person` (`pid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `patient`
--
ALTER TABLE `patient`
  ADD CONSTRAINT `patient_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `person` (`pid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `peripheral_nerves`
--
ALTER TABLE `peripheral_nerves`
  ADD CONSTRAINT `peripheral_nerves_ibfk_1` FOREIGN KEY (`tid`) REFERENCES `treatment_record` (`tid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pregnant_since`
--
ALTER TABLE `pregnant_since`
  ADD CONSTRAINT `pregnant_since_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `person` (`pid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reactions`
--
ALTER TABLE `reactions`
  ADD CONSTRAINT `reactions_ibfk_1` FOREIGN KEY (`rid`) REFERENCES `record` (`rid`);

--
-- Constraints for table `referred`
--
ALTER TABLE `referred`
  ADD CONSTRAINT `referred_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `person` (`pid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sensory_test`
--
ALTER TABLE `sensory_test`
  ADD CONSTRAINT `sensory_test_ibfk_1` FOREIGN KEY (`tid`) REFERENCES `treatment_record` (`tid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `smear_test`
--
ALTER TABLE `smear_test`
  ADD CONSTRAINT `smear_test_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `person` (`pid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `treatment_record`
--
ALTER TABLE `treatment_record`
  ADD CONSTRAINT `treatment_record_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `person` (`pid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `treatment_record_ibfk_2` FOREIGN KEY (`tid`) REFERENCES `record` (`rid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
