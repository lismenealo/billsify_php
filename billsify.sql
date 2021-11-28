-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2021 at 12:49 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `billsify`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `comment` text DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `date`, `comment`, `user_id`) VALUES
(8, '2021-12-11', 'A date to talk about stuff', 20),
(9, '2021-12-31', 'Another appointment', 19),
(15, '2021-11-29', 'This is an important one', 15),
(16, '2021-11-30', 'To discuss important stuff', 19),
(19, '2021-12-10', 'An appointment that is very important, remember', 15),
(20, '2021-12-07', 'A appointment for Admin', 22);

-- --------------------------------------------------------

--
-- Table structure for table `app_features`
--

CREATE TABLE `app_features` (
  `id` int(11) NOT NULL,
  `title` varchar(45) NOT NULL,
  `description` text DEFAULT NULL,
  `tech_stack` varchar(45) NOT NULL,
  `image` varchar(255) NOT NULL,
  `time` varchar(45) NOT NULL,
  `image_size` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `app_features`
--

INSERT INTO `app_features` (`id`, `title`, `description`, `tech_stack`, `image`, `time`, `image_size`) VALUES
(15, 'OCR', '<blockquote>Optical character recognition or optical character reader (OCR) is the electronic or mechanical conversion of images of typed, handwritten or printed text into machine-encoded text, whether from a scanned document, a photo of a document, a scene-photo (for example the text on signs and billboards in a landscape photo) or from subtitle text superimposed on an image (for example: from a television broadcast)</blockquote>', 'ML, Pattern Recongnition', 'images/ocr---intro-animations.gif', '15', '800x600'),
(17, 'IN Billsify', '<blockquote>Captured image will be analyzed extracting metadata related and all details will be automatically extract of the bill image. Facilitating the queries of across the stored invoices</blockquote>', 'DB, Data Mining', 'images/AppDrawer.png', '4', '295x508'),
(18, 'Classify captured invoices and balance overvi', '<blockquote>\r\n<p>Existing applications do not allow direct control.<br />The application also allows the capture of invoices, their classification and the calculation<br />of the balance of expenses by categories.</p>\r\n</blockquote>', 'ChartJS', 'images/Background.png', '6', '1414x817');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `body` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `body`, `image`, `author`, `timestamp`) VALUES
(2, 'Mario Kart Tracks In Flight Simulator', '<blockquote><span style=\"font-family: helvetica, arial, sans-serif;\">We&rsquo;ve seen how well&nbsp;<em style=\"box-sizing: inherit; text-rendering: optimizelegibility; line-height: inherit;\">Microsoft&rsquo;s Flight Simulator</em>&nbsp;handles interpreting real-world objects and landmarks, but what about something a little more&hellip;racy? Modder&nbsp;<span style=\"box-sizing: inherit; text-rendering: optimizelegibility;\"><a class=\"sc-1out364-0 hMndXN sc-145m8ut-0 eRdxJX js_link\" style=\"box-sizing: inherit; color: #222222; line-height: inherit; text-decoration-line: none; transition: color 0.1s ease-out 0s; box-shadow: #b12460 0px -2px 0px inset;\" href=\"https://twitter.com/Illogicoma/status/1432109884351336450\" target=\"_blank\" rel=\"noopener noreferrer\" data-ga=\"[[\">Illogicoma</a></span>&nbsp;thought it would be neat to try importing&nbsp;<em style=\"box-sizing: inherit; text-rendering: optimizelegibility; line-height: inherit;\">Mario Kart</em>&nbsp;tracks into the sim, and they&rsquo;re right. It&rsquo;s very neat.With the latest version of&nbsp;<em style=\"box-sizing: inherit; text-rendering: optimizelegibility; line-height: inherit;\">Flight Simulator</em>, Microsoft has given players a reasonable facsimile of the planet Earth, and I feel as if it is our sovereign duty to screw with that planet as much as possible. Not in a global warming sense&mdash;we&rsquo;ve already got that covered, it seems&mdash;but by turning it into the fanciful playground it could be if we could only get over the idea of physics and coherent design. In short, we need more people like Illogicoma to have&nbsp;<span style=\"box-sizing: inherit; text-rendering: optimizelegibility;\"><a class=\"sc-1out364-0 hMndXN sc-145m8ut-0 eRdxJX js_link\" style=\"box-sizing: inherit; color: #222222; line-height: inherit; text-decoration-line: none; transition: color 0.1s ease-out 0s; box-shadow: #b12460 0px -2px 0px inset;\" href=\"https://twitter.com/Illogicoma/status/1432109884351336450\" target=\"_blank\" rel=\"noopener noreferrer\" data-ga=\"[[\">thoughts like these</a></span>:</span><em><span style=\"font-family: helvetica, arial, sans-serif;\">So anyway I thought&nbsp;<span style=\"box-sizing: inherit; text-rendering: optimizelegibility; line-height: inherit;\">Mario Kart 8</span>&nbsp;tracks would also be fun when you play them in&nbsp;<span style=\"box-sizing: inherit; text-rendering: optimizelegibility; line-height: inherit;\">Flight Simulator</span>&nbsp;so I put&nbsp;<span style=\"box-sizing: inherit; text-rendering: optimizelegibility; line-height: inherit;\">Mario Kart 8</span>&nbsp;tracks in&nbsp;<span style=\"box-sizing: inherit; text-rendering: optimizelegibility; line-height: inherit;\">Flight Simulator</span>&nbsp;and played them and it was true.</span></em></blockquote>', 'images/705812ec810572e6737df76a29c6a0ab.jpg', 'Lisbet Meneses Alonso', '2021-11-28 00:22:04'),
(3, 'A Zelda Like For The Stardew Crowd', '<blockquote><span style=\"font-family: helvetica, arial, sans-serif;\">When I first watched the trailer for&nbsp;<em style=\"box-sizing: inherit; text-rendering: optimizelegibility; line-height: inherit;\">Garden Story,&nbsp;</em>I was reminded of one of my favorite Game Boy Advance games from my childhood. I wasn&rsquo;t given much money as a kid, so I would stand at the GameStop demo booth and play&nbsp;<em style=\"box-sizing: inherit; text-rendering: optimizelegibility; line-height: inherit;\">The Legend of Zelda: The Minish Cap</em>&nbsp;for hours on end. I wanted&nbsp;<em style=\"box-sizing: inherit; text-rendering: optimizelegibility; line-height: inherit;\">Garden Story&nbsp;</em>to be just like the forest adventures I had back then. It fulfilled that promise and offered a lot more.<em style=\"box-sizing: inherit; text-rendering: optimizelegibility; line-height: inherit;\">Garden Story</em>&nbsp;is an action game where you play as a grape named Concord and solve 2D puzzles. It doesn&rsquo;t try too hard to explain why some residents were frogs, some were fruit, and others were mushrooms. They all lived in the Grove and took care of each other in their own ways, especially as they were threatened by the monsters who were affiliated with the Rot.I was charmed by the whimsical chiptune music, the unique interface, and the way the grass would part slightly when Concord stepped in it. Concord is the chosen guardian, but the villagers treat them gently, as if a child. There&rsquo;s lots of handholding and care by most of the community.</span>\r\n<div class=\"bxm4mm-3 eCMXYG js_video-sticky__top-limit\" style=\"box-sizing: inherit; margin: 0px; padding: 0px; width: 800px; height: 3px; color: #222222; font-family: ProximaNovaCond, sans-serif; font-size: 16px; background-color: #ffffff;\">&nbsp;</div>\r\n<div class=\"bxm4mm-5 cICFzA\" style=\"box-sizing: inherit; margin: 0px; padding: 0px; position: relative; color: #222222; font-family: ProximaNovaCond, sans-serif; font-size: 16px; background-color: #ffffff;\">\r\n<div class=\"bxm4mm-2 hKBnez js_video-sticky-trigger\" style=\"box-sizing: inherit; margin: 0px; padding: 0px; position: absolute; z-index: -1; top: 30px; width: 800px; height: 50px;\">&nbsp;</div>\r\n</div>\r\n<div class=\"bxm4mm-4 fQqUFt js_video-sticky__bottom-limit\" style=\"box-sizing: inherit; margin: 0px; padding: 0px; position: absolute; width: 1903px; height: 3px; color: #222222; font-family: ProximaNovaCond, sans-serif; font-size: 16px; background-color: #ffffff;\">&nbsp;</div>\r\n<span style=\"font-family: helvetica, arial, sans-serif;\">However,&nbsp;<em style=\"box-sizing: inherit; text-rendering: optimizelegibility; line-height: inherit;\">Garden Story</em>&nbsp;is plagued by the same problem as other indie action games. The game relies on experimentation more than an adequate tutorial introduction. It took me three days to learn how to heal and five days to learn how to open the mailbox (you attack it with a weapon). This is great if you don&rsquo;t want games to handhold you through the mechanics, but I&rsquo;m a very impatient player. I just want to be told that hammers are capable of clearing debris so I can be on my merry way.</span></blockquote>', 'images/564764d42989700a8df9a4db0abd1ab5.jpg', 'Nara Hitika', '2021-11-28 00:22:04'),
(4, 'The Jeep Wrangler efficiency', '<blockquote>It is not a hard-and-fast rule, but most cars would be better with the addition of some electric motors. There are always exceptions&mdash;heavy batteries and an electric motor would ruin a Caterham 7, for instance&mdash;but it holds true for most cars. Consider the Jeep Wrangler 4xe, the new plug-in hybrid variant of the nation\'s favorite rock-crawler.For non-car people, Wrangler might as well be synonymous with Jeep. The current-generation Wrangler only dates back to 2017, but it still carries plenty of styling cues that hark straight back to the original World War II Jeep.&nbsp;Big wheels project out from the body, protected in plastic arch extensions that house the LED daylight running lights up front.But it\'s not a particularly big SUV by the standards of 2021, at 188.4 inches (4,786 mm) long (including the rear-mounted spare tire). The doors signal to you that they\'re removable by way of large external hinges. The only real clues that this is a plug-in hybrid are some electric blue bits here and there (like the tow hooks) plus the charging port that lives just below the A pillar on the driver\'s side.To enter, pull on that rugged door handle, then hop up into the cabin via the running board and a grab handle mounted right on the A pillar. The 1940s design cues continue on the inside, with the most vertical dashboard I\'ve encountered in many years. That does mean the UConnect touchscreen is within easy reach, at least.Under the distinctive hood you\'ll find a 2.0 L turbocharged four-cylinder direct-injection gasoline engine that generates 270 hp (200 kW) and 295 lb-ft (400 Nm). There\'s also a 134 hp (100 kW), 181 lb-ft (245 Nm) electric traction motor mounted to the front of the eight-speed automatic transmission&mdash;in this case the ever-excellent ZF 8HP.There\'s also a two-speed transfer case with both 4-high and 4-low four-wheel drive modes as well as two-wheel drive for on-road activities. Our test Wrangler 4xe was the Sahara model, which features open Dana 44 front and rear differentials, although a limited-slip rear is available as an option. More hardcore off-roaders will want the Rubicon, which upgrades the diffs with Tru-Lok lockers.</blockquote>', 'images/JP021_549WR13gf71fe5eltpacdhlcpdd4ttg-1440x960.jpg', 'Lia Lopez', '2021-11-28 00:30:16');

-- --------------------------------------------------------

--
-- Table structure for table `rol`
--

CREATE TABLE `rol` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rol`
--

INSERT INTO `rol` (`id`, `name`) VALUES
(1, 'admin'),
(2, 'user'),
(3, 'client');

-- --------------------------------------------------------

--
-- Table structure for table `_user`
--

CREATE TABLE `_user` (
  `id` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `rol_id` int(11) NOT NULL DEFAULT 3
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `_user`
--

INSERT INTO `_user` (`id`, `username`, `password`, `name`, `email`, `rol_id`) VALUES
(15, 'lismenealo', '$2y$10$KvMngSjVk5VfXRGRxznzcergbUyNPQxBtYA/YdjH5Y3kc9EMy6Rpm', 'Lisbet Meneses Alonso', 'lismenealo@gmail.com', 1),
(17, 'narapiri', '$2y$10$GkoweIobvQOmcg0Fsi3xIu9oR2mAVzrOkheKYB6KePByfKNqa2tlK', 'Nara Hikita', 'nara@gmail.com', 1),
(19, 'lia', '$2y$10$SgkthpM4E.F9R5PxyZr/8Otq43aQa4wEpZNQr5ObxtBnrsuZBL3mG', 'Lianne Lopez', 'lia@gmail.com', 3),
(20, 'agapito', '$2y$10$f49WXEoFstLx1j3e6tIt7uK5pcHZfs4gDEshUV9zh1DBIQjJoZale', 'Agapito Mendoza', 'agapito@gmai.com', 2),
(22, 'admin', '$2y$10$t71p6jw2ASoVTmyrMmv.5.HGL0f3o12DwGCHM5tPpqjbzeTKlBLGm', 'Admin', 'admin@admin.com', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`,`user_id`),
  ADD KEY `fk_appointment_user_idx` (`user_id`);

--
-- Indexes for table `app_features`
--
ALTER TABLE `app_features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `_user`
--
ALTER TABLE `_user`
  ADD PRIMARY KEY (`id`,`rol_id`),
  ADD UNIQUE KEY `username_UNIQUE` (`username`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `fk_user_rol1_idx` (`rol_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `app_features`
--
ALTER TABLE `app_features`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `rol`
--
ALTER TABLE `rol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `_user`
--
ALTER TABLE `_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `fk_appointment_user` FOREIGN KEY (`user_id`) REFERENCES `_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `_user`
--
ALTER TABLE `_user`
  ADD CONSTRAINT `fk_user_rol1` FOREIGN KEY (`rol_id`) REFERENCES `rol` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
