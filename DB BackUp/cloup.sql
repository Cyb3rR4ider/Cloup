-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Φιλοξενητής: 127.0.0.1
-- Χρόνος δημιουργίας: 04 Ιουν 2020 στις 18:21:39
-- Έκδοση διακομιστή: 10.4.11-MariaDB
-- Έκδοση PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Βάση δεδομένων: `cloup`
--
CREATE DATABASE IF NOT EXISTS `cloup` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `cloup`;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `address_ergazomenou`
--

CREATE TABLE `address_ergazomenou` (
  `odos` varchar(45) DEFAULT NULL,
  `arithmos` varchar(5) DEFAULT NULL,
  `polh` varchar(45) DEFAULT NULL,
  `zip_code` int(10) DEFAULT NULL,
  `kwd_ergazomenou_adr` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Άδειασμα δεδομένων του πίνακα `address_ergazomenou`
--

INSERT INTO `address_ergazomenou` (`odos`, `arithmos`, `polh`, `zip_code`, `kwd_ergazomenou_adr`) VALUES
('kanari', '15', 'athina', 13254, 1),
('mini', '12', 'paro', 12340, 2),
('mitsiou', '32', 'tirana', 18742, 3),
('pasbadis', '32', 'tirana', 82391, 4),
('konrdi', '11', 'mikonos', 12942, 5),
('karais', '6', 'thesaloniki', 21875, 6),
('mitrio', '9', 'larisa', 53753, 7),
('rodou', '48', 'petralona', 89237, 8),
('profiti', '14', 'athina', 14736, 9),
('thodou', '26', 'tirana', 12984, 10),
('staurou', '66', 'rodos', 23215, 11),
('minou', '9', 'rethimno', 12386, 12),
('stauropoulou', '99', 'ioaninna', 12353, 13);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `credentials`
--

CREATE TABLE `credentials` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `kwd_ergazom_cred` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Άδειασμα δεδομένων του πίνακα `credentials`
--

INSERT INTO `credentials` (`username`, `password`, `kwd_ergazom_cred`) VALUES
('antonis', 'thodos', 13);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `ekpaideysh`
--

CREATE TABLE `ekpaideysh` (
  `kwd_ptyxio` int(11) NOT NULL,
  `per_ptyxiou` varchar(45) DEFAULT NULL,
  `vathmos` varchar(15) DEFAULT NULL,
  `date_apokthshs` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Άδειασμα δεδομένων του πίνακα `ekpaideysh`
--

INSERT INTO `ekpaideysh` (`kwd_ptyxio`, `per_ptyxiou`, `vathmos`, `date_apokthshs`) VALUES
(1, 'ECPE English', '9', '2018-05-11'),
(2, 'GERX Gerxedu', '8', '2018-06-14'),
(3, 'TTRI Ttriedu', '10', '2018-06-15'),
(4, 'MLTR mltrspanish ', '9', '2018-07-13'),
(5, 'ERT erttv', '6', '2018-09-10'),
(6, 'NOCA nocacaffee', '8', '2018-09-21'),
(7, 'CPIR cpirrr', '9', '2018-12-03'),
(8, 'PEPA pepathepig', '7', '2018-12-19'),
(9, 'PPP peepeeepeeee', '7', '2019-05-10'),
(10, 'SXET sxetikaakuro', '6', '2019-05-20');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `eksartomenos`
--

CREATE TABLE `eksartomenos` (
  `AMKA_eksart` int(11) NOT NULL,
  `Onoma_eksart` varchar(45) DEFAULT NULL,
  `Eponymo_eksart` varchar(45) DEFAULT NULL,
  `DOB_eksart` date DEFAULT NULL,
  `Fylo_eksart` varchar(1) DEFAULT NULL,
  `kod_prostati` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Άδειασμα δεδομένων του πίνακα `eksartomenos`
--

INSERT INTO `eksartomenos` (`AMKA_eksart`, `Onoma_eksart`, `Eponymo_eksart`, `DOB_eksart`, `Fylo_eksart`, `kod_prostati`) VALUES
(1182940209, 'makakis', 'piou', '2019-08-05', 'F', 11),
(1234567891, 'dimitris', 'dimitriou', '2018-02-05', 'M', 1),
(1242497697, 'takis', 'papakis', '2019-12-17', 'M', 9),
(1249023918, 'athonis', 'thodos', '2020-01-12', 'F', 10),
(1254121239, 'viki', 'nomikou', '2019-08-05', 'M', 8),
(1254125234, 'maria', 'kalou', '2020-01-12', 'M', 13),
(1258241241, 'makis', 'karaiskou', '2019-08-12', 'F', 7),
(1284723242, 'marios', 'mariou', '2019-08-12', 'F', 3),
(1421243216, 'dimitgis', 'katsa', '2019-10-14', 'F', 6),
(1423321211, 'giorgos', 'pasvantis', '2019-08-05', 'F', 2),
(1521322112, 'nikos', 'calathis', '2019-12-08', 'F', 12),
(1824912336, 'anastasia', 'pasvanti', '2019-06-17', 'M', 5),
(1984726321, 'giannis', 'giannou', '2019-07-21', 'M', 4);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `epimorfosi`
--

CREATE TABLE `epimorfosi` (
  `ekpaideyomenos` int(11) DEFAULT NULL,
  `eidikeysh` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Άδειασμα δεδομένων του πίνακα `epimorfosi`
--

INSERT INTO `epimorfosi` (`ekpaideyomenos`, `eidikeysh`) VALUES
(5, 7),
(2, 1),
(9, 2),
(13, 4),
(7, 10),
(13, 1),
(8, 8);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `ergazomenoi_se_erga`
--

CREATE TABLE `ergazomenoi_se_erga` (
  `kwd_ergou` int(11) DEFAULT NULL,
  `kwd_ergazom_ergo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Άδειασμα δεδομένων του πίνακα `ergazomenoi_se_erga`
--

INSERT INTO `ergazomenoi_se_erga` (`kwd_ergou`, `kwd_ergazom_ergo`) VALUES
(1, 5),
(1, 2),
(18, 6),
(19, 9),
(13, 11),
(11, 7),
(12, 11),
(1, 1),
(15, 5),
(19, 6),
(7, 13),
(20, 13),
(11, 7);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `ergazomenos`
--

CREATE TABLE `ergazomenos` (
  `kwd_ergazomenou` int(11) NOT NULL,
  `Eponymo_ergazom` varchar(45) DEFAULT NULL,
  `Onoma_Ergazom` varchar(45) DEFAULT NULL,
  `Patronymo_Ergazom` varchar(45) DEFAULT NULL,
  `Fyllo_Ergaz` varchar(1) DEFAULT NULL,
  `AFM_Ergaz` int(10) DEFAULT NULL,
  `DOB_Ergazom` date DEFAULT NULL,
  `Tel_Ergaz` int(15) DEFAULT NULL,
  `Salary_Ergazom` double DEFAULT NULL,
  `Kod_tm_ergazom` int(11) DEFAULT NULL,
  `user_type_ergazom` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Άδειασμα δεδομένων του πίνακα `ergazomenos`
--

INSERT INTO `ergazomenos` (`kwd_ergazomenou`, `Eponymo_ergazom`, `Onoma_Ergazom`, `Patronymo_Ergazom`, `Fyllo_Ergaz`, `AFM_Ergaz`, `DOB_Ergazom`, `Tel_Ergaz`, `Salary_Ergazom`, `Kod_tm_ergazom`, `user_type_ergazom`) VALUES
(1, 'KARAISKOS', 'GIANNIS', 'KARAISKOS', 'A', 111111111, '0000-00-00', 691111111, 1e20, 1, 1),
(2, 'GELDIS', 'ANDREAS', 'GELDIS', 'M', 111111112, '0000-00-00', 691111112, 900, 2, 2),
(3, 'VASSILAKOPOULOS', 'HARRIS', 'VASSILAKOPOULOS', 'M', 111111113, '0000-00-00', 691111113, 200, 3, 2),
(4, 'PAPAEMMANOUHL', 'ORESTHS', 'PAPAEMMANOUHL', 'M', 111111114, '0000-00-00', 691111114, 800, 4, 2),
(5, 'ABDUL', 'MANAN', 'ABDUL', 'M', 111111115, '0000-00-00', 691111115, 850, 5, 2),
(6, 'MORAKOS', 'IOANNIS', 'MORAKOS', 'M', 111111116, '0000-00-00', 691111116, 750, 6, 2),
(7, 'MASTORAS', 'GRIGORIS', 'MASTORAS', 'M', 111111117, '0000-00-00', 691111117, 600, 7, 2),
(8, 'SFENDYLAKIS', 'GIANNIS', 'SFENDYLAKIS', 'M', 111111118, '0000-00-00', 691111118, 1650, 8, 2),
(9, 'KALOGIANNAKIS', 'ALEXANDROS', 'KALOGIANNAKIS', 'M', 111111119, '0000-00-00', 691111119, 1000, 9, 2),
(10, 'VISKADOURAKHS', 'MIXALIS', 'VISKADOURAKHS', 'M', 111111120, '0000-00-00', 691111120, 360, 10, 2),
(11, 'SKORDILAKIS', 'TASOS', 'SKORDILAKIS', 'M', 111111124, '0000-00-00', 691111124, 1500, 11, 2),
(12, 'LOLOS', 'KONSTANTINOS', 'LOLOS', 'M', 111111123, '0000-00-00', 691111123, 740, 12, 2),
(13, 'THODOS', 'ANTONIS', 'THODOS', 'M', 111111130, '0000-00-00', 691111129, 2150, 13, 1);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `ergo`
--

CREATE TABLE `ergo` (
  `kwd_ergou` int(11) NOT NULL,
  `perigrafh_ergou` varchar(255) DEFAULT NULL,
  `finish_date` date DEFAULT NULL,
  `start_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Άδειασμα δεδομένων του πίνακα `ergo`
--

INSERT INTO `ergo` (`kwd_ergou`, `perigrafh_ergou`, `finish_date`, `start_date`) VALUES
(1, 'Eshop Ζαχαροπλαστείου', NULL, '2019-12-03'),
(2, 'εξοπλισμός ιδιωτικού σχολείου Ψυχικού  με ηλεκτρονικούς υπολογιστές', '2020-05-14', '2020-06-03'),
(3, 'ανάπτυξη εφαρμογής για το δικηγορικό γραφείο του Καιμακάμη', NULL, '2020-05-27'),
(4, 'διαφήμιση για το νέο μοντέλο κινητού AL2020', '2020-06-01', '2020-06-10'),
(5, 'επίλυση του προβλήματος σύνδεσης στο δίκτυο των ορόφων 4 και 5', NULL, '2020-06-18'),
(6, 'παρουσίαση των νέων υπηρεσιών σε παλιούς πελάτες', '2020-07-01', '2020-07-22'),
(7, 'κατωχήρωση νέων εμπορικών σημάτων ', '2020-06-12', '2020-06-25'),
(8, 'κάστινκ μοντέλων για διαφημιστικό ', '2020-07-02', '2020-07-23'),
(9, 'διαγωνισμός για εφαρμογή του υπουργείου παιδείας ', '2020-08-06', '2020-08-19'),
(10, 'εξοπλισμός διαδραστικής τάξης για φροντιστήρια αγγλικών ', '2020-09-02', '2020-09-23'),
(11, 'Εγκατάσταση δικτύου Περισσός', '0000-00-00', '2017-02-09'),
(12, 'Ανάπτυξη εφαρμογών ιατρικής', '0000-00-00', '2018-11-11'),
(13, 'Σχεδίαση ΒΔ εμπορικού κέντρου', '0000-00-00', '2019-01-13'),
(14, 'Διαδραστικά παιχνίδια για παιδιά', '0000-00-00', '2013-08-16'),
(15, 'Αναζήτηση νέων προγραμματιστών', '0000-00-00', '2014-08-12'),
(16, 'Αναζήτηση νέων προγραμματιστών', '0000-00-00', '2013-06-19'),
(17, 'Αναζήτηση νέων προγραμματιστών', '0000-00-00', '2012-03-10'),
(18, 'Αναζήτηση νέων προγραμματιστών', '0000-00-00', '2020-02-24'),
(19, 'Σεμινάριο JavaScript προγραμματιστών', '0000-00-00', '2009-05-13'),
(20, 'Εκπαίδευση Αστροναυτών', '0000-00-00', '2020-05-13'),
(21, 'Αναζήτηση νέων ηλεκτρολόγων', '0000-00-00', '2020-05-13');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `oxhma`
--

CREATE TABLE `oxhma` (
  `ar_kykloforias` varchar(10) NOT NULL,
  `xroma_oxhm` varchar(45) DEFAULT NULL,
  `montelo_oxhm` varchar(45) DEFAULT NULL,
  `marka_oxhm` varchar(45) DEFAULT NULL,
  `odhgos` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Άδειασμα δεδομένων του πίνακα `oxhma`
--

INSERT INTO `oxhma` (`ar_kykloforias`, `xroma_oxhm`, `montelo_oxhm`, `marka_oxhm`, `odhgos`) VALUES
('DFP7428 ', 'Red ', 'C1', 'Citroen ', 11),
('DME1002 ', 'White ', 'TurboIQLXT', 'Polaris ', 12),
('EBF9239 ', 'Silver ', '3EX', 'Mazda ', 13),
('FJJ6997 ', 'White ', 'ETV1000', 'APRILIA ', 10),
('FTF8713 ', 'Silver ', 'Yaris', 'Toyota ', 9),
('HIT9200 ', 'Black ', 'Cayenne', 'Porsche ', 8),
('HIU4501 ', 'White ', 'i8', 'BMW ', 7),
('HZJ3939 ', 'White ', 'X4', 'BMW ', 6),
('ION3455 ', 'Black ', 'Civic', 'Honda ', 5),
('IQI3497 ', 'Black ', 'YFM350', 'Yamaha ', 4),
('MHT1234 ', 'Black ', 'Polo', 'Volkswagen ', 3),
('OMN3476 ', 'Black ', 'Multipla', 'Fiat ', 2),
('PAP1363 ', 'Green ', 'Focus', 'Ford ', 1);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `syzygos`
--

CREATE TABLE `syzygos` (
  `AMKA_syzygou` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `tekno`
--

CREATE TABLE `tekno` (
  `AMKA_teknou` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Άδειασμα δεδομένων του πίνακα `tekno`
--

INSERT INTO `tekno` (`AMKA_teknou`) VALUES
(1249023918),
(1824912336);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `tmhma`
--

CREATE TABLE `tmhma` (
  `kwd_tmhmatos` int(11) NOT NULL,
  `onoma_tmhmatos` varchar(45) DEFAULT NULL,
  `kwd_proistamenou` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Άδειασμα δεδομένων του πίνακα `tmhma`
--

INSERT INTO `tmhma` (`kwd_tmhmatos`, `onoma_tmhmatos`, `kwd_proistamenou`) VALUES
(1, 'IT', 1),
(2, 'ANAPTYJHS_LOGISMIKOY', 2),
(3, 'MARKETING', 3),
(4, 'LOGISTIRIO', 4),
(5, 'PARAGGELIVN', 5),
(6, 'EFODIASMOU', 6),
(7, 'THL_KENTRO', 7),
(8, 'HR', 13),
(9, 'PWLHSEWN', 8),
(10, 'OIKONOMIKO', 9),
(11, 'NOMIKO', 10),
(12, 'KATHARIOTHTAS', 12),
(13, 'GRAMMATEIA', 11);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `tmhmata_se_erga`
--

CREATE TABLE `tmhmata_se_erga` (
  `kwd_tmhmatos_ergou` int(11) DEFAULT NULL,
  `kwd_ergou_tmhma` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Άδειασμα δεδομένων του πίνακα `tmhmata_se_erga`
--

INSERT INTO `tmhmata_se_erga` (`kwd_tmhmatos_ergou`, `kwd_ergou_tmhma`) VALUES
(2, 12),
(13, 11),
(6, 1),
(8, 21),
(8, 15),
(8, 16),
(1, 11),
(12, 20),
(4, 11),
(3, 4),
(11, 9),
(10, 7);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `user_type`
--

CREATE TABLE `user_type` (
  `user_type_id` int(5) NOT NULL,
  `user_type_name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Άδειασμα δεδομένων του πίνακα `user_type`
--

INSERT INTO `user_type` (`user_type_id`, `user_type_name`) VALUES
(1, 'Administrator'),
(2, 'Simple User');

--
-- Ευρετήρια για άχρηστους πίνακες
--

--
-- Ευρετήρια για πίνακα `address_ergazomenou`
--
ALTER TABLE `address_ergazomenou`
  ADD KEY `kwd_ergazomenou_adr` (`kwd_ergazomenou_adr`);

--
-- Ευρετήρια για πίνακα `credentials`
--
ALTER TABLE `credentials`
  ADD PRIMARY KEY (`username`),
  ADD KEY `kwd_ergazom_cred` (`kwd_ergazom_cred`);

--
-- Ευρετήρια για πίνακα `ekpaideysh`
--
ALTER TABLE `ekpaideysh`
  ADD PRIMARY KEY (`kwd_ptyxio`);

--
-- Ευρετήρια για πίνακα `eksartomenos`
--
ALTER TABLE `eksartomenos`
  ADD PRIMARY KEY (`AMKA_eksart`),
  ADD KEY `kod_prostati` (`kod_prostati`);

--
-- Ευρετήρια για πίνακα `epimorfosi`
--
ALTER TABLE `epimorfosi`
  ADD KEY `eidikeysh` (`eidikeysh`),
  ADD KEY `ekpaideyomenos` (`ekpaideyomenos`);

--
-- Ευρετήρια για πίνακα `ergazomenoi_se_erga`
--
ALTER TABLE `ergazomenoi_se_erga`
  ADD KEY `kwd_ergou` (`kwd_ergou`),
  ADD KEY `kwd_ergazom_ergo` (`kwd_ergazom_ergo`);

--
-- Ευρετήρια για πίνακα `ergazomenos`
--
ALTER TABLE `ergazomenos`
  ADD PRIMARY KEY (`kwd_ergazomenou`),
  ADD KEY `ergazomenos_ibfk_2` (`user_type_ergazom`),
  ADD KEY `ergazomenos_ibfk_3` (`Kod_tm_ergazom`);

--
-- Ευρετήρια για πίνακα `ergo`
--
ALTER TABLE `ergo`
  ADD PRIMARY KEY (`kwd_ergou`);

--
-- Ευρετήρια για πίνακα `oxhma`
--
ALTER TABLE `oxhma`
  ADD PRIMARY KEY (`ar_kykloforias`),
  ADD KEY `odhgos` (`odhgos`);

--
-- Ευρετήρια για πίνακα `syzygos`
--
ALTER TABLE `syzygos`
  ADD PRIMARY KEY (`AMKA_syzygou`);

--
-- Ευρετήρια για πίνακα `tekno`
--
ALTER TABLE `tekno`
  ADD PRIMARY KEY (`AMKA_teknou`);

--
-- Ευρετήρια για πίνακα `tmhma`
--
ALTER TABLE `tmhma`
  ADD PRIMARY KEY (`kwd_tmhmatos`),
  ADD KEY `kwd_proistamenou` (`kwd_proistamenou`);

--
-- Ευρετήρια για πίνακα `tmhmata_se_erga`
--
ALTER TABLE `tmhmata_se_erga`
  ADD KEY `kwd_tmhmatos_ergou` (`kwd_tmhmatos_ergou`),
  ADD KEY `kwd_ergou_tmhma` (`kwd_ergou_tmhma`);

--
-- Ευρετήρια για πίνακα `user_type`
--
ALTER TABLE `user_type`
  ADD PRIMARY KEY (`user_type_id`);

--
-- AUTO_INCREMENT για άχρηστους πίνακες
--

--
-- AUTO_INCREMENT για πίνακα `ekpaideysh`
--
ALTER TABLE `ekpaideysh`
  MODIFY `kwd_ptyxio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT για πίνακα `eksartomenos`
--
ALTER TABLE `eksartomenos`
  MODIFY `AMKA_eksart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1984726322;

--
-- AUTO_INCREMENT για πίνακα `ergazomenos`
--
ALTER TABLE `ergazomenos`
  MODIFY `kwd_ergazomenou` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT για πίνακα `ergo`
--
ALTER TABLE `ergo`
  MODIFY `kwd_ergou` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT για πίνακα `tmhma`
--
ALTER TABLE `tmhma`
  MODIFY `kwd_tmhmatos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Περιορισμοί για άχρηστους πίνακες
--

--
-- Περιορισμοί για πίνακα `address_ergazomenou`
--
ALTER TABLE `address_ergazomenou`
  ADD CONSTRAINT `address_ergazomenou_ibfk_1` FOREIGN KEY (`kwd_ergazomenou_adr`) REFERENCES `ergazomenos` (`kwd_ergazomenou`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Περιορισμοί για πίνακα `credentials`
--
ALTER TABLE `credentials`
  ADD CONSTRAINT `credentials_ibfk_1` FOREIGN KEY (`kwd_ergazom_cred`) REFERENCES `ergazomenos` (`kwd_ergazomenou`);

--
-- Περιορισμοί για πίνακα `eksartomenos`
--
ALTER TABLE `eksartomenos`
  ADD CONSTRAINT `eksartomenos_ibfk_1` FOREIGN KEY (`kod_prostati`) REFERENCES `ergazomenos` (`kwd_ergazomenou`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Περιορισμοί για πίνακα `epimorfosi`
--
ALTER TABLE `epimorfosi`
  ADD CONSTRAINT `epimorfosi_ibfk_1` FOREIGN KEY (`eidikeysh`) REFERENCES `ekpaideysh` (`kwd_ptyxio`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `epimorfosi_ibfk_2` FOREIGN KEY (`ekpaideyomenos`) REFERENCES `ergazomenos` (`kwd_ergazomenou`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Περιορισμοί για πίνακα `ergazomenoi_se_erga`
--
ALTER TABLE `ergazomenoi_se_erga`
  ADD CONSTRAINT `ergazomenoi_se_erga_ibfk_1` FOREIGN KEY (`kwd_ergou`) REFERENCES `ergo` (`kwd_ergou`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `ergazomenoi_se_erga_ibfk_2` FOREIGN KEY (`kwd_ergazom_ergo`) REFERENCES `ergazomenos` (`kwd_ergazomenou`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Περιορισμοί για πίνακα `ergazomenos`
--
ALTER TABLE `ergazomenos`
  ADD CONSTRAINT `ergazomenos_ibfk_2` FOREIGN KEY (`user_type_ergazom`) REFERENCES `user_type` (`user_type_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `ergazomenos_ibfk_3` FOREIGN KEY (`Kod_tm_ergazom`) REFERENCES `tmhma` (`kwd_tmhmatos`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Περιορισμοί για πίνακα `oxhma`
--
ALTER TABLE `oxhma`
  ADD CONSTRAINT `oxhma_ibfk_1` FOREIGN KEY (`odhgos`) REFERENCES `ergazomenos` (`kwd_ergazomenou`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Περιορισμοί για πίνακα `syzygos`
--
ALTER TABLE `syzygos`
  ADD CONSTRAINT `syzygos_ibfk_1` FOREIGN KEY (`AMKA_syzygou`) REFERENCES `eksartomenos` (`AMKA_eksart`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Περιορισμοί για πίνακα `tekno`
--
ALTER TABLE `tekno`
  ADD CONSTRAINT `tekno_ibfk_1` FOREIGN KEY (`AMKA_teknou`) REFERENCES `eksartomenos` (`AMKA_eksart`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Περιορισμοί για πίνακα `tmhma`
--
ALTER TABLE `tmhma`
  ADD CONSTRAINT `tmhma_ibfk_1` FOREIGN KEY (`kwd_proistamenou`) REFERENCES `ergazomenos` (`kwd_ergazomenou`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Περιορισμοί για πίνακα `tmhmata_se_erga`
--
ALTER TABLE `tmhmata_se_erga`
  ADD CONSTRAINT `tmhmata_se_erga_ibfk_1` FOREIGN KEY (`kwd_tmhmatos_ergou`) REFERENCES `tmhma` (`kwd_tmhmatos`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `tmhmata_se_erga_ibfk_2` FOREIGN KEY (`kwd_ergou_tmhma`) REFERENCES `ergo` (`kwd_ergou`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
