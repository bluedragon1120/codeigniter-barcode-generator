CREATE DATABASE ci3_barcode;
USE ci3_barcode;
 
CREATE TABLE `product` (
  `product_id` int(5) NOT NULL AUTO_INCREMENT,
  `sku_number` varchar(15) NOT NULL,
  `product_name` varchar(100) DEFAULT NULL,
  `product_price` int(11) DEFAULT NULL,
  `bar_code` varchar(100),
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table `product`
INSERT INTO `product` (`sku_number`, `product_name`, `product_price`, `bar_code`) VALUES
(8999909085114, 'SO KLIN Bio-matic Front Load 2kg Box', 59500,'8999909085114.jpg'),
(8999909028234, 'SO KLIN Softergent 1.8kg Bag', 36500,'8999909028234.jpg'),
(8999909096004, 'SO KLIN Softerner 800g Bag', 17000,'8999909096004.jpg');















