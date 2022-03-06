SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE `product` (
                            `item_id` int(11) NOT NULL,
                            `item_material` varchar(255) NOT NULL,
                            `item_price` double NOT NULL,
                            `item_image` varchar(255) NOT NULL,
                            `item_brand` varchar(255) NOT NULL,
                            `item_name` varchar(255) NOT NULL,
                            `image_hover` varchar(255) NOT NULL,
                            `type` varchar(255) NOT NULL,
                            `item_type` varchar(255) NOT NULL,
                            `sale` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `cart` (
                        `cart_id` int(11) NOT NULL,
                        `user_id` int(11) NOT NULL,
                        `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `user` (
                        `user_id` int(11) NOT NULL,
                        `first_name` varchar(255) NOT NULL,
                        `last_name` varchar(255) NOT NULL,
                        `register_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `product` (`item_id`, `item_material`, `item_price`, `item_image`, `item_brand`, `item_name`,`image_hover`,`type`,`item_type` ) VALUES
(0020610, 'French Terry', 255000, './assets/product/anh_1.jpg','Sơ Mi Form Rộng','Sơ Mi Cổ Tròn Y Nguyên Bản 18- Ver31','./assets/product/1.jpg','Áo','Ao'),
(0020620, 'Mini Zurry', 300000, './assets/product/anh_2.jpg', 'Áo Thun Form Rộng','Áo Thun Cổ Tròn Y Nguyên Bản 18- Ver31','./assets/product/2.jpg','Áo','Ao'),
(0020630, 'Cotton Plus', 300000,'./assets/product/anh_3.jpg', 'Áo Thun Form Rộng ','Áo Thun 3 Lỗ Thể Thao Y Nguyên Bản Ver37','./assets/product/3.jpg','Áo','Ao'),
(0020640, 'Poly', 300000, './assets/product/anh_4.jpg', 'Sơ Mi Form Rộng','Sơ Mi Cổ Tròn Y Nguyên Bản 18- Ver30','./assets/product/4.jpg','Áo','Ao'),
(0020650, 'Mini Zurry', 255000, './assets/product/anh_5.jpg', 'Sơ Mi Form Rộng','Sơ Mi Cổ Tròn Y Nguyên Bản 18- Ver30','./assets/product/5.jpg','Áo','Ao'),
(0020660, 'Mini Zurry', 150000, './assets/product/balo_1.jpg', 'Balo Form Big','Balo Big Ngân Hà Space Ver1','./assets/product/balo_1.1.jpg','Balo','Balo'),
(0020670, 'Poly', 150000, './assets/product/balo_2.jpg', 'Balo Form Big','Balo Big Y Nguyên Bản 18 Ver2','./assets/product/balo_2.2.jpg','Balo','Balo'),
(0020680, 'Poly', 150000, './assets/product/balo_3.jpg', 'Poly','Balo Big Linh Vật Bbuff Ver1','./assets/product/balo_3.3.jpg','Balo','Balo'),
(0020690, 'Cotton Plus', 300000, './assets/product/balo_4.jpg', 'Poly','Balo Fit Nguyên Bản M3','./assets/product/balo_4.4.jpg','Balo','Balo'),
(0020611, 'Cotton Plus', 300000,  './assets/product/giay_1.jpg', 'Poly','Giày Casual Y Nguyên Bản Ver2','./assets/product/giay_1.1.jpg','Giày','Giay'),
(0020612, 'French Terry', 300000,'./assets/product/quan_1.jpg', 'Poly','Quần Dài Tây Tối Giản B2HG03','NULL','Quần','Quan'),
(0020613, 'Poly', 245000,  './assets/product/quan_2.jpg', 'Poly','Quần Dài Sweatpants Linh Vật Bbuff Ver1','./assets/product/quan_2.2.jpg','Quần','Quan'),
(0020614, 'Poly', 245000,  './assets/product/quan_3.jpg', 'Poly','Quần Dài Tây Tối Giản B2X04','NULL','Quần','Quan'),
(0020615, 'Poly', 245000,  './assets/product/quan_4.jpg', 'Poly','Quần Dài Tây Tối Giản C4CZ3','NULL','Quần','Quan'),
(0020616, 'Poly', 245000,  './assets/product/tat_1.jpg', 'Poly','PKTT Vớ Nguyên Bản V01','./assets/product/tat_1.1.jpg','Phụ Kiện','Pk'),
(0123456, 'French Terry', 100000, './assets/product/pk_1.jpg','Phụ Kiện ','Phụ Kiện Nguyên Bản 18- Ver31','./assets/product/pk_1.1.jpg','Phụ Kiện','Pk');

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `register_date`) VALUES
(1, 'Daily', 'Tuition', '2020-03-28 13:07:17'),
(2, 'Akshay', 'Kashyap', '2020-03-28 13:07:17');

ALTER TABLE `cart`
    ADD PRIMARY KEY (`cart_id`);

ALTER TABLE `product`
    ADD PRIMARY KEY (`item_id`);

ALTER TABLE `user`
    ADD PRIMARY KEY (`user_id`);

ALTER TABLE `cart`
    MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `product`
    MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

ALTER TABLE `user`
    MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;