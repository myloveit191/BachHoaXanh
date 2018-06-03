-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 03, 2018 at 10:52 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id5759466_myfood`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`) VALUES
(1, 'Rau xanh đậm'),
(2, 'Đậu và Hạt'),
(3, 'Đỏ và Cam'),
(4, 'Tinh Bột'),
(5, 'Khác');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(150) NOT NULL,
  `address` varchar(250) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `birthday` varchar(20) DEFAULT NULL,
  `sex` enum('male','female') DEFAULT 'male'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `fullname`, `email`, `password`, `address`, `phone`, `birthday`, `sex`) VALUES
(1, 'Dương Đình Nghĩa', 'nghia15121991@gmail.com', 'c031b0c6948e58c6a60084e33bc0376e4f84ba9a6256e448cea1eeed28b2c287', 'Thạch Kim, Lộc Hà, Hà Tĩnh', '0927645448', '15/12/1991', 'male'),
(2, 'Dương Đình Tài', 'nghia28121995@gmail.com', 'c031b0c6948e58c6a60084e33bc0376e4f84ba9a6256e448cea1eeed28b2c287', 'Thạch Kim, Lộc Hà, Hà Tĩnh', '0927645448', '28/12/1995', 'male'),
(3, 'Dương Thị Xuân', 'nghia14051994@gmail.com', 'c031b0c6948e58c6a60084e33bc0376e4f84ba9a6256e448cea1eeed28b2c287', 'Mỹ Khánh, Long Xuyên, An Giang', '01678780208', '14/05/1994', 'female'),
(4, 'Nguyễn Văn Phước', 'vanphuoc@gmail.com', 'c031b0c6948e58c6a60084e33bc0376e4f84ba9a6256e448cea1eeed28b2c287', '134/1/15 Cách mạng T8, Phường 10, Quận 3, Tp. Hồ Chí Minh', NULL, NULL, 'male'),
(5, 'Nguyễn Ngọc Hà Trân', 'hatran2018@gmail.com', 'c031b0c6948e58c6a60084e33bc0376e4f84ba9a6256e448cea1eeed28b2c287', '24 Đường số 1 , Phường Bình Trị Đông, quận Bình Thạnh, TP.HCM', NULL, NULL, 'male'),
(6, 'Nguyễn Vĩnh Nam', 'vinhnam2018@gmail.com', 'c031b0c6948e58c6a60084e33bc0376e4f84ba9a6256e448cea1eeed28b2c287', '146 Lầu 4, Hùng Vương, Phường 12, Quận 15, TP.HCM', NULL, NULL, 'male'),
(7, 'Võ Thị Lệ Hằng', 'lehang2018@gmail.com', 'c031b0c6948e58c6a60084e33bc0376e4f84ba9a6256e448cea1eeed28b2c287', '269 Đông Hưng Thuận, Quận 12, Tp.HCM', NULL, NULL, 'female'),
(8, 'Nguyễn Thái Bình', 'thaibinh2018@gmail.com', 'c031b0c6948e58c6a60084e33bc0376e4f84ba9a6256e448cea1eeed28b2c287', '157 Hậu Giang, Phường 5, Quận 6, TP.HCM', NULL, NULL, 'male'),
(9, 'Hoàng Thị Nga', 'thinga2018@gmail.com', 'c031b0c6948e58c6a60084e33bc0376e4f84ba9a6256e448cea1eeed28b2c287', NULL, NULL, NULL, 'female'),
(10, 'Lương Bích Vân', 'bichvan2018@gmail.com', 'c031b0c6948e58c6a60084e33bc0376e4f84ba9a6256e448cea1eeed28b2c287', NULL, NULL, NULL, 'female'),
(11, 'Phạm Nguyễn Tuyết Nhung', 'tuyetnhung2018@gmail.com', 'c031b0c6948e58c6a60084e33bc0376e4f84ba9a6256e448cea1eeed28b2c287', NULL, NULL, NULL, 'female'),
(12, 'Trần Đức Mỹ Liên', 'tranducmylien2018@gmail.com', 'c031b0c6948e58c6a60084e33bc0376e4f84ba9a6256e448cea1eeed28b2c287', NULL, NULL, NULL, 'female'),
(13, 'Phùng Thiên Thơ', 'thientho2018@gmail.com', 'c031b0c6948e58c6a60084e33bc0376e4f84ba9a6256e448cea1eeed28b2c287', NULL, NULL, NULL, 'female'),
(14, 'Huỳnh Linh Thảo', 'linhthao2018@gmail.com', 'c031b0c6948e58c6a60084e33bc0376e4f84ba9a6256e448cea1eeed28b2c287', NULL, NULL, NULL, 'female'),
(15, 'Huỳnh Ngọc Lệ', 'ngocle2018@gmail.com', 'c031b0c6948e58c6a60084e33bc0376e4f84ba9a6256e448cea1eeed28b2c287', NULL, NULL, NULL, 'female');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `sex` enum('male','female') DEFAULT NULL,
  `birthday` varchar(20) DEFAULT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(150) NOT NULL,
  `role` enum('agent','assitant') NOT NULL DEFAULT 'agent'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `fullname`, `sex`, `birthday`, `address`, `email`, `password`, `role`) VALUES
(3, 'Duong Dinh Nghia', 'male', '15/12/1991', 'Thach Kim - Loc Ha - Ha Tinh', 'nghia15121991@gmail.com', 'c031b0c6948e58c6a60084e33bc0376e4f84ba9a6256e448cea1eeed28b2c287', 'agent');

-- --------------------------------------------------------

--
-- Table structure for table `oderdetail`
--

CREATE TABLE `oderdetail` (
  `oder_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantily` int(11) NOT NULL DEFAULT '1',
  `discount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `oders`
--

CREATE TABLE `oders` (
  `id` int(11) NOT NULL,
  `oder_date` varchar(20) NOT NULL,
  `requied_data` varchar(20) NOT NULL,
  `shipped_date` varchar(20) DEFAULT NULL,
  `type_ship_id` int(11) NOT NULL,
  `ship_name` varchar(100) NOT NULL,
  `ship_address` varchar(100) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oders`
--

INSERT INTO `oders` (`id`, `oder_date`, `requied_data`, `shipped_date`, `type_ship_id`, `ship_name`, `ship_address`, `employee_id`, `customer_id`) VALUES
(1, '12/05/2018', '13/05/2018', '', 1, 'ewq', 'ewq', 3, 1),
(2, '11/05/2018', '12/05/2018', NULL, 1, 'avc', 'adsa', 3, 1),
(3, '11/05/2018', '12/05/2018', NULL, 1, 'Dương Đình Nghĩa', 'Thạch Kim - Lộc Hà - Hà Tĩnh', 3, 1),
(4, '11/05/2018', '12/05/2018', NULL, 1, 'Dương Đình Nghĩa', 'Thạch Kim - Lộc Hà - Hà Tĩnh', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `picture` varchar(100) DEFAULT NULL,
  `origin` varchar(100) NOT NULL,
  `unit_price` int(12) NOT NULL,
  `unit` varchar(20) NOT NULL,
  `stock` float NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `picture`, `origin`, `unit_price`, `unit`, `stock`, `supplier_id`, `description`, `category_id`) VALUES
(1, 'Cải thìa', 'public/img/caithia.png', 'Đà Lạt', 12000, 'bó', 100, 1, 'Cải thìa hay còn gọi là cải bẹ trắng. Cải thìa dễ ăn, có thể chế biến được nhiều món vừa ngon vừa tốt cho cơ thể. Chứa nhiều dưỡng chất nhưng lại cung cấp ít calo là đặc điểm nổi bật của loại rau này.\r\n', 1),
(2, 'Rapini ', 'public/img/rapini.png', 'Châu Âu', 50000, 'Kg', 20, 4, 'Broccoli rabe, được biết đến bằng tiếng Ý là rapini, có liên quan chặt chẽ với bông cải xanh nhưng thường được sử dụng như một loại rau xanh nấu. Nó có một hương vị cay và sắc nét mà mọi người có xu hướng yêu thích hoặc ghét (đối với thu âm, tôi là một fan hâm mộ). Một số bó broccoli rabe có hoa nhiều hơn hoặc lớn hơn giống như bông cải xanh - chúng có thể được nấu chín cùng với rau xanh và thêm kết cấu tuyệt vời để các món ăn cuối cùng.', 1),
(3, 'Cải xoăn', 'public/img/caixoan.png', 'Đà lạt', 22000, '100g', 50, 5, 'Rau cải xanh (kale) chính là vua của các loại rau xanh siêu lành mạnh nhất trên hành tinh.Nó chắc chắn là một trong những loại thực phẩm thực vật giàu dinh dưỡng nhất và lành mạnh nhất.Rau cải xanh có chứa tất cả các loại hợp chất có lợi, trong đó có một số dược tính mạnh mẽ.', 1),
(4, 'Cải bó xôi', 'public/img/caiboxoi.png', 'Đà Lạt', 26000, '100g', 44, 3, 'Rau chân vịt, còn gọi rau bó xôi, rau nhà chùa, bắp xôi, rau bina (danh pháp hai phần: Spinacia oleracea) là một loài thực vật có hoa thuộc họ Dền (Amaranthaceae), có nguồn gốc ở miền Trung và Tây Nam Á. Rau chân vịt là loại rau tốt cho sức khỏe, ngoài ra nó còn là một vị thuốc.\r\nCải bó xôi là rau đặc trưng của Đà Lạt, rất nhanh héo, có thể xào, nấu canh và ép nước uống. Ngay tại Đà Lạt, sau khi thu hoạch xong là lá bắt đầu héo, khi đem về tới SG/HN thì sẽ không thể còn tươi. Một số cách bảo quản như hút chân không sẽ giúp rau tươi hơn nhưng không còn ngon nữa. Vuonrau chỉ để nguyên rau và bán. ', 1),
(5, 'Cải xoong', 'public/img/caixoong.png', 'Châu Âu', 23000, '100g', 15, 4, 'Cải xoong (danh pháp hai phần:\r\nNasturtium officinale hoặc Nasturtium microphyllum) là một loại thực vật thủy sinh hay bán thủy sinh, sống lâu năm và lớn nhanh, có nguồn gốc từ châu Âu tới Trung Á và là một trong số những loại rau ăn được con người dùng từ rất lâu. Các loài thực vật này là thành viên của họ Cải (Brassicaceae), về mặt thực vật học là có họ hàng với rau tần và mù tạc — tất cả chúng đều đáng chú ý vì có mùi vị hăng và cay.\r\nThân của cải xoong trôi nổi trên mặt nước và lá của nó là loại lá phức hình lông chim. Cải xoong sản sinh ra các hoa nhỏ màu trắng và xanh lục, mọc thành cụm.\r\n\r\nNasturtium nasturtium-aquaticum và Sisymbrium nasturtium-aquaticum là các từ đồng nghĩa của N. officinale. Nasturtium officinale thứ microphyllum (Boenn. cũ Reich.) Thellung là từ đồng nghĩa của N. microphyllum (ITIS, 2004). Các loài này cũng được liệt kê trong một số nguồn là thuộc về chi Rorippa, mặc dù các chứng cứ phân tử chỉ ra rằng các loài thực vật thủy sinh với thân rỗng có quan hệ họ hàng gần gũi với Cardamine hơn là so với Rorippa (Al-Shehbaz & Price, 1998). Lưu ý là mặc dù tên khoa học của chi cải xoong là Nasturtium, nhưng chi này không có họ hàng gì với các loài sen cạn trong chi Tropaeolum (họ Tropaeolaceae) mà trong tiếng Anh thông thường người ta cũng gọi là \"Nasturtium\".', 1),
(6, 'Cải xoong', 'public/img/caixoong.png', 'Đà Lạt', 15000, '100g', 15, 2, 'Cải xoong (danh pháp hai phần:\r\nNasturtium officinale hoặc Nasturtium microphyllum) là một loại thực vật thủy sinh hay bán thủy sinh, sống lâu năm và lớn nhanh, có nguồn gốc từ châu Âu tới Trung Á và là một trong số những loại rau ăn được con người dùng từ rất lâu. Các loài thực vật này là thành viên của họ Cải (Brassicaceae), về mặt thực vật học là có họ hàng với rau tần và mù tạc — tất cả chúng đều đáng chú ý vì có mùi vị hăng và cay.\r\nThân của cải xoong trôi nổi trên mặt nước và lá của nó là loại lá phức hình lông chim. Cải xoong sản sinh ra các hoa nhỏ màu trắng và xanh lục, mọc thành cụm.\r\n\r\nNasturtium nasturtium-aquaticum và Sisymbrium nasturtium-aquaticum là các từ đồng nghĩa của N. officinale. Nasturtium officinale thứ microphyllum (Boenn. cũ Reich.) Thellung là từ đồng nghĩa của N. microphyllum (ITIS, 2004). Các loài này cũng được liệt kê trong một số nguồn là thuộc về chi Rorippa, mặc dù các chứng cứ phân tử chỉ ra rằng các loài thực vật thủy sinh với thân rỗng có quan hệ họ hàng gần gũi với Cardamine hơn là so với Rorippa (Al-Shehbaz & Price, 1998). Lưu ý là mặc dù tên khoa học của chi cải xoong là Nasturtium, nhưng chi này không có họ hàng gì với các loài sen cạn trong chi Tropaeolum (họ Tropaeolaceae) mà trong tiếng Anh thông thường người ta cũng gọi là \"Nasturtium\".', 1),
(7, 'Cải cầu vòng', 'public/img/caicauvong.png', 'Châu Âu', 70000, '1Kg', 5, 2, 'Rau cải Thuỵ Sỹ (Swiss Chard) là loại rau lá màu xanh được trồng từ nhiều thế kỉ nay. Phần lá có thể có màu xanh đậm hoặc hơi đỏ, phần cọng lớn, có nhiều màu, từ trắng, vàng, đỏ. Cải cầu vồng (Rainbow Chard) là giống cải được trộn bởi nhiều loại cải Thuỵ Sỹ nhiều màu.', 1),
(8, 'Cải ngọt', 'public/img/caingot.png', 'Đà lạt', 30000, '1Kg', 23, 5, 'Theo Đông y, cải ngọt tính ôn, có công dụng thông lợi trường vị, làm đỡ tức ngực, tiêu thực hạ khí... có thể dùng để chữa các chứng ho, táo bón, ăn nhiều cải trắng giúp cho việc phòng ngừa bệnh trĩ và ung thư ruột kết. Cải ngọt có thể chế biến thành các món ăn như cải ngọt xào thịt, canh cải ngọt nấu tôm, rau cải ngọt luộc chấm xì dầu, cải ngọt xào thịt bò, cải ngọt xào chân gà...', 1),
(9, 'Đậu cúc tươi', 'public/img/daucuc.png', 'Mỹ', 100000, '1Kg', 6, 5, 'Đậu cúc có hàm lượng đạm cao hơn các loại ngũ cốc khác, chứa nhiều sinh tố nhóm B, giàu sắt và nhiều chất xơ, ít chất béo và calorie. Chất đạm trong đậu có chất lượng tương đương đạm trong động vật.\r\nĐậu cúc có vị thơm bùi, thường được dùng để chế biến thành nhiều món ăn, từ mặn đến ngọt. Bạn có thể kết hợp đậu cúc với các nguyên liệu khác trong món xào, salad, hầm, súp, cháo hoặc nghiền thành bột làm bánh…', 2),
(10, 'Đậu đen', 'public/img/dauden.png', 'Hà Nội', 43000, '1Kg', 12, 2, 'Đậu đen là loại ngũ cốc cung cấp nhiều chất dinh dưỡng, còn có nhiều tác dụng hay như dưỡng não, bổ thận, giải độc, phòng chống tiểu đường, bệnh tim mạch, làm chậm lão hóa, chữa bệnh gút, bổ tim, giảm ung thư tuyến tiền liệt, ung thư vú,… Ngoài ra đây cũng là nguyên liệu chế biến món chè giải khát nổi tiếng, là loại thực phẩm không thể thiếu tại Việt Nam', 2),
(11, 'Đậu Xanh', 'public/img/dauxanh.png', 'Đà Lạt', 38000, '1Kg', 21, 5, 'Hạt đậu xanh là loại hạt ngũ cốc được sử dụng rất nhiều trong các món ăn của người Việt. Loại hạt này thường được chế biến thành các món chè, nấu canh, nấu xôi,… rất đa dạng. Nó hấp dẫn người dùng bởi màu vàng nhạt đẹp mắt, hương thơm dịu dàng lại có vị thanh bùi.\r\nĐậu xanh là loại hạt chứa nhiều kali, nhưng rất ít natri. Sử dụng các thực phẩm từ đậu xanh sẽ giúp hạ mỡ huyết hiệu quả. Ngoài ra, đậu xanh có thể giúp bảo vệ gan và ngăn ngừa xơ cứng độc mạch', 2),
(12, 'Đậu Trắng', 'public/img/dautrang.png', 'Đà Lạt', 42000, '1Kg', 35, 5, 'Đậu trắng có hàm lượng dinh dưỡng cao và đặt biệt rất giàu Vitamin. Trong 100 gram đậu trắng chứa 2.04 mg vitamin A, 14 mg vitamin C và một lượng nhỏ các vitamin nhóm B, và chỉ chứa 0.4 gram chất béo và khoảng 2.3 gram protein.Thành phần chất khoáng trong loại đậu này cũng khá cao và phong phú, trong đó Natri chiếm khoảng 320 mg, Kali 260 mg và chứa những chất khác như Canxi, Sắt, Magie, Photpho.', 2),
(13, 'Hạt Bí', 'public/img/hatbi.png', 'Đà Lạt', 42000, '1Kg', 12, 5, 'Hạt bí tác dụng có giá trị dinh dưỡng còn có tác dụng chữa bệnh', 2),
(14, 'Hạt hướng dương', 'public/img/hathuongduong.png', 'Đà Lạt', 65000, '1Kg', 11, 5, 'Hạt hướng dương thường được các bạn trẻ sử dụng trong những dịp tết', 2),
(15, 'Cà chua', 'public/img/cachua.png', 'Đà lạt', 23000, '1Kg', 10, 3, 'Quả chín đỏ thì có thể bảo quản ở nhiệt độ 2-5 độ C trong một số ngày. Những biến đổi sau đó là mất màu, giảm độ cứng và giảm hương vị. Duy trì độ ẩm không khí trong quá trình bảo quản từ 85-90% để tránh hiện tượng quả héo và nhăn nheo. \r\nĐể bảo quản, rửa sạch sau đó lau sạch bằng khăn cho khô, đặt lên kệ gỗ hoặc nơi thoáng mát.Bảo quản trong tủ lạnh, xịt một lớp nước mỏng, đặt vào bịch nilon.', 3),
(16, 'Cà rốt', 'public/img/carot.png', 'Hà Nội', 34000, '1Kg', 10, 1, 'Cà rốt (bắt nguồn từ từ tiếng Pháp carotte /kaʁɔt/) (danh pháp khoa học: Daucus carota subsp. sativus) là một loại cây có củ, thường có màu vàng cam, đỏ, vàng, trắng hay tía. Phần ăn được của cà rốt là củ, thực chất là rễ cái của nó, chứa nhiều tiền tố của vitamin A tốt cho mắt.', 3),
(17, 'Ơt chuông đỏ', 'public/img/ot.png', 'Đà lạt', 54000, '1Kg', 12, 3, 'Ớt chuông có nguồn gốc từ vùng nhiệt đới châu Mỹ, nhưng ngày nay được trồng ở khắp nơi trên thế giới. Ớt chuông có màu đỏ, xanh và vàng. Loại quả này chứa nhiều chất dinh dưỡng, đó là lý do tại sao chúng ta nên chọn ăn.', 3),
(18, 'Ớt hiểm', 'public/img/ot.png', 'Hồ Chí Minh', 23000, '1Kg', 25, 1, 'Ớt hiểm là một loại quả của các cây thuộc chi Capsicum của họ Cà (Solanaceae). Ớt là một loại quả gia vị cũng như loại quả làm rau (ớt Đà Lạt) phổ biển trên thế giới', 3),
(19, 'Khoai tây', 'public/img/khoaitay.png', 'Đà lạt', 65000, '1Kg', 10, 4, 'Khoai tây là loài cây nông nghiệp ngắn ngày, trồng lấy củ chứa tinh bột. Chúng là loại cây trồng lấy củ rộng rãi nhất thế giới và là loại cây trồng phổ biến thứ tư về mặt sản lượng tươi - xếp sau lúa, lúa mì và ngô.Lưu trữ khoai tây dài ngày đòi hỏi bảo quản trong điều kiện lạnh.', 3),
(20, 'Bắp ngọt (Ngô)', 'public/img/ngo.png', 'Hà Nội', 20000, 'Chục trái', 120, 2, 'Ngô, bắp hay bẹ (danh pháp hai phần: Zea mays L. ssp. mays) là một loại cây lương thực được thuần canh tại khu vực Trung Mỹ và sau đó lan tỏa ra khắp châu Mỹ. Ngô lan tỏa ra phần còn lại của thế giới sau khi có tiếp xúc của người châu Âu với châu Mỹ vào cuối thế kỷ 15, đầu thế kỷ 16.\r\nNgô là cây lương thực được gieo trồng nhiều nhất tại châu Mỹ (Chỉ riêng tại Hoa Kỳ thì sản lượng đã là khoảng 270 triệu tấn mỗi năm). Các giống ngô lai ghép được các nông dân ưa chuộng hơn so với các giống, thứ ngô thông thường do có năng suất cao vì có ưu thế giống lai. Trong khi một vài giống, thứ ngô có thể cao tới 7 m (23 ft) tại một số nơi, thì các giống ngô thương phẩm đã được tạo ra với chiều cao chỉ khoảng 2,5 m.', 4),
(21, 'Bắp ngọt (Ngô)', 'public/img/ngo.png', 'Hà Nội', 20000, 'Chục trái', 120, 2, 'Ngô, bắp hay bẹ (danh pháp hai phần: Zea mays L. ssp. mays) là một loại cây lương thực được thuần canh tại khu vực Trung Mỹ và sau đó lan tỏa ra khắp châu Mỹ. Ngô lan tỏa ra phần còn lại của thế giới sau khi có tiếp xúc của người châu Âu với châu Mỹ vào cuối thế kỷ 15, đầu thế kỷ 16.\r\nNgô là cây lương thực được gieo trồng nhiều nhất tại châu Mỹ (Chỉ riêng tại Hoa Kỳ thì sản lượng đã là khoảng 270 triệu tấn mỗi năm). Các giống ngô lai ghép được các nông dân ưa chuộng hơn so với các giống, thứ ngô thông thường do có năng suất cao vì có ưu thế giống lai. Trong khi một vài giống, thứ ngô có thể cao tới 7 m (23 ft) tại một số nơi, thì các giống ngô thương phẩm đã được tạo ra với chiều cao chỉ khoảng 2,5 m.', 4),
(22, 'Củ Đậu', 'public/img/cudau.png', 'Đà Lạt', 45000, '1Kg', 13, 2, 'Cây củ đậu là một loại cây leo, có rễ củ hình như con quay lớn. Lá kép gồm 3 lá chét, mỏng. Hình hơi quả trám dài 4-8cm, rộng 4-12cm, những lá phía dưới không đối xứng. Hoa màu tím nhạt, khá lớn, mọc thành chùm dài ở kẽ lá', 4),
(23, 'Củ Năng', 'public/img/cudau.png', 'Hà Nội', 45000, '1Kg', 15, 3, 'Củ năng là loại thựuc phẩm hữu ích cho cơ, khi được sử dụng rất nhiếu để chế biến các món ngon trong đời thường, củ năng dần trở nên vô cùng quen thuộc với tất cả gia đình Việt Nam.', 4),
(24, 'Củ sắn', 'public/img/cusan.png', 'Đà Lạt', 32000, '1Kg', 20, 2, 'Củ sắn là loại thựuc phẩm hữu ích cho cơ, khi được sử dụng rất nhiếu để chế biến các món ngon trong đời thường, củ năng dần trở nên vô cùng quen thuộc với tất cả gia đình Việt Nam.', 4),
(25, 'Khoai sọ', 'public/img/cusan.png', 'Hà Nội', 50000, '1Kg', 32, 3, 'Khoai lang là loại thựuc phẩm hữu ích cho cơ, thường sử dụng tai gia đình các vùng núi và vùng nông thôn Việt Nam.', 4),
(26, 'Khoai lang', 'public/img/khoailang.png', 'Hà Nội', 20000, '1Kg', 20, 1, 'Khoai sọ là loại thựuc phẩm hữu ích cho cơ, sử dụng trong các bữa ăn.', 4),
(27, 'Cải củ', 'public/img/caicu.png', 'Đà Lạt', 34000, '1Kg', 10, 4, 'Cải củ (danh pháp hai phần: Raphanus sativus) là một loại rau ăn củ thuộc họ Cải, được thuần hóa ở châu Âu từ thời kỳ tiền Roman. Hiện nay cải củ được trồng và sử dụng trên khắp thế giới.', 5),
(29, 'Hành lá', 'public/img/hanhla.png', 'Đà Lạt', 14000, '1Kg', 10, 4, 'Hành lá hay hành xanh, hành non là tên gọi chung của các loài thuộc chi Hành. Tất cả hành lá đều có lá rỗng màu xanh (giống hành tây), nhưng lại thiếu một thân hành (củ hành) phát triển hoàn chỉnh. Chúng được trồng bởi hương vị thơm dịu hơn so với hầu hết hành tây và được ăn sống hoặc nấu chín như một loại rau', 5),
(30, 'Bơ', 'public/img/bo.png', 'Đà Lạt', 70000, '1Kg', 10, 1, 'Bơ thường có màu vàng nhạt nhưng cũng thể có gam màu từ vàng thẫm đến gần như trắng. Màu sắc của bơ phụ thuộc vào quy chế lương thực của động vật cho sữa. Trong các quy trình sản xuất công nghệ, màu của bơ căn cứ vào phẩm màu thực phẩm', 5),
(31, 'Cần tây', 'public/img/cantay.png', 'Đà Lạt', 34000, '1Kg', 10, 2, 'Cần tây đã trồng nhiều ở Việt Nam để làm rau ăn, rất ngon khi rau cần tây xào với thịt bò, và thường dùng kèm với món hủ tíu Nam Vang ở miền Nam VN', 5),
(32, 'Tỏi', 'public/img/toi.png', 'Lý Sơn', 34000, '1Kg', 10, 3, 'Tỏi (danh pháp hai phần: Allium sativum) là một loài thực vật thuộc họ Hành, nghĩa là có họ hàng với hành tây, hành ta, hành tím, tỏi tây, v.v... và cũng được con người sử dụng làm gia vị, thuốc, rau như những loài họ hàng của nó.', 5),
(33, 'Dưa chuột', 'public/img/duachuot.png', 'Đà Lạt', 34000, '1Kg', 10, 4, 'Dưa chuột là món ăn bổ dưỡng nhất là trong ngày nóng nực, đem lại cho bạn cảm giác mát mẻ. Dưa chuột giúp giảm cân, điều hòa mức cholesterol, làm đẹp da… và nhiều lợi ích khác nữa.', 5);

-- --------------------------------------------------------

--
-- Table structure for table `ship`
--

CREATE TABLE `ship` (
  `id` int(11) NOT NULL,
  `type_ship` enum('common','Fast','Optimal') NOT NULL,
  `unit_price` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ship`
--

INSERT INTO `ship` (`id`, `type_ship`, `unit_price`) VALUES
(1, 'common', 0),
(2, 'Fast', 10000),
(3, 'Optimal', 22000);

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id` int(11) NOT NULL,
  `supplier_name` varchar(100) NOT NULL,
  `supplier_phone` varchar(15) NOT NULL,
  `supplier_address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id`, `supplier_name`, `supplier_phone`, `supplier_address`) VALUES
(1, 'Công ty TNHH Quốc Tuấn', '0903787904', '8, Trần Văn Quang, Phường 10, Quận Tân Bình, TP.HCM'),
(2, 'Công ty TNHH Vinagrico', '02854280009', '32 Đường 14E , KDC Vĩnh Lộc, P.Bình Hưng Hòa, Q.Tân Bình, Tp.HCM'),
(3, 'Công ty cổ phần chế biến thực phầm Đà Lạt tự nhiên', '02633679379', 'Thôn Phú Hưng, Xã Phú Hội, Huyện Đức Trọng, tỉnh Lâm Đồng'),
(4, 'Công ty xuất khẩu rau Tiền Giang', '02733834616', 'Km1977 Quốc Lộ 1, Xã Long Định, Huyện Châu Thành, Tiền Giang'),
(5, 'Công ty TNHH liên doanh Organik Đà Lạt', '02633970586', 'Thôn Đa Thọ, X. Xuân Thọ, Đà Lạt, Lâm Đồng , Việt Nam');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oderdetail`
--
ALTER TABLE `oderdetail`
  ADD PRIMARY KEY (`oder_id`,`product_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `oders`
--
ALTER TABLE `oders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employee_id` (`employee_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `type_ship_id` (`type_ship_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `supplier_id` (`supplier_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `ship`
--
ALTER TABLE `ship`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `oders`
--
ALTER TABLE `oders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `ship`
--
ALTER TABLE `ship`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `oderdetail`
--
ALTER TABLE `oderdetail`
  ADD CONSTRAINT `oderdetail_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `oderdetail_ibfk_2` FOREIGN KEY (`oder_id`) REFERENCES `oders` (`id`);

--
-- Constraints for table `oders`
--
ALTER TABLE `oders`
  ADD CONSTRAINT `oders_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`),
  ADD CONSTRAINT `oders_ibfk_2` FOREIGN KEY (`type_ship_id`) REFERENCES `ship` (`id`),
  ADD CONSTRAINT `oders_ibfk_3` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`supplier_id`) REFERENCES `supplier` (`id`),
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
