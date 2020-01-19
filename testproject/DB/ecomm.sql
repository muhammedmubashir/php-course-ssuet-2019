/* Database export results for db ecomm */

/* Preserve session variables */
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS;
SET FOREIGN_KEY_CHECKS=0;

/* Export data */

/* Table structure for categories */
CREATE TABLE `categories` (
  `category_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`category_id`),
  UNIQUE KEY `category_id` (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

/* data for Table categories */
INSERT INTO `categories` VALUES (1,"Laptop",0);
INSERT INTO `categories` VALUES (2,"Mobile",0);
INSERT INTO `categories` VALUES (3,"Camera",0);
INSERT INTO `categories` VALUES (4,"Lenovo",1);
INSERT INTO `categories` VALUES (5,"HP",1);
INSERT INTO `categories` VALUES (6,"Dell",1);
INSERT INTO `categories` VALUES (7,"Acer",1);
INSERT INTO `categories` VALUES (8,"Asus",1);
INSERT INTO `categories` VALUES (9,"Sony",1);
INSERT INTO `categories` VALUES (10,"Oppo",2);

/* Table structure for cc_transactions */
CREATE TABLE `cc_transactions` (
  `transaction_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(255) DEFAULT NULL,
  `so_id` int(11) NOT NULL,
  `transdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `processor` varchar(255) NOT NULL,
  `processor_trans_id` varchar(255) NOT NULL,
  `amount` decimal(10,0) NOT NULL,
  `cc_num` varchar(255) DEFAULT NULL,
  `cc_type` varchar(255) DEFAULT NULL,
  `response` text,
  PRIMARY KEY (`transaction_id`),
  UNIQUE KEY `transaction_id` (`transaction_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/* data for Table cc_transactions */

/* Table structure for coupons */
CREATE TABLE `coupons` (
  `coupon_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(255) NOT NULL,
  `description` text,
  `active` tinyint(1) DEFAULT '1',
  `value` decimal(10,0) DEFAULT NULL,
  `multiple` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`coupon_id`),
  UNIQUE KEY `coupon_id` (`coupon_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/* data for Table coupons */

/* Table structure for migrations */
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/* data for Table migrations */
INSERT INTO `migrations` VALUES (1,"2014_10_12_000000_create_users_table",1);
INSERT INTO `migrations` VALUES (2,"2014_10_12_100000_create_password_resets_table",1);
INSERT INTO `migrations` VALUES (3,"2019_10_12_093857_permissions",1);

/* Table structure for order_products */
CREATE TABLE `order_products` (
  `op_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` int(11) DEFAULT NULL,
  `sku` varchar(255) NOT NULL,
  `product_id` int(10) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `description` text,
  `price` decimal(10,0) NOT NULL,
  `quantity` int(11) NOT NULL,
  `subtotal` decimal(10,0) NOT NULL,
  PRIMARY KEY (`op_id`),
  UNIQUE KEY `op_id` (`op_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/* data for Table order_products */

/* Table structure for password_resets */
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/* data for Table password_resets */

/* Table structure for permissions */
CREATE TABLE `permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `permission_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/* data for Table permissions */

/* Table structure for product_categories */
CREATE TABLE `product_categories` (
  `pc_id` int(10) NOT NULL AUTO_INCREMENT,
  `product_id` int(10) DEFAULT NULL,
  `category_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`pc_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/* data for Table product_categories */

/* Table structure for product_images */
CREATE TABLE `product_images` (
  `pi_id` int(10) NOT NULL AUTO_INCREMENT,
  `product_id` int(10) DEFAULT NULL,
  `image_name` varchar(255) DEFAULT NULL,
  `image_path` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`pi_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/* data for Table product_images */
INSERT INTO `product_images` VALUES (1,1,"shoe1.png","uploads/products");
INSERT INTO `product_images` VALUES (2,1,"shoe2.png","uploads/products");
INSERT INTO `product_images` VALUES (3,1,"shoe3.png","uploads/products");
INSERT INTO `product_images` VALUES (4,1,"shoe4.png","uploads/products");

/* Table structure for product_tags */
CREATE TABLE `product_tags` (
  `product_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/* data for Table product_tags */

/* Table structure for products */
CREATE TABLE `products` (
  `product_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `sku` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text,
  `product_status_id` int(11) NOT NULL,
  `regular_price` decimal(10,0) DEFAULT '0',
  `discount_price` decimal(10,0) DEFAULT '0',
  `quantity` int(11) DEFAULT '0',
  `taxable` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`product_id`),
  UNIQUE KEY `product_id` (`product_id`),
  FULLTEXT KEY `idx_products_name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

/* data for Table products */
INSERT INTO `products` VALUES (1,"123","Nike Shoes","shoes",1,"100","90",100,1);
INSERT INTO `products` VALUES (2,"123","Nike Sandal","shoes",1,"100","90",100,1);
INSERT INTO `products` VALUES (3,"123","Nike Caps","shoes",1,"100","90",100,1);
INSERT INTO `products` VALUES (4,"123","Nike t shirts","shoes",1,"100","90",100,1);
INSERT INTO `products` VALUES (5,"123","Nike sports shoes","shoes",1,"100","90",100,1);
INSERT INTO `products` VALUES (6,"123","Nike football shoes","shoes",1,"100","90",100,1);
INSERT INTO `products` VALUES (7,"123","Nike gripper shoes","shoes",1,"100","90",100,1);
INSERT INTO `products` VALUES (8,"123","Nike batminton shoes","shoes",1,"100","90",100,1);
INSERT INTO `products` VALUES (9,"123456","iphone x","Silver 64GB",1,"1000","0",0,0);
INSERT INTO `products` VALUES (10,"123456","iphone x","Silver 64GB",1,"1000","0",0,0);
INSERT INTO `products` VALUES (11,"123456","iphone x","Silver 64GB",1,"1000","0",0,0);
INSERT INTO `products` VALUES (12,"987654","Lenovo ideapad 310","1TB 8GB",1,"2000","0",0,0);

/* Table structure for roles */
CREATE TABLE `roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/* data for Table roles */

/* Table structure for sales_orders */
CREATE TABLE `sales_orders` (
  `so_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `order_date` date NOT NULL,
  `total` decimal(10,0) NOT NULL,
  `coupon_id` int(11) DEFAULT NULL,
  `session_id` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`so_id`),
  UNIQUE KEY `so_id` (`so_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/* data for Table sales_orders */

/* Table structure for tags */
CREATE TABLE `tags` (
  `tag_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`tag_id`),
  UNIQUE KEY `tag_id` (`tag_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/* data for Table tags */

/* Table structure for user_roles */
CREATE TABLE `user_roles` (
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/* data for Table user_roles */

/* Table structure for users */
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/* data for Table users */
INSERT INTO `users` VALUES (1,"Mubashir","mubashir@test.com","$2y$10$Fc3LZn3er7OJBhjoENqAAepXTMxRUzJ5.BPsi0mY15/hf0NnBpkGa","BCPTdYxra1tC5BF9jr3fVDI6gPV0vLFb0NyQTrrWBFQLOi5oA0QGtS9R4Kym","2019-10-12 10:00:46","2019-10-12 10:00:46");

/* Restore session variables to original values */
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
