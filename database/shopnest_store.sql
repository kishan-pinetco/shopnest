-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2024 at 11:59 AM
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
-- Database: `shopnest_store`
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
  `cancle_order_qty` varchar(255) NOT NULL,
  `reason` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cancel_orders`
--

INSERT INTO `cancel_orders` (`cancel_order_id`, `order_id`, `product_id`, `user_id`, `vendor_id`, `user_name`, `user_email`, `user_phone`, `receive_payment`, `cancle_order_title`, `cancle_order_image`, `cancle_order_price`, `cancle_order_color`, `cancle_order_size`, `cancle_order_qty`, `reason`, `date`) VALUES
(2, '24', '8', '3', '12', 'Vishvjit', 'Vishvjit2219@gmail.com', '8841562314', 'Found a better option elsewhere', 'boAt Rockerz 450 Bluetooth On Ear Headphones with Mic, Upto 15 Hours Playback, 40MM Drivers, Padded Ear Cushions, Integrated Controls and Dual Modes(Luscious Black)', 'boat_profile_1.jpg', '2,038', '#000000', '-', '', 'Budget constraints', '10-08-2024'),
(3, '27', '22', '3', '12', 'Vishvjit', 'Vishvjit2219@gmail.com', '8841562314', 'Found a better option elsewhere', 'YouBella Jewellery Bohemian Multi-Color Earings Earrings for Girls and Women', 'ws_profile_1.jpg', '259', '#d4d4d4', '-', '', 'Budget constraints', '10-08-2024'),
(4, '28', '20', '3', '12', 'Vishvjit', 'Vishvjit2219@gmail.com', '8841562314', 'UPI', 'Premium material: this stationery storage box is made of environmentally friendly and non-toxic ABS material with smooth, burr-free edges that do not cause damage. It is strong and solid enough for a long time of use. Remove clutter - Keep your desk or co', 'sport_profile_1.jpg', '379', '#ffffff', '-', '', 'Concerns about product quality', '12-08-2024'),
(5, '29', '8', '3', '12', 'Vishvjit', 'Vishvjit2211@gmail.com', '8841562314', 'Net Banking', 'boAt Rockerz 450 Bluetooth On Ear Headphones with Mic, Upto 15 Hours Playback, 40MM Drivers, Padded Ear Cushions, Integrated Controls and Dual Modes(Luscious Black)', 'boat_profile_1.jpg', '6,034', '#5778ff', '-', '', 'Delivery taking too long', '13-08-2024'),
(6, '30', '8', '3', '12', 'Vishvjit', 'Vishvjit2211@gmail.com', '8841562314', 'Net Banking', 'boAt Rockerz 450 Bluetooth On Ear Headphones with Mic, Upto 15 Hours Playback, 40MM Drivers, Padded Ear Cushions, Integrated Controls and Dual Modes(Luscious Black)', 'boat_profile_1.jpg', '2,038', '#000000', '-', '', 'Delivery taking too long', '03-09-2024'),
(7, '63', '13', '3', '12', 'Vishvjit', 'Vishvjit2212@gmail.com', '8841562314', 'UPI', 'Pigeon by Stovekraft Oven Toaster Grill (12381) 9 Liters OTG without Rotisserie for Oven Toaster and Grill for grilling and baking Cakes (Grey)', 'kitchen_profile_1.jpg', '1,599', 'Gray', '-', '', 'Concerns about product quality', '19-09-2024'),
(8, '76', '13', '14', '12', 'Abhijeet', 'abhijeetdabhi9304@gmail.com', '7863843776', 'Net Banking', 'Pigeon by Stovekraft Oven Toaster Grill (12381) 9 Liters OTG without Rotisserie for Oven Toaster and Grill for grilling and baking Cakes (Grey)', 'kitchen_profile_1.jpg', '1,599', 'Gray', '-', '', 'Found a better option elsewhere', '19-09-2024'),
(9, '65', '7', '14', '12', 'Abhijeet', 'abhijeetdabhi9304@gmail.com', '7863843776', 'Net Banking', 'ASIAN Men-s TARZAN-11 Casual Sneaker Shoes with Synthetic Upper Lightweight Comfortable Mid Top Sneaker Shoes for Men-s ', 'shoes_profile_1.jpg', '749', 'White Navy', '6 UK', '', 'Delivery taking too long', '19-09-2024'),
(10, '80', '5', '14', '12', 'Abhijeet', 'abhijeetdabhi9304@gmail.com', '7863843776', 'Net Banking', 'Mi 108 cm (43 inches) X Series 4K Ultra HD Smart Google TV L43M8-A2IN (Black)', 'mi_tv_profile_1.jpg', '25,999', 'Black', '-', '', 'Changed mind about the purchase', '19-09-2024'),
(11, '77', '18', '14', '12', 'Abhijeet', 'abhijeetdabhi9304@gmail.com', '7863843776', 'UPI', 'Wild Stone Ultra Sensual Long Lasting Perfume for Men, 100ml, A Sensory Treat for Casual Encounters, Aromatic Blend of Masculine Fragrances', 'perfume_profile_1.jpg', '351', 'Red', '-', '', 'Budget constraints', '19-09-2024'),
(12, '81', '14', '14', '12', 'Abhijeet', 'abhijeetdabhi9304@gmail.com', '7863843776', 'Net Banking', 'Lymio Casual Shirt for Men|| Shirt for Men|| Men Stylish Shirt (Rib-Shirt)', 'cloth_profile_1.png', '519', 'Khakhi', 'M', '', 'Unexpected shipping costs', '19-09-2024'),
(13, '79', '11', '14', '12', 'Abhijeet', 'abhijeetdabhi9304@gmail.com', '7863843776', 'Net Banking', 'Panasonic LUMIX G7 16.00 MP 4K Mirrorless Interchangeable Lens Camera Kit with 14-42 mm Lens (Black), 3x Optical Zoom', 'camera_profile_1.jpg', '42,500', 'Black', '-', '', 'Changed mind about the purchase', '19-09-2024'),
(14, '82', '4', '14', '12', 'Abhijeet', 'abhijeetdabhi9304@gmail.com', '7863843776', 'Net Banking', 'Apple 2023 MacBook Pro (16-inch, M3 Max chip with 16u2011core CPU and 40u2011core GPU, 48GB Unified Memory, 1TB) - Space Black', 'macbook_profile_1.jpg', '679,990', 'Space Black', '32GB-1TB', '1', 'Delivery taking too long', '19-09-2024'),
(15, '83', '6', '3', '12', 'Vishvjit', 'Vishvjit2212@gmail.com', '8841562314', 'Net Banking', 'Apple 2023 MacBook Pro (16-inch, M3 Max chip with 14‑core CPU and 30‑core GPU, 36GB Unified Memory, 1TB) - Space Black', 'macbook_profile_1.jpg', '334,900', '#000000', '-', '1', 'Budget constraints', '20-09-2024');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `contact_id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(999) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`contact_id`, `name`, `user_email`, `subject`, `message`, `date`) VALUES
(1, 'Abhijeet', 'abhijeetdabhi9304@gmail.com', 'i want to open vendor account in your website', 'hi shopNest,\r\ni want to open my selling account in your website so how i can create selling account please help me', '20-09-2024');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `product_id` int(11) NOT NULL,
  `vendor_id` int(11) DEFAULT NULL,
  `title` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`title`)),
  `image` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`image`)),
  `cover_image_1` varchar(255) DEFAULT NULL,
  `cover_image_2` varchar(255) DEFAULT NULL,
  `cover_image_3` varchar(255) DEFAULT NULL,
  `cover_image_4` varchar(255) DEFAULT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `Category` varchar(255) DEFAULT NULL,
  `Type` varchar(255) DEFAULT NULL,
  `MRP` longtext NOT NULL,
  `vendor_mrp` varchar(255) NOT NULL,
  `vendor_price` varchar(255) NOT NULL,
  `Quantity` varchar(255) DEFAULT NULL,
  `Item_Condition` varchar(255) DEFAULT NULL,
  `Description` longtext DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `size` varchar(255) DEFAULT NULL,
  `keywords` varchar(599) NOT NULL,
  `avg_rating` varchar(255) NOT NULL,
  `total_reviews` varchar(255) NOT NULL,
  `date` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`product_id`, `vendor_id`, `title`, `image`, `cover_image_1`, `cover_image_2`, `cover_image_3`, `cover_image_4`, `company_name`, `Category`, `Type`, `MRP`, `vendor_mrp`, `vendor_price`, `Quantity`, `Item_Condition`, `Description`, `color`, `size`, `keywords`, `avg_rating`, `total_reviews`, `date`) VALUES
(21, 12, '{\"N-A\":{\"product_name\":\"Grand Theft Auto V - Premium Edition (PS4)\"}}', '{\"N-A\":{\"img1\":\"gta_cover_1.jpg\",\"img2\":\"gta_cover_2.jpg\",\"img3\":\"gta_cover_3.jpg\",\"img4\":\"gta_cover_4.jpg\"}}', '', '', '', '', 'Rockstar Games', 'Game Item', 'Game CD', '{\"no_size\":{\"MRP\":\"1,869\",\"Your_Price\":\"2,199\"}}', '1,869', '2,199', '100', 'New Condition', 'The Grand Theft Auto V: Premium Edition Includes The Complete Grand Theft Auto V Story Experience, Free Access To The Ever-Evolving Grand Theft Auto Online + The Criminal Enterprise Starter Pack\r\nThe Criminal Enterprise Starter Pack - The Criminal Enterprise Starter Pack Is The Fastest Way For New GTA Online Players To Jumpstart Their Criminal Empires With The Most Exciting And Popular Content Plus $1,000,000 Bonus Cash To Spend In GTA Online - All Content Valued At Over Gta$10,000,000 If Purchased Separately\r\nGrand Theft Auto V - When A Young Street Hustler, A Retired Bank Robber And A Terrifying Psychopath Land Themselves In Trouble, They Must Pull Off A Series Of Dangerous Heists To Survive In A City In Which They Can Trust Nobody, Least Of All Each Other\r\nA Fleet Of Powerful Vehicles - Tear Through The Streets With A Range Of 10 High Performance Vehicles Including A Supercar, Motorcycles, The Weaponized Dune Fav, A Helicopter, A Rally Car And More. You’ll Also Get Properties Including A 10 Car Garage To Store Your Growing Fleet\r\nWeapons, Clothing & Tattoos - You’ll Also Get Access To The Compact Grenade Launcher, Marksman Rifle And Compact Rifle Along With Stunt Racing Outfits, Biker Tattoos And More', '-', '-', 'GTAV, GTA V, game cd, game', '0.0', '0', '21-09-2024'),
(24, 12, '{\"Black\":{\"product_name\":\"Apple iPhone 15 Pro Max (256 GB) - Black Titaniums\"},\"Natural\":{\"product_name\":\"Apple iPhone 15 Pro Max (256 GB) - Natural Titanium\"},\"White\":{\"product_name\":\"Apple iPhone 15 Pro Max (256 GB) - White Titanium\"}}', '{\"Black\":{\"img1\":\"iphone_15_profile_1.jpg\",\"img2\":\"iphone_15_profile_2.jpg\",\"img3\":\"iphone_15_profile_3.jpg\",\"img4\":\"iphone_15_profile_4.jpg\"},\"Natural\":{\"img1\":\"Natural_iphone_15_profile_1.jpg\",\"img2\":\"Natural_iphone_15_profile_2.jpg\",\"img3\":\"Natural_iphone_15_profile_3.jpg\",\"img4\":\"Natural_iphone_15_profile_4.jpg\"},\"White\":{\"img1\":\"white_iphone_15_profile_1.jpg\",\"img2\":\"white_iphone_15_profile_2.jpg\",\"img3\":\"white_iphone_15_profile_3.jpg\",\"img4\":\"white_iphone_15_profile_4.jpg\"}}', 'iphone_15_cover_1.jpg', 'iphone_15_cover_2.jpg', 'iphone_15_cover_3.jpg', 'iphone_15_cover_4.jpg', 'Apple', 'Phones', 'iPhone', '{\"256GB\":{\"MRP\":\"1,34,900\",\"Your_Price\":\"1,59,900\"},\"512GB\":{\"MRP\":\"1,54,900\",\"Your_Price\":\"1,79,900\"}}', '1,34,900', '1,59,900', '100', 'New Condition', 'FORGED IN TITANIUM — iPhone 15 Pro Max has a strong and light aerospace-grade titanium design with a textured matte-glass back. It also features a Ceramic Shield front that’s tougher than any smartphone glass. And it’s splash, water, and dust resistant.\r\nADVANCED DISPLAY — The 6.7” Super Retina XDR display with ProMotion ramps up refresh rates to 120Hz when you need exceptional graphics performance. Dynamic Island bubbles up alerts and Live Notifications. Plus, with Always-On display, your Lock Screen stays glanceable, so you don’t have to tap it to stay in the know.\r\nGAME-CHANGING A17 PRO CHIP — A Pro-class GPU makes mobile games feel so immersive, with rich environments and realistic characters. A17 Pro is also incredibly efficient and helps to deliver amazing all-day battery life.\r\nPOWERFUL PRO CAMERA SYSTEM — Get incredible framing flexibility with 7 pro lenses. Capture super high-resolution photos with more color and detail using the 48MP Main camera. And take sharper close-ups from farther away with the 5x Telephoto camera on iPhone 15 Pro Max.\r\nCUSTOMIZABLE ACTION BUTTON — Action button is a fast track to your favorite feature. Just set the one you want, like Silent mode, Camera, Voice Memo, Shortcut, and more. Then press and hold to launch the action.', 'Black,Natural,White', '256GB,512GB', 'iphone 15 pro max,iphone 15 pro,iphone 15,15,iphone,apple 15 pro,apple 15 pro max,apple mobile,apple phone,phone,iphone mobile', '0.0', '0', '26-09-2024'),
(25, 12, '{\"Black\":{\"product_name\":\"Apple iPad Pro 11u2033 (M4): Ultra Retina XDR Display, 256GB, Landscape 12MP Front Camera / 12MP Back Camera, LiDAR Scanner, Wi-Fi 6E, Face ID, All-Day Battery Life, Standard Glass u2014 Space Black\"}}', '{\"Black\":{\"img1\":\"apple_ipad_profile_1.jpg\",\"img2\":\"apple_ipad_profile_2.jpg\",\"img3\":\"apple_ipad_profile_3.jpg\",\"img4\":\"apple_ipad_profile_4.jpg\"}}', 'apple_ipad_cover_1.jpg', 'apple_ipad_cover_2.jpg', 'apple_ipad_cover_3.jpg', 'apple_ipad_cover_4.jpg', 'Apple', 'Tabs/Ipad', 'Ipad', '{\"256GB\":{\"MRP\":\"99,900\",\"Your_Price\":\"1,10,600\"},\"512GB\":{\"MRP\":\"1,15,999\",\"Your_Price\":\"1,19,900\"},\"1TB\":{\"MRP\":\"1,59,900\",\"Your_Price\":\"1,62,900\"},\"2TB\":{\"MRP\":\"1,99,900\",\"Your_Price\":\"2,05,990\"}}', '99,900', '1,10,600', '100', 'New Condition', 'WHY IPAD PRO — iPad Pro is the ultimate iPad experience in an impossibly thin and light design. Featuring the breakthrough Ultra Retina XDR display, outrageous performance from the M4 chip, superfast wireless connectivity and compatibility with Apple Pencil Pro. Plus powerful productivity features in iPadOS.\r\n[28.22 cm (11″)/33.02 cm (13″)] ULTRA RETINA XDR DISPLAY — Ultra Retina XDR delivers extreme brightness and contrast and exceptional colour accuracy and features advanced technologies like ProMotion, P3 wide colour and True Tone. Plus a nano-texture display glass option is available in 1TB and 2TB configurations.\r\nPERFORMANCE AND STORAGE — Up to 10-core CPU in the M4 chip delivers powerful performance, while the 10‑core GPU provides blazing-fast graphics. And with all-day battery life, you can do anything you imagine on iPad Pro. Up to 2TB of storage means you can store everything from apps to large files like 4K video.\r\nIPADOS + APPS — iPadOS makes iPad more productive, intuitive and versatile. With iPadOS, run multiple apps at once, use Apple Pencil to write in any text field with Scribble, and edit and share photos. Stage Manager makes multitasking easy with resizable, overlapping apps and external display support. iPad Pro comes with essential apps like Safari, Messages and Keynote, with over a million more apps available on the App Store.\r\nAPPLE PENCIL AND MAGIC KEYBOARD FOR IPAD PRO — Apple Pencil Pro transforms iPad Pro into an immersive drawing canvas and the world’s best note‑taking device. Apple Pencil (USB-C) is also compatible with iPad Pro. Magic Keyboard for iPad Pro features a thin and light design, a great typing experience and a built‑in glass trackpad with haptic feedback, while doubling as a protective cover for iPad.\r\nADVANCED CAMERAS — iPad Air features a landscape 12MP Ultra Wide front camera that supports Centre Stage for video conferencing or epic Portrait mode selfies. The 12MP Wide back camera with True Tone flash is perfect for capturing photos and 4K videos. And get great sound with landscape stereo speakers and two microphones.\r\nCONNECTIVITY — Wi-Fi 6E gives you fast wireless connections.* Work from almost anywhere with quick transfers of photos, documents and large video files. Connect to external displays and more with the USB-C connector.', 'Black', '256GB,512GB,1TB,2TB', 'ipad, tab, apple tab, ipad tab, apple tablet, iphone tablet, apple ipad pro 11, iphone ipad pro 11, ipad pro 11, pro 11', '0.0', '0', '26-09-2024'),
(26, 12, '{\"Black\":{\"product_name\":\"Apple 2023 MacBook Pro (16-inch, M3 Max chip with 16u2011core CPU and 40u2011core GPU, 48GB Unified Memory, 1TB) - Space Black\"}}', '{\"Black\":{\"img1\":\"macbook_profile_1.jpg\",\"img2\":\"macbook_profile_2.jpg\",\"img3\":\"macbook_profile_3.jpg\",\"img4\":\"macbook_profile_4.jpg\"}}', 'macbook_cover_1.jpg', 'macbook_cover_2.jpg', 'macbook_cover_3.jpg', 'macbook_cover_4.jpg', 'Apple', 'Laptops/MacBook', 'MacBook', '{\"1TB\":{\"MRP\":\"3,69,990\",\"Your_Price\":\"3,99,900\"}}', '3,69,990', '3,99,900', '100', 'New Condition', 'SUPERCHARGED BY M3 PRO OR M3 MAX — The Apple M3 Pro chip, with a 12-core CPU and 18-core GPU using hardware-accelerated ray tracing, delivers amazing performance for demanding workflows like manipulating gigapixel panoramas or compiling millions of lines of code. M3 Max, with an up to 16-core CPU and up to 40-core GPU, drives extreme performance for the most advanced workflows like rendering intricate 3D content or developing transformer models with billions of parameters.\r\nUP TO 22 HOURS OF BATTERY LIFE — Go all day thanks to the power-efficient design of Apple silicon. MacBook Pro delivers the same exceptional performance whether it’s running on battery or plugged in.\r\nRESPONSIVE UNIFIED MEMORY AND STORAGE — Up to 36GB (M3 Pro) or up to 128GB (M3 Max) of unified memory makes everything you do fast and fluid. Up to 4TB (M3 Pro) or up to 8TB (M3 Max) of superfast SSD storage launches apps and opens files in an instant.\r\nBRILLIANT PRO DISPLAY — The 41.05 cm (16.2″) Liquid Retina XDR display features Extreme Dynamic Range; 1,000 nits of sustained brightness for stunning HDR content; up to 600 nits of brightness for SDR content; and pro reference modes for doing your best work on the go.\r\nFULLY COMPATIBLE — All your pro apps run lightning fast — including Adobe Creative Cloud, Apple Xcode, Microsoft 365, SideFX Houdini, MathWorks MATLAB, Medivis SurgicalAR and many of your favourite iPhone and iPad apps. And with macOS, work and play on your Mac are even more powerful. Elevate your presence on video calls. Access information in all-new ways. And discover even more ways to personalise your Mac.\r\nADVANCED CAMERA AND AUDIO — Look sharp and sound great with a 1080p FaceTime HD camera, a studio-quality three-mic array and a six-speaker sound system with Spatial Audio.\r\nCONNECT IT ALL — This MacBook Pro features a MagSafe charging port, three Thunderbolt 4 ports, an SDXC card slot, an HDMI port and a headphone jack. Enjoy fast wireless connectivity with Wi-Fi 6E and Bluetooth 5.3. And you can connect up to two external displays with M3 Pro, or up to four with M3 Max.', 'Black', '1TB', 'New MacBook Pro, Apple 2023 MacBook Pro, Apple Laptop, laptop, MacBook pro, MacBook', '0.0', '0', '26-09-2024'),
(27, 12, '{\"Black\":{\"product_name\":\"Xiaomi 108 cm (43 inches) X Series 4K LED Smart Google TV L43MA-AUIN (Black)\"}}', '{\"Black\":{\"img1\":\"mi_tv_profile_1.jpg\",\"img2\":\"mi_tv_profile_2.jpg\",\"img3\":\"mi_tv_profile_3.jpg\",\"img4\":\"mi_tv_profile_4.jpg\"}}', 'mi_tv_cover_1.jpg', 'mi_tv_cover_2.jpg', 'mi_tv_cover_3.jpg', 'mi_tv_cover_4.jpg', 'Xiaomi', 'TV', 'TV', '{\"43 inches\":{\"MRP\":\"24,999\",\"Your_Price\":\"42,999\"}}', '24,999', '42,999', '100', 'New Condition', 'Resolution : 4K Ultra HD (3840 x 2160) | Refresh Rate : 60 Hertz\r\nConnectivity: Dual Band Wi-Fi | 3 HDMI ports to connect latest gaming consoles, set top box, Blu-ray Players | 2 USB ports to connect hard drives and other USB devices | ALLM | eARC | Bluetooth 5.0 | Optical | Ethernet\r\nSound: 30 Watts Output | Dolby Audio | DTS-X | DTS Virtual: X\r\nSmart TV Features: Google TV | In-Built WiFi | Screen Mirroring | 2GB RAM | 8GB ROM | Supported Apps: Netflix, Prime Video, YouTube, Disney+Hotstar, etc. | Google Assistant\r\nDisplay: 4K HDR | Dolby Vision |HDR10 | HLG | Reality Flow MEMC | Vivid Picture Engine| ALLM\r\nWarranty Information: 1 year comprehensive warranty on product and 1 year additional on Panel provided by the brand from the date of purchase\r\n', 'Black', '43 inches', 'TV, Smart Tv, Xiaomi 108, Xiaomi Smart Tv, Tv In Budget', '0.0', '0', '26-09-2024'),
(28, 12, '{\"Black\":{\"product_name\":\"boAt Rockerz 450 Bluetooth On Ear Headphones with Mic, Upto 15 Hours Playback, 40MM Drivers, Padded Ear Cushions, Integrated Controls and Dual Modes(Luscious Black)\"}}', '{\"Black\":{\"img1\":\"boat_profile_1.jpg\",\"img2\":\"boat_profile_2.jpg\",\"img3\":\"boat_profile_3.jpg\",\"img4\":\"boat_profile_4.jpg\"}}', 'boat_cover_1.jpg', 'boat_cover_2.jpg', '', '', 'boAt', 'Headphone', 'Headphone', '{\"-\":{\"MRP\":\"1,299\",\"Your_Price\":\"3,990\"}}', '1,299', '3,990', '100', 'New Condition', 'Playback- It provides a massive battery backup of upto 15 hours for a superior playback time. Charging Time : 3 Hours\r\nDrivers- Its 40mm dynamic drivers help pump out immersive HD audio all day long.\r\nEarcushions- It has been ergonomically designed and structured as an on-ear headphone to provide the best user experience with its comfortable padded earcushions and lightweight design\r\nControls- You can control your music without hiccups using the easy access controls, communicate seamlessly using the built-in mic, access voice assistant and always stay in the zone\r\nDual Modes- One can connect to boAt Rockerz 450 via not one but two modes, Bluetooth as well as AUX\r\n1 year warranty from the date of purchase\r\n', 'Black', '-', 'Headphone, boAt Headphone, Bluetooth headphone, boAt Rockerz 450, boAt Rockerz 450 headphone', '0.0', '0', '26-09-2024'),
(29, 12, '{\"Green\":{\"product_name\":\"ZEBRONICS Zeb-Bro in Ear Wired Earphones with Mic, 3.5mm Audio Jack, 10mm Drivers, Phone/Tablet Compatible(Blue) (Green)\"}}', '{\"Green\":{\"img1\":\"earphone_profile_1.jpg\",\"img2\":\"earphone_profile_2.jpg\",\"img3\":\"earphone_profile_3.jpg\",\"img4\":\"earphone_profile_4.jpg\"}}', 'earphone_cover_1.jpg', 'earphone_cover_2.jpg', 'earphone_cover_3.jpg', 'earphone_cover_4.jpg', 'ZEBRONICS', 'Earphone', 'Earphone', '{\"N-A\":{\"MRP\":\"159\",\"Your_Price\":\"399\"}}', '159', '399', '100', 'New Condition', 'Immersive Sound: Experience rich, detailed audio with these earphones featuring advanced drivers for clear highs and deep lows.\r\nErgonomic Design: Lightweight and comfortable in-ear fit ensures a secure, snug placement for extended listening.\r\nTangle-Free Cable: The flat, tangle-resistant cable prevents knots and tangles for hassle-free use.\r\nIn-Line Microphone: The built-in microphone allows for hands-free calls and voice commands.\r\nUniversal Compatibility: Designed to work seamlessly with smartphones, tablets, and other audio devices.', 'Green', '-', 'Earphone, wireless Earphone, Zebronics Earphone, Earphone under 200, Best Earphone', '0.0', '0', '26-09-2024'),
(30, 12, '{\"White\":{\"product_name\":\"ASIAN Men-s TARZAN-11 Casual Sneaker Shoes with Synthetic Upper Lightweight Comfortable Mid Top Sneaker Shoes for Men-s & Boy-s\"}}', '{\"White\":{\"img1\":\"shoes_profile_1.jpg\",\"img2\":\"shoes_profile_2.jpg\",\"img3\":\"shoes_profile_3.jpg\",\"img4\":\"shoes_profile_4.jpg\"}}', 'shoes_cover_1.jpg', 'shoes_cover_2.jpg', 'shoes_cover_3.jpg', 'shoes_cover_4.jpg', 'ASIAN', 'Shoes', 'Shoes', '{\"6 UK\":{\"MRP\":\"699\",\"Your_Price\":\"1,299\"},\"7 UK\":{\"MRP\":\"699\",\"Your_Price\":\"1,299\"},\"8 UK\":{\"MRP\":\"699\",\"Your_Price\":\"1,299\"},\"9 UK\":{\"MRP\":\"699\",\"Your_Price\":\"1,299\"},\"10 UK\":{\"MRP\":\"699\",\"Your_Price\":\"1,299\"}}', '699', '1,299', '97', 'New Condition', 'Lightweight & Breathable : Exclusive design and durable materials every step feels light and breezy. Breathable, free-moving fabrics which adjust according to your foot and creates an astoundingly easy-going experience.\r\nNon Slip & Shockproof : Great engineering strikes a balance in style, made in the potent design and latest fashion trends. Made for long-term wear, with extra emphasis on providing cushion to the feet, removing heel strain.\r\nComfort Sole & Flexible Walk : The outsoles are made by an air cushion, doubling the effect of shock absorption. Besides, these shoes perform excellent in durability and are also slip resistant. It provides push cushioning comfort for foot pain relief and helps relieve pressure while conforming to your every step', 'White', '6 UK,7 UK,8 UK,9 UK,10 UK', 'Shoes for men', '0.0', '0', '26-09-2024'),
(31, 12, '{\"Deep Wine\":{\"product_name\":\"Noise ColorFit Pulse 3 with 1.96\\\" Biggest Display Bluetooth Calling Smart Watch, Premium Build, Auto Sport Detection & 170+ Watch Faces Smartwatch for Men & Women (Deep Wine)\"}}', '{\"Deep Wine\":{\"img1\":\"watch_profile_1.jpg\",\"img2\":\"watch_profile_2.jpg\",\"img3\":\"watch_profile_3.jpg\",\"img4\":\"watch_profile_4.jpg\"}}', 'watch_cover_1.jpg', 'watch_cover_2.jpg', 'watch_cover_3.jpg', '', 'Noise', 'Watch', 'Smart Watch', '{\"N-A\":{\"MRP\":\"1,500\",\"Your_Price\":\"19,990\"}}', '1,500', '19,990', '100', 'New Condition', '1.96\" TFT display: Immerse yourself in a truly exceptional smartwatch experience with a larger and improved display that boasts a thinner bezel, delivering an unmatched visual experience\r\n7-day battery: Whether you\'re on the go or at home, stay connected to the world without the need for constant charging\r\nNoiseFit app: Take charge of your fitness goals with the NoiseFit app - track your activity, complete challenges, compete with friends, and earn exclusive rewards and offers\r\nFeatures to love: The smartwatch is equipped with advanced Bluetooth calling, powered by Tru SyncTM, which offers a superior calling experience. It also features a smart DND function that detects your sleep and disables notifications and alerts accordingly, ensuring uninterrupted rest. The smartwatch comes with a 2.5 D curved display that adds a touch of sophistication to your style\r\nWhat’s in the box: ColorFit Pulse 3 smartwatch, charger, warranty card, and a user manual\r\nThe watch is not a replacement for a medical device. The readings can have error margins', 'Deep Wine', '-', 'Smart Watch for men, Smart Watch for Boys, Noice Smart Watch for men, Noice Smart Watch, Watches', '0.0', '0', '26-09-2024'),
(32, 12, '{\"Dazzle Steel\":{\"product_name\":\"Haier 190 L, Direct Cool, Single Door, 4 Star Refrigerator with Toughned Glass Shelves, Large Vegetable Box (DAZZLE STEEL, HED-204DS-P)\"}}', '{\"Dazzle Steel\":{\"img1\":\"fridge_profile_1.jpg\",\"img2\":\"fridge_profile_2.jpg\",\"img3\":\"fridge_profile_3.jpg\",\"img4\":\"fridge_profile_4.jpg\"}}', 'fridge_cover_1.jpg', 'fridge_cover_2.jpg', 'fridge_cover_3.jpg', 'fridge_cover_4.jpg', 'Haier', 'Electronics Item', 'Refrigerator', '{\"191 L\":{\"MRP\":\"14,790\",\"Your_Price\":\"20,990\"}}', '14,790', '20,990', '100', 'New Condition', 'Direct Cool Refrigerator: Stylish Single Door Refrigerator with Modern Dazzle Steel. Enjoy powerful cooling that can last longer.\r\nCapacity 190 Litres: Suitable for families with 2 to 3 members or bachelors | Freezer capacity: 14 Ltr , Fresh food capacity: 176 Ltr\r\nEnergy Rating: 4 Stars - Energy Efficiency\r\nManufacturer Warranty: The product comes with a 1 year comprehensive warranty on Product and a 10 years warranty on the compressor.\r\nCompressor with Cooling technology – Compressor provides greater energy efficiency, less noise and long-lasting performance, backed up by 10 years warranty', 'Dazzle Steel', '191 L', 'Electronics Item, Refrigerator, Haier Fridge', '0.0', '0', '26-09-2024'),
(33, 12, '{\"Multi\":{\"product_name\":\"HP Smart Tank 589 All-in-one WiFi Colour Printer (Upto 4000 Black and 6000 Colour Pages Ink in The Box). - Print, Scan & Copy for Office/Home\"}}', '{\"Multi\":{\"img1\":\"printer_profile_1.jpg\",\"img2\":\"printer_profile_2.jpg\",\"img3\":\"printer_profile_3.jpg\",\"img4\":\"printer_profile_4.jpg\"}}', 'printer_cover_1.jpg', 'printer_cover_2.jpeg', 'printer_cover_3.jpeg', 'printer_cover_4.jpeg', 'HP', 'Tech Accessories', 'Printer', '{\"N-A\":{\"MRP\":\"12,299\",\"Your_Price\":\"17,828\"}}', '12,299', '17,828', '100', 'New Condition', 'Enjoy the versatility of the HP Smart Tank 589 All-in-One Printer, perfect for home and office use. With print, copy, and scan functions, and a flatbed scanner.', 'Multi', '-', 'Tech Accessories, Printer', '0.0', '0', '26-09-2024'),
(34, 12, '{\"Black\":{\"product_name\":\"Panasonic LUMIX G7 16.00 MP 4K Mirrorless Interchangeable Lens Camera Kit with 14-42 mm Lens (Black), 3x Optical Zoom\\\"\"}}', '{\"Black\":{\"img1\":\"camera_profile_1.jpg\",\"img2\":\"camera_profile_2.jpg\",\"img3\":\"camera_profile_3.jpg\",\"img4\":\"camera_profile_4.jpg\"}}', 'camera_cover_1.jpg', 'camera_cover_2.jpg', 'camera_cover_3.jpg', 'camera_cover_4.jpg', 'Panasonic', 'Cameras', 'DSLR', '{\"N-A\":{\"MRP\":\"37,990\",\"Your_Price\":\"54,990\"}}', '37,990', '54,990', '100', 'New Condition', 'PROFESSIONAL PHOTO AND VIDEO PERFORMANCE: 16 megapixel Micro Four Thirds sensor with no low pass filter to confidently capture sharp images with a high dynamic range and artifact free performance; WiFi enabled\r\n4K VIDEO CAPTURE: 4K QHD video recording (3840 x 2160) with three 4K Ultra HD capture at 25p and Full HD ( 1920 * 1080 ) at 50p\r\n4K PHOTO MODE : 8MP PHOTO BURST MODE at 30 fps, extracts individual high resolution images from 4K Ultra HD video filmed at 30 frames per second to capture split second moments\r\nINTUITIVE CONTROLS: Easily control aperture and shutter settings with the front and rear dials while making white balance and ISO adjustments on the fly; Assign favorite settings to any of the six function buttons (six on body, five on menu)\r\nHIGH RESOLUTION VIEWFINDER AND LCD DISPLAY: High resolution (2,360K dot) OLED Live View Finder and rear touch enabled 3 inch tilt/swivel LCD display (1,040 dot) are clear even in bright sunlight, Image sensor size 17.3 x 13.0 mm (in 4:3 aspect ratio)\r\nCONNECTIVITY AND PORTS: 3.5mm external mic port, 2.5mm remote port, USB 2.0 and micro HDMI Type D; Compatible with newer UHS I/UHS II SDXC/SDHC SD cards capable of storing high resolution 4K videos\r\nManufacturer Detail: Panasonic AVC Networks Xiamen Co. Ltd., Hi-Tech Industrial Development Zone, Xiamen, Fujian, China', 'Black', '-', 'Cameras, DSLR Camera', '0.0', '0', '26-09-2024'),
(35, 12, '{\"Black\":{\"product_name\":\"Pigeon by Stovekraft Oven Toaster Grill (12381) 9 Liters OTG without Rotisserie for Oven Toaster and Grill for grilling and baking Cakes (Grey)\"}}', '{\"Black\":{\"img1\":\"kitchen_profile_1.jpg\",\"img2\":\"kitchen_profile_2.jpg\",\"img3\":\"kitchen_profile_3.jpg\",\"img4\":\"kitchen_profile_4.jpg\"}}', 'kitchen_cover_1.jpg', 'kitchen_cover_2.jpg', 'kitchen_cover_3.jpg', 'kitchen_cover_4.jpg', 'Pigeon', 'Kitchen', 'Oven', '{\"N-A\":{\"MRP\":\"1,299\",\"Your_Price\":\"3,595\"}}', '1,299', '3,595', '100', 'New Condition', 'Elegant design\r\nHigh quality shining knobs\r\nGlass door for convenient monitoring\r\n60 minutes timer with auto turn off and alarm\r\nAdjustable thermostat for temperature control 100-250 degree Celsius. Rotisserie Type:No\r\n4 stage heating options\r\n4 pieces upper and lower stainless steel heating elements', 'Black', '-', 'Kitchen, Pigeon, Oven, Pigeon Oven, Oven for Kitchen', '0.0', '0', '26-09-2024'),
(36, 12, '{\"Khakhi\":{\"product_name\":\"Lymio Casual Shirt for Men|| Shirt for Men|| Men Stylish Shirt (Rib-Shirt)\"}}', '{\"Khakhi\":{\"img1\":\"cloth_profile_1.jpg\",\"img2\":\"cloth_profile_2.jpg\",\"img3\":\"cloth_profile_3.jpg\",\"img4\":\"cloth_profile_4.jpg\"}}', 'cloth_cover_1.jpg', 'cloth_cover_2.jpg', 'cloth_cover_3.jpg', 'cloth_cover_4.jpg', 'Lymio', 'Clothes', 'Shirt', '{\"S (Small)\":{\"MRP\":\"379\",\"Your_Price\":\"3,999\"},\"M (Medium)\":{\"MRP\":\"379\",\"Your_Price\":\"3,999\"},\"L (Large)\":{\"MRP\":\"379\",\"Your_Price\":\"3,999\"},\"XL (Extra Large)\":{\"MRP\":\"379\",\"Your_Price\":\"3,999\"},\"XXL (Double Extra Large)\":{\"MRP\":\"379\",\"Your_Price\":\"3,999\"}}', '379', '3,999', '100', 'New Condition', 'Casual Shirt for Men|| Shirt for Men|| Men Stylish Shirt\r\nStyle:Casual\r\nNeckline:Collar\r\nSleeve Length:Long Sleeve\r\nReguler Fit', 'Khakhi', 'S (Small),M (Medium),L (Large),XL (Extra Large),XXL (Double Extra Large)', 'Shirt for Mens, Khakhi Shirt for boys, Khakhi Shirt, Lymio khakhi shirt', '0.0', '0', '26-09-2024'),
(37, 12, '{\"N-A\":{\"product_name\":\"Galaxy Hi-Techu00ae Pioneer Bot Robot Colorful Lights and Music | All Direction Movement Dancing Robot Toys for Boys and Girls Multi-Colour\"}}', '{\"N-A\":{\"img1\":\"toy_profile_1.jpg\",\"img2\":\"toy_profile_2.jpg\",\"img3\":\"toy_profile_3.jpg\",\"img4\":\"toy_profile_4.jpg\"}}', 'toy_cover_1.jpg', 'toy_cover_2.jpg', 'toy_cover_3.jpg', 'toy_cover_4.jpg', 'Galaxy Hi-Tech', 'Toys', 'Bot Robot', '{\"N-A\":{\"MRP\":\"589\",\"Your_Price\":\"1,999\"}}', '589', '1,999', '100', 'New Condition', 'BEST FOR GIFT PURPOSE Wonderful gifts for your children. It’s an enjoyable toy with exciting actions which will surely capture their attention. Give it to them on Christmas, Holiday or their Birthday.\r\nCOME WITH MUSIC: Your little one can listen to the sweet sounds made by a Robot! Children can spend hours making musical memories with this beautiful and high quality toy!\r\nPREMIUM MATERIALS: Galaxy Hi-Tech Bot Robot Pioneer is made of quality material, safe, simple and easy to use. Absolutely Safe for your Kids as it is Non-Toxic and goes through product safety certification inspection... buy once and enjoy for years!\r\nGREAT FUNCTIONS: Our Robot Pioneer can move forward and backward, turn left and right. Hands can rotate and feet can move in all direction. Keep your little ones occupied with this Dancing and Moving Robot!\r\nEQUIPPED WITH LIGHTS: This toy is battery operated, where the robot lights up and your Baby can learn to recognize different colors of the lights. Your kid is gonna definitely love this attractive robot!', '', '-', 'Galaxy Hi-Tech, Galaxy Hi-Tech Toy, Bot Robot, Toys for children', '0.0', '0', '26-09-2024'),
(38, 12, '{\"Blue\":{\"product_name\":\"House of Quirk Desk Organiser with Drawer, Multifunctional Desk Organizer, Office Organizer, 4 Plastic Compartments with Drawer, Storage Shelf for Office, School (Blue) Stationery\"}}', '{\"Blue\":{\"img1\":\"stationary_profile_1.jpg\",\"img2\":\"stationary_profile_2.jpg\",\"img3\":\"stationary_profile_3.jpg\",\"img4\":\"stationary_profile_4.jpg\"}}', 'stationary_cover_1.jpg', 'stationary_cover_2.jpg', 'stationary_cover_3.jpg', '', 'House of Quirk', 'Stationary', 'Drawer', '{\"N-A\":{\"MRP\":\"451\",\"Your_Price\":\"999\"}}', '451', '999', '100', 'New Condition', 'Premium material: this stationery storage box is made of environmentally friendly and non-toxic ABS material with smooth, burr-free edges that do not cause damage. It is strong and solid enough for a long time of use.\r\nRemove clutter - Keep your desk or counter top clear of clutter and easily find what you need. A clean desk can speed up your work and you can be more creative all day long.\r\nGreat office aid – 4 divided compartments and 4 transparent drawers to organise all your office supplies, pens, rulers, markers, clips, scissors, sticky notes, name cards and other small things\r\nPerfect size – 21 x 14.5 x 12.5 cm, it fits easily in the desk. Two small drawers with notch can be easily pulled out. Place it without taking up too much space\r\nThis pen holder can store and organize pencils, markers, sticky notes and various small items, suitable for school, office, home.', 'Blue', '-', 'Drawer, Stationary, House of Quirk', '0.0', '0', '26-09-2024'),
(39, 12, '{\"White\":{\"product_name\":\"Nivia Storm Football | Rubberized Moulded | Suitable for Hard Ground Without Grass | Training Ball | Soccer Ball | for Men/Women | Football Size - 5 (White)\"}}', '{\"White\":{\"img1\":\"sport_profile_1.jpg\",\"img2\":\"sport_profile_2.jpg\",\"img3\":\"sport_profile_3.jpg\",\"img4\":\"sport_profile_4.jpg\"}}', 'sport_cover_1.jpg', 'sport_cover_2.jpg', 'sport_cover_3.jpg', 'sport_cover_4.jpg', 'Nivia', 'Sports', 'Football', '{\"N-A\":{\"MRP\":\"299\",\"Your_Price\":\"726\"}}', '299', '726', '100', 'New Condition', 'Construction : Rubberized Moulded\r\nSuitable for Hard Ground without Grass, Wet & Grassy Ground & Artificial Turf.\r\nButyl bladder offers lasting air and shape retention to ensure uniform game\r\nIdeal for : Training & Recreation use | Material: Rubber', 'White', '-', 'Football, Sports, Nivia', '0.0', '0', '26-09-2024'),
(40, 12, '{\"Red\":{\"product_name\":\"Wild Stone Ultra Sensual Long Lasting Perfume for Men, 100ml, A Sensory Treat for Casual Encounters, Aromatic Blend of Masculine Fragrances\"}}', '{\"Red\":{\"img1\":\"perfume_profile_1.jpg\",\"img2\":\"perfume_profile_2.jpg\",\"img3\":\"perfume_profile_3.jpg\",\"img4\":\"perfume_profile_4.jpg\"}}', 'perfume_cover_1.jpg', 'perfume_cover_2.jpg', 'perfume_cover_3.jpg', '', 'Wild Stone', 'Men accessories', 'Perfume', '{\"100 ml\":{\"MRP\":\"292\",\"Your_Price\":\"599\"}}', '292', '599', '100', 'New Condition', 'Type of Perfume - EAU DE PARFUM; A strong travelling perfume for men that complements an active lifestyle\r\nThe fragrance family - Aromatic Fougere makes this premium perfume for men a perfect choice who want to stay ultra-electrifying throughout the day\r\nWith top notes of Lemon, Rosemary, Basil, Lavender; heart notes of Cardamom, Coriander, Juniper; and base notes of Dry Amber, Moss, and Patchouli, this luxury perfume for men boasts long lasting fragrance\r\nThis long-lasting scent is a bold masculine expression of charm and perfect gift for men who are always on the move\r\nDirections to use: Apply on pulse points, such as your inner wrists and neck. Keep the spray nozzle 3-6 inches away from skin while applying', 'Red', '100 ml', 'Wild Stone, Men accessories, Perfume', '5.0', '1', '26-09-2024');

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
  `total_price` varchar(255) DEFAULT NULL,
  `vendor_profit` varchar(255) DEFAULT NULL,
  `admin_profit` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `order_title`, `order_image`, `order_price`, `order_color`, `order_size`, `qty`, `user_id`, `product_id`, `vendor_id`, `user_first_name`, `user_last_name`, `user_email`, `user_mobile`, `user_address`, `user_state`, `user_city`, `user_pin`, `payment_type`, `total_price`, `vendor_profit`, `admin_profit`, `date`) VALUES
(36, 'Apple 2023 MacBook Pro (16-inch, M3 Max chip with 14‑core CPU and 30‑core GPU, 36GB Unified Memory, 1TB) - Space Black', 'macbook_profile_1.jpg', '3,34,900', '#000000', '-', '1', '3', '6', '12', 'Vishvjit', 'Chauhan', 'Vishvjit2212@gmail.com', '8841562314', '1004, suman anand, magdalla, vesu , surat', 'Gujarat', 'Surat', '395007', 'Cash On delivery', '334,900', '334,880', '20', '03-09-2024'),
(56, 'Apple iPhone 15 Pro Max (1 TB) - Natural Titanium', 'Natural_iphone_15_profile_1.jpg', '189,400', 'Natural', '12GB-256GB', '3', '3', '1', '12', 'Vishvjit', 'Chauhan', 'Vishvjit2212@gmail.com', '8841562314', '1004, suman anand, magdalla, vesu , surat', 'Gujarat', 'Surat', '395007', 'Cash On delivery', '189,400', '189,380', '20', '11-09-2024'),
(57, 'boAt Rockerz 450 Bluetooth On Ear Headphones with Mic, Upto 15 Hours Playback, 40MM Drivers, Padded Ear Cushions, Integrated Controls and Dual Modes(Luscious Black)', 'boat_profile_1.jpg', '1,998', 'Black', '', '5', '3', '2', '12', 'Vishvjit', 'Chauhan', 'Vishvjit2212@gmail.com', '8841562314', '1004, suman anand, magdalla, vesu , surat', 'Gujarat', 'Surat', '395007', 'Cash On delivery', '1,998', '1,978', '20', '11-09-2024'),
(61, 'Apple iPad Pro 11u2033 (M4): Ultra Retina XDR Display, 256GB, Landscape 12MP Front Camera / 12MP Back Camera, LiDAR Scanner, Wi-Fi 6E, Face ID, All-Day Battery Life, Standard Glass u2014 Space Black', 'apple_ipad_profile_1.jpg', '99900', 'Space Black', '8GB-256GB', '1', '6', '3', '12', 'Abhijeet', 'Dabhi', 'abhijeetdabhi9304@gmail.com', '7863843776', '103, madhav flat, Gajanand Park Soc, bharimata road, Cauzway road, Surat', 'Gujarat', 'Surat', '395004', 'Cash On delivery', '99,900', '99,880', '20', '13-09-2024'),
(62, 'Noise Newly Launched ColorFit Pulse 3 with 1.96\" Biggest Display Bluetooth Calling Smart Watch, Premium Build, Auto Sport Detection ', 'watch_profile_1.jpg', '1499', 'Deep Wine', '-', '1', '3', '8', '12', 'Vishvjit', 'Chauhan', 'Vishvjit2212@gmail.com', '8841562314', '1004, suman anand, magdalla, vesu , surat', 'Gujarat', 'Surat', '395007', 'Cash On delivery', '1,499', '1,479', '20', '16-09-2024'),
(64, 'ZEBRONICS Zeb-Bro in Ear Wired Earphones with Mic, 3.5mm Audio Jack, 10mm Drivers, Phone/Tablet Compatible(Green)', 'earphone_profile_1.jpg', '159', 'Green', '-', '1', '3', '6', '12', 'Vishvjit', 'Chauhan', 'Vishvjit2212@gmail.com', '8841562314', '1004, suman anand, magdalla, vesu , surat', 'Gujarat', 'Surat', '395007', 'Cash On delivery', '199', '99', '60', '19-09-2024'),
(84, 'Apple 2023 MacBook Pro (16-inch, M3 Max chip with 14‑core CPU and 30‑core GPU, 36GB Unified Memory, 1TB) - Space Black', 'macbook_profile_1.jpg', '334900', '#000000', '-', '1', '3', '6', '12', 'Vishvjit', 'Chauhan', 'Vishvjit2212@gmail.com', '8841562314', '1004, suman anand, magdalla, vesu , surat', 'Gujarat', 'Surat', '395007', 'Cash On delivery', '334,900', '334,880', '20', '20-09-2024'),
(85, 'ASIAN Men-s TARZAN-11 Casual Sneaker Shoes with Synthetic Upper Lightweight Comfortable Mid Top Sneaker Shoes for Men-s ', 'shoes_profile_1.jpg', '699', 'White', '6 UK', '3', '3', '30', '12', 'Vishvjit', 'Chauhan', 'Vishvjit2212@gmail.com', '8841562314', '1004, suman anand, magdalla, vesu , surat', 'Gujarat', 'Surat', '395007', 'Other UPI', '699', '679', '20', '27-09-2024');

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
(2, '26', '20', '3', '12', 'Vishvjit', 'Vishvjit2219@gmail.com', '8841562314', 'sport_profile_1.jpg', 'Premium material: this stationery storage box is made of environmentally friendly and non-toxic ABS material with smooth, burr-free edges that do not cause damage. It is strong and solid enough for a long time of use. Remove clutter - Keep your desk or co', '2,074', '#d4ff00', '-', '6', 'UPI', 'Received Incorrect Item (Does Not Match Description or Order Specifications)', '13-08-2024'),
(3, '60', '1', '3', '12', 'Vishvjit', 'Vishvjit2212@gmail.com', '8841562314', 'iphone_15_profile_1.jpg', 'Apple iPhone 15 Pro Max (1 TB) - Black Titanium', '1,515,200', 'Black', '12GB-256GB', '8', 'Net Banking', 'Shipping Problems (Delays, Missing Packages, or Delivery Issues)', '20-09-2024');

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
(3, 'Vishvjit', 'Chauhan', '8841562314', 'Vishvjit2212@gmail.com', '42.jpg', '1004, suman anand, magdalla, vesu , surat', 'Gujarat', 'Surat', '395004', '$2y$10$QOuclFZ7454xlHvW9fIa9eEeHUjzn2xBBpI2fodi6KgDzCzpNh3nq', '27-07-2024'),
(13, 'Jade', 'Keith', '7846512301', 'qycuxuwixy@mailinator.com', 'J.png', '1004, suman anand, magdalla, vesu , surat', 'Gujarat', 'Surat', '395004', '$2y$10$P0cxj9cb1FKMN7Z/DxO.N.hCwcJaLFM6e0B8LE4Oap/qt1ZWpiU/G', '13-09-2024'),
(15, 'Abhijeet', 'Dabhi', '7863843776', 'abhijeetdabhi9304@gmail.com', 'A.png', '103, Madhav flat, Bharimata Road, cozwary road, Surat', 'Gujarat', 'Surat', '395004', '$2y$10$Q48E0QF8sZRW4VKfQSR8Seu9HAiWwix4/KxGWvlTpSAwwXM6fvR5i', '27-09-2024');

-- --------------------------------------------------------

--
-- Table structure for table `user_review`
--

CREATE TABLE `user_review` (
  `review_id` int(11) NOT NULL,
  `product_id` varchar(255) DEFAULT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `product_img` varchar(299) NOT NULL,
  `product_title` varchar(500) NOT NULL,
  `Rating` varchar(255) DEFAULT NULL,
  `Headline` varchar(255) DEFAULT NULL,
  `description` varchar(599) NOT NULL,
  `public_name` varchar(255) DEFAULT NULL,
  `profile_image` varchar(255) NOT NULL,
  `date` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_review`
--

INSERT INTO `user_review` (`review_id`, `product_id`, `user_id`, `product_img`, `product_title`, `Rating`, `Headline`, `description`, `public_name`, `profile_image`, `date`) VALUES
(12, '12', '13', 'game_profile_1.jpg', 'EvoFox Elite X Wireless Gamepad for PC 2.4ghz connectivity with Dual Vibration Motors, 2 Macro Back Buttons, Low Latency Plug and Play, Free USB Extender, Translucent Shell Controller for PC, For All Windows versions (Blue)', '5', 'adfasfaswf', 'abcdefghijkl', 'Jade Keith', 'J.png', '14-09-2024'),
(14, '12', '13', 'game_profile_1.jpg', 'EvoFox Elite X Wireless Gamepad for PC 2.4ghz connectivity with Dual Vibration Motors, 2 Macro Back Buttons, Low Latency Plug and Play, Free USB Extender, Translucent Shell Controller for PC, For All Windows versions (Blue)', '4', 'nice products', 'product achha hai value for money hai', 'Jade Keith', 'J.png', '14-09-2024'),
(16, '40', '15', 'perfume_profile_1.jpg', 'Wild Stone Ultra Sensual Long Lasting Perfume for Men, 100ml, A Sensory Treat for Casual Encounters, Aromatic Blend of Masculine Fragrances', '5', 'nice perfume', 'nice very nice ', 'Abhijeet Dabhi', 'A.png', '27-09-2024');

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
(12, 'Rajesh Parmar', 'rajesh14@gmail.com', '$2y$10$O9J/h1aqBJFaI.Qamz3EHOtkc0Qq4HeGVHcYr5jcdR1GeNvWXQ17C', 'RajeshPvt', '8956234175', 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum', '29AAGFE2778P1ZM', 'hot-air-balloons-flying-over-canyon-during-the-golden-hour-picjumbo-com.jpg', '12.jpg', '27-07-2024');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cancel_orders`
--
ALTER TABLE `cancel_orders`
  ADD PRIMARY KEY (`cancel_order_id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`product_id`);

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
  MODIFY `cancel_order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `contact_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `page_count`
--
ALTER TABLE `page_count`
  MODIFY `view_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `return_orders`
--
ALTER TABLE `return_orders`
  MODIFY `return_order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_registration`
--
ALTER TABLE `user_registration`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user_review`
--
ALTER TABLE `user_review`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `vendor_registration`
--
ALTER TABLE `vendor_registration`
  MODIFY `vendor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
