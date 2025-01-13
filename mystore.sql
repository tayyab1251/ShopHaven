-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 13, 2025 at 07:38 AM
-- Server version: 8.3.0
-- PHP Version: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mystore`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

DROP TABLE IF EXISTS `brands`;
CREATE TABLE IF NOT EXISTS `brands` (
  `brands_id` int NOT NULL AUTO_INCREMENT,
  `brands_title` varchar(100) NOT NULL,
  PRIMARY KEY (`brands_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brands_id`, `brands_title`) VALUES
(1, 'Apple'),
(2, 'Nike'),
(3, 'Samsung'),
(4, 'Sony'),
(5, ' Coca-Cola');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `item_id` int NOT NULL,
  `item_title` varchar(100) NOT NULL,
  `item_price` int NOT NULL,
  `item_quantity` int NOT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`item_id`, `item_title`, `item_price`, `item_quantity`) VALUES
(4, 'Minute Maid Orange Juice', 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `categories_id` int NOT NULL AUTO_INCREMENT,
  `categories_title` varchar(100) NOT NULL,
  PRIMARY KEY (`categories_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categories_id`, `categories_title`) VALUES
(1, 'Smartphones'),
(2, 'Wearables'),
(3, 'Vagetables'),
(4, 'Juices'),
(5, 'Accessories');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `card_number` varchar(255) NOT NULL,
  `card_expiry_month` varchar(100) NOT NULL,
  `card_expiry_year` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `trans_id` varchar(255) NOT NULL,
  `date` datetime(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `name`, `email`, `product_name`, `amount`, `card_number`, `card_expiry_month`, `card_expiry_year`, `status`, `trans_id`, `date`) VALUES
(1, 'Tayyab sabir', 'tayyabsabir72@gmail.com', 'iPhone 15 Pro', '200', '4000056655665556', '3', '2030', 'Pending', 'pi_3QSMbOHJtFRcOOyh1VuTArZ5', '2024-12-04 17:43:06.000000'),
(2, 'Tayyab sabir', 'tayyabsabir72@gmail.com', 'iPhone 15 Pro', '200', '4000056655665556', '3', '2030', 'Pending', 'pi_3QSMbpHJtFRcOOyh0EqdqC1s', '2024-12-04 17:43:33.000000'),
(3, 'Tayyab sabir', 'tayyabsabir72@gmail.com', 'iPhone 15 Pro', '200', '4000056655665556', '3', '2030', 'Pending', 'pi_3QSMbrHJtFRcOOyh0CdH4kNz', '2024-12-04 17:43:35.000000'),
(4, 'Tayyab sabir', 'tayyabsabir72@gmail.com', 'SUBG', '200', '4000056655665556', '22', '2030', 'Pending', 'pi_3QSMcTHJtFRcOOyh1EDsmob8', '2024-12-04 17:44:14.000000');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `product_id` int NOT NULL AUTO_INCREMENT,
  `product_title` varchar(255) NOT NULL,
  `product_description` varchar(255) NOT NULL,
  `product_keywords` varchar(255) NOT NULL,
  `brand_id` int NOT NULL,
  `category_id` int NOT NULL,
  `product_price` varchar(100) NOT NULL,
  `product_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `date` timestamp NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_title`, `product_description`, `product_keywords`, `brand_id`, `category_id`, `product_price`, `product_image`, `date`, `status`) VALUES
(1, 'iPhone 15 Pro', 'Latest iPhone model with advanced camera features.', 'smartphone, iPhone, Apple, 5G', 1, 1, '999', 'apple-iphone-15-pro-1.jpg', '2024-12-01 18:19:01', 'true'),
(2, 'Nike Air Zoom', 'High-performance running shoes designed for speed.', 'running shoes, Nike, Air Zoom', 2, 2, '300', 'category_img_02.jpg', '2024-12-01 18:20:19', 'true'),
(3, 'Samsung Galaxy Watch 6', 'Smartwatch with health tracking and a sleek design,', 'Samsung, Galaxy, Watch, fitness, smartwatch', 3, 1, '250', 'watch (2).jpg', '2024-12-01 18:22:07', 'true'),
(4, 'Minute Maid Orange Juice', '100% pure orange juice with no added sugar, fresh taste', 'juice, orange, Minute Maid, fresh, pure', 5, 4, '5', 'juice.jpg', '2024-12-01 18:23:49', 'true'),
(5, 'Simply Orange Juice', 'Freshly squeezed orange juice with no pulp or preservatives.', 'orange juice, Simply, fresh, no pulp', 5, 4, '3', 'juice (2).jpg', '2024-12-01 18:25:02', 'true'),
(6, 'Fresh Green Capsicum', 'Fresh, crunchy green capsicum perfect for cooking or salads.', 'capsicum, green, vegetable, fresh, healthy', 4, 3, '3', 'capsicam.jpg', '2024-12-01 18:28:16', 'true'),
(7, 'Fossil Leather Watch Band', 'Durable and stylish leather watch strap compatible with Fossil watches.', 'Fossil, leather, watch band, accessories', 4, 5, '2', 'Fossil Leather Watch Band.jpg', '2024-12-01 18:31:26', 'true'),
(8, 'Wrangler Straight Leg Jeans', 'Durable and comfortable straight-leg jeans for everyday wear.', 'Wrangler, jeans, straight leg, denim', 2, 2, '49', 'jean (3).jpg', '2024-12-01 18:34:27', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `image`) VALUES
(2, 'Tayyab', 'tayyabsabir72@gmail.com', '$2y$10$h7/EWL1E/Ya.3bCSvCnxLuiiFQt0KyqEg.OjM.WHqdSUdQ2ytTxA.', 'favicon.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
