-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 21, 2019 at 03:12 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `new_infinistyle`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminID` int(11) NOT NULL,
  `fullName` varchar(200) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminID`, `fullName`, `username`, `password`) VALUES
(2, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customerID` int(11) NOT NULL,
  `fullName` varchar(200) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(256) NOT NULL,
  `address` varchar(500) NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customerID`, `fullName`, `email`, `username`, `password`, `address`, `phone`) VALUES
(1, 'Jon Snow', 'snow.jon@westeros.ws', 'JonSnow', '778124c645e584859816f0192675d7c3', 'The North', '302210312'),
(2, 'Arya Stark', 'arya.stark@westeros.ws', 'AryaStark', 'bb5cc2bbd90a5d9bb81ce454d66d940c', 'House Stark', '42342354'),
(3, 'Daenerys Targaryen', 'daenerys@westeros.ws', 'DanyDragon', '83e92bb9a278410a0584b7d49bbccdb7', 'Winterfell', '1233432'),
(4, 'Cersei Lannister', 'cersei.lannister@westeros.ws', 'Lannister', '72545f3f86fad045a26ed54abd2bbb9f', 'Kings Landing', '123342'),
(5, 'Cindy Michelle', 'cindymichelle798@gmail.com', 'cindmichelle', 'c19120f3a15cbe5828b4d5922f522a87', 'jakarta', '08988053979');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `orderID` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderdetails`
--

INSERT INTO `orderdetails` (`orderID`, `productID`, `qty`, `price`) VALUES
(12, 1, 3, 70000),
(12, 1, 3, 70000),
(12, 1, 3, 70000),
(12, 1, 3, 70000),
(12, 1, 3, 70000),
(12, 1, 3, 70000),
(12, 2, 2, 65000),
(12, 1, 1, 70000),
(12, 3, 1, 55000),
(13, 2, 1, 65000),
(13, 1, 1, 70000),
(15, 1, 1, 70000);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderID` int(11) NOT NULL,
  `orderDate` date NOT NULL,
  `orderStatus` varchar(50) NOT NULL,
  `customerID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderID`, `orderDate`, `orderStatus`, `customerID`) VALUES
(1, '2019-05-21', 'on process', 5),
(2, '2019-05-21', 'on process', 5),
(3, '2019-05-21', 'on process', 5),
(4, '2019-05-21', 'on process', 5),
(5, '2019-05-21', 'on process', 5),
(6, '2019-05-21', 'on process', 5),
(7, '2019-05-21', 'on process', 5),
(8, '2019-05-21', 'on process', 5),
(9, '2019-05-21', 'on process', 5),
(10, '2019-05-21', 'on process', 5),
(11, '2019-05-21', 'on process', 5),
(12, '2019-05-21', 'on process', 5),
(13, '2019-05-21', 'on process', 5),
(14, '2019-05-21', 'on process', 5),
(15, '2019-05-21', 'on process', 5),
(16, '2019-05-21', 'on process', 5);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productID` int(11) NOT NULL,
  `productName` varchar(100) NOT NULL,
  `productDescription` varchar(300) NOT NULL,
  `productPrice` int(50) NOT NULL,
  `productStock` int(50) NOT NULL,
  `productCategory` varchar(100) NOT NULL,
  `productImage` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productID`, `productName`, `productDescription`, `productPrice`, `productStock`, `productCategory`, `productImage`) VALUES
(1, 'Baby Blue Flower T-shirt', 'Fit S, material cotton combad', 70000, 9, 'tops', 'top1.jpg'),
(2, 'Navy Camel T-shirt', 'Fit S, material cotton combad', 65000, 50, 'tops', 'top2.jpg'),
(3, 'Big Sister Purple T-shirt', 'Matrial cotton, fit to M', 55000, 9, 'tops', 'top3.jpg'),
(4, 'New Pokemon T-Shirt', 'Fit to L, available in one color', 100000, 10, 'tops', 'top4.jpg'),
(5, 'Red Hero T-Shirt for Boy', 'Fit to L, bust: 55cm', 120000, 11, 'tops', 'top5.jpg'),
(6, 'H&H Orange Soccer T-Shirt', 'New Brand. Comfortable. Fit to M', 87000, 13, 'tops', 'top6.jpg'),
(7, 'Chillz Red & White Striped T-Shirt', 'Crop Tee, fit to L', 99000, 43, 'tops', 'top7.jpg'),
(8, 'Basic White Shirt for Boy', 'Fit to L, include extra 2 buttons ', 143000, 21, 'tops', 'top8.jpg'),
(9, 'Kiss Star Pink T-shirt', 'Fit to S, comfortable', 76000, 33, 'tops', 'top9.jpg'),
(10, 'Yay! Yellow Bright T-Shirt', 'New Collection 2019, fit to S', 93000, 1, 'tops', 'top10.jpg'),
(11, 'Sell-Sun White Stripped T-Shirt', 'Afdorable Pattern, fit to S', 97000, 3, 'tops', 'top11.jpg'),
(12, 'Rainbow Love White T-shirt', 'Fit to S', 0, 18, 'tops', 'top12.jpg'),
(13, 'Bling-bling Pink Sweater', 'Fit to M, winter collection', 176000, 5, 'tops', 'top13.jpg'),
(14, 'Sweet Cherry Stripped T-shirt', 'With changabled glitter color, fit to S', 69500, 7, 'tops', 'top14.jpg'),
(15, 'Sky Blue Ribbon Blouse', 'With live-ribbon, fit to M', 99900, 7, 'tops', 'top15.jpg'),
(16, 'Chihuahua Yellow Basic T-Shirt', 'Cotton Combad 60s, fit to L', 88000, 9, 'tops', 'top16.jpg'),
(17, 'Mickey Mouse on The Beach Shirt', 'Beach Collectin 2019, fit to S', 173000, 10, 'tops', 'top17.jpg'),
(18, 'Ice Cream Bling T-Shirt', '90cm, Fit to L', 134000, 13, 'tops', 'top18.jpg'),
(19, 'Wow! Mustard T-Shirt', 'Fit to S, comfortable', 63900, 26, 'tops', 'top19.jpg'),
(20, 'Soccerball Red Sweater', 'Fit to L', 149000, 21, 'tops', 'top20.jpg'),
(21, 'Rainbow Stripped for Boy', 'Git to S', 64300, 12, 'tops', 'top21.jpg'),
(22, 'S.M.I.L.E Tosca T-shirt', 'New Brand, Fit to S', 74000, 13, 'tops', 'top22.jpg'),
(23, 'Blue Boat T-shirt', 'Fit to S, limited edition', 73000, 53, 'tops', 'top23.jpg'),
(24, 'Black-grey Square Shirt', 'Fit to M, limited edition', 132000, 42, 'tops', 'top24.jpg'),
(25, 'Baseball 87 Hoodie', 'Without cap, fit to L', 198000, 31, 'tops', 'top25.jpg'),
(26, 'Dinosaur B&W T-Shirt', '3d Effect, Fit to L', 79000, 23, 'tops', 'top26.jpg'),
(27, 'Blue Shirt for Boy', 'New Collection january 2019, Fit to L', 135000, 24, 'tops', 'top27.jpg'),
(28, 'Wild One Purple Long T-shirt', 'Limited Edition 2018, Fit to L', 139000, 1, 'tops', 'top28.jpg'),
(29, 'Sabrina Top', 'Fit to S', 154000, 2, 'tops', 'top29.jpg'),
(30, 'Little Flamingo T-Shirt', 'Fit to M, Limited', 77800, 9, 'tops', 'top30.jpg'),
(31, 'Best. Kid. Ever. T-Shirt', 'Cotton Combad 50s, Fit to L', 59000, 7, 'tops', 'top31.jpg'),
(32, 'Picnic Sweater Yellow', 'Fit to L', 167000, 6, 'tops', 'top32.jpg'),
(33, 'Bling! Tanktop for Kids', 'Fit to S', 124000, 19, 'tops', 'top33.jpg'),
(34, 'Blue-Pattern Shirt', 'Fit to L, limited edition', 154000, 20, 'tops', 'top34.jpg'),
(35, 'Poke-ball T-Shirt', 'Big Size, fit to L', 89500, 3, 'tops', 'top35.jpg'),
(36, 'Black Pegasus T-shirt', 'Big Size, fit to L', 89000, 5, 'tops', 'top36.jpg'),
(37, 'Daily Stripped T-shirt', 'Fit to S', 43000, 6, 'tops', 'top37.jpg'),
(38, 'Crocodile Green T-shirt', 'Fit to S, cotton combad 50s', 67700, 10, 'tops', 'top38.jpg'),
(39, 'Mickey Mouse Blue T-Shirt', '28th Edition, fit to S', 80000, 11, 'tops', 'top39.jpg'),
(40, 'Banana White T-shirt', 'With back-tied-style, fit to L', 99000, 18, 'tops', 'top40.jpg'),
(41, 'Mermaid pinkish T-shirt', 'Limited edition, fit to S', 94200, 29, 'tops', 'top41.jpg'),
(42, 'Feel Good Today T-shirt', 'Fit to L', 65000, 32, 'tops', 'top42.jpg'),
(43, 'Tricolor Shirt', 'Limited edition, fit to M', 145000, 31, 'tops', 'top43.jpg'),
(44, 'Baby Blue Styled Blouse', 'Fit to S', 100000, 6, 'tops', 'top44.jpg'),
(45, 'Soccerball Green Sweater', '', 149000, 49, 'tops', 'top45.jpg'),
(46, 'Five Star Tosca T-Shirt', 'Fit to S', 84000, 28, 'tops', 'top46.jpg'),
(47, 'It is Me Boy T-Shirt', 'Fit to L', 77000, 34, 'tops', 'top47.jpg'),
(48, 'Save the Animal Boy T-shirt', 'Fit to L', 77000, 1, 'tops', 'top48.jpg'),
(49, 'Dinosaur Land T-shirt', 'Fit to S', 76000, 3, 'tops', 'top49.jpg'),
(50, 'Green Tied Long T-shirt', 'Adjustable, fit to L ', 95700, 34, 'tops', 'top50.jpg'),
(51, 'Cake Slice White Basic T-shirt', 'Fit to M', 54900, 23, 'tops', 'top51.jpg'),
(52, 'Turqoise Shirt', 'With ribbon, fit to L', 190000, 21, 'tops', 'top52.jpg'),
(53, 'Boyz Standard Shirt', 'Fit to L', 130000, 18, 'tops', 'top53.jpg'),
(54, 'I Wheelie Rock Short-sleeves T-shirt', 'fit to M', 49000, 16, 'tops', 'top54.jpg'),
(55, 'Unicorn Pink T-shirt', 'Fit to M', 78000, 15, 'tops', 'top55.jpg'),
(56, 'Baby Boy Blue Shirt', 'Fit to L', 126000, 20, 'tops', 'top56.jpg'),
(57, 'Polcadot-strip Navy T-shirt', 'Fit to M', 70000, 22, 'tops', 'top57.jpg'),
(58, 'Blue Jeans Medium', 'Fit to S', 279000, 6, 'bottoms', 'bot1.jpg'),
(59, 'Ivory Skirt', 'Fit to M', 79000, 4, 'bottoms', 'bot2.jpg'),
(60, 'Black Satin Trouser', 'Fit to L', 100000, 3, 'bottoms', 'bot3.jpg'),
(61, 'Army Trouser', 'Fit to S', 130000, 5, 'bottoms', 'bot4.jpg'),
(62, 'Pattern Long Jeans', 'Fit to S', 27000, 6, 'bottoms', 'bot5.jpg'),
(63, 'Sailor Blue Skirt', 'Fit to M', 190000, 7, 'bottoms', 'bot6.jpg'),
(64, 'Snowman Warm Trouser', 'Winter collection. Fit to S', 89000, 23, 'bottoms', 'bot7.jpg'),
(65, 'Pink Ribbon Girly Skirt', 'Fit to L', 123000, 28, 'bottoms', 'bot8.jpg'),
(66, 'Skin-color Trouser', 'Fit to L', 167000, 3, 'bottoms', 'bot9.jpg'),
(67, 'Smile Training', 'Fit to L', 190000, 2, 'bottoms', 'bot10.jpg'),
(68, 'Blue Basic Trouser', 'Fit to M', 88000, 1, 'bottoms', 'bot11.jpg'),
(69, 'Hello Grey Training', 'Fit to M', 98000, 4, 'bottoms', 'bot12.jpg'),
(70, 'Blackpink Skirt', 'Fit to M', 76000, 5, 'bottoms', 'bot13.jpg'),
(71, 'Dark Gray Basic Training', 'Fit to L', 110000, 27, 'bottoms', 'bot14.jpg'),
(72, 'Tricolor Skirt', 'Fit to S', 89000, 4, 'bottoms', 'bot15.jpg'),
(73, 'Ligtblue Jeans', 'Fit to M', 67000, 19, 'bottoms', 'bot16.jpg'),
(74, 'Babypink Pants', 'Fit to L, with suspender', 168000, 20, 'bottoms', 'bot17.jpg'),
(75, 'Gold Star Trouser', 'Fit to S', 98000, 21, 'bottoms', 'bot18.jpg'),
(76, 'Pink Mini Skirt', 'Fit to M', 88000, 36, 'bottoms', 'bot19.jpg'),
(77, 'Hot Pink Mini Skirt', 'Fit to S', 76000, 8, 'bottoms', 'bot20.jpg'),
(78, 'White Tutu Skirt', 'Fit to S', 100000, 9, 'bottoms', 'bot21.jpg'),
(79, 'Grey Denim Jeans', 'Fit to S', 180000, 10, 'bottoms', 'bot22.jpg'),
(80, 'Freya Pink Trouser', 'Fit to L', 190000, 12, 'bottoms', 'bot23.jpg'),
(81, 'Dandelion Pink Skirt', 'Fit to L, adjustable', 150000, 23, 'bottoms', 'bot24.jpg'),
(82, 'Long Dark Denim Jeans', 'Fit to L', 190000, 7, 'bottoms', 'bot25.jpg'),
(83, 'Hexy White Training', 'Fit to M', 87000, 8, 'bottoms', 'bot26.jpg'),
(84, 'JadeJeans Long Jeans', 'Fit to M', 190000, 10, 'bottoms', 'bot27.jpg'),
(85, 'Watermelon Skirt', 'Fit to S', 89000, 12, 'bottoms', 'bot28.jpg'),
(86, 'Blackpink Trouser', 'Fit to S', 78900, 23, 'bottoms', 'bot29.jpg'),
(87, 'Black Satin Skirt', 'Fit to M', 120000, 43, 'bottoms', 'bot30.jpg'),
(88, 'Grey Cotton Skirt', 'Fit to L', 87800, 45, 'bottoms', 'bot31.jpg'),
(89, 'Red Training', 'Fit to M', 90000, 56, 'bottoms', 'bot32.jpg'),
(90, 'Burgundy Training', 'Fit to M', 98000, 9, 'bottoms', 'bot33.jpg'),
(91, 'Light Green Trouser', 'Stretch, Fit to M', 92000, 43, 'bottoms', 'bot34.jpg'),
(92, 'Sleeptight Grey Pants', 'Fit to L', 67000, 45, 'bottoms', 'bot35.jpg'),
(93, 'Black Organza Skirt', 'Fit to M', 131000, 56, 'bottoms', 'bot36.jpg'),
(94, 'White Basic Trouser', 'Fit to M', 98000, 9, 'bottoms', 'bot37.jpg'),
(95, 'Black Basic Pants', 'Fit to L', 55000, 3, 'bottoms', 'bot38.jpg'),
(96, 'Flowered White Dress', 'Fit to M', 190000, 23, 'dress', 'drs1.jpg'),
(97, 'Unicorn Chrome Party Gown', 'Fit to L', 212000, 17, 'dress', 'drs2.jpg'),
(98, 'Princess Belle Gown', 'Fit to L', 197000, 10, 'dress', 'drs3.jpg'),
(99, 'White Pink Gown', 'Fit to L', 199000, 19, 'dress', 'drs4.jpg'),
(100, 'Rainbow Beach Dress', 'Fit to M', 170000, 32, 'dress', 'drs5.jpg'),
(101, 'Pink Polcadot Dress', 'Fit to M', 180000, 6, 'dress', 'drs6.jpg'),
(102, 'StaryNight Navy Dress', 'Fit to S', 350000, 43, 'dress', 'drs7.jpg'),
(103, 'Beauty Princess Yellow Dress', 'Fit to S', 290000, 49, 'dress', 'drs8.jpg'),
(104, 'Cinderella Gown', 'Fit to S', 340000, 50, 'dress', 'drs9.jpg'),
(105, 'Hot Fanta Dress', 'Fit to L', 265000, 2, 'dress', 'drs10.jpg'),
(106, 'Striped-Ribbon Pink Dress', 'Fit to L', 187000, 1, 'dress', 'drs11.jpg'),
(107, 'Navy Casual Dress', 'Fit to M', 165000, 2, 'dress', 'drs12.jpg'),
(108, 'Pink Half-Style Gown', 'Fit to S', 190000, 1, 'dress', 'drs13.jpg'),
(109, 'Organza Top Pink Dress', 'Fit to S', 290000, 2, 'dress', 'drs14.jpg'),
(110, 'Rose Sleeve-less Dress', 'Fit to S', 150000, 3, 'dress', 'drs15.jpg'),
(111, 'Brown Unifrom Dress', 'Include Inner. Fit to M', 180000, 4, 'dress', 'drs16.jpg'),
(112, 'Unicorn Pattern Dress', 'Fit to L', 310000, 5, 'dress', 'drs17.jpg'),
(113, 'Yellow Organza Dress', 'Fit to L', 230000, 6, 'dress', 'drs18.jpg'),
(114, 'Sky! Navy Party Gown', 'Fit to L', 190000, 7, 'dress', 'drs19.jpg'),
(115, 'Sky! Light Grey Dress', 'Fit to M', 195000, 3, 'dress', 'drs20.jpg'),
(116, 'Pink Girly Dress', 'Fit to M', 240000, 2, 'dress', 'drs21.jpg'),
(117, 'BlingBling Pink Dress', 'Include Hair ribbon. Fit to S', 350000, 4, 'dress', 'drs22.jpg'),
(118, 'Disney Pink Gown', 'Fit to S', 140000, 53, 'dress', 'drs23.jpg'),
(119, 'Gold-Turqoise Gown', 'Fit to S', 210000, 21, 'dress', 'drs24.jpg'),
(120, 'Sakura Blossom Dress', 'Fit to S', 167000, 34, 'dress', 'drs25.jpg'),
(121, 'Snow Princess Dress', 'Fit to M', 230000, 8, 'dress', 'drs26.jpg'),
(122, 'Polcadot Denim Dress', 'Fit to M', 123000, 3, 'dress', 'drs27.jpg'),
(123, 'Wonderfull Black Glitter Dress', 'Fit to L', 359000, 5, 'dress', 'drs28.jpg'),
(124, 'Unicorn 3d Dress', 'Fit to L. Include headpiece', 320000, 7, 'dress', 'drs29.jpg'),
(125, 'Peach Glitter Dress', 'Fit to M', 190000, 5, 'dress', 'drs30.jpg'),
(126, 'Red aribbon Dress', 'Fit to S', 199000, 6, 'dress', 'drs31.jpg'),
(127, 'Butterfly Blue Gradation dress', 'Fit to S', 130000, 6, 'dress', 'drs32.jpg'),
(128, 'Sizy Purple Dress', 'Fit to S', 200000, 3, 'dress', 'drs33.jpg'),
(129, 'Butterfly Stripped Dress', 'Fit to M', 180000, 5, 'dress', 'drs34.jpg'),
(130, 'Aurora Hot Pink Dress', 'Fit to L', 200000, 24, 'dress', 'drs35.jpg'),
(131, 'Blue Saphire Dress', 'Fit to L', 207000, 34, 'dress', 'drs36.jpg'),
(132, 'Dolphin Pattern Dress', 'Fit to L', 168000, 34, 'dress', 'drs37.jpg'),
(133, 'Baby Pink Gown', 'Fit to M', 310000, 45, 'dress', 'drs38.jpg'),
(134, 'Shinee Peach Dress', 'Fit to L', 290000, 2, 'dress', 'drs39.jpg'),
(135, 'Lovely Tosca Dress', 'Fit to S', 190000, 3, 'dress', 'drs40.jpg'),
(136, 'Flowery Peach Dress', 'Fit to S', 200000, 3, 'dress', 'drs41.jpg'),
(137, 'Icy Blue Dress', 'Fit to L', 189000, 4, 'dress', 'drs42.jpg'),
(138, 'Glamorous Grey Dress', 'Fit to S', 209000, 3, 'dress', 'drs43.jpg'),
(139, 'Little Pink Dress', 'Fit to S', 301000, 5, 'dress', 'drs44.jpg'),
(140, 'Pimpam Rainbow', 'Fit to L', 90000, 16, 'jumpsuit', 'js1.jpg'),
(141, 'Flowery Denim', 'Fit to M', 99000, 19, 'jumpsuit', 'js2.jpg'),
(142, 'Colorful Blue Warjm Jumpsuit', 'Fit to L', 120000, 2, 'jumpsuit', 'js3.jpg'),
(143, 'Cheeky Rabbit', 'Fit to S', 78000, 3, 'jumpsuit', 'js4.jpg'),
(144, 'Random Long Jumpsuit', 'Fit to S', 79000, 6, 'jumpsuit', 'js5.jpg'),
(145, 'Casual.ly Jumpsuit', 'Fit to S', 100000, 19, 'jumpsuit', 'js6.jpg'),
(146, 'Cat Jumpsuit', 'Fit to L', 99000, 20, 'jumpsuit', 'js7.jpg'),
(147, 'Polcadot Short Jumpsuit', 'Fit to L', 87000, 21, 'jumpsuit', 'js8.jpg'),
(148, 'Mini Stripped Jumpsuit', 'Fit to M', 91000, 8, 'jumpsuit', 'js9.jpg'),
(149, 'Sleeveless Boy Jumpsuit', 'Fit to M', 93000, 7, 'jumpsuit', 'js10.jpg'),
(150, 'Blue Denim Jumpsuit', 'Fit to L', 165000, 8, 'jumpsuit', 'js11.jpg'),
(151, 'Freya Grey Jumpsuit', 'Fit to S', 109000, 3, 'jumpsuit', 'js12.jpg'),
(152, 'Black Basic Jumpsuit', 'Include inner. Fit to L', 134000, 4, 'jumpsuit', 'js13.jpg'),
(153, 'Mini Givenchy White Jumpsuit', 'Fit to S', 165000, 1, 'jumpsuit', 'js14.jpg'),
(154, 'Red White Stripped', 'Fit to S', 98000, 3, 'jumpsuit', 'js15.jpg'),
(155, 'Yellow Black Square Jumpsuit', 'Fit to M', 76000, 3, 'jumpsuit', 'js16.jpg'),
(156, 'Little Sister Jumpsuit', 'Fit to M', 87000, 4, 'jumpsuit', 'js17.jpg'),
(157, 'Light Blue Jumpsuit', 'Fit to L', 90000, 5, 'jumpsuit', 'js18.jpg'),
(158, 'Green Pattern Jumpsuit', 'Fit to L', 99000, 6, 'jumpsuit', 'js19.jpg'),
(159, 'Goodnight Jumpsuit', 'Fit to S', 130000, 19, 'jumpsuit', 'js20.jpg'),
(160, 'Love Givenchy Pink Jumpsuit', 'Fit to S', 100000, 20, 'jumpsuit', 'js21.jpg'),
(161, '73 Denim Jumpsuit', 'Fit to S', 120000, 34, 'jumpsuit', 'js22.jpg'),
(162, 'Hot Fanta Warm Jumpsuit', 'Fit to L', 119000, 32, 'jumpsuit', 'js23.jpg'),
(163, 'Hot Purple Warm Jumpsuit', 'Fit to S', 119000, 1, 'jumpsuit', 'js24.jpg'),
(164, 'Dinosaur 3D Jumpsuit', 'Fit to L', 213000, 2, 'jumpsuit', 'js25.jpg'),
(165, 'Turqoise Jumpsuit', 'Fit to M', 185900, 39, 'jumpsuit', 'js26.jpg'),
(166, 'Blue Short Jumpsuit', 'Fit to S', 100700, 25, 'jumpsuit', 'js27.jpg'),
(167, 'Mini Pink Jumpsuit', 'Fit to L', 132000, 36, 'jumpsuit', 'js28.jpg'),
(168, 'DearBear Jumpsuit', 'Fit to L', 89000, 10, 'jumpsuit', 'js29.jpg'),
(169, 'LilCow Jumpsuit', 'Fit to S', 98000, 9, 'jumpsuit', 'js30.jpg'),
(170, 'Brown Bear Jumpsuit', 'Fit to M', 97600, 8, 'jumpsuit', 'js31.jpg'),
(171, 'Little Star Pattern Jumpsuit', 'Fit to L', 139000, 3, 'jumpsuit', 'js32.jpg'),
(172, 'White Bunny Jumpsuit', 'Fit to L', 270000, 3, 'jumpsuit', 'js33.jpg'),
(173, 'Grey Bunny Jumpsuit', 'Fit to L', 270000, 2, 'jumpsuit', 'js34.jpg'),
(174, 'Flower Pattern Jumpsuit', 'Fit to S', 152000, 3, 'jumpsuit', 'js35.jpg'),
(175, 'Beach Jumpsuit', 'Fit to S', 167000, 43, 'jumpsuit', 'js36.jpg'),
(176, 'Beach Flower Jumpsuit', 'Fit to M', 167000, 43, 'jumpsuit', 'js37.jpg'),
(177, 'Mini Short Baby Pink Jumpsuit', 'Fit to M', 143000, 3, 'jumpsuit', 'js38.jpg'),
(178, 'Black Flower Jumpsuit', 'Fit to S', 165000, 2, 'jumpsuit', 'js39.jpg'),
(179, 'Casual Ribbon Jumpsuit', 'Fit to M', 143000, 3, 'jumpsuit', 'js40.jpg'),
(180, 'Denim Short Jumpsuit', 'Fit to L', 189000, 1, 'jumpsuit', 'js41.jpg'),
(181, 'Chocolate Strawberry Jumpsuit', 'Fit to L', 176000, 1, 'jumpsuit', 'js42.jpg'),
(182, 'Dark Navy Jumpsuit', 'Fit to S', 99000, 1, 'jumpsuit', 'js43.jpg'),
(183, 'Hot Red Jumpsuit', 'Fit to S', 99000, 1, 'jumpsuit', 'js44.jpg'),
(184, 'Unicorn Headpiece', 'No Description', 170000, 1, 'accecories', 'ac1.jpg'),
(185, 'Colorful Shark Showl', 'No Description', 120000, 1, 'accecories', 'ac2.jpg'),
(186, 'O NELL California Cap', 'No Description', 70000, 1, 'accecories', 'ac3.jpg'),
(187, 'Black Basic Suspender', 'No Description', 37600, 1, 'accecories', 'ac4.jpg'),
(188, 'Cherish Jewelry Set', 'No Description', 57100, 23, 'accecories', 'ac5.jpg'),
(189, 'Black Gloves', 'No Description', 138000, 6, 'accecories', 'ac6.jpg'),
(190, 'Ribbon Headbands', 'Available: pink, black. Random color', 27000, 3, 'accecories', 'ac7.jpg'),
(191, 'Basic Belt for Kids', 'No Description', 134000, 5, 'accecories', 'ac8.jpg'),
(192, 'Bunny Hat', 'Available: Brown, Mustard, Grey. Random color', 88600, 6, 'accecories', 'ac9.jpg'),
(193, 'Tribal Showl', 'No Description', 67000, 7, 'accecories', 'ac10.jpg'),
(194, 'Fairy Set', 'Include butterfly wing, wand, skirt', 170800, 32, 'accecories', 'ac11.jpg'),
(195, 'Case It Girly Cap', 'No Description', 99000, 44, 'accecories', 'ac12.jpg'),
(196, 'RI Cap', 'No Description', 77900, 3, 'accecories', 'ac13.jpg'),
(197, 'Girl Pin', 'No Description', 19000, 5, 'accecories', 'ac14.jpg'),
(198, 'Hello Kitty Headband', 'No Description', 31000, 23, 'accecories', 'ac15.jpg'),
(199, 'Casual Eyeglasses', 'No Description', 99000, 4, 'accecories', 'ac16.jpg'),
(200, 'Butterfly Glamour Hairclip', 'No Description', 54000, 2, 'accecories', 'ac17.jpg'),
(201, 'Baby Cap and Gloves', 'Random Pattern', 26000, 3, 'accecories', 'ac18.jpg'),
(202, 'Pink White Tennis Cap', 'No Description', 54000, 2, 'accecories', 'ac19.jpg'),
(203, 'Mouse Model Cap', 'No Description', 79900, 4, 'accecories', 'ac20.jpg'),
(204, 'Little Crown', 'No Description', 30000, 5, 'accecories', 'ac21.jpg'),
(205, 'Big Flower Headband Model A', 'Random Color', 35000, 42, 'accecories', 'ac22.jpg'),
(206, 'Big Flower Headband Model B', 'Random Color', 35000, 5, 'accecories', 'ac23.jpg'),
(207, 'VANS Army Cap', 'No Description', 89000, 3, 'accecories', 'ac24.jpg'),
(208, 'Brown Cowboy Hat', 'No Description', 84000, 6, 'accecories', 'ac25.jpg'),
(209, 'Black Cowboy Hat', 'No Description', 79000, 7, 'accecories', 'ac26.jpg'),
(210, 'SC Cap', 'No Description', 77000, 23, 'accecories', 'ac27.jpg'),
(211, 'Black Ribbon Headband', 'No Description', 34000, 24, 'accecories', 'ac28.jpg'),
(212, 'Full Flower Headband', 'Random Color', 63000, 6, 'accecories', 'ac29.jpg'),
(213, 'Half Flower Headband', 'Random Color', 59000, 4, 'accecories', 'ac30.jpg'),
(214, 'Polcadot Ribbon Tie', 'No Description', 19000, 7, 'accecories', 'ac31.jpg'),
(215, 'Big Party Flower Hairclip', 'No Description', 24000, 2, 'accecories', 'ac32.jpg'),
(216, 'Antiradiation Eyeglasses', 'No Description', 130000, 6, 'accecories', 'ac33.jpg'),
(217, 'Converse All Star Cap', 'No Description', 89000, 3, 'accecories', 'ac34.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `shoppingcartdetails`
--

CREATE TABLE `shoppingcartdetails` (
  `cartID` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `qty` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shoppingcartdetails`
--

INSERT INTO `shoppingcartdetails` (`cartID`, `productID`, `qty`) VALUES
(6, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `shoppingcarts`
--

CREATE TABLE `shoppingcarts` (
  `cartID` int(11) NOT NULL,
  `customerID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shoppingcarts`
--

INSERT INTO `shoppingcarts` (`cartID`, `customerID`) VALUES
(6, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminID`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customerID`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productID`);

--
-- Indexes for table `shoppingcartdetails`
--
ALTER TABLE `shoppingcartdetails`
  ADD KEY `cartID` (`cartID`),
  ADD KEY `productID` (`productID`);

--
-- Indexes for table `shoppingcarts`
--
ALTER TABLE `shoppingcarts`
  ADD PRIMARY KEY (`cartID`),
  ADD KEY `customerID` (`customerID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=218;

--
-- AUTO_INCREMENT for table `shoppingcarts`
--
ALTER TABLE `shoppingcarts`
  MODIFY `cartID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `shoppingcartdetails`
--
ALTER TABLE `shoppingcartdetails`
  ADD CONSTRAINT `shoppingcartdetails_ibfk_1` FOREIGN KEY (`cartID`) REFERENCES `shoppingcarts` (`cartID`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `shoppingcartdetails_ibfk_2` FOREIGN KEY (`productID`) REFERENCES `products` (`productID`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `shoppingcarts`
--
ALTER TABLE `shoppingcarts`
  ADD CONSTRAINT `shoppingcarts_ibfk_1` FOREIGN KEY (`customerID`) REFERENCES `customers` (`customerID`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
