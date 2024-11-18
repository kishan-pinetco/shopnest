-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2024 at 10:55 AM
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

-- --------------------------------------------------------

--
-- Table structure for table `page_count`
--

CREATE TABLE `page_count` (
  `view_id` int(11) NOT NULL,
  `view_count` varchar(255) NOT NULL,
  `view_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(255) NOT NULL,
  `same_id` varchar(255) NOT NULL,
  `vendor_id` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `profile_image_1` varchar(899) NOT NULL,
  `profile_image_2` varchar(899) NOT NULL,
  `profile_image_3` varchar(899) NOT NULL,
  `profile_image_4` varchar(899) NOT NULL,
  `cover_image_1` varchar(899) NOT NULL,
  `cover_image_2` varchar(899) NOT NULL,
  `cover_image_3` varchar(899) NOT NULL,
  `cover_image_4` varchar(899) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `Category` varchar(255) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `MRP` longtext NOT NULL,
  `vendor_mrp` varchar(255) NOT NULL,
  `vendor_price` varchar(255) NOT NULL,
  `Quantity` varchar(255) NOT NULL,
  `Item_Condition` varchar(255) NOT NULL,
  `Description` longtext NOT NULL,
  `color` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `avg_rating` varchar(255) NOT NULL,
  `total_reviews` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `same_id`, `vendor_id`, `title`, `profile_image_1`, `profile_image_2`, `profile_image_3`, `profile_image_4`, `cover_image_1`, `cover_image_2`, `cover_image_3`, `cover_image_4`, `company_name`, `Category`, `Type`, `MRP`, `vendor_mrp`, `vendor_price`, `Quantity`, `Item_Condition`, `Description`, `color`, `size`, `keywords`, `avg_rating`, `total_reviews`, `date`) VALUES
(1, '1201', '12', 'Apple iPhone 15 Pro Max - Black Titaniums', 'iphone_15_profile_1.jpg', 'iphone_15_profile_2.jpg', 'iphone_15_profile_3.jpg', 'iphone_15_profile_4.jpg', 'iphone_15_cover_1.jpg', 'iphone_15_cover_2.jpg', 'iphone_15_cover_3.jpg', 'iphone_15_cover_4.jpg', 'Apple', 'Phones', 'iPhone', '{\"256GB\":{\"MRP\":\"134900\",\"Your_Price\":\"159900\"},\"512GB\":{\"MRP\":\"154900\",\"Your_Price\":\"179900\"}}', '134900', '159900', '100', 'New Condition', 'FORGED IN TITANIUM — iPhone 15 Pro Max has a strong and light aerospace-grade titanium design with a textured matte-glass back. It also features a Ceramic Shield front that’s tougher than any smartphone glass. And it’s splash, water, and dust resistant.\r\nADVANCED DISPLAY — The 6.7” Super Retina XDR display with ProMotion ramps up refresh rates to 120Hz when you need exceptional graphics performance. Dynamic Island bubbles up alerts and Live Notifications. Plus, with Always-On display, your Lock Screen stays glanceable, so you don’t have to tap it to stay in the know.\r\nGAME-CHANGING A17 PRO CHIP — A Pro-class GPU makes mobile games feel so immersive, with rich environments and realistic characters. A17 Pro is also incredibly efficient and helps to deliver amazing all-day battery life.\r\nPOWERFUL PRO CAMERA SYSTEM — Get incredible framing flexibility with 7 pro lenses. Capture super high-resolution photos with more color and detail using the 48MP Main camera. And take sharper close-ups from farther away with the 5x Telephoto camera on iPhone 15 Pro Max.\r\nCUSTOMIZABLE ACTION BUTTON — Action button is a fast track to your favorite feature. Just set the one you want, like Silent mode, Camera, Voice Memo, Shortcut, and more. Then press and hold to launch the action.', 'Black', '256GB,512GB', 'Apple iPhone 15 Pro Max - Black Titaniums,Apple iPhone 15 Pro Max,Apple iPhone 15 Pro ,iPhone 15 Pro Max', '0.0', '0', '26-09-2024'),
(3, '1202', '12', 'boAt Rockerz 450 Bluetooth On Ear Headphones with Mic, Upto 15 Hours Playback, 40MM Drivers, Padded Ear Cushions, Integrated Controls and Dual Modes(Luscious Black)', 'boat_profile_1.jpg', 'boat_profile_2.jpg', 'boat_profile_3.jpg', 'boat_profile_4.jpg', 'boat_cover_1.jpg', 'boat_cover_2.jpg', '', '', 'boAt', 'Headphone', 'Headphone', '{\"N-A\":{\"MRP\":\"1499\",\"Your_Price\":\"3990\"}}', '1499', '3990', '100', 'New Condition', 'Playback- It provides a massive battery backup of upto 15 hours for a superior playback time. Charging Time : 3 Hours\\r\\nDrivers- Its 40mm dynamic drivers help pump out immersive HD audio all day long.\\r\\nEarcushions- It has been ergonomically designed and structured as an on-ear headphone to provide the best user experience with its comfortable padded earcushions and lightweight design\\r\\nControls- You can control your music without hiccups using the easy access controls, communicate seamlessly using the built-in mic, access voice assistant and always stay in the zone\\r\\nDual Modes- One can connect to boAt Rockerz 450 via not one but two modes, Bluetooth as well as AUX\\r\\n1 year warranty from the date of purchase', 'Black', '-', 'boAt Rockerz 450 Bluetooth On Ear Headphones, boAt Rockerz 450 Bluetooth Headphones, boAt Rockerz Bluetooth Headphones, boAt Headphones, boAt Bluetooth Headphones', '0.0', '0', '16-11-2024'),
(4, '1202', '12', 'boAt Rockerz 450 Superman Edition Bluetooth On Ear Headphones with Mic, Upto 15 Hours Playback, 40MM Drivers, Padded Ear Cushions, Integrated Controls and Dual Modes(Krypton Blue)', 'Krypton_Blue_boat_profile_1.jpg', 'Krypton_Blue_boat_profile_2.jpg', 'Krypton_Blue_boat_profile_3.jpg', 'Krypton_Blue_boat_profile_4.jpg', 'boat_cover_1.jpg', 'boat_cover_2.jpg', '', '', 'boAt', 'Headphone', 'Headphone', '{\"N-A\":{\"MRP\":\"1799\",\"Your_Price\":\"3990\"}}', '1799', '3990', '100', 'New Condition', 'Playback- It provides a massive battery backup of upto 15 hours for a superior playback time.\r\nDrivers- Its 40mm dynamic drivers help pump out immersive HD audio all day long. Charging Time 3 hours\r\nEarcushions- It has been ergonomically designed and structured as an on-ear headphone to provide the best user experience with its comfortable padded earcushions and lightweight design\r\nControls- You can control your music without hiccups using the easy access controls, communicate seamlessly using the built-in mic, access voice assistant and always stay in the zone\r\nDual Modes- One can connect to boAt Rockerz 450 via not one but two modes, Bluetooth as well as AUX\r\n1 year warranty from the date of purchase\r\nheadphones, boat headphones, bluetooth earphones, neckband earphones, earbuds bluetooth wireless, boat neckband, neckband, earphones wireless, bluetooth earphones wireless, wireless earphones bluetooth, neck band, wireless earphones, earphones, earphone, ear phone, ear phones, boat bluetooth earphones, boat rockerz 255 pro plus, boat Rockerz 450, rockerz 450, boat bluetooth headphones, boat rockerz 255, boat wireless earphones, boat bluetooth earphones wireless, boat earphones, boat wireless', 'Krypton Blue', '-', 'boAt Rockerz 450 Superman Edition Bluetooth On Ear Headphones, boAt Superman Edition Bluetooth Headphones, boAt Bluetooth Headphones, boAt Headphones, boAt Superman Edition Bluetooth, boAt', '0.0', '0', '16-11-2024'),
(5, '1203', '12', 'Apple iPad Pro 11 2033 (M4): Ultra Retina XDR Display, 256GB, Landscape 12MP Front Camera / 12MP Back Camera, LiDAR Scanner, Wi-Fi 6E, Face ID, All-Day Battery Life, Standard Glass u2014 Space Black', 'apple_ipad_profile_1.jpg', 'apple_ipad_profile_2.jpg', 'apple_ipad_profile_3.jpg', 'apple_ipad_profile_4.jpg', 'apple_ipad_cover_1.jpg', 'apple_ipad_cover_2.jpg', 'apple_ipad_cover_3.jpg', 'apple_ipad_cover_4.jpg', 'Apple', 'Tabs/Ipad', 'Ipad', '{\"256GB\":{\"MRP\":\"99900\",\"Your_Price\":\"110600\"},\"512GB\":{\"MRP\":\"115999\",\"Your_Price\":\"119900\"},\"1TB\":{\"MRP\":\"159900\",\"Your_Price\":\"162900\"},\"2TB\":{\"MRP\":\"199900\",\"Your_Price\":\"205990\"}}', '99900', '110600', '100', 'New Condition', 'WHY IPAD PRO — iPad Pro is the ultimate iPad experience in an impossibly thin and light design. Featuring the breakthrough Ultra Retina XDR display, outrageous performance from the M4 chip, superfast wireless connectivity and compatibility with Apple Pencil Pro. Plus powerful productivity features in iPadOS.\r\n[28.22 cm (11″)/33.02 cm (13″)] ULTRA RETINA XDR DISPLAY — Ultra Retina XDR delivers extreme brightness and contrast and exceptional colour accuracy and features advanced technologies like ProMotion, P3 wide colour and True Tone. Plus a nano-texture display glass option is available in 1TB and 2TB configurations.\r\nPERFORMANCE AND STORAGE — Up to 10-core CPU in the M4 chip delivers powerful performance, while the 10‑core GPU provides blazing-fast graphics. And with all-day battery life, you can do anything you imagine on iPad Pro. Up to 2TB of storage means you can store everything from apps to large files like 4K video.\r\nIPADOS + APPS — iPadOS makes iPad more productive, intuitive and versatile. With iPadOS, run multiple apps at once, use Apple Pencil to write in any text field with Scribble, and edit and share photos. Stage Manager makes multitasking easy with resizable, overlapping apps and external display support. iPad Pro comes with essential apps like Safari, Messages and Keynote, with over a million more apps available on the App Store.\r\nAPPLE PENCIL AND MAGIC KEYBOARD FOR IPAD PRO — Apple Pencil Pro transforms iPad Pro into an immersive drawing canvas and the world’s best note‑taking device. Apple Pencil (USB-C) is also compatible with iPad Pro. Magic Keyboard for iPad Pro features a thin and light design, a great typing experience and a built‑in glass trackpad with haptic feedback, while doubling as a protective cover for iPad.\r\nADVANCED CAMERAS — iPad Air features a landscape 12MP Ultra Wide front camera that supports Centre Stage for video conferencing or epic Portrait mode selfies. The 12MP Wide back camera with True Tone flash is perfect for capturing photos and 4K videos. And get great sound with landscape stereo speakers and two microphones.\r\nCONNECTIVITY — Wi-Fi 6E gives you fast wireless connections.* Work from almost anywhere with quick transfers of photos, documents and large video files. Connect to external displays and more with the USB-C connector.', 'Black', '256GB,512GB,1TB,2TB', 'Apple iPad Pro 11, Apple iPad Pro 11 2033 (M4), Apple iPad Pro, iPad Pro 11', '0.0', '0', '18-11-2024'),
(6, '1204', '12', 'Apple 2023 MacBook Pro (16-inch, M3 Max chip with 16 2011core CPU and 40u2011core GPU, 48GB Unified Memory, 1TB) - Space Black', 'macbook_profile_1.jpg', 'macbook_profile_2.jpg', 'macbook_profile_3.jpg', 'macbook_profile_4.jpg', 'macbook_cover_1.jpg', 'macbook_cover_2.jpg', 'macbook_cover_3.jpg', 'macbook_cover_4.jpg', 'Apple', 'Laptops/MacBook', 'MacBook', '{\"1TB\":{\"MRP\":\"369990\",\"Your_Price\":\"399900\"}}', '369990', '399900', '100', 'New Condition', 'SUPERCHARGED BY M3 PRO OR M3 MAX — The Apple M3 Pro chip, with a 12-core CPU and 18-core GPU using hardware-accelerated ray tracing, delivers amazing performance for demanding workflows like manipulating gigapixel panoramas or compiling millions of lines of code. M3 Max, with an up to 16-core CPU and up to 40-core GPU, drives extreme performance for the most advanced workflows like rendering intricate 3D content or developing transformer models with billions of parameters.\r\nUP TO 22 HOURS OF BATTERY LIFE — Go all day thanks to the power-efficient design of Apple silicon. MacBook Pro delivers the same exceptional performance whether it’s running on battery or plugged in.\r\nRESPONSIVE UNIFIED MEMORY AND STORAGE — Up to 36GB (M3 Pro) or up to 128GB (M3 Max) of unified memory makes everything you do fast and fluid. Up to 4TB (M3 Pro) or up to 8TB (M3 Max) of superfast SSD storage launches apps and opens files in an instant.\r\nBRILLIANT PRO DISPLAY — The 41.05 cm (16.2″) Liquid Retina XDR display features Extreme Dynamic Range; 1,000 nits of sustained brightness for stunning HDR content; up to 600 nits of brightness for SDR content; and pro reference modes for doing your best work on the go.\r\nFULLY COMPATIBLE — All your pro apps run lightning fast — including Adobe Creative Cloud, Apple Xcode, Microsoft 365, SideFX Houdini, MathWorks MATLAB, Medivis SurgicalAR and many of your favourite iPhone and iPad apps. And with macOS, work and play on your Mac are even more powerful. Elevate your presence on video calls. Access information in all-new ways. And discover even more ways to personalise your Mac.\r\nADVANCED CAMERA AND AUDIO — Look sharp and sound great with a 1080p FaceTime HD camera, a studio-quality three-mic array and a six-speaker sound system with Spatial Audio.\r\nCONNECT IT ALL — This MacBook Pro features a MagSafe charging port, three Thunderbolt 4 ports, an SDXC card slot, an HDMI port and a headphone jack. Enjoy fast wireless connectivity with Wi-Fi 6E and Bluetooth 5.3. And you can connect up to two external displays with M3 Pro, or up to four with M3 Max.', 'Black', '1TB', 'Apple 2023 MacBook Pro, MacBook Pro M3', '0.0', '0', '18-11-2024'),
(7, '1205', '12', 'Xiaomi 108 cm (43 inches) X Series 4K LED Smart Google TV L43MA-AUIN (Black)', 'mi_tv_profile_1.jpg', 'mi_tv_profile_2.jpg', 'mi_tv_profile_3.jpg', 'mi_tv_profile_4.jpg', 'mi_tv_cover_1.jpg', 'mi_tv_cover_2.jpg', 'mi_tv_cover_3.jpg', 'mi_tv_cover_4.jpg', 'Xiaomi', 'TV', 'TV', '{\"43 inches\":{\"MRP\":\"24999\",\"Your_Price\":\"42999\"}}', '24999', '42999', '100', 'New Condition', 'Resolution : 4K Ultra HD (3840 x 2160) | Refresh Rate : 60 Hertz\r\nConnectivity: Dual Band Wi-Fi | 3 HDMI ports to connect latest gaming consoles, set top box, Blu-ray Players | 2 USB ports to connect hard drives and other USB devices | ALLM | eARC | Bluetooth 5.0 | Optical | Ethernet\r\nSound: 30 Watts Output | Dolby Audio | DTS-X | DTS Virtual: X\r\nSmart TV Features: Google TV | In-Built WiFi | Screen Mirroring | 2GB RAM | 8GB ROM | Supported Apps: Netflix, Prime Video, YouTube, Disney+Hotstar, etc. | Google Assistant\r\nDisplay: 4K HDR | Dolby Vision |HDR10 | HLG | Reality Flow MEMC | Vivid Picture Engine| ALLM\r\nWarranty Information: 1 year comprehensive warranty on product and 1 year additional on Panel provided by the brand from the date of purchase\r\n', 'Black', '43 inches', 'Xiaomi 108 cm (43 inches) X Series 4K LED, Xiaomi 108 cm 4K LED', '0.0', '0', '18-11-2024'),
(8, '1206', '12', 'ZEBRONICS Zeb-Bro in Ear Wired Earphones with Mic, 3.5mm Audio Jack, 10mm Drivers, Phone/Tablet Compatible(Blue) (Green)', 'earphone_profile_1.jpg', 'earphone_profile_2.jpg', 'earphone_profile_3.jpg', 'earphone_profile_4.jpg', 'earphone_cover_1.jpg', 'earphone_cover_2.jpg', 'earphone_cover_3.jpg', 'earphone_cover_4.jpg', 'ZEBRONICS', 'Earphone', 'Earphone', '{\"N-A\":{\"MRP\":\"159\",\"Your_Price\":\"399\"}}', '159', '399', '100', 'New Condition', 'Immersive Sound: Experience rich, detailed audio with these earphones featuring advanced drivers for clear highs and deep lows.\r\nErgonomic Design: Lightweight and comfortable in-ear fit ensures a secure, snug placement for extended listening.\r\nTangle-Free Cable: The flat, tangle-resistant cable prevents knots and tangles for hassle-free use.\r\nIn-Line Microphone: The built-in microphone allows for hands-free calls and voice commands.\r\nUniversal Compatibility: Designed to work seamlessly with smartphones, tablets, and other audio devices.', 'Green', '-', 'ZEBRONICS Zeb-Bro in Ear Wired Earphones with Mic, 3.5mm Audio Jack, ZEBRONICS Zeb-Bro in Ear Wired Earphone, Wired Earphones', '0.0', '0', '18-11-2024'),
(9, '1207', '12', 'ASIAN Men-s TARZAN-11 Casual Sneaker Shoes with Synthetic Upper Lightweight Comfortable Mid Top Sneaker Shoes for Men-s & Boy-s', 'shoes_profile_1.jpg', 'shoes_profile_2.jpg', 'shoes_profile_3.jpg', 'shoes_profile_4.jpg', 'shoes_cover_1.jpg', 'shoes_cover_2.jpg', 'shoes_cover_3.jpg', 'shoes_cover_4.jpg', 'ASIAN', 'Shoes', 'Shoes', '{\"6 UK\":{\"MRP\":\"699\",\"Your_Price\":\"1299\"},\"7 UK\":{\"MRP\":\"799\",\"Your_Price\":\"1499\"}}', '699', '1299', '100', 'New Condition', 'Lightweight & Breathable : Exclusive design and durable materials every step feels light and breezy. Breathable, free-moving fabrics which adjust according to your foot and creates an astoundingly easy-going experience.\r\nNon Slip & Shockproof : Great engineering strikes a balance in style, made in the potent design and latest fashion trends. Made for long-term wear, with extra emphasis on providing cushion to the feet, removing heel strain.\r\nComfort Sole & Flexible Walk : The outsoles are made by an air cushion, doubling the effect of shock absorption. Besides, these shoes perform excellent in durability and are also slip resistant. It provides push cushioning comfort for foot pain relief and helps relieve pressure while conforming to your every step', 'White', '6 UK,7 UK', 'ASIAN Men-s TARZAN-11 Casual Sneaker Shoes, Casual Sneaker Shoes, Sneaker Shoes for Men', '0.0', '0', '18-11-2024'),
(10, '1208', '12', 'Noise ColorFit Pulse 3 with 1.96\" Biggest Display Bluetooth Calling Smart Watch, Premium Build, Auto Sport Detection & 170+ Watch Faces Smartwatch for Men & Women (Deep Wine)', 'watch_profile_1.jpg', 'watch_profile_2.jpg', 'watch_profile_3.jpg', 'watch_profile_4.jpg', 'watch_cover_1.jpg', 'watch_cover_2.jpg', 'watch_cover_3.jpg', 'watch_profile_4.jpg', 'Noise ', 'Watch', 'Smart Watch', '{\"N-A\":{\"MRP\":\"1500\",\"Your_Price\":\"19990\"}}', '1500', '19990', '100', 'New Condition', '1.96\" TFT display: Immerse yourself in a truly exceptional smartwatch experience with a larger and improved display that boasts a thinner bezel, delivering an unmatched visual experience\r\n7-day battery: Whether you\'re on the go or at home, stay connected to the world without the need for constant charging\r\nNoiseFit app: Take charge of your fitness goals with the NoiseFit app - track your activity, complete challenges, compete with friends, and earn exclusive rewards and offers\r\nFeatures to love: The smartwatch is equipped with advanced Bluetooth calling, powered by Tru SyncTM, which offers a superior calling experience. It also features a smart DND function that detects your sleep and disables notifications and alerts accordingly, ensuring uninterrupted rest. The smartwatch comes with a 2.5 D curved display that adds a touch of sophistication to your style\r\nWhat’s in the box: ColorFit Pulse 3 smartwatch, charger, warranty card, and a user manual\r\nThe watch is not a replacement for a medical device. The readings can have error margins', 'Deep Wine', '-', 'Noise ColorFit Pulse 3 Smart Watch, Noise ColorFit Pulse 3 , Smart Watch', '0.0', '0', '18-11-2024');

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
(3, 'Vishvjit', 'Chauhan', '8841562314', 'Vishvjit2212@gmail.com', '42.jpg', '1004, suman anand, magdalla, vesu , surat', 'Gujarat', 'Surat', '395004', '$2y$10$QOuclFZ7454xlHvW9fIa9eEeHUjzn2xBBpI2fodi6KgDzCzpNh3nq', '27-07-2024');

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
  MODIFY `cancel_order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `contact_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=240;

--
-- AUTO_INCREMENT for table `page_count`
--
ALTER TABLE `page_count`
  MODIFY `view_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `return_orders`
--
ALTER TABLE `return_orders`
  MODIFY `return_order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `user_registration`
--
ALTER TABLE `user_registration`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user_review`
--
ALTER TABLE `user_review`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `vendor_registration`
--
ALTER TABLE `vendor_registration`
  MODIFY `vendor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
