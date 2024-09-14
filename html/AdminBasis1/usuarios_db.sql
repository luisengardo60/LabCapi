-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-02-2020 a las 21:22:57
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `usuarios_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios1` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `status` tinyint(10) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios1` (`user_id`, `username`, `first_name`, `last_name`, `gender`, `password`, `status`) VALUES
(1, 'rogers63', 'david', 'john', 'Female', 'e6a33eee180b07e563d74fee8c2c66b8', 1),
(2, 'mike28', 'rogers', 'paul', 'Male', '2e7dc6b8a1598f4f75c3eaa47958ee2f', 1),
(3, 'rivera92', 'david', 'john', 'Male', '1c3a8e03f448d211904161a6f5849b68', 1),
(4, 'ross95', 'maria', 'sanders', 'Male', '62f0a68a4179c5cdd997189760cbcf18', 1),
(5, 'paul85', 'morris', 'miller', 'Female', '61bd060b07bddfecccea56a82b850ecf', 1),
(6, 'smith34', 'daniel', 'michael', 'Female', '7055b3d9f5cb2829c26cd7e0e601cde5', 1),
(7, 'james84', 'sanders', 'paul', 'Female', 'b7f72d6eb92b45458020748c8d1a3573', 1),
(8, 'daniel53', 'mark', 'mike', 'Male', '299cbf7171ad1b2967408ed200b4e26c', 1),
(9, 'brooks80', 'morgan', 'maria', 'Female', 'aa736a35dc15934d67c0a999dccff8f6', 1),
(10, 'morgan65', 'paul', 'miller', 'Female', 'a28dca31f5aa5792e1cefd1dfd098569', 1),
(11, 'sanders84', 'david', 'miller', 'Female', '0629e4f9f0e01e6f20bc2066175e09f7', 1),
(12, 'maria40', 'chrishaydon', 'bell', 'Female', '17f286a78c74db7ee24374c608a2f20c', 1),
(13, 'brown71', 'michael', 'brown', 'Male', 'fa0c46cc4339a8a51a7da1b33e9d2831', 1),
(14, 'james63', 'morgan', 'james', 'Male', 'b945416fa907fac533d94efe1974ec07', 1),
(15, 'jenny0993', 'rogers', 'chrishaydon', 'Female', '388823cb9249d4cebc9d677a99e1d79d', 1),
(16, 'john96', 'morgan', 'wright', 'Male', 'd0bb977705c3cdad1e346c898f32a1b7', 1),
(17, 'mstephan', 'Miller', 'Stephan', 'Male', '58b207ee33794b046511203967c8e0d7', 1),
(18, 'mark46', 'david', 'ross', 'Female', '21cdcb68a932871524e16680fac72e18', 1),
(20, 'mark80', 'mike', 'bell', 'Male', '084489b355edd349bca1c798788de19a', 1),
(21, 'morris72', 'miller', 'michael', 'Male', 'bdb047eb9ea511052fc690a8ac72a7d3', 1),
(22, 'wright39', 'ross', 'rogers', 'Female', '1b6859df2da2a416c5b0fa044b1c6a75', 1),
(23, 'paul68', 'brooks', 'mike', 'Male', '12d836bf64839f987338414ccbec657f', 1),
(24, 'smith60', 'miller', 'daniel', 'Male', '494610644518624d05e2bdc8b9df3c36', 1),
(25, 'bell43', 'mike', 'wright', 'Male', '2bd4e16a15f5527cb43282ee0ef94619', 1),
(26, 'rogers79', 'wright', 'smith', 'Female', '4df306580eed9e0758a759e8c54cc0d7', 1),
(27, 'daniel56', 'david', 'morgan', 'Male', 'c374aac91fe75e5ca9d4d46351c90291', 1),
(28, 'brooks85', 'smith', 'bell', 'Female', '5160256831bf840f1d0af550dce108cf', 1),
(29, 'mike30', 'paul', 'wright', 'Female', '44cd7d4f05cd775b99d2f68b169d2764', 1),
(30, 'paul92', 'michael', 'james', 'Female', '06a8728ad70c4ba4d298650d6f68d62c', 1),
(31, 'bell96', 'michael', 'sanders', 'Female', 'da77805fb5b220853e9ee1a888ea4870', 1),
(32, 'john8', 'john', 'rivera', 'Female', '8f4eedbae6486c91521dcc9e2e746978', 1),
(33, 'chrishaydon12', 'paul', 'michael', 'Male', '341f71ff99f299c10b7bd10bb0ffd5c0', 1),
(34, 'morgan13', 'ross', 'mark', 'Female', '8f9ecff6d4562e1f2d344f753c0d540e', 1),
(35, 'james83', 'brooks', 'smith', 'Female', '4180a37ebe6c56665ecc0c09f97749bc', 1),
(36, 'chrishaydon8', 'cooper', 'brown', 'Female', '48655cff7595c40da5309e9ed6c41095', 1),
(37, 'ross85', 'ross', 'daniel', 'Male', 'a2088dbb45598312937f9c2b39d76b6b', 1),
(38, 'ross46', 'cooper', 'miller', 'Male', 'ccbffd8ac04c96f4a19b8987221f389c', 1),
(39, 'smith4', 'jenny09', 'maria', 'Female', '61210cd033e05eefd7904582f42bd9f3', 1),
(40, 'paul4', 'paul', 'rivera', 'Female', '1f76110a33d9fe38bffcbd6d6dd49a29', 1),
(41, 'daniel26', 'maria', 'sanders', 'Male', 'c2b161779bf8f62752b8cdcfeabcb952', 1),
(42, 'chrishaydon2', 'bell', 'david', 'Female', 'aae5b1e30f985f2f6eedc4eec8dd2de8', 1),
(43, 'david82', 'rivera', 'cooper', 'Male', '10752c85ab371579e5744ecce8b8dfc0', 1),
(44, 'john97', 'mark', 'david', 'Female', '8eb2c044f3d3215c910973fded3718f9', 1),
(45, 'david57', 'paul', 'cooper', 'Male', '218a9c83939355cb9b81036857412d7f', 1),
(46, 'rivera100', 'brooks', 'david', 'Male', 'eefc9091a99e39015b020af27c2e80a6', 1),
(47, 'bell13', 'james', 'maria', 'Male', '90687b869096ea955b55a88a55b0b982', 1),
(48, 'brooks65', 'john', 'mark', 'Female', 'ac3a36b10fad8f53b5b0a3d5c4aab9de', 1),
(49, 'daniel40', 'rivera', 'jenny09', 'Female', '25c8261763223229a55949b9cbaac0c6', 1),
(50, 'cooper100', 'chrishaydon', 'sanders', 'Female', '9b86a2c6fa37f5842c75dcb6aa43453d', 1),
(51, 'morris14', 'bell', 'david', 'Female', '1b8e375c5826da045b4b80cbeaffb281', 1),
(52, 'smith82', 'morris', 'brooks', 'Female', '8f9459d4946b4025c0fc92a319f62769', 1),
(53, 'cooper35', 'cooper', 'mark', 'Male', 'b87551b47f0515089a0e6c197a0524c7', 1),
(54, 'morgan94', 'james', 'brooks', 'Male', '6cd7ed7e8f66ed1154abfe390c18b271', 1),
(55, 'michael92', 'brooks', 'morris', 'Male', 'c6e7402e9de6381fd6ee0936ae304bd4', 1),
(56, 'sanders48', 'morgan', 'sanders', 'Female', '1606ebcb8b02982109e5a9ad6817d93c', 1),
(57, 'brown76', 'rivera', 'cooper', 'Female', '45903192c7e1eae93463b4881aaf3d3e', 1),
(58, 'james16', 'bell', 'john', 'Female', '2b3f531f9940613c33217c4756844069', 1),
(59, 'michael26', 'wright', 'brown', 'Male', '3c86daac8f13d18f3da5f0fef72d2d41', 1),
(60, 'wright57', 'wright', 'sanders', 'Male', 'b6b283c151b7c2f8bd6307867fac6207', 1),
(61, 'wright68', 'smith', 'michael', 'Female', 'b6d7044f51097af805a29408ab2aa895', 1),
(62, 'brooks1', 'bell', 'rivera', 'Male', '87037e26aacc077d41d83f8d6c91a95c', 1),
(63, 'bell2', 'rivera', 'david', 'Female', '0479c8271fb4dbe47106570c92abbb74', 1),
(64, 'miller100', 'brooks', 'wright', 'Male', '39e5cddf9d6fe5c39d348b5e2d45c07d', 1),
(65, 'rogers53', 'chrishaydon', 'brown', 'Male', '0377bf6ebd9bacfbe96a492c532f0e3b', 1),
(66, 'mike1', 'michael', 'sanders', 'Male', 'b9ff9aa4450707644faf5cf872a57f41', 1),
(67, 'cooper57', 'daniel', 'mark', 'Female', 'adab67243e70ed8d0938696ba1dfdabe', 1),
(68, 'daniel38', 'bell', 'michael', 'Male', '753bd83042af00c1af6af82ae4236726', 1),
(69, 'mark2', 'brown', 'bell', 'Female', '5160c711eb1a1fb416cb296cfa30d3c6', 1),
(70, 'daniel79', 'rogers', 'john', 'Male', '97dbce061c4488e48613a6d66e57c1e1', 1),
(71, 'wright4', 'paul', 'smith', 'Female', 'be2fb6743dd0c143427d6fdbb61d82ab', 1),
(72, 'brown84', 'john', 'ross', 'Male', '738cb4da81a2790a9a845f902a811ea2', 1),
(73, 'paul41', 'wright', 'brooks', 'Male', '3ce24a34ab204d82e12e60e205ff5ede', 1),
(74, 'mark5', 'brooks', 'brown', 'Male', '751933d2077ded39b30aac68060b71c5', 1),
(75, 'jenny0994', 'brown', 'morgan', 'Male', '59bb0aea62b70ddc63832302636c713c', 1),
(76, 'morris53', 'chrishaydon', 'brown', 'Male', '422bc412471dd80dc4f174c2d9a7e021', 1),
(77, 'paul68', 'mark', 'smith', 'Female', '313afaad7095a093eea942a0da8398ee', 1),
(78, 'brooks86', 'brooks', 'ross', 'Male', '73bbba08c3776debd5837a2c0dfe1e8b', 1),
(79, 'james54', 'jenny09', 'morris', 'Male', '7f686fb7a9ba33dfee86197c127365f5', 1),
(80, 'rogers58', 'morgan', 'maria', 'Female', 'f1b9d20083738141fb8c72c4d3364b4f', 1),
(81, 'maria31', 'rogers', 'brooks', 'Male', '328bb700b7eee8e5cbb15839243d327b', 1),
(82, 'david5', 'rivera', 'brown', 'Male', '14ab3096cfe6e150a56280c789e6e1e1', 1),
(83, 'mark21', 'wright', 'maria', 'Female', '442eff629cdd5657580d8c6205050e19', 1),
(84, 'jenny0932', 'mike', 'brooks', 'Female', 'a45d934a95f56a43ad85752800cfa859', 1),
(85, 'john92', 'sanders', 'mike', 'Male', 'b945d691d0ffe06cb8a6a520119a90ef', 1),
(86, 'rogers98', 'james', 'jenny09', 'Male', '79c89f1132cc08e88456b035f12d0097', 1),
(87, 'rogers95', 'jenny09', 'bell', 'Female', 'f318e4c186ab19e3d3d3591a2e075d03', 1),
(88, 'james50', 'chrishaydon', 'mark', 'Male', 'ef650493f25a16d7f4ef206cd5354f9f', 1),
(89, 'miller80', 'sanders', 'chrishaydon', 'Male', '8d0027ca30d88ad9a9880d35174919d9', 1),
(90, 'mark29', 'bell', 'paul', 'Female', '21698003655695103412c11ffe08a118', 1),
(91, 'cooper77', 'michael', 'maria', 'Male', '101faf06bcf8140ead914fbe116c941a', 1),
(92, 'john24', 'brown', 'paul', 'Male', '93a5fe6210bfcdb573ccd348e19e6a56', 1),
(93, 'chrishaydon32', 'john', 'ross', 'Female', '5c6f05dfb66be73f1a6e8e48fabcfe44', 1),
(94, 'bell41', 'morris', 'chrishaydon', 'Female', 'd5273c01c17187153a1e725d27d51034', 1),
(95, 'ross99', 'wright', 'brown', 'Male', '2b27aec5a1caf4d613a8eb8154560f49', 1),
(96, 'smith9', 'miller', 'morris', 'Male', '97ee0765b9c05d35b53769a3c4133b13', 1),
(97, 'miller73', 'chrishaydon', 'morgan', 'Male', '6c4283471ace6b4af590c180bd13b1bf', 1),
(98, 'michael44', 'cooper', 'maria', 'Female', 'dd4d053a12a3d8450166dba9177bac2c', 1),
(99, 'michael36', 'miller', 'cooper', 'Female', '36ab21ccb2a64acd5351bbb59753df9d', 1),
(100, 'smith93', 'bell', 'mike', 'Female', '8fbfdb81391ef264ae8b0df7e7e91d25', 1),
(101, 'morgan38', 'michael', 'wright', 'Male', '7fe5e229f17d1c7f98af6229bd33549b', 1),
(102, 'brown70', 'brown', 'daniel', 'Male', '80925ec8958ba5847ff2b28ec00daabb', 1),
(103, 'mike14', 'brown', 'jenny09', 'Male', 'a44db187c1c09c5872dc847ffb672e24', 1),
(104, 'daniel72', 'jenny09', 'rogers', 'Female', 'f2e51aec5731a5069e6631ae84bc86de', 1),
(105, 'jenny0974', 'ross', 'mark', 'Male', '997f99ffe068d1e4a1e6afbf872b64af', 1),
(106, 'maria51', 'rogers', 'ross', 'Male', 'ba22dcb1ad6c9240781fc6b29dcf90a8', 1),
(107, 'michael97', 'jenny09', 'morgan', 'Female', 'b3f1d9569d684ad845e82ad322aff039', 1),
(108, 'chrishaydon33', 'cooper', 'brown', 'Male', '6e097d46239427a59e93864cd22651bb', 1),
(109, 'sanders42', 'david', 'david', 'Female', 'c746602f44b9b51f87e8ca6c6ce4d4df', 1),
(110, 'brooks87', 'michael', 'wright', 'Male', '3b3d93f0c198684f4b48c026aeb798c5', 1),
(111, 'bell4', 'smith', 'cooper', 'Male', 'e50e309e6a683b1cbcf31f99b1290a9d', 1),
(112, 'jenny0945', 'bell', 'sanders', 'Male', 'eb04440b1c92d35d4466a2c164fce1fb', 1),
(113, 'james65', 'ross', 'ross', 'Female', 'a6dd8b5321189009e29fb9065371ddd0', 1),
(114, 'john98', 'morris', 'paul', 'Male', 'fe5d5050aefb9bd316b4304df5f5eb2b', 1),
(115, 'paul80', 'morgan', 'david', 'Male', 'e888d54c6981b4e7e92bbd874655a3bf', 1),
(116, 'john92', 'brown', 'jenny09', 'Female', '59624207640e3eb1c3a25caaa0d387c0', 1),
(117, 'wright69', 'david', 'chrishaydon', 'Male', 'b4ceea9331194b6884885396b2fa9ab9', 1),
(118, 'bell68', 'daniel', 'bell', 'Female', '7a47747a891fd8e6cfa1b5e13f6bd305', 1),
(119, 'brooks97', 'maria', 'cooper', 'Male', '59cd3d27cf79ce5d0f0e722e02ababcb', 1),
(120, 'mark14', 'cooper', 'wright', 'Female', '72c558cfdd0b27b021ed0c326655b419', 1),
(121, 'david60', 'john', 'bell', 'Female', 'daf7f99e70cc6bd895635ab8117f906c', 1),
(122, 'rivera68', 'miller', 'brooks', 'Female', '6ce20ee0cd25f2265f9c839747f3f60a', 1),
(123, 'brooks32', 'mark', 'brown', 'Male', '1d3d6cb6ad2d65a22f7202ee48687192', 1),
(124, 'brown15', 'wright', 'michael', 'Female', 'bfec76c4b0f279fb5fa947cdea45634c', 1),
(125, 'bell88', 'ross', 'brooks', 'Male', 'e4e8ae68e6791cce2718301e3e806417', 1),
(126, 'john26', 'brown', 'miller', 'Female', 'af2717f20db66dcc1069529d8470e03c', 1),
(127, 'paul55', 'morris', 'morgan', 'Male', 'f71110684519ea4c9997ee181344ca5b', 1),
(128, 'david59', 'rogers', 'morris', 'Male', '4123d932f75f7093e9f7be9dd4d8531c', 1),
(129, 'morris73', 'sanders', 'david', 'Male', '0955de128fd73fa725f8fb63dddb2b02', 1),
(130, 'michael77', 'john', 'brooks', 'Female', '0a23e450ab5659abde2283c4bbc629b5', 1),
(131, 'mark5', 'james', 'john', 'Male', 'ef5e4a71b458f98799d282a6954c9895', 1),
(132, 'james65', 'smith', 'paul', 'Male', '84bd8c4ac8f11f1fefdf519f372783a4', 1),
(133, 'maria39', 'miller', 'chrishaydon', 'Female', '91f576e83d57c336e54b6fc73ea2bfbf', 1),
(134, 'michael37', 'jenny09', 'rogers', 'Female', '74911c4886c6ad901dd8f3083ea7d008', 1),
(135, 'sanders1', 'morgan', 'maria', 'Female', '186e155dd946be048c37dc8f2e7eed7e', 1),
(136, 'daniel30', 'mike', 'morgan', 'Female', 'e41a85a3b3313519146041378173534e', 1),
(137, 'brown53', 'mike', 'sanders', 'Male', '3a5871a13dc27be7d72e82bed22580b2', 1),
(138, 'john52', 'morgan', 'maria', 'Female', 'bf4c4513b084ba0aa915dc428e2f5aa1', 1),
(139, 'wright73', 'rivera', 'rivera', 'Male', '4ee2e5750afd3933bf890098f6f15778', 1),
(140, 'mark63', 'daniel', 'morgan', 'Female', '3279caba4dbd1aebc014e13103454ad0', 1),
(141, 'james29', 'mark', 'mike', 'Male', '7d5eb23481c4dde548aa4d5b439007b5', 1),
(142, 'mark23', 'cooper', 'sanders', 'Male', '26e4b55f45b1589b8f79d3e207c68b0b', 1),
(143, 'cooper22', 'john', 'brooks', 'Male', 'db4f42f1500cbb9918558d9d7ec02ee7', 1),
(144, 'miller19', 'michael', 'brown', 'Male', 'a88e080d2d0a0caf75fb9df08a09b223', 1),
(145, 'jenny0913', 'brown', 'mark', 'Female', 'edb17fda48abe064968e3823daf2406e', 1),
(146, 'maria100', 'michael', 'james', 'Male', '528b3dcb48d9ade25eead37020925cf7', 1),
(147, 'chrishaydon51', 'daniel', 'morgan', 'Male', '51f2f1f0edfc42ea487cc60c1a8b2235', 1),
(148, 'david9', 'sanders', 'wright', 'Male', '117993f0e0796f188e658c1ae73f54e0', 1),
(149, 'mike52', 'bell', 'mark', 'Male', '049aaf70feca52840f5f645cc392997b', 1),
(150, 'wright5', 'sanders', 'mike', 'Female', '82c719790b9f9265313ca1e5f71be710', 1),
(151, 'brown21', 'bell', 'paul', 'Female', 'a42bd7f0e498cb3fa3fcce569aa72cb2', 1);
