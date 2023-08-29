-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Aug 29, 2023 at 06:59 PM
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
-- Database: `telecarely`
--

-- --------------------------------------------------------

--
-- Table structure for table `inquiries`
--

CREATE TABLE `inquiries` (
  `id` int(10) UNSIGNED NOT NULL,
  `patient_id` int(10) UNSIGNED NOT NULL,
  `message` text DEFAULT NULL,
  `doctor_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inquiries`
--

INSERT INTO `inquiries` (`id`, `patient_id`, `message`, `doctor_id`) VALUES
(36, 42, 'hello doctor', 43),
(37, 42, 'hello, doctor ahmed I have a bad headache and I need to learn more about Laravel, data structure and algorithms.\r\ncan you help me plz..!', 43),
(38, 46, 'Hello doctor Mohamed Ramadan i have a bad headache can you plz help to realise it', 45),
(39, 46, 'hello doctor you are a new doctor welcome to you', 58),
(40, 42, 'hello, doctor Mohamed Ramadan can you plz send me a dummy prescription to check the consistency of the website.', 45),
(41, 42, 'hello doctor it\'s the final message from mohamed patient', 45),
(42, 46, 'hi doctor it\'s the final message from me im mohamed Ramadan', 45),
(43, 42, 'Hello Eng-Abdelwahab I know it\'s a clinic and ur an awesome engineer but just for a test, I hope you are fine.', 59);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prescriptions`
--

CREATE TABLE `prescriptions` (
  `id` int(10) UNSIGNED NOT NULL,
  `patient_id` int(10) UNSIGNED NOT NULL,
  `doctor_id` int(10) UNSIGNED NOT NULL,
  `drug_name` text DEFAULT NULL,
  `drug_amount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `prescriptions`
--

INSERT INTO `prescriptions` (`id`, `patient_id`, `doctor_id`, `drug_name`, `drug_amount`) VALUES
(13, 42, 43, 'drug-name hola bola', 111),
(14, 42, 43, 'dddd', 2),
(15, 42, 43, 'you should be consistent and patient to reach what you want', 1000),
(16, 46, 45, 'you need to take a panadol extra', 1),
(17, 42, 45, 'okay no problem take care.', 0),
(18, 42, 45, 'it\'s the second  time that i send the inquiry to check if all things right', 0),
(19, 42, 59, 'I think all things work well, I hope the project runs successfully without any fatal errors.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `role` text NOT NULL,
  `age` int(11) NOT NULL,
  `phone` int(11) NOT NULL,
  `image` text NOT NULL,
  `specialty` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `age`, `phone`, `image`, `specialty`) VALUES
(42, 'mohamed patient', 'hesham22@gmail.com', '$2y$10$5J9gdsDnc5HIvOWRdECI6uqNoRiNJk2vuGJbbiPEs4VAW2gLj76cO', 'patient', 11, 1015775920, 'BSH_3965.jpg', NULL),
(43, 'Ahmed doctor', 'hesham222@gmail.com', '$2y$10$tJOXzHgSj1.w9hb0DREceOw8Ex79P47rWhVxvPN36CsHwg/LfIfDu', 'doctor', 111, 1015775920, 'mentalstrange.png', 'ok'),
(45, 'Mohamed Ramadan Abdelhakam Mohamed', 'mohamed.ramadan2393@gmail.com', '$2y$10$/KVmIpxJTPuJ.NnS9kQvMeozI7ZjUIn0nXw837eAjkApI5ZTyzN62', 'doctor', 23, 1015775920, 'photo1692173601 copy.jpg', 'surgery'),
(46, 'Mohamed Ramadan', 'ahmed@gmail.com', '$2y$10$esKAmrtsm7rCiAlghAnO1uA4q7aB2Rc8T9LsnTeSPuwHLMjmrm3ee', 'patient', 11, 1015775920, 'pic-2.png', NULL),
(58, 'ahmed abdelhamid mohamed hagag', 'ahagag@fci.bu.edu.eg', '$2y$10$3kB9ESG/16mXQdFu3axehu0AUV930/qdYaqB1w1hn5YwPJwR.qb1y', 'doctor', 11, 1005825343, 'pic-1.png', 'Dentiest'),
(59, 'Eng- Abdelwahab', 'eng.abdelwahab@gmail.com', '$2y$10$JyP3ZjLRywuhQ26qNcLhhOo8oszps.aHRE9cM1NTHy/zAckFlTGl6', 'doctor', 30, 1015775920, '82001434_2473174426145558_2854098367686901760_n.jpg', 'perfect instructor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inquiries`
--
ALTER TABLE `inquiries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `inquiries_ibfk_1` (`patient_id`),
  ADD KEY `doctor_id` (`doctor_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prescriptions`
--
ALTER TABLE `prescriptions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patient_id` (`patient_id`),
  ADD KEY `doctor_id` (`doctor_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inquiries`
--
ALTER TABLE `inquiries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prescriptions`
--
ALTER TABLE `prescriptions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `inquiries`
--
ALTER TABLE `inquiries`
  ADD CONSTRAINT `inquiries_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `inquiries_ibfk_2` FOREIGN KEY (`doctor_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `prescriptions`
--
ALTER TABLE `prescriptions`
  ADD CONSTRAINT `prescriptions_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `prescriptions_ibfk_2` FOREIGN KEY (`doctor_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
