-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2024 at 10:19 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecomm`
--

-- --------------------------------------------------------

--
-- Table structure for table `cancel_orders`
--

CREATE TABLE `cancel_orders` (
  `cancel_order_id` int(11) NOT NULL,
  `order_id` varchar(255) DEFAULT NULL,
  `product_id` varchar(255) DEFAULT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `vendor_id` varchar(255) DEFAULT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `user_email` varchar(255) DEFAULT NULL,
  `user_phone` varchar(255) DEFAULT NULL,
  `receive_payment` varchar(255) NOT NULL,
  `cancle_order_title` varchar(255) NOT NULL,
  `cancle_order_image` varchar(955) NOT NULL,
  `cancle_order_price` varchar(255) NOT NULL,
  `cancle_order_color` varchar(255) NOT NULL,
  `cancle_order_size` varchar(255) NOT NULL,
  `reason` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cancel_orders`
--

INSERT INTO `cancel_orders` (`cancel_order_id`, `order_id`, `product_id`, `user_id`, `vendor_id`, `user_name`, `user_email`, `user_phone`, `receive_payment`, `cancle_order_title`, `cancle_order_image`, `cancle_order_price`, `cancle_order_color`, `cancle_order_size`, `reason`, `date`) VALUES
(2, '24', '8', '3', '12', 'Vishvjit', 'Vishvjit2219@gmail.com', '8841562314', 'Found a better option elsewhere', 'boAt Rockerz 450 Bluetooth On Ear Headphones with Mic, Upto 15 Hours Playback, 40MM Drivers, Padded Ear Cushions, Integrated Controls and Dual Modes(Luscious Black)', 'boat_profile_1.jpg', '2,038', '#000000', '-', 'Budget constraints', '10-08-2024'),
(3, '27', '22', '3', '12', 'Vishvjit', 'Vishvjit2219@gmail.com', '8841562314', 'Found a better option elsewhere', 'YouBella Jewellery Bohemian Multi-Color Earings Earrings for Girls and Women', 'ws_profile_1.jpg', '259', '#d4d4d4', '-', 'Budget constraints', '10-08-2024'),
(4, '28', '20', '3', '12', 'Vishvjit', 'Vishvjit2219@gmail.com', '8841562314', 'UPI', 'Premium material: this stationery storage box is made of environmentally friendly and non-toxic ABS material with smooth, burr-free edges that do not cause damage. It is strong and solid enough for a long time of use. Remove clutter - Keep your desk or co', 'sport_profile_1.jpg', '379', '#ffffff', '-', 'Concerns about product quality', '12-08-2024'),
(5, '29', '8', '3', '12', 'Vishvjit', 'Vishvjit2211@gmail.com', '8841562314', 'Net Banking', 'boAt Rockerz 450 Bluetooth On Ear Headphones with Mic, Upto 15 Hours Playback, 40MM Drivers, Padded Ear Cushions, Integrated Controls and Dual Modes(Luscious Black)', 'boat_profile_1.jpg', '6,034', '#5778ff', '-', 'Delivery taking too long', '13-08-2024');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `order_title` varchar(255) DEFAULT NULL,
  `order_image` varchar(255) DEFAULT NULL,
  `order_price` varchar(255) DEFAULT NULL,
  `order_color` varchar(255) NOT NULL,
  `order_size` varchar(255) NOT NULL,
  `qty` varchar(255) NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `product_id` varchar(255) DEFAULT NULL,
  `vendor_id` varchar(255) DEFAULT NULL,
  `user_first_name` varchar(255) DEFAULT NULL,
  `user_last_name` varchar(255) DEFAULT NULL,
  `user_email` varchar(255) DEFAULT NULL,
  `user_mobile` varchar(255) DEFAULT NULL,
  `user_address` varchar(255) DEFAULT NULL,
  `user_state` varchar(255) DEFAULT NULL,
  `user_city` varchar(255) DEFAULT NULL,
  `user_pin` varchar(255) DEFAULT NULL,
  `payment_type` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `total_price` varchar(255) DEFAULT NULL,
  `vendor_profit` varchar(255) DEFAULT NULL,
  `admin_profit` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `order_title`, `order_image`, `order_price`, `order_color`, `order_size`, `qty`, `user_id`, `product_id`, `vendor_id`, `user_first_name`, `user_last_name`, `user_email`, `user_mobile`, `user_address`, `user_state`, `user_city`, `user_pin`, `payment_type`, `status`, `total_price`, `vendor_profit`, `admin_profit`, `date`) VALUES
(30, 'boAt Rockerz 450 Bluetooth On Ear Headphones with Mic, Upto 15 Hours Playback, 40MM Drivers, Padded Ear Cushions, Integrated Controls and Dual Modes(Luscious Black)', 'boat_profile_1.jpg', '1998', '#000000', '-', '1', '3', '8', '12', 'Vishvjit', 'Chauhan', 'Vishvjit2211@gmail.com', '8841562314', '1004, suman anand, magdalla, vesu , surat', 'Gujarat', 'Surat', '395007', 'Cash On delivery', 'Ready For Delivery', '2,038', '1,938', '60', '13-08-2024'),
(33, 'Mi 108 cm (43 inches) X Series 4K Ultra HD Smart Google TV L43M8-A2IN (Black)', 'mi_tv_profile_1.jpg', '25,999', '#000000', '-', '1', '3', '7', '12', 'Vishvjit', 'Chauhan', 'Vishvjit2212@gmail.com', '8841562314', '1004, suman anand, magdalla, vesu , surat', 'Gujarat', 'Surat', '395007', 'Cash On delivery', 'Ready For Delivery', '25,999', '25,979', '20', '14-08-2024'),
(34, 'Panasonic LUMIX G7 16.00 MP 4K Mirrorless Interchangeable Lens Camera Kit with 14-42 mm Lens (Black) with 3x Optical Zoom', 'camera_profile_1.jpg', '42,500', '#0a0a0a', '-', '1', '3', '14', '12', 'Vishvjit', 'Chauhan', 'Vishvjit2212@gmail.com', '8841562314', '1004, suman anand, magdalla, vesu , surat', 'Gujarat', 'Surat', '395007', 'Cash On delivery', 'Ready For Delivery', '42,500', '42,480', '20', '14-08-2024');

-- --------------------------------------------------------

--
-- Table structure for table `page_count`
--

CREATE TABLE `page_count` (
  `view_id` int(11) NOT NULL,
  `view_count` varchar(255) NOT NULL,
  `view_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `page_count`
--

INSERT INTO `page_count` (`view_id`, `view_count`, `view_date`) VALUES
(1, '9', '11-08-24'),
(2, '10', '11-08-24'),
(3, '11', '11-08-24'),
(4, '12', '11-08-24'),
(5, '13', '11-08-24'),
(6, '14', '11-08-24'),
(7, '15', '11-08-24'),
(8, '16', '11-08-24'),
(9, '17', '11-08-24'),
(10, '18', '11-08-24'),
(11, '19', '11-08-24'),
(12, '20', '11-08-24'),
(13, '21', '11-08-24'),
(14, '22', '11-08-24'),
(15, '1', '12-08-24'),
(16, '2', '12-08-24');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `vendor_id` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image_1` varchar(255) DEFAULT NULL,
  `image_2` varchar(255) DEFAULT NULL,
  `image_3` varchar(255) DEFAULT NULL,
  `image_4` varchar(255) DEFAULT NULL,
  `cover_image_1` varchar(255) DEFAULT NULL,
  `cover_image_2` varchar(255) DEFAULT NULL,
  `cover_image_3` varchar(255) DEFAULT NULL,
  `cover_image_4` varchar(255) DEFAULT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `Category` varchar(255) DEFAULT NULL,
  `Type` varchar(255) DEFAULT NULL,
  `Your_Price` varchar(255) DEFAULT NULL,
  `MRP` varchar(255) DEFAULT NULL,
  `Quantity` varchar(255) DEFAULT NULL,
  `Item_Condition` varchar(255) DEFAULT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `size` varchar(255) DEFAULT NULL,
  `keywords` varchar(599) NOT NULL,
  `date` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `vendor_id`, `title`, `image_1`, `image_2`, `image_3`, `image_4`, `cover_image_1`, `cover_image_2`, `cover_image_3`, `cover_image_4`, `company_name`, `Category`, `Type`, `Your_Price`, `MRP`, `Quantity`, `Item_Condition`, `Description`, `color`, `size`, `keywords`, `date`) VALUES
(4, 12, 'Apple iPhone 15 Pro Max (256 GB) - Black Titanium', 'iphone_15_profile_1.jpg', 'iphone_15_profile_2.jpg', 'iphone_15_profile_3.jpg', 'iphone_15_profile_4.jpg', 'iphone_15_cover_1.jpg', 'iphone_15_cover_2.jpg', 'iphone_15_cover_3.jpg', 'iphone_15_cover_4.jpg', 'Apple', 'Phones', 'iPhone', '1,59,900', '1,49,700', '28', 'New Condition', 'FORGED IN TITANIUM — iPhone 15 Pro Max has a strong and light aerospace-grade titanium design with a textured matte-glass back. It also features a Ceramic Shield front that’s tougher than any smartphone glass. And it’s splash, water, and dust resistant.', '#000000,#5d67ee,#484747,#adadad', '8GB-256GB,12GB-256GB', 'iphone 15 pro max,iphone 15 pro,iphone 15,iphone,15,apple,apple mobile,apple phones,iphone mobile,iphone phones', '28-07-2024'),
(5, 12, 'Apple iPad Pro 11″ (M4): Ultra Retina XDR display, 256GB, Landscape 12MP front camera / 12MP back camera, LiDAR Scanner, Wi-Fi 6E, Face ID, all-day battery life, Standard Glass — Space Black', 'apple_ipad_profile_1.jpg', 'apple_ipad_profile_2.jpg', 'apple_ipad_profile_3.jpg', 'apple_ipad_profile_4.jpg', 'apple_ipad_cover_1.jpg', 'apple_ipad_cover_2.jpg', 'apple_ipad_cover_3.jpg', 'apple_ipad_cover_4.jpg', 'Apple', 'Tabs/Ipad', 'Ipad', '99,900', '97,900', '19', 'New Condition', 'WHY IPAD PRO — iPad Pro is the ultimate iPad experience in an impossibly thin and light design. Featuring the breakthrough Ultra Retina XDR display, outrageous performance from the M4 chip, superfast wireless connectivity and compatibility with Apple Penc', '#000000, #b1afaf', '-', 'apple ipad pro 11, apple ipad pro, apple ipad, apple, ipad pro 11, ipad pro, ipad, iphone tablate, iphone tab', '28-07-2024'),
(6, 12, 'Apple 2023 MacBook Pro (16-inch, M3 Max chip with 14‑core CPU and 30‑core GPU, 36GB Unified Memory, 1TB) - Space Black', 'macbook_profile_1.jpg', 'macbook_profile_2.jpg', 'macbook_profile_3.jpg', 'macbook_profile_4.jpg', 'macbook_cover_1.jpg', 'macbook_cover_2.jpg', 'macbook_cover_3.jpg', 'macbook_cover_4.jpg', 'Apple', 'Laptops/MacBook', 'MacBook', '3,49,900', '3,34,900', '43', 'New Condition', 'SUPERCHARGED BY M3 PRO OR M3 MAX — The Apple M3 Pro chip, with a 12-core CPU and 18-core GPU using hardware-accelerated ray tracing, delivers amazing performance for demanding workflows like manipulating gigapixel panoramas or compiling millions of lines ', '#000000, #8c8c8c', '-', 'Apple 2023 MacBook Pro, Apple MacBook Pro, Apple MacBook, Apple laptop, Apple laptop Pro, Apple m3, Apple MacBook m3', '28-07-2024'),
(7, 12, 'Mi 108 cm (43 inches) X Series 4K Ultra HD Smart Google TV L43M8-A2IN (Black)', 'mi_tv_profile_1.jpg', 'mi_tv_profile_2.jpg', 'mi_tv_profile_3.jpg', 'mi_tv_profile_4.jpg', 'mi_tv_cover_1.jpg', 'mi_tv_cover_2.jpg', 'mi_tv_cover_3.jpg', 'mi_tv_cover_4.jpg', 'Mi', 'TV', 'TV', '42,999', '25,999', '51', 'New Condition', 'Connectivity: Dual Band Wi-Fi | Connectivity: 3 HDMI ports to connect set top box, Blu-ray speakers or gaming console | 2 USB ports to connect hard drives or other USB devices| Optical port| AV port| Ethernet port | 3.5 mm jack | Bluetooth 5.0\r\nSound: 30 ', '#000000', '-', 'Mi 108 , Mi 108 tv, mi tv, tv, 4k tv, mi 4k tv, smart tv under 30000, smart tv, smart 4k tv', '28-07-2024'),
(8, 12, 'boAt Rockerz 450 Bluetooth On Ear Headphones with Mic, Upto 15 Hours Playback, 40MM Drivers, Padded Ear Cushions, Integrated Controls and Dual Modes(Luscious Black)', 'boat_profile_1.jpg', 'boat_profile_2.jpg', 'boat_profile_3.jpg', 'boat_profile_4.jpg', 'boat_cover_1.jpg', 'boat_cover_2.jpg', 'boat_profile_2.jpg', 'boat_profile_4.jpg', 'boAt', 'Headphone', 'Headphone', '3,990', '1,998', '240', 'New Condition', 'Playback- It provides a massive battery backup of upto 15 hours for a superior playback time. Charging Time : 3 Hours\r\nDrivers- Its 40mm dynamic drivers help pump out immersive HD audio all day long.\r\nEarcushions- It has been ergonomically designed and st', '#000000, #ff0000, #8b3244, #eeff00, #5778ff', '-', 'boAt Rockerz 450 Headphone', '28-07-2024'),
(9, 12, 'ZEBRONICS Zeb-Bro in Ear Wired Earphones with Mic, 3.5mm Audio Jack, 10mm Drivers, Phone/Tablet Compatible(Green)', 'earphone_profile_1.jpg', 'earphone_profile_2.jpg', 'earphone_profile_3.jpg', 'earphone_profile_4.jpg', 'earphone_cover_1.jpg', 'earphone_cover_2.jpg', 'earphone_cover_3.jpg', 'earphone_cover_4.jpg', 'ZEBRONICS', 'Earphone', 'earphone', '399', '399', '208', 'New Condition', 'The earphone comes with a snug fit providing utmost comfort while wearing them regularly. Connect the 3.5mm jack to the phone and wait for a few seconds for the product to get sync with the phone. Water Resistant : Yes\r\nThe snug-fit also ensures a passive', '#529dff, #ff0000, #ffffff, #008015', '-', 'ZEBRONICS Zeb-Bro in Ear Wired Earphones, ZEBRONICS Wired Earphones, ZEBRONICS Zeb-Bro, ZEBRONICS Earphones, Wired Earphones, Earphones', '28-07-2024'),
(10, 12, 'Fossil Analog White Dial Men\'s Watch-FS4795 Stainless Steel, Multicolor Strap', 'watche_profile_1.jpg', 'watche_profile_2.jpg', 'watche_profile_3.jpg', 'watche_profile_4.jpg', '', '', '', '', 'Fossil', 'Watch', 'Watch', '16,495', '14,495', '428', 'New Condition', 'dial color: silver\r\nstrap color: silver\r\ndial shape: round\r\ndial glass material: mineral', '#ffffff, #000000', '-', 'watches for man', '28-07-2024'),
(11, 12, 'ASIAN Mens TARZAN-11 Casual Sneaker Shoes with Synthetic Upper Lightweight Comfortable Mid Top Sneaker Shoes for Mens & Boys', 'shoes_profile_1.jpg', 'shoes_profile_2.jpg', 'shoes_profile_3.jpg', 'shoes_profile_4.jpg', 'shoes_cover_1.jpg', 'shoes_cover_2.jpg', 'shoes_cover_3.jpg', 'shoes_cover_4.jpg', 'ASIAN', 'Shoes', 'sneakers', '999', '749', '23', 'New Condition', 'Lightweight & Breathable : Exclusive design and durable materials every step feels light and breezy. Breathable, free-moving fabrics which adjust according to your foot and creates an astoundingly easy-going experience.', '#000000, #ffffff', '8 UK, 9 UK, 10 UK', 'shoes, for men', '28-07-2024'),
(12, 12, 'Haier 190L 4-Star Direct Cool Single Door Refrigerator (HED-204DS-P, Dazzle Steel, 2024 Model)', 'fridge_profile_1.jpg', 'fridge_profile_2.jpg', 'fridge_profile_3.jpg', 'fridge_profile_4.jpg', 'fridge_cover_1.jpg', 'fridge_cover_2.jpg', 'fridge_cover_3.jpg', 'fridge_cover_4.jpg', 'haier', 'Electronics Item', 'Fridge', '20,990', '14,790', '42', 'New Condition', 'Direct Cool Refrigerator: Stylish Single Door Refrigerator with Modern Dazzle Steel. Enjoy powerful cooling that can last longer.', '#757575', '-', 'Refrigerator ', '28-07-2024'),
(13, 12, 'HP Smart Tank 589 AIO WiFi Color Printer (Upto 6000 Black and 6000 Colour Pages of Ink in The Box). - Print, Scan & Copy for Office/Home', 'printer_profile_1.jpg', 'printer_profile_2.jpg', 'printer_profile_3.jpg', 'printer_profile_4.jpg', 'printer_cover_1.jpg', 'printer_cover_2.jpeg', 'printer_cover_3.jpeg', 'printer_cover_4.jpeg', 'HP', 'Tech Accessories', 'Printer', '17,828', '13,999', '5', 'New Condition', 'All-in-One printer】Enjoy the versatility of the HP Smart Tank 589 All-in-One Printer, perfect for home and office use. With print, copy, and scan functions, and a flatbed scanner.\r\n【Seamless connectivity】Experience the convenience of wireless printing wit', '#c84141', '-', 'printer', '28-07-2024'),
(14, 12, 'Panasonic LUMIX G7 16.00 MP 4K Mirrorless Interchangeable Lens Camera Kit with 14-42 mm Lens (Black) with 3x Optical Zoom', 'camera_profile_1.jpg', 'camera_profile_2.jpg', 'camera_profile_3.jpg', 'camera_profile_4.jpg', 'camera_cover_1.jpg', 'camera_cover_2.jpg', 'camera_cover_3.jpg', 'camera_cover_4.jpg', 'Panasonic', 'Cameras', 'DSLR', '54,990', '42,500', '42', 'New Condition', 'PROFESSIONAL PHOTO AND VIDEO PERFORMANCE: 16 megapixel Micro Four Thirds sensor with no low pass filter to confidently capture sharp images with a high dynamic range and artifact free performance; WiFi enabled\r\n4K VIDEO CAPTURE: 4K QHD video recording (38', '#0a0a0a', '-', 'dslr', '28-07-2024'),
(15, 12, 'EvoFox Elite X Wireless Gamepad for PC 2.4ghz connectivity with Dual Vibration Motors, 2 Macro Back Buttons, Low Latency Plug and Play, Free USB Extender, Translucent Shell Controller for PC, For All Windows versions (Blue)', 'game_profile_1.jpg', 'game_profile_2.jpg', 'game_profile_3.jpg', 'game_profile_4.jpg', 'game_cover_1.jpg', 'game_cover_2.jpg', 'game_cover_3.jpeg', 'game_cover_4.jpeg', 'EvoFox', 'Game Item', 'Game Controller', '2,299', '1,499', '24', 'New Condition', '𝗪𝗶𝗿𝗲𝗹𝗲𝘀𝘀 𝗰𝗼𝗻𝗻𝗲𝗰𝘁𝗶𝘃𝗶𝘁𝘆: A clutter-free gaming experience with wireless connectivity . Elite X PC gamepad works range of up to 30 feet, so just lay back on your couch without worrying about cables\r\n𝗠𝗮𝗰𝗿𝗼 𝗙𝘂𝗻𝗰𝘁𝗶𝗼𝗻𝘀: Customise your Moves with EZ On the Fly Ma', '#565fe1, #000000, #ff0000', '-', 'game conttroler', '28-07-2024'),
(16, 12, 'Pigeon by Stovekraft Oven Toaster Grill (12381) 9 Liters OTG without Rotisserie for Oven Toaster and Grill for grilling and baking Cakes (Grey)', 'kitchen_profile_1.jpg', 'kitchen_profile_2.jpg', 'kitchen_profile_3.jpg', 'kitchen_profile_4.jpg', 'kitchen_cover_1.jpg', 'kitchen_cover_2.jpg', 'kitchen_cover_3.jpg', 'kitchen_cover_4.jpg', 'Pigeon', 'Kitchen', 'Oven', '3,595', '1,699', '534', 'New Condition', 'Elegant design\r\nHigh quality shining knobs\r\nGlass door for convenient monitoring\r\n60 minutes timer with auto turn off and alarm\r\nAdjustable thermostat for temperature control 100-250 degree Celsius. Rotisserie Type:No\r\n4 stage heating options\r\n4 pieces up', '#000000', '-', 'oven for kitchen', '28-07-2024'),
(17, 12, 'Leriya Fashion Textured Shirts for Men || Casual Shirt for Men || Shirt for Men|| Men Stylish Shirt || Men Fancy Shirt || Men Full Sleeve Shirt || Plain Shirts for Men', 'cloth_profile_1.jpg', 'cloth_profile_2.jpg', 'cloth_profile_3.jpg', 'cloth_profile_4.jpg', 'cloth_cover_1.jpeg', 'cloth_cover_2.jpeg', 'cloth_cover_3.jpeg', 'cloth_cover_4.jpeg', 'Leriya', 'Clothes', 'Shirt', '1,999', '449', '433', 'New Condition', 'Package Includes : Pack of 1 Fancy Stylish Textured Shirts For Men\r\nSleeve and Material : Full Sleeve Popcorn Material Men\'s shirt\r\nCollar and Fit Type : Regular Fit Pointed Collar Fancy Casual Shirt for Men', '#000000, #187000, #000000, #8b2d2d, #3f52e4, #ffffff', 'XS, S, M, L, XL, XXL', 'Casual Shirt for Men', '28-07-2024'),
(18, 12, 'Galaxy Hi-Tech® Pioneer Bot Robot Colorful Lights and Music | All Direction Movement Dancing Robot Toys for Boys and Girls multi-colour', 'toy_profile_1.jpg', 'toy_profile_2.jpg', 'toy_profile_3.jpg', 'toy_profile_4.jpg', 'toy_cover_1.jpg', 'toy_cover_2.jpg', 'toy_cover_3.jpg', 'toy_cover_4.jpg', 'Galaxy', 'Toys', 'Bot Robot', '1,999', '699', '323', 'New Condition', 'BEST FOR GIFT PURPOSE Wonderful gifts for your children. It’s an enjoyable toy with exciting actions which will surely capture their attention. Give it to them on Christmas, Holiday or their Birthday.\r\nCOME WITH MUSIC: Your little one can listen to the sw', '#ff7300', '-', 'Galaxy toy, toy for childes', '28-07-2024'),
(19, 12, 'House of Quirk Desk Organiser with Drawer, Multifunctional Desk Organizer, Office Organizer, 4 Plastic Compartments with Drawer, Storage Shelf for Office, School (Blue) Stationery', 'stationary_profile_1.jpg', 'stationary_profile_2.jpg', 'stationary_profile_3.jpg', 'stationary_profile_4.jpg', 'stationary_cover_1.jpg', 'stationary_cover_2.jpg', '', '', 'abc', 'Stationary', 'House of Quirk Desk', '999', '475', '342', 'New Condition', 'Premium material: this stationery storage box is made of environmentally friendly and non-toxic ABS material with smooth, burr-free edges that do not cause damage. It is strong and solid enough for a long time of use.\r\nRemove clutter - Keep your desk or c', '#ffffff', '-', 'stationary', '28-07-2024'),
(20, 12, 'Premium material: this stationery storage box is made of environmentally friendly and non-toxic ABS material with smooth, burr-free edges that do not cause damage. It is strong and solid enough for a long time of use. Remove clutter - Keep your desk or co', 'sport_profile_1.jpg', 'sport_profile_2.jpg', 'sport_profile_3.jpg', 'sport_profile_4.jpg', 'sport_cover_1.jpg', 'sport_cover_2.jpg', 'sport_cover_3.jpg', 'sport_cover_4.jpg', 'Nivia', 'Sports', 'football', '726', '339', '32', 'New Condition', 'Construction : Rubberized Moulded\r\nSuitable for Hard Ground without Grass, Wet & Grassy Ground & Artificial Turf.\r\nButyl bladder offers lasting air and shape retention to ensure uniform game\r\nIdeal for : Training & Recreation use | Material: Rubber', '#ffffff, #ff7b00, #d4ff00', '-', 'football', '28-07-2024'),
(22, 12, 'YouBella Jewellery Bohemian Multi-Color Earings Earrings for Girls and Women', 'ws_profile_1.jpg', 'ws_profile_2.jpg', 'ws_profile_3.jpg', 'ws_profile_4.jpg', 'ws_cover_1.jpg', 'ws_cover_2.jpg', 'ws_cover_3.jpg', 'ws_cover_4.jpg', 'YouBella', 'Women accessories', 'Earings ', '1,999', '219', '454', 'New Condition', '10.3886 cms (L) x 9.1948 cms (W) x 3.81 cms (H)\r\nColor: Multi-Colour\r\nMaterial: Non Precious Metal', '#d4d4d4', '-', 'Earings for girls', '28-07-2024');

-- --------------------------------------------------------

--
-- Table structure for table `return_orders`
--

CREATE TABLE `return_orders` (
  `return_order_id` int(11) NOT NULL,
  `order_id` varchar(255) DEFAULT NULL,
  `product_id` varchar(255) DEFAULT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `vendor_id` varchar(255) DEFAULT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `user_email` varchar(255) DEFAULT NULL,
  `user_phone` varchar(255) DEFAULT NULL,
  `return_order_image` varchar(255) DEFAULT NULL,
  `return_order_title` varchar(255) DEFAULT NULL,
  `return_order_price` varchar(255) NOT NULL,
  `return_order_color` varchar(255) NOT NULL,
  `return_order_size` varchar(255) NOT NULL,
  `return_order_qty` varchar(255) NOT NULL,
  `payment_type` varchar(255) NOT NULL,
  `reason` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `return_orders`
--

INSERT INTO `return_orders` (`return_order_id`, `order_id`, `product_id`, `user_id`, `vendor_id`, `user_name`, `user_email`, `user_phone`, `return_order_image`, `return_order_title`, `return_order_price`, `return_order_color`, `return_order_size`, `return_order_qty`, `payment_type`, `reason`, `date`) VALUES
(1, '25', '11', '3', '12', 'Vishvjit', 'Vishvjit2219@gmail.com', '8841562314', 'shoes_profile_1.jpg', 'ASIAN Mens TARZAN-11 Casual Sneaker Shoes with Synthetic Upper Lightweight Comfortable Mid Top Sneaker Shoes for Mens & Boys', '2,287', '#000000', '9 UK', '3', 'UPI', 'Received Incorrect Item (Does Not Match Description or Order Specifications)', '12-08-2024'),
(2, '26', '20', '3', '12', 'Vishvjit', 'Vishvjit2219@gmail.com', '8841562314', 'sport_profile_1.jpg', 'Premium material: this stationery storage box is made of environmentally friendly and non-toxic ABS material with smooth, burr-free edges that do not cause damage. It is strong and solid enough for a long time of use. Remove clutter - Keep your desk or co', '2,074', '#d4ff00', '-', '6', 'UPI', 'Received Incorrect Item (Does Not Match Description or Order Specifications)', '13-08-2024');

-- --------------------------------------------------------

--
-- Table structure for table `user_registration`
--

CREATE TABLE `user_registration` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `profile_image` varchar(255) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `pin` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_registration`
--

INSERT INTO `user_registration` (`user_id`, `first_name`, `last_name`, `phone`, `email`, `profile_image`, `Address`, `state`, `city`, `pin`, `password`, `date`) VALUES
(2, 'Abhijeetsinh', 'Dabhi', '7863843776', 'abhijeet03@gmail.com', '34.jpg', '103 Madhav Flat, Bharimata Road, Cozway Road, Surat', 'Gujarati', 'Surat', '395004', '$2y$10$6TtVK7WRqnateol.qweIOuiwKpCrnS0ixyVsSvT4SYelkM3NyMIQS', '24-07-2024'),
(3, 'Vishvjit', 'Chauhan', '8841562314', 'Vishvjit2212@gmail.com', '42.jpg', '1004, suman anand, magdalla, vesu , surat', 'Gujarat', 'Surat', '395007', '$2y$10$YjKll7zk/pyIPTaNQdaFwuQnnZb1Q25a9vFg3ftVFb51mrQrq/8IO', '27-07-2024');

-- --------------------------------------------------------

--
-- Table structure for table `user_review`
--

CREATE TABLE `user_review` (
  `review_id` int(11) NOT NULL,
  `product_id` varchar(255) DEFAULT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `Rating` varchar(255) DEFAULT NULL,
  `Headline` varchar(255) DEFAULT NULL,
  `description` varchar(599) NOT NULL,
  `public_name` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_review`
--

INSERT INTO `user_review` (`review_id`, `product_id`, `user_id`, `Rating`, `Headline`, `description`, `public_name`, `date`) VALUES
(1, '12', '3', '5', ' Haier 190L Single Door Refrigerator (HED-204DS-P)', 'The Haier 190L Single Door Refrigerator features a sleek Dazzle Steel finish and a 4-star energy rating,', 'vishvjit chauhan', ''),
(2, '10', '3', '3', 'Fossil Analog Men\'s Watch (FS4795)', 'The Fossil FS4795 Analog Watch boasts a classic white dial paired with a multicolor strap and durable stainless steel case. This stylish timepiece combines functionality with a modern aesthetic, perfect for adding a touch of sophistication to any outfit.', 'VishvjitChauhan', '07-08-2024'),
(4, '15', '3', '2', 'EvoFox Elite X Wireless Gamepad for PC Review', 'The EvoFox Elite X Wireless Gamepad offers seamless 2.4GHz connectivity and low-latency performance with dual vibration motors for an immersive gaming experience. Its translucent shell and customizable features, including 2 macro back buttons, make it a versatile and stylish choice for all Windows versions. Plus, it comes with a free USB extender for added convenience.', 'VishvjitChauhan', '07-08-2024');

-- --------------------------------------------------------

--
-- Table structure for table `vendor_registration`
--

CREATE TABLE `vendor_registration` (
  `vendor_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `Bio` varchar(255) DEFAULT NULL,
  `GST` varchar(255) DEFAULT NULL,
  `cover_image` varchar(255) DEFAULT NULL,
  `dp_image` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vendor_registration`
--

INSERT INTO `vendor_registration` (`vendor_id`, `name`, `email`, `password`, `username`, `phone`, `Bio`, `GST`, `cover_image`, `dp_image`, `date`) VALUES
(1, 'vishvjit', 'vishvjit3@gmail.com', '$2y$10$K.DAku2i/vlAsiaQbdaiouEG/NXBkdxmVUTawUg1PHCq0Li5uExMu', 'vishvjit23', '8141391797', 'sdfdsfdsf', '123456789012345', 'Screenshot 2024-07-15 111156.png', 'Screenshot 2024-07-15 131851.png', '25-07-2024'),
(12, 'Rajesh Parmar', 'rajesh14@gmail.com', '$2y$10$.mTh4uiAGaMyCmu7TBNEk.f82jpgeILT1iZm.6f2fzrRC0te7sdfW', 'RajeshPvt', '8956234175', 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum', '29AAGFE2778P1ZM', 'hot-air-balloons-flying-over-canyon-during-the-golden-hour-picjumbo-com.jpg', '12.jpg', '27-07-2024');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cancel_orders`
--
ALTER TABLE `cancel_orders`
  ADD PRIMARY KEY (`cancel_order_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `page_count`
--
ALTER TABLE `page_count`
  ADD PRIMARY KEY (`view_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `return_orders`
--
ALTER TABLE `return_orders`
  ADD PRIMARY KEY (`return_order_id`);

--
-- Indexes for table `user_registration`
--
ALTER TABLE `user_registration`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_review`
--
ALTER TABLE `user_review`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `vendor_registration`
--
ALTER TABLE `vendor_registration`
  ADD PRIMARY KEY (`vendor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cancel_orders`
--
ALTER TABLE `cancel_orders`
  MODIFY `cancel_order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `page_count`
--
ALTER TABLE `page_count`
  MODIFY `view_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `return_orders`
--
ALTER TABLE `return_orders`
  MODIFY `return_order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_registration`
--
ALTER TABLE `user_registration`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_review`
--
ALTER TABLE `user_review`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `vendor_registration`
--
ALTER TABLE `vendor_registration`
  MODIFY `vendor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
