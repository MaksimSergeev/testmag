-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 11, 2017 at 05:17 PM
-- Server version: 5.7.13
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_mag`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `sort_order` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '1',
  `image` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf32;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `sort_order`, `status`, `image`) VALUES
(1, 'Hammer Drills', 0, 1, '/template/images/cat/pi1.jpg'),
(2, 'Cordless Drills', 0, 1, '/template/images/cat/pi2.jpg'),
(3, 'Drills', 0, 1, '/template/images/cat/pi3.jpg'),
(4, 'Grinders', 0, 1, '/template/images/cat/pi4.jpg'),
(5, 'Circular Saws', 0, 1, '/template/images/cat/pi5.jpg'),
(6, 'Saws', 0, 1, '/template/images/cat/pi6.jpg'),
(7, 'Nailers', 0, 1, '/template/images/cat/pi7.jpg'),
(8, 'Mixing Tools', 0, 1, '/template/images/cat/pi8.jpg'),
(9, 'Multi Tools', 0, 1, '/template/images/cat/pi9.jpg'),
(10, 'Sanders', 0, 1, '/template/images/cat/pi10.jpg'),
(11, 'Vacuums', 0, 1, '/template/images/cat/pi11.jpg'),
(12, 'Welders', 0, 1, '/template/images/cat/pi12.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `category_id` int(11) NOT NULL,
  `code` int(11) NOT NULL,
  `price` float NOT NULL,
  `availability` int(11) NOT NULL,
  `image` varchar(255) CHARACTER SET utf8 NOT NULL,
  `description` text CHARACTER SET utf8 NOT NULL,
  `is_new` int(11) NOT NULL DEFAULT '0',
  `is_recommended` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=3673 DEFAULT CHARSET=utf32;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `category_id`, `code`, `price`, `availability`, `image`, `description`, `is_new`, `is_recommended`, `status`) VALUES
(3, 'Milwaukee Kango K540s 240v SDS Max', 1, 655667, 379, 1, '/template/images/1/3.jpg', 'Best power to weight ratio in its class >\r\nFeatures and Benefits:\r\n2 mode SDS-Max combi hammer\r\nRoto-stop and multi position chisel function gives 12 different positions to optimize working angle\r\nSafety clutch protects operator and machine if drill bit jams\r\nRobust magnesium gear housing for tough environments, exact seat fitting of gear components and better cooling\r\nLow vibration construction enhances usage time per day\r\nSoft grip main side handle', 1, 0, 1),
(4, 'DeWalt DEWDWE357K Sabre Saw 240v', 6, 355767, 158, 1, '/template/images/6/2.jpg', 'At only 368mm in length, it allows easy access when cutting in tight areas, making this one extremely versatile tool.\r\nFeatures and Benefits:\r\n4-position blade clamp allows for flush cutting and increased versatility\r\nLever action key-less blade clamp for quick and easy blade change\r\n1,050 watt motor, designed for heavy duty applications\r\nLightweight and balanced, giving excellent control\r\n29 mm stroke length and 0-2,800 SPM delivers excellent cutting performance\r\nVariable speed trigger\r\nIdeal for plumbers, electricians, heating, HVAC and builders', 0, 1, 1),
(7, 'Ryobi 5133002019 RPD800-K Drill 800 Watt 240 Volt', 3, 465789, 74, 1, '/template/images/3/1.jpg', 'Ryobi RPD800-K Percussion Drill is compact and lightweight for easy drilling and features a variable speed wheel for ultimate control. Has an auto lock spindle and keyless chuck for quick and easy changes. Also features a hammer mode, and a bright LED work light.', 0, 0, 1),
(9, 'Metabo SBE760 240V 240v 760W Drill', 3, 456566, 94, 1, '/template/images/3/3.jpg', 'The SBE760 is the newest addition to the Metabo impact range, this 760watt 2 speed professional entry level drill with a full plastic motor housing is ideal for eyeline or overhead applications thanks to its light weight and ergonomic design. Supplied with the Metabo S-automatic safety clutch for user and machine safety and a variable speed thumb dial for preselection of speed.', 0, 0, 1),
(12, 'DeWalt DWE4206K 230V 115mm Mini Grinder', 4, 568785, 74, 1, '/template/images/4/3.jpg', 'The Dewalt DWE4206K 230v 115mm Mini Grinder features a dust ejection system which removes the majority of debris from the air, it''s anti vibration side handle improves the user comfort and the anti lock flange prevents the flanges locking up and locking the disc on. The high efficiency motor design improves the performance for some of the most demanding applications. This DeWalt DWE4206K 230v 115mm Mini Grinder is perfect for most grinding needs, its small disc allows access to grind confined tight spaces.', 0, 0, 1),
(15, 'Bosch GKS165/2 230v 1100W 165mm Circular Saw', 5, 456576, 95, 1, '/template/images/5/3.jpg', 'This new Wood cutting Circular saw features a compact design, with a large cutting depth, and is ideal for any woodworking applications. Its two-stage gearbox gives this tool its ability to cut deeper, and also reduces its size allowing for a more useable compact design.', 0, 0, 1),
(16, 'Bosch Green PSA700E 710W 240V Sabre Saw', 6, 347879, 73, 1, '/template/images/6/1.jpg', 'This high quality Bosch sabre saw is designed for use by the experienced DIY''er. With its ability to take all standard saw blades, the PSA 700 E will cut through wood and metal. Its lightweight and ergonomic design makes it a tool that is comfortable to use with an optimum size to weight ratio. The tool also features a 710 watt motor, which can handle even the toughest jobs its faced with.', 0, 0, 1),
(20, 'Tacwise TAC1165 230v Duo 35 Nailer', 7, 325567, 85, 1, '/template/images/7/2.jpg', 'The Tacwise Duo Nailer/Stapler is a corded electric tool which nails up to 35mm and staples up to 30mm. It is a highly versatile tool for every tradesman and a wide variety of 2nd fix tasks. \r\nIt has a quick-release nose for jam clearance and an on/off safety light. In addition, it also features a new pro Air tool magazine.', 0, 0, 1),
(21, 'Draper 15636 230v Electric Nailer', 7, 325576, 32, 1, '/template/images/7/3.jpg', 'Storm Force stapler fitted with a contact safety mechanism, which stops accidental firing and an anti-jam mechanism. The ergonomic soft grip handle helps prevent user fatigue. Supplied with 400 x 14mm staples and 100 x 15mm brad nails.', 0, 0, 1),
(24, 'Evolution EVOTWIST/2 Electric Mixer 240v', 8, 456576, 85, 1, '/template/images/8/3.jpg', 'A high quality mixer with variable speed control, from 250 -750rpm. Featuring a robust headstock and an ergonomic handle for maximum comfort and control. There really is no substitute for a dedicated mixer, they’re fast and easy to use, and at this price it’s an excellent investment.', 0, 0, 1),
(26, 'Draper MT300 300W 230V  Multi-Tool', 9, 465798, 82, 1, '/template/images/9/2.jpg', 'A robustly manufactured, oscillating power tool that provides portability with ease of use. The multi-tool contains a host of features including an ergonomic grip, 10-speed variable stepped motor, long power cord and easy lock and change tool attachment. Able to be equipped with a variety of accessories all set at any of the 12 predetermined angles, ideal when sanding, grinding, cutting etc. All sanding, grinding and cutting achieves an accomplished finish due to the high-speed oscillating motion. Supplied with a host of accessories including dust extraction pipe, universal blade for cutting wood, plastic and metal, triangular sanding pad, three tri-sanding sheets (60, 120, 180 grit), offset rigid scraper blade, offset combi semi-circular saw blade for wood and plastic, hexagon key and a hard-shelled plastic carrying case with plenty of dedicated spaces for the oscillating tool and accessories. A versatile and productive multi-tool, that stands out from the pack.', 0, 0, 1),
(29, 'Bosch PSM100A 240v 100w Palm Multi-Sander', 10, 576889, 37, 1, '/template/images/10/2.jpg', 'Features and Benefits:\nLightweight and compact, ideal for sanding in hard-to-reach areas and for sanding smaller and medium-sized surfaces\nClean working thanks to Microfilter System: the built-in dust extraction element sucks the dust directly into the Microfilter Box which comes complete with the tool\nMicro Velcro-type fastening system for quick sanding paper changes\nTwo-piece sanding plate: for optimum utilisation of the sanding paper, the delta tip of the sanding paper and of the sanding plate can be effortlessly detached and rotated\nDust extraction connection for all-purpose vacuum cleaners', 0, 0, 1),
(31, 'Sparky SPKVC1431 230V VC 1431 1700 W', 11, 354657, 99, 1, '/template/images/11/1.jpg', 'With high performance motor for industrial applications.\r\nThe Sparky VC 1431 Wet & Dry Vacuum has a robust high-performance motor and is ideal for industrial applications. It features an integrated power take off socket with automatic start and stop also overflow protection with auto off function.The vacuum has a 30 litre steel tank and is suitable for the suction of liquids. \r\nFitted with an L Class Filter that traps 99% of dust particles with a size larger than 1mg/m3 and keep it in the vacuum.\r\nThe water release valve ensures easy tank discharge, and it rollers ensure easy movement. This vacuum has a chrome coated metal telescopic tube and has practical in-built cable plus accessory storage areas.', 0, 0, 1),
(34, 'Silverline 868773 Arc Welder 65 - 250A', 12, 768798, 110, 1, '/template/images/12/1.jpg', 'Welds steel up to 10mm. Heavy duty moving coil transformer offers stepless regulation of welding current. Fan-cooled for increased duty cycle and performance. Automatic overload and thermal cut-out protection with control light. Includes earth cable, electrode holder and welding mask.', 0, 0, 1),
(43, 'Makita DFS452RMJ 18V 2x4.0Ah Li-Ion ', 2, 545465, 364, 1, '/template/images/2/1.jpg', 'Model DFS452 is an advanced version of model DFS451 and has been developed as a cordless screwdriver that can supersede corded screwdrivers.\r\nFeatures and Benefits\r\nPush drive technology\r\nLock on function\r\nSilent clutch\r\nOne touch locator\r\nLED job light with on/off switch.\r\nVariable speed control by trigger\r\nBattery fuel gauge\r\nBelt hook\r\nErgonomic soft grip.\r\nForward/reverse rotation', 0, 1, 1),
(51, 'DeWalt DCK215D2T 10.8v', 2, 546577, 221, 1, '/template/images/2/2.jpg', '10.8 Volt DCD710 Sub Compact Drill Driver with adjustable torque control for consistent screwdriving into a variety of materials. 10mm single sleeve keyless chuck with automatic spindle lock.\r\nFeatures and Benefits:\r\nAll metal gearing for efficient power transmission and long tool life.\r\nMarks a levelled line in seconds.', 0, 0, 1),
(66, 'Hitachi DV18DSDL/JM 2x3.0Ah Li-ion 18V ', 2, 256768, 250, 1, '/template/images/2/3.jpg', 'The drill offers an extremely high maximum torque of 92Nm, with lightweight slide-in Li-Ion batteries, a 2 speed gearbox to suit most applications, raised body mouldings for extra protection against dust and dirt and a slimline soft-grip handle.\r\nFeatures and Benefits:\r\nForward & reverse switch\r\nWhite LED spotlight which illuminates workpiece\r\nBattery level indicator\r\n13mm metal chuck with ratcheting lock\r\nSpindle lock and a metal belt clip which can be fitted for right or left-handed use', 0, 0, 1),
(82, 'Hitachi DV18V/J6 13mm Rotary Drill Keyless 240v', 3, 465723, 127, 1, '/template/images/3/2.jpg', 'Hitachi 690 Watt DV18V Powerful variable speed impact drill with two speed gearbox. The sturdy aluminium gear casing provides longer working life. Fitted with a 13mm keyless chuck, and a soft-grip handle.', 0, 0, 1),
(104, 'Einhell EINTEAG115 Mini Grinder 720 Watt', 4, 234354, 41, 1, '/template/images/4/1.jpg', 'The Einhell TE AG 115 angle grinder is a high-quality tool for experts with exacting demands, whose strong points are demonstrated to the full on a broad spectrum of cutting, grinding and roughing jobs everywhere in the home, workshop and garage. A wheel guard with no-tool quick-adjust facility can be adapted with just a twist of the hand to any task, while the spindle stop permits easy and speed tool change.', 0, 1, 1),
(111, 'Makita GA4030 100mm Angle Grinder 240v', 4, 466534, 50, 1, '/template/images/4/2.jpg', 'Small diameter Angle grinders with ergonomically best possible barrel grip. Regardless of whether the user grips motor housing or rear cover, the extra-ergonomic barrel grip fits any user’s palm and fingers perfectly, and provides easy and comfortable handling while minimizing hand fatigue and pain.', 1, 0, 1),
(131, 'Makita HS6601/2 240v 165mm Circular Saw', 5, 435565, 84, 1, '/template/images/5/1.jpg', 'The Makita model HS6601 is a 165mm (6-1/2") Circular Saw and has been developed as the successor to the 5604R. The flat motor housing design increases stability when changing blades. A rear dust exhaust post exhausts sawdust backward only, preventing it from scattering around to provide comfortable operation. The HS6601 is supplied with dust nozzle, rip fence (guide rule), tct saw blade and hex wrench.', 0, 1, 1),
(134, 'DeWalt DEWD25501K 240v 40MM SDS Max ', 1, 465657, 419, 1, '/template/images/1/1.jpg', 'DeWalts combination hammer drill is ideal for drilling anchor fixings and through holes in concrete and masonry from 12 to 40 mm in diameter and is capable of core drilling up to 90 mm.', 0, 0, 1),
(142, 'Einhell EINBTCS14001 190mm 1400 Watt Circular Saw 240v', 5, 646577, 65, 1, '/template/images/5/2.jpg', 'The Einhell BT-CS 1400/1 Circular Saw is a high powered, reliable, all-rounder providing the best service to ambitious DIY enthusiasts on numerous cutting-to-size jobs. The sawing depth and tilt angle of the saw can be adjusted without tools at a twist of the hand. Thanks to the large, ergonomic handle, the saw is comfortable to hold. The splitter automatically adjusts to the cutting depth and offers additional safety for user and material. The housing surface is soft-painted to provide a good and pleasant grip. Accurate cuts are assured by the parallel guide. ', 0, 0, 1),
(183, 'Milwaukee SSD1100X 240v Sabre Saw', 6, 454565, 224, 1, '/template/images/6/3.jpg', 'High cutting performance due to powerful 1100 watt motor combined with a 28 mm saw stroke.\r\nFIXTEC blade clamp for fast and easy blade changes without any key.\r\nWater & finger protection nose for safer work and better rust protection.\r\nVariable speed trigger switch.\r\nDurable long lasting slider crople mechanism.', 0, 0, 1),
(195, 'Tacwise 0274 140EL Electric Nailer 230V', 7, 244677, 27, 1, '/template/images/7/1.jpg', 'A lightweight, high impact tacker for those heavy-duty applications, taking the standard 140 heavy gauge flat wire staples and nails too.\r\nSuitable for attaching wire mesh netting to wood, Coffin linings, Insulation and lining, Office screens, External pelmets, blinds and awnings, Roofing felt, Theatre and film scenery, Upholstery and Re-upholstery , Exhibition/Show Construction, Fixing carpet and underlay, Display and shop fitting.', 0, 0, 1),
(224, 'Hitachi DH40MC/J1 230v SDS-Max', 1, 656878, 309, 1, '/template/images/1/2.jpg', 'The new Hitachi DH40MC replaces the previous model DH40MR, bringing approximately 13% faster drilling speed, 28% more demolition performance and 25% less vibration. Hitachi have increased the size of both the damper and the volume of the air cushion to reduce the impact and piston reaction force generated during hammering. The new one push bit mounting speeds up bit changing but taking out a step. All that needs to be done is insert the drill bit into the tool holder while turning it. The mode change lever located on top of the tool is easily visible and allows for smooth mode changing.', 0, 1, 1),
(234, 'Vitrex VITMIX850 Power Mixer 230v 850W', 8, 368877, 66, 1, '/template/images/8/2.jpg', 'This Vitrex power mixer is ideal for mixing cement, plaster, grout and adhesives, fillers, paint plus other mortars for construction.\r\nThe mixer is lightweight for comfortable handling and carrying, and has adjustable and lockable speed control for continuous operation. The metal handle acts as a rest when placing the mixer down, thus protecting the mixer head.', 0, 0, 1),
(243, 'Fein DUSTEX 25 L 240v', 11, 879807, 205, 1, '/template/images/11/3.jpg', 'Powerful wet and dry dust extractor for connecting to power tools when working in the workshop and for assembly work.\r\nFeatures & Benefits:\r\nAuto start socket with switch-on delay to avoid power surges.\r\nPowerful turbine to 70 l/s volumetric flow and 230 mbar vacuum.\r\nPractical storage area with edge.\r\nTool collar with suction force regulation to set the suction power with ease.\r\n4m suction hose for a large working radius', 0, 0, 1),
(255, 'Draper 16061 400w Stormforce Multi tool', 9, 254656, 59, 1, '/template/images/9/1.jpg', 'Storm Force® oscillating multi-tool kit fitted with a powerful 400W variable speed motor. Manufactured with a robust metal casing wrapped with soft grip rubber for user comfort. Supplied with a selection of accessories including offset combination bi-metal saw blade, triangular sanding pad with sanding sheets, offset scraper blade, semi-circular blade and a hex key, all stored within a heavy duty carry case.', 0, 0, 1),
(275, 'Bosch GOP250CEC1 230v Multi-Tool', 9, 435578, 106, 1, '/template/images/9/3.jpg', 'A robustly manufactured, oscillating power tool that provides portability with ease of use. The multi-tool contains a host of features including an ergonomic grip, 10-speed variable stepped motor, long power cord and easy lock and change tool attachment. Able to be equipped with a variety of accessories all set at any of the 12 predetermined angles, ideal when sanding, grinding, cutting etc. All sanding, grinding and cutting achieves an accomplished finish due to the high-speed oscillating motion. Supplied with a host of accessories including dust extraction pipe, universal blade for cutting wood, plastic and metal, triangular sanding pad, three tri-sanding sheets (60, 120, 180 grit), offset rigid scraper blade, offset combi semi-circular saw blade for wood and plastic, hexagon key and a hard-shelled plastic carrying case with plenty of dedicated spaces for the oscillating tool and accessories. A versatile and productive multi-tool, that stands out from the pack.', 0, 0, 1),
(325, 'Sealey PC310 Valeting Machine 1250W/230V', 11, 435657, 142, 1, '/template/images/11/2.jpg', 'Cleans carpets, car interiors, fabrics and upholstery. Constructed from high impact plastic which is dent resistant and rustproof. Supplied with carpet lance, hand held lance, full wet and dry vacuum accessory kit, including stainless steel telescopic rigid extension tube, cartridge filter and foam filter. Powerful pump forces cleaning fluid into fabric/carpet and 1250Watt suction power leaves surface virtually dry after one pass. Features safety shut -off for wet operation.', 0, 0, 1),
(352, 'Sealey SUPERMIG180 Welder 180Amp 230V', 12, 457823, 378, 1, '/template/images/12/2.jpg', 'This high quality Mig welder from sealy is a versatile tool which offers excellent performance at an extremely competative price. It features a high output transformer and forced air cooling that ensures the highest levels of performance even during constant use. To get you started, this kit comes supplied with a contoured grip non-live torch, Industrial Argon/C02 gas regulator, contact tips 0.6 and 0.8mm and gas cup. Ideal for continuous use on car panel thickness materials. Also welds stainless and aluminium.', 0, 0, 1),
(2245, 'Festool MX 1600/2 240v 1500W Mixer', 8, 345778, 380, 1, '/template/images/8/1.jpg', 'ErgoFix height adjustment system permits you to adapt your stirrer to your height. Meaning you can take the opportunity to mix materials in a relaxed and effortless upright, natural position.\r\nWith its extremely sturdy design it is up to the hardest of demands due to its long life drive, stable tubular steel frame, switch protection and rubber bumper edges. With this sturdy design comes a powerful motor combined with a perfectly dimensioned gear permits constant pulling performance over a long period of time.', 0, 0, 1),
(3665, 'Draper MW244ATPRO 240A 230V Welder', 12, 45999, 813, 1, '/template/images/12/3.jpg', 'Features:\r\nExpert Quality. Euro torch connector. Adjustable burnback control. Spot welding timer for precise spot welds. Six stage power setting. Variable wire speed control. Thermal overload protection. Earth clamp. 0.6/0.8mm wire feed roller.', 1, 0, 1),
(3671, 'Black & Decker B/DKA320EKA 230v Sander', 10, 436685, 40, 1, '/template/images/10/3.jpg', 'Compact power - powerful 240W motor gets the job done quicker.\r\nVariable speed for greater control when sanding.\r\nLarge orbit size and high sander speed for faster material removal.\r\nLarger dust bag ensure less mess when sanding for cleaner work area.\r\nVersatile - 1/3rd sheet base sands flush to three sides. Ideal for using on vertical surfaces such as doors and walls, for light to medium sanding tasks.\r\nLightweight sander with front and rear handles for maximum comfort and control.\r\nQuick & easy paper change - hook & loop or traditional clip attachment.', 0, 0, 1),
(3672, 'Einhell TE-OS 1320 240v Sander 130w', 10, 787989, 28, 1, '/template/images/10/1.jpg', 'The Einhell TE-OS 1320 Multi-Sander is a handy all-rounder which combines the best ergonomics with maximum functionality for lending surfaces a good finish. Experts appreciate the single-handed tool as an indispensable helper for the sanding of wood, plastic and metal, which demonstrates its qualities particularly on small and hard-to-reach surfaces.\r\nIt has an ergonomic design with soft grip, making it easy to hold and provides precise handling. Comes with a hook & loop sanding sheet fastening system, the abrasive paper can be changed in seconds and sits crease-free on the sanding disk. For clean, practically dust-free working there is a dust collection box with integrated filter. A cable clip secures the wound-up cable with just a twist of the hand sees the multiple sander neatly stored away after use.', 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_order`
--

CREATE TABLE IF NOT EXISTS `product_order` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `user_phone` varchar(255) CHARACTER SET utf8 NOT NULL,
  `user_comment` text CHARACTER SET utf8 NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `products` text CHARACTER SET utf8 NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf32;

--
-- Dumping data for table `product_order`
--

INSERT INTO `product_order` (`id`, `user_name`, `user_phone`, `user_comment`, `user_id`, `date`, `products`, `status`) VALUES
(1, 'Mark', '0663550068', 'Tomorrow', NULL, '2017-09-10 17:49:48', '{"3665":1}', 1),
(2, 'Serg', '0663551100', 'fefefe', 19, '2017-09-10 17:54:45', '{"3672":1,"3671":1,"3665":1}', 1),
(3, 'Serg', '0663550068', 'dgfff', 19, '2017-09-10 18:09:41', '{"3671":1}', 1),
(4, 'Serg', '0663550068', 'rfgfhgfh', 19, '2017-09-10 18:14:27', '{"243":1,"255":1}', 1),
(5, 'Serg', '0663550068', 'ghgjhkhgk', 19, '2017-09-10 19:39:32', '{"3672":-2}', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `password` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf32;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`) VALUES
(1, 'efew', 'hydroid89@gmail.com', 'azsxdc'),
(3, 'Oleg', 'dfdg@ddfe.ua', 'qwertyu'),
(19, 'Serg', 'fweff@dgege.ty', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_order`
--
ALTER TABLE `product_order`
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
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3673;
--
-- AUTO_INCREMENT for table `product_order`
--
ALTER TABLE `product_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
