-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2021 at 01:36 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `intp`
--
CREATE DATABASE IF NOT EXISTS `intp` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `intp`;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_intr_inter_list`
--

CREATE TABLE `tbl_intr_inter_list` (
  `id` int(11) NOT NULL,
  `col_intr_id` int(11) NOT NULL,
  `col_inte_name` varchar(31) NOT NULL,
  `col_inte_sche` varchar(31) NOT NULL,
  `col_inte_by` varchar(31) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_acct_list`
--

CREATE TABLE `tbl_user_acct_list` (
  `id` int(11) NOT NULL,
  `col_acnt_crea` date DEFAULT NULL,
  `col_user_type` varchar(31) DEFAULT 'INTERN',
  `col_emai_veri` tinyint(1) DEFAULT NULL,
  `col_emai_addr` varchar(31) DEFAULT NULL,
  `col_user_pass` varchar(31) DEFAULT NULL,
  `col_last_name` varchar(31) DEFAULT NULL,
  `col_frst_name` varchar(31) DEFAULT NULL,
  `col_midl_name` varchar(31) DEFAULT NULL,
  `col_curr_addr` varchar(127) DEFAULT NULL,
  `col_cell_numb` varchar(15) DEFAULT NULL,
  `col_birt_date` date DEFAULT NULL,
  `col_intr_gndr` varchar(31) DEFAULT NULL,
  `col_intr_skil` varchar(63) DEFAULT NULL,
  `col_imag_name` varchar(255) DEFAULT NULL,
  `col_imag_path` varchar(255) DEFAULT NULL,
  `col_scho_name` varchar(31) DEFAULT NULL,
  `col_schl_cont` varchar(15) DEFAULT NULL,
  `col_advs_name` varchar(31) DEFAULT NULL,
  `col_advs_cont` varchar(15) DEFAULT NULL,
  `col_intr_cour` varchar(15) DEFAULT NULL,
  `col_totl_hour` int(11) DEFAULT NULL,
  `col_sche_day` varchar(255) DEFAULT NULL,
  `col_work_hour` int(11) DEFAULT NULL,
  `col_reqm_waiv` varchar(255) DEFAULT NULL,
  `col_reqm_resm` varchar(255) DEFAULT NULL,
  `col_reqm_endo` varchar(255) DEFAULT NULL,
  `col_reqm_agre` varchar(255) DEFAULT NULL,
  `col_esay_ansr` varchar(255) DEFAULT NULL,
  `col_date_sbmt` date DEFAULT NULL,
  `col_step_prog` int(11) NOT NULL DEFAULT 0,
  `col_user_stat` varchar(31) DEFAULT NULL,
  `col_date_inte` varchar(31) DEFAULT NULL,
  `col_inte_resc` varchar(31) DEFAULT NULL,
  `col_inte_name` varchar(31) DEFAULT NULL,
  `col_inte_stat` varchar(15) DEFAULT NULL,
  `col_star_date` date DEFAULT NULL,
  `col_reje_by` varchar(31) DEFAULT NULL,
  `col_reje_reas` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user_acct_list`
--

INSERT INTO `tbl_user_acct_list` (`id`, `col_acnt_crea`, `col_user_type`, `col_emai_veri`, `col_emai_addr`, `col_user_pass`, `col_last_name`, `col_frst_name`, `col_midl_name`, `col_curr_addr`, `col_cell_numb`, `col_birt_date`, `col_intr_gndr`, `col_intr_skil`, `col_imag_name`, `col_imag_path`, `col_scho_name`, `col_schl_cont`, `col_advs_name`, `col_advs_cont`, `col_intr_cour`, `col_totl_hour`, `col_sche_day`, `col_work_hour`, `col_reqm_waiv`, `col_reqm_resm`, `col_reqm_endo`, `col_reqm_agre`, `col_esay_ansr`, `col_date_sbmt`, `col_step_prog`, `col_user_stat`, `col_date_inte`, `col_inte_resc`, `col_inte_name`, `col_inte_stat`, `col_star_date`, `col_reje_by`, `col_reje_reas`) VALUES
(147, '2021-07-24', 'ADMIN', 0, 'admin@gmail.com', 'admin@gmail.com', 'Lemon', 'John', '', '', '', NULL, '', '', NULL, NULL, '', '', '', '', '', NULL, '', 0, '', '', '', '', '', NULL, 0, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_attn_list`
--

CREATE TABLE `tbl_user_attn_list` (
  `id` int(11) NOT NULL,
  `col_date_crea` date DEFAULT NULL,
  `col_intr_id` int(11) DEFAULT NULL,
  `col_intr_name` varchar(31) DEFAULT NULL,
  `col_attn_date` varchar(63) DEFAULT NULL,
  `col_time_in` varchar(15) DEFAULT '',
  `col_time_out` varchar(15) DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_intr_inter_list`
--
ALTER TABLE `tbl_intr_inter_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user_acct_list`
--
ALTER TABLE `tbl_user_acct_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user_attn_list`
--
ALTER TABLE `tbl_user_attn_list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_intr_inter_list`
--
ALTER TABLE `tbl_intr_inter_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_user_acct_list`
--
ALTER TABLE `tbl_user_acct_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=286;

--
-- AUTO_INCREMENT for table `tbl_user_attn_list`
--
ALTER TABLE `tbl_user_attn_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=293;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
