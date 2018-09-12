-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 12 Sep 2018 pada 08.07
-- Versi Server: 10.1.10-MariaDB
-- PHP Version: 7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `theklakklik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('b37aj5nm2npcset34b2ndmqsjaagdnbn', '::1', 1536726050, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363732363035303b),
('ep13ppvnav0ubmei37t3ne7j0j6ofaa1', '::1', 1536731289, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363733313238393b636172745f636f6e74656e74737c613a343a7b733a31303a22636172745f746f74616c223b643a313536313536303b733a31313a22746f74616c5f6974656d73223b643a323b733a33323a226533363938353364663736366661343465316564306666363133663536336264223b613a383a7b733a323a226964223b733a323a223334223b733a343a226e616d65223b733a31303a225847503530302d564143223b733a353a227072696365223b643a3936303330303b733a31323a2270726963655f6265666f7265223b733a373a2231363030353030223b733a333a22717479223b643a313b733a333a22676272223b733a33363a2232623064323237626466393833613864303035656630623230333738363135612e4a5047223b733a353a22726f776964223b733a33323a226533363938353364663736366661343465316564306666363133663536336264223b733a383a22737562746f74616c223b643a3936303330303b7d733a33323a223163333833636433306237633239386162353032393361646665636237623138223b613a383a7b733a323a226964223b733a323a223335223b733a343a226e616d65223b733a31313a22455a433130304833313030223b733a353a227072696365223b643a3630313236303b733a31323a2270726963655f6265666f7265223b733a373a2231303032313030223b733a333a22717479223b643a313b733a333a22676272223b733a33363a2230393539353339363962373836346635633431643161633465356133633430302e4a5047223b733a353a22726f776964223b733a33323a223163333833636433306237633239386162353032393361646665636237623138223b733a383a22737562746f74616c223b643a3630313236303b7d7d637573746f6d65725f69647c733a313a2237223b637573746f6d65725f6e616d615f757365727c733a31343a2241726468692052616d616468616e223b637573746f6d65725f656d61696c5f757365727c733a31343a2272616d6140676d61696c2e636f6d223b637573746f6d65725f6c6f67696e5f73657373696f6e7c733a383a227575326365703169223b637573746f6d65725f746573745f73657373696f6e7c733a31353a224164612053657373696f6e204b6f6b223b637573746f6d65725f6c6576656c7c733a313a2234223b637573746f6d65725f70686f746f7c733a33363a2234393731343136336230313737393939636366373032656464346231333465382e6a7067223b637573746f6d65725f7065727573616861616e7c733a32313a2250542e2047726f6f746820546563686e6f6c6f6779223b637573746f6d65725f616c616d61747c733a34343a22506572756d6168616e204d75746961726120476164696e672054696d757220426c6f6b204b2032206e6f2037223b6b6563616d6174616e5f6b656c75726168616e7c733a31323a224d757374696b61204a617961223b637573746f6d65725f6b6f64655f706f737c733a32383a224a6177612042617261742d4b61622e2042656b6173692d3137313535223b637573746f6d65725f6e6f5f74656c707c733a31313a223038323636323732363236223b),
('ga7k8gt86rcf8uou1jqpuvvogavnvt1a', '::1', 1536731897, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363733313839373b636172745f636f6e74656e74737c613a343a7b733a31303a22636172745f746f74616c223b643a343038333432303b733a31313a22746f74616c5f6974656d73223b643a353b733a33323a226533363938353364663736366661343465316564306666363133663536336264223b613a383a7b733a323a226964223b733a323a223334223b733a343a226e616d65223b733a31303a225847503530302d564143223b733a353a227072696365223b643a3936303330303b733a31323a2270726963655f6265666f7265223b733a373a2231363030353030223b733a333a22717479223b643a333b733a333a22676272223b733a33363a2232623064323237626466393833613864303035656630623230333738363135612e4a5047223b733a353a22726f776964223b733a33323a226533363938353364663736366661343465316564306666363133663536336264223b733a383a22737562746f74616c223b643a323838303930303b7d733a33323a223163333833636433306237633239386162353032393361646665636237623138223b613a383a7b733a323a226964223b733a323a223335223b733a343a226e616d65223b733a31313a22455a433130304833313030223b733a353a227072696365223b643a3630313236303b733a31323a2270726963655f6265666f7265223b733a373a2231303032313030223b733a333a22717479223b643a323b733a333a22676272223b733a33363a2230393539353339363962373836346635633431643161633465356133633430302e4a5047223b733a353a22726f776964223b733a33323a223163333833636433306237633239386162353032393361646665636237623138223b733a383a22737562746f74616c223b643a313230323532303b7d7d637573746f6d65725f69647c733a313a2237223b637573746f6d65725f6e616d615f757365727c733a31343a2241726468692052616d616468616e223b637573746f6d65725f656d61696c5f757365727c733a31343a2272616d6140676d61696c2e636f6d223b637573746f6d65725f6c6f67696e5f73657373696f6e7c733a383a227575326365703169223b637573746f6d65725f746573745f73657373696f6e7c733a31353a224164612053657373696f6e204b6f6b223b637573746f6d65725f6c6576656c7c733a313a2234223b637573746f6d65725f70686f746f7c733a33363a2234393731343136336230313737393939636366373032656464346231333465382e6a7067223b637573746f6d65725f7065727573616861616e7c733a32313a2250542e2047726f6f746820546563686e6f6c6f6779223b637573746f6d65725f616c616d61747c733a34343a22506572756d6168616e204d75746961726120476164696e672054696d757220426c6f6b204b2032206e6f2037223b6b6563616d6174616e5f6b656c75726168616e7c733a31323a224d757374696b61204a617961223b637573746f6d65725f6b6f64655f706f737c733a32383a224a6177612042617261742d4b61622e2042656b6173692d3137313535223b637573746f6d65725f6e6f5f74656c707c733a31313a223038323636323732363236223b),
('gp5tjkrldnjrdh5hceu6c8rtilntncho', '::1', 1536728202, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363732383230323b636172745f636f6e74656e74737c613a343a7b733a31303a22636172745f746f74616c223b643a323136323832303b733a31313a22746f74616c5f6974656d73223b643a333b733a33323a223163333833636433306237633239386162353032393361646665636237623138223b613a383a7b733a323a226964223b733a323a223335223b733a343a226e616d65223b733a31313a22455a433130304833313030223b733a353a227072696365223b643a3630313236303b733a31323a2270726963655f6265666f7265223b733a373a2231303032313030223b733a333a22717479223b643a323b733a333a22676272223b733a33363a2230393539353339363962373836346635633431643161633465356133633430302e4a5047223b733a353a22726f776964223b733a33323a223163333833636433306237633239386162353032393361646665636237623138223b733a383a22737562746f74616c223b643a313230323532303b7d733a33323a226533363938353364663736366661343465316564306666363133663536336264223b613a383a7b733a323a226964223b733a323a223334223b733a343a226e616d65223b733a31303a225847503530302d564143223b733a353a227072696365223b643a3936303330303b733a31323a2270726963655f6265666f7265223b733a373a2231363030353030223b733a333a22717479223b643a313b733a333a22676272223b733a33363a2232623064323237626466393833613864303035656630623230333738363135612e4a5047223b733a353a22726f776964223b733a33323a226533363938353364663736366661343465316564306666363133663536336264223b733a383a22737562746f74616c223b643a3936303330303b7d7d637573746f6d65725f69647c733a313a2237223b637573746f6d65725f6e616d615f757365727c733a31343a2241726468692052616d616468616e223b637573746f6d65725f656d61696c5f757365727c733a31343a2272616d6140676d61696c2e636f6d223b637573746f6d65725f6c6f67696e5f73657373696f6e7c733a383a227575326365703169223b637573746f6d65725f746573745f73657373696f6e7c733a31353a224164612053657373696f6e204b6f6b223b637573746f6d65725f6c6576656c7c733a313a2234223b637573746f6d65725f70686f746f7c733a33363a2234393731343136336230313737393939636366373032656464346231333465382e6a7067223b637573746f6d65725f7065727573616861616e7c733a32313a2250542e2047726f6f746820546563686e6f6c6f6779223b637573746f6d65725f616c616d61747c733a34343a22506572756d6168616e204d75746961726120476164696e672054696d757220426c6f6b204b2032206e6f2037223b6b6563616d6174616e5f6b656c75726168616e7c733a31323a224d757374696b61204a617961223b637573746f6d65725f6b6f64655f706f737c733a32383a224a6177612042617261742d4b61622e2042656b6173692d3137313535223b637573746f6d65725f6e6f5f74656c707c733a31313a223038323636323732363236223b),
('hoa7t8ak5br9nam0phoevra1j83211b2', '::1', 1536725561, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363732353536303b637573746f6d65725f69647c733a313a2237223b637573746f6d65725f6e616d615f757365727c733a31343a2241726468692052616d616468616e223b637573746f6d65725f656d61696c5f757365727c733a31343a2272616d6140676d61696c2e636f6d223b637573746f6d65725f6c6f67696e5f73657373696f6e7c733a383a227575326365703169223b637573746f6d65725f746573745f73657373696f6e7c733a31353a224164612053657373696f6e204b6f6b223b637573746f6d65725f6c6576656c7c733a313a2234223b637573746f6d65725f70686f746f7c733a33363a2234393731343136336230313737393939636366373032656464346231333465382e6a7067223b637573746f6d65725f7065727573616861616e7c733a32313a2250542e2047726f6f746820546563686e6f6c6f6779223b637573746f6d65725f616c616d61747c733a34343a22506572756d6168616e204d75746961726120476164696e672054696d757220426c6f6b204b2032206e6f2037223b6b6563616d6174616e5f6b656c75726168616e7c733a31323a224d757374696b61204a617961223b637573746f6d65725f6b6f64655f706f737c733a32383a224a6177612042617261742d4b61622e2042656b6173692d3137313535223b637573746f6d65725f6e6f5f74656c707c733a31313a223038323636323732363236223b636172745f636f6e74656e74737c613a333a7b733a31303a22636172745f746f74616c223b643a313932303630303b733a31313a22746f74616c5f6974656d73223b643a323b733a33323a226533363938353364663736366661343465316564306666363133663536336264223b613a383a7b733a323a226964223b733a323a223334223b733a343a226e616d65223b733a31303a225847503530302d564143223b733a353a227072696365223b643a3936303330303b733a31323a2270726963655f6265666f7265223b733a373a2231363030353030223b733a333a22717479223b643a323b733a333a22676272223b733a33363a2232623064323237626466393833613864303035656630623230333738363135612e4a5047223b733a353a22726f776964223b733a33323a226533363938353364663736366661343465316564306666363133663536336264223b733a383a22737562746f74616c223b643a313932303630303b7d7d),
('j1t3elrd6a5a9n68e5up0kqehfqqmpfe', '::1', 1536732416, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363733323139383b636172745f636f6e74656e74737c613a333a7b733a31303a22636172745f746f74616c223b643a3936303330303b733a31313a22746f74616c5f6974656d73223b643a313b733a33323a226533363938353364663736366661343465316564306666363133663536336264223b613a383a7b733a323a226964223b733a323a223334223b733a343a226e616d65223b733a31303a225847503530302d564143223b733a353a227072696365223b643a3936303330303b733a31323a2270726963655f6265666f7265223b733a373a2231363030353030223b733a333a22717479223b643a313b733a333a22676272223b733a33363a2232623064323237626466393833613864303035656630623230333738363135612e4a5047223b733a353a22726f776964223b733a33323a226533363938353364663736366661343465316564306666363133663536336264223b733a383a22737562746f74616c223b643a3936303330303b7d7d637573746f6d65725f69647c733a313a2237223b637573746f6d65725f6e616d615f757365727c733a31343a2241726468692052616d616468616e223b637573746f6d65725f656d61696c5f757365727c733a31343a2272616d6140676d61696c2e636f6d223b637573746f6d65725f6c6f67696e5f73657373696f6e7c733a383a227575326365703169223b637573746f6d65725f746573745f73657373696f6e7c733a31353a224164612053657373696f6e204b6f6b223b637573746f6d65725f6c6576656c7c733a313a2234223b637573746f6d65725f70686f746f7c733a33363a2234393731343136336230313737393939636366373032656464346231333465382e6a7067223b637573746f6d65725f7065727573616861616e7c733a32313a2250542e2047726f6f746820546563686e6f6c6f6779223b637573746f6d65725f616c616d61747c733a34343a22506572756d6168616e204d75746961726120476164696e672054696d757220426c6f6b204b2032206e6f2037223b6b6563616d6174616e5f6b656c75726168616e7c733a31323a224d757374696b61204a617961223b637573746f6d65725f6b6f64655f706f737c733a32383a224a6177612042617261742d4b61622e2042656b6173692d3137313535223b637573746f6d65725f6e6f5f74656c707c733a31313a223038323636323732363236223b),
('mr9v1vaoq4lensbq6bh12opod6cbh8uj', '::1', 1536728655, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363732383635353b636172745f636f6e74656e74737c613a343a7b733a31303a22636172745f746f74616c223b643a313536313536303b733a31313a22746f74616c5f6974656d73223b643a323b733a33323a226533363938353364663736366661343465316564306666363133663536336264223b613a383a7b733a323a226964223b733a323a223334223b733a343a226e616d65223b733a31303a225847503530302d564143223b733a353a227072696365223b643a3936303330303b733a31323a2270726963655f6265666f7265223b733a373a2231363030353030223b733a333a22717479223b643a313b733a333a22676272223b733a33363a2232623064323237626466393833613864303035656630623230333738363135612e4a5047223b733a353a22726f776964223b733a33323a226533363938353364663736366661343465316564306666363133663536336264223b733a383a22737562746f74616c223b643a3936303330303b7d733a33323a223163333833636433306237633239386162353032393361646665636237623138223b613a383a7b733a323a226964223b733a323a223335223b733a343a226e616d65223b733a31313a22455a433130304833313030223b733a353a227072696365223b643a3630313236303b733a31323a2270726963655f6265666f7265223b733a373a2231303032313030223b733a333a22717479223b643a313b733a333a22676272223b733a33363a2230393539353339363962373836346635633431643161633465356133633430302e4a5047223b733a353a22726f776964223b733a33323a223163333833636433306237633239386162353032393361646665636237623138223b733a383a22737562746f74616c223b643a3630313236303b7d7d637573746f6d65725f69647c733a313a2237223b637573746f6d65725f6e616d615f757365727c733a31343a2241726468692052616d616468616e223b637573746f6d65725f656d61696c5f757365727c733a31343a2272616d6140676d61696c2e636f6d223b637573746f6d65725f6c6f67696e5f73657373696f6e7c733a383a227575326365703169223b637573746f6d65725f746573745f73657373696f6e7c733a31353a224164612053657373696f6e204b6f6b223b637573746f6d65725f6c6576656c7c733a313a2234223b637573746f6d65725f70686f746f7c733a33363a2234393731343136336230313737393939636366373032656464346231333465382e6a7067223b637573746f6d65725f7065727573616861616e7c733a32313a2250542e2047726f6f746820546563686e6f6c6f6779223b637573746f6d65725f616c616d61747c733a34343a22506572756d6168616e204d75746961726120476164696e672054696d757220426c6f6b204b2032206e6f2037223b6b6563616d6174616e5f6b656c75726168616e7c733a31323a224d757374696b61204a617961223b637573746f6d65725f6b6f64655f706f737c733a32383a224a6177612042617261742d4b61622e2042656b6173692d3137313535223b637573746f6d65725f6e6f5f74656c707c733a31313a223038323636323732363236223b),
('v1cmhev0aq6q9p2dc6km4uekk161kr2h', '::1', 1536726721, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363732363732313b636172745f636f6e74656e74737c613a333a7b733a31303a22636172745f746f74616c223b643a333230313030303b733a31313a22746f74616c5f6974656d73223b643a323b733a33323a226533363938353364663736366661343465316564306666363133663536336264223b613a383a7b733a323a226964223b733a323a223334223b733a343a226e616d65223b733a31303a225847503530302d564143223b733a353a227072696365223b643a313630303530303b733a31323a2270726963655f6265666f7265223b4e3b733a333a22717479223b643a323b733a333a22676272223b733a33363a2232623064323237626466393833613864303035656630623230333738363135612e4a5047223b733a353a22726f776964223b733a33323a226533363938353364663736366661343465316564306666363133663536336264223b733a383a22737562746f74616c223b643a333230313030303b7d7d),
('v1ge62116dpv5ps88legbqbv3uohnhtp', '::1', 1536732198, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363733323139383b636172745f636f6e74656e74737c613a333a7b733a31303a22636172745f746f74616c223b643a3936303330303b733a31313a22746f74616c5f6974656d73223b643a313b733a33323a226533363938353364663736366661343465316564306666363133663536336264223b613a383a7b733a323a226964223b733a323a223334223b733a343a226e616d65223b733a31303a225847503530302d564143223b733a353a227072696365223b643a3936303330303b733a31323a2270726963655f6265666f7265223b733a373a2231363030353030223b733a333a22717479223b643a313b733a333a22676272223b733a33363a2232623064323237626466393833613864303035656630623230333738363135612e4a5047223b733a353a22726f776964223b733a33323a226533363938353364663736366661343465316564306666363133663536336264223b733a383a22737562746f74616c223b643a3936303330303b7d7d637573746f6d65725f69647c733a313a2237223b637573746f6d65725f6e616d615f757365727c733a31343a2241726468692052616d616468616e223b637573746f6d65725f656d61696c5f757365727c733a31343a2272616d6140676d61696c2e636f6d223b637573746f6d65725f6c6f67696e5f73657373696f6e7c733a383a227575326365703169223b637573746f6d65725f746573745f73657373696f6e7c733a31353a224164612053657373696f6e204b6f6b223b637573746f6d65725f6c6576656c7c733a313a2234223b637573746f6d65725f70686f746f7c733a33363a2234393731343136336230313737393939636366373032656464346231333465382e6a7067223b637573746f6d65725f7065727573616861616e7c733a32313a2250542e2047726f6f746820546563686e6f6c6f6779223b637573746f6d65725f616c616d61747c733a34343a22506572756d6168616e204d75746961726120476164696e672054696d757220426c6f6b204b2032206e6f2037223b6b6563616d6174616e5f6b656c75726168616e7c733a31323a224d757374696b61204a617961223b637573746f6d65725f6b6f64655f706f737c733a32383a224a6177612042617261742d4b61622e2042656b6173692d3137313535223b637573746f6d65725f6e6f5f74656c707c733a31313a223038323636323732363236223b);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_admin`
--

CREATE TABLE `t_admin` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(50) NOT NULL,
  `type` varchar(100) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_admin`
--

INSERT INTO `t_admin` (`id_admin`, `nama`, `email`, `password`, `status`, `type`, `photo`) VALUES
(61, 'Ardhi Ramadhan', 'rama@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '1', '10', '95ae805be0a9808c5a78805e47737232.jpg'),
(62, 'Agustinu Pristya Putra', 'putra@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '1', '10', 'a2bc1348d5cc09953c3ba4cbf3139cb7.jpg'),
(63, 'Brian Adi Kusumo', 'brian@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '1', '10', '332119f1ccf23a98ad9616d5d0bbcdac.jpg'),
(73, 'Faiz', 'faiz@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '1', '10', 'c2a99c92f0688edb21ee0ec473211c43.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_brand`
--

CREATE TABLE `t_brand` (
  `id` int(11) NOT NULL,
  `nama_brand` varchar(200) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_brand`
--

INSERT INTO `t_brand` (`id`, `nama_brand`, `logo`, `website`) VALUES
(1, 'Philips', 'schneider.png', 'Philips.com'),
(2, 'Scheniders', '299f0da36b38f635ce6af2d584ebb1cc.png', 'asas.co'),
(10, 'Philips', '596f59b52dd44fdfe5dd03435b6b7b4a.png', 'phil.co.id');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_coupon`
--

CREATE TABLE `t_coupon` (
  `id` int(11) NOT NULL,
  `judul_coupon` varchar(150) NOT NULL,
  `coupon_code` varchar(50) NOT NULL,
  `discount` int(11) NOT NULL,
  `tanggal_aktif` date NOT NULL,
  `tanggal_selesai` date NOT NULL,
  `status` int(11) NOT NULL COMMENT '1=Aktif,0=Nonaktif',
  `gambar` varchar(255) NOT NULL,
  `keterangan` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_coupon`
--

INSERT INTO `t_coupon` (`id`, `judul_coupon`, `coupon_code`, `discount`, `tanggal_aktif`, `tanggal_selesai`, `status`, `gambar`, `keterangan`) VALUES
(1, 'Diskon 17 Agustusan ', 'UU2CEP1I', 50, '2018-09-10', '2018-09-12', 1, '977ec974f8b1134dc46e11fb5413ba85.jpg', 'Anniv Kita'),
(2, 'Pesta Gajian FAST', 'GJI0110', 10, '1970-01-01', '1970-01-01', 1, '38736c2f1d20652c671751c858206239.png', 'Untuk Yang Gajian Ajah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_customer`
--

CREATE TABLE `t_customer` (
  `id` int(11) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL,
  `perusahaan` varchar(150) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `level` int(11) NOT NULL,
  `status` int(11) NOT NULL COMMENT '1==Aktif , 0 == Nonaktif',
  `media_sosial` varchar(200) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `kecamatan_kelurahan` varchar(100) NOT NULL,
  `kode_pos` varchar(100) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_customer`
--

INSERT INTO `t_customer` (`id`, `nama`, `email`, `password`, `perusahaan`, `photo`, `level`, `status`, `media_sosial`, `alamat`, `kecamatan_kelurahan`, `kode_pos`, `no_telp`, `jenis_kelamin`) VALUES
(1, 'Faiz', 'faiz@gmail.co', '21232f297a57a5a743894a0e4a801fc3', 'Grooth Company', 'dummy.jpg', 2, 1, 'Instagram', 'Rawa Lumbu', '', '', '0828892882', 'L'),
(7, 'Ardhi Ramadhan', 'rama@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'PT. Grooth Technology', '49714163b0177999ccf702edd4b134e8.jpg', 4, 1, 'ardhir10', 'Perumahan Mutiara Gading Timur Blok K 2 no 7', 'Mustika Jaya', 'Jawa Barat-Kab. Bekasi-17155', '08266272626', 'L'),
(8, 'Imam Rohimam', 'imams@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'Mampus', '', 0, 1, 'IG', 'Barat', '', '', '0826662726', 'L');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_kategori`
--

CREATE TABLE `t_kategori` (
  `id` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL,
  `id_parent` int(11) NOT NULL,
  `posisi` int(11) NOT NULL,
  `status` int(11) NOT NULL COMMENT '1=aktif,0=nonaktif'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_kategori`
--

INSERT INTO `t_kategori` (`id`, `nama_kategori`, `id_parent`, `posisi`, `status`) VALUES
(1, 'Handphone', 0, 2, 1),
(2, 'Laptop', 22, 1, 1),
(3, 'Mesin', 1, 1, 1),
(6, 'Mesin Uang', 1, 2, 1),
(7, 'X8809', 6, 0, 0),
(8, 'V02', 7, 0, 0),
(9, 'Acer', 2, 0, 0),
(10, 'Asus', 2, 0, 0),
(11, 'Core i3', 10, 0, 0),
(12, 'Core i5', 10, 0, 0),
(13, 'Type A455L', 11, 0, 0),
(14, 'Residential and Small Business', 0, 0, 1),
(15, ' Electrical Protection and Control', 14, 1, 1),
(16, 'Electrical Protection', 0, 4, 1),
(17, 'Critical power', 0, 5, 1),
(18, 'Industrial automation', 0, 6, 1),
(19, 'Building Automation', 0, 7, 1),
(22, 'Medium Voltage', 19, 0, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_ongkir`
--

CREATE TABLE `t_ongkir` (
  `id` int(11) NOT NULL,
  `kode_pos` varchar(7) NOT NULL,
  `value` int(11) NOT NULL,
  `detail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_ongkir`
--

INSERT INTO `t_ongkir` (`id`, `kode_pos`, `value`, `detail`) VALUES
(1, '17155', 10000, 'Mustika Jaya'),
(2, '17151', 8000, 'Bantargebang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_order`
--

CREATE TABLE `t_order` (
  `id` int(11) NOT NULL,
  `no_order` varchar(50) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `tanggal_order` date NOT NULL,
  `perusahaan` varchar(100) NOT NULL,
  `alamat_pengiriman` int(11) NOT NULL,
  `kurir` varchar(50) NOT NULL,
  `kode_pos` varchar(200) NOT NULL,
  `status_order` varchar(50) NOT NULL,
  `payment_method` varchar(50) NOT NULL,
  `total_bayar` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_order_detail`
--

CREATE TABLE `t_order_detail` (
  `id` int(11) NOT NULL,
  `no_order` varchar(50) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `sub_total` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_produk`
--

CREATE TABLE `t_produk` (
  `id` int(11) NOT NULL,
  `gambar_produk` varchar(255) NOT NULL,
  `sku` varchar(1000) NOT NULL,
  `local_code` varchar(20) NOT NULL,
  `short_deskripsi` text NOT NULL,
  `id_kategori` varchar(1000) NOT NULL,
  `id_brand` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `description` text NOT NULL,
  `spesification` text NOT NULL,
  `stok` int(11) NOT NULL,
  `visible` int(11) DEFAULT NULL,
  `featured` int(11) DEFAULT NULL,
  `tags` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_produk`
--

INSERT INTO `t_produk` (`id`, `gambar_produk`, `sku`, `local_code`, `short_deskripsi`, `id_kategori`, `id_brand`, `harga`, `description`, `spesification`, `stok`, `visible`, `featured`, `tags`) VALUES
(34, '2b0d227bdf983a8d005ef0b20378615a.JPG', 'XGP500-VAC', 'EE$%', ' Philips Luxeon® K2  OBL LED, with superior packaging and low thermal resistance -100-240 V AC - 5W - Red light - 50,000 hours (70% lumen maintenance)  ', '18', 2, 1600500, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sollicitudin diam tortor, non mollis arcu facilisis condimentum. Praesent pretium nulla turpis, id luctus turpis posuere ac. Donec et enim viverra, viverra erat eget, bibendum felis. Quisque porta augue quis mauris ultrices suscipit. Interdum et malesuada fames ac ante ipsum primis in faucibus. Curabitur bibendum mauris leo, at vehicula lorem molestie quis. Nulla vel urna malesuada, auctor metus sit amet, gravida libero. Mauris et erat cursus sapien dapibus sagittis non sagittis arcu. Sed vel leo feugiat justo faucibus ullamcorper. Cras eu fermentum nibh. Praesent ut lectus ipsum. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer quis malesuada sapien. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam finibus eros dolor, eu semper leo feugiat vel.</p>\r\n\r\n<p>Fusce lobortis nec ligula eget varius. Sed volutpat tincidunt arcu, at porttitor nunc varius eget. Pellentesque tempor leo elit, sit amet ullamcorper nisl lobortis ac. In nec mauris quis mi malesuada maximus nec in felis. Mauris pulvinar ac tellus vel convallis. Pellentesque risus nibh, semper quis justo eu, euismod malesuada mauris. Quisque in erat in enim aliquam consequat. Aenean tincidunt gravida leo, non luctus nulla pretium sed. Donec tincidunt risus vitae felis imperdiet congue quis a est. Vivamus tincidunt, orci posuere porta pretium, diam purus dapibus ipsum, nec cursus odio libero eu velit. Cras id ornare ex. Pellentesque nisi nunc, semper in malesuada ut, bibendum et turpis. Phasellus maximus quam faucibus tellus euismod rutrum. Duis eget ante suscipit, faucibus arcu at, dapibus leo. Sed in iaculis tortor, a gravida orci.</p>\r\n\r\n<p>Vivamus eu elit a est consequat volutpat. Ut a luctus diam. Nulla ut mi placerat erat fringilla porta sit amet pharetra justo. Nulla a ultricies urna, in semper elit. Nullam rutrum lectus turpis, vel tempor risus mattis at. Phasellus mauris leo, pellentesque et elementum quis, pulvinar eu elit. In hac habitasse platea dictumst. Nulla facilisi. Duis placerat eros quis nunc commodo interdum. Ut dolor sem, pretium sed ullamcorper ut, imperdiet vitae enim. Pellentesque a ex pulvinar, interdum elit vel, dictum arcu. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>\r\n\r\n<p>Nullam eget diam vitae tellus finibus blandit ac in tellus. Nullam at tincidunt enim. Aenean id odio eros. Suspendisse fermentum erat non nulla egestas, ut auctor eros lobortis. Aenean condimentum felis a dolor pulvinar dignissim. Phasellus ac lectus ultrices lectus eleifend laoreet a et arcu. Fusce congue convallis nunc, sit amet volutpat mi vehicula id. Vivamus cursus, orci at molestie tempus, erat enim auctor sapien, quis condimentum urna urna eu nisl. Suspendisse tempus tempor tempus.</p>\r\n', '<table border="0" cellpadding="1" cellspacing="1" style="width:100%">\r\n	<tbody>\r\n		<tr>\r\n			<td>Volt</td>\r\n			<td><strong>200Wat</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td>Range</td>\r\n			<td><strong>22Ghx</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td>Sub Range</td>\r\n			<td><strong>78Ampere</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n', 30, 1, NULL, 'XGP500,XGP500PHILIPS'),
(35, '095953969b7864f5c41d1ac4e5a3c400.JPG', 'EZC100H3100', 'BALLACK', 'Moulded Case Circuit Breaker (MCCB) - Schneider Electric (EasyPact EZC) - EZC100H 3P 100A - 3 poles (3P3d) - Rated current 100A - Short circuit breaking capacity (Icu) (400-415Vac) 30kA - Thermal-Magnetic (fixed) trip unit (TMD) - Lug terminals', '22', 2, 1002100, '<p>eu fermentum nibh. Praesent ut lectus ipsum. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer quis malesuada sapien. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam finibus eros dolor, eu semper leo feugiat vel.</p>\r\n\r\n<p>Fusce lobortis nec ligula eget varius. Sed volutpat tincidunt arcu, at porttitor nunc varius eget. Pellentesque tempor leo elit, sit amet ullamcorper nisl lobortis ac. In nec mauris quis mi malesuada maximus nec in felis. Mauris pulvinar ac tellus vel convallis. Pellentesque risus nibh, semper quis justo eu, euismod malesuada mauris. Quisque in erat in enim aliquam consequat. Aenean tincidunt gravida leo, non luctus nulla pretium sed. Donec tincidunt risus vitae felis imperdiet congue quis a est. Vivamus tincidunt, orci posuere porta pretium, diam purus dapibus ipsum, nec cursus odio libero eu velit. Cras id ornare ex. Pellentesque nisi nunc, semper in malesuada ut, bibendum et turpis. Phasellus maximus quam faucibus tellus euismod rutrum. Duis eget ante suscipit, faucibus arcu at, dapibus leo. Sed in iaculis tortor, a gravida orci.</p>\r\n\r\n<p>Vivamus eu elit a est consequat volutpat. Ut a luctus diam. Nulla ut mi placerat erat fringilla porta sit amet pharetra justo. Nulla a ultricies urna, in semper elit. Nullam rutrum lectus turpis, vel tempor risus mattis at. Phasellus mauris leo, pellentesque et elementum quis, pulvinar eu elit. In hac habitasse platea dictumst. Nulla facilisi. Duis placerat eros quis nunc commodo interdum. Ut dolor sem, pretium sed ullamcorper ut, imperdiet vitae enim. Pellentesque a ex pulvinar, interdum elit vel, dictum arcu. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>\r\n\r\n<p>Nullam eget diam vitae tellus finibus blandit ac in tellus. Nullam at tincidunt enim. Aenean id odio eros. Suspendisse fermentum erat non nulla egestas, ut auctor eros lobortis. Aenean condimentum felis a dolor pulvinar dignissim. Phasellus ac lectus ultrices lectus eleifend laoreet a et arcu. Fusce congue convallis nunc, sit amet volutpat mi vehicula id. Vivamus cursus, orci at molestie tempus, erat enim auctor sapien, quis condimentum urna urna eu nisl. Suspendisse tempus tempor tempus.</p>\r\n\r\n<p><small><strong>BALLACK</strong></small></p>\r\n', '<p>&nbsp;</p>\r\n\r\n<table class="mt-3">\r\n	<tbody>\r\n		<tr>\r\n			<td><small>PRODUCT NAME</small></td>\r\n			<td><small><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LK99OLZ</strong></small></td>\r\n		</tr>\r\n		<tr>\r\n			<td style="vertical-align:text-bottom"><small>RATED VOLTAGE IN VOILT ELECTRICT </small></td>\r\n			<td><small><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(888Vlt)<br />\r\n			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(888sVlt)<br />\r\n			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(K88Vlt)</strong></small></td>\r\n		</tr>\r\n		<tr>\r\n			<td style="vertical-align:text-bottom"><small>RATED VOLTAGE IN VOILT ELECTRICT </small></td>\r\n			<td>\r\n			<p><small><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(888Vlt : AC 2) 9A<br />\r\n			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(888sVlt : AC 2) 9A<br />\r\n			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(K88Vlt : AC 2) 9A)</strong></small></p>\r\n\r\n			<p><small><strong>BALLACK</strong></small></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table class="mt-3">\r\n	<tbody>\r\n		<tr>\r\n			<td><small>PRODUCT NAME</small></td>\r\n			<td><small><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LK99OLZ</strong></small></td>\r\n		</tr>\r\n		<tr>\r\n			<td style="vertical-align:text-bottom"><small>RATED VOLTAGE IN VOILT ELECTRICT </small></td>\r\n			<td><small><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(888Vlt)<br />\r\n			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(888sVlt)<br />\r\n			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(K88Vlt)</strong></small></td>\r\n		</tr>\r\n		<tr>\r\n			<td style="vertical-align:text-bottom"><small>RATED VOLTAGE IN VOILT ELECTRICT </small></td>\r\n			<td>\r\n			<p><small><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(888Vlt : AC 2) 9A<br />\r\n			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(888sVlt : AC 2) 9A<br />\r\n			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(K88Vlt : AC 2) 9A)</strong></small></p>\r\n\r\n			<p><small><strong>BALLACK</strong></small></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table class="mt-3">\r\n	<tbody>\r\n		<tr>\r\n			<td><small>PRODUCT NAME</small></td>\r\n			<td><small><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LK99OLZ</strong></small></td>\r\n		</tr>\r\n		<tr>\r\n			<td style="vertical-align:text-bottom"><small>RATED VOLTAGE IN VOILT ELECTRICT </small></td>\r\n			<td><small><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(888Vlt)<br />\r\n			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(888sVlt)<br />\r\n			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(K88Vlt)</strong></small></td>\r\n		</tr>\r\n		<tr>\r\n			<td style="vertical-align:text-bottom"><small>RATED VOLTAGE IN VOILT ELECTRICT </small></td>\r\n			<td>\r\n			<p><small><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(888Vlt : AC 2) 9A<br />\r\n			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(888sVlt : AC 2) 9A<br />\r\n			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(K88Vlt : AC 2) 9A)</strong></small></p>\r\n\r\n			<p><small><strong>BALLACK</strong></small></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 33, 1, 1, 'SCHNEIDER ELECTRIC,EZC100H3100');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_type_admin`
--

CREATE TABLE `t_type_admin` (
  `id` int(11) NOT NULL,
  `type` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_type_admin`
--

INSERT INTO `t_type_admin` (`id`, `type`) VALUES
(9, 'Admin'),
(10, 'Superuser');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_type_customer`
--

CREATE TABLE `t_type_customer` (
  `id` int(11) NOT NULL,
  `nama_type` varchar(50) NOT NULL,
  `discount` int(11) NOT NULL,
  `keterangan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_type_customer`
--

INSERT INTO `t_type_customer` (`id`, `nama_type`, `discount`, `keterangan`) VALUES
(1, 'Type A', 20, 'Discount 20% untuk all Item'),
(2, 'Type B', 10, 'Discount 10% untuk all Item'),
(4, 'Type D', 40, 'Mendapat discount 40% disemua'),
(5, 'Type E', 50, '50% Untuk Kategori Mesin'),
(6, 'Type C', 25, 'Dapatkan diskon 25%');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_video`
--

CREATE TABLE `t_video` (
  `id` int(11) NOT NULL,
  `judul` varchar(150) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_video`
--

INSERT INTO `t_video` (`id`, `judul`, `link`) VALUES
(1, 'President 2019', '<iframe class="embed-responsive-item" width="500" height="315" src="https://www.youtube.com/embed/AybX-OtH4t4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>'),
(2, 'Young Blood', '<iframe class="embed-responsive-item" width="500" height="315" src="https://www.youtube.com/embed/-RJSbO8UZVY" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `pekerjaan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `alamat`, `pekerjaan`) VALUES
(1, 'Andi', 'Surabaya', 'web programmer'),
(2, 'Santoso', 'Jakarta', 'Web Designer'),
(6, 'Samsul', 'Sumedang', 'Pegawai'),
(7, 'Bob', 'jakarta', 'penyanyi'),
(8, 'marley', 'afrika', 'penyanyi'),
(9, 'Bob', 'jakarta', 'penyanyi'),
(10, 'Bob', 'jakarta', 'penyanyi'),
(11, 'Bob', 'jakarta', 'penyanyi'),
(12, 'Bob', 'jakarta', 'penyanyi'),
(13, 'Bob', 'jakarta', 'penyanyi'),
(14, 'Bob', 'jakarta', 'penyanyi'),
(15, 'Bob', 'jakarta', 'penyanyi'),
(16, 'Bob', 'jakarta', 'penyanyi'),
(17, 'Bob', 'jakarta', 'penyanyi'),
(18, 'marley', 'afrika', 'penyanyi'),
(19, 'Bob', 'jakarta', 'penyanyi'),
(20, 'Bob', 'jakarta', 'penyanyi'),
(21, 'Bob', 'jakarta', 'penyanyi'),
(22, 'Bob', 'jakarta', 'penyanyi'),
(23, 'Bob', 'jakarta', 'penyanyi'),
(24, 'Bob', 'jakarta', 'penyanyi'),
(25, 'Bob', 'jakarta', 'penyanyi'),
(26, 'Bob', 'jakarta', 'penyanyi'),
(27, 'Bob', 'jakarta', 'penyanyi'),
(28, 'Bob', 'jakarta', 'penyanyi'),
(29, 'Bob', 'jakarta', 'penyanyi'),
(30, 'Bob', 'jakarta', 'penyanyi'),
(31, 'Bob', 'jakarta', 'penyanyi'),
(32, 'marley', 'afrika', 'penyanyi'),
(33, 'Bob', 'jakarta', 'penyanyi'),
(34, 'Bob', 'jakarta', 'penyanyi'),
(35, 'Bob', 'jakarta', 'penyanyi'),
(36, 'Bob', 'jakarta', 'penyanyi'),
(37, 'Bob', 'jakarta', 'penyanyi'),
(38, 'Bob', 'jakarta', 'penyanyi'),
(39, 'Bob', 'jakarta', 'penyanyi'),
(40, 'Bob', 'jakarta', 'penyanyi'),
(41, 'Bob', 'jakarta', 'penyanyi'),
(42, 'Bob', 'jakarta', 'penyanyi'),
(43, 'Bob', 'jakarta', 'penyanyi'),
(44, 'Bob', 'jakarta', 'penyanyi'),
(45, 'Bob', 'jakarta', 'penyanyi'),
(46, 'Bob', 'jakarta', 'penyanyi'),
(47, 'marley', 'afrika', 'penyanyi'),
(48, 'Bob', 'jakarta', 'penyanyi'),
(49, 'Bob', 'jakarta', 'penyanyi'),
(50, 'Bob', 'jakarta', 'penyanyi'),
(51, 'Bob', 'jakarta', 'penyanyi'),
(52, 'Bob', 'jakarta', 'penyanyi'),
(53, 'Bob', 'jakarta', 'penyanyi'),
(54, 'Bob', 'jakarta', 'penyanyi'),
(55, 'Bob', 'jakarta', 'penyanyi'),
(56, 'Bob', 'jakarta', 'penyanyi'),
(57, 'Bob', 'jakarta', 'penyanyi'),
(58, 'Bob', 'jakarta', 'penyanyi');

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
-- Indexes for table `t_admin`
--
ALTER TABLE `t_admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `t_brand`
--
ALTER TABLE `t_brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_coupon`
--
ALTER TABLE `t_coupon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_customer`
--
ALTER TABLE `t_customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_kategori`
--
ALTER TABLE `t_kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_ongkir`
--
ALTER TABLE `t_ongkir`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_order`
--
ALTER TABLE `t_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_order_detail`
--
ALTER TABLE `t_order_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_produk`
--
ALTER TABLE `t_produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_type_admin`
--
ALTER TABLE `t_type_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_type_customer`
--
ALTER TABLE `t_type_customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_video`
--
ALTER TABLE `t_video`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_admin`
--
ALTER TABLE `t_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
--
-- AUTO_INCREMENT for table `t_brand`
--
ALTER TABLE `t_brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `t_coupon`
--
ALTER TABLE `t_coupon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `t_customer`
--
ALTER TABLE `t_customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `t_kategori`
--
ALTER TABLE `t_kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `t_ongkir`
--
ALTER TABLE `t_ongkir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `t_order`
--
ALTER TABLE `t_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_order_detail`
--
ALTER TABLE `t_order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_produk`
--
ALTER TABLE `t_produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `t_type_admin`
--
ALTER TABLE `t_type_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `t_type_customer`
--
ALTER TABLE `t_type_customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `t_video`
--
ALTER TABLE `t_video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
