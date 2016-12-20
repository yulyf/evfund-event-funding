-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2016 at 04:04 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `evfund`
--

-- --------------------------------------------------------

--
-- Table structure for table `uploads`
--

CREATE TABLE `uploads` (
  `id` int(200) NOT NULL,
  `name` varchar(225) NOT NULL,
  `description` varchar(225) NOT NULL,
  `proposal` varchar(225) NOT NULL,
  `proposal2` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uploads`
--

INSERT INTO `uploads` (`id`, `name`, `description`, `proposal`, `proposal2`) VALUES
(1, 'Panitia ISE SI ITB', 'Proposal mengenai acara Information System Expo 2020', 'EvFund_Proposal_ISE_2020.docx', ''),
(2, 'Panitia GERIGI Oxford University', 'Event mengenai pengenalan kampus bagi mahasiswa baru Oxford University', 'EvFund_Proposal_GERIGI_20201.docx', ''),
(6, 'UAS KPPL', 'UAS KPPL EDIT', 'EvFund_Proposal_SENAM_OSAS.docx', ''),
(11, 'Coba Coba', 'coba', '', ''),
(12, 'aa', 'aa', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username`, `email`, `password`) VALUES
(1, 'sudahdipesan', 'sudahdipesan@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99'),
(2, 'husnirafi', 'coba@gmail.com', '$2y$10$UnLYq7qIoussAsCY8nzB8OVk4WXpDxtVfmzDw24kNIE4X6mcHWldu'),
(61, 'cobabuat', 'cobabuat@gmail.com', '$2y$10$RawRxfv4hcWdszHer.OzX.azUJZQIYRNtZTjsKI6RYKua84w8HyzK'),
(62, 'cobabuat', '', '$2y$10$.NrD83Xa4gEJIeZ3oahP2ulY1YE49/aU50CQmzugQ8mCeoDcBvvpq'),
(63, 'cobabuat', 'cobabuat@gmail.com', '$2y$10$/pI303C9Md0IcrQRQg3/vu96Ptv7eX54H21RtOQTxm.tyD.fOIVry'),
(64, '', 'cobabuat@gmail.com', '$2y$10$YSncKSLQMJHXJuowS2wrEOl8HnT7p.XFRmyUhYGo2zRDq68FUuoJG'),
(65, '', '', '$2y$10$ogG4OYEHXLAisF/wFM43m.j8KXL5qaMugX6EfwRSTcKH9didRQUTW'),
(66, '', '', '$2y$10$KAqZEXfj6FpVWK.kq81MRuBER0H7aLS/TWRC1Jsy/56m8MXNga7hm'),
(67, '', 'cobabuat@gmail.com', '$2y$10$6t825bIlsjcX6t8GHXXzV.1SRlrABfDf/6mPLDljmkGbZSqq4ngsG'),
(68, 'uaskppl', 'emailuaskppl@gmail.com', '$2y$10$w9pyMDm/6zCml/1tTkikceOIOiN99.kziRpvOAIaiuByDM6szfAz.'),
(69, 'cobabuat', 'cobabuat@gmail.com', '$2y$10$uOuPfRr9PttRi8LpmvfRMuOO27cBQaM13zcG9L2S27E7MEzaAzARu'),
(70, 'cobabuat', '', '$2y$10$CTGHu4Somr/BZPE2NKyNEuWUP9v6tY7eWfBNeuIBSfgu5.yQ.PXgm'),
(71, 'cobabuat', 'cobabuat@gmail.com', '$2y$10$rLQa4UmuC3qaoyx4/opUP.Q7q1hZcihIdjxxieAZQkq.Hffp96qoW'),
(72, '', 'cobabuat@gmail.com', '$2y$10$fwkK96KcBqIDeW3DEz8S9u/Kq0Ky1Z84SnVfeB6TGupj0JCqdU9V6'),
(73, '', '', '$2y$10$2/kUMWAdNLhvXc1gwyi2NeuI20SVNtJwnZoo2nD/YLMpN/R/dYkSa'),
(74, '', '', '$2y$10$6FvGn6eCX3Z9G01IBaiUmOKEPKOYjwGqZWPmoRH9gvQ.uU8QHg1mS'),
(75, '', 'cobabuat@gmail.com', '$2y$10$DaYYx8FpdB8F3GIC16G2Keopq0ULYA3Qssng3t1CcprCOtEyOYe96'),
(76, 'cobabuat', 'cobabuat@gmail.com', '$2y$10$0i65eAMPl3VkSqffWLPgJuFOgqPxpOQqTSQhgfXjePjk5xgdZ63yq'),
(77, 'cobabuat', '', '$2y$10$ArgjGnz/hnam9LGHA0xImepAI7Rn1xix9eIffUQQrhTHbNEV3pvu6'),
(78, 'cobabuat', 'cobabuat@gmail.com', '$2y$10$ZSWJHj/ti9GAPdUsyPjjH.JwPJNs16W4APun8oGIz7L7tFKuTCkYi'),
(79, '', 'cobabuat@gmail.com', '$2y$10$/txkjm074IDi6ASVksOii.LYGnMufAiSlvJbw.jasfHqKMthuFmCm'),
(80, '', '', '$2y$10$W5rV7fzgH9LmMhH4LndM6OxAC3PiyyshwhhZzLMdzSM55/xpKx5eq'),
(81, '', '', '$2y$10$MTpxO7ZO42Lsg9jlv3kbd.QfP6r8iCnyGntXAbmYEG99j2xClU.ii'),
(82, '', 'cobabuat@gmail.com', '$2y$10$rI5ojO3/zAJt4wCByCSuZexnoxKchlSAJDLbs1nS.cooVgOZIVg2.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `uploads`
--
ALTER TABLE `uploads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `uploads`
--
ALTER TABLE `uploads`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
