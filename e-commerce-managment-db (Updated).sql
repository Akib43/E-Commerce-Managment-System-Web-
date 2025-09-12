-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2025 at 01:18 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-commerce-managment-db`
--

-- --------------------------------------------------------

--
-- Table structure for table `company_expense`
--

CREATE TABLE `company_expense` (
  `Expense_ID` int(11) NOT NULL,
  `Expense_Name` varchar(30) NOT NULL,
  `Expense_Ammount` double NOT NULL,
  `Expense_Department_Name` varchar(20) NOT NULL,
  `Expense_Reason` varchar(50) NOT NULL,
  `Expense_Approved_Date` date NOT NULL,
  `Expense_Approved_By` varchar(30) NOT NULL,
  `Expense_Received_Date` date NOT NULL,
  `Expense_Received_By` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customer_order_table`
--

CREATE TABLE `customer_order_table` (
  `Order_ID` int(11) NOT NULL,
  `Order_Price` int(11) NOT NULL,
  `Order_Location` varchar(60) NOT NULL,
  `Order_City` varchar(20) NOT NULL,
  `Order_Type` varchar(20) NOT NULL,
  `Order_Product_Category` varchar(20) NOT NULL,
  `Order_Status` varchar(20) NOT NULL,
  `Customer_ID` int(11) NOT NULL,
  `Order_Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employee_table`
--

CREATE TABLE `employee_table` (
  `Employee_ID` int(11) NOT NULL,
  `Employee_Name` varchar(100) NOT NULL,
  `Employee_Department` varchar(50) DEFAULT NULL,
  `Employee_Base_Salary` decimal(10,2) NOT NULL,
  `Employee_Increment_Percent` decimal(5,2) NOT NULL,
  `Employee_Final_Salary` decimal(10,2) GENERATED ALWAYS AS (`Employee_Base_Salary` + `Employee_Base_Salary` * `Employee_Increment_Percent` / 100) STORED
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee_table`
--

INSERT INTO `employee_table` (`Employee_ID`, `Employee_Name`, `Employee_Department`, `Employee_Base_Salary`, `Employee_Increment_Percent`) VALUES
(1, 'Akib', 'Accountant', 30000.00, 10.00),
(2, 'Sara', 'HR', 28000.00, 8.00);

-- --------------------------------------------------------

--
-- Table structure for table `product_table`
--

CREATE TABLE `product_table` (
  `Product_ID` int(11) NOT NULL,
  `Product_Name` varchar(30) NOT NULL,
  `Product_Category` varchar(30) NOT NULL,
  `Product_Type` varchar(30) NOT NULL,
  `Product_Price` int(11) NOT NULL,
  `Product_Available` int(11) NOT NULL,
  `Product_Stocked` int(11) NOT NULL,
  `Product_Details_1` varchar(100) NOT NULL,
  `Product_Details_2` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `refund_table`
--

CREATE TABLE `refund_table` (
  `Refund_ID` int(11) NOT NULL,
  `Order_ID` int(11) NOT NULL,
  `Customer_ID` int(11) NOT NULL,
  `Product_ID` int(11) NOT NULL,
  `Product_Name` varchar(100) NOT NULL,
  `Product_Quantity` int(11) NOT NULL,
  `Product_Price` decimal(10,2) NOT NULL,
  `Total_Amount` decimal(10,2) GENERATED ALWAYS AS (`Product_Quantity` * `Product_Price`) STORED
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company_expense`
--
ALTER TABLE `company_expense`
  ADD PRIMARY KEY (`Expense_ID`);

--
-- Indexes for table `customer_order_table`
--
ALTER TABLE `customer_order_table`
  ADD PRIMARY KEY (`Order_ID`);

--
-- Indexes for table `employee_table`
--
ALTER TABLE `employee_table`
  ADD PRIMARY KEY (`Employee_ID`);

--
-- Indexes for table `product_table`
--
ALTER TABLE `product_table`
  ADD PRIMARY KEY (`Product_ID`);

--
-- Indexes for table `refund_table`
--
ALTER TABLE `refund_table`
  ADD PRIMARY KEY (`Refund_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company_expense`
--
ALTER TABLE `company_expense`
  MODIFY `Expense_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer_order_table`
--
ALTER TABLE `customer_order_table`
  MODIFY `Order_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee_table`
--
ALTER TABLE `employee_table`
  MODIFY `Employee_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product_table`
--
ALTER TABLE `product_table`
  MODIFY `Product_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `refund_table`
--
ALTER TABLE `refund_table`
  MODIFY `Refund_ID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
