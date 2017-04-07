-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 06, 2017 at 05:21 PM
-- Server version: 5.7.16
-- PHP Version: 7.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yuzu_factory`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('0eulm0g7uhsdqmf7e8u6igq7utseefr4', '127.0.0.1', 1490909778, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439303930393737383b75736572726f6c657c733a343a22426f7373223b),
('3h7fljvsihdmaf1gqakc3g5f3dof34ov', '127.0.0.1', 1490913907, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439303931333930373b75736572726f6c657c733a343a22426f7373223b),
('3hqgc4a2o04em1c5n58bv32r487qf29a', '127.0.0.1', 1490916176, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439303931363137363b75736572726f6c657c733a343a22426f7373223b),
('3pvcnvsrs8dnbkiulg9bk1gabiccfvh4', '127.0.0.1', 1490917988, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439303931373938383b75736572726f6c657c733a343a22426f7373223b),
('4hq18ipfm7m6lqmgnkmr4e85srr62ttk', '127.0.0.1', 1490926226, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439303932363232363b75736572726f6c657c733a343a22426f7373223b),
('4tubn5jbh047i63f2b6g66qck8s67aac', '127.0.0.1', 1490926531, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439303932363533313b75736572726f6c657c733a343a22426f7373223b),
('6sm53mpqasbikt6dqjbjpkh4m4n4v0ge', '127.0.0.1', 1490909463, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439303930393436333b75736572726f6c657c733a343a22426f7373223b),
('71gufhk2gpnur3phfhhjad2raqrgo7cu', '127.0.0.1', 1490920814, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439303932303831343b75736572726f6c657c733a343a22426f7373223b),
('85oc6em8n232k5jtbfidmqau6qvloalh', '127.0.0.1', 1490917218, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439303931373231383b75736572726f6c657c733a343a22426f7373223b),
('8prc3n8c9ghemnfjc7llfhn7bj5pmlt1', '127.0.0.1', 1490919441, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439303931393434313b75736572726f6c657c733a343a22426f7373223b),
('8rihpb7enf7j3h7q6psi758ahbbskhpn', '127.0.0.1', 1490924094, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439303932343039343b75736572726f6c657c733a343a22426f7373223b),
('92p4nuhs6tpcl9ibeqb9pnl8iqsceasb', '127.0.0.1', 1490920457, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439303932303435373b75736572726f6c657c733a343a22426f7373223b),
('9q8j6gagn2tbkpg7q1d388nkcv', '127.0.0.1', 1491520713, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439313532303731333b),
('a1j8o8olcls0bvufq082v5odj1qqdjhc', '127.0.0.1', 1490923472, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439303932333437323b75736572726f6c657c733a343a22426f7373223b),
('a5fq45usojfki4crha2lj1c2aaa48mm6', '127.0.0.1', 1490924401, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439303932343430313b75736572726f6c657c733a343a22426f7373223b),
('bcoine9rmj5qht1eubt1ko11o8ldv543', '127.0.0.1', 1490918289, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439303931383238393b75736572726f6c657c733a343a22426f7373223b),
('bivsl10g4u41klb6hgdleaecktsp8t5u', '127.0.0.1', 1490911437, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439303931313433373b75736572726f6c657c733a343a22426f7373223b),
('bssqlkf0iqubna9nsop9pelkndgtj2me', '127.0.0.1', 1490910989, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439303931303938393b75736572726f6c657c733a343a22426f7373223b),
('d0sra66d8ao9apt17dsq6bq9oqqjl5pb', '127.0.0.1', 1490924885, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439303932343838353b75736572726f6c657c733a343a22426f7373223b),
('dft5lnrug6un97000vpr66dfr8n6fjiq', '127.0.0.1', 1490917654, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439303931373635343b75736572726f6c657c733a343a22426f7373223b),
('dk6dqi06ekjc5dtearmeqthhh8lgfc0o', '127.0.0.1', 1490926832, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439303932363833323b75736572726f6c657c733a343a22426f7373223b),
('e43dn3gk0b1durge1i5k0cftcglc3k11', '127.0.0.1', 1490913104, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439303931333130343b75736572726f6c657c733a353a224775657374223b),
('eq55gfgvg8v4h4finq8cgb9fcepqp54c', '127.0.0.1', 1490914395, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439303931343339353b75736572726f6c657c733a343a22426f7373223b),
('hnn21gs5tmhehnceci5u0cc90f73gibk', '127.0.0.1', 1490918823, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439303931383832333b75736572726f6c657c733a343a22426f7373223b),
('hp5l6td3i2m0roea1mihsvsg9ngu6dk2', '127.0.0.1', 1490913448, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439303931333434383b75736572726f6c657c733a343a22426f7373223b),
('ik9qbnkf0ducje29k6u4iu08cti1u09n', '127.0.0.1', 1490921144, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439303932313134343b75736572726f6c657c733a343a22426f7373223b),
('irhn5dkurrqp9d9jup34rgjoljgvp7dm', '127.0.0.1', 1490908853, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439303930383835333b75736572726f6c657c733a343a22426f7373223b),
('irn49uhldgkf0qkvoljokv40eqseufvc', '127.0.0.1', 1490912398, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439303931323339383b75736572726f6c657c733a343a22426f7373223b),
('jbln0nva9r4d362hai71dqi2joh9snjs', '127.0.0.1', 1490920076, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439303932303037363b75736572726f6c657c733a343a22426f7373223b),
('jo0qq9i0n4ko2gv3dds8lfiebe5f1lqr', '127.0.0.1', 1490922265, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439303932323236353b75736572726f6c657c733a343a22426f7373223b),
('m058ldehttgc0mncsciib5dhlu9ed1vg', '127.0.0.1', 1490919768, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439303931393736383b75736572726f6c657c733a343a22426f7373223b),
('o3i9do807o7t1bq24736docghhs8q9qs', '127.0.0.1', 1490922588, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439303932323538383b75736572726f6c657c733a343a22426f7373223b),
('ohj05ml9di2bo404e058em0c715bjad6', '127.0.0.1', 1490923023, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439303932333032333b75736572726f6c657c733a343a22426f7373223b),
('pdbrdj76v80t24oth720pf87c6fuou6v', '127.0.0.1', 1490914786, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439303931343738363b75736572726f6c657c733a363a22576f726b6572223b),
('ref4fa9oq5h6q07vung7umba8itpfod0', '127.0.0.1', 1490923791, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439303932333739313b75736572726f6c657c733a343a22426f7373223b),
('rj54rj8hvuld77fph7avlpmnauhopkpt', '127.0.0.1', 1490908483, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439303930383438333b75736572726f6c657c733a353a226f776e6572223b),
('sjrhsb6t2llgdfouedafruetqlcbi9ot', '127.0.0.1', 1490919138, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439303931393133383b75736572726f6c657c733a343a22426f7373223b),
('ujfpkeftvaaoe61nqrn4dsr9f6i2dufe', '127.0.0.1', 1490925267, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439303932353236373b75736572726f6c657c733a343a22426f7373223b),
('ut86un1ne4g4g8r0vo8ocfg236k0dt7g', '127.0.0.1', 1490926861, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439303932363833323b75736572726f6c657c733a343a22426f7373223b),
('vsu2o67qlt6e7f70668hi4vrp89ikid9', '127.0.0.1', 1490921810, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439303932313831303b75736572726f6c657c733a343a22426f7373223b);

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `ID` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `record_type` varchar(255) DEFAULT NULL,
  `info` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`ID`, `date`, `record_type`, `info`) VALUES
(0, '2017-03-31 00:17:22', 'Build', 'Part model: a3 Certificate: 169636'),
(0, '2017-03-31 00:17:22', 'Build', 'Part model: a3 Certificate: 1554c4'),
(0, '2017-03-31 00:17:22', 'Build', 'Part model: a3 Certificate: 163429'),
(0, '2017-03-31 00:17:22', 'Build', 'Part model: a3 Certificate: 2ed09c'),
(0, '2017-03-31 00:17:22', 'Build', 'Part model: a3 Certificate: 200ae1'),
(0, '2017-03-31 00:17:22', 'Build', 'Part model: a3 Certificate: 3fbf16'),
(0, '2017-03-31 00:17:22', 'Build', 'Part model: a3 Certificate: 255746'),
(0, '2017-03-31 00:17:22', 'Build', 'Part model: a3 Certificate: 2baf1c'),
(0, '2017-03-31 00:17:22', 'Build', 'Part model: a3 Certificate: 15b8aa'),
(0, '2017-03-31 00:17:22', 'Build', 'Part model: a3 Certificate: 3afcae'),
(0, '2017-03-31 00:17:28', 'Purchase', 'Part model: b2 Certificate: 249a3f'),
(0, '2017-03-31 00:17:28', 'Purchase', 'Part model: r3 Certificate: 2d4a80'),
(0, '2017-03-31 00:17:28', 'Purchase', 'Part model: b3 Certificate: 423dd4'),
(0, '2017-03-31 00:17:28', 'Purchase', 'Part model: r1 Certificate: 2c1fd9'),
(0, '2017-03-31 00:17:28', 'Purchase', 'Part model: b1 Certificate: 38be20'),
(0, '2017-03-31 00:17:28', 'Purchase', 'Part model: r3 Certificate: 183868'),
(0, '2017-03-31 00:17:28', 'Purchase', 'Part model: b3 Certificate: 2db06e'),
(0, '2017-03-31 00:17:28', 'Purchase', 'Part model: r3 Certificate: 21d0b7'),
(0, '2017-03-31 00:17:28', 'Purchase', 'Part model: b1 Certificate: 3098f2'),
(0, '2017-03-31 00:17:28', 'Purchase', 'Part model: m2 Certificate: 212897'),
(0, '2017-03-30 17:17:45', 'Assemble', 'Parts info: head(3098f2) body(249a3f) foot(2db06e)'),
(0, '2017-03-30 17:18:05', 'Return', 'Model Id: 207'),
(0, '2017-03-30 17:18:41', 'Sale', 'Head: 3098f2 Body: 249a3f Foot: 2db06e'),
(0, '2017-03-31 00:59:55', 'Build', 'Part model: a3 Certificate: 2e3cdb'),
(0, '2017-03-31 00:59:55', 'Build', 'Part model: a3 Certificate: 1174d9'),
(0, '2017-03-31 00:59:55', 'Build', 'Part model: a3 Certificate: 2dc3e0'),
(0, '2017-03-31 00:59:55', 'Build', 'Part model: a3 Certificate: 2ff3ee'),
(0, '2017-03-31 00:59:55', 'Build', 'Part model: a3 Certificate: 13af35'),
(0, '2017-03-31 00:59:55', 'Build', 'Part model: a3 Certificate: 2ad5ce'),
(0, '2017-03-31 00:59:55', 'Build', 'Part model: a3 Certificate: 18a718'),
(0, '2017-03-31 00:59:55', 'Build', 'Part model: a3 Certificate: 182982'),
(0, '2017-03-31 00:59:55', 'Build', 'Part model: a3 Certificate: 3fc8ed'),
(0, '2017-03-31 00:59:55', 'Build', 'Part model: a3 Certificate: 3052b7'),
(0, '2017-03-31 01:00:01', 'Purchase', 'Part model: r1 Certificate: 445208'),
(0, '2017-03-31 01:00:01', 'Purchase', 'Part model: w2 Certificate: 2e0a36'),
(0, '2017-03-31 01:00:01', 'Purchase', 'Part model: m1 Certificate: 38bdbe'),
(0, '2017-03-31 01:00:01', 'Purchase', 'Part model: r2 Certificate: 1fc4df'),
(0, '2017-03-31 01:00:01', 'Purchase', 'Part model: r2 Certificate: 3694ca'),
(0, '2017-03-31 01:00:01', 'Purchase', 'Part model: c3 Certificate: 2f04f9'),
(0, '2017-03-31 01:00:01', 'Purchase', 'Part model: c1 Certificate: 2c14ce'),
(0, '2017-03-31 01:00:01', 'Purchase', 'Part model: b1 Certificate: 136ec2'),
(0, '2017-03-31 01:00:01', 'Purchase', 'Part model: a2 Certificate: 227ba9'),
(0, '2017-03-31 01:00:01', 'Purchase', 'Part model: a3 Certificate: 4bbeac'),
(0, '2017-03-31 01:00:06', 'Purchase', 'Part model: a3 Certificate: 493419'),
(0, '2017-03-31 01:00:06', 'Purchase', 'Part model: c1 Certificate: 1a9085'),
(0, '2017-03-31 01:00:06', 'Purchase', 'Part model: r1 Certificate: 20f995'),
(0, '2017-03-31 01:00:06', 'Purchase', 'Part model: c2 Certificate: 419ce5'),
(0, '2017-03-31 01:00:06', 'Purchase', 'Part model: b1 Certificate: 29907e'),
(0, '2017-03-31 01:00:06', 'Purchase', 'Part model: r1 Certificate: 4c1fbe'),
(0, '2017-03-31 01:00:06', 'Purchase', 'Part model: a2 Certificate: 2a780f'),
(0, '2017-03-31 01:00:06', 'Purchase', 'Part model: w2 Certificate: 176202'),
(0, '2017-03-31 01:00:06', 'Purchase', 'Part model: a1 Certificate: 35e113'),
(0, '2017-03-31 01:00:06', 'Purchase', 'Part model: w3 Certificate: 3898bc'),
(0, '2017-03-31 01:00:10', 'Build', 'Part model: a3 Certificate: 34f0c1'),
(0, '2017-03-30 18:00:28', 'Assemble', 'Parts info: head(38bdbe) body(212897) foot(169636)'),
(0, '2017-03-30 18:00:54', 'Sale', 'Head: 38bdbe Body: 212897 Foot: 169636'),
(0, '2017-03-30 18:35:19', 'Return', 'Model Id: 224'),
(0, '2017-03-31 02:10:39', 'Purchase', 'Part model: m2 Certificate: 1c8bfb'),
(0, '2017-03-31 02:10:39', 'Purchase', 'Part model: m2 Certificate: 1c19c1'),
(0, '2017-03-31 02:10:39', 'Purchase', 'Part model: a3 Certificate: 24b012'),
(0, '2017-03-31 02:10:39', 'Purchase', 'Part model: c3 Certificate: 1d8910'),
(0, '2017-03-31 02:10:39', 'Purchase', 'Part model: w1 Certificate: 328728'),
(0, '2017-03-31 02:10:39', 'Purchase', 'Part model: w3 Certificate: 22e84d'),
(0, '2017-03-31 02:10:39', 'Purchase', 'Part model: c3 Certificate: 450f34'),
(0, '2017-03-31 02:10:39', 'Purchase', 'Part model: r2 Certificate: 1fe2ae'),
(0, '2017-03-31 02:10:39', 'Purchase', 'Part model: b3 Certificate: 4a3059'),
(0, '2017-03-31 02:10:39', 'Purchase', 'Part model: b3 Certificate: 2c4617'),
(0, '2017-03-31 02:10:43', 'Build', 'Part model: a3 Certificate: 486449'),
(0, '2017-03-31 02:10:43', 'Build', 'Part model: a3 Certificate: 44c1bf'),
(0, '2017-03-31 02:10:43', 'Build', 'Part model: a3 Certificate: 1ccd5c'),
(0, '2017-03-31 02:10:43', 'Build', 'Part model: a3 Certificate: 2714fc'),
(0, '2017-03-31 02:10:43', 'Build', 'Part model: a3 Certificate: 415236'),
(0, '2017-03-31 02:10:43', 'Build', 'Part model: a3 Certificate: 407cc5'),
(0, '2017-03-31 02:10:43', 'Build', 'Part model: a3 Certificate: 255a65'),
(0, '2017-03-31 02:10:43', 'Build', 'Part model: a3 Certificate: 1e846b'),
(0, '2017-03-31 02:10:43', 'Build', 'Part model: a3 Certificate: 38c52f'),
(0, '2017-03-31 02:10:43', 'Build', 'Part model: a3 Certificate: 39cc91'),
(0, '2017-03-31 02:10:49', 'Purchase', 'Part model: a3 Certificate: 4035d4'),
(0, '2017-03-31 02:10:49', 'Purchase', 'Part model: w2 Certificate: 41fecd'),
(0, '2017-03-31 02:10:49', 'Purchase', 'Part model: c2 Certificate: 4126b8'),
(0, '2017-03-31 02:10:49', 'Purchase', 'Part model: w2 Certificate: 1a36d6'),
(0, '2017-03-31 02:10:49', 'Purchase', 'Part model: m3 Certificate: 18d645'),
(0, '2017-03-31 02:10:49', 'Purchase', 'Part model: a2 Certificate: 252ea4'),
(0, '2017-03-31 02:10:49', 'Purchase', 'Part model: c1 Certificate: 3eecbd'),
(0, '2017-03-31 02:10:49', 'Purchase', 'Part model: c2 Certificate: 380b7a'),
(0, '2017-03-31 02:10:49', 'Purchase', 'Part model: a1 Certificate: 23119f'),
(0, '2017-03-31 02:10:49', 'Purchase', 'Part model: b1 Certificate: 28a44c'),
(0, '2017-03-31 02:11:01', 'Purchase', 'Part model: a3 Certificate: 2453f3'),
(0, '2017-03-31 02:11:01', 'Purchase', 'Part model: w1 Certificate: 1907f1'),
(0, '2017-03-31 02:11:01', 'Purchase', 'Part model: c1 Certificate: 33cfe3'),
(0, '2017-03-31 02:11:01', 'Purchase', 'Part model: a3 Certificate: 390866'),
(0, '2017-03-31 02:11:01', 'Purchase', 'Part model: r2 Certificate: 2f8f7f'),
(0, '2017-03-31 02:11:01', 'Purchase', 'Part model: b1 Certificate: 2a78c5'),
(0, '2017-03-31 02:11:01', 'Purchase', 'Part model: b1 Certificate: 38d517'),
(0, '2017-03-31 02:11:01', 'Purchase', 'Part model: b3 Certificate: 1d2006'),
(0, '2017-03-31 02:11:01', 'Purchase', 'Part model: b3 Certificate: 29643d'),
(0, '2017-03-31 02:11:01', 'Purchase', 'Part model: a3 Certificate: 441884'),
(0, '2017-03-31 02:11:07', 'Purchase', 'Part model: a3 Certificate: 314efe'),
(0, '2017-03-31 02:11:08', 'Purchase', 'Part model: c1 Certificate: 2a4bfa'),
(0, '2017-03-31 02:11:08', 'Purchase', 'Part model: b3 Certificate: 460a92'),
(0, '2017-03-31 02:11:08', 'Purchase', 'Part model: b2 Certificate: 37d173'),
(0, '2017-03-31 02:11:08', 'Purchase', 'Part model: a3 Certificate: 1bd8c8'),
(0, '2017-03-31 02:11:08', 'Purchase', 'Part model: r1 Certificate: 31a924'),
(0, '2017-03-31 02:11:08', 'Purchase', 'Part model: b3 Certificate: 179093'),
(0, '2017-03-31 02:11:08', 'Purchase', 'Part model: c3 Certificate: 2b6063'),
(0, '2017-03-31 02:11:08', 'Purchase', 'Part model: r3 Certificate: 2fa0db'),
(0, '2017-03-31 02:11:08', 'Purchase', 'Part model: c1 Certificate: 4223dc'),
(0, '2017-03-31 02:11:16', 'Purchase', 'Part model: m1 Certificate: 402034'),
(0, '2017-03-31 02:11:16', 'Purchase', 'Part model: b1 Certificate: 1932ed'),
(0, '2017-03-31 02:11:16', 'Purchase', 'Part model: a2 Certificate: 234ec6'),
(0, '2017-03-31 02:11:16', 'Purchase', 'Part model: a2 Certificate: 416b0f'),
(0, '2017-03-31 02:11:16', 'Purchase', 'Part model: r1 Certificate: 280010'),
(0, '2017-03-31 02:11:16', 'Purchase', 'Part model: c3 Certificate: 2c2190'),
(0, '2017-03-31 02:11:16', 'Purchase', 'Part model: w1 Certificate: 41d7ee'),
(0, '2017-03-31 02:11:16', 'Purchase', 'Part model: r3 Certificate: 30286b'),
(0, '2017-03-31 02:11:16', 'Purchase', 'Part model: m3 Certificate: 4a8153'),
(0, '2017-03-31 02:11:16', 'Purchase', 'Part model: r3 Certificate: 11fc38'),
(0, '2017-03-31 02:11:21', 'Build', 'Part model: a3 Certificate: 1e70a9'),
(0, '2017-03-31 02:11:21', 'Build', 'Part model: a3 Certificate: 2d0dde'),
(0, '2017-03-31 02:11:21', 'Build', 'Part model: a3 Certificate: 2f2b6f'),
(0, '2017-03-31 02:11:36', 'Purchase', 'Part model: c2 Certificate: 166b4d'),
(0, '2017-03-31 02:11:36', 'Purchase', 'Part model: w2 Certificate: 19fd12'),
(0, '2017-03-31 02:11:36', 'Purchase', 'Part model: w2 Certificate: 1dc80a'),
(0, '2017-03-31 02:11:36', 'Purchase', 'Part model: r1 Certificate: 3a9e8c'),
(0, '2017-03-31 02:11:36', 'Purchase', 'Part model: c3 Certificate: 20035f'),
(0, '2017-03-31 02:11:36', 'Purchase', 'Part model: r2 Certificate: 3a6f09'),
(0, '2017-03-31 02:11:36', 'Purchase', 'Part model: c2 Certificate: 1b39c1'),
(0, '2017-03-31 02:11:36', 'Purchase', 'Part model: b3 Certificate: 1ed302'),
(0, '2017-03-31 02:11:36', 'Purchase', 'Part model: w3 Certificate: 3db08a'),
(0, '2017-03-31 02:11:36', 'Purchase', 'Part model: b3 Certificate: 10ad97'),
(0, '2017-03-31 02:11:43', 'Build', 'Part model: a3 Certificate: 24aa3d'),
(0, '2017-03-31 02:11:43', 'Build', 'Part model: a3 Certificate: 3e0b49'),
(0, '2017-03-31 02:11:55', 'Purchase', 'Part model: r1 Certificate: 4841fa'),
(0, '2017-03-31 02:11:55', 'Purchase', 'Part model: r1 Certificate: 1f050b'),
(0, '2017-03-31 02:11:55', 'Purchase', 'Part model: b2 Certificate: 23f031'),
(0, '2017-03-31 02:11:55', 'Purchase', 'Part model: m3 Certificate: 17a74b'),
(0, '2017-03-31 02:11:55', 'Purchase', 'Part model: c2 Certificate: 4998a2'),
(0, '2017-03-31 02:11:55', 'Purchase', 'Part model: a1 Certificate: 32911b'),
(0, '2017-03-31 02:11:55', 'Purchase', 'Part model: b1 Certificate: 3dbed1'),
(0, '2017-03-31 02:11:55', 'Purchase', 'Part model: b1 Certificate: 13f3eb'),
(0, '2017-03-31 02:11:55', 'Purchase', 'Part model: m3 Certificate: 1702fc'),
(0, '2017-03-31 02:11:55', 'Purchase', 'Part model: c2 Certificate: 260687'),
(0, '2017-03-31 02:12:03', 'Build', 'Part model: a3 Certificate: 2521f9'),
(0, '2017-03-30 19:12:25', 'Assemble', 'Parts info: head(13f3eb) body(19fd12) foot(2c4617)'),
(0, '2017-03-30 19:12:36', 'Assemble', 'Parts info: head(3eecbd) body(1c19c1) foot(44c1bf)'),
(0, '2017-03-30 19:13:11', 'Assemble', 'Parts info: head(2a4bfa) body(23f031) foot(4a3059)'),
(0, '2017-03-31 02:13:10', 'Build', 'Part model: a3 Certificate: 1365c4'),
(0, '2017-03-31 02:13:10', 'Build', 'Part model: a3 Certificate: 2e2e6b'),
(0, '2017-03-31 02:13:10', 'Build', 'Part model: a3 Certificate: 3ebe92'),
(0, '2017-03-31 02:13:10', 'Build', 'Part model: a3 Certificate: 17eabf'),
(0, '2017-03-31 02:13:10', 'Build', 'Part model: a3 Certificate: 4222b0'),
(0, '2017-03-31 02:13:10', 'Build', 'Part model: a3 Certificate: 334d23'),
(0, '2017-03-30 19:13:30', 'Assemble', 'Parts info: head(23119f) body(227ba9) foot(486449)'),
(0, '2017-03-31 02:13:33', 'Purchase', 'Part model: w3 Certificate: 109a1c'),
(0, '2017-03-31 02:13:33', 'Purchase', 'Part model: r3 Certificate: 298115'),
(0, '2017-03-31 02:13:33', 'Purchase', 'Part model: w1 Certificate: 43fbd6'),
(0, '2017-03-31 02:13:33', 'Purchase', 'Part model: w2 Certificate: 173023'),
(0, '2017-03-31 02:13:33', 'Purchase', 'Part model: r1 Certificate: 1c07f5'),
(0, '2017-03-31 02:13:33', 'Purchase', 'Part model: c2 Certificate: 1f54e1'),
(0, '2017-03-31 02:13:33', 'Purchase', 'Part model: b1 Certificate: 2fe658'),
(0, '2017-03-31 02:13:33', 'Purchase', 'Part model: c2 Certificate: 21f090'),
(0, '2017-03-31 02:13:33', 'Purchase', 'Part model: b1 Certificate: 18bfbb'),
(0, '2017-03-31 02:13:33', 'Purchase', 'Part model: a1 Certificate: 110ded'),
(0, '2017-03-30 19:13:52', 'Assemble', 'Parts info: head(28a44c) body(37d173) foot(450f34)'),
(0, '2017-03-31 02:13:53', 'Build', 'Part model: a3 Certificate: 237c4c'),
(0, '2017-03-31 02:13:53', 'Build', 'Part model: a3 Certificate: 111a6f'),
(0, '2017-03-31 02:13:53', 'Build', 'Part model: a3 Certificate: 1baf8b'),
(0, '2017-03-31 02:13:53', 'Build', 'Part model: a3 Certificate: 472e0f'),
(0, '2017-03-31 02:14:17', 'Build', 'Part model: a3 Certificate: 42f4ec'),
(0, '2017-03-31 02:14:17', 'Build', 'Part model: a3 Certificate: 191132'),
(0, '2017-03-30 19:14:37', 'Assemble', 'Parts info: head(402034) body(1c8bfb) foot(2d4a80)'),
(0, '2017-03-31 02:14:42', 'Build', 'Part model: a3 Certificate: 2c175a'),
(0, '2017-03-31 02:14:42', 'Build', 'Part model: a3 Certificate: 2768ca'),
(0, '2017-03-30 19:14:59', 'Assemble', 'Parts info: head(4223dc) body(1fe2ae) foot(183868)'),
(0, '2017-03-30 19:15:17', 'Assemble', 'Parts info: head(4841fa) body(3a6f09) foot(1702fc)'),
(0, '2017-03-30 19:15:42', 'Assemble', 'Parts info: head(35e113) body(252ea4) foot(415236)'),
(0, '2017-03-30 19:16:04', 'Sale', 'Head: 35e113 Body: 252ea4 Foot: 415236'),
(0, '2017-03-30 19:16:19', 'Sale', 'Head: 4841fa Body: 3a6f09 Foot: 1702fc'),
(0, '2017-03-30 19:16:39', 'Sale', 'Head: 402034 Body: 1c8bfb Foot: 2d4a80'),
(0, '2017-03-30 19:16:57', 'Sale', 'Head: 13f3eb Body: 19fd12 Foot: 2c4617'),
(0, '2017-03-30 19:17:00', 'Sale', 'Head: 3eecbd Body: 1c19c1 Foot: 44c1bf'),
(0, '2017-03-30 19:17:08', 'Sale', 'Head: 28a44c Body: 37d173 Foot: 450f34'),
(0, '2017-03-30 19:17:13', 'Sale', 'Head: 23119f Body: 227ba9 Foot: 486449'),
(0, '2017-03-30 19:17:18', 'Sale', 'Head: 4223dc Body: 1fe2ae Foot: 183868'),
(0, '2017-03-30 19:17:24', 'Sale', 'Head: 2a4bfa Body: 23f031 Foot: 4a3059');

-- --------------------------------------------------------

--
-- Table structure for table `parts`
--

CREATE TABLE `parts` (
  `ID` int(11) NOT NULL,
  `ca` varchar(255) NOT NULL,
  `model` varchar(1) DEFAULT NULL,
  `piece` int(11) DEFAULT NULL,
  `plant` varchar(255) DEFAULT NULL,
  `stamp` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `parts`
--

INSERT INTO `parts` (`ID`, `ca`, `model`, `piece`, `plant`, `stamp`) VALUES
(196, '1554c4', 'a', 3, 'yuzu', '2017-03-31 00:17:22'),
(197, '163429', 'a', 3, 'yuzu', '2017-03-31 00:17:22'),
(198, '2ed09c', 'a', 3, 'yuzu', '2017-03-31 00:17:22'),
(199, '200ae1', 'a', 3, 'yuzu', '2017-03-31 00:17:22'),
(200, '3fbf16', 'a', 3, 'yuzu', '2017-03-31 00:17:22'),
(201, '255746', 'a', 3, 'yuzu', '2017-03-31 00:17:22'),
(202, '2baf1c', 'a', 3, 'yuzu', '2017-03-31 00:17:22'),
(203, '15b8aa', 'a', 3, 'yuzu', '2017-03-31 00:17:22'),
(204, '3afcae', 'a', 3, 'yuzu', '2017-03-31 00:17:22'),
(208, '2c1fd9', 'r', 1, 'yuzu', '2017-03-31 00:17:28'),
(209, '38be20', 'b', 1, 'yuzu', '2017-03-31 00:17:28'),
(212, '21d0b7', 'r', 3, 'yuzu', '2017-03-31 00:17:28'),
(215, '2e3cdb', 'a', 3, 'yuzu', '2017-03-31 00:59:55'),
(216, '1174d9', 'a', 3, 'yuzu', '2017-03-31 00:59:55'),
(217, '2dc3e0', 'a', 3, 'yuzu', '2017-03-31 00:59:55'),
(218, '2ff3ee', 'a', 3, 'yuzu', '2017-03-31 00:59:55'),
(219, '13af35', 'a', 3, 'yuzu', '2017-03-31 00:59:55'),
(220, '2ad5ce', 'a', 3, 'yuzu', '2017-03-31 00:59:55'),
(221, '18a718', 'a', 3, 'yuzu', '2017-03-31 00:59:55'),
(222, '182982', 'a', 3, 'yuzu', '2017-03-31 00:59:55'),
(223, '3fc8ed', 'a', 3, 'yuzu', '2017-03-31 00:59:55'),
(225, '445208', 'r', 1, 'yuzu', '2017-03-31 01:00:01'),
(226, '2e0a36', 'w', 2, 'yuzu', '2017-03-31 01:00:01'),
(228, '1fc4df', 'r', 2, 'yuzu', '2017-03-31 01:00:01'),
(229, '3694ca', 'r', 2, 'yuzu', '2017-03-31 01:00:01'),
(230, '2f04f9', 'c', 3, 'yuzu', '2017-03-31 01:00:01'),
(231, '2c14ce', 'c', 1, 'yuzu', '2017-03-31 01:00:01'),
(232, '136ec2', 'b', 1, 'yuzu', '2017-03-31 01:00:01'),
(234, '4bbeac', 'a', 3, 'yuzu', '2017-03-31 01:00:01'),
(235, '493419', 'a', 3, 'yuzu', '2017-03-31 01:00:06'),
(236, '1a9085', 'c', 1, 'yuzu', '2017-03-31 01:00:06'),
(237, '20f995', 'r', 1, 'yuzu', '2017-03-31 01:00:06'),
(238, '419ce5', 'c', 2, 'yuzu', '2017-03-31 01:00:06'),
(239, '29907e', 'b', 1, 'yuzu', '2017-03-31 01:00:06'),
(240, '4c1fbe', 'r', 1, 'yuzu', '2017-03-31 01:00:06'),
(241, '2a780f', 'a', 2, 'yuzu', '2017-03-31 01:00:06'),
(242, '176202', 'w', 2, 'yuzu', '2017-03-31 01:00:06'),
(244, '3898bc', 'w', 3, 'yuzu', '2017-03-31 01:00:06'),
(245, '34f0c1', 'a', 3, 'yuzu', '2017-03-31 01:00:10'),
(248, '24b012', 'a', 3, 'yuzu', '2017-03-31 02:10:39'),
(249, '1d8910', 'c', 3, 'yuzu', '2017-03-31 02:10:39'),
(250, '328728', 'w', 1, 'yuzu', '2017-03-31 02:10:39'),
(251, '22e84d', 'w', 3, 'yuzu', '2017-03-31 02:10:39'),
(258, '1ccd5c', 'a', 3, 'yuzu', '2017-03-31 02:10:43'),
(259, '2714fc', 'a', 3, 'yuzu', '2017-03-31 02:10:43'),
(261, '407cc5', 'a', 3, 'yuzu', '2017-03-31 02:10:43'),
(262, '255a65', 'a', 3, 'yuzu', '2017-03-31 02:10:43'),
(263, '1e846b', 'a', 3, 'yuzu', '2017-03-31 02:10:43'),
(264, '38c52f', 'a', 3, 'yuzu', '2017-03-31 02:10:43'),
(265, '39cc91', 'a', 3, 'yuzu', '2017-03-31 02:10:43'),
(266, '4035d4', 'a', 3, 'yuzu', '2017-03-31 02:10:49'),
(267, '41fecd', 'w', 2, 'yuzu', '2017-03-31 02:10:49'),
(268, '4126b8', 'c', 2, 'yuzu', '2017-03-31 02:10:49'),
(269, '1a36d6', 'w', 2, 'yuzu', '2017-03-31 02:10:49'),
(270, '18d645', 'm', 3, 'yuzu', '2017-03-31 02:10:49'),
(273, '380b7a', 'c', 2, 'yuzu', '2017-03-31 02:10:49'),
(276, '2453f3', 'a', 3, 'yuzu', '2017-03-31 02:11:01'),
(277, '1907f1', 'w', 1, 'yuzu', '2017-03-31 02:11:01'),
(278, '33cfe3', 'c', 1, 'yuzu', '2017-03-31 02:11:01'),
(279, '390866', 'a', 3, 'yuzu', '2017-03-31 02:11:01'),
(280, '2f8f7f', 'r', 2, 'yuzu', '2017-03-31 02:11:01'),
(281, '2a78c5', 'b', 1, 'yuzu', '2017-03-31 02:11:01'),
(282, '38d517', 'b', 1, 'yuzu', '2017-03-31 02:11:01'),
(283, '1d2006', 'b', 3, 'yuzu', '2017-03-31 02:11:01'),
(284, '29643d', 'b', 3, 'yuzu', '2017-03-31 02:11:01'),
(285, '441884', 'a', 3, 'yuzu', '2017-03-31 02:11:01'),
(286, '314efe', 'a', 3, 'yuzu', '2017-03-31 02:11:07'),
(288, '460a92', 'b', 3, 'yuzu', '2017-03-31 02:11:08'),
(290, '1bd8c8', 'a', 3, 'yuzu', '2017-03-31 02:11:08'),
(291, '31a924', 'r', 1, 'yuzu', '2017-03-31 02:11:08'),
(292, '179093', 'b', 3, 'yuzu', '2017-03-31 02:11:08'),
(293, '2b6063', 'c', 3, 'yuzu', '2017-03-31 02:11:08'),
(294, '2fa0db', 'r', 3, 'yuzu', '2017-03-31 02:11:08'),
(297, '1932ed', 'b', 1, 'yuzu', '2017-03-31 02:11:16'),
(298, '234ec6', 'a', 2, 'yuzu', '2017-03-31 02:11:16'),
(299, '416b0f', 'a', 2, 'yuzu', '2017-03-31 02:11:16'),
(300, '280010', 'r', 1, 'yuzu', '2017-03-31 02:11:16'),
(301, '2c2190', 'c', 3, 'yuzu', '2017-03-31 02:11:16'),
(302, '41d7ee', 'w', 1, 'yuzu', '2017-03-31 02:11:16'),
(303, '30286b', 'r', 3, 'yuzu', '2017-03-31 02:11:16'),
(304, '4a8153', 'm', 3, 'yuzu', '2017-03-31 02:11:16'),
(305, '11fc38', 'r', 3, 'yuzu', '2017-03-31 02:11:16'),
(306, '1e70a9', 'a', 3, 'yuzu', '2017-03-31 02:11:21'),
(307, '2d0dde', 'a', 3, 'yuzu', '2017-03-31 02:11:21'),
(308, '2f2b6f', 'a', 3, 'yuzu', '2017-03-31 02:11:21'),
(309, '166b4d', 'c', 2, 'yuzu', '2017-03-31 02:11:36'),
(311, '1dc80a', 'w', 2, 'yuzu', '2017-03-31 02:11:36'),
(312, '3a9e8c', 'r', 1, 'yuzu', '2017-03-31 02:11:36'),
(313, '20035f', 'c', 3, 'yuzu', '2017-03-31 02:11:36'),
(315, '1b39c1', 'c', 2, 'yuzu', '2017-03-31 02:11:36'),
(316, '1ed302', 'b', 3, 'yuzu', '2017-03-31 02:11:36'),
(317, '3db08a', 'w', 3, 'yuzu', '2017-03-31 02:11:36'),
(318, '10ad97', 'b', 3, 'yuzu', '2017-03-31 02:11:36'),
(319, '24aa3d', 'a', 3, 'yuzu', '2017-03-31 02:11:43'),
(320, '3e0b49', 'a', 3, 'yuzu', '2017-03-31 02:11:43'),
(322, '1f050b', 'r', 1, 'yuzu', '2017-03-31 02:11:55'),
(324, '17a74b', 'm', 3, 'yuzu', '2017-03-31 02:11:55'),
(325, '4998a2', 'c', 2, 'yuzu', '2017-03-31 02:11:55'),
(326, '32911b', 'a', 1, 'yuzu', '2017-03-31 02:11:55'),
(327, '3dbed1', 'b', 1, 'yuzu', '2017-03-31 02:11:55'),
(330, '260687', 'c', 2, 'yuzu', '2017-03-31 02:11:55'),
(331, '2521f9', 'a', 3, 'yuzu', '2017-03-31 02:12:03'),
(332, '1365c4', 'a', 3, 'yuzu', '2017-03-31 02:13:10'),
(333, '2e2e6b', 'a', 3, 'yuzu', '2017-03-31 02:13:10'),
(334, '3ebe92', 'a', 3, 'yuzu', '2017-03-31 02:13:10'),
(335, '17eabf', 'a', 3, 'yuzu', '2017-03-31 02:13:10'),
(336, '4222b0', 'a', 3, 'yuzu', '2017-03-31 02:13:10'),
(337, '334d23', 'a', 3, 'yuzu', '2017-03-31 02:13:10'),
(338, '109a1c', 'w', 3, 'yuzu', '2017-03-31 02:13:33'),
(339, '298115', 'r', 3, 'yuzu', '2017-03-31 02:13:33'),
(340, '43fbd6', 'w', 1, 'yuzu', '2017-03-31 02:13:33'),
(341, '173023', 'w', 2, 'yuzu', '2017-03-31 02:13:33'),
(342, '1c07f5', 'r', 1, 'yuzu', '2017-03-31 02:13:33'),
(343, '1f54e1', 'c', 2, 'yuzu', '2017-03-31 02:13:33'),
(344, '2fe658', 'b', 1, 'yuzu', '2017-03-31 02:13:33'),
(345, '21f090', 'c', 2, 'yuzu', '2017-03-31 02:13:33'),
(346, '18bfbb', 'b', 1, 'yuzu', '2017-03-31 02:13:33'),
(347, '110ded', 'a', 1, 'yuzu', '2017-03-31 02:13:33'),
(348, '237c4c', 'a', 3, 'yuzu', '2017-03-31 02:13:53'),
(349, '111a6f', 'a', 3, 'yuzu', '2017-03-31 02:13:53'),
(350, '1baf8b', 'a', 3, 'yuzu', '2017-03-31 02:13:53'),
(351, '472e0f', 'a', 3, 'yuzu', '2017-03-31 02:13:53'),
(352, '42f4ec', 'a', 3, 'yuzu', '2017-03-31 02:14:17'),
(353, '191132', 'a', 3, 'yuzu', '2017-03-31 02:14:17'),
(354, '2c175a', 'a', 3, 'yuzu', '2017-03-31 02:14:42'),
(355, '2768ca', 'a', 3, 'yuzu', '2017-03-31 02:14:42');

-- --------------------------------------------------------

--
-- Table structure for table `robots`
--

CREATE TABLE `robots` (
  `ID` int(11) NOT NULL,
  `head_ca` varchar(255) NOT NULL,
  `body_ca` varchar(255) NOT NULL,
  `foot_ca` varchar(255) NOT NULL,
  `head_model` varchar(1) NOT NULL,
  `body_model` varchar(1) NOT NULL,
  `foot_model` varchar(1) NOT NULL,
  `head_piece` int(11) NOT NULL,
  `body_piece` int(11) NOT NULL,
  `foot_piece` int(11) NOT NULL,
  `assemble_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `site_statistics`
--

CREATE TABLE `site_statistics` (
  `ID` int(11) NOT NULL,
  `money_spent` bigint(20) DEFAULT NULL,
  `money_earned` bigint(20) DEFAULT NULL,
  `apikey` varchar(255) NOT NULL,
  `secret` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `site_statistics`
--

INSERT INTO `site_statistics` (`ID`, `money_spent`, `money_earned`, `apikey`, `secret`) VALUES
(1, 1100, 230, '1a5443', '4676bd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `parts`
--
ALTER TABLE `parts`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `robots`
--
ALTER TABLE `robots`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `site_statistics`
--
ALTER TABLE `site_statistics`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `parts`
--
ALTER TABLE `parts`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=356;
--
-- AUTO_INCREMENT for table `robots`
--
ALTER TABLE `robots`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `site_statistics`
--
ALTER TABLE `site_statistics`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
