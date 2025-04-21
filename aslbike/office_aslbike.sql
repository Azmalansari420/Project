-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2023 at 06:04 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `office_aslbike`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longblob NOT NULL,
  `status` int(11) NOT NULL,
  `addeddate` datetime NOT NULL,
  `modifieddate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `image`, `title`, `slug`, `content`, `status`, `addeddate`, `modifieddate`) VALUES
(2, '03.jpg', 'Things you should know about interior', 'things-you-should-know-about-interior', 0x3c703e4f7572206f66666963657320617265206c6f6361746564206f6e2074686520747261646974696f6e616c2c20756e6365642e2070686f746f20626f6f7468207374756d70746f776e20746f2062616e6b73792c20656c697420736d616c6c206261746368206672656567616e2668656c6c69703b20486f7720746f2041747461696e2050726f63657373204175746f6d6174696f6e20536174697366616374696f6e2e204e61747572616c6c792c207468652061707065616c206f6620526f626f7420666f7220697473206d61726b657420706f74656e7469616c2063616e6e6f742066616465206177617920616e7974696d6520736f6f6e2c206174206c6561737420756e74696c20616e6f7468657220677265617420746563686e6f6c6f67792063616e207265706c616365206d6f62696c6520617070732e204275742073757270726973696e676c792c206f6e6c7920612068616e6466756c206f66206170707320696e206576657279206e69636865207265616c6c79206265636f6d65207375636365737366756c20616e64206f6e6c7920612068616e6466756c206f662061707073206163726f737320616c6c206e6963686573207265616c6c792026616d703b206d616b652069742061207068656e6f6d656e616c20737563636573732e20536f2c20776861742061626f757420746865206661696c757265206f66206f7468657220617070733f20576861742061726520746865206b657920666163746f727320726573706f6e7369626c6520666f7220746865206661696c757265206f66206d696c6c696f6e73206f6620617070733f2057656c6c2c2061706172742066726f6d2074686520696c6c2d636f6e63656976656420617070206964656120616e6420646576656c6f706d656e7420616e642064657369676e20666c617773206d616e7920617070732073696d706c79206661696c2062656361757365206f66207468656972207072652d6c61756e636820616e6420706f73742d6c61756e63682073686f7274636f6d696e67732e3c2f703e0d0a0d0a3c626c6f636b71756f74653e0d0a3c703e48616c66206f66204c696665206973206c6f737420696e20636861726d696e67206f74686572732e20546865206f746865722068616c66206973206c6f737420696e20676f696e67207468726f75676820616e7869657469657320636175736564206279206f74686572732e204c65617665207468697320706c61792c20796f75206861766520706c6179656420656e6f7567682e3c2f703e0d0a0d0a3c703e52756d6920266e646173683b20446576656c6f7065723c2f703e0d0a3c2f626c6f636b71756f74653e0d0a0d0a3c703e53696e6365206d6f7374206f66207573207370656e64206120636f6e736964657261626c6520706f7274696f6e206f66206f7572206461696c792074696d65206f6e206d6f62696c65206170707320616e642073696e636520746865792068617665206120706c6574686f7261206f66206f7074696f6e7320666f7220657665727920617070206e696368652c206b6e6f77696e67207468656972207370656369666963206e656564732c207072696f7269746965732c20707265666572656e6365732c20616e64206578706563746174696f6e73206265636f6d652076657279206372756369616c20666f7220617070206d61726b65746572732e20546869732069732077687920657665727920617070206d75737420636f6e6475637420656c61626f72617465206d61726b6574207265736561726368206265666f7265207374617274696e67207769746820616e206170702070726f6a6563742e204576656e207768696c65207468652061707020697320726561647920666f72206c61756e63682c20796f75206e65656420746f206d616b652061206c61756e636820706c616e2062617365642075706f6e20746865206d6f7374207375697461626c65206368616e6e656c7320616e64206d61726b6574696e67206d65737361676520666f7220796f7572207461726765742061756469656e63652e3c2f703e0d0a0d0a3c68323e506c616e20596f75722050726f6a656374207769746820596f757220536f6674776172653c2f68323e0d0a0d0a3c703e412076617374206d616a6f72697479206f662074686520617070206d61726b6574657273206d61696e6c7920636f6e63656e7472617465206f6e2074686520706f73742d6c61756e636820617070206d61726b6574696e6720746563686e697175657320616e64206d65617375726573207768696c6520636f6d706c6574656c79206d697373696e67206f6e20746865207072652d6c61756e63682063616d706169676e2e20546869732070726576656e7473207468652061707020746f206372656174652062757a7a20616e642068797065206a7573742061726f756e64207468652074696d65207768656e2074686520617070206973206c61756e636865642e20417320616e64207768656e20796f75206c61756e636820746865206170702c20616c7265616479206120636f6e736964657261626c65206e756d626572206f662070656f706c652073686f756c6420657870656374616e746c79206c6f6f6b20666f727761726420746f20796f75722061707020616e642074686973207265717569726573206c6f6e672d647261776e206d61726b6574696e67206566666f727473206c656164696e6720757020746f2074686520617070206c61756e6368206576656e742e20546f20637265617465207072652d6c61756e63682062757a7a20616e6420687970652061626f757420746865206170702026616d703b2061206d6f62696c652061707020646576656c6f706d656e7420636f6d70616e792026616d703b2068617320616e206172726179206f66206d61726b6574696e67206f7074696f6e73206c696b6520736f6369616c206d656469612063616d706169676e2c2073656172636820656e67696e65206164732c20766964656f206164732c20656d61696c2063616d706169676e732c206574632e3c2f703e0d0a0d0a3c703e4a75737420617320612072657461696c20627573696e65737320696e207265616c206c6966652069732072656d656d6265726564206e6f74206a75737420666f72206974732070726f64756374206f66666572696e67732062757420616c736f2062656361757365206f66206974732073657276696365732c20737570706f72742c20616e6420637573746f6d65722d667269656e646c696e6573732c20616e206170702074686174206f666665727320612026616d703b2068656c7066756c20637573746f6d657220737570706f72742073797374656d2026616d703b20666f72206974732076616c75656420757365727320656e6a6f79206d6f7265207472616374696f6e20616e6420656e676167656d656e74207468616e206f7468657220617070732e204772656174206272616e647320616c6c206f7665722074686520676c6f626520656e6a6f7920617070726563696174696f6e20616e6420706f70756c61726974792062656361757365206f6620746865697220637573746f6d65722d667269656e646c7920737570706f727420616e642073657276696365732e3c2f703e0d0a0d0a3c703e596f7572207369746520646f65736e26727371756f3b74206861766520616e7920746167732c20736f20746865726526727371756f3b73206e6f7468696e6720746f20646973706c6179206865726520617420746865206d6f6d656e742e3c2f703e0d0a0d0a3c703e3c6120687265663d2268747470733a2f2f61647565746563686e6f6c6f676965732e636f6d2f61737262696b652f626c6f672d64657461696c732e70687023223e627573696e6573733c2f613e266e6273703b3c6120687265663d2268747470733a2f2f61647565746563686e6f6c6f676965732e636f6d2f61737262696b652f626c6f672d64657461696c732e70687023223e49743c2f613e266e6273703b3c6120687265663d2268747470733a2f2f61647565746563686e6f6c6f676965732e636f6d2f61737262696b652f626c6f672d64657461696c732e70687023223e6d61726b6574696e673c2f613e266e6273703b3c6120687265663d2268747470733a2f2f61647565746563686e6f6c6f676965732e636f6d2f61737262696b652f626c6f672d64657461696c732e70687023223e53454f3c2f613e266e6273703b3c6120687265663d2268747470733a2f2f61647565746563686e6f6c6f676965732e636f6d2f61737262696b652f626c6f672d64657461696c732e70687023223e736f6c7574696f6e3c2f613e266e6273703b3c6120687265663d2268747470733a2f2f61647565746563686e6f6c6f676965732e636f6d2f61737262696b652f626c6f672d64657461696c732e70687023223e737461727475703c2f613e266e6273703b3c6120687265663d2268747470733a2f2f61647565746563686e6f6c6f676965732e636f6d2f61737262696b652f626c6f672d64657461696c732e70687023223e73747261746567793c2f613e266e6273703b3c6120687265663d2268747470733a2f2f61647565746563686e6f6c6f676965732e636f6d2f61737262696b652f626c6f672d64657461696c732e70687023223e746970733c2f613e3c2f703e0d0a0d0a3c626c6f636b71756f74653e0d0a3c703e266c6471756f3b446f20796f7520736565206f76657220796f6e6465722c20667269656e642053616e63686f2c20746869727479206f7220666f7274792068756c6b696e67206769616e74733f204920696e74656e6420746f20646f20626174746c652077697468207468656d20616e6420736c6179207468656d2e26726471756f3b3c2f703e0d0a3c636974653e266d646173683b20446f6e20517569786f74653c2f636974653e3c2f626c6f636b71756f74653e0d0a, 1, '2022-08-25 01:03:41', '0000-00-00 00:00:00');

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
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `mobile`, `subject`, `address`, `message`) VALUES
(50, 'Sahil', 'ansarimdsahil112@gimal.com', '8447530174', 'Bike', 'Wz283/189', ''),
(51, 'Ali', 'javedali1500ja@gmail.com', '8076871223', '', 'E_484 JJ colony Khayla', 'Hi'),
(52, 'Javedali', 'javedali1500ja@gmail.com', '8076871223', 'B', 'E_484 JJ colony Khayla', 'Hi'),
(53, 'Harry Williams', 'harrywilliams.websolution02@gmail.com', '06207654699', 'Question about your websites', 'Winnipeg, Canada', 'Hey,\r\n\r\nYour website\'s design is absolutely brilliant. The visuals really enhance your message and the content compels action. I\'ve forwarded it to a few of my contacts who I think could benefit from your services.\r\n\r\nWhen I was looking at your site, though, I noticed some mistakes that you\'ve made re: search engine optimization (SEO) which may be leading to a decline in your organic SEO results. Would you like to fix it so that you can get maximum exposure/presence on Google, Bing, Yahoo and web traffic to your website?\r\n\r\nIt\'s a relatively simple fix. If this is a priority.\r\n\r\nPlease share your “Mobile Number\" and a suitable time to talk, so I can help you in that.\r\n\r\n\r\n------------------\r\nBest Regards\r\nHarry Williams\r\nDigital Marketing Team\r\nCall: 1-620-765-4699'),
(57, 'Birthday', '', '8978465', 'Enquiry', 'C2/15, Janakpuri, New Delhi - 110058', 'ujk'),
(58, 'Wolverine', 'wolverine@gmail.com', '', 'Enquiry', 'shop no-210 ground ', 'hjkhjkjk'),
(59, 'test', 'test@gmail.com', '4444444', 'test', 'test', 'jg djgf g\r\n'),
(60, 'Sahil', 'sahil@gimel.com', '8447530174', 'Bick', 'Khyala ', ''),
(62, 'Monarch', 'varshadeveloper@outlook.com', 'E rg Fiw Lypj', 'Re: Want more clients and customers?', 'Missouri City , Tx – 77495', 'Hey, Hope you are doing well,\r\n\r\nhttp://asrbikemechanicathome.com/contact\r\n\r\nAs I see, you have a newly launched website not showing up on top search engines like Google/Bing/Yahoo. If you are on page #1, you will get so many new customers every day.\r\n\r\nOur service is an asset to your organization in bringing traffic to your website and generating more Leads, Sales, and Conversions.\r\n\r\nTo improve your business, we can help you with business optimization services like SEO, SMO, ORM, CRO, SMM, PPC, web design, and development to enhance your operation.\r\n\r\nIf you wish to take advantage of this chance.\r\n\r\nPlease respond with your phone number and country code, along with the services (listed above) you are interested in, so we can schedule a follow-up call for you within 24 hours. I\'d be glad to go over our plan with you.\r\n\r\nHave a nice day :)\r\n\r\nRegards, Varsha\r\n'),
(63, 'Anna', 'annawilson.web@gmail.com', 'Fogvvx', 'Re : Website Design & Development service provider', 'Via San Cosmo Fuori Porta Nolana 123', 'Hi\r\n\r\nI am Anna,\r\n\r\nWe collaborate with startups, SMBs, and new domain owners to provide Website design - re-design and development services at modest rate.\r\n\r\nWe have a dedicated team of 45 professional designers and developers with over 8 plus years of experience and we thrive on the idea that design makes a difference.\r\n\r\nOur services at a glance: -\r\n\r\nWebsite Designing/Re-Designing\r\n\r\n#E-commerce development (Magento, Shopify, Woo Commerce etc.)\r\n\r\n#Graphic Designing\r\n\r\n#WordPress Theme Design & Customization\r\n\r\n#Custom themes, Plugins & Widget Development\r\n\r\n#Custom Templates, Modules, Plugins Design & Development\r\n\r\nPlease share your REQUIREMENT with your phone number (With Country Code) /Skype and suitable time (Meeting) to talk to you, So we can discuss and understand in detail.\r\n\r\n\r\nI’m waiting for your reply.\r\n\r\nKinds Regards,\r\n\r\nAnna (Web Solution Manager)'),
(64, 'JosephDop', 'no-replyEn@gmail.com', '81239133552', 'The best advertising of your products and services!', 'https://www.no-site.com', 'Gооd dаy!  asrbikemechanicathome.com \r\n \r\nDid yоu knоw thаt it is pоssiblе tо sеnd rеquеst аbsоlutеly lеgаlly? \r\nWе оffеr а nеw lеgitimаtе mеthоd оf sеnding lеttеr thrоugh соntасt fоrms. Suсh fоrms аrе lосаtеd оn mаny sitеs. \r\nWhеn suсh mеssаgеs аrе sеnt, nо pеrsоnаl dаtа is usеd, аnd mеssаgеs аrе sеnt tо fоrms spесifiсаlly dеsignеd tо rесеivе mеssаgеs аnd аppеаls. \r\nаlsо, mеssаgеs sеnt thrоugh fееdbасk Fоrms dо nоt gеt intо spаm bесаusе suсh mеssаgеs аrе соnsidеrеd impоrtаnt. \r\nWе оffеr yоu tо tеst оur sеrviсе fоr frее. Wе will sеnd up tо 50,000 mеssаgеs fоr yоu. \r\nThе соst оf sеnding оnе milliоn mеssаgеs is 49 USD. \r\n \r\nThis оffеr is сrеаtеd аutоmаtiсаlly. Plеаsе usе thе соntасt dеtаils bеlоw tо соntасt us. \r\n \r\nContact us. \r\nTelegram - @FeedbackMessages \r\nSkype  live:contactform_18 \r\nWhatsApp - +375259112693 \r\nWe only use chat.'),
(65, 'Harvey Spectre', 'harveyspectrework4@gmail.com', '6207654699', 'Question about your websites', 'Winnipeg, Canada', 'Hey,\r\n\r\nYour website\'s design is absolutely brilliant. The visuals really enhance your message and the content compels action. I\'ve forwarded it to a few of my contacts who I think could benefit from your services.\r\n\r\nWhen I was looking at your site, though, I noticed some mistakes that you\'ve made re: search engine optimization (SEO) which may be leading to a decline in your organic SEO results. Would you like to fix it so that you can get maximum exposure/presence on Google, Bing, Yahoo and web traffic to your website?\r\n\r\nIt\'s a relatively simple fix. If this is a priority.\r\n\r\nPlease share your “Mobile Number\"\" and a suitable time to talk, so I can help you in that.\r\n\r\n\r\nBest Regards\r\nHarvey Spectre\r\nDigital Marketing Team\r\nCall: 1-620-765-4699'),
(66, 'Mike Morgan\r\n', 'no-replyEn@gmail.com', '88362894117', 'Get more dofollow backlinks for asrbikemechanicathome.com', 'https://no-site.com', 'Hello \r\n \r\nWe all know the importance that dofollow link have on any website`s ranks. \r\nHaving most of your linkbase filled with nofollow ones is of no good for your ranks and SEO metrics. \r\n \r\nBuy quality dofollow links from us, that will impact your ranks in a positive way \r\nhttps://www.digital-x-press.com/product/150-dofollow-backlinks/ \r\n \r\nBest regards \r\nMike Morgan\r\n \r\nsupport@digital-x-press.com'),
(67, 'Mike Howard\r\n', 'no-replyEn@gmail.com', '86918765166', 'NEW: Semrush Backlinks', 'https://asrbikemechanicathome.com', 'Hi there \r\n \r\nThis is Mike Howard\r\n \r\nLet me introduce to you our latest research results from our constant SEO feedbacks that we have from our plans: \r\n \r\nhttps://www.strictlydigital.net/product/semrush-backlinks/ \r\n \r\nThe new Semrush Backlinks, which will make your asrbikemechanicathome.com SEO trend have an immediate push. \r\nThe method is actually very simple, we are building links from domains that have a high number of keywords ranking for them.  \r\n \r\nForget about the SEO metrics or any other factors that so many tools try to teach you that is good. The most valuable link is the one that comes from a website that has a healthy trend and lots of ranking keywords. \r\nWe thought about that, so we have built this plan for you \r\n \r\nCheck in detail here: \r\nhttps://www.strictlydigital.net/product/semrush-backlinks/ \r\n \r\nCheap and effective \r\n \r\nTry it anytime soon \r\n \r\n \r\nRegards \r\n \r\nMike Howard\r\n \r\nmike@strictlydigital.net'),
(68, 'Mark Den', 'mark@markdens.com', '83768576137', 'Partnership', 'https://asrbikemechanicathome.com', 'Good day \r\n \r\n \r\n \r\nI contacted you some days back seeking your cooperation in a matter regarding funds worth $24 Million, I \r\nurge you to get back to me through this email mark1@markdens.com if you\'re still interested. \r\n \r\n \r\nI await your response. \r\n \r\n \r\nThanks, \r\n \r\n \r\nMark Den'),
(69, 'Adell Florance', 'florance.adell@hotmail.com', 'Q sjhhbzk Uz', 'Here\'s How You Will Get REAL traffic, From Real Humans Back To Your Websites!', 'Im Wingert 53', 'Hey,\r\n\r\nYou want real traffic to your websites, not fake traffic.  \r\n\r\nWhat if I told you, we have a software that actually brings you real humans, back to your websites and wait for it….. Who also ENGAGE with your content?   \r\n\r\nI\'m not kidding...There is a proven and tested strategy and software that automates this process for you on complete autopilot.  \r\n\r\nCheck Out Link Below \r\n\r\nhttps://bit.ly/3V1elNs'),
(70, 'Mike Abramson\r\n', 'no-replyEn@gmail.com', '88287823888', 'Want Better Local Ranks? Ready this', 'https://no-site.com', 'Greetings \r\n \r\nIf you have a local business and want to rank it on google maps in a specific area then this service is for you. \r\n \r\nGoogle Map Stacking is one of the best ways to rank your GMB in a specific mile radius. \r\n \r\nMore info: \r\nhttps://www.speed-seo.net/product/google-maps-pointers/ \r\n \r\n \r\nPS: Want an all in one Local Plan that includes everything? \r\nhttps://www.speed-seo.net/product/local-seo-package/'),
(71, 'Mike Simon\r\n', 'no-replyEn@gmail.com', '83327187273', 'Increase the DA of your asrbikemechanicathome.com in MOZ', 'https://asrbikemechanicathome.com', 'Hi there \r\n \r\nJust checked your asrbikemechanicathome.com in Moz and saw that you could use an authority boost. \r\n \r\nWith our service you will get a guaranteed Moz DA 40+ score within just 3 months time. This will increase the organic visibility and strengthen your website authority, thus getting it stronger against G updates as well. \r\n \r\nFor more information, please check our offers \r\nhttps://www.monkeydigital.co/domain-authority-plan/ \r\n \r\nThanks and regards \r\nMike Simon\r\n \r\n \r\n \r\nPS: For a limited time, we`ll add ahrefs UR40+ for free.');

-- --------------------------------------------------------

--
-- Table structure for table `engineer`
--

CREATE TABLE `engineer` (
  `id` int(11) NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `work_p` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `addeddate` datetime NOT NULL,
  `modifieddate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `engineer`
--

INSERT INTO `engineer` (`id`, `image`, `name`, `work_p`, `status`, `addeddate`, `modifieddate`) VALUES
(2, 'team-thumb-05.jpg', 'Wolverine', 'Mechanic', 1, '2022-08-25 12:43:48', '0000-00-00 00:00:00'),
(3, 'team-thumb-01.jpg', 'Wedding', 'Mechanic', 1, '2022-08-25 12:44:00', '0000-00-00 00:00:00'),
(4, 'team-thumb-03.jpg', 'Birthday', 'Mechanic', 1, '2022-08-25 12:44:09', '0000-00-00 00:00:00'),
(5, 'team-thumb-04.jpg', 'Venom', 'Mechanic', 1, '2022-08-25 12:44:24', '0000-00-00 00:00:00'),
(6, 'fevi2.png', 'Hulk', 'Mechanic', 1, '2022-08-25 12:44:48', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `partner`
--

CREATE TABLE `partner` (
  `id` int(11) NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `addeddate` datetime NOT NULL,
  `modifieddate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partner`
--

INSERT INTO `partner` (`id`, `image`, `status`, `addeddate`, `modifieddate`) VALUES
(2, 'barand2.png', 1, '2022-08-25 12:16:46', '0000-00-00 00:00:00'),
(3, 'barand6.png', 1, '2022-08-25 12:16:52', '0000-00-00 00:00:00'),
(4, 'barand6.png', 1, '2022-08-25 12:16:58', '0000-00-00 00:00:00'),
(5, 'barand2.png', 1, '2022-08-25 12:17:08', '0000-00-00 00:00:00'),
(6, 'barand6.png', 1, '2022-08-25 12:17:12', '0000-00-00 00:00:00'),
(7, 'barand2.png', 1, '2022-08-25 12:17:17', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `site_setting`
--

CREATE TABLE `site_setting` (
  `id` int(11) NOT NULL,
  `mobile` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `instragram` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_setting`
--

INSERT INTO `site_setting` (`id`, `mobile`, `email`, `address`, `facebook`, `twitter`, `instragram`, `logo`) VALUES
(1, '7678348620', 'Javedali1500ja@gmail.com', 'shop no-210 ground floor 25sqmtrs jj colony khayala 110018.', 'https://www.facebook.com/', 'https://twitter.com/', 'https://www.instagram.com/', 'logo2.png');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `addeddate` datetime NOT NULL,
  `modifieddate` datetime NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `title`, `content`, `url`, `status`, `addeddate`, `modifieddate`, `image`) VALUES
(2, 'Best mechanical for service ', 'Perspicis unde omne iste natus error sit voluptatem acntium doloremque laudanum totam', 'service', 1, '2022-08-25 12:06:17', '0000-00-00 00:00:00', 'hackery-slider1.jpg'),
(3, 'Technicians for service ', 'Perspicis unde omne iste natus error sit voluptatem acntium doloremque laudanum totam', 'service', 1, '2022-08-25 12:07:04', '0000-00-00 00:00:00', 'hackery-slider2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `username` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `username`, `password`, `image`) VALUES
(1, 'azmal', 'azmal1', ''),
(2, 'admin', 'admin', 'logo2.png'),
(3, 'azmal', 'azmal', 'wold.gif');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `addeddate` datetime NOT NULL,
  `modifieddate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `image`, `name`, `comment`, `status`, `addeddate`, `modifieddate`) VALUES
(1, 'hackery-user.png', 'parth', 'purchase inspection on a Mazda. I was looking to buy it and they let me bring it in on a Saturday with no', 1, '2022-08-25 12:22:27', '2022-08-27 10:40:22'),
(2, 'fevi2.png', 'rahul', 'purchase inspection on a Mazda. I was looking to buy it and they let me bring it in on a Saturday with no', 1, '2022-08-25 12:25:45', '2022-08-27 10:34:29'),
(3, '04.png', 'Batman', 'purchase inspection on a Mazda. I was looking to buy it and they let me bring it in on a Saturday with no', 1, '2022-08-25 12:25:55', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `engineer`
--
ALTER TABLE `engineer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partner`
--
ALTER TABLE `partner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_setting`
--
ALTER TABLE `site_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `engineer`
--
ALTER TABLE `engineer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `partner`
--
ALTER TABLE `partner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `site_setting`
--
ALTER TABLE `site_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
