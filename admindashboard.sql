SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database : `sql_injection`
--

CREATE DATABASE IF NOT EXISTS sql_injection;
USE sql_injection;

-- --------------------------------------------------------

--
-- `admindashboard` table
--

CREATE TABLE `admindashboard` (
  `id` int(11) NOT NULL,
  `username` varchar(10) DEFAULT NULL,
  `pass` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Inserting data into `admindashboard`
--

INSERT INTO `admindashboard` (`id`, `username`, `pass`) VALUES
(1, 'admin', 'HelloThere.');

--
-- Index for `admindashboard`
--
ALTER TABLE `admindashboard`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for `admindashboard`
--
ALTER TABLE `admindashboard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;
