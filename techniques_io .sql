-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2023 at 02:44 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `techniques.io`
--

-- --------------------------------------------------------

--
-- Table structure for table `all_products`
--

CREATE TABLE `all_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `specification` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `new_price` varchar(255) DEFAULT NULL,
  `old_price` varchar(255) DEFAULT NULL,
  `short_desp` varchar(255) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `web_id` int(11) DEFAULT NULL,
  `product_info` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cameras`
--

CREATE TABLE `cameras` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `details` text DEFAULT NULL,
  `new_price` varchar(255) DEFAULT NULL,
  `state` int(11) NOT NULL DEFAULT 0,
  `short_desp` text DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `web_id` int(11) DEFAULT NULL,
  `product_info` varchar(255) DEFAULT NULL,
  `cc` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cameras`
--

INSERT INTO `cameras` (`id`, `name`, `price`, `details`, `new_price`, `state`, `short_desp`, `category_id`, `photo`, `web_id`, `product_info`, `cc`, `created_at`, `updated_at`) VALUES
(1, 'SJCAM SJ4000 Air Full Hd Wi-Fi Waterproof Sports Action Camera', '5,000৳ 5,200৳', 'SJCAM SJ4000 Air Full Hd Wi-Fi Waterproof Sports Action Camera Up to QHD+ 3200 x 1800 / 30 fps Video 2.0\" LTPS LCD Screen Maximum Storage: 64GB Battery Capacity: 900 mAh 5,000৳ 5,200৳ shopping_cart Buy Now library_addAdd to Compare', NULL, 0, 'Up to QHD+ 3200 x 1800 / 30 fps Video 2.0\" LTPS LCD Screen Maximum Storage: 64GB Battery Capacity: 900 mAh', 1, 'https://www.startech.com.bd/image/cache/catalog/camera/action-camera/sjcam/sj4000-air/sj4000-air-01-228x228.jpg', 1, 'https://www.startech.com.bd/sjcam-sj4000-air-action-camera', 1, '2023-05-03 09:04:39', '2023-05-03 09:04:47'),
(2, '70mai A400 2K QHD Dash Cam', '8,700৳ 8,900৳', '70mai A400 2K QHD Dash Cam Resolution: QHD (2560 x 1440) Dual-Channel Front & Rear Recording 24H Parking Surveillance Enhanced Night Vision 8,700৳ 8,900৳ shopping_cart Buy Now library_addAdd to Compare', NULL, 0, 'Resolution: QHD (2560 x 1440) Dual-Channel Front & Rear Recording 24H Parking Surveillance Enhanced Night Vision', 1, 'https://www.startech.com.bd/image/cache/catalog/camera/dashcam/70mai/a400/a400-01-228x228.webp', 1, 'https://www.startech.com.bd/70mai-a400-dash-cam', 0, '2023-05-03 09:04:39', '2023-05-03 09:04:39'),
(3, '70mai M500 Dash Cam', '10,350৳ 10,550৳', '70mai M500 Dash Cam Resolution: 1944P & HDR eMMC Built-in Storage 24H Parking Surveillance Built-in GPS & GLONASS with ADAS 10,350৳ 10,550৳ shopping_cart Buy Now library_addAdd to Compare', NULL, 0, 'Resolution: 1944P & HDR eMMC Built-in Storage 24H Parking Surveillance Built-in GPS & GLONASS with ADAS', 1, 'https://www.startech.com.bd/image/cache/catalog/camera/dashcam/70mai/m500/m500-01-228x228.webp', 1, 'https://www.startech.com.bd/70mai-m500-dash-cam', 0, '2023-05-03 09:04:39', '2023-05-03 09:04:39'),
(4, 'SJCAM SJ6 Legend 16MP 4K Wi-Fi Waterproof Touch Screen Sports Action Camera', '10,800৳ 11,000৳', 'SJCAM SJ6 Legend 16MP 4K Wi-Fi Waterproof Touch Screen Sports Action Camera 16 Megapixel, 4K 24 fps Max. Resolution Gyro Stabilization for Clear Images Low-Light Mode, 120 fps Slow-Motion Mode Waterproof Case, Several Mounts Included 10,800৳ 11,000৳ shopping_cart Buy Now library_addAdd to Compare', NULL, 0, '16 Megapixel, 4K 24 fps Max. Resolution Gyro Stabilization for Clear Images Low-Light Mode, 120 fps Slow-Motion Mode Waterproof Case, Several Mounts Included', 1, 'https://www.startech.com.bd/image/cache/catalog/camera/action-camera/sjcam/sj6-legend/sj6-legend-01-228x228.jpg', 1, 'https://www.startech.com.bd/sjcam-sj6-legend-action-camera', 0, '2023-05-03 09:04:39', '2023-05-03 09:04:39'),
(5, 'Akaso EK7000 Pro 16MP 4K Ultra HD Waterproof Touch Screen WiFi Remote Control Action Camera', '10,700৳ 11,000৳', 'Akaso EK7000 Pro 16MP 4K Ultra HD Waterproof Touch Screen WiFi Remote Control Action Camera 2-Inch Touch Screen Ultra HD 4K25 Video with EIS 16MP Photo at High Quality 130ft/40m Waterproof with Case 10,700৳ 11,000৳ shopping_cart Buy Now library_addAdd to Compare', NULL, 0, '2-Inch Touch Screen Ultra HD 4K25 Video with EIS 16MP Photo at High Quality 130ft/40m Waterproof with Case', 1, 'https://www.startech.com.bd/image/cache/catalog/camera/action-camera/akaso/ek7000-pro/akaso-ek7000-pro-action-camera-228x228.webp', 1, 'https://www.startech.com.bd/akaso-ek7000-pro-action-camera', 0, '2023-05-03 09:04:39', '2023-05-03 09:04:39'),
(6, 'AKASO V50X 20MP 4K Waterproof Touch Screen Wifi Action Camera', '11,500৳ 12,000৳', 'AKASO V50X 20MP 4K Waterproof Touch Screen Wifi Action Camera 2-inch Touch Screen with IPS Display 4K/30fps, 2.7K/30fps and 2K/30fps Video Recording Up to 180 min Record Time per 1350mAh Battery Superb Image Stabilization 11,500৳ 12,000৳ shopping_cart Buy Now library_addAdd to Compare', NULL, 0, '2-inch Touch Screen with IPS Display 4K/30fps, 2.7K/30fps and 2K/30fps Video Recording Up to 180 min Record Time per 1350mAh Battery Superb Image Stabilization', 1, 'https://www.startech.com.bd/image/cache/catalog/camera/action-camera/akaso/v50x/v50x-01-228x228.jpg', 1, 'https://www.startech.com.bd/akaso-v50x-action-camera', 0, '2023-05-03 09:04:39', '2023-05-03 09:04:39'),
(7, 'Transcend DrivePro 230 Dash Camera', '12,300৳ 12,500৳', 'Transcend DrivePro 230 Dash Camera Sony high-sensitivity image sensor Built-in GPS/GLONASS receiver Built-in Wi-Fi function for mobile live streaming Optical Zoom: 1X 12,300৳ 12,500৳ shopping_cart Buy Now library_addAdd to Compare', NULL, 0, 'Sony high-sensitivity image sensor Built-in GPS/GLONASS receiver Built-in Wi-Fi function for mobile live streaming Optical Zoom: 1X', 1, 'https://www.startech.com.bd/image/cache/catalog/camera/dashcam/transcend/drivepro-230/drivepro-230-01-228x228.jpg', 1, 'https://www.startech.com.bd/transcend-drivepro-230-dashcam', 0, '2023-05-03 09:04:39', '2023-05-03 09:04:39'),
(8, 'SJCAM SJ8 Dual Screen Sports Action Camera', '12,300৳ 12,500৳', 'SJCAM SJ8 Dual Screen Sports Action Camera 4K30 Video & 20MP Photos 170° Angle of View 120 fps in 720p Live View Front Display/Rear Touchscreen 12,300৳ 12,500৳ shopping_cart Buy Now library_addAdd to Compare', NULL, 0, '4K30 Video & 20MP Photos 170° Angle of View 120 fps in 720p Live View Front Display/Rear Touchscreen', 1, 'https://www.startech.com.bd/image/cache/catalog/camera/action-camera/sjcam/sjcam-sj8/sjcam-sj8-01-228x228.jpg', 1, 'https://www.startech.com.bd/sjcam-sj8-dual-screen-action-camera', 0, '2023-05-03 09:04:39', '2023-05-03 09:04:39'),
(9, 'SJCAM SJ6 Pro 24MP 4K Wi-Fi Dual Screen Waterproof Sports Action Camera', '12,300৳ 12,500৳', 'SJCAM SJ6 Pro 24MP 4K Wi-Fi Dual Screen Waterproof Sports Action Camera Up to 4K/60fps Videos and 24 MP Photos 6-Axis Gyro Stabilization 9:16 Vertical Screen Waterproof: Up to 98 ft with SJCAM Waterproof Case 12,300৳ 12,500৳ shopping_cart Buy Now library_addAdd to Compare', NULL, 0, 'Up to 4K/60fps Videos and 24 MP Photos 6-Axis Gyro Stabilization 9:16 Vertical Screen Waterproof: Up to 98 ft with SJCAM Waterproof Case', 1, 'https://www.startech.com.bd/image/cache/catalog/camera/action-camera/sjcam/sj6-pro/sj6-pro-01-228x228.webp', 1, 'https://www.startech.com.bd/sjcam-sj6-pro-action-camera', 0, '2023-05-03 09:04:39', '2023-05-03 09:04:39'),
(10, 'Transcend DrivePro 20 Motorcycle Dashcam', '12,700৳ 13,000৳', 'Transcend DrivePro 20 Motorcycle Dashcam Resolution: 1920 x 1080 at 60 fps, 140Â° Diagonal Field of View 2.5-Hour Battery Life, Built-In G-Sensor Includes 32GB microSD Card IP68 Rated for Outdoor Use 12,700৳ 13,000৳ shopping_cart Buy Now library_addAdd to Compare', NULL, 0, 'Resolution: 1920 x 1080 at 60 fps, 140Â° Diagonal Field of View 2.5-Hour Battery Life, Built-In G-Sensor Includes 32GB microSD Card IP68 Rated for Outdoor Use', 1, 'https://www.startech.com.bd/image/cache/catalog/camera/dashcam/transcend/drivepro-20/drivepro-20-01-228x228.jpg', 1, 'https://www.startech.com.bd/transcend-drivepro-20-motorcycle-dashcam', 0, '2023-05-03 09:04:39', '2023-05-03 09:04:39'),
(11, 'SJCAM A20 Wearable Multipurpose Portable Body Camera', '14,700৳ 15,000৳', 'SJCAM A20 Wearable Multipurpose Portable Body Camera 2.33\" LCD Touchscreen, 2880p Resolution at 24 fps Up to 33\' of Illumination via LED Lamp 166° Field of View, IP65 Rating Waterproof Built-In Speaker & Dual Microphones 14,700৳ 15,000৳ shopping_cart Buy Now library_addAdd to Compare', NULL, 0, '2.33\" LCD Touchscreen, 2880p Resolution at 24 fps Up to 33\' of Illumination via LED Lamp 166° Field of View, IP65 Rating Waterproof Built-In Speaker & Dual Microphones', 1, 'https://www.startech.com.bd/image/cache/catalog/camera/action-camera/sjcam/sjcam-a20/sjcam-a20-01-228x228.jpg', 1, 'https://www.startech.com.bd/sjcam-a20-portable-body-camera', 0, '2023-05-03 09:04:39', '2023-05-03 09:04:39'),
(12, 'SJCAM SJ8 Pro 12MP 4K Wi-Fi Dual Screen Waterproof Action Camera', '17,300৳ 17,500৳', 'SJCAM SJ8 Pro 12MP 4K Wi-Fi Dual Screen Waterproof Action Camera Front Screen: 0.96\" OLED, Main Screen: 2.33\" IPS Touch Screen 4k/60fps Video Resolution 8x Digital Zoom, Sony Imx377 Sensor 1200 Mah Battery, Dual Microphones 17,300৳ 17,500৳ shopping_cart Buy Now library_addAdd to Compare', NULL, 0, 'Front Screen: 0.96\" OLED, Main Screen: 2.33\" IPS Touch Screen 4k/60fps Video Resolution 8x Digital Zoom, Sony Imx377 Sensor 1200 Mah Battery, Dual Microphones', 1, 'https://www.startech.com.bd/image/cache/catalog/camera/action-camera/sjcam/sj8-pro/sj8-pro-01-228x228.jpeg', 1, 'https://www.startech.com.bd/sjcam-sj8-pro-action-camera', 0, '2023-05-03 09:04:39', '2023-05-03 09:04:39'),
(13, 'SJCAM SJ10 Pro 12MP 4K Wi-Fi Waterproof Action Camera', '18,600৳ 19,000৳', 'SJCAM SJ10 Pro 12MP 4K Wi-Fi Waterproof Action Camera 2.33 IPS Touch Display, Waterproof Body 7-Layer Glass with 2 aspherical glass lenses 4K 60FPS Video Recording 1300Mah Battery 18,600৳ 19,000৳ shopping_cart Buy Now library_addAdd to Compare', NULL, 0, '2.33 IPS Touch Display, Waterproof Body 7-Layer Glass with 2 aspherical glass lenses 4K 60FPS Video Recording 1300Mah Battery', 1, 'https://www.startech.com.bd/image/cache/catalog/camera/action-camera/sjcam/sj10-pro/sj10-pro-03-228x228.jpg', 1, 'https://www.startech.com.bd/sjcam-sj10-pro-action-camera', 0, '2023-05-03 09:04:39', '2023-05-03 09:04:39'),
(14, 'SJCAM SJ10X 12MP 4K Wi-Fi Waterproof Action Camera', '18,600৳ 19,000৳', 'SJCAM SJ10X 12MP 4K Wi-Fi Waterproof Action Camera 2.33 IPS Touch Display, Waterproof Body Sensor: OmniVision 4K 24FPS Video Recording 1300Mah Battery 18,600৳ 19,000৳ shopping_cart Buy Now library_addAdd to Compare', NULL, 0, '2.33 IPS Touch Display, Waterproof Body Sensor: OmniVision 4K 24FPS Video Recording 1300Mah Battery', 1, 'https://www.startech.com.bd/image/cache/catalog/camera/action-camera/sjcam/sj10x/sj10x-01-228x228.jpg', 1, 'https://www.startech.com.bd/sjcam-sj10x-action-camera', 0, '2023-05-03 09:04:39', '2023-05-03 09:04:39'),
(15, 'Transcend DrivePro 550 Dual Lens Dash Camera', '19,700৳ 20,000৳', 'Transcend DrivePro 550 Dual Lens Dash Camera Dual-lens design, Front lens features a Sony Image Sensor Four infrared LEDs on the rear Lens to Improve recording quality Built-in Wi-Fi function for mobile live streaming Time-lapse video safeguards your vehicle continuously 19,700৳ 20,000৳ shopping_cart Buy Now library_addAdd to Compare', NULL, 0, 'Dual-lens design, Front lens features a Sony Image Sensor Four infrared LEDs on the rear Lens to Improve recording quality Built-in Wi-Fi function for mobile live streaming Time-lapse video safeguards your vehicle continuously', 1, 'https://www.startech.com.bd/image/cache/catalog/camera/dashcam/transcend/drivepro-550/drivepro-550-01-228x228.jpg', 1, 'https://www.startech.com.bd/transcend-drivepro-550-dual-lens-dash-camera', 0, '2023-05-03 09:04:39', '2023-05-03 09:04:39'),
(16, 'Transcend DrivePro Body 60 Cylindrical Camera', '20,300৳ 20,500৳', 'Transcend DrivePro Body 60 Cylindrical Camera Exmor high-sensitivity image sensor Resolution: Full HD 1080P @30 fps Capacity: 64GB internal memory IP Rating: IP67 20,300৳ 20,500৳ shopping_cart Buy Now library_addAdd to Compare', NULL, 0, 'Exmor high-sensitivity image sensor Resolution: Full HD 1080P @30 fps Capacity: 64GB internal memory IP Rating: IP67', 1, 'https://www.startech.com.bd/image/cache/catalog/camera/dashcam/transcend/drivepro-body-60/drivepro-body-60-01-228x228.jpg', 1, 'https://www.startech.com.bd/transcend-drivepro-body-60-cylindrical-camera', 0, '2023-05-03 09:04:39', '2023-05-03 09:04:39'),
(17, 'SONY CYBER-SHOT W810 20MP,6X ZOOM HD DIGITAL CAMERA', '23,500৳ 23,800৳', 'SONY CYBER-SHOT W810 20MP,6X ZOOM HD DIGITAL CAMERA Sensor Type Super HAD CCD Resolution 20.1 Mega pixel Optical Zoom 6x 27-162 mm F3.5-6.5 Zoom Lens 23,500৳ 23,800৳ shopping_cart Buy Now library_addAdd to Compare', NULL, 0, 'Sensor Type Super HAD CCD Resolution 20.1 Mega pixel Optical Zoom 6x 27-162 mm F3.5-6.5 Zoom Lens', 1, 'https://www.startech.com.bd/image/cache/data/Camera/Sony W810-228x228.jpg', 1, 'https://www.startech.com.bd/sony-w810-digital-camera', 1, '2023-05-03 09:04:39', '2023-05-03 09:04:52'),
(18, 'SONY CYBER-SHOT W830 20MP,8X ZOOM HD DIGITAL CAMERA', '27,500৳ 28,000৳', 'SONY CYBER-SHOT W830 20MP,8X ZOOM HD DIGITAL CAMERA 1/2.3\" Super HAD CCD sensor Focal lengh f=4.5-36 mm Resolution - 20.1 MP, Optical Zoom (X) - 8x 27,500৳ 28,000৳ shopping_cart Buy Now library_addAdd to Compare', NULL, 0, '1/2.3\" Super HAD CCD sensor Focal lengh f=4.5-36 mm Resolution - 20.1 MP, Optical Zoom (X) - 8x', 1, 'https://www.startech.com.bd/image/cache/catalog/camera/digital-camera/sony/w830/w830-2-228x228.jpg', 1, 'https://www.startech.com.bd/sony-w830-digital-camera', 0, '2023-05-03 09:04:39', '2023-05-03 09:04:39'),
(19, 'SONY HDR-CX405 9.2MP 30X OPTICAL ZOOM FULL HD HANDYCAM', '24,700৳ 25,000৳', 'SONY HDR-CX405 9.2MP 30X OPTICAL ZOOM FULL HD HANDYCAM Exmor R CMOS sensor BIONZ X image processor Dual Record mode 26.8mm ZEISS lens 30x optical zoom 24,700৳ 25,000৳ shopping_cart Buy Now library_addAdd to Compare', NULL, 0, 'Exmor R CMOS sensor BIONZ X image processor Dual Record mode 26.8mm ZEISS lens 30x optical zoom', 1, 'https://www.startech.com.bd/image/cache/catalog/DSLR/Sony HDR-CX405 Handy Camera-228x228.png', 1, 'https://www.startech.com.bd/sony-hdr-cx405-handy-camera', 0, '2023-05-03 09:04:39', '2023-05-03 09:04:39'),
(20, 'Insta360 GO 2 9MP 3K Waterproof Small Action Camera', '29,500৳ 30,000৳', 'Insta360 GO 2 9MP 3K Waterproof Small Action Camera FlowState Stabilization,Hyperlapse, WiFi Preview Hands-Free, Mount Anywhere 1440p 50fps. Waterproof to 4m (13ft) Up to 2560 x 1440 Video & 9MP Photos 29,500৳ 30,000৳ shopping_cart Buy Now library_addAdd to Compare', NULL, 0, 'FlowState Stabilization,Hyperlapse, WiFi Preview Hands-Free, Mount Anywhere 1440p 50fps. Waterproof to 4m (13ft) Up to 2560 x 1440 Video & 9MP Photos', 1, 'https://www.startech.com.bd/image/cache/catalog/camera/action-camera/insta360/go-2/go-2-001-228x228.jpg', 1, 'https://www.startech.com.bd/insta360-go-2-action-camera', 0, '2023-05-03 09:04:39', '2023-05-03 09:04:39');

-- --------------------------------------------------------

--
-- Table structure for table `camera_singles`
--

CREATE TABLE `camera_singles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `specification` text DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `new_price` varchar(255) DEFAULT NULL,
  `old_price` varchar(255) DEFAULT NULL,
  `short_desp` text DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `web_id` int(11) DEFAULT NULL,
  `product_info` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category_models`
--

CREATE TABLE `category_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_image` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_models`
--

INSERT INTO `category_models` (`id`, `category_name`, `category_image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Mobile', 'mobile.png', NULL, NULL, NULL),
(2, 'Computer', 'computer.png', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `comment`, `email`, `created_at`, `updated_at`) VALUES
(1, 'User', 'Hello', 'user@gmail.com', '2023-05-01 15:56:45', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comparisons`
--

CREATE TABLE `comparisons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `desp` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `creatorlogins`
--

CREATE TABLE `creatorlogins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `email_verified_at` date DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `creatorlogins`
--

INSERT INTO `creatorlogins` (`id`, `name`, `email`, `password`, `photo`, `email_verified_at`, `status`, `created_at`, `updated_at`) VALUES
(1, 'User', 'user@gmail.com', '$2y$10$jMHnlY1TOfnps2.6WNXYpuuihJpqgh0LkprVcRJTHZ1e1JFVl6S7G', '1.jpg', NULL, NULL, '2023-05-01 15:39:22', '2023-05-03 06:02:00');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_03_26_013137_create_creatorlogins_table', 1),
(7, '2023_03_26_053359_create_category_models_table', 1),
(8, '2023_03_26_172143_create_topics_table', 1),
(9, '2023_03_27_000733_create_comments_table', 1),
(10, '2023_04_01_053329_create_scrapers_table', 1),
(11, '2023_04_08_011256_create_phones_table', 1),
(12, '2023_04_08_073657_create_product_categories_table', 1),
(13, '2023_04_10_014214_create_websites_table', 1),
(14, '2023_04_10_021109_create_cameras_table', 1),
(15, '2023_04_13_040027_create_all_products_table', 1),
(16, '2023_04_13_180656_create_phone_singles_table', 1),
(17, '2023_04_13_184823_create_camera_singles_table', 1),
(18, '2023_05_02_025535_create_comparisons_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `phones`
--

CREATE TABLE `phones` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `details` text DEFAULT NULL,
  `new_price` varchar(255) DEFAULT NULL,
  `state` int(11) NOT NULL DEFAULT 0,
  `short_desp` text DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `web_id` int(11) DEFAULT NULL,
  `product_info` varchar(255) DEFAULT NULL,
  `pp` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `phones`
--

INSERT INTO `phones` (`id`, `name`, `price`, `details`, `new_price`, `state`, `short_desp`, `category_id`, `photo`, `web_id`, `product_info`, `pp`, `created_at`, `updated_at`) VALUES
(1, 'Infinix Smart 6 HD Smartphone (2/32GB)', '8,999৳', 'Infinix Smart 6 HD Smartphone (2/32GB) Display: 6.6\" HD+ 500nits Waterdrop Sunlight Display Processor: Unisoc SC9863A (28nm) Camera: Dual 8MP + QVGA on Rear, 5MP Front Features: Mega 5000mAh Battery 8,999৳ shopping_cart Buy Now library_addAdd to Compare', NULL, 0, 'Display: 6.6\" HD+ 500nits Waterdrop Sunlight Display Processor: Unisoc SC9863A (28nm) Camera: Dual 8MP + QVGA on Rear, 5MP Front Features: Mega 5000mAh Battery', 2, 'https://www.startech.com.bd/image/cache/catalog/mobile/infinix/smart-6-hd/smart-6-hd-sky-blue-228x228.webp', 1, 'https://www.startech.com.bd/infinix-smart-6-hd', 0, '2023-05-02 07:21:45', '2023-05-02 07:21:45'),
(2, 'Realme C30 Smartphone (2/32GB)', '9,999৳', 'Realme C30 Smartphone (2/32GB) Display: 6.5\" HD+ Display Processor: Unisoc Tiger T612 (12 nm) Camera: Single 8MP Rear, 5MP Front Features: 5000mAh Battery 9,999৳ shopping_cart Buy Now library_addAdd to Compare', NULL, 0, 'Display: 6.5\" HD+ Display Processor: Unisoc Tiger T612 (12 nm) Camera: Single 8MP Rear, 5MP Front Features: 5000mAh Battery', 2, 'https://www.startech.com.bd/image/cache/catalog/mobile/realme/c30/c30-blue-228x228.webp', 1, 'https://www.startech.com.bd/realme-c30', 0, '2023-05-02 07:21:45', '2023-05-02 07:21:45'),
(3, 'Infinix Smart 6 Plus Smartphone (2/64GB)', '9,999৳', 'Infinix Smart 6 Plus Smartphone (2/64GB) Display: 6.82\" HD+ Sunlight Display Processor: MediaTek Helio G25 (12 nm) Camera: Dual 8+0.3 MP on Rear, 5MP Front Features: 5000mAh Mega Battery 9,999৳ shopping_cart Buy Now library_addAdd to Compare', NULL, 0, 'Display: 6.82\" HD+ Sunlight Display Processor: MediaTek Helio G25 (12 nm) Camera: Dual 8+0.3 MP on Rear, 5MP Front Features: 5000mAh Mega Battery', 2, 'https://www.startech.com.bd/image/cache/catalog/mobile/infinix/smart-6-plus/smart-6-plus-crystal-violet-228x228.webp', 1, 'https://www.startech.com.bd/infinix-smart-6-plus', 0, '2023-05-02 07:21:45', '2023-05-02 07:21:45'),
(4, 'Infinix Smart 7 Smartphone (3/64GB)', '9,999৳', 'Infinix Smart 7 Smartphone (3/64GB) Display: 6.6\" HD+ Sunlight Display Processor: MediaTek Helio A22 (12 nm) Camera: Dual 8+0.3 MP on Rear, 5MP Front Features: Fingerprint, 5000mAh Battery 9,999৳ shopping_cart Buy Now library_addAdd to Compare', NULL, 0, 'Display: 6.6\" HD+ Sunlight Display Processor: MediaTek Helio A22 (12 nm) Camera: Dual 8+0.3 MP on Rear, 5MP Front Features: Fingerprint, 5000mAh Battery', 2, 'https://www.startech.com.bd/image/cache/catalog/mobile/infinix/smart-7/smart-7-coastal-green-228x228.webp', 1, 'https://www.startech.com.bd/infinix-smart-7', 0, '2023-05-02 07:21:45', '2023-05-02 07:21:45'),
(5, 'Realme C11 2021 Smartphone (2/32GB)', '10,499৳', 'Realme C11 2021 Smartphone (2/32GB) Display: 6.5\" HD+ Display Processor: Unisoc SC9863A (28nm) Camera: Single 8MP Rear, 5MP Front Features: 5000mAh Battery 10,499৳ shopping_cart Buy Now library_addAdd to Compare', NULL, 0, 'Display: 6.5\" HD+ Display Processor: Unisoc SC9863A (28nm) Camera: Single 8MP Rear, 5MP Front Features: 5000mAh Battery', 2, 'https://www.startech.com.bd/image/cache/catalog/mobile/realme/c11-2021/c11-2021-grey-228x228.webp', 1, 'https://www.startech.com.bd/realme-c11-2021', 0, '2023-05-02 07:21:45', '2023-05-02 07:21:45'),
(6, 'Vivo Y02 Smartphone (2/32GB)', '10,999৳', 'Vivo Y02 Smartphone (2/32GB) Display: 6.51\" HD+ Eye Protection Screen Processor: MediaTek MT6762 Helio P22 (12nm) Camera: Single 8MP on Rear, 5MP Front Features: 5000mAh Battery 10,999৳ shopping_cart Buy Now library_addAdd to Compare', NULL, 0, 'Display: 6.51\" HD+ Eye Protection Screen Processor: MediaTek MT6762 Helio P22 (12nm) Camera: Single 8MP on Rear, 5MP Front Features: 5000mAh Battery', 2, 'https://www.startech.com.bd/image/cache/catalog/mobile/vivo/y02/y02-blue-228x228.webp', 1, 'https://www.startech.com.bd/vivo-y02', 0, '2023-05-02 07:21:45', '2023-05-02 07:21:45'),
(7, 'Infinix Smart 7 Smartphone (4/64GB)', '10,999৳', 'Infinix Smart 7 Smartphone (4/64GB) Display: 6.6\" HD+ Sunlight Display Processor: MediaTek Helio A22 (12 nm) Camera: Dual 8+0.3 MP on Rear, 5MP Front Features: Fingerprint, 5000mAh Battery 10,999৳ shopping_cart Buy Now library_addAdd to Compare', NULL, 0, 'Display: 6.6\" HD+ Sunlight Display Processor: MediaTek Helio A22 (12 nm) Camera: Dual 8+0.3 MP on Rear, 5MP Front Features: Fingerprint, 5000mAh Battery', 2, 'https://www.startech.com.bd/image/cache/catalog/mobile/infinix/smart-7/smart-7-peacock-blue-228x228.webp', 1, 'https://www.startech.com.bd/infinix-smart-7-4gb-64gb', 0, '2023-05-02 07:21:45', '2023-05-02 07:21:45'),
(8, 'Infinix Hot 12i Smartphone (4/64GB)', '11,499৳', 'Infinix Hot 12i Smartphone (4/64GB) Display: 6.6\" HD+ Water Drop Display Processor: Mediatek MT6761 Helio A22 (12 nm) Camera: Triple 13+0.3+0.3 MP on Rear, 8MP Front Features: Fingerprint, 5000mAh Battery 11,499৳ shopping_cart Buy Now library_addAdd to Compare', NULL, 0, 'Display: 6.6\" HD+ Water Drop Display Processor: Mediatek MT6761 Helio A22 (12 nm) Camera: Triple 13+0.3+0.3 MP on Rear, 8MP Front Features: Fingerprint, 5000mAh Battery', 2, 'https://www.startech.com.bd/image/cache/catalog/mobile/infinix/hot-12i/hot-12i-horizon-blue-228x228.webp', 1, 'https://www.startech.com.bd/infinix-hot-12i', 0, '2023-05-02 07:21:45', '2023-05-02 07:21:45'),
(9, 'Samsung Galaxy A03 Core Smartphone (2/32GB)', '11,999৳ 12,299৳', 'Samsung Galaxy A03 Core Smartphone (2/32GB) Display: 6.5\" 720 x 1600 (HD+) Processor: Octa-core (1.6GHz, 1.2GHz) Camera: 8MP Rear, 5MP Front Features: 5000mAh Li-Ion Battery 11,999৳ 12,299৳ shopping_cart Buy Now library_addAdd to Compare', NULL, 0, 'Display: 6.5\" 720 x 1600 (HD+) Processor: Octa-core (1.6GHz, 1.2GHz) Camera: 8MP Rear, 5MP Front Features: 5000mAh Li-Ion Battery', 2, 'https://www.startech.com.bd/image/cache/catalog/mobile/samsung/galaxy-a03-core/a03-core-002-228x228.webp', 1, 'https://www.startech.com.bd/samsung-galaxy-a03-core', 0, '2023-05-02 07:21:45', '2023-05-02 07:21:45'),
(10, 'Vivo Y02s Smartphone (3/32GB)', '12,499৳', 'Vivo Y02s Smartphone (3/32GB) Display: 6.51\" HD+ Halo FullView Screen Processor: Mediatek MT6765 Helio P35 (12nm) Camera: Single 8MP on Rear, 5MP Front Features: 3GB Extended RAM, 5000mAh Battery 12,499৳ shopping_cart Buy Now library_addAdd to Compare', NULL, 0, 'Display: 6.51\" HD+ Halo FullView Screen Processor: Mediatek MT6765 Helio P35 (12nm) Camera: Single 8MP on Rear, 5MP Front Features: 3GB Extended RAM, 5000mAh Battery', 2, 'https://www.startech.com.bd/image/cache/catalog/mobile/vivo/y02s/y02s-blue-228x228.webp', 1, 'https://www.startech.com.bd/vivo-y02s', 0, '2023-05-02 07:21:45', '2023-05-02 07:21:45'),
(11, 'Realme C11 2021 Smartphone (4/64GB)', '12,499৳', 'Realme C11 2021 Smartphone (4/64GB) Display: 6.5\" HD+ Display Processor: Unisoc SC9863A (28nm) Camera: Single 8MP Rear, 5MP Front Features: 5000mAh Battery 12,499৳ shopping_cart Buy Now library_addAdd to Compare', NULL, 0, 'Display: 6.5\" HD+ Display Processor: Unisoc SC9863A (28nm) Camera: Single 8MP Rear, 5MP Front Features: 5000mAh Battery', 2, 'https://www.startech.com.bd/image/cache/catalog/mobile/realme/c11-2021/c11-2021-blue-228x228.webp', 1, 'https://www.startech.com.bd/realme-c11-2021-4-64gb', 0, '2023-05-02 07:21:45', '2023-05-02 07:21:45'),
(12, 'Vivo Y02A Smartphone (3/32GB)', '12,499৳', 'Vivo Y02A Smartphone (3/32GB) Display: 6.51\" HD+ Eye Protection Screen Processor: Mediatek MT6765 Helio P35 (12nm) Camera: Single 8MP on Rear, 5MP Front Features: 5000mAh Battery 12,499৳ shopping_cart Buy Now library_addAdd to Compare', NULL, 0, 'Display: 6.51\" HD+ Eye Protection Screen Processor: Mediatek MT6765 Helio P35 (12nm) Camera: Single 8MP on Rear, 5MP Front Features: 5000mAh Battery', 2, 'https://www.startech.com.bd/image/cache/catalog/mobile/vivo/y02a/y02a-grey-228x228.webp', 1, 'https://www.startech.com.bd/vivo-y02a', 0, '2023-05-02 07:21:45', '2023-05-02 07:21:45'),
(13, 'Vivo Y15s Smartphone (3/32GB)', '12,999৳', 'Vivo Y15s Smartphone (3/32GB) Display: 6.51\" HD+ Halo FullView Screen Processor: Mediatek MT6765 Helio P35 (12nm) Camera: Dual 13+2 MP on Rear, 8MP Front Features: Side Fingerprint, 5000mAh Battery 12,999৳ shopping_cart Buy Now library_addAdd to Compare', NULL, 0, 'Display: 6.51\" HD+ Halo FullView Screen Processor: Mediatek MT6765 Helio P35 (12nm) Camera: Dual 13+2 MP on Rear, 8MP Front Features: Side Fingerprint, 5000mAh Battery', 2, 'https://www.startech.com.bd/image/cache/catalog/mobile/vivo/y15s/y15s-blue-228x228.webp', 1, 'https://www.startech.com.bd/vivo-y15s', 0, '2023-05-02 07:21:45', '2023-05-02 07:21:45'),
(14, 'OPPO A16e Smartphone (4/64GB)', '13,990৳', 'OPPO A16e Smartphone (4/64GB) Display: 6.52\" HD+ Eye-care Display Processor: Mediatek MT6762D Helio P22 (12 nm) Camera: Single 13MP on Rear, 5MP Front Features: Support Face Unlock 13,990৳ shopping_cart Buy Now library_addAdd to Compare', NULL, 0, 'Display: 6.52\" HD+ Eye-care Display Processor: Mediatek MT6762D Helio P22 (12 nm) Camera: Single 13MP on Rear, 5MP Front Features: Support Face Unlock', 2, 'https://www.startech.com.bd/image/cache/catalog/mobile/oppo/a16e/a16e-blue-228x228.webp', 1, 'https://www.startech.com.bd/oppo-a16e', 0, '2023-05-02 07:21:45', '2023-05-02 07:21:45'),
(15, 'OPPO A17k Smartphone (3/64GB)', '13,990৳', 'OPPO A17k Smartphone (3/64GB) Display: 6.56\" HD+ Eye-care Display Processor: Mediatek MT6765 Helio G35 (12 nm) Camera: Single 8MP on Rear, 5MP Front Features: Side-mounted Fingerprint, IPX4 13,990৳ shopping_cart Buy Now library_addAdd to Compare', NULL, 0, 'Display: 6.56\" HD+ Eye-care Display Processor: Mediatek MT6765 Helio G35 (12 nm) Camera: Single 8MP on Rear, 5MP Front Features: Side-mounted Fingerprint, IPX4', 2, 'https://www.startech.com.bd/image/cache/catalog/mobile/oppo/a17k/a17k-blue-228x228.webp', 1, 'https://www.startech.com.bd/oppo-a17k', 0, '2023-05-02 07:21:45', '2023-05-02 07:21:45'),
(16, 'Realme C33 Smartphone (3/32GB)', '13,999৳', 'Realme C33 Smartphone (3/32GB) Display: 6.5\" HD+ Display Processor: Unisoc Tiger T612 (12 nm) Camera: Dual 50+0.3 MP Rear, 5MP Front Features: Side Fingerprint, 5000mAh Battery 13,999৳ shopping_cart Buy Now library_addAdd to Compare', NULL, 0, 'Display: 6.5\" HD+ Display Processor: Unisoc Tiger T612 (12 nm) Camera: Dual 50+0.3 MP Rear, 5MP Front Features: Side Fingerprint, 5000mAh Battery', 2, 'https://www.startech.com.bd/image/cache/catalog/mobile/realme/c33/c33-black-228x228.webp', 1, 'https://www.startech.com.bd/realme-c33', 0, '2023-05-02 07:21:45', '2023-05-02 07:21:45'),
(17, 'Realme C25Y Smartphone (4/64GB)', '14,499৳', 'Realme C25Y Smartphone (4/64GB) Display: 6.5\" HD+ Display Processor: Unisoc Tiger T610 (12 nm) Camera: Triple 50+2+2 MP Rear, 5MP Front Features: Rear Fingerprint, 5000mAh Battery, 18W Quick Charge 14,499৳ shopping_cart Buy Now library_addAdd to Compare', NULL, 0, 'Display: 6.5\" HD+ Display Processor: Unisoc Tiger T610 (12 nm) Camera: Triple 50+2+2 MP Rear, 5MP Front Features: Rear Fingerprint, 5000mAh Battery, 18W Quick Charge', 2, 'https://www.startech.com.bd/image/cache/catalog/mobile/realme/c25y/c25y-blue-228x228.webp', 1, 'https://www.startech.com.bd/realme-c25y', 1, '2023-05-02 07:21:45', '2023-05-02 07:22:15'),
(18, 'Infinix Hot 12 Play Smartphone (4/128GB)', '14,499৳', 'Infinix Hot 12 Play Smartphone (4/128GB) Display: 6.82\" HD+ 90Hz Punch Hole Display Processor: Mediatek Helio G35 (12 nm) Camera: Dual 13MP+2MP+AI Lens on Rear, 8MP Front Features: Fingerprint, 6000mAh Battery 14,499৳ shopping_cart Buy Now library_addAdd to Compare', NULL, 0, 'Display: 6.82\" HD+ 90Hz Punch Hole Display Processor: Mediatek Helio G35 (12 nm) Camera: Dual 13MP+2MP+AI Lens on Rear, 8MP Front Features: Fingerprint, 6000mAh Battery', 2, 'https://www.startech.com.bd/image/cache/catalog/mobile/infinix/hot-12-play/hot-12-play-lucky-green-228x228.webp', 1, 'https://www.startech.com.bd/infinix-hot-12-play-4gb-128gb', 1, '2023-05-02 07:21:45', '2023-05-02 07:22:23'),
(19, 'Realme C33 Smartphone (4/64GB)', '14,999৳', 'Realme C33 Smartphone (4/64GB) Display: 6.5\" HD+ Display Processor: Unisoc Tiger T612 (12 nm) Camera: Dual 50+0.3 MP Rear, 5MP Front Features: Side Fingerprint, 5000mAh Battery 14,999৳ shopping_cart Buy Now library_addAdd to Compare', NULL, 0, 'Display: 6.5\" HD+ Display Processor: Unisoc Tiger T612 (12 nm) Camera: Dual 50+0.3 MP Rear, 5MP Front Features: Side Fingerprint, 5000mAh Battery', 2, 'https://www.startech.com.bd/image/cache/catalog/mobile/realme/c33/c33-blue-228x228.webp', 1, 'https://www.startech.com.bd/realme-c33-4-64gb', 0, '2023-05-02 07:21:45', '2023-05-02 07:21:45'),
(20, 'Motorola Moto E40 Smartphone (4/64GB)', '14,300৳ 15,999৳', 'Motorola Moto E40 Smartphone (4/64GB) Display: 6.5\" HD+ (720x1600) IPS LCD 90Hz Processor: Octa-core 1.8 GHz Unisoc T700 Camera: Triple 48+2+2 MP on Rear, 8MP Selfie Features: IP52, Rear Fingerprint, 5000mAh Battery 14,300৳ 15,999৳ shopping_cart Buy Now library_addAdd to Compare', NULL, 0, 'Display: 6.5\" HD+ (720x1600) IPS LCD 90Hz Processor: Octa-core 1.8 GHz Unisoc T700 Camera: Triple 48+2+2 MP on Rear, 8MP Selfie Features: IP52, Rear Fingerprint, 5000mAh Battery', 2, 'https://www.startech.com.bd/image/cache/catalog/mobile/motorola/moto-e40/moto-g31-mineral-grey-01 (1)-228x228.webp', 1, 'https://www.startech.com.bd/motorola-moto-e40', 0, '2023-05-02 07:21:45', '2023-05-02 07:21:45');

-- --------------------------------------------------------

--
-- Table structure for table `phone_singles`
--

CREATE TABLE `phone_singles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `specification` text DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `new_price` varchar(255) DEFAULT NULL,
  `old_price` varchar(255) DEFAULT NULL,
  `short_desp` text DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `web_id` int(11) DEFAULT NULL,
  `product_info` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `phone_singles`
--

INSERT INTO `phone_singles` (`id`, `specification`, `price`, `description`, `new_price`, `old_price`, `short_desp`, `category_id`, `photo`, `product_id`, `web_id`, `product_info`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Display Size6.6-inch TypeIPS ResolutionHD+ (720x1600) Brightness500 nits (peak) Features105.2 cm2 20:9 ratio (~266 ppi density) Processor ChipsetUnisoc SC9863A (28nm) CPU TypeOcta-core CPU Speed4x1.6 GHz Cortex-A55 & 4x1.2 GHz Cortex-A55 GPUIMG8322 Memory RAM2GB Internal Storage32GB eMMC 5.1 Card SlotmicroSDXC (Up to 512GB) Rear Camera Resolution8MP, AF QVGA FeaturesDual-LED flash Video Recording1080p@30fps Front Camera Resolution5MP FeaturesLED flash Video Recording720p@30fps Audio SpeakerYes Audio FeaturesDTS Audio Processing + Beez 2.0 Network & Connectivity SIMDual SIM (Nano-SIM, dual stand-by) Network2G, 3G, 4G Wi-FiWi-Fi 802.11 b/g/n BluetoothYes GPSYes USBmicroUSB 2.0 OTGYes Audio Jack3.5mm OS Operating SystemAndroid 11 (Go edition) Custom UIXOS 7.6 Features FingerprintN/A SensorsG-Sensor Light Sensor Proximity Sensor IP RatingN/A Battery TypeLithium-polymer 5000 mAh (non-removable) Physical specification Dimension165.64 x 76.40 x 90.5 mm ColorsForce Black Origin Blue Aqua Sky Warranty Information Warranty01-year Official warranty (To claim please visit the nearest Carlcare Service Center)', NULL, 'The Infinix Smart 6 HD has a 6.6-inch HD+ IPS LCD screen. It has a waterdrop notch for the front camera. The rear camera has dual 8 Megapixel + QVGA resolution, autofocus, dual-LED flash, depth sensor, and Full HD video recording capabilities. The front-facing camera has a resolution of 5 MP. The Infinix Smart 6 HD has a 5000 mAh battery. It has 2 GB of RAM, an octa-core CPU that runs at up to 1.6 GHz, and a PowerVR GE8322 GPU. It runs on a Unisoc SC9863A (28nm) chipset. The device has 32 GB of internal storage as well as a dedicated MicroSD slot.', NULL, NULL, NULL, 2, NULL, 8, 1, NULL, 0, '2023-05-01 14:46:51', '2023-05-01 14:46:51'),
(2, 'Display Size6.5 inches TypeIPS LCD ResolutionHD+ (720 x 1600) ProtectionN/A Features102.0 cm2 (~82.2% screen-to-body ratio) 20:9 ratio (~270 ppi density) Processor ChipsetUnisoc Tiger T612 (12 nm) CPU TypeOcta-core CPU Speed2x1.8 GHz Cortex-A75 & 6x1.8 GHz Cortex-A55 GPUMali-G57 Memory RAM2GB LPDDR4X Internal Storage32GB UFS 2.2 Card SlotUp to 1TB External Memory Rear Camera Resolution8 MP, f/2.0, 27mm (wide), 1/4.0\", 1.12µm, AF FeaturesLED flash, HDR, panorama Video Recording1080p@30fps Front Camera Resolution5 MP, f/2.2, 27mm (wide), 1/5.0\", 1.12µm FeaturesHDR Video Recording720p@30fps Audio SpeakerYes Network & Connectivity SIMDual SIM (Nano-SIM, dual stand-by) Network2G, 3G, 4G Wi-FiWi-Fi 802.11 b/g/n Bluetooth5.0, A2DP, LE GPSGPS, GLONASS, GALILEO, BDS USBmicroUSB 2.0 OTGYes Audio Jack3.5mm OS Operating SystemAndroid 11 Custom UIrealme UI Go Edition Features FingerprintN/A SensorsLight sensor Proximity sensor Acceleration sensor IP RatingN/A Battery TypeLithium-polymer 5000 mAh (non-removable) Fast Charging10W Fast Charging Physical specification Dimension164.1 x 75.6 x 8.5 mm (6.46 x 2.98 x 0.33 in) Weight182 g (6.42 oz) ColorsLake Blue Bamboo Green Denim Black Warranty Information Warranty01-year Official warranty (To claim please visit the nearest Realme Service Center)', NULL, 'The Realme C30 has a 6.5-inch HD+ IPS LCD screen. It is designed with a Full-view minimal notch. The rear camera has an 8 MP resolution, autofocus, LED flash, f/2.2 aperture, and Full HD video recording. The front-facing camera has a resolution of 5 MP. The Realme C30 has a 5000 mAh battery and 10W fast charging. It has 2 GB of RAM, an octa-core CPU that runs at up to 1.8 GHz, and a Mali-G57 GPU. It runs on a Unisoc Tiger T612 (12 nm) chipset. The device has 32 GB of internal storage and a dedicated MicroSD slot.', NULL, NULL, NULL, 2, NULL, 9, 1, NULL, 0, '2023-05-01 14:57:50', '2023-05-01 14:57:50'),
(3, 'Display Size6.82-inch TypeIPS ResolutionHD+ (720x1612) Refresh Rate90Hz ProtectionN/A Features111.7 cm2 (~83.8% screen-to-body ratio) 20:9 ratio (~259 ppi density) Processor ChipsetMediatek Helio G35 (12 nm) CPU TypeOcta-core CPU Speed4x2.3 GHz Cortex-A53 & 4x1.8 GHz Cortex-A53 GPUPowerVR GE8320 Memory RAM4GB Internal Storage128GB Card SlotmicroSDXC (Up to 512GB) Rear Camera Resolution13 MP, f/1.8, (wide), 1/3.1\", 1.12µm, AF QVGA FeaturesDual-LED flash, panorama, HDR Video Recording1080p@30fps Front Camera Resolution8MP FeaturesDual-LED flash Video Recording1080p@30fps Audio SpeakerDual Speakers Audio FeaturesDTS Network & Connectivity SIMDual SIM (Nano-SIM, dual stand-by) Network2G, 3G, 4G Wi-FiWi-Fi 802.11 a/b/g/n/ac, dual-band, Wi-Fi Direct BluetoothYes GPSYes USBUSB Type-C 2.0 OTGYes Audio Jack3.5mm OS Operating SystemAndroid 12 Custom UIXOS 10.6 Features FingerprintRear-mounted SensorsG-Sensor E-Compass Gyroscope (By Software) Light Sensor Proximity Sensor IP RatingN/A Battery TypeLithium-polymer 6000 mAh (non-removable) Fast Charging10W Fast Charging Physical specification Dimension171 x 78 x 8.9 mm (6.73 x 3.07 x 0.35 in) Weight209 g (7.37 oz) ColorsRacing Black Legend White Origin Blue Lucky Green Warranty Information Warranty01-year Official warranty (To claim please visit the nearest Carlcare Service Center)', NULL, 'The Infinix Hot 12 Play has a 6.82-inch HD+ screen. It has a front camera with a punch hole in the center. The rear camera has a 13MP AI dual rear camera with autofocus, f/1.8, dual-LED flash, and other features, as well as Full HD video recording. The front-facing camera has an 8-megapixel resolution. The Infinix Hot 12 Play has a 6000 mAh battery and a 10W fast charging solution. It has 4 GB of RAM, an octa-core CPU that runs at up to 2.3 GHz, and a PowerVR GE8320 GPU. The chipset is a Mediatek Helio G35 (12 nm). The device has an internal storage capacity of 128 GB and a dedicated MicroSD slot. This phone has a fingerprint sensor on the back.', NULL, NULL, NULL, 2, NULL, 18, 1, NULL, 0, '2023-05-02 07:23:29', '2023-05-02 07:23:29'),
(4, 'Display Size6.5 inches TypeIPS LCD ResolutionHD+ (720 x 1600) Brightness420nits Brightness (typical) ProtectionN/A Features102.0 cm2 (~81.6% screen-to-body ratio) 20:9 ratio (~270 ppi density) Processor ChipsetUnisoc Tiger T610 (12 nm) CPU TypeOcta-core CPU Speed2x1.8 GHz Cortex-A75 & 6x1.8 GHz Cortex-A55 GPUMali-G52 MP2 Memory RAM4GB LPDDR4X Internal Storage64GB eMMC 5.1 Card SlotmicroSDXC Rear Camera Resolution50 MP, f/1.8, 26mm (wide), PDAF 2 MP, f/2.4, (macro) 2 MP, f/2.4, (depth) FeaturesLED flash, HDR, panorama Video Recording1080p@30fps Front Camera Resolution8 MP, f/2.0, 26mm (wide), 1/4.0\", 1.12µm FeaturesHDR Video Recording720p@30fps Audio SpeakerYes Network & Connectivity SIMDual SIM (Nano-SIM, dual stand-by) Network2G, 3G, 4G Wi-FiWi-Fi 802.11 b/g/n Bluetooth5.0, A2DP, LE GPSGPS, GLONASS, BDS USBmicroUSB 2.0 OTGYes Audio Jack3.5mm OS Operating SystemAndroid 11 Custom UIrealme R Edition Features FingerprintRear-mounted SensorsLight sensor Proximity sensor Magnetic induction sensor Acceleration sensor IP RatingN/A Battery TypeLithium-polymer 5000 mAh (non-removable) Fast Charging18W Fast Charging Physical specification Dimension164.5 x 76 x 9.1 mm (6.48 x 2.99 x 0.36 in) Weight200 g (7.05 oz) ColorsGlacier Blue Metal Grey Warranty Information Warranty01-year Official warranty (To claim please visit the nearest Realme Service Center)', NULL, 'The Realme C25Y has a 6.5-inch HD+ IPS LCD screen. It features a full-view waterdrop notch. The rear camera has a triple 50+2+2 MP resolution, PDAF, LED flash, depth sensor, dedicated macro camera, and Full HD video recording capabilities. The front-facing camera has an 8-megapixel resolution. The Realme C25Y has a 5000 mAh battery and 18W fast charging. It has 4 GB of RAM, an octa-core CPU that runs at up to 1.8 GHz, and a Mali G52 GPU. A Unisoc T610 (12 nm) chipset powers it. The device has 64 GB of internal storage and a dedicated MicroSD slot. This phone has a fingerprint sensor on the back.', NULL, NULL, NULL, 2, NULL, 17, 1, NULL, 0, '2023-05-02 07:23:35', '2023-05-02 07:23:35');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Camera', '2023-04-30 22:25:32', NULL),
(2, 'Mobile', '2023-04-30 22:25:37', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `scrapers`
--

CREATE TABLE `scrapers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `old_price` varchar(255) DEFAULT NULL,
  `new_price` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `details` varchar(255) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `u_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `desp` text NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `state` int(11) NOT NULL DEFAULT 0,
  `status` enum('pending','approve') NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`id`, `u_id`, `category_id`, `name`, `desp`, `photo`, `state`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Mobile', 'The mobile phone is stimulating one of the most important technological revolutions in human history. This article first presents impacts, challenges, and predictions of mobile phone use. It first indicates that the impact of the mobile phone on society has been predominantly positive while the mobile phone has certain negative attributes. It then discusses multiple ways to overcome mobile technology challenges (e.g., new radio technologies and specialized devices optimized for medical, educational, or “Internet of things” applications). The authors predict that, in the two or three more generations, mobile phones use will have exciting advances to achieve the full benefits, especially in the area of healthcare, education, industry, daily life, learning, and collaborations, which will be more effective, productive, and creative.', 'mobile.jpg', 1, 'pending', '2023-05-01 15:47:20', '2023-05-01 15:47:34'),
(2, 1, 2, 'dfgdfg', 'fgdfgfgf', 'dfgdfg.jpg', 1, 'pending', '2023-05-03 09:16:11', '2023-05-03 09:16:17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `photo`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', '0000-00-00 00:00:00', '$2y$10$RarnvHYAxWJV4x.L8m8rpOya5OgJblS1bw9nuUhS3tdCm4TO/CIOC', '1.jpg', 'Gp9fFej6eV2cR83llYAMifOaPn3wUeYEEblXvh4KDLZ96BHbhSdd7FxJlc99', '2023-03-24 05:09:18', '2023-05-02 17:43:42');

-- --------------------------------------------------------

--
-- Table structure for table `websites`
--

CREATE TABLE `websites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `website` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `websites`
--

INSERT INTO `websites` (`id`, `website`, `created_at`, `updated_at`) VALUES
(1, 'https://www.startech.com.bd/', NULL, NULL),
(3, 'https://www.globalbrand.com.bd/', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `all_products`
--
ALTER TABLE `all_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cameras`
--
ALTER TABLE `cameras`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `camera_singles`
--
ALTER TABLE `camera_singles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_models`
--
ALTER TABLE `category_models`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `category_models_category_name_unique` (`category_name`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comparisons`
--
ALTER TABLE `comparisons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `creatorlogins`
--
ALTER TABLE `creatorlogins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `creatorlogins_email_unique` (`email`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `phones`
--
ALTER TABLE `phones`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phone_singles`
--
ALTER TABLE `phone_singles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scrapers`
--
ALTER TABLE `scrapers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `websites`
--
ALTER TABLE `websites`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `all_products`
--
ALTER TABLE `all_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cameras`
--
ALTER TABLE `cameras`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `camera_singles`
--
ALTER TABLE `camera_singles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category_models`
--
ALTER TABLE `category_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `comparisons`
--
ALTER TABLE `comparisons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `creatorlogins`
--
ALTER TABLE `creatorlogins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `phones`
--
ALTER TABLE `phones`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `phone_singles`
--
ALTER TABLE `phone_singles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `scrapers`
--
ALTER TABLE `scrapers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `websites`
--
ALTER TABLE `websites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
