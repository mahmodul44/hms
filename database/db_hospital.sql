-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2020 at 10:51 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `accountmanager`
--

CREATE TABLE `accountmanager` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(10) UNSIGNED NOT NULL,
  `appointment_id` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `appointmentdate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `branch` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `speciality` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doctor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shift` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `appointment_id`, `appointmentdate`, `branch`, `speciality`, `doctor`, `shift`, `name`, `mobile`, `address`, `age`, `gender`, `created_at`, `updated_at`) VALUES
(21, '202003001', '2020-03-12', 'Kollyanpur', 'Nuorology', 'Dr.Belal Khan', 'evening', 'rimon', '01675238438', 'kallyanpur', 24, 'Male', '2020-06-15 09:49:42', NULL),
(24, '202003002', '2020-03-28', 'mirpur', 'Dental', 'Dr. Zesika Hayat', 'evening', 'Kawser', '018224128', 'kustia', 23, 'male', '2020-06-07 04:04:59', NULL),
(27, '202003005', '2020-06-07', 'Mirpur', 'Nuorology', 'Dr.Belal Khan', 'Evening', 'Mst.ritu khan', '019324234', 'Domar', 25, 'Female', '2020-06-06 12:31:59', NULL),
(28, '202003006', '2020-06-07', 'Kollyanpur', 'pathology', 'Dr. Zesika Hayat', 'Morning', 'mst. rabeya khatun', '078453422', 'kollayanpur', 34, 'Female', '2020-06-06 12:46:58', NULL);

--
-- Triggers `appointment`
--
DELIMITER $$
CREATE TRIGGER `bfr_ins_appointment` BEFORE INSERT ON `appointment` FOR EACH ROW BEGIN
DECLARE vr_appointment_id int(20);
SELECT ifnull(MAX(appointment_id)+1,date_format(now(),'%Y%m001')) INTO vr_appointment_id FROM appointment;
SET new.appointment_id = vr_appointment_id;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `bed_assign`
--

CREATE TABLE `bed_assign` (
  `id` int(10) UNSIGNED NOT NULL,
  `serial` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `patient_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bed_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `assign_date` date DEFAULT NULL,
  `discharge_date` date DEFAULT NULL,
  `price` decimal(10,0) DEFAULT NULL,
  `assign_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bed_assign`
--

INSERT INTO `bed_assign` (`id`, `serial`, `patient_id`, `bed_id`, `description`, `assign_date`, `discharge_date`, `price`, `assign_by`, `status`, `created_at`, `updated_at`) VALUES
(14, NULL, '202003003', NULL, 'ttttt', '2020-06-18', '2020-06-19', '2000', 'rimon', '1', '2020-06-29 13:19:50', NULL),
(16, NULL, '202003017', NULL, 'saass', '2020-06-29', '2020-06-30', '1200', 'rimon', '1', '2020-07-02 00:50:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deptname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `image`, `deptname`, `status`, `description`, `created_at`, `updated_at`) VALUES
(7, 'dept2.jpg', 'Gynaecology', 'Active', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ipsum.....', '2020-06-02 12:05:25', '2020-07-01 12:45:28'),
(8, 'dept3.png', 'Nuorology', 'Active', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ipsum.....', '2020-06-02 12:24:51', '2020-07-01 12:45:36'),
(9, 'download (2).jpg', 'Pathology', 'Active', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ipsum.....', '2020-06-02 22:29:52', '2020-07-01 12:45:44'),
(10, 'download (1).jpg', 'Dental', 'Active', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ipsum.....', '2020-06-06 13:50:02', '2020-07-01 12:45:51'),
(11, 'download (3).jpg', 'Microbiology Department', 'Active', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ipsum.....', '2020-07-01 12:43:59', '2020-07-05 12:17:19'),
(12, 'download (4).jpg', 'General Surgary', 'Active', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ipsum.....', '2020-07-01 23:12:03', '2020-07-01 23:12:14');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int(10) UNSIGNED NOT NULL,
  `doctor_id` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bloodGroup` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `degination` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `biography` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `education` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `doctor_id`, `dname`, `email`, `mobile`, `password`, `address`, `gender`, `bloodGroup`, `dob`, `degination`, `department`, `biography`, `education`, `image`, `created_at`, `updated_at`) VALUES
(11, '202003008', 'Dr. Zesika Hayat', 'zesika@gmail.com', '01239878454', '12345678', 'sdddddddd', 'Female', 'B+', '1996-05-26', 'Assistant Professor', 'Nuorology', 'fsfsfsfs', 'M.B.B.S,FCFS,Pharma.D,CCFA,NFDA', 'd4.jpg', '2020-06-27 00:21:00', NULL),
(12, '202003009', 'Dr.Murtaza', 'murtaza@gmail.com', '12345678', '12345678', '56/C, East Bankuraz,North City', 'Male', 'B+', '1993-07-01', 'Professor', 'Nuorology', 'Write about doctor in here.doctor short biography.', 'MBBS,FCCS,DPD,ORCH(NEU),MCCCO', 'd.jpg', '2020-07-05 12:06:35', NULL),
(13, '202003010', 'Dr. Elvera', 'elvera@gmail.com', '12345678', '12345678', '2/3,south rajabazar,dhaka', 'Male', 'B+', '1995-07-01', 'MBBS', 'Gynaecology', 'write short biography for Elvera', 'MBBS,FCCS,ORCH(NEU)', 'a1.jpg', '2020-07-05 13:38:45', NULL),
(14, '202003011', 'Dr.Jesi Akter', 'jesi@gmail.com', '12345678', '12345678', '32/2,Gulshan,Dhaka', 'Female', 'O+', '1995-06-06', 'Assistant Professor', 'Pathology', 'write short biography for Dr.jesi', 'FCFS,Pharma.D,CCFA,NFDA', 'd5.jpg', '2020-07-05 13:38:48', NULL);

--
-- Triggers `doctor`
--
DELIMITER $$
CREATE TRIGGER `bfr_ins_doctor` BEFORE INSERT ON `doctor` FOR EACH ROW BEGIN
DECLARE vr_doctor_id int(20);
SELECT ifnull(MAX(doctor_id)+1,date_format(now(),'%Y%m001')) INTO vr_doctor_id FROM doctor;
SET new.doctor_id = vr_doctor_id;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `document`
--

CREATE TABLE `document` (
  `id` int(10) UNSIGNED NOT NULL,
  `patient_code` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doctor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `snote` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `document` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `document`
--

INSERT INTO `document` (`id`, `patient_code`, `doctor`, `snote`, `document`, `date`, `created_at`, `updated_at`) VALUES
(7, '202003001', 'Dr.Belal Khan', 'first one outdor', 'download.jpg', '2020-03-25', '2020-06-29 12:23:10', NULL),
(8, '202003002', 'Dr. Zesika Hayat', 'it is for outdoor patient', '89587931_2868878863191960_9016814101673803776_o.jpg', '2020-03-16', '2020-06-06 11:37:47', NULL),
(10, '202003006', 'Dr.Belal Khan', 'test 4', 'prothom alo jobs news 20 March 2020.png', '2020-03-28', '2020-06-18 12:22:30', NULL),
(11, '202003005', NULL, 'gg', 'CV-Mahmodul-Hasan(13.6.2020).pdf', '2020-06-06', '2020-06-18 12:22:44', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emp_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emp_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emp_password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emp_mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emp_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emp_gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emp_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emp_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `user_role`, `emp_name`, `emp_email`, `emp_password`, `emp_mobile`, `emp_image`, `emp_gender`, `emp_address`, `emp_status`, `created_at`, `updated_at`) VALUES
(4, '2', 'khan', 'khan@gmail', '1234', '017643423', '89687952_1124828584520942_5786445052322512896_n.jpg', 'Male', 'rangpur', 'active', '2020-06-18 12:38:01', NULL),
(5, '3', 'Rozi', 'rozi@gmail.com', NULL, '01743342342', 'orthi akter.jpg', 'Female', 'dhaka', 'active', '2020-06-18 12:45:46', NULL),
(6, '6', 'rimon khan', 'rimon@gmail.com', NULL, '0197324522', 'img20191011_1809190033.jpg', 'Male', 'rangpur', 'active', '2020-06-18 12:58:24', NULL),
(7, '4', 'rimon', 'safa@gmail.com', NULL, '019325433', 'r1.jpg', 'Male', 'rangpur', 'active', '2020-06-18 12:50:30', NULL),
(9, '1', 'rimon khan', 'rimon@gmail.com', '1234', '0176434323', 'a1.jpg', 'Male', 'rangpur', 'active', '2020-06-18 12:34:31', NULL),
(10, '5', 'Azmi', 'azmi@gmail.com', NULL, '01745353', 'IMG_20200316_180256.jpg', 'Male', 'satkira', 'active', '2020-06-18 12:55:37', NULL),
(11, '3', 'Mst.Tisa Khan', 'tisa@gmail.com', NULL, '0187234322', 'd4.jpg', 'Female', 'rangpur', 'active', '2020-06-18 12:40:30', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `front_slider`
--

CREATE TABLE `front_slider` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slide_position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `front_slider`
--

INSERT INTO `front_slider` (`id`, `title`, `sub_title`, `slide_position`, `image`, `description`, `created_at`, `updated_at`) VALUES
(2, 'First Slide', 'Welcome to First Slide', '1', '1.jpg', 'loresfdsgfede', '2020-06-07 07:18:34', NULL),
(3, 'second slide', 'Welcome to Second Slide', '2', '2.png', 'fsdf', '2020-06-07 07:18:48', NULL),
(4, 'third slide', 'Welcome to Third Slide', '3', 'slider1.jpg', 'it is for demo test', '2020-06-16 11:26:30', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hms_birth`
--

CREATE TABLE `hms_birth` (
  `birth_id` int(10) UNSIGNED NOT NULL,
  `cname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `patient_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doctor_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hms_birth`
--

INSERT INTO `hms_birth` (`birth_id`, `cname`, `fname`, `title`, `description`, `patient_id`, `doctor_id`, `date`, `status`, `created_at`, `updated_at`) VALUES
(14, 'MD.Mahmodul Hasan', 'MD.Aminul Islam', 'Get Birth certificate.............', 'lorem ipsum is .....................', '202003017', 'Dr.Murtaza', '2020-07-07', '1', '2020-07-07 09:43:29', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hms_contact`
--

CREATE TABLE `hms_contact` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hms_contact`
--

INSERT INTO `hms_contact` (`id`, `name`, `email`, `subject`, `gender`, `description`, `created_at`, `updated_at`) VALUES
(4, 'Joynul Abedin', 'joynul@gmail.com', 'test', 'on', 'demo test mesage', '2020-05-02 00:00:46', NULL),
(5, 'rimon', 'mhrimonkhan@gmail.com', 'test', 'on', 'frgtre', '2020-06-07 07:27:56', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hms_death`
--

CREATE TABLE `hms_death` (
  `death_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `patient_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doctor_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hms_death`
--

INSERT INTO `hms_death` (`death_id`, `title`, `description`, `patient_id`, `doctor_id`, `date`, `status`, `created_at`, `updated_at`) VALUES
(7, 'death', 'death certififcate', '202003005', 'Dr.Belal Khan', '2020-06-19', '1', '2020-07-05 12:43:55', NULL),
(8, 'death report', 'loresm ipsum doler....', '202003015', 'Dr.Belal Khan', '2020-06-27', '1', '2020-07-05 12:43:41', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hms_medicine_genetic`
--

CREATE TABLE `hms_medicine_genetic` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hms_medicine_genetic`
--

INSERT INTO `hms_medicine_genetic` (`id`, `name`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'A', 'this is test demo', 'Active', '2020-04-29 11:11:05', NULL),
(9, 'C', 'it is loersm', 'Active', '2020-06-06 15:01:12', NULL),
(10, 'B', 'test 2', 'Inactive', '2020-04-30 00:25:16', NULL),
(11, 'D', 'it is test loresm', 'Active', '2020-04-30 00:36:43', NULL),
(12, 'I', 'test', 'Active', '2020-06-18 13:09:35', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hms_operation`
--

CREATE TABLE `hms_operation` (
  `oper_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `patient_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doctor_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hms_operation`
--

INSERT INTO `hms_operation` (`oper_id`, `title`, `description`, `patient_id`, `doctor_id`, `date`, `status`, `created_at`, `updated_at`) VALUES
(3, 'operation test', 'loresm ipsum doler....', '202003015', 'safayet hossain', '2020-06-27', '1', '2020-07-05 12:48:33', NULL),
(4, 'demo test for operation', 'loresm ipsum doler....', '202003016', 'azmi', '2020-06-27', '1', '2020-07-05 12:49:05', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hm_bed`
--

CREATE TABLE `hm_bed` (
  `id` int(10) UNSIGNED NOT NULL,
  `bed_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `limit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `charge` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hm_bed`
--

INSERT INTO `hm_bed` (`id`, `bed_type`, `description`, `limit`, `charge`, `status`, `created_at`, `updated_at`) VALUES
(1, 'AC', 'Lorem ipsum dolor.', '10', 1200, '1', '2020-06-15 12:13:47', NULL),
(5, 'Non AC', 'loresm is dorem.....', '20', 2000, '1', '2020-06-06 14:58:30', NULL),
(6, 'Others', 'loresm is dolor....', '30', 800, '1', '2020-06-06 14:59:37', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `invoice_medicine`
--

CREATE TABLE `invoice_medicine` (
  `inv_m_id` int(10) UNSIGNED NOT NULL,
  `id` int(11) NOT NULL,
  `medicine_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `inv_medicine`
--

CREATE TABLE `inv_medicine` (
  `inv_medicine_id` int(10) UNSIGNED NOT NULL,
  `inv_id` int(11) NOT NULL,
  `medicine_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `total_price` decimal(10,0) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `inv_medicine`
--

INSERT INTO `inv_medicine` (`inv_medicine_id`, `inv_id`, `medicine_id`, `quantity`, `price`, `total_price`, `created_at`, `updated_at`) VALUES
(19, 16, 4, 3, '1000', '3000', NULL, NULL),
(20, 17, 5, 11, '60', '660', NULL, NULL),
(21, 18, 6, 12, '11', '132', NULL, NULL),
(22, 18, 1, 9, '90', '810', NULL, NULL),
(23, 19, 1, 10, '90', '900', NULL, NULL),
(24, 19, 3, 25, '45', '1125', NULL, NULL),
(25, 20, 6, 5, '11', '55', NULL, NULL),
(26, 20, 1, 3, '90', '270', NULL, NULL),
(27, 20, 3, 4, '45', '180', NULL, NULL),
(28, 20, 4, 2, '1000', '2000', NULL, NULL),
(29, 20, 5, 12, '60', '720', NULL, NULL),
(30, 21, 1, 4, '90', '360', NULL, NULL),
(31, 22, 3, 5, '45', '225', NULL, NULL),
(32, 23, 1, 9, '90', '810', NULL, NULL),
(33, 24, 4, 11, '100', '1100', NULL, NULL),
(34, 24, 5, 11, '60', '660', NULL, NULL),
(35, 25, 3, 4, '45', '180', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lab_category`
--

CREATE TABLE `lab_category` (
  `id` int(10) UNSIGNED NOT NULL,
  `cat_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lab_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lab_category`
--

INSERT INTO `lab_category` (`id`, `cat_name`, `lab_type`, `cat_description`, `status`, `created_at`, `updated_at`) VALUES
(11, 'BIOCHEMICAL TEST- Blood Sugar', 'Lab', 'test loresm', 'Active', '2020-04-30 04:13:02', NULL),
(12, 'Autoimmunity', 'Lab', 'dfd', 'Active', '2020-04-30 04:10:30', NULL),
(13, 'BIOCHEMICAL TEST- Lipid Profile', 'Lab', 'test', 'Active', '2020-04-30 04:10:52', NULL),
(14, 'Cancer Marker (Tumour Marker)', 'Lab', 'dvs', 'Active', '2020-04-30 04:11:06', NULL),
(15, 'Cardiac Enzymes/ Markers', 'Lab', 'loresm ipsum dolor...', 'Active', '2020-06-06 15:04:39', NULL),
(16, 'ICU', 'Lab', 'sdcs', 'Active', '2020-04-30 04:11:37', NULL),
(17, 'Digital X-Ray (Contrast)', 'Lab', 'dsvs', 'Active', '2020-04-30 04:12:04', NULL),
(18, 'Cardiac Test (Non Invasive)', 'Lab', 'vzs', 'Active', '2020-04-30 04:36:21', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lab_invoice`
--

CREATE TABLE `lab_invoice` (
  `inv_id` int(10) UNSIGNED NOT NULL,
  `lab_id` int(11) NOT NULL,
  `test_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `test_rate` decimal(10,2) NOT NULL,
  `total_price` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lab_invoice`
--

INSERT INTO `lab_invoice` (`inv_id`, `lab_id`, `test_id`, `quantity`, `test_rate`, `total_price`, `created_at`, `updated_at`) VALUES
(8, 10, 6, 10, '56.00', '560.00', NULL, NULL),
(9, 11, 1, 9, '50.00', '450.00', NULL, NULL),
(10, 11, 3, 5, '30.00', '150.00', NULL, NULL),
(11, 12, 4, 17, '80.00', '1360.00', NULL, NULL),
(12, 13, 1, 11, '50.00', '550.00', NULL, NULL),
(13, 14, 3, 3, '30.00', '90.00', NULL, NULL),
(14, 14, 6, 5, '56.00', '280.00', NULL, NULL),
(15, 15, 4, 12, '80.00', '960.00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lab_test`
--

CREATE TABLE `lab_test` (
  `id` int(10) UNSIGNED NOT NULL,
  `cat_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `test_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `test_rate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `test_ref_fee` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `test_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lab_test`
--

INSERT INTO `lab_test` (`id`, `cat_name`, `test_name`, `test_rate`, `test_ref_fee`, `test_description`, `created_at`, `updated_at`) VALUES
(1, 'Autoimmunity', 'blood', '50', '20', 'done', '2020-04-30 04:29:56', NULL),
(3, 'Cancer Marker (Tumour Marker)', 'Free PSA', '30', '12', 'it is  for test', '2020-04-30 04:30:46', NULL),
(4, 'Plain X-Ray (Conventional)', 'X-Ray PNS lateral view', '80', '33', 'it is  for test', '2020-06-29 12:31:44', NULL),
(6, 'Cardiac Test (Non Invasive)', 'E C G (Resting)', '56', '65', 'gdfg', '2020-04-30 04:36:53', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `manufacture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`id`, `name`, `category`, `description`, `price`, `manufacture`, `status`, `created_at`, `updated_at`) VALUES
(1, 'napa extra', 'C', 'general', '90', 'Acmi', 'active', '2020-03-26 23:30:53', NULL),
(3, 'e-cap', 'A', 'test', '45', 'Acmi', 'active', '2020-04-30 04:26:29', NULL),
(4, 'H+', 'A', 'loresm demo test', '100', 'IBN Sina', 'active', '2020-06-18 13:10:31', NULL),
(5, 'Aboxitin 1 gm', 'I', 'loresm demo', '60', 'Squre group', 'active', '2020-06-04 03:20:38', NULL),
(6, 'Metro', 'D', 'cfds', '11', 'Extra Farma', 'active', '2020-05-01 05:27:48', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(50, '2014_10_12_000000_create_users_table', 1),
(51, '2014_10_12_100000_create_password_resets_table', 1),
(52, '2019_08_19_000000_create_failed_jobs_table', 1),
(53, '2020_02_25_175115_create_patient_table', 1),
(54, '2020_02_25_175151_create_doctor_table', 1),
(55, '2020_02_25_175257_create_department_table', 1),
(56, '2020_02_25_175346_create_appointment_table', 1),
(57, '2020_02_25_175446_create_accountmanager_table', 1),
(59, '2020_03_03_145620_create_document_table', 2),
(60, '2020_03_16_171312_create_schedule_table', 3),
(61, '2020_03_17_183034_create_medicine_table', 4),
(62, '2020_03_18_200228_create_medicine_invoice_table', 5),
(63, '2020_03_19_190001_create_prescription_table', 5),
(64, '2020_03_20_095147_create_lab_test_table', 6),
(65, '2020_03_20_095521_create_lab_category_table', 7),
(66, '2020_03_28_164504_create_employee_table', 8),
(67, '2020_04_01_040841_create_prescription_medicine_table', 9),
(68, '2020_04_01_041324_create_prescription_observation_table', 10),
(69, '2020_04_08_093114_create_hm_bed_table', 11),
(70, '2020_04_08_101223_create_bed_assign_table', 12),
(71, '2020_04_27_101302_create_hms_birth_table', 13),
(72, '2020_04_27_104948_create_hms_death_table', 14),
(73, '2020_04_28_102502_create_hms_operation_table', 15),
(74, '2020_04_29_061547_create_hms_contact_table', 16),
(75, '2020_04_29_165434_create_hms_medicine_genetic_table', 17),
(76, '2020_06_04_172837_create_front_slider_table', 18),
(77, '2020_06_06_055313_create_invoice_medicine_table', 19),
(78, '2020_06_06_142149_create_inv_medicine_table', 19),
(79, '2020_06_09_042320_create_lab_invoice_table', 20),
(80, '2020_06_09_042829_create_test_lab_invoice_table', 21);

-- --------------------------------------------------------

--
-- Table structure for table `m_invoice`
--

CREATE TABLE `m_invoice` (
  `id` int(10) UNSIGNED NOT NULL,
  `patient_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` decimal(10,0) DEFAULT NULL,
  `vat` decimal(10,0) DEFAULT NULL,
  `discount` decimal(10,0) DEFAULT NULL,
  `grand_total` decimal(10,0) DEFAULT NULL,
  `paid` decimal(10,0) DEFAULT NULL,
  `due` decimal(10,0) DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `m_invoice`
--

INSERT INTO `m_invoice` (`id`, `patient_id`, `total`, `vat`, `discount`, `grand_total`, `paid`, `due`, `status`, `created_id`, `created_at`, `updated_at`) VALUES
(22, '202003016', '225', '12', '120', '117', '70', '47', '1', NULL, '2020-06-26 13:53:21', NULL),
(23, '202003017', '810', '10', '20', '800', '50', '750', '1', NULL, '2020-06-27 00:12:34', NULL),
(24, '202003018', '1760', '11', '111', '1660', '1000', '660', '1', NULL, '2020-06-27 11:51:53', NULL),
(25, '202003009', '180', '10', '20', '170', '10', '160', '1', NULL, '2020-07-07 08:58:48', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(10) UNSIGNED NOT NULL,
  `patient_code` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bloodGroup` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `referencetype` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reference` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `patient_code`, `user_id`, `name`, `email`, `mobile`, `address`, `gender`, `bloodGroup`, `dob`, `referencetype`, `reference`, `type`, `created_at`, `updated_at`) VALUES
(5, '202003003', NULL, 'rimon khan', 'mhrimonkhan@gmail.com', '01745432345', 'dhaka', 'Male', 'A+', '2020-03-16', 'others', 'no', 2, '2020-06-06 14:15:27', NULL),
(11, '202003009', NULL, 'Mst.Sriti Begum', 'sriti@gmail.com', '0112234334', 'rangpur', 'Female', 'AB-', '2005-02-07', 'No', 'doctor', 0, '2020-07-05 11:49:48', NULL),
(20, '202003016', 27, 'Afif All Mamun', 'mamun@gmail.com', '12345678', 'kisorgonj', 'Male', 'B+', '1997-04-20', 'Doctor', 'zsdssss', 1, '2020-06-26 13:48:43', NULL),
(21, '202003017', 28, 'Ritu', 'ritu@gmail.com', '12345678', 'domar', 'Female', 'Select patient Blood', '1997-04-21', 'Doctor', 'ssasadfsdfs', 1, '2020-06-27 00:07:27', NULL),
(22, '202003018', 30, 'one', 'one@gmail.com', '12345678', 'cbcb', 'Male', 'A+', '2020-06-27', 'Doctor', 'gfxgdgd', 1, '2020-06-27 11:50:42', NULL),
(23, '202003019', NULL, 'Hasan', 'hasan@gmail.com', '0155555', 'dhaka', 'Male', 'A-', '2003-01-01', 'Doctor', 'aaaaa', 0, '2020-07-05 11:49:45', NULL),
(24, '202003020', 34, 'Abdullah Al Azmi', 'azmi@gmail.com', '12345678', 'khulna', 'Male', 'A+', '2020-07-07', 'others', 'no', 1, '2020-07-07 09:47:07', NULL);

--
-- Triggers `patient`
--
DELIMITER $$
CREATE TRIGGER `bfr_ins_patient` BEFORE INSERT ON `patient` FOR EACH ROW BEGIN
DECLARE vr_patient_code int(11);
SELECT ifnull(MAX(patient_code)+1,date_format(now(),'%Y%m001')) INTO vr_patient_code FROM patient;
SET new.patient_code = vr_patient_code;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE `prescription` (
  `pr_id` int(10) UNSIGNED NOT NULL,
  `patient_id` int(11) NOT NULL,
  `pr_observation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prescription`
--

INSERT INTO `prescription` (`pr_id`, `patient_id`, `pr_observation`, `status`, `created_at`, `updated_at`) VALUES
(73, 202003017, 'gd', 1, '2020-06-27 04:43:32', NULL),
(74, 202003018, 'well', 1, '2020-06-27 11:53:32', NULL),
(76, 202003020, 'gd', 1, '2020-07-07 09:47:41', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `prescription_medicine`
--

CREATE TABLE `prescription_medicine` (
  `pr_m_id` int(10) UNSIGNED NOT NULL,
  `pr_id` int(11) NOT NULL,
  `medicine_id` int(11) NOT NULL,
  `douse` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `douse_day` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instruction` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prescription_medicine`
--

INSERT INTO `prescription_medicine` (`pr_m_id`, `pr_id`, `medicine_id`, `douse`, `douse_day`, `instruction`, `created_at`, `updated_at`) VALUES
(95, 70, 3, '1+1+1', '15', 'sds', '2020-06-26 11:05:52', NULL),
(96, 70, 5, '2+0+1', '1511', NULL, '2020-06-26 11:05:52', NULL),
(97, 70, 6, NULL, '3', 'dfdfasf', '2020-06-26 11:05:52', NULL),
(101, 72, 1, '1+1+1', '12', 'well', '2020-06-27 04:22:06', NULL),
(102, 73, 1, '0+0+1', '18', 'done', '2020-06-27 04:43:32', NULL),
(103, 74, 3, '0+0+1', '3', 'test', '2020-06-27 11:53:32', NULL),
(104, 74, 5, '0+1+1', '7', 'done', '2020-06-27 11:53:32', NULL),
(109, 71, 5, '0+0+1', '3', 'test', '2020-07-05 12:26:41', NULL),
(110, 71, 6, '0+1+1', '7', 'done', '2020-07-05 12:26:41', NULL),
(111, 75, 1, '0+0+1', '7', 'test', '2020-07-07 08:57:46', NULL),
(112, 76, 5, '1+0+1', '3', 'done', '2020-07-07 09:47:41', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `prescription_observation`
--

CREATE TABLE `prescription_observation` (
  `pr_t_id` int(10) UNSIGNED NOT NULL,
  `pr_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `test_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prescription_observation`
--

INSERT INTO `prescription_observation` (`pr_t_id`, `pr_id`, `test_id`, `created_at`, `updated_at`) VALUES
(64, '70', '1', '2020-06-26 11:05:52', NULL),
(65, '70', '4', '2020-06-26 11:05:52', NULL),
(66, '70', '6', '2020-06-26 11:05:52', NULL),
(70, '72', '3', '2020-06-27 04:22:06', NULL),
(71, '72', '6', '2020-06-27 04:22:06', NULL),
(72, '73', '3', '2020-06-27 04:43:32', NULL),
(73, '73', '4', '2020-06-27 04:43:32', NULL),
(74, '74', '6', '2020-06-27 11:53:32', NULL),
(75, '74', '4', '2020-06-27 11:53:32', NULL),
(76, '74', '1', '2020-06-27 11:53:32', NULL),
(77, '74', '3', '2020-06-27 11:53:32', NULL),
(80, '71', '4', '2020-07-05 12:26:41', NULL),
(81, '75', '3', '2020-07-07 08:57:46', NULL),
(82, '76', '4', '2020-07-07 09:47:41', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE `schedules` (
  `id` int(10) UNSIGNED NOT NULL,
  `dname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `day` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stime` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `etime` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ptime` time(5) NOT NULL,
  `svisibility` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `schedules`
--

INSERT INTO `schedules` (`id`, `dname`, `day`, `stime`, `etime`, `ptime`, `svisibility`, `status`, `created_at`, `updated_at`) VALUES
(9, 'Dr.Murtaza', 'sunday', '07:45', '10:30', '00:00:45.00000', 'Sequential', 'active', '2020-07-02 00:30:41', NULL),
(10, 'Dr. Zesika Hayat', 'Tuesday', '17:50', '22:50', '00:00:45.00000', 'Sequential', 'active', '2020-06-06 14:48:16', NULL),
(11, 'Dr.Jesi Akter', 'sunday', '00:01', '03:01', '00:00:10.00000', 'Sequential', 'active', '2020-07-02 00:32:08', NULL),
(12, 'Dr. Elvera', 'Tuesday', '07:01', '10:06', '00:00:10.00000', 'Sequential', 'active', '2020-07-02 00:30:59', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `test_lab_invoice`
--

CREATE TABLE `test_lab_invoice` (
  `id` int(10) UNSIGNED NOT NULL,
  `inv_id` int(11) DEFAULT NULL,
  `patient_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` decimal(10,0) DEFAULT NULL,
  `vat` decimal(10,0) DEFAULT NULL,
  `discount` decimal(10,0) DEFAULT NULL,
  `grand_total` decimal(10,0) DEFAULT NULL,
  `paid` decimal(10,0) DEFAULT NULL,
  `due` decimal(10,0) DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `test_lab_invoice`
--

INSERT INTO `test_lab_invoice` (`id`, `inv_id`, `patient_id`, `total`, `vat`, `discount`, `grand_total`, `paid`, `due`, `status`, `created_id`, `created_at`, `updated_at`) VALUES
(14, NULL, '202003017', '370', '10', '20', '360', '300', '60', '1', NULL, '2020-06-27 00:12:08', NULL),
(15, NULL, '202003018', '960', '10', '20', '950', '500', '450', '1', NULL, '2020-06-27 11:52:37', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_role` enum('admin','doctor','patient') COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_role`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(20, 'admin', 'rimon121', 'mhrimonkhan@gmail.com', NULL, '$2y$10$5APkv8H.qxrr6DpTKZA2KuZgSnMCBTvMrwJK/IN.TztIdgMNqRcGW', NULL, '2020-06-25 23:54:58', '2020-06-25 23:54:58'),
(26, 'admin', 'rimon', 'admin@demo.com', NULL, '$2y$10$NFJUCxiMQD80rY2VEmgrsOJxwqHEJcRK0I4ywBePDM95ZADE/86hK', 'FqD16WC3VfjtbCs8CZmt2vug2DiLNGLsFSFp8bnPmmzwbJkkSKCDUhmwGmTY', '2020-06-26 05:08:14', '2020-06-26 05:08:14'),
(27, 'patient', 'Afif All Mamun', 'mamun@gmail.com', NULL, '$2y$10$L4SzB8eti1vWTyLc67L0CuP0M5ZNGb2ncoanLErmAuyP.30wR7XR2', NULL, '2020-06-26 13:48:43', NULL),
(28, 'patient', 'Ritu', 'ritu@gmail.com', NULL, '$2y$10$TpP4yr1XoIXiTVVFruVZOeK1lZIBY5hevu/9F5O7H5xfsWBVbAWGi', 'jalzNUnQZRkH4VfmibhlR9Yv4RYYrtgIOYJjqox15KbLUaYPABHX868pyIQe', '2020-06-27 00:07:27', NULL),
(29, 'doctor', 'Dr. Zesika Hayat', 'zesika@gmail.com', NULL, '$2y$10$Vc.cWqW2liwFIIrGEwx2zudGYUlISq7kIyWItQkZWyjutQtgTqjFq', 'f5xEFtZkGgedvgLvZFAgVnC0TnFCDFOsHoqSMO8o3qTXqymOu5snH7GEn9Ta', '2020-06-27 00:21:00', NULL),
(30, 'patient', 'one', 'one@gmail.com', NULL, '$2y$10$hRqbEqfuMhu47DxuvCJuDeul1/E2j85JdHAtnMzC1yhOHHiav49L2', NULL, '2020-06-27 11:50:42', NULL),
(31, 'doctor', 'Dr.Murtaza', 'murtaza@gmail.com', NULL, '$2y$10$wQU0hXZA/CtLGvL9tw52le2KAnor2rz1xWLex9qMaFt9XZ.Ha8JAO', NULL, '2020-07-01 23:25:03', NULL),
(32, 'doctor', 'Dr. Elvera', 'elvera@gmail.com', NULL, '$2y$10$M/z08IkibrPFQM.boieK6eRl.PzJqxtNwthzu.jmyoOYUQvlZXHLu', NULL, '2020-07-02 00:37:40', NULL),
(33, 'doctor', 'Dr.Jesi Akter', 'jesi@gmail.com', NULL, '$2y$10$H2IVwOvibVf5V/o3Oy88suxHYFHlETOcGgRYDDX50SnANfzOH3CwK', NULL, '2020-07-02 00:41:40', NULL),
(34, 'patient', 'Abdullah Al Azmi', 'azmi@gmail.com', NULL, '$2y$10$zTkludlGvum/p7JS0.qcnOtN39uNUl4YASNfV49HuMlH/hA/G5/N2', NULL, '2020-07-07 09:47:07', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accountmanager`
--
ALTER TABLE `accountmanager`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bed_assign`
--
ALTER TABLE `bed_assign`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `document`
--
ALTER TABLE `document`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `front_slider`
--
ALTER TABLE `front_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hms_birth`
--
ALTER TABLE `hms_birth`
  ADD PRIMARY KEY (`birth_id`);

--
-- Indexes for table `hms_contact`
--
ALTER TABLE `hms_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hms_death`
--
ALTER TABLE `hms_death`
  ADD PRIMARY KEY (`death_id`);

--
-- Indexes for table `hms_medicine_genetic`
--
ALTER TABLE `hms_medicine_genetic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hms_operation`
--
ALTER TABLE `hms_operation`
  ADD PRIMARY KEY (`oper_id`);

--
-- Indexes for table `hm_bed`
--
ALTER TABLE `hm_bed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice_medicine`
--
ALTER TABLE `invoice_medicine`
  ADD PRIMARY KEY (`inv_m_id`);

--
-- Indexes for table `inv_medicine`
--
ALTER TABLE `inv_medicine`
  ADD PRIMARY KEY (`inv_medicine_id`);

--
-- Indexes for table `lab_category`
--
ALTER TABLE `lab_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lab_invoice`
--
ALTER TABLE `lab_invoice`
  ADD PRIMARY KEY (`inv_id`);

--
-- Indexes for table `lab_test`
--
ALTER TABLE `lab_test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_invoice`
--
ALTER TABLE `m_invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prescription`
--
ALTER TABLE `prescription`
  ADD PRIMARY KEY (`pr_id`);

--
-- Indexes for table `prescription_medicine`
--
ALTER TABLE `prescription_medicine`
  ADD PRIMARY KEY (`pr_m_id`);

--
-- Indexes for table `prescription_observation`
--
ALTER TABLE `prescription_observation`
  ADD PRIMARY KEY (`pr_t_id`);

--
-- Indexes for table `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test_lab_invoice`
--
ALTER TABLE `test_lab_invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accountmanager`
--
ALTER TABLE `accountmanager`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `bed_assign`
--
ALTER TABLE `bed_assign`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `document`
--
ALTER TABLE `document`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `front_slider`
--
ALTER TABLE `front_slider`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hms_birth`
--
ALTER TABLE `hms_birth`
  MODIFY `birth_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `hms_contact`
--
ALTER TABLE `hms_contact`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `hms_death`
--
ALTER TABLE `hms_death`
  MODIFY `death_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `hms_medicine_genetic`
--
ALTER TABLE `hms_medicine_genetic`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `hms_operation`
--
ALTER TABLE `hms_operation`
  MODIFY `oper_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hm_bed`
--
ALTER TABLE `hm_bed`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `invoice_medicine`
--
ALTER TABLE `invoice_medicine`
  MODIFY `inv_m_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inv_medicine`
--
ALTER TABLE `inv_medicine`
  MODIFY `inv_medicine_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `lab_category`
--
ALTER TABLE `lab_category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `lab_invoice`
--
ALTER TABLE `lab_invoice`
  MODIFY `inv_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `lab_test`
--
ALTER TABLE `lab_test`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `m_invoice`
--
ALTER TABLE `m_invoice`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `prescription`
--
ALTER TABLE `prescription`
  MODIFY `pr_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `prescription_medicine`
--
ALTER TABLE `prescription_medicine`
  MODIFY `pr_m_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `prescription_observation`
--
ALTER TABLE `prescription_observation`
  MODIFY `pr_t_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `schedules`
--
ALTER TABLE `schedules`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `test_lab_invoice`
--
ALTER TABLE `test_lab_invoice`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
