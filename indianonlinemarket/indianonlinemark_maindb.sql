-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 10, 2025 at 12:38 PM
-- Server version: 5.7.31
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `indianonlinemark_maindb`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_to_temp_cart`
--

CREATE TABLE `add_to_temp_cart` (
  `id` int(11) NOT NULL,
  `temp_user_id` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `vendor_id` int(11) DEFAULT NULL,
  `p_id` int(11) NOT NULL,
  `quantity` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `color_id` int(11) NOT NULL,
  `size_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `add_to_temp_cart`
--

INSERT INTO `add_to_temp_cart` (`id`, `temp_user_id`, `vendor_id`, `p_id`, `quantity`, `color_id`, `size_id`) VALUES
(83, 'rr5k1k7mrogmp7nllkc3ha63pt3uii3g', 8, 67, '1', 2, 9),
(87, '6gof1emagt2v049phl6t0kdql2585cnm', 9, 72, '1', 0, 11),
(95, '18', 9, 73, '1', 4, 8),
(96, 'sarmc3tgquo45qgug4atl1ma7ljlgkjo', 9, 63, '1', 12, 8),
(97, '0cq524bsfsrcno9dh54ddfdg963md5ik', 9, 64, '1', 13, 9),
(98, 'ib79inikrrv8ms84qegmhcoit2uvptov', 9, 68, '1', 4, 11),
(102, '8v6qroqddfi53e6m18gj01mjqdt5qn8c', 9, 66, '1', 15, 8),
(103, '5p9ptmhj5ots7a0en6q5lfb6kfjhdeqf', 9, 46, '1', 19, 8),
(104, 's8m4d56k31sisbhc2ss31clha39co73o', 9, 74, '1', 19, 8),
(105, 'st3na8u58mcoqi9ijibmad7scqbgs2tl', 9, 74, '1', 19, 8),
(106, 'du8o6jmd6pdnmtnv3257q0rtqste6l0t', 9, 93, '1', 1, 8),
(107, 'cn1939fqqb9r2b5kvl595n6qhh0h88lj', 9, 105, '1', 8, 8),
(108, '48djic82i6tsuln2euu7qtgcib4kup7n', 9, 106, '1', 10, 8),
(109, 'm8b02tdks7ftrnnbsai2ki55q94olgjc', 9, 68, '1', 4, 11),
(110, 'dpkon3eekp05rehrqn1k2eeqjr97nh9t', 9, 110, '1', 0, 27),
(111, 'shg557tpvhq6qu6cfameduag0c750jmf', 9, 66, '1', 15, 8),
(112, '6d82cavpgtndmduibc4u6mapgu0lf0g3', 9, 79, '1', 2, 8),
(113, 'pskak43pl8f6bl39s1ku9totgho6cr52', 9, 105, '1', 8, 8),
(114, 'bh911tcfnbc1k62c9d0c2auin5nn41e4', 9, 92, '1', 12, 8),
(115, 'bh911tcfnbc1k62c9d0c2auin5nn41e4', 9, 95, '1', 2, 8),
(116, '988k8revfabi3cn5r3mr8l0u839dfnhi', 9, 96, '1', 11, 9),
(117, 'a7ii8dap17honhtec4ou3e4k717dfgu6', 9, 108, '1', 6, 8),
(118, 'qtdu92opm16g75ot8dd43a6bqtqu4avc', 9, 105, '1', 8, 8),
(119, '9modjf05jfan0ohce1rnbkgpjulbfcnm', 9, 106, '1', 10, 8),
(120, 'mvq8oceajptl3drft9q1njh98800crg2', 9, 84, '1', 2, 8),
(121, 'mvq8oceajptl3drft9q1njh98800crg2', 9, 95, '1', 2, 8),
(124, 'rqqqele7neel6u6vivdmis60kks4md7n', 9, 106, '1', 10, 8),
(125, 'n7tlkd0u1mgb10d34f3nave7js35g7r8', 9, 70, '1', 18, 22),
(126, '9rjs0btl10grto6nfq4einnlkfglhofh', 9, 111, '1', 0, 27),
(127, '0mn82kebusi8p3ecttc8n8d7nfgj0b3g', 9, 111, '1', 0, 27),
(128, 't5m86hfar5fvc90ufqa8h4narm5imq92', 9, 95, '1', 2, 8),
(129, '5nl9rad8dcppn7qn8lp2d7sa66h4gb1v', 9, 92, '1', 12, 8),
(130, 'usv5cba6hq1efus6399jqpdn0g9n9svf', 9, 90, '1', 0, 9),
(131, 'onjnpfsku8tci2nim4a1i7lbttnfpffe', 9, 47, '1', 12, 8),
(132, 'onjnpfsku8tci2nim4a1i7lbttnfpffe', 9, 95, '1', 2, 8),
(133, 'c1edca5j05ogh27kbn37c7s11mc1btho', 9, 92, '1', 12, 8),
(134, 'ahi5njhgice4jn0te7kunh7fbo7ihp0q', 9, 48, '1', 7, 9),
(136, 'cn4ek51s3rlhgn2fjto1hd3pu9b3vmtb', 9, 68, '1', 4, 11),
(142, '07s4n00ictv764lir944sbgheb1tiv5g', 9, 74, '1', 19, 8),
(143, 'dg28oco11k9pe94gd6gvfe0kvactplre', 9, 95, '1', 2, 8),
(144, 'dg28oco11k9pe94gd6gvfe0kvactplre', 9, 102, '1', 4, 8),
(145, '2lubkfvt0nsaitig0554cjln57fjls06', 9, 110, '1', 0, 27),
(146, '2lubkfvt0nsaitig0554cjln57fjls06', 9, 100, '1', 0, 27),
(147, '9popbepcndmpis17f5m431enor6ljof4', 9, 46, '1', 19, 8),
(148, 'bodlse6knjj6f2b54cqka61qds2i1l48', 9, 112, '1', 22, 9),
(149, 'jp62c32km4eofaftgmi1urs711um5nc8', 9, 95, '1', 2, 8),
(150, 'u886iibi8j61bibi68nbvs3787g0942p', 9, 95, '1', 2, 8),
(151, 'uac93tlqgmkb0hckq1f65k2jnsk3t1b1', 9, 95, '1', 2, 8),
(152, 'uac93tlqgmkb0hckq1f65k2jnsk3t1b1', 9, 92, '1', 12, 8),
(153, '4qelum66k6502cp6bpg8s423r9i3kg8t', 9, 71, '1', 11, 22),
(154, 'rrook7td1k0tp8va5hjmk166cu3cbqdi', 9, 50, '1', 10, 8),
(155, 'ma16iam81426gqpvqmrjc59n9pq18s4a', 9, 52, '1', 0, 8),
(156, 'v6o2n7dkf72c49p7870q69fmeo8s5n1o', 9, 97, '1', 0, 9),
(157, '4o8jmvb78mgaso5rn60t7507t21nkdhp', 9, 71, '1', 11, 22),
(158, 's28p1e1ku6jjpbj67g3fihpce03qke76', 9, 95, '1', 2, 8),
(159, 's28p1e1ku6jjpbj67g3fihpce03qke76', 9, 78, '1', 11, 9),
(161, 'is29m93od2i83vdjhnqk4pf762oai4i3', 9, 92, '1', 12, 8),
(162, 'elp2d7em509507vlau2k4l5255b8nh3e', 9, 95, '1', 2, 8),
(163, '62hmfftiljlc5benbhipld9jl5t2d6d2', 9, 64, '1', 13, 9),
(164, '62hmfftiljlc5benbhipld9jl5t2d6d2', 9, 113, '1', 20, 11),
(165, '72hhqr7nlre0ejk4t9to5hdp90cec874', 9, 102, '1', 4, 8),
(166, 'np9votmi87r9o2rdu6nnde7ucmttrq9l', 9, 91, '1', 7, 8),
(169, 'oj2er9pm8nd8atgn9hdl1lqprrc8fon7', 9, 95, '1', 2, 8),
(174, '0kt16gvgaq1oloqhbu3qo8gr8knrvq41', 9, 71, '1', 11, 22),
(175, '2pf9p16jrkpve5ipud2rf7dvhv96kkuu', 9, 86, '1', 23, 8),
(176, '2sr5amrcggebh0ps5urn0uv3jgg66faf', 9, 72, '1', 0, 11),
(177, '2sr5amrcggebh0ps5urn0uv3jgg66faf', 9, 71, '1', 11, 22),
(178, '2sr5amrcggebh0ps5urn0uv3jgg66faf', 9, 47, '1', 12, 8),
(179, '1gejftd00c1f1f61mir1aln27npd4cu8', 9, 96, '1', 11, 9),
(180, '1gejftd00c1f1f61mir1aln27npd4cu8', 9, 66, '1', 15, 8),
(181, '1gejftd00c1f1f61mir1aln27npd4cu8', 9, 64, '1', 13, 9),
(182, '47u4vk76j9dq272fpl43skflunurhed0', 9, 72, '1', 0, 11),
(183, 'rrunel146s47011o9i8ngerqg8j24cql', 9, 96, '1', 11, 9),
(185, 'nvahu8pmrescbm3sm9sr48f9fokd9rlp', 9, 70, '1', 18, 22),
(186, 'tea7uhkhh1go9aec5oa39e1uik8o7eoi', 9, 114, '1', 12, 24),
(188, 'o677t6c25ac81msjqdp5j0q129fegrti', 9, 120, '1', 0, 11),
(195, '2b6lvsmd4ep7b00ihjiv1fknjogr719m', 9, 118, '1', 0, 35),
(196, 'poaqlipb5100ha5d7or5fes0eok10dle', 9, 120, '1', 11, 33),
(197, '8001oh00ai9vbdk01rfgsamon2j3ea4n', 9, 120, '1', 11, 35),
(198, 'bnqgso3miivhs4q9ti5rtvjlj5hug0io', 9, 118, '1', 2, 32),
(199, 'ccim7n2bv42dg1o9ni2pm09552hr9ts5', 9, 124, '1', 11, 21),
(200, 'bkmjtorsba02frrg5tllevq56j45t3s0', 9, 68, '1', 4, 11),
(201, '7acfl343h65aesq19hlvkpe9adc1e513', 9, 118, '1', 2, 35),
(202, '7acfl343h65aesq19hlvkpe9adc1e513', 9, 118, '1', 2, 32),
(203, '7apmssaarddqpjopc377slcd2uamm2g3', 9, 134, '1', 11, 8),
(206, 'm67eudk0gscka87i5svnepvvn8fakmne', 9, 114, '1', 12, 24),
(207, 'pmlnlg7obm4mgaieqrukpue4cr0i5m4m', 9, 96, '1', 11, 9),
(208, 'f1ild69neok2hbptaensago3jrp05gu4', 9, 132, '1', 12, 24),
(209, 'dvhvmcidgqtf5a218cscs9of5cb98m0b', 9, 120, '1', 3, 32),
(210, 'srmutlaqvhri6ttmj4uh2lb25t14bn0h', 9, 136, '1', 0, 23),
(211, 'nm8hu6q72cirnpavoio5p40i3gq04k51', 9, 99, '1', 13, 28),
(212, 'nm8hu6q72cirnpavoio5p40i3gq04k51', 9, 90, '1', 0, 8),
(213, 'b0tpr6gqp50gb392paqctcm8h4osjlf4', 9, 136, '1', 0, 8),
(214, 'iuppk8c08agfiqf3qicbvgh9lnk37hvp', 9, 134, '1', 11, 8),
(215, 'g4e0kaeeoi09u01legcuhsht3ausfd1r', 9, 102, '1', 4, 8),
(216, 'rie3vot3ko297g21eodg79fi8hpm8ccc', 9, 144, '1', 7, 9),
(217, 'og70qtk1hiv15v5mn1ko6rehfeh25d1v', 9, 137, '1', 0, 8),
(218, 'cirpectlel6blmhi6ar7rp23lh4gff2p', 9, 98, '1', 10, 8),
(219, 'u48v9esbsvc3h94c2v1pa26g6rlva5tf', 9, 134, '1', 11, 8),
(221, 'snr04ncfdq14478jbrhfdki3b68ckrsn', 9, 118, '1', 2, 32),
(222, 'bt70ceojan0ujkedg08b0fuh1o8p2oo3', 9, 151, '1', 0, 9),
(223, 'n397h768qd9kdke0goanes9i6mhijir4', 9, 149, '1', 0, 9),
(224, 'rua6p1fa5jnbb7ci8jmohcacejo8lluo', 9, 149, '1', 0, 22),
(225, 'dt35so5drapi8rtgri2m52dnuf19prli', 9, 118, '1', 2, 32),
(226, '33pf6a5dbdad14ac218gqocdn8vqe5f9', 9, 149, '1', 0, 9),
(231, 'k504molj3q6s55ucotpald7bop6quert', 9, 150, '1', 0, 9),
(233, 'nna5grdunlcegv4148q92vedigokdu92', 9, 150, '1', 0, 11),
(234, '1kuu521dbuvfc0oelrandvkmuputqc3l', 9, 150, '1', 0, 9),
(238, '8db0do9k0ngslvc4fv397vv1tkvrba3p', 9, 149, '1', 0, 11),
(239, 'veh2jcbtm6sba1i29uuni3uvgep91cr6', 9, 149, '1', 0, 11),
(241, '7t3b9eon6t050ddvn9649vu4kuautbke', 9, 149, '1', 0, 9),
(242, 'jgdsq097dvpqtkdccnfa72jk7aikquvj', 9, 151, '1', 0, 9),
(243, '9lhvkl68c0okkreuvvkn6qvkgctgnd66', 9, 133, '1', 16, 24),
(249, 'nqg0hc546ivvvu91p1itjsdurjdlkqsp', 9, 149, '1', 0, 22),
(250, 'nqg0hc546ivvvu91p1itjsdurjdlkqsp', 9, 149, '1', 0, 21),
(251, 'nqg0hc546ivvvu91p1itjsdurjdlkqsp', 9, 149, '1', 4, 22),
(252, 'nqg0hc546ivvvu91p1itjsdurjdlkqsp', 9, 149, '1', 4, 9),
(253, '2g1lpmqu1dle92hd8devip2kes4redig', 9, 150, '1', 23, 22),
(254, '2g1lpmqu1dle92hd8devip2kes4redig', 9, 150, '1', 23, 11),
(255, 'qj3ip7a15kgq397cthp95utee1gdlvog', 9, 143, '1', 0, 9),
(256, '2in3bth0vh15spqh0vc1bdjj9tus5rfn', 9, 132, '1', 12, 24),
(257, '0stoc00b09rufmfi4v2tg68rlkhuis8v', 9, 149, '1', 4, 11),
(258, 'glj4hrqm4ss6uu6bll4c2uabjptj4743', 9, 142, '1', 14, 8),
(259, 'f2kj52i1jnrmjma86mggua7m1o895anh', 9, 149, '1', 4, 22),
(260, 'gjk2o3da2kao9ghn56l1jo1m2i1ifnrj', 9, 150, '1', 23, 11),
(261, '5d1chonvluqu7ru83fpfanobeil4bc5o', 9, 150, '1', 23, 11),
(262, 'gjk2o3da2kao9ghn56l1jo1m2i1ifnrj', 9, 148, '1', 3, 21),
(263, '3en6ltb8k4k8vgkreo0tijl6skqlptnu', 9, 152, '1', 0, 9),
(264, 'j1v3tib2i7pbdu4hqcmv17d66aqi2gep', 9, 153, '1', 10, 22),
(266, 'lsmaksitd8lrsjt3g965l6slsdnuvfem', 9, 153, '1', 10, 11),
(267, '43gfus8g8h6sfi3864rqqk4jd3dmbv73', 9, 113, '1', 20, 11),
(282, '33i12u7bctnc154cnkvslsjkf9jdg8ed', 9, 151, '1', 0, 9),
(283, 'h6c0jcqbq274l8m5moa4t2l1sqtre1e1', 9, 152, '1', 11, 9),
(284, 'h6c0jcqbq274l8m5moa4t2l1sqtre1e1', 9, 148, '1', 3, 9),
(285, 'o17a56qm68omb4o5qkq2miokaoftba4o', 9, 152, '1', 11, 9),
(286, 'b71t1asjims7nj857uhlltb5assgc75l', 9, 152, '1', 11, 9),
(287, 'fcu4puu142ebs0muriakeg58mmvakt2r', 9, 162, '1', 6, 11),
(288, 'o5d0vnvpcqdkvipu9cdkvlhkemp2ig0f', 9, 161, '1', 0, 11),
(289, 'flgs2pm3rjg8ujad7nk4tium0afnsoic', 9, 160, '1', 0, 11),
(290, 'ta0em4d1js23llokem444m4f4o1d4tn9', 9, 163, '1', 3, 11),
(292, 'bc9d2tmv0jcpg5j2bcm0rruoa54kmnv7', 9, 162, '1', 6, 11),
(293, '8n8sm17b1kapjaejh89t2b7kh2jvslka', 9, 161, '1', 0, 11),
(294, '11tgu8giv0h108ca5lu91lmf9grs6lhn', 9, 152, '1', 0, 9),
(295, '11tgu8giv0h108ca5lu91lmf9grs6lhn', 9, 161, '1', 0, 11),
(296, '8n20iafttqki07hn5g56gql98nkc5rii', 9, 161, '1', 0, 11),
(297, 'sviptg4pd39fes9t4anv08hek45vbki5', 9, 128, '1', 7, 11),
(298, 'mvu9s6dd68634bsn4llh2qgonc2ias58', 9, 152, '1', 0, 9),
(299, 'd2ounpae0tarjc8md4dbllmco6t3un43', 9, 160, '1', 0, 11),
(300, '6iq5fkhijc7vhn1liv78vjh13ptp0arc', 9, 162, '1', 6, 11),
(301, 'eodd9k3quh8bceuhr77h2h616kecegm0', 9, 160, '1', 0, 11),
(302, '7bkuhvksv7dc5jn0mc5t99cpk1sjol3d', 9, 152, '1', 0, 9),
(303, 'd3hjfket9ta2edcclk990n3nu9ud2rcf', 9, 152, '1', 0, 9),
(304, '0j5hpngvnskuc2o6dvnbhm84mp7snt85', 9, 152, '1', 0, 9),
(305, 'vqcogragudmukv6qvdup2dcdq844ro4h', 9, 161, '1', 0, 11),
(306, 's6pd4hfefbg897kr7528vbd19bna6mj5', 9, 160, '1', 0, 11),
(307, '6lho3v0k1rkn0joppr6adskcm8rbiqq3', 9, 164, '1', 0, 21),
(308, 'tfp7kov6fnbvn9387nnucbfb61l9clcc', 9, 152, '1', 0, 9),
(309, 'sienhq5vj1hlvt3drpeci5neepni2v23', 9, 160, '1', 3, 22),
(310, 'hloj8g374crc607mo8obg6uee5vfgisp', 9, 165, '1', 0, 21),
(311, 'nj297o9mruf5mi32okcek4uqsbh0aedm', 9, 143, '1', 10, 9),
(312, 'ehkqfnlnal5ga2emmluseaakfqqusiec', 9, 148, '1', 3, 9),
(313, 'ehkqfnlnal5ga2emmluseaakfqqusiec', 9, 126, '1', 7, 8),
(314, '0k43aiqfsb8et1lvk1dmm7l1pheapkbg', 9, 165, '1', 0, 21),
(320, 'v0gkss7o1m98t4qlpaa6ci3r3atgbnug', 9, 166, '4', 11, 22),
(323, 'us0d8b64qc3kbn7r0idi3hipenv2ocf9', 9, 152, '1', 11, 9),
(324, 'anomlujktdcf11bmligpi7kc9ph4h9vn', 9, 96, '1', 11, 9),
(325, 'anomlujktdcf11bmligpi7kc9ph4h9vn', 9, 173, '1', 2, 22),
(326, 'anomlujktdcf11bmligpi7kc9ph4h9vn', 9, 174, '1', 7, 11),
(327, 'anomlujktdcf11bmligpi7kc9ph4h9vn', 9, 171, '1', 17, 21),
(328, 'anomlujktdcf11bmligpi7kc9ph4h9vn', 9, 172, '1', 11, 11),
(329, 'anomlujktdcf11bmligpi7kc9ph4h9vn', 9, 166, '1', 8, 21),
(330, 'anomlujktdcf11bmligpi7kc9ph4h9vn', 9, 160, '1', 2, 11),
(331, 'anomlujktdcf11bmligpi7kc9ph4h9vn', 9, 147, '1', 12, 9),
(332, 'anomlujktdcf11bmligpi7kc9ph4h9vn', 9, 152, '1', 11, 9),
(333, 'gomlrjcgkoq7rvebahh7e72uols83ole', 9, 166, '1', 8, 21),
(334, 'ratqobop57sjdo3ia19hm2csioc29r91', 9, 122, '1', 3, 9),
(335, '8oe8noio3hkecfrdamu6j4au86gia490', 9, 160, '1', 10, 22),
(336, 'cqbfo0mcm6946ihkc2cupiofut24mh7v', 9, 163, '1', 3, 11),
(337, '0rhru83lnc6qs3qkurcm17skko6ndl14', 9, 152, '1', 11, 9),
(338, '1c4g6lt0daupfpe5qmshs9teh36htmjg', 9, 152, '1', 11, 11),
(339, 'oceqkq7qpq6evua3fvlji0jghtkos9lb', 9, 152, '1', 11, 9),
(340, '8alvga7sb37i27i56q5lac9ooj6v0o9g', 9, 161, '1', 8, 22),
(341, '8alvga7sb37i27i56q5lac9ooj6v0o9g', 9, 152, '1', 11, 22),
(342, '8isslbq0tuscodkv09ghr30id0v5hn23', 9, 171, '1', 17, 21),
(343, 'fl30hkk24bn3id4pmjuck6dbpsbnp7cd', 9, 168, '1', 4, 11),
(344, 'f45uq7tt39if2ie8ml9l35snidto0rov', 9, 176, '1', 11, 23),
(345, 'f7rodedl13ql091in18cc4e0hud61hfi', 9, 168, '1', 4, 11),
(346, 'lvm44vviv7lo771lnpkl64clsp9r046q', 9, 173, '1', 2, 22),
(347, 'lbjkgsca3f62ufh932l75ns2n8535g98', 9, 166, '1', 8, 21),
(348, 'a2c0hbm95t8th2plfs3irgvtrs22b6fa', 9, 168, '1', 4, 11),
(349, 'updqd8qifers4rtdq9tn3al9hjaa46re', 9, 168, '1', 4, 23),
(354, 'u9qfo63i82d2kvrsro2nk6q0jfkku9b1', 9, 176, '1', 11, 11),
(355, 'u9qfo63i82d2kvrsro2nk6q0jfkku9b1', 9, 150, '1', 23, 9),
(356, 'f2gqgm5gu049foopeh3gl7p7t3h4fh93', 9, 152, '1', 11, 9),
(357, '836mpsn3kqc32npt27m4uo30640s3a39', 9, 118, '1', 2, 32),
(358, 'hl2q4csdjn48janv86mlbl29mhv8ikgv', 9, 174, '1', 7, 11),
(362, 'sbdfu7mq1pnamp4tudhifekupjt0oidq', 9, 169, '1', 4, 11),
(364, 'uaq8u51hpv48e2ql612lm92ko4ncllr4', 9, 169, '1', 4, 21),
(365, 'uaq8u51hpv48e2ql612lm92ko4ncllr4', 9, 169, '1', 4, 11),
(366, 'sbdfu7mq1pnamp4tudhifekupjt0oidq', 9, 177, '1', 2, 11),
(371, '1veigifr9h98jcuhrqjik5ci175v7sp0', 9, 178, '1', 19, 21),
(372, 'fkifuid6edp49kvhil5bbpea3ete5e7c', 9, 171, '1', 1, 21),
(373, 'd4t434foc2bpj8o86800p8fkkhethi75', 9, 162, '1', 7, 11),
(374, '8pkm6u3btsrnkqrcnae9ua3emocgb9og', 9, 162, '1', 6, 11),
(375, 'p5hi1njd6gc6h5fibfgg9govco27fb3m', 9, 177, '1', 2, 22),
(376, 'p5hi1njd6gc6h5fibfgg9govco27fb3m', 9, 171, '1', 1, 21),
(385, '15', 9, 182, '1', 7, 8),
(387, '1b316tih1r9f68qiv5r183h4867i8poj', 9, 182, '1', 7, 8),
(388, 'ft50ncpkqb8lpnohbmh46qguhp6jjj0i', 9, 193, '1', 2, 8),
(389, '15', 9, 199, '1', 0, 8);

-- --------------------------------------------------------

--
-- Table structure for table `add_to_wishlist`
--

CREATE TABLE `add_to_wishlist` (
  `id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `quantity` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `temp_user_id` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `vendor_id` int(11) DEFAULT NULL,
  `color_id` int(11) NOT NULL,
  `size_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `add_to_wishlist`
--

INSERT INTO `add_to_wishlist` (`id`, `p_id`, `quantity`, `temp_user_id`, `vendor_id`, `color_id`, `size_id`) VALUES
(39, 73, '1', 'fodor4t78u70l5q5gppmqhhk4guu7lb1', 9, 4, 8),
(40, 113, '1', '21s3libfi4on99ic3culnhea8c5sjrbd', 9, 24, 11),
(41, 66, '1', '21s3libfi4on99ic3culnhea8c5sjrbd', 9, 15, 8),
(42, 64, '1', '21s3libfi4on99ic3culnhea8c5sjrbd', 9, 13, 9),
(43, 105, '1', '21s3libfi4on99ic3culnhea8c5sjrbd', 9, 8, 8),
(44, 50, '1', '21s3libfi4on99ic3culnhea8c5sjrbd', 9, 10, 8),
(45, 68, '1', '31t5e6ctc5aq8rt25qg2dcfep0gi9dvn', 9, 4, 11),
(46, 86, '1', '73b8uqtgk85eeft7vpb89n511m0hrd5f', 9, 23, 8),
(47, 106, '1', '48djic82i6tsuln2euu7qtgcib4kup7n', 9, 10, 8),
(48, 97, '1', '4i8fjnsq1vaft20v1vhbe9hve5i9sj0o', 9, 0, 9),
(49, 98, '1', '4i8fjnsq1vaft20v1vhbe9hve5i9sj0o', 9, 10, 8),
(50, 112, '1', '4i8fjnsq1vaft20v1vhbe9hve5i9sj0o', 9, 22, 9),
(51, 68, '1', '9qj6e6ede9s1rf1sj70f1kg1qk2m7qvt', 9, 4, 11),
(52, 50, '1', '5l5u5rn2g8ev5rcqusjnsc65qvma3n56', 9, 10, 8),
(53, 46, '1', 'c1edca5j05ogh27kbn37c7s11mc1btho', 9, 19, 8),
(54, 46, '1', 'l7utrinjinsq4fcg0cn7dj4okctlsucm', 9, 19, 8),
(55, 72, '1', 'rrook7td1k0tp8va5hjmk166cu3cbqdi', 9, 0, 11),
(56, 71, '1', 'rrook7td1k0tp8va5hjmk166cu3cbqdi', 9, 11, 22),
(57, 50, '1', 'rrook7td1k0tp8va5hjmk166cu3cbqdi', 9, 10, 8),
(58, 95, '1', 'u886iibi8j61bibi68nbvs3787g0942p', 9, 2, 8),
(59, 77, '1', 'rrook7td1k0tp8va5hjmk166cu3cbqdi', 9, 10, 11),
(60, 48, '1', 'rrook7td1k0tp8va5hjmk166cu3cbqdi', 9, 7, 9),
(61, 77, '1', 'kfdha34o39f43p9atfldvl2nhkaqe97j', 9, 10, 11),
(62, 70, '1', 'l3srm5gpl54309r9povindp5q0tbn7k2', 9, 18, 22),
(63, 81, '1', 'o2d8071lboskg5in73j9ob1bs60abpq5', 9, 0, 11),
(64, 72, '1', 'nu2oill4ol80ve5n6f6qbnlq78u3p6pj', 9, 0, 11),
(65, 134, '1', 'm67eudk0gscka87i5svnepvvn8fakmne', 9, 11, 8),
(66, 124, '1', 'g422cdba2dkqevn3qo5f25mhklvbjfns', 9, 11, 23),
(67, 118, '1', 'bt70ceojan0ujkedg08b0fuh1o8p2oo3', 9, 2, 32),
(68, 150, '1', 'nna5grdunlcegv4148q92vedigokdu92', 9, 0, 9),
(69, 149, '1', 'nna5grdunlcegv4148q92vedigokdu92', 9, 0, 9),
(70, 150, '1', 'nna5grdunlcegv4148q92vedigokdu92', 9, 0, 11),
(71, 149, '1', 'nna5grdunlcegv4148q92vedigokdu92', 9, 0, 11),
(72, 149, '1', 'nqg0hc546ivvvu91p1itjsdurjdlkqsp', 9, 0, 22),
(73, 156, '1', '33i12u7bctnc154cnkvslsjkf9jdg8ed', 9, 0, 0),
(74, 152, '1', 'o17a56qm68omb4o5qkq2miokaoftba4o', 9, 11, 9),
(75, 160, '1', 'flgs2pm3rjg8ujad7nk4tium0afnsoic', 9, 0, 11),
(76, 160, '1', 'flgs2pm3rjg8ujad7nk4tium0afnsoic', 9, 10, 21),
(77, 160, '1', 'eodd9k3quh8bceuhr77h2h616kecegm0', 9, 10, 22),
(78, 160, '1', 'eodd9k3quh8bceuhr77h2h616kecegm0', 9, 0, 11),
(79, 161, '1', 'eodd9k3quh8bceuhr77h2h616kecegm0', 9, 0, 11),
(80, 160, '1', 's6pd4hfefbg897kr7528vbd19bna6mj5', 9, 10, 22),
(81, 160, '1', 'sienhq5vj1hlvt3drpeci5neepni2v23', 9, 2, 21),
(82, 160, '1', 'sienhq5vj1hlvt3drpeci5neepni2v23', 9, 10, 22),
(84, 160, '1', 'iuh58apuemgbmibtvvne92g3vlsfcug1', 9, 0, 11),
(85, 143, '1', 'cpajgm3hrgv5f28t0uspritgvl4rhrin', 9, 10, 11),
(86, 165, '1', 'hloj8g374crc607mo8obg6uee5vfgisp', 9, 10, 22),
(87, 149, '1', 'bnpk7h5uh7s23dt5lmlgk2uacc4ipv6m', 9, 0, 9),
(88, 137, '1', 'bnpk7h5uh7s23dt5lmlgk2uacc4ipv6m', 9, 0, 8),
(89, 126, '1', 'bnpk7h5uh7s23dt5lmlgk2uacc4ipv6m', 9, 0, 8),
(90, 162, '1', 'ehkqfnlnal5ga2emmluseaakfqqusiec', 9, 6, 11),
(91, 148, '1', 'ehkqfnlnal5ga2emmluseaakfqqusiec', 9, 3, 9),
(92, 152, '1', 'ehkqfnlnal5ga2emmluseaakfqqusiec', 9, 0, 9),
(93, 161, '1', 'ehkqfnlnal5ga2emmluseaakfqqusiec', 9, 0, 11),
(94, 163, '1', 'ehkqfnlnal5ga2emmluseaakfqqusiec', 9, 3, 11),
(95, 137, '1', 'ehkqfnlnal5ga2emmluseaakfqqusiec', 9, 0, 8),
(96, 126, '1', 'ehkqfnlnal5ga2emmluseaakfqqusiec', 9, 0, 8),
(99, 166, '1', 'v0gkss7o1m98t4qlpaa6ci3r3atgbnug', 9, 11, 22),
(100, 160, '1', 'pcsaiqa7pmilespvib4ioes77scabkqb', 9, 3, 22),
(101, 171, '1', 'c5735sb4mkh1ho8pn2ggj64i9hm5a0tu', 9, 17, 22),
(102, 169, '1', 'sbdfu7mq1pnamp4tudhifekupjt0oidq', 9, 4, 21),
(103, 178, '1', '1veigifr9h98jcuhrqjik5ci175v7sp0', 9, 19, 22),
(104, 177, '1', 'p5hi1njd6gc6h5fibfgg9govco27fb3m', 9, 2, 11),
(105, 177, '1', '15', 9, 2, 22),
(106, 185, '1', '1b316tih1r9f68qiv5r183h4867i8poj', 9, 0, 8),
(107, 185, '1', '1b316tih1r9f68qiv5r183h4867i8poj', 9, 0, 26),
(108, 197, '1', '8ub4bgd0s4oq7naj1v59epgahdp4d1sh', 9, 0, 8);

-- --------------------------------------------------------

--
-- Table structure for table `all_images`
--

CREATE TABLE `all_images` (
  `id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `size_id` int(11) NOT NULL,
  `color_id` int(11) NOT NULL,
  `image` text NOT NULL,
  `price` varchar(50) NOT NULL,
  `cut_price` varchar(50) NOT NULL,
  `stock` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `all_images`
--

INSERT INTO `all_images` (`id`, `p_id`, `size_id`, `color_id`, `image`, `price`, `cut_price`, `stock`) VALUES
(278, 30, 8, 1, '2429647060goku-1.webp', '1200', '1500', 2),
(279, 30, 8, 1, '1515653531goku2.webp', '1200', '1500', 2),
(280, 30, 11, 3, '9825720870goku3.webp', '1200', '999', 56),
(281, 30, 11, 3, '20154297781goku4.webp', '1200', '999', 56),
(282, 31, 8, 1, '3608315050person-outline-filled-128x128-copy.png', '1200', '1500', 666),
(283, 31, 8, 1, '8999906391person-outline-filled-128x128.png', '1200', '1500', 666),
(284, 31, 23, 6, '6009912860supportmale-128.webp', '1200', '1500', 666),
(285, 31, 23, 6, '7381557771user.jpg', '1200', '1500', 666),
(286, 32, 23, 2, '2690503070blue-and-white-modern-responsive-website-development-services-instagram-post-3.jpg', '500', '1200', 5),
(294, 33, 8, 1, '11950578020097ac63b-ee94-4a1a-b42e-70c511fab9c8.jpeg', '400', '500', 6),
(297, 35, 24, 15, '19506920100097ac63b-ee94-4a1a-b42e-70c511fab9c8.jpeg', '200', '300', 1),
(298, 35, 24, 8, '11849115370ff31fce1-e214-4e03-9c54-7f188c06dc66.jpeg', '300', '400', 5),
(299, 34, 24, 15, '8017284840097ac63b-ee94-4a1a-b42e-70c511fab9c8.jpeg', '200', '300', 1),
(300, 34, 24, 8, '18939680930ff31fce1-e214-4e03-9c54-7f188c06dc66.jpeg', '300', '400', 5),
(306, 36, 24, 10, '19972241530cd756894-da23-4ce2-be9c-2edb70ec852f.jpeg', '100', '200', 6),
(307, 36, 24, 3, '12861334830615f0da1-32b1-4c27-ab60-e73d7c9be353.jpeg', '100', '200', 6),
(308, 36, 24, 3, '11508707010615f0da1-32b1-4c27-ab60-e73d7c9be353.jpeg', '100', '200', 6),
(309, 36, 24, 3, '3503498750615f0da1-32b1-4c27-ab60-e73d7c9be353.jpeg', '100', '200', 6),
(316, 38, 11, 13, '24774699902e493d14-8934-48e1-bc74-9317eae71a81.webp', '999', '1500', 10),
(317, 38, 11, 13, '198901351314b3e9f9b-8d24-49da-8fff-190dc4549a0d.webp', '999', '1500', 10),
(318, 39, 23, 2, '919062315071a2b145-7ce3-4085-b083-d18f13342f4f.jpg', '855', '985', 12),
(319, 39, 23, 2, '6425013161034059a4-2a8e-4283-886b-197ce6b73652.jpg', '855', '985', 12),
(320, 40, 8, 12, '3933757660948fb28a-5d17-49e1-ad1a-d43f443961b6.jpg', '450', '550', 12),
(321, 40, 8, 12, '92626307318009c43b-268d-475f-ae71-81b6384b187e.jpg', '450', '550', 12),
(322, 40, 8, 12, '2052039949281226332-c2d2-43ff-ace1-a16280f4728f.jpg', '450', '550', 12),
(323, 41, 8, 14, '147676182807ea67e7e-0b0d-4052-9a0d-c0b846d3d543.webp', '488', '588', 12),
(324, 41, 8, 14, '527271073183aed000-c890-4928-9982-619f745be808.webp', '488', '588', 12),
(325, 41, 8, 14, '13587705422d830ff25-9797-4aa9-8bef-2812f9ccaad4.webp', '488', '588', 12),
(343, 37, 21, 1, '1214448060010e21d42-a0e5-4bf6-bc99-5880507cad7e_1170x.webp', '1200', '1500', 10),
(344, 37, 21, 1, '1002986509136713dbe-c465-4d25-98e3-701a9ba38546_1170x.jpg', '1200', '1500', 10),
(345, 37, 8, 11, '107199927900522a4d3-4fd8-463d-9746-b449e12f2926.webp', '999', '1111', 10),
(346, 37, 8, 11, '9410560051d6f66c22-343e-4759-afed-604ffc19f72d.webp', '999', '1111', 10),
(347, 37, 8, 11, '12609797032dc13af24-5794-490e-a6e9-8fffd493279f.webp', '999', '1111', 10),
(348, 37, 8, 11, '2793583233e3d49ba7-9ba7-4123-a69d-4ed646bba900.webp', '999', '1111', 10),
(351, 42, 11, 7, '5245713340image_2d005fa9-e40d-4d22-8464-fca66b0db3f3.webp', '799', '899', 10),
(352, 42, 11, 7, '1626299561image_7f09be8d-bd88-482c-8fb7-cd9e1d9ba329.jpg', '799', '899', 10),
(353, 43, 23, 1, '151528244001701930300.png', '500', '2500', 50),
(354, 43, 23, 1, '6244331211701930348.png', '500', '2500', 50),
(355, 44, 8, 1, '17865264990download.jpg', '10', '200', 50),
(356, 45, 8, 1, '21027642190img-20240108-wa0018.jpg', '2', '200', 5),
(419, 53, 9, 2, '7045546900pro-img.jpg', '1200', '1500', 1),
(420, 53, 9, 2, '7436443931pubg.jpg', '1200', '1500', 1),
(421, 54, 9, 2, '21398182810pro-img.jpg', '1200', '1500', 1),
(422, 54, 9, 2, '9693717981pubg.jpg', '1200', '1500', 1),
(423, 55, 9, 2, '16769074660pro-img.jpg', '1200', '1500', 1),
(424, 55, 9, 2, '5666046221pubg.jpg', '1200', '1500', 1),
(425, 56, 11, 2, '3994821050pubg.jpg', '1200', '1500', 2),
(426, 56, 11, 2, '9888504081skull.png', '1200', '1500', 2),
(427, 57, 8, 1, '[\"6718816860pro-img.jpg\",\"164894011pubg.jpg\"]', '1200', '1500', 2),
(428, 57, 8, 1, '[\"6718816860pro-img.jpg\",\"164894011pubg.jpg\"]', '1200', '1500', 2),
(429, 57, 9, 2, '[\"6718816860pro-img.jpg\",\"164894011pubg.jpg\"]', '1200', '1500', 2),
(430, 57, 9, 2, '[\"6718816860pro-img.jpg\",\"164894011pubg.jpg\"]', '1200', '1500', 2),
(431, 58, 8, 1, '[\"18201502780pro-img.jpg\",\"7375650641pubg.jpg\"]', '1200', '1500', 2),
(432, 58, 8, 1, '[\"18201502780pro-img.jpg\",\"7375650641pubg.jpg\"]', '1200', '1500', 2),
(433, 58, 9, 2, '[\"18201502780pro-img.jpg\",\"7375650641pubg.jpg\"]', '1200', '1500', 2),
(434, 58, 9, 2, '[\"18201502780pro-img.jpg\",\"7375650641pubg.jpg\"]', '1200', '1500', 2),
(435, 59, 8, 1, '[\"18144354780pro-img.jpg\",\"15112670151pubg.jpg\"]', '1200', '1500', 2),
(436, 59, 8, 1, '[\"18144354780pro-img.jpg\",\"15112670151pubg.jpg\"]', '1200', '1500', 2),
(437, 59, 9, 2, '[\"18144354780pro-img.jpg\",\"15112670151pubg.jpg\"]', '1200', '1500', 2),
(438, 59, 9, 2, '[\"18144354780pro-img.jpg\",\"15112670151pubg.jpg\"]', '1200', '1500', 2),
(439, 60, 8, 1, '[\"4365857140pro-img.jpg\",\"15295822931pubg.jpg\"]', '1200', '1500', 2),
(440, 60, 8, 1, '[\"4365857140pro-img.jpg\",\"15295822931pubg.jpg\"]', '1200', '1500', 2),
(441, 60, 9, 2, '[\"4365857140pro-img.jpg\",\"15295822931pubg.jpg\"]', '1200', '1500', 2),
(442, 60, 9, 2, '[\"4365857140pro-img.jpg\",\"15295822931pubg.jpg\"]', '1200', '1500', 2),
(469, 61, 8, 1, '[\"6183594740pro-img.jpg\",\"917275591pubg.jpg\"]', '15000', '15000', 20),
(470, 61, 8, 1, '[\"6183594740pro-img.jpg\",\"917275591pubg.jpg\"]', '15000', '15000', 20),
(471, 61, 9, 2, '[\"6183594740pro-img.jpg\",\"917275591pubg.jpg\"]', '15000', '15000', 20),
(472, 61, 9, 2, '[\"6183594740pro-img.jpg\",\"917275591pubg.jpg\"]', '15000', '15000', 20),
(473, 61, 11, 3, '[\"6183594740pro-img.jpg\",\"917275591pubg.jpg\"]', '15000', '15000', 20),
(474, 61, 11, 3, '[\"6183594740pro-img.jpg\",\"917275591pubg.jpg\"]', '15000', '15000', 20),
(475, 61, 21, 4, '[\"6183594740pro-img.jpg\",\"917275591pubg.jpg\"]', '15000', '15000', 20),
(476, 61, 21, 4, '[\"6183594740pro-img.jpg\",\"917275591pubg.jpg\"]', '15000', '15000', 20),
(511, 62, 9, 1, '[\"18584921380pubg.jpg\",\"14852997321skull.png\"]', '1200', '232', 3),
(512, 62, 9, 1, '[\"18584921380pubg.jpg\",\"14852997321skull.png\"]', '1200', '232', 3),
(513, 62, 11, 2, '[\"18584921380pubg.jpg\",\"14852997321skull.png\"]', '1200', '232', 3),
(514, 62, 11, 2, '[\"18584921380pubg.jpg\",\"14852997321skull.png\"]', '1200', '232', 3),
(515, 62, 21, 1, '[\"19606280320t1-hero-img.svg\",\"4536208461thunderstorm_in_sydney_2000x1500.png\"]', '323', '23', 23),
(516, 62, 21, 1, '[\"19606280320t1-hero-img.svg\",\"4536208461thunderstorm_in_sydney_2000x1500.png\"]', '323', '23', 23),
(517, 62, 23, 2, '[\"19606280320t1-hero-img.svg\",\"4536208461thunderstorm_in_sydney_2000x1500.png\"]', '323', '23', 23),
(518, 62, 23, 2, '[\"19606280320t1-hero-img.svg\",\"4536208461thunderstorm_in_sydney_2000x1500.png\"]', '323', '23', 23),
(519, 62, 24, 3, '[\"19606280320t1-hero-img.svg\",\"4536208461thunderstorm_in_sydney_2000x1500.png\"]', '323', '23', 23),
(520, 62, 24, 3, '[\"19606280320t1-hero-img.svg\",\"4536208461thunderstorm_in_sydney_2000x1500.png\"]', '323', '23', 23),
(700, 67, 9, 2, '[\"2139281290skull.png\",\"17532517031something-lost.png\"]', '1', '1', 1),
(701, 67, 9, 2, '[\"2139281290skull.png\",\"17532517031something-lost.png\"]', '1', '1', 1),
(1005, 96, 9, 11, '[\"812796600img_4092.jpeg\",\"10862790321img_3356.jpeg\"]', '349', '600', 0),
(1006, 96, 9, 11, '[\"812796600img_4092.jpeg\",\"10862790321img_3356.jpeg\"]', '349', '600', 0),
(1007, 97, 9, 24, '[\"19098059120img_3953.jpeg\",\"8193696651img_3954.jpeg\",\"19102872922img_3353.jpeg\"]', '349', '600', 1),
(1008, 97, 9, 24, '[\"19098059120img_3953.jpeg\",\"8193696651img_3954.jpeg\",\"19102872922img_3353.jpeg\"]', '349', '600', 1),
(1009, 97, 9, 24, '[\"19098059120img_3953.jpeg\",\"8193696651img_3954.jpeg\",\"19102872922img_3353.jpeg\"]', '349', '600', 1),
(1010, 97, 11, 24, '[\"19098059120img_3953.jpeg\",\"8193696651img_3954.jpeg\",\"19102872922img_3353.jpeg\"]', '349', '600', 1),
(1011, 97, 11, 24, '[\"19098059120img_3953.jpeg\",\"8193696651img_3954.jpeg\",\"19102872922img_3353.jpeg\"]', '349', '600', 1),
(1012, 97, 11, 24, '[\"19098059120img_3953.jpeg\",\"8193696651img_3954.jpeg\",\"19102872922img_3353.jpeg\"]', '349', '600', 1),
(1095, 103, 8, 12, '[\"7335303140img_3919.jpeg\",\"12373579131img_3468.jpeg\",\"21425875752img_3469.jpeg\",\"5384535993img_3470.jpeg\"]', '299', '499', -2),
(1096, 103, 8, 12, '[\"7335303140img_3919.jpeg\",\"12373579131img_3468.jpeg\",\"21425875752img_3469.jpeg\",\"5384535993img_3470.jpeg\"]', '299', '499', -2),
(1097, 103, 8, 12, '[\"7335303140img_3919.jpeg\",\"12373579131img_3468.jpeg\",\"21425875752img_3469.jpeg\",\"5384535993img_3470.jpeg\"]', '299', '499', -2),
(1098, 103, 8, 12, '[\"7335303140img_3919.jpeg\",\"12373579131img_3468.jpeg\",\"21425875752img_3469.jpeg\",\"5384535993img_3470.jpeg\"]', '299', '499', -2),
(1358, 52, 8, 21, '[\"19175187200img_3504.jpeg\",\"8615576391img_3505.jpeg\",\"20635203722img_3506.jpeg\",\"10421772893img_3507.jpeg\"]', '290', '450', 0),
(1359, 52, 8, 21, '[\"19175187200img_3504.jpeg\",\"8615576391img_3505.jpeg\",\"20635203722img_3506.jpeg\",\"10421772893img_3507.jpeg\"]', '290', '450', 0),
(1360, 52, 8, 21, '[\"19175187200img_3504.jpeg\",\"8615576391img_3505.jpeg\",\"20635203722img_3506.jpeg\",\"10421772893img_3507.jpeg\"]', '290', '450', 0),
(1361, 52, 8, 21, '[\"19175187200img_3504.jpeg\",\"8615576391img_3505.jpeg\",\"20635203722img_3506.jpeg\",\"10421772893img_3507.jpeg\"]', '290', '450', 0),
(1362, 52, 9, 21, '[\"19175187200img_3504.jpeg\",\"8615576391img_3505.jpeg\",\"20635203722img_3506.jpeg\",\"10421772893img_3507.jpeg\"]', '290', '450', 0),
(1363, 52, 9, 21, '[\"19175187200img_3504.jpeg\",\"8615576391img_3505.jpeg\",\"20635203722img_3506.jpeg\",\"10421772893img_3507.jpeg\"]', '290', '450', 0),
(1364, 52, 9, 21, '[\"19175187200img_3504.jpeg\",\"8615576391img_3505.jpeg\",\"20635203722img_3506.jpeg\",\"10421772893img_3507.jpeg\"]', '290', '450', 0),
(1365, 52, 9, 21, '[\"19175187200img_3504.jpeg\",\"8615576391img_3505.jpeg\",\"20635203722img_3506.jpeg\",\"10421772893img_3507.jpeg\"]', '290', '450', 0),
(1366, 52, 11, 21, '[\"19175187200img_3504.jpeg\",\"8615576391img_3505.jpeg\",\"20635203722img_3506.jpeg\",\"10421772893img_3507.jpeg\"]', '290', '450', 0),
(1367, 52, 11, 21, '[\"19175187200img_3504.jpeg\",\"8615576391img_3505.jpeg\",\"20635203722img_3506.jpeg\",\"10421772893img_3507.jpeg\"]', '290', '450', 0),
(1368, 52, 11, 21, '[\"19175187200img_3504.jpeg\",\"8615576391img_3505.jpeg\",\"20635203722img_3506.jpeg\",\"10421772893img_3507.jpeg\"]', '290', '450', 0),
(1369, 52, 11, 21, '[\"19175187200img_3504.jpeg\",\"8615576391img_3505.jpeg\",\"20635203722img_3506.jpeg\",\"10421772893img_3507.jpeg\"]', '290', '450', 0),
(1370, 52, 21, 21, '[\"19175187200img_3504.jpeg\",\"8615576391img_3505.jpeg\",\"20635203722img_3506.jpeg\",\"10421772893img_3507.jpeg\"]', '290', '450', 0),
(1371, 52, 21, 21, '[\"19175187200img_3504.jpeg\",\"8615576391img_3505.jpeg\",\"20635203722img_3506.jpeg\",\"10421772893img_3507.jpeg\"]', '290', '450', 0),
(1372, 52, 21, 21, '[\"19175187200img_3504.jpeg\",\"8615576391img_3505.jpeg\",\"20635203722img_3506.jpeg\",\"10421772893img_3507.jpeg\"]', '290', '450', 0),
(1373, 52, 21, 21, '[\"19175187200img_3504.jpeg\",\"8615576391img_3505.jpeg\",\"20635203722img_3506.jpeg\",\"10421772893img_3507.jpeg\"]', '290', '450', 0),
(1374, 52, 22, 21, '[\"19175187200img_3504.jpeg\",\"8615576391img_3505.jpeg\",\"20635203722img_3506.jpeg\",\"10421772893img_3507.jpeg\"]', '290', '450', 0),
(1375, 52, 22, 21, '[\"19175187200img_3504.jpeg\",\"8615576391img_3505.jpeg\",\"20635203722img_3506.jpeg\",\"10421772893img_3507.jpeg\"]', '290', '450', 0),
(1376, 52, 22, 21, '[\"19175187200img_3504.jpeg\",\"8615576391img_3505.jpeg\",\"20635203722img_3506.jpeg\",\"10421772893img_3507.jpeg\"]', '290', '450', 0),
(1377, 52, 22, 21, '[\"19175187200img_3504.jpeg\",\"8615576391img_3505.jpeg\",\"20635203722img_3506.jpeg\",\"10421772893img_3507.jpeg\"]', '290', '450', 0),
(1378, 52, 23, 21, '[\"19175187200img_3504.jpeg\",\"8615576391img_3505.jpeg\",\"20635203722img_3506.jpeg\",\"10421772893img_3507.jpeg\"]', '290', '450', 0),
(1379, 52, 23, 21, '[\"19175187200img_3504.jpeg\",\"8615576391img_3505.jpeg\",\"20635203722img_3506.jpeg\",\"10421772893img_3507.jpeg\"]', '290', '450', 0),
(1380, 52, 23, 21, '[\"19175187200img_3504.jpeg\",\"8615576391img_3505.jpeg\",\"20635203722img_3506.jpeg\",\"10421772893img_3507.jpeg\"]', '290', '450', 0),
(1381, 52, 23, 21, '[\"19175187200img_3504.jpeg\",\"8615576391img_3505.jpeg\",\"20635203722img_3506.jpeg\",\"10421772893img_3507.jpeg\"]', '290', '450', 0),
(1382, 52, 24, 21, '[\"19175187200img_3504.jpeg\",\"8615576391img_3505.jpeg\",\"20635203722img_3506.jpeg\",\"10421772893img_3507.jpeg\"]', '290', '450', 0),
(1383, 52, 24, 21, '[\"19175187200img_3504.jpeg\",\"8615576391img_3505.jpeg\",\"20635203722img_3506.jpeg\",\"10421772893img_3507.jpeg\"]', '290', '450', 0),
(1384, 52, 24, 21, '[\"19175187200img_3504.jpeg\",\"8615576391img_3505.jpeg\",\"20635203722img_3506.jpeg\",\"10421772893img_3507.jpeg\"]', '290', '450', 0),
(1385, 52, 24, 21, '[\"19175187200img_3504.jpeg\",\"8615576391img_3505.jpeg\",\"20635203722img_3506.jpeg\",\"10421772893img_3507.jpeg\"]', '290', '450', 0),
(1386, 52, 26, 21, '[\"19175187200img_3504.jpeg\",\"8615576391img_3505.jpeg\",\"20635203722img_3506.jpeg\",\"10421772893img_3507.jpeg\"]', '290', '450', 0),
(1387, 52, 26, 21, '[\"19175187200img_3504.jpeg\",\"8615576391img_3505.jpeg\",\"20635203722img_3506.jpeg\",\"10421772893img_3507.jpeg\"]', '290', '450', 0),
(1388, 52, 26, 21, '[\"19175187200img_3504.jpeg\",\"8615576391img_3505.jpeg\",\"20635203722img_3506.jpeg\",\"10421772893img_3507.jpeg\"]', '290', '450', 0),
(1389, 52, 26, 21, '[\"19175187200img_3504.jpeg\",\"8615576391img_3505.jpeg\",\"20635203722img_3506.jpeg\",\"10421772893img_3507.jpeg\"]', '290', '450', 0),
(1390, 63, 8, 12, '[\"811851790img_3446.jpeg\",\"21314843531img_3447.jpeg\",\"12446014562img_3544.jpeg\"]', '550', '700', 0),
(1391, 63, 8, 12, '[\"811851790img_3446.jpeg\",\"21314843531img_3447.jpeg\",\"12446014562img_3544.jpeg\"]', '550', '700', 0),
(1392, 63, 8, 12, '[\"811851790img_3446.jpeg\",\"21314843531img_3447.jpeg\",\"12446014562img_3544.jpeg\"]', '550', '700', 0),
(1396, 74, 8, 19, '[\"4291442880img_3500.jpeg\",\"6280107831img_3501.jpeg\",\"1591559502img_3502.jpeg\",\"18409138633img_3503.jpeg\"]', '290', '500', 1),
(1397, 74, 8, 19, '[\"4291442880img_3500.jpeg\",\"6280107831img_3501.jpeg\",\"1591559502img_3502.jpeg\",\"18409138633img_3503.jpeg\"]', '290', '500', 1),
(1398, 74, 8, 19, '[\"4291442880img_3500.jpeg\",\"6280107831img_3501.jpeg\",\"1591559502img_3502.jpeg\",\"18409138633img_3503.jpeg\"]', '290', '500', 1),
(1399, 74, 8, 19, '[\"4291442880img_3500.jpeg\",\"6280107831img_3501.jpeg\",\"1591559502img_3502.jpeg\",\"18409138633img_3503.jpeg\"]', '290', '500', 1),
(1400, 92, 8, 12, '[\"6886240490img_3908.jpeg\",\"13573940331img_3529.jpeg\",\"8432061442img_3530.jpeg\",\"4470613053img_3531.jpeg\"]', '299', '499', 1),
(1401, 92, 8, 12, '[\"6886240490img_3908.jpeg\",\"13573940331img_3529.jpeg\",\"8432061442img_3530.jpeg\",\"4470613053img_3531.jpeg\"]', '299', '499', 1),
(1402, 92, 8, 12, '[\"6886240490img_3908.jpeg\",\"13573940331img_3529.jpeg\",\"8432061442img_3530.jpeg\",\"4470613053img_3531.jpeg\"]', '299', '499', 1),
(1403, 92, 8, 12, '[\"6886240490img_3908.jpeg\",\"13573940331img_3529.jpeg\",\"8432061442img_3530.jpeg\",\"4470613053img_3531.jpeg\"]', '299', '499', 1),
(1404, 91, 8, 7, '[\"8101913400img_3930.jpeg\",\"3734039081img_3487.jpeg\",\"3297684772img_3488.jpeg\",\"187791903img_3489.jpeg\"]', '249', '499', 0),
(1405, 91, 8, 7, '[\"8101913400img_3930.jpeg\",\"3734039081img_3487.jpeg\",\"3297684772img_3488.jpeg\",\"187791903img_3489.jpeg\"]', '249', '499', 0),
(1406, 91, 8, 7, '[\"8101913400img_3930.jpeg\",\"3734039081img_3487.jpeg\",\"3297684772img_3488.jpeg\",\"187791903img_3489.jpeg\"]', '249', '499', 0),
(1407, 91, 8, 7, '[\"8101913400img_3930.jpeg\",\"3734039081img_3487.jpeg\",\"3297684772img_3488.jpeg\",\"187791903img_3489.jpeg\"]', '249', '499', 0),
(1418, 95, 8, 2, '[\"6802649040img_4082.jpeg\",\"20010867651img_4080.jpeg\"]', '299', '499', -2),
(1419, 95, 8, 2, '[\"6802649040img_4082.jpeg\",\"20010867651img_4080.jpeg\"]', '299', '499', -2),
(1423, 106, 8, 10, '[\"12822965500img_4201.jpeg\",\"15381831481img_4204.mov\"]', '349', '700', 1),
(1424, 106, 8, 10, '[\"12822965500img_4201.jpeg\",\"15381831481img_4204.mov\"]', '349', '700', 1),
(1427, 94, 9, 13, '[\"5523389660img_4074.jpeg\",\"5008902091img_3651.jpeg\",\"18887836732img_3652.jpeg\",\"20586608963img_3653.jpeg\",\"604124044img_3655.jpeg\"]', '599', '999', 1),
(1428, 94, 9, 13, '[\"5523389660img_4074.jpeg\",\"5008902091img_3651.jpeg\",\"18887836732img_3652.jpeg\",\"20586608963img_3653.jpeg\",\"604124044img_3655.jpeg\"]', '599', '999', 1),
(1429, 94, 9, 13, '[\"5523389660img_4074.jpeg\",\"5008902091img_3651.jpeg\",\"18887836732img_3652.jpeg\",\"20586608963img_3653.jpeg\",\"604124044img_3655.jpeg\"]', '599', '999', 1),
(1430, 94, 9, 13, '[\"5523389660img_4074.jpeg\",\"5008902091img_3651.jpeg\",\"18887836732img_3652.jpeg\",\"20586608963img_3653.jpeg\",\"604124044img_3655.jpeg\"]', '599', '999', 1),
(1431, 94, 9, 13, '[\"5523389660img_4074.jpeg\",\"5008902091img_3651.jpeg\",\"18887836732img_3652.jpeg\",\"20586608963img_3653.jpeg\",\"604124044img_3655.jpeg\"]', '599', '999', 1),
(1432, 93, 8, 1, '[\"19933867260img_4059.jpeg\",\"3475349641img_3378.jpeg\",\"10585432502img_3380.jpeg\",\"2060867753img_3381.jpeg\"]', '599', '999', 1),
(1433, 93, 8, 1, '[\"19933867260img_4059.jpeg\",\"3475349641img_3378.jpeg\",\"10585432502img_3380.jpeg\",\"2060867753img_3381.jpeg\"]', '599', '999', 1),
(1434, 93, 8, 1, '[\"19933867260img_4059.jpeg\",\"3475349641img_3378.jpeg\",\"10585432502img_3380.jpeg\",\"2060867753img_3381.jpeg\"]', '599', '999', 1),
(1435, 93, 8, 1, '[\"19933867260img_4059.jpeg\",\"3475349641img_3378.jpeg\",\"10585432502img_3380.jpeg\",\"2060867753img_3381.jpeg\"]', '599', '999', 1),
(1456, 46, 8, 19, '[\"6080545900img_3457.jpeg\",\"10461190441img_3458.jpeg\",\"1708817392img_3459.jpeg\",\"11445909013img_3460.jpeg\"]', '295', '499', 0),
(1457, 46, 8, 19, '[\"6080545900img_3457.jpeg\",\"10461190441img_3458.jpeg\",\"1708817392img_3459.jpeg\",\"11445909013img_3460.jpeg\"]', '295', '499', 0),
(1458, 46, 8, 19, '[\"6080545900img_3457.jpeg\",\"10461190441img_3458.jpeg\",\"1708817392img_3459.jpeg\",\"11445909013img_3460.jpeg\"]', '295', '499', 0),
(1459, 46, 8, 19, '[\"6080545900img_3457.jpeg\",\"10461190441img_3458.jpeg\",\"1708817392img_3459.jpeg\",\"11445909013img_3460.jpeg\"]', '295', '499', 0),
(1460, 47, 8, 12, '[\"13311035520img_3461.jpeg\",\"8698521821img_3463.jpeg\",\"20713204312img_3464.jpeg\"]', '295', '499', 0),
(1461, 47, 8, 12, '[\"13311035520img_3461.jpeg\",\"8698521821img_3463.jpeg\",\"20713204312img_3464.jpeg\"]', '295', '499', 0),
(1462, 47, 8, 12, '[\"13311035520img_3461.jpeg\",\"8698521821img_3463.jpeg\",\"20713204312img_3464.jpeg\"]', '295', '499', 0),
(1463, 48, 9, 7, '[\"14050579240img_3537.jpeg\",\"1078280541img_3538.jpeg\",\"20820436102img_3539.jpeg\"]', '299', '499', 0),
(1464, 48, 9, 7, '[\"14050579240img_3537.jpeg\",\"1078280541img_3538.jpeg\",\"20820436102img_3539.jpeg\"]', '299', '499', 0),
(1465, 48, 9, 7, '[\"14050579240img_3537.jpeg\",\"1078280541img_3538.jpeg\",\"20820436102img_3539.jpeg\"]', '299', '499', 0),
(1466, 49, 9, 7, '[\"10730821460img_3610.jpeg\",\"3743289971img_3611.jpeg\",\"15552227202img_3613.jpeg\",\"6442680713img_3614.jpeg\"]', '295', '550', 0),
(1467, 49, 9, 7, '[\"10730821460img_3610.jpeg\",\"3743289971img_3611.jpeg\",\"15552227202img_3613.jpeg\",\"6442680713img_3614.jpeg\"]', '295', '550', 0),
(1468, 49, 9, 7, '[\"10730821460img_3610.jpeg\",\"3743289971img_3611.jpeg\",\"15552227202img_3613.jpeg\",\"6442680713img_3614.jpeg\"]', '295', '550', 0),
(1469, 49, 9, 7, '[\"10730821460img_3610.jpeg\",\"3743289971img_3611.jpeg\",\"15552227202img_3613.jpeg\",\"6442680713img_3614.jpeg\"]', '295', '550', 0),
(1470, 50, 8, 10, '[\"4649793900img_3944.jpeg\",\"19856090391img_3509.jpeg\",\"8245718362img_3510.jpeg\",\"17527305543img_3511.jpeg\",\"2441167404img_3512.jpeg\"]', '290', '499', 1),
(1471, 50, 8, 10, '[\"4649793900img_3944.jpeg\",\"19856090391img_3509.jpeg\",\"8245718362img_3510.jpeg\",\"17527305543img_3511.jpeg\",\"2441167404img_3512.jpeg\"]', '290', '499', 1),
(1472, 50, 8, 10, '[\"4649793900img_3944.jpeg\",\"19856090391img_3509.jpeg\",\"8245718362img_3510.jpeg\",\"17527305543img_3511.jpeg\",\"2441167404img_3512.jpeg\"]', '290', '499', 1),
(1473, 50, 8, 10, '[\"4649793900img_3944.jpeg\",\"19856090391img_3509.jpeg\",\"8245718362img_3510.jpeg\",\"17527305543img_3511.jpeg\",\"2441167404img_3512.jpeg\"]', '290', '499', 1),
(1474, 50, 8, 10, '[\"4649793900img_3944.jpeg\",\"19856090391img_3509.jpeg\",\"8245718362img_3510.jpeg\",\"17527305543img_3511.jpeg\",\"2441167404img_3512.jpeg\"]', '290', '499', 1),
(1505, 70, 22, 18, '[\"2992673220img_3615.jpeg\",\"3994610581img_3616.jpeg\",\"2152726482img_3617.jpeg\",\"15285107493img_3618.jpeg\"]', '199', '550', 0),
(1506, 70, 22, 18, '[\"2992673220img_3615.jpeg\",\"3994610581img_3616.jpeg\",\"2152726482img_3617.jpeg\",\"15285107493img_3618.jpeg\"]', '199', '550', 0),
(1507, 70, 22, 18, '[\"2992673220img_3615.jpeg\",\"3994610581img_3616.jpeg\",\"2152726482img_3617.jpeg\",\"15285107493img_3618.jpeg\"]', '199', '550', 0),
(1508, 70, 22, 18, '[\"2992673220img_3615.jpeg\",\"3994610581img_3616.jpeg\",\"2152726482img_3617.jpeg\",\"15285107493img_3618.jpeg\"]', '199', '550', 0),
(1509, 71, 22, 11, '[\"1035111040img_3937.jpeg\",\"17165966041img_3636.jpeg\",\"20367568412img_3637.jpeg\",\"12424158253img_3638.jpeg\"]', '199', '450', 0),
(1510, 71, 22, 11, '[\"1035111040img_3937.jpeg\",\"17165966041img_3636.jpeg\",\"20367568412img_3637.jpeg\",\"12424158253img_3638.jpeg\"]', '199', '450', 0),
(1511, 71, 22, 11, '[\"1035111040img_3937.jpeg\",\"17165966041img_3636.jpeg\",\"20367568412img_3637.jpeg\",\"12424158253img_3638.jpeg\"]', '199', '450', 0),
(1512, 71, 22, 11, '[\"1035111040img_3937.jpeg\",\"17165966041img_3636.jpeg\",\"20367568412img_3637.jpeg\",\"12424158253img_3638.jpeg\"]', '199', '450', 0),
(1551, 75, 9, 4, '[\"15490813080img_3496.jpeg\",\"9906402381img_3498.jpeg\",\"7880278842img_3499.jpeg\"]', '290', '500', 0),
(1552, 75, 9, 4, '[\"15490813080img_3496.jpeg\",\"9906402381img_3498.jpeg\",\"7880278842img_3499.jpeg\"]', '290', '500', 0),
(1553, 75, 9, 4, '[\"15490813080img_3496.jpeg\",\"9906402381img_3498.jpeg\",\"7880278842img_3499.jpeg\"]', '290', '500', 0),
(1554, 116, 8, 24, '[\"4294110730img_4586.jpeg\",\"6385069661img_4545.jpeg\",\"245818492img_4547.jpeg\",\"14227947813img_4548.jpeg\"]', '449', '600', 1),
(1555, 116, 8, 24, '[\"4294110730img_4586.jpeg\",\"6385069661img_4545.jpeg\",\"245818492img_4547.jpeg\",\"14227947813img_4548.jpeg\"]', '449', '600', 1),
(1556, 116, 8, 24, '[\"4294110730img_4586.jpeg\",\"6385069661img_4545.jpeg\",\"245818492img_4547.jpeg\",\"14227947813img_4548.jpeg\"]', '449', '600', 1),
(1557, 116, 8, 24, '[\"4294110730img_4586.jpeg\",\"6385069661img_4545.jpeg\",\"245818492img_4547.jpeg\",\"14227947813img_4548.jpeg\"]', '449', '600', 1),
(1558, 116, 9, 24, '[\"4294110730img_4586.jpeg\",\"6385069661img_4545.jpeg\",\"245818492img_4547.jpeg\",\"14227947813img_4548.jpeg\"]', '449', '600', 1),
(1559, 116, 9, 24, '[\"4294110730img_4586.jpeg\",\"6385069661img_4545.jpeg\",\"245818492img_4547.jpeg\",\"14227947813img_4548.jpeg\"]', '449', '600', 1),
(1560, 116, 9, 24, '[\"4294110730img_4586.jpeg\",\"6385069661img_4545.jpeg\",\"245818492img_4547.jpeg\",\"14227947813img_4548.jpeg\"]', '449', '600', 1),
(1561, 116, 9, 24, '[\"4294110730img_4586.jpeg\",\"6385069661img_4545.jpeg\",\"245818492img_4547.jpeg\",\"14227947813img_4548.jpeg\"]', '449', '600', 1),
(1562, 117, 8, 22, '[\"12449561040img_4590.jpeg\",\"19555439561img_4551.jpeg\",\"3101472472img_4553.jpeg\",\"54773803img_4556.jpeg\"]', '449', '649', 1),
(1563, 117, 8, 22, '[\"12449561040img_4590.jpeg\",\"19555439561img_4551.jpeg\",\"3101472472img_4553.jpeg\",\"54773803img_4556.jpeg\"]', '449', '649', 1),
(1564, 117, 8, 22, '[\"12449561040img_4590.jpeg\",\"19555439561img_4551.jpeg\",\"3101472472img_4553.jpeg\",\"54773803img_4556.jpeg\"]', '449', '649', 1),
(1565, 117, 8, 22, '[\"12449561040img_4590.jpeg\",\"19555439561img_4551.jpeg\",\"3101472472img_4553.jpeg\",\"54773803img_4556.jpeg\"]', '449', '649', 1),
(1658, 125, 9, 2, '[\"15812102310offer-banner-2.png\",\"20373583051offer-banner-3.png\"]', '1200', '1500', 2),
(1659, 125, 9, 2, '[\"15812102310offer-banner-2.png\",\"20373583051offer-banner-3.png\"]', '1200', '1500', 2),
(1660, 125, 21, 3, '[\"15812102310offer-banner-2.png\",\"20373583051offer-banner-3.png\"]', '1200', '1500', 2),
(1661, 125, 21, 3, '[\"15812102310offer-banner-2.png\",\"20373583051offer-banner-3.png\"]', '1200', '1500', 2),
(1662, 125, 22, 3, '[\"15812102310offer-banner-2.png\",\"20373583051offer-banner-3.png\"]', '1200', '1500', 2),
(1663, 125, 22, 3, '[\"15812102310offer-banner-2.png\",\"20373583051offer-banner-3.png\"]', '1200', '1500', 2),
(2045, 98, 8, 10, '[\"279275270img_3351.jpeg\",\"19738214221img_4041.mov\"]', '289', '600', 0),
(2046, 98, 8, 10, '[\"279275270img_3351.jpeg\",\"19738214221img_4041.mov\"]', '289', '600', 0),
(2050, 65, 8, 22, '[\"17003091390img_3455.jpeg\",\"15137754391img_3456.jpeg\",\"20949950982img_3547.jpeg\"]', '549', '700', 0),
(2051, 65, 8, 22, '[\"17003091390img_3455.jpeg\",\"15137754391img_3456.jpeg\",\"20949950982img_3547.jpeg\"]', '549', '700', 0),
(2052, 65, 8, 22, '[\"17003091390img_3455.jpeg\",\"15137754391img_3456.jpeg\",\"20949950982img_3547.jpeg\"]', '549', '700', 0),
(2056, 64, 9, 13, '[\"13154403110img_3451.jpeg\",\"6415546011img_3452.jpeg\",\"20206564282img_3546.jpeg\"]', '550', '700', 0),
(2057, 64, 9, 13, '[\"13154403110img_3451.jpeg\",\"6415546011img_3452.jpeg\",\"20206564282img_3546.jpeg\"]', '550', '700', 0),
(2058, 64, 9, 13, '[\"13154403110img_3451.jpeg\",\"6415546011img_3452.jpeg\",\"20206564282img_3546.jpeg\"]', '550', '700', 0),
(2060, 72, 11, 4, '[\"19095636160img_3950.jpeg\",\"13516361131img_3375.jpeg\"]', '199', '500', 1),
(2061, 72, 11, 4, '[\"19095636160img_3950.jpeg\",\"13516361131img_3375.jpeg\"]', '199', '500', 1),
(2062, 72, 21, 4, '[\"19095636160img_3950.jpeg\",\"13516361131img_3375.jpeg\"]', '199', '500', 1),
(2063, 72, 21, 4, '[\"19095636160img_3950.jpeg\",\"13516361131img_3375.jpeg\"]', '199', '500', 1),
(2064, 73, 8, 4, '[\"553486240img_3958.jpeg\",\"7950066521img_3627.jpeg\",\"17719330132img_3628.jpeg\",\"4023957203img_3629.jpeg\"]', '199', '450', 0),
(2065, 73, 8, 4, '[\"553486240img_3958.jpeg\",\"7950066521img_3627.jpeg\",\"17719330132img_3628.jpeg\",\"4023957203img_3629.jpeg\"]', '199', '450', 0),
(2066, 73, 8, 4, '[\"553486240img_3958.jpeg\",\"7950066521img_3627.jpeg\",\"17719330132img_3628.jpeg\",\"4023957203img_3629.jpeg\"]', '199', '450', 0),
(2067, 73, 8, 4, '[\"553486240img_3958.jpeg\",\"7950066521img_3627.jpeg\",\"17719330132img_3628.jpeg\",\"4023957203img_3629.jpeg\"]', '199', '450', 0),
(2068, 76, 8, 12, '[\"403834400img_3513.jpeg\",\"5768414711img_3514.jpeg\",\"19868539992img_3516.jpeg\",\"19372713073img_3517.jpeg\"]', '199', '500', 0),
(2069, 76, 8, 12, '[\"403834400img_3513.jpeg\",\"5768414711img_3514.jpeg\",\"19868539992img_3516.jpeg\",\"19372713073img_3517.jpeg\"]', '199', '500', 0),
(2070, 76, 8, 12, '[\"403834400img_3513.jpeg\",\"5768414711img_3514.jpeg\",\"19868539992img_3516.jpeg\",\"19372713073img_3517.jpeg\"]', '199', '500', 0),
(2071, 76, 8, 12, '[\"403834400img_3513.jpeg\",\"5768414711img_3514.jpeg\",\"19868539992img_3516.jpeg\",\"19372713073img_3517.jpeg\"]', '199', '500', 0),
(2072, 76, 9, 24, '[\"403834400img_3513.jpeg\",\"5768414711img_3514.jpeg\",\"19868539992img_3516.jpeg\",\"19372713073img_3517.jpeg\"]', '199', '500', 1),
(2073, 76, 9, 24, '[\"403834400img_3513.jpeg\",\"5768414711img_3514.jpeg\",\"19868539992img_3516.jpeg\",\"19372713073img_3517.jpeg\"]', '199', '500', 1),
(2074, 76, 9, 24, '[\"403834400img_3513.jpeg\",\"5768414711img_3514.jpeg\",\"19868539992img_3516.jpeg\",\"19372713073img_3517.jpeg\"]', '199', '500', 1),
(2075, 76, 9, 24, '[\"403834400img_3513.jpeg\",\"5768414711img_3514.jpeg\",\"19868539992img_3516.jpeg\",\"19372713073img_3517.jpeg\"]', '199', '500', 1),
(2076, 77, 11, 10, '[\"7899291160img_3518.jpeg\",\"15748603691img_3519.jpeg\",\"11650784772img_3520.jpeg\"]', '199', '500', 1),
(2077, 77, 11, 10, '[\"7899291160img_3518.jpeg\",\"15748603691img_3519.jpeg\",\"11650784772img_3520.jpeg\"]', '199', '500', 1),
(2078, 77, 11, 10, '[\"7899291160img_3518.jpeg\",\"15748603691img_3519.jpeg\",\"11650784772img_3520.jpeg\"]', '199', '500', 1),
(2079, 78, 9, 11, '[\"7935004650img_3522.jpeg\",\"13933834961img_3523.jpeg\",\"12598728262img_3524.jpeg\"]', '199', '500', 1),
(2080, 78, 9, 11, '[\"7935004650img_3522.jpeg\",\"13933834961img_3523.jpeg\",\"12598728262img_3524.jpeg\"]', '199', '500', 1),
(2081, 78, 9, 11, '[\"7935004650img_3522.jpeg\",\"13933834961img_3523.jpeg\",\"12598728262img_3524.jpeg\"]', '199', '500', 1),
(2082, 78, 11, 23, '[\"7935004650img_3522.jpeg\",\"13933834961img_3523.jpeg\",\"12598728262img_3524.jpeg\"]', '199', '500', 1),
(2083, 78, 11, 23, '[\"7935004650img_3522.jpeg\",\"13933834961img_3523.jpeg\",\"12598728262img_3524.jpeg\"]', '199', '500', 1),
(2084, 78, 11, 23, '[\"7935004650img_3522.jpeg\",\"13933834961img_3523.jpeg\",\"12598728262img_3524.jpeg\"]', '199', '500', 1),
(2085, 82, 8, 12, '[\"20716740950img_4011.jpeg\",\"10539955181img_3605.jpeg\",\"9688224362img_3606.jpeg\"]', '199', '550', 1),
(2086, 82, 8, 12, '[\"20716740950img_4011.jpeg\",\"10539955181img_3605.jpeg\",\"9688224362img_3606.jpeg\"]', '199', '550', 1),
(2087, 82, 8, 12, '[\"20716740950img_4011.jpeg\",\"10539955181img_3605.jpeg\",\"9688224362img_3606.jpeg\"]', '199', '550', 1),
(2088, 83, 8, 11, '[\"12418067690img_3597.jpeg\",\"11165379241img_4007.jpeg\"]', '199', '550', 1),
(2089, 83, 8, 11, '[\"12418067690img_3597.jpeg\",\"11165379241img_4007.jpeg\"]', '199', '550', 1),
(2090, 84, 8, 2, '[\"2223564640img_4027.jpeg\",\"20248662211img_3603.jpeg\",\"20984813182img_3604.jpeg\"]', '199', '399', -1),
(2091, 84, 8, 2, '[\"2223564640img_4027.jpeg\",\"20248662211img_3603.jpeg\",\"20984813182img_3604.jpeg\"]', '199', '399', -1),
(2092, 84, 8, 2, '[\"2223564640img_4027.jpeg\",\"20248662211img_3603.jpeg\",\"20984813182img_3604.jpeg\"]', '199', '399', -1),
(2093, 85, 8, 2, '[\"14858722170img_4024.jpeg\"]', '199', '600', 1),
(2094, 85, 9, 2, '[\"14858722170img_4024.jpeg\"]', '199', '600', 1),
(2095, 86, 8, 23, '[\"1117973180img_3964.jpeg\",\"14164153411img_3471.jpeg\",\"4782735522img_3473.jpeg\",\"18254190073img_3474.jpeg\",\"10294101524img_3475.jpeg\"]', '249', '499', 0),
(2096, 86, 8, 23, '[\"1117973180img_3964.jpeg\",\"14164153411img_3471.jpeg\",\"4782735522img_3473.jpeg\",\"18254190073img_3474.jpeg\",\"10294101524img_3475.jpeg\"]', '249', '499', 0),
(2097, 86, 8, 23, '[\"1117973180img_3964.jpeg\",\"14164153411img_3471.jpeg\",\"4782735522img_3473.jpeg\",\"18254190073img_3474.jpeg\",\"10294101524img_3475.jpeg\"]', '249', '499', 0),
(2098, 86, 8, 23, '[\"1117973180img_3964.jpeg\",\"14164153411img_3471.jpeg\",\"4782735522img_3473.jpeg\",\"18254190073img_3474.jpeg\",\"10294101524img_3475.jpeg\"]', '249', '499', 0),
(2099, 86, 8, 23, '[\"1117973180img_3964.jpeg\",\"14164153411img_3471.jpeg\",\"4782735522img_3473.jpeg\",\"18254190073img_3474.jpeg\",\"10294101524img_3475.jpeg\"]', '249', '499', 0),
(2117, 105, 8, 8, '[\"20819370img_4192.jpeg\"]', '349', '500', 1),
(2118, 107, 8, 13, '[\"1186367530img_4205.jpeg\"]', '349', '500', 1),
(2119, 107, 9, 13, '[\"1186367530img_4205.jpeg\"]', '349', '500', 1),
(2120, 81, 11, 12, '[\"2595740700img_3996.jpeg\",\"5003219701img_3660.jpeg\"]', '480', '700', 1),
(2121, 81, 11, 12, '[\"2595740700img_3996.jpeg\",\"5003219701img_3660.jpeg\"]', '480', '700', 1),
(2122, 81, 21, 12, '[\"2595740700img_3996.jpeg\",\"5003219701img_3660.jpeg\"]', '480', '700', 1),
(2123, 81, 21, 12, '[\"2595740700img_3996.jpeg\",\"5003219701img_3660.jpeg\"]', '480', '700', 1),
(2124, 80, 9, 12, '[\"21133714870img_3985.jpeg\",\"10340364301img_3639.jpeg\",\"20236709532img_3640.jpeg\",\"717863283img_3641.jpeg\"]', '499', '700', 1),
(2125, 80, 9, 12, '[\"21133714870img_3985.jpeg\",\"10340364301img_3639.jpeg\",\"20236709532img_3640.jpeg\",\"717863283img_3641.jpeg\"]', '499', '700', 1),
(2126, 80, 9, 12, '[\"21133714870img_3985.jpeg\",\"10340364301img_3639.jpeg\",\"20236709532img_3640.jpeg\",\"717863283img_3641.jpeg\"]', '499', '700', 1),
(2127, 80, 9, 12, '[\"21133714870img_3985.jpeg\",\"10340364301img_3639.jpeg\",\"20236709532img_3640.jpeg\",\"717863283img_3641.jpeg\"]', '499', '700', 1),
(2129, 79, 8, 2, '[\"10960817610img_3666.jpeg\",\"20074358491img_3668.jpeg\"]', '499', '700', 1),
(2130, 79, 8, 2, '[\"10960817610img_3666.jpeg\",\"20074358491img_3668.jpeg\"]', '499', '700', 1),
(2158, 87, 8, 13, '[\"6108365070img_3977.jpeg\",\"20926956381img_3483.jpeg\",\"1736984792img_3485.jpeg\",\"8214832793img_3486.jpeg\"]', '299', '499', 1),
(2159, 87, 8, 13, '[\"6108365070img_3977.jpeg\",\"20926956381img_3483.jpeg\",\"1736984792img_3485.jpeg\",\"8214832793img_3486.jpeg\"]', '299', '499', 1),
(2160, 87, 8, 13, '[\"6108365070img_3977.jpeg\",\"20926956381img_3483.jpeg\",\"1736984792img_3485.jpeg\",\"8214832793img_3486.jpeg\"]', '299', '499', 1),
(2161, 87, 8, 13, '[\"6108365070img_3977.jpeg\",\"20926956381img_3483.jpeg\",\"1736984792img_3485.jpeg\",\"8214832793img_3486.jpeg\"]', '299', '499', 1),
(2210, 134, 8, 11, '[\"5821972080img_5570.jpeg\",\"13320670541img_5571.jpeg\",\"13322318342img_5572.jpeg\"]', '349', '500', 1),
(2211, 134, 8, 11, '[\"5821972080img_5570.jpeg\",\"13320670541img_5571.jpeg\",\"13322318342img_5572.jpeg\"]', '349', '500', 1),
(2212, 134, 8, 11, '[\"5821972080img_5570.jpeg\",\"13320670541img_5571.jpeg\",\"13322318342img_5572.jpeg\"]', '349', '500', 1),
(2374, 102, 8, 4, '[\"9565660100img_3914.jpeg\",\"15529485231img_3465.jpeg\",\"5712161982img_3466.jpeg\",\"11858840133img_3467.jpeg\"]', '349', '499', 0),
(2375, 102, 8, 4, '[\"9565660100img_3914.jpeg\",\"15529485231img_3465.jpeg\",\"5712161982img_3466.jpeg\",\"11858840133img_3467.jpeg\"]', '349', '499', 0),
(2376, 102, 8, 4, '[\"9565660100img_3914.jpeg\",\"15529485231img_3465.jpeg\",\"5712161982img_3466.jpeg\",\"11858840133img_3467.jpeg\"]', '349', '499', 0),
(2377, 102, 8, 4, '[\"9565660100img_3914.jpeg\",\"15529485231img_3465.jpeg\",\"5712161982img_3466.jpeg\",\"11858840133img_3467.jpeg\"]', '349', '499', 0),
(2382, 144, 9, 7, '[\"7312181520img_5586.jpeg\",\"12837435331img_5587.jpeg\",\"18249728942img_5588.jpeg\"]', '349', '1200', 1),
(2383, 144, 9, 7, '[\"7312181520img_5586.jpeg\",\"12837435331img_5587.jpeg\",\"18249728942img_5588.jpeg\"]', '349', '1200', 1),
(2384, 144, 9, 7, '[\"7312181520img_5586.jpeg\",\"12837435331img_5587.jpeg\",\"18249728942img_5588.jpeg\"]', '349', '1200', 1),
(2385, 142, 8, 14, '[\"12470033750img_5401.jpeg\"]', '399', '500', 1),
(2386, 145, 9, 7, '[\"4235544630img_5586.png\",\"9266983231img_5585.jpeg\",\"11744914562img_5587.jpeg\",\"13281052183img_5588.jpeg\"]', '349', '1200', 1),
(2387, 145, 9, 7, '[\"4235544630img_5586.png\",\"9266983231img_5585.jpeg\",\"11744914562img_5587.jpeg\",\"13281052183img_5588.jpeg\"]', '349', '1200', 1),
(2388, 145, 9, 7, '[\"4235544630img_5586.png\",\"9266983231img_5585.jpeg\",\"11744914562img_5587.jpeg\",\"13281052183img_5588.jpeg\"]', '349', '1200', 1),
(2389, 145, 9, 7, '[\"4235544630img_5586.png\",\"9266983231img_5585.jpeg\",\"11744914562img_5587.jpeg\",\"13281052183img_5588.jpeg\"]', '349', '1200', 1),
(2418, 110, 28, 12, '[\"10824158750img_4168.jpeg\"]', '499', '700', 1),
(2419, 110, 30, 12, '[\"10824158750img_4168.jpeg\"]', '499', '700', 1),
(2425, 146, 29, 7, '[\"764154960img_5618.jpeg\",\"2421374171img_5617.jpeg\",\"14636947922img_5616.jpeg\",\"4102383643img_5619.jpeg\",\"12663099834img_5162.jpeg\"]', '399', '700', 1),
(2426, 146, 29, 7, '[\"764154960img_5618.jpeg\",\"2421374171img_5617.jpeg\",\"14636947922img_5616.jpeg\",\"4102383643img_5619.jpeg\",\"12663099834img_5162.jpeg\"]', '399', '700', 1),
(2427, 146, 29, 7, '[\"764154960img_5618.jpeg\",\"2421374171img_5617.jpeg\",\"14636947922img_5616.jpeg\",\"4102383643img_5619.jpeg\",\"12663099834img_5162.jpeg\"]', '399', '700', 1),
(2428, 146, 29, 7, '[\"764154960img_5618.jpeg\",\"2421374171img_5617.jpeg\",\"14636947922img_5616.jpeg\",\"4102383643img_5619.jpeg\",\"12663099834img_5162.jpeg\"]', '399', '700', 1),
(2429, 146, 29, 7, '[\"764154960img_5618.jpeg\",\"2421374171img_5617.jpeg\",\"14636947922img_5616.jpeg\",\"4102383643img_5619.jpeg\",\"12663099834img_5162.jpeg\"]', '399', '700', 1),
(2647, 120, 32, 3, '[\"6067063720img_4778.jpeg\"]', '1099', '1500', 10),
(2648, 120, 33, 11, '[\"6067063720img_4778.jpeg\"]', '1099', '1500', 10),
(2649, 120, 34, 11, '[\"6067063720img_4778.jpeg\"]', '1099', '1500', 10),
(2650, 120, 35, 11, '[\"6067063720img_4778.jpeg\"]', '1099', '1500', 10),
(2653, 66, 8, 15, '[\"9509638260img_3453.jpeg\",\"13320083481img_3454.jpeg\",\"6631312282img_3545.jpeg\"]', '549', '700', 1),
(2654, 66, 8, 15, '[\"9509638260img_3453.jpeg\",\"13320083481img_3454.jpeg\",\"6631312282img_3545.jpeg\"]', '549', '700', 1),
(2655, 66, 8, 15, '[\"9509638260img_3453.jpeg\",\"13320083481img_3454.jpeg\",\"6631312282img_3545.jpeg\"]', '549', '700', 1),
(2681, 111, 28, 13, '[\"12877780360img_4166.jpeg\"]', '499', '700', 0),
(2682, 99, 27, 13, '[\"12210012560img_4090.jpeg\",\"15053036431img_3642.jpeg\",\"8904070052img_3643.jpeg\",\"5176948473img_3644.jpeg\",\"5632449474img_3645.jpeg\"]', '499', '700', 0),
(2683, 99, 27, 13, '[\"12210012560img_4090.jpeg\",\"15053036431img_3642.jpeg\",\"8904070052img_3643.jpeg\",\"5176948473img_3644.jpeg\",\"5632449474img_3645.jpeg\"]', '499', '700', 0),
(2684, 99, 27, 13, '[\"12210012560img_4090.jpeg\",\"15053036431img_3642.jpeg\",\"8904070052img_3643.jpeg\",\"5176948473img_3644.jpeg\",\"5632449474img_3645.jpeg\"]', '499', '700', 0),
(2685, 99, 27, 13, '[\"12210012560img_4090.jpeg\",\"15053036431img_3642.jpeg\",\"8904070052img_3643.jpeg\",\"5176948473img_3644.jpeg\",\"5632449474img_3645.jpeg\"]', '499', '700', 0),
(2686, 99, 27, 13, '[\"12210012560img_4090.jpeg\",\"15053036431img_3642.jpeg\",\"8904070052img_3643.jpeg\",\"5176948473img_3644.jpeg\",\"5632449474img_3645.jpeg\"]', '499', '700', 0),
(2687, 99, 28, 13, '[\"12210012560img_4090.jpeg\",\"15053036431img_3642.jpeg\",\"8904070052img_3643.jpeg\",\"5176948473img_3644.jpeg\",\"5632449474img_3645.jpeg\"]', '499', '700', 0),
(2688, 99, 28, 13, '[\"12210012560img_4090.jpeg\",\"15053036431img_3642.jpeg\",\"8904070052img_3643.jpeg\",\"5176948473img_3644.jpeg\",\"5632449474img_3645.jpeg\"]', '499', '700', 0),
(2689, 99, 28, 13, '[\"12210012560img_4090.jpeg\",\"15053036431img_3642.jpeg\",\"8904070052img_3643.jpeg\",\"5176948473img_3644.jpeg\",\"5632449474img_3645.jpeg\"]', '499', '700', 0),
(2690, 99, 28, 13, '[\"12210012560img_4090.jpeg\",\"15053036431img_3642.jpeg\",\"8904070052img_3643.jpeg\",\"5176948473img_3644.jpeg\",\"5632449474img_3645.jpeg\"]', '499', '700', 0),
(2691, 99, 28, 13, '[\"12210012560img_4090.jpeg\",\"15053036431img_3642.jpeg\",\"8904070052img_3643.jpeg\",\"5176948473img_3644.jpeg\",\"5632449474img_3645.jpeg\"]', '499', '700', 0),
(2692, 99, 29, 13, '[\"12210012560img_4090.jpeg\",\"15053036431img_3642.jpeg\",\"8904070052img_3643.jpeg\",\"5176948473img_3644.jpeg\",\"5632449474img_3645.jpeg\"]', '499', '700', 0),
(2693, 99, 29, 13, '[\"12210012560img_4090.jpeg\",\"15053036431img_3642.jpeg\",\"8904070052img_3643.jpeg\",\"5176948473img_3644.jpeg\",\"5632449474img_3645.jpeg\"]', '499', '700', 0),
(2694, 99, 29, 13, '[\"12210012560img_4090.jpeg\",\"15053036431img_3642.jpeg\",\"8904070052img_3643.jpeg\",\"5176948473img_3644.jpeg\",\"5632449474img_3645.jpeg\"]', '499', '700', 0),
(2695, 99, 29, 13, '[\"12210012560img_4090.jpeg\",\"15053036431img_3642.jpeg\",\"8904070052img_3643.jpeg\",\"5176948473img_3644.jpeg\",\"5632449474img_3645.jpeg\"]', '499', '700', 0),
(2696, 99, 29, 13, '[\"12210012560img_4090.jpeg\",\"15053036431img_3642.jpeg\",\"8904070052img_3643.jpeg\",\"5176948473img_3644.jpeg\",\"5632449474img_3645.jpeg\"]', '499', '700', 0),
(2697, 99, 30, 13, '[\"12210012560img_4090.jpeg\",\"15053036431img_3642.jpeg\",\"8904070052img_3643.jpeg\",\"5176948473img_3644.jpeg\",\"5632449474img_3645.jpeg\"]', '499', '700', 0),
(2698, 99, 30, 13, '[\"12210012560img_4090.jpeg\",\"15053036431img_3642.jpeg\",\"8904070052img_3643.jpeg\",\"5176948473img_3644.jpeg\",\"5632449474img_3645.jpeg\"]', '499', '700', 0),
(2699, 99, 30, 13, '[\"12210012560img_4090.jpeg\",\"15053036431img_3642.jpeg\",\"8904070052img_3643.jpeg\",\"5176948473img_3644.jpeg\",\"5632449474img_3645.jpeg\"]', '499', '700', 0),
(2700, 99, 30, 13, '[\"12210012560img_4090.jpeg\",\"15053036431img_3642.jpeg\",\"8904070052img_3643.jpeg\",\"5176948473img_3644.jpeg\",\"5632449474img_3645.jpeg\"]', '499', '700', 0),
(2701, 99, 30, 13, '[\"12210012560img_4090.jpeg\",\"15053036431img_3642.jpeg\",\"8904070052img_3643.jpeg\",\"5176948473img_3644.jpeg\",\"5632449474img_3645.jpeg\"]', '499', '700', 0),
(2816, 100, 29, 13, '[\"19663613710img_4100.jpeg\",\"10523151001img_3633.jpeg\",\"2325479632img_3634.jpeg\",\"18140030413img_3635.jpeg\"]', '499', '700', 10),
(2817, 100, 29, 13, '[\"19663613710img_4100.jpeg\",\"10523151001img_3633.jpeg\",\"2325479632img_3634.jpeg\",\"18140030413img_3635.jpeg\"]', '499', '700', 10),
(2818, 100, 29, 13, '[\"19663613710img_4100.jpeg\",\"10523151001img_3633.jpeg\",\"2325479632img_3634.jpeg\",\"18140030413img_3635.jpeg\"]', '499', '700', 10),
(2819, 100, 29, 13, '[\"19663613710img_4100.jpeg\",\"10523151001img_3633.jpeg\",\"2325479632img_3634.jpeg\",\"18140030413img_3635.jpeg\"]', '499', '700', 10),
(2820, 101, 29, 2, '[\"8286521060img_3906.jpeg\",\"9604836581img_3630.jpeg\",\"15508013782img_3631.jpeg\",\"18903699673img_3632.jpeg\"]', '499', '700', 10),
(2821, 101, 29, 2, '[\"8286521060img_3906.jpeg\",\"9604836581img_3630.jpeg\",\"15508013782img_3631.jpeg\",\"18903699673img_3632.jpeg\"]', '499', '700', 10),
(2822, 101, 29, 2, '[\"8286521060img_3906.jpeg\",\"9604836581img_3630.jpeg\",\"15508013782img_3631.jpeg\",\"18903699673img_3632.jpeg\"]', '499', '700', 10),
(2823, 101, 29, 2, '[\"8286521060img_3906.jpeg\",\"9604836581img_3630.jpeg\",\"15508013782img_3631.jpeg\",\"18903699673img_3632.jpeg\"]', '499', '700', 10),
(2864, 141, 8, 18, '[\"20982198510img_5335.jpeg\"]', '349', '500', 2),
(2865, 140, 8, 19, '[\"5780656540img_5336.jpeg\",\"7593959221img_5163.jpeg\"]', '449', '700', 1),
(2866, 140, 8, 19, '[\"5780656540img_5336.jpeg\",\"7593959221img_5163.jpeg\"]', '449', '700', 1),
(2867, 109, 8, 23, '[\"1521534100img_4140.jpeg\",\"20346544981img_4227.jpeg\"]', '279', '499', 1),
(2868, 109, 8, 23, '[\"1521534100img_4140.jpeg\",\"20346544981img_4227.jpeg\"]', '279', '499', 1),
(2869, 109, 9, 23, '[\"1521534100img_4140.jpeg\",\"20346544981img_4227.jpeg\"]', '279', '499', 1),
(2870, 109, 9, 23, '[\"1521534100img_4140.jpeg\",\"20346544981img_4227.jpeg\"]', '279', '499', 1),
(2871, 104, 8, 4, '[\"2070031430img_3923.jpeg\",\"18529779121img_3480.jpeg\",\"4134532842img_3481.jpeg\",\"19764198003img_3482.jpeg\"]', '349', '499', 1),
(2872, 104, 8, 4, '[\"2070031430img_3923.jpeg\",\"18529779121img_3480.jpeg\",\"4134532842img_3481.jpeg\",\"19764198003img_3482.jpeg\"]', '349', '499', 1),
(2873, 104, 8, 4, '[\"2070031430img_3923.jpeg\",\"18529779121img_3480.jpeg\",\"4134532842img_3481.jpeg\",\"19764198003img_3482.jpeg\"]', '349', '499', 1),
(2874, 104, 8, 4, '[\"2070031430img_3923.jpeg\",\"18529779121img_3480.jpeg\",\"4134532842img_3481.jpeg\",\"19764198003img_3482.jpeg\"]', '349', '499', 1),
(2875, 108, 8, 6, '[\"11513044690img_4134.jpeg\"]', '269', '499', 1),
(2876, 88, 8, 11, '[\"11063531930img_3476.jpeg\",\"5147016981img_3477.jpeg\",\"15073543222img_3478.jpeg\",\"9175317193img_3479.jpeg\"]', '299', '499', 1),
(2877, 88, 8, 11, '[\"11063531930img_3476.jpeg\",\"5147016981img_3477.jpeg\",\"15073543222img_3478.jpeg\",\"9175317193img_3479.jpeg\"]', '299', '499', 1),
(2878, 88, 8, 11, '[\"11063531930img_3476.jpeg\",\"5147016981img_3477.jpeg\",\"15073543222img_3478.jpeg\",\"9175317193img_3479.jpeg\"]', '299', '499', 1),
(2879, 88, 8, 11, '[\"11063531930img_3476.jpeg\",\"5147016981img_3477.jpeg\",\"15073543222img_3478.jpeg\",\"9175317193img_3479.jpeg\"]', '299', '499', 1),
(2880, 88, 9, 11, '[\"11063531930img_3476.jpeg\",\"5147016981img_3477.jpeg\",\"15073543222img_3478.jpeg\",\"9175317193img_3479.jpeg\"]', '299', '499', 1),
(2881, 88, 9, 11, '[\"11063531930img_3476.jpeg\",\"5147016981img_3477.jpeg\",\"15073543222img_3478.jpeg\",\"9175317193img_3479.jpeg\"]', '299', '499', 1),
(2882, 88, 9, 11, '[\"11063531930img_3476.jpeg\",\"5147016981img_3477.jpeg\",\"15073543222img_3478.jpeg\",\"9175317193img_3479.jpeg\"]', '299', '499', 1),
(2883, 88, 9, 11, '[\"11063531930img_3476.jpeg\",\"5147016981img_3477.jpeg\",\"15073543222img_3478.jpeg\",\"9175317193img_3479.jpeg\"]', '299', '499', 1),
(2884, 89, 8, 10, '[\"9486027870img_3532.jpeg\",\"7699158911img_3534.jpeg\",\"4777304032img_3535.jpeg\"]', '299', '499', 1),
(2885, 89, 8, 10, '[\"9486027870img_3532.jpeg\",\"7699158911img_3534.jpeg\",\"4777304032img_3535.jpeg\"]', '299', '499', 1),
(2886, 89, 8, 10, '[\"9486027870img_3532.jpeg\",\"7699158911img_3534.jpeg\",\"4777304032img_3535.jpeg\"]', '299', '499', 1),
(2887, 90, 8, 2, '[\"12337070750img_3525.jpeg\",\"7025159841img_3526.jpeg\",\"13887108102img_3527.jpeg\",\"13557598083img_3528.jpeg\"]', '299', '450', 1),
(2888, 90, 8, 2, '[\"12337070750img_3525.jpeg\",\"7025159841img_3526.jpeg\",\"13887108102img_3527.jpeg\",\"13557598083img_3528.jpeg\"]', '299', '450', 1),
(2889, 90, 8, 2, '[\"12337070750img_3525.jpeg\",\"7025159841img_3526.jpeg\",\"13887108102img_3527.jpeg\",\"13557598083img_3528.jpeg\"]', '299', '450', 1),
(2890, 90, 8, 2, '[\"12337070750img_3525.jpeg\",\"7025159841img_3526.jpeg\",\"13887108102img_3527.jpeg\",\"13557598083img_3528.jpeg\"]', '299', '450', 1),
(2891, 90, 9, 2, '[\"12337070750img_3525.jpeg\",\"7025159841img_3526.jpeg\",\"13887108102img_3527.jpeg\",\"13557598083img_3528.jpeg\"]', '299', '450', 1),
(2892, 90, 9, 2, '[\"12337070750img_3525.jpeg\",\"7025159841img_3526.jpeg\",\"13887108102img_3527.jpeg\",\"13557598083img_3528.jpeg\"]', '299', '450', 1),
(2893, 90, 9, 2, '[\"12337070750img_3525.jpeg\",\"7025159841img_3526.jpeg\",\"13887108102img_3527.jpeg\",\"13557598083img_3528.jpeg\"]', '299', '450', 1),
(2894, 90, 9, 2, '[\"12337070750img_3525.jpeg\",\"7025159841img_3526.jpeg\",\"13887108102img_3527.jpeg\",\"13557598083img_3528.jpeg\"]', '299', '450', 1),
(3394, 129, 8, 13, '[\"53990310img_5138.jpeg\",\"17027501001394a91c3-6367-48bf-b42d-4c09f440ff73.jpeg\",\"2390967772ba67702b-4ec1-4e38-a8bb-73fd4c9d21a2.jpeg\",\"4981265483a7032797-fee0-4894-b7a1-8421abf99a49.jpeg\"]', '899', '1300', 0),
(3395, 129, 8, 13, '[\"53990310img_5138.jpeg\",\"17027501001394a91c3-6367-48bf-b42d-4c09f440ff73.jpeg\",\"2390967772ba67702b-4ec1-4e38-a8bb-73fd4c9d21a2.jpeg\",\"4981265483a7032797-fee0-4894-b7a1-8421abf99a49.jpeg\"]', '899', '1300', 0),
(3396, 129, 8, 13, '[\"53990310img_5138.jpeg\",\"17027501001394a91c3-6367-48bf-b42d-4c09f440ff73.jpeg\",\"2390967772ba67702b-4ec1-4e38-a8bb-73fd4c9d21a2.jpeg\",\"4981265483a7032797-fee0-4894-b7a1-8421abf99a49.jpeg\"]', '899', '1300', 0),
(3397, 129, 8, 13, '[\"53990310img_5138.jpeg\",\"17027501001394a91c3-6367-48bf-b42d-4c09f440ff73.jpeg\",\"2390967772ba67702b-4ec1-4e38-a8bb-73fd4c9d21a2.jpeg\",\"4981265483a7032797-fee0-4894-b7a1-8421abf99a49.jpeg\"]', '899', '1300', 0),
(3398, 129, 9, 13, '[\"53990310img_5138.jpeg\",\"17027501001394a91c3-6367-48bf-b42d-4c09f440ff73.jpeg\",\"2390967772ba67702b-4ec1-4e38-a8bb-73fd4c9d21a2.jpeg\",\"4981265483a7032797-fee0-4894-b7a1-8421abf99a49.jpeg\"]', '899', '1300', 0),
(3399, 129, 9, 13, '[\"53990310img_5138.jpeg\",\"17027501001394a91c3-6367-48bf-b42d-4c09f440ff73.jpeg\",\"2390967772ba67702b-4ec1-4e38-a8bb-73fd4c9d21a2.jpeg\",\"4981265483a7032797-fee0-4894-b7a1-8421abf99a49.jpeg\"]', '899', '1300', 0),
(3400, 129, 9, 13, '[\"53990310img_5138.jpeg\",\"17027501001394a91c3-6367-48bf-b42d-4c09f440ff73.jpeg\",\"2390967772ba67702b-4ec1-4e38-a8bb-73fd4c9d21a2.jpeg\",\"4981265483a7032797-fee0-4894-b7a1-8421abf99a49.jpeg\"]', '899', '1300', 0),
(3401, 129, 9, 13, '[\"53990310img_5138.jpeg\",\"17027501001394a91c3-6367-48bf-b42d-4c09f440ff73.jpeg\",\"2390967772ba67702b-4ec1-4e38-a8bb-73fd4c9d21a2.jpeg\",\"4981265483a7032797-fee0-4894-b7a1-8421abf99a49.jpeg\"]', '899', '1300', 0),
(3402, 129, 11, 13, '[\"53990310img_5138.jpeg\",\"17027501001394a91c3-6367-48bf-b42d-4c09f440ff73.jpeg\",\"2390967772ba67702b-4ec1-4e38-a8bb-73fd4c9d21a2.jpeg\",\"4981265483a7032797-fee0-4894-b7a1-8421abf99a49.jpeg\"]', '899', '1300', 0),
(3403, 129, 11, 13, '[\"53990310img_5138.jpeg\",\"17027501001394a91c3-6367-48bf-b42d-4c09f440ff73.jpeg\",\"2390967772ba67702b-4ec1-4e38-a8bb-73fd4c9d21a2.jpeg\",\"4981265483a7032797-fee0-4894-b7a1-8421abf99a49.jpeg\"]', '899', '1300', 0),
(3404, 129, 11, 13, '[\"53990310img_5138.jpeg\",\"17027501001394a91c3-6367-48bf-b42d-4c09f440ff73.jpeg\",\"2390967772ba67702b-4ec1-4e38-a8bb-73fd4c9d21a2.jpeg\",\"4981265483a7032797-fee0-4894-b7a1-8421abf99a49.jpeg\"]', '899', '1300', 0),
(3405, 129, 11, 13, '[\"53990310img_5138.jpeg\",\"17027501001394a91c3-6367-48bf-b42d-4c09f440ff73.jpeg\",\"2390967772ba67702b-4ec1-4e38-a8bb-73fd4c9d21a2.jpeg\",\"4981265483a7032797-fee0-4894-b7a1-8421abf99a49.jpeg\"]', '899', '1300', 0),
(3406, 129, 21, 13, '[\"53990310img_5138.jpeg\",\"17027501001394a91c3-6367-48bf-b42d-4c09f440ff73.jpeg\",\"2390967772ba67702b-4ec1-4e38-a8bb-73fd4c9d21a2.jpeg\",\"4981265483a7032797-fee0-4894-b7a1-8421abf99a49.jpeg\"]', '899', '1300', 0),
(3407, 129, 21, 13, '[\"53990310img_5138.jpeg\",\"17027501001394a91c3-6367-48bf-b42d-4c09f440ff73.jpeg\",\"2390967772ba67702b-4ec1-4e38-a8bb-73fd4c9d21a2.jpeg\",\"4981265483a7032797-fee0-4894-b7a1-8421abf99a49.jpeg\"]', '899', '1300', 0),
(3408, 129, 21, 13, '[\"53990310img_5138.jpeg\",\"17027501001394a91c3-6367-48bf-b42d-4c09f440ff73.jpeg\",\"2390967772ba67702b-4ec1-4e38-a8bb-73fd4c9d21a2.jpeg\",\"4981265483a7032797-fee0-4894-b7a1-8421abf99a49.jpeg\"]', '899', '1300', 0),
(3409, 129, 21, 13, '[\"53990310img_5138.jpeg\",\"17027501001394a91c3-6367-48bf-b42d-4c09f440ff73.jpeg\",\"2390967772ba67702b-4ec1-4e38-a8bb-73fd4c9d21a2.jpeg\",\"4981265483a7032797-fee0-4894-b7a1-8421abf99a49.jpeg\"]', '899', '1300', 0);
INSERT INTO `all_images` (`id`, `p_id`, `size_id`, `color_id`, `image`, `price`, `cut_price`, `stock`) VALUES
(3410, 129, 22, 13, '[\"53990310img_5138.jpeg\",\"17027501001394a91c3-6367-48bf-b42d-4c09f440ff73.jpeg\",\"2390967772ba67702b-4ec1-4e38-a8bb-73fd4c9d21a2.jpeg\",\"4981265483a7032797-fee0-4894-b7a1-8421abf99a49.jpeg\"]', '899', '1300', 0),
(3411, 129, 22, 13, '[\"53990310img_5138.jpeg\",\"17027501001394a91c3-6367-48bf-b42d-4c09f440ff73.jpeg\",\"2390967772ba67702b-4ec1-4e38-a8bb-73fd4c9d21a2.jpeg\",\"4981265483a7032797-fee0-4894-b7a1-8421abf99a49.jpeg\"]', '899', '1300', 0),
(3412, 129, 22, 13, '[\"53990310img_5138.jpeg\",\"17027501001394a91c3-6367-48bf-b42d-4c09f440ff73.jpeg\",\"2390967772ba67702b-4ec1-4e38-a8bb-73fd4c9d21a2.jpeg\",\"4981265483a7032797-fee0-4894-b7a1-8421abf99a49.jpeg\"]', '899', '1300', 0),
(3413, 129, 22, 13, '[\"53990310img_5138.jpeg\",\"17027501001394a91c3-6367-48bf-b42d-4c09f440ff73.jpeg\",\"2390967772ba67702b-4ec1-4e38-a8bb-73fd4c9d21a2.jpeg\",\"4981265483a7032797-fee0-4894-b7a1-8421abf99a49.jpeg\"]', '899', '1300', 0),
(3476, 112, 9, 22, '[\"4053855760img_4176.jpeg\",\"16965502611img_4175.jpeg\"]', '399', '600', 0),
(3477, 112, 9, 22, '[\"4053855760img_4176.jpeg\",\"16965502611img_4175.jpeg\"]', '399', '600', 0),
(3870, 153, 11, 18, '[\"15692097550img_6810.jpeg\",\"14544988801img_6811.jpeg\",\"18584939762img_6814.jpeg\",\"17288063013img_6813.jpeg\",\"3853093604img_6812.jpeg\",\"3551472505img_6710.jpeg\",\"248812726img_6840.jpeg\"]', '949', '1900', 4),
(3871, 153, 11, 18, '[\"15692097550img_6810.jpeg\",\"14544988801img_6811.jpeg\",\"18584939762img_6814.jpeg\",\"17288063013img_6813.jpeg\",\"3853093604img_6812.jpeg\",\"3551472505img_6710.jpeg\",\"248812726img_6840.jpeg\"]', '949', '1900', 4),
(3872, 153, 11, 18, '[\"15692097550img_6810.jpeg\",\"14544988801img_6811.jpeg\",\"18584939762img_6814.jpeg\",\"17288063013img_6813.jpeg\",\"3853093604img_6812.jpeg\",\"3551472505img_6710.jpeg\",\"248812726img_6840.jpeg\"]', '949', '1900', 4),
(3873, 153, 11, 18, '[\"15692097550img_6810.jpeg\",\"14544988801img_6811.jpeg\",\"18584939762img_6814.jpeg\",\"17288063013img_6813.jpeg\",\"3853093604img_6812.jpeg\",\"3551472505img_6710.jpeg\",\"248812726img_6840.jpeg\"]', '949', '1900', 4),
(3874, 153, 11, 18, '[\"15692097550img_6810.jpeg\",\"14544988801img_6811.jpeg\",\"18584939762img_6814.jpeg\",\"17288063013img_6813.jpeg\",\"3853093604img_6812.jpeg\",\"3551472505img_6710.jpeg\",\"248812726img_6840.jpeg\"]', '949', '1900', 4),
(3875, 153, 11, 18, '[\"15692097550img_6810.jpeg\",\"14544988801img_6811.jpeg\",\"18584939762img_6814.jpeg\",\"17288063013img_6813.jpeg\",\"3853093604img_6812.jpeg\",\"3551472505img_6710.jpeg\",\"248812726img_6840.jpeg\"]', '949', '1900', 4),
(3876, 153, 11, 18, '[\"15692097550img_6810.jpeg\",\"14544988801img_6811.jpeg\",\"18584939762img_6814.jpeg\",\"17288063013img_6813.jpeg\",\"3853093604img_6812.jpeg\",\"3551472505img_6710.jpeg\",\"248812726img_6840.jpeg\"]', '949', '1900', 4),
(3877, 153, 21, 18, '[\"15692097550img_6810.jpeg\",\"14544988801img_6811.jpeg\",\"18584939762img_6814.jpeg\",\"17288063013img_6813.jpeg\",\"3853093604img_6812.jpeg\",\"3551472505img_6710.jpeg\",\"248812726img_6840.jpeg\"]', '949', '1900', 4),
(3878, 153, 21, 18, '[\"15692097550img_6810.jpeg\",\"14544988801img_6811.jpeg\",\"18584939762img_6814.jpeg\",\"17288063013img_6813.jpeg\",\"3853093604img_6812.jpeg\",\"3551472505img_6710.jpeg\",\"248812726img_6840.jpeg\"]', '949', '1900', 4),
(3879, 153, 21, 18, '[\"15692097550img_6810.jpeg\",\"14544988801img_6811.jpeg\",\"18584939762img_6814.jpeg\",\"17288063013img_6813.jpeg\",\"3853093604img_6812.jpeg\",\"3551472505img_6710.jpeg\",\"248812726img_6840.jpeg\"]', '949', '1900', 4),
(3880, 153, 21, 18, '[\"15692097550img_6810.jpeg\",\"14544988801img_6811.jpeg\",\"18584939762img_6814.jpeg\",\"17288063013img_6813.jpeg\",\"3853093604img_6812.jpeg\",\"3551472505img_6710.jpeg\",\"248812726img_6840.jpeg\"]', '949', '1900', 4),
(3881, 153, 21, 18, '[\"15692097550img_6810.jpeg\",\"14544988801img_6811.jpeg\",\"18584939762img_6814.jpeg\",\"17288063013img_6813.jpeg\",\"3853093604img_6812.jpeg\",\"3551472505img_6710.jpeg\",\"248812726img_6840.jpeg\"]', '949', '1900', 4),
(3882, 153, 21, 18, '[\"15692097550img_6810.jpeg\",\"14544988801img_6811.jpeg\",\"18584939762img_6814.jpeg\",\"17288063013img_6813.jpeg\",\"3853093604img_6812.jpeg\",\"3551472505img_6710.jpeg\",\"248812726img_6840.jpeg\"]', '949', '1900', 4),
(3883, 153, 21, 18, '[\"15692097550img_6810.jpeg\",\"14544988801img_6811.jpeg\",\"18584939762img_6814.jpeg\",\"17288063013img_6813.jpeg\",\"3853093604img_6812.jpeg\",\"3551472505img_6710.jpeg\",\"248812726img_6840.jpeg\"]', '949', '1900', 4),
(3884, 153, 22, 18, '[\"15692097550img_6810.jpeg\",\"14544988801img_6811.jpeg\",\"18584939762img_6814.jpeg\",\"17288063013img_6813.jpeg\",\"3853093604img_6812.jpeg\",\"3551472505img_6710.jpeg\",\"248812726img_6840.jpeg\"]', '949', '1900', 4),
(3885, 153, 22, 18, '[\"15692097550img_6810.jpeg\",\"14544988801img_6811.jpeg\",\"18584939762img_6814.jpeg\",\"17288063013img_6813.jpeg\",\"3853093604img_6812.jpeg\",\"3551472505img_6710.jpeg\",\"248812726img_6840.jpeg\"]', '949', '1900', 4),
(3886, 153, 22, 18, '[\"15692097550img_6810.jpeg\",\"14544988801img_6811.jpeg\",\"18584939762img_6814.jpeg\",\"17288063013img_6813.jpeg\",\"3853093604img_6812.jpeg\",\"3551472505img_6710.jpeg\",\"248812726img_6840.jpeg\"]', '949', '1900', 4),
(3887, 153, 22, 18, '[\"15692097550img_6810.jpeg\",\"14544988801img_6811.jpeg\",\"18584939762img_6814.jpeg\",\"17288063013img_6813.jpeg\",\"3853093604img_6812.jpeg\",\"3551472505img_6710.jpeg\",\"248812726img_6840.jpeg\"]', '949', '1900', 4),
(3888, 153, 22, 18, '[\"15692097550img_6810.jpeg\",\"14544988801img_6811.jpeg\",\"18584939762img_6814.jpeg\",\"17288063013img_6813.jpeg\",\"3853093604img_6812.jpeg\",\"3551472505img_6710.jpeg\",\"248812726img_6840.jpeg\"]', '949', '1900', 4),
(3889, 153, 22, 18, '[\"15692097550img_6810.jpeg\",\"14544988801img_6811.jpeg\",\"18584939762img_6814.jpeg\",\"17288063013img_6813.jpeg\",\"3853093604img_6812.jpeg\",\"3551472505img_6710.jpeg\",\"248812726img_6840.jpeg\"]', '949', '1900', 4),
(3890, 153, 22, 18, '[\"15692097550img_6810.jpeg\",\"14544988801img_6811.jpeg\",\"18584939762img_6814.jpeg\",\"17288063013img_6813.jpeg\",\"3853093604img_6812.jpeg\",\"3551472505img_6710.jpeg\",\"248812726img_6840.jpeg\"]', '949', '1900', 4),
(3891, 153, 11, 2, '[\"11918973700img_6833.jpeg\",\"11098725351img_6836.jpeg\",\"18545232542img_6835.jpeg\",\"17178995693img_6834.jpeg\",\"16582727364img_6837.jpeg\",\"20366693645img_6838.jpeg\",\"17448524656img_6839.jpeg\",\"16898210257img_6842.jpeg\"]', '949', '1900', 4),
(3892, 153, 11, 2, '[\"11918973700img_6833.jpeg\",\"11098725351img_6836.jpeg\",\"18545232542img_6835.jpeg\",\"17178995693img_6834.jpeg\",\"16582727364img_6837.jpeg\",\"20366693645img_6838.jpeg\",\"17448524656img_6839.jpeg\",\"16898210257img_6842.jpeg\"]', '949', '1900', 4),
(3893, 153, 11, 2, '[\"11918973700img_6833.jpeg\",\"11098725351img_6836.jpeg\",\"18545232542img_6835.jpeg\",\"17178995693img_6834.jpeg\",\"16582727364img_6837.jpeg\",\"20366693645img_6838.jpeg\",\"17448524656img_6839.jpeg\",\"16898210257img_6842.jpeg\"]', '949', '1900', 4),
(3894, 153, 11, 2, '[\"11918973700img_6833.jpeg\",\"11098725351img_6836.jpeg\",\"18545232542img_6835.jpeg\",\"17178995693img_6834.jpeg\",\"16582727364img_6837.jpeg\",\"20366693645img_6838.jpeg\",\"17448524656img_6839.jpeg\",\"16898210257img_6842.jpeg\"]', '949', '1900', 4),
(3895, 153, 11, 2, '[\"11918973700img_6833.jpeg\",\"11098725351img_6836.jpeg\",\"18545232542img_6835.jpeg\",\"17178995693img_6834.jpeg\",\"16582727364img_6837.jpeg\",\"20366693645img_6838.jpeg\",\"17448524656img_6839.jpeg\",\"16898210257img_6842.jpeg\"]', '949', '1900', 4),
(3896, 153, 11, 2, '[\"11918973700img_6833.jpeg\",\"11098725351img_6836.jpeg\",\"18545232542img_6835.jpeg\",\"17178995693img_6834.jpeg\",\"16582727364img_6837.jpeg\",\"20366693645img_6838.jpeg\",\"17448524656img_6839.jpeg\",\"16898210257img_6842.jpeg\"]', '949', '1900', 4),
(3897, 153, 11, 2, '[\"11918973700img_6833.jpeg\",\"11098725351img_6836.jpeg\",\"18545232542img_6835.jpeg\",\"17178995693img_6834.jpeg\",\"16582727364img_6837.jpeg\",\"20366693645img_6838.jpeg\",\"17448524656img_6839.jpeg\",\"16898210257img_6842.jpeg\"]', '949', '1900', 4),
(3898, 153, 11, 2, '[\"11918973700img_6833.jpeg\",\"11098725351img_6836.jpeg\",\"18545232542img_6835.jpeg\",\"17178995693img_6834.jpeg\",\"16582727364img_6837.jpeg\",\"20366693645img_6838.jpeg\",\"17448524656img_6839.jpeg\",\"16898210257img_6842.jpeg\"]', '949', '1900', 4),
(3899, 153, 21, 2, '[\"11918973700img_6833.jpeg\",\"11098725351img_6836.jpeg\",\"18545232542img_6835.jpeg\",\"17178995693img_6834.jpeg\",\"16582727364img_6837.jpeg\",\"20366693645img_6838.jpeg\",\"17448524656img_6839.jpeg\",\"16898210257img_6842.jpeg\"]', '949', '1900', 4),
(3900, 153, 21, 2, '[\"11918973700img_6833.jpeg\",\"11098725351img_6836.jpeg\",\"18545232542img_6835.jpeg\",\"17178995693img_6834.jpeg\",\"16582727364img_6837.jpeg\",\"20366693645img_6838.jpeg\",\"17448524656img_6839.jpeg\",\"16898210257img_6842.jpeg\"]', '949', '1900', 4),
(3901, 153, 21, 2, '[\"11918973700img_6833.jpeg\",\"11098725351img_6836.jpeg\",\"18545232542img_6835.jpeg\",\"17178995693img_6834.jpeg\",\"16582727364img_6837.jpeg\",\"20366693645img_6838.jpeg\",\"17448524656img_6839.jpeg\",\"16898210257img_6842.jpeg\"]', '949', '1900', 4),
(3902, 153, 21, 2, '[\"11918973700img_6833.jpeg\",\"11098725351img_6836.jpeg\",\"18545232542img_6835.jpeg\",\"17178995693img_6834.jpeg\",\"16582727364img_6837.jpeg\",\"20366693645img_6838.jpeg\",\"17448524656img_6839.jpeg\",\"16898210257img_6842.jpeg\"]', '949', '1900', 4),
(3903, 153, 21, 2, '[\"11918973700img_6833.jpeg\",\"11098725351img_6836.jpeg\",\"18545232542img_6835.jpeg\",\"17178995693img_6834.jpeg\",\"16582727364img_6837.jpeg\",\"20366693645img_6838.jpeg\",\"17448524656img_6839.jpeg\",\"16898210257img_6842.jpeg\"]', '949', '1900', 4),
(3904, 153, 21, 2, '[\"11918973700img_6833.jpeg\",\"11098725351img_6836.jpeg\",\"18545232542img_6835.jpeg\",\"17178995693img_6834.jpeg\",\"16582727364img_6837.jpeg\",\"20366693645img_6838.jpeg\",\"17448524656img_6839.jpeg\",\"16898210257img_6842.jpeg\"]', '949', '1900', 4),
(3905, 153, 21, 2, '[\"11918973700img_6833.jpeg\",\"11098725351img_6836.jpeg\",\"18545232542img_6835.jpeg\",\"17178995693img_6834.jpeg\",\"16582727364img_6837.jpeg\",\"20366693645img_6838.jpeg\",\"17448524656img_6839.jpeg\",\"16898210257img_6842.jpeg\"]', '949', '1900', 4),
(3906, 153, 21, 2, '[\"11918973700img_6833.jpeg\",\"11098725351img_6836.jpeg\",\"18545232542img_6835.jpeg\",\"17178995693img_6834.jpeg\",\"16582727364img_6837.jpeg\",\"20366693645img_6838.jpeg\",\"17448524656img_6839.jpeg\",\"16898210257img_6842.jpeg\"]', '949', '1900', 4),
(3907, 153, 22, 2, '[\"11918973700img_6833.jpeg\",\"11098725351img_6836.jpeg\",\"18545232542img_6835.jpeg\",\"17178995693img_6834.jpeg\",\"16582727364img_6837.jpeg\",\"20366693645img_6838.jpeg\",\"17448524656img_6839.jpeg\",\"16898210257img_6842.jpeg\"]', '949', '1900', 4),
(3908, 153, 22, 2, '[\"11918973700img_6833.jpeg\",\"11098725351img_6836.jpeg\",\"18545232542img_6835.jpeg\",\"17178995693img_6834.jpeg\",\"16582727364img_6837.jpeg\",\"20366693645img_6838.jpeg\",\"17448524656img_6839.jpeg\",\"16898210257img_6842.jpeg\"]', '949', '1900', 4),
(3909, 153, 22, 2, '[\"11918973700img_6833.jpeg\",\"11098725351img_6836.jpeg\",\"18545232542img_6835.jpeg\",\"17178995693img_6834.jpeg\",\"16582727364img_6837.jpeg\",\"20366693645img_6838.jpeg\",\"17448524656img_6839.jpeg\",\"16898210257img_6842.jpeg\"]', '949', '1900', 4),
(3910, 153, 22, 2, '[\"11918973700img_6833.jpeg\",\"11098725351img_6836.jpeg\",\"18545232542img_6835.jpeg\",\"17178995693img_6834.jpeg\",\"16582727364img_6837.jpeg\",\"20366693645img_6838.jpeg\",\"17448524656img_6839.jpeg\",\"16898210257img_6842.jpeg\"]', '949', '1900', 4),
(3911, 153, 22, 2, '[\"11918973700img_6833.jpeg\",\"11098725351img_6836.jpeg\",\"18545232542img_6835.jpeg\",\"17178995693img_6834.jpeg\",\"16582727364img_6837.jpeg\",\"20366693645img_6838.jpeg\",\"17448524656img_6839.jpeg\",\"16898210257img_6842.jpeg\"]', '949', '1900', 4),
(3912, 153, 22, 2, '[\"11918973700img_6833.jpeg\",\"11098725351img_6836.jpeg\",\"18545232542img_6835.jpeg\",\"17178995693img_6834.jpeg\",\"16582727364img_6837.jpeg\",\"20366693645img_6838.jpeg\",\"17448524656img_6839.jpeg\",\"16898210257img_6842.jpeg\"]', '949', '1900', 4),
(3913, 153, 22, 2, '[\"11918973700img_6833.jpeg\",\"11098725351img_6836.jpeg\",\"18545232542img_6835.jpeg\",\"17178995693img_6834.jpeg\",\"16582727364img_6837.jpeg\",\"20366693645img_6838.jpeg\",\"17448524656img_6839.jpeg\",\"16898210257img_6842.jpeg\"]', '949', '1900', 4),
(3914, 153, 22, 2, '[\"11918973700img_6833.jpeg\",\"11098725351img_6836.jpeg\",\"18545232542img_6835.jpeg\",\"17178995693img_6834.jpeg\",\"16582727364img_6837.jpeg\",\"20366693645img_6838.jpeg\",\"17448524656img_6839.jpeg\",\"16898210257img_6842.jpeg\"]', '949', '1900', 4),
(4276, 164, 21, 8, '[\"17616755950img_7030.jpeg\",\"16235150061img_7028.jpeg\",\"3595172622img_7032.jpeg\",\"1112672113img_7034.jpeg\",\"16119436084img_7033.jpeg\",\"19728348015img_7027.jpeg\",\"12695301896img_7031.jpeg\",\"4512905077img_7037.jpeg\"]', '699', '1200', 1),
(4277, 164, 21, 8, '[\"17616755950img_7030.jpeg\",\"16235150061img_7028.jpeg\",\"3595172622img_7032.jpeg\",\"1112672113img_7034.jpeg\",\"16119436084img_7033.jpeg\",\"19728348015img_7027.jpeg\",\"12695301896img_7031.jpeg\",\"4512905077img_7037.jpeg\"]', '699', '1200', 1),
(4278, 164, 21, 8, '[\"17616755950img_7030.jpeg\",\"16235150061img_7028.jpeg\",\"3595172622img_7032.jpeg\",\"1112672113img_7034.jpeg\",\"16119436084img_7033.jpeg\",\"19728348015img_7027.jpeg\",\"12695301896img_7031.jpeg\",\"4512905077img_7037.jpeg\"]', '699', '1200', 1),
(4279, 164, 21, 8, '[\"17616755950img_7030.jpeg\",\"16235150061img_7028.jpeg\",\"3595172622img_7032.jpeg\",\"1112672113img_7034.jpeg\",\"16119436084img_7033.jpeg\",\"19728348015img_7027.jpeg\",\"12695301896img_7031.jpeg\",\"4512905077img_7037.jpeg\"]', '699', '1200', 1),
(4280, 164, 21, 8, '[\"17616755950img_7030.jpeg\",\"16235150061img_7028.jpeg\",\"3595172622img_7032.jpeg\",\"1112672113img_7034.jpeg\",\"16119436084img_7033.jpeg\",\"19728348015img_7027.jpeg\",\"12695301896img_7031.jpeg\",\"4512905077img_7037.jpeg\"]', '699', '1200', 1),
(4281, 164, 21, 8, '[\"17616755950img_7030.jpeg\",\"16235150061img_7028.jpeg\",\"3595172622img_7032.jpeg\",\"1112672113img_7034.jpeg\",\"16119436084img_7033.jpeg\",\"19728348015img_7027.jpeg\",\"12695301896img_7031.jpeg\",\"4512905077img_7037.jpeg\"]', '699', '1200', 1),
(4282, 164, 21, 8, '[\"17616755950img_7030.jpeg\",\"16235150061img_7028.jpeg\",\"3595172622img_7032.jpeg\",\"1112672113img_7034.jpeg\",\"16119436084img_7033.jpeg\",\"19728348015img_7027.jpeg\",\"12695301896img_7031.jpeg\",\"4512905077img_7037.jpeg\"]', '699', '1200', 1),
(4283, 164, 21, 8, '[\"17616755950img_7030.jpeg\",\"16235150061img_7028.jpeg\",\"3595172622img_7032.jpeg\",\"1112672113img_7034.jpeg\",\"16119436084img_7033.jpeg\",\"19728348015img_7027.jpeg\",\"12695301896img_7031.jpeg\",\"4512905077img_7037.jpeg\"]', '699', '1200', 1),
(4284, 164, 22, 8, '[\"17616755950img_7030.jpeg\",\"16235150061img_7028.jpeg\",\"3595172622img_7032.jpeg\",\"1112672113img_7034.jpeg\",\"16119436084img_7033.jpeg\",\"19728348015img_7027.jpeg\",\"12695301896img_7031.jpeg\",\"4512905077img_7037.jpeg\"]', '699', '1200', 1),
(4285, 164, 22, 8, '[\"17616755950img_7030.jpeg\",\"16235150061img_7028.jpeg\",\"3595172622img_7032.jpeg\",\"1112672113img_7034.jpeg\",\"16119436084img_7033.jpeg\",\"19728348015img_7027.jpeg\",\"12695301896img_7031.jpeg\",\"4512905077img_7037.jpeg\"]', '699', '1200', 1),
(4286, 164, 22, 8, '[\"17616755950img_7030.jpeg\",\"16235150061img_7028.jpeg\",\"3595172622img_7032.jpeg\",\"1112672113img_7034.jpeg\",\"16119436084img_7033.jpeg\",\"19728348015img_7027.jpeg\",\"12695301896img_7031.jpeg\",\"4512905077img_7037.jpeg\"]', '699', '1200', 1),
(4287, 164, 22, 8, '[\"17616755950img_7030.jpeg\",\"16235150061img_7028.jpeg\",\"3595172622img_7032.jpeg\",\"1112672113img_7034.jpeg\",\"16119436084img_7033.jpeg\",\"19728348015img_7027.jpeg\",\"12695301896img_7031.jpeg\",\"4512905077img_7037.jpeg\"]', '699', '1200', 1),
(4288, 164, 22, 8, '[\"17616755950img_7030.jpeg\",\"16235150061img_7028.jpeg\",\"3595172622img_7032.jpeg\",\"1112672113img_7034.jpeg\",\"16119436084img_7033.jpeg\",\"19728348015img_7027.jpeg\",\"12695301896img_7031.jpeg\",\"4512905077img_7037.jpeg\"]', '699', '1200', 1),
(4289, 164, 22, 8, '[\"17616755950img_7030.jpeg\",\"16235150061img_7028.jpeg\",\"3595172622img_7032.jpeg\",\"1112672113img_7034.jpeg\",\"16119436084img_7033.jpeg\",\"19728348015img_7027.jpeg\",\"12695301896img_7031.jpeg\",\"4512905077img_7037.jpeg\"]', '699', '1200', 1),
(4290, 164, 22, 8, '[\"17616755950img_7030.jpeg\",\"16235150061img_7028.jpeg\",\"3595172622img_7032.jpeg\",\"1112672113img_7034.jpeg\",\"16119436084img_7033.jpeg\",\"19728348015img_7027.jpeg\",\"12695301896img_7031.jpeg\",\"4512905077img_7037.jpeg\"]', '699', '1200', 1),
(4291, 164, 22, 8, '[\"17616755950img_7030.jpeg\",\"16235150061img_7028.jpeg\",\"3595172622img_7032.jpeg\",\"1112672113img_7034.jpeg\",\"16119436084img_7033.jpeg\",\"19728348015img_7027.jpeg\",\"12695301896img_7031.jpeg\",\"4512905077img_7037.jpeg\"]', '699', '1200', 1),
(4292, 164, 21, 11, '[\"3076491760img_7036.jpeg\",\"2065430871img_7019.jpeg\",\"9774149752img_7016.jpeg\",\"8496578323img_7013.jpeg\",\"5993033424img_7018.jpeg\",\"9967286985img_7015.jpeg\",\"10766171146img_7014.jpeg\",\"2190912207img_7035.jpeg\",\"13397631728img_7038.jpeg\"]', '699', '1200', 1),
(4293, 164, 21, 11, '[\"3076491760img_7036.jpeg\",\"2065430871img_7019.jpeg\",\"9774149752img_7016.jpeg\",\"8496578323img_7013.jpeg\",\"5993033424img_7018.jpeg\",\"9967286985img_7015.jpeg\",\"10766171146img_7014.jpeg\",\"2190912207img_7035.jpeg\",\"13397631728img_7038.jpeg\"]', '699', '1200', 1),
(4294, 164, 21, 11, '[\"3076491760img_7036.jpeg\",\"2065430871img_7019.jpeg\",\"9774149752img_7016.jpeg\",\"8496578323img_7013.jpeg\",\"5993033424img_7018.jpeg\",\"9967286985img_7015.jpeg\",\"10766171146img_7014.jpeg\",\"2190912207img_7035.jpeg\",\"13397631728img_7038.jpeg\"]', '699', '1200', 1),
(4295, 164, 21, 11, '[\"3076491760img_7036.jpeg\",\"2065430871img_7019.jpeg\",\"9774149752img_7016.jpeg\",\"8496578323img_7013.jpeg\",\"5993033424img_7018.jpeg\",\"9967286985img_7015.jpeg\",\"10766171146img_7014.jpeg\",\"2190912207img_7035.jpeg\",\"13397631728img_7038.jpeg\"]', '699', '1200', 1),
(4296, 164, 21, 11, '[\"3076491760img_7036.jpeg\",\"2065430871img_7019.jpeg\",\"9774149752img_7016.jpeg\",\"8496578323img_7013.jpeg\",\"5993033424img_7018.jpeg\",\"9967286985img_7015.jpeg\",\"10766171146img_7014.jpeg\",\"2190912207img_7035.jpeg\",\"13397631728img_7038.jpeg\"]', '699', '1200', 1),
(4297, 164, 21, 11, '[\"3076491760img_7036.jpeg\",\"2065430871img_7019.jpeg\",\"9774149752img_7016.jpeg\",\"8496578323img_7013.jpeg\",\"5993033424img_7018.jpeg\",\"9967286985img_7015.jpeg\",\"10766171146img_7014.jpeg\",\"2190912207img_7035.jpeg\",\"13397631728img_7038.jpeg\"]', '699', '1200', 1),
(4298, 164, 21, 11, '[\"3076491760img_7036.jpeg\",\"2065430871img_7019.jpeg\",\"9774149752img_7016.jpeg\",\"8496578323img_7013.jpeg\",\"5993033424img_7018.jpeg\",\"9967286985img_7015.jpeg\",\"10766171146img_7014.jpeg\",\"2190912207img_7035.jpeg\",\"13397631728img_7038.jpeg\"]', '699', '1200', 1),
(4299, 164, 21, 11, '[\"3076491760img_7036.jpeg\",\"2065430871img_7019.jpeg\",\"9774149752img_7016.jpeg\",\"8496578323img_7013.jpeg\",\"5993033424img_7018.jpeg\",\"9967286985img_7015.jpeg\",\"10766171146img_7014.jpeg\",\"2190912207img_7035.jpeg\",\"13397631728img_7038.jpeg\"]', '699', '1200', 1),
(4300, 164, 21, 11, '[\"3076491760img_7036.jpeg\",\"2065430871img_7019.jpeg\",\"9774149752img_7016.jpeg\",\"8496578323img_7013.jpeg\",\"5993033424img_7018.jpeg\",\"9967286985img_7015.jpeg\",\"10766171146img_7014.jpeg\",\"2190912207img_7035.jpeg\",\"13397631728img_7038.jpeg\"]', '699', '1200', 1),
(4301, 164, 22, 11, '[\"3076491760img_7036.jpeg\",\"2065430871img_7019.jpeg\",\"9774149752img_7016.jpeg\",\"8496578323img_7013.jpeg\",\"5993033424img_7018.jpeg\",\"9967286985img_7015.jpeg\",\"10766171146img_7014.jpeg\",\"2190912207img_7035.jpeg\",\"13397631728img_7038.jpeg\"]', '699', '1200', 1),
(4302, 164, 22, 11, '[\"3076491760img_7036.jpeg\",\"2065430871img_7019.jpeg\",\"9774149752img_7016.jpeg\",\"8496578323img_7013.jpeg\",\"5993033424img_7018.jpeg\",\"9967286985img_7015.jpeg\",\"10766171146img_7014.jpeg\",\"2190912207img_7035.jpeg\",\"13397631728img_7038.jpeg\"]', '699', '1200', 1),
(4303, 164, 22, 11, '[\"3076491760img_7036.jpeg\",\"2065430871img_7019.jpeg\",\"9774149752img_7016.jpeg\",\"8496578323img_7013.jpeg\",\"5993033424img_7018.jpeg\",\"9967286985img_7015.jpeg\",\"10766171146img_7014.jpeg\",\"2190912207img_7035.jpeg\",\"13397631728img_7038.jpeg\"]', '699', '1200', 1),
(4304, 164, 22, 11, '[\"3076491760img_7036.jpeg\",\"2065430871img_7019.jpeg\",\"9774149752img_7016.jpeg\",\"8496578323img_7013.jpeg\",\"5993033424img_7018.jpeg\",\"9967286985img_7015.jpeg\",\"10766171146img_7014.jpeg\",\"2190912207img_7035.jpeg\",\"13397631728img_7038.jpeg\"]', '699', '1200', 1),
(4305, 164, 22, 11, '[\"3076491760img_7036.jpeg\",\"2065430871img_7019.jpeg\",\"9774149752img_7016.jpeg\",\"8496578323img_7013.jpeg\",\"5993033424img_7018.jpeg\",\"9967286985img_7015.jpeg\",\"10766171146img_7014.jpeg\",\"2190912207img_7035.jpeg\",\"13397631728img_7038.jpeg\"]', '699', '1200', 1),
(4306, 164, 22, 11, '[\"3076491760img_7036.jpeg\",\"2065430871img_7019.jpeg\",\"9774149752img_7016.jpeg\",\"8496578323img_7013.jpeg\",\"5993033424img_7018.jpeg\",\"9967286985img_7015.jpeg\",\"10766171146img_7014.jpeg\",\"2190912207img_7035.jpeg\",\"13397631728img_7038.jpeg\"]', '699', '1200', 1),
(4307, 164, 22, 11, '[\"3076491760img_7036.jpeg\",\"2065430871img_7019.jpeg\",\"9774149752img_7016.jpeg\",\"8496578323img_7013.jpeg\",\"5993033424img_7018.jpeg\",\"9967286985img_7015.jpeg\",\"10766171146img_7014.jpeg\",\"2190912207img_7035.jpeg\",\"13397631728img_7038.jpeg\"]', '699', '1200', 1),
(4308, 164, 22, 11, '[\"3076491760img_7036.jpeg\",\"2065430871img_7019.jpeg\",\"9774149752img_7016.jpeg\",\"8496578323img_7013.jpeg\",\"5993033424img_7018.jpeg\",\"9967286985img_7015.jpeg\",\"10766171146img_7014.jpeg\",\"2190912207img_7035.jpeg\",\"13397631728img_7038.jpeg\"]', '699', '1200', 1),
(4309, 164, 22, 11, '[\"3076491760img_7036.jpeg\",\"2065430871img_7019.jpeg\",\"9774149752img_7016.jpeg\",\"8496578323img_7013.jpeg\",\"5993033424img_7018.jpeg\",\"9967286985img_7015.jpeg\",\"10766171146img_7014.jpeg\",\"2190912207img_7035.jpeg\",\"13397631728img_7038.jpeg\"]', '699', '1200', 1),
(4310, 164, 21, 3, '[\"8731705020img_7021.jpeg\"]', '699', '1200', 1),
(4311, 164, 22, 3, '[\"8731705020img_7021.jpeg\"]', '699', '1200', 1),
(4348, 165, 21, 8, '[\"2285806000img_7027.jpeg\",\"6298503811img_7028.jpeg\",\"18797766932img_7031.jpeg\",\"14323116523img_7032.jpeg\",\"657869934img_7028.jpeg\",\"16012487105img_7030.jpeg\",\"16888163096img_7033.jpeg\",\"8686862707img_7034.jpeg\",\"17501098268img_7037.jpeg\"]', '699', '1200', 1),
(4349, 165, 21, 8, '[\"2285806000img_7027.jpeg\",\"6298503811img_7028.jpeg\",\"18797766932img_7031.jpeg\",\"14323116523img_7032.jpeg\",\"657869934img_7028.jpeg\",\"16012487105img_7030.jpeg\",\"16888163096img_7033.jpeg\",\"8686862707img_7034.jpeg\",\"17501098268img_7037.jpeg\"]', '699', '1200', 1),
(4350, 165, 21, 8, '[\"2285806000img_7027.jpeg\",\"6298503811img_7028.jpeg\",\"18797766932img_7031.jpeg\",\"14323116523img_7032.jpeg\",\"657869934img_7028.jpeg\",\"16012487105img_7030.jpeg\",\"16888163096img_7033.jpeg\",\"8686862707img_7034.jpeg\",\"17501098268img_7037.jpeg\"]', '699', '1200', 1),
(4351, 165, 21, 8, '[\"2285806000img_7027.jpeg\",\"6298503811img_7028.jpeg\",\"18797766932img_7031.jpeg\",\"14323116523img_7032.jpeg\",\"657869934img_7028.jpeg\",\"16012487105img_7030.jpeg\",\"16888163096img_7033.jpeg\",\"8686862707img_7034.jpeg\",\"17501098268img_7037.jpeg\"]', '699', '1200', 1),
(4352, 165, 21, 8, '[\"2285806000img_7027.jpeg\",\"6298503811img_7028.jpeg\",\"18797766932img_7031.jpeg\",\"14323116523img_7032.jpeg\",\"657869934img_7028.jpeg\",\"16012487105img_7030.jpeg\",\"16888163096img_7033.jpeg\",\"8686862707img_7034.jpeg\",\"17501098268img_7037.jpeg\"]', '699', '1200', 1),
(4353, 165, 21, 8, '[\"2285806000img_7027.jpeg\",\"6298503811img_7028.jpeg\",\"18797766932img_7031.jpeg\",\"14323116523img_7032.jpeg\",\"657869934img_7028.jpeg\",\"16012487105img_7030.jpeg\",\"16888163096img_7033.jpeg\",\"8686862707img_7034.jpeg\",\"17501098268img_7037.jpeg\"]', '699', '1200', 1),
(4354, 165, 21, 8, '[\"2285806000img_7027.jpeg\",\"6298503811img_7028.jpeg\",\"18797766932img_7031.jpeg\",\"14323116523img_7032.jpeg\",\"657869934img_7028.jpeg\",\"16012487105img_7030.jpeg\",\"16888163096img_7033.jpeg\",\"8686862707img_7034.jpeg\",\"17501098268img_7037.jpeg\"]', '699', '1200', 1),
(4355, 165, 21, 8, '[\"2285806000img_7027.jpeg\",\"6298503811img_7028.jpeg\",\"18797766932img_7031.jpeg\",\"14323116523img_7032.jpeg\",\"657869934img_7028.jpeg\",\"16012487105img_7030.jpeg\",\"16888163096img_7033.jpeg\",\"8686862707img_7034.jpeg\",\"17501098268img_7037.jpeg\"]', '699', '1200', 1),
(4356, 165, 21, 8, '[\"2285806000img_7027.jpeg\",\"6298503811img_7028.jpeg\",\"18797766932img_7031.jpeg\",\"14323116523img_7032.jpeg\",\"657869934img_7028.jpeg\",\"16012487105img_7030.jpeg\",\"16888163096img_7033.jpeg\",\"8686862707img_7034.jpeg\",\"17501098268img_7037.jpeg\"]', '699', '1200', 1),
(4357, 165, 22, 8, '[\"2285806000img_7027.jpeg\",\"6298503811img_7028.jpeg\",\"18797766932img_7031.jpeg\",\"14323116523img_7032.jpeg\",\"657869934img_7028.jpeg\",\"16012487105img_7030.jpeg\",\"16888163096img_7033.jpeg\",\"8686862707img_7034.jpeg\",\"17501098268img_7037.jpeg\"]', '699', '1200', 1),
(4358, 165, 22, 8, '[\"2285806000img_7027.jpeg\",\"6298503811img_7028.jpeg\",\"18797766932img_7031.jpeg\",\"14323116523img_7032.jpeg\",\"657869934img_7028.jpeg\",\"16012487105img_7030.jpeg\",\"16888163096img_7033.jpeg\",\"8686862707img_7034.jpeg\",\"17501098268img_7037.jpeg\"]', '699', '1200', 1),
(4359, 165, 22, 8, '[\"2285806000img_7027.jpeg\",\"6298503811img_7028.jpeg\",\"18797766932img_7031.jpeg\",\"14323116523img_7032.jpeg\",\"657869934img_7028.jpeg\",\"16012487105img_7030.jpeg\",\"16888163096img_7033.jpeg\",\"8686862707img_7034.jpeg\",\"17501098268img_7037.jpeg\"]', '699', '1200', 1),
(4360, 165, 22, 8, '[\"2285806000img_7027.jpeg\",\"6298503811img_7028.jpeg\",\"18797766932img_7031.jpeg\",\"14323116523img_7032.jpeg\",\"657869934img_7028.jpeg\",\"16012487105img_7030.jpeg\",\"16888163096img_7033.jpeg\",\"8686862707img_7034.jpeg\",\"17501098268img_7037.jpeg\"]', '699', '1200', 1),
(4361, 165, 22, 8, '[\"2285806000img_7027.jpeg\",\"6298503811img_7028.jpeg\",\"18797766932img_7031.jpeg\",\"14323116523img_7032.jpeg\",\"657869934img_7028.jpeg\",\"16012487105img_7030.jpeg\",\"16888163096img_7033.jpeg\",\"8686862707img_7034.jpeg\",\"17501098268img_7037.jpeg\"]', '699', '1200', 1),
(4362, 165, 22, 8, '[\"2285806000img_7027.jpeg\",\"6298503811img_7028.jpeg\",\"18797766932img_7031.jpeg\",\"14323116523img_7032.jpeg\",\"657869934img_7028.jpeg\",\"16012487105img_7030.jpeg\",\"16888163096img_7033.jpeg\",\"8686862707img_7034.jpeg\",\"17501098268img_7037.jpeg\"]', '699', '1200', 1),
(4363, 165, 22, 8, '[\"2285806000img_7027.jpeg\",\"6298503811img_7028.jpeg\",\"18797766932img_7031.jpeg\",\"14323116523img_7032.jpeg\",\"657869934img_7028.jpeg\",\"16012487105img_7030.jpeg\",\"16888163096img_7033.jpeg\",\"8686862707img_7034.jpeg\",\"17501098268img_7037.jpeg\"]', '699', '1200', 1),
(4364, 165, 22, 8, '[\"2285806000img_7027.jpeg\",\"6298503811img_7028.jpeg\",\"18797766932img_7031.jpeg\",\"14323116523img_7032.jpeg\",\"657869934img_7028.jpeg\",\"16012487105img_7030.jpeg\",\"16888163096img_7033.jpeg\",\"8686862707img_7034.jpeg\",\"17501098268img_7037.jpeg\"]', '699', '1200', 1),
(4365, 165, 22, 8, '[\"2285806000img_7027.jpeg\",\"6298503811img_7028.jpeg\",\"18797766932img_7031.jpeg\",\"14323116523img_7032.jpeg\",\"657869934img_7028.jpeg\",\"16012487105img_7030.jpeg\",\"16888163096img_7033.jpeg\",\"8686862707img_7034.jpeg\",\"17501098268img_7037.jpeg\"]', '699', '1200', 1),
(4366, 165, 21, 11, '[\"1216215500img_7019.jpeg\",\"20007847941img_7015.jpeg\",\"5600370932img_7013.jpeg\",\"9195190993img_7016.jpeg\",\"18133207954img_7018.jpeg\",\"8105132945img_7014.jpeg\",\"3280655946img_7036.jpeg\",\"21406962447img_7035.jpeg\",\"15388150168img_7038.jpeg\"]', '699', '1200', 1),
(4367, 165, 21, 11, '[\"1216215500img_7019.jpeg\",\"20007847941img_7015.jpeg\",\"5600370932img_7013.jpeg\",\"9195190993img_7016.jpeg\",\"18133207954img_7018.jpeg\",\"8105132945img_7014.jpeg\",\"3280655946img_7036.jpeg\",\"21406962447img_7035.jpeg\",\"15388150168img_7038.jpeg\"]', '699', '1200', 1),
(4368, 165, 21, 11, '[\"1216215500img_7019.jpeg\",\"20007847941img_7015.jpeg\",\"5600370932img_7013.jpeg\",\"9195190993img_7016.jpeg\",\"18133207954img_7018.jpeg\",\"8105132945img_7014.jpeg\",\"3280655946img_7036.jpeg\",\"21406962447img_7035.jpeg\",\"15388150168img_7038.jpeg\"]', '699', '1200', 1),
(4369, 165, 21, 11, '[\"1216215500img_7019.jpeg\",\"20007847941img_7015.jpeg\",\"5600370932img_7013.jpeg\",\"9195190993img_7016.jpeg\",\"18133207954img_7018.jpeg\",\"8105132945img_7014.jpeg\",\"3280655946img_7036.jpeg\",\"21406962447img_7035.jpeg\",\"15388150168img_7038.jpeg\"]', '699', '1200', 1),
(4370, 165, 21, 11, '[\"1216215500img_7019.jpeg\",\"20007847941img_7015.jpeg\",\"5600370932img_7013.jpeg\",\"9195190993img_7016.jpeg\",\"18133207954img_7018.jpeg\",\"8105132945img_7014.jpeg\",\"3280655946img_7036.jpeg\",\"21406962447img_7035.jpeg\",\"15388150168img_7038.jpeg\"]', '699', '1200', 1),
(4371, 165, 21, 11, '[\"1216215500img_7019.jpeg\",\"20007847941img_7015.jpeg\",\"5600370932img_7013.jpeg\",\"9195190993img_7016.jpeg\",\"18133207954img_7018.jpeg\",\"8105132945img_7014.jpeg\",\"3280655946img_7036.jpeg\",\"21406962447img_7035.jpeg\",\"15388150168img_7038.jpeg\"]', '699', '1200', 1),
(4372, 165, 21, 11, '[\"1216215500img_7019.jpeg\",\"20007847941img_7015.jpeg\",\"5600370932img_7013.jpeg\",\"9195190993img_7016.jpeg\",\"18133207954img_7018.jpeg\",\"8105132945img_7014.jpeg\",\"3280655946img_7036.jpeg\",\"21406962447img_7035.jpeg\",\"15388150168img_7038.jpeg\"]', '699', '1200', 1),
(4373, 165, 21, 11, '[\"1216215500img_7019.jpeg\",\"20007847941img_7015.jpeg\",\"5600370932img_7013.jpeg\",\"9195190993img_7016.jpeg\",\"18133207954img_7018.jpeg\",\"8105132945img_7014.jpeg\",\"3280655946img_7036.jpeg\",\"21406962447img_7035.jpeg\",\"15388150168img_7038.jpeg\"]', '699', '1200', 1),
(4374, 165, 21, 11, '[\"1216215500img_7019.jpeg\",\"20007847941img_7015.jpeg\",\"5600370932img_7013.jpeg\",\"9195190993img_7016.jpeg\",\"18133207954img_7018.jpeg\",\"8105132945img_7014.jpeg\",\"3280655946img_7036.jpeg\",\"21406962447img_7035.jpeg\",\"15388150168img_7038.jpeg\"]', '699', '1200', 1),
(4375, 165, 22, 11, '[\"1216215500img_7019.jpeg\",\"20007847941img_7015.jpeg\",\"5600370932img_7013.jpeg\",\"9195190993img_7016.jpeg\",\"18133207954img_7018.jpeg\",\"8105132945img_7014.jpeg\",\"3280655946img_7036.jpeg\",\"21406962447img_7035.jpeg\",\"15388150168img_7038.jpeg\"]', '699', '1200', 1),
(4376, 165, 22, 11, '[\"1216215500img_7019.jpeg\",\"20007847941img_7015.jpeg\",\"5600370932img_7013.jpeg\",\"9195190993img_7016.jpeg\",\"18133207954img_7018.jpeg\",\"8105132945img_7014.jpeg\",\"3280655946img_7036.jpeg\",\"21406962447img_7035.jpeg\",\"15388150168img_7038.jpeg\"]', '699', '1200', 1),
(4377, 165, 22, 11, '[\"1216215500img_7019.jpeg\",\"20007847941img_7015.jpeg\",\"5600370932img_7013.jpeg\",\"9195190993img_7016.jpeg\",\"18133207954img_7018.jpeg\",\"8105132945img_7014.jpeg\",\"3280655946img_7036.jpeg\",\"21406962447img_7035.jpeg\",\"15388150168img_7038.jpeg\"]', '699', '1200', 1),
(4378, 165, 22, 11, '[\"1216215500img_7019.jpeg\",\"20007847941img_7015.jpeg\",\"5600370932img_7013.jpeg\",\"9195190993img_7016.jpeg\",\"18133207954img_7018.jpeg\",\"8105132945img_7014.jpeg\",\"3280655946img_7036.jpeg\",\"21406962447img_7035.jpeg\",\"15388150168img_7038.jpeg\"]', '699', '1200', 1),
(4379, 165, 22, 11, '[\"1216215500img_7019.jpeg\",\"20007847941img_7015.jpeg\",\"5600370932img_7013.jpeg\",\"9195190993img_7016.jpeg\",\"18133207954img_7018.jpeg\",\"8105132945img_7014.jpeg\",\"3280655946img_7036.jpeg\",\"21406962447img_7035.jpeg\",\"15388150168img_7038.jpeg\"]', '699', '1200', 1),
(4380, 165, 22, 11, '[\"1216215500img_7019.jpeg\",\"20007847941img_7015.jpeg\",\"5600370932img_7013.jpeg\",\"9195190993img_7016.jpeg\",\"18133207954img_7018.jpeg\",\"8105132945img_7014.jpeg\",\"3280655946img_7036.jpeg\",\"21406962447img_7035.jpeg\",\"15388150168img_7038.jpeg\"]', '699', '1200', 1),
(4381, 165, 22, 11, '[\"1216215500img_7019.jpeg\",\"20007847941img_7015.jpeg\",\"5600370932img_7013.jpeg\",\"9195190993img_7016.jpeg\",\"18133207954img_7018.jpeg\",\"8105132945img_7014.jpeg\",\"3280655946img_7036.jpeg\",\"21406962447img_7035.jpeg\",\"15388150168img_7038.jpeg\"]', '699', '1200', 1),
(4382, 165, 22, 11, '[\"1216215500img_7019.jpeg\",\"20007847941img_7015.jpeg\",\"5600370932img_7013.jpeg\",\"9195190993img_7016.jpeg\",\"18133207954img_7018.jpeg\",\"8105132945img_7014.jpeg\",\"3280655946img_7036.jpeg\",\"21406962447img_7035.jpeg\",\"15388150168img_7038.jpeg\"]', '699', '1200', 1),
(4383, 165, 22, 11, '[\"1216215500img_7019.jpeg\",\"20007847941img_7015.jpeg\",\"5600370932img_7013.jpeg\",\"9195190993img_7016.jpeg\",\"18133207954img_7018.jpeg\",\"8105132945img_7014.jpeg\",\"3280655946img_7036.jpeg\",\"21406962447img_7035.jpeg\",\"15388150168img_7038.jpeg\"]', '699', '1200', 1),
(4384, 165, 21, 18, '[\"9126710060img_7021.jpeg\",\"4574316921img_7022.jpeg\",\"3447783692img_7023.jpeg\",\"1356181373img_7026.jpeg\",\"11276224724img_7024.jpeg\",\"11599400015img_7020.jpeg\",\"13660622746img_7025.jpeg\",\"9824382587img_7039.jpeg\"]', '699', '1200', 1),
(4385, 165, 21, 18, '[\"9126710060img_7021.jpeg\",\"4574316921img_7022.jpeg\",\"3447783692img_7023.jpeg\",\"1356181373img_7026.jpeg\",\"11276224724img_7024.jpeg\",\"11599400015img_7020.jpeg\",\"13660622746img_7025.jpeg\",\"9824382587img_7039.jpeg\"]', '699', '1200', 1),
(4386, 165, 21, 18, '[\"9126710060img_7021.jpeg\",\"4574316921img_7022.jpeg\",\"3447783692img_7023.jpeg\",\"1356181373img_7026.jpeg\",\"11276224724img_7024.jpeg\",\"11599400015img_7020.jpeg\",\"13660622746img_7025.jpeg\",\"9824382587img_7039.jpeg\"]', '699', '1200', 1),
(4387, 165, 21, 18, '[\"9126710060img_7021.jpeg\",\"4574316921img_7022.jpeg\",\"3447783692img_7023.jpeg\",\"1356181373img_7026.jpeg\",\"11276224724img_7024.jpeg\",\"11599400015img_7020.jpeg\",\"13660622746img_7025.jpeg\",\"9824382587img_7039.jpeg\"]', '699', '1200', 1),
(4388, 165, 21, 18, '[\"9126710060img_7021.jpeg\",\"4574316921img_7022.jpeg\",\"3447783692img_7023.jpeg\",\"1356181373img_7026.jpeg\",\"11276224724img_7024.jpeg\",\"11599400015img_7020.jpeg\",\"13660622746img_7025.jpeg\",\"9824382587img_7039.jpeg\"]', '699', '1200', 1),
(4389, 165, 21, 18, '[\"9126710060img_7021.jpeg\",\"4574316921img_7022.jpeg\",\"3447783692img_7023.jpeg\",\"1356181373img_7026.jpeg\",\"11276224724img_7024.jpeg\",\"11599400015img_7020.jpeg\",\"13660622746img_7025.jpeg\",\"9824382587img_7039.jpeg\"]', '699', '1200', 1),
(4390, 165, 21, 18, '[\"9126710060img_7021.jpeg\",\"4574316921img_7022.jpeg\",\"3447783692img_7023.jpeg\",\"1356181373img_7026.jpeg\",\"11276224724img_7024.jpeg\",\"11599400015img_7020.jpeg\",\"13660622746img_7025.jpeg\",\"9824382587img_7039.jpeg\"]', '699', '1200', 1),
(4391, 165, 21, 18, '[\"9126710060img_7021.jpeg\",\"4574316921img_7022.jpeg\",\"3447783692img_7023.jpeg\",\"1356181373img_7026.jpeg\",\"11276224724img_7024.jpeg\",\"11599400015img_7020.jpeg\",\"13660622746img_7025.jpeg\",\"9824382587img_7039.jpeg\"]', '699', '1200', 1),
(4392, 165, 22, 18, '[\"9126710060img_7021.jpeg\",\"4574316921img_7022.jpeg\",\"3447783692img_7023.jpeg\",\"1356181373img_7026.jpeg\",\"11276224724img_7024.jpeg\",\"11599400015img_7020.jpeg\",\"13660622746img_7025.jpeg\",\"9824382587img_7039.jpeg\"]', '699', '1200', 1),
(4393, 165, 22, 18, '[\"9126710060img_7021.jpeg\",\"4574316921img_7022.jpeg\",\"3447783692img_7023.jpeg\",\"1356181373img_7026.jpeg\",\"11276224724img_7024.jpeg\",\"11599400015img_7020.jpeg\",\"13660622746img_7025.jpeg\",\"9824382587img_7039.jpeg\"]', '699', '1200', 1),
(4394, 165, 22, 18, '[\"9126710060img_7021.jpeg\",\"4574316921img_7022.jpeg\",\"3447783692img_7023.jpeg\",\"1356181373img_7026.jpeg\",\"11276224724img_7024.jpeg\",\"11599400015img_7020.jpeg\",\"13660622746img_7025.jpeg\",\"9824382587img_7039.jpeg\"]', '699', '1200', 1),
(4395, 165, 22, 18, '[\"9126710060img_7021.jpeg\",\"4574316921img_7022.jpeg\",\"3447783692img_7023.jpeg\",\"1356181373img_7026.jpeg\",\"11276224724img_7024.jpeg\",\"11599400015img_7020.jpeg\",\"13660622746img_7025.jpeg\",\"9824382587img_7039.jpeg\"]', '699', '1200', 1),
(4396, 165, 22, 18, '[\"9126710060img_7021.jpeg\",\"4574316921img_7022.jpeg\",\"3447783692img_7023.jpeg\",\"1356181373img_7026.jpeg\",\"11276224724img_7024.jpeg\",\"11599400015img_7020.jpeg\",\"13660622746img_7025.jpeg\",\"9824382587img_7039.jpeg\"]', '699', '1200', 1),
(4397, 165, 22, 18, '[\"9126710060img_7021.jpeg\",\"4574316921img_7022.jpeg\",\"3447783692img_7023.jpeg\",\"1356181373img_7026.jpeg\",\"11276224724img_7024.jpeg\",\"11599400015img_7020.jpeg\",\"13660622746img_7025.jpeg\",\"9824382587img_7039.jpeg\"]', '699', '1200', 1),
(4398, 165, 22, 18, '[\"9126710060img_7021.jpeg\",\"4574316921img_7022.jpeg\",\"3447783692img_7023.jpeg\",\"1356181373img_7026.jpeg\",\"11276224724img_7024.jpeg\",\"11599400015img_7020.jpeg\",\"13660622746img_7025.jpeg\",\"9824382587img_7039.jpeg\"]', '699', '1200', 1),
(4399, 165, 22, 18, '[\"9126710060img_7021.jpeg\",\"4574316921img_7022.jpeg\",\"3447783692img_7023.jpeg\",\"1356181373img_7026.jpeg\",\"11276224724img_7024.jpeg\",\"11599400015img_7020.jpeg\",\"13660622746img_7025.jpeg\",\"9824382587img_7039.jpeg\"]', '699', '1200', 1),
(4658, 167, 11, 4, '[\"10601427710img-20240612-wa0015.jpg\",\"12961274191img-20240612-wa0012.jpg\",\"1731179012img-20240612-wa0039.jpg\",\"2689501793img-20240612-wa0041.jpg\"]', '1125', '1999', 2),
(4659, 167, 11, 4, '[\"10601427710img-20240612-wa0015.jpg\",\"12961274191img-20240612-wa0012.jpg\",\"1731179012img-20240612-wa0039.jpg\",\"2689501793img-20240612-wa0041.jpg\"]', '1125', '1999', 2),
(4660, 167, 11, 4, '[\"10601427710img-20240612-wa0015.jpg\",\"12961274191img-20240612-wa0012.jpg\",\"1731179012img-20240612-wa0039.jpg\",\"2689501793img-20240612-wa0041.jpg\"]', '1125', '1999', 2),
(4661, 167, 11, 4, '[\"10601427710img-20240612-wa0015.jpg\",\"12961274191img-20240612-wa0012.jpg\",\"1731179012img-20240612-wa0039.jpg\",\"2689501793img-20240612-wa0041.jpg\"]', '1125', '1999', 2),
(4662, 167, 23, 4, '[\"10601427710img-20240612-wa0015.jpg\",\"12961274191img-20240612-wa0012.jpg\",\"1731179012img-20240612-wa0039.jpg\",\"2689501793img-20240612-wa0041.jpg\"]', '1125', '1999', 2),
(4663, 167, 23, 4, '[\"10601427710img-20240612-wa0015.jpg\",\"12961274191img-20240612-wa0012.jpg\",\"1731179012img-20240612-wa0039.jpg\",\"2689501793img-20240612-wa0041.jpg\"]', '1125', '1999', 2),
(4664, 167, 23, 4, '[\"10601427710img-20240612-wa0015.jpg\",\"12961274191img-20240612-wa0012.jpg\",\"1731179012img-20240612-wa0039.jpg\",\"2689501793img-20240612-wa0041.jpg\"]', '1125', '1999', 2),
(4665, 167, 23, 4, '[\"10601427710img-20240612-wa0015.jpg\",\"12961274191img-20240612-wa0012.jpg\",\"1731179012img-20240612-wa0039.jpg\",\"2689501793img-20240612-wa0041.jpg\"]', '1125', '1999', 2),
(4666, 167, 21, 8, '[\"160586939901000129910.jpg\",\"99711843311000129916.jpg\",\"210791535421000129907.jpg\"]', '1125', '1999', 2),
(4667, 167, 21, 8, '[\"160586939901000129910.jpg\",\"99711843311000129916.jpg\",\"210791535421000129907.jpg\"]', '1125', '1999', 2),
(4668, 167, 21, 8, '[\"160586939901000129910.jpg\",\"99711843311000129916.jpg\",\"210791535421000129907.jpg\"]', '1125', '1999', 2),
(4669, 167, 22, 8, '[\"160586939901000129910.jpg\",\"99711843311000129916.jpg\",\"210791535421000129907.jpg\"]', '1125', '1999', 2),
(4670, 167, 22, 8, '[\"160586939901000129910.jpg\",\"99711843311000129916.jpg\",\"210791535421000129907.jpg\"]', '1125', '1999', 2),
(4671, 167, 22, 8, '[\"160586939901000129910.jpg\",\"99711843311000129916.jpg\",\"210791535421000129907.jpg\"]', '1125', '1999', 2),
(4672, 167, 21, 11, '[\"177861499701000129886.jpg\",\"197737367311000129928.jpg\",\"142887497121000129925.jpg\",\"144757255631000129883.jpg\"]', '1125', '1999', 2),
(4673, 167, 21, 11, '[\"177861499701000129886.jpg\",\"197737367311000129928.jpg\",\"142887497121000129925.jpg\",\"144757255631000129883.jpg\"]', '1125', '1999', 2),
(4674, 167, 21, 11, '[\"177861499701000129886.jpg\",\"197737367311000129928.jpg\",\"142887497121000129925.jpg\",\"144757255631000129883.jpg\"]', '1125', '1999', 2),
(4675, 167, 21, 11, '[\"177861499701000129886.jpg\",\"197737367311000129928.jpg\",\"142887497121000129925.jpg\",\"144757255631000129883.jpg\"]', '1125', '1999', 2),
(4676, 167, 23, 11, '[\"177861499701000129886.jpg\",\"197737367311000129928.jpg\",\"142887497121000129925.jpg\",\"144757255631000129883.jpg\"]', '1125', '1999', 2),
(4677, 167, 23, 11, '[\"177861499701000129886.jpg\",\"197737367311000129928.jpg\",\"142887497121000129925.jpg\",\"144757255631000129883.jpg\"]', '1125', '1999', 2),
(4678, 167, 23, 11, '[\"177861499701000129886.jpg\",\"197737367311000129928.jpg\",\"142887497121000129925.jpg\",\"144757255631000129883.jpg\"]', '1125', '1999', 2),
(4679, 167, 23, 11, '[\"177861499701000129886.jpg\",\"197737367311000129928.jpg\",\"142887497121000129925.jpg\",\"144757255631000129883.jpg\"]', '1125', '1999', 2),
(4680, 167, 21, 17, '[\"14924510430img-20240612-wa0025.jpg\",\"175483252511000129895.jpg\",\"105912903721000129904.jpg\",\"4597408043img-20240612-wa0027.jpg\"]', '1125', '1999', 2),
(4681, 167, 21, 17, '[\"14924510430img-20240612-wa0025.jpg\",\"175483252511000129895.jpg\",\"105912903721000129904.jpg\",\"4597408043img-20240612-wa0027.jpg\"]', '1125', '1999', 2),
(4682, 167, 21, 17, '[\"14924510430img-20240612-wa0025.jpg\",\"175483252511000129895.jpg\",\"105912903721000129904.jpg\",\"4597408043img-20240612-wa0027.jpg\"]', '1125', '1999', 2),
(4683, 167, 21, 17, '[\"14924510430img-20240612-wa0025.jpg\",\"175483252511000129895.jpg\",\"105912903721000129904.jpg\",\"4597408043img-20240612-wa0027.jpg\"]', '1125', '1999', 2),
(4684, 167, 22, 17, '[\"14924510430img-20240612-wa0025.jpg\",\"175483252511000129895.jpg\",\"105912903721000129904.jpg\",\"4597408043img-20240612-wa0027.jpg\"]', '1125', '1999', 2),
(4685, 167, 22, 17, '[\"14924510430img-20240612-wa0025.jpg\",\"175483252511000129895.jpg\",\"105912903721000129904.jpg\",\"4597408043img-20240612-wa0027.jpg\"]', '1125', '1999', 2),
(4686, 167, 22, 17, '[\"14924510430img-20240612-wa0025.jpg\",\"175483252511000129895.jpg\",\"105912903721000129904.jpg\",\"4597408043img-20240612-wa0027.jpg\"]', '1125', '1999', 2),
(4687, 167, 22, 17, '[\"14924510430img-20240612-wa0025.jpg\",\"175483252511000129895.jpg\",\"105912903721000129904.jpg\",\"4597408043img-20240612-wa0027.jpg\"]', '1125', '1999', 2),
(4770, 68, 11, 4, '[\"6758895470img_3934.jpeg\"]', '199', '499', 1),
(4771, 113, 11, 20, '[\"1785480500img_4172.jpeg\",\"7546240141img_4171.jpeg\"]', '399', '700', 1),
(4772, 113, 11, 20, '[\"1785480500img_4172.jpeg\",\"7546240141img_4171.jpeg\"]', '399', '700', 1),
(4804, 126, 8, 7, '[\"6991759550img_5175.jpeg\",\"2536845611img_5153.jpeg\"]', '1249', '1500', 0),
(4805, 126, 8, 7, '[\"6991759550img_5175.jpeg\",\"2536845611img_5153.jpeg\"]', '1249', '1500', 0),
(4806, 126, 9, 7, '[\"6991759550img_5175.jpeg\",\"2536845611img_5153.jpeg\"]', '1249', '1500', 0),
(4807, 126, 9, 7, '[\"6991759550img_5175.jpeg\",\"2536845611img_5153.jpeg\"]', '1249', '1500', 0),
(4808, 126, 11, 7, '[\"6991759550img_5175.jpeg\",\"2536845611img_5153.jpeg\"]', '1249', '1500', 0),
(4809, 126, 11, 7, '[\"6991759550img_5175.jpeg\",\"2536845611img_5153.jpeg\"]', '1249', '1500', 0),
(5189, 151, 9, 3, '[\"21319019950img_5968.jpeg\",\"3825098201img_5965.jpeg\",\"17150959192img_5966.jpeg\",\"3530228623img_5967.jpeg\",\"4812577614img_5991.jpeg\",\"12469198495img_5990.jpeg\"]', '949', '1700', 0),
(5190, 151, 9, 3, '[\"21319019950img_5968.jpeg\",\"3825098201img_5965.jpeg\",\"17150959192img_5966.jpeg\",\"3530228623img_5967.jpeg\",\"4812577614img_5991.jpeg\",\"12469198495img_5990.jpeg\"]', '949', '1700', 0),
(5191, 151, 9, 3, '[\"21319019950img_5968.jpeg\",\"3825098201img_5965.jpeg\",\"17150959192img_5966.jpeg\",\"3530228623img_5967.jpeg\",\"4812577614img_5991.jpeg\",\"12469198495img_5990.jpeg\"]', '949', '1700', 0),
(5192, 151, 9, 3, '[\"21319019950img_5968.jpeg\",\"3825098201img_5965.jpeg\",\"17150959192img_5966.jpeg\",\"3530228623img_5967.jpeg\",\"4812577614img_5991.jpeg\",\"12469198495img_5990.jpeg\"]', '949', '1700', 0),
(5193, 151, 9, 3, '[\"21319019950img_5968.jpeg\",\"3825098201img_5965.jpeg\",\"17150959192img_5966.jpeg\",\"3530228623img_5967.jpeg\",\"4812577614img_5991.jpeg\",\"12469198495img_5990.jpeg\"]', '949', '1700', 0),
(5194, 151, 9, 3, '[\"21319019950img_5968.jpeg\",\"3825098201img_5965.jpeg\",\"17150959192img_5966.jpeg\",\"3530228623img_5967.jpeg\",\"4812577614img_5991.jpeg\",\"12469198495img_5990.jpeg\"]', '949', '1700', 0),
(5195, 151, 11, 23, '[\"21319019950img_5968.jpeg\",\"3825098201img_5965.jpeg\",\"17150959192img_5966.jpeg\",\"3530228623img_5967.jpeg\",\"4812577614img_5991.jpeg\",\"12469198495img_5990.jpeg\"]', '949', '1700', 0),
(5196, 151, 11, 23, '[\"21319019950img_5968.jpeg\",\"3825098201img_5965.jpeg\",\"17150959192img_5966.jpeg\",\"3530228623img_5967.jpeg\",\"4812577614img_5991.jpeg\",\"12469198495img_5990.jpeg\"]', '949', '1700', 0),
(5197, 151, 11, 23, '[\"21319019950img_5968.jpeg\",\"3825098201img_5965.jpeg\",\"17150959192img_5966.jpeg\",\"3530228623img_5967.jpeg\",\"4812577614img_5991.jpeg\",\"12469198495img_5990.jpeg\"]', '949', '1700', 0),
(5198, 151, 11, 23, '[\"21319019950img_5968.jpeg\",\"3825098201img_5965.jpeg\",\"17150959192img_5966.jpeg\",\"3530228623img_5967.jpeg\",\"4812577614img_5991.jpeg\",\"12469198495img_5990.jpeg\"]', '949', '1700', 0),
(5199, 151, 11, 23, '[\"21319019950img_5968.jpeg\",\"3825098201img_5965.jpeg\",\"17150959192img_5966.jpeg\",\"3530228623img_5967.jpeg\",\"4812577614img_5991.jpeg\",\"12469198495img_5990.jpeg\"]', '949', '1700', 0),
(5200, 151, 11, 23, '[\"21319019950img_5968.jpeg\",\"3825098201img_5965.jpeg\",\"17150959192img_5966.jpeg\",\"3530228623img_5967.jpeg\",\"4812577614img_5991.jpeg\",\"12469198495img_5990.jpeg\"]', '949', '1700', 0),
(5201, 151, 21, 23, '[\"21319019950img_5968.jpeg\",\"3825098201img_5965.jpeg\",\"17150959192img_5966.jpeg\",\"3530228623img_5967.jpeg\",\"4812577614img_5991.jpeg\",\"12469198495img_5990.jpeg\"]', '949', '1700', 0),
(5202, 151, 21, 23, '[\"21319019950img_5968.jpeg\",\"3825098201img_5965.jpeg\",\"17150959192img_5966.jpeg\",\"3530228623img_5967.jpeg\",\"4812577614img_5991.jpeg\",\"12469198495img_5990.jpeg\"]', '949', '1700', 0),
(5203, 151, 21, 23, '[\"21319019950img_5968.jpeg\",\"3825098201img_5965.jpeg\",\"17150959192img_5966.jpeg\",\"3530228623img_5967.jpeg\",\"4812577614img_5991.jpeg\",\"12469198495img_5990.jpeg\"]', '949', '1700', 0),
(5204, 151, 21, 23, '[\"21319019950img_5968.jpeg\",\"3825098201img_5965.jpeg\",\"17150959192img_5966.jpeg\",\"3530228623img_5967.jpeg\",\"4812577614img_5991.jpeg\",\"12469198495img_5990.jpeg\"]', '949', '1700', 0),
(5205, 151, 21, 23, '[\"21319019950img_5968.jpeg\",\"3825098201img_5965.jpeg\",\"17150959192img_5966.jpeg\",\"3530228623img_5967.jpeg\",\"4812577614img_5991.jpeg\",\"12469198495img_5990.jpeg\"]', '949', '1700', 0),
(5206, 151, 21, 23, '[\"21319019950img_5968.jpeg\",\"3825098201img_5965.jpeg\",\"17150959192img_5966.jpeg\",\"3530228623img_5967.jpeg\",\"4812577614img_5991.jpeg\",\"12469198495img_5990.jpeg\"]', '949', '1700', 0),
(5207, 151, 22, 23, '[\"21319019950img_5968.jpeg\",\"3825098201img_5965.jpeg\",\"17150959192img_5966.jpeg\",\"3530228623img_5967.jpeg\",\"4812577614img_5991.jpeg\",\"12469198495img_5990.jpeg\"]', '949', '1700', 0),
(5208, 151, 22, 23, '[\"21319019950img_5968.jpeg\",\"3825098201img_5965.jpeg\",\"17150959192img_5966.jpeg\",\"3530228623img_5967.jpeg\",\"4812577614img_5991.jpeg\",\"12469198495img_5990.jpeg\"]', '949', '1700', 0),
(5209, 151, 22, 23, '[\"21319019950img_5968.jpeg\",\"3825098201img_5965.jpeg\",\"17150959192img_5966.jpeg\",\"3530228623img_5967.jpeg\",\"4812577614img_5991.jpeg\",\"12469198495img_5990.jpeg\"]', '949', '1700', 0),
(5210, 151, 22, 23, '[\"21319019950img_5968.jpeg\",\"3825098201img_5965.jpeg\",\"17150959192img_5966.jpeg\",\"3530228623img_5967.jpeg\",\"4812577614img_5991.jpeg\",\"12469198495img_5990.jpeg\"]', '949', '1700', 0),
(5211, 151, 22, 23, '[\"21319019950img_5968.jpeg\",\"3825098201img_5965.jpeg\",\"17150959192img_5966.jpeg\",\"3530228623img_5967.jpeg\",\"4812577614img_5991.jpeg\",\"12469198495img_5990.jpeg\"]', '949', '1700', 0),
(5212, 151, 22, 23, '[\"21319019950img_5968.jpeg\",\"3825098201img_5965.jpeg\",\"17150959192img_5966.jpeg\",\"3530228623img_5967.jpeg\",\"4812577614img_5991.jpeg\",\"12469198495img_5990.jpeg\"]', '949', '1700', 0),
(5213, 150, 9, 23, '[\"844963670img_5986.jpeg\",\"8718980041img_5964.jpeg\",\"8626999892img_5962.jpeg\",\"18597483913img_5963.jpeg\",\"16501834724img_5961.jpeg\",\"9078365015img_5960.jpeg\"]', '949', '1700', 0),
(5214, 150, 9, 23, '[\"844963670img_5986.jpeg\",\"8718980041img_5964.jpeg\",\"8626999892img_5962.jpeg\",\"18597483913img_5963.jpeg\",\"16501834724img_5961.jpeg\",\"9078365015img_5960.jpeg\"]', '949', '1700', 0),
(5215, 150, 9, 23, '[\"844963670img_5986.jpeg\",\"8718980041img_5964.jpeg\",\"8626999892img_5962.jpeg\",\"18597483913img_5963.jpeg\",\"16501834724img_5961.jpeg\",\"9078365015img_5960.jpeg\"]', '949', '1700', 0),
(5216, 150, 9, 23, '[\"844963670img_5986.jpeg\",\"8718980041img_5964.jpeg\",\"8626999892img_5962.jpeg\",\"18597483913img_5963.jpeg\",\"16501834724img_5961.jpeg\",\"9078365015img_5960.jpeg\"]', '949', '1700', 0),
(5217, 150, 9, 23, '[\"844963670img_5986.jpeg\",\"8718980041img_5964.jpeg\",\"8626999892img_5962.jpeg\",\"18597483913img_5963.jpeg\",\"16501834724img_5961.jpeg\",\"9078365015img_5960.jpeg\"]', '949', '1700', 0),
(5218, 150, 9, 23, '[\"844963670img_5986.jpeg\",\"8718980041img_5964.jpeg\",\"8626999892img_5962.jpeg\",\"18597483913img_5963.jpeg\",\"16501834724img_5961.jpeg\",\"9078365015img_5960.jpeg\"]', '949', '1700', 0);
INSERT INTO `all_images` (`id`, `p_id`, `size_id`, `color_id`, `image`, `price`, `cut_price`, `stock`) VALUES
(5219, 150, 11, 4, '[\"844963670img_5986.jpeg\",\"8718980041img_5964.jpeg\",\"8626999892img_5962.jpeg\",\"18597483913img_5963.jpeg\",\"16501834724img_5961.jpeg\",\"9078365015img_5960.jpeg\"]', '949', '1700', 0),
(5220, 150, 11, 4, '[\"844963670img_5986.jpeg\",\"8718980041img_5964.jpeg\",\"8626999892img_5962.jpeg\",\"18597483913img_5963.jpeg\",\"16501834724img_5961.jpeg\",\"9078365015img_5960.jpeg\"]', '949', '1700', 0),
(5221, 150, 11, 4, '[\"844963670img_5986.jpeg\",\"8718980041img_5964.jpeg\",\"8626999892img_5962.jpeg\",\"18597483913img_5963.jpeg\",\"16501834724img_5961.jpeg\",\"9078365015img_5960.jpeg\"]', '949', '1700', 0),
(5222, 150, 11, 4, '[\"844963670img_5986.jpeg\",\"8718980041img_5964.jpeg\",\"8626999892img_5962.jpeg\",\"18597483913img_5963.jpeg\",\"16501834724img_5961.jpeg\",\"9078365015img_5960.jpeg\"]', '949', '1700', 0),
(5223, 150, 11, 4, '[\"844963670img_5986.jpeg\",\"8718980041img_5964.jpeg\",\"8626999892img_5962.jpeg\",\"18597483913img_5963.jpeg\",\"16501834724img_5961.jpeg\",\"9078365015img_5960.jpeg\"]', '949', '1700', 0),
(5224, 150, 11, 4, '[\"844963670img_5986.jpeg\",\"8718980041img_5964.jpeg\",\"8626999892img_5962.jpeg\",\"18597483913img_5963.jpeg\",\"16501834724img_5961.jpeg\",\"9078365015img_5960.jpeg\"]', '949', '1700', 0),
(5225, 150, 21, 4, '[\"844963670img_5986.jpeg\",\"8718980041img_5964.jpeg\",\"8626999892img_5962.jpeg\",\"18597483913img_5963.jpeg\",\"16501834724img_5961.jpeg\",\"9078365015img_5960.jpeg\"]', '949', '1700', 0),
(5226, 150, 21, 4, '[\"844963670img_5986.jpeg\",\"8718980041img_5964.jpeg\",\"8626999892img_5962.jpeg\",\"18597483913img_5963.jpeg\",\"16501834724img_5961.jpeg\",\"9078365015img_5960.jpeg\"]', '949', '1700', 0),
(5227, 150, 21, 4, '[\"844963670img_5986.jpeg\",\"8718980041img_5964.jpeg\",\"8626999892img_5962.jpeg\",\"18597483913img_5963.jpeg\",\"16501834724img_5961.jpeg\",\"9078365015img_5960.jpeg\"]', '949', '1700', 0),
(5228, 150, 21, 4, '[\"844963670img_5986.jpeg\",\"8718980041img_5964.jpeg\",\"8626999892img_5962.jpeg\",\"18597483913img_5963.jpeg\",\"16501834724img_5961.jpeg\",\"9078365015img_5960.jpeg\"]', '949', '1700', 0),
(5229, 150, 21, 4, '[\"844963670img_5986.jpeg\",\"8718980041img_5964.jpeg\",\"8626999892img_5962.jpeg\",\"18597483913img_5963.jpeg\",\"16501834724img_5961.jpeg\",\"9078365015img_5960.jpeg\"]', '949', '1700', 0),
(5230, 150, 21, 4, '[\"844963670img_5986.jpeg\",\"8718980041img_5964.jpeg\",\"8626999892img_5962.jpeg\",\"18597483913img_5963.jpeg\",\"16501834724img_5961.jpeg\",\"9078365015img_5960.jpeg\"]', '949', '1700', 0),
(5231, 150, 22, 4, '[\"844963670img_5986.jpeg\",\"8718980041img_5964.jpeg\",\"8626999892img_5962.jpeg\",\"18597483913img_5963.jpeg\",\"16501834724img_5961.jpeg\",\"9078365015img_5960.jpeg\"]', '949', '1700', 0),
(5232, 150, 22, 4, '[\"844963670img_5986.jpeg\",\"8718980041img_5964.jpeg\",\"8626999892img_5962.jpeg\",\"18597483913img_5963.jpeg\",\"16501834724img_5961.jpeg\",\"9078365015img_5960.jpeg\"]', '949', '1700', 0),
(5233, 150, 22, 4, '[\"844963670img_5986.jpeg\",\"8718980041img_5964.jpeg\",\"8626999892img_5962.jpeg\",\"18597483913img_5963.jpeg\",\"16501834724img_5961.jpeg\",\"9078365015img_5960.jpeg\"]', '949', '1700', 0),
(5234, 150, 22, 4, '[\"844963670img_5986.jpeg\",\"8718980041img_5964.jpeg\",\"8626999892img_5962.jpeg\",\"18597483913img_5963.jpeg\",\"16501834724img_5961.jpeg\",\"9078365015img_5960.jpeg\"]', '949', '1700', 0),
(5235, 150, 22, 4, '[\"844963670img_5986.jpeg\",\"8718980041img_5964.jpeg\",\"8626999892img_5962.jpeg\",\"18597483913img_5963.jpeg\",\"16501834724img_5961.jpeg\",\"9078365015img_5960.jpeg\"]', '949', '1700', 0),
(5236, 150, 22, 4, '[\"844963670img_5986.jpeg\",\"8718980041img_5964.jpeg\",\"8626999892img_5962.jpeg\",\"18597483913img_5963.jpeg\",\"16501834724img_5961.jpeg\",\"9078365015img_5960.jpeg\"]', '949', '1700', 0),
(5257, 148, 9, 3, '[\"5403643530img_5969.jpeg\",\"5879520961img_5970.jpeg\",\"7263025752img_5971.jpeg\",\"19567276793img_5972.jpeg\",\"3067781084img_5973.jpeg\",\"20271435775img_5974.jpeg\"]', '849', '1500', 0),
(5258, 148, 9, 3, '[\"5403643530img_5969.jpeg\",\"5879520961img_5970.jpeg\",\"7263025752img_5971.jpeg\",\"19567276793img_5972.jpeg\",\"3067781084img_5973.jpeg\",\"20271435775img_5974.jpeg\"]', '849', '1500', 0),
(5259, 148, 9, 3, '[\"5403643530img_5969.jpeg\",\"5879520961img_5970.jpeg\",\"7263025752img_5971.jpeg\",\"19567276793img_5972.jpeg\",\"3067781084img_5973.jpeg\",\"20271435775img_5974.jpeg\"]', '849', '1500', 0),
(5260, 148, 9, 3, '[\"5403643530img_5969.jpeg\",\"5879520961img_5970.jpeg\",\"7263025752img_5971.jpeg\",\"19567276793img_5972.jpeg\",\"3067781084img_5973.jpeg\",\"20271435775img_5974.jpeg\"]', '849', '1500', 0),
(5261, 148, 9, 3, '[\"5403643530img_5969.jpeg\",\"5879520961img_5970.jpeg\",\"7263025752img_5971.jpeg\",\"19567276793img_5972.jpeg\",\"3067781084img_5973.jpeg\",\"20271435775img_5974.jpeg\"]', '849', '1500', 0),
(5262, 148, 9, 3, '[\"5403643530img_5969.jpeg\",\"5879520961img_5970.jpeg\",\"7263025752img_5971.jpeg\",\"19567276793img_5972.jpeg\",\"3067781084img_5973.jpeg\",\"20271435775img_5974.jpeg\"]', '849', '1500', 0),
(5263, 148, 11, 12, '[\"5403643530img_5969.jpeg\",\"5879520961img_5970.jpeg\",\"7263025752img_5971.jpeg\",\"19567276793img_5972.jpeg\",\"3067781084img_5973.jpeg\",\"20271435775img_5974.jpeg\"]', '849', '1500', 0),
(5264, 148, 11, 12, '[\"5403643530img_5969.jpeg\",\"5879520961img_5970.jpeg\",\"7263025752img_5971.jpeg\",\"19567276793img_5972.jpeg\",\"3067781084img_5973.jpeg\",\"20271435775img_5974.jpeg\"]', '849', '1500', 0),
(5265, 148, 11, 12, '[\"5403643530img_5969.jpeg\",\"5879520961img_5970.jpeg\",\"7263025752img_5971.jpeg\",\"19567276793img_5972.jpeg\",\"3067781084img_5973.jpeg\",\"20271435775img_5974.jpeg\"]', '849', '1500', 0),
(5266, 148, 11, 12, '[\"5403643530img_5969.jpeg\",\"5879520961img_5970.jpeg\",\"7263025752img_5971.jpeg\",\"19567276793img_5972.jpeg\",\"3067781084img_5973.jpeg\",\"20271435775img_5974.jpeg\"]', '849', '1500', 0),
(5267, 148, 11, 12, '[\"5403643530img_5969.jpeg\",\"5879520961img_5970.jpeg\",\"7263025752img_5971.jpeg\",\"19567276793img_5972.jpeg\",\"3067781084img_5973.jpeg\",\"20271435775img_5974.jpeg\"]', '849', '1500', 0),
(5268, 148, 11, 12, '[\"5403643530img_5969.jpeg\",\"5879520961img_5970.jpeg\",\"7263025752img_5971.jpeg\",\"19567276793img_5972.jpeg\",\"3067781084img_5973.jpeg\",\"20271435775img_5974.jpeg\"]', '849', '1500', 0),
(5269, 147, 9, 12, '[\"11703018790img_5953.jpeg\",\"2133046911img_5952.jpeg\",\"2759082912img_5951.jpeg\",\"495013793img_5950.jpeg\"]', '849', '1500', 0),
(5270, 147, 9, 12, '[\"11703018790img_5953.jpeg\",\"2133046911img_5952.jpeg\",\"2759082912img_5951.jpeg\",\"495013793img_5950.jpeg\"]', '849', '1500', 0),
(5271, 147, 9, 12, '[\"11703018790img_5953.jpeg\",\"2133046911img_5952.jpeg\",\"2759082912img_5951.jpeg\",\"495013793img_5950.jpeg\"]', '849', '1500', 0),
(5272, 147, 9, 12, '[\"11703018790img_5953.jpeg\",\"2133046911img_5952.jpeg\",\"2759082912img_5951.jpeg\",\"495013793img_5950.jpeg\"]', '849', '1500', 0),
(5273, 147, 11, 7, '[\"11703018790img_5953.jpeg\",\"2133046911img_5952.jpeg\",\"2759082912img_5951.jpeg\",\"495013793img_5950.jpeg\"]', '849', '1500', 0),
(5274, 147, 11, 7, '[\"11703018790img_5953.jpeg\",\"2133046911img_5952.jpeg\",\"2759082912img_5951.jpeg\",\"495013793img_5950.jpeg\"]', '849', '1500', 0),
(5275, 147, 11, 7, '[\"11703018790img_5953.jpeg\",\"2133046911img_5952.jpeg\",\"2759082912img_5951.jpeg\",\"495013793img_5950.jpeg\"]', '849', '1500', 0),
(5276, 147, 11, 7, '[\"11703018790img_5953.jpeg\",\"2133046911img_5952.jpeg\",\"2759082912img_5951.jpeg\",\"495013793img_5950.jpeg\"]', '849', '1500', 0),
(5277, 147, 21, 7, '[\"11703018790img_5953.jpeg\",\"2133046911img_5952.jpeg\",\"2759082912img_5951.jpeg\",\"495013793img_5950.jpeg\"]', '849', '1500', 0),
(5278, 147, 21, 7, '[\"11703018790img_5953.jpeg\",\"2133046911img_5952.jpeg\",\"2759082912img_5951.jpeg\",\"495013793img_5950.jpeg\"]', '849', '1500', 0),
(5279, 147, 21, 7, '[\"11703018790img_5953.jpeg\",\"2133046911img_5952.jpeg\",\"2759082912img_5951.jpeg\",\"495013793img_5950.jpeg\"]', '849', '1500', 0),
(5280, 147, 21, 7, '[\"11703018790img_5953.jpeg\",\"2133046911img_5952.jpeg\",\"2759082912img_5951.jpeg\",\"495013793img_5950.jpeg\"]', '849', '1500', 0),
(5281, 147, 22, 7, '[\"11703018790img_5953.jpeg\",\"2133046911img_5952.jpeg\",\"2759082912img_5951.jpeg\",\"495013793img_5950.jpeg\"]', '849', '1500', 0),
(5282, 147, 22, 7, '[\"11703018790img_5953.jpeg\",\"2133046911img_5952.jpeg\",\"2759082912img_5951.jpeg\",\"495013793img_5950.jpeg\"]', '849', '1500', 0),
(5283, 147, 22, 7, '[\"11703018790img_5953.jpeg\",\"2133046911img_5952.jpeg\",\"2759082912img_5951.jpeg\",\"495013793img_5950.jpeg\"]', '849', '1500', 0),
(5284, 147, 22, 7, '[\"11703018790img_5953.jpeg\",\"2133046911img_5952.jpeg\",\"2759082912img_5951.jpeg\",\"495013793img_5950.jpeg\"]', '849', '1500', 0),
(5450, 176, 11, 11, '[\"1401774960img-20240612-wa0026.jpg\",\"16409794591img-20240612-wa0032.jpg\",\"16050805532img-20240612-wa0031.jpg\",\"8173223743img-20240612-wa0028.jpg\"]', '949', '1999', 2),
(5451, 176, 11, 11, '[\"1401774960img-20240612-wa0026.jpg\",\"16409794591img-20240612-wa0032.jpg\",\"16050805532img-20240612-wa0031.jpg\",\"8173223743img-20240612-wa0028.jpg\"]', '949', '1999', 2),
(5452, 176, 11, 11, '[\"1401774960img-20240612-wa0026.jpg\",\"16409794591img-20240612-wa0032.jpg\",\"16050805532img-20240612-wa0031.jpg\",\"8173223743img-20240612-wa0028.jpg\"]', '949', '1999', 2),
(5453, 176, 11, 11, '[\"1401774960img-20240612-wa0026.jpg\",\"16409794591img-20240612-wa0032.jpg\",\"16050805532img-20240612-wa0031.jpg\",\"8173223743img-20240612-wa0028.jpg\"]', '949', '1999', 2),
(5454, 176, 23, 7, '[\"1401774960img-20240612-wa0026.jpg\",\"16409794591img-20240612-wa0032.jpg\",\"16050805532img-20240612-wa0031.jpg\",\"8173223743img-20240612-wa0028.jpg\"]', '949', '1999', 2),
(5455, 176, 23, 7, '[\"1401774960img-20240612-wa0026.jpg\",\"16409794591img-20240612-wa0032.jpg\",\"16050805532img-20240612-wa0031.jpg\",\"8173223743img-20240612-wa0028.jpg\"]', '949', '1999', 2),
(5456, 176, 23, 7, '[\"1401774960img-20240612-wa0026.jpg\",\"16409794591img-20240612-wa0032.jpg\",\"16050805532img-20240612-wa0031.jpg\",\"8173223743img-20240612-wa0028.jpg\"]', '949', '1999', 2),
(5457, 176, 23, 7, '[\"1401774960img-20240612-wa0026.jpg\",\"16409794591img-20240612-wa0032.jpg\",\"16050805532img-20240612-wa0031.jpg\",\"8173223743img-20240612-wa0028.jpg\"]', '949', '1999', 2),
(5458, 174, 11, 7, '[\"190230261501000129787.jpg\",\"129106052711000129790.jpg\",\"147241207021000129868.jpg\"]', '945', '1999', 2),
(5459, 174, 11, 7, '[\"190230261501000129787.jpg\",\"129106052711000129790.jpg\",\"147241207021000129868.jpg\"]', '945', '1999', 2),
(5460, 174, 11, 7, '[\"190230261501000129787.jpg\",\"129106052711000129790.jpg\",\"147241207021000129868.jpg\"]', '945', '1999', 2),
(5461, 174, 23, 2, '[\"190230261501000129787.jpg\",\"129106052711000129790.jpg\",\"147241207021000129868.jpg\"]', '945', '1999', 2),
(5462, 174, 23, 2, '[\"190230261501000129787.jpg\",\"129106052711000129790.jpg\",\"147241207021000129868.jpg\"]', '945', '1999', 2),
(5463, 174, 23, 2, '[\"190230261501000129787.jpg\",\"129106052711000129790.jpg\",\"147241207021000129868.jpg\"]', '945', '1999', 2),
(5464, 173, 22, 2, '[\"23751657501000130072.jpg\",\"66245138611000130059.jpg\",\"86130174521000130073.jpg\",\"107677881331000130061.jpg\"]', '945', '1999', 2),
(5465, 173, 22, 2, '[\"23751657501000130072.jpg\",\"66245138611000130059.jpg\",\"86130174521000130073.jpg\",\"107677881331000130061.jpg\"]', '945', '1999', 2),
(5466, 173, 22, 2, '[\"23751657501000130072.jpg\",\"66245138611000130059.jpg\",\"86130174521000130073.jpg\",\"107677881331000130061.jpg\"]', '945', '1999', 2),
(5467, 173, 22, 2, '[\"23751657501000130072.jpg\",\"66245138611000130059.jpg\",\"86130174521000130073.jpg\",\"107677881331000130061.jpg\"]', '945', '1999', 2),
(5468, 173, 23, 11, '[\"23751657501000130072.jpg\",\"66245138611000130059.jpg\",\"86130174521000130073.jpg\",\"107677881331000130061.jpg\"]', '945', '1999', 2),
(5469, 173, 23, 11, '[\"23751657501000130072.jpg\",\"66245138611000130059.jpg\",\"86130174521000130073.jpg\",\"107677881331000130061.jpg\"]', '945', '1999', 2),
(5470, 173, 23, 11, '[\"23751657501000130072.jpg\",\"66245138611000130059.jpg\",\"86130174521000130073.jpg\",\"107677881331000130061.jpg\"]', '945', '1999', 2),
(5471, 173, 23, 11, '[\"23751657501000130072.jpg\",\"66245138611000130059.jpg\",\"86130174521000130073.jpg\",\"107677881331000130061.jpg\"]', '945', '1999', 2),
(5472, 172, 11, 11, '[\"9642801190img-20240612-wa0051.jpg\",\"1695651331img-20240612-wa0046.jpg\",\"14687960012img-20240612-wa0049.jpg\",\"11615568603img-20240612-wa0047.jpg\",\"10593635674img-20240612-wa0052.jpg\"]', '1099', '1999', 2),
(5473, 172, 11, 11, '[\"9642801190img-20240612-wa0051.jpg\",\"1695651331img-20240612-wa0046.jpg\",\"14687960012img-20240612-wa0049.jpg\",\"11615568603img-20240612-wa0047.jpg\",\"10593635674img-20240612-wa0052.jpg\"]', '1099', '1999', 2),
(5474, 172, 11, 11, '[\"9642801190img-20240612-wa0051.jpg\",\"1695651331img-20240612-wa0046.jpg\",\"14687960012img-20240612-wa0049.jpg\",\"11615568603img-20240612-wa0047.jpg\",\"10593635674img-20240612-wa0052.jpg\"]', '1099', '1999', 2),
(5475, 172, 11, 11, '[\"9642801190img-20240612-wa0051.jpg\",\"1695651331img-20240612-wa0046.jpg\",\"14687960012img-20240612-wa0049.jpg\",\"11615568603img-20240612-wa0047.jpg\",\"10593635674img-20240612-wa0052.jpg\"]', '1099', '1999', 2),
(5476, 172, 11, 11, '[\"9642801190img-20240612-wa0051.jpg\",\"1695651331img-20240612-wa0046.jpg\",\"14687960012img-20240612-wa0049.jpg\",\"11615568603img-20240612-wa0047.jpg\",\"10593635674img-20240612-wa0052.jpg\"]', '1099', '1999', 2),
(5477, 172, 23, 17, '[\"9642801190img-20240612-wa0051.jpg\",\"1695651331img-20240612-wa0046.jpg\",\"14687960012img-20240612-wa0049.jpg\",\"11615568603img-20240612-wa0047.jpg\",\"10593635674img-20240612-wa0052.jpg\"]', '1099', '1999', 2),
(5478, 172, 23, 17, '[\"9642801190img-20240612-wa0051.jpg\",\"1695651331img-20240612-wa0046.jpg\",\"14687960012img-20240612-wa0049.jpg\",\"11615568603img-20240612-wa0047.jpg\",\"10593635674img-20240612-wa0052.jpg\"]', '1099', '1999', 2),
(5479, 172, 23, 17, '[\"9642801190img-20240612-wa0051.jpg\",\"1695651331img-20240612-wa0046.jpg\",\"14687960012img-20240612-wa0049.jpg\",\"11615568603img-20240612-wa0047.jpg\",\"10593635674img-20240612-wa0052.jpg\"]', '1099', '1999', 2),
(5480, 172, 23, 17, '[\"9642801190img-20240612-wa0051.jpg\",\"1695651331img-20240612-wa0046.jpg\",\"14687960012img-20240612-wa0049.jpg\",\"11615568603img-20240612-wa0047.jpg\",\"10593635674img-20240612-wa0052.jpg\"]', '1099', '1999', 2),
(5481, 172, 23, 17, '[\"9642801190img-20240612-wa0051.jpg\",\"1695651331img-20240612-wa0046.jpg\",\"14687960012img-20240612-wa0049.jpg\",\"11615568603img-20240612-wa0047.jpg\",\"10593635674img-20240612-wa0052.jpg\"]', '1099', '1999', 2),
(5482, 171, 21, 17, '[\"5829885660img-20240612-wa0029.jpg\",\"18401134231img-20240612-wa0025.jpg\",\"4998683312img-20240612-wa0027.jpg\"]', '1099', '1999', 2),
(5483, 171, 21, 17, '[\"5829885660img-20240612-wa0029.jpg\",\"18401134231img-20240612-wa0025.jpg\",\"4998683312img-20240612-wa0027.jpg\"]', '1099', '1999', 2),
(5484, 171, 21, 17, '[\"5829885660img-20240612-wa0029.jpg\",\"18401134231img-20240612-wa0025.jpg\",\"4998683312img-20240612-wa0027.jpg\"]', '1099', '1999', 2),
(5485, 171, 22, 1, '[\"5829885660img-20240612-wa0029.jpg\",\"18401134231img-20240612-wa0025.jpg\",\"4998683312img-20240612-wa0027.jpg\"]', '1099', '1999', 2),
(5486, 171, 22, 1, '[\"5829885660img-20240612-wa0029.jpg\",\"18401134231img-20240612-wa0025.jpg\",\"4998683312img-20240612-wa0027.jpg\"]', '1099', '1999', 2),
(5487, 171, 22, 1, '[\"5829885660img-20240612-wa0029.jpg\",\"18401134231img-20240612-wa0025.jpg\",\"4998683312img-20240612-wa0027.jpg\"]', '1099', '1999', 2),
(5488, 170, 21, 1, '[\"16222715750img-20240612-wa0009.jpg\",\"198974404211000129907.jpg\",\"13938277252img-20240612-wa0018.jpg\",\"17640195233img-20240612-wa0013.jpg\",\"141948515141000129916.jpg\"]', '1099', '1999', 2),
(5489, 170, 21, 1, '[\"16222715750img-20240612-wa0009.jpg\",\"198974404211000129907.jpg\",\"13938277252img-20240612-wa0018.jpg\",\"17640195233img-20240612-wa0013.jpg\",\"141948515141000129916.jpg\"]', '1099', '1999', 2),
(5490, 170, 21, 1, '[\"16222715750img-20240612-wa0009.jpg\",\"198974404211000129907.jpg\",\"13938277252img-20240612-wa0018.jpg\",\"17640195233img-20240612-wa0013.jpg\",\"141948515141000129916.jpg\"]', '1099', '1999', 2),
(5491, 170, 21, 1, '[\"16222715750img-20240612-wa0009.jpg\",\"198974404211000129907.jpg\",\"13938277252img-20240612-wa0018.jpg\",\"17640195233img-20240612-wa0013.jpg\",\"141948515141000129916.jpg\"]', '1099', '1999', 2),
(5492, 170, 21, 1, '[\"16222715750img-20240612-wa0009.jpg\",\"198974404211000129907.jpg\",\"13938277252img-20240612-wa0018.jpg\",\"17640195233img-20240612-wa0013.jpg\",\"141948515141000129916.jpg\"]', '1099', '1999', 2),
(5493, 170, 22, 4, '[\"16222715750img-20240612-wa0009.jpg\",\"198974404211000129907.jpg\",\"13938277252img-20240612-wa0018.jpg\",\"17640195233img-20240612-wa0013.jpg\",\"141948515141000129916.jpg\"]', '1099', '1999', 2),
(5494, 170, 22, 4, '[\"16222715750img-20240612-wa0009.jpg\",\"198974404211000129907.jpg\",\"13938277252img-20240612-wa0018.jpg\",\"17640195233img-20240612-wa0013.jpg\",\"141948515141000129916.jpg\"]', '1099', '1999', 2),
(5495, 170, 22, 4, '[\"16222715750img-20240612-wa0009.jpg\",\"198974404211000129907.jpg\",\"13938277252img-20240612-wa0018.jpg\",\"17640195233img-20240612-wa0013.jpg\",\"141948515141000129916.jpg\"]', '1099', '1999', 2),
(5496, 170, 22, 4, '[\"16222715750img-20240612-wa0009.jpg\",\"198974404211000129907.jpg\",\"13938277252img-20240612-wa0018.jpg\",\"17640195233img-20240612-wa0013.jpg\",\"141948515141000129916.jpg\"]', '1099', '1999', 2),
(5497, 170, 22, 4, '[\"16222715750img-20240612-wa0009.jpg\",\"198974404211000129907.jpg\",\"13938277252img-20240612-wa0018.jpg\",\"17640195233img-20240612-wa0013.jpg\",\"141948515141000129916.jpg\"]', '1099', '1999', 2),
(5515, 168, 22, 4, '[\"70273349701000129877.jpg\",\"60622532211000129937.jpg\",\"170469591121000129829.jpg\",\"73947889631000129934.jpg\"]', '1099', '1199', 1),
(5516, 168, 22, 4, '[\"70273349701000129877.jpg\",\"60622532211000129937.jpg\",\"170469591121000129829.jpg\",\"73947889631000129934.jpg\"]', '1099', '1199', 1),
(5517, 168, 22, 4, '[\"70273349701000129877.jpg\",\"60622532211000129937.jpg\",\"170469591121000129829.jpg\",\"73947889631000129934.jpg\"]', '1099', '1199', 1),
(5518, 168, 22, 4, '[\"70273349701000129877.jpg\",\"60622532211000129937.jpg\",\"170469591121000129829.jpg\",\"73947889631000129934.jpg\"]', '1099', '1199', 1),
(5519, 168, 23, 4, '[\"70273349701000129877.jpg\",\"60622532211000129937.jpg\",\"170469591121000129829.jpg\",\"73947889631000129934.jpg\"]', '1099', '1199', 1),
(5520, 168, 23, 8, '[\"70273349701000129877.jpg\",\"60622532211000129937.jpg\",\"170469591121000129829.jpg\",\"73947889631000129934.jpg\"]', '1099', '1199', 1),
(5521, 168, 23, 8, '[\"70273349701000129877.jpg\",\"60622532211000129937.jpg\",\"170469591121000129829.jpg\",\"73947889631000129934.jpg\"]', '1099', '1199', 1),
(5522, 168, 23, 8, '[\"70273349701000129877.jpg\",\"60622532211000129937.jpg\",\"170469591121000129829.jpg\",\"73947889631000129934.jpg\"]', '1099', '1199', 1),
(5523, 166, 21, 8, '[\"14635717330img_7027.jpeg\",\"20149674761img_7032.jpeg\",\"5902404032img_7028.jpeg\",\"7840908313img_7031.jpeg\"]', '699', '1200', 1),
(5524, 166, 21, 8, '[\"14635717330img_7027.jpeg\",\"20149674761img_7032.jpeg\",\"5902404032img_7028.jpeg\",\"7840908313img_7031.jpeg\"]', '699', '1200', 1),
(5525, 166, 21, 8, '[\"14635717330img_7027.jpeg\",\"20149674761img_7032.jpeg\",\"5902404032img_7028.jpeg\",\"7840908313img_7031.jpeg\"]', '699', '1200', 1),
(5526, 166, 21, 8, '[\"14635717330img_7027.jpeg\",\"20149674761img_7032.jpeg\",\"5902404032img_7028.jpeg\",\"7840908313img_7031.jpeg\"]', '699', '1200', 1),
(5527, 166, 22, 11, '[\"14635717330img_7027.jpeg\",\"20149674761img_7032.jpeg\",\"5902404032img_7028.jpeg\",\"7840908313img_7031.jpeg\"]', '699', '1200', 1),
(5528, 166, 22, 11, '[\"14635717330img_7027.jpeg\",\"20149674761img_7032.jpeg\",\"5902404032img_7028.jpeg\",\"7840908313img_7031.jpeg\"]', '699', '1200', 1),
(5529, 166, 22, 11, '[\"14635717330img_7027.jpeg\",\"20149674761img_7032.jpeg\",\"5902404032img_7028.jpeg\",\"7840908313img_7031.jpeg\"]', '699', '1200', 1),
(5530, 166, 22, 11, '[\"14635717330img_7027.jpeg\",\"20149674761img_7032.jpeg\",\"5902404032img_7028.jpeg\",\"7840908313img_7031.jpeg\"]', '699', '1200', 1),
(5531, 166, 21, 11, '[\"1963923430img_7038.jpeg\",\"7777158051img_7036.jpeg\",\"11225413102img_7035.jpeg\",\"20894080213img_7013.jpeg\",\"10227566694img_7016.jpeg\"]', '699', '1200', 1),
(5532, 166, 21, 11, '[\"1963923430img_7038.jpeg\",\"7777158051img_7036.jpeg\",\"11225413102img_7035.jpeg\",\"20894080213img_7013.jpeg\",\"10227566694img_7016.jpeg\"]', '699', '1200', 1),
(5533, 166, 21, 11, '[\"1963923430img_7038.jpeg\",\"7777158051img_7036.jpeg\",\"11225413102img_7035.jpeg\",\"20894080213img_7013.jpeg\",\"10227566694img_7016.jpeg\"]', '699', '1200', 1),
(5534, 166, 21, 11, '[\"1963923430img_7038.jpeg\",\"7777158051img_7036.jpeg\",\"11225413102img_7035.jpeg\",\"20894080213img_7013.jpeg\",\"10227566694img_7016.jpeg\"]', '699', '1200', 1),
(5535, 166, 21, 11, '[\"1963923430img_7038.jpeg\",\"7777158051img_7036.jpeg\",\"11225413102img_7035.jpeg\",\"20894080213img_7013.jpeg\",\"10227566694img_7016.jpeg\"]', '699', '1200', 1),
(5536, 166, 22, 7, '[\"1963923430img_7038.jpeg\",\"7777158051img_7036.jpeg\",\"11225413102img_7035.jpeg\",\"20894080213img_7013.jpeg\",\"10227566694img_7016.jpeg\"]', '699', '1200', 1),
(5537, 166, 22, 7, '[\"1963923430img_7038.jpeg\",\"7777158051img_7036.jpeg\",\"11225413102img_7035.jpeg\",\"20894080213img_7013.jpeg\",\"10227566694img_7016.jpeg\"]', '699', '1200', 1),
(5538, 166, 22, 7, '[\"1963923430img_7038.jpeg\",\"7777158051img_7036.jpeg\",\"11225413102img_7035.jpeg\",\"20894080213img_7013.jpeg\",\"10227566694img_7016.jpeg\"]', '699', '1200', 1),
(5539, 166, 22, 7, '[\"1963923430img_7038.jpeg\",\"7777158051img_7036.jpeg\",\"11225413102img_7035.jpeg\",\"20894080213img_7013.jpeg\",\"10227566694img_7016.jpeg\"]', '699', '1200', 1),
(5540, 166, 22, 7, '[\"1963923430img_7038.jpeg\",\"7777158051img_7036.jpeg\",\"11225413102img_7035.jpeg\",\"20894080213img_7013.jpeg\",\"10227566694img_7016.jpeg\"]', '699', '1200', 1),
(5663, 160, 11, 2, '[\"12090878950img_7054.jpeg\",\"14195902791img_7058.jpeg\",\"15515310502img_7059.jpeg\",\"17870365663img_7056.jpeg\",\"10828522494img_7057.jpeg\",\"8566558895img_7060.jpeg\",\"20740454226img_7061.jpeg\",\"18194073287img_7055.jpeg\",\"6963878498img_7064.jpeg\"]', '949', '1900', 0),
(5664, 160, 11, 2, '[\"12090878950img_7054.jpeg\",\"14195902791img_7058.jpeg\",\"15515310502img_7059.jpeg\",\"17870365663img_7056.jpeg\",\"10828522494img_7057.jpeg\",\"8566558895img_7060.jpeg\",\"20740454226img_7061.jpeg\",\"18194073287img_7055.jpeg\",\"6963878498img_7064.jpeg\"]', '949', '1900', 0),
(5665, 160, 11, 2, '[\"12090878950img_7054.jpeg\",\"14195902791img_7058.jpeg\",\"15515310502img_7059.jpeg\",\"17870365663img_7056.jpeg\",\"10828522494img_7057.jpeg\",\"8566558895img_7060.jpeg\",\"20740454226img_7061.jpeg\",\"18194073287img_7055.jpeg\",\"6963878498img_7064.jpeg\"]', '949', '1900', 0),
(5666, 160, 11, 2, '[\"12090878950img_7054.jpeg\",\"14195902791img_7058.jpeg\",\"15515310502img_7059.jpeg\",\"17870365663img_7056.jpeg\",\"10828522494img_7057.jpeg\",\"8566558895img_7060.jpeg\",\"20740454226img_7061.jpeg\",\"18194073287img_7055.jpeg\",\"6963878498img_7064.jpeg\"]', '949', '1900', 0),
(5667, 160, 11, 2, '[\"12090878950img_7054.jpeg\",\"14195902791img_7058.jpeg\",\"15515310502img_7059.jpeg\",\"17870365663img_7056.jpeg\",\"10828522494img_7057.jpeg\",\"8566558895img_7060.jpeg\",\"20740454226img_7061.jpeg\",\"18194073287img_7055.jpeg\",\"6963878498img_7064.jpeg\"]', '949', '1900', 0),
(5668, 160, 11, 2, '[\"12090878950img_7054.jpeg\",\"14195902791img_7058.jpeg\",\"15515310502img_7059.jpeg\",\"17870365663img_7056.jpeg\",\"10828522494img_7057.jpeg\",\"8566558895img_7060.jpeg\",\"20740454226img_7061.jpeg\",\"18194073287img_7055.jpeg\",\"6963878498img_7064.jpeg\"]', '949', '1900', 0),
(5669, 160, 11, 2, '[\"12090878950img_7054.jpeg\",\"14195902791img_7058.jpeg\",\"15515310502img_7059.jpeg\",\"17870365663img_7056.jpeg\",\"10828522494img_7057.jpeg\",\"8566558895img_7060.jpeg\",\"20740454226img_7061.jpeg\",\"18194073287img_7055.jpeg\",\"6963878498img_7064.jpeg\"]', '949', '1900', 0),
(5670, 160, 11, 2, '[\"12090878950img_7054.jpeg\",\"14195902791img_7058.jpeg\",\"15515310502img_7059.jpeg\",\"17870365663img_7056.jpeg\",\"10828522494img_7057.jpeg\",\"8566558895img_7060.jpeg\",\"20740454226img_7061.jpeg\",\"18194073287img_7055.jpeg\",\"6963878498img_7064.jpeg\"]', '949', '1900', 0),
(5671, 160, 11, 2, '[\"12090878950img_7054.jpeg\",\"14195902791img_7058.jpeg\",\"15515310502img_7059.jpeg\",\"17870365663img_7056.jpeg\",\"10828522494img_7057.jpeg\",\"8566558895img_7060.jpeg\",\"20740454226img_7061.jpeg\",\"18194073287img_7055.jpeg\",\"6963878498img_7064.jpeg\"]', '949', '1900', 0),
(5672, 160, 21, 3, '[\"12090878950img_7054.jpeg\",\"14195902791img_7058.jpeg\",\"15515310502img_7059.jpeg\",\"17870365663img_7056.jpeg\",\"10828522494img_7057.jpeg\",\"8566558895img_7060.jpeg\",\"20740454226img_7061.jpeg\",\"18194073287img_7055.jpeg\",\"6963878498img_7064.jpeg\"]', '949', '1900', 0),
(5673, 160, 21, 3, '[\"12090878950img_7054.jpeg\",\"14195902791img_7058.jpeg\",\"15515310502img_7059.jpeg\",\"17870365663img_7056.jpeg\",\"10828522494img_7057.jpeg\",\"8566558895img_7060.jpeg\",\"20740454226img_7061.jpeg\",\"18194073287img_7055.jpeg\",\"6963878498img_7064.jpeg\"]', '949', '1900', 0),
(5674, 160, 21, 3, '[\"12090878950img_7054.jpeg\",\"14195902791img_7058.jpeg\",\"15515310502img_7059.jpeg\",\"17870365663img_7056.jpeg\",\"10828522494img_7057.jpeg\",\"8566558895img_7060.jpeg\",\"20740454226img_7061.jpeg\",\"18194073287img_7055.jpeg\",\"6963878498img_7064.jpeg\"]', '949', '1900', 0),
(5675, 160, 21, 3, '[\"12090878950img_7054.jpeg\",\"14195902791img_7058.jpeg\",\"15515310502img_7059.jpeg\",\"17870365663img_7056.jpeg\",\"10828522494img_7057.jpeg\",\"8566558895img_7060.jpeg\",\"20740454226img_7061.jpeg\",\"18194073287img_7055.jpeg\",\"6963878498img_7064.jpeg\"]', '949', '1900', 0),
(5676, 160, 21, 3, '[\"12090878950img_7054.jpeg\",\"14195902791img_7058.jpeg\",\"15515310502img_7059.jpeg\",\"17870365663img_7056.jpeg\",\"10828522494img_7057.jpeg\",\"8566558895img_7060.jpeg\",\"20740454226img_7061.jpeg\",\"18194073287img_7055.jpeg\",\"6963878498img_7064.jpeg\"]', '949', '1900', 0),
(5677, 160, 21, 3, '[\"12090878950img_7054.jpeg\",\"14195902791img_7058.jpeg\",\"15515310502img_7059.jpeg\",\"17870365663img_7056.jpeg\",\"10828522494img_7057.jpeg\",\"8566558895img_7060.jpeg\",\"20740454226img_7061.jpeg\",\"18194073287img_7055.jpeg\",\"6963878498img_7064.jpeg\"]', '949', '1900', 0),
(5678, 160, 21, 3, '[\"12090878950img_7054.jpeg\",\"14195902791img_7058.jpeg\",\"15515310502img_7059.jpeg\",\"17870365663img_7056.jpeg\",\"10828522494img_7057.jpeg\",\"8566558895img_7060.jpeg\",\"20740454226img_7061.jpeg\",\"18194073287img_7055.jpeg\",\"6963878498img_7064.jpeg\"]', '949', '1900', 0),
(5679, 160, 21, 3, '[\"12090878950img_7054.jpeg\",\"14195902791img_7058.jpeg\",\"15515310502img_7059.jpeg\",\"17870365663img_7056.jpeg\",\"10828522494img_7057.jpeg\",\"8566558895img_7060.jpeg\",\"20740454226img_7061.jpeg\",\"18194073287img_7055.jpeg\",\"6963878498img_7064.jpeg\"]', '949', '1900', 0),
(5680, 160, 21, 3, '[\"12090878950img_7054.jpeg\",\"14195902791img_7058.jpeg\",\"15515310502img_7059.jpeg\",\"17870365663img_7056.jpeg\",\"10828522494img_7057.jpeg\",\"8566558895img_7060.jpeg\",\"20740454226img_7061.jpeg\",\"18194073287img_7055.jpeg\",\"6963878498img_7064.jpeg\"]', '949', '1900', 0),
(5681, 160, 22, 3, '[\"12090878950img_7054.jpeg\",\"14195902791img_7058.jpeg\",\"15515310502img_7059.jpeg\",\"17870365663img_7056.jpeg\",\"10828522494img_7057.jpeg\",\"8566558895img_7060.jpeg\",\"20740454226img_7061.jpeg\",\"18194073287img_7055.jpeg\",\"6963878498img_7064.jpeg\"]', '949', '1900', 0),
(5682, 160, 22, 3, '[\"12090878950img_7054.jpeg\",\"14195902791img_7058.jpeg\",\"15515310502img_7059.jpeg\",\"17870365663img_7056.jpeg\",\"10828522494img_7057.jpeg\",\"8566558895img_7060.jpeg\",\"20740454226img_7061.jpeg\",\"18194073287img_7055.jpeg\",\"6963878498img_7064.jpeg\"]', '949', '1900', 0),
(5683, 160, 22, 3, '[\"12090878950img_7054.jpeg\",\"14195902791img_7058.jpeg\",\"15515310502img_7059.jpeg\",\"17870365663img_7056.jpeg\",\"10828522494img_7057.jpeg\",\"8566558895img_7060.jpeg\",\"20740454226img_7061.jpeg\",\"18194073287img_7055.jpeg\",\"6963878498img_7064.jpeg\"]', '949', '1900', 0),
(5684, 160, 22, 3, '[\"12090878950img_7054.jpeg\",\"14195902791img_7058.jpeg\",\"15515310502img_7059.jpeg\",\"17870365663img_7056.jpeg\",\"10828522494img_7057.jpeg\",\"8566558895img_7060.jpeg\",\"20740454226img_7061.jpeg\",\"18194073287img_7055.jpeg\",\"6963878498img_7064.jpeg\"]', '949', '1900', 0),
(5685, 160, 22, 3, '[\"12090878950img_7054.jpeg\",\"14195902791img_7058.jpeg\",\"15515310502img_7059.jpeg\",\"17870365663img_7056.jpeg\",\"10828522494img_7057.jpeg\",\"8566558895img_7060.jpeg\",\"20740454226img_7061.jpeg\",\"18194073287img_7055.jpeg\",\"6963878498img_7064.jpeg\"]', '949', '1900', 0),
(5686, 160, 22, 3, '[\"12090878950img_7054.jpeg\",\"14195902791img_7058.jpeg\",\"15515310502img_7059.jpeg\",\"17870365663img_7056.jpeg\",\"10828522494img_7057.jpeg\",\"8566558895img_7060.jpeg\",\"20740454226img_7061.jpeg\",\"18194073287img_7055.jpeg\",\"6963878498img_7064.jpeg\"]', '949', '1900', 0),
(5687, 160, 22, 3, '[\"12090878950img_7054.jpeg\",\"14195902791img_7058.jpeg\",\"15515310502img_7059.jpeg\",\"17870365663img_7056.jpeg\",\"10828522494img_7057.jpeg\",\"8566558895img_7060.jpeg\",\"20740454226img_7061.jpeg\",\"18194073287img_7055.jpeg\",\"6963878498img_7064.jpeg\"]', '949', '1900', 0),
(5688, 160, 22, 3, '[\"12090878950img_7054.jpeg\",\"14195902791img_7058.jpeg\",\"15515310502img_7059.jpeg\",\"17870365663img_7056.jpeg\",\"10828522494img_7057.jpeg\",\"8566558895img_7060.jpeg\",\"20740454226img_7061.jpeg\",\"18194073287img_7055.jpeg\",\"6963878498img_7064.jpeg\"]', '949', '1900', 0),
(5689, 160, 22, 3, '[\"12090878950img_7054.jpeg\",\"14195902791img_7058.jpeg\",\"15515310502img_7059.jpeg\",\"17870365663img_7056.jpeg\",\"10828522494img_7057.jpeg\",\"8566558895img_7060.jpeg\",\"20740454226img_7061.jpeg\",\"18194073287img_7055.jpeg\",\"6963878498img_7064.jpeg\"]', '949', '1900', 0),
(5690, 160, 11, 3, '[\"18176378760img_7042.jpeg\",\"11045427221img_7043.jpeg\",\"354411762img_7046.jpeg\",\"19419320573img_7044.jpeg\",\"3996213074img_7045.jpeg\",\"17794591265img_7041.jpeg\",\"16271848146img_7062.jpeg\"]', '949', '1900', 4),
(5691, 160, 11, 3, '[\"18176378760img_7042.jpeg\",\"11045427221img_7043.jpeg\",\"354411762img_7046.jpeg\",\"19419320573img_7044.jpeg\",\"3996213074img_7045.jpeg\",\"17794591265img_7041.jpeg\",\"16271848146img_7062.jpeg\"]', '949', '1900', 4),
(5692, 160, 11, 3, '[\"18176378760img_7042.jpeg\",\"11045427221img_7043.jpeg\",\"354411762img_7046.jpeg\",\"19419320573img_7044.jpeg\",\"3996213074img_7045.jpeg\",\"17794591265img_7041.jpeg\",\"16271848146img_7062.jpeg\"]', '949', '1900', 4),
(5693, 160, 11, 3, '[\"18176378760img_7042.jpeg\",\"11045427221img_7043.jpeg\",\"354411762img_7046.jpeg\",\"19419320573img_7044.jpeg\",\"3996213074img_7045.jpeg\",\"17794591265img_7041.jpeg\",\"16271848146img_7062.jpeg\"]', '949', '1900', 4),
(5694, 160, 11, 3, '[\"18176378760img_7042.jpeg\",\"11045427221img_7043.jpeg\",\"354411762img_7046.jpeg\",\"19419320573img_7044.jpeg\",\"3996213074img_7045.jpeg\",\"17794591265img_7041.jpeg\",\"16271848146img_7062.jpeg\"]', '949', '1900', 4),
(5695, 160, 11, 3, '[\"18176378760img_7042.jpeg\",\"11045427221img_7043.jpeg\",\"354411762img_7046.jpeg\",\"19419320573img_7044.jpeg\",\"3996213074img_7045.jpeg\",\"17794591265img_7041.jpeg\",\"16271848146img_7062.jpeg\"]', '949', '1900', 4),
(5696, 160, 11, 3, '[\"18176378760img_7042.jpeg\",\"11045427221img_7043.jpeg\",\"354411762img_7046.jpeg\",\"19419320573img_7044.jpeg\",\"3996213074img_7045.jpeg\",\"17794591265img_7041.jpeg\",\"16271848146img_7062.jpeg\"]', '949', '1900', 4),
(5697, 160, 21, 10, '[\"18176378760img_7042.jpeg\",\"11045427221img_7043.jpeg\",\"354411762img_7046.jpeg\",\"19419320573img_7044.jpeg\",\"3996213074img_7045.jpeg\",\"17794591265img_7041.jpeg\",\"16271848146img_7062.jpeg\"]', '949', '1900', 4),
(5698, 160, 21, 10, '[\"18176378760img_7042.jpeg\",\"11045427221img_7043.jpeg\",\"354411762img_7046.jpeg\",\"19419320573img_7044.jpeg\",\"3996213074img_7045.jpeg\",\"17794591265img_7041.jpeg\",\"16271848146img_7062.jpeg\"]', '949', '1900', 4),
(5699, 160, 21, 10, '[\"18176378760img_7042.jpeg\",\"11045427221img_7043.jpeg\",\"354411762img_7046.jpeg\",\"19419320573img_7044.jpeg\",\"3996213074img_7045.jpeg\",\"17794591265img_7041.jpeg\",\"16271848146img_7062.jpeg\"]', '949', '1900', 4),
(5700, 160, 21, 10, '[\"18176378760img_7042.jpeg\",\"11045427221img_7043.jpeg\",\"354411762img_7046.jpeg\",\"19419320573img_7044.jpeg\",\"3996213074img_7045.jpeg\",\"17794591265img_7041.jpeg\",\"16271848146img_7062.jpeg\"]', '949', '1900', 4),
(5701, 160, 21, 10, '[\"18176378760img_7042.jpeg\",\"11045427221img_7043.jpeg\",\"354411762img_7046.jpeg\",\"19419320573img_7044.jpeg\",\"3996213074img_7045.jpeg\",\"17794591265img_7041.jpeg\",\"16271848146img_7062.jpeg\"]', '949', '1900', 4),
(5702, 160, 21, 10, '[\"18176378760img_7042.jpeg\",\"11045427221img_7043.jpeg\",\"354411762img_7046.jpeg\",\"19419320573img_7044.jpeg\",\"3996213074img_7045.jpeg\",\"17794591265img_7041.jpeg\",\"16271848146img_7062.jpeg\"]', '949', '1900', 4),
(5703, 160, 21, 10, '[\"18176378760img_7042.jpeg\",\"11045427221img_7043.jpeg\",\"354411762img_7046.jpeg\",\"19419320573img_7044.jpeg\",\"3996213074img_7045.jpeg\",\"17794591265img_7041.jpeg\",\"16271848146img_7062.jpeg\"]', '949', '1900', 4),
(5704, 160, 22, 10, '[\"18176378760img_7042.jpeg\",\"11045427221img_7043.jpeg\",\"354411762img_7046.jpeg\",\"19419320573img_7044.jpeg\",\"3996213074img_7045.jpeg\",\"17794591265img_7041.jpeg\",\"16271848146img_7062.jpeg\"]', '949', '1900', 4),
(5705, 160, 22, 10, '[\"18176378760img_7042.jpeg\",\"11045427221img_7043.jpeg\",\"354411762img_7046.jpeg\",\"19419320573img_7044.jpeg\",\"3996213074img_7045.jpeg\",\"17794591265img_7041.jpeg\",\"16271848146img_7062.jpeg\"]', '949', '1900', 4),
(5706, 160, 22, 10, '[\"18176378760img_7042.jpeg\",\"11045427221img_7043.jpeg\",\"354411762img_7046.jpeg\",\"19419320573img_7044.jpeg\",\"3996213074img_7045.jpeg\",\"17794591265img_7041.jpeg\",\"16271848146img_7062.jpeg\"]', '949', '1900', 4),
(5707, 160, 22, 10, '[\"18176378760img_7042.jpeg\",\"11045427221img_7043.jpeg\",\"354411762img_7046.jpeg\",\"19419320573img_7044.jpeg\",\"3996213074img_7045.jpeg\",\"17794591265img_7041.jpeg\",\"16271848146img_7062.jpeg\"]', '949', '1900', 4),
(5708, 160, 22, 10, '[\"18176378760img_7042.jpeg\",\"11045427221img_7043.jpeg\",\"354411762img_7046.jpeg\",\"19419320573img_7044.jpeg\",\"3996213074img_7045.jpeg\",\"17794591265img_7041.jpeg\",\"16271848146img_7062.jpeg\"]', '949', '1900', 4),
(5709, 160, 22, 10, '[\"18176378760img_7042.jpeg\",\"11045427221img_7043.jpeg\",\"354411762img_7046.jpeg\",\"19419320573img_7044.jpeg\",\"3996213074img_7045.jpeg\",\"17794591265img_7041.jpeg\",\"16271848146img_7062.jpeg\"]', '949', '1900', 4),
(5710, 160, 22, 10, '[\"18176378760img_7042.jpeg\",\"11045427221img_7043.jpeg\",\"354411762img_7046.jpeg\",\"19419320573img_7044.jpeg\",\"3996213074img_7045.jpeg\",\"17794591265img_7041.jpeg\",\"16271848146img_7062.jpeg\"]', '949', '1900', 4),
(5711, 160, 11, 10, '[\"5300537990img_7047.jpeg\",\"21160770591img_7052.jpeg\",\"1373237692img_7050.jpeg\",\"11037952583img_7049.jpeg\",\"7848386784img_7048.jpeg\",\"5217777685img_7051.jpeg\",\"16906097166img_7053.jpeg\"]', '949', '1900', 4),
(5712, 160, 11, 10, '[\"5300537990img_7047.jpeg\",\"21160770591img_7052.jpeg\",\"1373237692img_7050.jpeg\",\"11037952583img_7049.jpeg\",\"7848386784img_7048.jpeg\",\"5217777685img_7051.jpeg\",\"16906097166img_7053.jpeg\"]', '949', '1900', 4),
(5713, 160, 11, 10, '[\"5300537990img_7047.jpeg\",\"21160770591img_7052.jpeg\",\"1373237692img_7050.jpeg\",\"11037952583img_7049.jpeg\",\"7848386784img_7048.jpeg\",\"5217777685img_7051.jpeg\",\"16906097166img_7053.jpeg\"]', '949', '1900', 4),
(5714, 160, 11, 10, '[\"5300537990img_7047.jpeg\",\"21160770591img_7052.jpeg\",\"1373237692img_7050.jpeg\",\"11037952583img_7049.jpeg\",\"7848386784img_7048.jpeg\",\"5217777685img_7051.jpeg\",\"16906097166img_7053.jpeg\"]', '949', '1900', 4),
(5715, 160, 11, 10, '[\"5300537990img_7047.jpeg\",\"21160770591img_7052.jpeg\",\"1373237692img_7050.jpeg\",\"11037952583img_7049.jpeg\",\"7848386784img_7048.jpeg\",\"5217777685img_7051.jpeg\",\"16906097166img_7053.jpeg\"]', '949', '1900', 4),
(5716, 160, 11, 10, '[\"5300537990img_7047.jpeg\",\"21160770591img_7052.jpeg\",\"1373237692img_7050.jpeg\",\"11037952583img_7049.jpeg\",\"7848386784img_7048.jpeg\",\"5217777685img_7051.jpeg\",\"16906097166img_7053.jpeg\"]', '949', '1900', 4),
(5717, 160, 11, 10, '[\"5300537990img_7047.jpeg\",\"21160770591img_7052.jpeg\",\"1373237692img_7050.jpeg\",\"11037952583img_7049.jpeg\",\"7848386784img_7048.jpeg\",\"5217777685img_7051.jpeg\",\"16906097166img_7053.jpeg\"]', '949', '1900', 4),
(5718, 160, 21, 11, '[\"5300537990img_7047.jpeg\",\"21160770591img_7052.jpeg\",\"1373237692img_7050.jpeg\",\"11037952583img_7049.jpeg\",\"7848386784img_7048.jpeg\",\"5217777685img_7051.jpeg\",\"16906097166img_7053.jpeg\"]', '949', '1900', 4),
(5719, 160, 21, 11, '[\"5300537990img_7047.jpeg\",\"21160770591img_7052.jpeg\",\"1373237692img_7050.jpeg\",\"11037952583img_7049.jpeg\",\"7848386784img_7048.jpeg\",\"5217777685img_7051.jpeg\",\"16906097166img_7053.jpeg\"]', '949', '1900', 4),
(5720, 160, 21, 11, '[\"5300537990img_7047.jpeg\",\"21160770591img_7052.jpeg\",\"1373237692img_7050.jpeg\",\"11037952583img_7049.jpeg\",\"7848386784img_7048.jpeg\",\"5217777685img_7051.jpeg\",\"16906097166img_7053.jpeg\"]', '949', '1900', 4),
(5721, 160, 21, 11, '[\"5300537990img_7047.jpeg\",\"21160770591img_7052.jpeg\",\"1373237692img_7050.jpeg\",\"11037952583img_7049.jpeg\",\"7848386784img_7048.jpeg\",\"5217777685img_7051.jpeg\",\"16906097166img_7053.jpeg\"]', '949', '1900', 4),
(5722, 160, 21, 11, '[\"5300537990img_7047.jpeg\",\"21160770591img_7052.jpeg\",\"1373237692img_7050.jpeg\",\"11037952583img_7049.jpeg\",\"7848386784img_7048.jpeg\",\"5217777685img_7051.jpeg\",\"16906097166img_7053.jpeg\"]', '949', '1900', 4),
(5723, 160, 21, 11, '[\"5300537990img_7047.jpeg\",\"21160770591img_7052.jpeg\",\"1373237692img_7050.jpeg\",\"11037952583img_7049.jpeg\",\"7848386784img_7048.jpeg\",\"5217777685img_7051.jpeg\",\"16906097166img_7053.jpeg\"]', '949', '1900', 4),
(5724, 160, 21, 11, '[\"5300537990img_7047.jpeg\",\"21160770591img_7052.jpeg\",\"1373237692img_7050.jpeg\",\"11037952583img_7049.jpeg\",\"7848386784img_7048.jpeg\",\"5217777685img_7051.jpeg\",\"16906097166img_7053.jpeg\"]', '949', '1900', 4),
(5725, 160, 22, 11, '[\"5300537990img_7047.jpeg\",\"21160770591img_7052.jpeg\",\"1373237692img_7050.jpeg\",\"11037952583img_7049.jpeg\",\"7848386784img_7048.jpeg\",\"5217777685img_7051.jpeg\",\"16906097166img_7053.jpeg\"]', '949', '1900', 4),
(5726, 160, 22, 11, '[\"5300537990img_7047.jpeg\",\"21160770591img_7052.jpeg\",\"1373237692img_7050.jpeg\",\"11037952583img_7049.jpeg\",\"7848386784img_7048.jpeg\",\"5217777685img_7051.jpeg\",\"16906097166img_7053.jpeg\"]', '949', '1900', 4),
(5727, 160, 22, 11, '[\"5300537990img_7047.jpeg\",\"21160770591img_7052.jpeg\",\"1373237692img_7050.jpeg\",\"11037952583img_7049.jpeg\",\"7848386784img_7048.jpeg\",\"5217777685img_7051.jpeg\",\"16906097166img_7053.jpeg\"]', '949', '1900', 4),
(5728, 160, 22, 11, '[\"5300537990img_7047.jpeg\",\"21160770591img_7052.jpeg\",\"1373237692img_7050.jpeg\",\"11037952583img_7049.jpeg\",\"7848386784img_7048.jpeg\",\"5217777685img_7051.jpeg\",\"16906097166img_7053.jpeg\"]', '949', '1900', 4),
(5729, 160, 22, 11, '[\"5300537990img_7047.jpeg\",\"21160770591img_7052.jpeg\",\"1373237692img_7050.jpeg\",\"11037952583img_7049.jpeg\",\"7848386784img_7048.jpeg\",\"5217777685img_7051.jpeg\",\"16906097166img_7053.jpeg\"]', '949', '1900', 4),
(5730, 160, 22, 11, '[\"5300537990img_7047.jpeg\",\"21160770591img_7052.jpeg\",\"1373237692img_7050.jpeg\",\"11037952583img_7049.jpeg\",\"7848386784img_7048.jpeg\",\"5217777685img_7051.jpeg\",\"16906097166img_7053.jpeg\"]', '949', '1900', 4),
(5731, 160, 22, 11, '[\"5300537990img_7047.jpeg\",\"21160770591img_7052.jpeg\",\"1373237692img_7050.jpeg\",\"11037952583img_7049.jpeg\",\"7848386784img_7048.jpeg\",\"5217777685img_7051.jpeg\",\"16906097166img_7053.jpeg\"]', '949', '1900', 4),
(5784, 169, 11, 4, '[\"150644253401000130069.jpg\",\"65792377111000129841.jpg\",\"113462064421000129835.jpg\"]', '949', '1899', 10),
(5785, 169, 11, 4, '[\"150644253401000130069.jpg\",\"65792377111000129841.jpg\",\"113462064421000129835.jpg\"]', '949', '1899', 10),
(5786, 169, 11, 4, '[\"150644253401000130069.jpg\",\"65792377111000129841.jpg\",\"113462064421000129835.jpg\"]', '949', '1899', 10),
(5787, 169, 21, 4, '[\"150644253401000130069.jpg\",\"65792377111000129841.jpg\",\"113462064421000129835.jpg\"]', '949', '1899', 10),
(5788, 169, 21, 4, '[\"150644253401000130069.jpg\",\"65792377111000129841.jpg\",\"113462064421000129835.jpg\"]', '949', '1899', 10),
(5789, 169, 21, 4, '[\"150644253401000130069.jpg\",\"65792377111000129841.jpg\",\"113462064421000129835.jpg\"]', '949', '1899', 10),
(5817, 114, 24, 12, '[\"12664966870bd3a701a-d782-42e2-a725-bd4533e173a4.jpeg\",\"171166103318b2025d9-a38b-4d30-b076-4b2b08ae5977.jpeg\",\"1941279012291becd8a-d26f-4f8a-9bf8-6886ea90f915.jpeg\"]', '699', '1500', 0),
(5818, 114, 24, 12, '[\"12664966870bd3a701a-d782-42e2-a725-bd4533e173a4.jpeg\",\"171166103318b2025d9-a38b-4d30-b076-4b2b08ae5977.jpeg\",\"1941279012291becd8a-d26f-4f8a-9bf8-6886ea90f915.jpeg\"]', '699', '1500', 0),
(5819, 114, 24, 12, '[\"12664966870bd3a701a-d782-42e2-a725-bd4533e173a4.jpeg\",\"171166103318b2025d9-a38b-4d30-b076-4b2b08ae5977.jpeg\",\"1941279012291becd8a-d26f-4f8a-9bf8-6886ea90f915.jpeg\"]', '699', '1500', 0),
(5824, 118, 32, 2, '[\"1149980190img_4771.jpeg\"]', '1099', '1500', 0),
(5834, 124, 8, 8, '[\"6144673620img_5149.jpeg\",\"1819510631img_4841.jpeg\"]', '899', '1300', 0),
(5835, 124, 8, 8, '[\"6144673620img_5149.jpeg\",\"1819510631img_4841.jpeg\"]', '899', '1300', 0),
(5836, 124, 9, 11, '[\"6144673620img_5149.jpeg\",\"1819510631img_4841.jpeg\"]', '899', '1300', 0),
(5837, 124, 9, 11, '[\"6144673620img_5149.jpeg\",\"1819510631img_4841.jpeg\"]', '899', '1300', 0),
(5838, 124, 11, 0, '[\"6144673620img_5149.jpeg\",\"1819510631img_4841.jpeg\"]', '899', '1300', 0),
(5839, 124, 11, 0, '[\"6144673620img_5149.jpeg\",\"1819510631img_4841.jpeg\"]', '899', '1300', 0),
(5840, 127, 21, 8, '[\"687070500img_5137.jpeg\",\"10953454241f5cca0fd-4d4e-4dc0-b758-c4e49cfa1c88.jpeg\",\"7313812212c507d67c-c642-47bb-8c45-ca436d5d914b.jpeg\",\"130467752330aab19a8-b918-403f-8c9e-a6a39867c720.jpeg\",\"13839183384ca1e5e86-5b58-467a-9d87-2d2dec5cc2ab.jpeg\"]', '999', '1400', 0),
(5841, 127, 21, 8, '[\"687070500img_5137.jpeg\",\"10953454241f5cca0fd-4d4e-4dc0-b758-c4e49cfa1c88.jpeg\",\"7313812212c507d67c-c642-47bb-8c45-ca436d5d914b.jpeg\",\"130467752330aab19a8-b918-403f-8c9e-a6a39867c720.jpeg\",\"13839183384ca1e5e86-5b58-467a-9d87-2d2dec5cc2ab.jpeg\"]', '999', '1400', 0),
(5842, 127, 21, 8, '[\"687070500img_5137.jpeg\",\"10953454241f5cca0fd-4d4e-4dc0-b758-c4e49cfa1c88.jpeg\",\"7313812212c507d67c-c642-47bb-8c45-ca436d5d914b.jpeg\",\"130467752330aab19a8-b918-403f-8c9e-a6a39867c720.jpeg\",\"13839183384ca1e5e86-5b58-467a-9d87-2d2dec5cc2ab.jpeg\"]', '999', '1400', 0),
(5843, 127, 21, 8, '[\"687070500img_5137.jpeg\",\"10953454241f5cca0fd-4d4e-4dc0-b758-c4e49cfa1c88.jpeg\",\"7313812212c507d67c-c642-47bb-8c45-ca436d5d914b.jpeg\",\"130467752330aab19a8-b918-403f-8c9e-a6a39867c720.jpeg\",\"13839183384ca1e5e86-5b58-467a-9d87-2d2dec5cc2ab.jpeg\"]', '999', '1400', 0),
(5844, 127, 21, 8, '[\"687070500img_5137.jpeg\",\"10953454241f5cca0fd-4d4e-4dc0-b758-c4e49cfa1c88.jpeg\",\"7313812212c507d67c-c642-47bb-8c45-ca436d5d914b.jpeg\",\"130467752330aab19a8-b918-403f-8c9e-a6a39867c720.jpeg\",\"13839183384ca1e5e86-5b58-467a-9d87-2d2dec5cc2ab.jpeg\"]', '999', '1400', 0),
(5884, 135, 32, 12, '[\"4307672960img_5157.jpeg\",\"3766155261a3b04214-d793-41c0-aff5-4091d00aad60.jpeg\",\"765197147281f2f994-b32b-4156-bb26-04748c31e5ec.jpeg\",\"129325753238095156e-272b-4640-913f-fa24fb630b28.jpeg\",\"19150919994934ebaa3-839a-4282-bb47-4d23d9dc9dbb.jpeg\"]', '1349', '2000', 0),
(5885, 135, 32, 12, '[\"4307672960img_5157.jpeg\",\"3766155261a3b04214-d793-41c0-aff5-4091d00aad60.jpeg\",\"765197147281f2f994-b32b-4156-bb26-04748c31e5ec.jpeg\",\"129325753238095156e-272b-4640-913f-fa24fb630b28.jpeg\",\"19150919994934ebaa3-839a-4282-bb47-4d23d9dc9dbb.jpeg\"]', '1349', '2000', 0),
(5886, 135, 32, 12, '[\"4307672960img_5157.jpeg\",\"3766155261a3b04214-d793-41c0-aff5-4091d00aad60.jpeg\",\"765197147281f2f994-b32b-4156-bb26-04748c31e5ec.jpeg\",\"129325753238095156e-272b-4640-913f-fa24fb630b28.jpeg\",\"19150919994934ebaa3-839a-4282-bb47-4d23d9dc9dbb.jpeg\"]', '1349', '2000', 0),
(5887, 135, 32, 12, '[\"4307672960img_5157.jpeg\",\"3766155261a3b04214-d793-41c0-aff5-4091d00aad60.jpeg\",\"765197147281f2f994-b32b-4156-bb26-04748c31e5ec.jpeg\",\"129325753238095156e-272b-4640-913f-fa24fb630b28.jpeg\",\"19150919994934ebaa3-839a-4282-bb47-4d23d9dc9dbb.jpeg\"]', '1349', '2000', 0),
(5888, 135, 32, 12, '[\"4307672960img_5157.jpeg\",\"3766155261a3b04214-d793-41c0-aff5-4091d00aad60.jpeg\",\"765197147281f2f994-b32b-4156-bb26-04748c31e5ec.jpeg\",\"129325753238095156e-272b-4640-913f-fa24fb630b28.jpeg\",\"19150919994934ebaa3-839a-4282-bb47-4d23d9dc9dbb.jpeg\"]', '1349', '2000', 0),
(5889, 135, 33, 0, '[\"4307672960img_5157.jpeg\",\"3766155261a3b04214-d793-41c0-aff5-4091d00aad60.jpeg\",\"765197147281f2f994-b32b-4156-bb26-04748c31e5ec.jpeg\",\"129325753238095156e-272b-4640-913f-fa24fb630b28.jpeg\",\"19150919994934ebaa3-839a-4282-bb47-4d23d9dc9dbb.jpeg\"]', '1349', '2000', 0),
(5890, 135, 33, 0, '[\"4307672960img_5157.jpeg\",\"3766155261a3b04214-d793-41c0-aff5-4091d00aad60.jpeg\",\"765197147281f2f994-b32b-4156-bb26-04748c31e5ec.jpeg\",\"129325753238095156e-272b-4640-913f-fa24fb630b28.jpeg\",\"19150919994934ebaa3-839a-4282-bb47-4d23d9dc9dbb.jpeg\"]', '1349', '2000', 0),
(5891, 135, 33, 0, '[\"4307672960img_5157.jpeg\",\"3766155261a3b04214-d793-41c0-aff5-4091d00aad60.jpeg\",\"765197147281f2f994-b32b-4156-bb26-04748c31e5ec.jpeg\",\"129325753238095156e-272b-4640-913f-fa24fb630b28.jpeg\",\"19150919994934ebaa3-839a-4282-bb47-4d23d9dc9dbb.jpeg\"]', '1349', '2000', 0),
(5892, 135, 33, 0, '[\"4307672960img_5157.jpeg\",\"3766155261a3b04214-d793-41c0-aff5-4091d00aad60.jpeg\",\"765197147281f2f994-b32b-4156-bb26-04748c31e5ec.jpeg\",\"129325753238095156e-272b-4640-913f-fa24fb630b28.jpeg\",\"19150919994934ebaa3-839a-4282-bb47-4d23d9dc9dbb.jpeg\"]', '1349', '2000', 0),
(5893, 135, 33, 0, '[\"4307672960img_5157.jpeg\",\"3766155261a3b04214-d793-41c0-aff5-4091d00aad60.jpeg\",\"765197147281f2f994-b32b-4156-bb26-04748c31e5ec.jpeg\",\"129325753238095156e-272b-4640-913f-fa24fb630b28.jpeg\",\"19150919994934ebaa3-839a-4282-bb47-4d23d9dc9dbb.jpeg\"]', '1349', '2000', 0),
(5894, 136, 8, 3, '[\"17875604680img_5151.jpeg\",\"203505637913957d527-2f43-4f8f-b2e9-69172634b954.jpeg\",\"10173765722716bf563-c124-4992-8355-e1f28113f12b.jpeg\",\"322485115307d53b80-a65c-4346-86e1-235924610bb2.jpeg\"]', '995', '2000', 1),
(5895, 136, 8, 3, '[\"17875604680img_5151.jpeg\",\"203505637913957d527-2f43-4f8f-b2e9-69172634b954.jpeg\",\"10173765722716bf563-c124-4992-8355-e1f28113f12b.jpeg\",\"322485115307d53b80-a65c-4346-86e1-235924610bb2.jpeg\"]', '995', '2000', 1),
(5896, 136, 8, 3, '[\"17875604680img_5151.jpeg\",\"203505637913957d527-2f43-4f8f-b2e9-69172634b954.jpeg\",\"10173765722716bf563-c124-4992-8355-e1f28113f12b.jpeg\",\"322485115307d53b80-a65c-4346-86e1-235924610bb2.jpeg\"]', '995', '2000', 1),
(5897, 136, 8, 3, '[\"17875604680img_5151.jpeg\",\"203505637913957d527-2f43-4f8f-b2e9-69172634b954.jpeg\",\"10173765722716bf563-c124-4992-8355-e1f28113f12b.jpeg\",\"322485115307d53b80-a65c-4346-86e1-235924610bb2.jpeg\"]', '995', '2000', 1),
(5898, 136, 9, 0, '[\"17875604680img_5151.jpeg\",\"203505637913957d527-2f43-4f8f-b2e9-69172634b954.jpeg\",\"10173765722716bf563-c124-4992-8355-e1f28113f12b.jpeg\",\"322485115307d53b80-a65c-4346-86e1-235924610bb2.jpeg\"]', '995', '2000', 1),
(5899, 136, 9, 0, '[\"17875604680img_5151.jpeg\",\"203505637913957d527-2f43-4f8f-b2e9-69172634b954.jpeg\",\"10173765722716bf563-c124-4992-8355-e1f28113f12b.jpeg\",\"322485115307d53b80-a65c-4346-86e1-235924610bb2.jpeg\"]', '995', '2000', 1),
(5900, 136, 9, 0, '[\"17875604680img_5151.jpeg\",\"203505637913957d527-2f43-4f8f-b2e9-69172634b954.jpeg\",\"10173765722716bf563-c124-4992-8355-e1f28113f12b.jpeg\",\"322485115307d53b80-a65c-4346-86e1-235924610bb2.jpeg\"]', '995', '2000', 1),
(5901, 136, 9, 0, '[\"17875604680img_5151.jpeg\",\"203505637913957d527-2f43-4f8f-b2e9-69172634b954.jpeg\",\"10173765722716bf563-c124-4992-8355-e1f28113f12b.jpeg\",\"322485115307d53b80-a65c-4346-86e1-235924610bb2.jpeg\"]', '995', '2000', 1),
(5902, 137, 8, 4, '[\"11494233280img_5152.jpeg\",\"3618380671dc31cf54-d456-458c-abf2-0aadab807c08.jpeg\",\"85240622221bf0a2f8-f700-4529-bd6c-70053428ca7a.jpeg\",\"44763747737d0ce40a-8d52-43cd-b7ac-835ffaa7e346.jpeg\",\"199895970941c4b7b09-a392-40d5-8e9b-74373ebdd101.jpeg\"]', '995', '1700', 1),
(5903, 137, 8, 4, '[\"11494233280img_5152.jpeg\",\"3618380671dc31cf54-d456-458c-abf2-0aadab807c08.jpeg\",\"85240622221bf0a2f8-f700-4529-bd6c-70053428ca7a.jpeg\",\"44763747737d0ce40a-8d52-43cd-b7ac-835ffaa7e346.jpeg\",\"199895970941c4b7b09-a392-40d5-8e9b-74373ebdd101.jpeg\"]', '995', '1700', 1),
(5904, 137, 8, 4, '[\"11494233280img_5152.jpeg\",\"3618380671dc31cf54-d456-458c-abf2-0aadab807c08.jpeg\",\"85240622221bf0a2f8-f700-4529-bd6c-70053428ca7a.jpeg\",\"44763747737d0ce40a-8d52-43cd-b7ac-835ffaa7e346.jpeg\",\"199895970941c4b7b09-a392-40d5-8e9b-74373ebdd101.jpeg\"]', '995', '1700', 1);
INSERT INTO `all_images` (`id`, `p_id`, `size_id`, `color_id`, `image`, `price`, `cut_price`, `stock`) VALUES
(5905, 137, 8, 4, '[\"11494233280img_5152.jpeg\",\"3618380671dc31cf54-d456-458c-abf2-0aadab807c08.jpeg\",\"85240622221bf0a2f8-f700-4529-bd6c-70053428ca7a.jpeg\",\"44763747737d0ce40a-8d52-43cd-b7ac-835ffaa7e346.jpeg\",\"199895970941c4b7b09-a392-40d5-8e9b-74373ebdd101.jpeg\"]', '995', '1700', 1),
(5906, 137, 8, 4, '[\"11494233280img_5152.jpeg\",\"3618380671dc31cf54-d456-458c-abf2-0aadab807c08.jpeg\",\"85240622221bf0a2f8-f700-4529-bd6c-70053428ca7a.jpeg\",\"44763747737d0ce40a-8d52-43cd-b7ac-835ffaa7e346.jpeg\",\"199895970941c4b7b09-a392-40d5-8e9b-74373ebdd101.jpeg\"]', '995', '1700', 1),
(5907, 137, 9, 0, '[\"11494233280img_5152.jpeg\",\"3618380671dc31cf54-d456-458c-abf2-0aadab807c08.jpeg\",\"85240622221bf0a2f8-f700-4529-bd6c-70053428ca7a.jpeg\",\"44763747737d0ce40a-8d52-43cd-b7ac-835ffaa7e346.jpeg\",\"199895970941c4b7b09-a392-40d5-8e9b-74373ebdd101.jpeg\"]', '995', '1700', 1),
(5908, 137, 9, 0, '[\"11494233280img_5152.jpeg\",\"3618380671dc31cf54-d456-458c-abf2-0aadab807c08.jpeg\",\"85240622221bf0a2f8-f700-4529-bd6c-70053428ca7a.jpeg\",\"44763747737d0ce40a-8d52-43cd-b7ac-835ffaa7e346.jpeg\",\"199895970941c4b7b09-a392-40d5-8e9b-74373ebdd101.jpeg\"]', '995', '1700', 1),
(5909, 137, 9, 0, '[\"11494233280img_5152.jpeg\",\"3618380671dc31cf54-d456-458c-abf2-0aadab807c08.jpeg\",\"85240622221bf0a2f8-f700-4529-bd6c-70053428ca7a.jpeg\",\"44763747737d0ce40a-8d52-43cd-b7ac-835ffaa7e346.jpeg\",\"199895970941c4b7b09-a392-40d5-8e9b-74373ebdd101.jpeg\"]', '995', '1700', 1),
(5910, 137, 9, 0, '[\"11494233280img_5152.jpeg\",\"3618380671dc31cf54-d456-458c-abf2-0aadab807c08.jpeg\",\"85240622221bf0a2f8-f700-4529-bd6c-70053428ca7a.jpeg\",\"44763747737d0ce40a-8d52-43cd-b7ac-835ffaa7e346.jpeg\",\"199895970941c4b7b09-a392-40d5-8e9b-74373ebdd101.jpeg\"]', '995', '1700', 1),
(5911, 137, 9, 0, '[\"11494233280img_5152.jpeg\",\"3618380671dc31cf54-d456-458c-abf2-0aadab807c08.jpeg\",\"85240622221bf0a2f8-f700-4529-bd6c-70053428ca7a.jpeg\",\"44763747737d0ce40a-8d52-43cd-b7ac-835ffaa7e346.jpeg\",\"199895970941c4b7b09-a392-40d5-8e9b-74373ebdd101.jpeg\"]', '995', '1700', 1),
(5927, 143, 11, 10, '[\"7687487650img_5159.jpeg\",\"17012726441b6c6ba04-3fde-4e36-9cf5-16f2a0d22294.jpeg\",\"2146882450267ac89ccfa2e4fdea9bb3be8204b8f24.mov\"]', '949', '1500', 1),
(5928, 143, 11, 10, '[\"7687487650img_5159.jpeg\",\"17012726441b6c6ba04-3fde-4e36-9cf5-16f2a0d22294.jpeg\",\"2146882450267ac89ccfa2e4fdea9bb3be8204b8f24.mov\"]', '949', '1500', 1),
(5929, 143, 11, 10, '[\"7687487650img_5159.jpeg\",\"17012726441b6c6ba04-3fde-4e36-9cf5-16f2a0d22294.jpeg\",\"2146882450267ac89ccfa2e4fdea9bb3be8204b8f24.mov\"]', '949', '1500', 1),
(5930, 149, 9, 4, '[\"2268836340img_5954.jpeg\",\"12246461691img_5955.jpeg\",\"13153031842img_5957.jpeg\",\"19795125123img_5956.jpeg\",\"18180506014img_5959.jpeg\"]', '949', '1700', 0),
(5931, 149, 9, 4, '[\"2268836340img_5954.jpeg\",\"12246461691img_5955.jpeg\",\"13153031842img_5957.jpeg\",\"19795125123img_5956.jpeg\",\"18180506014img_5959.jpeg\"]', '949', '1700', 0),
(5932, 149, 9, 4, '[\"2268836340img_5954.jpeg\",\"12246461691img_5955.jpeg\",\"13153031842img_5957.jpeg\",\"19795125123img_5956.jpeg\",\"18180506014img_5959.jpeg\"]', '949', '1700', 0),
(5933, 149, 9, 4, '[\"2268836340img_5954.jpeg\",\"12246461691img_5955.jpeg\",\"13153031842img_5957.jpeg\",\"19795125123img_5956.jpeg\",\"18180506014img_5959.jpeg\"]', '949', '1700', 0),
(5934, 149, 9, 4, '[\"2268836340img_5954.jpeg\",\"12246461691img_5955.jpeg\",\"13153031842img_5957.jpeg\",\"19795125123img_5956.jpeg\",\"18180506014img_5959.jpeg\"]', '949', '1700', 0),
(5935, 149, 11, 4, '[\"2268836340img_5954.jpeg\",\"12246461691img_5955.jpeg\",\"13153031842img_5957.jpeg\",\"19795125123img_5956.jpeg\",\"18180506014img_5959.jpeg\"]', '949', '1700', 0),
(5936, 149, 11, 4, '[\"2268836340img_5954.jpeg\",\"12246461691img_5955.jpeg\",\"13153031842img_5957.jpeg\",\"19795125123img_5956.jpeg\",\"18180506014img_5959.jpeg\"]', '949', '1700', 0),
(5937, 149, 11, 4, '[\"2268836340img_5954.jpeg\",\"12246461691img_5955.jpeg\",\"13153031842img_5957.jpeg\",\"19795125123img_5956.jpeg\",\"18180506014img_5959.jpeg\"]', '949', '1700', 0),
(5938, 149, 11, 4, '[\"2268836340img_5954.jpeg\",\"12246461691img_5955.jpeg\",\"13153031842img_5957.jpeg\",\"19795125123img_5956.jpeg\",\"18180506014img_5959.jpeg\"]', '949', '1700', 0),
(5939, 149, 11, 4, '[\"2268836340img_5954.jpeg\",\"12246461691img_5955.jpeg\",\"13153031842img_5957.jpeg\",\"19795125123img_5956.jpeg\",\"18180506014img_5959.jpeg\"]', '949', '1700', 0),
(5940, 149, 21, 4, '[\"2268836340img_5954.jpeg\",\"12246461691img_5955.jpeg\",\"13153031842img_5957.jpeg\",\"19795125123img_5956.jpeg\",\"18180506014img_5959.jpeg\"]', '949', '1700', 0),
(5941, 149, 21, 4, '[\"2268836340img_5954.jpeg\",\"12246461691img_5955.jpeg\",\"13153031842img_5957.jpeg\",\"19795125123img_5956.jpeg\",\"18180506014img_5959.jpeg\"]', '949', '1700', 0),
(5942, 149, 21, 4, '[\"2268836340img_5954.jpeg\",\"12246461691img_5955.jpeg\",\"13153031842img_5957.jpeg\",\"19795125123img_5956.jpeg\",\"18180506014img_5959.jpeg\"]', '949', '1700', 0),
(5943, 149, 21, 4, '[\"2268836340img_5954.jpeg\",\"12246461691img_5955.jpeg\",\"13153031842img_5957.jpeg\",\"19795125123img_5956.jpeg\",\"18180506014img_5959.jpeg\"]', '949', '1700', 0),
(5944, 149, 21, 4, '[\"2268836340img_5954.jpeg\",\"12246461691img_5955.jpeg\",\"13153031842img_5957.jpeg\",\"19795125123img_5956.jpeg\",\"18180506014img_5959.jpeg\"]', '949', '1700', 0),
(5945, 149, 22, 4, '[\"2268836340img_5954.jpeg\",\"12246461691img_5955.jpeg\",\"13153031842img_5957.jpeg\",\"19795125123img_5956.jpeg\",\"18180506014img_5959.jpeg\"]', '949', '1700', 0),
(5946, 149, 22, 4, '[\"2268836340img_5954.jpeg\",\"12246461691img_5955.jpeg\",\"13153031842img_5957.jpeg\",\"19795125123img_5956.jpeg\",\"18180506014img_5959.jpeg\"]', '949', '1700', 0),
(5947, 149, 22, 4, '[\"2268836340img_5954.jpeg\",\"12246461691img_5955.jpeg\",\"13153031842img_5957.jpeg\",\"19795125123img_5956.jpeg\",\"18180506014img_5959.jpeg\"]', '949', '1700', 0),
(5948, 149, 22, 4, '[\"2268836340img_5954.jpeg\",\"12246461691img_5955.jpeg\",\"13153031842img_5957.jpeg\",\"19795125123img_5956.jpeg\",\"18180506014img_5959.jpeg\"]', '949', '1700', 0),
(5949, 149, 22, 4, '[\"2268836340img_5954.jpeg\",\"12246461691img_5955.jpeg\",\"13153031842img_5957.jpeg\",\"19795125123img_5956.jpeg\",\"18180506014img_5959.jpeg\"]', '949', '1700', 0),
(5960, 119, 33, 12, '[\"2733353860img_4763.jpeg\"]', '1099', '1500', 0),
(6075, 178, 9, 19, '[\"110277131300400f93e-99f1-4123-a55f-be6f925a9440.jpeg\",\"4882038051e992c6b5-f5a1-4b7d-86ec-a878d3b201cf.jpeg\",\"41241465297cc958e-3eeb-4365-81d4-735d3d4fbf46.jpeg\",\"112028786930ac13684-a679-4065-a7ce-659fc8bd6709.jpeg\",\"18416048404dc5b9398-6a12-438f-9edc-823c38ed1033.jpeg\",\"4552897625c60a262d-cfcc-4218-9b8c-0fc808802f54.jpeg\",\"21101438366b9f30025-36ac-4170-8415-bbc11798deae.jpeg\"]', '799', '1800', 6),
(6076, 178, 9, 19, '[\"110277131300400f93e-99f1-4123-a55f-be6f925a9440.jpeg\",\"4882038051e992c6b5-f5a1-4b7d-86ec-a878d3b201cf.jpeg\",\"41241465297cc958e-3eeb-4365-81d4-735d3d4fbf46.jpeg\",\"112028786930ac13684-a679-4065-a7ce-659fc8bd6709.jpeg\",\"18416048404dc5b9398-6a12-438f-9edc-823c38ed1033.jpeg\",\"4552897625c60a262d-cfcc-4218-9b8c-0fc808802f54.jpeg\",\"21101438366b9f30025-36ac-4170-8415-bbc11798deae.jpeg\"]', '799', '1800', 6),
(6077, 178, 9, 19, '[\"110277131300400f93e-99f1-4123-a55f-be6f925a9440.jpeg\",\"4882038051e992c6b5-f5a1-4b7d-86ec-a878d3b201cf.jpeg\",\"41241465297cc958e-3eeb-4365-81d4-735d3d4fbf46.jpeg\",\"112028786930ac13684-a679-4065-a7ce-659fc8bd6709.jpeg\",\"18416048404dc5b9398-6a12-438f-9edc-823c38ed1033.jpeg\",\"4552897625c60a262d-cfcc-4218-9b8c-0fc808802f54.jpeg\",\"21101438366b9f30025-36ac-4170-8415-bbc11798deae.jpeg\"]', '799', '1800', 6),
(6078, 178, 9, 19, '[\"110277131300400f93e-99f1-4123-a55f-be6f925a9440.jpeg\",\"4882038051e992c6b5-f5a1-4b7d-86ec-a878d3b201cf.jpeg\",\"41241465297cc958e-3eeb-4365-81d4-735d3d4fbf46.jpeg\",\"112028786930ac13684-a679-4065-a7ce-659fc8bd6709.jpeg\",\"18416048404dc5b9398-6a12-438f-9edc-823c38ed1033.jpeg\",\"4552897625c60a262d-cfcc-4218-9b8c-0fc808802f54.jpeg\",\"21101438366b9f30025-36ac-4170-8415-bbc11798deae.jpeg\"]', '799', '1800', 6),
(6079, 178, 9, 19, '[\"110277131300400f93e-99f1-4123-a55f-be6f925a9440.jpeg\",\"4882038051e992c6b5-f5a1-4b7d-86ec-a878d3b201cf.jpeg\",\"41241465297cc958e-3eeb-4365-81d4-735d3d4fbf46.jpeg\",\"112028786930ac13684-a679-4065-a7ce-659fc8bd6709.jpeg\",\"18416048404dc5b9398-6a12-438f-9edc-823c38ed1033.jpeg\",\"4552897625c60a262d-cfcc-4218-9b8c-0fc808802f54.jpeg\",\"21101438366b9f30025-36ac-4170-8415-bbc11798deae.jpeg\"]', '799', '1800', 6),
(6080, 178, 9, 19, '[\"110277131300400f93e-99f1-4123-a55f-be6f925a9440.jpeg\",\"4882038051e992c6b5-f5a1-4b7d-86ec-a878d3b201cf.jpeg\",\"41241465297cc958e-3eeb-4365-81d4-735d3d4fbf46.jpeg\",\"112028786930ac13684-a679-4065-a7ce-659fc8bd6709.jpeg\",\"18416048404dc5b9398-6a12-438f-9edc-823c38ed1033.jpeg\",\"4552897625c60a262d-cfcc-4218-9b8c-0fc808802f54.jpeg\",\"21101438366b9f30025-36ac-4170-8415-bbc11798deae.jpeg\"]', '799', '1800', 6),
(6081, 178, 9, 19, '[\"110277131300400f93e-99f1-4123-a55f-be6f925a9440.jpeg\",\"4882038051e992c6b5-f5a1-4b7d-86ec-a878d3b201cf.jpeg\",\"41241465297cc958e-3eeb-4365-81d4-735d3d4fbf46.jpeg\",\"112028786930ac13684-a679-4065-a7ce-659fc8bd6709.jpeg\",\"18416048404dc5b9398-6a12-438f-9edc-823c38ed1033.jpeg\",\"4552897625c60a262d-cfcc-4218-9b8c-0fc808802f54.jpeg\",\"21101438366b9f30025-36ac-4170-8415-bbc11798deae.jpeg\"]', '799', '1800', 6),
(6082, 178, 11, 19, '[\"110277131300400f93e-99f1-4123-a55f-be6f925a9440.jpeg\",\"4882038051e992c6b5-f5a1-4b7d-86ec-a878d3b201cf.jpeg\",\"41241465297cc958e-3eeb-4365-81d4-735d3d4fbf46.jpeg\",\"112028786930ac13684-a679-4065-a7ce-659fc8bd6709.jpeg\",\"18416048404dc5b9398-6a12-438f-9edc-823c38ed1033.jpeg\",\"4552897625c60a262d-cfcc-4218-9b8c-0fc808802f54.jpeg\",\"21101438366b9f30025-36ac-4170-8415-bbc11798deae.jpeg\"]', '799', '1800', 6),
(6083, 178, 11, 19, '[\"110277131300400f93e-99f1-4123-a55f-be6f925a9440.jpeg\",\"4882038051e992c6b5-f5a1-4b7d-86ec-a878d3b201cf.jpeg\",\"41241465297cc958e-3eeb-4365-81d4-735d3d4fbf46.jpeg\",\"112028786930ac13684-a679-4065-a7ce-659fc8bd6709.jpeg\",\"18416048404dc5b9398-6a12-438f-9edc-823c38ed1033.jpeg\",\"4552897625c60a262d-cfcc-4218-9b8c-0fc808802f54.jpeg\",\"21101438366b9f30025-36ac-4170-8415-bbc11798deae.jpeg\"]', '799', '1800', 6),
(6084, 178, 11, 19, '[\"110277131300400f93e-99f1-4123-a55f-be6f925a9440.jpeg\",\"4882038051e992c6b5-f5a1-4b7d-86ec-a878d3b201cf.jpeg\",\"41241465297cc958e-3eeb-4365-81d4-735d3d4fbf46.jpeg\",\"112028786930ac13684-a679-4065-a7ce-659fc8bd6709.jpeg\",\"18416048404dc5b9398-6a12-438f-9edc-823c38ed1033.jpeg\",\"4552897625c60a262d-cfcc-4218-9b8c-0fc808802f54.jpeg\",\"21101438366b9f30025-36ac-4170-8415-bbc11798deae.jpeg\"]', '799', '1800', 6),
(6085, 178, 11, 19, '[\"110277131300400f93e-99f1-4123-a55f-be6f925a9440.jpeg\",\"4882038051e992c6b5-f5a1-4b7d-86ec-a878d3b201cf.jpeg\",\"41241465297cc958e-3eeb-4365-81d4-735d3d4fbf46.jpeg\",\"112028786930ac13684-a679-4065-a7ce-659fc8bd6709.jpeg\",\"18416048404dc5b9398-6a12-438f-9edc-823c38ed1033.jpeg\",\"4552897625c60a262d-cfcc-4218-9b8c-0fc808802f54.jpeg\",\"21101438366b9f30025-36ac-4170-8415-bbc11798deae.jpeg\"]', '799', '1800', 6),
(6086, 178, 11, 19, '[\"110277131300400f93e-99f1-4123-a55f-be6f925a9440.jpeg\",\"4882038051e992c6b5-f5a1-4b7d-86ec-a878d3b201cf.jpeg\",\"41241465297cc958e-3eeb-4365-81d4-735d3d4fbf46.jpeg\",\"112028786930ac13684-a679-4065-a7ce-659fc8bd6709.jpeg\",\"18416048404dc5b9398-6a12-438f-9edc-823c38ed1033.jpeg\",\"4552897625c60a262d-cfcc-4218-9b8c-0fc808802f54.jpeg\",\"21101438366b9f30025-36ac-4170-8415-bbc11798deae.jpeg\"]', '799', '1800', 6),
(6087, 178, 11, 19, '[\"110277131300400f93e-99f1-4123-a55f-be6f925a9440.jpeg\",\"4882038051e992c6b5-f5a1-4b7d-86ec-a878d3b201cf.jpeg\",\"41241465297cc958e-3eeb-4365-81d4-735d3d4fbf46.jpeg\",\"112028786930ac13684-a679-4065-a7ce-659fc8bd6709.jpeg\",\"18416048404dc5b9398-6a12-438f-9edc-823c38ed1033.jpeg\",\"4552897625c60a262d-cfcc-4218-9b8c-0fc808802f54.jpeg\",\"21101438366b9f30025-36ac-4170-8415-bbc11798deae.jpeg\"]', '799', '1800', 6),
(6088, 178, 11, 19, '[\"110277131300400f93e-99f1-4123-a55f-be6f925a9440.jpeg\",\"4882038051e992c6b5-f5a1-4b7d-86ec-a878d3b201cf.jpeg\",\"41241465297cc958e-3eeb-4365-81d4-735d3d4fbf46.jpeg\",\"112028786930ac13684-a679-4065-a7ce-659fc8bd6709.jpeg\",\"18416048404dc5b9398-6a12-438f-9edc-823c38ed1033.jpeg\",\"4552897625c60a262d-cfcc-4218-9b8c-0fc808802f54.jpeg\",\"21101438366b9f30025-36ac-4170-8415-bbc11798deae.jpeg\"]', '799', '1800', 6),
(6089, 178, 21, 19, '[\"110277131300400f93e-99f1-4123-a55f-be6f925a9440.jpeg\",\"4882038051e992c6b5-f5a1-4b7d-86ec-a878d3b201cf.jpeg\",\"41241465297cc958e-3eeb-4365-81d4-735d3d4fbf46.jpeg\",\"112028786930ac13684-a679-4065-a7ce-659fc8bd6709.jpeg\",\"18416048404dc5b9398-6a12-438f-9edc-823c38ed1033.jpeg\",\"4552897625c60a262d-cfcc-4218-9b8c-0fc808802f54.jpeg\",\"21101438366b9f30025-36ac-4170-8415-bbc11798deae.jpeg\"]', '799', '1800', 6),
(6090, 178, 21, 19, '[\"110277131300400f93e-99f1-4123-a55f-be6f925a9440.jpeg\",\"4882038051e992c6b5-f5a1-4b7d-86ec-a878d3b201cf.jpeg\",\"41241465297cc958e-3eeb-4365-81d4-735d3d4fbf46.jpeg\",\"112028786930ac13684-a679-4065-a7ce-659fc8bd6709.jpeg\",\"18416048404dc5b9398-6a12-438f-9edc-823c38ed1033.jpeg\",\"4552897625c60a262d-cfcc-4218-9b8c-0fc808802f54.jpeg\",\"21101438366b9f30025-36ac-4170-8415-bbc11798deae.jpeg\"]', '799', '1800', 6),
(6091, 178, 21, 19, '[\"110277131300400f93e-99f1-4123-a55f-be6f925a9440.jpeg\",\"4882038051e992c6b5-f5a1-4b7d-86ec-a878d3b201cf.jpeg\",\"41241465297cc958e-3eeb-4365-81d4-735d3d4fbf46.jpeg\",\"112028786930ac13684-a679-4065-a7ce-659fc8bd6709.jpeg\",\"18416048404dc5b9398-6a12-438f-9edc-823c38ed1033.jpeg\",\"4552897625c60a262d-cfcc-4218-9b8c-0fc808802f54.jpeg\",\"21101438366b9f30025-36ac-4170-8415-bbc11798deae.jpeg\"]', '799', '1800', 6),
(6092, 178, 21, 19, '[\"110277131300400f93e-99f1-4123-a55f-be6f925a9440.jpeg\",\"4882038051e992c6b5-f5a1-4b7d-86ec-a878d3b201cf.jpeg\",\"41241465297cc958e-3eeb-4365-81d4-735d3d4fbf46.jpeg\",\"112028786930ac13684-a679-4065-a7ce-659fc8bd6709.jpeg\",\"18416048404dc5b9398-6a12-438f-9edc-823c38ed1033.jpeg\",\"4552897625c60a262d-cfcc-4218-9b8c-0fc808802f54.jpeg\",\"21101438366b9f30025-36ac-4170-8415-bbc11798deae.jpeg\"]', '799', '1800', 6),
(6093, 178, 21, 19, '[\"110277131300400f93e-99f1-4123-a55f-be6f925a9440.jpeg\",\"4882038051e992c6b5-f5a1-4b7d-86ec-a878d3b201cf.jpeg\",\"41241465297cc958e-3eeb-4365-81d4-735d3d4fbf46.jpeg\",\"112028786930ac13684-a679-4065-a7ce-659fc8bd6709.jpeg\",\"18416048404dc5b9398-6a12-438f-9edc-823c38ed1033.jpeg\",\"4552897625c60a262d-cfcc-4218-9b8c-0fc808802f54.jpeg\",\"21101438366b9f30025-36ac-4170-8415-bbc11798deae.jpeg\"]', '799', '1800', 6),
(6094, 178, 21, 19, '[\"110277131300400f93e-99f1-4123-a55f-be6f925a9440.jpeg\",\"4882038051e992c6b5-f5a1-4b7d-86ec-a878d3b201cf.jpeg\",\"41241465297cc958e-3eeb-4365-81d4-735d3d4fbf46.jpeg\",\"112028786930ac13684-a679-4065-a7ce-659fc8bd6709.jpeg\",\"18416048404dc5b9398-6a12-438f-9edc-823c38ed1033.jpeg\",\"4552897625c60a262d-cfcc-4218-9b8c-0fc808802f54.jpeg\",\"21101438366b9f30025-36ac-4170-8415-bbc11798deae.jpeg\"]', '799', '1800', 6),
(6095, 178, 21, 19, '[\"110277131300400f93e-99f1-4123-a55f-be6f925a9440.jpeg\",\"4882038051e992c6b5-f5a1-4b7d-86ec-a878d3b201cf.jpeg\",\"41241465297cc958e-3eeb-4365-81d4-735d3d4fbf46.jpeg\",\"112028786930ac13684-a679-4065-a7ce-659fc8bd6709.jpeg\",\"18416048404dc5b9398-6a12-438f-9edc-823c38ed1033.jpeg\",\"4552897625c60a262d-cfcc-4218-9b8c-0fc808802f54.jpeg\",\"21101438366b9f30025-36ac-4170-8415-bbc11798deae.jpeg\"]', '799', '1800', 6),
(6096, 178, 22, 19, '[\"110277131300400f93e-99f1-4123-a55f-be6f925a9440.jpeg\",\"4882038051e992c6b5-f5a1-4b7d-86ec-a878d3b201cf.jpeg\",\"41241465297cc958e-3eeb-4365-81d4-735d3d4fbf46.jpeg\",\"112028786930ac13684-a679-4065-a7ce-659fc8bd6709.jpeg\",\"18416048404dc5b9398-6a12-438f-9edc-823c38ed1033.jpeg\",\"4552897625c60a262d-cfcc-4218-9b8c-0fc808802f54.jpeg\",\"21101438366b9f30025-36ac-4170-8415-bbc11798deae.jpeg\"]', '799', '1800', 6),
(6097, 178, 22, 19, '[\"110277131300400f93e-99f1-4123-a55f-be6f925a9440.jpeg\",\"4882038051e992c6b5-f5a1-4b7d-86ec-a878d3b201cf.jpeg\",\"41241465297cc958e-3eeb-4365-81d4-735d3d4fbf46.jpeg\",\"112028786930ac13684-a679-4065-a7ce-659fc8bd6709.jpeg\",\"18416048404dc5b9398-6a12-438f-9edc-823c38ed1033.jpeg\",\"4552897625c60a262d-cfcc-4218-9b8c-0fc808802f54.jpeg\",\"21101438366b9f30025-36ac-4170-8415-bbc11798deae.jpeg\"]', '799', '1800', 6),
(6098, 178, 22, 19, '[\"110277131300400f93e-99f1-4123-a55f-be6f925a9440.jpeg\",\"4882038051e992c6b5-f5a1-4b7d-86ec-a878d3b201cf.jpeg\",\"41241465297cc958e-3eeb-4365-81d4-735d3d4fbf46.jpeg\",\"112028786930ac13684-a679-4065-a7ce-659fc8bd6709.jpeg\",\"18416048404dc5b9398-6a12-438f-9edc-823c38ed1033.jpeg\",\"4552897625c60a262d-cfcc-4218-9b8c-0fc808802f54.jpeg\",\"21101438366b9f30025-36ac-4170-8415-bbc11798deae.jpeg\"]', '799', '1800', 6),
(6099, 178, 22, 19, '[\"110277131300400f93e-99f1-4123-a55f-be6f925a9440.jpeg\",\"4882038051e992c6b5-f5a1-4b7d-86ec-a878d3b201cf.jpeg\",\"41241465297cc958e-3eeb-4365-81d4-735d3d4fbf46.jpeg\",\"112028786930ac13684-a679-4065-a7ce-659fc8bd6709.jpeg\",\"18416048404dc5b9398-6a12-438f-9edc-823c38ed1033.jpeg\",\"4552897625c60a262d-cfcc-4218-9b8c-0fc808802f54.jpeg\",\"21101438366b9f30025-36ac-4170-8415-bbc11798deae.jpeg\"]', '799', '1800', 6),
(6100, 178, 22, 19, '[\"110277131300400f93e-99f1-4123-a55f-be6f925a9440.jpeg\",\"4882038051e992c6b5-f5a1-4b7d-86ec-a878d3b201cf.jpeg\",\"41241465297cc958e-3eeb-4365-81d4-735d3d4fbf46.jpeg\",\"112028786930ac13684-a679-4065-a7ce-659fc8bd6709.jpeg\",\"18416048404dc5b9398-6a12-438f-9edc-823c38ed1033.jpeg\",\"4552897625c60a262d-cfcc-4218-9b8c-0fc808802f54.jpeg\",\"21101438366b9f30025-36ac-4170-8415-bbc11798deae.jpeg\"]', '799', '1800', 6),
(6101, 178, 22, 19, '[\"110277131300400f93e-99f1-4123-a55f-be6f925a9440.jpeg\",\"4882038051e992c6b5-f5a1-4b7d-86ec-a878d3b201cf.jpeg\",\"41241465297cc958e-3eeb-4365-81d4-735d3d4fbf46.jpeg\",\"112028786930ac13684-a679-4065-a7ce-659fc8bd6709.jpeg\",\"18416048404dc5b9398-6a12-438f-9edc-823c38ed1033.jpeg\",\"4552897625c60a262d-cfcc-4218-9b8c-0fc808802f54.jpeg\",\"21101438366b9f30025-36ac-4170-8415-bbc11798deae.jpeg\"]', '799', '1800', 6),
(6102, 178, 22, 19, '[\"110277131300400f93e-99f1-4123-a55f-be6f925a9440.jpeg\",\"4882038051e992c6b5-f5a1-4b7d-86ec-a878d3b201cf.jpeg\",\"41241465297cc958e-3eeb-4365-81d4-735d3d4fbf46.jpeg\",\"112028786930ac13684-a679-4065-a7ce-659fc8bd6709.jpeg\",\"18416048404dc5b9398-6a12-438f-9edc-823c38ed1033.jpeg\",\"4552897625c60a262d-cfcc-4218-9b8c-0fc808802f54.jpeg\",\"21101438366b9f30025-36ac-4170-8415-bbc11798deae.jpeg\"]', '799', '1800', 6),
(6131, 179, 8, 10, '[\"45311247902acb8097-220a-4057-a6a4-7e2617df68ab.jpeg\",\"5667355361acfa4ea3-e8a5-4a73-8ae7-ab4ffa2e9d2d.jpeg\",\"6568351152b1f40d98-f769-4b20-a8f0-34d6e03049f1.jpeg\",\"12928755263b3482d2f-a286-4b07-bc85-9d9a940cfee1.jpeg\",\"1562769276428bd9621-c2ab-4c98-ac86-26b1705324a3.jpeg\",\"10786542165908b2bad-f419-4e3c-9557-020b54b418b3.jpeg\",\"5098841376d68b6f50-fb48-493f-8148-abd5a54198d2.jpeg\"]', '649', '1500', 9),
(6132, 179, 8, 10, '[\"45311247902acb8097-220a-4057-a6a4-7e2617df68ab.jpeg\",\"5667355361acfa4ea3-e8a5-4a73-8ae7-ab4ffa2e9d2d.jpeg\",\"6568351152b1f40d98-f769-4b20-a8f0-34d6e03049f1.jpeg\",\"12928755263b3482d2f-a286-4b07-bc85-9d9a940cfee1.jpeg\",\"1562769276428bd9621-c2ab-4c98-ac86-26b1705324a3.jpeg\",\"10786542165908b2bad-f419-4e3c-9557-020b54b418b3.jpeg\",\"5098841376d68b6f50-fb48-493f-8148-abd5a54198d2.jpeg\"]', '649', '1500', 9),
(6133, 179, 8, 10, '[\"45311247902acb8097-220a-4057-a6a4-7e2617df68ab.jpeg\",\"5667355361acfa4ea3-e8a5-4a73-8ae7-ab4ffa2e9d2d.jpeg\",\"6568351152b1f40d98-f769-4b20-a8f0-34d6e03049f1.jpeg\",\"12928755263b3482d2f-a286-4b07-bc85-9d9a940cfee1.jpeg\",\"1562769276428bd9621-c2ab-4c98-ac86-26b1705324a3.jpeg\",\"10786542165908b2bad-f419-4e3c-9557-020b54b418b3.jpeg\",\"5098841376d68b6f50-fb48-493f-8148-abd5a54198d2.jpeg\"]', '649', '1500', 9),
(6134, 179, 8, 10, '[\"45311247902acb8097-220a-4057-a6a4-7e2617df68ab.jpeg\",\"5667355361acfa4ea3-e8a5-4a73-8ae7-ab4ffa2e9d2d.jpeg\",\"6568351152b1f40d98-f769-4b20-a8f0-34d6e03049f1.jpeg\",\"12928755263b3482d2f-a286-4b07-bc85-9d9a940cfee1.jpeg\",\"1562769276428bd9621-c2ab-4c98-ac86-26b1705324a3.jpeg\",\"10786542165908b2bad-f419-4e3c-9557-020b54b418b3.jpeg\",\"5098841376d68b6f50-fb48-493f-8148-abd5a54198d2.jpeg\"]', '649', '1500', 9),
(6135, 179, 8, 10, '[\"45311247902acb8097-220a-4057-a6a4-7e2617df68ab.jpeg\",\"5667355361acfa4ea3-e8a5-4a73-8ae7-ab4ffa2e9d2d.jpeg\",\"6568351152b1f40d98-f769-4b20-a8f0-34d6e03049f1.jpeg\",\"12928755263b3482d2f-a286-4b07-bc85-9d9a940cfee1.jpeg\",\"1562769276428bd9621-c2ab-4c98-ac86-26b1705324a3.jpeg\",\"10786542165908b2bad-f419-4e3c-9557-020b54b418b3.jpeg\",\"5098841376d68b6f50-fb48-493f-8148-abd5a54198d2.jpeg\"]', '649', '1500', 9),
(6136, 179, 8, 10, '[\"45311247902acb8097-220a-4057-a6a4-7e2617df68ab.jpeg\",\"5667355361acfa4ea3-e8a5-4a73-8ae7-ab4ffa2e9d2d.jpeg\",\"6568351152b1f40d98-f769-4b20-a8f0-34d6e03049f1.jpeg\",\"12928755263b3482d2f-a286-4b07-bc85-9d9a940cfee1.jpeg\",\"1562769276428bd9621-c2ab-4c98-ac86-26b1705324a3.jpeg\",\"10786542165908b2bad-f419-4e3c-9557-020b54b418b3.jpeg\",\"5098841376d68b6f50-fb48-493f-8148-abd5a54198d2.jpeg\"]', '649', '1500', 9),
(6137, 179, 8, 10, '[\"45311247902acb8097-220a-4057-a6a4-7e2617df68ab.jpeg\",\"5667355361acfa4ea3-e8a5-4a73-8ae7-ab4ffa2e9d2d.jpeg\",\"6568351152b1f40d98-f769-4b20-a8f0-34d6e03049f1.jpeg\",\"12928755263b3482d2f-a286-4b07-bc85-9d9a940cfee1.jpeg\",\"1562769276428bd9621-c2ab-4c98-ac86-26b1705324a3.jpeg\",\"10786542165908b2bad-f419-4e3c-9557-020b54b418b3.jpeg\",\"5098841376d68b6f50-fb48-493f-8148-abd5a54198d2.jpeg\"]', '649', '1500', 9),
(6138, 179, 9, 10, '[\"45311247902acb8097-220a-4057-a6a4-7e2617df68ab.jpeg\",\"5667355361acfa4ea3-e8a5-4a73-8ae7-ab4ffa2e9d2d.jpeg\",\"6568351152b1f40d98-f769-4b20-a8f0-34d6e03049f1.jpeg\",\"12928755263b3482d2f-a286-4b07-bc85-9d9a940cfee1.jpeg\",\"1562769276428bd9621-c2ab-4c98-ac86-26b1705324a3.jpeg\",\"10786542165908b2bad-f419-4e3c-9557-020b54b418b3.jpeg\",\"5098841376d68b6f50-fb48-493f-8148-abd5a54198d2.jpeg\"]', '649', '1500', 10),
(6139, 179, 9, 10, '[\"45311247902acb8097-220a-4057-a6a4-7e2617df68ab.jpeg\",\"5667355361acfa4ea3-e8a5-4a73-8ae7-ab4ffa2e9d2d.jpeg\",\"6568351152b1f40d98-f769-4b20-a8f0-34d6e03049f1.jpeg\",\"12928755263b3482d2f-a286-4b07-bc85-9d9a940cfee1.jpeg\",\"1562769276428bd9621-c2ab-4c98-ac86-26b1705324a3.jpeg\",\"10786542165908b2bad-f419-4e3c-9557-020b54b418b3.jpeg\",\"5098841376d68b6f50-fb48-493f-8148-abd5a54198d2.jpeg\"]', '649', '1500', 10),
(6140, 179, 9, 10, '[\"45311247902acb8097-220a-4057-a6a4-7e2617df68ab.jpeg\",\"5667355361acfa4ea3-e8a5-4a73-8ae7-ab4ffa2e9d2d.jpeg\",\"6568351152b1f40d98-f769-4b20-a8f0-34d6e03049f1.jpeg\",\"12928755263b3482d2f-a286-4b07-bc85-9d9a940cfee1.jpeg\",\"1562769276428bd9621-c2ab-4c98-ac86-26b1705324a3.jpeg\",\"10786542165908b2bad-f419-4e3c-9557-020b54b418b3.jpeg\",\"5098841376d68b6f50-fb48-493f-8148-abd5a54198d2.jpeg\"]', '649', '1500', 10),
(6141, 179, 9, 10, '[\"45311247902acb8097-220a-4057-a6a4-7e2617df68ab.jpeg\",\"5667355361acfa4ea3-e8a5-4a73-8ae7-ab4ffa2e9d2d.jpeg\",\"6568351152b1f40d98-f769-4b20-a8f0-34d6e03049f1.jpeg\",\"12928755263b3482d2f-a286-4b07-bc85-9d9a940cfee1.jpeg\",\"1562769276428bd9621-c2ab-4c98-ac86-26b1705324a3.jpeg\",\"10786542165908b2bad-f419-4e3c-9557-020b54b418b3.jpeg\",\"5098841376d68b6f50-fb48-493f-8148-abd5a54198d2.jpeg\"]', '649', '1500', 10),
(6142, 179, 9, 10, '[\"45311247902acb8097-220a-4057-a6a4-7e2617df68ab.jpeg\",\"5667355361acfa4ea3-e8a5-4a73-8ae7-ab4ffa2e9d2d.jpeg\",\"6568351152b1f40d98-f769-4b20-a8f0-34d6e03049f1.jpeg\",\"12928755263b3482d2f-a286-4b07-bc85-9d9a940cfee1.jpeg\",\"1562769276428bd9621-c2ab-4c98-ac86-26b1705324a3.jpeg\",\"10786542165908b2bad-f419-4e3c-9557-020b54b418b3.jpeg\",\"5098841376d68b6f50-fb48-493f-8148-abd5a54198d2.jpeg\"]', '649', '1500', 10),
(6143, 179, 9, 10, '[\"45311247902acb8097-220a-4057-a6a4-7e2617df68ab.jpeg\",\"5667355361acfa4ea3-e8a5-4a73-8ae7-ab4ffa2e9d2d.jpeg\",\"6568351152b1f40d98-f769-4b20-a8f0-34d6e03049f1.jpeg\",\"12928755263b3482d2f-a286-4b07-bc85-9d9a940cfee1.jpeg\",\"1562769276428bd9621-c2ab-4c98-ac86-26b1705324a3.jpeg\",\"10786542165908b2bad-f419-4e3c-9557-020b54b418b3.jpeg\",\"5098841376d68b6f50-fb48-493f-8148-abd5a54198d2.jpeg\"]', '649', '1500', 10),
(6144, 179, 9, 10, '[\"45311247902acb8097-220a-4057-a6a4-7e2617df68ab.jpeg\",\"5667355361acfa4ea3-e8a5-4a73-8ae7-ab4ffa2e9d2d.jpeg\",\"6568351152b1f40d98-f769-4b20-a8f0-34d6e03049f1.jpeg\",\"12928755263b3482d2f-a286-4b07-bc85-9d9a940cfee1.jpeg\",\"1562769276428bd9621-c2ab-4c98-ac86-26b1705324a3.jpeg\",\"10786542165908b2bad-f419-4e3c-9557-020b54b418b3.jpeg\",\"5098841376d68b6f50-fb48-493f-8148-abd5a54198d2.jpeg\"]', '649', '1500', 10),
(6145, 179, 11, 10, '[\"45311247902acb8097-220a-4057-a6a4-7e2617df68ab.jpeg\",\"5667355361acfa4ea3-e8a5-4a73-8ae7-ab4ffa2e9d2d.jpeg\",\"6568351152b1f40d98-f769-4b20-a8f0-34d6e03049f1.jpeg\",\"12928755263b3482d2f-a286-4b07-bc85-9d9a940cfee1.jpeg\",\"1562769276428bd9621-c2ab-4c98-ac86-26b1705324a3.jpeg\",\"10786542165908b2bad-f419-4e3c-9557-020b54b418b3.jpeg\",\"5098841376d68b6f50-fb48-493f-8148-abd5a54198d2.jpeg\"]', '649', '1500', 10),
(6146, 179, 11, 10, '[\"45311247902acb8097-220a-4057-a6a4-7e2617df68ab.jpeg\",\"5667355361acfa4ea3-e8a5-4a73-8ae7-ab4ffa2e9d2d.jpeg\",\"6568351152b1f40d98-f769-4b20-a8f0-34d6e03049f1.jpeg\",\"12928755263b3482d2f-a286-4b07-bc85-9d9a940cfee1.jpeg\",\"1562769276428bd9621-c2ab-4c98-ac86-26b1705324a3.jpeg\",\"10786542165908b2bad-f419-4e3c-9557-020b54b418b3.jpeg\",\"5098841376d68b6f50-fb48-493f-8148-abd5a54198d2.jpeg\"]', '649', '1500', 10),
(6147, 179, 11, 10, '[\"45311247902acb8097-220a-4057-a6a4-7e2617df68ab.jpeg\",\"5667355361acfa4ea3-e8a5-4a73-8ae7-ab4ffa2e9d2d.jpeg\",\"6568351152b1f40d98-f769-4b20-a8f0-34d6e03049f1.jpeg\",\"12928755263b3482d2f-a286-4b07-bc85-9d9a940cfee1.jpeg\",\"1562769276428bd9621-c2ab-4c98-ac86-26b1705324a3.jpeg\",\"10786542165908b2bad-f419-4e3c-9557-020b54b418b3.jpeg\",\"5098841376d68b6f50-fb48-493f-8148-abd5a54198d2.jpeg\"]', '649', '1500', 10),
(6148, 179, 11, 10, '[\"45311247902acb8097-220a-4057-a6a4-7e2617df68ab.jpeg\",\"5667355361acfa4ea3-e8a5-4a73-8ae7-ab4ffa2e9d2d.jpeg\",\"6568351152b1f40d98-f769-4b20-a8f0-34d6e03049f1.jpeg\",\"12928755263b3482d2f-a286-4b07-bc85-9d9a940cfee1.jpeg\",\"1562769276428bd9621-c2ab-4c98-ac86-26b1705324a3.jpeg\",\"10786542165908b2bad-f419-4e3c-9557-020b54b418b3.jpeg\",\"5098841376d68b6f50-fb48-493f-8148-abd5a54198d2.jpeg\"]', '649', '1500', 10),
(6149, 179, 11, 10, '[\"45311247902acb8097-220a-4057-a6a4-7e2617df68ab.jpeg\",\"5667355361acfa4ea3-e8a5-4a73-8ae7-ab4ffa2e9d2d.jpeg\",\"6568351152b1f40d98-f769-4b20-a8f0-34d6e03049f1.jpeg\",\"12928755263b3482d2f-a286-4b07-bc85-9d9a940cfee1.jpeg\",\"1562769276428bd9621-c2ab-4c98-ac86-26b1705324a3.jpeg\",\"10786542165908b2bad-f419-4e3c-9557-020b54b418b3.jpeg\",\"5098841376d68b6f50-fb48-493f-8148-abd5a54198d2.jpeg\"]', '649', '1500', 10),
(6150, 179, 11, 10, '[\"45311247902acb8097-220a-4057-a6a4-7e2617df68ab.jpeg\",\"5667355361acfa4ea3-e8a5-4a73-8ae7-ab4ffa2e9d2d.jpeg\",\"6568351152b1f40d98-f769-4b20-a8f0-34d6e03049f1.jpeg\",\"12928755263b3482d2f-a286-4b07-bc85-9d9a940cfee1.jpeg\",\"1562769276428bd9621-c2ab-4c98-ac86-26b1705324a3.jpeg\",\"10786542165908b2bad-f419-4e3c-9557-020b54b418b3.jpeg\",\"5098841376d68b6f50-fb48-493f-8148-abd5a54198d2.jpeg\"]', '649', '1500', 10),
(6151, 179, 11, 10, '[\"45311247902acb8097-220a-4057-a6a4-7e2617df68ab.jpeg\",\"5667355361acfa4ea3-e8a5-4a73-8ae7-ab4ffa2e9d2d.jpeg\",\"6568351152b1f40d98-f769-4b20-a8f0-34d6e03049f1.jpeg\",\"12928755263b3482d2f-a286-4b07-bc85-9d9a940cfee1.jpeg\",\"1562769276428bd9621-c2ab-4c98-ac86-26b1705324a3.jpeg\",\"10786542165908b2bad-f419-4e3c-9557-020b54b418b3.jpeg\",\"5098841376d68b6f50-fb48-493f-8148-abd5a54198d2.jpeg\"]', '649', '1500', 10),
(6152, 179, 21, 10, '[\"45311247902acb8097-220a-4057-a6a4-7e2617df68ab.jpeg\",\"5667355361acfa4ea3-e8a5-4a73-8ae7-ab4ffa2e9d2d.jpeg\",\"6568351152b1f40d98-f769-4b20-a8f0-34d6e03049f1.jpeg\",\"12928755263b3482d2f-a286-4b07-bc85-9d9a940cfee1.jpeg\",\"1562769276428bd9621-c2ab-4c98-ac86-26b1705324a3.jpeg\",\"10786542165908b2bad-f419-4e3c-9557-020b54b418b3.jpeg\",\"5098841376d68b6f50-fb48-493f-8148-abd5a54198d2.jpeg\"]', '649', '1500', 10),
(6153, 179, 21, 10, '[\"45311247902acb8097-220a-4057-a6a4-7e2617df68ab.jpeg\",\"5667355361acfa4ea3-e8a5-4a73-8ae7-ab4ffa2e9d2d.jpeg\",\"6568351152b1f40d98-f769-4b20-a8f0-34d6e03049f1.jpeg\",\"12928755263b3482d2f-a286-4b07-bc85-9d9a940cfee1.jpeg\",\"1562769276428bd9621-c2ab-4c98-ac86-26b1705324a3.jpeg\",\"10786542165908b2bad-f419-4e3c-9557-020b54b418b3.jpeg\",\"5098841376d68b6f50-fb48-493f-8148-abd5a54198d2.jpeg\"]', '649', '1500', 10),
(6154, 179, 21, 10, '[\"45311247902acb8097-220a-4057-a6a4-7e2617df68ab.jpeg\",\"5667355361acfa4ea3-e8a5-4a73-8ae7-ab4ffa2e9d2d.jpeg\",\"6568351152b1f40d98-f769-4b20-a8f0-34d6e03049f1.jpeg\",\"12928755263b3482d2f-a286-4b07-bc85-9d9a940cfee1.jpeg\",\"1562769276428bd9621-c2ab-4c98-ac86-26b1705324a3.jpeg\",\"10786542165908b2bad-f419-4e3c-9557-020b54b418b3.jpeg\",\"5098841376d68b6f50-fb48-493f-8148-abd5a54198d2.jpeg\"]', '649', '1500', 10),
(6155, 179, 21, 10, '[\"45311247902acb8097-220a-4057-a6a4-7e2617df68ab.jpeg\",\"5667355361acfa4ea3-e8a5-4a73-8ae7-ab4ffa2e9d2d.jpeg\",\"6568351152b1f40d98-f769-4b20-a8f0-34d6e03049f1.jpeg\",\"12928755263b3482d2f-a286-4b07-bc85-9d9a940cfee1.jpeg\",\"1562769276428bd9621-c2ab-4c98-ac86-26b1705324a3.jpeg\",\"10786542165908b2bad-f419-4e3c-9557-020b54b418b3.jpeg\",\"5098841376d68b6f50-fb48-493f-8148-abd5a54198d2.jpeg\"]', '649', '1500', 10),
(6156, 179, 21, 10, '[\"45311247902acb8097-220a-4057-a6a4-7e2617df68ab.jpeg\",\"5667355361acfa4ea3-e8a5-4a73-8ae7-ab4ffa2e9d2d.jpeg\",\"6568351152b1f40d98-f769-4b20-a8f0-34d6e03049f1.jpeg\",\"12928755263b3482d2f-a286-4b07-bc85-9d9a940cfee1.jpeg\",\"1562769276428bd9621-c2ab-4c98-ac86-26b1705324a3.jpeg\",\"10786542165908b2bad-f419-4e3c-9557-020b54b418b3.jpeg\",\"5098841376d68b6f50-fb48-493f-8148-abd5a54198d2.jpeg\"]', '649', '1500', 10),
(6157, 179, 21, 10, '[\"45311247902acb8097-220a-4057-a6a4-7e2617df68ab.jpeg\",\"5667355361acfa4ea3-e8a5-4a73-8ae7-ab4ffa2e9d2d.jpeg\",\"6568351152b1f40d98-f769-4b20-a8f0-34d6e03049f1.jpeg\",\"12928755263b3482d2f-a286-4b07-bc85-9d9a940cfee1.jpeg\",\"1562769276428bd9621-c2ab-4c98-ac86-26b1705324a3.jpeg\",\"10786542165908b2bad-f419-4e3c-9557-020b54b418b3.jpeg\",\"5098841376d68b6f50-fb48-493f-8148-abd5a54198d2.jpeg\"]', '649', '1500', 10),
(6158, 179, 21, 10, '[\"45311247902acb8097-220a-4057-a6a4-7e2617df68ab.jpeg\",\"5667355361acfa4ea3-e8a5-4a73-8ae7-ab4ffa2e9d2d.jpeg\",\"6568351152b1f40d98-f769-4b20-a8f0-34d6e03049f1.jpeg\",\"12928755263b3482d2f-a286-4b07-bc85-9d9a940cfee1.jpeg\",\"1562769276428bd9621-c2ab-4c98-ac86-26b1705324a3.jpeg\",\"10786542165908b2bad-f419-4e3c-9557-020b54b418b3.jpeg\",\"5098841376d68b6f50-fb48-493f-8148-abd5a54198d2.jpeg\"]', '649', '1500', 10),
(6159, 177, 11, 2, '[\"121022093107c5cfc53-c297-4e16-a1d8-a3945db65cc2.jpeg\",\"20710009911ad90e3f6-06ac-441c-bf66-6d7bd5efc3f3.jpeg\",\"12648227312bc0c2e04-3659-4062-ae2e-07d36aee1018.jpeg\",\"8725818583366ff5ff-bbe8-4687-8a35-d7fe1ab6a0e4.jpeg\",\"1416878744116246d0-74b5-4d7e-b6fa-fab33acb500d.jpeg\"]', '899', '2200', 6),
(6160, 177, 11, 2, '[\"121022093107c5cfc53-c297-4e16-a1d8-a3945db65cc2.jpeg\",\"20710009911ad90e3f6-06ac-441c-bf66-6d7bd5efc3f3.jpeg\",\"12648227312bc0c2e04-3659-4062-ae2e-07d36aee1018.jpeg\",\"8725818583366ff5ff-bbe8-4687-8a35-d7fe1ab6a0e4.jpeg\",\"1416878744116246d0-74b5-4d7e-b6fa-fab33acb500d.jpeg\"]', '899', '2200', 6),
(6161, 177, 11, 2, '[\"121022093107c5cfc53-c297-4e16-a1d8-a3945db65cc2.jpeg\",\"20710009911ad90e3f6-06ac-441c-bf66-6d7bd5efc3f3.jpeg\",\"12648227312bc0c2e04-3659-4062-ae2e-07d36aee1018.jpeg\",\"8725818583366ff5ff-bbe8-4687-8a35-d7fe1ab6a0e4.jpeg\",\"1416878744116246d0-74b5-4d7e-b6fa-fab33acb500d.jpeg\"]', '899', '2200', 6),
(6162, 177, 11, 2, '[\"121022093107c5cfc53-c297-4e16-a1d8-a3945db65cc2.jpeg\",\"20710009911ad90e3f6-06ac-441c-bf66-6d7bd5efc3f3.jpeg\",\"12648227312bc0c2e04-3659-4062-ae2e-07d36aee1018.jpeg\",\"8725818583366ff5ff-bbe8-4687-8a35-d7fe1ab6a0e4.jpeg\",\"1416878744116246d0-74b5-4d7e-b6fa-fab33acb500d.jpeg\"]', '899', '2200', 6),
(6163, 177, 11, 2, '[\"121022093107c5cfc53-c297-4e16-a1d8-a3945db65cc2.jpeg\",\"20710009911ad90e3f6-06ac-441c-bf66-6d7bd5efc3f3.jpeg\",\"12648227312bc0c2e04-3659-4062-ae2e-07d36aee1018.jpeg\",\"8725818583366ff5ff-bbe8-4687-8a35-d7fe1ab6a0e4.jpeg\",\"1416878744116246d0-74b5-4d7e-b6fa-fab33acb500d.jpeg\"]', '899', '2200', 6),
(6164, 177, 21, 2, '[\"121022093107c5cfc53-c297-4e16-a1d8-a3945db65cc2.jpeg\",\"20710009911ad90e3f6-06ac-441c-bf66-6d7bd5efc3f3.jpeg\",\"12648227312bc0c2e04-3659-4062-ae2e-07d36aee1018.jpeg\",\"8725818583366ff5ff-bbe8-4687-8a35-d7fe1ab6a0e4.jpeg\",\"1416878744116246d0-74b5-4d7e-b6fa-fab33acb500d.jpeg\"]', '899', '2200', 6),
(6165, 177, 21, 2, '[\"121022093107c5cfc53-c297-4e16-a1d8-a3945db65cc2.jpeg\",\"20710009911ad90e3f6-06ac-441c-bf66-6d7bd5efc3f3.jpeg\",\"12648227312bc0c2e04-3659-4062-ae2e-07d36aee1018.jpeg\",\"8725818583366ff5ff-bbe8-4687-8a35-d7fe1ab6a0e4.jpeg\",\"1416878744116246d0-74b5-4d7e-b6fa-fab33acb500d.jpeg\"]', '899', '2200', 6),
(6166, 177, 21, 2, '[\"121022093107c5cfc53-c297-4e16-a1d8-a3945db65cc2.jpeg\",\"20710009911ad90e3f6-06ac-441c-bf66-6d7bd5efc3f3.jpeg\",\"12648227312bc0c2e04-3659-4062-ae2e-07d36aee1018.jpeg\",\"8725818583366ff5ff-bbe8-4687-8a35-d7fe1ab6a0e4.jpeg\",\"1416878744116246d0-74b5-4d7e-b6fa-fab33acb500d.jpeg\"]', '899', '2200', 6),
(6167, 177, 21, 2, '[\"121022093107c5cfc53-c297-4e16-a1d8-a3945db65cc2.jpeg\",\"20710009911ad90e3f6-06ac-441c-bf66-6d7bd5efc3f3.jpeg\",\"12648227312bc0c2e04-3659-4062-ae2e-07d36aee1018.jpeg\",\"8725818583366ff5ff-bbe8-4687-8a35-d7fe1ab6a0e4.jpeg\",\"1416878744116246d0-74b5-4d7e-b6fa-fab33acb500d.jpeg\"]', '899', '2200', 6),
(6168, 177, 21, 2, '[\"121022093107c5cfc53-c297-4e16-a1d8-a3945db65cc2.jpeg\",\"20710009911ad90e3f6-06ac-441c-bf66-6d7bd5efc3f3.jpeg\",\"12648227312bc0c2e04-3659-4062-ae2e-07d36aee1018.jpeg\",\"8725818583366ff5ff-bbe8-4687-8a35-d7fe1ab6a0e4.jpeg\",\"1416878744116246d0-74b5-4d7e-b6fa-fab33acb500d.jpeg\"]', '899', '2200', 6),
(6169, 177, 22, 2, '[\"121022093107c5cfc53-c297-4e16-a1d8-a3945db65cc2.jpeg\",\"20710009911ad90e3f6-06ac-441c-bf66-6d7bd5efc3f3.jpeg\",\"12648227312bc0c2e04-3659-4062-ae2e-07d36aee1018.jpeg\",\"8725818583366ff5ff-bbe8-4687-8a35-d7fe1ab6a0e4.jpeg\",\"1416878744116246d0-74b5-4d7e-b6fa-fab33acb500d.jpeg\"]', '899', '2200', 6),
(6170, 177, 22, 2, '[\"121022093107c5cfc53-c297-4e16-a1d8-a3945db65cc2.jpeg\",\"20710009911ad90e3f6-06ac-441c-bf66-6d7bd5efc3f3.jpeg\",\"12648227312bc0c2e04-3659-4062-ae2e-07d36aee1018.jpeg\",\"8725818583366ff5ff-bbe8-4687-8a35-d7fe1ab6a0e4.jpeg\",\"1416878744116246d0-74b5-4d7e-b6fa-fab33acb500d.jpeg\"]', '899', '2200', 6),
(6171, 177, 22, 2, '[\"121022093107c5cfc53-c297-4e16-a1d8-a3945db65cc2.jpeg\",\"20710009911ad90e3f6-06ac-441c-bf66-6d7bd5efc3f3.jpeg\",\"12648227312bc0c2e04-3659-4062-ae2e-07d36aee1018.jpeg\",\"8725818583366ff5ff-bbe8-4687-8a35-d7fe1ab6a0e4.jpeg\",\"1416878744116246d0-74b5-4d7e-b6fa-fab33acb500d.jpeg\"]', '899', '2200', 6),
(6172, 177, 22, 2, '[\"121022093107c5cfc53-c297-4e16-a1d8-a3945db65cc2.jpeg\",\"20710009911ad90e3f6-06ac-441c-bf66-6d7bd5efc3f3.jpeg\",\"12648227312bc0c2e04-3659-4062-ae2e-07d36aee1018.jpeg\",\"8725818583366ff5ff-bbe8-4687-8a35-d7fe1ab6a0e4.jpeg\",\"1416878744116246d0-74b5-4d7e-b6fa-fab33acb500d.jpeg\"]', '899', '2200', 6),
(6173, 177, 22, 2, '[\"121022093107c5cfc53-c297-4e16-a1d8-a3945db65cc2.jpeg\",\"20710009911ad90e3f6-06ac-441c-bf66-6d7bd5efc3f3.jpeg\",\"12648227312bc0c2e04-3659-4062-ae2e-07d36aee1018.jpeg\",\"8725818583366ff5ff-bbe8-4687-8a35-d7fe1ab6a0e4.jpeg\",\"1416878744116246d0-74b5-4d7e-b6fa-fab33acb500d.jpeg\"]', '899', '2200', 6),
(6174, 161, 11, 8, '[\"20501093840img_6802.jpeg\",\"17651485881img_6804.jpeg\",\"15429165032img_6803.jpeg\",\"6110274113img_6806.jpeg\",\"7456754004img_6805.jpeg\",\"7394152705img_6801.jpeg\",\"6767774576img_6807.jpeg\",\"17434770017img_6808.jpeg\"]', '1125', '2500', 4),
(6175, 161, 11, 8, '[\"20501093840img_6802.jpeg\",\"17651485881img_6804.jpeg\",\"15429165032img_6803.jpeg\",\"6110274113img_6806.jpeg\",\"7456754004img_6805.jpeg\",\"7394152705img_6801.jpeg\",\"6767774576img_6807.jpeg\",\"17434770017img_6808.jpeg\"]', '1125', '2500', 4),
(6176, 161, 11, 8, '[\"20501093840img_6802.jpeg\",\"17651485881img_6804.jpeg\",\"15429165032img_6803.jpeg\",\"6110274113img_6806.jpeg\",\"7456754004img_6805.jpeg\",\"7394152705img_6801.jpeg\",\"6767774576img_6807.jpeg\",\"17434770017img_6808.jpeg\"]', '1125', '2500', 4),
(6177, 161, 11, 8, '[\"20501093840img_6802.jpeg\",\"17651485881img_6804.jpeg\",\"15429165032img_6803.jpeg\",\"6110274113img_6806.jpeg\",\"7456754004img_6805.jpeg\",\"7394152705img_6801.jpeg\",\"6767774576img_6807.jpeg\",\"17434770017img_6808.jpeg\"]', '1125', '2500', 4),
(6178, 161, 11, 8, '[\"20501093840img_6802.jpeg\",\"17651485881img_6804.jpeg\",\"15429165032img_6803.jpeg\",\"6110274113img_6806.jpeg\",\"7456754004img_6805.jpeg\",\"7394152705img_6801.jpeg\",\"6767774576img_6807.jpeg\",\"17434770017img_6808.jpeg\"]', '1125', '2500', 4),
(6179, 161, 11, 8, '[\"20501093840img_6802.jpeg\",\"17651485881img_6804.jpeg\",\"15429165032img_6803.jpeg\",\"6110274113img_6806.jpeg\",\"7456754004img_6805.jpeg\",\"7394152705img_6801.jpeg\",\"6767774576img_6807.jpeg\",\"17434770017img_6808.jpeg\"]', '1125', '2500', 4),
(6180, 161, 11, 8, '[\"20501093840img_6802.jpeg\",\"17651485881img_6804.jpeg\",\"15429165032img_6803.jpeg\",\"6110274113img_6806.jpeg\",\"7456754004img_6805.jpeg\",\"7394152705img_6801.jpeg\",\"6767774576img_6807.jpeg\",\"17434770017img_6808.jpeg\"]', '1125', '2500', 4),
(6181, 161, 11, 8, '[\"20501093840img_6802.jpeg\",\"17651485881img_6804.jpeg\",\"15429165032img_6803.jpeg\",\"6110274113img_6806.jpeg\",\"7456754004img_6805.jpeg\",\"7394152705img_6801.jpeg\",\"6767774576img_6807.jpeg\",\"17434770017img_6808.jpeg\"]', '1125', '2500', 4),
(6182, 161, 21, 8, '[\"20501093840img_6802.jpeg\",\"17651485881img_6804.jpeg\",\"15429165032img_6803.jpeg\",\"6110274113img_6806.jpeg\",\"7456754004img_6805.jpeg\",\"7394152705img_6801.jpeg\",\"6767774576img_6807.jpeg\",\"17434770017img_6808.jpeg\"]', '1125', '2500', 4),
(6183, 161, 21, 8, '[\"20501093840img_6802.jpeg\",\"17651485881img_6804.jpeg\",\"15429165032img_6803.jpeg\",\"6110274113img_6806.jpeg\",\"7456754004img_6805.jpeg\",\"7394152705img_6801.jpeg\",\"6767774576img_6807.jpeg\",\"17434770017img_6808.jpeg\"]', '1125', '2500', 4),
(6184, 161, 21, 8, '[\"20501093840img_6802.jpeg\",\"17651485881img_6804.jpeg\",\"15429165032img_6803.jpeg\",\"6110274113img_6806.jpeg\",\"7456754004img_6805.jpeg\",\"7394152705img_6801.jpeg\",\"6767774576img_6807.jpeg\",\"17434770017img_6808.jpeg\"]', '1125', '2500', 4),
(6185, 161, 21, 8, '[\"20501093840img_6802.jpeg\",\"17651485881img_6804.jpeg\",\"15429165032img_6803.jpeg\",\"6110274113img_6806.jpeg\",\"7456754004img_6805.jpeg\",\"7394152705img_6801.jpeg\",\"6767774576img_6807.jpeg\",\"17434770017img_6808.jpeg\"]', '1125', '2500', 4),
(6186, 161, 21, 8, '[\"20501093840img_6802.jpeg\",\"17651485881img_6804.jpeg\",\"15429165032img_6803.jpeg\",\"6110274113img_6806.jpeg\",\"7456754004img_6805.jpeg\",\"7394152705img_6801.jpeg\",\"6767774576img_6807.jpeg\",\"17434770017img_6808.jpeg\"]', '1125', '2500', 4),
(6187, 161, 21, 8, '[\"20501093840img_6802.jpeg\",\"17651485881img_6804.jpeg\",\"15429165032img_6803.jpeg\",\"6110274113img_6806.jpeg\",\"7456754004img_6805.jpeg\",\"7394152705img_6801.jpeg\",\"6767774576img_6807.jpeg\",\"17434770017img_6808.jpeg\"]', '1125', '2500', 4),
(6188, 161, 21, 8, '[\"20501093840img_6802.jpeg\",\"17651485881img_6804.jpeg\",\"15429165032img_6803.jpeg\",\"6110274113img_6806.jpeg\",\"7456754004img_6805.jpeg\",\"7394152705img_6801.jpeg\",\"6767774576img_6807.jpeg\",\"17434770017img_6808.jpeg\"]', '1125', '2500', 4),
(6189, 161, 21, 8, '[\"20501093840img_6802.jpeg\",\"17651485881img_6804.jpeg\",\"15429165032img_6803.jpeg\",\"6110274113img_6806.jpeg\",\"7456754004img_6805.jpeg\",\"7394152705img_6801.jpeg\",\"6767774576img_6807.jpeg\",\"17434770017img_6808.jpeg\"]', '1125', '2500', 4),
(6190, 161, 22, 8, '[\"20501093840img_6802.jpeg\",\"17651485881img_6804.jpeg\",\"15429165032img_6803.jpeg\",\"6110274113img_6806.jpeg\",\"7456754004img_6805.jpeg\",\"7394152705img_6801.jpeg\",\"6767774576img_6807.jpeg\",\"17434770017img_6808.jpeg\"]', '1125', '2500', 4),
(6191, 161, 22, 8, '[\"20501093840img_6802.jpeg\",\"17651485881img_6804.jpeg\",\"15429165032img_6803.jpeg\",\"6110274113img_6806.jpeg\",\"7456754004img_6805.jpeg\",\"7394152705img_6801.jpeg\",\"6767774576img_6807.jpeg\",\"17434770017img_6808.jpeg\"]', '1125', '2500', 4),
(6192, 161, 22, 8, '[\"20501093840img_6802.jpeg\",\"17651485881img_6804.jpeg\",\"15429165032img_6803.jpeg\",\"6110274113img_6806.jpeg\",\"7456754004img_6805.jpeg\",\"7394152705img_6801.jpeg\",\"6767774576img_6807.jpeg\",\"17434770017img_6808.jpeg\"]', '1125', '2500', 4),
(6193, 161, 22, 8, '[\"20501093840img_6802.jpeg\",\"17651485881img_6804.jpeg\",\"15429165032img_6803.jpeg\",\"6110274113img_6806.jpeg\",\"7456754004img_6805.jpeg\",\"7394152705img_6801.jpeg\",\"6767774576img_6807.jpeg\",\"17434770017img_6808.jpeg\"]', '1125', '2500', 4),
(6194, 161, 22, 8, '[\"20501093840img_6802.jpeg\",\"17651485881img_6804.jpeg\",\"15429165032img_6803.jpeg\",\"6110274113img_6806.jpeg\",\"7456754004img_6805.jpeg\",\"7394152705img_6801.jpeg\",\"6767774576img_6807.jpeg\",\"17434770017img_6808.jpeg\"]', '1125', '2500', 4),
(6195, 161, 22, 8, '[\"20501093840img_6802.jpeg\",\"17651485881img_6804.jpeg\",\"15429165032img_6803.jpeg\",\"6110274113img_6806.jpeg\",\"7456754004img_6805.jpeg\",\"7394152705img_6801.jpeg\",\"6767774576img_6807.jpeg\",\"17434770017img_6808.jpeg\"]', '1125', '2500', 4),
(6196, 161, 22, 8, '[\"20501093840img_6802.jpeg\",\"17651485881img_6804.jpeg\",\"15429165032img_6803.jpeg\",\"6110274113img_6806.jpeg\",\"7456754004img_6805.jpeg\",\"7394152705img_6801.jpeg\",\"6767774576img_6807.jpeg\",\"17434770017img_6808.jpeg\"]', '1125', '2500', 4),
(6197, 161, 22, 8, '[\"20501093840img_6802.jpeg\",\"17651485881img_6804.jpeg\",\"15429165032img_6803.jpeg\",\"6110274113img_6806.jpeg\",\"7456754004img_6805.jpeg\",\"7394152705img_6801.jpeg\",\"6767774576img_6807.jpeg\",\"17434770017img_6808.jpeg\"]', '1125', '2500', 4),
(6198, 162, 11, 7, '[\"13715310550img_6876.jpeg\",\"5090837341img_6877.jpeg\",\"13183452752img_6880.jpeg\",\"20321586473img_6881.jpeg\",\"12749313794img_6878.jpeg\",\"9572597375img_6883.jpeg\",\"305469636img_6882.jpeg\",\"18589598967img_6879.jpeg\",\"7450991418img_6875.jpeg\"]', '1149', '2500', 4),
(6199, 162, 11, 7, '[\"13715310550img_6876.jpeg\",\"5090837341img_6877.jpeg\",\"13183452752img_6880.jpeg\",\"20321586473img_6881.jpeg\",\"12749313794img_6878.jpeg\",\"9572597375img_6883.jpeg\",\"305469636img_6882.jpeg\",\"18589598967img_6879.jpeg\",\"7450991418img_6875.jpeg\"]', '1149', '2500', 4),
(6200, 162, 11, 7, '[\"13715310550img_6876.jpeg\",\"5090837341img_6877.jpeg\",\"13183452752img_6880.jpeg\",\"20321586473img_6881.jpeg\",\"12749313794img_6878.jpeg\",\"9572597375img_6883.jpeg\",\"305469636img_6882.jpeg\",\"18589598967img_6879.jpeg\",\"7450991418img_6875.jpeg\"]', '1149', '2500', 4),
(6201, 162, 11, 7, '[\"13715310550img_6876.jpeg\",\"5090837341img_6877.jpeg\",\"13183452752img_6880.jpeg\",\"20321586473img_6881.jpeg\",\"12749313794img_6878.jpeg\",\"9572597375img_6883.jpeg\",\"305469636img_6882.jpeg\",\"18589598967img_6879.jpeg\",\"7450991418img_6875.jpeg\"]', '1149', '2500', 4),
(6202, 162, 11, 7, '[\"13715310550img_6876.jpeg\",\"5090837341img_6877.jpeg\",\"13183452752img_6880.jpeg\",\"20321586473img_6881.jpeg\",\"12749313794img_6878.jpeg\",\"9572597375img_6883.jpeg\",\"305469636img_6882.jpeg\",\"18589598967img_6879.jpeg\",\"7450991418img_6875.jpeg\"]', '1149', '2500', 4),
(6203, 162, 11, 7, '[\"13715310550img_6876.jpeg\",\"5090837341img_6877.jpeg\",\"13183452752img_6880.jpeg\",\"20321586473img_6881.jpeg\",\"12749313794img_6878.jpeg\",\"9572597375img_6883.jpeg\",\"305469636img_6882.jpeg\",\"18589598967img_6879.jpeg\",\"7450991418img_6875.jpeg\"]', '1149', '2500', 4),
(6204, 162, 11, 7, '[\"13715310550img_6876.jpeg\",\"5090837341img_6877.jpeg\",\"13183452752img_6880.jpeg\",\"20321586473img_6881.jpeg\",\"12749313794img_6878.jpeg\",\"9572597375img_6883.jpeg\",\"305469636img_6882.jpeg\",\"18589598967img_6879.jpeg\",\"7450991418img_6875.jpeg\"]', '1149', '2500', 4),
(6205, 162, 11, 7, '[\"13715310550img_6876.jpeg\",\"5090837341img_6877.jpeg\",\"13183452752img_6880.jpeg\",\"20321586473img_6881.jpeg\",\"12749313794img_6878.jpeg\",\"9572597375img_6883.jpeg\",\"305469636img_6882.jpeg\",\"18589598967img_6879.jpeg\",\"7450991418img_6875.jpeg\"]', '1149', '2500', 4),
(6206, 162, 11, 7, '[\"13715310550img_6876.jpeg\",\"5090837341img_6877.jpeg\",\"13183452752img_6880.jpeg\",\"20321586473img_6881.jpeg\",\"12749313794img_6878.jpeg\",\"9572597375img_6883.jpeg\",\"305469636img_6882.jpeg\",\"18589598967img_6879.jpeg\",\"7450991418img_6875.jpeg\"]', '1149', '2500', 4),
(6207, 162, 11, 6, '[\"12450938990img_6860.jpeg\",\"4064798181img_6861.jpeg\",\"12842461122img_6858.jpeg\",\"20005561723img_6859.jpeg\",\"1957382804img_6862.jpeg\",\"6449537875img_6857.jpeg\"]', '1149', '2500', 4),
(6208, 162, 11, 6, '[\"12450938990img_6860.jpeg\",\"4064798181img_6861.jpeg\",\"12842461122img_6858.jpeg\",\"20005561723img_6859.jpeg\",\"1957382804img_6862.jpeg\",\"6449537875img_6857.jpeg\"]', '1149', '2500', 4),
(6209, 162, 11, 6, '[\"12450938990img_6860.jpeg\",\"4064798181img_6861.jpeg\",\"12842461122img_6858.jpeg\",\"20005561723img_6859.jpeg\",\"1957382804img_6862.jpeg\",\"6449537875img_6857.jpeg\"]', '1149', '2500', 4),
(6210, 162, 11, 6, '[\"12450938990img_6860.jpeg\",\"4064798181img_6861.jpeg\",\"12842461122img_6858.jpeg\",\"20005561723img_6859.jpeg\",\"1957382804img_6862.jpeg\",\"6449537875img_6857.jpeg\"]', '1149', '2500', 4),
(6211, 162, 11, 6, '[\"12450938990img_6860.jpeg\",\"4064798181img_6861.jpeg\",\"12842461122img_6858.jpeg\",\"20005561723img_6859.jpeg\",\"1957382804img_6862.jpeg\",\"6449537875img_6857.jpeg\"]', '1149', '2500', 4),
(6212, 162, 11, 6, '[\"12450938990img_6860.jpeg\",\"4064798181img_6861.jpeg\",\"12842461122img_6858.jpeg\",\"20005561723img_6859.jpeg\",\"1957382804img_6862.jpeg\",\"6449537875img_6857.jpeg\"]', '1149', '2500', 4),
(6213, 162, 11, 8, '[\"662875030img_6870.jpeg\",\"14172706041img_6874.jpeg\",\"3015375012img_6869.jpeg\",\"20536850143img_6872.jpeg\",\"12839835444img_6873.jpeg\",\"525702425img_6855.jpeg\",\"16781098066img_6871.jpeg\"]', '1149', '2500', 4),
(6214, 162, 11, 8, '[\"662875030img_6870.jpeg\",\"14172706041img_6874.jpeg\",\"3015375012img_6869.jpeg\",\"20536850143img_6872.jpeg\",\"12839835444img_6873.jpeg\",\"525702425img_6855.jpeg\",\"16781098066img_6871.jpeg\"]', '1149', '2500', 4),
(6215, 162, 11, 8, '[\"662875030img_6870.jpeg\",\"14172706041img_6874.jpeg\",\"3015375012img_6869.jpeg\",\"20536850143img_6872.jpeg\",\"12839835444img_6873.jpeg\",\"525702425img_6855.jpeg\",\"16781098066img_6871.jpeg\"]', '1149', '2500', 4),
(6216, 162, 11, 8, '[\"662875030img_6870.jpeg\",\"14172706041img_6874.jpeg\",\"3015375012img_6869.jpeg\",\"20536850143img_6872.jpeg\",\"12839835444img_6873.jpeg\",\"525702425img_6855.jpeg\",\"16781098066img_6871.jpeg\"]', '1149', '2500', 4),
(6217, 162, 11, 8, '[\"662875030img_6870.jpeg\",\"14172706041img_6874.jpeg\",\"3015375012img_6869.jpeg\",\"20536850143img_6872.jpeg\",\"12839835444img_6873.jpeg\",\"525702425img_6855.jpeg\",\"16781098066img_6871.jpeg\"]', '1149', '2500', 4),
(6218, 162, 11, 8, '[\"662875030img_6870.jpeg\",\"14172706041img_6874.jpeg\",\"3015375012img_6869.jpeg\",\"20536850143img_6872.jpeg\",\"12839835444img_6873.jpeg\",\"525702425img_6855.jpeg\",\"16781098066img_6871.jpeg\"]', '1149', '2500', 4),
(6219, 162, 11, 8, '[\"662875030img_6870.jpeg\",\"14172706041img_6874.jpeg\",\"3015375012img_6869.jpeg\",\"20536850143img_6872.jpeg\",\"12839835444img_6873.jpeg\",\"525702425img_6855.jpeg\",\"16781098066img_6871.jpeg\"]', '1149', '2500', 4),
(6220, 162, 11, 18, '[\"9903441290img_6868.jpeg\",\"17411832601img_6864.jpeg\",\"19480808022img_6863.jpeg\",\"19300120643img_6866.jpeg\",\"12851599944img_6865.jpeg\",\"9742212295img_6867.jpeg\",\"5906311806img_6854.jpeg\"]', '1149', '2500', 4),
(6221, 162, 11, 18, '[\"9903441290img_6868.jpeg\",\"17411832601img_6864.jpeg\",\"19480808022img_6863.jpeg\",\"19300120643img_6866.jpeg\",\"12851599944img_6865.jpeg\",\"9742212295img_6867.jpeg\",\"5906311806img_6854.jpeg\"]', '1149', '2500', 4),
(6222, 162, 11, 18, '[\"9903441290img_6868.jpeg\",\"17411832601img_6864.jpeg\",\"19480808022img_6863.jpeg\",\"19300120643img_6866.jpeg\",\"12851599944img_6865.jpeg\",\"9742212295img_6867.jpeg\",\"5906311806img_6854.jpeg\"]', '1149', '2500', 4),
(6223, 162, 11, 18, '[\"9903441290img_6868.jpeg\",\"17411832601img_6864.jpeg\",\"19480808022img_6863.jpeg\",\"19300120643img_6866.jpeg\",\"12851599944img_6865.jpeg\",\"9742212295img_6867.jpeg\",\"5906311806img_6854.jpeg\"]', '1149', '2500', 4),
(6224, 162, 11, 18, '[\"9903441290img_6868.jpeg\",\"17411832601img_6864.jpeg\",\"19480808022img_6863.jpeg\",\"19300120643img_6866.jpeg\",\"12851599944img_6865.jpeg\",\"9742212295img_6867.jpeg\",\"5906311806img_6854.jpeg\"]', '1149', '2500', 4),
(6225, 162, 11, 18, '[\"9903441290img_6868.jpeg\",\"17411832601img_6864.jpeg\",\"19480808022img_6863.jpeg\",\"19300120643img_6866.jpeg\",\"12851599944img_6865.jpeg\",\"9742212295img_6867.jpeg\",\"5906311806img_6854.jpeg\"]', '1149', '2500', 4),
(6226, 162, 11, 18, '[\"9903441290img_6868.jpeg\",\"17411832601img_6864.jpeg\",\"19480808022img_6863.jpeg\",\"19300120643img_6866.jpeg\",\"12851599944img_6865.jpeg\",\"9742212295img_6867.jpeg\",\"5906311806img_6854.jpeg\"]', '1149', '2500', 4),
(6227, 163, 11, 11, '[\"3021602840img_6905.jpeg\",\"3206941111img_6906.jpeg\",\"19191550762img_6904.jpeg\",\"17315538153img_6908.jpeg\",\"14251678904img_6907.jpeg\",\"20534813855img_6886.jpeg\"]', '1099', '2500', 4);
INSERT INTO `all_images` (`id`, `p_id`, `size_id`, `color_id`, `image`, `price`, `cut_price`, `stock`) VALUES
(6228, 163, 11, 11, '[\"3021602840img_6905.jpeg\",\"3206941111img_6906.jpeg\",\"19191550762img_6904.jpeg\",\"17315538153img_6908.jpeg\",\"14251678904img_6907.jpeg\",\"20534813855img_6886.jpeg\"]', '1099', '2500', 4),
(6229, 163, 11, 11, '[\"3021602840img_6905.jpeg\",\"3206941111img_6906.jpeg\",\"19191550762img_6904.jpeg\",\"17315538153img_6908.jpeg\",\"14251678904img_6907.jpeg\",\"20534813855img_6886.jpeg\"]', '1099', '2500', 4),
(6230, 163, 11, 11, '[\"3021602840img_6905.jpeg\",\"3206941111img_6906.jpeg\",\"19191550762img_6904.jpeg\",\"17315538153img_6908.jpeg\",\"14251678904img_6907.jpeg\",\"20534813855img_6886.jpeg\"]', '1099', '2500', 4),
(6231, 163, 11, 11, '[\"3021602840img_6905.jpeg\",\"3206941111img_6906.jpeg\",\"19191550762img_6904.jpeg\",\"17315538153img_6908.jpeg\",\"14251678904img_6907.jpeg\",\"20534813855img_6886.jpeg\"]', '1099', '2500', 4),
(6232, 163, 11, 11, '[\"3021602840img_6905.jpeg\",\"3206941111img_6906.jpeg\",\"19191550762img_6904.jpeg\",\"17315538153img_6908.jpeg\",\"14251678904img_6907.jpeg\",\"20534813855img_6886.jpeg\"]', '1099', '2500', 4),
(6233, 152, 9, 11, '[\"13228602970img_6850.jpeg\",\"3224286011img_6847.jpeg\",\"8898191212img_6845.jpeg\",\"2143354563img_6848.jpeg\",\"326984864img_6851.jpeg\",\"17882864775img_6846.jpeg\",\"2914304116img_6849.jpeg\",\"14837451037img_6844.jpeg\",\"4616833038img_6843.jpeg\"]', '1149', '2500', 4),
(6234, 152, 9, 11, '[\"13228602970img_6850.jpeg\",\"3224286011img_6847.jpeg\",\"8898191212img_6845.jpeg\",\"2143354563img_6848.jpeg\",\"326984864img_6851.jpeg\",\"17882864775img_6846.jpeg\",\"2914304116img_6849.jpeg\",\"14837451037img_6844.jpeg\",\"4616833038img_6843.jpeg\"]', '1149', '2500', 4),
(6235, 152, 9, 11, '[\"13228602970img_6850.jpeg\",\"3224286011img_6847.jpeg\",\"8898191212img_6845.jpeg\",\"2143354563img_6848.jpeg\",\"326984864img_6851.jpeg\",\"17882864775img_6846.jpeg\",\"2914304116img_6849.jpeg\",\"14837451037img_6844.jpeg\",\"4616833038img_6843.jpeg\"]', '1149', '2500', 4),
(6236, 152, 9, 11, '[\"13228602970img_6850.jpeg\",\"3224286011img_6847.jpeg\",\"8898191212img_6845.jpeg\",\"2143354563img_6848.jpeg\",\"326984864img_6851.jpeg\",\"17882864775img_6846.jpeg\",\"2914304116img_6849.jpeg\",\"14837451037img_6844.jpeg\",\"4616833038img_6843.jpeg\"]', '1149', '2500', 4),
(6237, 152, 9, 11, '[\"13228602970img_6850.jpeg\",\"3224286011img_6847.jpeg\",\"8898191212img_6845.jpeg\",\"2143354563img_6848.jpeg\",\"326984864img_6851.jpeg\",\"17882864775img_6846.jpeg\",\"2914304116img_6849.jpeg\",\"14837451037img_6844.jpeg\",\"4616833038img_6843.jpeg\"]', '1149', '2500', 4),
(6238, 152, 9, 11, '[\"13228602970img_6850.jpeg\",\"3224286011img_6847.jpeg\",\"8898191212img_6845.jpeg\",\"2143354563img_6848.jpeg\",\"326984864img_6851.jpeg\",\"17882864775img_6846.jpeg\",\"2914304116img_6849.jpeg\",\"14837451037img_6844.jpeg\",\"4616833038img_6843.jpeg\"]', '1149', '2500', 4),
(6239, 152, 9, 11, '[\"13228602970img_6850.jpeg\",\"3224286011img_6847.jpeg\",\"8898191212img_6845.jpeg\",\"2143354563img_6848.jpeg\",\"326984864img_6851.jpeg\",\"17882864775img_6846.jpeg\",\"2914304116img_6849.jpeg\",\"14837451037img_6844.jpeg\",\"4616833038img_6843.jpeg\"]', '1149', '2500', 4),
(6240, 152, 9, 11, '[\"13228602970img_6850.jpeg\",\"3224286011img_6847.jpeg\",\"8898191212img_6845.jpeg\",\"2143354563img_6848.jpeg\",\"326984864img_6851.jpeg\",\"17882864775img_6846.jpeg\",\"2914304116img_6849.jpeg\",\"14837451037img_6844.jpeg\",\"4616833038img_6843.jpeg\"]', '1149', '2500', 4),
(6241, 152, 9, 11, '[\"13228602970img_6850.jpeg\",\"3224286011img_6847.jpeg\",\"8898191212img_6845.jpeg\",\"2143354563img_6848.jpeg\",\"326984864img_6851.jpeg\",\"17882864775img_6846.jpeg\",\"2914304116img_6849.jpeg\",\"14837451037img_6844.jpeg\",\"4616833038img_6843.jpeg\"]', '1149', '2500', 4),
(6242, 152, 11, 11, '[\"13228602970img_6850.jpeg\",\"3224286011img_6847.jpeg\",\"8898191212img_6845.jpeg\",\"2143354563img_6848.jpeg\",\"326984864img_6851.jpeg\",\"17882864775img_6846.jpeg\",\"2914304116img_6849.jpeg\",\"14837451037img_6844.jpeg\",\"4616833038img_6843.jpeg\"]', '1149', '2500', 4),
(6243, 152, 11, 11, '[\"13228602970img_6850.jpeg\",\"3224286011img_6847.jpeg\",\"8898191212img_6845.jpeg\",\"2143354563img_6848.jpeg\",\"326984864img_6851.jpeg\",\"17882864775img_6846.jpeg\",\"2914304116img_6849.jpeg\",\"14837451037img_6844.jpeg\",\"4616833038img_6843.jpeg\"]', '1149', '2500', 4),
(6244, 152, 11, 11, '[\"13228602970img_6850.jpeg\",\"3224286011img_6847.jpeg\",\"8898191212img_6845.jpeg\",\"2143354563img_6848.jpeg\",\"326984864img_6851.jpeg\",\"17882864775img_6846.jpeg\",\"2914304116img_6849.jpeg\",\"14837451037img_6844.jpeg\",\"4616833038img_6843.jpeg\"]', '1149', '2500', 4),
(6245, 152, 11, 11, '[\"13228602970img_6850.jpeg\",\"3224286011img_6847.jpeg\",\"8898191212img_6845.jpeg\",\"2143354563img_6848.jpeg\",\"326984864img_6851.jpeg\",\"17882864775img_6846.jpeg\",\"2914304116img_6849.jpeg\",\"14837451037img_6844.jpeg\",\"4616833038img_6843.jpeg\"]', '1149', '2500', 4),
(6246, 152, 11, 11, '[\"13228602970img_6850.jpeg\",\"3224286011img_6847.jpeg\",\"8898191212img_6845.jpeg\",\"2143354563img_6848.jpeg\",\"326984864img_6851.jpeg\",\"17882864775img_6846.jpeg\",\"2914304116img_6849.jpeg\",\"14837451037img_6844.jpeg\",\"4616833038img_6843.jpeg\"]', '1149', '2500', 4),
(6247, 152, 11, 11, '[\"13228602970img_6850.jpeg\",\"3224286011img_6847.jpeg\",\"8898191212img_6845.jpeg\",\"2143354563img_6848.jpeg\",\"326984864img_6851.jpeg\",\"17882864775img_6846.jpeg\",\"2914304116img_6849.jpeg\",\"14837451037img_6844.jpeg\",\"4616833038img_6843.jpeg\"]', '1149', '2500', 4),
(6248, 152, 11, 11, '[\"13228602970img_6850.jpeg\",\"3224286011img_6847.jpeg\",\"8898191212img_6845.jpeg\",\"2143354563img_6848.jpeg\",\"326984864img_6851.jpeg\",\"17882864775img_6846.jpeg\",\"2914304116img_6849.jpeg\",\"14837451037img_6844.jpeg\",\"4616833038img_6843.jpeg\"]', '1149', '2500', 4),
(6249, 152, 11, 11, '[\"13228602970img_6850.jpeg\",\"3224286011img_6847.jpeg\",\"8898191212img_6845.jpeg\",\"2143354563img_6848.jpeg\",\"326984864img_6851.jpeg\",\"17882864775img_6846.jpeg\",\"2914304116img_6849.jpeg\",\"14837451037img_6844.jpeg\",\"4616833038img_6843.jpeg\"]', '1149', '2500', 4),
(6250, 152, 11, 11, '[\"13228602970img_6850.jpeg\",\"3224286011img_6847.jpeg\",\"8898191212img_6845.jpeg\",\"2143354563img_6848.jpeg\",\"326984864img_6851.jpeg\",\"17882864775img_6846.jpeg\",\"2914304116img_6849.jpeg\",\"14837451037img_6844.jpeg\",\"4616833038img_6843.jpeg\"]', '1149', '2500', 4),
(6251, 152, 21, 11, '[\"13228602970img_6850.jpeg\",\"3224286011img_6847.jpeg\",\"8898191212img_6845.jpeg\",\"2143354563img_6848.jpeg\",\"326984864img_6851.jpeg\",\"17882864775img_6846.jpeg\",\"2914304116img_6849.jpeg\",\"14837451037img_6844.jpeg\",\"4616833038img_6843.jpeg\"]', '1149', '2500', 4),
(6252, 152, 21, 11, '[\"13228602970img_6850.jpeg\",\"3224286011img_6847.jpeg\",\"8898191212img_6845.jpeg\",\"2143354563img_6848.jpeg\",\"326984864img_6851.jpeg\",\"17882864775img_6846.jpeg\",\"2914304116img_6849.jpeg\",\"14837451037img_6844.jpeg\",\"4616833038img_6843.jpeg\"]', '1149', '2500', 4),
(6253, 152, 21, 11, '[\"13228602970img_6850.jpeg\",\"3224286011img_6847.jpeg\",\"8898191212img_6845.jpeg\",\"2143354563img_6848.jpeg\",\"326984864img_6851.jpeg\",\"17882864775img_6846.jpeg\",\"2914304116img_6849.jpeg\",\"14837451037img_6844.jpeg\",\"4616833038img_6843.jpeg\"]', '1149', '2500', 4),
(6254, 152, 21, 11, '[\"13228602970img_6850.jpeg\",\"3224286011img_6847.jpeg\",\"8898191212img_6845.jpeg\",\"2143354563img_6848.jpeg\",\"326984864img_6851.jpeg\",\"17882864775img_6846.jpeg\",\"2914304116img_6849.jpeg\",\"14837451037img_6844.jpeg\",\"4616833038img_6843.jpeg\"]', '1149', '2500', 4),
(6255, 152, 21, 11, '[\"13228602970img_6850.jpeg\",\"3224286011img_6847.jpeg\",\"8898191212img_6845.jpeg\",\"2143354563img_6848.jpeg\",\"326984864img_6851.jpeg\",\"17882864775img_6846.jpeg\",\"2914304116img_6849.jpeg\",\"14837451037img_6844.jpeg\",\"4616833038img_6843.jpeg\"]', '1149', '2500', 4),
(6256, 152, 21, 11, '[\"13228602970img_6850.jpeg\",\"3224286011img_6847.jpeg\",\"8898191212img_6845.jpeg\",\"2143354563img_6848.jpeg\",\"326984864img_6851.jpeg\",\"17882864775img_6846.jpeg\",\"2914304116img_6849.jpeg\",\"14837451037img_6844.jpeg\",\"4616833038img_6843.jpeg\"]', '1149', '2500', 4),
(6257, 152, 21, 11, '[\"13228602970img_6850.jpeg\",\"3224286011img_6847.jpeg\",\"8898191212img_6845.jpeg\",\"2143354563img_6848.jpeg\",\"326984864img_6851.jpeg\",\"17882864775img_6846.jpeg\",\"2914304116img_6849.jpeg\",\"14837451037img_6844.jpeg\",\"4616833038img_6843.jpeg\"]', '1149', '2500', 4),
(6258, 152, 21, 11, '[\"13228602970img_6850.jpeg\",\"3224286011img_6847.jpeg\",\"8898191212img_6845.jpeg\",\"2143354563img_6848.jpeg\",\"326984864img_6851.jpeg\",\"17882864775img_6846.jpeg\",\"2914304116img_6849.jpeg\",\"14837451037img_6844.jpeg\",\"4616833038img_6843.jpeg\"]', '1149', '2500', 4),
(6259, 152, 21, 11, '[\"13228602970img_6850.jpeg\",\"3224286011img_6847.jpeg\",\"8898191212img_6845.jpeg\",\"2143354563img_6848.jpeg\",\"326984864img_6851.jpeg\",\"17882864775img_6846.jpeg\",\"2914304116img_6849.jpeg\",\"14837451037img_6844.jpeg\",\"4616833038img_6843.jpeg\"]', '1149', '2500', 4),
(6260, 152, 22, 11, '[\"13228602970img_6850.jpeg\",\"3224286011img_6847.jpeg\",\"8898191212img_6845.jpeg\",\"2143354563img_6848.jpeg\",\"326984864img_6851.jpeg\",\"17882864775img_6846.jpeg\",\"2914304116img_6849.jpeg\",\"14837451037img_6844.jpeg\",\"4616833038img_6843.jpeg\"]', '1149', '2500', 4),
(6261, 152, 22, 11, '[\"13228602970img_6850.jpeg\",\"3224286011img_6847.jpeg\",\"8898191212img_6845.jpeg\",\"2143354563img_6848.jpeg\",\"326984864img_6851.jpeg\",\"17882864775img_6846.jpeg\",\"2914304116img_6849.jpeg\",\"14837451037img_6844.jpeg\",\"4616833038img_6843.jpeg\"]', '1149', '2500', 4),
(6262, 152, 22, 11, '[\"13228602970img_6850.jpeg\",\"3224286011img_6847.jpeg\",\"8898191212img_6845.jpeg\",\"2143354563img_6848.jpeg\",\"326984864img_6851.jpeg\",\"17882864775img_6846.jpeg\",\"2914304116img_6849.jpeg\",\"14837451037img_6844.jpeg\",\"4616833038img_6843.jpeg\"]', '1149', '2500', 4),
(6263, 152, 22, 11, '[\"13228602970img_6850.jpeg\",\"3224286011img_6847.jpeg\",\"8898191212img_6845.jpeg\",\"2143354563img_6848.jpeg\",\"326984864img_6851.jpeg\",\"17882864775img_6846.jpeg\",\"2914304116img_6849.jpeg\",\"14837451037img_6844.jpeg\",\"4616833038img_6843.jpeg\"]', '1149', '2500', 4),
(6264, 152, 22, 11, '[\"13228602970img_6850.jpeg\",\"3224286011img_6847.jpeg\",\"8898191212img_6845.jpeg\",\"2143354563img_6848.jpeg\",\"326984864img_6851.jpeg\",\"17882864775img_6846.jpeg\",\"2914304116img_6849.jpeg\",\"14837451037img_6844.jpeg\",\"4616833038img_6843.jpeg\"]', '1149', '2500', 4),
(6265, 152, 22, 11, '[\"13228602970img_6850.jpeg\",\"3224286011img_6847.jpeg\",\"8898191212img_6845.jpeg\",\"2143354563img_6848.jpeg\",\"326984864img_6851.jpeg\",\"17882864775img_6846.jpeg\",\"2914304116img_6849.jpeg\",\"14837451037img_6844.jpeg\",\"4616833038img_6843.jpeg\"]', '1149', '2500', 4),
(6266, 152, 22, 11, '[\"13228602970img_6850.jpeg\",\"3224286011img_6847.jpeg\",\"8898191212img_6845.jpeg\",\"2143354563img_6848.jpeg\",\"326984864img_6851.jpeg\",\"17882864775img_6846.jpeg\",\"2914304116img_6849.jpeg\",\"14837451037img_6844.jpeg\",\"4616833038img_6843.jpeg\"]', '1149', '2500', 4),
(6267, 152, 22, 11, '[\"13228602970img_6850.jpeg\",\"3224286011img_6847.jpeg\",\"8898191212img_6845.jpeg\",\"2143354563img_6848.jpeg\",\"326984864img_6851.jpeg\",\"17882864775img_6846.jpeg\",\"2914304116img_6849.jpeg\",\"14837451037img_6844.jpeg\",\"4616833038img_6843.jpeg\"]', '1149', '2500', 4),
(6268, 152, 22, 11, '[\"13228602970img_6850.jpeg\",\"3224286011img_6847.jpeg\",\"8898191212img_6845.jpeg\",\"2143354563img_6848.jpeg\",\"326984864img_6851.jpeg\",\"17882864775img_6846.jpeg\",\"2914304116img_6849.jpeg\",\"14837451037img_6844.jpeg\",\"4616833038img_6843.jpeg\"]', '1149', '2500', 4),
(6340, 128, 11, 7, '[\"13797635230img_5129.jpeg\",\"12598756011593b121c-f31e-4ff5-b542-bf5102853e69.jpeg\",\"6285180952a5c02118-2f4a-403a-a6c8-39673ca0acf0.jpeg\",\"16413478993ce1a6328-7ae7-4166-8539-f00745f6f9f5.jpeg\",\"85301591943849e015-e04d-449d-8257-daf45afff359.jpeg\"]', '999', '1400', 0),
(6341, 128, 11, 7, '[\"13797635230img_5129.jpeg\",\"12598756011593b121c-f31e-4ff5-b542-bf5102853e69.jpeg\",\"6285180952a5c02118-2f4a-403a-a6c8-39673ca0acf0.jpeg\",\"16413478993ce1a6328-7ae7-4166-8539-f00745f6f9f5.jpeg\",\"85301591943849e015-e04d-449d-8257-daf45afff359.jpeg\"]', '999', '1400', 0),
(6342, 128, 11, 7, '[\"13797635230img_5129.jpeg\",\"12598756011593b121c-f31e-4ff5-b542-bf5102853e69.jpeg\",\"6285180952a5c02118-2f4a-403a-a6c8-39673ca0acf0.jpeg\",\"16413478993ce1a6328-7ae7-4166-8539-f00745f6f9f5.jpeg\",\"85301591943849e015-e04d-449d-8257-daf45afff359.jpeg\"]', '999', '1400', 0),
(6343, 128, 11, 7, '[\"13797635230img_5129.jpeg\",\"12598756011593b121c-f31e-4ff5-b542-bf5102853e69.jpeg\",\"6285180952a5c02118-2f4a-403a-a6c8-39673ca0acf0.jpeg\",\"16413478993ce1a6328-7ae7-4166-8539-f00745f6f9f5.jpeg\",\"85301591943849e015-e04d-449d-8257-daf45afff359.jpeg\"]', '999', '1400', 0),
(6344, 128, 11, 7, '[\"13797635230img_5129.jpeg\",\"12598756011593b121c-f31e-4ff5-b542-bf5102853e69.jpeg\",\"6285180952a5c02118-2f4a-403a-a6c8-39673ca0acf0.jpeg\",\"16413478993ce1a6328-7ae7-4166-8539-f00745f6f9f5.jpeg\",\"85301591943849e015-e04d-449d-8257-daf45afff359.jpeg\"]', '999', '1400', 0),
(6519, 115, 24, 16, '[\"1569751906001d27014-e727-4345-b3ef-862f04e33f93.jpeg\",\"2649759581d099f34b-fa71-421b-b907-e6f247478e9d.jpeg\",\"1979207382dca90034-4733-4e87-80e3-f458885ea1e6.jpeg\",\"106375714932631be0e-00de-49a1-8d6e-ebae7353ea7b.jpeg\"]', '699', '1400', 5),
(6520, 115, 24, 16, '[\"1569751906001d27014-e727-4345-b3ef-862f04e33f93.jpeg\",\"2649759581d099f34b-fa71-421b-b907-e6f247478e9d.jpeg\",\"1979207382dca90034-4733-4e87-80e3-f458885ea1e6.jpeg\",\"106375714932631be0e-00de-49a1-8d6e-ebae7353ea7b.jpeg\"]', '699', '1400', 5),
(6521, 115, 24, 16, '[\"1569751906001d27014-e727-4345-b3ef-862f04e33f93.jpeg\",\"2649759581d099f34b-fa71-421b-b907-e6f247478e9d.jpeg\",\"1979207382dca90034-4733-4e87-80e3-f458885ea1e6.jpeg\",\"106375714932631be0e-00de-49a1-8d6e-ebae7353ea7b.jpeg\"]', '699', '1400', 5),
(6522, 115, 24, 16, '[\"1569751906001d27014-e727-4345-b3ef-862f04e33f93.jpeg\",\"2649759581d099f34b-fa71-421b-b907-e6f247478e9d.jpeg\",\"1979207382dca90034-4733-4e87-80e3-f458885ea1e6.jpeg\",\"106375714932631be0e-00de-49a1-8d6e-ebae7353ea7b.jpeg\"]', '699', '1400', 5),
(6523, 121, 24, 16, '[\"48172908100fb00cdb-f509-403a-82df-1b156f3daefc.jpeg\",\"199845766611abddf90-b8f4-456a-9d56-c9d748ee3956.jpeg\",\"200498558127783fdb4-a49c-4543-a3d3-7e1989830b31.jpeg\"]', '399', '700', 0),
(6524, 121, 24, 16, '[\"48172908100fb00cdb-f509-403a-82df-1b156f3daefc.jpeg\",\"199845766611abddf90-b8f4-456a-9d56-c9d748ee3956.jpeg\",\"200498558127783fdb4-a49c-4543-a3d3-7e1989830b31.jpeg\"]', '399', '700', 0),
(6525, 121, 24, 16, '[\"48172908100fb00cdb-f509-403a-82df-1b156f3daefc.jpeg\",\"199845766611abddf90-b8f4-456a-9d56-c9d748ee3956.jpeg\",\"200498558127783fdb4-a49c-4543-a3d3-7e1989830b31.jpeg\"]', '399', '700', 0),
(6526, 131, 24, 16, '[\"259522878192781851-2c4a-434e-9690-dd0db1493297.jpeg\",\"4323986172e2b8e3a0-2630-405b-b7ca-dc12ec0ca55a.jpeg\",\"2123188068398e9feed-ba5f-4ba8-9d03-4782a2b23563.jpeg\",\"19184596904fd304922-1be3-43fa-80e3-30c882104fc6.jpeg\"]', '699', '1200', 3),
(6527, 131, 24, 16, '[\"259522878192781851-2c4a-434e-9690-dd0db1493297.jpeg\",\"4323986172e2b8e3a0-2630-405b-b7ca-dc12ec0ca55a.jpeg\",\"2123188068398e9feed-ba5f-4ba8-9d03-4782a2b23563.jpeg\",\"19184596904fd304922-1be3-43fa-80e3-30c882104fc6.jpeg\"]', '699', '1200', 3),
(6528, 131, 24, 16, '[\"259522878192781851-2c4a-434e-9690-dd0db1493297.jpeg\",\"4323986172e2b8e3a0-2630-405b-b7ca-dc12ec0ca55a.jpeg\",\"2123188068398e9feed-ba5f-4ba8-9d03-4782a2b23563.jpeg\",\"19184596904fd304922-1be3-43fa-80e3-30c882104fc6.jpeg\"]', '699', '1200', 3),
(6529, 131, 24, 16, '[\"259522878192781851-2c4a-434e-9690-dd0db1493297.jpeg\",\"4323986172e2b8e3a0-2630-405b-b7ca-dc12ec0ca55a.jpeg\",\"2123188068398e9feed-ba5f-4ba8-9d03-4782a2b23563.jpeg\",\"19184596904fd304922-1be3-43fa-80e3-30c882104fc6.jpeg\"]', '699', '1200', 3),
(6530, 132, 24, 12, '[\"17217908100img_4714.mov\",\"134470204127205cd1-4882-491f-8ea6-4d44662638d8.jpeg\",\"18948360402e151e0fa-311f-4528-a60d-a6f1ac6cb21f.jpeg\",\"95243679135bebf1d4-a1d8-4ae8-9cb4-4d054a48d599.jpeg\"]', '599', '1200', 10),
(6531, 132, 24, 12, '[\"17217908100img_4714.mov\",\"134470204127205cd1-4882-491f-8ea6-4d44662638d8.jpeg\",\"18948360402e151e0fa-311f-4528-a60d-a6f1ac6cb21f.jpeg\",\"95243679135bebf1d4-a1d8-4ae8-9cb4-4d054a48d599.jpeg\"]', '599', '1200', 10),
(6532, 132, 24, 12, '[\"17217908100img_4714.mov\",\"134470204127205cd1-4882-491f-8ea6-4d44662638d8.jpeg\",\"18948360402e151e0fa-311f-4528-a60d-a6f1ac6cb21f.jpeg\",\"95243679135bebf1d4-a1d8-4ae8-9cb4-4d054a48d599.jpeg\"]', '599', '1200', 10),
(6533, 132, 24, 12, '[\"17217908100img_4714.mov\",\"134470204127205cd1-4882-491f-8ea6-4d44662638d8.jpeg\",\"18948360402e151e0fa-311f-4528-a60d-a6f1ac6cb21f.jpeg\",\"95243679135bebf1d4-a1d8-4ae8-9cb4-4d054a48d599.jpeg\"]', '599', '1200', 10),
(6534, 133, 24, 16, '[\"1765297122002f09d93-b8ac-4174-bbf0-b20a1cc3251b.jpeg\",\"126195066717dc63bb6-deca-44d1-a5ad-90ff8e7ceba5.jpeg\",\"1779356516215dc4aad-e5e0-44ec-8b06-f2783d8831f0.jpeg\",\"122106105338a8b8e35-24e1-48b0-bb48-326409d33077.jpeg\"]', '399', '999', 0),
(6535, 133, 24, 16, '[\"1765297122002f09d93-b8ac-4174-bbf0-b20a1cc3251b.jpeg\",\"126195066717dc63bb6-deca-44d1-a5ad-90ff8e7ceba5.jpeg\",\"1779356516215dc4aad-e5e0-44ec-8b06-f2783d8831f0.jpeg\",\"122106105338a8b8e35-24e1-48b0-bb48-326409d33077.jpeg\"]', '399', '999', 0),
(6536, 133, 24, 16, '[\"1765297122002f09d93-b8ac-4174-bbf0-b20a1cc3251b.jpeg\",\"126195066717dc63bb6-deca-44d1-a5ad-90ff8e7ceba5.jpeg\",\"1779356516215dc4aad-e5e0-44ec-8b06-f2783d8831f0.jpeg\",\"122106105338a8b8e35-24e1-48b0-bb48-326409d33077.jpeg\"]', '399', '999', 0),
(6537, 133, 24, 16, '[\"1765297122002f09d93-b8ac-4174-bbf0-b20a1cc3251b.jpeg\",\"126195066717dc63bb6-deca-44d1-a5ad-90ff8e7ceba5.jpeg\",\"1779356516215dc4aad-e5e0-44ec-8b06-f2783d8831f0.jpeg\",\"122106105338a8b8e35-24e1-48b0-bb48-326409d33077.jpeg\"]', '399', '999', 0),
(6553, 139, 8, 12, '[\"3852949760img_5145.jpeg\",\"145568545018dbbd0da-c049-40ca-9516-2579782c43ce.jpeg\",\"1885073485211d62ee5-56f8-4047-ba4f-4e46d17e0dfa.jpeg\",\"20569700173a26f01f3-b97c-40bf-bff0-021046903d78.jpeg\",\"1313502887483dbb1e6-ee2d-4c64-a080-a40b15023387.jpeg\"]', '795', '1300', 10),
(6554, 139, 8, 12, '[\"3852949760img_5145.jpeg\",\"145568545018dbbd0da-c049-40ca-9516-2579782c43ce.jpeg\",\"1885073485211d62ee5-56f8-4047-ba4f-4e46d17e0dfa.jpeg\",\"20569700173a26f01f3-b97c-40bf-bff0-021046903d78.jpeg\",\"1313502887483dbb1e6-ee2d-4c64-a080-a40b15023387.jpeg\"]', '795', '1300', 10),
(6555, 139, 8, 12, '[\"3852949760img_5145.jpeg\",\"145568545018dbbd0da-c049-40ca-9516-2579782c43ce.jpeg\",\"1885073485211d62ee5-56f8-4047-ba4f-4e46d17e0dfa.jpeg\",\"20569700173a26f01f3-b97c-40bf-bff0-021046903d78.jpeg\",\"1313502887483dbb1e6-ee2d-4c64-a080-a40b15023387.jpeg\"]', '795', '1300', 10),
(6556, 139, 8, 12, '[\"3852949760img_5145.jpeg\",\"145568545018dbbd0da-c049-40ca-9516-2579782c43ce.jpeg\",\"1885073485211d62ee5-56f8-4047-ba4f-4e46d17e0dfa.jpeg\",\"20569700173a26f01f3-b97c-40bf-bff0-021046903d78.jpeg\",\"1313502887483dbb1e6-ee2d-4c64-a080-a40b15023387.jpeg\"]', '795', '1300', 10),
(6557, 139, 8, 12, '[\"3852949760img_5145.jpeg\",\"145568545018dbbd0da-c049-40ca-9516-2579782c43ce.jpeg\",\"1885073485211d62ee5-56f8-4047-ba4f-4e46d17e0dfa.jpeg\",\"20569700173a26f01f3-b97c-40bf-bff0-021046903d78.jpeg\",\"1313502887483dbb1e6-ee2d-4c64-a080-a40b15023387.jpeg\"]', '795', '1300', 10),
(6558, 139, 9, 12, '[\"3852949760img_5145.jpeg\",\"145568545018dbbd0da-c049-40ca-9516-2579782c43ce.jpeg\",\"1885073485211d62ee5-56f8-4047-ba4f-4e46d17e0dfa.jpeg\",\"20569700173a26f01f3-b97c-40bf-bff0-021046903d78.jpeg\",\"1313502887483dbb1e6-ee2d-4c64-a080-a40b15023387.jpeg\"]', '795', '1300', 10),
(6559, 139, 9, 12, '[\"3852949760img_5145.jpeg\",\"145568545018dbbd0da-c049-40ca-9516-2579782c43ce.jpeg\",\"1885073485211d62ee5-56f8-4047-ba4f-4e46d17e0dfa.jpeg\",\"20569700173a26f01f3-b97c-40bf-bff0-021046903d78.jpeg\",\"1313502887483dbb1e6-ee2d-4c64-a080-a40b15023387.jpeg\"]', '795', '1300', 10),
(6560, 139, 9, 12, '[\"3852949760img_5145.jpeg\",\"145568545018dbbd0da-c049-40ca-9516-2579782c43ce.jpeg\",\"1885073485211d62ee5-56f8-4047-ba4f-4e46d17e0dfa.jpeg\",\"20569700173a26f01f3-b97c-40bf-bff0-021046903d78.jpeg\",\"1313502887483dbb1e6-ee2d-4c64-a080-a40b15023387.jpeg\"]', '795', '1300', 10),
(6561, 139, 9, 12, '[\"3852949760img_5145.jpeg\",\"145568545018dbbd0da-c049-40ca-9516-2579782c43ce.jpeg\",\"1885073485211d62ee5-56f8-4047-ba4f-4e46d17e0dfa.jpeg\",\"20569700173a26f01f3-b97c-40bf-bff0-021046903d78.jpeg\",\"1313502887483dbb1e6-ee2d-4c64-a080-a40b15023387.jpeg\"]', '795', '1300', 10),
(6562, 139, 9, 12, '[\"3852949760img_5145.jpeg\",\"145568545018dbbd0da-c049-40ca-9516-2579782c43ce.jpeg\",\"1885073485211d62ee5-56f8-4047-ba4f-4e46d17e0dfa.jpeg\",\"20569700173a26f01f3-b97c-40bf-bff0-021046903d78.jpeg\",\"1313502887483dbb1e6-ee2d-4c64-a080-a40b15023387.jpeg\"]', '795', '1300', 10),
(6563, 139, 11, 12, '[\"3852949760img_5145.jpeg\",\"145568545018dbbd0da-c049-40ca-9516-2579782c43ce.jpeg\",\"1885073485211d62ee5-56f8-4047-ba4f-4e46d17e0dfa.jpeg\",\"20569700173a26f01f3-b97c-40bf-bff0-021046903d78.jpeg\",\"1313502887483dbb1e6-ee2d-4c64-a080-a40b15023387.jpeg\"]', '795', '1300', 10),
(6564, 139, 11, 12, '[\"3852949760img_5145.jpeg\",\"145568545018dbbd0da-c049-40ca-9516-2579782c43ce.jpeg\",\"1885073485211d62ee5-56f8-4047-ba4f-4e46d17e0dfa.jpeg\",\"20569700173a26f01f3-b97c-40bf-bff0-021046903d78.jpeg\",\"1313502887483dbb1e6-ee2d-4c64-a080-a40b15023387.jpeg\"]', '795', '1300', 10),
(6565, 139, 11, 12, '[\"3852949760img_5145.jpeg\",\"145568545018dbbd0da-c049-40ca-9516-2579782c43ce.jpeg\",\"1885073485211d62ee5-56f8-4047-ba4f-4e46d17e0dfa.jpeg\",\"20569700173a26f01f3-b97c-40bf-bff0-021046903d78.jpeg\",\"1313502887483dbb1e6-ee2d-4c64-a080-a40b15023387.jpeg\"]', '795', '1300', 10),
(6566, 139, 11, 12, '[\"3852949760img_5145.jpeg\",\"145568545018dbbd0da-c049-40ca-9516-2579782c43ce.jpeg\",\"1885073485211d62ee5-56f8-4047-ba4f-4e46d17e0dfa.jpeg\",\"20569700173a26f01f3-b97c-40bf-bff0-021046903d78.jpeg\",\"1313502887483dbb1e6-ee2d-4c64-a080-a40b15023387.jpeg\"]', '795', '1300', 10),
(6567, 139, 11, 12, '[\"3852949760img_5145.jpeg\",\"145568545018dbbd0da-c049-40ca-9516-2579782c43ce.jpeg\",\"1885073485211d62ee5-56f8-4047-ba4f-4e46d17e0dfa.jpeg\",\"20569700173a26f01f3-b97c-40bf-bff0-021046903d78.jpeg\",\"1313502887483dbb1e6-ee2d-4c64-a080-a40b15023387.jpeg\"]', '795', '1300', 10),
(6568, 138, 8, 8, '[\"8687272200img_5142.jpeg\",\"142150804414f983b0b-7d38-4c40-a40a-6c0aceec12af.jpeg\",\"1994137118295d57b89-f10c-4769-bf6c-e7509cff2178.jpeg\",\"120072147836a57f2db-901b-4445-a9ed-6fd6e36db3e2.jpeg\",\"210479061249b7bae8b-5ece-4a07-b842-afdd610eb38a.jpeg\"]', '795', '1300', 10),
(6569, 138, 8, 8, '[\"8687272200img_5142.jpeg\",\"142150804414f983b0b-7d38-4c40-a40a-6c0aceec12af.jpeg\",\"1994137118295d57b89-f10c-4769-bf6c-e7509cff2178.jpeg\",\"120072147836a57f2db-901b-4445-a9ed-6fd6e36db3e2.jpeg\",\"210479061249b7bae8b-5ece-4a07-b842-afdd610eb38a.jpeg\"]', '795', '1300', 10),
(6570, 138, 8, 8, '[\"8687272200img_5142.jpeg\",\"142150804414f983b0b-7d38-4c40-a40a-6c0aceec12af.jpeg\",\"1994137118295d57b89-f10c-4769-bf6c-e7509cff2178.jpeg\",\"120072147836a57f2db-901b-4445-a9ed-6fd6e36db3e2.jpeg\",\"210479061249b7bae8b-5ece-4a07-b842-afdd610eb38a.jpeg\"]', '795', '1300', 10),
(6571, 138, 8, 8, '[\"8687272200img_5142.jpeg\",\"142150804414f983b0b-7d38-4c40-a40a-6c0aceec12af.jpeg\",\"1994137118295d57b89-f10c-4769-bf6c-e7509cff2178.jpeg\",\"120072147836a57f2db-901b-4445-a9ed-6fd6e36db3e2.jpeg\",\"210479061249b7bae8b-5ece-4a07-b842-afdd610eb38a.jpeg\"]', '795', '1300', 10),
(6572, 138, 8, 8, '[\"8687272200img_5142.jpeg\",\"142150804414f983b0b-7d38-4c40-a40a-6c0aceec12af.jpeg\",\"1994137118295d57b89-f10c-4769-bf6c-e7509cff2178.jpeg\",\"120072147836a57f2db-901b-4445-a9ed-6fd6e36db3e2.jpeg\",\"210479061249b7bae8b-5ece-4a07-b842-afdd610eb38a.jpeg\"]', '795', '1300', 10),
(6573, 138, 9, 8, '[\"8687272200img_5142.jpeg\",\"142150804414f983b0b-7d38-4c40-a40a-6c0aceec12af.jpeg\",\"1994137118295d57b89-f10c-4769-bf6c-e7509cff2178.jpeg\",\"120072147836a57f2db-901b-4445-a9ed-6fd6e36db3e2.jpeg\",\"210479061249b7bae8b-5ece-4a07-b842-afdd610eb38a.jpeg\"]', '795', '1300', 10),
(6574, 138, 9, 8, '[\"8687272200img_5142.jpeg\",\"142150804414f983b0b-7d38-4c40-a40a-6c0aceec12af.jpeg\",\"1994137118295d57b89-f10c-4769-bf6c-e7509cff2178.jpeg\",\"120072147836a57f2db-901b-4445-a9ed-6fd6e36db3e2.jpeg\",\"210479061249b7bae8b-5ece-4a07-b842-afdd610eb38a.jpeg\"]', '795', '1300', 10),
(6575, 138, 9, 8, '[\"8687272200img_5142.jpeg\",\"142150804414f983b0b-7d38-4c40-a40a-6c0aceec12af.jpeg\",\"1994137118295d57b89-f10c-4769-bf6c-e7509cff2178.jpeg\",\"120072147836a57f2db-901b-4445-a9ed-6fd6e36db3e2.jpeg\",\"210479061249b7bae8b-5ece-4a07-b842-afdd610eb38a.jpeg\"]', '795', '1300', 10),
(6576, 138, 9, 8, '[\"8687272200img_5142.jpeg\",\"142150804414f983b0b-7d38-4c40-a40a-6c0aceec12af.jpeg\",\"1994137118295d57b89-f10c-4769-bf6c-e7509cff2178.jpeg\",\"120072147836a57f2db-901b-4445-a9ed-6fd6e36db3e2.jpeg\",\"210479061249b7bae8b-5ece-4a07-b842-afdd610eb38a.jpeg\"]', '795', '1300', 10),
(6577, 138, 9, 8, '[\"8687272200img_5142.jpeg\",\"142150804414f983b0b-7d38-4c40-a40a-6c0aceec12af.jpeg\",\"1994137118295d57b89-f10c-4769-bf6c-e7509cff2178.jpeg\",\"120072147836a57f2db-901b-4445-a9ed-6fd6e36db3e2.jpeg\",\"210479061249b7bae8b-5ece-4a07-b842-afdd610eb38a.jpeg\"]', '795', '1300', 10),
(6578, 138, 21, 8, '[\"8687272200img_5142.jpeg\",\"142150804414f983b0b-7d38-4c40-a40a-6c0aceec12af.jpeg\",\"1994137118295d57b89-f10c-4769-bf6c-e7509cff2178.jpeg\",\"120072147836a57f2db-901b-4445-a9ed-6fd6e36db3e2.jpeg\",\"210479061249b7bae8b-5ece-4a07-b842-afdd610eb38a.jpeg\"]', '795', '1300', 10),
(6579, 138, 21, 8, '[\"8687272200img_5142.jpeg\",\"142150804414f983b0b-7d38-4c40-a40a-6c0aceec12af.jpeg\",\"1994137118295d57b89-f10c-4769-bf6c-e7509cff2178.jpeg\",\"120072147836a57f2db-901b-4445-a9ed-6fd6e36db3e2.jpeg\",\"210479061249b7bae8b-5ece-4a07-b842-afdd610eb38a.jpeg\"]', '795', '1300', 10),
(6580, 138, 21, 8, '[\"8687272200img_5142.jpeg\",\"142150804414f983b0b-7d38-4c40-a40a-6c0aceec12af.jpeg\",\"1994137118295d57b89-f10c-4769-bf6c-e7509cff2178.jpeg\",\"120072147836a57f2db-901b-4445-a9ed-6fd6e36db3e2.jpeg\",\"210479061249b7bae8b-5ece-4a07-b842-afdd610eb38a.jpeg\"]', '795', '1300', 10),
(6581, 138, 21, 8, '[\"8687272200img_5142.jpeg\",\"142150804414f983b0b-7d38-4c40-a40a-6c0aceec12af.jpeg\",\"1994137118295d57b89-f10c-4769-bf6c-e7509cff2178.jpeg\",\"120072147836a57f2db-901b-4445-a9ed-6fd6e36db3e2.jpeg\",\"210479061249b7bae8b-5ece-4a07-b842-afdd610eb38a.jpeg\"]', '795', '1300', 10),
(6582, 138, 21, 8, '[\"8687272200img_5142.jpeg\",\"142150804414f983b0b-7d38-4c40-a40a-6c0aceec12af.jpeg\",\"1994137118295d57b89-f10c-4769-bf6c-e7509cff2178.jpeg\",\"120072147836a57f2db-901b-4445-a9ed-6fd6e36db3e2.jpeg\",\"210479061249b7bae8b-5ece-4a07-b842-afdd610eb38a.jpeg\"]', '795', '1300', 10),
(6583, 138, 22, 8, '[\"8687272200img_5142.jpeg\",\"142150804414f983b0b-7d38-4c40-a40a-6c0aceec12af.jpeg\",\"1994137118295d57b89-f10c-4769-bf6c-e7509cff2178.jpeg\",\"120072147836a57f2db-901b-4445-a9ed-6fd6e36db3e2.jpeg\",\"210479061249b7bae8b-5ece-4a07-b842-afdd610eb38a.jpeg\"]', '795', '1300', 10),
(6584, 138, 22, 8, '[\"8687272200img_5142.jpeg\",\"142150804414f983b0b-7d38-4c40-a40a-6c0aceec12af.jpeg\",\"1994137118295d57b89-f10c-4769-bf6c-e7509cff2178.jpeg\",\"120072147836a57f2db-901b-4445-a9ed-6fd6e36db3e2.jpeg\",\"210479061249b7bae8b-5ece-4a07-b842-afdd610eb38a.jpeg\"]', '795', '1300', 10),
(6585, 138, 22, 8, '[\"8687272200img_5142.jpeg\",\"142150804414f983b0b-7d38-4c40-a40a-6c0aceec12af.jpeg\",\"1994137118295d57b89-f10c-4769-bf6c-e7509cff2178.jpeg\",\"120072147836a57f2db-901b-4445-a9ed-6fd6e36db3e2.jpeg\",\"210479061249b7bae8b-5ece-4a07-b842-afdd610eb38a.jpeg\"]', '795', '1300', 10),
(6586, 138, 22, 8, '[\"8687272200img_5142.jpeg\",\"142150804414f983b0b-7d38-4c40-a40a-6c0aceec12af.jpeg\",\"1994137118295d57b89-f10c-4769-bf6c-e7509cff2178.jpeg\",\"120072147836a57f2db-901b-4445-a9ed-6fd6e36db3e2.jpeg\",\"210479061249b7bae8b-5ece-4a07-b842-afdd610eb38a.jpeg\"]', '795', '1300', 10),
(6587, 138, 22, 8, '[\"8687272200img_5142.jpeg\",\"142150804414f983b0b-7d38-4c40-a40a-6c0aceec12af.jpeg\",\"1994137118295d57b89-f10c-4769-bf6c-e7509cff2178.jpeg\",\"120072147836a57f2db-901b-4445-a9ed-6fd6e36db3e2.jpeg\",\"210479061249b7bae8b-5ece-4a07-b842-afdd610eb38a.jpeg\"]', '795', '1300', 10),
(6588, 130, 8, 11, '[\"10960888230img_5139.jpeg\",\"1562373589103a31361-8ca5-4201-8c4b-c5843a279108.jpeg\",\"5393346092fbbe844b-33cd-492c-be2b-7ca284dfd298.jpeg\",\"22878507738a236160-6582-450f-ac10-00d63b1ae19e.jpeg\"]', '895', '1500', 2),
(6589, 130, 8, 11, '[\"10960888230img_5139.jpeg\",\"1562373589103a31361-8ca5-4201-8c4b-c5843a279108.jpeg\",\"5393346092fbbe844b-33cd-492c-be2b-7ca284dfd298.jpeg\",\"22878507738a236160-6582-450f-ac10-00d63b1ae19e.jpeg\"]', '895', '1500', 2),
(6590, 130, 8, 11, '[\"10960888230img_5139.jpeg\",\"1562373589103a31361-8ca5-4201-8c4b-c5843a279108.jpeg\",\"5393346092fbbe844b-33cd-492c-be2b-7ca284dfd298.jpeg\",\"22878507738a236160-6582-450f-ac10-00d63b1ae19e.jpeg\"]', '895', '1500', 2),
(6591, 130, 8, 11, '[\"10960888230img_5139.jpeg\",\"1562373589103a31361-8ca5-4201-8c4b-c5843a279108.jpeg\",\"5393346092fbbe844b-33cd-492c-be2b-7ca284dfd298.jpeg\",\"22878507738a236160-6582-450f-ac10-00d63b1ae19e.jpeg\"]', '895', '1500', 2),
(6592, 130, 9, 11, '[\"10960888230img_5139.jpeg\",\"1562373589103a31361-8ca5-4201-8c4b-c5843a279108.jpeg\",\"5393346092fbbe844b-33cd-492c-be2b-7ca284dfd298.jpeg\",\"22878507738a236160-6582-450f-ac10-00d63b1ae19e.jpeg\"]', '895', '1500', 2),
(6593, 130, 9, 11, '[\"10960888230img_5139.jpeg\",\"1562373589103a31361-8ca5-4201-8c4b-c5843a279108.jpeg\",\"5393346092fbbe844b-33cd-492c-be2b-7ca284dfd298.jpeg\",\"22878507738a236160-6582-450f-ac10-00d63b1ae19e.jpeg\"]', '895', '1500', 2),
(6594, 130, 9, 11, '[\"10960888230img_5139.jpeg\",\"1562373589103a31361-8ca5-4201-8c4b-c5843a279108.jpeg\",\"5393346092fbbe844b-33cd-492c-be2b-7ca284dfd298.jpeg\",\"22878507738a236160-6582-450f-ac10-00d63b1ae19e.jpeg\"]', '895', '1500', 2),
(6595, 130, 9, 11, '[\"10960888230img_5139.jpeg\",\"1562373589103a31361-8ca5-4201-8c4b-c5843a279108.jpeg\",\"5393346092fbbe844b-33cd-492c-be2b-7ca284dfd298.jpeg\",\"22878507738a236160-6582-450f-ac10-00d63b1ae19e.jpeg\"]', '895', '1500', 2),
(6596, 130, 11, 11, '[\"10960888230img_5139.jpeg\",\"1562373589103a31361-8ca5-4201-8c4b-c5843a279108.jpeg\",\"5393346092fbbe844b-33cd-492c-be2b-7ca284dfd298.jpeg\",\"22878507738a236160-6582-450f-ac10-00d63b1ae19e.jpeg\"]', '895', '1500', 2),
(6597, 130, 11, 11, '[\"10960888230img_5139.jpeg\",\"1562373589103a31361-8ca5-4201-8c4b-c5843a279108.jpeg\",\"5393346092fbbe844b-33cd-492c-be2b-7ca284dfd298.jpeg\",\"22878507738a236160-6582-450f-ac10-00d63b1ae19e.jpeg\"]', '895', '1500', 2),
(6598, 130, 11, 11, '[\"10960888230img_5139.jpeg\",\"1562373589103a31361-8ca5-4201-8c4b-c5843a279108.jpeg\",\"5393346092fbbe844b-33cd-492c-be2b-7ca284dfd298.jpeg\",\"22878507738a236160-6582-450f-ac10-00d63b1ae19e.jpeg\"]', '895', '1500', 2),
(6599, 130, 11, 11, '[\"10960888230img_5139.jpeg\",\"1562373589103a31361-8ca5-4201-8c4b-c5843a279108.jpeg\",\"5393346092fbbe844b-33cd-492c-be2b-7ca284dfd298.jpeg\",\"22878507738a236160-6582-450f-ac10-00d63b1ae19e.jpeg\"]', '895', '1500', 2),
(6600, 130, 21, 11, '[\"10960888230img_5139.jpeg\",\"1562373589103a31361-8ca5-4201-8c4b-c5843a279108.jpeg\",\"5393346092fbbe844b-33cd-492c-be2b-7ca284dfd298.jpeg\",\"22878507738a236160-6582-450f-ac10-00d63b1ae19e.jpeg\"]', '895', '1500', 2),
(6601, 130, 21, 11, '[\"10960888230img_5139.jpeg\",\"1562373589103a31361-8ca5-4201-8c4b-c5843a279108.jpeg\",\"5393346092fbbe844b-33cd-492c-be2b-7ca284dfd298.jpeg\",\"22878507738a236160-6582-450f-ac10-00d63b1ae19e.jpeg\"]', '895', '1500', 2),
(6602, 130, 21, 11, '[\"10960888230img_5139.jpeg\",\"1562373589103a31361-8ca5-4201-8c4b-c5843a279108.jpeg\",\"5393346092fbbe844b-33cd-492c-be2b-7ca284dfd298.jpeg\",\"22878507738a236160-6582-450f-ac10-00d63b1ae19e.jpeg\"]', '895', '1500', 2),
(6603, 130, 21, 11, '[\"10960888230img_5139.jpeg\",\"1562373589103a31361-8ca5-4201-8c4b-c5843a279108.jpeg\",\"5393346092fbbe844b-33cd-492c-be2b-7ca284dfd298.jpeg\",\"22878507738a236160-6582-450f-ac10-00d63b1ae19e.jpeg\"]', '895', '1500', 2),
(6604, 122, 9, 11, '[\"16949042790img_5146.jpeg\",\"21285452171img_4828.jpeg\"]', '495', '1200', 2),
(6605, 122, 9, 11, '[\"16949042790img_5146.jpeg\",\"21285452171img_4828.jpeg\"]', '495', '1200', 2),
(6606, 122, 11, 11, '[\"16949042790img_5146.jpeg\",\"21285452171img_4828.jpeg\"]', '495', '1200', 2),
(6607, 122, 11, 11, '[\"16949042790img_5146.jpeg\",\"21285452171img_4828.jpeg\"]', '495', '1200', 2),
(6608, 122, 21, 11, '[\"16949042790img_5146.jpeg\",\"21285452171img_4828.jpeg\"]', '495', '1200', 2),
(6609, 122, 21, 11, '[\"16949042790img_5146.jpeg\",\"21285452171img_4828.jpeg\"]', '495', '1200', 2),
(6610, 123, 9, 3, '[\"5319440940img_5140.jpeg\",\"1297518471img_4799.jpeg\"]', '495', '1200', 2),
(6611, 123, 9, 3, '[\"5319440940img_5140.jpeg\",\"1297518471img_4799.jpeg\"]', '495', '1200', 2),
(6612, 123, 11, 12, '[\"5319440940img_5140.jpeg\",\"1297518471img_4799.jpeg\"]', '495', '1200', 2),
(6613, 123, 11, 12, '[\"5319440940img_5140.jpeg\",\"1297518471img_4799.jpeg\"]', '495', '1200', 2),
(6614, 123, 21, 12, '[\"5319440940img_5140.jpeg\",\"1297518471img_4799.jpeg\"]', '495', '1200', 2),
(6615, 123, 21, 12, '[\"5319440940img_5140.jpeg\",\"1297518471img_4799.jpeg\"]', '495', '1200', 2),
(6743, 184, 8, 7, '[\"12031407700untitled-designzip-2.png\",\"18673594181img_9882.jpeg\",\"1132442042img_9883.jpeg\"]', '389', '799', 10),
(6744, 184, 8, 7, '[\"12031407700untitled-designzip-2.png\",\"18673594181img_9882.jpeg\",\"1132442042img_9883.jpeg\"]', '389', '799', 10),
(6745, 184, 8, 7, '[\"12031407700untitled-designzip-2.png\",\"18673594181img_9882.jpeg\",\"1132442042img_9883.jpeg\"]', '389', '799', 10),
(6746, 184, 9, 0, '[\"12031407700untitled-designzip-2.png\",\"18673594181img_9882.jpeg\",\"1132442042img_9883.jpeg\"]', '389', '799', 10),
(6747, 184, 9, 0, '[\"12031407700untitled-designzip-2.png\",\"18673594181img_9882.jpeg\",\"1132442042img_9883.jpeg\"]', '389', '799', 10),
(6748, 184, 9, 0, '[\"12031407700untitled-designzip-2.png\",\"18673594181img_9882.jpeg\",\"1132442042img_9883.jpeg\"]', '389', '799', 10),
(6749, 184, 11, 0, '[\"12031407700untitled-designzip-2.png\",\"18673594181img_9882.jpeg\",\"1132442042img_9883.jpeg\"]', '389', '799', 10),
(6750, 184, 11, 0, '[\"12031407700untitled-designzip-2.png\",\"18673594181img_9882.jpeg\",\"1132442042img_9883.jpeg\"]', '389', '799', 10),
(6751, 184, 11, 0, '[\"12031407700untitled-designzip-2.png\",\"18673594181img_9882.jpeg\",\"1132442042img_9883.jpeg\"]', '389', '799', 10),
(6752, 184, 26, 0, '[\"12031407700untitled-designzip-2.png\",\"18673594181img_9882.jpeg\",\"1132442042img_9883.jpeg\"]', '389', '799', 10),
(6753, 184, 26, 0, '[\"12031407700untitled-designzip-2.png\",\"18673594181img_9882.jpeg\",\"1132442042img_9883.jpeg\"]', '389', '799', 10),
(6754, 184, 26, 0, '[\"12031407700untitled-designzip-2.png\",\"18673594181img_9882.jpeg\",\"1132442042img_9883.jpeg\"]', '389', '799', 10),
(6767, 183, 8, 2, '[\"12772870410img_9721.png\",\"20413013201img_9722.png\",\"20858107232img_9723.png\"]', '379', '749', 10),
(6768, 183, 8, 2, '[\"12772870410img_9721.png\",\"20413013201img_9722.png\",\"20858107232img_9723.png\"]', '379', '749', 10),
(6769, 183, 8, 2, '[\"12772870410img_9721.png\",\"20413013201img_9722.png\",\"20858107232img_9723.png\"]', '379', '749', 10),
(6770, 183, 9, 0, '[\"12772870410img_9721.png\",\"20413013201img_9722.png\",\"20858107232img_9723.png\"]', '379', '749', 10),
(6771, 183, 9, 0, '[\"12772870410img_9721.png\",\"20413013201img_9722.png\",\"20858107232img_9723.png\"]', '379', '749', 10),
(6772, 183, 9, 0, '[\"12772870410img_9721.png\",\"20413013201img_9722.png\",\"20858107232img_9723.png\"]', '379', '749', 10),
(6773, 183, 11, 0, '[\"12772870410img_9721.png\",\"20413013201img_9722.png\",\"20858107232img_9723.png\"]', '379', '749', 10),
(6774, 183, 11, 0, '[\"12772870410img_9721.png\",\"20413013201img_9722.png\",\"20858107232img_9723.png\"]', '379', '749', 10),
(6775, 183, 11, 0, '[\"12772870410img_9721.png\",\"20413013201img_9722.png\",\"20858107232img_9723.png\"]', '379', '749', 10),
(6776, 183, 21, 0, '[\"12772870410img_9721.png\",\"20413013201img_9722.png\",\"20858107232img_9723.png\"]', '379', '749', 10),
(6777, 183, 21, 0, '[\"12772870410img_9721.png\",\"20413013201img_9722.png\",\"20858107232img_9723.png\"]', '379', '749', 10),
(6778, 183, 21, 0, '[\"12772870410img_9721.png\",\"20413013201img_9722.png\",\"20858107232img_9723.png\"]', '379', '749', 10),
(6779, 183, 26, 0, '[\"12772870410img_9721.png\",\"20413013201img_9722.png\",\"20858107232img_9723.png\"]', '379', '749', 10),
(6780, 183, 26, 0, '[\"12772870410img_9721.png\",\"20413013201img_9722.png\",\"20858107232img_9723.png\"]', '379', '749', 10),
(6781, 183, 26, 0, '[\"12772870410img_9721.png\",\"20413013201img_9722.png\",\"20858107232img_9723.png\"]', '379', '749', 10),
(6782, 185, 8, 17, '[\"20921901090untitled-design.png\",\"3495079541img_9880.jpeg\"]', '449', '899', 9),
(6783, 185, 8, 17, '[\"20921901090untitled-design.png\",\"3495079541img_9880.jpeg\"]', '449', '899', 9),
(6784, 185, 9, 0, '[\"20921901090untitled-design.png\",\"3495079541img_9880.jpeg\"]', '449', '899', 9),
(6785, 185, 9, 0, '[\"20921901090untitled-design.png\",\"3495079541img_9880.jpeg\"]', '449', '899', 9),
(6786, 185, 11, 0, '[\"20921901090untitled-design.png\",\"3495079541img_9880.jpeg\"]', '449', '899', 9),
(6787, 185, 11, 0, '[\"20921901090untitled-design.png\",\"3495079541img_9880.jpeg\"]', '449', '899', 9),
(6788, 185, 26, 0, '[\"20921901090untitled-design.png\",\"3495079541img_9880.jpeg\"]', '449', '899', 9),
(6789, 185, 26, 0, '[\"20921901090untitled-design.png\",\"3495079541img_9880.jpeg\"]', '449', '899', 9),
(6790, 186, 8, 11, '[\"8368684510img_9910.jpeg\",\"18392880841img_9912.jpeg\"]', '419', '699', 9),
(6791, 186, 8, 11, '[\"8368684510img_9910.jpeg\",\"18392880841img_9912.jpeg\"]', '419', '699', 9),
(6792, 186, 9, 0, '[\"8368684510img_9910.jpeg\",\"18392880841img_9912.jpeg\"]', '419', '699', 9),
(6793, 186, 9, 0, '[\"8368684510img_9910.jpeg\",\"18392880841img_9912.jpeg\"]', '419', '699', 9),
(6809, 181, 8, 10, '[\"5959695300img_9729.png\",\"4741736121img_9715.png\",\"7681057122img_9714.png\",\"16627365863img_9713.png\",\"15611175794img_9712.png\",\"19738385345img_9711.png\"]', '479', '899', 10),
(6810, 181, 8, 10, '[\"5959695300img_9729.png\",\"4741736121img_9715.png\",\"7681057122img_9714.png\",\"16627365863img_9713.png\",\"15611175794img_9712.png\",\"19738385345img_9711.png\"]', '479', '899', 10),
(6811, 181, 8, 10, '[\"5959695300img_9729.png\",\"4741736121img_9715.png\",\"7681057122img_9714.png\",\"16627365863img_9713.png\",\"15611175794img_9712.png\",\"19738385345img_9711.png\"]', '479', '899', 10),
(6812, 181, 8, 10, '[\"5959695300img_9729.png\",\"4741736121img_9715.png\",\"7681057122img_9714.png\",\"16627365863img_9713.png\",\"15611175794img_9712.png\",\"19738385345img_9711.png\"]', '479', '899', 10),
(6813, 181, 8, 10, '[\"5959695300img_9729.png\",\"4741736121img_9715.png\",\"7681057122img_9714.png\",\"16627365863img_9713.png\",\"15611175794img_9712.png\",\"19738385345img_9711.png\"]', '479', '899', 10),
(6814, 181, 8, 10, '[\"5959695300img_9729.png\",\"4741736121img_9715.png\",\"7681057122img_9714.png\",\"16627365863img_9713.png\",\"15611175794img_9712.png\",\"19738385345img_9711.png\"]', '479', '899', 10),
(6815, 181, 9, 0, '[\"5959695300img_9729.png\",\"4741736121img_9715.png\",\"7681057122img_9714.png\",\"16627365863img_9713.png\",\"15611175794img_9712.png\",\"19738385345img_9711.png\"]', '479', '899', 10),
(6816, 181, 9, 0, '[\"5959695300img_9729.png\",\"4741736121img_9715.png\",\"7681057122img_9714.png\",\"16627365863img_9713.png\",\"15611175794img_9712.png\",\"19738385345img_9711.png\"]', '479', '899', 10),
(6817, 181, 9, 0, '[\"5959695300img_9729.png\",\"4741736121img_9715.png\",\"7681057122img_9714.png\",\"16627365863img_9713.png\",\"15611175794img_9712.png\",\"19738385345img_9711.png\"]', '479', '899', 10),
(6818, 181, 9, 0, '[\"5959695300img_9729.png\",\"4741736121img_9715.png\",\"7681057122img_9714.png\",\"16627365863img_9713.png\",\"15611175794img_9712.png\",\"19738385345img_9711.png\"]', '479', '899', 10),
(6819, 181, 9, 0, '[\"5959695300img_9729.png\",\"4741736121img_9715.png\",\"7681057122img_9714.png\",\"16627365863img_9713.png\",\"15611175794img_9712.png\",\"19738385345img_9711.png\"]', '479', '899', 10),
(6820, 181, 9, 0, '[\"5959695300img_9729.png\",\"4741736121img_9715.png\",\"7681057122img_9714.png\",\"16627365863img_9713.png\",\"15611175794img_9712.png\",\"19738385345img_9711.png\"]', '479', '899', 10),
(6821, 181, 11, 0, '[\"5959695300img_9729.png\",\"4741736121img_9715.png\",\"7681057122img_9714.png\",\"16627365863img_9713.png\",\"15611175794img_9712.png\",\"19738385345img_9711.png\"]', '479', '899', 10),
(6822, 181, 11, 0, '[\"5959695300img_9729.png\",\"4741736121img_9715.png\",\"7681057122img_9714.png\",\"16627365863img_9713.png\",\"15611175794img_9712.png\",\"19738385345img_9711.png\"]', '479', '899', 10),
(6823, 181, 11, 0, '[\"5959695300img_9729.png\",\"4741736121img_9715.png\",\"7681057122img_9714.png\",\"16627365863img_9713.png\",\"15611175794img_9712.png\",\"19738385345img_9711.png\"]', '479', '899', 10),
(6824, 181, 11, 0, '[\"5959695300img_9729.png\",\"4741736121img_9715.png\",\"7681057122img_9714.png\",\"16627365863img_9713.png\",\"15611175794img_9712.png\",\"19738385345img_9711.png\"]', '479', '899', 10),
(6825, 181, 11, 0, '[\"5959695300img_9729.png\",\"4741736121img_9715.png\",\"7681057122img_9714.png\",\"16627365863img_9713.png\",\"15611175794img_9712.png\",\"19738385345img_9711.png\"]', '479', '899', 10),
(6826, 181, 11, 0, '[\"5959695300img_9729.png\",\"4741736121img_9715.png\",\"7681057122img_9714.png\",\"16627365863img_9713.png\",\"15611175794img_9712.png\",\"19738385345img_9711.png\"]', '479', '899', 10),
(6827, 181, 26, 0, '[\"5959695300img_9729.png\",\"4741736121img_9715.png\",\"7681057122img_9714.png\",\"16627365863img_9713.png\",\"15611175794img_9712.png\",\"19738385345img_9711.png\"]', '479', '899', 10),
(6828, 181, 26, 0, '[\"5959695300img_9729.png\",\"4741736121img_9715.png\",\"7681057122img_9714.png\",\"16627365863img_9713.png\",\"15611175794img_9712.png\",\"19738385345img_9711.png\"]', '479', '899', 10),
(6829, 181, 26, 0, '[\"5959695300img_9729.png\",\"4741736121img_9715.png\",\"7681057122img_9714.png\",\"16627365863img_9713.png\",\"15611175794img_9712.png\",\"19738385345img_9711.png\"]', '479', '899', 10),
(6830, 181, 26, 0, '[\"5959695300img_9729.png\",\"4741736121img_9715.png\",\"7681057122img_9714.png\",\"16627365863img_9713.png\",\"15611175794img_9712.png\",\"19738385345img_9711.png\"]', '479', '899', 10),
(6831, 181, 26, 0, '[\"5959695300img_9729.png\",\"4741736121img_9715.png\",\"7681057122img_9714.png\",\"16627365863img_9713.png\",\"15611175794img_9712.png\",\"19738385345img_9711.png\"]', '479', '899', 10),
(6832, 181, 26, 0, '[\"5959695300img_9729.png\",\"4741736121img_9715.png\",\"7681057122img_9714.png\",\"16627365863img_9713.png\",\"15611175794img_9712.png\",\"19738385345img_9711.png\"]', '479', '899', 10),
(6848, 182, 8, 7, '[\"11196822420img_9728.png\",\"19008888981img_9727.png\",\"10799866502img_9725.png\",\"20536282693img_9726.png\",\"6391133334img_9724.png\"]', '479', '899', 9),
(6849, 182, 8, 7, '[\"11196822420img_9728.png\",\"19008888981img_9727.png\",\"10799866502img_9725.png\",\"20536282693img_9726.png\",\"6391133334img_9724.png\"]', '479', '899', 9),
(6850, 182, 8, 7, '[\"11196822420img_9728.png\",\"19008888981img_9727.png\",\"10799866502img_9725.png\",\"20536282693img_9726.png\",\"6391133334img_9724.png\"]', '479', '899', 9),
(6851, 182, 8, 7, '[\"11196822420img_9728.png\",\"19008888981img_9727.png\",\"10799866502img_9725.png\",\"20536282693img_9726.png\",\"6391133334img_9724.png\"]', '479', '899', 9),
(6852, 182, 8, 7, '[\"11196822420img_9728.png\",\"19008888981img_9727.png\",\"10799866502img_9725.png\",\"20536282693img_9726.png\",\"6391133334img_9724.png\"]', '479', '899', 9),
(6853, 182, 9, 0, '[\"11196822420img_9728.png\",\"19008888981img_9727.png\",\"10799866502img_9725.png\",\"20536282693img_9726.png\",\"6391133334img_9724.png\"]', '479', '899', 10),
(6854, 182, 9, 0, '[\"11196822420img_9728.png\",\"19008888981img_9727.png\",\"10799866502img_9725.png\",\"20536282693img_9726.png\",\"6391133334img_9724.png\"]', '479', '899', 10),
(6855, 182, 9, 0, '[\"11196822420img_9728.png\",\"19008888981img_9727.png\",\"10799866502img_9725.png\",\"20536282693img_9726.png\",\"6391133334img_9724.png\"]', '479', '899', 10),
(6856, 182, 9, 0, '[\"11196822420img_9728.png\",\"19008888981img_9727.png\",\"10799866502img_9725.png\",\"20536282693img_9726.png\",\"6391133334img_9724.png\"]', '479', '899', 10),
(6857, 182, 9, 0, '[\"11196822420img_9728.png\",\"19008888981img_9727.png\",\"10799866502img_9725.png\",\"20536282693img_9726.png\",\"6391133334img_9724.png\"]', '479', '899', 10),
(6858, 182, 11, 0, '[\"11196822420img_9728.png\",\"19008888981img_9727.png\",\"10799866502img_9725.png\",\"20536282693img_9726.png\",\"6391133334img_9724.png\"]', '479', '899', 10),
(6859, 182, 11, 0, '[\"11196822420img_9728.png\",\"19008888981img_9727.png\",\"10799866502img_9725.png\",\"20536282693img_9726.png\",\"6391133334img_9724.png\"]', '479', '899', 10),
(6860, 182, 11, 0, '[\"11196822420img_9728.png\",\"19008888981img_9727.png\",\"10799866502img_9725.png\",\"20536282693img_9726.png\",\"6391133334img_9724.png\"]', '479', '899', 10),
(6861, 182, 11, 0, '[\"11196822420img_9728.png\",\"19008888981img_9727.png\",\"10799866502img_9725.png\",\"20536282693img_9726.png\",\"6391133334img_9724.png\"]', '479', '899', 10),
(6862, 182, 11, 0, '[\"11196822420img_9728.png\",\"19008888981img_9727.png\",\"10799866502img_9725.png\",\"20536282693img_9726.png\",\"6391133334img_9724.png\"]', '479', '899', 10),
(6872, 187, 8, 2, '[\"9773451530untitled-design-1.png\",\"13473524431untitled-design-2.png\",\"14640734102untitled-design-3.png\"]', '359', '699', 10),
(6873, 187, 8, 2, '[\"9773451530untitled-design-1.png\",\"13473524431untitled-design-2.png\",\"14640734102untitled-design-3.png\"]', '359', '699', 10),
(6874, 187, 8, 2, '[\"9773451530untitled-design-1.png\",\"13473524431untitled-design-2.png\",\"14640734102untitled-design-3.png\"]', '359', '699', 10),
(6875, 187, 9, 0, '[\"9773451530untitled-design-1.png\",\"13473524431untitled-design-2.png\",\"14640734102untitled-design-3.png\"]', '359', '699', 10),
(6876, 187, 9, 0, '[\"9773451530untitled-design-1.png\",\"13473524431untitled-design-2.png\",\"14640734102untitled-design-3.png\"]', '359', '699', 10),
(6877, 187, 9, 0, '[\"9773451530untitled-design-1.png\",\"13473524431untitled-design-2.png\",\"14640734102untitled-design-3.png\"]', '359', '699', 10),
(6878, 187, 11, 0, '[\"9773451530untitled-design-1.png\",\"13473524431untitled-design-2.png\",\"14640734102untitled-design-3.png\"]', '359', '699', 10),
(6879, 187, 11, 0, '[\"9773451530untitled-design-1.png\",\"13473524431untitled-design-2.png\",\"14640734102untitled-design-3.png\"]', '359', '699', 10),
(6880, 187, 11, 0, '[\"9773451530untitled-design-1.png\",\"13473524431untitled-design-2.png\",\"14640734102untitled-design-3.png\"]', '359', '699', 10),
(6881, 188, 8, 2, '[\"2529566410untitled-design-4.png\",\"6995337621untitled-design-5.png\",\"11790040992untitled-design-6.png\",\"5341830143untitled-design-7.png\"]', '389', '749', 10),
(6882, 188, 8, 2, '[\"2529566410untitled-design-4.png\",\"6995337621untitled-design-5.png\",\"11790040992untitled-design-6.png\",\"5341830143untitled-design-7.png\"]', '389', '749', 10),
(6883, 188, 8, 2, '[\"2529566410untitled-design-4.png\",\"6995337621untitled-design-5.png\",\"11790040992untitled-design-6.png\",\"5341830143untitled-design-7.png\"]', '389', '749', 10),
(6884, 188, 8, 2, '[\"2529566410untitled-design-4.png\",\"6995337621untitled-design-5.png\",\"11790040992untitled-design-6.png\",\"5341830143untitled-design-7.png\"]', '389', '749', 10),
(6885, 188, 9, 0, '[\"2529566410untitled-design-4.png\",\"6995337621untitled-design-5.png\",\"11790040992untitled-design-6.png\",\"5341830143untitled-design-7.png\"]', '389', '749', 10),
(6886, 188, 9, 0, '[\"2529566410untitled-design-4.png\",\"6995337621untitled-design-5.png\",\"11790040992untitled-design-6.png\",\"5341830143untitled-design-7.png\"]', '389', '749', 10),
(6887, 188, 9, 0, '[\"2529566410untitled-design-4.png\",\"6995337621untitled-design-5.png\",\"11790040992untitled-design-6.png\",\"5341830143untitled-design-7.png\"]', '389', '749', 10),
(6888, 188, 9, 0, '[\"2529566410untitled-design-4.png\",\"6995337621untitled-design-5.png\",\"11790040992untitled-design-6.png\",\"5341830143untitled-design-7.png\"]', '389', '749', 10),
(6889, 188, 11, 0, '[\"2529566410untitled-design-4.png\",\"6995337621untitled-design-5.png\",\"11790040992untitled-design-6.png\",\"5341830143untitled-design-7.png\"]', '389', '749', 10),
(6890, 188, 11, 0, '[\"2529566410untitled-design-4.png\",\"6995337621untitled-design-5.png\",\"11790040992untitled-design-6.png\",\"5341830143untitled-design-7.png\"]', '389', '749', 10),
(6891, 188, 11, 0, '[\"2529566410untitled-design-4.png\",\"6995337621untitled-design-5.png\",\"11790040992untitled-design-6.png\",\"5341830143untitled-design-7.png\"]', '389', '749', 10),
(6892, 188, 11, 0, '[\"2529566410untitled-design-4.png\",\"6995337621untitled-design-5.png\",\"11790040992untitled-design-6.png\",\"5341830143untitled-design-7.png\"]', '389', '749', 10),
(6893, 189, 8, 11, '[\"8083031330untitled-design-12.png\",\"12914575021untitled-design-13.png\",\"20118679922untitled-design-14.png\",\"19124301843untitled-design-11.png\"]', '499', '899', 11),
(6894, 189, 8, 11, '[\"8083031330untitled-design-12.png\",\"12914575021untitled-design-13.png\",\"20118679922untitled-design-14.png\",\"19124301843untitled-design-11.png\"]', '499', '899', 11);
INSERT INTO `all_images` (`id`, `p_id`, `size_id`, `color_id`, `image`, `price`, `cut_price`, `stock`) VALUES
(6895, 189, 8, 11, '[\"8083031330untitled-design-12.png\",\"12914575021untitled-design-13.png\",\"20118679922untitled-design-14.png\",\"19124301843untitled-design-11.png\"]', '499', '899', 11),
(6896, 189, 8, 11, '[\"8083031330untitled-design-12.png\",\"12914575021untitled-design-13.png\",\"20118679922untitled-design-14.png\",\"19124301843untitled-design-11.png\"]', '499', '899', 11),
(6897, 189, 9, 0, '[\"8083031330untitled-design-12.png\",\"12914575021untitled-design-13.png\",\"20118679922untitled-design-14.png\",\"19124301843untitled-design-11.png\"]', '499', '899', 11),
(6898, 189, 9, 0, '[\"8083031330untitled-design-12.png\",\"12914575021untitled-design-13.png\",\"20118679922untitled-design-14.png\",\"19124301843untitled-design-11.png\"]', '499', '899', 11),
(6899, 189, 9, 0, '[\"8083031330untitled-design-12.png\",\"12914575021untitled-design-13.png\",\"20118679922untitled-design-14.png\",\"19124301843untitled-design-11.png\"]', '499', '899', 11),
(6900, 189, 9, 0, '[\"8083031330untitled-design-12.png\",\"12914575021untitled-design-13.png\",\"20118679922untitled-design-14.png\",\"19124301843untitled-design-11.png\"]', '499', '899', 11),
(6901, 189, 11, 0, '[\"8083031330untitled-design-12.png\",\"12914575021untitled-design-13.png\",\"20118679922untitled-design-14.png\",\"19124301843untitled-design-11.png\"]', '499', '899', 11),
(6902, 189, 11, 0, '[\"8083031330untitled-design-12.png\",\"12914575021untitled-design-13.png\",\"20118679922untitled-design-14.png\",\"19124301843untitled-design-11.png\"]', '499', '899', 11),
(6903, 189, 11, 0, '[\"8083031330untitled-design-12.png\",\"12914575021untitled-design-13.png\",\"20118679922untitled-design-14.png\",\"19124301843untitled-design-11.png\"]', '499', '899', 11),
(6904, 189, 11, 0, '[\"8083031330untitled-design-12.png\",\"12914575021untitled-design-13.png\",\"20118679922untitled-design-14.png\",\"19124301843untitled-design-11.png\"]', '499', '899', 11),
(6905, 189, 8, 7, '[\"3934455540untitled-design-1.png\",\"1517519031untitled-design-2.png\",\"6685691472untitled-design-3.png\",\"15769443423untitled-design-4.png\"]', '499', '899', 15),
(6906, 189, 8, 7, '[\"3934455540untitled-design-1.png\",\"1517519031untitled-design-2.png\",\"6685691472untitled-design-3.png\",\"15769443423untitled-design-4.png\"]', '499', '899', 15),
(6907, 189, 8, 7, '[\"3934455540untitled-design-1.png\",\"1517519031untitled-design-2.png\",\"6685691472untitled-design-3.png\",\"15769443423untitled-design-4.png\"]', '499', '899', 15),
(6908, 189, 8, 7, '[\"3934455540untitled-design-1.png\",\"1517519031untitled-design-2.png\",\"6685691472untitled-design-3.png\",\"15769443423untitled-design-4.png\"]', '499', '899', 15),
(6909, 189, 9, 0, '[\"3934455540untitled-design-1.png\",\"1517519031untitled-design-2.png\",\"6685691472untitled-design-3.png\",\"15769443423untitled-design-4.png\"]', '499', '899', 15),
(6910, 189, 9, 0, '[\"3934455540untitled-design-1.png\",\"1517519031untitled-design-2.png\",\"6685691472untitled-design-3.png\",\"15769443423untitled-design-4.png\"]', '499', '899', 15),
(6911, 189, 9, 0, '[\"3934455540untitled-design-1.png\",\"1517519031untitled-design-2.png\",\"6685691472untitled-design-3.png\",\"15769443423untitled-design-4.png\"]', '499', '899', 15),
(6912, 189, 9, 0, '[\"3934455540untitled-design-1.png\",\"1517519031untitled-design-2.png\",\"6685691472untitled-design-3.png\",\"15769443423untitled-design-4.png\"]', '499', '899', 15),
(6913, 189, 21, 0, '[\"3934455540untitled-design-1.png\",\"1517519031untitled-design-2.png\",\"6685691472untitled-design-3.png\",\"15769443423untitled-design-4.png\"]', '499', '899', 15),
(6914, 189, 21, 0, '[\"3934455540untitled-design-1.png\",\"1517519031untitled-design-2.png\",\"6685691472untitled-design-3.png\",\"15769443423untitled-design-4.png\"]', '499', '899', 15),
(6915, 189, 21, 0, '[\"3934455540untitled-design-1.png\",\"1517519031untitled-design-2.png\",\"6685691472untitled-design-3.png\",\"15769443423untitled-design-4.png\"]', '499', '899', 15),
(6916, 189, 21, 0, '[\"3934455540untitled-design-1.png\",\"1517519031untitled-design-2.png\",\"6685691472untitled-design-3.png\",\"15769443423untitled-design-4.png\"]', '499', '899', 15),
(6917, 190, 8, 11, '[\"15821580990untitled-design-13.png\",\"4959504451untitled-design-12.png\",\"16602150722untitled-design-14.png\",\"399477133untitled-design-11.png\"]', '499', '899', 15),
(6918, 190, 8, 11, '[\"15821580990untitled-design-13.png\",\"4959504451untitled-design-12.png\",\"16602150722untitled-design-14.png\",\"399477133untitled-design-11.png\"]', '499', '899', 15),
(6919, 190, 8, 11, '[\"15821580990untitled-design-13.png\",\"4959504451untitled-design-12.png\",\"16602150722untitled-design-14.png\",\"399477133untitled-design-11.png\"]', '499', '899', 15),
(6920, 190, 8, 11, '[\"15821580990untitled-design-13.png\",\"4959504451untitled-design-12.png\",\"16602150722untitled-design-14.png\",\"399477133untitled-design-11.png\"]', '499', '899', 15),
(6921, 190, 9, 0, '[\"15821580990untitled-design-13.png\",\"4959504451untitled-design-12.png\",\"16602150722untitled-design-14.png\",\"399477133untitled-design-11.png\"]', '499', '899', 15),
(6922, 190, 9, 0, '[\"15821580990untitled-design-13.png\",\"4959504451untitled-design-12.png\",\"16602150722untitled-design-14.png\",\"399477133untitled-design-11.png\"]', '499', '899', 15),
(6923, 190, 9, 0, '[\"15821580990untitled-design-13.png\",\"4959504451untitled-design-12.png\",\"16602150722untitled-design-14.png\",\"399477133untitled-design-11.png\"]', '499', '899', 15),
(6924, 190, 9, 0, '[\"15821580990untitled-design-13.png\",\"4959504451untitled-design-12.png\",\"16602150722untitled-design-14.png\",\"399477133untitled-design-11.png\"]', '499', '899', 15),
(6925, 190, 11, 0, '[\"15821580990untitled-design-13.png\",\"4959504451untitled-design-12.png\",\"16602150722untitled-design-14.png\",\"399477133untitled-design-11.png\"]', '499', '899', 15),
(6926, 190, 11, 0, '[\"15821580990untitled-design-13.png\",\"4959504451untitled-design-12.png\",\"16602150722untitled-design-14.png\",\"399477133untitled-design-11.png\"]', '499', '899', 15),
(6927, 190, 11, 0, '[\"15821580990untitled-design-13.png\",\"4959504451untitled-design-12.png\",\"16602150722untitled-design-14.png\",\"399477133untitled-design-11.png\"]', '499', '899', 15),
(6928, 190, 11, 0, '[\"15821580990untitled-design-13.png\",\"4959504451untitled-design-12.png\",\"16602150722untitled-design-14.png\",\"399477133untitled-design-11.png\"]', '499', '899', 15),
(6929, 191, 8, 7, '[\"20931562960untitled-design-1.png\",\"21218813451untitled-design-2.png\",\"18681325362untitled-design-4.png\",\"2700631083untitled-design-3.png\"]', '499', '899', 15),
(6930, 191, 8, 7, '[\"20931562960untitled-design-1.png\",\"21218813451untitled-design-2.png\",\"18681325362untitled-design-4.png\",\"2700631083untitled-design-3.png\"]', '499', '899', 15),
(6931, 191, 8, 7, '[\"20931562960untitled-design-1.png\",\"21218813451untitled-design-2.png\",\"18681325362untitled-design-4.png\",\"2700631083untitled-design-3.png\"]', '499', '899', 15),
(6932, 191, 8, 7, '[\"20931562960untitled-design-1.png\",\"21218813451untitled-design-2.png\",\"18681325362untitled-design-4.png\",\"2700631083untitled-design-3.png\"]', '499', '899', 15),
(6933, 191, 9, 0, '[\"20931562960untitled-design-1.png\",\"21218813451untitled-design-2.png\",\"18681325362untitled-design-4.png\",\"2700631083untitled-design-3.png\"]', '499', '899', 15),
(6934, 191, 9, 0, '[\"20931562960untitled-design-1.png\",\"21218813451untitled-design-2.png\",\"18681325362untitled-design-4.png\",\"2700631083untitled-design-3.png\"]', '499', '899', 15),
(6935, 191, 9, 0, '[\"20931562960untitled-design-1.png\",\"21218813451untitled-design-2.png\",\"18681325362untitled-design-4.png\",\"2700631083untitled-design-3.png\"]', '499', '899', 15),
(6936, 191, 9, 0, '[\"20931562960untitled-design-1.png\",\"21218813451untitled-design-2.png\",\"18681325362untitled-design-4.png\",\"2700631083untitled-design-3.png\"]', '499', '899', 15),
(6937, 191, 11, 0, '[\"20931562960untitled-design-1.png\",\"21218813451untitled-design-2.png\",\"18681325362untitled-design-4.png\",\"2700631083untitled-design-3.png\"]', '499', '899', 15),
(6938, 191, 11, 0, '[\"20931562960untitled-design-1.png\",\"21218813451untitled-design-2.png\",\"18681325362untitled-design-4.png\",\"2700631083untitled-design-3.png\"]', '499', '899', 15),
(6939, 191, 11, 0, '[\"20931562960untitled-design-1.png\",\"21218813451untitled-design-2.png\",\"18681325362untitled-design-4.png\",\"2700631083untitled-design-3.png\"]', '499', '899', 15),
(6940, 191, 11, 0, '[\"20931562960untitled-design-1.png\",\"21218813451untitled-design-2.png\",\"18681325362untitled-design-4.png\",\"2700631083untitled-design-3.png\"]', '499', '899', 15),
(6941, 192, 8, 11, '[\"1345193070untitled-design-15.png\",\"20476997641untitled-design-18.png\",\"10037904522untitled-design-19.png\",\"16283814243untitled-design-17.png\",\"2617418464untitled-design-16.png\"]', '519', '849', 16),
(6942, 192, 8, 11, '[\"1345193070untitled-design-15.png\",\"20476997641untitled-design-18.png\",\"10037904522untitled-design-19.png\",\"16283814243untitled-design-17.png\",\"2617418464untitled-design-16.png\"]', '519', '849', 16),
(6943, 192, 8, 11, '[\"1345193070untitled-design-15.png\",\"20476997641untitled-design-18.png\",\"10037904522untitled-design-19.png\",\"16283814243untitled-design-17.png\",\"2617418464untitled-design-16.png\"]', '519', '849', 16),
(6944, 192, 8, 11, '[\"1345193070untitled-design-15.png\",\"20476997641untitled-design-18.png\",\"10037904522untitled-design-19.png\",\"16283814243untitled-design-17.png\",\"2617418464untitled-design-16.png\"]', '519', '849', 16),
(6945, 192, 8, 11, '[\"1345193070untitled-design-15.png\",\"20476997641untitled-design-18.png\",\"10037904522untitled-design-19.png\",\"16283814243untitled-design-17.png\",\"2617418464untitled-design-16.png\"]', '519', '849', 16),
(6946, 192, 9, 0, '[\"1345193070untitled-design-15.png\",\"20476997641untitled-design-18.png\",\"10037904522untitled-design-19.png\",\"16283814243untitled-design-17.png\",\"2617418464untitled-design-16.png\"]', '519', '849', 16),
(6947, 192, 9, 0, '[\"1345193070untitled-design-15.png\",\"20476997641untitled-design-18.png\",\"10037904522untitled-design-19.png\",\"16283814243untitled-design-17.png\",\"2617418464untitled-design-16.png\"]', '519', '849', 16),
(6948, 192, 9, 0, '[\"1345193070untitled-design-15.png\",\"20476997641untitled-design-18.png\",\"10037904522untitled-design-19.png\",\"16283814243untitled-design-17.png\",\"2617418464untitled-design-16.png\"]', '519', '849', 16),
(6949, 192, 9, 0, '[\"1345193070untitled-design-15.png\",\"20476997641untitled-design-18.png\",\"10037904522untitled-design-19.png\",\"16283814243untitled-design-17.png\",\"2617418464untitled-design-16.png\"]', '519', '849', 16),
(6950, 192, 9, 0, '[\"1345193070untitled-design-15.png\",\"20476997641untitled-design-18.png\",\"10037904522untitled-design-19.png\",\"16283814243untitled-design-17.png\",\"2617418464untitled-design-16.png\"]', '519', '849', 16),
(6951, 192, 11, 0, '[\"1345193070untitled-design-15.png\",\"20476997641untitled-design-18.png\",\"10037904522untitled-design-19.png\",\"16283814243untitled-design-17.png\",\"2617418464untitled-design-16.png\"]', '519', '849', 16),
(6952, 192, 11, 0, '[\"1345193070untitled-design-15.png\",\"20476997641untitled-design-18.png\",\"10037904522untitled-design-19.png\",\"16283814243untitled-design-17.png\",\"2617418464untitled-design-16.png\"]', '519', '849', 16),
(6953, 192, 11, 0, '[\"1345193070untitled-design-15.png\",\"20476997641untitled-design-18.png\",\"10037904522untitled-design-19.png\",\"16283814243untitled-design-17.png\",\"2617418464untitled-design-16.png\"]', '519', '849', 16),
(6954, 192, 11, 0, '[\"1345193070untitled-design-15.png\",\"20476997641untitled-design-18.png\",\"10037904522untitled-design-19.png\",\"16283814243untitled-design-17.png\",\"2617418464untitled-design-16.png\"]', '519', '849', 16),
(6955, 192, 11, 0, '[\"1345193070untitled-design-15.png\",\"20476997641untitled-design-18.png\",\"10037904522untitled-design-19.png\",\"16283814243untitled-design-17.png\",\"2617418464untitled-design-16.png\"]', '519', '849', 16),
(6956, 193, 8, 2, '[\"61222800untitled-design-21.png\",\"4731279511untitled-design-20.png\",\"1266669872untitled-design-23.png\",\"2503318923untitled-design-22.png\",\"17695306954untitled-design-24.png\"]', '449', '699', 17),
(6957, 193, 8, 2, '[\"61222800untitled-design-21.png\",\"4731279511untitled-design-20.png\",\"1266669872untitled-design-23.png\",\"2503318923untitled-design-22.png\",\"17695306954untitled-design-24.png\"]', '449', '699', 17),
(6958, 193, 8, 2, '[\"61222800untitled-design-21.png\",\"4731279511untitled-design-20.png\",\"1266669872untitled-design-23.png\",\"2503318923untitled-design-22.png\",\"17695306954untitled-design-24.png\"]', '449', '699', 17),
(6959, 193, 8, 2, '[\"61222800untitled-design-21.png\",\"4731279511untitled-design-20.png\",\"1266669872untitled-design-23.png\",\"2503318923untitled-design-22.png\",\"17695306954untitled-design-24.png\"]', '449', '699', 17),
(6960, 193, 8, 2, '[\"61222800untitled-design-21.png\",\"4731279511untitled-design-20.png\",\"1266669872untitled-design-23.png\",\"2503318923untitled-design-22.png\",\"17695306954untitled-design-24.png\"]', '449', '699', 17),
(6961, 193, 9, 0, '[\"61222800untitled-design-21.png\",\"4731279511untitled-design-20.png\",\"1266669872untitled-design-23.png\",\"2503318923untitled-design-22.png\",\"17695306954untitled-design-24.png\"]', '449', '699', 17),
(6962, 193, 9, 0, '[\"61222800untitled-design-21.png\",\"4731279511untitled-design-20.png\",\"1266669872untitled-design-23.png\",\"2503318923untitled-design-22.png\",\"17695306954untitled-design-24.png\"]', '449', '699', 17),
(6963, 193, 9, 0, '[\"61222800untitled-design-21.png\",\"4731279511untitled-design-20.png\",\"1266669872untitled-design-23.png\",\"2503318923untitled-design-22.png\",\"17695306954untitled-design-24.png\"]', '449', '699', 17),
(6964, 193, 9, 0, '[\"61222800untitled-design-21.png\",\"4731279511untitled-design-20.png\",\"1266669872untitled-design-23.png\",\"2503318923untitled-design-22.png\",\"17695306954untitled-design-24.png\"]', '449', '699', 17),
(6965, 193, 9, 0, '[\"61222800untitled-design-21.png\",\"4731279511untitled-design-20.png\",\"1266669872untitled-design-23.png\",\"2503318923untitled-design-22.png\",\"17695306954untitled-design-24.png\"]', '449', '699', 17),
(6966, 193, 11, 0, '[\"61222800untitled-design-21.png\",\"4731279511untitled-design-20.png\",\"1266669872untitled-design-23.png\",\"2503318923untitled-design-22.png\",\"17695306954untitled-design-24.png\"]', '449', '699', 17),
(6967, 193, 11, 0, '[\"61222800untitled-design-21.png\",\"4731279511untitled-design-20.png\",\"1266669872untitled-design-23.png\",\"2503318923untitled-design-22.png\",\"17695306954untitled-design-24.png\"]', '449', '699', 17),
(6968, 193, 11, 0, '[\"61222800untitled-design-21.png\",\"4731279511untitled-design-20.png\",\"1266669872untitled-design-23.png\",\"2503318923untitled-design-22.png\",\"17695306954untitled-design-24.png\"]', '449', '699', 17),
(6969, 193, 11, 0, '[\"61222800untitled-design-21.png\",\"4731279511untitled-design-20.png\",\"1266669872untitled-design-23.png\",\"2503318923untitled-design-22.png\",\"17695306954untitled-design-24.png\"]', '449', '699', 17),
(6970, 193, 11, 0, '[\"61222800untitled-design-21.png\",\"4731279511untitled-design-20.png\",\"1266669872untitled-design-23.png\",\"2503318923untitled-design-22.png\",\"17695306954untitled-design-24.png\"]', '449', '699', 17),
(6971, 194, 8, 7, '[\"20215821990untitled-design-8.png\",\"7920595651untitled-design-10.png\",\"2003217392untitled-design-9.png\",\"16224744163untitled-design-5.png\",\"1900303204untitled-design-7.png\",\"529068265untitled-design-6.png\"]', '419', '799', 16),
(6972, 194, 8, 7, '[\"20215821990untitled-design-8.png\",\"7920595651untitled-design-10.png\",\"2003217392untitled-design-9.png\",\"16224744163untitled-design-5.png\",\"1900303204untitled-design-7.png\",\"529068265untitled-design-6.png\"]', '419', '799', 16),
(6973, 194, 8, 7, '[\"20215821990untitled-design-8.png\",\"7920595651untitled-design-10.png\",\"2003217392untitled-design-9.png\",\"16224744163untitled-design-5.png\",\"1900303204untitled-design-7.png\",\"529068265untitled-design-6.png\"]', '419', '799', 16),
(6974, 194, 8, 7, '[\"20215821990untitled-design-8.png\",\"7920595651untitled-design-10.png\",\"2003217392untitled-design-9.png\",\"16224744163untitled-design-5.png\",\"1900303204untitled-design-7.png\",\"529068265untitled-design-6.png\"]', '419', '799', 16),
(6975, 194, 8, 7, '[\"20215821990untitled-design-8.png\",\"7920595651untitled-design-10.png\",\"2003217392untitled-design-9.png\",\"16224744163untitled-design-5.png\",\"1900303204untitled-design-7.png\",\"529068265untitled-design-6.png\"]', '419', '799', 16),
(6976, 194, 8, 7, '[\"20215821990untitled-design-8.png\",\"7920595651untitled-design-10.png\",\"2003217392untitled-design-9.png\",\"16224744163untitled-design-5.png\",\"1900303204untitled-design-7.png\",\"529068265untitled-design-6.png\"]', '419', '799', 16),
(6977, 194, 9, 0, '[\"20215821990untitled-design-8.png\",\"7920595651untitled-design-10.png\",\"2003217392untitled-design-9.png\",\"16224744163untitled-design-5.png\",\"1900303204untitled-design-7.png\",\"529068265untitled-design-6.png\"]', '419', '799', 16),
(6978, 194, 9, 0, '[\"20215821990untitled-design-8.png\",\"7920595651untitled-design-10.png\",\"2003217392untitled-design-9.png\",\"16224744163untitled-design-5.png\",\"1900303204untitled-design-7.png\",\"529068265untitled-design-6.png\"]', '419', '799', 16),
(6979, 194, 9, 0, '[\"20215821990untitled-design-8.png\",\"7920595651untitled-design-10.png\",\"2003217392untitled-design-9.png\",\"16224744163untitled-design-5.png\",\"1900303204untitled-design-7.png\",\"529068265untitled-design-6.png\"]', '419', '799', 16),
(6980, 194, 9, 0, '[\"20215821990untitled-design-8.png\",\"7920595651untitled-design-10.png\",\"2003217392untitled-design-9.png\",\"16224744163untitled-design-5.png\",\"1900303204untitled-design-7.png\",\"529068265untitled-design-6.png\"]', '419', '799', 16),
(6981, 194, 9, 0, '[\"20215821990untitled-design-8.png\",\"7920595651untitled-design-10.png\",\"2003217392untitled-design-9.png\",\"16224744163untitled-design-5.png\",\"1900303204untitled-design-7.png\",\"529068265untitled-design-6.png\"]', '419', '799', 16),
(6982, 194, 9, 0, '[\"20215821990untitled-design-8.png\",\"7920595651untitled-design-10.png\",\"2003217392untitled-design-9.png\",\"16224744163untitled-design-5.png\",\"1900303204untitled-design-7.png\",\"529068265untitled-design-6.png\"]', '419', '799', 16),
(6983, 194, 11, 0, '[\"20215821990untitled-design-8.png\",\"7920595651untitled-design-10.png\",\"2003217392untitled-design-9.png\",\"16224744163untitled-design-5.png\",\"1900303204untitled-design-7.png\",\"529068265untitled-design-6.png\"]', '419', '799', 16),
(6984, 194, 11, 0, '[\"20215821990untitled-design-8.png\",\"7920595651untitled-design-10.png\",\"2003217392untitled-design-9.png\",\"16224744163untitled-design-5.png\",\"1900303204untitled-design-7.png\",\"529068265untitled-design-6.png\"]', '419', '799', 16),
(6985, 194, 11, 0, '[\"20215821990untitled-design-8.png\",\"7920595651untitled-design-10.png\",\"2003217392untitled-design-9.png\",\"16224744163untitled-design-5.png\",\"1900303204untitled-design-7.png\",\"529068265untitled-design-6.png\"]', '419', '799', 16),
(6986, 194, 11, 0, '[\"20215821990untitled-design-8.png\",\"7920595651untitled-design-10.png\",\"2003217392untitled-design-9.png\",\"16224744163untitled-design-5.png\",\"1900303204untitled-design-7.png\",\"529068265untitled-design-6.png\"]', '419', '799', 16),
(6987, 194, 11, 0, '[\"20215821990untitled-design-8.png\",\"7920595651untitled-design-10.png\",\"2003217392untitled-design-9.png\",\"16224744163untitled-design-5.png\",\"1900303204untitled-design-7.png\",\"529068265untitled-design-6.png\"]', '419', '799', 16),
(6988, 194, 11, 0, '[\"20215821990untitled-design-8.png\",\"7920595651untitled-design-10.png\",\"2003217392untitled-design-9.png\",\"16224744163untitled-design-5.png\",\"1900303204untitled-design-7.png\",\"529068265untitled-design-6.png\"]', '419', '799', 16),
(6989, 195, 8, 10, '[\"1615544880untitled-design-60.png\",\"13223213391untitled-design-61.png\",\"21462421362untitled-design-64.png\",\"18063521983untitled-design-65.png\",\"6677871044untitled-design-63.png\",\"13605963855untitled-design-62.png\"]', '549', '899', 16),
(6990, 195, 8, 10, '[\"1615544880untitled-design-60.png\",\"13223213391untitled-design-61.png\",\"21462421362untitled-design-64.png\",\"18063521983untitled-design-65.png\",\"6677871044untitled-design-63.png\",\"13605963855untitled-design-62.png\"]', '549', '899', 16),
(6991, 195, 8, 10, '[\"1615544880untitled-design-60.png\",\"13223213391untitled-design-61.png\",\"21462421362untitled-design-64.png\",\"18063521983untitled-design-65.png\",\"6677871044untitled-design-63.png\",\"13605963855untitled-design-62.png\"]', '549', '899', 16),
(6992, 195, 8, 10, '[\"1615544880untitled-design-60.png\",\"13223213391untitled-design-61.png\",\"21462421362untitled-design-64.png\",\"18063521983untitled-design-65.png\",\"6677871044untitled-design-63.png\",\"13605963855untitled-design-62.png\"]', '549', '899', 16),
(6993, 195, 8, 10, '[\"1615544880untitled-design-60.png\",\"13223213391untitled-design-61.png\",\"21462421362untitled-design-64.png\",\"18063521983untitled-design-65.png\",\"6677871044untitled-design-63.png\",\"13605963855untitled-design-62.png\"]', '549', '899', 16),
(6994, 195, 8, 10, '[\"1615544880untitled-design-60.png\",\"13223213391untitled-design-61.png\",\"21462421362untitled-design-64.png\",\"18063521983untitled-design-65.png\",\"6677871044untitled-design-63.png\",\"13605963855untitled-design-62.png\"]', '549', '899', 16),
(6995, 195, 9, 0, '[\"1615544880untitled-design-60.png\",\"13223213391untitled-design-61.png\",\"21462421362untitled-design-64.png\",\"18063521983untitled-design-65.png\",\"6677871044untitled-design-63.png\",\"13605963855untitled-design-62.png\"]', '549', '899', 16),
(6996, 195, 9, 0, '[\"1615544880untitled-design-60.png\",\"13223213391untitled-design-61.png\",\"21462421362untitled-design-64.png\",\"18063521983untitled-design-65.png\",\"6677871044untitled-design-63.png\",\"13605963855untitled-design-62.png\"]', '549', '899', 16),
(6997, 195, 9, 0, '[\"1615544880untitled-design-60.png\",\"13223213391untitled-design-61.png\",\"21462421362untitled-design-64.png\",\"18063521983untitled-design-65.png\",\"6677871044untitled-design-63.png\",\"13605963855untitled-design-62.png\"]', '549', '899', 16),
(6998, 195, 9, 0, '[\"1615544880untitled-design-60.png\",\"13223213391untitled-design-61.png\",\"21462421362untitled-design-64.png\",\"18063521983untitled-design-65.png\",\"6677871044untitled-design-63.png\",\"13605963855untitled-design-62.png\"]', '549', '899', 16),
(6999, 195, 9, 0, '[\"1615544880untitled-design-60.png\",\"13223213391untitled-design-61.png\",\"21462421362untitled-design-64.png\",\"18063521983untitled-design-65.png\",\"6677871044untitled-design-63.png\",\"13605963855untitled-design-62.png\"]', '549', '899', 16),
(7000, 195, 9, 0, '[\"1615544880untitled-design-60.png\",\"13223213391untitled-design-61.png\",\"21462421362untitled-design-64.png\",\"18063521983untitled-design-65.png\",\"6677871044untitled-design-63.png\",\"13605963855untitled-design-62.png\"]', '549', '899', 16),
(7001, 195, 11, 0, '[\"1615544880untitled-design-60.png\",\"13223213391untitled-design-61.png\",\"21462421362untitled-design-64.png\",\"18063521983untitled-design-65.png\",\"6677871044untitled-design-63.png\",\"13605963855untitled-design-62.png\"]', '549', '899', 16),
(7002, 195, 11, 0, '[\"1615544880untitled-design-60.png\",\"13223213391untitled-design-61.png\",\"21462421362untitled-design-64.png\",\"18063521983untitled-design-65.png\",\"6677871044untitled-design-63.png\",\"13605963855untitled-design-62.png\"]', '549', '899', 16),
(7003, 195, 11, 0, '[\"1615544880untitled-design-60.png\",\"13223213391untitled-design-61.png\",\"21462421362untitled-design-64.png\",\"18063521983untitled-design-65.png\",\"6677871044untitled-design-63.png\",\"13605963855untitled-design-62.png\"]', '549', '899', 16),
(7004, 195, 11, 0, '[\"1615544880untitled-design-60.png\",\"13223213391untitled-design-61.png\",\"21462421362untitled-design-64.png\",\"18063521983untitled-design-65.png\",\"6677871044untitled-design-63.png\",\"13605963855untitled-design-62.png\"]', '549', '899', 16),
(7005, 195, 11, 0, '[\"1615544880untitled-design-60.png\",\"13223213391untitled-design-61.png\",\"21462421362untitled-design-64.png\",\"18063521983untitled-design-65.png\",\"6677871044untitled-design-63.png\",\"13605963855untitled-design-62.png\"]', '549', '899', 16),
(7006, 195, 11, 0, '[\"1615544880untitled-design-60.png\",\"13223213391untitled-design-61.png\",\"21462421362untitled-design-64.png\",\"18063521983untitled-design-65.png\",\"6677871044untitled-design-63.png\",\"13605963855untitled-design-62.png\"]', '549', '899', 16),
(7025, 197, 8, 10, '[\"1507473970untitled-design-55.png\",\"5142011581untitled-design-54.png\",\"1043731802untitled-design-59.png\",\"4921025383untitled-design-56.png\",\"19483130794untitled-design-58.png\",\"16655370855untitled-design-57.png\"]', '499', '799', 20),
(7026, 197, 8, 10, '[\"1507473970untitled-design-55.png\",\"5142011581untitled-design-54.png\",\"1043731802untitled-design-59.png\",\"4921025383untitled-design-56.png\",\"19483130794untitled-design-58.png\",\"16655370855untitled-design-57.png\"]', '499', '799', 20),
(7027, 197, 8, 10, '[\"1507473970untitled-design-55.png\",\"5142011581untitled-design-54.png\",\"1043731802untitled-design-59.png\",\"4921025383untitled-design-56.png\",\"19483130794untitled-design-58.png\",\"16655370855untitled-design-57.png\"]', '499', '799', 20),
(7028, 197, 8, 10, '[\"1507473970untitled-design-55.png\",\"5142011581untitled-design-54.png\",\"1043731802untitled-design-59.png\",\"4921025383untitled-design-56.png\",\"19483130794untitled-design-58.png\",\"16655370855untitled-design-57.png\"]', '499', '799', 20),
(7029, 197, 8, 10, '[\"1507473970untitled-design-55.png\",\"5142011581untitled-design-54.png\",\"1043731802untitled-design-59.png\",\"4921025383untitled-design-56.png\",\"19483130794untitled-design-58.png\",\"16655370855untitled-design-57.png\"]', '499', '799', 20),
(7030, 197, 8, 10, '[\"1507473970untitled-design-55.png\",\"5142011581untitled-design-54.png\",\"1043731802untitled-design-59.png\",\"4921025383untitled-design-56.png\",\"19483130794untitled-design-58.png\",\"16655370855untitled-design-57.png\"]', '499', '799', 20),
(7031, 197, 9, 0, '[\"1507473970untitled-design-55.png\",\"5142011581untitled-design-54.png\",\"1043731802untitled-design-59.png\",\"4921025383untitled-design-56.png\",\"19483130794untitled-design-58.png\",\"16655370855untitled-design-57.png\"]', '499', '799', 20),
(7032, 197, 9, 0, '[\"1507473970untitled-design-55.png\",\"5142011581untitled-design-54.png\",\"1043731802untitled-design-59.png\",\"4921025383untitled-design-56.png\",\"19483130794untitled-design-58.png\",\"16655370855untitled-design-57.png\"]', '499', '799', 20),
(7033, 197, 9, 0, '[\"1507473970untitled-design-55.png\",\"5142011581untitled-design-54.png\",\"1043731802untitled-design-59.png\",\"4921025383untitled-design-56.png\",\"19483130794untitled-design-58.png\",\"16655370855untitled-design-57.png\"]', '499', '799', 20),
(7034, 197, 9, 0, '[\"1507473970untitled-design-55.png\",\"5142011581untitled-design-54.png\",\"1043731802untitled-design-59.png\",\"4921025383untitled-design-56.png\",\"19483130794untitled-design-58.png\",\"16655370855untitled-design-57.png\"]', '499', '799', 20),
(7035, 197, 9, 0, '[\"1507473970untitled-design-55.png\",\"5142011581untitled-design-54.png\",\"1043731802untitled-design-59.png\",\"4921025383untitled-design-56.png\",\"19483130794untitled-design-58.png\",\"16655370855untitled-design-57.png\"]', '499', '799', 20),
(7036, 197, 9, 0, '[\"1507473970untitled-design-55.png\",\"5142011581untitled-design-54.png\",\"1043731802untitled-design-59.png\",\"4921025383untitled-design-56.png\",\"19483130794untitled-design-58.png\",\"16655370855untitled-design-57.png\"]', '499', '799', 20),
(7037, 197, 11, 0, '[\"1507473970untitled-design-55.png\",\"5142011581untitled-design-54.png\",\"1043731802untitled-design-59.png\",\"4921025383untitled-design-56.png\",\"19483130794untitled-design-58.png\",\"16655370855untitled-design-57.png\"]', '499', '799', 20),
(7038, 197, 11, 0, '[\"1507473970untitled-design-55.png\",\"5142011581untitled-design-54.png\",\"1043731802untitled-design-59.png\",\"4921025383untitled-design-56.png\",\"19483130794untitled-design-58.png\",\"16655370855untitled-design-57.png\"]', '499', '799', 20),
(7039, 197, 11, 0, '[\"1507473970untitled-design-55.png\",\"5142011581untitled-design-54.png\",\"1043731802untitled-design-59.png\",\"4921025383untitled-design-56.png\",\"19483130794untitled-design-58.png\",\"16655370855untitled-design-57.png\"]', '499', '799', 20),
(7040, 197, 11, 0, '[\"1507473970untitled-design-55.png\",\"5142011581untitled-design-54.png\",\"1043731802untitled-design-59.png\",\"4921025383untitled-design-56.png\",\"19483130794untitled-design-58.png\",\"16655370855untitled-design-57.png\"]', '499', '799', 20),
(7041, 197, 11, 0, '[\"1507473970untitled-design-55.png\",\"5142011581untitled-design-54.png\",\"1043731802untitled-design-59.png\",\"4921025383untitled-design-56.png\",\"19483130794untitled-design-58.png\",\"16655370855untitled-design-57.png\"]', '499', '799', 20),
(7042, 197, 11, 0, '[\"1507473970untitled-design-55.png\",\"5142011581untitled-design-54.png\",\"1043731802untitled-design-59.png\",\"4921025383untitled-design-56.png\",\"19483130794untitled-design-58.png\",\"16655370855untitled-design-57.png\"]', '499', '799', 20),
(7043, 198, 8, 11, '[\"20911144570untitled-design-53.png\",\"21015075211untitled-design-49.png\",\"10857035662untitled-design-52.png\",\"10628831123untitled-design-51.png\",\"1443977574untitled-design-50.png\"]', '549', '899', 15),
(7044, 198, 8, 11, '[\"20911144570untitled-design-53.png\",\"21015075211untitled-design-49.png\",\"10857035662untitled-design-52.png\",\"10628831123untitled-design-51.png\",\"1443977574untitled-design-50.png\"]', '549', '899', 15),
(7045, 198, 8, 11, '[\"20911144570untitled-design-53.png\",\"21015075211untitled-design-49.png\",\"10857035662untitled-design-52.png\",\"10628831123untitled-design-51.png\",\"1443977574untitled-design-50.png\"]', '549', '899', 15),
(7046, 198, 8, 11, '[\"20911144570untitled-design-53.png\",\"21015075211untitled-design-49.png\",\"10857035662untitled-design-52.png\",\"10628831123untitled-design-51.png\",\"1443977574untitled-design-50.png\"]', '549', '899', 15),
(7047, 198, 8, 11, '[\"20911144570untitled-design-53.png\",\"21015075211untitled-design-49.png\",\"10857035662untitled-design-52.png\",\"10628831123untitled-design-51.png\",\"1443977574untitled-design-50.png\"]', '549', '899', 15),
(7048, 198, 9, 0, '[\"20911144570untitled-design-53.png\",\"21015075211untitled-design-49.png\",\"10857035662untitled-design-52.png\",\"10628831123untitled-design-51.png\",\"1443977574untitled-design-50.png\"]', '549', '899', 15),
(7049, 198, 9, 0, '[\"20911144570untitled-design-53.png\",\"21015075211untitled-design-49.png\",\"10857035662untitled-design-52.png\",\"10628831123untitled-design-51.png\",\"1443977574untitled-design-50.png\"]', '549', '899', 15),
(7050, 198, 9, 0, '[\"20911144570untitled-design-53.png\",\"21015075211untitled-design-49.png\",\"10857035662untitled-design-52.png\",\"10628831123untitled-design-51.png\",\"1443977574untitled-design-50.png\"]', '549', '899', 15),
(7051, 198, 9, 0, '[\"20911144570untitled-design-53.png\",\"21015075211untitled-design-49.png\",\"10857035662untitled-design-52.png\",\"10628831123untitled-design-51.png\",\"1443977574untitled-design-50.png\"]', '549', '899', 15),
(7052, 198, 9, 0, '[\"20911144570untitled-design-53.png\",\"21015075211untitled-design-49.png\",\"10857035662untitled-design-52.png\",\"10628831123untitled-design-51.png\",\"1443977574untitled-design-50.png\"]', '549', '899', 15),
(7053, 198, 11, 0, '[\"20911144570untitled-design-53.png\",\"21015075211untitled-design-49.png\",\"10857035662untitled-design-52.png\",\"10628831123untitled-design-51.png\",\"1443977574untitled-design-50.png\"]', '549', '899', 15),
(7054, 198, 11, 0, '[\"20911144570untitled-design-53.png\",\"21015075211untitled-design-49.png\",\"10857035662untitled-design-52.png\",\"10628831123untitled-design-51.png\",\"1443977574untitled-design-50.png\"]', '549', '899', 15),
(7055, 198, 11, 0, '[\"20911144570untitled-design-53.png\",\"21015075211untitled-design-49.png\",\"10857035662untitled-design-52.png\",\"10628831123untitled-design-51.png\",\"1443977574untitled-design-50.png\"]', '549', '899', 15),
(7056, 198, 11, 0, '[\"20911144570untitled-design-53.png\",\"21015075211untitled-design-49.png\",\"10857035662untitled-design-52.png\",\"10628831123untitled-design-51.png\",\"1443977574untitled-design-50.png\"]', '549', '899', 15),
(7057, 198, 11, 0, '[\"20911144570untitled-design-53.png\",\"21015075211untitled-design-49.png\",\"10857035662untitled-design-52.png\",\"10628831123untitled-design-51.png\",\"1443977574untitled-design-50.png\"]', '549', '899', 15),
(7058, 196, 8, 4, '[\"126502100untitled-design-46.png\",\"9996286661untitled-design-44.png\",\"11634502882untitled-design-43.png\",\"2442218413untitled-design-45.png\",\"16624175544untitled-design-47.png\",\"14230931365untitled-design-48.png\"]', '549', '949', 18),
(7059, 196, 8, 4, '[\"126502100untitled-design-46.png\",\"9996286661untitled-design-44.png\",\"11634502882untitled-design-43.png\",\"2442218413untitled-design-45.png\",\"16624175544untitled-design-47.png\",\"14230931365untitled-design-48.png\"]', '549', '949', 18),
(7060, 196, 8, 4, '[\"126502100untitled-design-46.png\",\"9996286661untitled-design-44.png\",\"11634502882untitled-design-43.png\",\"2442218413untitled-design-45.png\",\"16624175544untitled-design-47.png\",\"14230931365untitled-design-48.png\"]', '549', '949', 18),
(7061, 196, 8, 4, '[\"126502100untitled-design-46.png\",\"9996286661untitled-design-44.png\",\"11634502882untitled-design-43.png\",\"2442218413untitled-design-45.png\",\"16624175544untitled-design-47.png\",\"14230931365untitled-design-48.png\"]', '549', '949', 18),
(7062, 196, 8, 4, '[\"126502100untitled-design-46.png\",\"9996286661untitled-design-44.png\",\"11634502882untitled-design-43.png\",\"2442218413untitled-design-45.png\",\"16624175544untitled-design-47.png\",\"14230931365untitled-design-48.png\"]', '549', '949', 18),
(7063, 196, 8, 4, '[\"126502100untitled-design-46.png\",\"9996286661untitled-design-44.png\",\"11634502882untitled-design-43.png\",\"2442218413untitled-design-45.png\",\"16624175544untitled-design-47.png\",\"14230931365untitled-design-48.png\"]', '549', '949', 18),
(7064, 196, 9, 0, '[\"126502100untitled-design-46.png\",\"9996286661untitled-design-44.png\",\"11634502882untitled-design-43.png\",\"2442218413untitled-design-45.png\",\"16624175544untitled-design-47.png\",\"14230931365untitled-design-48.png\"]', '549', '949', 18),
(7065, 196, 9, 0, '[\"126502100untitled-design-46.png\",\"9996286661untitled-design-44.png\",\"11634502882untitled-design-43.png\",\"2442218413untitled-design-45.png\",\"16624175544untitled-design-47.png\",\"14230931365untitled-design-48.png\"]', '549', '949', 18),
(7066, 196, 9, 0, '[\"126502100untitled-design-46.png\",\"9996286661untitled-design-44.png\",\"11634502882untitled-design-43.png\",\"2442218413untitled-design-45.png\",\"16624175544untitled-design-47.png\",\"14230931365untitled-design-48.png\"]', '549', '949', 18),
(7067, 196, 9, 0, '[\"126502100untitled-design-46.png\",\"9996286661untitled-design-44.png\",\"11634502882untitled-design-43.png\",\"2442218413untitled-design-45.png\",\"16624175544untitled-design-47.png\",\"14230931365untitled-design-48.png\"]', '549', '949', 18),
(7068, 196, 9, 0, '[\"126502100untitled-design-46.png\",\"9996286661untitled-design-44.png\",\"11634502882untitled-design-43.png\",\"2442218413untitled-design-45.png\",\"16624175544untitled-design-47.png\",\"14230931365untitled-design-48.png\"]', '549', '949', 18),
(7069, 196, 9, 0, '[\"126502100untitled-design-46.png\",\"9996286661untitled-design-44.png\",\"11634502882untitled-design-43.png\",\"2442218413untitled-design-45.png\",\"16624175544untitled-design-47.png\",\"14230931365untitled-design-48.png\"]', '549', '949', 18),
(7070, 196, 11, 0, '[\"126502100untitled-design-46.png\",\"9996286661untitled-design-44.png\",\"11634502882untitled-design-43.png\",\"2442218413untitled-design-45.png\",\"16624175544untitled-design-47.png\",\"14230931365untitled-design-48.png\"]', '549', '949', 18),
(7071, 196, 11, 0, '[\"126502100untitled-design-46.png\",\"9996286661untitled-design-44.png\",\"11634502882untitled-design-43.png\",\"2442218413untitled-design-45.png\",\"16624175544untitled-design-47.png\",\"14230931365untitled-design-48.png\"]', '549', '949', 18),
(7072, 196, 11, 0, '[\"126502100untitled-design-46.png\",\"9996286661untitled-design-44.png\",\"11634502882untitled-design-43.png\",\"2442218413untitled-design-45.png\",\"16624175544untitled-design-47.png\",\"14230931365untitled-design-48.png\"]', '549', '949', 18),
(7073, 196, 11, 0, '[\"126502100untitled-design-46.png\",\"9996286661untitled-design-44.png\",\"11634502882untitled-design-43.png\",\"2442218413untitled-design-45.png\",\"16624175544untitled-design-47.png\",\"14230931365untitled-design-48.png\"]', '549', '949', 18),
(7074, 196, 11, 0, '[\"126502100untitled-design-46.png\",\"9996286661untitled-design-44.png\",\"11634502882untitled-design-43.png\",\"2442218413untitled-design-45.png\",\"16624175544untitled-design-47.png\",\"14230931365untitled-design-48.png\"]', '549', '949', 18),
(7075, 196, 11, 0, '[\"126502100untitled-design-46.png\",\"9996286661untitled-design-44.png\",\"11634502882untitled-design-43.png\",\"2442218413untitled-design-45.png\",\"16624175544untitled-design-47.png\",\"14230931365untitled-design-48.png\"]', '549', '949', 18),
(7076, 199, 8, 7, '[\"16534330540untitled-design-71.png\",\"17564836601untitled-design-67.png\",\"5428381972untitled-design-68.png\",\"7483161923untitled-design-70.png\",\"10754994514untitled-design-69.png\",\"8001849945untitled-design-66.png\"]', '549', '749', 20),
(7077, 199, 8, 7, '[\"16534330540untitled-design-71.png\",\"17564836601untitled-design-67.png\",\"5428381972untitled-design-68.png\",\"7483161923untitled-design-70.png\",\"10754994514untitled-design-69.png\",\"8001849945untitled-design-66.png\"]', '549', '749', 20),
(7078, 199, 8, 7, '[\"16534330540untitled-design-71.png\",\"17564836601untitled-design-67.png\",\"5428381972untitled-design-68.png\",\"7483161923untitled-design-70.png\",\"10754994514untitled-design-69.png\",\"8001849945untitled-design-66.png\"]', '549', '749', 20),
(7079, 199, 8, 7, '[\"16534330540untitled-design-71.png\",\"17564836601untitled-design-67.png\",\"5428381972untitled-design-68.png\",\"7483161923untitled-design-70.png\",\"10754994514untitled-design-69.png\",\"8001849945untitled-design-66.png\"]', '549', '749', 20),
(7080, 199, 8, 7, '[\"16534330540untitled-design-71.png\",\"17564836601untitled-design-67.png\",\"5428381972untitled-design-68.png\",\"7483161923untitled-design-70.png\",\"10754994514untitled-design-69.png\",\"8001849945untitled-design-66.png\"]', '549', '749', 20),
(7081, 199, 8, 7, '[\"16534330540untitled-design-71.png\",\"17564836601untitled-design-67.png\",\"5428381972untitled-design-68.png\",\"7483161923untitled-design-70.png\",\"10754994514untitled-design-69.png\",\"8001849945untitled-design-66.png\"]', '549', '749', 20),
(7082, 199, 9, 0, '[\"16534330540untitled-design-71.png\",\"17564836601untitled-design-67.png\",\"5428381972untitled-design-68.png\",\"7483161923untitled-design-70.png\",\"10754994514untitled-design-69.png\",\"8001849945untitled-design-66.png\"]', '549', '749', 20),
(7083, 199, 9, 0, '[\"16534330540untitled-design-71.png\",\"17564836601untitled-design-67.png\",\"5428381972untitled-design-68.png\",\"7483161923untitled-design-70.png\",\"10754994514untitled-design-69.png\",\"8001849945untitled-design-66.png\"]', '549', '749', 20),
(7084, 199, 9, 0, '[\"16534330540untitled-design-71.png\",\"17564836601untitled-design-67.png\",\"5428381972untitled-design-68.png\",\"7483161923untitled-design-70.png\",\"10754994514untitled-design-69.png\",\"8001849945untitled-design-66.png\"]', '549', '749', 20),
(7085, 199, 9, 0, '[\"16534330540untitled-design-71.png\",\"17564836601untitled-design-67.png\",\"5428381972untitled-design-68.png\",\"7483161923untitled-design-70.png\",\"10754994514untitled-design-69.png\",\"8001849945untitled-design-66.png\"]', '549', '749', 20),
(7086, 199, 9, 0, '[\"16534330540untitled-design-71.png\",\"17564836601untitled-design-67.png\",\"5428381972untitled-design-68.png\",\"7483161923untitled-design-70.png\",\"10754994514untitled-design-69.png\",\"8001849945untitled-design-66.png\"]', '549', '749', 20),
(7087, 199, 9, 0, '[\"16534330540untitled-design-71.png\",\"17564836601untitled-design-67.png\",\"5428381972untitled-design-68.png\",\"7483161923untitled-design-70.png\",\"10754994514untitled-design-69.png\",\"8001849945untitled-design-66.png\"]', '549', '749', 20),
(7088, 199, 11, 0, '[\"16534330540untitled-design-71.png\",\"17564836601untitled-design-67.png\",\"5428381972untitled-design-68.png\",\"7483161923untitled-design-70.png\",\"10754994514untitled-design-69.png\",\"8001849945untitled-design-66.png\"]', '549', '749', 20),
(7089, 199, 11, 0, '[\"16534330540untitled-design-71.png\",\"17564836601untitled-design-67.png\",\"5428381972untitled-design-68.png\",\"7483161923untitled-design-70.png\",\"10754994514untitled-design-69.png\",\"8001849945untitled-design-66.png\"]', '549', '749', 20),
(7090, 199, 11, 0, '[\"16534330540untitled-design-71.png\",\"17564836601untitled-design-67.png\",\"5428381972untitled-design-68.png\",\"7483161923untitled-design-70.png\",\"10754994514untitled-design-69.png\",\"8001849945untitled-design-66.png\"]', '549', '749', 20),
(7091, 199, 11, 0, '[\"16534330540untitled-design-71.png\",\"17564836601untitled-design-67.png\",\"5428381972untitled-design-68.png\",\"7483161923untitled-design-70.png\",\"10754994514untitled-design-69.png\",\"8001849945untitled-design-66.png\"]', '549', '749', 20),
(7092, 199, 11, 0, '[\"16534330540untitled-design-71.png\",\"17564836601untitled-design-67.png\",\"5428381972untitled-design-68.png\",\"7483161923untitled-design-70.png\",\"10754994514untitled-design-69.png\",\"8001849945untitled-design-66.png\"]', '549', '749', 20),
(7093, 199, 11, 0, '[\"16534330540untitled-design-71.png\",\"17564836601untitled-design-67.png\",\"5428381972untitled-design-68.png\",\"7483161923untitled-design-70.png\",\"10754994514untitled-design-69.png\",\"8001849945untitled-design-66.png\"]', '549', '749', 20),
(7094, 200, 8, 11, '[\"9485755630untitled-design-37.png\",\"1163750031untitled-design-38.png\",\"5084536022untitled-design-41.png\",\"2415253263untitled-design-42.png\",\"20715936894untitled-design-40.png\",\"12922766835untitled-design-39.png\"]', '339', '599', 15),
(7095, 200, 8, 11, '[\"9485755630untitled-design-37.png\",\"1163750031untitled-design-38.png\",\"5084536022untitled-design-41.png\",\"2415253263untitled-design-42.png\",\"20715936894untitled-design-40.png\",\"12922766835untitled-design-39.png\"]', '339', '599', 15),
(7096, 200, 8, 11, '[\"9485755630untitled-design-37.png\",\"1163750031untitled-design-38.png\",\"5084536022untitled-design-41.png\",\"2415253263untitled-design-42.png\",\"20715936894untitled-design-40.png\",\"12922766835untitled-design-39.png\"]', '339', '599', 15),
(7097, 200, 8, 11, '[\"9485755630untitled-design-37.png\",\"1163750031untitled-design-38.png\",\"5084536022untitled-design-41.png\",\"2415253263untitled-design-42.png\",\"20715936894untitled-design-40.png\",\"12922766835untitled-design-39.png\"]', '339', '599', 15),
(7098, 200, 8, 11, '[\"9485755630untitled-design-37.png\",\"1163750031untitled-design-38.png\",\"5084536022untitled-design-41.png\",\"2415253263untitled-design-42.png\",\"20715936894untitled-design-40.png\",\"12922766835untitled-design-39.png\"]', '339', '599', 15),
(7099, 200, 8, 11, '[\"9485755630untitled-design-37.png\",\"1163750031untitled-design-38.png\",\"5084536022untitled-design-41.png\",\"2415253263untitled-design-42.png\",\"20715936894untitled-design-40.png\",\"12922766835untitled-design-39.png\"]', '339', '599', 15),
(7100, 200, 9, 0, '[\"9485755630untitled-design-37.png\",\"1163750031untitled-design-38.png\",\"5084536022untitled-design-41.png\",\"2415253263untitled-design-42.png\",\"20715936894untitled-design-40.png\",\"12922766835untitled-design-39.png\"]', '339', '599', 15),
(7101, 200, 9, 0, '[\"9485755630untitled-design-37.png\",\"1163750031untitled-design-38.png\",\"5084536022untitled-design-41.png\",\"2415253263untitled-design-42.png\",\"20715936894untitled-design-40.png\",\"12922766835untitled-design-39.png\"]', '339', '599', 15),
(7102, 200, 9, 0, '[\"9485755630untitled-design-37.png\",\"1163750031untitled-design-38.png\",\"5084536022untitled-design-41.png\",\"2415253263untitled-design-42.png\",\"20715936894untitled-design-40.png\",\"12922766835untitled-design-39.png\"]', '339', '599', 15),
(7103, 200, 9, 0, '[\"9485755630untitled-design-37.png\",\"1163750031untitled-design-38.png\",\"5084536022untitled-design-41.png\",\"2415253263untitled-design-42.png\",\"20715936894untitled-design-40.png\",\"12922766835untitled-design-39.png\"]', '339', '599', 15),
(7104, 200, 9, 0, '[\"9485755630untitled-design-37.png\",\"1163750031untitled-design-38.png\",\"5084536022untitled-design-41.png\",\"2415253263untitled-design-42.png\",\"20715936894untitled-design-40.png\",\"12922766835untitled-design-39.png\"]', '339', '599', 15),
(7105, 200, 9, 0, '[\"9485755630untitled-design-37.png\",\"1163750031untitled-design-38.png\",\"5084536022untitled-design-41.png\",\"2415253263untitled-design-42.png\",\"20715936894untitled-design-40.png\",\"12922766835untitled-design-39.png\"]', '339', '599', 15),
(7106, 200, 11, 0, '[\"9485755630untitled-design-37.png\",\"1163750031untitled-design-38.png\",\"5084536022untitled-design-41.png\",\"2415253263untitled-design-42.png\",\"20715936894untitled-design-40.png\",\"12922766835untitled-design-39.png\"]', '339', '599', 15),
(7107, 200, 11, 0, '[\"9485755630untitled-design-37.png\",\"1163750031untitled-design-38.png\",\"5084536022untitled-design-41.png\",\"2415253263untitled-design-42.png\",\"20715936894untitled-design-40.png\",\"12922766835untitled-design-39.png\"]', '339', '599', 15),
(7108, 200, 11, 0, '[\"9485755630untitled-design-37.png\",\"1163750031untitled-design-38.png\",\"5084536022untitled-design-41.png\",\"2415253263untitled-design-42.png\",\"20715936894untitled-design-40.png\",\"12922766835untitled-design-39.png\"]', '339', '599', 15),
(7109, 200, 11, 0, '[\"9485755630untitled-design-37.png\",\"1163750031untitled-design-38.png\",\"5084536022untitled-design-41.png\",\"2415253263untitled-design-42.png\",\"20715936894untitled-design-40.png\",\"12922766835untitled-design-39.png\"]', '339', '599', 15),
(7110, 200, 11, 0, '[\"9485755630untitled-design-37.png\",\"1163750031untitled-design-38.png\",\"5084536022untitled-design-41.png\",\"2415253263untitled-design-42.png\",\"20715936894untitled-design-40.png\",\"12922766835untitled-design-39.png\"]', '339', '599', 15),
(7111, 200, 11, 0, '[\"9485755630untitled-design-37.png\",\"1163750031untitled-design-38.png\",\"5084536022untitled-design-41.png\",\"2415253263untitled-design-42.png\",\"20715936894untitled-design-40.png\",\"12922766835untitled-design-39.png\"]', '339', '599', 15),
(7112, 201, 8, 2, '[\"20182853340untitled-design-15.png\",\"586342341untitled-design-16.png\",\"11840356162untitled-design-17.png\",\"15232410713untitled-design-14.png\"]', '339', '599', 15),
(7113, 201, 8, 2, '[\"20182853340untitled-design-15.png\",\"586342341untitled-design-16.png\",\"11840356162untitled-design-17.png\",\"15232410713untitled-design-14.png\"]', '339', '599', 15),
(7114, 201, 8, 2, '[\"20182853340untitled-design-15.png\",\"586342341untitled-design-16.png\",\"11840356162untitled-design-17.png\",\"15232410713untitled-design-14.png\"]', '339', '599', 15),
(7115, 201, 8, 2, '[\"20182853340untitled-design-15.png\",\"586342341untitled-design-16.png\",\"11840356162untitled-design-17.png\",\"15232410713untitled-design-14.png\"]', '339', '599', 15),
(7116, 201, 9, 0, '[\"20182853340untitled-design-15.png\",\"586342341untitled-design-16.png\",\"11840356162untitled-design-17.png\",\"15232410713untitled-design-14.png\"]', '339', '599', 15),
(7117, 201, 9, 0, '[\"20182853340untitled-design-15.png\",\"586342341untitled-design-16.png\",\"11840356162untitled-design-17.png\",\"15232410713untitled-design-14.png\"]', '339', '599', 15),
(7118, 201, 9, 0, '[\"20182853340untitled-design-15.png\",\"586342341untitled-design-16.png\",\"11840356162untitled-design-17.png\",\"15232410713untitled-design-14.png\"]', '339', '599', 15),
(7119, 201, 9, 0, '[\"20182853340untitled-design-15.png\",\"586342341untitled-design-16.png\",\"11840356162untitled-design-17.png\",\"15232410713untitled-design-14.png\"]', '339', '599', 15),
(7120, 201, 11, 0, '[\"20182853340untitled-design-15.png\",\"586342341untitled-design-16.png\",\"11840356162untitled-design-17.png\",\"15232410713untitled-design-14.png\"]', '339', '599', 15),
(7121, 201, 11, 0, '[\"20182853340untitled-design-15.png\",\"586342341untitled-design-16.png\",\"11840356162untitled-design-17.png\",\"15232410713untitled-design-14.png\"]', '339', '599', 15),
(7122, 201, 11, 0, '[\"20182853340untitled-design-15.png\",\"586342341untitled-design-16.png\",\"11840356162untitled-design-17.png\",\"15232410713untitled-design-14.png\"]', '339', '599', 15),
(7123, 201, 11, 0, '[\"20182853340untitled-design-15.png\",\"586342341untitled-design-16.png\",\"11840356162untitled-design-17.png\",\"15232410713untitled-design-14.png\"]', '339', '599', 15);
INSERT INTO `all_images` (`id`, `p_id`, `size_id`, `color_id`, `image`, `price`, `cut_price`, `stock`) VALUES
(7124, 202, 8, 2, '[\"21075184320untitled-design-32.png\",\"1681124831untitled-design-33.png\",\"1079430422untitled-design-34.png\",\"19175295493untitled-design-31.png\",\"13575914294untitled-design-35.png\",\"895094255untitled-design-30.png\"]', '549', '899', 10),
(7125, 202, 8, 2, '[\"21075184320untitled-design-32.png\",\"1681124831untitled-design-33.png\",\"1079430422untitled-design-34.png\",\"19175295493untitled-design-31.png\",\"13575914294untitled-design-35.png\",\"895094255untitled-design-30.png\"]', '549', '899', 10),
(7126, 202, 8, 2, '[\"21075184320untitled-design-32.png\",\"1681124831untitled-design-33.png\",\"1079430422untitled-design-34.png\",\"19175295493untitled-design-31.png\",\"13575914294untitled-design-35.png\",\"895094255untitled-design-30.png\"]', '549', '899', 10),
(7127, 202, 8, 2, '[\"21075184320untitled-design-32.png\",\"1681124831untitled-design-33.png\",\"1079430422untitled-design-34.png\",\"19175295493untitled-design-31.png\",\"13575914294untitled-design-35.png\",\"895094255untitled-design-30.png\"]', '549', '899', 10),
(7128, 202, 8, 2, '[\"21075184320untitled-design-32.png\",\"1681124831untitled-design-33.png\",\"1079430422untitled-design-34.png\",\"19175295493untitled-design-31.png\",\"13575914294untitled-design-35.png\",\"895094255untitled-design-30.png\"]', '549', '899', 10),
(7129, 202, 8, 2, '[\"21075184320untitled-design-32.png\",\"1681124831untitled-design-33.png\",\"1079430422untitled-design-34.png\",\"19175295493untitled-design-31.png\",\"13575914294untitled-design-35.png\",\"895094255untitled-design-30.png\"]', '549', '899', 10),
(7130, 202, 9, 0, '[\"21075184320untitled-design-32.png\",\"1681124831untitled-design-33.png\",\"1079430422untitled-design-34.png\",\"19175295493untitled-design-31.png\",\"13575914294untitled-design-35.png\",\"895094255untitled-design-30.png\"]', '549', '899', 10),
(7131, 202, 9, 0, '[\"21075184320untitled-design-32.png\",\"1681124831untitled-design-33.png\",\"1079430422untitled-design-34.png\",\"19175295493untitled-design-31.png\",\"13575914294untitled-design-35.png\",\"895094255untitled-design-30.png\"]', '549', '899', 10),
(7132, 202, 9, 0, '[\"21075184320untitled-design-32.png\",\"1681124831untitled-design-33.png\",\"1079430422untitled-design-34.png\",\"19175295493untitled-design-31.png\",\"13575914294untitled-design-35.png\",\"895094255untitled-design-30.png\"]', '549', '899', 10),
(7133, 202, 9, 0, '[\"21075184320untitled-design-32.png\",\"1681124831untitled-design-33.png\",\"1079430422untitled-design-34.png\",\"19175295493untitled-design-31.png\",\"13575914294untitled-design-35.png\",\"895094255untitled-design-30.png\"]', '549', '899', 10),
(7134, 202, 9, 0, '[\"21075184320untitled-design-32.png\",\"1681124831untitled-design-33.png\",\"1079430422untitled-design-34.png\",\"19175295493untitled-design-31.png\",\"13575914294untitled-design-35.png\",\"895094255untitled-design-30.png\"]', '549', '899', 10),
(7135, 202, 9, 0, '[\"21075184320untitled-design-32.png\",\"1681124831untitled-design-33.png\",\"1079430422untitled-design-34.png\",\"19175295493untitled-design-31.png\",\"13575914294untitled-design-35.png\",\"895094255untitled-design-30.png\"]', '549', '899', 10),
(7136, 202, 11, 0, '[\"21075184320untitled-design-32.png\",\"1681124831untitled-design-33.png\",\"1079430422untitled-design-34.png\",\"19175295493untitled-design-31.png\",\"13575914294untitled-design-35.png\",\"895094255untitled-design-30.png\"]', '549', '899', 10),
(7137, 202, 11, 0, '[\"21075184320untitled-design-32.png\",\"1681124831untitled-design-33.png\",\"1079430422untitled-design-34.png\",\"19175295493untitled-design-31.png\",\"13575914294untitled-design-35.png\",\"895094255untitled-design-30.png\"]', '549', '899', 10),
(7138, 202, 11, 0, '[\"21075184320untitled-design-32.png\",\"1681124831untitled-design-33.png\",\"1079430422untitled-design-34.png\",\"19175295493untitled-design-31.png\",\"13575914294untitled-design-35.png\",\"895094255untitled-design-30.png\"]', '549', '899', 10),
(7139, 202, 11, 0, '[\"21075184320untitled-design-32.png\",\"1681124831untitled-design-33.png\",\"1079430422untitled-design-34.png\",\"19175295493untitled-design-31.png\",\"13575914294untitled-design-35.png\",\"895094255untitled-design-30.png\"]', '549', '899', 10),
(7140, 202, 11, 0, '[\"21075184320untitled-design-32.png\",\"1681124831untitled-design-33.png\",\"1079430422untitled-design-34.png\",\"19175295493untitled-design-31.png\",\"13575914294untitled-design-35.png\",\"895094255untitled-design-30.png\"]', '549', '899', 10),
(7141, 202, 11, 0, '[\"21075184320untitled-design-32.png\",\"1681124831untitled-design-33.png\",\"1079430422untitled-design-34.png\",\"19175295493untitled-design-31.png\",\"13575914294untitled-design-35.png\",\"895094255untitled-design-30.png\"]', '549', '899', 10),
(7142, 203, 8, 10, '[\"12048151410untitled-design-29.png\",\"6946957791untitled-design-28.png\",\"9255289192untitled-design-27.png\",\"4648165003untitled-design-26.png\",\"15835427674untitled-design-25.png\"]', '549', '899', 12),
(7143, 203, 8, 10, '[\"12048151410untitled-design-29.png\",\"6946957791untitled-design-28.png\",\"9255289192untitled-design-27.png\",\"4648165003untitled-design-26.png\",\"15835427674untitled-design-25.png\"]', '549', '899', 12),
(7144, 203, 8, 10, '[\"12048151410untitled-design-29.png\",\"6946957791untitled-design-28.png\",\"9255289192untitled-design-27.png\",\"4648165003untitled-design-26.png\",\"15835427674untitled-design-25.png\"]', '549', '899', 12),
(7145, 203, 8, 10, '[\"12048151410untitled-design-29.png\",\"6946957791untitled-design-28.png\",\"9255289192untitled-design-27.png\",\"4648165003untitled-design-26.png\",\"15835427674untitled-design-25.png\"]', '549', '899', 12),
(7146, 203, 8, 10, '[\"12048151410untitled-design-29.png\",\"6946957791untitled-design-28.png\",\"9255289192untitled-design-27.png\",\"4648165003untitled-design-26.png\",\"15835427674untitled-design-25.png\"]', '549', '899', 12),
(7147, 203, 9, 0, '[\"12048151410untitled-design-29.png\",\"6946957791untitled-design-28.png\",\"9255289192untitled-design-27.png\",\"4648165003untitled-design-26.png\",\"15835427674untitled-design-25.png\"]', '549', '899', 12),
(7148, 203, 9, 0, '[\"12048151410untitled-design-29.png\",\"6946957791untitled-design-28.png\",\"9255289192untitled-design-27.png\",\"4648165003untitled-design-26.png\",\"15835427674untitled-design-25.png\"]', '549', '899', 12),
(7149, 203, 9, 0, '[\"12048151410untitled-design-29.png\",\"6946957791untitled-design-28.png\",\"9255289192untitled-design-27.png\",\"4648165003untitled-design-26.png\",\"15835427674untitled-design-25.png\"]', '549', '899', 12),
(7150, 203, 9, 0, '[\"12048151410untitled-design-29.png\",\"6946957791untitled-design-28.png\",\"9255289192untitled-design-27.png\",\"4648165003untitled-design-26.png\",\"15835427674untitled-design-25.png\"]', '549', '899', 12),
(7151, 203, 9, 0, '[\"12048151410untitled-design-29.png\",\"6946957791untitled-design-28.png\",\"9255289192untitled-design-27.png\",\"4648165003untitled-design-26.png\",\"15835427674untitled-design-25.png\"]', '549', '899', 12),
(7152, 203, 11, 0, '[\"12048151410untitled-design-29.png\",\"6946957791untitled-design-28.png\",\"9255289192untitled-design-27.png\",\"4648165003untitled-design-26.png\",\"15835427674untitled-design-25.png\"]', '549', '899', 12),
(7153, 203, 11, 0, '[\"12048151410untitled-design-29.png\",\"6946957791untitled-design-28.png\",\"9255289192untitled-design-27.png\",\"4648165003untitled-design-26.png\",\"15835427674untitled-design-25.png\"]', '549', '899', 12),
(7154, 203, 11, 0, '[\"12048151410untitled-design-29.png\",\"6946957791untitled-design-28.png\",\"9255289192untitled-design-27.png\",\"4648165003untitled-design-26.png\",\"15835427674untitled-design-25.png\"]', '549', '899', 12),
(7155, 203, 11, 0, '[\"12048151410untitled-design-29.png\",\"6946957791untitled-design-28.png\",\"9255289192untitled-design-27.png\",\"4648165003untitled-design-26.png\",\"15835427674untitled-design-25.png\"]', '549', '899', 12),
(7156, 203, 11, 0, '[\"12048151410untitled-design-29.png\",\"6946957791untitled-design-28.png\",\"9255289192untitled-design-27.png\",\"4648165003untitled-design-26.png\",\"15835427674untitled-design-25.png\"]', '549', '899', 12),
(7157, 204, 8, 10, '[\"1009813660untitled-design-29.png\",\"8034479301untitled-design-28.png\",\"2318178182untitled-design-27.png\",\"2394495063untitled-design-26.png\",\"20338328884untitled-design-25.png\"]', '549', '899', 12),
(7158, 204, 8, 10, '[\"1009813660untitled-design-29.png\",\"8034479301untitled-design-28.png\",\"2318178182untitled-design-27.png\",\"2394495063untitled-design-26.png\",\"20338328884untitled-design-25.png\"]', '549', '899', 12),
(7159, 204, 8, 10, '[\"1009813660untitled-design-29.png\",\"8034479301untitled-design-28.png\",\"2318178182untitled-design-27.png\",\"2394495063untitled-design-26.png\",\"20338328884untitled-design-25.png\"]', '549', '899', 12),
(7160, 204, 8, 10, '[\"1009813660untitled-design-29.png\",\"8034479301untitled-design-28.png\",\"2318178182untitled-design-27.png\",\"2394495063untitled-design-26.png\",\"20338328884untitled-design-25.png\"]', '549', '899', 12),
(7161, 204, 8, 10, '[\"1009813660untitled-design-29.png\",\"8034479301untitled-design-28.png\",\"2318178182untitled-design-27.png\",\"2394495063untitled-design-26.png\",\"20338328884untitled-design-25.png\"]', '549', '899', 12),
(7162, 204, 9, 0, '[\"1009813660untitled-design-29.png\",\"8034479301untitled-design-28.png\",\"2318178182untitled-design-27.png\",\"2394495063untitled-design-26.png\",\"20338328884untitled-design-25.png\"]', '549', '899', 12),
(7163, 204, 9, 0, '[\"1009813660untitled-design-29.png\",\"8034479301untitled-design-28.png\",\"2318178182untitled-design-27.png\",\"2394495063untitled-design-26.png\",\"20338328884untitled-design-25.png\"]', '549', '899', 12),
(7164, 204, 9, 0, '[\"1009813660untitled-design-29.png\",\"8034479301untitled-design-28.png\",\"2318178182untitled-design-27.png\",\"2394495063untitled-design-26.png\",\"20338328884untitled-design-25.png\"]', '549', '899', 12),
(7165, 204, 9, 0, '[\"1009813660untitled-design-29.png\",\"8034479301untitled-design-28.png\",\"2318178182untitled-design-27.png\",\"2394495063untitled-design-26.png\",\"20338328884untitled-design-25.png\"]', '549', '899', 12),
(7166, 204, 9, 0, '[\"1009813660untitled-design-29.png\",\"8034479301untitled-design-28.png\",\"2318178182untitled-design-27.png\",\"2394495063untitled-design-26.png\",\"20338328884untitled-design-25.png\"]', '549', '899', 12),
(7167, 204, 11, 0, '[\"1009813660untitled-design-29.png\",\"8034479301untitled-design-28.png\",\"2318178182untitled-design-27.png\",\"2394495063untitled-design-26.png\",\"20338328884untitled-design-25.png\"]', '549', '899', 12),
(7168, 204, 11, 0, '[\"1009813660untitled-design-29.png\",\"8034479301untitled-design-28.png\",\"2318178182untitled-design-27.png\",\"2394495063untitled-design-26.png\",\"20338328884untitled-design-25.png\"]', '549', '899', 12),
(7169, 204, 11, 0, '[\"1009813660untitled-design-29.png\",\"8034479301untitled-design-28.png\",\"2318178182untitled-design-27.png\",\"2394495063untitled-design-26.png\",\"20338328884untitled-design-25.png\"]', '549', '899', 12),
(7170, 204, 11, 0, '[\"1009813660untitled-design-29.png\",\"8034479301untitled-design-28.png\",\"2318178182untitled-design-27.png\",\"2394495063untitled-design-26.png\",\"20338328884untitled-design-25.png\"]', '549', '899', 12),
(7171, 204, 11, 0, '[\"1009813660untitled-design-29.png\",\"8034479301untitled-design-28.png\",\"2318178182untitled-design-27.png\",\"2394495063untitled-design-26.png\",\"20338328884untitled-design-25.png\"]', '549', '899', 12),
(7187, 206, 8, 2, '[\"6452981760untitled-design-1.png\",\"16651213021untitled-design-3.png\",\"19277680112untitled-design-4.png\",\"11811085823untitled-design-5.png\",\"10506552564untitled-design-2.png\"]', '549', '999', 13),
(7188, 206, 8, 2, '[\"6452981760untitled-design-1.png\",\"16651213021untitled-design-3.png\",\"19277680112untitled-design-4.png\",\"11811085823untitled-design-5.png\",\"10506552564untitled-design-2.png\"]', '549', '999', 13),
(7189, 206, 8, 2, '[\"6452981760untitled-design-1.png\",\"16651213021untitled-design-3.png\",\"19277680112untitled-design-4.png\",\"11811085823untitled-design-5.png\",\"10506552564untitled-design-2.png\"]', '549', '999', 13),
(7190, 206, 8, 2, '[\"6452981760untitled-design-1.png\",\"16651213021untitled-design-3.png\",\"19277680112untitled-design-4.png\",\"11811085823untitled-design-5.png\",\"10506552564untitled-design-2.png\"]', '549', '999', 13),
(7191, 206, 8, 2, '[\"6452981760untitled-design-1.png\",\"16651213021untitled-design-3.png\",\"19277680112untitled-design-4.png\",\"11811085823untitled-design-5.png\",\"10506552564untitled-design-2.png\"]', '549', '999', 13),
(7192, 206, 9, 0, '[\"6452981760untitled-design-1.png\",\"16651213021untitled-design-3.png\",\"19277680112untitled-design-4.png\",\"11811085823untitled-design-5.png\",\"10506552564untitled-design-2.png\"]', '549', '999', 13),
(7193, 206, 9, 0, '[\"6452981760untitled-design-1.png\",\"16651213021untitled-design-3.png\",\"19277680112untitled-design-4.png\",\"11811085823untitled-design-5.png\",\"10506552564untitled-design-2.png\"]', '549', '999', 13),
(7194, 206, 9, 0, '[\"6452981760untitled-design-1.png\",\"16651213021untitled-design-3.png\",\"19277680112untitled-design-4.png\",\"11811085823untitled-design-5.png\",\"10506552564untitled-design-2.png\"]', '549', '999', 13),
(7195, 206, 9, 0, '[\"6452981760untitled-design-1.png\",\"16651213021untitled-design-3.png\",\"19277680112untitled-design-4.png\",\"11811085823untitled-design-5.png\",\"10506552564untitled-design-2.png\"]', '549', '999', 13),
(7196, 206, 9, 0, '[\"6452981760untitled-design-1.png\",\"16651213021untitled-design-3.png\",\"19277680112untitled-design-4.png\",\"11811085823untitled-design-5.png\",\"10506552564untitled-design-2.png\"]', '549', '999', 13),
(7197, 206, 11, 0, '[\"6452981760untitled-design-1.png\",\"16651213021untitled-design-3.png\",\"19277680112untitled-design-4.png\",\"11811085823untitled-design-5.png\",\"10506552564untitled-design-2.png\"]', '549', '999', 13),
(7198, 206, 11, 0, '[\"6452981760untitled-design-1.png\",\"16651213021untitled-design-3.png\",\"19277680112untitled-design-4.png\",\"11811085823untitled-design-5.png\",\"10506552564untitled-design-2.png\"]', '549', '999', 13),
(7199, 206, 11, 0, '[\"6452981760untitled-design-1.png\",\"16651213021untitled-design-3.png\",\"19277680112untitled-design-4.png\",\"11811085823untitled-design-5.png\",\"10506552564untitled-design-2.png\"]', '549', '999', 13),
(7200, 206, 11, 0, '[\"6452981760untitled-design-1.png\",\"16651213021untitled-design-3.png\",\"19277680112untitled-design-4.png\",\"11811085823untitled-design-5.png\",\"10506552564untitled-design-2.png\"]', '549', '999', 13),
(7201, 206, 11, 0, '[\"6452981760untitled-design-1.png\",\"16651213021untitled-design-3.png\",\"19277680112untitled-design-4.png\",\"11811085823untitled-design-5.png\",\"10506552564untitled-design-2.png\"]', '549', '999', 13),
(7202, 205, 8, 7, '[\"13048979420untitled-design-9.png\",\"1594046131untitled-design-10.png\",\"20948668462untitled-design-6.png\",\"2305848873untitled-design-7.png\",\"2992099084untitled-design-8.png\"]', '549', '999', 13),
(7203, 205, 8, 7, '[\"13048979420untitled-design-9.png\",\"1594046131untitled-design-10.png\",\"20948668462untitled-design-6.png\",\"2305848873untitled-design-7.png\",\"2992099084untitled-design-8.png\"]', '549', '999', 13),
(7204, 205, 8, 7, '[\"13048979420untitled-design-9.png\",\"1594046131untitled-design-10.png\",\"20948668462untitled-design-6.png\",\"2305848873untitled-design-7.png\",\"2992099084untitled-design-8.png\"]', '549', '999', 13),
(7205, 205, 8, 7, '[\"13048979420untitled-design-9.png\",\"1594046131untitled-design-10.png\",\"20948668462untitled-design-6.png\",\"2305848873untitled-design-7.png\",\"2992099084untitled-design-8.png\"]', '549', '999', 13),
(7206, 205, 8, 7, '[\"13048979420untitled-design-9.png\",\"1594046131untitled-design-10.png\",\"20948668462untitled-design-6.png\",\"2305848873untitled-design-7.png\",\"2992099084untitled-design-8.png\"]', '549', '999', 13),
(7207, 205, 9, 0, '[\"13048979420untitled-design-9.png\",\"1594046131untitled-design-10.png\",\"20948668462untitled-design-6.png\",\"2305848873untitled-design-7.png\",\"2992099084untitled-design-8.png\"]', '549', '999', 13),
(7208, 205, 9, 0, '[\"13048979420untitled-design-9.png\",\"1594046131untitled-design-10.png\",\"20948668462untitled-design-6.png\",\"2305848873untitled-design-7.png\",\"2992099084untitled-design-8.png\"]', '549', '999', 13),
(7209, 205, 9, 0, '[\"13048979420untitled-design-9.png\",\"1594046131untitled-design-10.png\",\"20948668462untitled-design-6.png\",\"2305848873untitled-design-7.png\",\"2992099084untitled-design-8.png\"]', '549', '999', 13),
(7210, 205, 9, 0, '[\"13048979420untitled-design-9.png\",\"1594046131untitled-design-10.png\",\"20948668462untitled-design-6.png\",\"2305848873untitled-design-7.png\",\"2992099084untitled-design-8.png\"]', '549', '999', 13),
(7211, 205, 9, 0, '[\"13048979420untitled-design-9.png\",\"1594046131untitled-design-10.png\",\"20948668462untitled-design-6.png\",\"2305848873untitled-design-7.png\",\"2992099084untitled-design-8.png\"]', '549', '999', 13),
(7212, 205, 11, 0, '[\"13048979420untitled-design-9.png\",\"1594046131untitled-design-10.png\",\"20948668462untitled-design-6.png\",\"2305848873untitled-design-7.png\",\"2992099084untitled-design-8.png\"]', '549', '999', 13),
(7213, 205, 11, 0, '[\"13048979420untitled-design-9.png\",\"1594046131untitled-design-10.png\",\"20948668462untitled-design-6.png\",\"2305848873untitled-design-7.png\",\"2992099084untitled-design-8.png\"]', '549', '999', 13),
(7214, 205, 11, 0, '[\"13048979420untitled-design-9.png\",\"1594046131untitled-design-10.png\",\"20948668462untitled-design-6.png\",\"2305848873untitled-design-7.png\",\"2992099084untitled-design-8.png\"]', '549', '999', 13),
(7215, 205, 11, 0, '[\"13048979420untitled-design-9.png\",\"1594046131untitled-design-10.png\",\"20948668462untitled-design-6.png\",\"2305848873untitled-design-7.png\",\"2992099084untitled-design-8.png\"]', '549', '999', 13),
(7216, 205, 11, 0, '[\"13048979420untitled-design-9.png\",\"1594046131untitled-design-10.png\",\"20948668462untitled-design-6.png\",\"2305848873untitled-design-7.png\",\"2992099084untitled-design-8.png\"]', '549', '999', 13),
(7235, 208, 8, 7, '[\"5755864700untitled-design-19.png\",\"3308345381untitled-design-21.png\",\"4611788032untitled-design-20.png\",\"13955921633untitled-design-17.png\",\"14592539354untitled-design-18.png\",\"536408765untitled-design-22.png\"]', '699', '1099', 12),
(7236, 208, 8, 7, '[\"5755864700untitled-design-19.png\",\"3308345381untitled-design-21.png\",\"4611788032untitled-design-20.png\",\"13955921633untitled-design-17.png\",\"14592539354untitled-design-18.png\",\"536408765untitled-design-22.png\"]', '699', '1099', 12),
(7237, 208, 8, 7, '[\"5755864700untitled-design-19.png\",\"3308345381untitled-design-21.png\",\"4611788032untitled-design-20.png\",\"13955921633untitled-design-17.png\",\"14592539354untitled-design-18.png\",\"536408765untitled-design-22.png\"]', '699', '1099', 12),
(7238, 208, 8, 7, '[\"5755864700untitled-design-19.png\",\"3308345381untitled-design-21.png\",\"4611788032untitled-design-20.png\",\"13955921633untitled-design-17.png\",\"14592539354untitled-design-18.png\",\"536408765untitled-design-22.png\"]', '699', '1099', 12),
(7239, 208, 8, 7, '[\"5755864700untitled-design-19.png\",\"3308345381untitled-design-21.png\",\"4611788032untitled-design-20.png\",\"13955921633untitled-design-17.png\",\"14592539354untitled-design-18.png\",\"536408765untitled-design-22.png\"]', '699', '1099', 12),
(7240, 208, 8, 7, '[\"5755864700untitled-design-19.png\",\"3308345381untitled-design-21.png\",\"4611788032untitled-design-20.png\",\"13955921633untitled-design-17.png\",\"14592539354untitled-design-18.png\",\"536408765untitled-design-22.png\"]', '699', '1099', 12),
(7241, 208, 9, 0, '[\"5755864700untitled-design-19.png\",\"3308345381untitled-design-21.png\",\"4611788032untitled-design-20.png\",\"13955921633untitled-design-17.png\",\"14592539354untitled-design-18.png\",\"536408765untitled-design-22.png\"]', '699', '1099', 12),
(7242, 208, 9, 0, '[\"5755864700untitled-design-19.png\",\"3308345381untitled-design-21.png\",\"4611788032untitled-design-20.png\",\"13955921633untitled-design-17.png\",\"14592539354untitled-design-18.png\",\"536408765untitled-design-22.png\"]', '699', '1099', 12),
(7243, 208, 9, 0, '[\"5755864700untitled-design-19.png\",\"3308345381untitled-design-21.png\",\"4611788032untitled-design-20.png\",\"13955921633untitled-design-17.png\",\"14592539354untitled-design-18.png\",\"536408765untitled-design-22.png\"]', '699', '1099', 12),
(7244, 208, 9, 0, '[\"5755864700untitled-design-19.png\",\"3308345381untitled-design-21.png\",\"4611788032untitled-design-20.png\",\"13955921633untitled-design-17.png\",\"14592539354untitled-design-18.png\",\"536408765untitled-design-22.png\"]', '699', '1099', 12),
(7245, 208, 9, 0, '[\"5755864700untitled-design-19.png\",\"3308345381untitled-design-21.png\",\"4611788032untitled-design-20.png\",\"13955921633untitled-design-17.png\",\"14592539354untitled-design-18.png\",\"536408765untitled-design-22.png\"]', '699', '1099', 12),
(7246, 208, 9, 0, '[\"5755864700untitled-design-19.png\",\"3308345381untitled-design-21.png\",\"4611788032untitled-design-20.png\",\"13955921633untitled-design-17.png\",\"14592539354untitled-design-18.png\",\"536408765untitled-design-22.png\"]', '699', '1099', 12),
(7247, 208, 11, 0, '[\"5755864700untitled-design-19.png\",\"3308345381untitled-design-21.png\",\"4611788032untitled-design-20.png\",\"13955921633untitled-design-17.png\",\"14592539354untitled-design-18.png\",\"536408765untitled-design-22.png\"]', '699', '1099', 12),
(7248, 208, 11, 0, '[\"5755864700untitled-design-19.png\",\"3308345381untitled-design-21.png\",\"4611788032untitled-design-20.png\",\"13955921633untitled-design-17.png\",\"14592539354untitled-design-18.png\",\"536408765untitled-design-22.png\"]', '699', '1099', 12),
(7249, 208, 11, 0, '[\"5755864700untitled-design-19.png\",\"3308345381untitled-design-21.png\",\"4611788032untitled-design-20.png\",\"13955921633untitled-design-17.png\",\"14592539354untitled-design-18.png\",\"536408765untitled-design-22.png\"]', '699', '1099', 12),
(7250, 208, 11, 0, '[\"5755864700untitled-design-19.png\",\"3308345381untitled-design-21.png\",\"4611788032untitled-design-20.png\",\"13955921633untitled-design-17.png\",\"14592539354untitled-design-18.png\",\"536408765untitled-design-22.png\"]', '699', '1099', 12),
(7251, 208, 11, 0, '[\"5755864700untitled-design-19.png\",\"3308345381untitled-design-21.png\",\"4611788032untitled-design-20.png\",\"13955921633untitled-design-17.png\",\"14592539354untitled-design-18.png\",\"536408765untitled-design-22.png\"]', '699', '1099', 12),
(7252, 208, 11, 0, '[\"5755864700untitled-design-19.png\",\"3308345381untitled-design-21.png\",\"4611788032untitled-design-20.png\",\"13955921633untitled-design-17.png\",\"14592539354untitled-design-18.png\",\"536408765untitled-design-22.png\"]', '699', '1099', 12),
(7253, 207, 8, 4, '[\"954519760untitled-design-16.png\",\"15544805041untitled-design-13.png\",\"10314846802untitled-design-12.png\",\"7182491863untitled-design-15.png\",\"11049156554untitled-design-14.png\",\"10910671115untitled-design-11.png\"]', '699', '1099', 12),
(7254, 207, 8, 4, '[\"954519760untitled-design-16.png\",\"15544805041untitled-design-13.png\",\"10314846802untitled-design-12.png\",\"7182491863untitled-design-15.png\",\"11049156554untitled-design-14.png\",\"10910671115untitled-design-11.png\"]', '699', '1099', 12),
(7255, 207, 8, 4, '[\"954519760untitled-design-16.png\",\"15544805041untitled-design-13.png\",\"10314846802untitled-design-12.png\",\"7182491863untitled-design-15.png\",\"11049156554untitled-design-14.png\",\"10910671115untitled-design-11.png\"]', '699', '1099', 12),
(7256, 207, 8, 4, '[\"954519760untitled-design-16.png\",\"15544805041untitled-design-13.png\",\"10314846802untitled-design-12.png\",\"7182491863untitled-design-15.png\",\"11049156554untitled-design-14.png\",\"10910671115untitled-design-11.png\"]', '699', '1099', 12),
(7257, 207, 8, 4, '[\"954519760untitled-design-16.png\",\"15544805041untitled-design-13.png\",\"10314846802untitled-design-12.png\",\"7182491863untitled-design-15.png\",\"11049156554untitled-design-14.png\",\"10910671115untitled-design-11.png\"]', '699', '1099', 12),
(7258, 207, 8, 4, '[\"954519760untitled-design-16.png\",\"15544805041untitled-design-13.png\",\"10314846802untitled-design-12.png\",\"7182491863untitled-design-15.png\",\"11049156554untitled-design-14.png\",\"10910671115untitled-design-11.png\"]', '699', '1099', 12),
(7259, 207, 9, 0, '[\"954519760untitled-design-16.png\",\"15544805041untitled-design-13.png\",\"10314846802untitled-design-12.png\",\"7182491863untitled-design-15.png\",\"11049156554untitled-design-14.png\",\"10910671115untitled-design-11.png\"]', '699', '1099', 12),
(7260, 207, 9, 0, '[\"954519760untitled-design-16.png\",\"15544805041untitled-design-13.png\",\"10314846802untitled-design-12.png\",\"7182491863untitled-design-15.png\",\"11049156554untitled-design-14.png\",\"10910671115untitled-design-11.png\"]', '699', '1099', 12),
(7261, 207, 9, 0, '[\"954519760untitled-design-16.png\",\"15544805041untitled-design-13.png\",\"10314846802untitled-design-12.png\",\"7182491863untitled-design-15.png\",\"11049156554untitled-design-14.png\",\"10910671115untitled-design-11.png\"]', '699', '1099', 12),
(7262, 207, 9, 0, '[\"954519760untitled-design-16.png\",\"15544805041untitled-design-13.png\",\"10314846802untitled-design-12.png\",\"7182491863untitled-design-15.png\",\"11049156554untitled-design-14.png\",\"10910671115untitled-design-11.png\"]', '699', '1099', 12),
(7263, 207, 9, 0, '[\"954519760untitled-design-16.png\",\"15544805041untitled-design-13.png\",\"10314846802untitled-design-12.png\",\"7182491863untitled-design-15.png\",\"11049156554untitled-design-14.png\",\"10910671115untitled-design-11.png\"]', '699', '1099', 12),
(7264, 207, 9, 0, '[\"954519760untitled-design-16.png\",\"15544805041untitled-design-13.png\",\"10314846802untitled-design-12.png\",\"7182491863untitled-design-15.png\",\"11049156554untitled-design-14.png\",\"10910671115untitled-design-11.png\"]', '699', '1099', 12),
(7265, 207, 11, 0, '[\"954519760untitled-design-16.png\",\"15544805041untitled-design-13.png\",\"10314846802untitled-design-12.png\",\"7182491863untitled-design-15.png\",\"11049156554untitled-design-14.png\",\"10910671115untitled-design-11.png\"]', '699', '1099', 12),
(7266, 207, 11, 0, '[\"954519760untitled-design-16.png\",\"15544805041untitled-design-13.png\",\"10314846802untitled-design-12.png\",\"7182491863untitled-design-15.png\",\"11049156554untitled-design-14.png\",\"10910671115untitled-design-11.png\"]', '699', '1099', 12),
(7267, 207, 11, 0, '[\"954519760untitled-design-16.png\",\"15544805041untitled-design-13.png\",\"10314846802untitled-design-12.png\",\"7182491863untitled-design-15.png\",\"11049156554untitled-design-14.png\",\"10910671115untitled-design-11.png\"]', '699', '1099', 12),
(7268, 207, 11, 0, '[\"954519760untitled-design-16.png\",\"15544805041untitled-design-13.png\",\"10314846802untitled-design-12.png\",\"7182491863untitled-design-15.png\",\"11049156554untitled-design-14.png\",\"10910671115untitled-design-11.png\"]', '699', '1099', 12),
(7269, 207, 11, 0, '[\"954519760untitled-design-16.png\",\"15544805041untitled-design-13.png\",\"10314846802untitled-design-12.png\",\"7182491863untitled-design-15.png\",\"11049156554untitled-design-14.png\",\"10910671115untitled-design-11.png\"]', '699', '1099', 12),
(7270, 207, 11, 0, '[\"954519760untitled-design-16.png\",\"15544805041untitled-design-13.png\",\"10314846802untitled-design-12.png\",\"7182491863untitled-design-15.png\",\"11049156554untitled-design-14.png\",\"10910671115untitled-design-11.png\"]', '699', '1099', 12);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `show_menu` int(11) NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `addeddate` datetime NOT NULL,
  `modifieddate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `show_menu`, `image`, `name`, `slug`, `status`, `addeddate`, `modifieddate`) VALUES
(23, 0, '1729588851.png', 'Formal Wear', 'formal-wear', 1, '2023-12-22 01:35:37', '2024-10-22 02:50:51'),
(26, 1, '1726828727.png', 'Tops', 'tops', 1, '2023-12-22 09:16:06', '2024-09-20 04:08:47'),
(28, 1, '1703680862.jpeg', 'Co-ord set', 'co-ord-set', 1, '2023-12-22 09:16:33', '2024-01-08 03:07:29'),
(45, 1, '1729588870.png', 'Shirts', 'shirts', 1, '2024-01-17 04:46:53', '2024-10-22 02:51:10'),
(46, 1, '1729588827.png', 'Dress', 'dress', 1, '2024-01-18 03:33:32', '2024-10-22 02:50:27'),
(47, 1, '1705659361.jpeg', 'Skirts & Trousers ', 'skirts-trousers', 0, '2024-01-19 03:46:01', '2024-03-09 03:00:53'),
(48, 0, '1705752651.jpeg', 'Summer Wear', 'summer-wear', 0, '2024-01-20 05:40:51', '2024-05-20 11:22:33'),
(50, 1, '1707551076.jpeg', 'Bags', 'bags', 1, '2024-02-10 01:14:36', '0000-00-00 00:00:00'),
(51, 1, '1709187661.jpeg', 'Indian Wear', 'indian-wear', 1, '2024-02-29 11:51:01', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `color`
--

CREATE TABLE `color` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `slug` text NOT NULL,
  `color_code` text NOT NULL,
  `status` int(11) NOT NULL,
  `addeddate` datetime NOT NULL,
  `modifieddate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `color`
--

INSERT INTO `color` (`id`, `name`, `slug`, `color_code`, `status`, `addeddate`, `modifieddate`) VALUES
(1, 'Maroon', 'maroon', '#a41e1e', 1, '2023-03-30 12:10:41', '2024-07-03 12:55:47'),
(2, 'Black', '', '#000000', 1, '2023-03-30 12:17:07', '0000-00-00 00:00:00'),
(3, 'Yellow', '', '#ffff00', 1, '2023-04-10 06:24:28', '2023-04-11 07:28:29'),
(4, 'Blue', 'blue', '#1c19a3', 1, '2023-04-10 06:24:47', '2024-05-29 01:27:51'),
(5, 'Sky Blue', '', '#87ceeb', 1, '2023-04-11 07:24:03', '2023-04-11 07:27:19'),
(6, 'Orange', '', '#ffa500', 1, '2023-04-11 07:24:38', '0000-00-00 00:00:00'),
(7, 'Pink', '', '#ffc0cb', 1, '2023-04-11 07:25:14', '0000-00-00 00:00:00'),
(8, 'Red', '', '#ff0000', 1, '2023-04-11 07:25:45', '0000-00-00 00:00:00'),
(10, 'white', 'white', '#eed7d7', 1, '2023-04-11 07:27:50', '2024-07-31 05:44:55'),
(11, 'Green', 'green', '#15ac4a', 1, '2023-04-14 01:18:04', '2024-05-29 01:31:42'),
(12, 'Brown', 'brown', '#7a4a00', 1, '2023-12-22 01:09:10', '0000-00-00 00:00:00'),
(13, 'Beige', 'beige', '#eff2c0', 1, '2023-12-22 01:10:31', '2024-07-03 12:55:10'),
(14, 'Pastel yellow', 'pastel-yellow', '#ffffbc', 1, '2023-12-22 01:11:22', '0000-00-00 00:00:00'),
(15, 'Black', 'black', '#000000', 1, '2023-12-22 01:11:37', '0000-00-00 00:00:00'),
(16, 'Silver', 'silver', '#e6e5e5', 1, '2023-12-22 01:20:11', '2024-05-29 01:27:30'),
(17, 'Mustard', 'mustard', '#f6a904', 1, '2023-12-22 01:20:56', '2024-07-03 12:53:54'),
(18, 'Yellow ', 'yellow', '#fefb41', 1, '2023-12-22 01:21:11', '2023-12-22 01:21:29'),
(19, 'Multi colour', 'multi-colour', '#51244a', 1, '2024-01-08 03:40:44', '2024-07-03 12:53:08'),
(20, 'hot pink', 'hot-pink', '#ff007b', 1, '2024-01-08 03:40:55', '2024-01-08 03:41:20'),
(21, 'peach', 'peach', '#ff7070', 1, '2024-01-08 03:42:12', '0000-00-00 00:00:00'),
(22, 'olive', 'olive', '#6b8e70', 1, '2024-01-09 02:20:04', '2024-07-03 12:51:55'),
(23, 'Purple', 'purple', '#7a219e', 1, '2024-01-18 01:29:12', '0000-00-00 00:00:00'),
(24, 'Grey', 'grey', '#707070', 1, '2024-01-18 01:29:23', '0000-00-00 00:00:00'),
(25, 'Lilac', 'lilac', '#f2b5e8', 1, '2024-07-03 12:50:24', '0000-00-00 00:00:00'),
(26, 'Pastel Green', 'pastel-green', '#82bb81', 1, '2024-07-03 12:50:48', '0000-00-00 00:00:00'),
(27, 'Rust Pink', 'rust-pink', '#bd005b', 1, '2024-07-03 12:51:23', '0000-00-00 00:00:00'),
(28, 'Off-White', 'off-white', '#fbdada', 1, '2024-07-31 05:47:11', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `mobile`, `subject`, `message`) VALUES
(1, 'Mike Wilson\r\n', 'mikeWeaxototiereewet@gmail.com', '84951485463', 'Improve local visibility for indianonlinemarket.com', 'If you are looking to rank your local business on Google Maps in a specific area, this service is for you. \r\n \r\nGoogle Map Stacking is a highly effective technique for ranking your GMB within a specific mile radius. \r\n \r\nMore info: \r\nhttps://www.speed-seo.net/product/google-maps-pointers/ \r\n \r\n \r\nThanks and Regards \r\nMike Mike Wilson\r\n \r\n \r\nPS: Want a comprehensive local plan that covers everything? \r\nhttps://www.speed-seo.net/product/local-seo-bundle/'),
(2, 'Mike Salisburry\r\n', 'mikeappomb@gmail.com', '86898521229', 'FREE fast ranks for indianonlinemarket.com', 'Hi there \r\n \r\nJust checked your indianonlinemarket.com baclink profile, I noticed a moderate percentage of toxic links pointing to your website \r\n \r\nWe will investigate each link for its toxicity and perform a professional clean up for you free of charge. \r\n \r\nStart recovering your ranks today: \r\nhttps://www.hilkom-digital.de/professional-linksprofile-clean-up-service/ \r\n \r\nRegards \r\nMike Salisburry\r\nHilkom Digital SEO Experts \r\nhttps://www.hilkom-digital.de/'),
(3, 'Mike Baldwin\r\n', 'mikerefresia@gmail.com', '81285454424', 'Collaboration request', 'Hi there, \r\n \r\nMy name is Mike from Monkey Digital, \r\n \r\nAllow me to present to you a lifetime revenue opportunity of 35% \r\nThat\'s right, you can earn 35% of every order made by your affiliate for life. \r\n \r\nSimply register with us, generate your affiliate links, and incorporate them on your website, and you are done. It takes only 5 minutes to set up everything, and the payouts are sent each month. \r\n \r\nClick here to enroll with us today: \r\nhttps://www.monkeydigital.org/affiliate-dashboard/ \r\n \r\nThink about it, \r\nEvery website owner requires the use of search engine optimization (SEO) for their website. This endeavor holds significant potential for both parties involved. \r\n \r\nThanks and regards \r\nMike Baldwin\r\n \r\nMonkey Digital'),
(4, 'Mike Dyson\r\n', 'mikeWeteurogue@gmail.com', '86969747577', 'Domain Authority of your indianonlinemarket.com', 'Hi there, \r\n \r\nI have reviewed your domain in MOZ and have observed that you may benefit from an increase in authority. \r\n \r\nOur solution guarantees you a high-quality domain authority score within a period of three months. This will increase your organic visibility and strengthen your website authority, thus making it stronger against Google updates. \r\n \r\nCheck out our deals for more details. \r\nhttps://www.monkeydigital.co/domain-authority-plan/ \r\n \r\nNEW: Ahrefs Domain Rating \r\nhttps://www.monkeydigital.co/ahrefs-seo/ \r\n \r\n \r\nThanks and regards \r\nMike Dyson\r\n'),
(5, 'Phil Stewart', 'noreplyhere@aol.com', '342-123-4456', '??', 'Want Your Ad Everywhere? Reach Millions Instantly! For less than $100 I can blast your message to website contact forms globally. Contact me via skype or email below for info\r\n\r\nP. Stewart\r\nEmail: t2tybm@gomail2.xyz\r\nSkype: live:.cid.2bc4ed65aa40fb3b'),
(6, 'Mike Morgan\r\n', 'peterappomb@gmail.com', '87449651869', 'Whitehat SEO for indianonlinemarket.com', 'Howdy \r\n \r\nI have just analyzed  indianonlinemarket.com for  the current search visibility and saw that your website could use an upgrade. \r\n \r\nWe will improve your ranks organically and safely, using only state of the art AI and whitehat methods, while providing monthly reports and outstanding support. \r\n \r\nMore info: \r\nhttps://www.digital-x-press.com/unbeatable-seo/ \r\n \r\n \r\nRegards \r\nMike Morgan\r\n \r\nDigital X SEO Experts'),
(7, 'TobiasStito', 'no.reply.PeterJohansen@gmail.com', '87575464438', 'A remarkable new method of advertising.', 'Hi-ya! indianonlinemarket.com \r\n \r\nDid you know that it is possible to send business offers completely authorizedly? We proffer a legal way of sending business proposals through feedback forms. \r\nMessages sent via Communication Forms are least likely to be flagged as spam, since they are viewed as highly significant. \r\nWe are inviting you to take advantage of our service without any charge. \r\nOur service can offer up to 50,000 messages for you. \r\n \r\nThe cost of sending one million messages is $59. \r\n \r\nThis offer is automatically generated. \r\nPlease use the contact details below to get in touch with us. \r\n \r\nContact us. \r\nTelegram - https://t.me/FeedbackFormEU \r\nSkype  live:feedbackform2019 \r\nWhatsApp  +375259112693 \r\nWhatsApp  https://wa.me/+375259112693 \r\n \r\nWe only use chat for communication.'),
(8, 'Mike Russel\r\n', 'mikeSnok@gmail.com', '84576714955', 'NEW: Semrush Backlinks', 'Hi there \r\n \r\nThis is Mike Russel\r\n \r\nLet me present you our latest research results from our constant SEO feedbacks that we have from our plans: \r\n \r\nhttps://www.strictlydigital.net/product/semrush-backlinks/ \r\n \r\nThe new Semrush Backlinks, which will make your indianonlinemarket.com SEO trend have an immediate push. \r\nThe method is actually very simple, we are building links from domains that have a high number of keywords ranking for them.  \r\n \r\nForget about the SEO metrics or any other factors that so many tools try to teach you that is good. The most valuable link is the one that comes from a website that has a healthy trend and lots of ranking keywords. \r\nWe thought about that, so we have built this plan for you \r\n \r\nCheck in detail here: \r\nhttps://www.strictlydigital.net/product/semrush-backlinks/ \r\n \r\nCheap and effective \r\n \r\nTry it anytime soon \r\n \r\nRegards \r\nMike Russel\r\n \r\nmike@strictlydigital.net'),
(9, 'James Seaman', 'melaniefell51@gmail.com', '82164354282', 'Partnership Request.', 'Hello!! \r\nMy name is James Seaman, I work as the Research and Procurement Pharmacist in a pharmaceutical company. I am writing to extend a business request to you.  I am looking for a trustworthy entrepreneur/individual to represent my company in sourcing some of Herbal oil basic raw materials used in the manufacturing of high-quality antiviral vaccines, cancer treatment, and other life-saving treatments. I am assuring you that good profits will be earned from the commission that will be paid to middle-person(s). \r\nI will provide exclusive details to you upon your acceptance. \r\nI await your response to provide further details to you if you get in contact to me via email below: \r\nEmail: jamesseaman@chemist.com \r\nRegards \r\nJames Seaman'),
(10, 'NAERTREGE1335737NERTHRTYHR', 'sylvialarson1906@noissmail.com', '84498694247', 'TORTYT1335737TIRTYTH', 'METYUTYJ1335737MARTHHDF'),
(11, 'Phil Stewart', 'noreplyhere@aol.com', '342-123-4456', '??', 'Interested in maximizing your reach? You\'re reading this message and I can get others to read your ad the exact same way! Drop me an email below to learn more about our services and start spreading your message effectively!\r\n\r\nP. Stewart\r\nEmail: kevsr4@mail-to-form.xyz\r\nSkype: form-blasting'),
(12, 'Mike Barnes\r\n', 'mikeWeaxototiereewet@gmail.com', '86155674244', 'Increase sales for your local business', 'This service is perfect for boosting your local business\' visibility on the map in a specific location. \r\n \r\nWe provide Google Maps listing management, optimization, and promotion services that cover everything needed to rank in the Google 3-Pack. \r\n \r\nMore info: \r\nhttps://www.speed-seo.net/ranking-in-the-maps-means-sales/ \r\n \r\n \r\nThanks and Regards \r\nMike Barnes\r\n \r\n \r\nPS: Want a ONE-TIME comprehensive local plan that covers everything? \r\nhttps://www.speed-seo.net/product/local-seo-bundle/'),
(13, 'Jasper Maddox', 'jasper.maddox76@googlemail.com', '3', 'Dear indianonlinemarket.com Owner.', 'Get Found On The First Page of Google in Less Than 2 weeks by Using our Priority Stealth S.E.O. Syndication Method.\r\n\r\nPay us once and you\'ll get Organic Search Engine Results using videos that will continue to drive traffic 24/7 year round!\r\n \r\nThe Benefits are incredible - since by paying us once there will be:\r\n\r\n- No Additional Ad spend needed!\r\n\r\n- No Additional Costs for Ad copy!\r\n\r\n- No Additional Costs per Clicks!\r\n\r\n- No Commercial Licensing fees ever!\r\n\r\nGet Started Today and Get Seen Tomorrow!\r\n\r\nLearn More: Reviews2Videos.com'),
(14, 'Leesa Pitt', 'pitt.leesa@msn.com', '3521844850', 'Query regarding indianonlinemarket.com', 'Hi there,\r\n\r\nI\'ve just been on indianonlinemarket.com and wondered if you\'d ever considered writing an eBook?\r\n\r\nOur software allows you to turn indianonlinemarket.com into a fully designed eBook. Just provide the content source, and the AI will do the rest.\r\n   \r\n1. Generate unique and human-like content, ensuring your eBook is engaging and informative.\r\n2. Create stunning 3D eCovers to grab attention and make your book stand out.\r\n3. Publish your eBook instantly on a built-in marketplace with potential buyers.\r\n4. Distribute your book to over 50 publications to increase your reach and drive traffic.\r\n\r\nThe price is just $16.95 but the price rises shortly.\r\n\r\nLearn more: https://furtherinfo.org/zfqs\r\n\r\nRegards,\r\nRachel'),
(15, 'Emily Jones', 'emilyjones2250@gmail.com', '5707932823', 'YouTube Promotion: 700-1500 new subscribers each month', 'Hi there,\r\n\r\nWe run a Youtube  growth service, where we can increase your subscriber count safely and practically. \r\n\r\n- Guaranteed: We guarantee to gain you 700-1500 new subscribers each month.\r\n- Real, human subscribers who subscribe because they are interested in your channel/videos.\r\n- Safe: All actions are done, without using any automated tasks / bots.\r\n\r\nOur price is just $60 (USD) per month and we can start immediately.\r\n\r\nWe also grow Instagram followers (300-1000 for $60).\r\n\r\nGet in touch if you would like to know more.\r\n\r\nKind Regards,\r\nEmily'),
(16, 'Mike Nicholson\r\n', 'mikeappomb@gmail.com', '81624123985', 'FREE fast ranks for indianonlinemarket.com', 'Hi there \r\n \r\nJust checked your indianonlinemarket.com baclink profile, I noticed a moderate percentage of toxic links pointing to your website \r\n \r\nWe will investigate each link for its toxicity and perform a professional clean up for you free of charge. \r\n \r\nStart recovering your ranks today: \r\nhttps://www.hilkom-digital.de/professional-linksprofile-clean-up-service/ \r\n \r\nRegards \r\nMike Nicholson\r\nHilkom Digital SEO Experts \r\nhttps://www.hilkom-digital.de/'),
(17, 'Libby Evans', 'libbyevans461@gmail.com', '7038218250', 'Accelerate Your Instagram Growth: Gain 300-1000 New Followers Monthly', 'Hi there,\r\n\r\nWe run an Instagram growth service, which increases your number of followers both safely and practically. \r\n\r\n- We guarantee to gain you 300-1000+ followers per month.\r\n- People follow you because they are interested in you, increasing likes, comments and interaction.\r\n- All actions are made manually by our team. We do not use any \'bots\'.\r\n\r\nThe price is just $60 (USD) per month, and we can start immediately.\r\n\r\nIf you\'d like to see some of our previous work, let me know, and we can discuss it further.\r\n\r\nKind Regards,\r\nLibby\r\n\r\nUnsubscribe here: https://removeme.click/unsubscribe.php?d=indianonlinemarket.com'),
(18, 'Danielle Simpson', 'simpsondanielle800@gmail.com', '29', 'Explainer Video?', 'Hi,\r\n\r\nWe\'d like to introduce to you our explainer video service, which we feel can benefit your site indianonlinemarket.com.\r\n\r\nCheck out some of our existing videos here:\r\nhttps://www.youtube.com/watch?v=8S4l8_bgcnc\r\nhttps://www.youtube.com/watch?v=bWz-ELfJVEI\r\nhttps://www.youtube.com/watch?v=Y46aNG-Y3rM\r\nhttps://www.youtube.com/watch?v=hJCFX1AjHKk\r\n\r\nOur prices start from as little as $195 and include a professional script and voice-over.\r\n\r\nIf this is something you would like to discuss further, don\'t hesitate to reply.\r\n\r\nKind Regards,\r\nDanielle'),
(19, 'Danielle Simpson', 'simpsondanielle800@gmail.com', '388737157', 'Explainer Video for indianonlinemarket.com?', 'Hi,\r\n\r\nWe\'d like to introduce to you our explainer video service, which we feel can benefit your site indianonlinemarket.com.\r\n\r\nCheck out some of our existing videos here:\r\nhttps://www.youtube.com/watch?v=8S4l8_bgcnc\r\nhttps://www.youtube.com/watch?v=bWz-ELfJVEI\r\nhttps://www.youtube.com/watch?v=Y46aNG-Y3rM\r\nhttps://www.youtube.com/watch?v=hJCFX1AjHKk\r\n\r\nOur prices start from as little as $195 and include a professional script and voice-over.\r\n\r\nIf this is something you would like to discuss further, don\'t hesitate to reply.\r\n\r\nKind Regards,\r\nDanielle'),
(20, 'Rachel Simpson', 'rachsimpson1972@gmail.com', '4815812591', 'Simplify Your Guest Posting: Download Our Verified List', 'Hi,\r\n\r\nStruggling to find relevant websites accepting guest posts? We\'ve got you covered!\r\n\r\nWe\'ve compiled a premium list of over 4,000 high-quality websites and contacts – all personally verified to accept guest posts.\r\n\r\nBenefits:\r\n\r\n1. Expand your reach: Gain exposure to new audiences in your niche.\r\n2. Boost SEO: Build valuable backlinks to improve your website\'s ranking.\r\n3. Save time: No more scouring the web for guest post opportunities.\r\n\r\nThe list is conveniently categorized for easy browsing and immediate use.\r\n\r\nLearn more and download your copy here: https://furtherinfo.org/guestposts\r\n\r\nIf you not interested, simply delete this mail.\r\n\r\nThanks for your time,\r\nRachel'),
(21, 'Mike Austin\r\n', 'mikerefresia@gmail.com', '81992517356', 'Collaboration request', 'Hi there, \r\n \r\nMy name is Mike from Monkey Digital, \r\n \r\nAllow me to present to you a lifetime revenue opportunity of 35% \r\nThat\'s right, you can earn 35% of every order made by your affiliate for life. \r\n \r\nSimply register with us, generate your affiliate links, and incorporate them on your website, and you are done. It takes only 5 minutes to set up everything, and the payouts are sent each month. \r\n \r\nClick here to enroll with us today: \r\nhttps://www.monkeydigital.org/affiliate-dashboard/ \r\n \r\nThink about it, \r\nEvery website owner requires the use of search engine optimization (SEO) for their website. This endeavor holds significant potential for both parties involved. \r\n \r\nThanks and regards \r\nMike Austin\r\n \r\nMonkey Digital'),
(22, 'Dora Verburen', 'doraverburen@gmail.com', '+18777151071', 'FYI got an error on your webpage', 'Hi\r\n\r\nI was doing some research for my client. As I was browsing through your website, I experienced an issue accessing indianonlinemarket.com.\r\n\r\nI understand it can be difficult to maintain every aspect of a website.\r\n\r\nFor my own needs, I regularly turn to tools like https://websitecheckhealth.com to check I\'m getting the most out of my health-related websites. It offers a comprehensive report at no cost.\r\n\r\nIf you need any assistance in this area, feel free to reach out.\r\n\r\nWarm regards, Dora'),
(23, 'Mike Turner\r\n', 'mikeWeteurogue@gmail.com', '82561251456', 'Domain Authority of your indianonlinemarket.com', 'Hi there, \r\n \r\nI have reviewed your domain in MOZ and have observed that you may benefit from an increase in authority. \r\n \r\nOur solution guarantees you a high-quality domain authority score within a period of three months. This will increase your organic visibility and strengthen your website authority, thus making it stronger against Google updates. \r\n \r\nCheck out our deals for more details. \r\nhttps://www.monkeydigital.co/domain-authority-plan/ \r\n \r\nNEW: Ahrefs Domain Rating \r\nhttps://www.monkeydigital.co/ahrefs-seo/ \r\n \r\n \r\nThanks and regards \r\nMike Turner\r\n'),
(24, 'Dora Verburen', 'doraverburen@gmail.com', '+18777151071', 'FYI got an error on your webpage', 'Hi\r\n\r\nI was doing some research for a client. While browsing through your website, I experienced an issue accessing indianonlinemarket.com.\r\n\r\nI know it can be difficult to maintain every aspect of a website.\r\n\r\nFor my own needs, I often turn to tools like https://websitecheckhealth.com to check I\'m getting the most out of my health-related websites. It offers a comprehensive report at no cost.\r\n\r\nIf you need any assistance in this area, feel free to reach out.\r\n\r\nWarm regards, Dora'),
(25, 'RichardRek', 'yasen.krasen.13+72428@mail.ru', '82116781984', 'Mjewdjwjdw jwksqkowjfjj kkepwlw3jreklm kwldewkdjr3kdw2o keo2kswlkforejw', 'Odowidjwoidwo wojdwkslqmwjfbjjdwkd jkwlsqswknfbjwjdmkqendj kedwjdbwhbdqjswkdwjfj eqwkdwknf indianonlinemarket.com'),
(26, 'Mike Youmans\r\n', 'peterappomb@gmail.com', '82649539938', 'Increase sales for your local business', 'Hi there \r\n \r\nAre you tired of spending money on advertising that doesn’t work? \r\nWe have the right strategy for you, to meet the right audience within your City boundaries. \r\n \r\nB2B Local City Marketing that works: \r\nhttps://www.onlinelocalmarketing.org/product/local-research-advertising/ \r\n \r\nWith our innovative marketing approach, you will receive calls, leads, and website interactions within a week. \r\n \r\nRegards \r\nMike Youmans\r\n https://www.onlinelocalmarketing.org'),
(27, 'Phil Stewart', 'noreplyhere@aol.com', '342-123-4456', '??', 'Interested in maximizing your reach? You\'re reading this message and I can get others to read your ad the exact same way! Drop me an email below to learn more about our services and start spreading your message effectively!\r\n\r\nPhil Stewart\r\nEmail: n87stg@submitmaster.xyz\r\nSkype: form-blasting'),
(28, 'Mike Eddington\r\n', 'peterappomb@gmail.com', '84972269366', 'Whitehat SEO for indianonlinemarket.com', 'Howdy \r\n \r\nI have just took an in depth look on your  indianonlinemarket.com for the ranking keywords and saw that your website could use a push. \r\n \r\nWe will improve your ranks organically and safely, using only state of the art AI and whitehat methods, while providing monthly reports and outstanding support. \r\n \r\nMore info: \r\nhttps://www.digital-x-press.com/unbeatable-seo/ \r\n \r\n \r\nRegards \r\nMike Eddington\r\n \r\nDigital X SEO Experts'),
(29, 'Mike Erickson\r\n', 'mikeSnok@gmail.com', '88138163176', 'NEW: Semrush Backlinks', 'Greetings \r\n \r\nThis is Mike Erickson\r\n \r\nLet me introduce to you our latest research results from our constant SEO feedbacks that we have from our plans: \r\n \r\nhttps://www.strictlydigital.net/product/semrush-backlinks/ \r\n \r\nThe new Semrush Backlinks, which will make your indianonlinemarket.com SEO trend have an immediate push. \r\nThe method is actually very simple, we are building links from domains that have a high number of keywords ranking for them.  \r\n \r\nForget about the SEO metrics or any other factors that so many tools try to teach you that is good. The most valuable link is the one that comes from a website that has a healthy trend and lots of ranking keywords. \r\nWe thought about that, so we have built this plan for you \r\n \r\nCheck in detail here: \r\nhttps://www.strictlydigital.net/product/semrush-backlinks/ \r\n \r\nCheap and effective \r\n \r\nTry it anytime soon \r\n \r\nRegards \r\nMike Erickson\r\n \r\nmike@strictlydigital.net'),
(30, 'Emily Jones', 'emilyjones2250@gmail.com', '3214432324', 'YouTube Promotion: 700-1500 new subscribers each month', 'Hi there,\r\n\r\nWe run a YouTube growth service, which increases your number of subscribers safely and practically. \r\n\r\nWe aim to gain you 700+ real human subscribers per month, with all actions safe as they are made manually (no bots).\r\n\r\nThe price is just $60 (USD) per month, and we can start immediately.\r\n\r\nLet me know if you wish to see some of our previous work.\r\n\r\nKind Regards,\r\nEmily'),
(31, 'Gerald C', 'moveyou938+o51p@gmail.com', '70', 'Your product is too expensive!', 'Just thougt I\'d let you know.\r\nWhen you registered http://indianonlinemarket.com with GoDaddy you were charged their first year domain product price\r\nThat\'s on top of the other products you got have Hosting, SSL Certificates, Email etc\r\n\r\nThe good news is that you have until 1/7/2025 to avoid overpaying their domain renwal fees\r\n\r\nThat\'s just 1 of the same 6 mistakes I made when starting my website.\r\nMaybe the aritcle I wrote could help you avoid the other 5?\r\nbewebsitewise.com\r\n\r\n\r\nGerald.\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\nTo opt out of future communications click the link below.\r\nhttps://optoutform.net/?site=indianonlinemarket.com\r\n\r\n\r\nGLBL\r\n300 Lafollette Station Dr\r\nFloyds Knobs, IN 47119\r\n\r\n\r\n'),
(32, 'Laura Cha', 'support@financesworldwidehk.com', '0085223194662', 'Time to Take Action - Get Funding for Your Project', 'Looking for a capable finance organization to fund your business project?\r\n\r\nWe are well aware of the challenges of finding a reliable financial partner, and we are here to provide you with the most suitable solution for your business.\r\n\r\nOur team of experts can provide you with the most suitable loan package to meet your need.                        \r\n            \r\nCheers,\r\nLaura Cha\r\nCustomer Service Representative                                    \r\n          \r\nContact info:             \r\nSkype:ID:live:.cid.c25a1f8b0fdaab04\r\nPhone:+85223194662\r\ninfo@financeworldwidehk.com\r\n\r\n\r\nUnsubscribe here if you don\'t want to get these awesome offers: https://docs.google.com/forms/d/e/1FAIpQLSdx-LI-ETiB-g37_ijIRHfBNhu__c-Go1dyOyZ_zU_pgeYTEg/viewform?usp=sf_link\r\nMellingburgredder 85, Huntington, New York, US, 91792'),
(33, 'Mike Nathan\r\n', 'mikeWeaxototiereewet@gmail.com', '84162316528', 'Increase sales for your local business', 'This service is perfect for boosting your local business\' visibility on the map in a specific location. \r\n \r\nWe provide Google Maps listing management, optimization, and promotion services that cover everything needed to rank in the Google 3-Pack. \r\n \r\nMore info: \r\nhttps://www.speed-seo.net/ranking-in-the-maps-means-sales/ \r\n \r\n \r\nThanks and Regards \r\nMike Nathan\r\n \r\n \r\nPS: Want a ONE-TIME comprehensive local plan that covers everything? \r\nhttps://www.speed-seo.net/product/local-seo-bundle/'),
(34, 'Alexander Richardson', 'support@capitalfund-hk.com', '0085230088373', 'Break Free from Stagnation: Get the Funding Your Business Needs', 'Are you okay running your business without much funds? This could impede growth and delay returns on your business.\r\n\r\nNow you have the Chance to Secure Financing for your Business and Projects without stress and the burden of repayment as our first focus is in nurturing the growth of your business and projects, enabling you to achieve your desired business goals and dreams.\r\n\r\nTake advantage of our Funding offer and get funding for your business and projects in days, and a generous number of years to repayment, providing you sufficient time to grow and reach your business goals.\r\n\r\nPlease reply to: customersupport@capitalfund-hk.com\r\nor\r\nGet in touch with us at: +852 3008 8373\r\n\r\n\r\nUnsubscribe here if you don\'t want to get these awesome offers: https://docs.google.com/forms/d/e/1FAIpQLSdx-LI-ETiB-g37_ijIRHfBNhu__c-Go1dyOyZ_zU_pgeYTEg/viewform?usp=sf_link\r\n3761 Illinois Avenue, Poughkeepsie, New York, US, 97205'),
(35, 'Audry Deitz', 'audry.deitz@hotmail.com', '6769460091', 'Effortlessly Create Engaging Videos with AI', 'Hi,\r\n\r\nAre you tired of video creation headaches?\r\n\r\nOur AI tool turns ideas into engaging videos in minutes. No editing hassles, just describe your concept and watch it come to life.\r\n\r\n- Free to Start: Get started with our free plan.\r\n- Speak Your Language: Create and translate videos in 30+ languages.\r\n- AI Voice Cloning: Save time with AI-powered voiceovers.\r\n\r\nLearn more and try it FREE: https://furtherinfo.org/lmh2\r\n\r\nRegards,\r\nAudry'),
(36, 'GREENING UGANDA', 'greening.ugandacsr@gmail.com', '88534918584', 'Commercial Hass Avocado Export Farming Investment Opportunities In Uganda', 'Hass avocado Export farming is worth everybody\'s investment who thinks \r\nfarming as a business regardless of how much your job pays you since it\'s \r\nless risky, very low cost input, low maintenance and ready available \r\nmarket worldwide (Global Avocado Market size was valued at USD 16.69 \r\nbillion in 2022 and is poised to grow from USD 18.33 billion in 2023 to \r\nUSD 38.71 billion by 2031, growing at a CAGR of 9.80%). \r\nAny investment in Hass Avocado Growing automatically becomes your \r\nPension. 13,570 ACRES of Hass Avocado Planted in 6 years, \r\nfor details \r\nfollow https://greeninguganda.com/Products/Hass_Ovaccado_Cba \r\nOR our facebook page \r\nhttps://www.facebook.com/media/set/?set=a.1457100674456118&type=3 \r\nAND \r\nhttps://www.facebook.com/media/set/?set=a.720120324820827&type=3 \r\nOR email us at cs@greening.green OR Call/text/Whatsapp +256-776- \r\n200002 \r\nFollow us on www.twitter.com/greeninguganda \r\nFollow & like us on facebook \r\nhttps://www.facebook.com/greeningugandaforestryservices'),
(37, 'David Everard', 'everard.salvador@gmail.com', '06-94211762', 'Hello indianonlinemarket.com Owner.', 'Have you heard of Se-REM? (Self effective - Rapid Eye Movement). Many people don\'t know that REM brain activity dramatically improves the processing of traumatic emotion. It creates peace and empowers the listener. Se-REM is an advanced version of EMDR therapy. It is more powerful because it combines elements of 6 different therapies, EMDR, hypnosis, mindfulness, Gestalt child within work, music therapy, and Awe therapy,(connecting profoundly with nature).\r\n\r\nIt has helped thousands of people overcome PTSD, and anxiety. But it is also helpful in a great many situations, loss of any kind, grief, and even marital counseling. It\'s mission statement is \"Trauma relief at as close to free as possible\". This not-for-profit program downloads to a smart phone or computer and can be used in an office or at home. Read about it, hear samples, and download at: Se-REM.com. Once you own the program, you are encouraged to give it away to others who will benefit. I provide free consultation to all who use the program. Write questions to: davidb@se-rem.com.\r\n\r\nSe-REM.com has a 95% rating on Trustpilot and is in use in 32 countries.\r\n\r\nWant to unsubscribe? please email \"no more emails\" to davidb@se-rem.com.'),
(38, 'Silke Eck', 'silke.eck@gmail.com', '6815645789', 'Expose Your Competitors’ Strategies', '\r\nAnalyzing your competitors’ strategies isn\'t just an option. It is a necessary part of your growth strategy. \r\nThe more you find out about your business and your competitors, the more you learn, adapt, and ultimately flourish.\r\n\r\nhttps://marketersmentor.com/competitor-spying\r\n\r\nBrandMentions gives you full access to your competitors\' strategies. \r\nYou can spy on competitors from different angles and have a clear view where exactly the competition stands.\r\n\r\nLearn More: https://marketersmentor.com/competitor-spying\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\nUnsubscribe\r\nhttps://marketersmentor.com/unsubscribe\r\n'),
(39, 'Freya McMinn', 'admin@charterunionfin.com', '735682086', 'Hi indianonlinemarket.com Admin!', 'Do not stay out of business, or close down due to lack of Funding and finance. Your projects, businesses and financial needs is completely possible.\r\n\r\nYou can now fund your projects, businesses without worries of repayment as you can have ample amount of time to execute your projects and businesses and build up, grow financially, to achieve your complete set goals.\r\n\r\nAre you also a broker/consultant? Make life easy for various of your clients globlly to help provide funding for their various Businesses and Projects, edging them towards a better buiness and financial goals.\r\n\r\nChu Yeung\r\nCustomer Care Department\r\ninfo@charterunionfin.com\r\n+852 8199 9324'),
(40, 'Mike Carter\r\n', 'mikeappomb@gmail.com', '86952316699', 'FREE fast ranks for indianonlinemarket.com', 'Hi there \r\n \r\nJust checked your indianonlinemarket.com baclink profile, I noticed a moderate percentage of toxic links pointing to your website \r\n \r\nWe will investigate each link for its toxicity and perform a professional clean up for you free of charge. \r\n \r\nStart recovering your ranks today: \r\nhttps://www.hilkom-digital.de/professional-linksprofile-clean-up-service/ \r\n \r\nRegards \r\nMike Carter\r\nHilkom Digital SEO Experts \r\nhttps://www.hilkom-digital.de/'),
(41, 'Monty Prior', 'prior.monty@gmail.com', '7755671099', 'Need more traffic to your website?', '\r\nWant the Secret to UNLIMITED traffic to your website or funnel? \r\n\r\n\"Claim a FREE Copy of the \'Underground\' Traffic Playbook\r\nto Get Hundreds Or Even Thousands of Hungry Buyers to Your Websites and Funnels...\"\r\n\r\nClick the link below to get your Free book and Bonus now: \r\n\r\nhttps://marketersmentor.com/traffic-secrets\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\nUnsubscribe\r\nhttps://marketersmentor.com/unsubscribe\r\n'),
(42, 'Mike Oldridge\r\n', 'mikerefresia@gmail.com', '84773442293', 'Collaboration request', 'Hi there, \r\n \r\nMy name is Mike from Monkey Digital, \r\n \r\nAllow me to present to you a lifetime revenue opportunity of 35% \r\nThat\'s right, you can earn 35% of every order made by your affiliate for life. \r\n \r\nSimply register with us, generate your affiliate links, and incorporate them on your website, and you are done. It takes only 5 minutes to set up everything, and the payouts are sent each month. \r\n \r\nClick here to enroll with us today: \r\nhttps://www.monkeydigital.org/affiliate-dashboard/ \r\n \r\nThink about it, \r\nEvery website owner requires the use of search engine optimization (SEO) for their website. This endeavor holds significant potential for both parties involved. \r\n \r\nThanks and regards \r\nMike Oldridge\r\n \r\nMonkey Digital'),
(43, 'Mike Ogden\r\n', 'mikeWeteurogue@gmail.com', '89536563686', 'Domain Authority of your indianonlinemarket.com', 'Hi there, \r\n \r\nI have reviewed your domain in MOZ and have observed that you may benefit from an increase in authority. \r\n \r\nOur solution guarantees you a high-quality domain authority score within a period of three months. This will increase your organic visibility and strengthen your website authority, thus making it stronger against Google updates. \r\n \r\nCheck out our deals for more details. \r\nhttps://www.monkeydigital.co/domain-authority-plan/ \r\n \r\nNEW: Ahrefs Domain Rating \r\nhttps://www.monkeydigital.co/ahrefs-seo/ \r\n \r\n \r\nThanks and regards \r\nMike Ogden\r\n'),
(44, 'Mike Sykes\r\n', 'peterappomb@gmail.com', '85219567877', 'Add WhatsApp Marketing channel for indianonlinemarket.com', 'Hi there \r\n \r\nThe Internet is full with false Whatsapp advertising methods which promise: “Marketing automation using your own WhatsApp Number”. \r\n \r\nIt’s a total scam and will only get your number banned in whatsapp in seconds. \r\n \r\nThe only way to do this legally and safely is by our researched methods. \r\nWe will set up everything for you and you will be able to send Whatsapp Marketing messages legally and attract local audience for your business. \r\n \r\nCheck all details below. \r\nhttps://www.onlinelocalmarketing.org/product/local-whatsapp-marketing/ \r\n \r\nRegards \r\nMike Sykes\r\n https://www.onlinelocalmarketing.org'),
(45, 'Mike Forster\r\n', 'peterappomb@gmail.com', '82119277869', 'Whitehat SEO for indianonlinemarket.com', 'Howdy \r\n \r\nI have just took an in depth look on your  indianonlinemarket.com for its SEO Trend and saw that your website could use an upgrade. \r\n \r\nWe will increase your ranks organically and safely, using only state of the art AI and whitehat methods, while providing monthly reports and outstanding support. \r\n \r\nMore info: \r\nhttps://www.digital-x-press.com/unbeatable-seo/ \r\n \r\n \r\nRegards \r\nMike Forster\r\n \r\nDigital X SEO Experts'),
(46, 'Mark Tang', 'layne.tang@outlook.com', '04.13.46.48.13', 'Hello indianonlinemarket.com Webmaster.', 'Dear indianonlinemarket.com owner,\r\n\r\nIf you\'re receiving this message, it signifies the effectiveness of my marketing approach. I specialize in extending the reach of your advertising message across 5 million sites for just $50. Additionally, you have the option to expand your campaign to 15 million platforms for a mere $125. This presents an unparalleled opportunity to promote your business or services affordably.\r\n\r\nTo explore this lucrative marketing opportunity further, please feel free to contact me via email at virgo.t3@gmail.com or connect with me on Skype at live:.cid.dbb061d1dcb9127a\r\n\r\nLooking forward to propelling your marketing efforts to new heights.'),
(47, 'Roxanne Stauffer', 'roxanne.stauffer@gmail.com', '890094127', 'Is Your WordPress Site Stuck in 2021? Upgrade to AI', 'Hey there,\r\n\r\nAre you tired of spending countless hours on repetitive marketing tasks?\r\n\r\nImagine having a personal AI assistant that can handle everything from writing high-converting copy to creating stunning websites and videos – all within your WordPress dashboard.\r\n\r\nThis revolutionary AI tool can complete hundreds of marketing tasks in seconds, saving you time and money.\r\n\r\n1. Write captivating content: Articles, landing pages, emails, ebooks, and more – all crafted by AI to perfection.\r\n2. Design stunning visuals: Create professional-looking logos, graphics, and websites in seconds.\r\n3. Automate marketing tasks: Build high-converting funnels, manage social media, and generate leads on autopilot.\r\n4. Develop mobile apps: No coding skills needed! WP Genie can build apps you can sell for thousands.\r\n\r\nAnd so much more!\r\n\r\nLearn more: https://furtherinfo.org/genie\r\n\r\nPlus, WP Genie is:\r\n\r\n- 16x faster than ChatGPT\r\n- Always available: No outages like with other AI tools.\r\n- Easy to use: No technical skills required.\r\n\r\nFor a limited time, get our plugin for a one-time price of just $17 (normally $30/month).\r\n\r\nThis offer won\'t last long, so don\'t miss out.\r\n\r\nClick here to learn more and unlock the power of AI for your WordPress site: https://furtherinfo.org/genie\r\n\r\nSincerely,\r\nRoxanne'),
(48, 'Fredric Du Cane', 'fredric.ducane@yahoo.com', '1', 'Lightning-Fast Connectivity: Check Out Our Company\'s VPS Offerings Now', 'Our high-performance VPSs, available from €3.90 per month, offer up to 5 Gbit/s connectivity and 50TB of monthly traffic. Ideal for high-demand applications and seamless connectivity.\r\n\r\nChoose Your Plan:\r\nBasic: 1x AMD Ryzen vCore, 4GB RAM, 120GB NVMe Disk space - €3.90/month\r\nStandard: 2x AMD Ryzen vCore, 8GB RAM, 240GB NVMe Disk space - €7.90/month\r\nAdvanced: 3x AMD Ryzen vCore, 12GB RAM, 320GB NVMe Disk space - €11.90/month\r\nPro: 6x AMD Ryzen vCore, 12GB RAM, 640GB NVMe Disk space - €16.90/month\r\n\r\nHighlights:\r\n5 Gbit/s Connectivity\r\n50TB Traffic included per month\r\nKVM / ISO mount\r\nLinux/Windows/BSD OS ready\r\nUI-based upgrades and downgrades\r\n5 snapshots and 1 backup slot included\r\n\r\nEnhance your network performance today. Sign up now: https://bit.ly/vps4euro\r\n\r\n\r\n\r\nUnsubscribe here if you don\'t want to get these awesome newsletters: https://docs.google.com/forms/d/e/1FAIpQLSfqamyB6byPaAwgcS6ofGmo4N4Pqkn2ZutAk6aInDQ_WhohRg/viewform\r\n8 Cours Marechal-Joffre, Peekskill, NY, USA, 76200'),
(49, 'Mike Clifford\r\n', 'mikeSnok@gmail.com', '82635954162', 'NEW: Semrush Backlinks', 'Hi \r\n \r\nThis is Mike Clifford\r\n \r\nLet me show you our latest research results from our constant SEO feedbacks that we have from our plans: \r\n \r\nhttps://www.strictlydigital.net/product/semrush-backlinks/ \r\n \r\nThe new Semrush Backlinks, which will make your indianonlinemarket.com SEO trend have an immediate push. \r\nThe method is actually very simple, we are building links from domains that have a high number of keywords ranking for them.  \r\n \r\nForget about the SEO metrics or any other factors that so many tools try to teach you that is good. The most valuable link is the one that comes from a website that has a healthy trend and lots of ranking keywords. \r\nWe thought about that, so we have built this plan for you \r\n \r\nCheck in detail here: \r\nhttps://www.strictlydigital.net/product/semrush-backlinks/ \r\n \r\nCheap and effective \r\n \r\nTry it anytime soon \r\n \r\nRegards \r\nMike Clifford\r\n \r\nmike@strictlydigital.net'),
(50, 'James Jefferis', 'matilda.jefferis@outlook.com', '234-517-1184', 'Paid Advertising on indianonlinemarket.com', 'Hi indianonlinemarket.com Admin,\r\n\r\nI am curious to know how much you would charge for a link insertion in an existing post?\r\n\r\nDo you also allow the publication of sponsored posts on your blog? What\'s the fee?\r\n\r\nIf you prefer EXCHANGE instead of paid linking, we may get you featured on any of any of the following websites:\r\n\r\necommercefastlane.com (DR:71, Traffic:80.6K)\r\ncoolbio.org (DR:64, Traffic:102K)\r\nvyvymangaa.us (DR:48, Traffic:135K)\r\n\r\nYou won\'t have to link back to the same website but some other one.\r\n\r\nThis is called 3-way link exchange, the safest link building method works today.\r\n\r\nWe\'ve over 8K+ sites in our inventory with real organic traffic, if you want to look for more options for exchange.\r\n\r\nIf you\'re interested, please feel free to contact me via email at sebmarketer@gmail.com\r\n\r\nBest of Regards'),
(51, 'Amelia Brown', 'ameliabrown0325@gmail.com', '494466830', 'YouTube Promotion: 700-1500 new subscribers each month', 'Hi there,\r\n\r\nWe run a YouTube growth service, which increases your number of subscribers both safely and practically. \r\n\r\n- We guarantee to gain you 700-1500+ subscribers per month.\r\n- People subscribe because they are interested in your channel/videos, increasing likes, comments and interaction.\r\n- All actions are made manually by our team. We do not use any \'bots\'.\r\n\r\nThe price is just $60 (USD) per month, and we can start immediately.\r\n\r\nIf you have any questions, let me know, and we can discuss further.\r\n\r\nKind Regards,\r\nAmelia\r\n\r\nUnsubscribe: https://removeme.click/yt/unsubscribe.php?d=indianonlinemarket.com'),
(52, 'Mike Cook\r\n', 'mikeWeaxototiereewet@gmail.com', '83434514281', 'Increase sales for your local business', 'This service is perfect for boosting your local business\' visibility on the map in a specific location. \r\n \r\nWe provide Google Maps listing management, optimization, and promotion services that cover everything needed to rank in the Google 3-Pack. \r\n \r\nMore info: \r\nhttps://www.speedseos.com/ranking-in-the-maps-means-sales/ \r\n \r\nWhatsapp us: https://wa.link/t9gzao \r\n \r\n \r\nThanks and Regards \r\nMike Cook\r\n \r\nPS: Want a ONE-TIME comprehensive local plan that covers everything? \r\nhttps://www.speedseos.com/local-seo-bundle/'),
(53, 'Marko Main', 'marko.main@gmail.com', '6803785824', 'Tired of Monthly Hosting Fees?', 'Hi there,\r\n\r\nAre you tired of paying monthly fees for website hosting, cloud storage, and funnels?\r\n\r\nWe offer a revolutionary solution: host unlimited websites, files, and videos for a single, low one-time fee. No more monthly payments.\r\n\r\nHere\'s what you get:\r\n\r\nUltra-fast hosting powered by Intel® Xeon® CPU technology\r\nUnlimited website hosting\r\nUnlimited cloud storage\r\nUnlimited video hosting\r\nUnlimited funnel creation\r\nFree SSL certificates for all domains and files\r\n99.999% uptime guarantee\r\n24/7 customer support\r\nEasy-to-use cPanel\r\n365-day money-back guarantee\r\n\r\nPlus, get these exclusive bonuses when you act now:\r\n\r\n60+ reseller licenses (sell hosting to your clients!)\r\n10 Fast-Action Bonuses worth over $19,997 (including AI tools, traffic generation, and more!)\r\n\r\nDon\'t miss out on this limited-time offer! The price is about to increase, and this one-time fee won\'t last forever.\r\n\r\nClick here to learn more: https://furtherinfo.org/yarx\r\n\r\nMarko'),
(54, 'Mike Baker\r\n', 'mikeWeteurogue@gmail.com', '88186253939', 'Domain Authority of your indianonlinemarket.com', 'Hi there, \r\n \r\nI have reviewed your domain in MOZ and have observed that you may benefit from an increase in authority. \r\n \r\nOur solution guarantees you a high-quality domain authority score within a period of three months. This will increase your organic visibility and strengthen your website authority, thus making it stronger against Google updates. \r\n \r\nCheck out our deals for more details. \r\nhttps://www.monkeydigital.co/domain-authority-plan/ \r\n \r\n \r\nThanks and regards \r\nMike Baker\r\n \r\nMonkey Digital \r\nhttps://www.monkeydigital.co/whatsapp-us/'),
(55, 'Dave Ashworth', 'ashworth.virgilio@gmail.com', '05.17.18.93.99', 'Hi indianonlinemarket.com Administrator.', 'You may wish to save this email for future reference.  There is no need to unsubscribe because this is a one-time email from Se-REM.  This announcement is a public service for a not-for-profit program that has saved and restored lives shattered by abuse and trauma.\r\n  \r\n     Have you heard of Se-REM? (Self effective - Rapid Eye Movement). Many people don\'t know that REM brain activity dramatically improves the processing of traumatic emotion. It creates peace and empowers the listener. Se-REM is an advanced version of EMDR therapy. It is more powerful because it combines elements of 6 different therapies, EMDR, hypnosis, mindfulness, Gestalt child within work, music therapy, and Awe therapy,(connecting profoundly with nature).\r\n \r\n     It has helped thousands of people overcome PTSD, and anxiety. But it is also helpful in a great many situations, loss of any kind, grief, phobias and even marital counseling. The mission statement is \"Trauma relief at as close to free as possible\". This program downloads to a smart phone or computer and can be used in an office or at home. Read about it, hear samples, and download at: Se-REM.com. Once you own the program, you are encouraged to give it away to others who will benefit. I provide free consultation to all who use the program. \r\nSe-REM.com has a 95% rating on Trustpilot and is in use in 33 countries.\r\n \r\n     If you would like to know more you can watch a UK Podcast at: https://lockedupliving.podbean.com'),
(56, 'Damian Houtman', 'damian.houtman@gmail.com', '3877028654', 'Free Yourself From Writer\'s Block: Create eBooks with AI', 'Hi,\r\n\r\nThere\'s a new AI tool that lets you create and sell eBooks and FlipBooks in over 100 languages.\r\n\r\nOur tool uses AI to help you generate content for eBooks on a variety of topics. Great for saving time if you\'re short on ideas or writing skills.\r\n\r\n- Create eBooks and FlipBooks in various formats (think kids\' books, puzzles, crosswords).\r\n- Generate content in a vast range of languages.\r\n- Embed affiliate links for potential income.\r\n- Automate parts of the creation process.\r\n\r\nFind out more here: https://furtherinfo.org/j9kh\r\n\r\nDamian'),
(57, 'Mike Evans\r\n', 'mikeappomb@gmail.com', '82158516214', 'FREE fast ranks for indianonlinemarket.com', 'Hi there \r\n \r\nJust checked your indianonlinemarket.com baclink profile, I noticed a moderate percentage of toxic links pointing to your website \r\n \r\nWe will investigate each link for its toxicity and perform a professional clean up for you free of charge. \r\n \r\nStart recovering your ranks today: \r\nhttps://www.hilkom-digital.co/professional-linksprofile-clean-up-service/ \r\n \r\nRegards \r\nMike Evans\r\nHilkom Digital SEO Experts \r\nhttps://www.hilkom-digital.co/whatsapp-us/'),
(65, 'Yash', 'yash2dhartii.in', '9599479289', 'Business Collaboration', 'Please meet me on Saturday.'),
(66, 'Mike Lewin\r\n', 'mikerefresia@gmail.com', '87694475315', 'NEW: Semrush Backlinks', 'Hi there \r\n \r\nThis is Mike Lewin\r\n \r\nLet me introduce to you our latest research results from our constant SEO feedbacks that we have from our plans: \r\n \r\nThe new Semrush Backlinks, which will make your indianonlinemarket.com SEO trend have an immediate push. \r\nThe method is actually very simple, we are building links from domains that have a high number of keywords ranking for them.  \r\n \r\nForget about the SEO metrics or any other factors that so many tools try to teach you that is good. The most valuable link is the one that comes from a website that has a healthy trend and lots of ranking keywords. \r\nWe thought about that, so we have built this plan for you \r\n \r\nCheck in detail here: \r\nhttps://www.strictlydigital.co/semrush-backlinks/ \r\n \r\nCheap and effective \r\nTry it anytime soon \r\n \r\nRegards \r\nMike Lewin\r\n https://www.strictlydigital.co/whatsapp-us/'),
(67, 'George Gregg', 'gregg.george@yahoo.com', '614930162', 'To the indianonlinemarket.com Owner!', 'I just went to your site. i have a question is this a good way to contact you?'),
(68, 'Joanna Riggs', 'joannariggs278@gmail.com', '641763087', 'Video Promotion for indianonlinemarket.com?', 'Hi,\r\n\r\nI just visited indianonlinemarket.com and wondered if you\'d ever thought about having an engaging video to explain what you do?\r\n\r\nOur videos cost just $195 for a 30 second video ($239 for 60 seconds) and include a full script, voice-over and video.\r\n\r\nI can show you some previous videos we\'ve done if you want me to send some over. Let me know if you\'re interested in seeing samples of our previous work.\r\n\r\nRegards,\r\nJoanna'),
(69, 'RichardBix', 'bernicearnett@hotmail.com', '85936491644', 'Drive Sales Growth with SellAccs.net', 'Join https://SellAccs.net as a salesperson and step into a world of unlimited potential! With our innovative platform facilitating online account transactions, you\'ll have a product in high demand. Enjoy competitive commissions, ongoing training, and dedicated support as you drive sales and grow your career. Seize the opportunity to be part of a dynamic team revolutionizing digital commerce. Apply now and embark on a rewarding journey with https://SellAccs.net! \r\n \r\n \r\nCLICK THE FOLLOWING WEB PAGE: https://SellAccs.net'),
(70, 'AmandaExcini1', 'amandaCoonry2@gmail.com', '87166965683', 'Hey stud, ready for love?', 'Hey darling, want to hang out? -  http://surl.li/ulebc?whiliak'),
(71, 'Rebecca Canada', 'canada.rebecca@msn.com', '6852694822', 'Hi indianonlinemarket.com Webmaster!', 'Are you still looking at getting your website done/ completed? Contact e.solus@gmail.com'),
(72, 'David Thaxton', 'thaxton.carin@yahoo.com', '28997285', 'To the indianonlinemarket.com Webmaster!', 'You may wish to save this email for future reference.  There is no need to unsubscribe because this is a one-time email from Se-REM.  This announcement is a public service for a not-for-profit program that has saved and restored lives shattered by abuse and trauma.\r\n  \r\nHave you heard of Se-REM? (Self effective - Rapid Eye Movement). Many people don\'t know that REM brain activity dramatically improves the processing of traumatic emotion. It creates peace and empowers the listener. Se-REM is an advanced version of EMDR therapy. It is more powerful because it combines elements of 6 different therapies, EMDR, hypnosis, mindfulness, Gestalt child within work, music therapy, and Awe therapy,(connecting profoundly with nature).\r\n \r\nIt has helped thousands of people overcome PTSD, and anxiety. But it is also helpful in a great many situations, loss of any kind, grief, phobias and even marital counseling. The mission statement is \"Trauma relief at as close to free as possible\". This program downloads to a smart phone or computer and can be used in an office or at home. Read about it, hear samples, and download at: Se-REM.com. Once you own the program, you are encouraged to give it away to others who will benefit. I provide free consultation to all who use the program. \r\nSe-REM.com has a 95% rating on Trustpilot and is in use in 33 countries.\r\n \r\nIf you would like to know more you can watch a UK Podcast at: https://lockedupliving.podbean.com'),
(73, 'Dave Bourke', 'bourke.glen@gmail.com', '627697944', 'Elevate Your Sales with M.I.H Digital Marketing Expertise', 'Dear,\r\n\r\nI hope this message finds you well. I am writing to introduce you to M.I.H, the premier digital marketing agency dedicated to transforming businesses and driving sales growth. Here’s how partnering with M.I.H can benefit your business:\r\n\r\n1. **Targeted SEO Strategies:** Enhance your online visibility and attract high-quality traffic to your website, leading to increased conversion rates.\r\n2. **Effective Social Media Campaigns:** Engage with your audience on various platforms, boosting brand awareness and customer loyalty.\r\n3. **Compelling Content Marketing:** Develop valuable content that resonates with your audience, establishing your brand as an industry leader.\r\n4. **Precision PPC Advertising:** Implement cost-effective PPC campaigns to reach potential customers actively searching for your products or services.\r\n5. **Data-Driven Insights:** Utilize advanced analytics to optimize marketing strategies continuously, ensuring maximum ROI.\r\n\r\nM.I.H\'s tailored approach and expertise across various industries ensure we understand and meet your unique business goals. Let’s discuss how M.I.H can help elevate your brand and drive sales growth.\r\n\r\nPlease get in touch at marketingagency.mih@gmail.com to schedule a consultation. I look forward to exploring opportunities for collaboration.\r\n\r\nBest regards,\r\nM.I.H Marketing Agency\r\nmarketingagency.mih@gmail.com\r\nhttps://mihmarketingagency.com/');
INSERT INTO `contact` (`id`, `name`, `email`, `mobile`, `subject`, `message`) VALUES
(74, 'Joanna Riggs', 'joannariggs278@gmail.com', '310343505', 'Explainer Video for indianonlinemarket.com?', 'Hi,\r\n\r\nI just visited indianonlinemarket.com and wondered if you\'d ever thought about having an engaging video to explain what you do?\r\n\r\nOur videos cost just $195 for a 30 second video ($239 for 60 seconds) and include a full script, voice-over and video.\r\n\r\nI can show you some previous videos we\'ve done if you want me to send some over. Let me know if you\'re interested in seeing samples of our previous work.\r\n\r\nRegards,\r\nJoanna'),
(75, 'Dave Smerd', 'smerd.milan@msn.com', '7702750357', 'Hi indianonlinemarket.com Admin.', 'Are you still looking at getting your website\'s SEO done? Contact Now intrug@gmail.com'),
(76, 'Angelica Snipes', 'snipes.angelica@msn.com', '306076150', 'Hello indianonlinemarket.com Owner.', 'WANTED: Partnerships & Agents for Global E-commerce Firm\r\n\r\n4U2 Inc., a premier E-commerce , Sourcing Brokerage firm, is actively seeking partnerships and collaboration with manufacturers and wholesalers for agricultural, commercial, and residential products. We offer a diverse marketplace for both new and used items, including vehicles and equipment.\r\n\r\nWhy Choose 4U2 Inc.? (see https.//www.4u2inc.com)\r\n\r\nGlobal reach for your products\r\nImmediate requirements for a wide range of items\r\nOpportunity to expand your business network\r\nJoin Our Team We’re also looking for Independent Contractor Agents (Account Executives) to help us discover new business opportunities. Whether you’re seeking a full-time or part-time role, you can earn up to $60,000 based on performance.\r\n\r\nGet in Touch Don’t miss out on this opportunity. Contact us at 4u2inc123@gmail.com to learn more or to start our partnership today!\r\n\r\nThis version is more direct and easier to read, highlighting the key points and call to action for potential partners and agents. If you need further refinements or have specific requirements, feel free to let me know!'),
(77, 'Sam De Rougemont', 'brigida.derougemont@gmail.com', '81661463', '24/7 Live Chat = More Sales & Happy Customers', 'Hey,\r\n\r\nCustomers want answers now. Don\'t lose leads with offline messages!\r\n\r\nLive chat boosts sales & loyalty. 44% of consumers love it!\r\n\r\nOpen247 provides:\r\n\r\n* Expert agents (24/7!)\r\n* Brand ambassadors\r\n* Cost-effective solution\r\n\r\nBenefits:\r\n\r\n* More conversions (capture hot leads!)\r\n* Happier customers (fast, friendly support)\r\n* Less work for you (focus on core business)\r\n\r\nGet a free quote! Email me now at open247chat@gmail.com \r\nWe\'ll customize a plan to fit your budget.\r\n\r\nP.S. Get 30 Days Free Trial Now!!'),
(78, 'AmandaExcinic', 'amandaCoonry2@gmail.com', '81723835711', 'Hey stud, ready for love?', 'Hey darling, want to hang out? -  https://is.gd/2xVU7z?whiliak'),
(79, 'Mark McLarty', 'mclarty.dawn@googlemail.com', '54', 'Struggling with Ecommerce? Get Our Free Guide Now!', 'Hi,\r\n\r\nBuilding a successful ecommerce website can be overwhelming. Are you struggling to get your online store off the ground?\r\nLow traffic, poor conversions, and complex platform choices can make it feel impossible to succeed. It’s frustrating when your hard work doesn’t translate into sales and growth.\r\nDownload our FREE eBook: \"100 Checkpoints for a Successful Ecommerce Website.\" This comprehensive guide is designed to help you overcome these challenges and transform your ecommerce site into a thriving business.\r\n\r\nHere\'s what you\'ll get:\r\n\r\n Target Audience,  UserFriendly Design, Compelling Product Descriptions, Simplified Checkout,  SEO Tips, Digital Marketing Strategies, Customer Service, Security Compliance &  Growth Planning.  \r\nReady to conquer your ecommerce challenges? Download Your Free eBook Now!  \r\n\r\nhttps://alwaysdigital.co/f1/?indianonlinemarket.com\r\n\r\nWe’re here to support your journey to ecommerce success. If you have any questions or need further assistance, feel free to reach out.\r\n\r\nTo your success,\r\nSam Miller\r\n\r\nP.S. Limited time offer – grab your free eBook today!'),
(80, 'AmandaExcini1', 'amandaCoonry1@gmail.com', '83566882917', 'Hey stud, ready for love?', 'Hey darling, want to hang out? -  https://is.gd/2xVU7z?whiliak'),
(81, 'AmandaExcinic', 'amandaCoonry3@gmail.com', '81646938791', 'Hey stud, ready for love?', 'Hey darling, want to hang out? -  http://surl.li/ulebc?whiliak'),
(82, 'Ken Rousseau', 'kenp2024@aol.com', '185947871', 'Just found this site', 'Was just browsing the site and was impressed the layout. Nicely design and great user experience. Just had to drop a message, have a great day! 8dfds87a'),
(83, 'Danny Tribolet', 'danny.tribolet25@gmail.com', '636637147', 'Dear indianonlinemarket.com Administrator!', 'We are thrilled to introduce you to Minew, a leading provider of cutting-edge IoT hardware. At Minew, we excel in designing, developing, and delivering top-quality IoT devices that incorporate the latest technologies such as Bluetooth®LE, LoRa, LTE-M, NB-IoT, Wi-Fi, UWB, 4G, 5G, and more.\r\n\r\nOur extensive product line includes BLE sensors, personnel tags, asset trackers, Bluetooth® beacons, IoT gateways, and an array of upcoming innovations. These devices are designed to meet the needs of virtually any commercial and industrial setting.\r\n\r\nBeyond our exceptional hardware, we offer comprehensive customization services, including product engineering, rapid prototyping, flexible manufacturing, and regulatory compliance. Our commitment to quality and customer satisfaction sets us apart from other IoT manufacturers.\r\n\r\nFor more details about our products and services, please visit our website at www.minew.com. If you have any questions or need personalized support, don\'t hesitate to reach out to us at info@minew.com.\r\n\r\nWe look forward to the opportunity to work with you.'),
(84, 'Alecia Gilreath', 'alecia.gilreath@hotmail.com', '362809757', 'Affordable Hosting Solution for indianonlinemarket.com', 'Hi there,\r\n\r\nAre you tired of paying monthly fees for website hosting, cloud storage, and funnels?\r\n\r\nWe offer a revolutionary solution: host unlimited websites, files, and videos for a single, low one-time fee. No more monthly payments.\r\n\r\nLearn more: https://furtherinfo.org/0wg3\r\n\r\nHere\'s what you get:\r\n\r\nUltra-fast hosting powered by Intel® Xeon® CPU technology\r\nUnlimited website hosting\r\nUnlimited cloud storage\r\nUnlimited video hosting\r\nUnlimited funnel creation\r\nFree SSL certificates for all domains and files\r\n99.999% uptime guarantee\r\n24/7 customer support\r\nEasy-to-use cPanel\r\n365-day money-back guarantee\r\n\r\nPlus, get these exclusive bonuses when you act now:\r\n\r\n60+ reseller licenses (sell hosting to your clients!)\r\n10 Fast-Action Bonuses worth over $19,997 (including AI tools, traffic generation, and more!)\r\n\r\nDon\'t miss out on this limited-time offer! The price is about to increase, and this one-time fee won\'t last forever.\r\n\r\nClick here to learn more: https://furtherinfo.org/0wg3\r\n\r\nAlecia\r\n\r\n\r\nIf you do not wish to receive any further offers:\r\nhttps://removeme.click/wp/unsubscribe.php?d=indianonlinemarket.com'),
(85, 'AmandaExcini3', 'amandaCoonryb@gmail.com', '83659542361', 'Hey stud, ready for love?', 'Hey darling, want to hang out? -  https://is.gd/2xVU7z?whiliak'),
(86, 'AmandaExcini2', 'amandaCoonryc@gmail.com', '81721742229', 'Hey stud, ready for love?', 'Hey darling, want to hang out? -  https://is.gd/2xVU7z?whiliak'),
(87, 'Yasmin Gaskin', 'yasmin.gaskin@googlemail.com', '915898952', 'Dear indianonlinemarket.com Owner!', 'If you are reading this message, That means my marketing is working. I can make your ad message reach 5 million sites in the same manner for just $50. It\'s the most affordable way to market your business or services. Contact me by email virgo.t3@gmail.com or skype me at live:.cid.dbb061d1dcb9127a\r\n\r\nP.S: Speical Offer - Only for 2 days - 10 Million Sites for the same money $50'),
(88, 'Katelyn Raiden', 'katelynraiden@gmail.com', '247347255', 'Youtube Promotion: 700 new subscribers each month', 'Hi there,\r\n\r\nWe run a YouTube growth service, which increases your number of subscribers both safely and practically.\r\n\r\nWe go beyond just subscriber numbers. We focus on attracting viewers genuinely interested in your niche, leading to long-term engagement with your content. Our approach leverages optimization, community building, and content promotion for sustainable growth, not quick fixes. Additionally, a dedicated team analyzes your channel and creates a personalized plan to unlock your full potential, all without relying on bots.\r\n\r\nOur packages start from just $60 (USD) per month.\r\n\r\nWould this be of interest?\r\n\r\nKind Regards,\r\nKatelyn'),
(89, 'Marilyn McBride', 'marilyn.mcbride@outlook.com', '24459702', 'Hello indianonlinemarket.com Owner!', 'Are you looking for a capable financial company to fund your business project?\r\n\r\nwe are here to provide you with the best solution for your business growth. we provide the  most suitable business loan package to meet your need.                           \r\nemail me here.                                                                                             \r\ninfo@financeworldwidehk.com                                                                                             \r\n                                                                                              \r\n                                                                                          \r\n                                      \r\n                                      \r\nBest regards,\r\nLaura Cha.\r\nCustomer Service Representative'),
(90, 'AmandaExcini1', 'amandaCoonrya@gmail.com', '81923385547', 'Hey stud, ready for love?', 'Hey darling, want to hang out? -  https://is.gd/2xVU7z?whiliak'),
(91, 'Brenton Rolland', 'brenton.rolland@gmail.com', '749944233', 'Hello indianonlinemarket.com Owner.', 'Work From Home With This 100% FREE Training..., I Promise...You Will Never Look Back\r\n$500+ per day, TRUE -100% Free Training, go here:\r\n\r\nezwayto1000aday.com'),
(92, 'AmandaExcini2', 'amandaCoonrya@gmail.com', '84337336394', 'Hey stud, ready for love?', 'Hey darling, want to hang out? -  https://rb.gy/7rnhss?Siff'),
(93, 'AmandaExcinic', 'amandaCoonrya@gmail.com', '86549989141', 'Hey stud, ready for love?', 'Hey darling, want to hang out? -  https://rb.gy/7rnhss?Siff'),
(94, 'Phil Stewart', 'noreplyhere@aol.com', '342-123-4456', '??', 'Blast Your Message: Ready to send your message across the digital universe? Imagine your brand reaching countless website contact forms worldwide! For just under $100, unlock the potential to reach 1 million forms. Contact me below for details.\r\n\r\nP. Stewart\r\nEmail: 7klapw@submitmaster.xyz\r\nSkype: form-blasting'),
(95, 'Oman Dandridge', 'moises.dandridge3@gmail.com', '883155026', 'Flexible Funding to Drive Your Business Forward', 'Hello,\r\n\r\nSecuring the funding to drive growth and realize ideas is a major challenge for startups and established businesses alike. At Cateus Investment Company (CIC), we specialize in tailored financing solutions to meet these needs.\r\n\r\nWe offer:\r\n\r\nDebt Financing: Competitive 3% annual interest rate with no early repayment penalties.\r\nEquity Financing: Venture capital funding with a 10% equity stake, providing essential resources for expansion while maintaining control.\r\nWe are committed to providing flexible options to suit your specific requirements. Please share your pitch deck or executive summary so we can understand your business better and determine the best investment structure.\r\n\r\nLooking forward to discussing this further.\r\n\r\nBest regards,\r\n\r\nOman Rook\r\nExecutive Investment Consultant/Director\r\nCateus Investment Company (CIC)\r\n2401 AlMoayyed Tower, Seef District\r\nManama, Kingdom of Bahrain\r\n\r\nBest regards,\r\n\r\nOman Rook\r\n\r\nExecutive Investment Consultant/Director\r\nCateus Investment Company (CIC)\r\n2401 AlMoayyed Tower, Seef District Manama,\r\nKingdom of Bahrain, Phone: +973-17-585338\r\nEmail: oman.rook@cateusinvestmentgroup.com, cateusgroup@gmail.com\r\nWebsite: https://cateusinvestmentgroup.com'),
(96, 'AmandaExcini3', 'amandaCoonryc@gmail.com', '84633487938', 'Your Dream Girl Awaits...', 'Can’t wait to show you a good time tonight. -  https://goo.su/zARWg?whiliak'),
(97, 'AmandaExcinia', 'amandaCoonrya@gmail.com', '83916813662', 'Your Dream Girl Awaits...', 'Can’t wait to show you a good time tonight. -  https://rb.gy/7rnhss?Siff'),
(98, 'AmandaExcinib', 'amandaCoonrya@gmail.com', '82194583725', 'Ready for a Wild Night?)', 'I’ve been naughty, want to help me with that?) -  https://rb.gy/7rnhss?Siff'),
(99, 'Graciela Garcia', 'graciela.garcia@msn.com', '7944643822', 'Hi indianonlinemarket.com Owner.', 'Unlock the power of magic with Extreme Spells! Whether you\'re seeking true love, financial success, or happiness, our experienced Circle of Eight, led by Master Sam Taylor and Psychic Master Lennox, is here to transform your life. Since 1993, we\'ve been casting potent spells tailored to your unique needs, helping countless individuals achieve their dreams.\r\n\r\nDiscover spells to attract your perfect mate, rekindle lost love, draw wealth, and much more. Our spells are safe, effective, and backed by a 100% satisfaction guarantee. Plus, we offer free health spells to those in need because we believe in making positive changes accessible to everyone.\r\n\r\nDon\'t let life\'s challenges hold you back. Embrace the mystical power of Extreme Spells and take control of your destiny today. Visit https://extremespells.com/ to learn more and start your magical journey. Transform your life with the proven power of spell casting!\r\n\r\nAct Now! Click here to unlock love, wealth, and happiness with Extreme Spells. Your dream life is just a spell away!'),
(100, 'Gisele Trainor', 'gisele.trainor@msn.com', '3381759407', 'Dear indianonlinemarket.com Webmaster!', 'Are you frustrated by the high prices for simple web work and website updates?\r\n\r\nWhy pay $50+ per hour for web development work, \r\nwhen you can get higher quality results AT LESS THAN HALF THE COST? \r\n\r\nWe are a FULL SERVICE, USA managed web development agency with wholesale pricing.\r\n\r\nNo job too big or small. Test us out to see our value.\r\n\r\nUse the link in my signature, for a quick turn around quote.\r\n\r\n\r\n\r\nKristine Avocet\r\nSenior Web Specialist \r\nFusion Web Experts  \r\n186 Daniel Island Drive \r\nDaniel Island, SC 29492 \r\nwww.fusionwebexperts.tech'),
(101, 'AmandaExcini2', 'amandaCoonry3@gmail.com', '81523273893', 'Your Dream Girl Awaits...', 'Can’t wait to show you a good time tonight. -  https://rb.gy/7rnhss?Siff'),
(102, 'Deon Knorr', 'deon.knorr@yahoo.com', '629576609', 'Meet Robin A.I.: Your All-in-One Virtual Assistant', 'Hi there,\r\n\r\nWe would like to introduce to you Robin AI, the world\'s first app that replaces your entire team with an AI assistant. This powerful tool generates human-like content, creates stunning designs, drives unlimited traffic, and more.\r\n\r\nGenerate Human-Like Content\r\nBuilds Professional Funnels\r\nDrive Thousands Of Clicks\r\n\r\nOnly $17.00 (normally $180)\r\n\r\nCheck out the features of Robin AI here: https://furtherinfo.org/robinai\r\n\r\nThanks for your time,\r\nDeon'),
(103, 'AmandaExcini2', 'amandaCoonry2@gmail.com', '85288464742', 'Ready for a Wild Night?)', 'I’ve been naughty, want to help me with that?) -  https://rb.gy/7rnhss?Siff'),
(104, 'Ashlee Wherry', 'wherry.ashlee@outlook.com', '255698716', 'To the indianonlinemarket.com Owner.', 'WANTED: Partnerships & Agents for Global E-commerce Firm\r\n\r\n4U2 Inc., a premier E-commerce , Sourcing Brokerage firm, is actively seeking partnerships and collaboration with manufacturers and wholesalers for agricultural, commercial, and residential products. We offer a diverse marketplace for both new and used items, including vehicles and equipment.\r\n\r\nWhy Choose 4U2 Inc.? (see https.//www.4u2inc.com)\r\n\r\nGlobal reach for your products\r\nImmediate requirements for a wide range of items\r\nOpportunity to expand your business network\r\nJoin Our Team We’re also looking for Independent Contractor Agents (Account Executives) to help us discover new business opportunities. Whether you’re seeking a full-time or part-time role, you can earn up to $60,000 based on performance.\r\n\r\nGet in Touch Don’t miss out on this opportunity. Contact us at 4u2inc123@gmail.com to learn more or to start our partnership today!\r\n\r\nThis version is more direct and easier to read, highlighting the key points and call to action for potential partners and agents. If you need further refinements or have specific requirements, feel free to let me know!'),
(105, 'AmandaExcinic', 'amandaCoonry3@gmail.com', '86345347733', 'Your Dream Girl Awaits...', 'Can’t wait to show you a good time tonight. -  https://rb.gy/7rnhss?Siff'),
(106, 'AmandaExcini2', 'amandaCoonry3@gmail.com', '87129351722', 'Ready for a Wild Night?)', 'I’ve been naughty, want to help me with that?) -  https://rb.gy/7rnhss?Siff'),
(107, 'Fabien Haire', 'morrismi1@outlook.com', '7742619759', 'To the indianonlinemarket.com Webmaster!', 'Hi there!\r\n\r\nAre you looking to maximize the impact of your YouTube videos? Introducing YTCopyCat, our innovative SaaS tool that converts your YouTube videos into various high-quality written content using advanced AI.\r\nWhat Can Our Tool Do for You?\r\n\r\n    Blog Articles: Turn your videos into blog posts.\r\n    Newsletters: Generate captivating newsletters effortlessly.\r\n    Video Summaries: Create concise summaries.\r\n    Tweets: Produce engaging tweets.\r\n    Custom Content: Use personalized prompts for specific needs.\r\n\r\nHow It Works:\r\n\r\n    Paste your YouTube video link.\r\n    Our AI analyzes and extracts key content.\r\n    Choose your desired format.\r\n\r\nIn just a few clicks, you’ll have top-notch content ready to publish or share. Save time and boost productivity with automated content creation.\r\nWhy Choose YTCopyCat?\r\n\r\n    Time-Saving: Automate your content creation.\r\n    Versatile: Generate multiple content types from one video.\r\n    High Quality: Enjoy superior content with advanced AI.\r\n\r\nSpecial Offer:\r\n\r\nTry YTCopyCat for free and revolutionize your content strategy. Visit https://ytcopycat.com to learn more and start your free trial today. Don’t miss this chance to enhance your content creation!\r\n\r\nCheers,\r\nFabien\r\ncontact@ytcopycat.com'),
(108, 'Mozelle Swigert', 'morrismi1@outlook.com', '261862747', 'Hello indianonlinemarket.com Webmaster.', 'Dear indianonlinemarket.com owner or manager, \r\n\r\nCut your business or personal credit cards and loan payments in half. eliminate interest and reduce your debt by 50%. 100% guaranteed. The average customer saves $56,228 in unnecessary interest plus principal and 15 years in payoff time through our consolidation loan and debt consolidation programs. \r\n\r\nContact us at usdebtrelief.biz or email me at usdebt12@gmail.com I look forward to hearing from you, \r\n\r\nRey'),
(109, 'Amelia Brown', 'ameliabrown12784@gmail.com', '64', 'Youtube Promotion: Grow your subscribers by 700 each month', 'Hi there,\r\n\r\nWe run a Youtube growth service, where we can increase your subscriber count safely and practically. \r\n\r\n- Guaranteed: We guarantee to gain you 700-1500 new subscribers each month.\r\n- Real, human subscribers who subscribe because they are interested in your channel/videos.\r\n- Safe: All actions are done, without using any automated tasks / bots.\r\n\r\nOur price is just $60 (USD) per month and we can start immediately.\r\n\r\nIf you are interested then we can discuss further.\r\n\r\nKind Regards,\r\nAmelia'),
(110, 'Phil Stewart', 'noreplyhere@aol.com', '342-123-4456', '??', 'Curious about getting your ad seen by millions? I sent this message to your contact form, and here you are reading it! Visit my site below to find out more.\r\n\r\nhttp://hq9klq.contactblasting.xyz'),
(111, 'Shayne Rembert', 'rembert.shayne@gmail.com', '894145645', 'To the indianonlinemarket.com Administrator!', 'Do you have a list of website updates that you want to deploy but hate having to pay the INSANE prices to get it done?\r\n\r\nWhy pay $50+ per hour for web development work, \r\nwhen you can get higher quality results AT LESS THAN HALF THE COST? \r\n\r\nWe are a FULL SERVICE, USA managed web development agency offering wholesale pricing.\r\n\r\nNo job too big or small. Test us out to see our value.\r\n\r\nUse the link in my signature, for a quick turn around quote.\r\n\r\n\r\n\r\nKristine Avocet\r\nSenior Web Specialist \r\nFusion Web Experts  \r\n186 Daniel Island Drive \r\nDaniel Island, SC 29492 \r\nwww.fusionwebexperts.tech'),
(112, 'Shayna Bellamy', 'bellamy.shayna@hotmail.com', '7', 'To the indianonlinemarket.com Administrator.', 'Are you still looking at getting your website done/ completed? Contact e.solus@gmail.com'),
(113, 'Delbert Lonergan', 'delbert.lonergan97@googlemail.com', '4478872', 'Elevate Your Business with M.I.H Marketing Agency', 'Hello,\r\n\r\nI hope this email finds you well.\r\n We are reaching out to introduce M.I.H Marketing Agency, the ideal partner for elevating your brand. Our expertise in innovative strategies, tailored campaigns, and data-driven results sets us apart. \r\n\r\nBy partnering with us, we can enhance your brand with the use of:\r\n• Software development \r\n• AI development\r\n• App development\r\n• Website development\r\n• Cyber security\r\n• Virtual private servers\r\n• SEO, SMO, SEM, SERP\r\n• Digital design\r\n• Social media marketing\r\n• International law and accouting\r\n• Clothing design and supply\r\n• White label writers\r\n• White label courses\r\n\r\nIf the service that you are looking for is not listed please reach out to us,as this list does not include all of the services we provide.\r\n\r\nReady to take your marketing to the next level? Let\'s schedule a zoom meeting to discuss how M.I.H can drive your business forward.\r\n\r\nBest regards,\r\nM.I.H Marketing Agency  \r\nmarketingagency.mih@gmail.com'),
(114, 'Amelia Brown', 'ameliabrown12784@gmail.com', '4191727897', 'YouTube Promotion: 700-1500 new subscribers each month', 'Hi there,\r\n\r\nWe run a Youtube growth service, where we can increase your subscriber count safely and practically. \r\n\r\n- Guaranteed: We guarantee to gain you 700-1500 new subscribers each month.\r\n- Real, human subscribers who subscribe because they are interested in your channel/videos.\r\n- Safe: All actions are done, without using any automated tasks / bots.\r\n\r\nOur price is just $60 (USD) per month and we can start immediately.\r\n\r\nIf you are interested then we can discuss further.\r\n\r\nKind Regards,\r\nAmelia'),
(115, 'Marcia Brazenor', 'marcia.brazenor19@googlemail.com', '627669643', 'Dear indianonlinemarket.com Owner.', 'If you are reading this message, That means my marketing is working. I can make your ad message reach 5 million sites in the same manner for just $50. It\'s the most affordable way to market your business or services. Contact me by email virgo.t3@gmail.com or skype me at live:.cid.dbb061d1dcb9127a\r\n\r\nP.S: Speical Offer - ONLY for 24 hours - 10 Million Sites for the same money $50'),
(116, 'Shalanda Byrne', 'byrne.shalanda@googlemail.com', '7207440168', 'Hi indianonlinemarket.com Admin!', 'Hi,\r\n\r\nAre you looking for a quick and hassle-free business loan?\r\n\r\nWe offer a variety of options to suit your needs, including Expansion loans, startup loans, heavy equipment loans, home loans, real estate development loans, construction loans, working capital loans, bridge loans, inventory financing, merchant cash advances, and franchise financing. \r\n\r\nGet the funding you need to achieve your goals with ease. Apply now at www.fundcrownsltd.com/apply-now or email us at: Loan@fundcrownsltd.com\r\n\r\nBest regards. \r\n\r\nDylan Pham\r\nFund Crowns Limited'),
(117, 'Phil Stewart', 'noreplyhere@aol.com', '342-123-4456', '??', 'Curious about getting your ad seen by millions? I sent this message to your contact form, and here you are reading it! Visit my site below to find out more.\r\n\r\nhttp://ysfkxg.contactblasting.xyz'),
(118, 'AmandaExcinib', 'amandaCoonry2@gmail.com', '81363225525', 'Your Dream Girl Awaits...', 'Can’t wait to show you a good time tonight. -  https://goo.su/zARWg?whiliak'),
(119, 'Timothy Esposito', 'esposito.timothy@googlemail.com', '2', 'To the indianonlinemarket.com Admin.', 'Have you seen a great feature or an entire website design that you love and wish that you could have for your business?\r\n\r\nWe can make it happen and at wholesale rates.\r\n\r\nWhy pay $50+ per hour for web development work, \r\nwhen you can get higher quality results AT LESS THAN HALF THE COST? \r\n\r\nWe are a FULL SERVICE, USA managed web development agency offering wholesale pricing.\r\n\r\nNo job too big or small. Test us out to see our value.\r\n\r\nUse the link in my signature, for a quick turn around quote.\r\n\r\n\r\n\r\nKristine Avocet\r\nSenior Web Specialist \r\nFusion Web Experts  \r\n186 Daniel Island Drive \r\nDaniel Island, SC 29492 \r\nwww.fusionwebexperts.tech'),
(120, 'Joanna Riggs', 'joannariggs243@gmail.com', '666885847', 'Explainer Video for your website', 'Hi,\r\n\r\nI just visited indianonlinemarket.com and wondered if you\'d ever thought about having an engaging video to explain what you do?\r\n\r\nOur prices start from just $195.\r\n\r\nWe have produced over 500 videos to date and work with both non-animated and animated formats:\r\n\r\nNon-animated example:\r\nhttps://www.youtube.com/watch?v=bA2DyChM4Oc\r\n\r\nAnimated example:\r\nhttps://www.youtube.com/watch?v=JG33_MgGjfc\r\n\r\nLet me know if you\'re interested in learning more and/or have any questions.\r\n\r\nRegards,\r\nJoanna'),
(121, 'AmandaExcini3', 'amandaCoonry1@gmail.com', '81345341723', 'Ready for a Wild Night?)', 'I’ve been naughty, want to help me with that?) -  https://goo.su/zARWg?whiliak'),
(122, 'Carlo Gunderson', 'gunderson.jerrod43@gmail.com', '529675594', 'Dear indianonlinemarket.com Webmaster.', 'Reversed Chakra bursts onto the indie music scene with \"Game of Chess,\" a track that entertains and invites listeners into a profound exploration of spiritual energy through music. This band stands out by challenging conventional norms, even embracing a philosophy that turns traditional spiritual energy flows on their head. The single showcases Reversed Chakra\'s talent for crafting a rich sonic landscape, blending introspective indie rock with the moody allure of new wave and the expansive soundscapes of post-rock. \r\n\r\nThis ambitious fusion creates a song that feels both familiar and refreshingly unique. Produced by Paul Reeve (Muse), mixed by John Fryer (Depeche Mode, Nine Inch Nails, HIM), and mastered by Richard Dodd (Kings Of Leon), the single has reached 2.1 million streams in less than a month. We can easily shout that we are witnessing the rise of a new sensation in indie rock! \r\n\r\nEnjoy the video: https://www.youtube.com/watch?v=0Dw1T5TDecc\r\nVisit the band\'s website: www.reversedchakra.com'),
(123, 'Norris Vanwagenen', 'vanwagenen.norris@hotmail.com', '7988525303', 'Hello indianonlinemarket.com Owner.', 'Advantages of hiring a Developer:\r\n\r\nSpecialized Expertise\r\nTailored Customization and Control\r\nTime and Cost Efficiency\r\nCustom Plugin Development\r\nSEO Optimization\r\nOngoing Support and Maintenance\r\nSeamless Integration and Migration\r\nScalability for Business Growth\r\n\r\nHire a web developer now from us. Contact us at https://wpexpertspro.co/website/?site=indianonlinemarket.com'),
(124, 'AmandaExcini2', 'amandaCoonry3@gmail.com', '85357492764', 'Your Dream Girl Awaits...', 'Can’t wait to show you a good time tonight. -  https://rb.gy/7rnhss?Siff'),
(125, 'Douglas Wayne', 'douglas.wayne@gmail.com', '4466239', 'Supercharge Your Online Presence with Mintsuite – Limited Time Offer!', 'Hi there,\r\n\r\nWe’re excited to introduce Mintsuite, the ultimate platform to enhance your online presence and drive results. Mintsuite empowers you to create stunning websites, manage social media like a pro, and generate traffic effortlessly.\r\n\r\nCreate Stunning Websites\r\nManage Social Media Effortlessly\r\nGenerate Unlimited Traffic\r\n\r\nGrab Mintsuite now for just $18 (normally $180)!\r\n\r\nCheck out the amazing features of Mintsuite here: https://furtherinfo.org/mintsuite\r\n\r\nThanks for your time,\r\nDouglas'),
(126, 'AmandaExcini3', 'amandaCoonry3@gmail.com', '84316997153', 'Your Dream Girl Awaits...', 'Can’t wait to show you a good time tonight. -  https://goo.su/zARWg?whiliak'),
(127, 'AmandaExcini1', 'amandaCoonryb@gmail.com', '81846224465', 'Ready for a Wild Night?)', 'I’ve been naughty, want to help me with that?) -  https://rb.gy/7rnhss?Siff'),
(128, 'Liza Nolen', 'nolen.jeanne@gmail.com', '06-83882820', 'Re: Live Chat Agents for Hire', 'Hi indianonlinemarket.com Owner,\r\n\r\nStruggling with Live Chat Issues?\r\n\r\nSlow response times and missed chats can create a stressful environment for your team and frustrate your customers.\r\n\r\nWhat If It Gets Worse?\r\n\r\nAs these issues pile up, you risk damaging your reputation and losing business. It’s a tough situation to handle alone.\r\n\r\nHere’s Some Hope:\r\n\r\nYou don’t have to face this by yourself. Our live chat solutions can:\r\n\r\nSpeed Up Response Times: Ensure quick, effective support.\r\nScale with Your Needs: From startups to large enterprises.\r\nExpert Agents: Professional and efficient chat handling.\r\nReady for a Change? Free 30 days trial.\r\n\r\nEmail us at lisa365chat@gmail.com to schedule a free consultation and discover how we can help you streamline your live chat operations.'),
(129, 'AmandaExcinib', 'amandaCoonryc@gmail.com', '81792987348', 'Ready for a Wild Night?)', 'I’ve been naughty, want to help me with that?) -  https://rb.gy/7rnhss?Siff'),
(130, 'AmandaExcinib', 'amandaCoonry2@gmail.com', '81141531743', 'Can’t stop thinking about you...', 'Explore my profile, let’s make it unforgettable. -  https://rb.gy/7rnhss?Siff'),
(131, 'Lavina Baccarini', 'baccarini.lavina@gmail.com', '078 8937 7145', 'Hello indianonlinemarket.com Admin.', 'Advantages of hiring a Developer:\r\n\r\nSpecialized Expertise\r\nTailored Customization and Control\r\nTime and Cost Efficiency\r\nCustom Plugin Development\r\nSEO Optimization\r\nOngoing Support and Maintenance\r\nSeamless Integration and Migration\r\nScalability for Business Growth\r\n\r\nHire a web developer now from us. Contact us at e.solus@gmail.com'),
(132, 'AmandaExcinic', 'amandaCoonryc@gmail.com', '84725383483', 'Your fantasy awaits, just click....', 'Want to see more? Check my profile now. -  https://rb.gy/7rnhss?Siff'),
(133, 'AmandaExcini1', 'amandaCoonryb@gmail.com', '87628161445', 'Can’t stop thinking about you...', 'Explore my profile, let’s make it unforgettable. -  https://rb.gy/7rnhss?Siff'),
(134, 'AmandaExcini2', 'amandaCoonrya@gmail.com', '82553691382', 'Your fantasy awaits, just click....', 'Want to see more? Check my profile now. -  https://rb.gy/7rnhss?Siff'),
(135, 'AmandaExcini2', 'amandaCoonry2@gmail.com', '83853652315', 'Can’t stop thinking about you...', 'Explore my profile, let’s make it unforgettable. -  https://rb.gy/7rnhss?Siff'),
(136, 'Lindsay De Chair', 'dechair.lindsay@msn.com', '138117037', 'Hello indianonlinemarket.com Admin!', 'Tired of overpaying for simple web work and website updates?\r\n\r\nWhy pay $50+ per hour for web development work, \r\nwhen you can get higher quality results AT LESS THAN HALF THE COST? \r\n\r\nWe are a FULL SERVICE, USA managed web development agency with wholesale pricing.\r\n\r\nNo job too big or small. Test us out to see our value.\r\n\r\nUse the link in my signature, for a quick turn around quote.\r\n\r\n\r\n\r\nKristine Avocet\r\nSenior Web Specialist \r\nFusion Web Experts  \r\n186 Daniel Island Drive \r\nDaniel Island, SC 29492 \r\nwww.fusionwebexperts.tech'),
(137, 'Phil Stewart', 'noreplyhere@aol.com', '342-123-4456', '??', 'Hey, want your ad to reach millions of contact forms? Just like you\'re reading this message, others can read yours too. Visit my site below for details.\r\n\r\nhttp://kmpkbq.contactformblasting.xyz'),
(138, 'Valeria Mcgehee', 'valeria.mcgehee@hotmail.com', '44', 'Dear indianonlinemarket.com Webmaster!', 'Is your business struggling to find a reliable payment processing solution? Do you deal with high-risk transactions but face constant roadblocks from traditional processors?\r\n\r\nWorldinpay.com is here to help. We provide secure card processing solutions for high-risk businesses worldwide.\r\n\r\nHere\'s what sets us apart:\r\n\r\nGlobal Expertise: We handle transactions across the globe, understanding the unique challenges of high-risk industries.\r\nSeamless Integration: Integrate our processing solution quickly and easily into your existing platform.\r\nInstant Payouts: Get your funds faster with our efficient payout system.\r\nEnhanced Security: Enjoy industry-leading security measures to protect your business and customers.\r\nDedicated Support: Our team is here to answer your questions and provide ongoing support.\r\nDon\'t let payment processing hold your business back.\r\n\r\nContact Worldinpay today !!!\r\n\r\nVisit our website: https://worldinpay.com/\r\n\r\nSincerely,\r\nThe Worldinpay Team\r\nhttps://worldinpay.com/'),
(139, 'AmandaExcini3', 'amandaCoonrya@gmail.com', '89991238669', 'Your fantasy awaits, just click....', 'Want to see more? Check my profile now. -  https://rb.gy/7rnhss?Siff'),
(140, 'AmandaExcinia', 'amandaCoonry1@gmail.com', '83958982896', 'Can’t stop thinking about you...', 'Explore my profile, let’s make it unforgettable. -  https://goo.su/zARWg?whiliak'),
(141, 'Joanna Riggs', 'joannariggs243@gmail.com', '791851357', 'Explainer Video for your website', 'Hi,\r\n\r\nI just visited indianonlinemarket.com and wondered if you\'d ever thought about having an engaging video to explain what you do?\r\n\r\nWe have produced over 500 videos to date and work with both non-animated and animated formats:\r\n\r\nNon-animated example:\r\nhttps://www.youtube.com/watch?v=bA2DyChM4Oc\r\n\r\nAnimated example:\r\nhttps://www.youtube.com/watch?v=JG33_MgGjfc\r\n\r\nOur videos cost just $195 for a 30 second video ($239 for 60 seconds) and include a full script, voice-over and video.\r\n\r\nRegards,\r\nJoanna'),
(142, 'Oman Tipper', 'tipper.gia@yahoo.com', '50-31-58-61', 'Tailored Financing Solutions for Your Business Growth', 'Hello,\r\n\r\nAt Cateus Investment Company (CIC), we understand that securing the right funding is crucial for both startups and established businesses. That\'s why we offer flexible financing solutions designed to meet your specific needs.\r\n\r\nHere’s how we can help:\r\n\r\nDebt Financing: 3% annual interest with zero penalties for early repayment.\r\nEquity Financing: Venture capital support with a 10% equity stake—helping you expand while keeping control.\r\nWe’re ready to explore the best option for your business. Simply send us your pitch deck or executive summary, and let’s discuss the ideal investment structure to fuel your growth.\r\n\r\nLooking forward to hearing from you.\r\n\r\nBest regards,\r\nOman Rook\r\nExecutive Investment Consultant/Director\r\nCateus Investment Company (CIC)\r\nPhone: +973-17-585338 | Email: oman-rook@cateusgroup.org or cateusgroup@gmail.com\r\nhttps://cateusinvestmentgroup.com\r\n\r\n\r\nCateus Investment Group | Home\r\nhttps://cateusinvestmentgroup.com'),
(143, 'AmandaExcinia', 'amandaCoonryc@gmail.com', '88212264773', 'Your fantasy awaits, just click....', 'Want to see more? Check my profile now. -  https://goo.su/zARWg?whiliak'),
(144, 'Jaunita Ingalls', 'ingalls.jaunita@gmail.com', '79', 'Is indianonlinemarket.com your site?', 'Hey  \r\n\r\nNot sure how much money indianonlinemarket.com  is making, but selling digital products is on fire.\r\n\r\nThe transaction value in the Digital Commerce market is projected to reach US$7.63 trillion in 2024. (Statistica.)\r\nThere is a simple 2-step method to make money selling high-profit, digital products in less than an hour per day.\r\n\r\nStart leveraging from this growing economy.\r\n\r\nLearn how here:\r\nhttps://hoply.io/Q5QNX\r\n'),
(145, 'AmandaExcini3', 'amandaCoonry3@gmail.com', '83625762281', 'Can’t stop thinking about you...', 'Explore my profile, let’s make it unforgettable. -  https://rb.gy/7rnhss?Siff'),
(146, 'Arnulfo Kort', 'kort.arnulfo@outlook.com', '308-544-4676', 'Dear indianonlinemarket.com Admin!', 'Still looking to get your WordPress website done, fixed, or completed? Reach out to us at e.solus@gmail.com & Prices starts @ $99!'),
(147, 'AmandaExcinib', 'amandaCoonry3@gmail.com', '86179921173', 'Can’t stop thinking about you...', 'Explore my profile, let’s make it unforgettable. -  https://goo.su/zARWg?whiliak'),
(148, 'Jada Darell', 'jadadarell@gmail.com', '6819284920', 'Facebook Promotion: 400 new followers each month', 'Hi there,\r\n\r\nWe run a Facebook growth service, which can increase your number of followers safely and practically.\r\n\r\nWe aim to gain you 400+ real human followers per month, with all actions safe as they are made manually (no bots).\r\n\r\nOur price is just $60 (USD) per month. We also offer an introductory trial, so you can see the process yourself first.\r\n\r\nIf you are interested, we are happy to send you some further information.\r\n\r\nKind Regards,\r\nJada'),
(149, 'AmandaExcinib', 'amandaCoonry3@gmail.com', '88692595792', 'Your fantasy awaits, just click....', 'Want to see more? Check my profile now. -  https://rb.gy/7rnhss?Siff'),
(150, 'AmandaExcinic', 'amandaCoonry1@gmail.com', '82345288323', 'Can’t stop thinking about you...', 'Explore my profile, let’s make it unforgettable. -  https://rb.gy/7rnhss?Siff'),
(151, 'Phil Stewart', 'noreplyhere@aol.com', '342-123-4456', '??', 'Hey, want your ad to reach millions of contact forms? Just like you\'re reading this message, others can read yours too. Visit my site below for details.\r\n\r\nhttp://wy3gzw.contactuspagemarketing.xyz'),
(152, 'AmandaExcinic', 'amandaCoonryc@gmail.com', '82589268137', 'Can’t stop thinking about you...', 'Explore my profile, let’s make it unforgettable. -  https://rb.gy/7rnhss?Siff'),
(153, 'AmandaExcini1', 'amandaCoonry2@gmail.com', '86795914374', 'Your fantasy awaits, just click....', 'Want to see more? Check my profile now. -  https://rb.gy/7rnhss?Siff'),
(154, 'Phil Stewart', 'noreplyhere@aol.com', '342-123-4456', '??', 'I can blast your ad to contact forms on sites in industries and locations of your choosing - 1 full month of service for less than $100 Get Info http://w4fepe.contactblasting-instantresults.xyz'),
(155, 'Nilda Lovelace', 'nilda.lovelace@gmail.com', '43', 'Hi indianonlinemarket.com Administrator!', 'Ready to take your business to the next level? Our financial solutions are designed to support your expansion with the best business loan packages tailored to your needs. Email us at info@financeworldwidehk.com to get started today!\r\n\r\nBest regards,\r\nLaura Cha'),
(156, 'AmandaExcini1', 'amandaCoonry1@gmail.com', '81744141887', 'Your fantasy awaits, just click....', 'Want to see more? Check my profile now. -  https://rb.gy/7rnhss?Siff'),
(157, 'Danny Paling', 'paling.danny@gmail.com', '5129124855', 'Supercharge Your Online Presence with Mintsuite – Limited Time Offer!', 'Hi there,\r\n\r\nWe’re excited to introduce Mintsuite, the ultimate platform to enhance your online presence and drive results. Mintsuite empowers you to create stunning websites, manage social media like a pro, and generate traffic effortlessly.\r\n\r\nCreate Stunning Websites\r\nManage Social Media Effortlessly\r\nGenerate Unlimited Traffic\r\n\r\nGrab Mintsuite now for just $16 (normally $180)!\r\n\r\nCheck out the amazing features of Mintsuite here: https://furtherinfo.info/mint\r\n\r\nThanks for your time,\r\nDanny'),
(158, 'Felicity Sauncho', 'felicitysauncho@gmail.com', '7848161325', 'Youtube Promotion: Grow your subscribers by 700 each month', 'Hi there,\r\n\r\nWe run a Youtube growth service, where we can increase your subscriber count safely and practically.\r\n\r\nWhat We Offer:\r\n\r\nGuaranteed Results: We guarantee to deliver between 700 and 1500 new subscribers each month, depending on which package you select.\r\nHigh-Quality Subscribers: Our subscribers are real people who are genuinely interested in your content.\r\nSafe and Ethical Practices: We use only ethical methods and avoid automated bots or spam.\r\n\r\nLimited-Time Trial: To give you a taste of our service, we\'re offering a short trial at no cost - as we limit the number of clients we accept per week, we only have 4 spots left for the free trial.\r\n\r\nIf you\'re interested please get back in touch soon.\r\n\r\nKind Regards,\r\nFelicity'),
(159, 'AmandaExcini1', 'amandaCoonrya@gmail.com', '86372733262', 'Your fantasy awaits, just click....', 'Want to see more? Check my profile now. -  https://rb.gy/7rnhss?Siff'),
(160, 'AmandaExcini1', 'amandaCoonry1@gmail.com', '82312919369', 'Your fantasy awaits, just click....', 'Want to see more? Check my profile now. -  https://rb.gy/7rnhss?Siff'),
(161, 'AmandaExcinic', 'amandaCoonry3@gmail.com', '89951776586', 'I’ve got a secret for you...', 'Come closer, find me waiting on my profile. -  http://girlsfunonline.online/?Siff'),
(162, 'AmandaExcini1', 'amandaCoonryb@gmail.com', '82173899714', 'Can’t resist? See me here...', 'Curious? Dive deeper and find me here now. -  https://rb.gy/ycu4is/?Siff'),
(163, 'AmandaExcini3', 'amandaCoonryb@gmail.com', '88426673827', 'I’ve got a secret for you...', 'Come closer, find me waiting on my profile. -  https://bit.ly/3Y2npoM?Siff'),
(164, 'AmandaExcinic', 'amandaCoonry2@gmail.com', '89866764384', 'I’ve got a secret for you...', 'Come closer, find me waiting on my profile. -  https://bit.ly/3Y2npoM?Siff'),
(165, 'AmandaExcini3', 'amandaCoonryb@gmail.com', '84581977989', 'Can’t resist? See me here...', 'Curious? Dive deeper and find me here now. -  https://rb.gy/ycu4is?Siff'),
(166, 'Merry Olson', 'olson.merry8@gmail.com', '673266571', 'Hello indianonlinemarket.com Webmaster.', 'FINANCIAL INSTRUMENT AND GLOBAL FUNDING\r\n\r\nWe at WEALTHY CREDIT LIMITED HONG KONG -For all your financial instruments -BG/SBLC/PPP ... Also monetization and NON RECOURSE cash loan\r\n10% for any referrals and also Intermediaries/Consultants/Brokers can apply with the company. We fund globally\r\nFor more info on Non Refund cash loan; \r\n\r\nThey are the best in the world, they also  give funding meeting face to face.\r\n\r\nFeel free to follow up and contact them for more details;\r\n\r\nCalls : +852 300 16439\r\nEmail : info@fastcapitalhk.com'),
(167, 'AmandaExcini1', 'amandaCoonryb@gmail.com', '86398844284', 'I’ve got a secret for you...', 'Come closer, find me waiting on my profile. -  https://rb.gy/ycu4is?Siff'),
(168, 'AmandaExcini1', 'amandaCoonry1@gmail.com', '89743689247', 'I’ve got a secret for you...', 'Come closer, find me waiting on my profile. -  https://rb.gy/ycu4is?Siff'),
(169, 'Barbara Hicks', 'barbarahicks362@gmail.com', '345813882', 'Elevate Your Brand: Expand Your Reach with Targeted Promotion', 'Hi,\r\n\r\nI\'ve visited indianonlinemarket.com and was wondering if you would be interested in promoting your site to our audience of up to 30 million?\r\n\r\nIn addition to this, we have over 3.4 million followers on social media where we can also promote your site.\r\n\r\nIf this is of interested, do not hesitate in replying back\r\n\r\nIf you are not interested, simply ignore this email.\r\n\r\nThanks,\r\nBarbara\r\n\r\nUnsubscribe: https://removeme.live/unsubscribe.php?d=indianonlinemarket.com'),
(170, 'AmandaExcini1', 'amandaCoonryb@gmail.com', '88861543382', 'Let\'s turn up the heat tonight... Just you and me ', 'I want you tonight... just the two of us, no distractions -  https://rb.gy/ycu4is?Siff'),
(171, 'Gary Charles', 'garycharles@dominatingkeywords.com', '8185327032', 'DominatingKeywords.com', 'I am not offering you SEO, nor PPC.\r\nThis is something completely different.\r\nJust send us keywords of your interest and your website banner instantly appears number one on Google and Bing search results without Pay Per Click charges.\r\nLet me show you how it works and you will be pleasantly surprised by the results.'),
(172, 'AmandaExcini2', 'amandaCoonry2@gmail.com', '85665173274', 'Tonight’s the night... I can’t wait to be with you ', 'I can\'t wait any longer... come over tonight and let\'s make it unforgettable. -  https://rb.gy/ycu4is?Siff'),
(173, 'AmandaExcini1', 'amandaCoonry1@gmail.com', '87129249738', 'Tonight’s the night... I can’t wait to be with you ', 'I can\'t wait any longer... come over tonight and let\'s make it unforgettable. -  https://rb.gy/ycu4is?Siff'),
(174, 'AmandaExcinic', 'amandaCoonrya@gmail.com', '87166423873', 'Let\'s turn up the heat tonight... Just you and me ', 'I want you tonight... just the two of us, no distractions -  https://rb.gy/ycu4is?Siff'),
(175, 'AmandaExcinic', 'amandaCoonrya@gmail.com', '89639191578', 'Tonight’s the night... I can’t wait to be with you ', 'I can\'t wait any longer... come over tonight and let\'s make it unforgettable. -  https://rb.gy/ycu4is?Siff'),
(176, 'AmandaExcini3', 'amandaCoonrya@gmail.com', '85934446981', 'Tonight’s the night... I can’t wait to be with you ', 'I can\'t wait any longer... come over tonight and let\'s make it unforgettable. -  https://rb.gy/ycu4is?Siff'),
(177, 'Felicity Sauncho', 'felicitysauncho@gmail.com', '1155332396', 'YouTube Promotion: 700-1500 new subscribers each month', 'Hi there,\r\n\r\nWe run a Youtube growth service, where we can increase your subscriber count safely and practically. \r\n\r\n- Guaranteed: We guarantee to gain you 700-1500 new subscribers each month.\r\n- Real, human subscribers who subscribe because they are interested in your channel/videos.\r\n- Safe: All actions are done, without using any automated tasks / bots.\r\n\r\nOur price is just $60 (USD) per month and we can start immediately.\r\n\r\nIf you are interested then we can discuss further.\r\n\r\nKind Regards,\r\nFelicity'),
(178, 'AmandaExcinib', 'amandaCoonryb@gmail.com', '84361778817', 'Tonight’s the night... I can’t wait to be with you ', 'I can\'t wait any longer... come over tonight and let\'s make it unforgettable. -  https://rb.gy/ycu4is?Siff'),
(179, 'Hubert Gomez', 'hubert.gomez@yahoo.com', '937 24 585', 'Hi indianonlinemarket.com Webmaster.', 'If you are reading this message, That means my marketing is working. I can make your ad message reach 5 million sites in the same manner for just $50. It\'s the most affordable way to market your business or services. Contact me by email virgo.t3@gmail.com or skype me at live:.cid.dbb061d1dcb9127a\r\n\r\nP.S: Speical Offer - ONLY for 24 hours - 10 Million Sites for the same money $50'),
(180, 'Lottie Thompson', 'lottiethompson2@mail.co.uk', '663618577', 'Facebook Promotion: 400 new followers each month', 'Hi, I hope you are well.\r\n\r\nWe run a Facebook growth service, which can increase your number of followers safely and practically.\r\n\r\nWe aim to gain you 400+ real human followers per month, with all actions safe as they are made manually (no bots).\r\n\r\nOur price is just $60 (USD) per month (no contract).\r\n\r\nIf you are interested, just reply back and we can discuss further.\r\n\r\nKind Regards,\r\nLottie'),
(181, 'Phil Stewart', 'noreplyhere@aol.com', '342-123-4456', '??', 'Want to get millions of people to visit your website or video economically?\r\n Reach out to me below if you want more details on how I make this happen.\r\n\r\nRegards,\r\nLesli Fajardo\r\nEmail: Lesli.Fajardo@morebiz.my\r\nWebsite: http://3glq7e.advertise-with-contactforms.pro\r\nSkype: marketingwithcontactforms'),
(182, 'AmandaExcini3', 'amandaCoonryc@gmail.com', '81218777792', 'Let\'s turn up the heat tonight... Just you and me ', 'I want you tonight... just the two of us, no distractions -  https://rb.gy/ycu4is?Siff'),
(183, 'Brandon Christensen', 'morrismi1@outlook.com', '0327 3561046', 'Hello indianonlinemarket.com Webmaster!', 'My name is Ahmet. I\'m a bank staff in a Turkish bank. I\'ve been looking for someone who has the same nationality as you. A citizen of your country died in the recent earthquake in Turkey, he had in our bank fixed deposit of $11.5 million. \r\n\r\nMy Bank management is yet to know of his death. If my bank executive finds out about his death ,They would use the funds for themselves and get richer and I would like to prevent that from happening only if I get your cooperation, I knew about it because I was his account manager. Last week my bank management held a meeting for the purpose of a bank audit to note the dormant and abandoned deposit accounts.  I know this will happen and that\'s why I\'m looking for a solution to deal with this situation because if my bank discovers his death, they will divert the funds to the board of directors.  I don\'t want that to happen. \r\n \r\nI request your cooperation to introduce you as the kin/heir of the account as you are of the same nationality as him.  There is no risk;  the transaction is carried out under a legal agreement that protects you from infringement. I suggest we split the funds, 60/40 and 40 for me. I need this fund for my daughter\'s surgery so keep this info confidential. email me so i can provide you with more info  ahmetaksoy1925@outlook.com'),
(184, 'AmandaExcinib', 'amandaCoonrya@gmail.com', '89498778738', 'Tonight’s the night... I can’t wait to be with you ', 'I can\'t wait any longer... come over tonight and let\'s make it unforgettable. -  https://rb.gy/ycu4is?Siff');
INSERT INTO `contact` (`id`, `name`, `email`, `mobile`, `subject`, `message`) VALUES
(185, 'Joanna Riggs', 'joannariggs278@gmail.com', '457978085', 'Video Promotion for indianonlinemarket.com', 'Hi,\r\n\r\nI just visited indianonlinemarket.com and wondered if you\'d ever thought about having an engaging video to explain what you do?\r\n\r\nOur prices start from just $195.\r\n\r\nLet me know if you\'re interested in seeing samples of our previous work.\r\n\r\nRegards,\r\nJoanna'),
(186, 'AmandaExcinib', 'amandaCoonryb@gmail.com', '82989693659', 'Tonight’s the night... I can’t wait to be with you ', 'I can\'t wait any longer... come over tonight and let\'s make it unforgettable. -  https://rb.gy/ycu4is?Siff'),
(187, 'AmandaExcinic', 'amandaCoonrya@gmail.com', '89146744474', 'Let\'s turn up the heat tonight... Just you and me ', 'I want you tonight... just the two of us, no distractions -  https://rb.gy/ycu4is?Siff'),
(188, 'Mason Baltes', 'mason.baltes60@outlook.com', '04.01.34.82.41', 'Dear indianonlinemarket.com Admin.', 'Unlock Stress-Free Website Management—Just $25/Month\r\n\r\nExperience worry-free web hosting with our fully managed service designed to keep your website secure, fast, and always up-to-date. For only $25/month, we handle everything—WordPress core, PHP, plugin, and theme updates—along with daily offsite backups, powerful firewall protection, and proactive malware removal.\r\n\r\nPlus, our free migration service ensures your current website transitions to our optimized server with zero downtime. With 24/7 monitoring, a dedicated server, and weekly performance reports, you stay informed without lifting a finger.\r\n\r\nStop wasting time on tech headaches—let us handle it all for you!\r\n\r\nhttps://bestwebsite.link/hosting'),
(189, 'Jenifer Gano', 'allenjeremy183@gmail.com', '077 0036 3890', 'Opportunity for Businesses Outside the USA.', 'Do you own and operate a business outside the USA? My name is Jeremy\r\nAllen from BNF Investments LLC, a Florida based Investment Company.\r\nWe are expanding our operations outside the USA hence; we are actively\r\nlooking for serious business owners operating outside the USA who are in\r\nneed of business funding or investments in their businesses for quick\r\naccess to funding.\r\n\r\nGet back to me if you are interested through my email:\r\njallen@bnfinvestmentsllc.com'),
(190, 'AmandaExcinia', 'amandaCoonrya@gmail.com', '82139625429', 'Tonight’s the night... I can’t wait to be with you ', 'I can\'t wait any longer... come over tonight and let\'s make it unforgettable. -  https://rb.gy/ycu4is?Siff'),
(191, 'AmandaExcinic', 'amandaCoonryc@gmail.com', '87159881598', 'Let\'s turn up the heat tonight... Just you and me ', 'I want you tonight... just the two of us, no distractions -  https://rb.gy/ycu4is?Siff'),
(192, 'Dwight Ackman', 'dwight.ackman@googlemail.com', '06-22142847', 'Your FREE 1-Month Premium Trial Awaits – Claim It Now!', 'Hi again indianonlinemarket.com Owner,\r\n\r\nWe’re thrilled to announce the launch of the all-new Leader CRM, and as a valued user, you and your team are invited to enjoy a free one-month trial of our premium subscription—no credit card required.\r\n\r\nThis latest version has powerful new features designed to streamline your sales process. In fact, Beta users have already reported a 42% increase in sales!\r\n\r\nWhat’s new in Leader CRM:\r\n\r\n    Multi-platform support (Android, iOS & web)\r\n    Automated workflows to save time\r\n    Advanced team collaboration tools\r\n    Easy file uploads directly into the CRM\r\n    Data-driven insights to improve performance\r\n    Full integration with Zapier for enhanced workflow\r\n\r\nYour upgrade is waiting—don’t miss this opportunity!\r\n\r\nClick here https://bit.ly/LeaderCRMLeads to claim your offer before it expires in just 48 hours.\r\n\r\nThis is your chance to take your sales process to the next level and grow your sales.\r\n\r\n Don’t let it slip away!\r\n\r\nDOWNLOAD NOW https://bit.ly/LeaderCRMLeads and experience the difference!\r\n\r\nOur dedicated support team support@leader.net is always here to help if you have any questions or need assistance.\r\n\r\n\r\n Keep being a Leader \r\nThe Leader Team'),
(193, 'Phil Stewart', 'noreplyhere@aol.com', '342-123-4456', '??', 'Need a way to get millions of people to view your ad without high expenses?\r\n Feel free to reach out if you’d like to dive deeper into how I do this; my contact info is below.\r\n\r\nRegards,\r\nCristina Barnum\r\nEmail: Cristina.Barnum@morebiz.my\r\nWebsite: http://rkpe7c.form-marketing.top\r\nSkype: marketingwithcontactforms'),
(194, 'AmandaExcinic', 'amandaCoonrya@gmail.com', '82714384275', 'Tonight’s the night... I can’t wait to be with you ', 'I can\'t wait any longer... come over tonight and let\'s make it unforgettable. -  https://rb.gy/ycu4is?Siff'),
(195, 'AmandaExcinib', 'amandaCoonry1@gmail.com', '83321239432', 'Let\'s turn up the heat tonight... Just you and me ', 'I want you tonight... just the two of us, no distractions -  https://rb.gy/ycu4is?Siff'),
(196, 'Matt Fowler', 'markus.fowler68@gmail.com', '717-234-1190', 'To the indianonlinemarket.com Admin!', 'Hello\r\n\r\nI hope this message finds you well. My name is Mathew Lundgren, and I am a Research Assistant in the Research and Development Department at Newton Laboratories Pro Ltd, a leading biopharmaceutical company based in London, England. I am reaching out to explore a potential partnership opportunity. \r\n\r\nWe are currently seeking a reliable business representative in your region to assist us in sourcing essential raw materials used in the production of high-quality antiviral vaccines, cancer treatments, and other life-saving pharmaceutical products. While this may be outside of your primary area of expertise, it offers a unique opportunity to diversify your business interests and generate additional income.\r\n\r\nOur company has been actively searching for a reputable supplier but has yet to establish a direct source. \r\n\r\nHowever, I have identified a local supplier who offers the necessary materials at a significantly lower cost compared to our previous purchases. This could present a mutually beneficial opportunity for both parties.\r\n\r\nIf you are interested in learning more about the profit structure and the specifics of this potential collaboration, please feel free to reach out. \r\n\r\nI would be happy to provide additional details at your convenience.\r\n\r\nThank you for considering this partnership, and I look forward to your response.\r\n\r\nMathew Lundgren\r\nResearch & Dev Dept\r\nNewton Laboratories Pro Ltd UK\r\n2 Kensington High Street,\r\nLondon, England, W8 4PT\r\nUnited Kingdom\r\nEmail: mathewlundgren@thegrampians.net'),
(197, 'Danielduada', 'bthnegdxrbx2fn5@tempmail.us.com', '83436773289', 'TomyAccount.com - Buy and Boost Your Digital Presence', 'Get the best deals on verified accounts at tomyAccount.com. Our accounts are perfect for boosting your social media, business, or personal projects. Visit tomyAccount.com and find the accounts that work for you, anywhere, anytime. \r\n \r\nRead more: \r\n \r\nhttps://tomyAccount.com \r\n \r\nThanks a lot!'),
(198, 'AmandaExcinia', 'amandaCoonry1@gmail.com', '84422545796', 'Tonight’s the night... I can’t wait to be with you ', 'I can\'t wait any longer... come over tonight and let\'s make it unforgettable. -  https://rb.gy/ycu4is?Siff'),
(199, 'Sonia Doyle', 'sonia.doyle@googlemail.com', '22-98-27-73', 'To the indianonlinemarket.com Admin!', 'Are you still looking at getting your website done/ completed? Contact e.solus@gmail.com\r\n\r\nStruggling to rank on Google? Our SEO experts can help. Contact es.olus@gmail.com'),
(200, 'Joanna Riggs', 'joannariggs278@gmail.com', '194864804', 'Video Promotion for indianonlinemarket.com?', 'Hi,\r\n\r\nI just visited indianonlinemarket.com and wondered if you\'d ever thought about having an engaging video to explain what you do?\r\n\r\nOur prices start from just $195.\r\n\r\nWe have produced over 500 videos to date and work with both non-animated and animated formats:\r\n\r\nNon-animated example:\r\nhttps://www.youtube.com/watch?v=bA2DyChM4Oc\r\n\r\nAnimated example:\r\nhttps://www.youtube.com/watch?v=JG33_MgGjfc\r\n\r\nLet me know if you\'re interested in learning more and/or have any questions.\r\n\r\nRegards,\r\nJoanna'),
(201, 'AmandaExcini2', 'amandaCoonry1@gmail.com', '86359543211', 'Let\'s turn up the heat tonight... Just you and me ', 'I want you tonight... just the two of us, no distractions -  https://rb.gy/ycu4is?Siff'),
(202, 'Phil Stewart', 'noreplyhere@aol.com', '342-123-4456', 'need help', 'Want to get your content in front of millions without high costs?\r\n Feel free to contact me using the details below if you want to learn more about my approach.\r\n\r\nRegards,\r\nRobbie Croll\r\nEmail: Robbie.Croll@morebiz.my\r\nWebsite: http://36def4.form-marketing.top\r\nSkype: marketingwithcontactforms'),
(203, 'Teddy Bueche', 'oskaroliver2023@outlook.com', '078 5713 6090', 'Hello indianonlinemarket.com Webmaster!', 'My name is James Broderick, and I am an attorney at Broderick & Associates LLP based in Canada. I am reaching out to discuss matters concerning your late relative payable on death.\r\n\r\nPlease feel free to contact me at your earliest convenience at the email address provided below for more information regarding their payable on death policy. Trust me it is something worthwhile you would like to hear. \r\n\r\nThank you for your attention to this matter. Contact me through my email to share more information with you about the payable on death.  jamesbroderick62@outlook.com\r\n\r\nBest regards,\r\nJames Broderick'),
(204, 'AmandaExcini3', 'amandaCoonrya@gmail.com', '87593572266', 'Can you handle what I have in mind tonight?', 'Been waiting to get closer to you, just us. -  https://rb.gy/ycu4is?Siff'),
(205, 'AmandaExcinia', 'amandaCoonry2@gmail.com', '86232417442', 'No Games, Just Good Vibes—Looking for a Connection That Clicks ❤️', 'I’m in the mood for something unforgettable—care to make it happen? -  https://rb.gy/ycu4is?Siff'),
(206, ' Crawford', 'keesha.kimbell5@gmail.com', '643576560', 'Inquiry', 'Hi, this is a friendly reminder that this is the last chance for USA based businesses to file their claim to receive compensation from the Visa/Mastercard $5.5 Billion Dollar settlement. You could potentially receive tens of thousands, hundreds of thousands or even millions in compensation based on your usage. https://visasettlementclaim.org'),
(207, 'AmandaExcini2', 'amandaCoonryb@gmail.com', '85493878649', 'Seeking a Genuine Connection: Let’s Share Laughter, Adventures, and Maybe More ❤️', 'Let’s meet somewhere quiet where we can let the night take us where it will -  https://rb.gy/ycu4is?Siff'),
(208, 'Junior Paxson', 'junior.paxson@outlook.com', '7702702953', 'Dear indianonlinemarket.com Administrator.', 'Hi, if your business hasn\'t submitted your claim for the $5.54 Billion Dollar Visa/Mastercard lawsuit settlement for charging customers excess fee\'s between 2004 and 2019, you can submit your claim here before the deadline expires soon. Note: You MUST be a USA based business to be eligible. https://visasettlementclaims.org\r\n'),
(209, 'Juli Acker', 'juli.acker@msn.com', '079 1987 8776', 'Hey indianonlinemarket.com, Quick Notiice', 'If you are reading this message, That means my marketing is working. I can make your ad message reach 5 million sites in the same manner for just $50. It\'s the most affordable way to market your business or services. Contact me by email virgo.t3@gmail.com or skype me at live:.cid.dbb061d1dcb9127a\r\n\r\nP.S: Speical Offer - ONLY for 24 hours - 10 Million Sites for the same money $50'),
(210, 'AmandaExcinic', 'amandaCoonryc@gmail.com', '87484752918', 'No Games, Just Good Vibes—Looking for a Connection That Clicks ❤️', 'I’m in the mood for something unforgettable—care to make it happen? -  https://rb.gy/ycu4is?Siff'),
(211, 'AmandaExcini3', 'amandaCoonryb@gmail.com', '84267191826', 'Looking for the Perfect Partner to Light Up My Night', 'If you’re ready for something real, I’m waiting to make it happen -  https://rb.gy/ycu4is?Siff'),
(212, 'Felicity Sauncho', 'felicitysauncho@gmail.com', '120422165', 'Youtube Promotion: Grow your subscribers by 700 each month', 'Hi there,\r\n\r\nWe run a Youtube growth service, where we can increase your subscriber count safely and practically. \r\n\r\n- Guaranteed: We guarantee to gain you 700-1500 new subscribers each month.\r\n- Real, human subscribers who subscribe because they are interested in your channel/videos.\r\n- Safe: All actions are done, without using any automated tasks / bots.\r\n\r\nOur price is just $60 (USD) per month and we can start immediately.\r\n\r\nIf you are interested then we can discuss further.\r\n\r\nKind Regards,\r\nFelicity'),
(213, 'Rochell Kean', 'kean.rochell@yahoo.com', '29-42-47-49', 'Hi indianonlinemarket.com Admin.', 'Hi,\r\n\r\nIf you\'ve fallen victim to an investment scam and lost money, you\'re not alone. Scammers are becoming more sophisticated, but there is hope. Our team specializes in helping individuals like you recover lost funds through legal avenues and professional recovery services.\r\n\r\nDon’t let the scam define your future. Contact us today for a confidential consultation. We’ll guide you step-by-step and work hard to help you reclaim what you’ve lost. Click here www.madacovi.co for more details\r\n\r\nTake action now. You deserve justice and a chance to move forward.\r\n\r\nBest regards,\r\nGerard Williams\r\nMadacovi Limited\r\nhelp@madacovi.co\r\nwww.madacovi.co'),
(214, 'AmandaExcini3', 'amandaCoonry1@gmail.com', '82434234455', 'Looking for a Connection That Sparks Passion', 'I’m ready to meet someone who knows how to make the night unforgettable. -  https://rb.gy/ycu4is?Siff'),
(215, 'Phil Stewart', 'noreplyhere@aol.com', '342-123-4456', 'question for you', 'Looking for a stress-free way to scale your business? Our contact form marketing automates your outreach, delivering your message to millions of websites effortlessly. No pay-per-click fees.\r\n\r\n Feel free to reach out via the info below for more information.\r\n\r\nRegards,\r\nAustin Stepp\r\nEmail: Austin.Stepp@morebiz.my\r\nWebsite: http://mqr2ru.advertise-with-contactforms.pro\r\nSkype: marketingwithcontactforms'),
(216, 'Elane Sessions', 'elane.sessions@gmail.com', '425753814', 'hello?', 'Hi, I hope you don\'t mind me reaching out through your contact form. I wanted to share some exciting news! Affordable Medical Access getama.online is now available everywhere in the USA!\r\nGet 24/7 access to English and Spanish-speaking doctors and behavioral health specialists for your entire household (up to 8 members) with:\r\n$0 deductible\r\n$0 copay\r\nJust $15.95/month!\r\nThank you for your time,\r\nAffordable Medical Access'),
(217, 'AmandaExcini2', 'amandaCoonry1@gmail.com', '81713293571', 'Ready for a Night of Fun and Possibility?', 'I’m looking for someone who wants the same spark I do -  https://rb.gy/es66fc?Siff'),
(218, 'Rae Farber', 'rae.farber@gmail.com', '0346 3272430', 'Hello indianonlinemarket.com Administrator!', 'Hi,\r\n\r\nI am a senior web developer, highly skilled and with 10+ years of collective web design and development experience, I work in one of the best web development company.\r\n\r\n\r\nMy hourly rate is $8\r\n\r\n\r\nMy expertise includes: \r\n\r\nWebsite design - custom mockups and template designs \r\nWebsite design and development - theme development, backend customisation \r\nResponsive website - on all screen sizes and devices \r\nPlugins and Extensions Development \r\nWebsite speed optimisation and SEO on-page optimisation \r\nWebsite security \r\nWebsite migration, support and maintenance \r\nIf you have a question or requirement to discuss, I would love to help and further discuss it. Please email me at e.solus@gmail.com\r\n\r\n\r\nRegards, \r\nSachin\r\ne.solus@gmail.com'),
(219, 'Libby Rosenbaum', 'libby.rosenbaum9@yahoo.com', '668465179', 'request', 'Hi, this is a friendly reminder it\'s your last chance to file your claim for the ERC / Employee Retention Tax Credit. This is money set aside that\'s owed to you by the US Government, which reimburses you up to $32,200 per W2 you kept on payroll during the pandemic. This is your last chance to claim your money: https://claim-erc.net'),
(220, 'Makayla Dethridge', 'makayla.dethridge@gmail.com', '(08) 8775 2699', 'To the indianonlinemarket.com Admin!', 'Let Us Take a Few Things Off Your Plate (Plus Black Friday Savings)\r\n\r\nUnlike your current host, Best Website goes above and beyond to support your business by including valuable extras as part of our fully managed WordPress hosting service, such as daily maintenance, plugin updates, security monitoring and unlimited technical support.\r\nSign up now for our industry-leading services and save 20% on 12 months of hosting with our special Black Friday pricing! \r\n\r\nhttps://bestwebsite.link/blackfriday'),
(221, 'AmandaExcini1', 'amandaCoonry2@gmail.com', '83443338199', 'Ready to Meet Someone Special Tonight?', 'Let’s turn the spark between us into something we can both feel. -  https://rb.gy/es66fc?Siff'),
(222, 'Jacquie Amato', 'jacquie.amato@gmail.com', '091 456 12 95', 'November 2024 Core Update: Crush Google\'s Update', 'Hi Mate,\r\n\r\n\"Traffic down, rankings down, revenue down, business down.\"\r\n\r\n\"Just as the new broad core update is rolling out, sales vanished while traffic is way up.\"\r\n\r\n\"We are free falling.\" \r\n\r\n\"Yes, looks like a drop. Ad revenue record low for November.” \r\n\r\n\"Big drop today. -40%.\" \r\n\r\n\"Yeah, a very big drop today. Seems like Google wants to ensure that they don’t lose any piece of the Christmas shopping cake.\"\r\n\r\n\"Anyone else seeing big changes for their sites at the moment? Traffic for our Indonesian speaking main site is down by nearly 50%\"\r\n\r\nWell, Google, hit you hard again, didn’t it?\r\n\r\nIf the above SEO chatter regarding the November 2024 Core Update hits a little too close to home then know this…\r\nWe stand by you.\r\nWe stand by you like always and are happy to report that we have massacred the Update of Google November 2024 Core Update.\r\n\r\n\r\nAs soon as the update hit the web, me and my team hit the SEO lab and started testing thousands of websites for various permutations and combinations.\r\n\r\nAND THE RESULTS ARE ASTOUNDING!\r\n\r\nWe are happy to share the fruits of labour with you so your money site doesn’t have to labour for revenue this Black Friday.\r\nCome, take a bite at it. Contact me at esolus@outlook.com\r\n\r\nSam\r\nesolus@outlook.com'),
(223, 'AmandaExcinic', 'amandaCoonry1@gmail.com', '89833383234', 'Searching for a Gentleman Who Knows What He Wants', 'Let’s turn the fantasy into a reality we can both enjoy -  https://rb.gy/es66fc?Siff'),
(224, 'Catharine Keighley', 'keighley.catharine@yahoo.com', '745439591', 'To the indianonlinemarket.com Admin!', 'Whether it’s funding, growth resources, or expert support, DAC has the financial services your business needs—all in one place.\r\n Check out our solutions here: https://www.davidallencapital.com/kristi\r\n\r\nStart building your success today!\r\n\r\n'),
(225, 'AmandaExcini1', 'amandaCoonry3@gmail.com', '83333242664', 'Searching for a Gentleman Who Knows What He Wants', 'Let’s turn the fantasy into a reality we can both enjoy -  https://rb.gy/es66fc?Siff'),
(226, 'AmandaExcini2', 'amandaCoonryb@gmail.com', '83874774148', 'Searching for the Right Guy to Heat Up My Evening', 'I can’t stop imagining the possibilities when we finally meet -  https://rb.gy/es66fc?Siff'),
(227, 'Alana Lavender', 'lavender.alana@msn.com', '0680 132 56 17', 'Hello indianonlinemarket.com Owner.', 'Hi indianonlinemarket.com owner,\r\n\r\nI hope you’re doing well.\r\n\r\nI’m reaching out from Virgo T3. We are looking to purchase backlinks from high-quality websites like yours, and after reviewing your site, we believe there’s a great opportunity for us to collaborate.\r\n\r\nWe are willing to pay for placing a link on your website that points to one of our high-quality resources. The payment will be based on the metrics of your site, and we are happy to discuss the terms further to ensure it works for both of us.\r\n\r\nHere are the details:\r\n\r\nLink Type: Contextual Backlink, within a blog post, etc.\r\nPayment: We will compensate you based on your site\'s metrics (e.g., traffic, DA, etc.).\r\nContent: We will provide a nicely written/ High quality copyscape passed content.\r\nIf you\'re interested, please let me know, and we can discuss the details and arrange payment accordingly.\r\n\r\nLooking forward to hearing from you! Email me at virgot.3@gmail.com\r\n\r\nBest regards,\r\nSam\r\nvirgot.3@gmail.com'),
(228, 'Katelyn Raiden', 'katelynraiden@gmail.com', '749971097', 'Youtube Promotion: 700 new subscribers each month', 'Hi there,\r\n\r\nWe run a YouTube growth service, which increases your number of subscribers both safely and practically.\r\n\r\n- We guarantee to gain you 700-1500+ subscribers per month.\r\n- People subscribe because they are interested in your channel/videos, increasing likes, comments and interaction.\r\n- All actions are made manually by our team. We do not use any \'bots\'.\r\n\r\n The price is just $60 (USD) per month, and we can start immediately.\r\n\r\nIf you have any questions, let me know, and we can discuss further.\r\n\r\nKind Regards,\r\nKatelyn'),
(229, 'Myles Dolling', 'morrismi1@outlook.com', '(69) 8887-6249', 'To the indianonlinemarket.com Administrator.', 'My name is Ahmet. I\'m a bank staff in a Turkish bank. I\'ve been looking for someone who has the same nationality as you. A citizen of your country died in the recent earthquake in Turkey, he had in our bank fixed deposit of $11.5 million. \r\n\r\nMy Bank management is yet to know of his death. If my bank executive finds out about his death ,They would use the funds for themselves and get richer and I would like to prevent that from happening only if I get your cooperation, I knew about it because I was his account manager. Last week my bank management held a meeting for the purpose of a bank audit to note the dormant and abandoned deposit accounts.  I know this will happen and that\'s why I\'m looking for a solution to deal with this situation because if my bank discovers his death, they will divert the funds to the board of directors.  I don\'t want that to happen. \r\n \r\nI request your cooperation to introduce you as the kin/heir of the account as you are of the same nationality as him.  There is no risk;  the transaction is carried out under a legal agreement that protects you from infringement. I suggest we split the funds, 60/40 and 40 for me. I need this fund for my daughter\'s surgery so keep this info confidential. email me so i can provide you with more information. ahmetturkiye1974@outlook.com'),
(230, 'Jesse Houchens', 'houchens.jesse@yahoo.com', '628426949', 'looking for clarification', 'Don\'t miss out—boost your website traffic with real PPV visitors today! Spots are limited, so act fast to grow your audience before it\'s too late!  \r\nGet started now: http://realhumanwebtraffic.top '),
(231, 'Kathleen Spaull', 'spaull.kathleen@gmail.com', '487182517', 'inquiry', 'Don’t Let High Upfront Costs Cost You Clients\r\nEvery time a client hesitates because of upfront costs, you’re losing potential revenue. Without offering flexible financing, you risk watching your competitors gain the business you deserve. With Client Financing and Credee, you can turn hesitant prospects into committed clients and avoid losing out on valuable opportunities.\r\n\r\nTake action now before you lose more business!\r\n\r\n✅ Key Features:\r\n\r\nFlexible plans for clients\r\nIncreased conversions\r\nStress-free financing management\r\n Explore now:\r\n\r\nhttp://gc5qh8.credeefastapproval.top\r\nhttp://78hwr8.clientfinancing-quickapproval.top\r\n'),
(232, 'Philomena Witte', 'witte.philomena2@gmail.com', '608-833-8411', 'Dear indianonlinemarket.com Administrator.', 'Are you still looking at getting your website done/ completed? Contact e.solus@gmail.com\r\n\r\nStruggling to rank on Google? Our SEO experts can help. Contact es.olus@gmail.com'),
(233, 'Dustin Lankford', 'morrismi1@outlook.com', '02.52.44.33.63', 'Assets/payment handler. ', 'A remote job opportunity for a Law Firm, the role of a Payment/Deposit Handler. This position involves managing payments and deposits, ensuring accurate processing, and maintaining financial record. This position is only for candidates based in the US. \r\n\r\nJob location:  USA \r\nWeekly wages: $2,150 per week.\r\n\r\nWe are looking for a detail-oriented individual with a good background and no criminal record.\r\n\r\nIf you are interested in joining our team, please send an email to get more details  jasonmorris001@aol.com\r\n\r\nRegards.\r\n'),
(234, 'Nikole Langston', 'langston.nikole@gmail.com', '0369 2428101', 'To the indianonlinemarket.com Admin.', 'We improve MOZ  Domain authority 30+ in 15 Days its help to improve google rank, improve your website SEO, and you get traffic from google \r\n\r\nDA - 0 to 30 - (Only $29) - Yes, Limited time !!\r\n\r\n>> 100% Guarantee \r\n>> Improve Ranking \r\n>> White Hat Process \r\n>> Permanent Work\r\n>> 100% Manual Work \r\n>> 0% Spam score increase \r\n\r\n\r\n⚡ From our work your website keyword get rank on google and get organic traffic from google through keywords\r\n\r\nContact now: intrug@gmail.com'),
(235, 'Joanna Riggs', 'joannariggs278@gmail.com', '5034530420', 'Explainer Video for your website?', 'Hi,\r\n\r\nI just visited indianonlinemarket.com and wondered if you\'d ever thought about having an engaging video to explain what you do?\r\n\r\nOur prices start from just $195.\r\n\r\nLet me know if you\'re interested in seeing samples of our previous work. If you are not interested, just use the link at the bottom.\r\n\r\nRegards,\r\nJoanna\r\n\r\nUnsubscribe: https://removeme.live/unsubscribe.php?d=indianonlinemarket.com'),
(236, 'Jennie Quilty', 'jennie.quilty@gmail.com', '021 530 66 76', 'Hey indianonlinemarket.com, Quick Notiice', 'If you are reading this message, That means my marketing is working. I can make your ad message reach 5 million sites in the same manner for just $50. It\'s the most affordable way to market your business or services. Contact me by email virgo.t3@gmail.com or skype me at live:.cid.dbb061d1dcb9127a\r\n\r\nP.S: Speical Offer - ONLY for 24 hours - 10 Million Sites for the same money $50'),
(237, 'Jc Servin', 'jc.servin58@yahoo.com', '884589411', 'have a query', 'Hey there, I apologize for using your contact form, but I wasn\'t sure who the right person was to speak with in your company.\r\n\r\nI want to ask you if you\'re interested in buying/renting Google Ads accounts with free spending ads credit limit of 10k monthly on each account ($329 daily budget & $120k a year of free ppc ads spend limit) for a very cheap price starting at $500-$1000? It works for all types of Google Ads policy niches like E-Commerce stores, affiliate marketing, dropshipping ads, lead generation, etc... in the search ads placement (website traffic or call leads). The best Google Ads placement feature to easily boost your online digital presence and business.\r\n \r\n\r\nLet\'s connect on FB and check out my recent post: http://fbpost2024.xyz   \r\n\r\nWant more info: http://ad-accounts2024.xyz\r\n\r\nIf you\'re interested or have any questions private email me at 1800ivanr@gmail.com \r\n\r\nLearn more about me -  http://successwithivan.xyz\r\n\r\nSubscribe to my YouTube channel: http://yt-ivanramirez.xyz\r\n\r\n\r\nThanks & Regards,\r\nIvan Ramirez\r\n'),
(238, 'Kiara Falconer', 'morrismi1@outlook.com', '02.71.99.40.47', 'Hello indianonlinemarket.com Webmaster!', 'My name is Ahmet. I\'m a bank staff in a Turkish bank. I\'ve been looking for someone who has the same nationality as you. A citizen of your country died in the recent earthquake in Turkey, he had in our bank fixed deposit of $11.5 million. \r\n\r\nMy Bank management is yet to know of his death. If my bank executive finds out about his death ,They would use the funds for themselves and get richer and I would like to prevent that from happening only if I get your cooperation, I knew about it because I was his account manager. Last week my bank management held a meeting for the purpose of a bank audit to note the dormant and abandoned deposit accounts.  I know this will happen and that\'s why I\'m looking for a solution to deal with this situation because if my bank discovers his death, they will divert the funds to the board of directors.  I don\'t want that to happen. \r\n \r\nI request your cooperation to introduce you as the kin/heir of the account as you are of the same nationality as him.  There is no risk;  the transaction is carried out under a legal agreement that protects you from infringement. I suggest we split the funds, 60/40 and 40 for me. I need this fund for my daughter\'s surgery so keep this info confidential. email me so i can provide you with more information. ahmetturkiye1974@outlook.com\r\n'),
(239, 'Selene Pettway', 'selene.pettway@gmail.com', '079 4318 7099', 'From Someday to Success', 'Do you have a project you’ve been dreaming of completing for years? A book you want to write or publish? A business you’re ready to start or grow? Imagine having your own dedicated team to help you get it across the finish line.\r\nAt WCD Marketing, we offer Accountability Coaching designed to turn your ideas into achievements. From “someday” to “success.”  We know how easy it is for goals to stall when life gets busy, and that’s why we’re here to keep you focused, motivated, and moving forward.\r\nWhether it’s a creative project, a business venture, or a personal milestone, our proven strategies and expert guidance will help you overcome obstacles, stay on track, and achieve the success you’ve envisioned. We don’t just set goals; we make them happen—together.\r\nDon’t let another year pass with your dreams on hold. Contact us today and take the first step toward making your vision a reality.  Contact me at wilene@wcdenterprises.com or WCD Marketing and let’s start your journey to success.\r\nYour breakthrough is waiting—let’s make it happen!\r\n\r\n----------------\r\nHere is the link to the form\r\nhttps://wcdmarketing.com/contact/'),
(240, 'Basil Medland', 'basil.medland@googlemail.com', '0330 2809160', 'To the indianonlinemarket.com Owner!', 'Hi,\r\n\r\nAt Cloud Animations, we specialize in high-quality 2D/3D animation, CGI/VFX, and motion graphics.\r\nWith 60+ experts and advanced tech-driven animation, we deliver faster turnarounds and exceptional results for today\'s and tomorrow\'s brands.\r\n\r\nFrom explainer videos to architectural visualization, motion graphics, anime, and 3D animation, we redefine narratives with groundbreaking results.\r\n\r\nLet’s collaborate and hit the home run!\r\n\r\nmike@cloudanimations.com\r\n(332) 208-1772'),
(241, 'Jaime Moulton', 'moulton.jaime@gmail.com', '7337862333', 'query', 'Effective advertising doesn’t have to cost a fortune. Send your ad text to millions of website contact forms for a single flat rate. No more wasting money on pay-per-click. Your message gets read.\r\n\r\n Reach out today to find out how this works—my info is below.\r\n\r\nRegards,\r\nJaime Moulton\r\nEmail: Jaime.Moulton@uniqueadvertising.pro\r\nWebsite: http://v854r6.marketing-with-contactforms.top\r\n'),
(242, 'Conrad Tiegs', 'conrad.tiegs@gmail.com', '478-993-9160', 'Hello indianonlinemarket.com Owner.', 'Struggling to rank on Google? Our high-quality backlink services will push your site to the top. Trusted by businesses worldwide! Start now and watch your traffic soar! \r\n\r\nWe Create 1200 Backlinks for you in Just $12\r\n\r\n> Boost Google Ranking\r\nGet HIGH-QUALITY backlinks for any website\r\nBacklink works for GMB, MAP, Youtube Videos ALSO\r\nBacklinks from Blogs, Wiki Articles, Social BookMarking etc\r\nReport within 10 days\r\n\r\nBoost Your Website Visitor And REVENUE\r\n\r\nContact us at intrug@gmail.com'),
(243, 'Katelyn Raiden', 'katelynraiden81@gmail.com', '8199493571', 'YouTube Promotion: Grow your subscribers by 700-1500 each month', 'Hi there,\r\n\r\nWe run a YouTube growth service, which increases your number of subscribers both safely and practically.\r\n\r\n- We guarantee to gain you 700-1500+ subscribers per month.\r\n- People subscribe because they are interested in your channel/videos, increasing likes, comments and interaction.\r\n- All actions are made manually by our team. We do not use any \'bots\'.\r\n\r\nThe price is just $60 (USD) per month, and we can start immediately.\r\n\r\nIf you have any questions, let me know, and we can discuss further.\r\n\r\nKind Regards,\r\nKatelyn'),
(244, 'Joanna Riggs', 'joannariggs278@gmail.com', '44034088', 'Video Promotion for indianonlinemarket.com?', 'Hi,\r\n\r\nI just visited indianonlinemarket.com and wondered if you\'d ever thought about having an engaging video to explain what you do?\r\n\r\nOur videos cost just $195 for a 30 second video ($239 for 60 seconds) and include a full script, voice-over and video.\r\n\r\nI can show you some previous videos we\'ve done if you want me to send some over. Let me know if you\'re interested in seeing samples of our previous work.\r\n\r\nRegards,\r\nJoanna'),
(245, 'Tracey Kaur', 'tracey.kaur@yahoo.com', '070 6622 6721', 'To the indianonlinemarket.com Admin!', 'Would you like this New Year to be the year you let go of your hurtful past?  Make the resolution to make the change to become your Best Self.\r\n\r\n     Have you heard of Se-REM? (Self effective - Rapid Eye Movement). Many people don\'t know that REM brain activity dramatically improves the processing of traumatic emotion. It creates peace and empowers the listener. Se-REM is an advanced version of EMDR therapy. It is more powerful because it combines elements of 6 different therapies, EMDR, hypnosis, mindfulness, Gestalt child within work, music therapy, and Awe therapy,(connecting profoundly with nature).\r\n     It has helped thousands of people overcome PTSD, and anxiety. But it is also helpful in a great many situations, any experience that has been traumatic.  Se-REM\'s mission statement is \"Trauma relief at as close to free as possible\". This not-for-profit program downloads to a smart phone or computer and can be used at home.         \r\n      Read and download at: https://Se-REM.com.   Once you own the program, you are encouraged to give it away to others who will benefit. \r\nhttps://Se-REM.com  is in use in 33 countries.'),
(246, 'Octavia Rix', 'octavia.rix@gmail.com', '416-985-5830', 'Dear indianonlinemarket.com Admin.', 'Hi,\r\n\r\nI am a senior web developer, highly skilled and with 10+ years of collective web design and development experience, I work in one of the best web development company.\r\n\r\n\r\nMy hourly rate is $8\r\n\r\n\r\nMy expertise includes: \r\n\r\nWebsite design - custom mockups and template designs \r\nWebsite design and development - theme development, backend customisation \r\nResponsive website - on all screen sizes and devices \r\nPlugins and Extensions Development \r\nWebsite speed optimisation and SEO on-page optimisation \r\nWebsite security \r\nWebsite migration, support and maintenance \r\nIf you have a question or requirement to discuss, I would love to help and further discuss it. Please email me at e.solus@gmail.com\r\n\r\n\r\nRegards, \r\nSachin\r\ne.solus@gmail.com'),
(247, 'AmandaExcinib', 'amandaCoonry1@gmail.com', '84592754426', 'I want to feel the heat between us tonight  ❤️', 'I’m in the mood for something sweet and spicy… you?  -  https://rb.gy/es66fc?Siff'),
(248, 'Luciana Fairbairn', 'fairbairn.luciana@gmail.com', '3012741706', 'need information', 'Reach millions of customers effortlessly. We send your ad text directly to website contact forms for a flat rate - no per click charges. Your message will be seen, just like you\'re reading this one right now.\r\n\r\n Let’s connect—contact me using the information provided below.\r\n\r\nRegards,\r\nLuciana Fairbairn\r\nEmail: Luciana.Fairbairn@uniqueadvertising.pro\r\nWebsite: http://vwde5k.advertiseviaforms.my\r\n'),
(249, 'Matt Strom', 'strom.arturo74@googlemail.com', '(03) 6271 0245', 'To the indianonlinemarket.com Admin!', 'Hello\r\n\r\nI hope this message finds you well. My name is Mathew, and I am a Research Assistant in the Research and Development Department one of the leading biopharmaceutical company based in London, England. I am reaching out to explore a potential partnership opportunity. \r\n\r\nWe are currently seeking a reliable business representative in your region to assist us in sourcing essential raw materials used in the production of high-quality antiviral vaccines, cancer treatments, and other life-saving pharmaceutical products. While this may be outside of your primary area of expertise, it offers a unique opportunity to diversify your business interests and generate additional income.\r\n\r\nOur company has been actively searching for a reputable supplier but has yet to establish a direct source. \r\n\r\nHowever, I have identified a local supplier who offers the necessary materials at a significantly lower cost compared to our previous purchases. This could present a mutually beneficial opportunity for both parties.\r\n\r\nIf you are interested in learning more about the profit structure and the specifics of this potential collaboration, please feel free to reach out. \r\n\r\nI would be happy to provide additional details at your convenience.\r\n\r\nThank you for considering this partnership, and I look forward to your response.\r\n\r\nMathew Lundgren\r\nResearch & Dev Dept\r\nEmail: mathew@mathewlundgren.com'),
(250, 'Dwain Torrez', 'dwain.torrez@outlook.com', '61-50-78-62', 'To the indianonlinemarket.com Admin.', 'Would you like this New Year to be the year you let go of your hurtful past?  Make the resolution to make the change to become your Best Self.\r\n\r\n     Have you heard of Se-REM? (Self effective - Rapid Eye Movement). Many people don\'t know that REM brain activity dramatically improves the processing of traumatic emotion. It creates peace and empowers the listener. Se-REM is an advanced version of EMDR therapy. It is more powerful because it combines elements of 6 different therapies, EMDR, hypnosis, mindfulness, Gestalt child within work, music therapy, and Awe therapy, (connecting profoundly with nature).  Classical music alternates between the ears to enhance daydreaming and visualizing in ways you have never experienced.\r\n\r\n     It has helped thousands of people overcome PTSD, and anxiety. But it is also helpful in a great many situations, any experience that has been traumatic.  Se-REM\'s mission statement is \"Trauma relief at as close to free as possible\". This not-for-profit program downloads to a smart phone or computer and can be used at home.         \r\n\r\n      Read and download at: Se-REM.com.   Once you own the program, you are encouraged to give it away to others who will benefit. \r\n\r\nSe-REM.com  is in use in 33 countries.'),
(251, 'Ngan Meador', 'ngan.meador@googlemail.com', '412334371', 'Unleash Your Creativity: Effortlessly Create Engaging Videos with AI', 'Hi,\r\n\r\nI\'ve just been on indianonlinemarket.com and wondered if you\'d thought about creating a video to explain what you do?\r\n\r\nTrusted by over 25 million users worldwide, our software takes the hassle out of video creation, allowing you to focus on what matters most - your message.\r\n\r\n1. Turn any idea into a video in minutes: Describe your concept, and watch as Invideo generates a high-quality video.\r\n2. Make changes with simple text prompts, just like you\'d instruct a video editor.\r\n3. Create in multiple languages: Prompt and generate videos in your preferred language, or translate existing videos into 30+ languages!\r\n4. Clone your voice with AI: Maintain consistency and save time with AI-powered voice cloning.\r\n5. Full video solution in one tool: Generate, edit, collaborate, and more - all within Invideo AI.\r\n\r\nLearn more and try it FREE: https://furtherinfo.info/p3hn\r\n\r\nRegards,\r\nNgan'),
(252, 'Marissa Baddeley', 'marissa.baddeley40@gmail.com', '4098319267', 'Need a hand here!', 'Need to create stunning videos? Want high-quality content at your fingertips? Check out these 3 Amazing AI Tools: \r\n**Create videos in minutes  \r\n**Generate content  \r\n**Convert text to speech  \r\nTry them now and get professional results instantly! http://3amazingaitools.top/\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `coupen_code`
--

CREATE TABLE `coupen_code` (
  `id` int(11) NOT NULL,
  `name` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(110) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `addeddate` datetime NOT NULL,
  `modifieddate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupen_code`
--

INSERT INTO `coupen_code` (`id`, `name`, `amount`, `type`, `status`, `addeddate`, `modifieddate`) VALUES
(1, 'admin', '5', 2, 1, '2022-10-03 07:11:44', '2023-04-14 05:35:34'),
(2, 'test', '100', 1, 1, '2022-10-03 10:50:56', '0000-00-00 00:00:00'),
(3, 'Azmal', '10', 1, 1, '2022-12-05 12:47:38', '2023-05-31 09:25:16');

-- --------------------------------------------------------

--
-- Table structure for table `finalorder`
--

CREATE TABLE `finalorder` (
  `id` int(11) NOT NULL,
  `channel_order_id` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipment_id` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `vendor_id` int(11) DEFAULT NULL,
  `user_id` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_id` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` text COLLATE utf8mb4_unicode_ci,
  `lastname` text COLLATE utf8mb4_unicode_ci,
  `companyname` text COLLATE utf8mb4_unicode_ci,
  `country` text COLLATE utf8mb4_unicode_ci,
  `house_no` text COLLATE utf8mb4_unicode_ci,
  `street_address` text COLLATE utf8mb4_unicode_ci,
  `town_city` text COLLATE utf8mb4_unicode_ci,
  `zip` text COLLATE utf8mb4_unicode_ci,
  `state` text COLLATE utf8mb4_unicode_ci,
  `mobile` text COLLATE utf8mb4_unicode_ci,
  `email` text COLLATE utf8mb4_unicode_ci,
  `order_notes` text COLLATE utf8mb4_unicode_ci,
  `coupon_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coupon_type` int(11) DEFAULT NULL,
  `coupon_type2` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coupon_amount` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping_charge` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_total` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cart_discount` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `finalprice` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `after_discount_final_price` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_method` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `addeddate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `finalorder`
--

INSERT INTO `finalorder` (`id`, `channel_order_id`, `shipment_id`, `vendor_id`, `user_id`, `order_id`, `firstname`, `lastname`, `companyname`, `country`, `house_no`, `street_address`, `town_city`, `zip`, `state`, `mobile`, `email`, `order_notes`, `coupon_name`, `coupon_type`, `coupon_type2`, `coupon_amount`, `shipping_charge`, `sub_total`, `cart_discount`, `finalprice`, `after_discount_final_price`, `payment_method`, `status`, `addeddate`) VALUES
(68, '1705392931', '468955852', NULL, '07280b5eins7v86e7cks5vic1sbfus5e', '1705392931', 'Manshi', 'Sidhu ', '', 'India', NULL, 'Konark enclave block D sec 17,Vasundhara Ghaziabad ', 'Ghaziabad ', '201012', 'Uttar Pradesh', '9871722280', 'www.Rabjotkaur88@gmail.com', '', NULL, NULL, NULL, NULL, '0', '845', NULL, '845', '845', 2, 4, '2024-01-16'),
(70, '1705394527', '468973549', NULL, 'fnkfvbh65e2dnb0ma6do7oqbmcnp99kp', '1705394527', 'Rakshita', 'Singhal', '', 'India', NULL, 'Rz-33A (1st floor) manas kunj uttam nagar near sunil dairy new Delhi 110059', 'Delhi', '110059', 'Dl', '8700261050', 'rakshitasinghal67@gmail.com', '', NULL, NULL, NULL, NULL, '0', '295', NULL, '295', '295', 2, 4, '2024-01-16'),
(72, '1705416281', '469171866', NULL, '2eq0fq9425o51cfnqvr73r3r4do1jqon', '1705416281', 'Vaishnavi ', 'Baranwal', '', 'India', NULL, 'Ck49/4R bhuletan Varanasi ', 'Varanasi ', '221001', 'Uttar Pradesh ', '8840422385', 'vaishnavibaranwal@gmail.com', '', NULL, NULL, NULL, NULL, '0', '889', NULL, '889', '889', 2, 4, '2024-01-16'),
(78, '1706975731', '479675890', NULL, '5l5u5rn2g8ev5rcqusjnsc65qvma3n56', '1706975731', 'Nida', 'Hun', 'Bansara eye care', 'India', NULL, 'Khliehriat Bansara eye care Khliehriat West', 'Shillong ', '793160', 'Meghalaya ', '6909115343', 'nidahun149@gmail.com', '', NULL, NULL, NULL, NULL, '0', '290', NULL, '290', '290', 2, 4, '2024-02-03'),
(79, '', '', NULL, 'c1edca5j05ogh27kbn37c7s11mc1btho', '1707040041', 'Dharitri ', 'Buragohain ', '', 'India', NULL, 'Lakwa pothaligarh chiring Gaon...Near Chiring Gaon health centre ', 'Sivasagar ', '785685', 'Assam ', '6003581093', 'dhanburagohain2001@gmail.com', '', NULL, NULL, NULL, NULL, '0', '299', NULL, '299', '299', 2, 4, '2024-02-04'),
(105, '1707070186', '480217101', NULL, 'iaangimav5d61q9l6a1t1jvs9g4l7vcs', '1707070186', 'Prinsha ', 'Pradeep', '', 'India', NULL, 'Valappil ho, makkada po, kakkodi , Kozhikode.. 673611: near by valappil colony road', 'Kozhikode ', '673611', 'Kerala', '9633044113', '', '', NULL, NULL, NULL, NULL, '0', '249', NULL, '249', '249', 2, 4, '2024-02-04'),
(106, '', '', NULL, '48djic82i6tsuln2euu7qtgcib4kup7n', '1707105643', 'Robinachanu', 'Takhellambam', '', 'India', NULL, 'Mit girls hostel \r\nManipur university', 'Imphal', '795003', 'Manipur', '8415864320', 'robinatakhellambam@gmail.com', '', NULL, NULL, NULL, NULL, '0', '349', NULL, '349', '349', 2, 4, '2024-02-05'),
(119, '', '', NULL, 'td160f8q5hukjo8pcuqs789rfonje06g', '1707652389', 'Tia ', 'Soni', 'No company ', 'India', NULL, 'Pes living space unit 2, girningar, Bengaluru, 560085', 'Bengaluru ', '', '560085', '810576824', 'tiasoni072@gmail.com', '', NULL, NULL, NULL, NULL, '0', '598', NULL, '598', '598', 2, 4, '2024-02-11'),
(120, '1707901835', '486028357', NULL, 'spqtg10npulo3opjin09g5fbue48tkf8', '1707901835', 'Shweta', 'Garg', 'Amazon store ', 'India', NULL, 'Near gol bazar Amazon store, Anil communication.. ', 'Mandi dabwali ', '125104', 'Haryana ', '9728515000', 'shwetagarg2303@gmail.com', '', NULL, NULL, NULL, NULL, '0', '398', NULL, '398', '398', 2, 4, '2024-02-14'),
(128, '', '', NULL, 'hukochgj9o4isk1hqoijds9rr9j2ia8i', '1709126601', 'Aayushi', 'Sharma', '', 'India', NULL, 'House no 8, Geeta bhawan, behind navrang petrol pump, angira nagar, nasirabad road, ajmer', 'Ajmer', '', 'Rajasthan', '8005937098', 'aayushigupta1917@gmail.com', '', NULL, NULL, NULL, NULL, '0', '1099', NULL, '1099', '1099', 2, 4, '2024-02-28'),
(140, '', '', NULL, '07avsgrg8mupjsrsg01lfmfgrehfjbkt', '1714041711', 'Sonia ', 'Garg', 'Radhe radhe trading company ', 'India', NULL, 'Vineet garg\r\nRadhe radhe trading company \r\nNear bus stand\r\nTohana\r\nFatehbaad', 'Tohana', '125120', 'Haryana', '7988787131', 'soniaaggarwal680@gmail.com', '', NULL, NULL, NULL, NULL, '0', '949', NULL, '949', '949', 2, 4, '2024-04-25'),
(148, '', '', NULL, '15', '1728887922', 'tet', 'Wolverine', 'X-men', 'India', NULL, '123 Company Address\r\ntest', 'North Delhi', '110054', 'DELHI', '123654789', 'compony@gmail.com', 'tes', NULL, NULL, NULL, NULL, '0', '1227', NULL, '1227', '1227', 1, 6, '2024-10-14'),
(153, '', '', NULL, 'tbokmflun1ev6neu915tv4g65jf3mp5t', '1729176146', 'Manmeet', 'Kaur', '', 'India', NULL, 'C-2404 Ratan Pearls ', 'GAUTAM BUDDHA NAGAR', '201306', 'UP', '9911407107', 'manmeetnonupai@gmail.com', 'Please give it to Navjyot ', NULL, NULL, NULL, NULL, '100', '479', NULL, '579', '579', 1, 0, '2024-10-17'),
(154, '', '', NULL, '22', '1729176456', 'Manmeet', 'Kaur', '', 'India', NULL, 'Hand delivery ', 'GAUTAM BUDDHA NAGAR', '201306', 'UP', '9911407107', 'manmeetnonupai@gmail.com', '', NULL, NULL, NULL, NULL, '100', '479', NULL, '579', '579', 1, 1, '2024-10-17');

-- --------------------------------------------------------

--
-- Table structure for table `instagram`
--

CREATE TABLE `instagram` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `status` int(11) NOT NULL,
  `addeddate` datetime NOT NULL,
  `modifieddate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `instagram`
--

INSERT INTO `instagram` (`id`, `image`, `status`, `addeddate`, `modifieddate`) VALUES
(6, '1704528066.png', 1, '2024-01-04 11:26:40', '2024-01-06 01:31:06'),
(7, '1704528071.png', 1, '2024-01-06 01:31:11', '0000-00-00 00:00:00'),
(8, '1704528076.png', 1, '2024-01-06 01:31:16', '0000-00-00 00:00:00'),
(9, '1704528080.png', 1, '2024-01-06 01:31:20', '0000-00-00 00:00:00'),
(10, '1704528085.png', 1, '2024-01-06 01:31:25', '0000-00-00 00:00:00'),
(11, '1704528090.png', 1, '2024-01-06 01:31:30', '0000-00-00 00:00:00'),
(12, '1726654739.png', 0, '2024-09-18 03:48:59', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `marquee`
--

CREATE TABLE `marquee` (
  `id` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `title` text NOT NULL,
  `status` int(11) NOT NULL,
  `addeddate` datetime NOT NULL,
  `modifieddate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `marquee`
--

INSERT INTO `marquee` (`id`, `type`, `title`, `status`, `addeddate`, `modifieddate`) VALUES
(1, 1, 'hello', 1, '2024-10-11 12:40:53', '2024-10-11 12:42:07'),
(2, 2, 'SALE 70% OFF', 1, '2024-10-11 12:52:02', '0000-00-00 00:00:00'),
(3, 1, '999 above free shipping', 1, '2024-10-11 12:54:06', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `offer_banners`
--

CREATE TABLE `offer_banners` (
  `id` int(11) NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `addeddate` datetime NOT NULL,
  `modifieddate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `offer_banners`
--

INSERT INTO `offer_banners` (`id`, `image`, `title`, `link`, `status`, `addeddate`, `modifieddate`) VALUES
(9, '1729588906.png', 'Formal Wear', 'https://indianonlinemarket.com/shop/winter-wear', 0, '2024-01-08 02:04:46', '2024-10-22 02:54:41'),
(11, '1709978855.jpeg', 'Formal Wear ', 'https://indianonlinemarket.com/shop/formal-wear', 0, '2024-01-17 11:45:06', '2024-10-22 02:53:43'),
(13, '1718350369.png', 'Co-ord set ', 'https://indianonlinemarket.com/shop/co-ord-set', 1, '2024-02-04 07:27:29', '2024-06-14 01:03:21'),
(15, '1718355535.png', 'Vibe Desi', 'https://indianonlinemarket.com/shop/indian-wear', 1, '2024-02-29 02:08:45', '2024-10-07 01:37:27'),
(16, '1726748794.png', 'Slings/Clutches', 'https://indianonlinemarket.com/shop/bags', 0, '2024-06-19 01:33:49', '2024-10-22 02:55:36'),
(17, '1726748027.png', 'Tops', 'https://indianonlinemarket.com/shop/tops', 1, '2024-09-19 05:43:47', '2024-09-20 06:23:12'),
(18, '1729588925.png', 'Dresses', 'https://indianonlinemarket.com/shop/dress', 1, '2024-09-19 05:46:14', '2024-11-08 11:34:40'),
(19, '1729588974.png', 'Shirts', 'https://indianonlinemarket.com/shop/shirts', 1, '2024-10-22 02:52:54', '2024-10-22 03:11:15'),
(20, '1729588988.png', 'Dress', '', 0, '2024-10-22 02:53:08', '2024-10-22 02:54:18');

-- --------------------------------------------------------

--
-- Table structure for table `offer_single_banner`
--

CREATE TABLE `offer_single_banner` (
  `id` int(11) NOT NULL,
  `link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `addeddate` datetime NOT NULL,
  `modifieddate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `offer_single_banner`
--

INSERT INTO `offer_single_banner` (`id`, `link`, `image`, `status`, `addeddate`, `modifieddate`) VALUES
(1, 'https://indianonlinemarket.com/shop/indian-wear', '1716457741.png', 0, '2024-01-06 01:27:03', '2024-06-01 11:29:34'),
(2, '', '1717264756.png', 0, '2024-06-01 11:29:16', '2024-06-01 11:48:18'),
(3, '', '1717265006.png', 0, '2024-06-01 11:33:26', '2024-06-01 11:36:08'),
(4, '', '1717265075.png', 0, '2024-06-01 11:34:35', '2024-06-01 11:36:00'),
(5, '', '1717265925.png', 1, '2024-06-01 11:48:45', '0000-00-00 00:00:00'),
(6, 'https://indianonlinemarket.com/shop/indian-wear', '1717265925.png', 0, '2024-06-01 11:48:45', '2024-06-02 04:43:39'),
(7, 'https://indianonlinemarket.com/shop/tops', '1726836294.png', 1, '2024-09-20 06:14:54', '2024-09-20 06:22:57');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `order_id` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `vendor_id` int(11) DEFAULT NULL,
  `user_id` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_id` int(11) NOT NULL,
  `color_id` int(11) NOT NULL,
  `size_id` int(11) NOT NULL,
  `thumb_img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `original_price` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(10) NOT NULL,
  `addeddate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_id`, `vendor_id`, `user_id`, `p_id`, `color_id`, `size_id`, `thumb_img`, `name`, `original_price`, `quantity`, `status`, `addeddate`) VALUES
(26, '1705059485', 9, '0', 66, 15, 8, '', '', '', '1', 0, NULL),
(71, '1705304494', 8, 'gvvnjn7fqpneoo7b0lmq7t91rd3qrtsh', 67, 2, 9, '', '', '', '1', 1, NULL),
(75, '1705309488', 8, 'lglgkn4badiieikfjcfjpdli16314juf', 67, 2, 9, '', '', '', '1', 1, NULL),
(78, '1705310025', 8, '100l83p2v8qmd2udkblhn38rkqj1cc9t', 67, 2, 9, '', '', '', '1', 1, NULL),
(80, '1705310803', 8, 'cvoj8p756kqptljmvrkhijn3227fs95n', 67, 2, 9, '', '', '', '1', 1, NULL),
(81, '1705338962', 9, 'sarmc3tgquo45qgug4atl1ma7ljlgkjo', 50, 10, 8, '', '', '', '1', 0, NULL),
(82, '1705392931', 9, '07280b5eins7v86e7cks5vic1sbfus5e', 47, 12, 8, '', '', '', '1', 1, NULL),
(83, '1705392931', 9, '07280b5eins7v86e7cks5vic1sbfus5e', 63, 12, 8, '', '', '', '1', 1, NULL),
(84, '1705394097', 9, 'fnkfvbh65e2dnb0ma6do7oqbmcnp99kp', 47, 12, 8, '', '', '', '1', 0, NULL),
(85, '1705394527', 9, 'fnkfvbh65e2dnb0ma6do7oqbmcnp99kp', 47, 12, 8, '', '', '', '1', 1, NULL),
(86, '1705396450', 9, '18', 73, 4, 8, '', '', '', '1', 0, NULL),
(87, '1705416281', 9, '2eq0fq9425o51cfnqvr73r3r4do1jqon', 48, 7, 9, '', '', '', '1', 1, NULL),
(88, '1705416281', 9, '2eq0fq9425o51cfnqvr73r3r4do1jqon', 46, 19, 8, '', '', '', '1', 1, NULL),
(89, '1705416281', 9, '2eq0fq9425o51cfnqvr73r3r4do1jqon', 49, 7, 9, '', '', '', '1', 1, NULL),
(90, '1705767957', 9, 's8m4d56k31sisbhc2ss31clha39co73o', 74, 19, 8, '', '', '', '1', 0, NULL),
(91, '1705768046', 9, 's8m4d56k31sisbhc2ss31clha39co73o', 74, 19, 8, '', '', '', '1', 0, NULL),
(92, '1705768139', 9, 's8m4d56k31sisbhc2ss31clha39co73o', 74, 19, 8, '', '', '', '1', 0, NULL),
(93, '1706975731', 9, '5l5u5rn2g8ev5rcqusjnsc65qvma3n56', 50, 10, 8, '', '', '', '1', 1, NULL),
(94, '1707040041', 9, 'c1edca5j05ogh27kbn37c7s11mc1btho', 92, 12, 8, '', '', '', '1', 0, NULL),
(95, '1707051579', 9, 'ahi5njhgice4jn0te7kunh7fbo7ihp0q', 48, 7, 9, '', '', '', '1', 0, NULL),
(96, '1707053594', 9, 'cn4ek51s3rlhgn2fjto1hd3pu9b3vmtb', 52, 0, 8, '', '', '', '1', 0, NULL),
(97, '1707053596', 9, 'cn4ek51s3rlhgn2fjto1hd3pu9b3vmtb', 52, 0, 8, '', '', '', '1', 0, NULL),
(98, '1707053598', 9, 'cn4ek51s3rlhgn2fjto1hd3pu9b3vmtb', 52, 0, 8, '', '', '', '1', 0, NULL),
(99, '1707053599', 9, 'cn4ek51s3rlhgn2fjto1hd3pu9b3vmtb', 52, 0, 8, '', '', '', '1', 0, NULL),
(100, '1707053599', 9, 'cn4ek51s3rlhgn2fjto1hd3pu9b3vmtb', 52, 0, 8, '', '', '', '1', 0, NULL),
(101, '1707053600', 9, 'cn4ek51s3rlhgn2fjto1hd3pu9b3vmtb', 52, 0, 8, '', '', '', '1', 0, NULL),
(102, '1707053601', 9, 'cn4ek51s3rlhgn2fjto1hd3pu9b3vmtb', 52, 0, 8, '', '', '', '1', 0, NULL),
(103, '1707053611', 9, 'cn4ek51s3rlhgn2fjto1hd3pu9b3vmtb', 52, 0, 8, '', '', '', '1', 0, NULL),
(104, '1707053612', 9, 'cn4ek51s3rlhgn2fjto1hd3pu9b3vmtb', 52, 0, 8, '', '', '', '1', 0, NULL),
(105, '1707053612', 9, 'cn4ek51s3rlhgn2fjto1hd3pu9b3vmtb', 52, 0, 8, '', '', '', '1', 0, NULL),
(106, '1707053624', 9, 'cn4ek51s3rlhgn2fjto1hd3pu9b3vmtb', 52, 0, 8, '', '', '', '1', 0, NULL),
(107, '1707053625', 9, 'cn4ek51s3rlhgn2fjto1hd3pu9b3vmtb', 52, 0, 8, '', '', '', '1', 0, NULL),
(108, '1707053625', 9, 'cn4ek51s3rlhgn2fjto1hd3pu9b3vmtb', 52, 0, 8, '', '', '', '1', 0, NULL),
(109, '1707053626', 9, 'cn4ek51s3rlhgn2fjto1hd3pu9b3vmtb', 52, 0, 8, '', '', '', '1', 0, NULL),
(110, '1707053636', 9, 'cn4ek51s3rlhgn2fjto1hd3pu9b3vmtb', 52, 0, 8, '', '', '', '1', 0, NULL),
(111, '1707053636', 9, 'cn4ek51s3rlhgn2fjto1hd3pu9b3vmtb', 52, 0, 8, '', '', '', '1', 0, NULL),
(112, '1707053637', 9, 'cn4ek51s3rlhgn2fjto1hd3pu9b3vmtb', 52, 0, 8, '', '', '', '1', 0, NULL),
(113, '1707053637', 9, 'cn4ek51s3rlhgn2fjto1hd3pu9b3vmtb', 52, 0, 8, '', '', '', '1', 0, NULL),
(114, '1707053637', 9, 'cn4ek51s3rlhgn2fjto1hd3pu9b3vmtb', 52, 0, 8, '', '', '', '1', 0, NULL),
(115, '1707053638', 9, 'cn4ek51s3rlhgn2fjto1hd3pu9b3vmtb', 52, 0, 8, '', '', '', '1', 0, NULL),
(116, '1707053638', 9, 'cn4ek51s3rlhgn2fjto1hd3pu9b3vmtb', 52, 0, 8, '', '', '', '1', 0, NULL),
(117, '1707053638', 9, 'cn4ek51s3rlhgn2fjto1hd3pu9b3vmtb', 52, 0, 8, '', '', '', '1', 0, NULL),
(118, '1707053638', 9, 'cn4ek51s3rlhgn2fjto1hd3pu9b3vmtb', 52, 0, 8, '', '', '', '1', 0, NULL),
(119, '1707053728', 9, 'cn4ek51s3rlhgn2fjto1hd3pu9b3vmtb', 68, 4, 11, '', '', '', '1', 0, NULL),
(120, '1707070186', 9, 'iaangimav5d61q9l6a1t1jvs9g4l7vcs', 91, 7, 8, '', '', '', '1', 1, NULL),
(121, '1707105643', 9, '48djic82i6tsuln2euu7qtgcib4kup7n', 106, 10, 8, '', '', '', '1', 0, NULL),
(122, '1707111688', 9, '73b8uqtgk85eeft7vpb89n511m0hrd5f', 111, 0, 30, '', '', '', '1', 0, NULL),
(123, '1707111862', 9, '73b8uqtgk85eeft7vpb89n511m0hrd5f', 68, 4, 11, '', '', '', '1', 0, NULL),
(124, '1707111969', 9, '73b8uqtgk85eeft7vpb89n511m0hrd5f', 68, 4, 11, '', '', '', '1', 0, NULL),
(125, '1707112021', 9, '73b8uqtgk85eeft7vpb89n511m0hrd5f', 68, 4, 11, '', '', '', '1', 1, NULL),
(126, '1707112148', 9, 'gfmcs4kgrot7vn3e1murpvvaiq1gi8lj', 73, 4, 8, '', '', '', '1', 0, NULL),
(127, '1707112241', 9, 'gfmcs4kgrot7vn3e1murpvvaiq1gi8lj', 73, 4, 8, '', '', '', '1', 1, NULL),
(128, '1707112576', 9, '7fs5puiphtpj6nh46a8naljgn9aa7u54', 113, 24, 11, '', '', '', '1', 1, NULL),
(129, '1707295642', 9, 'rrook7td1k0tp8va5hjmk166cu3cbqdi', 50, 10, 8, '', '', '', '1', 0, NULL),
(130, '1707303486', 9, '4o8jmvb78mgaso5rn60t7507t21nkdhp', 71, 11, 22, '', '', '', '1', 0, NULL),
(131, '1707594501', 9, 'np9votmi87r9o2rdu6nnde7ucmttrq9l', 91, 7, 8, '', '', '', '1', 0, NULL),
(132, '1707632791', 9, 'td160f8q5hukjo8pcuqs789rfonje06g', 95, 2, 8, '', '', '', '1', 0, NULL),
(133, '1707632791', 9, 'td160f8q5hukjo8pcuqs789rfonje06g', 103, 12, 8, '', '', '', '1', 0, NULL),
(134, '1707652306', 9, 'td160f8q5hukjo8pcuqs789rfonje06g', 95, 2, 8, '', '', '', '1', 0, NULL),
(135, '1707652306', 9, 'td160f8q5hukjo8pcuqs789rfonje06g', 103, 12, 8, '', '', '', '1', 0, NULL),
(136, '1707652389', 9, 'td160f8q5hukjo8pcuqs789rfonje06g', 95, 2, 8, '', '', '', '1', 1, NULL),
(137, '1707652389', 9, 'td160f8q5hukjo8pcuqs789rfonje06g', 103, 12, 8, '', '', '', '1', 1, NULL),
(138, '1707901835', 9, 'spqtg10npulo3opjin09g5fbue48tkf8', 71, 11, 22, '', '', '', '1', 1, NULL),
(139, '1707901835', 9, 'spqtg10npulo3opjin09g5fbue48tkf8', 70, 18, 22, '', '', '', '1', 1, NULL),
(140, '1707984126', 9, '47u4vk76j9dq272fpl43skflunurhed0', 72, 0, 11, '', '', '', '1', 0, NULL),
(141, '1707984129', 9, '47u4vk76j9dq272fpl43skflunurhed0', 72, 0, 11, '', '', '', '1', 0, NULL),
(142, '1707984131', 9, '47u4vk76j9dq272fpl43skflunurhed0', 72, 0, 11, '', '', '', '1', 0, NULL),
(143, '1707984132', 9, '47u4vk76j9dq272fpl43skflunurhed0', 72, 0, 11, '', '', '', '1', 0, NULL),
(144, '1707984195', 9, '47u4vk76j9dq272fpl43skflunurhed0', 72, 0, 11, '', '', '', '1', 0, NULL),
(145, '1707984196', 9, '47u4vk76j9dq272fpl43skflunurhed0', 72, 0, 11, '', '', '', '1', 0, NULL),
(146, '1707984196', 9, '47u4vk76j9dq272fpl43skflunurhed0', 72, 0, 11, '', '', '', '1', 0, NULL),
(147, '1707984223', 9, '47u4vk76j9dq272fpl43skflunurhed0', 72, 0, 11, '', '', '', '1', 0, NULL),
(148, '1707984224', 9, '47u4vk76j9dq272fpl43skflunurhed0', 72, 0, 11, '', '', '', '1', 0, NULL),
(149, '1707984224', 9, '47u4vk76j9dq272fpl43skflunurhed0', 72, 0, 11, '', '', '', '1', 0, NULL),
(150, '1707984224', 9, '47u4vk76j9dq272fpl43skflunurhed0', 72, 0, 11, '', '', '', '1', 0, NULL),
(151, '1707984225', 9, '47u4vk76j9dq272fpl43skflunurhed0', 72, 0, 11, '', '', '', '1', 0, NULL),
(152, '1707984297', 9, '47u4vk76j9dq272fpl43skflunurhed0', 72, 0, 11, '', '', '', '1', 0, NULL),
(153, '1707984299', 9, '47u4vk76j9dq272fpl43skflunurhed0', 72, 0, 11, '', '', '', '1', 0, NULL),
(154, '1707984300', 9, '47u4vk76j9dq272fpl43skflunurhed0', 72, 0, 11, '', '', '', '1', 0, NULL),
(155, '1707984300', 9, '47u4vk76j9dq272fpl43skflunurhed0', 72, 0, 11, '', '', '', '1', 0, NULL),
(156, '1707984301', 9, '47u4vk76j9dq272fpl43skflunurhed0', 72, 0, 11, '', '', '', '1', 0, NULL),
(157, '1707984301', 9, '47u4vk76j9dq272fpl43skflunurhed0', 72, 0, 11, '', '', '', '1', 0, NULL),
(158, '1707984301', 9, '47u4vk76j9dq272fpl43skflunurhed0', 72, 0, 11, '', '', '', '1', 0, NULL),
(159, '1707984302', 9, '47u4vk76j9dq272fpl43skflunurhed0', 72, 0, 11, '', '', '', '1', 0, NULL),
(160, '1707984303', 9, '47u4vk76j9dq272fpl43skflunurhed0', 72, 0, 11, '', '', '', '1', 0, NULL),
(161, '1709105312', 9, 'o677t6c25ac81msjqdp5j0q129fegrti', 120, 0, 8, '', '', '', '1', 0, NULL),
(162, '1709105312', 9, 'o677t6c25ac81msjqdp5j0q129fegrti', 120, 0, 11, '', '', '', '1', 0, NULL),
(163, '1709105312', 9, 'o677t6c25ac81msjqdp5j0q129fegrti', 120, 0, 8, '', '', '', '1', 0, NULL),
(164, '1709105312', 9, 'o677t6c25ac81msjqdp5j0q129fegrti', 120, 0, 11, '', '', '', '1', 0, NULL),
(165, '1709105439', 9, 'o677t6c25ac81msjqdp5j0q129fegrti', 120, 0, 11, '', '', '', '1', 0, NULL),
(166, '1709124852', 9, 'hukochgj9o4isk1hqoijds9rr9j2ia8i', 120, 11, 34, '', '', '', '', 0, NULL),
(167, '1709124867', 9, 'hukochgj9o4isk1hqoijds9rr9j2ia8i', 120, 11, 34, '', '', '', '', 0, NULL),
(168, '1709126203', 9, 'hukochgj9o4isk1hqoijds9rr9j2ia8i', 120, 11, 34, '', '', '', '1', 0, NULL),
(169, '1709126601', 9, 'hukochgj9o4isk1hqoijds9rr9j2ia8i', 120, 11, 34, '', '', '', '1', 1, NULL),
(170, '1709198265', 9, '2b6lvsmd4ep7b00ihjiv1fknjogr719m', 118, 0, 35, '', '', '', '1', 0, NULL),
(171, '1709236764', 9, '8001oh00ai9vbdk01rfgsamon2j3ea4n', 120, 11, 35, '', '', '', '1', 0, NULL),
(172, '1710402922', 9, 'pmlnlg7obm4mgaieqrukpue4cr0i5m4m', 96, 11, 9, '', '', '', '1', 0, NULL),
(173, '1711006406', 9, 'f1ild69neok2hbptaensago3jrp05gu4', 132, 12, 24, '', '', '', '1', 0, NULL),
(174, '1711006808', 9, 'dvhvmcidgqtf5a218cscs9of5cb98m0b', 120, 3, 32, '', '', '', '1', 0, NULL),
(175, '1711006846', 9, '8aabn061kq60da110tc8b1ruvcgao05n', 76, 12, 8, '', '', '', '1', 1, NULL),
(176, '1711872494', 9, 'g4e0kaeeoi09u01legcuhsht3ausfd1r', 102, 4, 8, '', '', '', '1', 0, NULL),
(177, '1712080974', 9, 'cirpectlel6blmhi6ar7rp23lh4gff2p', 98, 10, 8, '', '', '', '1', 0, NULL),
(178, '1713012936', 9, 'ilr96eakup53h71dkll9r4auocvc9lhu', 126, 0, 21, '', '', '', '1', 1, NULL),
(179, '1714041191', 9, '07avsgrg8mupjsrsg01lfmfgrehfjbkt', 150, 0, 22, '', '', '', '1', 0, NULL),
(180, '1714041711', 9, '07avsgrg8mupjsrsg01lfmfgrehfjbkt', 150, 0, 9, '', '', '', '1', 1, NULL),
(181, '1714130235', 9, '8db0do9k0ngslvc4fv397vv1tkvrba3p', 149, 0, 11, '', '', '', '1', 0, NULL),
(182, '1714130237', 9, '8db0do9k0ngslvc4fv397vv1tkvrba3p', 149, 0, 11, '', '', '', '1', 0, NULL),
(183, '1716107232', 9, 'f2kj52i1jnrmjma86mggua7m1o895anh', 149, 4, 22, '', '', '', '1', 0, NULL),
(184, '1716107236', 9, 'f2kj52i1jnrmjma86mggua7m1o895anh', 149, 4, 22, '', '', '', '1', 0, NULL),
(185, '1716107253', 9, 'f2kj52i1jnrmjma86mggua7m1o895anh', 149, 4, 22, '', '', '', '1', 0, NULL),
(186, '1716107263', 9, 'f2kj52i1jnrmjma86mggua7m1o895anh', 149, 4, 22, '', '', '', '1', 0, NULL),
(187, '1717062399', 9, '33i12u7bctnc154cnkvslsjkf9jdg8ed', 84, 2, 8, '', '', '', '1', 0, NULL),
(188, '1717062477', 9, '33i12u7bctnc154cnkvslsjkf9jdg8ed', 84, 2, 8, '', '', '', '1', 0, NULL),
(189, '1718178156', 9, 'petog4mvdbs7elbp8h730m89urh5eefj', 163, 7, 11, '', '', '', '1', 0, NULL),
(190, '1718463584', 9, '8oe8noio3hkecfrdamu6j4au86gia490', 160, 10, 22, '', '', '', '1', 0, NULL),
(191, '1718513070', 9, '1c4g6lt0daupfpe5qmshs9teh36htmjg', 152, 11, 11, '', '', '', '1', 0, NULL),
(192, '1718597899', 9, '8alvga7sb37i27i56q5lac9ooj6v0o9g', 161, 8, 22, '', '', '', '1', 0, NULL),
(193, '1718597899', 9, '8alvga7sb37i27i56q5lac9ooj6v0o9g', 152, 11, 22, '', '', '', '1', 0, NULL),
(194, '1719203801', 9, 'fl30hkk24bn3id4pmjuck6dbpsbnp7cd', 168, 4, 11, '', '', '', '1', 0, NULL),
(195, '1719203801', 9, 'fl30hkk24bn3id4pmjuck6dbpsbnp7cd', 168, 4, 11, '', '', '', '1', 0, NULL),
(196, '1719203806', 9, 'fl30hkk24bn3id4pmjuck6dbpsbnp7cd', 168, 4, 11, '', '', '', '1', 0, NULL),
(197, '1719203807', 9, 'fl30hkk24bn3id4pmjuck6dbpsbnp7cd', 168, 4, 11, '', '', '', '1', 0, NULL),
(198, '1719203810', 9, 'fl30hkk24bn3id4pmjuck6dbpsbnp7cd', 168, 4, 11, '', '', '', '1', 0, NULL),
(199, '1719203811', 9, 'fl30hkk24bn3id4pmjuck6dbpsbnp7cd', 168, 4, 11, '', '', '', '1', 0, NULL),
(200, '1719203812', 9, 'fl30hkk24bn3id4pmjuck6dbpsbnp7cd', 168, 4, 11, '', '', '', '1', 0, NULL),
(201, '1719203825', 9, 'fl30hkk24bn3id4pmjuck6dbpsbnp7cd', 168, 4, 11, '', '', '', '1', 0, NULL),
(202, '1719203826', 9, 'fl30hkk24bn3id4pmjuck6dbpsbnp7cd', 168, 4, 11, '', '', '', '1', 0, NULL),
(203, '1719203826', 9, 'fl30hkk24bn3id4pmjuck6dbpsbnp7cd', 168, 4, 11, '', '', '', '1', 0, NULL),
(204, '1719203974', 9, 'fl30hkk24bn3id4pmjuck6dbpsbnp7cd', 168, 4, 11, '', '', '', '1', 0, NULL),
(205, '1719203980', 9, 'fl30hkk24bn3id4pmjuck6dbpsbnp7cd', 168, 4, 11, '', '', '', '1', 0, NULL),
(206, '1719203981', 9, 'fl30hkk24bn3id4pmjuck6dbpsbnp7cd', 168, 4, 11, '', '', '', '1', 0, NULL),
(207, '1719203981', 9, 'fl30hkk24bn3id4pmjuck6dbpsbnp7cd', 168, 4, 11, '', '', '', '1', 0, NULL),
(208, '1719203982', 9, 'fl30hkk24bn3id4pmjuck6dbpsbnp7cd', 168, 4, 11, '', '', '', '1', 0, NULL),
(209, '1719203982', 9, 'fl30hkk24bn3id4pmjuck6dbpsbnp7cd', 168, 4, 11, '', '', '', '1', 0, NULL),
(210, '1719203997', 9, 'fl30hkk24bn3id4pmjuck6dbpsbnp7cd', 168, 4, 11, '', '', '', '1', 0, NULL),
(211, '1719203998', 9, 'fl30hkk24bn3id4pmjuck6dbpsbnp7cd', 168, 4, 11, '', '', '', '1', 0, NULL),
(212, '1719203999', 9, 'fl30hkk24bn3id4pmjuck6dbpsbnp7cd', 168, 4, 11, '', '', '', '1', 0, NULL),
(213, '1719204009', 9, 'fl30hkk24bn3id4pmjuck6dbpsbnp7cd', 168, 4, 11, '', '', '', '1', 0, NULL),
(214, '1719204029', 9, 'fl30hkk24bn3id4pmjuck6dbpsbnp7cd', 168, 4, 11, '', '', '', '1', 0, NULL),
(215, '1719204029', 9, 'fl30hkk24bn3id4pmjuck6dbpsbnp7cd', 168, 4, 11, '', '', '', '1', 0, NULL),
(216, '1719204030', 9, 'fl30hkk24bn3id4pmjuck6dbpsbnp7cd', 168, 4, 11, '', '', '', '1', 0, NULL),
(217, '1719204030', 9, 'fl30hkk24bn3id4pmjuck6dbpsbnp7cd', 168, 4, 11, '', '', '', '1', 0, NULL),
(218, '1719204030', 9, 'fl30hkk24bn3id4pmjuck6dbpsbnp7cd', 168, 4, 11, '', '', '', '1', 0, NULL),
(219, '1719204031', 9, 'fl30hkk24bn3id4pmjuck6dbpsbnp7cd', 168, 4, 11, '', '', '', '1', 0, NULL),
(220, '1719204037', 9, 'fl30hkk24bn3id4pmjuck6dbpsbnp7cd', 168, 4, 11, '', '', '', '1', 0, NULL),
(221, '1719204037', 9, 'fl30hkk24bn3id4pmjuck6dbpsbnp7cd', 168, 4, 11, '', '', '', '1', 0, NULL),
(222, '1719204037', 9, 'fl30hkk24bn3id4pmjuck6dbpsbnp7cd', 168, 4, 11, '', '', '', '1', 0, NULL),
(223, '1719204214', 9, 'f45uq7tt39if2ie8ml9l35snidto0rov', 176, 11, 23, '', '', '', '1', 0, NULL),
(224, '1719204533', 9, 'f7rodedl13ql091in18cc4e0hud61hfi', 168, 4, 11, '', '', '', '1', 0, NULL),
(225, '1719204535', 9, 'f7rodedl13ql091in18cc4e0hud61hfi', 168, 4, 11, '', '', '', '1', 0, NULL),
(226, '1719204535', 9, 'f7rodedl13ql091in18cc4e0hud61hfi', 168, 4, 11, '', '', '', '1', 0, NULL),
(227, '1719204536', 9, 'f7rodedl13ql091in18cc4e0hud61hfi', 168, 4, 11, '', '', '', '1', 0, NULL),
(228, '1719204536', 9, 'f7rodedl13ql091in18cc4e0hud61hfi', 168, 4, 11, '', '', '', '1', 0, NULL),
(229, '1719204536', 9, 'f7rodedl13ql091in18cc4e0hud61hfi', 168, 4, 11, '', '', '', '1', 0, NULL),
(230, '1719204541', 9, 'f7rodedl13ql091in18cc4e0hud61hfi', 168, 4, 11, '', '', '', '1', 0, NULL),
(231, '1719204544', 9, 'f7rodedl13ql091in18cc4e0hud61hfi', 168, 4, 11, '', '', '', '1', 0, NULL),
(232, '1719204545', 9, 'f7rodedl13ql091in18cc4e0hud61hfi', 168, 4, 11, '', '', '', '1', 0, NULL),
(233, '1719204545', 9, 'f7rodedl13ql091in18cc4e0hud61hfi', 168, 4, 11, '', '', '', '1', 0, NULL),
(234, '1719204545', 9, 'f7rodedl13ql091in18cc4e0hud61hfi', 168, 4, 11, '', '', '', '1', 0, NULL),
(235, '1719204545', 9, 'f7rodedl13ql091in18cc4e0hud61hfi', 168, 4, 11, '', '', '', '1', 0, NULL),
(236, '1719204546', 9, 'f7rodedl13ql091in18cc4e0hud61hfi', 168, 4, 11, '', '', '', '1', 0, NULL),
(237, '1719204546', 9, 'f7rodedl13ql091in18cc4e0hud61hfi', 168, 4, 11, '', '', '', '1', 0, NULL),
(238, '1719204546', 9, 'f7rodedl13ql091in18cc4e0hud61hfi', 168, 4, 11, '', '', '', '1', 0, NULL),
(239, '1719204546', 9, 'f7rodedl13ql091in18cc4e0hud61hfi', 168, 4, 11, '', '', '', '1', 0, NULL),
(240, '1719204546', 9, 'f7rodedl13ql091in18cc4e0hud61hfi', 168, 4, 11, '', '', '', '1', 0, NULL),
(241, '1719205180', 9, 'f7rodedl13ql091in18cc4e0hud61hfi', 168, 4, 11, '', '', '', '1', 0, NULL),
(242, '1719205181', 9, 'f7rodedl13ql091in18cc4e0hud61hfi', 168, 4, 11, '', '', '', '1', 0, NULL),
(243, '1719205187', 9, 'f7rodedl13ql091in18cc4e0hud61hfi', 168, 4, 11, '', '', '', '1', 0, NULL),
(244, '1719205195', 9, 'f7rodedl13ql091in18cc4e0hud61hfi', 168, 4, 11, '', '', '', '1', 0, NULL),
(245, '1719205867', 9, 'fl30hkk24bn3id4pmjuck6dbpsbnp7cd', 168, 4, 11, '', '', '', '1', 0, NULL),
(246, '1719205868', 9, 'fl30hkk24bn3id4pmjuck6dbpsbnp7cd', 168, 4, 11, '', '', '', '1', 0, NULL),
(247, '1719205880', 9, 'fl30hkk24bn3id4pmjuck6dbpsbnp7cd', 168, 4, 11, '', '', '', '1', 0, NULL),
(248, '1719208578', 9, 'f7rodedl13ql091in18cc4e0hud61hfi', 168, 4, 11, '', '', '', '1', 0, NULL),
(249, '1719208580', 9, 'f7rodedl13ql091in18cc4e0hud61hfi', 168, 4, 11, '', '', '', '1', 0, NULL),
(250, '1719208580', 9, 'f7rodedl13ql091in18cc4e0hud61hfi', 168, 4, 11, '', '', '', '1', 0, NULL),
(251, '1719208591', 9, 'f7rodedl13ql091in18cc4e0hud61hfi', 168, 4, 11, '', '', '', '1', 0, NULL),
(252, '1719208593', 9, 'f7rodedl13ql091in18cc4e0hud61hfi', 168, 4, 11, '', '', '', '1', 0, NULL),
(253, '1719209715', 9, 'f7rodedl13ql091in18cc4e0hud61hfi', 168, 4, 11, '', '', '', '1', 0, NULL),
(254, '1719218828', 9, 'f7rodedl13ql091in18cc4e0hud61hfi', 168, 4, 11, '', '', '', '1', 0, NULL),
(255, '1719218836', 9, 'f7rodedl13ql091in18cc4e0hud61hfi', 168, 4, 11, '', '', '', '1', 0, NULL),
(256, '1719223271', 9, 'f7rodedl13ql091in18cc4e0hud61hfi', 168, 4, 11, '', '', '', '1', 0, NULL),
(257, '1719376814', 9, 'f7rodedl13ql091in18cc4e0hud61hfi', 168, 4, 11, '', '', '', '1', 0, NULL),
(258, '1719376820', 9, 'f7rodedl13ql091in18cc4e0hud61hfi', 168, 4, 11, '', '', '', '1', 0, NULL),
(259, '1719377045', 9, 'lvm44vviv7lo771lnpkl64clsp9r046q', 173, 2, 22, '', '', '', '1', 0, NULL),
(260, '1719377421', 9, 'lbjkgsca3f62ufh932l75ns2n8535g98', 166, 8, 21, '', '', '', '1', 0, NULL),
(261, '1719377478', 9, 'f7rodedl13ql091in18cc4e0hud61hfi', 168, 4, 11, '', '', '', '1', 0, NULL),
(262, '1719377480', 9, 'f7rodedl13ql091in18cc4e0hud61hfi', 168, 4, 11, '', '', '', '1', 0, NULL),
(263, '1719378197', 9, 'a2c0hbm95t8th2plfs3irgvtrs22b6fa', 168, 4, 11, '', '', '', '1', 0, NULL),
(264, '1719378201', 9, 'a2c0hbm95t8th2plfs3irgvtrs22b6fa', 168, 4, 11, '', '', '', '1', 0, NULL),
(265, '1719378205', 9, 'a2c0hbm95t8th2plfs3irgvtrs22b6fa', 168, 4, 11, '', '', '', '1', 0, NULL),
(266, '1719378205', 9, 'a2c0hbm95t8th2plfs3irgvtrs22b6fa', 168, 4, 11, '', '', '', '1', 0, NULL),
(267, '1719378210', 9, 'a2c0hbm95t8th2plfs3irgvtrs22b6fa', 168, 4, 11, '', '', '', '1', 0, NULL),
(268, '1719378210', 9, 'a2c0hbm95t8th2plfs3irgvtrs22b6fa', 168, 4, 11, '', '', '', '1', 0, NULL),
(269, '1719378210', 9, 'a2c0hbm95t8th2plfs3irgvtrs22b6fa', 168, 4, 11, '', '', '', '1', 0, NULL),
(270, '1719378231', 9, 'a2c0hbm95t8th2plfs3irgvtrs22b6fa', 168, 4, 11, '', '', '', '1', 0, NULL),
(271, '1719378231', 9, 'a2c0hbm95t8th2plfs3irgvtrs22b6fa', 168, 4, 11, '', '', '', '1', 0, NULL),
(272, '1719378231', 9, 'a2c0hbm95t8th2plfs3irgvtrs22b6fa', 168, 4, 11, '', '', '', '1', 0, NULL),
(273, '1719378231', 9, 'a2c0hbm95t8th2plfs3irgvtrs22b6fa', 168, 4, 11, '', '', '', '1', 0, NULL),
(274, '1719378427', 9, 'updqd8qifers4rtdq9tn3al9hjaa46re', 168, 4, 23, '', '', '', '1', 0, NULL),
(275, '1719378428', 9, 'updqd8qifers4rtdq9tn3al9hjaa46re', 168, 4, 23, '', '', '', '1', 0, NULL),
(276, '1719378429', 9, 'updqd8qifers4rtdq9tn3al9hjaa46re', 168, 4, 23, '', '', '', '1', 0, NULL),
(277, '1719378429', 9, 'updqd8qifers4rtdq9tn3al9hjaa46re', 168, 4, 23, '', '', '', '1', 0, NULL),
(278, '1719378429', 9, 'updqd8qifers4rtdq9tn3al9hjaa46re', 168, 4, 23, '', '', '', '1', 0, NULL),
(279, '1719378430', 9, 'updqd8qifers4rtdq9tn3al9hjaa46re', 168, 4, 23, '', '', '', '1', 0, NULL),
(280, '1719378435', 9, 'updqd8qifers4rtdq9tn3al9hjaa46re', 168, 4, 23, '', '', '', '1', 0, NULL),
(281, '1719378435', 9, 'updqd8qifers4rtdq9tn3al9hjaa46re', 168, 4, 23, '', '', '', '1', 0, NULL),
(282, '1719471137', 9, 'f7rodedl13ql091in18cc4e0hud61hfi', 168, 4, 11, '', '', '', '1', 0, NULL),
(283, '1719556573', 9, 'f7rodedl13ql091in18cc4e0hud61hfi', 168, 4, 11, '', '', '', '1', 0, NULL),
(284, '1719903939', 9, 'c5735sb4mkh1ho8pn2ggj64i9hm5a0tu', 136, 3, 8, '', '', '', '1', 0, NULL),
(285, '1719903939', 9, 'c5735sb4mkh1ho8pn2ggj64i9hm5a0tu', 171, 17, 22, '', '', '', '1', 0, NULL),
(286, '1719904278', 9, 'c5735sb4mkh1ho8pn2ggj64i9hm5a0tu', 136, 3, 8, '', '', '', '1', 1, NULL),
(287, '1719904278', 9, 'c5735sb4mkh1ho8pn2ggj64i9hm5a0tu', 171, 17, 22, '', '', '', '1', 1, NULL),
(288, '1719904278', 9, 'c5735sb4mkh1ho8pn2ggj64i9hm5a0tu', 173, 2, 23, '', '', '', '1', 1, NULL),
(289, '1719904657', 9, 'nek64vn04gof5otd6cr38s8gehrv5toh', 163, 3, 11, '', '', '', '1', 1, NULL),
(290, '1719904964', 9, 'u9qfo63i82d2kvrsro2nk6q0jfkku9b1', 176, 11, 11, '', '', '', '1', 0, NULL),
(291, '1719904979', 9, 'u9qfo63i82d2kvrsro2nk6q0jfkku9b1', 176, 11, 11, '', '', '', '1', 0, NULL),
(292, '1726425665', 9, 'pvm9omt0cdp2jftndkdds9avedj1p2c0', 152, 3, 11, '', '', '', '1', 1, NULL),
(293, '1728887314', 9, '15', 185, 13, 8, '', '', '', '1', 0, NULL),
(294, '1728887314', 9, '15', 184, 7, 8, '', '', '', '2', 0, NULL),
(295, '1728887922', 9, '15', 185, 13, 8, '', '', '', '1', 1, NULL),
(296, '1728887922', 9, '15', 184, 7, 8, '', '', '', '2', 1, NULL),
(297, '1728888697', 9, '15', 179, 10, 8, '', '', '', '1', 0, NULL),
(298, '1728891112', 9, '15', 182, 7, 8, '', '', '', '2', 1, NULL),
(299, '1728891209', 9, '15', 182, 7, 11, '', '', '', '3', 1, NULL),
(300, '1728891252', 9, '15', 182, 7, 9, '', '', '', '3', 1, NULL),
(301, '1729176146', 9, 'tbokmflun1ev6neu915tv4g65jf3mp5t', 182, 0, 8, '', '', '', '1', 1, NULL),
(302, '1729176456', 9, '22', 182, 0, 8, '', '', '', '1', 1, NULL),
(303, '1729492972', 9, '15', 182, 7, 8, '', '', '', '1', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_cancel_request`
--

CREATE TABLE `order_cancel_request` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_id` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cancel_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_cancel_request`
--

INSERT INTO `order_cancel_request` (`id`, `user_id`, `order_id`, `cancel_date`) VALUES
(11, 15, '1704456391', '2024-01-05'),
(12, 15, '1728887922', '2024-10-14');

-- --------------------------------------------------------

--
-- Table structure for table `order_coupon`
--

CREATE TABLE `order_coupon` (
  `id` int(11) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `coupon` varchar(100) NOT NULL,
  `type` int(2) NOT NULL,
  `order_id` varchar(100) NOT NULL,
  `discount` varchar(50) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order_coupon`
--

INSERT INTO `order_coupon` (`id`, `user_id`, `coupon`, `type`, `order_id`, `discount`, `status`) VALUES
(33, 2, 'admin', 2, '1685637072', '5', 1),
(39, 7, 'admin', 2, '1701761584', '5', 1),
(43, 0, 'Azmal', 1, '1704449595', '10', 1),
(44, 15, 'admin', 2, '1704459269', '5', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `thumb_img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumb_img2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `all_images` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `all_size` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sku` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `small_info` blob NOT NULL,
  `video_link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` blob NOT NULL,
  `additional_info` blob NOT NULL,
  `avalibility` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `new_arrival` int(11) NOT NULL,
  `tranding_product` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `addeddate` datetime NOT NULL,
  `modifieddate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `cat_id`, `vendor_id`, `thumb_img`, `thumb_img2`, `all_images`, `all_size`, `name`, `slug`, `rating`, `sku`, `small_info`, `video_link`, `description`, `additional_info`, `avalibility`, `new_arrival`, `tranding_product`, `status`, `addeddate`, `modifieddate`) VALUES
(65, 26, 9, '1014186533.jpeg', '1014186533.jpeg', '[{\"size_id\":[\"8\"],\"color_id\":[\"22\"],\"images\":[\"17003091390img_3455.jpeg\",\"15137754391img_3456.jpeg\",\"20949950982img_3547.jpeg\"],\"price\":\"549\",\"cut_price\":\"700\",\"stock\":\"\"}]', '', 'Puffer jacket 01', 'puffer-jacket-01', '5', '9', '', '', '', '', '', 1, 1, 0, '2024-01-09 02:22:09', '2024-03-09 03:03:41'),
(66, 26, 9, '1547076776.jpeg', '1547076776.jpeg', '[{\"size_id\":[\"8\"],\"color_id\":[\"15\"],\"images\":[\"9509638260img_3453.jpeg\",\"13320083481img_3454.jpeg\",\"6631312282img_3545.jpeg\"],\"price\":\"549\",\"cut_price\":\"700\",\"stock\":\"1\"}]', '', 'Puffer Jacket -1', 'puffer-jacket-1', '5', '10', '', '', '', '', '', 1, 1, 0, '2024-01-09 02:23:16', '2024-04-11 05:54:31'),
(76, 26, 9, '544165109.jpeg', '544165109.jpeg', '[{\"size_id\":[\"8\",\"9\"],\"color_id\":[\"12\",\"24\"],\"images\":[\"403834400img_3513.jpeg\",\"5768414711img_3514.jpeg\",\"19868539992img_3516.jpeg\",\"19372713073img_3517.jpeg\"],\"price\":\"199\",\"cut_price\":\"500\",\"stock\":\"1\"}]', '', 'Grey Classy Vest', 'grey-classy-vest', '5', '18', 0x3c703e427573742d33342d33363c2f703e0d0a0d0a3c703e4c656e6774682d31363c2f703e0d0a, '', '', '', '', 1, 0, 0, '2024-01-17 04:54:39', '2024-03-09 03:05:29'),
(77, 26, 9, '1284788611.jpeg', '1284788611.jpeg', '[{\"size_id\":[\"11\"],\"color_id\":[\"10\",\"23\"],\"images\":[\"7899291160img_3518.jpeg\",\"15748603691img_3519.jpeg\",\"11650784772img_3520.jpeg\"],\"price\":\"199\",\"cut_price\":\"500\",\"stock\":\"1\"}]', '', 'Tennis Girl Vest', 'tennis-girl-vest', '5', '19', 0x3c703e427573742d3338266e6273703b3c2f703e0d0a0d0a3c703e4c656e6774682d31373c2f703e0d0a, '', '', '', '', 1, 0, 0, '2024-01-17 04:56:17', '2024-03-09 03:05:46'),
(78, 26, 9, '557546254.jpeg', '557546254.jpeg', '[{\"size_id\":[\"9\",\"11\"],\"color_id\":[\"11\",\"23\"],\"images\":[\"7935004650img_3522.jpeg\",\"13933834961img_3523.jpeg\",\"12598728262img_3524.jpeg\"],\"price\":\"199\",\"cut_price\":\"500\",\"stock\":\"1\"}]', '', 'Classy patterned Vest', 'classy-patterned-vest', '5', '20', 0x3c703e427573742d33362d33383c2f703e0d0a0d0a3c703e4c656e6774682d31383c2f703e0d0a, '', '', '', '', 1, 0, 0, '2024-01-17 04:59:32', '2024-03-09 03:05:56'),
(114, 50, 9, '220574325.jpeg', '2054360731.jpeg', '[{\"size_id\":[\"24\"],\"color_id\":[\"12\"],\"images\":[\"12664966870bd3a701a-d782-42e2-a725-bd4533e173a4.jpeg\",\"171166103318b2025d9-a38b-4d30-b076-4b2b08ae5977.jpeg\",\"1941279012291becd8a-d26f-4f8a-9bf8-6886ea90f915.jpeg\"],\"price\":\"699\",\"cut_price\":\"1500\",\"stock\":\"0\"}]', '', 'Standout In The Crowd Bag', 'standout-in-the-crowd-bag', '5', '57', 0x3c703e5354414e444f555420494e205448452043524f574420424147f09f919c3c6272202f3e0d0a497426727371756f3b7320612068616e646d61646520776f6f64656e20636c757463682064657369676e656420666f7220796f7520746f205354414e444f555420494e205448452043524f57442e20496e736964652077616c6c2076656c7665742066616272696320746f2070726f7465637420796f7572206974656d732e2049742063616e206265206361727269656420626f746820617320612068616e6462616720616e64206120736c696e672e20f09f919c3c6272202f3e0d0a444d20666f72206d6f72652064657461696c7320f09f938c3c2f703e0d0a, '', '', '', '', 1, 0, 0, '2024-02-10 01:17:02', '2024-07-31 04:12:10'),
(115, 50, 9, '1769666120.png', '1430798966.jpeg', '[{\"size_id\":[\"24\"],\"color_id\":[\"16\"],\"images\":[\"1569751906001d27014-e727-4345-b3ef-862f04e33f93.jpeg\",\"2649759581d099f34b-fa71-421b-b907-e6f247478e9d.jpeg\",\"1979207382dca90034-4733-4e87-80e3-f458885ea1e6.jpeg\",\"106375714932631be0e-00de-49a1-8d6e-ebae7353ea7b.jpeg\"],\"price\":\"699\",\"cut_price\":\"1400\",\"stock\":\"5\"}]', '', 'Gems Silver metal bag', 'gems-silver-metal-bag', '5', '58', 0x3c703e497426727371756f3b73206120612073696c766572206d6574616c20736c696e6720636c757463682066726f6d206f7572205354414e444f555420494e205448452043524f574420636f6c6c656374696f6e2e266e6273703b3c6272202f3e0d0a497426727371756f3b7320612076696e7461676520616e6420756e697175652070696563652077686963682069732068616e646d6164652e20496e6e6572206c61796572206f66207468697320736c696e67206973206f662076656c76657420746f2070726f7465637420796f7572206974656d732e266e6273703b3c2f703e0d0a, '', '', '', '', 0, 0, 1, '2024-02-11 12:03:45', '2024-09-20 05:13:58'),
(118, 28, 9, '588063134.jpeg', '1338102948.jpeg', '[{\"size_id\":[\"32\"],\"color_id\":[\"2\"],\"images\":[\"1149980190img_4771.jpeg\"],\"price\":\"1099\",\"cut_price\":\"1500\",\"stock\":\"0\"}]', '', '2 print co ord set', '2-print-co-ord-set', '5', '60', '', '', '', '', '', 0, 0, 0, '2024-02-27 05:55:07', '2024-07-31 04:12:45'),
(119, 28, 9, '2128311048.jpeg', '587125468.jpeg', '[{\"size_id\":[\"33\"],\"color_id\":[\"12\"],\"images\":[\"2733353860img_4763.jpeg\"],\"price\":\"1099\",\"cut_price\":\"1500\",\"stock\":\"\"}]', '', '2 print co-ord set-1', '2-print-co-ord-set-1', '5', '61', '', '', '', '', '', 1, 0, 0, '2024-02-27 05:56:21', '2024-07-31 04:17:40'),
(121, 50, 9, '1174620098.png', '1589879985.jpeg', '[{\"size_id\":[\"24\"],\"color_id\":[\"16\"],\"images\":[\"48172908100fb00cdb-f509-403a-82df-1b156f3daefc.jpeg\",\"199845766611abddf90-b8f4-456a-9d56-c9d748ee3956.jpeg\",\"200498558127783fdb4-a49c-4543-a3d3-7e1989830b31.jpeg\"],\"price\":\"399\",\"cut_price\":\"700\",\"stock\":\"00\"}]', '', 'Mini bag', 'mini-bag', '5', '63', '', '', '', '', '', 0, 0, 1, '2024-02-27 06:28:07', '2024-09-20 05:14:11'),
(122, 51, 9, '1815559200.png', '1866132806.jpeg', '[{\"size_id\":[\"9\",\"11\",\"21\"],\"color_id\":[\"11\"],\"images\":[\"16949042790img_5146.jpeg\",\"21285452171img_4828.jpeg\"],\"price\":\"495\",\"cut_price\":\"1200\",\"stock\":\"2\"}]', '', 'Green printed kurta set', 'green-printed-kurta-set', '5', '63', '', '', '', '', '', 0, 0, 1, '2024-02-29 11:52:29', '2024-09-20 05:19:10'),
(123, 51, 9, '828264396.png', '1613234186.jpeg', '[{\"size_id\":[\"9\",\"11\",\"21\"],\"color_id\":[\"3\",\"12\"],\"images\":[\"5319440940img_5140.jpeg\",\"1297518471img_4799.jpeg\"],\"price\":\"495\",\"cut_price\":\"1200\",\"stock\":\"2\"}]', '', 'Brown Printed Kurta set', 'brown-printed-kurta-set', '5', '64', '', '', '', '', '', 0, 0, 1, '2024-02-29 11:53:54', '2024-09-20 05:19:22'),
(124, 51, 9, '2144575957.jpeg', '1122732549.jpeg', '[{\"size_id\":[\"8\",\"9\",\"11\"],\"color_id\":[\"8\",\"11\"],\"images\":[\"6144673620img_5149.jpeg\",\"1819510631img_4841.jpeg\"],\"price\":\"899\",\"cut_price\":\"1300\",\"stock\":\"\"}]', '', 'Cotton Kurta Set', 'cotton-kurta-set', '5', '65', '', '', '', '', '', 0, 0, 0, '2024-02-29 11:55:59', '2024-07-31 04:13:37'),
(127, 51, 9, '1014551323.jpeg', '448410806.jpeg', '[{\"size_id\":[\"21\"],\"color_id\":[\"8\"],\"images\":[\"687070500img_5137.jpeg\",\"10953454241f5cca0fd-4d4e-4dc0-b758-c4e49cfa1c88.jpeg\",\"7313812212c507d67c-c642-47bb-8c45-ca436d5d914b.jpeg\",\"130467752330aab19a8-b918-403f-8c9e-a6a39867c720.jpeg\",\"13839183384ca1e5e86-5b58-467a-9d87-2d2dec5cc2ab.jpeg\"],\"price\":\"999\",\"cut_price\":\"1400\",\"stock\":\"\"}]', '', 'Bandhani print red suit set', 'bandhani-print-red-suit-set', '5', '68', '', '', '', '', '', 1, 0, 0, '2024-03-03 05:01:20', '2024-07-31 04:13:52'),
(128, 51, 9, '724553094.png', '1082596766.jpeg', '[{\"size_id\":[\"11\"],\"color_id\":[\"7\"],\"images\":[\"13797635230img_5129.jpeg\",\"12598756011593b121c-f31e-4ff5-b542-bf5102853e69.jpeg\",\"6285180952a5c02118-2f4a-403a-a6c8-39673ca0acf0.jpeg\",\"16413478993ce1a6328-7ae7-4166-8539-f00745f6f9f5.jpeg\",\"85301591943849e015-e04d-449d-8257-daf45afff359.jpeg\"],\"price\":\"999\",\"cut_price\":\"1400\",\"stock\":\"\"}]', '', 'Bandhani print pink suit set', 'bandhani-print-pink-suit-set', '5', '69', '', '', '', '', '', 0, 0, 1, '2024-03-03 05:02:37', '2024-09-20 03:19:03'),
(130, 51, 9, '1579146721.png', '1116748440.jpeg', '[{\"size_id\":[\"8\",\"9\",\"11\",\"21\"],\"color_id\":[\"11\"],\"images\":[\"10960888230img_5139.jpeg\",\"1562373589103a31361-8ca5-4201-8c4b-c5843a279108.jpeg\",\"5393346092fbbe844b-33cd-492c-be2b-7ca284dfd298.jpeg\",\"22878507738a236160-6582-450f-ac10-00d63b1ae19e.jpeg\"],\"price\":\"895\",\"cut_price\":\"1500\",\"stock\":\"2\"}]', '', 'Green anarkali suit ', 'green-anarkali-suit', '5', '70', '', '', '', '', '', 0, 0, 1, '2024-03-04 01:55:13', '2024-09-20 05:17:43'),
(131, 50, 9, '1972064338.png', '1779284581.jpeg', '[{\"size_id\":[\"24\"],\"color_id\":[\"16\"],\"images\":[\"259522878192781851-2c4a-434e-9690-dd0db1493297.jpeg\",\"4323986172e2b8e3a0-2630-405b-b7ca-dc12ec0ca55a.jpeg\",\"2123188068398e9feed-ba5f-4ba8-9d03-4782a2b23563.jpeg\",\"19184596904fd304922-1be3-43fa-80e3-30c882104fc6.jpeg\"],\"price\":\"699\",\"cut_price\":\"1200\",\"stock\":\"3\"}]', '', 'Handmade clutch', 'handmade-clutch', '5', '71', '', '', '', '', '', 0, 0, 1, '2024-03-04 01:58:31', '2024-09-20 05:14:27'),
(132, 50, 9, '326685709.png', '1976481530.jpeg', '[{\"size_id\":[\"24\"],\"color_id\":[\"12\"],\"images\":[\"17217908100img_4714.mov\",\"134470204127205cd1-4882-491f-8ea6-4d44662638d8.jpeg\",\"18948360402e151e0fa-311f-4528-a60d-a6f1ac6cb21f.jpeg\",\"95243679135bebf1d4-a1d8-4ae8-9cb4-4d054a48d599.jpeg\"],\"price\":\"599\",\"cut_price\":\"1200\",\"stock\":\"10\"}]', '', 'Clutch bag', 'clutch-bag', '5', '72', '', '', '', '', '', 0, 0, 1, '2024-03-04 02:00:10', '2024-09-20 05:14:37'),
(133, 50, 9, '1690682058.png', '1354040504.jpeg', '[{\"size_id\":[\"24\"],\"color_id\":[\"16\"],\"images\":[\"1765297122002f09d93-b8ac-4174-bbf0-b20a1cc3251b.jpeg\",\"126195066717dc63bb6-deca-44d1-a5ad-90ff8e7ceba5.jpeg\",\"1779356516215dc4aad-e5e0-44ec-8b06-f2783d8831f0.jpeg\",\"122106105338a8b8e35-24e1-48b0-bb48-326409d33077.jpeg\"],\"price\":\"399\",\"cut_price\":\"999\",\"stock\":\"\"}]', '', 'Mini dumble bag', 'mini-dumble-bag', '5', '73', '', '', '', '', '', 0, 0, 1, '2024-03-04 02:01:29', '2024-09-20 05:14:46'),
(135, 28, 9, '455944501.jpeg', '1949007696.jpeg', '[{\"size_id\":[\"32\",\"33\"],\"color_id\":[\"12\"],\"images\":[\"4307672960img_5157.jpeg\",\"3766155261a3b04214-d793-41c0-aff5-4091d00aad60.jpeg\",\"765197147281f2f994-b32b-4156-bb26-04748c31e5ec.jpeg\",\"129325753238095156e-272b-4640-913f-fa24fb630b28.jpeg\",\"19150919994934ebaa3-839a-4282-bb47-4d23d9dc9dbb.jpeg\"],\"price\":\"1349\",\"cut_price\":\"2000\",\"stock\":\"\"}]', '', 'Royal prints co ord set', 'royal-prints-co-ord-set', '5', '73', '', '', '', '', '', 1, 0, 0, '2024-03-05 12:55:20', '2024-07-31 04:15:03'),
(136, 51, 9, '586960274.jpeg', '493417950.jpeg', '[{\"size_id\":[\"8\",\"9\"],\"color_id\":[\"3\"],\"images\":[\"17875604680img_5151.jpeg\",\"203505637913957d527-2f43-4f8f-b2e9-69172634b954.jpeg\",\"10173765722716bf563-c124-4992-8355-e1f28113f12b.jpeg\",\"322485115307d53b80-a65c-4346-86e1-235924610bb2.jpeg\"],\"price\":\"995\",\"cut_price\":\"2000\",\"stock\":\"1\"}]', '', 'Embroidery yellow suit', 'embroidery-yellow-suit', '5', '74', '', '', '', '', '', 1, 0, 0, '2024-03-06 05:27:04', '2024-07-31 04:15:14'),
(137, 51, 9, '248655676.jpeg', '504379322.jpeg', '[{\"size_id\":[\"8\",\"9\"],\"color_id\":[\"4\"],\"images\":[\"11494233280img_5152.jpeg\",\"3618380671dc31cf54-d456-458c-abf2-0aadab807c08.jpeg\",\"85240622221bf0a2f8-f700-4529-bd6c-70053428ca7a.jpeg\",\"44763747737d0ce40a-8d52-43cd-b7ac-835ffaa7e346.jpeg\",\"199895970941c4b7b09-a392-40d5-8e9b-74373ebdd101.jpeg\"],\"price\":\"995\",\"cut_price\":\"1700\",\"stock\":\"1\"}]', '', 'Nyra cut suit with mirror work', 'nyra-cut-suit-with-mirror-work', '5', '75', '', '', '', '', '', 1, 0, 0, '2024-03-06 05:29:45', '2024-07-31 04:15:26'),
(138, 51, 9, '355567194.png', '930537968.jpeg', '[{\"size_id\":[\"8\",\"9\",\"21\",\"22\"],\"color_id\":[\"8\"],\"images\":[\"8687272200img_5142.jpeg\",\"142150804414f983b0b-7d38-4c40-a40a-6c0aceec12af.jpeg\",\"1994137118295d57b89-f10c-4769-bf6c-e7509cff2178.jpeg\",\"120072147836a57f2db-901b-4445-a9ed-6fd6e36db3e2.jpeg\",\"210479061249b7bae8b-5ece-4a07-b842-afdd610eb38a.jpeg\"],\"price\":\"795\",\"cut_price\":\"1300\",\"stock\":\"10\"}]', '', 'Red suit set', 'red-suit-set', '5', '77', '', '', '', '', '', 0, 0, 1, '2024-03-07 07:17:23', '2024-09-20 05:17:35'),
(139, 51, 9, '630755339.png', '539756517.jpeg', '[{\"size_id\":[\"8\",\"9\",\"11\"],\"color_id\":[\"12\"],\"images\":[\"3852949760img_5145.jpeg\",\"145568545018dbbd0da-c049-40ca-9516-2579782c43ce.jpeg\",\"1885073485211d62ee5-56f8-4047-ba4f-4e46d17e0dfa.jpeg\",\"20569700173a26f01f3-b97c-40bf-bff0-021046903d78.jpeg\",\"1313502887483dbb1e6-ee2d-4c64-a080-a40b15023387.jpeg\"],\"price\":\"795\",\"cut_price\":\"1300\",\"stock\":\"10\"}]', '', 'Brown suit set', 'brown-suit-set', '5', '78', '', '', '', '', '', 0, 0, 1, '2024-03-07 07:18:45', '2024-09-20 05:17:27'),
(143, 28, 9, '225937779.jpeg', '259218885.jpeg', '[{\"size_id\":[\"11\"],\"color_id\":[\"10\"],\"images\":[\"7687487650img_5159.jpeg\",\"17012726441b6c6ba04-3fde-4e36-9cf5-16f2a0d22294.jpeg\",\"2146882450267ac89ccfa2e4fdea9bb3be8204b8f24.mov\"],\"price\":\"949\",\"cut_price\":\"1500\",\"stock\":\"1\"}]', '', 'Chikankari co ord set', 'chikankari-co-ord-set', '5', '70', '', '', '', '', '', 0, 0, 0, '2024-03-24 08:48:57', '2024-07-31 04:15:43'),
(147, 51, 9, '301776634.jpeg', '811685813.jpeg', '[{\"size_id\":[\"9\",\"11\",\"21\",\"22\"],\"color_id\":[\"12\"],\"images\":[\"11703018790img_5953.jpeg\",\"2133046911img_5952.jpeg\",\"2759082912img_5951.jpeg\",\"495013793img_5950.jpeg\"],\"price\":\"849\",\"cut_price\":\"1500\",\"stock\":\"\"}]', '', 'Brown Anarkali set', 'brown-anarkali-set', '5', 'Brown anarkali', '', '', '', '', '', 0, 0, 1, '2024-04-20 10:56:39', '2024-07-31 01:07:36'),
(148, 51, 9, '906197537.jpeg', '1883856855.jpeg', '[{\"size_id\":[\"9\",\"11\"],\"color_id\":[\"3\"],\"images\":[\"5403643530img_5969.jpeg\",\"5879520961img_5970.jpeg\",\"7263025752img_5971.jpeg\",\"19567276793img_5972.jpeg\",\"3067781084img_5973.jpeg\",\"20271435775img_5974.jpeg\"],\"price\":\"849\",\"cut_price\":\"1500\",\"stock\":\"\"}]', '', 'Bandhani Kurta set', 'bandhani-kurta-set', '5', 'Bandhani', '', '', '', '', '', 0, 0, 1, '2024-04-20 10:58:10', '2024-07-31 01:07:21'),
(149, 28, 9, '113528569.jpeg', '1116843728.jpeg', '[{\"size_id\":[\"9\",\"11\",\"21\",\"22\"],\"color_id\":[\"4\"],\"images\":[\"2268836340img_5954.jpeg\",\"12246461691img_5955.jpeg\",\"13153031842img_5957.jpeg\",\"19795125123img_5956.jpeg\",\"18180506014img_5959.jpeg\"],\"price\":\"949\",\"cut_price\":\"1700\",\"stock\":\"\"}]', '', 'Blue Lace co-ord set', 'blue-lace-co-ord-set', '5', 'Lace coord set', '', '', '', '', '', 0, 1, 0, '2024-04-20 10:59:54', '2024-07-31 04:16:01'),
(150, 28, 9, '825175061.jpeg', '613755729.jpeg', '[{\"size_id\":[\"9\",\"11\",\"21\",\"22\"],\"color_id\":[\"23\"],\"images\":[\"844963670img_5986.jpeg\",\"8718980041img_5964.jpeg\",\"8626999892img_5962.jpeg\",\"18597483913img_5963.jpeg\",\"16501834724img_5961.jpeg\",\"9078365015img_5960.jpeg\"],\"price\":\"949\",\"cut_price\":\"1700\",\"stock\":\"0\"}]', '', 'Braided girl coord set', 'braided-girl-coord-set', '5', 'Braided girl', '', '', '', '', '', 0, 0, 1, '2024-04-20 11:01:16', '2024-07-31 01:06:49'),
(151, 28, 9, '1490997640.jpeg', '929006557.jpeg', '[{\"size_id\":[\"9\",\"11\",\"21\",\"22\"],\"color_id\":[\"3\"],\"images\":[\"21319019950img_5968.jpeg\",\"3825098201img_5965.jpeg\",\"17150959192img_5966.jpeg\",\"3530228623img_5967.jpeg\",\"4812577614img_5991.jpeg\",\"12469198495img_5990.jpeg\"],\"price\":\"949\",\"cut_price\":\"1700\",\"stock\":\"\"}]', '', 'Dulhan coord', 'dulhan-coord', '5', 'Dulhan coord', '', '', '', '', '', 0, 0, 1, '2024-04-20 11:02:30', '2024-07-31 01:06:15'),
(152, 51, 9, '348199253.png', '307123957.jpeg', '[{\"size_id\":[\"9\",\"11\",\"21\",\"22\"],\"color_id\":[\"11\"],\"images\":[\"13228602970img_6850.jpeg\",\"3224286011img_6847.jpeg\",\"8898191212img_6845.jpeg\",\"2143354563img_6848.jpeg\",\"326984864img_6851.jpeg\",\"17882864775img_6846.jpeg\",\"2914304116img_6849.jpeg\",\"14837451037img_6844.jpeg\",\"4616833038img_6843.jpeg\"],\"price\":\"1149\",\"cut_price\":\"2500\",\"stock\":\"4\"}]', '', 'Royal Purple Banarsi', 'royal-purple-banarsi', '5', 'Purple Banarasi', 0x3c703e42656175746966756c20616e6420726f79616c206b757274612073657420696e207075726520636f74746f6e207769746820707572652062616e617261736920647570617474612e266e6273703b3c6272202f3e0d0a426f7468206b7572746120616e642070616e742068617320696e6e6572206c696e696e672e266e6273703b3c6272202f3e0d0a266e6273703b3c2f703e0d0a, '', '', '', '', 1, 0, 1, '2024-05-29 12:56:46', '2024-09-20 03:07:12'),
(160, 51, 9, '194666685.jpeg', '1672804610.jpeg', '[{\"size_id\":[\"11\",\"21\",\"22\"],\"color_id\":[\"2\"],\"images\":[\"12090878950img_7054.jpeg\",\"14195902791img_7058.jpeg\",\"15515310502img_7059.jpeg\",\"17870365663img_7056.jpeg\",\"10828522494img_7057.jpeg\",\"8566558895img_7060.jpeg\",\"20740454226img_7061.jpeg\",\"18194073287img_7055.jpeg\",\"6963878498img_7064.jpeg\"],\"price\":\"949\",\"cut_price\":\"1900\",\"stock\":\"\"},{\"size_id\":[\"11\",\"21\",\"22\"],\"color_id\":[\"3\"],\"images\":[\"18176378760img_7042.jpeg\",\"11045427221img_7043.jpeg\",\"354411762img_7046.jpeg\",\"19419320573img_7044.jpeg\",\"3996213074img_7045.jpeg\",\"17794591265img_7041.jpeg\",\"16271848146img_7062.jpeg\"],\"price\":\"949\",\"cut_price\":\"1900\",\"stock\":\"4\"},{\"size_id\":[\"11\",\"21\",\"22\"],\"color_id\":[\"10\"],\"images\":[\"5300537990img_7047.jpeg\",\"21160770591img_7052.jpeg\",\"1373237692img_7050.jpeg\",\"11037952583img_7049.jpeg\",\"7848386784img_7048.jpeg\",\"5217777685img_7051.jpeg\",\"16906097166img_7053.jpeg\"],\"price\":\"949\",\"cut_price\":\"1900\",\"stock\":\"4\"}]', '', 'Gulabo Kurta Sets', 'gulabo-kurta-sets', '5', 'Gulabo kurta sets', '', '', '', '', '', 1, 0, 0, '2024-06-02 12:25:24', '2024-07-31 01:24:34'),
(161, 51, 9, '1523189816.png', '614674705.jpeg', '[{\"size_id\":[\"11\",\"21\",\"22\"],\"color_id\":[\"8\"],\"images\":[\"20501093840img_6802.jpeg\",\"17651485881img_6804.jpeg\",\"15429165032img_6803.jpeg\",\"6110274113img_6806.jpeg\",\"7456754004img_6805.jpeg\",\"7394152705img_6801.jpeg\",\"6767774576img_6807.jpeg\",\"17434770017img_6808.jpeg\"],\"price\":\"1125\",\"cut_price\":\"2500\",\"stock\":\"4\"}]', '', 'Banarasiya', 'banarasiya', '5', 'Banarasiya ', 0x3c703e42656175746966756c6c79206372616674656420726f79616c206b757274612073657420776974682073657175696e20656d62726f69646572792e204b757274612068617320696e6e6572206c696e696e6720617474616368656420666f7220636f6d666f72742e266e6273703b3c6272202f3e0d0a466162726963206973204a616d20636f74746f6e20776974682062616e6172617369206475706174746120696e20707572652073696c6b20656c65766174696e6720746865206c6f6f6b2066726f6d206865616420746f20746f652e3c2f703e0d0a, '', '', '', '', 1, 0, 1, '2024-06-02 12:42:08', '2024-09-20 02:58:49'),
(162, 51, 9, '1162157223.png', '771464854.jpeg', '[{\"size_id\":[\"11\"],\"color_id\":[\"7\"],\"images\":[\"13715310550img_6876.jpeg\",\"5090837341img_6877.jpeg\",\"13183452752img_6880.jpeg\",\"20321586473img_6881.jpeg\",\"12749313794img_6878.jpeg\",\"9572597375img_6883.jpeg\",\"305469636img_6882.jpeg\",\"18589598967img_6879.jpeg\",\"7450991418img_6875.jpeg\"],\"price\":\"1149\",\"cut_price\":\"2500\",\"stock\":\"4\"},{\"size_id\":[\"11\"],\"color_id\":[\"6\"],\"images\":[\"12450938990img_6860.jpeg\",\"4064798181img_6861.jpeg\",\"12842461122img_6858.jpeg\",\"20005561723img_6859.jpeg\",\"1957382804img_6862.jpeg\",\"6449537875img_6857.jpeg\"],\"price\":\"1149\",\"cut_price\":\"2500\",\"stock\":\"4\"},{\"size_id\":[\"11\"],\"color_id\":[\"8\"],\"images\":[\"662875030img_6870.jpeg\",\"14172706041img_6874.jpeg\",\"3015375012img_6869.jpeg\",\"20536850143img_6872.jpeg\",\"12839835444img_6873.jpeg\",\"525702425img_6855.jpeg\",\"16781098066img_6871.jpeg\"],\"price\":\"1149\",\"cut_price\":\"2500\",\"stock\":\"4\"},{\"size_id\":[\"11\"],\"color_id\":[\"18\"],\"images\":[\"9903441290img_6868.jpeg\",\"17411832601img_6864.jpeg\",\"19480808022img_6863.jpeg\",\"19300120643img_6866.jpeg\",\"12851599944img_6865.jpeg\",\"9742212295img_6867.jpeg\",\"5906311806img_6854.jpeg\"],\"price\":\"1149\",\"cut_price\":\"2500\",\"stock\":\"4\"}]', '', 'White kurta set with contrast dupatta', 'white-kurta-set-with-contrast-dupatta', '5', 'White kurta set', 0x3c703e42656175746966756c6c79206372616674656420726f79616c207768697465206b757274612073657420696e206a616d20636f74746f6e207769746820696e6e6572206c696e696e672e3c2f703e0d0a0d0a3c703e436f6e747261737420647570617474617320696e20646966666572656e74207368616465732061726520746865206b657920686967686c69676874206f66207468697320756e697175656c792062656175746966756c2061727469636c652e3c2f703e0d0a, '', '', '', '', 1, 0, 1, '2024-06-02 01:10:47', '2024-09-20 03:01:36'),
(163, 51, 9, '1563690904.png', '677562180.png', '{\"1\":{\"size_id\":[\"11\"],\"color_id\":[\"11\"],\"images\":[\"3021602840img_6905.jpeg\",\"3206941111img_6906.jpeg\",\"19191550762img_6904.jpeg\",\"17315538153img_6908.jpeg\",\"14251678904img_6907.jpeg\",\"20534813855img_6886.jpeg\"],\"price\":\"1099\",\"cut_price\":\"2500\",\"stock\":\"4\"},\"2\":{\"size_id\":[\"11\"],\"color_id\":[\"23\"],\"images\":[\"356002800img_6889.jpeg\",\"1792693741img_6890.jpeg\",\"16806609612img_6896.jpeg\"],\"price\":null,\"cut_price\":null,\"stock\":null}}', '', 'Pakistani suits', 'pakistani-suits', '5', 'Pakistani suits', 0x3c703e42656175746966756c6c7920637261667465642070616b697374616e69207374796c65207375697420776974682077686974652074687265616420656d62726f696465727920616c6c206f76657220746865207365742e3c2f703e0d0a0d0a3c703e5075726520636f74746f6e20666162726963207769746820696e6e6572206c696e696e672061747461636865642e3c2f703e0d0a, '', '', '', '', 1, 0, 1, '2024-06-02 01:30:10', '2024-09-20 03:06:05'),
(166, 51, 9, '622013873.jpeg', '2015854258.jpeg', '[{\"size_id\":[\"21\",\"22\"],\"color_id\":[\"8\"],\"images\":[\"14635717330img_7027.jpeg\",\"20149674761img_7032.jpeg\",\"5902404032img_7028.jpeg\",\"7840908313img_7031.jpeg\"],\"price\":\"699\",\"cut_price\":\"1200\",\"stock\":\"1\"},{\"size_id\":[\"21\",\"22\"],\"color_id\":[\"11\"],\"images\":[\"1963923430img_7038.jpeg\",\"7777158051img_7036.jpeg\",\"11225413102img_7035.jpeg\",\"20894080213img_7013.jpeg\",\"10227566694img_7016.jpeg\"],\"price\":\"699\",\"cut_price\":\"1200\",\"stock\":\"1\"}]', '', 'Printed kurta set', 'printed-kurta-set', '5', 'Printed kurta set', '', '', '', '', '', 1, 0, 0, '2024-06-11 05:29:11', '2024-07-31 01:20:22'),
(168, 28, 9, '850026800.jpg', '1377221608.jpg', '[{\"size_id\":[\"22\",\"23\"],\"color_id\":[\"4\"],\"images\":[\"70273349701000129877.jpg\",\"60622532211000129937.jpg\",\"170469591121000129829.jpg\",\"73947889631000129934.jpg\"],\"price\":\"1099\",\"cut_price\":\"1199\",\"stock\":\"1\"}]', '', 'Cutwork co ord set ', 'cutwork-co-ord-set', '5', 'Flower\'s co ord set ', 0x3c703e57652073746179206168656164206f6620746865206375727665206279206f66666572696e67206672657368207374796c657320616e642064657369676e732074686174207265736f6e61746520776974682074686520657665722d6368616e67696e672066617368696f6e20707265666572656e636573206f6620496e6469616e20776f6d656e2e2044726177696e6720696e737069726174696f6e2066726f6d20746865206c617465737420696e7465726e6174696f6e616c207472656e64732c207765207461696c6f72207468656d20746f207375697420746865206c6f63616c2070616c6174652c20656e737572696e67206f757220636f6c6c656374696f6e732061726520626f746820636f6e74656d706f7261727920616e642063756c747572616c6c792072656c6576616e742e2671756f743b3c2f703e0d0a, '', 0x3c703e46697420547970653a20526567756c6172205374726967687420412d6c696e6520637574776f726b20436f2d6f72642050616e74205365743c2f703e0d0a0d0a3c703ee298852050726f64756374204d6174657269616c203a2d20436f74746f6e20426c656e64207c7c20436f6c6f7572203a2d20626c7565207c7c205061747465726e203a2d20466c6f72616c20656d62726f696465727920616e6420706174636820776f726b266e6273703b3c2f703e0d0a0d0a3c703ee29885205374796c65203a2d20434f2d4f44532053657420666f7220576f6d656e206c6c204e65636b203a2d20562d4e65636b206c6c20536c65657665204c656e677468203a2d20332f3420536c65657665206c6c20426f74746f6d203a2d2050616e74206c6c205061636b61676520436f6e7461696e732031206b7572746120616e6420312050616e743c2f703e0d0a0d0a3c703ee298852053697a6573203a2d204b757274612d204c2d34302c205858584c34362c20506c6561736520636865636b207468652073697a6520636861727420696e206f75722070726f64756374206465736372697074696f6e206265666f72652070757263686173696e672e2044756520746f206d616e75616c206d6561737572656d656e742c207468652073697a65206d61792068617665206120646576696174696f6e206f6620312d32636d2c20706c6561736520756e6465727374616e64213c2f703e0d0a0d0a3c703ee29885204974656d204c656e677468203a2d2043617375616c207c7c204f63636173696f6e203a2d2043617375616c202c4f66666963652077656172202c5061727479202c57656464696e67202c20526167756c61722026616d703b20466573746976652c204461696c7920576561722c20486f6d652c20576f726b2c2053747265657420576561722c2044617465732c205661636174696f6e2c2053686f7070696e673c2f703e0d0a0d0a3c703e266e6273703b3c2f703e0d0a0d0a3c703e266e6273703b3c2f703e0d0a, '', '', 0, 1, 1, '2024-06-13 01:09:24', '2024-07-31 01:19:57'),
(169, 28, 9, '998498075.jpg', '1104090939.jpg', '[{\"size_id\":[\"11\",\"21\"],\"color_id\":[\"4\"],\"images\":[\"150644253401000130069.jpg\",\"65792377111000129841.jpg\",\"113462064421000129835.jpg\"],\"price\":\"949\",\"cut_price\":\"1899\",\"stock\":\"10\"}]', '', 'Sequence work co ord set ', 'sequence-work-co-ord-set', '5', 'Sequence co ord set ', 0x3c703e57652073746179206168656164206f6620746865206375727665206279206f66666572696e67206672657368207374796c657320616e642064657369676e732074686174207265736f6e61746520776974682074686520657665722d6368616e67696e672066617368696f6e20707265666572656e636573206f6620496e6469616e20776f6d656e2e2044726177696e6720696e737069726174696f6e2066726f6d20746865206c617465737420696e7465726e6174696f6e616c207472656e64732c207765207461696c6f72207468656d20746f207375697420746865206c6f63616c2070616c6174652c20656e737572696e67206f757220636f6c6c656374696f6e732061726520626f746820636f6e74656d706f7261727920616e642063756c747572616c6c792072656c6576616e742e2671756f743b3c2f703e0d0a, '', 0x3c703e46697420547970653a20526567756c6172205374726967687420412d6c696e6520637574776f726b20436f2d6f72642050616e74205365743c2f703e0d0a0d0a3c703ee298852050726f64756374204d6174657269616c203a2d204d61736c696e20436f74746f6e20426c656e64207c7c20436f6c6f7572203a2d20626c7565207c7c205061747465726e203a2d2073657175656e6365266e6273703b3c2f703e0d0a0d0a3c703ee29885205374796c65203a2d20434f2d4f44532053657420666f7220576f6d656e206c6c204e65636b203a2d20636f6c6c617220562d4e65636b206c6c20536c65657665204c656e677468203a2d20332f3420536c65657665206c6c20426f74746f6d203a2d2050616e74206c6c205061636b61676520436f6e7461696e732031206b7572746120616e6420312050616e743c2f703e0d0a0d0a3c703ee298852053697a6573203a2d204b757274612d20584c2d34322c2058584c2d34342c20506c6561736520636865636b207468652073697a6520636861727420696e206f75722070726f64756374206465736372697074696f6e206265666f72652070757263686173696e672e2044756520746f206d616e75616c206d6561737572656d656e742c207468652073697a65206d61792068617665206120646576696174696f6e206f6620312d32636d2c20706c6561736520756e6465727374616e64213c2f703e0d0a0d0a3c703ee29885204974656d204c656e677468203a2d2043617375616c207c7c204f63636173696f6e203a2d2043617375616c202c4f66666963652077656172202c5061727479202c57656464696e67202c20526167756c61722026616d703b20466573746976652c204461696c7920576561722c20486f6d652c20576f726b2c2053747265657420576561722c2044617465732c205661636174696f6e2c2053686f7070696e673c2f703e0d0a0d0a3c703e266e6273703b3c2f703e0d0a0d0a3c703e266e6273703b3c2f703e0d0a0d0a3c703e266e6273703b3c2f703e0d0a, '', '', 0, 1, 1, '2024-06-13 01:24:00', '2024-07-31 02:42:19'),
(170, 28, 9, '605564163.jpg', '1527001932.jpg', '[{\"size_id\":[\"21\",\"22\"],\"color_id\":[\"1\"],\"images\":[\"16222715750img-20240612-wa0009.jpg\",\"198974404211000129907.jpg\",\"13938277252img-20240612-wa0018.jpg\",\"17640195233img-20240612-wa0013.jpg\",\"141948515141000129916.jpg\"],\"price\":\"1099\",\"cut_price\":\"1999\",\"stock\":\"2\"}]', '', 'Cutwork co ord set (Red)', 'cutwork-co-ord-set-red', '5', 'Flower\'s co ord set (2)', 0x3c703e496e2074686520496e6469616e206d61726b65742c20562d6e65636b20636f2d6f7264207365747320666f7220776f6d656e206172652063757272656e746c79207472656e64696e67206173207374796c69736820616e6420766572736174696c652063686f696365732e2054686579206f6674656e206665617475726520636f6d666f727461626c652066616272696373206c696b6520636f74746f6e206f72206c696e656e2c20616e6420636f6d6520696e20612076617269657479206f662076696272616e7420636f6c6f727320616e64207061747465726e7320746861742061707065616c20746f206d6f6465726e20746173746573207768696c65207265666c656374696e6720747261646974696f6e616c20696e666c75656e6365732e2054686573652073657473207479706963616c6c7920696e636c7564652061206d61746368696e6720746f7020616e6420626f74746f6d2c206d616b696e67207468656d206561737920746f207374796c6520666f7220626f74682063617375616c20616e642073656d692d666f726d616c206f63636173696f6e732e3c2f703e0d0a0d0a3c703e266e6273703b3c2f703e0d0a, '', 0x3c703e46697420547970653a20526567756c6172205374726967687420412d6c696e6520637574776f726b20436f2d6f72642050616e74205365743c2f703e0d0a0d0a3c703ee298852050726f64756374204d6174657269616c203a2d20436f74746f6e20426c656e64207c7c20436f6c6f7572203a2d20526564207c7c205061747465726e203a2d20637574776f726b266e6273703b3c2f703e0d0a0d0a3c703ee29885205374796c65203a2d20434f2d4f44532053657420666f7220576f6d656e206c6c204e65636b203a2d20562d4e65636b206c6c20536c65657665204c656e677468203a2d20332f3420536c65657665206c6c20426f74746f6d203a2d2050616e74206c6c205061636b61676520436f6e7461696e732031206b7572746120616e6420312050616e743c2f703e0d0a0d0a3c703ee298852053697a6573203a2d204b757274612d20584c2d34322c2058584c2d34342c20506c6561736520636865636b207468652073697a6520636861727420696e206f75722070726f64756374206465736372697074696f6e206265666f72652070757263686173696e672e2044756520746f206d616e75616c206d6561737572656d656e742c207468652073697a65206d61792068617665206120646576696174696f6e206f6620312d32636d2c20706c6561736520756e6465727374616e64213c2f703e0d0a0d0a3c703ee29885204974656d204c656e677468203a2d2043617375616c207c7c204f63636173696f6e203a2d2043617375616c202c4f66666963652077656172202c5061727479202c57656464696e67202c20526167756c61722026616d703b20466573746976652c204461696c7920576561722c20486f6d652c20576f726b2c2053747265657420576561722c2044617465732c205661636174696f6e2c2053686f7070696e673c2f703e0d0a0d0a3c703e266e6273703b3c2f703e0d0a0d0a3c703e496e2074686520496e6469616e206d61726b65742c20562d6e65636b20636f2d6f7264207365747320666f7220776f6d656e206172652063757272656e746c79207472656e64696e67206173207374796c69736820616e6420766572736174696c652063686f696365732e2054686579206f6674656e206665617475726520636f6d666f727461626c652066616272696373206c696b6520636f74746f6e206f72206c696e656e2c20616e6420636f6d6520696e20612076617269657479206f662076696272616e7420636f6c6f727320616e64207061747465726e7320746861742061707065616c20746f206d6f6465726e20746173746573207768696c65207265666c656374696e6720747261646974696f6e616c20696e666c75656e6365732e2054686573652073657473207479706963616c6c7920696e636c7564652061206d61746368696e6720746f7020616e6420626f74746f6d2c206d616b696e67207468656d206561737920746f207374796c6520666f7220626f74682063617375616c20616e642073656d692d666f726d616c206f63636173696f6e733c2f703e0d0a0d0a3c703e2e3c2f703e0d0a0d0a3c703e266e6273703b3c2f703e0d0a, '', '', 0, 1, 1, '2024-06-13 02:07:36', '2024-07-31 01:19:21'),
(171, 28, 9, '167902936.jpg', '1767922222.jpg', '[{\"size_id\":[\"21\",\"22\"],\"color_id\":[\"17\"],\"images\":[\"5829885660img-20240612-wa0029.jpg\",\"18401134231img-20240612-wa0025.jpg\",\"4998683312img-20240612-wa0027.jpg\"],\"price\":\"1099\",\"cut_price\":\"1999\",\"stock\":\"2\"}]', '', 'Cutwork co ord set (mustard)', 'cutwork-co-ord-set-mustard', '5', 'Flower\'s co ord set (3)', 0x3c703e496e2074686520496e6469616e206d61726b65742c20562d6e65636b20636f2d6f7264207365747320666f7220776f6d656e206172652063757272656e746c79207472656e64696e67206173207374796c69736820616e6420766572736174696c652063686f696365732e2054686579206f6674656e206665617475726520636f6d666f727461626c652066616272696373206c696b6520636f74746f6e206f72206c696e656e2c20616e6420636f6d6520696e20612076617269657479206f662076696272616e7420636f6c6f727320616e64207061747465726e7320746861742061707065616c20746f206d6f6465726e20746173746573207768696c65207265666c656374696e6720747261646974696f6e616c20696e666c75656e6365732e2054686573652073657473207479706963616c6c7920696e636c7564652061206d61746368696e6720746f7020616e6420626f74746f6d2c206d616b696e67207468656d206561737920746f207374796c6520666f7220626f74682063617375616c20616e642073656d692d666f726d616c206f63636173696f6e732e3c2f703e0d0a, '', 0x3c703e46697420547970653a20526567756c6172205374726967687420412d6c696e6520637574776f726b20436f2d6f72642050616e74205365743c2f703e0d0a0d0a3c703ee298852050726f64756374204d6174657269616c203a2d20436f74746f6e20426c656e64207c7c20436f6c6f7572203a2d206d7573746172647c7c205061747465726e203a2d20637574776f726b266e6273703b3c2f703e0d0a0d0a3c703ee29885205374796c65203a2d20434f2d4f44532053657420666f7220576f6d656e206c6c204e65636b203a2d20562d4e65636b206c6c20536c65657665204c656e677468203a2d20332f3420536c65657665206c6c20426f74746f6d203a2d2050616e74206c6c205061636b61676520436f6e7461696e732031206b7572746120616e6420312050616e743c2f703e0d0a0d0a3c703ee298852053697a6573203a2d204b757274612d20584c2d34322c2058584c2d34342c20506c6561736520636865636b207468652073697a6520636861727420696e206f75722070726f64756374206465736372697074696f6e206265666f72652070757263686173696e672e2044756520746f206d616e75616c206d6561737572656d656e742c207468652073697a65206d61792068617665206120646576696174696f6e206f6620312d32636d2c20706c6561736520756e6465727374616e64213c2f703e0d0a0d0a3c703ee29885204974656d204c656e677468203a2d2043617375616c207c7c204f63636173696f6e203a2d2043617375616c202c4f66666963652077656172202c5061727479202c57656464696e67202c20526167756c61722026616d703b20466573746976652c204461696c7920576561722c20486f6d652c20576f726b2c2053747265657420576561722c2044617465732c205661636174696f6e2c2053686f7070696e673c2f703e0d0a, '', '', 0, 1, 1, '2024-06-13 02:10:42', '2024-07-31 01:19:10'),
(172, 28, 9, '1583823884.jpg', '698538142.jpg', '[{\"size_id\":[\"11\",\"23\"],\"color_id\":[\"11\"],\"images\":[\"9642801190img-20240612-wa0051.jpg\",\"1695651331img-20240612-wa0046.jpg\",\"14687960012img-20240612-wa0049.jpg\",\"11615568603img-20240612-wa0047.jpg\",\"10593635674img-20240612-wa0052.jpg\"],\"price\":\"1099\",\"cut_price\":\"1999\",\"stock\":\"2\"}]', '', 'Cutwork co ord set (green)', 'cutwork-co-ord-set-green', '5', 'Flower\'s co ord set (4)', 0x3c703e266e6273703b3c2f703e0d0a0d0a3c703e496e2074686520496e6469616e206d61726b65742c20562d6e65636b20636f2d6f7264207365747320666f7220776f6d656e206172652063757272656e746c79207472656e64696e67206173207374796c69736820616e6420766572736174696c652063686f696365732e2054686579206f6674656e206665617475726520636f6d666f727461626c652066616272696373206c696b6520636f74746f6e206f72206c696e656e2c20616e6420636f6d6520696e20612076617269657479206f662076696272616e7420636f6c6f727320616e64207061747465726e7320746861742061707065616c20746f206d6f6465726e20746173746573207768696c65207265666c656374696e6720747261646974696f6e616c20696e666c75656e6365732e2054686573652073657473207479706963616c6c7920696e636c7564652061206d61746368696e6720746f7020616e6420626f74746f6d2c206d616b696e67207468656d206561737920746f207374796c6520666f7220626f74682063617375616c20616e642073656d692d666f726d616c206f63636173696f6e733c2f703e0d0a, '', 0x3c703e266e6273703b3c2f703e0d0a0d0a3c703e46697420547970653a20526567756c6172205374726967687420412d6c696e6520637574776f726b20436f2d6f72642050616e74205365743c2f703e0d0a0d0a3c703ee298852050726f64756374204d6174657269616c203a2d20436f74746f6e20426c656e64207c7c20436f6c6f7572203a2d20677265656e7c7c205061747465726e203a2d20637574776f726b266e6273703b3c2f703e0d0a0d0a3c703ee29885205374796c65203a2d20434f2d4f44532053657420666f7220576f6d656e206c6c204e65636b203a2d20562d4e65636b206c6c20536c65657665204c656e677468203a2d20332f3420536c65657665206c6c20426f74746f6d203a2d2050616e74206c6c205061636b61676520436f6e7461696e732031206b7572746120616e6420312050616e743c2f703e0d0a0d0a3c703ee298852053697a6573203a2d204b757274612d204c2d3430204c2d34322c205858584c2d34362c20506c6561736520636865636b207468652073697a6520636861727420696e206f75722070726f64756374206465736372697074696f6e206265666f72652070757263686173696e672e2044756520746f206d616e75616c206d6561737572656d656e742c207468652073697a65206d61792068617665206120646576696174696f6e206f6620312d32636d2c20706c6561736520756e6465727374616e64213c2f703e0d0a0d0a3c703ee29885204974656d204c656e677468203a2d2043617375616c207c7c204f63636173696f6e203a2d2043617375616c202c4f66666963652077656172202c5061727479202c57656464696e67202c20526167756c61722026616d703b20466573746976652c204461696c7920576561722c20486f6d652c20576f726b2c2053747265657420576561722c2044617465732c205661636174696f6e2c2053686f7070696e673c2f703e0d0a, '', '', 0, 1, 1, '2024-06-13 02:16:12', '2024-07-31 01:18:54'),
(173, 28, 9, '616594325.jpg', '1146560474.jpg', '[{\"size_id\":[\"22\",\"23\"],\"color_id\":[\"2\"],\"images\":[\"23751657501000130072.jpg\",\"66245138611000130059.jpg\",\"86130174521000130073.jpg\",\"107677881331000130061.jpg\"],\"price\":\"945\",\"cut_price\":\"1999\",\"stock\":\"2\"}]', '', 'Sequence work co ord set (black )', 'sequence-work-co-ord-set-black-', '5', 'Sequence co ord set (2)', 0x3c703e496e2074686520496e6469616e206d61726b65742c20562d6e65636b20636f2d6f7264207365747320666f7220776f6d656e206172652063757272656e746c79207472656e64696e67206173207374796c69736820616e6420766572736174696c652063686f696365732e2054686579206f6674656e206665617475726520636f6d666f727461626c652066616272696373206c696b6520636f74746f6e206f72206c696e656e2c20616e6420636f6d6520696e20612076617269657479206f662076696272616e7420636f6c6f727320616e64207061747465726e7320746861742061707065616c20746f206d6f6465726e20746173746573207768696c65207265666c656374696e6720747261646974696f6e616c20696e666c75656e6365732e2054686573652073657473207479706963616c6c7920696e636c7564652061206d61746368696e6720746f7020616e6420626f74746f6d2c206d616b696e67207468656d206561737920746f207374796c6520666f7220626f74682063617375616c20616e642073656d692d666f726d616c206f63636173696f6e732e3c2f703e0d0a, '', 0x3c703e46697420547970653a20526567756c6172205374726967687420412d6c696e6520637574776f726b20436f2d6f72642050616e74205365743c2f703e0d0a0d0a3c703ee298852050726f64756374204d6174657269616c203a2d204d61736c696e20436f74746f6e20426c656e64207c7c20436f6c6f7572203a2d20426c61636b7c7c205061747465726e203a2d20637574776f726b266e6273703b3c2f703e0d0a0d0a3c703ee29885205374796c65203a2d20434f2d4f44532053657420666f7220576f6d656e206c6c204e65636b203a2d636f6c6c617220562d4e65636b206c6c20536c65657665204c656e677468203a2d20332f3420536c65657665206c6c20426f74746f6d203a2d2050616e74206c6c205061636b61676520436f6e7461696e732031206b7572746120616e6420312050616e743c2f703e0d0a0d0a3c703ee298852053697a6573203a2d204b757274612058584c2d34342c205858584c2d34362c20506c6561736520636865636b207468652073697a6520636861727420696e206f75722070726f64756374206465736372697074696f6e206265666f72652070757263686173696e672e2044756520746f206d616e75616c206d6561737572656d656e742c207468652073697a65206d61792068617665206120646576696174696f6e206f6620312d32636d2c20706c6561736520756e6465727374616e64213c2f703e0d0a0d0a3c703ee29885204974656d204c656e677468203a2d2043617375616c207c7c204f63636173696f6e203a2d2043617375616c202c4f66666963652077656172202c5061727479202c57656464696e67202c20526167756c61722026616d703b20466573746976652c204461696c7920576561722c20486f6d652c20576f726b2c2053747265657420576561722c2044617465732c205661636174696f6e2c2053686f7070696e3c2f703e0d0a0d0a3c703e673c2f703e0d0a, '', '', 0, 1, 1, '2024-06-13 02:25:31', '2024-07-31 01:18:02'),
(174, 28, 9, '2144978381.jpg', '273612982.jpg', '[{\"size_id\":[\"11\",\"23\"],\"color_id\":[\"7\"],\"images\":[\"190230261501000129787.jpg\",\"129106052711000129790.jpg\",\"147241207021000129868.jpg\"],\"price\":\"945\",\"cut_price\":\"1999\",\"stock\":\"2\"}]', '', 'Sequence work co ord set (Pink)', 'sequence-work-co-ord-set-pink', '5', 'Sequence co ord set (3)', 0x3c703e496e2074686520496e6469616e206d61726b65742c20562d6e65636b20636f2d6f7264207365747320666f7220776f6d656e206172652063757272656e746c79207472656e64696e67206173207374796c69736820616e6420766572736174696c652063686f696365732e2054686579206f6674656e206665617475726520636f6d666f727461626c652066616272696373206c696b6520636f74746f6e206f72206c696e656e2c20616e6420636f6d6520696e20612076617269657479206f662076696272616e7420636f6c6f727320616e64207061747465726e7320746861742061707065616c20746f206d6f6465726e20746173746573207768696c65207265666c656374696e6720747261646974696f6e616c20696e666c75656e6365732e2054686573652073657473207479706963616c6c7920696e636c7564652061206d61746368696e6720746f7020616e6420626f74746f6d2c206d616b696e67207468656d206561737920746f207374796c6520666f7220626f74682063617375616c20616e642073656d692d666f726d616c206f63636173696f6e732e3c2f703e0d0a, '', 0x3c703e46697420547970653a20526567756c6172205374726967687420412d6c696e6520637574776f726b20436f2d6f72642050616e74205365743c2f703e0d0a0d0a3c703ee298852050726f64756374204d6174657269616c203a2d204d61736c696e20436f74746f6e20426c656e64207c7c20436f6c6f7572203a2d2070696e6b7c7c205061747465726e203a2d20637574776f726b266e6273703b3c2f703e0d0a0d0a3c703ee29885205374796c65203a2d20434f2d4f44532053657420666f7220576f6d656e206c6c204e65636b203a2d636f6c6c617220562d4e65636b206c6c20536c65657665204c656e677468203a2d20332f3420536c65657665206c6c20426f74746f6d203a2d2050616e74206c6c205061636b61676520436f6e7461696e732031206b7572746120616e6420312050616e743c2f703e0d0a0d0a3c703ee298852053697a6573203a2d204b75727461204c2d34302c205858584c2d34362c20506c6561736520636865636b207468652073697a6520636861727420696e206f75722070726f64756374206465736372697074696f6e206265666f72652070757263686173696e672e2044756520746f206d616e75616c206d6561737572656d656e742c207468652073697a65206d61792068617665206120646576696174696f6e206f6620312d32636d2c20706c6561736520756e6465727374616e64213c2f703e0d0a0d0a3c703ee29885204974656d204c656e677468203a2d2043617375616c207c7c204f63636173696f6e203a2d2043617375616c202c4f66666963652077656172202c5061727479202c57656464696e67202c20526167756c61722026616d703b20466573746976652c204461696c7920576561722c20486f6d652c20576f726b2c2053747265657420576561722c2044617465732c205661636174696f6e2c2053686f7070696e673c2f703e0d0a, '', '', 0, 1, 1, '2024-06-13 02:29:52', '2024-07-31 01:17:52'),
(176, 28, 9, '1383412700.jpg', '268755630.jpg', '[{\"size_id\":[\"11\",\"23\"],\"color_id\":[\"11\"],\"images\":[\"1401774960img-20240612-wa0026.jpg\",\"16409794591img-20240612-wa0032.jpg\",\"16050805532img-20240612-wa0031.jpg\",\"8173223743img-20240612-wa0028.jpg\"],\"price\":\"949\",\"cut_price\":\"1999\",\"stock\":\"2\"}]', '', 'Sequence work co ord set (green )', 'sequence-work-co-ord-set-green-', '5', 'Sequence co ord set (4)', 0x3c703e496e2074686520496e6469616e206d61726b65742c20636f2d6f7264207365747320666f7220776f6d656e206172652063757272656e746c79207472656e64696e67206173207374796c69736820616e6420766572736174696c652063686f696365732e2054686579206f6674656e206665617475726520636f6d666f727461626c652066616272696373206c696b6520636f74746f6e206f72206c696e656e2c20616e6420636f6d6520696e20612076617269657479206f662076696272616e7420636f6c6f727320616e64207061747465726e7320746861742061707065616c20746f206d6f6465726e20746173746573207768696c65207265666c656374696e6720747261646974696f6e616c20696e666c75656e6365732e2054686573652073657473207479706963616c6c7920696e636c7564652061206d61746368696e6720746f7020616e6420626f74746f6d2c206d616b696e67207468656d206561737920746f207374796c6520666f7220626f74682063617375616c20616e642073656d692d666f726d616c206f63636173696f6e732e3c2f703e0d0a, '', 0x3c703e46697420547970653a20526567756c6172205374726967687420412d6c696e6520637574776f726b20436f2d6f72642050616e74205365743c2f703e0d0a0d0a3c703ee298852050726f64756374204d6174657269616c203a2d204d61736c696e20436f74746f6e20426c656e64207c7c20436f6c6f7572203a2d20677265656e207c7c205061747465726e203a2d20637574776f726b266e6273703b3c2f703e0d0a0d0a3c703ee29885205374796c65203a2d20434f2d4f44532053657420666f7220576f6d656e206c6c204e65636b203a2d20636f6c6c61722d4e65636b206c6c20536c65657665204c656e677468203a2d20332f3420536c65657665206c6c20426f74746f6d203a2d2050616e74206c6c205061636b61676520436f6e7461696e732031206b7572746120616e6420312050616e743c2f703e0d0a0d0a3c703ee298852053697a6573203a2d204b75727461204c2d34302c205858584c2d34362c20506c6561736520636865636b207468652073697a6520636861727420696e206f75722070726f64756374206465736372697074696f6e206265666f72652070757263686173696e672e2044756520746f206d616e75616c206d6561737572656d656e742c207468652073697a65206d61792068617665206120646576696174696f6e206f6620312d32636d2c20706c6561736520756e6465727374616e64213c2f703e0d0a0d0a3c703ee29885204974656d204c656e677468203a2d2043617375616c207c7c204f63636173696f6e203a2d2043617375616c202c4f66666963652077656172202c5061727479202c57656464696e67202c20526167756c61722026616d703b20466573746976652c204461696c7920576561722c20486f6d652c20576f726b2c2053747265657420576561722c2044617465732c205661636174696f6e2c2053686f7070696e3c2f703e0d0a0d0a3c703e673c2f703e0d0a, '', '', 0, 1, 1, '2024-06-13 02:52:41', '2024-07-31 01:17:41'),
(177, 28, 9, '1677345824.jpeg', '623649298.jpeg', '[{\"size_id\":[\"11\",\"21\",\"22\"],\"color_id\":[\"2\"],\"images\":[\"121022093107c5cfc53-c297-4e16-a1d8-a3945db65cc2.jpeg\",\"20710009911ad90e3f6-06ac-441c-bf66-6d7bd5efc3f3.jpeg\",\"12648227312bc0c2e04-3659-4062-ae2e-07d36aee1018.jpeg\",\"8725818583366ff5ff-bbe8-4687-8a35-d7fe1ab6a0e4.jpeg\",\"1416878744116246d0-74b5-4d7e-b6fa-fab33acb500d.jpeg\"],\"price\":\"899\",\"cut_price\":\"2200\",\"stock\":\"6\"}]', '', 'Black white thread floral coord ', 'black-white-thread-floral-coord', '5', 'Whit thread floral cut', 0x3c703e3c7374726f6e673e46697420547970653a3c2f7374726f6e673e20526567756c6172205374726967687420466c6f72616c266e6273703b637574776f726b20436f2d6f72642050616e74205365743c2f703e0d0a0d0a3c703ee29885203c7374726f6e673e50726f64756374204d6174657269616c203c2f7374726f6e673e3a2d20436f74746f6e20426c656e64207c7c3c7374726f6e673e20436f6c6f7572203c2f7374726f6e673e3a2d20426c61636b266e6273703b7c7c203c7374726f6e673e5061747465726e3c2f7374726f6e673e203a2d20466c6f72616c20637574776f726b20776974682077686974652074687265616420656d62726f6964657279266e6273703b3c2f703e0d0a0d0a3c703ee298853c7374726f6e673e205374796c65203c2f7374726f6e673e3a2d20434f2d4f44532053657420666f7220576f6d656e206c6c3c7374726f6e673e204e65636b3c2f7374726f6e673e203a2d20562d4e65636b206c6c203c7374726f6e673e536c65657665204c656e6774683c2f7374726f6e673e203a2d204c6f6e6720536c65657665206c6c3c7374726f6e673e20426f74746f6d3c2f7374726f6e673e203a2d2050616e74206c6c205061636b61676520436f6e7461696e732031206b7572746120616e6420312050616e743c2f703e0d0a0d0a3c703ee298853c7374726f6e673e2053697a65733c2f7374726f6e673e203a2d204b757274612d204c2d34302c584c2d34322c2058584c2d343420494920506c6561736520636865636b207468652073697a6520636861727420696e206f75722070726f64756374206465736372697074696f6e206265666f72652070757263686173696e672e2044756520746f206d616e75616c206d6561737572656d656e742c207468652073697a65206d61792068617665206120646576696174696f6e206f6620312d32636d2c20706c6561736520756e6465727374616e64213c2f703e0d0a0d0a3c703ee29885203c7374726f6e673e4974656d204c656e6774683c2f7374726f6e673e203a2d2043617375616c207c7c203c7374726f6e673e4f63636173696f6e3c2f7374726f6e673e203a2d2043617375616c202c4f66666963652077656172202c5061727479202c57656464696e67202c20526167756c61722026616d703b20466573746976652c204461696c7920576561722c20486f6d652c20576f726b2c2053747265657420576561722c2044617465732c205661636174696f6e2c2053686f7070696e673c2f703e0d0a0d0a3c703e266e6273703b3c2f703e0d0a, '', '', '', '', 0, 1, 1, '2024-07-31 04:30:29', '2024-07-31 05:42:57');
INSERT INTO `product` (`id`, `cat_id`, `vendor_id`, `thumb_img`, `thumb_img2`, `all_images`, `all_size`, `name`, `slug`, `rating`, `sku`, `small_info`, `video_link`, `description`, `additional_info`, `avalibility`, `new_arrival`, `tranding_product`, `status`, `addeddate`, `modifieddate`) VALUES
(178, 28, 9, '1282509748.jpeg', '1328322181.jpeg', '[{\"size_id\":[\"9\",\"11\",\"21\",\"22\"],\"color_id\":[\"19\"],\"images\":[\"110277131300400f93e-99f1-4123-a55f-be6f925a9440.jpeg\",\"4882038051e992c6b5-f5a1-4b7d-86ec-a878d3b201cf.jpeg\",\"41241465297cc958e-3eeb-4365-81d4-735d3d4fbf46.jpeg\",\"112028786930ac13684-a679-4065-a7ce-659fc8bd6709.jpeg\",\"18416048404dc5b9398-6a12-438f-9edc-823c38ed1033.jpeg\",\"4552897625c60a262d-cfcc-4218-9b8c-0fc808802f54.jpeg\",\"21101438366b9f30025-36ac-4170-8415-bbc11798deae.jpeg\"],\"price\":\"799\",\"cut_price\":\"1800\",\"stock\":\"6\"}]', '', 'Rainbow print coord ', 'rainbow-print-coord', '5', 'Rainbow coord', 0x3c703e3c7374726f6e673e46697420547970653a3c2f7374726f6e673e20526567756c61722053747269676874205261696e626f77206162737472616374207072696e7420436f2d6f72642050616e74205365743c2f703e0d0a0d0a3c703ee29885203c7374726f6e673e50726f64756374204d6174657269616c203c2f7374726f6e673e3a2d20436f74746f6e20426c656e64207c7c3c7374726f6e673e20436f6c6f7572203c2f7374726f6e673e3a2d204d756c7469266e6273703b7c7c203c7374726f6e673e5061747465726e3c2f7374726f6e673e203a2d266e6273703b5261696e626f77206162737472616374207072696e7420436f2d6f72642050616e74205365743c2f703e0d0a0d0a3c703ee298853c7374726f6e673e205374796c65203c2f7374726f6e673e3a2d20434f2d4f44532053657420666f7220576f6d656e206c6c3c7374726f6e673e204e65636b3c2f7374726f6e673e203a2d20436f6c6c6172266e6273703b266e6273703b6c6c203c7374726f6e673e536c65657665204c656e6774683c2f7374726f6e673e203a2d204c6f6e6720536c65657665206c6c3c7374726f6e673e20426f74746f6d3c2f7374726f6e673e203a2d2050616e74206c6c205061636b61676520436f6e7461696e732031206b7572746120616e6420312050616e743c2f703e0d0a0d0a3c703ee298853c7374726f6e673e2053697a65733c2f7374726f6e673e203a2d204b757274612d204d2d33382c4c2d34302c584c2d34322c2058584c2d343420494920506c6561736520636865636b207468652073697a6520636861727420696e206f75722070726f64756374206465736372697074696f6e206265666f72652070757263686173696e672e2044756520746f206d616e75616c206d6561737572656d656e742c207468652073697a65206d61792068617665206120646576696174696f6e206f6620312d32636d2c20706c6561736520756e6465727374616e64213c2f703e0d0a0d0a3c703ee29885203c7374726f6e673e4974656d204c656e6774683c2f7374726f6e673e203a2d2043617375616c207c7c203c7374726f6e673e4f63636173696f6e3c2f7374726f6e673e203a2d2043617375616c202c4f66666963652077656172202c5061727479202c57656464696e67202c20526167756c61722026616d703b20466573746976652c204461696c7920576561722c20486f6d652c20576f726b2c2053747265657420576561722c2044617465732c205661636174696f6e2c2053686f7070696e673c2f703e0d0a, '', '', '', '', 0, 1, 1, '2024-07-31 04:39:10', '2024-07-31 05:34:02'),
(179, 28, 9, '709812789.jpeg', '1448699952.jpeg', '[{\"size_id\":[\"8\",\"9\",\"11\",\"21\"],\"color_id\":[\"10\"],\"images\":[\"45311247902acb8097-220a-4057-a6a4-7e2617df68ab.jpeg\",\"5667355361acfa4ea3-e8a5-4a73-8ae7-ab4ffa2e9d2d.jpeg\",\"6568351152b1f40d98-f769-4b20-a8f0-34d6e03049f1.jpeg\",\"12928755263b3482d2f-a286-4b07-bc85-9d9a940cfee1.jpeg\",\"1562769276428bd9621-c2ab-4c98-ac86-26b1705324a3.jpeg\",\"10786542165908b2bad-f419-4e3c-9557-020b54b418b3.jpeg\",\"5098841376d68b6f50-fb48-493f-8148-abd5a54198d2.jpeg\"],\"price\":\"649\",\"cut_price\":\"1500\",\"stock\":\"10\"}]', '', 'Ethnic dress', 'ethnic-dress', '5', 'Ethnic dress', 0x3c703e3c7374726f6e673e46697420547970653a3c2f7374726f6e673e266e6273703b46697420616e6420466c617265206574686e696320666c6f72616c20656d62726f696465726564206b6e6565206c656e677468206472657373207769746820746173736c65733c2f703e0d0a0d0a3c703ee29885203c7374726f6e673e50726f64756374204d6174657269616c203c2f7374726f6e673e3a2d20436f74746f6e20426c656e64207c7c3c7374726f6e673e20436f6c6f7572203c2f7374726f6e673e3a2d204f66662d57686974657c7c203c7374726f6e673e5061747465726e3c2f7374726f6e673e203a2d204f666620776869746520666c6f72616c20656d62726f696465726564207769746820746173736c65732064726573733c2f703e0d0a0d0a3c703ee298853c7374726f6e673e205374796c65203c2f7374726f6e673e3a2d20434f2d4f44532053657420666f7220576f6d656e206c6c3c7374726f6e673e204e65636b3c2f7374726f6e673e203a2d20526f756e64266e6273703b206c6c203c7374726f6e673e536c65657665204c656e6774683c2f7374726f6e673e203a2d332f3420736c6565766573206c6c205061636b61676520436f6e7461696e7320312044726573733c2f703e0d0a0d0a3c703ee298853c7374726f6e673e2053697a65733c2f7374726f6e673e203a2d2044726573732d20532d3336202c4d2d33382c4c2d34302c584c2d34322c2058584c2d343420494920506c6561736520636865636b207468652073697a6520636861727420696e206f75722070726f64756374206465736372697074696f6e206265666f72652070757263686173696e672e2044756520746f206d616e75616c206d6561737572656d656e742c207468652073697a65206d61792068617665206120646576696174696f6e206f6620312d32636d2c20706c6561736520756e6465727374616e64213c2f703e0d0a0d0a3c703ee29885203c7374726f6e673e4974656d204c656e6774683c2f7374726f6e673e203a2d2043617375616c207c7c203c7374726f6e673e4f63636173696f6e3c2f7374726f6e673e203a2d2043617375616c202c4f66666963652077656172202c5061727479202c57656464696e67202c20526167756c61722026616d703b20466573746976652c204461696c7920576561722c20486f6d652c20576f726b2c2053747265657420576561722c2044617465732c205661636174696f6e2c2053686f7070696e673c2f703e0d0a, '', '', '', '', 0, 1, 1, '2024-07-31 04:41:25', '2024-07-31 05:40:56'),
(181, 26, 9, '1379636182.png', '101987438.png', '[{\"size_id\":[\"8\",\"9\",\"11\",\"26\"],\"color_id\":[\"10\"],\"images\":[\"5959695300img_9729.png\",\"4741736121img_9715.png\",\"7681057122img_9714.png\",\"16627365863img_9713.png\",\"15611175794img_9712.png\",\"19738385345img_9711.png\"],\"price\":\"479\",\"cut_price\":\"899\",\"stock\":\"10\"}]', '', 'Crinkled White Crop Top', 'crinkled-white-crop-top', '5', 'White corset top', 0x3c703e3c7374726f6e673e4578706572746c79206372616674656420666f72206120736c696d206669742c2074686973204372696e6b6c656420576869746520436f7273657420546f70202f2043726f7020546f70207769746820546965206f666665727320626f7468207374796c6520616e6420636f6d666f72742e204d6164652077697468206372696e6b6c652063726570652066616272696320616e6420666561747572696e6720626973686f7020736c65657665732c20697420616c6c6f777320666f7220636f6d666f727461626c65206d6f76656d656e742e205468652074696520737472696e677320696e207468652066726f6e742061646420612066617368696f6e61626c6520746f75636820746f2074686973206d7573742d6861766520746f702e3c2f7374726f6e673e3c2f703e0d0a, '', 0x3c703e417661696c61626c6520696e2074776f20636f6c6f72733c2f703e0d0a0d0a3c703e45786368616e67653a20417661696c61626c652077697468696e20323420686f757273206f662064656c69766572792e3c2f703e0d0a0d0a3c703e5348495050494e473a46726565207368697070696e67206f6e206f72646572732061626f7665205273203939392f2d2e3c2f703e0d0a0d0a3c703e44454c49564552592054494d453a332d35204461797320666f7220696e2d73746f636b206f7264657273266e6273703b3c2f703e0d0a, '', '', 1, 0, 1, '2024-09-20 04:28:27', '2024-10-17 01:56:21'),
(182, 26, 9, '221178360.png', '216795921.png', '[{\"size_id\":[\"8\",\"9\",\"11\"],\"color_id\":[\"7\"],\"images\":[\"11196822420img_9728.png\",\"19008888981img_9727.png\",\"10799866502img_9725.png\",\"20536282693img_9726.png\",\"6391133334img_9724.png\"],\"price\":\"479\",\"cut_price\":\"899\",\"stock\":\"10\"}]', '', 'Crinkled pink croptop ', 'crinkled-pink-croptop', '5', 'Crinkled pink top', 0x3c703e3c7374726f6e673e4578706572746c79206372616674656420666f72206120736c696d206669742c2074686973204372696e6b6c65642050696e6b20436f7273657420546f70202f2043726f7020546f70207769746820546965206f666665727320626f7468207374796c6520616e6420636f6d666f72742e204d6164652077697468206372696e6b6c652063726570652066616272696320616e6420666561747572696e6720626973686f7020736c65657665732c20697420616c6c6f777320666f7220636f6d666f727461626c65206d6f76656d656e742e205468652074696520737472696e677320696e207468652066726f6e742061646420612066617368696f6e61626c6520746f75636820746f2074686973206d7573742d6861766520746f702e3c2f7374726f6e673e3c2f703e0d0a, '', 0x3c703e3c7374726f6e673e417661696c61626c6520696e2074776f20636f6c6f72733c2f7374726f6e673e3c2f703e0d0a0d0a3c703e3c7374726f6e673e45786368616e67653a20417661696c61626c652077697468696e20323420686f757273206f662064656c69766572792e3c2f7374726f6e673e3c2f703e0d0a0d0a3c703e3c7374726f6e673e5348495050494e473a46726565207368697070696e67206f6e206f72646572732061626f7665205273203939392f2d2e3c2f7374726f6e673e3c2f703e0d0a0d0a3c703e3c7374726f6e673e44454c49564552592054494d453a332d35204461797320666f7220696e2d73746f636b206f7264657273266e6273703b3c2f7374726f6e673e3c2f703e0d0a, '', '', 1, 0, 1, '2024-09-20 05:07:33', '2024-10-17 03:14:28'),
(183, 26, 9, '420296181.png', '1073821079.png', '[{\"size_id\":[\"8\",\"9\",\"11\",\"21\",\"26\"],\"color_id\":[\"2\"],\"images\":[\"12772870410img_9721.png\",\"20413013201img_9722.png\",\"20858107232img_9723.png\"],\"price\":\"379\",\"cut_price\":\"749\",\"stock\":\"10\"}]', '', 'Black side slit top', 'black-side-slit-top', '5', 'Black side slit', 0x3c703e3c7374726f6e673e496e74726f647563696e67206f7572207472656e647920626c61636b20746f7020666561747572696e672061207374796c6973682073776565746865617274206e65636b6c696e6520616e64207369646520736c6974732c20637261667465642066726f6d207374726574636861626c65207269626265642066616272696320666f72206120666c6174746572696e67206669742e205468697320636869632064657369676e206566666f72746c6573736c7920636f6d62696e657320636f6d666f727420776974682061206d6f6465726e20666c6169722c206d616b696e67206974207065726665637420666f72206461792d746f2d6e69676874207472616e736974696f6e732e2044726573732069742075702077697468206120736b697274206f72206b6565702069742063617375616c207769746820796f7572206661766f72697465206a65616e732e20566572736174696c6520616e64206579652d6361746368696e672c207468697320746f702069732061206d7573742d68617665206164646974696f6e20746f20796f75722077617264726f6265213c2f7374726f6e673e3c2f703e0d0a, '', 0x3c703e2d202a2a5374796c6973682044657369676e2a2a3a205472656e64792073776565746865617274206e65636b6c696e6520616e6420656c6567616e74207369646520736c69747320666f7220612063686963206c6f6f6b2e3c6272202f3e0d0a2d202a2a436f6d666f727461626c65204669742a2a3a204d6164652066726f6d207374726574636861626c6520726962626564206661627269632074686174206875677320796f7572206375727665732e3c6272202f3e0d0a2d202a2a566572736174696c65205374796c696e672a2a3a205065726665637420666f72206472657373696e672075702077697468206120736b697274206f722070616972696e672077697468206a65616e7320666f7220612063617375616c20766962652e3c6272202f3e0d0a2d202a2a466c6174746572696e672053696c686f75657474652a2a3a20456e68616e63657320796f757220666967757265207768696c652070726f766964696e6720616c6c2d64617920636f6d666f72742e3c6272202f3e0d0a2d202a2a57617264726f626520457373656e7469616c2a2a3a2041206d7573742d686176652070696563652074686174206566666f72746c6573736c7920656c65766174657320616e79206f75746669742e3c6272202f3e0d0a266e6273703b3c2f703e0d0a, '', '', 1, 0, 1, '2024-09-20 05:09:39', '2024-10-15 07:03:31'),
(184, 26, 9, '122731663.zip - 2', '711032324.jpeg', '[{\"size_id\":[\"8\",\"9\",\"11\",\"26\"],\"color_id\":[\"7\"],\"images\":[\"12031407700untitled-designzip-2.png\",\"18673594181img_9882.jpeg\",\"1132442042img_9883.jpeg\"],\"price\":\"389\",\"cut_price\":\"799\",\"stock\":\"10\"}]', '', 'Pink back knot crop top', 'pink-back-knot-crop-top', '5', 'Pink back knot', 0x3c703e3c7374726f6e673e456c657661746520796f7572206c6974746c65206f6e65262333393b732077617264726f62652077697468206f75722061646f7261626c6520626162792070696e6b206261636b206b6e6f742063726f7020746f702e20437261667465642066726f6d20686967686c7920737472657463687920726962626564206661627269632c207468697320746f70206f6666657273206120636f6d666f727461626c6520666974207468617420616c6c6f777320666f722065617379206d6f76656d656e742e2054686520706c617966756c206261636b206b6e6f742064657461696c2061646473206120636861726d696e6720746f7563682c206d616b696e67206974207065726665637420666f7220616e79206f63636173696f6e2e205061697220697420776974682073686f727473206f7220736b6972747320666f722061206375746520616e64207374796c697368206c6f6f6b207468617426727371756f3b73207375726520746f207475726e206865616473213c2f7374726f6e673e3c2f703e0d0a, '', 0x3c703e3c7374726f6e673e45786368616e67652d417661696c61626c652077697468696e20323420686f757273206f662064656c69766572792e3c2f7374726f6e673e3c2f703e0d0a0d0a3c703e3c7374726f6e673e5368697070696e672d2046726565207368697070696e67206f6e206f72646572732061626f76652052732d3939392f2d3c2f7374726f6e673e3c2f703e0d0a0d0a3c703e3c7374726f6e673e44656c69766572792054696d652d20332d35204461797320666f7220696e2073746f636b2d6f72646572733c2f7374726f6e673e3c2f703e0d0a, 0x3c703e3c7374726f6e673e45786368616e67652d417661696c61626c652077697468696e20323420686f757273206f662064656c69766572792e3c2f7374726f6e673e3c2f703e0d0a0d0a3c703e3c7374726f6e673e5368697070696e672d2046726565207368697070696e67206f6e206f72646572732061626f76652052732d3939392f2d3c2f7374726f6e673e3c2f703e0d0a0d0a3c703e3c7374726f6e673e44656c69766572792054696d652d20332d35204461797320666f7220696e2073746f636b2d6f72646572733c2f7374726f6e673e3c2f703e0d0a, '', 1, 0, 1, '2024-09-20 05:11:12', '2024-10-15 06:32:38'),
(185, 26, 9, '1227477351.png', '311741125.png', '[{\"size_id\":[\"8\",\"9\",\"11\",\"26\"],\"color_id\":[\"17\"],\"images\":[\"20921901090untitled-design.png\",\"3495079541img_9880.jpeg\"],\"price\":\"449\",\"cut_price\":\"899\",\"stock\":\"9\"}]', '', 'Mustard asymmetrical top', 'mustard-asymmetrical-top', '5', 'Mustard asymmetrical top', 0x3c703e3c7374726f6e673e456c657661746520796f75722077617264726f62652077697468206f7572206d7573746172642079656c6c6f77206173796d6d6574726963616c20746f702c20637261667465642066726f6d207374726574636861626c65207269626265642066616272696320666f7220756c74696d61746520636f6d666f727420616e6420766572736174696c6974792e20546869732050696e7465726573742d776f727468792070696563652063616e206265207374796c656420696e20636f756e746c6573732077617973266d646173683b776561722069742063617375616c6c792077697468206a65616e73206f722064726573732069742075702077697468206120736b69727420666f722061206e69676874206f75742e2054686520756e69717565206173796d6d6574726963616c2063757420616464732061206d6f6465726e20746f7563682c206d616b696e672069742061206d7573742d6861766520737461706c6520666f7220616e792066617368696f6e2d666f727761726420696e646976696475616c2e205065726665637420666f72206c61796572696e67206f722073686f77636173696e67206f6e20697473206f776e2c207468697320746f702077696c6c206566666f72746c6573736c7920656e68616e636520796f7572206576657279646179206c6f6f6b2e3c2f7374726f6e673e3c2f703e0d0a, '', 0x3c703e457870657269656e636520657863657074696f6e616c207175616c6974792077697468206f7572206d7573746172642079656c6c6f77206173796d6d6574726963616c20746f702c2064657369676e656420666f7220766572736174696c69747920616e64207374796c652e20456e6a6f792074696d656c79203c7374726f6e673e64656c69766572792077697468696e20323420686f7572733c2f7374726f6e673e2c20656e737572696e6720796f75207265636569766520796f7572206e6577206661766f7269746520706965636520717569636b6c792e20506572666563746c7920637261667465642066726f6d207374726574636861626c6520726962626564206661627269632c207468697320746f70206f666665727320636f6d666f727420616e64206120666c6174746572696e67206669742c206d616b696e6720697420696465616c20666f7220616e79206f63636173696f6e2e20456c657661746520796f75722077617264726f626520746f646179213c2f703e0d0a, '', '', 1, 0, 1, '2024-09-20 05:12:35', '2024-10-15 07:04:10'),
(186, 26, 9, '1958049662.jpeg', '95927551.jpeg', '[{\"size_id\":[\"8\",\"9\"],\"color_id\":[\"11\"],\"images\":[\"8368684510img_9910.jpeg\",\"18392880841img_9912.jpeg\"],\"price\":\"419\",\"cut_price\":\"699\",\"stock\":\"9\"}]', '', 'Green front cut trendy top', 'green-front-cut-trendy-top', '5', 'Green front cut', 0x3c703e3c7374726f6e673e456c657661746520796f75722077617264726f62652077697468206f7572207472656e647920677265656e2066726f6e742063757420746f702c20637261667465642066726f6d2062656175746966756c20726962626564206661627269632e2054686973207374726574636861626c65207069656365206f666665727320626f746820636f6d666f727420616e64207374796c652c20666561747572696e67206120666c6174746572696e672073696c686f75657474652074686174206875677320796f7572206375727665732e2054686520756e697175652066726f6e74206375742061646473206120746f756368206f6620736f706869737469636174696f6e2c206d616b696e67206974207065726665637420666f722063617375616c206f7574696e6773206f7220647265737379206f63636173696f6e732e20506169722069742077697468206a65616e73206f72206120736b69727420666f72206120766572736174696c65206c6f6f6b2074686174207374616e6473206f75742e20496465616c20666f72207468652066617368696f6e2d666f727761726420696e646976696475616c2c207468697320746f702069732061206d7573742d68617665206164646974696f6e20746f20796f757220636f6c6c656374696f6e2e3c2f7374726f6e673e3c2f703e0d0a0d0a3c703e266e6273703b3c2f703e0d0a0d0a3c703e3c7374726f6e673e436f6c6f7572204d6967687420536c696768746c7920446966666572f09f8e803c2f7374726f6e673e3c2f703e0d0a, '', 0x3c703e2d202a2a5472656e64792044657369676e3a2a2a204665617475726573206120756e697175652066726f6e742063757420666f722061206d6f6465726e206c6f6f6b2e3c6272202f3e0d0a2d202a2a5072656d69756d204661627269633a2a2a204d6164652066726f6d2062656175746966756c20726962626564206d6174657269616c20666f722061207374796c69736820746578747572652e3c6272202f3e0d0a2d202a2a5374726574636861626c65204669743a2a2a204f666665727320636f6d666f727420616e6420666c65786962696c6974792c2068756767696e6720796f75722063757276657320706572666563746c792e3c6272202f3e0d0a2d202a2a566572736174696c65205374796c653a2a2a205065726665637420666f722063617375616c206f7574696e6773206f7220647265737379206f63636173696f6e732e3c6272202f3e0d0a2d202a2a4561737920746f20506169723a2a2a20436f6d706c656d656e7473206a65616e732c20736b697274732c20616e642073686f727473206566666f72746c6573736c792e3c6272202f3e0d0a2d202a2a46617368696f6e2d466f72776172642043686f6963653a2a2a2041206d7573742d68617665206164646974696f6e20666f7220616e79207374796c6973682077617264726f62652e3c2f703e0d0a, '', '', 1, 0, 1, '2024-10-15 07:29:35', '0000-00-00 00:00:00'),
(187, 26, 9, '605698076.png', '2113042967.png', '[{\"size_id\":[\"8\",\"9\",\"11\"],\"color_id\":[\"2\"],\"images\":[\"9773451530untitled-design-1.png\",\"13473524431untitled-design-2.png\",\"14640734102untitled-design-3.png\"],\"price\":\"359\",\"cut_price\":\"699\",\"stock\":\"10\"}]', '', 'Basic Black Crop Tee', 'basic-black-crop-tee', '5', 'Black Tee ', '', '', '', '', '', 1, 1, 1, '2024-10-22 01:00:53', '2024-10-22 01:19:13'),
(188, 26, 9, '150139836.png', '613502727.png', '[{\"size_id\":[\"8\",\"9\",\"11\"],\"color_id\":[\"2\"],\"images\":[\"2529566410untitled-design-4.png\",\"6995337621untitled-design-5.png\",\"11790040992untitled-design-6.png\",\"5341830143untitled-design-7.png\"],\"price\":\"389\",\"cut_price\":\"749\",\"stock\":\"10\"}]', '', 'Black floral crop top', 'black-floral-crop-top', '5', 'Floral black', '', '', '', '', '', 1, 1, 1, '2024-10-22 01:21:27', '0000-00-00 00:00:00'),
(190, 26, 9, '1611177123.png', '1107775793.png', '[{\"size_id\":[\"8\",\"9\",\"11\"],\"color_id\":[\"11\"],\"images\":[\"15821580990untitled-design-13.png\",\"4959504451untitled-design-12.png\",\"16602150722untitled-design-14.png\",\"399477133untitled-design-11.png\"],\"price\":\"499\",\"cut_price\":\"899\",\"stock\":\"15\"}]', '', 'Side wrap green top', 'side-wrap-green-top', '5', 'Green side wrap ', '', '', '', '', '', 1, 1, 1, '2024-10-22 02:32:27', '0000-00-00 00:00:00'),
(191, 26, 9, '1388780158.png', '136335617.png', '[{\"size_id\":[\"8\",\"9\",\"11\"],\"color_id\":[\"7\"],\"images\":[\"20931562960untitled-design-1.png\",\"21218813451untitled-design-2.png\",\"18681325362untitled-design-4.png\",\"2700631083untitled-design-3.png\"],\"price\":\"499\",\"cut_price\":\"899\",\"stock\":\"15\"}]', '', 'Pink wrap top', 'pink-wrap-top', '5', 'Pink wrap top', '', '', '', '', '', 1, 1, 1, '2024-10-22 02:34:46', '0000-00-00 00:00:00'),
(192, 26, 9, '647045851.png', '691883236.png', '[{\"size_id\":[\"8\",\"9\",\"11\"],\"color_id\":[\"11\"],\"images\":[\"1345193070untitled-design-15.png\",\"20476997641untitled-design-18.png\",\"10037904522untitled-design-19.png\",\"16283814243untitled-design-17.png\",\"2617418464untitled-design-16.png\"],\"price\":\"519\",\"cut_price\":\"849\",\"stock\":\"16\"}]', '', 'Green peplum top', 'green-peplum-top', '5', 'Green peplum', '', '', '', '', '', 1, 1, 1, '2024-10-22 02:36:19', '0000-00-00 00:00:00'),
(193, 26, 9, '838233391.png', '391078131.png', '[{\"size_id\":[\"8\",\"9\",\"11\"],\"color_id\":[\"2\"],\"images\":[\"61222800untitled-design-21.png\",\"4731279511untitled-design-20.png\",\"1266669872untitled-design-23.png\",\"2503318923untitled-design-22.png\",\"17695306954untitled-design-24.png\"],\"price\":\"449\",\"cut_price\":\"699\",\"stock\":\"17\"}]', '', 'Semi-Sheer Top', 'semi-sheer-top', '5', 'Semi-Sheer top', '', '', '', '', '', 1, 1, 1, '2024-10-22 02:37:49', '0000-00-00 00:00:00'),
(194, 26, 9, '1015250410.png', '1816098905.png', '[{\"size_id\":[\"8\",\"9\",\"11\"],\"color_id\":[\"7\"],\"images\":[\"20215821990untitled-design-8.png\",\"7920595651untitled-design-10.png\",\"2003217392untitled-design-9.png\",\"16224744163untitled-design-5.png\",\"1900303204untitled-design-7.png\",\"529068265untitled-design-6.png\"],\"price\":\"419\",\"cut_price\":\"799\",\"stock\":\"16\"}]', '', 'Cap sleeve top', 'cap-sleeve-top', '5', 'Cap sleeve top', '', '', '', '', '', 1, 1, 1, '2024-10-22 02:39:18', '0000-00-00 00:00:00'),
(195, 45, 9, '663244630.png', '110405844.png', '[{\"size_id\":[\"8\",\"9\",\"11\"],\"color_id\":[\"10\"],\"images\":[\"1615544880untitled-design-60.png\",\"13223213391untitled-design-61.png\",\"21462421362untitled-design-64.png\",\"18063521983untitled-design-65.png\",\"6677871044untitled-design-63.png\",\"13605963855untitled-design-62.png\"],\"price\":\"549\",\"cut_price\":\"899\",\"stock\":\"16\"}]', '', 'Funky Face Shirt', 'funky-face-shirt', '5', 'Funky face shirt', '', '', '', '', '', 1, 1, 1, '2024-10-22 02:59:11', '0000-00-00 00:00:00'),
(196, 45, 9, '1005925958.png', '1926861096.png', '[{\"size_id\":[\"8\",\"9\",\"11\"],\"color_id\":[\"4\"],\"images\":[\"126502100untitled-design-46.png\",\"9996286661untitled-design-44.png\",\"11634502882untitled-design-43.png\",\"2442218413untitled-design-45.png\",\"16624175544untitled-design-47.png\",\"14230931365untitled-design-48.png\"],\"price\":\"549\",\"cut_price\":\"949\",\"stock\":\"18\"}]', '', 'Formal Blue Striped Shirt', 'formal-blue-striped-shirt', '5', 'Formal Blue Striped Shirt', '', '', '', '', '', 1, 1, 1, '2024-10-22 03:01:36', '2024-10-22 03:07:40'),
(197, 45, 9, '619208116.png', '662375683.png', '[{\"size_id\":[\"8\",\"9\",\"11\"],\"color_id\":[\"10\"],\"images\":[\"1507473970untitled-design-55.png\",\"5142011581untitled-design-54.png\",\"1043731802untitled-design-59.png\",\"4921025383untitled-design-56.png\",\"19483130794untitled-design-58.png\",\"16655370855untitled-design-57.png\"],\"price\":\"499\",\"cut_price\":\"799\",\"stock\":\"20\"}]', '', 'White striped shirt', 'white-striped-shirt', '5', 'White striped shirt', '', '', '', '', '', 1, 1, 1, '2024-10-22 03:03:10', '0000-00-00 00:00:00'),
(198, 45, 9, '1881569979.png', '1108556056.png', '[{\"size_id\":[\"8\",\"9\",\"11\"],\"color_id\":[\"11\"],\"images\":[\"20911144570untitled-design-53.png\",\"21015075211untitled-design-49.png\",\"10857035662untitled-design-52.png\",\"10628831123untitled-design-51.png\",\"1443977574untitled-design-50.png\"],\"price\":\"549\",\"cut_price\":\"899\",\"stock\":\"15\"}]', '', 'Floral Shirt', 'floral-shirt', '5', 'Satin printed green shirt', '', '', '', '', '', 1, 1, 1, '2024-10-22 03:06:06', '0000-00-00 00:00:00'),
(199, 45, 9, '1940063166.png', '705918479.png', '[{\"size_id\":[\"8\",\"9\",\"11\"],\"color_id\":[\"7\"],\"images\":[\"16534330540untitled-design-71.png\",\"17564836601untitled-design-67.png\",\"5428381972untitled-design-68.png\",\"7483161923untitled-design-70.png\",\"10754994514untitled-design-69.png\",\"8001849945untitled-design-66.png\"],\"price\":\"549\",\"cut_price\":\"749\",\"stock\":\"20\"}]', '', 'Pink funky printed shirt', 'pink-funky-printed-shirt', '5', 'Pink funky printed shirt', '', '', '', '', '', 1, 1, 1, '2024-10-22 03:10:34', '0000-00-00 00:00:00'),
(200, 26, 9, '1995679079.png', '688036864.png', '[{\"size_id\":[\"8\",\"9\",\"11\"],\"color_id\":[\"11\"],\"images\":[\"9485755630untitled-design-37.png\",\"1163750031untitled-design-38.png\",\"5084536022untitled-design-41.png\",\"2415253263untitled-design-42.png\",\"20715936894untitled-design-40.png\",\"12922766835untitled-design-39.png\"],\"price\":\"339\",\"cut_price\":\"599\",\"stock\":\"15\"}]', '', 'High neck crop top', 'high-neck-crop-top', '5', 'High neck crop green', '', '', '', '', '', 1, 1, 1, '2024-10-22 06:07:44', '0000-00-00 00:00:00'),
(201, 26, 9, '1900963072.png', '80128862.png', '[{\"size_id\":[\"8\",\"9\",\"11\"],\"color_id\":[\"2\"],\"images\":[\"20182853340untitled-design-15.png\",\"586342341untitled-design-16.png\",\"11840356162untitled-design-17.png\",\"15232410713untitled-design-14.png\"],\"price\":\"339\",\"cut_price\":\"599\",\"stock\":\"15\"}]', '', 'Black high neck crop top', 'black-high-neck-crop-top', '5', 'Black high neck crop top', '', '', '', '', '', 1, 1, 1, '2024-10-22 06:10:04', '0000-00-00 00:00:00'),
(202, 45, 9, '1240584996.png', '903979921.png', '[{\"size_id\":[\"8\",\"9\",\"11\"],\"color_id\":[\"2\"],\"images\":[\"21075184320untitled-design-32.png\",\"1681124831untitled-design-33.png\",\"1079430422untitled-design-34.png\",\"19175295493untitled-design-31.png\",\"13575914294untitled-design-35.png\",\"895094255untitled-design-30.png\"],\"price\":\"549\",\"cut_price\":\"899\",\"stock\":\"10\"}]', '', 'Satin Front tie black shirt ', 'satin-front-tie-black-shirt', '5', 'Front tie satin shirt', 0x3c703e3c656d3e3c7374726f6e673e456c657661746520796f75722077617264726f62652077697468206f757220536174696e2046726f6e742054696520536869727420266e646173683b2061207065726665637420626c656e64206f6620656c6567616e636520616e6420636869632e20437261667465642066726f6d206c75787572696f757320736174696e2c2074686973207368697274206665617475726573206120666c6174746572696e672066726f6e74207469652064657461696c20746861742061646473206120746f756368206f66206d6f6465726e20736f706869737469636174696f6e2e2057686574686572206472657373696e6720757020666f722061206e69676874206f7574206f72207374796c696e67206974203c7370616e207374796c653d22646973706c61793a6e6f6e65223e266e6273703b3c2f7370616e3e63617375616c6c7920666f72206461792d746f2d64617920776561722c206974732073696c6b79207465787475726520616e6420736c65656b2064657369676e206f6666657220656e646c65737320766572736174696c6974792e2041206d7573742d6861766520737461706c6520666f722065766572792066617368696f6e2d666f727761726420636c6f736574213c2f7374726f6e673e3c2f656d3e3c2f703e0d0a, '', 0x3c703e2d203c7374726f6e673e4c75787572696f757320536174696e204661627269633c2f7374726f6e673e3a536f66742c20736d6f6f74682c20616e64207368696e7920666f72206120706f6c6973686564206c6f6f6b20266e6273703b3c6272202f3e0d0a2d203c7374726f6e673e466c6174746572696e672046726f6e74205469652044657461696c3c2f7374726f6e673e3a416464732061206d6f6465726e2c2066656d696e696e6520746f75636820266e6273703b3c6272202f3e0d0a2d203c7374726f6e673e566572736174696c65205374796c696e673c2f7374726f6e673e3a266e6273703b5065726665637420666f7220626f74682063617375616c20616e6420647265737379206f63636173696f6e7320266e6273703b3c6272202f3e0d0a2d203c7374726f6e673e4566666f72746c6573736c7920436869633c2f7374726f6e673e3a266e6273703b456c65766174657320616e79206f75746669742077697468206d696e696d616c206566666f727420266e6273703b3c6272202f3e0d0a2d203c7374726f6e673e436f6d666f727461626c65204669743c2f7374726f6e673e3a266e6273703b4c6967687477656967687420616e642062726561746861626c6520666f7220616c6c2d646179207765617220266e6273703b3c6272202f3e0d0a2d203c7374726f6e673e54696d656c6573732057617264726f626520537461706c653c2f7374726f6e673e3a266e6273703b41206d7573742d6861766520706965636520666f722066617368696f6e2d666f727761726420696e646976696475616c733c6272202f3e0d0a266e6273703b3c2f703e0d0a, '', '', 1, 0, 1, '2024-11-07 08:04:48', '0000-00-00 00:00:00'),
(204, 45, 9, '1364133676.png', '1232788367.png', '[{\"size_id\":[\"8\",\"9\",\"11\"],\"color_id\":[\"10\"],\"images\":[\"1009813660untitled-design-29.png\",\"8034479301untitled-design-28.png\",\"2318178182untitled-design-27.png\",\"2394495063untitled-design-26.png\",\"20338328884untitled-design-25.png\"],\"price\":\"549\",\"cut_price\":\"899\",\"stock\":\"12\"}]', '', 'White front tie satin shirt', 'white-front-tie-satin-shirt', '5', 'White front tie shirt', 0x3c703e3c7374726f6e673e456c657661746520796f75722077617264726f62652077697468206f757220536174696e2046726f6e742054696520536869727420266e646173683b2061207065726665637420626c656e64206f6620656c6567616e636520616e6420636869632e20437261667465642066726f6d206c75787572696f757320736174696e2c2074686973207368697274206665617475726573206120666c6174746572696e672066726f6e74207469652064657461696c20746861742061646473206120746f756368206f66206d6f6465726e20736f706869737469636174696f6e2e2057686574686572206472657373696e6720757020666f722061206e69676874206f7574206f72207374796c696e672069742063617375616c6c7920666f72206461792d746f2d64617920776561722c206974732073696c6b79207465787475726520616e6420736c65656b2064657369676e206f6666657220656e646c65737320766572736174696c6974792e2041206d7573742d6861766520737461706c6520666f722065766572792066617368696f6e2d666f727761726420636c6f736574213c2f7374726f6e673e3c2f703e0d0a, '', 0x3c703e2d266e6273703b3c7374726f6e673e4c75787572696f757320536174696e204661627269633c2f7374726f6e673e3a536f66742c20736d6f6f74682c20616e64207368696e7920666f72206120706f6c6973686564206c6f6f6b20266e6273703b3c6272202f3e0d0a2d266e6273703b3c7374726f6e673e466c6174746572696e672046726f6e74205469652044657461696c3c2f7374726f6e673e3a416464732061206d6f6465726e2c2066656d696e696e6520746f75636820266e6273703b3c6272202f3e0d0a2d266e6273703b3c7374726f6e673e566572736174696c65205374796c696e673c2f7374726f6e673e3a266e6273703b5065726665637420666f7220626f74682063617375616c20616e6420647265737379206f63636173696f6e7320266e6273703b3c6272202f3e0d0a2d266e6273703b3c7374726f6e673e4566666f72746c6573736c7920436869633c2f7374726f6e673e3a266e6273703b456c65766174657320616e79206f75746669742077697468206d696e696d616c206566666f727420266e6273703b3c6272202f3e0d0a2d266e6273703b3c7374726f6e673e436f6d666f727461626c65204669743c2f7374726f6e673e3a266e6273703b4c6967687477656967687420616e642062726561746861626c6520666f7220616c6c2d646179207765617220266e6273703b3c6272202f3e0d0a2d266e6273703b3c7374726f6e673e54696d656c6573732057617264726f626520537461706c653c2f7374726f6e673e3a266e6273703b41206d7573742d6861766520706965636520666f722066617368696f6e2d666f727761726420696e646976696475616c733c6272202f3e0d0a266e6273703b3c2f703e0d0a, '', '', 1, 0, 1, '2024-11-07 08:12:04', '0000-00-00 00:00:00'),
(205, 46, 9, '729786595.png', '375303834.png', '[{\"size_id\":[\"8\",\"9\",\"11\"],\"color_id\":[\"7\"],\"images\":[\"13048979420untitled-design-9.png\",\"1594046131untitled-design-10.png\",\"20948668462untitled-design-6.png\",\"2305848873untitled-design-7.png\",\"2992099084untitled-design-8.png\"],\"price\":\"549\",\"cut_price\":\"999\",\"stock\":\"13\"}]', '', 'Puff sleeve pretty pink dress', 'puff-sleeve-pretty-pink-dress', '5', 'Puff sleeve mini dress', 0x3c703e3c7374726f6e673e54686973206d696e69207075666620736c656576652064726573732069732061206368696320616e6420706c617966756c206761726d656e74207468617420636f6d62696e657320612073686f72742c20666c69727479206c656e677468207769746820766f6c756d696e6f75732c20676174686572656420736c65657665732e2054686973206472657373207479706963616c6c7920666561747572657320612066697420616e6420666c6172652073696c686f75657474652c207769746820746865207075666620736c656576657320616464696e67206120626f6c642c2066656d696e696e6520746f7563682e20546865736520736c65657665732c206f6674656e206761746865726564206174207468652073686f756c646572206f7220656c626f772c206372656174652061206472616d61746963206566666563742c207768696c6520746865206d696e69206c656e677468206b6565707320746865206c6f6f6b20796f75746866756c20616e642066756e2e2054686973206472657373206973206d6164652066726f6d206c636f74746f6e206d616b696e67206974207065726665637420666f722073756d6d6572266e6273703b77656174686572206f722063617375616c206f7574696e67732c20616e642069742063616e20636f6d6520696e20766172696f7573207374796c65732c2066726f6d2073696d706c6520746f206d6f726520656d62656c6c69736865642064657369676e732e20576865746865722070616972656420776974682073616e64616c7320666f72206120646179206f7574206f72206865656c7320666f722061206e69676874206f6e2074686520746f776e2c2061206d696e69207075666620736c6565766520647265737320697320766572736174696c6520616e64207472656e64792e3c2f7374726f6e673e3c2f703e0d0a, '', 0x3c703e2d266e6273703b3c7374726f6e673e5374796c697368204d696e69204c656e6774683c2f7374726f6e673e3a204120666c6174746572696e672c2066756e2064657369676e207468617420686974732061626f766520746865206b6e656520666f72206120706c617966756c20616e642066656d696e696e65206c6f6f6b2e3c6272202f3e0d0a2d266e6273703b3c7374726f6e673e4f66662d53686f756c646572205075666620536c65657665733c2f7374726f6e673e3a204472616d61746963207075666620736c6565766573207769746820616e206f66662d73686f756c646572206375742c206372656174696e67206120626f6c6420616e6420726f6d616e7469632073696c686f75657474652e3c6272202f3e0d0a2d266e6273703b3c7374726f6e673e536f66742c204c69676874776569676874204661627269633c2f7374726f6e673e3a20437261667465642066726f6d2062726561746861626c65206d6174657269616c732c207065726665637420666f72207761726d207765617468657220616e642065617379206d6f76656d656e742e3c6272202f3e0d0a2d266e6273703b3c7374726f6e673e466c6174746572696e67204669743c2f7374726f6e673e3a205461696c6f72656420746f20616363656e747561746520796f7572206e61747572616c2073686170652077697468206120636f6d666f727461626c652c20666f726d2d66697474696e672064657369676e2e3c6272202f3e0d0a2d266e6273703b3c7374726f6e673e566572736174696c65205374796c653c2f7374726f6e673e3a20496465616c20666f722063617375616c206f7574696e67732c2064617465206e69676874732c206f7220647265737379206576656e747320266e646173683b20656173696c79207061697265642077697468206865656c73206f722073616e64616c732e3c6272202f3e0d0a2d266e6273703b3c7374726f6e673e54696d656c65737320616e64205472656e64793c2f7374726f6e673e3a2041206d6978206f6620636c617373696320616e6420636f6e74656d706f72617279207374796c652c207065726665637420666f7220656c65766174696e6720796f75722077617264726f62652e266e6273703b3c6272202f3e0d0a266e6273703b3c2f703e0d0a, '', '', 1, 0, 1, '2024-11-08 11:20:07', '2024-11-08 11:25:55'),
(206, 46, 9, '295594132.png', '1325242217.png', '[{\"size_id\":[\"8\",\"9\",\"11\"],\"color_id\":[\"2\"],\"images\":[\"6452981760untitled-design-1.png\",\"16651213021untitled-design-3.png\",\"19277680112untitled-design-4.png\",\"11811085823untitled-design-5.png\",\"10506552564untitled-design-2.png\"],\"price\":\"549\",\"cut_price\":\"999\",\"stock\":\"13\"}]', '', 'Puff sleeve mini black dress', 'puff-sleeve-mini-black-dress', '5', 'Puff sleeve black dress', 0x3c703e3c7374726f6e673e54686973206d696e69207075666620736c656576652064726573732069732061206368696320616e6420706c617966756c206761726d656e74207468617420636f6d62696e657320612073686f72742c20666c69727479206c656e677468207769746820766f6c756d696e6f75732c20676174686572656420736c65657665732e2054686973206472657373207479706963616c6c7920666561747572657320612066697420616e6420666c6172652073696c686f75657474652c207769746820746865207075666620736c656576657320616464696e67206120626f6c642c2066656d696e696e6520746f7563682e20546865736520736c65657665732c206f6674656e206761746865726564206174207468652073686f756c646572206f7220656c626f772c206372656174652061206472616d61746963206566666563742c207768696c6520746865206d696e69206c656e677468206b6565707320746865206c6f6f6b20796f75746866756c20616e642066756e2e2054686973206472657373206973206d6164652066726f6d206c636f74746f6e206d616b696e67206974207065726665637420666f722073756d6d6572266e6273703b77656174686572206f722063617375616c206f7574696e67732c20616e642069742063616e20636f6d6520696e20766172696f7573207374796c65732c2066726f6d2073696d706c6520746f206d6f726520656d62656c6c69736865642064657369676e732e20576865746865722070616972656420776974682073616e64616c7320666f72206120646179206f7574206f72206865656c7320666f722061206e69676874206f6e2074686520746f776e2c2061206d696e69207075666620736c6565766520647265737320697320766572736174696c6520616e64207472656e64792e3c2f7374726f6e673e3c2f703e0d0a, '', 0x3c703e2d203c7374726f6e673e5374796c697368204d696e69204c656e6774683c2f7374726f6e673e3a204120666c6174746572696e672c2066756e2064657369676e207468617420686974732061626f766520746865206b6e656520666f72206120706c617966756c20616e642066656d696e696e65206c6f6f6b2e3c6272202f3e0d0a2d203c7374726f6e673e4f66662d53686f756c646572205075666620536c65657665733c2f7374726f6e673e3a204472616d61746963207075666620736c6565766573207769746820616e206f66662d73686f756c646572206375742c206372656174696e67206120626f6c6420616e6420726f6d616e7469632073696c686f75657474652e3c6272202f3e0d0a2d203c7374726f6e673e536f66742c204c69676874776569676874204661627269633c2f7374726f6e673e3a20437261667465642066726f6d2062726561746861626c65206d6174657269616c732c207065726665637420666f72207761726d207765617468657220616e642065617379206d6f76656d656e742e3c6272202f3e0d0a2d203c7374726f6e673e466c6174746572696e67204669743c2f7374726f6e673e3a205461696c6f72656420746f20616363656e747561746520796f7572206e61747572616c2073686170652077697468206120636f6d666f727461626c652c20666f726d2d66697474696e672064657369676e2e3c6272202f3e0d0a2d203c7374726f6e673e566572736174696c65205374796c653c2f7374726f6e673e3a20496465616c20666f722063617375616c206f7574696e67732c2064617465206e69676874732c206f7220647265737379206576656e747320266e646173683b20656173696c79207061697265642077697468206865656c73206f722073616e64616c732e3c6272202f3e0d0a2d203c7374726f6e673e54696d656c65737320616e64205472656e64793c2f7374726f6e673e3a2041206d6978206f6620636c617373696320616e6420636f6e74656d706f72617279207374796c652c207065726665637420666f7220656c65766174696e6720796f75722077617264726f62652e266e6273703b3c6272202f3e0d0a266e6273703b3c2f703e0d0a, '', '', 1, 0, 1, '2024-11-08 11:25:39', '0000-00-00 00:00:00'),
(207, 46, 9, '420083803.png', '427977417.png', '[{\"size_id\":[\"8\",\"9\",\"11\"],\"color_id\":[\"4\"],\"images\":[\"954519760untitled-design-16.png\",\"15544805041untitled-design-13.png\",\"10314846802untitled-design-12.png\",\"7182491863untitled-design-15.png\",\"11049156554untitled-design-14.png\",\"10910671115untitled-design-11.png\"],\"price\":\"699\",\"cut_price\":\"1099\",\"stock\":\"12\"}]', '', 'Blue&White Check Shirt Dress', 'bluewhite-check-shirt-dress', '5', 'Shirt dress blue', 0x3c703e3c6272202f3e0d0a3c7374726f6e673e42656c74206973206e6f7420496e636c75646564266e6273703b3c2f7374726f6e673e3c2f703e0d0a0d0a3c703e3c7374726f6e673e54686973206d696e6920736869727420647265737320696e206120626f6c6420636865636b207061747465726e206f666665727320612074696d656c6573732c2063686963206c6f6f6b20776974682061206d6f6465726e2074776973742e20466561747572696e67206120627574746f6e2d646f776e2066726f6e7420616e64206120636c617373696320636f6c6c617265642064657369676e2c206974206566666f72746c6573736c7920626c656e647320747261646974696f6e616c207368697274207374796c6520776974682074686520706c617966756c2061707065616c206f662061206d696e69206c656e6774682e205468652072656c617865642079657420666c6174746572696e672066697420656e737572657320636f6d666f727420776974686f757420636f6d70726f6d6973696e67206f6e207374796c652c206d616b696e67206974207065726665637420666f7220612076617269657479206f66206f63636173696f6e732e20437261667465642066726f6d20736f66742c2062726561746861626c65206661627269632c207468697320647265737320697320696465616c20666f7220616c6c2d64617920776561722c207768657468657220796f75262333393b72652070616972696e67206974207769746820736e65616b65727320666f7220612063617375616c206f7574696e67206f72206472657373696e672069742075702077697468206865656c7320666f722061206e69676874206f75742e20566572736174696c6520616e64206561737920746f206c617965722c207468697320647265737320697320612077617264726f626520657373656e7469616c2074686174207472616e736974696f6e73207365616d6c6573736c79206265747765656e20736561736f6e7320616e64207374796c65732e3c2f7374726f6e673e3c2f703e0d0a, '', 0x3c703e2d203c7374726f6e673e436c6173736963204d696e692053686972742044726573733c2f7374726f6e673e3a20412074696d656c6573732073696c686f756574746520776974682061206d696e69206c656e6774682c207065726665637420666f72206120636869632c206c6169642d6261636b206c6f6f6b2e3c6272202f3e0d0a2d203c7374726f6e673e5374796c69736820436865636b205061747465726e3c2f7374726f6e673e3a204665617475726573206120626f6c642c206579652d6361746368696e6720636865636b657265642064657369676e20746861742061646473206120746f756368206f6620726574726f20666c61697220746f20796f75722077617264726f62652e3c6272202f3e0d0a2d203c7374726f6e673e427574746f6e2d446f776e2046726f6e743c2f7374726f6e673e3a2046756e6374696f6e616c20627574746f6e732066726f6d20746f7020746f20626f74746f6d20666f72206120766572736174696c6520616e6420656173792d746f2d77656172207374796c652c20616c6c6f77696e6720796f7520746f2061646a75737420746865206e65636b6c696e652e3c6272202f3e0d0a2d203c7374726f6e673e436f6c6c617265642044657369676e3c2f7374726f6e673e3a20547261646974696f6e616c20736869727420636f6c6c61722061646473206120706f6c69736865642c20736f706869737469636174656420746f7563682e3c6272202f3e0d0a2d203c7374726f6e673e466c6174746572696e67204669743c2f7374726f6e673e3a2044657369676e6564207769746820612072656c61786564207965742066656d696e696e6520666974207468617420666c61747465727320616c6c20626f64792074797065732c206f66666572696e6720636f6d666f727420616e6420656173652e3c6272202f3e0d0a2d203c7374726f6e673e566572736174696c65205374796c696e673c2f7374726f6e673e3a20496465616c20666f7220626f74682063617375616c206461797320616e6420647265737365642d7570206c6f6f6b73266d646173683b70616972207769746820736e65616b65727320666f7220612064617974696d652076696265206f72206865656c7320666f722061206e69676874206f75742e3c6272202f3e0d0a2d203c7374726f6e673e44757261626c652c20536f6674204661627269633c2f7374726f6e673e3a204d6164652066726f6d20686967682d7175616c6974792c2062726561746861626c6520636f74746f6e206f72206120636f74746f6e2d626c656e642c207065726665637420666f7220616c6c2d64617920776561722e3c6272202f3e0d0a2d203c7374726f6e673e4561737920746f204c617965723c2f7374726f6e673e3a2043616e20626520776f726e20616c6f6e65206f72206c617965726564206f76657220746967687473206f72206c656767696e677320666f7220636f6f6c657220646179732e3c2f703e0d0a, '', '', 1, 1, 1, '2024-11-08 11:30:50', '2024-11-08 11:33:43'),
(208, 46, 9, '1169301350.png', '1949530124.png', '[{\"size_id\":[\"8\",\"9\",\"11\"],\"color_id\":[\"7\"],\"images\":[\"5755864700untitled-design-19.png\",\"3308345381untitled-design-21.png\",\"4611788032untitled-design-20.png\",\"13955921633untitled-design-17.png\",\"14592539354untitled-design-18.png\",\"536408765untitled-design-22.png\"],\"price\":\"699\",\"cut_price\":\"1099\",\"stock\":\"12\"}]', '', 'Pink&White check shirt dress', 'pinkwhite-check-shirt-dress', '5', 'Shirt dress check pink', 0x3c703e3c6272202f3e0d0a3c7374726f6e673e42656c74206973206e6f7420496e636c75646564266e6273703b3c2f7374726f6e673e3c2f703e0d0a0d0a3c703e3c7374726f6e673e54686973206d696e6920736869727420647265737320696e206120626f6c6420636865636b207061747465726e206f666665727320612074696d656c6573732c2063686963206c6f6f6b20776974682061206d6f6465726e2074776973742e20466561747572696e67206120627574746f6e2d646f776e2066726f6e7420616e64206120636c617373696320636f6c6c617265642064657369676e2c206974206566666f72746c6573736c7920626c656e647320747261646974696f6e616c207368697274207374796c6520776974682074686520706c617966756c2061707065616c206f662061206d696e69206c656e6774682e205468652072656c617865642079657420666c6174746572696e672066697420656e737572657320636f6d666f727420776974686f757420636f6d70726f6d6973696e67206f6e207374796c652c206d616b696e67206974207065726665637420666f7220612076617269657479206f66206f63636173696f6e732e20437261667465642066726f6d20736f66742c2062726561746861626c65206661627269632c207468697320647265737320697320696465616c20666f7220616c6c2d64617920776561722c207768657468657220796f75262333393b72652070616972696e67206974207769746820736e65616b65727320666f7220612063617375616c206f7574696e67206f72206472657373696e672069742075702077697468206865656c7320666f722061206e69676874206f75742e20566572736174696c6520616e64206561737920746f206c617965722c207468697320647265737320697320612077617264726f626520657373656e7469616c2074686174207472616e736974696f6e73207365616d6c6573736c79206265747765656e20736561736f6e7320616e64207374796c65732e3c2f7374726f6e673e3c2f703e0d0a, '', 0x3c703e2d266e6273703b3c7374726f6e673e436c6173736963204d696e692053686972742044726573733c2f7374726f6e673e3a20412074696d656c6573732073696c686f756574746520776974682061206d696e69206c656e6774682c207065726665637420666f72206120636869632c206c6169642d6261636b206c6f6f6b2e3c6272202f3e0d0a2d266e6273703b3c7374726f6e673e5374796c69736820436865636b205061747465726e3c2f7374726f6e673e3a204665617475726573206120626f6c642c206579652d6361746368696e6720636865636b657265642064657369676e20746861742061646473206120746f756368206f6620726574726f20666c61697220746f20796f75722077617264726f62652e3c6272202f3e0d0a2d266e6273703b3c7374726f6e673e427574746f6e2d446f776e2046726f6e743c2f7374726f6e673e3a2046756e6374696f6e616c20627574746f6e732066726f6d20746f7020746f20626f74746f6d20666f72206120766572736174696c6520616e6420656173792d746f2d77656172207374796c652c20616c6c6f77696e6720796f7520746f2061646a75737420746865206e65636b6c696e652e3c6272202f3e0d0a2d266e6273703b3c7374726f6e673e436f6c6c617265642044657369676e3c2f7374726f6e673e3a20547261646974696f6e616c20736869727420636f6c6c61722061646473206120706f6c69736865642c20736f706869737469636174656420746f7563682e3c6272202f3e0d0a2d266e6273703b3c7374726f6e673e466c6174746572696e67204669743c2f7374726f6e673e3a2044657369676e6564207769746820612072656c61786564207965742066656d696e696e6520666974207468617420666c61747465727320616c6c20626f64792074797065732c206f66666572696e6720636f6d666f727420616e6420656173652e3c6272202f3e0d0a2d266e6273703b3c7374726f6e673e566572736174696c65205374796c696e673c2f7374726f6e673e3a20496465616c20666f7220626f74682063617375616c206461797320616e6420647265737365642d7570206c6f6f6b73266d646173683b70616972207769746820736e65616b65727320666f7220612064617974696d652076696265206f72206865656c7320666f722061206e69676874206f75742e3c6272202f3e0d0a2d266e6273703b3c7374726f6e673e44757261626c652c20536f6674204661627269633c2f7374726f6e673e3a204d6164652066726f6d20686967682d7175616c6974792c2062726561746861626c6520636f74746f6e206f72206120636f74746f6e2d626c656e642c207065726665637420666f7220616c6c2d64617920776561722e3c6272202f3e0d0a2d266e6273703b3c7374726f6e673e4561737920746f204c617965723c2f7374726f6e673e3a2043616e20626520776f726e20616c6f6e65206f72206c617965726564206f76657220746967687473206f72206c656767696e677320666f7220636f6f6c657220646179732e3c2f703e0d0a, '', '', 1, 1, 1, '2024-11-08 11:33:27', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `product_review`
--

CREATE TABLE `product_review` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` text NOT NULL,
  `name` text NOT NULL,
  `mobile` text NOT NULL,
  `rating` text NOT NULL,
  `message` text NOT NULL,
  `status` int(11) NOT NULL,
  `addeddate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_review`
--

INSERT INTO `product_review` (`id`, `product_id`, `product_name`, `name`, `mobile`, `rating`, `message`, `status`, `addeddate`) VALUES
(4, 174, 'Sequence work co ord set (Pink)', 'Great Quality', '8076899159', '5', '', 1, '2024-07-04 14:21:21');

-- --------------------------------------------------------

--
-- Table structure for table `site_setting`
--

CREATE TABLE `site_setting` (
  `id` int(11) NOT NULL,
  `logo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt_mobile` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `youtube` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `map` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_setting`
--

INSERT INTO `site_setting` (`id`, `logo`, `mobile`, `alt_mobile`, `email`, `alt_email`, `address`, `facebook`, `twitter`, `instagram`, `youtube`, `map`) VALUES
(1, '1701171941.34', '8076899159', '', 'info@indianonlinemarket.com', 'info@indianonlinemarket.com', '', 'https://www.facebook.com/', 'https://twitter.com/', 'https://www.instagram.com/indianmarket___?igsh=ZmlhOHY0bXNjZDhk&utm_source=qr', 'https://www.youtube.com/', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.024852414841!2d77.0783872149481!3d28.62901724099117!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d04bf6ac2495d%3A0xfff07fc03531f009!2sJanakpuri%20District%20Center%2C%20Janakpuri%2C%20Delhi!5e0!3m2!1sen!2sin!4v1667453565010!5m2!1sen!2sin\" width=\"100%\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>');

-- --------------------------------------------------------

--
-- Table structure for table `size`
--

CREATE TABLE `size` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `addeddate` datetime NOT NULL,
  `modifieddate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `size`
--

INSERT INTO `size` (`id`, `name`, `slug`, `status`, `addeddate`, `modifieddate`) VALUES
(8, 'S', '', 1, '2023-03-31 09:40:31', '2023-04-14 12:26:25'),
(9, 'M', '', 1, '2023-03-31 09:41:13', '2023-04-04 06:45:30'),
(11, 'L', '', 1, '2023-03-31 09:43:03', '2023-04-04 06:45:26'),
(21, 'XL', '', 1, '2023-03-31 09:45:30', '2023-04-04 06:45:21'),
(22, 'XXL', '', 1, '2023-04-14 12:26:38', '0000-00-00 00:00:00'),
(23, 'XXXL', '', 1, '2023-04-14 12:26:46', '0000-00-00 00:00:00'),
(24, 'Free Size', 'free-size', 1, '2023-04-14 12:26:55', '2023-11-28 01:03:35'),
(26, ' XS', 'xs', 1, '2023-12-22 01:12:02', '0000-00-00 00:00:00'),
(27, '26', '26', 1, '2024-01-31 02:31:01', '0000-00-00 00:00:00'),
(28, '28', '28', 1, '2024-01-31 02:31:09', '0000-00-00 00:00:00'),
(29, '30', '30', 1, '2024-01-31 02:31:14', '0000-00-00 00:00:00'),
(30, '32', '32', 1, '2024-01-31 02:31:18', '0000-00-00 00:00:00'),
(31, '34', '34', 1, '2024-02-28 02:21:19', '0000-00-00 00:00:00'),
(32, '38', '38', 1, '2024-02-28 02:21:31', '0000-00-00 00:00:00'),
(33, '40', '40', 1, '2024-02-28 02:21:37', '0000-00-00 00:00:00'),
(34, '42', '42', 1, '2024-02-28 02:21:43', '0000-00-00 00:00:00'),
(35, '44', '44', 1, '2024-02-28 02:21:52', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `status` int(11) NOT NULL,
  `addeddate` datetime NOT NULL,
  `modifieddate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `image`, `status`, `addeddate`, `modifieddate`) VALUES
(5, '1704347773.webp', 0, '2024-01-04 11:26:13', '2024-01-04 11:26:24'),
(8, '1711999546.jpeg', 0, '2024-01-16 08:40:26', '2024-06-01 11:11:01'),
(9, '1705417970.jpeg', 0, '2024-01-16 08:41:22', '2024-01-16 08:42:50'),
(38, '1717414735.png', 0, '2024-06-03 05:08:55', '0000-00-00 00:00:00'),
(47, '1717418086.png', 0, '2024-06-03 06:04:46', '0000-00-00 00:00:00'),
(54, '1718357753.png', 0, '2024-06-14 03:05:53', '0000-00-00 00:00:00'),
(57, '1718357929.png', 0, '2024-06-14 03:08:49', '0000-00-00 00:00:00'),
(58, '1726837654.png', 1, '2024-09-18 03:30:20', '2024-09-20 06:37:34'),
(59, '1726837640.png', 1, '2024-09-18 03:32:04', '2024-09-20 06:37:20'),
(60, '1726656429.png', 0, '2024-09-18 04:17:09', '0000-00-00 00:00:00'),
(61, '1726836851.png', 0, '2024-09-20 06:17:22', '2024-09-20 06:24:11');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `slug` text NOT NULL,
  `status` int(11) NOT NULL,
  `addeddate` datetime NOT NULL,
  `modifieddate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `cat_id`, `name`, `slug`, `status`, `addeddate`, `modifieddate`) VALUES
(12, 13, 'Clothes', 'clothes', 1, '2023-09-02 10:58:39', '0000-00-00 00:00:00'),
(13, 14, 'Fashiion Clothes', 'fashiion-clothes', 1, '2023-09-02 10:58:52', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `role` int(11) NOT NULL COMMENT '1=admin\r\n2=vendor\r\n3=user',
  `first_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `martial` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `hash_key` text COLLATE utf8mb4_unicode_ci,
  `hash_expiry` datetime DEFAULT NULL,
  `status` int(11) NOT NULL,
  `addeddate` datetime DEFAULT NULL,
  `modifieddate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `role`, `first_name`, `last_name`, `username`, `password`, `email`, `mobile`, `address`, `image`, `gender`, `dob`, `martial`, `age`, `country`, `state`, `hash_key`, `hash_expiry`, `status`, `addeddate`, `modifieddate`) VALUES
(1, 1, 'Azmal', 'Ansari', 'azmal123', 'azmal123', 'admin@gmail.com', '46546', 'sfsfsdf sdefdsfs fsdf sdf', 'user2.jpg', 'male', '01/01/2022', 'single', '22', 'india', 'elhi', NULL, NULL, 1, NULL, NULL),
(2, 1, 'Bhawna', 'Goyal', 'admin', 'admin', 'Info@indianmarket.com', '8076899159', 'delhi', '1677049590.jpg', 'Female', '22-07-2002', 'single', '21', 'india', 'delhi', NULL, NULL, 1, NULL, NULL),
(3, 1, 'Wolverine', 'logen', 'azmal', 'azmal', 'wolverine@gmail.com', '897989', 'sfsfsdf sdefdsfs fsdf sdf', '1701158108.svg', 'male', '01/01/2022', 'single', '22', 'india', 'delhi', NULL, NULL, 1, NULL, NULL),
(9, 2, 'Bhawna', '', 'bhawna', 'Bhawna', 'Bhawnagoyal9876@gmail.com', '8076899159', '', '1705768106.jpeg', '', '', '', '', '', '', NULL, NULL, 1, '2023-12-22 12:46:11', '2024-01-20 09:58:26'),
(15, 3, 'Azmal', 'Ansari', 'Azmal Ansari', '123456', 'azmal123@gmail.com', '9584712015', '', '1704456206.png', '', '', '', '', '', '', NULL, NULL, 1, '2024-01-05 00:00:00', NULL),
(16, 3, 'dddd', 'dddd', 'Azmal', 'admin', 'azmal1123@gmail.com', '1231', '', '1704454666.webp', '', '', '', '', '', '', NULL, NULL, 1, '2024-01-05 00:00:00', NULL),
(18, 3, '', '', 'rakhi', '123456', 'amayeramalkeet1225@gmail.com', '7011221026', '', '1677049590.jpg', '', '', '', '', '', '', NULL, NULL, 1, '2024-01-11 00:00:00', NULL),
(19, 3, '', '', 'Rakhi', '12345678', 'rakhi@gmail.com', '7896541230', '', '1677049590.jpg', '', '', '', '', '', '', NULL, NULL, 1, '2024-01-12 00:00:00', NULL),
(20, 3, '', '', 'Kshitiz ', 'kshitiz9213', 'kshitizsinghal3493@gmail.com', '9310442725', '', '1677049590.jpg', '', '', '', '', '', '', NULL, NULL, 1, '2024-01-16 00:00:00', NULL),
(21, 3, '', '', 'admin', '7011496870', 'aadmin@gmail.com', '7011496870', '', '1677049590.jpg', '', '', '', '', '', '', NULL, NULL, 1, '2024-02-14 00:00:00', NULL),
(22, 3, '', '', 'Manmeet Kaur', 'Manmeet74@@', 'manmeetnonupai@gmail.com', '9911407107', '', '1677049590.jpg', '', '', '', '', '', '', NULL, NULL, 1, '2024-10-17 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `name` text NOT NULL,
  `position` text NOT NULL,
  `content` text NOT NULL,
  `status` int(11) NOT NULL,
  `addeddate` datetime NOT NULL,
  `modifieddate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `vendor_ticket`
--

CREATE TABLE `vendor_ticket` (
  `id` int(11) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `subject` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_reply` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `addeddate` datetime NOT NULL,
  `modifieddate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `status` int(11) NOT NULL,
  `addeddate` datetime NOT NULL,
  `modifieddate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `image`, `status`, `addeddate`, `modifieddate`) VALUES
(9, '1728629516.app_video_8E483A9E6C920AB8C85E6E40DC08B0AB_video_dashinit', 0, '2024-10-11 12:21:56', '0000-00-00 00:00:00'),
(10, '1728636035.mp4', 0, '2024-10-11 12:21:56', '2024-10-11 02:10:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_to_temp_cart`
--
ALTER TABLE `add_to_temp_cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_to_wishlist`
--
ALTER TABLE `add_to_wishlist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `all_images`
--
ALTER TABLE `all_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupen_code`
--
ALTER TABLE `coupen_code`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `finalorder`
--
ALTER TABLE `finalorder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `instagram`
--
ALTER TABLE `instagram`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marquee`
--
ALTER TABLE `marquee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offer_banners`
--
ALTER TABLE `offer_banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offer_single_banner`
--
ALTER TABLE `offer_single_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_cancel_request`
--
ALTER TABLE `order_cancel_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_coupon`
--
ALTER TABLE `order_coupon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_review`
--
ALTER TABLE `product_review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_setting`
--
ALTER TABLE `site_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendor_ticket`
--
ALTER TABLE `vendor_ticket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_to_temp_cart`
--
ALTER TABLE `add_to_temp_cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=390;

--
-- AUTO_INCREMENT for table `add_to_wishlist`
--
ALTER TABLE `add_to_wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `all_images`
--
ALTER TABLE `all_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7271;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `color`
--
ALTER TABLE `color`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=253;

--
-- AUTO_INCREMENT for table `coupen_code`
--
ALTER TABLE `coupen_code`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `finalorder`
--
ALTER TABLE `finalorder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;

--
-- AUTO_INCREMENT for table `instagram`
--
ALTER TABLE `instagram`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `marquee`
--
ALTER TABLE `marquee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `offer_banners`
--
ALTER TABLE `offer_banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `offer_single_banner`
--
ALTER TABLE `offer_single_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=304;

--
-- AUTO_INCREMENT for table `order_cancel_request`
--
ALTER TABLE `order_cancel_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `order_coupon`
--
ALTER TABLE `order_coupon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=209;

--
-- AUTO_INCREMENT for table `product_review`
--
ALTER TABLE `product_review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `site_setting`
--
ALTER TABLE `site_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `size`
--
ALTER TABLE `size`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vendor_ticket`
--
ALTER TABLE `vendor_ticket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
