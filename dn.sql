-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 04, 2024 at 03:33 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dn`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Delicious Fruit 100%', 'Fresh and clean fruit 100%', 'home1-slider2-layer.png', '2024-08-02 17:54:13', '2024-08-02 18:02:58'),
(2, 'Fresh and clean meat 99%', 'Clean, fresh meat inspected by experts', 'home2-slider3-layer.png', '2024-08-02 18:04:58', '2024-08-02 18:04:58'),
(4, 'vegetables 100% Fresh', 'Fresh and clean vegetables are checked by experts', 'home1-slider3-layer.png', '2024-08-02 18:06:15', '2024-08-02 18:06:15');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `sortdescription` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category_id` int NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `image`, `slug`, `description`, `sortdescription`, `created_at`, `updated_at`, `category_id`, `user_id`) VALUES
(2, 'Lorem ipsum dolor, sit amet consectetur elit saepe!', 'Ảnh chụp màn hình 2024-07-05 114240.png', 'lorem-ipsum-dolor-sit-amet-consectetur-elit-saepe', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita in recusandae sit officia ipsa, natus ad voluptatem doloribus dolorum placeat, rem deleniti est accusamus ipsum corporis voluptates soluta totam maiores nostrum reprehenderit quasi? Laboriosam itaque ab odit harum sed aut voluptates, illum unde. Saepe enim ad ut pariatur doloremque quas harum sequi, excepturi tempore exercitationem suscipit quam recusandae corrupti quibusdam. Laboriosam sapiente provident repellat blanditiis ratione nostrum illum asperiores quo cumque in quisquam, non iste aut illo vel, alias debitis!</p><p>Vel ipsa officiis nobis eveniet omnis consequuntur neque quasi, in, optio rerum suscipit totam odio. Alias necessitatibus nulla accusantium voluptatem ipsum voluptatum, vero in impedit nobis cupiditate ea, dicta eos facilis eaque optio laudantium non neque itaque? Possimus officia aut accusamus illum, adipisci, nihil numquam minus eum fugit, beatae minima facilis magni.</p><blockquote><p><i>Quisque semper nunc vitae erat pellentesque, ac placerat arcu consectetur. In venenatis elit ac ultrices convallis. Duis est nisi, tincidunt ac urna sed, cursus blandit lectus. In ullamcorper sit amet ligula ut eleifend. Proin dictum tempor ligula, ac feugiat metus. Sed finibus tortor eu scelerisque scelerisque.</i></p></blockquote><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus sapiente omnis sunt labore mollitia, quaerat incidunt sequi, ut alias accusamus nostrum magni fugit facilis dignissimos illum repellendus et numquam adipisci quos. Eos omnis maiores beatae cum a consequatur magnam sequi neque, at numquam qui ipsam unde veritatis voluptates quam dicta! Ipsam, mollitia illo fuga vel culpa reprehenderit quisquam maxime nesciunt. Sunt quaerat inventore aspernatur quibusdam corrupti numquam mollitia exercitationem rem alias consectetur hic iusto dignissimos nostrum odio, cumque impedit.</p>', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus non sint saepe rem eveniet sit ea esse praesentium!', '2024-07-05 04:51:20', '2024-07-05 05:27:48', 11, 1),
(3, 'THREE TIPS FOR HEALTHY EATING FOR YOUR WHOLE FAMILY', 'Ảnh chụp màn hình 2024-07-05 134703.png', 'three-tips-for-healthy-eating-for-your-whole-family', '<figure class=\"image\"><img style=\"aspect-ratio:1600/1067;\" src=\"https://www.raucuoi.com/public/ckeditor/imagesimages/kien-thuc/nuoc-detox.jpg\" alt=\"cửa hàng rau sạch hữu cơ tại tphcm\" width=\"1600\" height=\"1067\"></figure><p>&nbsp;</p><p>&nbsp;</p><h4><strong>Put the sliced fruit in a bottle/bottle of filtered water</strong></h4><p>Putting a few slices of fruit (and vegetables, and organic <a href=\"http://raucuoivietnhat.com/meo-khu-hoa-chat-cho-rau-cu-qua-ma-ai-cung-nen-biet/ar43.html\">vegetables, of</a> course) in a bottle of filtered water not only adds flavor but also provides a variety of vitamins and minerals. Everyone knows, to ensure our health, we must drink at least 2 liters of water a day. Taking advantage of drinking this water to simultaneously provide more nutrients for the body with such a simple action will help promote the health of the whole family. Although this action cannot replace eating fruits and vegetables every day, it helps the body absorb more vitamins in case you don\'t eat enough. You can use it for a shared water bottle at home, a water bottle to bring to work, or a bottle for your children to bring to school. This simple gesture can help your child enjoy drinking more water. Fruits and vegetables that are not too soft can be easily used such as cucumbers, strawberries, oranges, watermelons, celery, mint leaves, basil. If you soak this water bottle overnight in the refrigerator and add ingredients to add flavor such as honey, vanilla essential oil,... You can also have a bottle of delicious juice, which is both good for health, and helps purify the body and lose weight, the language that people often use is called detox water! Let\'s invent more delicious recipes with your family to enjoy and treat your friends.</p><figure class=\"image\"><img style=\"aspect-ratio:1600/1066;\" src=\"https://www.raucuoi.com/public/ckeditor/imagesimages/kien-thuc/salad-voi-hat.jpg\" alt=\"cửa hàng rau sạch hữu cơ chuẩn Nhật Bản tại tphcm\" width=\"1600\" height=\"1066\"></figure><p>&nbsp;</p><h4><strong>Add fruits and nuts to salads</strong></h4><p>In Vietnamese family meals, a vegetable/soup dish is indispensable. Nowadays, more and more families prefer to eat raw vegetables (of course, also clean vegetables grown and washed <a href=\"http://raucuoivietnhat.com/10-loai-rau-cu-trong-lai-nhieu-lan/ar11.html\"><strong>organically</strong></a>) to keep the vitamins and minerals intact, replacing cooking soup and boiling vegetables to reduce the amount of nutrients in vegetables. To help the family\'s meals have more different vitamins and minerals, don\'t hesitate to cut some raw vegetables into the plate. This also helps to add flavor and create new dishes for the family. In addition, if you forget to eat fruit after a meal, you can also rest assured because you have already eaten some during the meal. Fruits that can be eaten with raw vegetables such as oranges, blueberries, strawberries, bananas, grapes...</p><figure class=\"image\"><img style=\"aspect-ratio:1600/1000;\" src=\"https://www.raucuoi.com/public/ckeditor/imagesimages/kien-thuc/cac-loai-hat.jpg\" alt=\"cửa hàng rau sạch hữu cơ chuẩn Nhật Bản tại tphcm\" width=\"1600\" height=\"1000\"></figure><p>&nbsp;</p><h4><strong>New snacks: nuts</strong></h4><p>Until now, the concept of \'snacking\' has been synonymous with \'not beneficial to health\', \'low in nutrients\' because snacks are usually easy to eat, delicious dishes but contain a lot of fat, sugar, protein, and vitamins. For an extra boost of nutrition, add different nuts to your snack list. Nuts are encouraged to eat as much as possible such as walnuts, almonds, macadamias, pistachios, etc. These nuts are not only delicious but also rich in nutrients not found in other foods such as vegetable fats, omega 3, organic acids, etc. Preparing yourself and your family members a bag of nuts for snacking is also to stay away from other unnutritious snacks.</p>', 'You have researched a lot of ways to eat scientifically and healthily for the whole family, and even used the ingredients of clean organic vegetables that meet Japanese standards of the Laughing Vegetables family, but it still takes most of the time and effort to cook. Here will be some tips for mothers to increase nutrition for the whole family in just a few simple steps.', '2024-07-05 06:49:18', '2024-07-05 06:49:18', 11, 1),
(4, 'VEGETABLES BRING SMOOTH, WHITE AND PINK SKIN TO WOMEN', 'Ảnh chụp màn hình 2024-07-05 141224.png', 'vegetables-bring-smooth-white-and-pink-skin-to-women', '<p><strong>1. Tomatoes</strong></p><p>Tomatoes are one of the fruits that are very good for the skin, which can both provide a source of clean vegetable food for the family and bring benefits to maintain health and whiten the skin. The cost of using tomatoes for beauty is not as expensive as other cosmetics, and especially using tomatoes for beauty is very safe for the skin.</p><p><img src=\"https://www.raucuoi.com/public/ckeditor/imagesimages/kien-thuc/tomato.JPG\" alt=\"Vegetables to beautify the skin\" width=\"1500\" height=\"1125\"></p><p><strong>2. Cucumber</strong></p><p>Cucumber is a vegetable that is quite popular with our sisters to grow on the terrace balcony because cucumbers are eaten very well and contain many vitamins such as B2, C, vitamin E as well as contain many amino acids and tartaric acid. These acids protect against sunburn and freckles, whiten the skin, and alleviate skin allergies. There are many other nutrients in cucumbers such as protein, carbohydrates, carotene, niacin, calcium, phosphorus, iron, etc. <a href=\"http://raucuoivietnhat.com/dua-leo/pr75.html\"><strong>Organic cucumbers</strong></a> are great for beauty care and it is a vegetable that is always refined in a variety of shower gels.</p><p><strong>3. Carrots</strong></p><p>Carrots are a fairly cool root vegetable due to their high content of vitamin A, vitamin C and fiber. It also contains many antioxidants, β-carotene, which can whiten the skin. Carrots are rich in pectin that can help eliminate toxic substances in the human body. In addition, carrots are rich in Karetonoids – the coloring agent of vegetables. <a href=\"https://rausachhuuconhat.wordpress.com/2017/04/26/3-meo-an-uong-tot-cho-suc-khoe-gia-dinh-ban-nen-biet/\"><strong>Organic carrots</strong></a> are considered an herb that heals skin diseases because the substances in carrots help improve skin cells.</p><p><img src=\"https://www.raucuoi.com/public/ckeditor/imagesimages/kien-thuc/cong-dung-ca-rot.jpg\" alt=\"Skin beautification uses of carrots\" width=\"1280\" height=\"800\"></p><p><strong>4. Potatoes</strong></p><p>Potatoes are also a root crop that is quite popular because it is delicious to eat and contains many enzymes and proteins that help the skin grow healthier. Besides, potatoes contain many vitamins that are beneficial to health such as B vitamins, high levels of vitamin C and cellulose to help maintain healthy skin. Potatoes are also high in trace elements, fats, starches, and many other nutrients. To combat aging and diseases in women, all of these ingredients play an extremely important role. Use potato peels or juice instead of eating chips.</p><p><strong>5. White radish</strong></p><p>White radish is one of the vegetables that our sisters like at home with a spicy and fragrant taste. White radish also contains a lot of antioxidant vitamin X that inhibits melanin formation, prevents pigments from darkening the skin, and helps you have a clean and smooth skin. In addition, radishes also help with good digestion – improving skin health.</p><p><img src=\"https://www.raucuoi.com/public/ckeditor/imagesimages/kien-thuc/cu-cai.jpg\" alt=\"Japanese Organic Vegetable Shop\" width=\"960\" height=\"720\"></p><p><strong>6. Peas</strong></p><p>Peas are one of the nuts that have a fairly good effect on health, one of the solutions to help sunburned skin disappear completely. Peas can eradicate dark skin pigmentation of the skin. Beans contain Vitamin A to help moisturize the skin effectively.</p><p><strong>7. Zucchini</strong></p><p>Zucchini is often grown by our sisters as a garden, hanging on the rooftop to help reduce the sun for the house as well as create a green space to provide a source of clean vegetables for the family. In addition, zucchini consists of many trace elements such as zinc and magnesium. Zinc helps to make the skin rosy and healthy. Zucchini has been used as a healing food.</p><p><img src=\"https://www.raucuoi.com/public/ckeditor/imagesimages/kien-thuc/bidao.jpg\" alt=\"Squash detoxifies the skin - Japanese organic clean vegetable store\" width=\"1600\" height=\"1200\"></p><p><strong>8. Asparagus</strong></p><p>Asparagus is a plant that contains selenium-an anti-aging agent that whitens the skin. The use of asparagus has been proven and cures various cancer-causing diseases such as bladder cancer, lung cancer, skin cancer, etc. Asparagus is usually grown in mountainous areas with a long growth period. Asparagus has a unique flavor and can be prepared in a variety of ways.</p><p><strong>9. Mushrooms</strong></p><p>Mushrooms are a food that contains rich nutrients including proteins and vitamins, especially low in fat and cholesterol-free. Eating mushrooms in moderation will make the skin beautiful by promoting the production of the hormone estrogen against aging.</p><p>Mushrooms contain Vitamin D, selenium, and antioxidants that aid in protecting your skin against sun-induced wrinkles.</p><p><strong>10. Bean sprouts</strong></p><p>Bean sprouts are a sprouted vegetable that contains a lot of vitamin A, which is very good for the skin and eyes, in addition, bean sprouts also have the functions of preventing freckles, treating melasma and whitening the skin. Bean sprouts are rich in vitamin C and insulin-boosting fiber in the body. Women should use it to prevent breast cancer, premenopause, menstruation, and menopausal disorders.</p><p><img src=\"https://www.raucuoi.com/public/ckeditor/imagesimages/kien-thuc/gia-dau-xanh.jpg\" alt=\"Japanese Organic Clean Vegetables\" width=\"1600\" height=\"1200\"></p>', 'Women who are beautiful women always want to have smooth pink and white skin like a baby. For example, in the past summer days, our skin pigmentation will become darker and freckles will appear. The main reason is that our skin is exposed to too many UV and UVB rays, so at this time a resting diet plays a huge role in taking care of your beautiful skin. Just by following the below methods correctly, you can get a smooth baby-like skin. Viet Nhat Laughing Vegetable House will provide you with some experience to be able to effectively care for your skin, as well as ensure the effectiveness of these vegetables. Remember to choose clean and organic vegetables to ensure your safety!', '2024-07-05 06:52:25', '2024-07-05 07:12:45', 11, 1),
(5, 'French Onion Steak Pinwheels', 'IMG_3754-1920w.jpg', 'french-onion-steak-pinwheels', '<p>Skirt steak is a flavorful cut of beef that comes from the diaphragm muscle of the cow. It\'s known for its robust beefy flavor and coarse texture. Skirt steak is quite popular in many cuisines, especially in Latin American dishes like fajitas and carne asada. It\'s a versatile cut that can be grilled, broiled, or pan-seared.</p><h4>Ingredients:</h4><p>1 skirt steak</p><p>3 tbsp cold butter</p><p> 2 white onions, thinly sliced</p><p>1 tbsp minced garlic</p><p> 2 tbsp dry white wine</p><p>&nbsp; 1 tbsp chopped fresh rosemary</p><p>1 tbsp chopped fresh parsley</p><p>6-8 slices of Swiss cheese Grated Gruyère to garnish<br><br>1. Preheat oven to 350 F. Begin by heating a large skillet over medium-high heat and melting the 3 tbsp of butter, melting until frothy. Add your thinly sliced onions and garlic, stir frequently as your caramelize onions. This will take around 10-15 minutes, allow them to reach a dark golden color.<br>2. De glaze with the 2 tbsp of white wine and add chopped herbs, allow wine to reduce and set onions aside in a small bowl. 3. Lay skirt steak out on a clean, flat surface. Slice down the middle to create two halves length wise. Lay a sheet of parchment paper over top and use a meat tenderizer to thin the cut of meat, this will help as you roll it to form a pinwheel.<br>4. Lay slices of Swiss cheese down the length of both the flattened skirt steaks. Top the cheese with spoonfuls of caramelized onions down the center. 5. Carefully roll the steak lengthwise to form a pinwheel. Secure with butcher twine and cut the roll in half to form 2 separate pinwheels. Sear in a buttered skillet over medium high heat for 1 minute on each side.<br>6. Place skillet in oven and bake until internal temperature reaches 125 F. Garnish with grated Gruyère and broil until tops are golden brown. Top with fresh parsley and enjoy!<br>&nbsp;</p>', 'These Skirt Steak Pinwheels are an absolute must-have in your arsenal. If you\'re wanting to wow your dinner guests or prepare a flavorful and hearty meal for your family, look no further!', '2024-07-05 06:55:53', '2024-07-05 07:03:39', 13, 1);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int NOT NULL,
  `customer_id` int NOT NULL,
  `ProductID` int NOT NULL,
  `variant_id` int NOT NULL,
  `quantity` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `customer_id`, `ProductID`, `variant_id`, `quantity`, `created_at`, `updated_at`) VALUES
(1, 3, 23, 54, 3, '2024-06-15 08:30:42', '2024-06-22 06:52:10'),
(2, 3, 21, 49, 2, '2024-06-16 15:10:05', '2024-07-17 07:25:06'),
(3, 3, 22, 52, 3, '2024-06-16 19:14:04', '2024-06-20 03:01:10');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `parent_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `parent_id`, `created_at`, `updated_at`) VALUES
(11, 'Vegetables', NULL, '2024-06-14 18:15:55', '2024-06-15 05:12:39'),
(12, 'Fruit', NULL, '2024-06-14 18:16:05', '2024-06-15 05:12:20'),
(13, 'Meat', NULL, '2024-06-14 18:16:40', '2024-06-15 05:28:10'),
(15, 'Seafood 1', NULL, '2024-06-20 04:04:52', '2024-08-03 05:49:53'),
(16, 'tesy', NULL, '2024-08-03 05:50:04', '2024-08-03 05:50:04');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int NOT NULL,
  `customer_id` int NOT NULL,
  `product_id` int NOT NULL,
  `reply_id` int DEFAULT NULL,
  `content` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `rating` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `customer_id`, `product_id`, `reply_id`, `content`, `rating`, `created_at`, `updated_at`) VALUES
(1, 5, 29, NULL, 'rfhgdfg', 5, '2024-07-03 08:27:35', '2024-07-03 08:27:35'),
(3, 5, 23, NULL, 'ngon', 4, '2024-07-03 08:48:35', '2024-07-03 08:48:35'),
(4, 5, 23, NULL, 'cung duoc', 4, '2024-07-03 08:53:42', '2024-07-03 08:53:42'),
(6, 5, 23, NULL, 'che', 1, '2024-07-03 08:55:17', '2024-07-03 08:55:17'),
(8, 4, 23, NULL, 'hay vậy ta', 5, '2024-07-03 09:40:22', '2024-07-03 09:40:22'),
(20, 4, 23, NULL, 'hvs', 5, '2024-07-03 17:40:20', '2024-07-03 17:40:20'),
(21, 4, 23, NULL, 'deo ngon', 2, '2024-07-03 17:40:36', '2024-07-03 17:40:36'),
(22, 4, 23, NULL, 'cung tam', 3, '2024-07-03 17:54:05', '2024-07-03 17:54:05');

-- --------------------------------------------------------

--
-- Table structure for table `commentsblog`
--

CREATE TABLE `commentsblog` (
  `id` int NOT NULL,
  `customer_id` int NOT NULL,
  `blog_id` int NOT NULL,
  `reply_id` int DEFAULT NULL,
  `content` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `commentsblog`
--

INSERT INTO `commentsblog` (`id`, `customer_id`, `blog_id`, `reply_id`, `content`, `created_at`, `updated_at`) VALUES
(1, 4, 4, NULL, 'bổ ích', '2024-07-05 08:18:17', '2024-07-05 08:18:17'),
(2, 4, 4, NULL, 'tiện lợi', '2024-07-05 08:18:48', '2024-07-05 08:18:48'),
(3, 4, 4, NULL, '....', '2024-07-05 08:19:09', '2024-07-05 08:19:09');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` int NOT NULL,
  `quantity` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `mota` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `name`, `code`, `quantity`, `created_at`, `updated_at`, `end_date`, `mota`) VALUES
(2, 'sale 30%', 30, 93, '2024-08-02 17:20:18', '2024-08-03 05:52:19', '2024-08-18', 'sale 30%  now -> 18/8'),
(3, 'sale 5$', 5, 7, '2024-08-02 18:07:04', '2024-08-02 21:15:02', NULL, 'sale 5$');

-- --------------------------------------------------------

--
-- Table structure for table `coupon_order`
--

CREATE TABLE `coupon_order` (
  `id` int NOT NULL,
  `order_id` int NOT NULL,
  `coupon_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `phone` int DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `gender` tinyint DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `password` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `remember_token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `google_id` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `phone`, `address`, `gender`, `image`, `password`, `remember_token`, `google_id`, `created_at`, `updated_at`) VALUES
(3, 'Li Sushang', 'yuuri9918@gmail.com', NULL, NULL, NULL, NULL, '$2y$12$5LD6ngo7gtIa7SW9S6Zlk.DYD72kRurOAkbfeLAXOLBia0nfz1tiO', 'C95ozV2CL72MoleUl7MIIGJJEdeKwa0PP0Iaj3GsFRc98cqgS7CNzcbDvKdV', NULL, '2024-06-09 09:48:57', '2024-06-26 16:23:05'),
(4, 'Nguyễn Đình Ba', 'badinh1218@gmail.com', NULL, NULL, NULL, NULL, '$2y$12$wMBq/bQdTKujTRNNY7gnl.e/XAeNAKzn1H9Y4Dopu2dQyC5wtRXA.', 'JWlqBG0JCRKibGt8uwjI71iQjxknzctxSmaneJtej9dHD6nkbggg6dwSEHDE', NULL, '2024-06-26 12:55:47', '2024-07-03 03:35:41'),
(5, 'Shou', 'vnshou2004@gmail.com', 359774916, 'ấdfcasdfvadesf', 1, 'Ảnh chụp màn hình 2024-06-30 033540.png', '$2y$12$cagE51ENkJsRDk9N3Nutk.A4Ytlnx9.Q/JXtUJOa46ssFLK5JrBuK', 'WCUfpeANLO9btwmtY2AMzjk59gmmrcC31K35v8QHETtBfu4xxnF1C8fiuz9s', '106833716983095579706', '2024-07-03 06:25:47', '2024-07-06 09:43:11'),
(10, 'Đình ba Nguyễn', 'yuuri121804@gmail.com', NULL, NULL, NULL, 'https://lh3.googleusercontent.com/a/ACg8ocJuq0Ti-uDGO0IkPDd8Abb5dqXnGf6zmH95N8zQDL2UTsdJPZ0=s96-c', '$2y$12$gFjwSeDLcoaQcE0Xudrqluf7UZvXgwSghoryn182JUDb2oupck6yW', NULL, '100715163624900766273', '2024-07-06 09:38:21', '2024-07-06 09:38:21');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `failed_jobs`
--

INSERT INTO `failed_jobs` (`id`, `uuid`, `connection`, `queue`, `payload`, `exception`, `failed_at`) VALUES
(1, 'a3a1dc20-1e8b-4d66-b2d5-e823f2acc2f4', 'database', 'default', '{\"uuid\":\"a3a1dc20-1e8b-4d66-b2d5-e823f2acc2f4\",\"displayName\":\"App\\\\Listeners\\\\SendMailAfterForGotPassword\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Events\\\\CallQueuedListener\",\"command\":\"O:36:\\\"Illuminate\\\\Events\\\\CallQueuedListener\\\":20:{s:5:\\\"class\\\";s:41:\\\"App\\\\Listeners\\\\SendMailAfterForGotPassword\\\";s:6:\\\"method\\\";s:6:\\\"handle\\\";s:4:\\\"data\\\";a:1:{i:0;O:25:\\\"App\\\\Events\\\\ForGotPassWord\\\":1:{s:8:\\\"customer\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:20:\\\"App\\\\Models\\\\Customers\\\";s:2:\\\"id\\\";i:3;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}}}s:5:\\\"tries\\\";N;s:13:\\\"maxExceptions\\\";N;s:7:\\\"backoff\\\";N;s:10:\\\"retryUntil\\\";N;s:7:\\\"timeout\\\";N;s:13:\\\"failOnTimeout\\\";b:0;s:17:\\\"shouldBeEncrypted\\\";b:0;s:3:\\\"job\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 'InvalidArgumentException: View [mail.email] not found. in C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\View\\FileViewFinder.php:137\nStack trace:\n#0 C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\View\\FileViewFinder.php(79): Illuminate\\View\\FileViewFinder->findInPaths(\'mail.email\', Array)\n#1 C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Factory.php(138): Illuminate\\View\\FileViewFinder->find(\'mail.email\')\n#2 C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(433): Illuminate\\View\\Factory->make(\'mail.email\', Array)\n#3 C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(408): Illuminate\\Mail\\Mailer->renderView(\'mail.email\', Array)\n#4 C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(320): Illuminate\\Mail\\Mailer->addContent(Object(Illuminate\\Mail\\Message), \'mail.email\', NULL, NULL, Array)\n#5 C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\MailManager.php(592): Illuminate\\Mail\\Mailer->send(\'mail.email\', Array, Object(Closure))\n#6 C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\Support\\Facades\\Facade.php(355): Illuminate\\Mail\\MailManager->__call(\'send\', Array)\n#7 C:\\laragon\\www\\dn\\dn\\app\\Listeners\\SendMailAfterForGotPassword.php(46): Illuminate\\Support\\Facades\\Facade::__callStatic(\'send\', Array)\n#8 C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\Events\\CallQueuedListener.php(114): App\\Listeners\\SendMailAfterForGotPassword->handle(Object(App\\Events\\ForGotPassWord))\n#9 C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Events\\CallQueuedListener->handle(Object(Illuminate\\Foundation\\Application))\n#10 C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#11 C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#12 C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(37): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#13 C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(662): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#14 C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(128): Illuminate\\Container\\Container->call(Array)\n#15 C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(144): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(Illuminate\\Events\\CallQueuedListener))\n#16 C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Events\\CallQueuedListener))\n#17 C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(132): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#18 C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(124): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(Illuminate\\Events\\CallQueuedListener), false)\n#19 C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(144): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}(Object(Illuminate\\Events\\CallQueuedListener))\n#20 C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Events\\CallQueuedListener))\n#21 C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(126): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#22 C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(70): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Events\\CallQueuedListener))\n#23 C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Jobs\\Job.php(102): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)\n#24 C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(439): Illuminate\\Queue\\Jobs\\Job->fire()\n#25 C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(389): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))\n#26 C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(176): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))\n#27 C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(138): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))\n#28 C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(121): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')\n#29 C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#30 C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#31 C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#32 C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(37): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#33 C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(662): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#34 C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(211): Illuminate\\Container\\Container->call(Array)\n#35 C:\\laragon\\www\\dn\\dn\\vendor\\symfony\\console\\Command\\Command.php(326): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#36 C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(181): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#37 C:\\laragon\\www\\dn\\dn\\vendor\\symfony\\console\\Application.php(1096): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#38 C:\\laragon\\www\\dn\\dn\\vendor\\symfony\\console\\Application.php(324): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#39 C:\\laragon\\www\\dn\\dn\\vendor\\symfony\\console\\Application.php(175): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#40 C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(201): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#41 C:\\laragon\\www\\dn\\dn\\artisan(37): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#42 {main}', '2024-06-26 11:40:50'),
(2, '29dc3388-bd92-48bf-a293-ad81296cdfd1', 'database', 'default', '{\"uuid\":\"29dc3388-bd92-48bf-a293-ad81296cdfd1\",\"displayName\":\"App\\\\Listeners\\\\SendMailAfterForGotPassword\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Events\\\\CallQueuedListener\",\"command\":\"O:36:\\\"Illuminate\\\\Events\\\\CallQueuedListener\\\":20:{s:5:\\\"class\\\";s:41:\\\"App\\\\Listeners\\\\SendMailAfterForGotPassword\\\";s:6:\\\"method\\\";s:6:\\\"handle\\\";s:4:\\\"data\\\";a:1:{i:0;O:25:\\\"App\\\\Events\\\\ForGotPassWord\\\":1:{s:8:\\\"customer\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:20:\\\"App\\\\Models\\\\Customers\\\";s:2:\\\"id\\\";i:3;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}}}s:5:\\\"tries\\\";N;s:13:\\\"maxExceptions\\\";N;s:7:\\\"backoff\\\";N;s:10:\\\"retryUntil\\\";N;s:7:\\\"timeout\\\";N;s:13:\\\"failOnTimeout\\\";b:0;s:17:\\\"shouldBeEncrypted\\\";b:0;s:3:\\\"job\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 'Error: Undefined constant \"resetpass\" in C:\\laragon\\www\\dn\\dn\\storage\\framework\\views\\7d027899e9111d6347d878997023c060.php:12\nStack trace:\n#0 C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\Filesystem\\Filesystem.php(123): require()\n#1 C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\Filesystem\\Filesystem.php(124): Illuminate\\Filesystem\\Filesystem::Illuminate\\Filesystem\\{closure}()\n#2 C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Engines\\PhpEngine.php(58): Illuminate\\Filesystem\\Filesystem->getRequire(\'C:\\\\laragon\\\\www\\\\...\', Array)\n#3 C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Engines\\CompilerEngine.php(72): Illuminate\\View\\Engines\\PhpEngine->evaluatePath(\'C:\\\\laragon\\\\www\\\\...\', Array)\n#4 C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php(207): Illuminate\\View\\Engines\\CompilerEngine->get(\'C:\\\\laragon\\\\www\\\\...\', Array)\n#5 C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php(190): Illuminate\\View\\View->getContents()\n#6 C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php(159): Illuminate\\View\\View->renderContents()\n#7 C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(433): Illuminate\\View\\View->render()\n#8 C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(408): Illuminate\\Mail\\Mailer->renderView(\'email\', Array)\n#9 C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(320): Illuminate\\Mail\\Mailer->addContent(Object(Illuminate\\Mail\\Message), \'email\', NULL, NULL, Array)\n#10 C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\MailManager.php(592): Illuminate\\Mail\\Mailer->send(\'email\', Array, Object(Closure))\n#11 C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\Support\\Facades\\Facade.php(355): Illuminate\\Mail\\MailManager->__call(\'send\', Array)\n#12 C:\\laragon\\www\\dn\\dn\\app\\Listeners\\SendMailAfterForGotPassword.php(46): Illuminate\\Support\\Facades\\Facade::__callStatic(\'send\', Array)\n#13 C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\Events\\CallQueuedListener.php(114): App\\Listeners\\SendMailAfterForGotPassword->handle(Object(App\\Events\\ForGotPassWord))\n#14 C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Events\\CallQueuedListener->handle(Object(Illuminate\\Foundation\\Application))\n#15 C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#16 C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#17 C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(37): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#18 C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(662): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#19 C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(128): Illuminate\\Container\\Container->call(Array)\n#20 C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(144): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(Illuminate\\Events\\CallQueuedListener))\n#21 C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Events\\CallQueuedListener))\n#22 C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(132): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#23 C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(124): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(Illuminate\\Events\\CallQueuedListener), false)\n#24 C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(144): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}(Object(Illuminate\\Events\\CallQueuedListener))\n#25 C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Events\\CallQueuedListener))\n#26 C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(126): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#27 C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(70): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Events\\CallQueuedListener))\n#28 C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Jobs\\Job.php(102): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)\n#29 C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(439): Illuminate\\Queue\\Jobs\\Job->fire()\n#30 C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(389): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))\n#31 C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(176): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))\n#32 C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(138): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))\n#33 C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(121): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')\n#34 C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#35 C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#36 C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#37 C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(37): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#38 C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(662): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#39 C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(211): Illuminate\\Container\\Container->call(Array)\n#40 C:\\laragon\\www\\dn\\dn\\vendor\\symfony\\console\\Command\\Command.php(326): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#41 C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(181): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#42 C:\\laragon\\www\\dn\\dn\\vendor\\symfony\\console\\Application.php(1096): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#43 C:\\laragon\\www\\dn\\dn\\vendor\\symfony\\console\\Application.php(324): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#44 C:\\laragon\\www\\dn\\dn\\vendor\\symfony\\console\\Application.php(175): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#45 C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(201): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#46 C:\\laragon\\www\\dn\\dn\\artisan(37): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#47 {main}\n\nNext Illuminate\\View\\ViewException: Undefined constant \"resetpass\" (View: C:\\laragon\\www\\dn\\dn\\resources\\views\\email.blade.php) in C:\\laragon\\www\\dn\\dn\\storage\\framework\\views\\7d027899e9111d6347d878997023c060.php:12\nStack trace:\n#0 C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Engines\\PhpEngine.php(60): Illuminate\\View\\Engines\\CompilerEngine->handleViewException(Object(Error), 0)\n#1 C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Engines\\CompilerEngine.php(72): Illuminate\\View\\Engines\\PhpEngine->evaluatePath(\'C:\\\\laragon\\\\www\\\\...\', Array)\n#2 C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php(207): Illuminate\\View\\Engines\\CompilerEngine->get(\'C:\\\\laragon\\\\www\\\\...\', Array)\n#3 C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php(190): Illuminate\\View\\View->getContents()\n#4 C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php(159): Illuminate\\View\\View->renderContents()\n#5 C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(433): Illuminate\\View\\View->render()\n#6 C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(408): Illuminate\\Mail\\Mailer->renderView(\'email\', Array)\n#7 C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(320): Illuminate\\Mail\\Mailer->addContent(Object(Illuminate\\Mail\\Message), \'email\', NULL, NULL, Array)\n#8 C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\MailManager.php(592): Illuminate\\Mail\\Mailer->send(\'email\', Array, Object(Closure))\n#9 C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\Support\\Facades\\Facade.php(355): Illuminate\\Mail\\MailManager->__call(\'send\', Array)\n#10 C:\\laragon\\www\\dn\\dn\\app\\Listeners\\SendMailAfterForGotPassword.php(46): Illuminate\\Support\\Facades\\Facade::__callStatic(\'send\', Array)\n#11 C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\Events\\CallQueuedListener.php(114): App\\Listeners\\SendMailAfterForGotPassword->handle(Object(App\\Events\\ForGotPassWord))\n#12 C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Events\\CallQueuedListener->handle(Object(Illuminate\\Foundation\\Application))\n#13 C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#14 C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#15 C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(37): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#16 C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(662): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#17 C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(128): Illuminate\\Container\\Container->call(Array)\n#18 C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(144): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(Illuminate\\Events\\CallQueuedListener))\n#19 C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Events\\CallQueuedListener))\n#20 C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(132): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#21 C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(124): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(Illuminate\\Events\\CallQueuedListener), false)\n#22 C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(144): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}(Object(Illuminate\\Events\\CallQueuedListener))\n#23 C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Events\\CallQueuedListener))\n#24 C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(126): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#25 C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(70): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Events\\CallQueuedListener))\n#26 C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Jobs\\Job.php(102): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)\n#27 C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(439): Illuminate\\Queue\\Jobs\\Job->fire()\n#28 C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(389): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))\n#29 C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(176): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))\n#30 C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(138): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))\n#31 C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(121): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')\n#32 C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#33 C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#34 C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#35 C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(37): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#36 C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(662): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#37 C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(211): Illuminate\\Container\\Container->call(Array)\n#38 C:\\laragon\\www\\dn\\dn\\vendor\\symfony\\console\\Command\\Command.php(326): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#39 C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(181): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#40 C:\\laragon\\www\\dn\\dn\\vendor\\symfony\\console\\Application.php(1096): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#41 C:\\laragon\\www\\dn\\dn\\vendor\\symfony\\console\\Application.php(324): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#42 C:\\laragon\\www\\dn\\dn\\vendor\\symfony\\console\\Application.php(175): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#43 C:\\laragon\\www\\dn\\dn\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(201): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#44 C:\\laragon\\www\\dn\\dn\\artisan(37): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#45 {main}', '2024-06-26 11:42:25');

-- --------------------------------------------------------

--
-- Table structure for table `forgotpassword`
--

CREATE TABLE `forgotpassword` (
  `id` int NOT NULL,
  `amount` int DEFAULT NULL,
  `note` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `forgotpassword`
--

INSERT INTO `forgotpassword` (`id`, `amount`, `note`) VALUES
(1, 102132, 'doe hieu kieu gi'),
(2, 102132, 'doe hieu kieu gi'),
(3, 102135232, 'doe hieu kieu gi'),
(4, 102135232, 'doe hieu kieu gi'),
(5, 102135232, 'doe hieu kieu gi'),
(6, 102135232, 'doe hieu kieu gi'),
(7, 102135232, 'doe hieu kieu gi'),
(8, 102135232, 'doe hieu kieu gi'),
(9, 102135232, 'doe hieu kieu gi'),
(10, 102135232, 'doe hieu kieu gi'),
(11, 102135232, 'doe hieu kieu gi');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_06_25_234929_create_jobs_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `orderdetail`
--

CREATE TABLE `orderdetail` (
  `id` int NOT NULL,
  `product_id` int NOT NULL,
  `order_id` int NOT NULL,
  `price` double NOT NULL,
  `quantity` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `size` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `orderdetail`
--

INSERT INTO `orderdetail` (`id`, `product_id`, `order_id`, `price`, `quantity`, `created_at`, `updated_at`, `size`) VALUES
(39, 27, 29, 24.5, 1, '2024-07-31 17:49:55', '2024-07-31 17:49:55', '500g'),
(41, 27, 31, 24.5, 1, '2024-08-01 06:53:16', '2024-08-01 06:53:16', '500g'),
(42, 24, 31, 8, 1, '2024-08-01 06:53:16', '2024-08-01 06:53:16', '1kg'),
(43, 25, 31, 18.5, 2, '2024-08-01 06:53:16', '2024-08-01 06:53:16', '1kg'),
(44, 26, 32, 8.7, 1, '2024-08-02 18:23:04', '2024-08-02 18:23:04', '500g'),
(45, 28, 33, 4.5, 1, '2024-08-02 19:58:49', '2024-08-02 19:58:49', '500g'),
(46, 23, 34, 13.5, 1, '2024-08-02 20:01:38', '2024-08-02 20:01:38', '2kg'),
(47, 27, 35, 48.5, 1, '2024-08-02 20:02:29', '2024-08-02 20:02:29', '1kg'),
(48, 27, 36, 24.5, 1, '2024-08-02 20:36:19', '2024-08-02 20:36:19', '500g'),
(53, 27, 41, 24.5, 1, '2024-08-02 21:28:00', '2024-08-02 21:28:00', '500g'),
(54, 21, 42, 20, 1, '2024-08-02 21:32:37', '2024-08-02 21:32:37', '2kg'),
(55, 27, 45, 72.3, 1, '2024-08-02 21:33:50', '2024-08-02 21:33:50', '2kg'),
(56, 27, 46, 24.5, 1, '2024-08-02 21:44:48', '2024-08-02 21:44:48', '500g'),
(57, 29, 47, 5.8, 1, '2024-08-02 21:47:48', '2024-08-02 21:47:48', '1kg'),
(58, 29, 48, 5.8, 1, '2024-08-02 21:48:41', '2024-08-02 21:48:41', '1kg'),
(59, 27, 49, 24.5, 1, '2024-08-02 21:50:01', '2024-08-02 21:50:01', '500g'),
(60, 27, 50, 48.5, 2, '2024-08-02 21:52:05', '2024-08-02 21:52:05', '1kg'),
(61, 22, 51, 12, 1, '2024-08-02 21:55:10', '2024-08-02 21:55:10', '2kg'),
(62, 26, 52, 18.5, 1, '2024-08-03 05:52:00', '2024-08-03 05:52:00', '1kg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` int NOT NULL,
  `customer_id` int NOT NULL,
  `status_id` int NOT NULL,
  `note` varchar(255) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `total` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `payment` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `subtotal` double DEFAULT NULL,
  `coupon_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `address`, `phone`, `customer_id`, `status_id`, `note`, `code`, `total`, `created_at`, `updated_at`, `payment`, `subtotal`, `coupon_id`) VALUES
(29, 'Nguyễn Đình Ba', 'yuuri121804@gmail.com', 'Đội 4,Sơn Đồng,Tiên Phương,Chương Mỹ, Hà Nội', 359774916, 4, 2, NULL, 'q2CpmsYLxx', 24.5, '2024-07-31 17:49:55', '2024-08-03 05:50:37', 'COD', NULL, NULL),
(31, 'Hiếu', 'hadachieu140504@gmail.com', 'Đội 4,Sơn Đồng,Tiên Phương,Chương Mỹ, Hà Nội', 359774916, 4, 2, 'hiéu gà', '4DyQZ3U562', 69.5, '2024-08-01 06:53:16', '2024-08-02 16:32:05', 'VNPay', NULL, NULL),
(32, 'Nguyễn Đình Ba', 'yuuri121804@gmail.com', 'Đội 4,Sơn Đồng,Tiên Phương,Chương Mỹ, Hà Nội', 359774916, 4, 1, NULL, 'mDFAU4CxP1', 8.7, '2024-08-02 18:23:04', '2024-08-02 18:23:04', 'COD', NULL, NULL),
(33, 'Nguyễn Đình Ba', 'yuuri121804@gmail.com', 'Đội 4,Sơn Đồng,Tiên Phương,Chương Mỹ, Hà Nội', 359774916, 4, 1, NULL, 'm8XLLq4XTl', 4.205, '2024-08-02 19:58:49', '2024-08-02 19:59:02', 'COD', NULL, NULL),
(34, 'Nguyễn Đình Ba', 'yuuri121804@gmail.com', 'Đội 4,Sơn Đồng,Tiên Phương,Chương Mỹ, Hà Nội', 359774916, 4, 1, NULL, 'oVsp8Pm3HE', 13.5, '2024-08-02 20:01:38', '2024-08-02 20:01:38', 'VNPay', NULL, NULL),
(35, 'Nguyễn Đình Ba', 'yuuri121804@gmail.com', 'Đội 4,Sơn Đồng,Tiên Phương,Chương Mỹ, Hà Nội', 359774916, 4, 1, NULL, 'F4DAPcxR0b', 37.506666666666, '2024-08-02 20:02:29', '2024-08-02 20:06:31', 'VNPay', NULL, NULL),
(36, 'Nguyễn Đình Ba', 'yuuri121804@gmail.com', 'Đội 4,Sơn Đồng,Tiên Phương,Chương Mỹ, Hà Nội', 359774916, 4, 1, NULL, 'BHjj14EXPD', 19.5, '2024-08-02 20:36:19', '2024-08-02 20:41:03', 'VNPay', 5, 3),
(37, 'Li Sushang', 'yuuri121804@gmail.com', 'Đội 4,Sơn Đồng,Tiên Phương,Chương Mỹ, Hà Nội', 359774916, 4, 1, NULL, 'dkNiWAUzgy', 26.2, '2024-08-02 21:04:19', '2024-08-02 21:04:19', NULL, NULL, NULL),
(38, 'Nguyễn Đình Ba', 'yuuri121804@gmail.com', 'Đội 4,Sơn Đồng,Tiên Phương,Chương Mỹ, Hà Nội', 359774916, 4, 1, NULL, 'mVIeYApVTQ', 13.5, '2024-08-02 21:08:43', '2024-08-02 21:08:43', NULL, NULL, NULL),
(39, 'Nguyễn Đình Ba', 'yuuri121804@gmail.com', 'Đội 4,Sơn Đồng,Tiên Phương,Chương Mỹ, Hà Nội', 359774916, 4, 1, NULL, 'JxT9ta84f0', 5.5, '2024-08-02 21:11:15', '2024-08-02 21:15:02', NULL, 5, 3),
(40, 'Nguyễn Đình Ba', 'yuuri121804@gmail.com', 'Đội 4,Sơn Đồng,Tiên Phương,Chương Mỹ, Hà Nội', 359774916, 4, 1, NULL, 'kvPrMtv7Ds', 8, '2024-08-02 21:17:32', '2024-08-02 21:17:32', NULL, NULL, NULL),
(41, 'Nguyễn Đình Ba', 'yuuri121804@gmail.com', 'Đội 4,Sơn Đồng,Tiên Phương,Chương Mỹ, Hà Nội', 359774916, 4, 1, NULL, 'Mp3GV2Y9IL', 24.5, '2024-08-02 21:28:00', '2024-08-02 21:28:00', 'VNPay', NULL, NULL),
(42, 'yuuri', 'badinh1218@gmail.com', '21432fsdgsdgfdgsdfgvbsdgv', 987654321, 4, 1, 'dsvsf', 'PcPa1qTtnA', 20, '2024-08-02 21:32:37', '2024-08-02 21:32:37', NULL, NULL, NULL),
(45, 'yuuri', 'badinh1218@gmail.com', '21432fsdgsdgfdgsdfgvbsdgv', 987654321, 4, 1, NULL, '3sXRBthBWi', 72.3, '2024-08-02 21:33:50', '2024-08-02 21:33:50', NULL, NULL, NULL),
(46, 'Nguyễn Đình Ba', 'yuuri121804@gmail.com', 'Đội 4,Sơn Đồng,Tiên Phương,Chương Mỹ, Hà Nội', 359774916, 4, 1, NULL, 'HnsjoY12Wi', 24.5, '2024-08-02 21:44:48', '2024-08-02 21:44:48', NULL, NULL, NULL),
(47, 'Nguyễn Đình Ba', 'yuuri121804@gmail.com', 'Đội 4,Sơn Đồng,Tiên Phương,Chương Mỹ, Hà Nội', 359774916, 4, 1, NULL, '2yaUKh8ikf', 5.8, '2024-08-02 21:47:48', '2024-08-02 21:47:48', NULL, NULL, NULL),
(48, 'Nguyễn Đình Ba', 'yuuri121804@gmail.com', 'Đội 4,Sơn Đồng,Tiên Phương,Chương Mỹ, Hà Nội', 359774916, 4, 1, NULL, 'auERnKHMMx', 5.8, '2024-08-02 21:48:41', '2024-08-02 21:48:43', NULL, NULL, NULL),
(49, 'Nguyễn Đình Ba', 'yuuri121804@gmail.com', 'Đội 4,Sơn Đồng,Tiên Phương,Chương Mỹ, Hà Nội', 359774916, 4, 1, NULL, 'uxIdnKQzRY', 24.5, '2024-08-02 21:50:01', '2024-08-02 21:50:01', 'VNPay', NULL, NULL),
(50, 'Nguyễn Đình Ba', 'yuuri121804@gmail.com', 'Đội 4,Sơn Đồng,Tiên Phương,Chương Mỹ, Hà Nội', 359774916, 4, 1, NULL, 'KNADXyWGfQ', 93.766666666667, '2024-08-02 21:52:05', '2024-08-02 21:52:21', 'VNPay', 3.2333333333333, 2),
(51, 'Nguyễn Đình Ba', 'yuuri121804@gmail.com', 'Đội 4,Sơn Đồng,Tiên Phương,Chương Mỹ, Hà Nội', 359774916, 4, 1, NULL, 'T0MCqefLo2', 8.4, '2024-08-02 21:55:10', '2024-08-02 21:55:18', 'VNPay', 3.6, 2),
(52, 'Nguyễn Đình Ba', 'yuuri121804@gmail.com', 'Đội 4,Sơn Đồng,Tiên Phương,Chương Mỹ, Hà Nội', 359774916, 10, 1, 'gfhhfg', 'FShDBC9shz', 12.95, '2024-08-03 05:52:00', '2024-08-03 05:52:19', 'VNPay', 5.55, 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `origin` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `status` tinyint NOT NULL DEFAULT '0',
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `sortdescription` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `image`, `origin`, `status`, `slug`, `description`, `sortdescription`, `created_at`, `updated_at`, `category_id`) VALUES
(21, 'Red Pepper', 'product5.png', 'US', 0, 'Red-pepper', '<h2><strong>Nam provident sequi</strong></h2><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam provident sequi, nemo sapiente culpa nostrum rem eum perferendis quibusdam, magnam a vitae corporis! Magnam enim modi, illo harum suscipit tempore aut dolore doloribus deserunt voluptatum illum, est porro? Ducimus dolore accusamus impedit ipsum maiores, ea iusto temporibus numquam eaque mollitia fugiat laborum dolor tempora eligendi voluptatem quis necessitatibus nam ab?</p><h2><strong>More Details</strong></h2><ul><li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, dolorum?</li><li>Magnam enim modi, illo harum suscipit tempore aut dolore?</li><li>Numquam eaque mollitia fugiat laborum dolor tempora;</li><li>Sit amet consectetur adipisicing elit. Quo delectus repellat facere maiores.</li><li>Repellendus itaque sit quia consequuntur, unde veritatis. dolorum?</li></ul>', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut numquam ullam is recusandae laborum explicabo id sequi quisquam, ab sunt deleniti quidem ea animi facilis quod nostrum odit! Repellendus voluptas suscipit cum harum dolor sciunt.', '2024-06-14 18:21:32', '2024-06-14 18:21:32', 11),
(22, 'Cabbage', 'product4.png', 'USA', 0, 'cabbage', '<h2><strong>Nam provident sequi</strong></h2><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam provident sequi, nemo sapiente culpa nostrum rem eum perferendis quibusdam, magnam a vitae corporis! Magnam enim modi, illo harum suscipit tempore aut dolore doloribus deserunt voluptatum illum, est porro? Ducimus dolore accusamus impedit ipsum maiores, ea iusto temporibus numquam eaque mollitia fugiat laborum dolor tempora eligendi voluptatem quis necessitatibus nam ab?</p><h2><strong>More Details</strong></h2><ul><li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, dolorum?</li><li>Magnam enim modi, illo harum suscipit tempore aut dolore?</li><li>Numquam eaque mollitia fugiat laborum dolor tempora;</li><li>Sit amet consectetur adipisicing elit. Quo delectus repellat facere maiores.</li><li>Repellendus itaque sit quia consequuntur, unde veritatis. dolorum?</li></ul>', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut numquam ullam is recusandae laborum explicabo id sequi quisquam, ab sunt deleniti quidem ea animi facilis quod nostrum odit! Repellendus voluptas suscipit cum harum dolor sciunt.', '2024-06-14 18:24:52', '2024-06-14 18:24:52', 11),
(23, 'Chicken', 'product9.png', 'Vietnam', 0, 'chicken', '<h2><strong>Nam provident sequi</strong></h2><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam provident sequi, nemo sapiente culpa nostrum rem eum perferendis quibusdam, magnam a vitae corporis! Magnam enim modi, illo harum suscipit tempore aut dolore doloribus deserunt voluptatum illum, est porro? Ducimus dolore accusamus impedit ipsum maiores, ea iusto temporibus numquam eaque mollitia fugiat laborum dolor tempora eligendi voluptatem quis necessitatibus nam ab?</p><h2><strong>More Details</strong></h2><ul><li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, dolorum?</li><li>Magnam enim modi, illo harum suscipit tempore aut dolore?</li><li>Numquam eaque mollitia fugiat laborum dolor tempora;</li><li>Sit amet consectetur adipisicing elit. Quo delectus repellat facere maiores.</li><li>Repellendus itaque sit quia consequuntur, unde veritatis. dolorum?</li></ul>', 'BONE-IN | BREAST PORTION Indulge in a protein-rich Chicken Breast - a succulent and juicy portion of the chicken that bursts with rich flavour in every bite. Low in fat and calorie, it\'s ideal for grilled chicken dishes or stews. Add our premium Chicken Breast to your cart and savour...', '2024-06-14 18:27:47', '2024-06-15 05:56:35', 13),
(24, 'Apple Envy Newzealand', 'envi_big_2f49da11c3904b6391eeba768f7498c5_grande.jpg', 'Newzealand', 0, 'apple-envy-newzealand', '<p>1. Product information</p><ul><li>Envy NewZeland apples have a very beautiful shape, the fruit is large, round, very firm, the skin is red mixed with yellow stripes, which is very eye-catching and luxurious.</li><li>Envy NewZeland apples are considered the most high-end apple variety on the market today, the flesh is creamy yellow, the crispiness is very high, and the rich sweetness when it reaches the throat still leaves a gentle aroma.</li></ul><p><img src=\"https://file.hstatic.net/200000863755/file/envi_big_2f49da11c3904b6391eeba768f7498c5_grande.png\" width=\"600\" height=\"600\"></p><p><br>2. Properties and characteristics</p><ul><li>In 1 Apple Envy there are more than 100 calories. Besides, there is also an additional 17% of fiber values and about 14% of vitamin C is beneficial to health. At the same time, Envy apples also provide users with a number of other nutrients such as boron, Vitamin B and Quercetin</li><li>Envy apples after harvesting will be covered with a layer of beeswax on the outside. This layer of beeswax is able to preserve and preserve the crispiness of the apple.</li><li>The shelf life is from 3-6 months with the condition that the storage is always at 0°C in a cold and anaerobic room environment</li></ul><p><br>3. Storage instructions</p><ul><li>Envy apples after harvesting will be covered with a layer of beeswax on the outside. This layer of beeswax is able to preserve and preserve the crispiness of the apple. The shelf life is from 3-6 months with the condition that the storage is always at 0°C in a cold and anaerobic room environment</li></ul>', '1. Product informationEnvy NewZeland apples have a very beautiful appearance, large, round, very firm, red skin mixed with yellow stripes, very eye-catching and luxurious. Envy NewZeland apple is considered the most high-end apple variety on the market today, the flesh is creamy yellow, the crispiness is very high, the rich sweetness when it comes down to the throat still leaves a gentle aroma.2. CharacteristicsIn 1 apple...', '2024-06-20 03:09:50', '2024-06-20 07:14:39', 12),
(25, 'American Red Cherry', '2_8e2c1562da794c818f20ce4dd64d0de3_grande.jpg', 'American', 0, 'american-red-cherry', '<p><strong>1. American Red Cherry Season</strong></p><p>From May to mid-late August</p><p><strong>2. Product information</strong></p><p>- Improve brain function: cherries are \"food for the brain\" because they contain strong antioxidants. Improves insomnia, helps sleep better thanks to the hormone melatonin.</p><p>- Provides high calorie content to help stabilize the mind, promote a happier and better mood.</p><p>- Cherries are good for the eyes because they contain carotene and retinol and vitamins that are 10 times higher than strawberries and blueberries.</p><p>- The high fiber content in American cherries helps improve digestion and reduce cholesterol.</p><p><img src=\"https://file.hstatic.net/200000863755/file/2_8e2c1562da794c818f20ce4dd64d0de3_grande.png\" width=\"600\" height=\"600\"></p><p><strong>3. Properties and characteristics</strong></p><p>- Breed/Type:</p><p>+ Popular size (8-8,5-9-9,5-10)</p><p>+ Color: Red</p><p>+ Typical taste: Red cherry (also known as cherry) has a juicy red outer skin, sweet to eat.</p><p><img src=\"https://file.hstatic.net/200000863755/file/2_ca7cd6a936a34c72ad789ec406ca8b87_grande.jpg\" width=\"600\" height=\"600\"></p><p>&nbsp;</p><p><strong>4. Storage instructions</strong></p><p>- Always keep cherries cold because they are very sensitive to high temperatures, just leave them for 1 hour at 20°C and you will see a noticeable decrease in quality.</p><p>- Always keep the cherry dry, without water around the bark or stalk as it will absorb water very quickly causing the cherry to soften or boot.</p><p>- Keep cherries at a standard temperature of 0°C, humidity from 90% - 95% will keep their freshness for many days in a row (about 10 days)</p><p><img src=\"https://file.hstatic.net/200000863755/file/3_4cb026c111cf4f0ebcccebae46888126_grande.jpg\" width=\"600\" height=\"600\"></p>', '1. American red cherry season: From May to mid-late 82 months. Product Information- Improve brain function: cherries are \"food for the brain\" because they contain strong antioxidants. Improves insomnia, helps sleep better thanks to the hormone melatonin.- Provides high calorie content to help stabilize the mind, promote a happy, better mood.- Cherry is good for the eyes because it contains 10 times more carotene and retinol and vitamins...', '2024-06-20 03:23:44', '2024-06-20 03:23:44', 12),
(26, 'Canadian Beef Shoulder', 'z33776923943501bbcd5b2a42b8475a75ba83ba45979321216_565x575.jpg', 'Canada', 0, 'canada-beef-shoulder', '<p><strong>BEEF LOIN - STRIPLOIN</strong></p><p>&nbsp;</p><p>- Origin: Canada</p><p>- Store at -18 degrees Celsius</p><p>- Used as steak, BBQ grill, beef shaken</p><p>&nbsp;</p><p>- Defrost naturally in the refrigerator or room temperature before 1 hour before use</p><p>&nbsp;</p><p>- Cook before serving, do not refreeze when thawing</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>- Distributed by: Song Khoi Food Trading Service Co., Ltd.</p><p>- Address : 4 Bis Truong Thi Ngao, Trung My Tay Ward, District 12</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><figure class=\"image\"><img style=\"aspect-ratio:1080/525;\" src=\"https://img.lazcdn.com/g/p/3f0e46cc437930b12a04de4be52ab111.jpg_2200x2200q80.jpg_.webp\" width=\"1080\" height=\"525\"></figure><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><h2>Product characteristics of HCM - Canadian Beef Back Tenderloin cut 2cm thick tray 500gr - Use Steak, when shaking - Fast delivery.</h2><ul><li><p>Trademark</p><p>No Brand</p></li><li><p>SKU</p><p>1567395372_VNAMZ-6635528224</p></li><li><p>Nutritional needs</p><p>Organic</p></li><li><p>Type of Beef Cuts</p><p>Sirloin</p></li><li><p>Delivery_Option_Instant</p><p>Have</p></li><li><p>Organic</p><p>Have</p></li><li><p>Origin</p><p>Canada</p></li></ul>', 'Direct import & certification to ensure food hygiene and safety.\r\n\r\nThe lean core of beef shoulder (also known as Top Blade or Top Muscle Blade) is the meat cut from the intersection between the shoulder and neck of the cow, which is characterized by being soft, fragrant, sweet and slightly crispy due to the interspersed tendons. The lean core of beef shoulder is mostly lean, thick meat, interspersed with tiny fat veins that look very beautiful. The special feature is that although it is lean, this part of the meat is not dry or tough because this is the sedentary muscle of the cow.', '2024-06-20 03:44:32', '2024-06-20 07:15:01', 13),
(27, 'Frozen Japanese Abalone', 'z333888588634484cddad5497408842c6e03d439f4f9994281_565x575.jpg', 'Japan', 0, 'frozen-japanese-abalone', '<h3>Abalone meat is a hard, thick, crispy, sweet mass, has a fragrant taste and is very nutritious. Not only is abalone a food with high economic value for fishermen, but abalone also has high nutritional value, containing a lot of protein, calcium, fat, zinc, vitamins and phosphorus. According to Oriental medicine, abalone has the ability to nourish, increase qi, cool down, strengthen men\'s vitality, help brighten eyes, treat cough, and indigestion,... suitable for all ages and genders.</h3><p><img src=\"https://img.lazcdn.com/g/p/5c36632161f22d931284023268b33fec.jpg_2200x2200q80.jpg_.webp\" width=\"960\" height=\"1280\"></p><p>Japan abalone is a high-quality seafood with high nutrition, contains many vitamins, is a healthy dish, favored by many people.</p><p>Abalone is imported directly from Japan, the No. 1 quality in the market, my side specializes in supplying abalone to large restaurants and hotels.</p><p>- Processing: dishes such as abalone porridge, soup, stew, etc.</p><p>- Packaging: 500gr/vacuum bagged tray to ensure quality</p><p>Abalone is easy to prepare delicious dishes depending on your preferences. Korean abalone meat is soft and crispy, and the sweeter the meat is, the more crushed it is.</p><p>Seafood Shop always puts customer satisfaction as the motivation to help us develop day by day. Commitment to quality products such as descriptions and images. Incorrect quality or damage, please refund 100% of the goods. Eat one by one!</p><p>#FROZEN</p><p>#FROZEN JP</p><p>#FROZENBIG</p>', 'Abalone is a type of hard-shelled, mollusk animal, belonging to the family Haliotidae and the genus Haliotis. They have small but flexible legs that have a strong suction power to adhere to the rock surface.\r\n\r\n✔️ Abalone is a great ingredient for preparing delicious, nutritious dishes. Its taste when cooked is similar to some other snails but it has more meat, sweet, crunchy.', '2024-06-20 04:14:23', '2024-06-20 07:14:53', 15),
(28, 'Red Tomatoes', 'product2.png', 'Vietnam', 0, 'red-tomatoes', '<ul><li>Commit to the right description. Quality ensures safety to the health of users. Variety of designs, colors, sizes. Ensuring to provide products that are sought after in the market today. Please inbox Shop for more advice on Warranty (if any) and Product details.</li></ul><figure class=\"image\"><img style=\"aspect-ratio:601/601;\" src=\"https://img.lazcdn.com/g/p/d2c5e3d15aae910c14d8d5e3508aa30a.jpg_2200x2200q80.jpg_.webp\" width=\"601\" height=\"601\"></figure><h2>Specifications of Red Tomatoes Cocktail</h2>', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut numquam ullam is recusandae laborum explicabo id sequi quisquam, ab sunt deleniti quidem ea animi facilis quod nostrum odit! Repellendus voluptas suscipit cum harum dolor sciunt.', '2024-06-20 05:08:25', '2024-06-20 05:08:25', 11),
(29, 'FRESH PORK THIGH 1', 'fcf7bb0c23a2ab04defd261645ab4846.jpg_720x720q80.jpg_.jpg', 'Vietnam', 0, 'fresh-pork-thigh', '<p><strong>Pork or pork is the muscle part of the pig. This is a food that is considered the most \"healthy\" among foods, pork is very popular in Vietnamese family meals. And perhaps, pork makes people eat it forever without getting bored thanks to each type of pork has its own delicious taste.</strong></p><p>Currently, TAN RICH FOOD sells a full range of pork products, helping consumers easily choose fresh and delicious meat for their families, ensuring quality and suitable prices to be processed into delicious and nutritious dishes in family meals. For pork, TAN RICH FOOD always sets strict criteria in the process of rearing to slaughter and distributing to consumers, specifically requirements:</p><figure class=\"image\"><img style=\"aspect-ratio:1080/1080;\" src=\"https://img.lazcdn.com/g/p/cd0f00e7b06c8663f7a9334f02c445a4.jpg_2200x2200q80.jpg_.webp\" width=\"1080\" height=\"1080\"></figure><p>&nbsp;</p><p><strong>Source of raw materials:</strong> The pigs are carefully selected from the livestock farm.. Pigs brought for slaughter must be healthy pigs, absolutely free of pathogens. Before being slaughtered, pigs are rested for a short time for a few hours so that the quality of pork after slaughter reaches the highest quality. After slaughter, the pigs are inspected and stamped by the State Animal Health Agency before being put on the market for consumption.</p><figure class=\"image\"><img style=\"aspect-ratio:1080/1080;\" src=\"https://img.lazcdn.com/g/p/927ae7eeca19b06e8521195457df2514.jpg_2200x2200q80.jpg_.webp\" width=\"1080\" height=\"1080\"></figure><p>&nbsp;</p><p><strong>Control system:</strong> Pigs are always controlled from captivity to slaughter by the Department of Animal Health, the Ho Chi Minh City Animal Health Center and the local Animal Health Department.</p><figure class=\"image\"><img style=\"aspect-ratio:720/522;\" src=\"https://img.lazcdn.com/g/p/fb5d56949cfefb622ed0cec0c6affcb3.jpg_2200x2200q80.jpg_.webp\" width=\"720\" height=\"522\"></figure><p>&nbsp;</p><p><strong>Slaughter line:</strong> Inspected and licensed by an independent inspection agency at the request of the People\'s Committee of Ho Chi Minh City.</p><p><strong>The process of slaughtering, blending and preserving pork:</strong> Always under the strict control of the Ho Chi Minh City Animal Health Department. Pork is distributed to retail systems at cool temperatures to ensure the best hygienic conditions for the product, helping consumers buy quality products.</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p><br>&nbsp;</p>', 'Pork or pork is the muscle part of the pig. This is a food that is considered the most \"healthy\" among foods, pork is very popular in Vietnamese family meals. And perhaps, pork makes people eat it forever without getting bored thanks to each type of pork has its own delicious taste.\r\n\r\nCurrently, TAN RICH FOOD sells a full range of pork products, helping consumers easily choose fresh and delicious meat for their families, ensuring quality and suitable prices to be processed into delicious and nutritious dishes in family meals. For pork, TAN RICH FOOD always sets strict criteria in the process of rearing to slaughter and distributing to consumers, specifically requirements:', '2024-06-22 16:23:21', '2024-08-03 05:48:37', 11);

-- --------------------------------------------------------

--
-- Table structure for table `productvarians`
--

CREATE TABLE `productvarians` (
  `id` int NOT NULL,
  `price` float NOT NULL,
  `sale_price` float DEFAULT NULL,
  `quatity` int NOT NULL,
  `size` varchar(255) NOT NULL,
  `ProductID` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `productvarians`
--

INSERT INTO `productvarians` (`id`, `price`, `sale_price`, `quatity`, `size`, `ProductID`, `created_at`, `updated_at`) VALUES
(46, 6, 5, 100, '500g', 21, '2024-06-14 18:21:32', '2024-06-14 18:21:32'),
(47, 11, 10, 1000, '1kg', 21, '2024-06-14 18:21:32', '2024-06-14 18:21:32'),
(48, 22, 20, 1000, '2kg', 21, '2024-06-14 18:21:32', '2024-06-14 18:21:32'),
(49, 58, 49, 100, '5kg', 21, '2024-06-14 18:22:14', '2024-06-14 18:22:14'),
(50, 4, 3.5, 100, '500g', 22, '2024-06-14 18:24:52', '2024-06-14 18:24:52'),
(51, 8.5, 7.2, 100, '1kg', 22, '2024-06-14 18:24:52', '2024-06-14 18:24:52'),
(52, 13.5, 12, 55, '2kg', 22, '2024-06-14 18:24:52', '2024-06-14 18:24:52'),
(53, 18.9, 16.9, 40, '5kg', 22, '2024-06-14 18:24:52', '2024-06-14 18:24:52'),
(54, 8, 6.69, 30, '1kg', 23, '2024-06-14 18:27:47', '2024-06-14 18:27:47'),
(55, 15, 13.5, 25, '2kg', 23, '2024-06-14 18:27:47', '2024-06-14 18:27:47'),
(56, 10, 8, 50, '1kg', 24, '2024-06-20 03:09:50', '2024-06-20 03:09:50'),
(57, 18, 16.5, 50, '2kg', 24, '2024-06-20 03:09:50', '2024-06-20 03:09:50'),
(58, 27, 25.5, 50, '5kg', 24, '2024-06-20 03:09:50', '2024-06-20 03:09:50'),
(59, 19.5, 18.5, 50, '1kg', 25, '2024-06-20 03:23:44', '2024-06-20 03:23:44'),
(60, 39, 38.5, 50, '2kg', 25, '2024-06-20 03:23:44', '2024-06-20 03:23:44'),
(61, 10, 8.7, 30, '500g', 26, '2024-06-20 03:44:32', '2024-06-20 03:44:32'),
(62, 20, 18.5, 40, '1kg', 26, '2024-06-20 03:44:32', '2024-06-20 03:44:32'),
(63, 30, 26.2, 50, '2kg', 26, '2024-06-20 03:44:32', '2024-06-20 03:44:32'),
(64, 25, 24.5, 25, '500g', 27, '2024-06-20 04:14:23', '2024-06-20 04:14:23'),
(65, 50, 48.5, 30, '1kg', 27, '2024-06-20 04:14:23', '2024-06-20 04:14:23'),
(66, 75, 72.3, 35, '2kg', 27, '2024-06-20 04:14:23', '2024-06-20 04:14:23'),
(67, 5, 4.5, 30, '500g', 28, '2024-06-20 05:08:25', '2024-06-20 05:08:25'),
(68, 10, 8.9, 50, '1kg', 28, '2024-06-20 05:08:25', '2024-06-20 05:08:25'),
(69, 8, 9, 100, '1kg', 29, '2024-06-22 16:23:21', '2024-08-03 05:49:04'),
(70, 12, 10.5, 1000, '2kg', 29, '2024-06-22 16:23:21', '2024-06-22 16:23:21'),
(71, 100, 122, 222, '5kg', 29, '2024-08-03 05:49:31', '2024-08-03 05:49:31');

-- --------------------------------------------------------

--
-- Table structure for table `product_image`
--

CREATE TABLE `product_image` (
  `id` int NOT NULL,
  `ProductID` int NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'wait for confirmation', NULL, NULL),
(2, 'confirmed', NULL, NULL),
(3, 'waiting for delivery', NULL, NULL),
(4, 'are delivering', NULL, NULL),
(5, 'delivered', NULL, NULL),
(6, 'order confirmed', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Nguyễn Đình Ba', 'yuuri121804@gmail.com', NULL, '$2y$12$S3MIOdoPb5njb7xa0ZvPhuiYFiJLdZU6CCR10Ng2raR2/HmZlirOa', 'd34wMXfuzYVz0kje8Jgar6jKmnK7b1qpz4zcCx46ga3NEgxruTrm9bGr7iZG', '2024-06-09 04:25:43', '2024-06-09 04:25:43');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int NOT NULL,
  `customer_id` int NOT NULL,
  `product_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id`, `customer_id`, `product_id`, `created_at`, `updated_at`) VALUES
(4, 3, 26, '2024-06-21 18:49:04', '2024-06-21 18:49:04'),
(5, 3, 23, '2024-06-21 18:49:17', '2024-06-21 18:49:17'),
(7, 3, 25, '2024-06-21 19:34:55', '2024-06-21 19:34:55'),
(8, 3, 28, '2024-06-24 15:06:31', '2024-06-24 15:06:31'),
(9, 3, 24, '2024-06-24 15:06:43', '2024-06-24 15:06:43'),
(10, 4, 25, '2024-07-03 03:37:21', '2024-07-03 03:37:21'),
(11, 4, 24, '2024-07-03 03:37:25', '2024-07-03 03:37:25'),
(12, 4, 29, '2024-07-06 06:36:22', '2024-07-06 06:36:22'),
(13, 4, 28, '2024-07-19 08:50:23', '2024-07-19 08:50:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `ProductID` (`ProductID`),
  ADD KEY `variant_id` (`variant_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `commentsblog`
--
ALTER TABLE `commentsblog`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog_id` (`blog_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupon_order`
--
ALTER TABLE `coupon_order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `coupon_id` (`coupon_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `forgotpassword`
--
ALTER TABLE `forgotpassword`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `status_id` (`status_id`),
  ADD KEY `coupon_id` (`coupon_id`);

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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoryID` (`category_id`);

--
-- Indexes for table `productvarians`
--
ALTER TABLE `productvarians`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ProductID` (`ProductID`);

--
-- Indexes for table `product_image`
--
ALTER TABLE `product_image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ProoductID` (`ProductID`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `product_id` (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `commentsblog`
--
ALTER TABLE `commentsblog`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `coupon_order`
--
ALTER TABLE `coupon_order`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `forgotpassword`
--
ALTER TABLE `forgotpassword`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orderdetail`
--
ALTER TABLE `orderdetail`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `productvarians`
--
ALTER TABLE `productvarians`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `product_image`
--
ALTER TABLE `product_image`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `blogs_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`ProductID`) REFERENCES `products` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `cart_ibfk_3` FOREIGN KEY (`variant_id`) REFERENCES `productvarians` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `commentsblog`
--
ALTER TABLE `commentsblog`
  ADD CONSTRAINT `commentsblog_ibfk_1` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `commentsblog_ibfk_2` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `coupon_order`
--
ALTER TABLE `coupon_order`
  ADD CONSTRAINT `coupon_order_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `coupon_order_ibfk_2` FOREIGN KEY (`coupon_id`) REFERENCES `coupons` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD CONSTRAINT `orderdetail_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `orderdetail_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`status_id`) REFERENCES `status` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`coupon_id`) REFERENCES `coupons` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `productvarians`
--
ALTER TABLE `productvarians`
  ADD CONSTRAINT `productvarians_ibfk_1` FOREIGN KEY (`ProductID`) REFERENCES `products` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `product_image`
--
ALTER TABLE `product_image`
  ADD CONSTRAINT `product_image_ibfk_1` FOREIGN KEY (`ProductID`) REFERENCES `products` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `wishlist_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `wishlist_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
