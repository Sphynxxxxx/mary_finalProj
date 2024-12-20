-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2024 at 02:37 PM
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
-- Database: `weave_me`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `likes` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `category` varchar(50) NOT NULL,
  `variety` varchar(100) NOT NULL,
  `materials` text DEFAULT NULL,
  `procedures` text DEFAULT NULL,
  `likes` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `image`, `title`, `description`, `category`, `variety`, `materials`, `procedures`, `likes`) VALUES
(31, '364262572_304117305319792_4619480183285039417_n.jpg', 'BAMBOO TABLE LAMP (decorations)', 'Bamboo table lamps offer a warm, natural glow and stylish design.  Their sustainable bamboo construction adds an eco-friendly touch to any room.  The lightweight yet durable bamboo creates a unique and elegant lamp, perfect for adding ambient lighting and a touch of nature to your space.', 'Decorations', 'Bamboo', 'bamboo strips, wood for the base and stem, glue, stain or paint (optional), finishing oil or wax (optional), light bulb socket and cord, light bulb\r\n', 'Constructing a bamboo table lamp starts by selecting appropriately sized bamboo poles for the base and lampshade frame.  The base can be a single, sturdy pole or a more elaborate structure made from multiple pieces joined with strong adhesive and reinforcement.  For the lampshade, a frame is created by weaving or joining thinner bamboo strips into a desired shape.  A lamp kit containing the wiring, socket, and bulb holder is then carefully integrated into the design.  The wiring is concealed within the bamboo structure.  Once assembled, the lamp is thoroughly checked for electrical safety.  A protective finish, such as varnish or lacquer, is applied to seal the bamboo and enhance its appearance.  Finally, a suitable lampshade fabric or material is attached to the frame, completing the table lamp.', 0),
(33, 'acce wallet.jpg', 'BAMBOO WALLET', 'Bamboo wallets provide an eco-friendly and stylish alternative to traditional leather options. They are lightweight, durable, and crafted from sustainable bamboo, showcasing the unique, natural grain patterns of the material.', 'Accessories', 'Bamboo', 'Bamboo strips, needle and thread, zipper, scissors, glue', 'Creating a bamboo wallet involves carefully selecting and preparing thin, flat strips of bamboo.  These strips are then meticulously woven or layered, often using a combination of adhesive and stitching to create a sturdy and compact structure.  Card slots and a money compartment are incorporated into the design during the weaving or layering process.  ', 0),
(34, '30632ceaa64577c50fc1f553730891af.jpg', 'BAMBOO HAND BAG', 'Bamboo handbags offer a stylish and sustainable alternative to traditional bags.  Their lightweight yet durable construction makes them perfect for everyday use.  The natural variations in the bamboo create unique patterns, adding a touch of organic elegance.\r\n', 'Accessories', 'Bamboo', 'Bamboo strips, wood for the handle, glue, beads, finishing oil or wax', 'Creating a bamboo handbag requires specialized tools and skills, typically involving weaving or intricate joining techniques.  First, prepare the bamboo by steaming and shaping it to create pliable strips or slats of consistent width and thickness.', 0),
(35, 'deco plantstand.jpg', 'BAMBOO PLANT STAND ', 'Bamboo plant stands offer a stylish and sustainable way to display your potted plants.  Their natural aesthetic complements various décor styles, adding a touch of organic elegance to any space.  Available in various sizes and designs, bamboo plant stands provide a beautiful and practical solution for showcasing your greenery.\r\n', 'Decorations', 'Bamboo', 'Bamboo strips, wood for the stand, glue, stain or paint, finishing oil or wax', 'Constructing a simple bamboo plant stand begins by selecting sturdy bamboo poles of varying lengths and diameters. For a three-legged stand, cut three equal-length poles for the legs and a shorter pole for the top shelf.  Drill pilot holes at the ends of the leg poles and the center of the top shelf to prevent splitting.  Assemble the legs by joining them at the base using strong adhesive and reinforcing with screws or bamboo dowels.  Ensure the legs are evenly spaced for stability.  Attach the top shelf to the top ends of the legs, again using adhesive and screws or dowels to create a secure connection.  Sand all surfaces smooth, paying close attention to any sharp edges or splinters.  Apply a clear sealant or varnish to protect the bamboo from moisture and insects, allowing it to dry thoroughly.  Once dry, carefully place your potted plant on the top shelf.  For heavier plants, consider adding bracing or additional support beams to the structure for increased stability.  Always ensure the stand is level and stable to prevent accidents.', 0),
(36, 'deco weave table lamp.jpg', 'BAMBOO CANDLE HOLDER', 'A bamboo candle holder offers a natural and elegant way to display your favorite candles.  Its warm, earthy tones complement various décor styles, adding a touch of rustic charm or modern minimalism. The natural variations in the bamboo grain create unique character in each holder, making it a beautiful and eco-friendly addition to any home.', 'Decorations', 'Bamboo', 'Bamboo tube, saw, sandpaper, drill, wood glue, stain or paint (optional), finishing oil or wax (optional)\r\n', 'To craft a simple bamboo candle holder, select a sturdy bamboo pole with a diameter slightly larger than your candle.  Measure and cut the pole to your desired height, ensuring a clean, even cut.  Carefully sand the cut ends and any rough areas on the poles surface for a smooth finish.  If desired, you can lightly sand the entire pole to create a more polished look.  To prevent the candle from rolling, you can create a small indentation or groove around the top of the pole using a chisel or carving tool.  This will help to keep the candle centered and stable.  For added stability, you can optionally create a small base by gluing or screwing a wider piece of bamboo or a wooden disc to the bottom of the pole.  Once you are satisfied with the construction, apply a clear sealant or varnish to protect the bamboo from moisture and to enhance its natural beauty.  Allow the sealant to dry completely before placing your candle inside.  Always ensure adequate ventilation around the candle to prevent fire hazards.', 0),
(37, 'bamboo shelf.jpg', 'BAMBOO SHELF ', 'Bamboo shelves offer a stylish and sustainable storage solution.  Their natural warmth adds a touch of elegance to any room, while their lightweight yet sturdy construction makes them easy to install and use.  Environmentally friendly and surprisingly durable, bamboo shelves provide a beautiful and responsible alternative to traditional shelving. Perfect for books, plants, or decorative items.', 'Furnitures', 'Bamboo', 'Bamboo poles, flat bamboo slats or woven bamboo sheets, drill, thin bamboo sticks, wood screws or wooden dowels/pegs, saw, wood glue, measuring tape, sandpaper, varnish or sealant', 'To construct a bamboo shelf, begin by measuring and cutting bamboo poles to the desired lengths for the shelfs supports and top.  Ensure all cuts are clean and even.  For stability, consider using at least three supports, equally spaced.  Drill pilot holes at the support ends and the shelf top to prevent splitting.  Use strong wood screws or bamboo dowels to securely attach the supports to the shelf top, creating a sturdy frame.  If desired, add additional support beams underneath the shelf for heavier loads.  Sand any rough edges smooth.  For a natural finish, apply a clear sealant to protect the bamboo from moisture and insects.  Alternatively, stain or paint the shelf for a customized look.  Once the sealant or paint is dry, carefully position the shelf against the wall and secure it using appropriate wall anchors and screws.  Always ensure the shelf is securely mounted to prevent accidents.', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`) VALUES
(3, 'sasas', 'qwerty@gmail.com', '$2y$10$nZg4VaOlB7mcEa3zMzHg/uvGm.azHVHHdHHvJ4CRqGT23tjg6tIsC', '2024-12-18 13:35:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_id` (`post_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
