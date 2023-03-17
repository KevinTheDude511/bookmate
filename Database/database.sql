-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2023 at 05:40 PM
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
-- Database: `bookmate`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `bookID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `uploadDate` date NOT NULL,
  `ratingScore` float NOT NULL DEFAULT 0,
  `ratingNum` int(11) NOT NULL DEFAULT 0,
  `reviewNum` int(11) NOT NULL DEFAULT 0,
  `overview` varchar(2000) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `imgURL` varchar(255) NOT NULL DEFAULT 'img/books/placeholder.jpg',
  `author` varchar(255) NOT NULL,
  `uploadUser` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`bookID`, `name`, `uploadDate`, `ratingScore`, `ratingNum`, `reviewNum`, `overview`, `genre`, `imgURL`, `author`, `uploadUser`) VALUES
(1, 'Anh Không Thích Thế Giới Này, Anh Chỉ Thích Em ', '2023-03-13', 7, 10, 5, 'Cuốn tiểu thuyết \"Anh không thích thế giới này, anh chỉ thích em\" là câu truyện tình đời thực ngọt ngào, nhẹ nhàng, giản dị và hài hước của Kiều Nhất - nữ chính trong truyện và người chồng bí mật của cô - F kun. Khi họ còn là học sinh cấp 3, họ đã từng cùng nhau yêu đương, đã từng chia xa nhưng định mệnh đã kết nối bọn họ lại một lần nữa. Tình yêu của họ bình dị, đơn giản, chỉ là cùng nhau trải qua những ngày bình thường, cùng nhau cố gắng, tuy nhiên lại khiến cho bao người ngưỡng mộ.', 'Ngôn Tình', 'img/books/Anh Không Thích Thế Giới Này, Anh Chỉ Thích Em.jpg', 'Kiều Nhất', 'Joe'),
(2, 'Không Gia Đình', '2022-02-28', 9, 62, 23, '\"Không Gia Đình\" là một trong những tác phẩm nổi tiếng nhất của nhà văn người Pháp Hector Malot. \"Không Gia Đình\" theo chân cậu bé Rémi, một đứa trẻ mồ côi đã bị bán vào làm nô lệ cho một gia đình lưu động. Từ đó, cậu phải trải qua những khó khăn và thử thách để tìm kiếm gia đình của mình. Trong hành trình đầy gian nan, Rémi đã gặp gỡ nhiều nhân vật đa dạng, từ những người tốt bụng đến những kẻ ác độc, và đã học được nhiều bài học về tình yêu thương, sự đoàn kết và sự kiên trì. Tác phẩm đã rất thành công trong việc kết hợp giữa các yếu tố truyền thống của tiểu thuyết phiêu lưu và tình cảm gia đình, và đã trở thành nguồn cảm hứng lớn cho nhiều tác phẩm văn học và phim ảnh sau này.', 'Phiêu Lưu, Hư Cấu', 'img/books/Không Gia Đình.jpg', 'Hector Malot', 'Sky'),
(3, 'Ông Già Và Biển Cả ', '2022-11-30', 8.8, 57, 17, '\"Ông già và biển cả\" là câu chuyện về một ông ngư dân già yếu tên Santiago, thường hay bị người khác coi thường vì đã không bắt được con cá to nào trong nhiều năm. Một ngày, ông quyết định đi xa đến trung tâm của vùng biển để bắt một con cá lớn hơn. Tuy đã bắt được con cá lớn, ông phải đấu tranh và đánh đổi tất cả những gì mình có để giữ lấy con cá và vượt qua thử thách. Tác phẩm này đã truyền cảm hứng cho nhiều người với thông điệp về sự kiên trì và sức mạnh bên trong con người.', 'Phiêu Lưu, Hư Cấu', 'img/books/Ông Già Và Biển Cả.jpg', 'Ernest Hemingway', 'Kana'),
(4, 'Hoàng Tử Bé', '2022-06-05', 9.6, 54, 20, '\"Hoàng tử bé\" kể về chuyến phiêu lưu của một phi hành gia bị mắc kẹt trên sa mạc Sahara. Trong khi đang sửa chữa máy bay của mình, anh gặp một cậu bé nhỏ tên là Hoàng tử bé. Cậu bé đã kể cho anh về cuộc hành trình của mình từ hành tinh của mình đến Trái Đất, và trong quá trình đó, cậu đã gặp gỡ nhiều nhân vật đa dạng và học được nhiều bài học về tình yêu, tình bạn và sự trưởng thành. Tác phẩm này còn được coi là một trong những tác phẩm thiếu nhi hay nhất mọi thời đại, nhưng cũng được đánh giá cao bởi người lớn vì sự sâu sắc và tầm ảnh hưởng của nó.', 'Hư Cấu, Sách Thiếu Nhi', 'img/books/Hoàng Tử Bé.jpg', 'Antoine de Saint-Exupéry', 'Joe'),
(5, 'Sword Art Online ', '2023-03-04', 7.8, 40, 23, '\"Sword Art Online\" (SAO) là một tiểu thuyết Nhật Bản của tác giả Reki Kawahara, kể về Aincrad, một thế giới ảo nơi người chơi có thể tham gia vào trò chơi nhập vai (MMORPG) bằng cách sử dụng một thiết bị thực tế ảo gọi là NerveGear. Tuy nhiên, khi các người chơi đăng nhập vào game, họ bị bắt trong game và không thể đăng xuất. Nhân vật chính của câu chuyện là Kirito, một game thủ giỏi nhất trong game, cố gắng tìm cách thoát ra khỏi thế giới ảo và cứu tất cả những người khác đang bị bắt trong game. SAO được đánh giá cao về cốt truyện hấp dẫn, đầy kịch tính và những tình tiết hấp dẫn đan xen, và hiện là một trong những tiểu thuyết có tên tuổi nhất ở Nhật Bản.', 'Hư Cấu, Hành Động', 'img/books/Sword Art Online.jpg', 'Kawahara Reki', 'Joe'),
(6, 'Doraemon Và Binh Đoàn Người Sắt', '2022-07-05', 8.5, 78, 32, '\"Doraemon và binh đoàn người sắt\" là một tác phẩm manga của tác giả Fujiko F. Fujio, kể về cuộc chiến của Doraemon, Nobita và nhóm bạn chống lại sự xâm lược của từ một binh đoàn robot đến từ một hành tinh anh em của Trái Đất, do Thượng Đế tạo ra. Bên cạnh các trận đánh kịch tính, tác phẩm cũng được đánh giá cao vì lồng ghép những bài học ý nghĩa và thông điệp giáo dục cho trẻ em xuyên suốt diễn biến câu chuyện.', 'Hư Cấu, Sách Thiếu Nhi', 'img/books/Doraemon Và Binh Đoàn Người Sắt.jpg', 'Fujiko F. Fujio', 'Joe'),
(7, 'Doraemon Và Cuộc Phiêu Lưu Vào Lòng Đất', '2022-12-31', 8.6, 68, 31, 'Câu chuyện bắt đầu khi Doraemon và các bạn của mình nhận được thư mời việc khám phá một khu vực chưa được khai quật, và khi đang khám phá hang động, Doraemon và các bạn của mình bất ngờ rơi vào một hố sâu và lạc vào một thế giới khác trong lòng đất. Tại đây, họ phải đối mặt với nhiều thử thách và nguy hiểm, và phải tìm cách thoát ra để trở về thế giới bên ngoài. Câu chuyện này được đánh giá cao về tính tưởng tượng và sáng tạo, cùng với việc lồng ghép những bài học ý nghĩa về tình bạn, sự đoàn kết và lòng dũng cảm.', 'Hư Cấu, Sách Thiếu Nhi', 'img/books/Doraemon Và Cuộc Phiêu Lưu Vào Lòng Đất.jpg', 'Fujiko F. Fujio', 'Sky'),
(8, 'Truyện Ngụ Ngôn Andersen', '2021-05-04', 9, 47, 21, 'Truyện ngụ ngôn Andersen là một tuyển tập các câu chuyện ngắn của tác giả Hans Christian Andersen, một nhà văn, nhà thơ và tác giả truyện ngắn người Đan Mạch. Trong tuyển tập này, có nhiều câu chuyện nổi tiếng, từ lâu đã phổ biến với mọi người, như \"Thiên nga đen\", \"Nhà vua trên đồi\", \"Cô bé quàng khăn đỏ\", \"Chú sâu\", \"Cô bé bán diêm\", \"Hoàng tử ếch\" và \"Nàng tiên cá\". Các truyện ngụ ngôn của Andersen được viết với mục đích giáo dục và đưa ra những bài học ý nghĩa về đạo đức, nhân văn và tình yêu thương.', 'Hư Cấu, Sách Thiếu Nhi', 'img/books/Truyện Ngụ Ngôn Andersen.jpg', 'Hans Christian Andersen', 'Sky'),
(9, 'The Hidden Maths Of Everyday Life', '2022-04-23', 8.3, 24, 15, 'Liệu toán học có thể giúp bạn thắng giải thưởng vé số? Giúp bạn tìm kiếm đúng người? Chứng minh sự tồn tại của các vị thần? Xuyên suốt tác phẩm, Jordan Ellenberg đã cho người đọc một cái nhìn mới về toán học - một cái nhìn rõ ràng, đầy đủ cùng với nhiều ví dụ thực tiễn.  Nếu bạn là một người có đam mê về toán học nói riêng và khoa học nói chung, đặc biệt là cách để ứng dụng chúng trong cuộc sống hằng ngày thì đây chắc chắn sẽ là một quyển sách mà bạn không thể bỏ qua.', 'Toán Học', 'img/books/The Hidden Maths Of Everyday Life.jpg', 'Jordan Ellenberg', 'Sky'),
(10, 'Weapons Of Math Destruction: How Big Data Increases Inequality And Threatens Democracy', '2022-08-17', 9.3, 49, 16, 'Trong \"Weapons Of Math Destruction: How Big Data Increases Inequality And Threatens Democracy\", tác giả Cathy O\'Neil đã cho người đọc thấy những mặt tối của Big Data và ảnh hưởng của chúng đối với xã hội. Quyển sách được chia làm nhiều chương, mỗi chương tập trung về một mặt của xã hội, về những thuật toán, cách thức sử dụng dữ liệu để thao túng và gây ảnh hưởng lớn đến xã hội. Nếu bạn quan tâm đến ảnh hưởng của công nghệ đến xã hội, đây chắc chắn sẽ là một quyển sách mà bạn không thể bỏ qua.', 'Toán Học', 'img/books/Weapons Of Math Destruction.jpg', 'Cathy O\'Neil', 'Kana'),
(11, 'To Kill A Mockingbird', '2022-09-16', 8.1, 38, 20, '\"To Kill a Mockingbird\" lấy bối cảnh tại thị trấn nhỏ Maycomb, Alabama, vào những năm 1930. Nhân vật kể chuyện và nhân vật chính, Scout Finch, là một cô bé sống cùng với anh trai Jem và cha mình, một luật sư tên là Atticus. Tiểu thuyết khám phá các chủ đề về chủ nghĩa phân biệt chủng tộc, bất công và đã truyền cảm hứng cho nhiều thế hệ người đọc để đặt câu hỏi về các niềm tin và thành kiến của chính họ.', 'Tiểu Thuyết', 'img/books/To Kill A Mockingbird.jpg', 'Harper Lee', 'Kana'),
(12, 'Tôi Là Bêtô', '2021-06-26', 8.6, 51, 14, '“Tôi Là Bêtô” là một áng văn trong trẻo và đầy hồn nhiên được tác giả Nguyễn Nhật Ánh xây dựng thông qua lời kể và cũng là lời tự khẳng định bản thân mình của chú cún Bêtô, là thú cưng của chị Ni. Người đọc sẽ đi từ bất ngờ này đến bất ngờ khác về hàng trăm “điều thú vị ở đời” qua những câu chuyện dí dỏm, đáng yêu của các chú cún, tuy nhiên cũng không kém phần sâu sắc, cao đẹp và đầy tính nhân văn. ', 'Hư Cấu, Sách Thiếu Nhi', 'img/books/Tôi Là Bêtô.jpg', 'Nguyễn Nhật Ánh', 'Kana'),
(13, 'Tôi Thấy Hoa Vàng Trên Cỏ Xanh', '2022-05-23', 9.1, 45, 26, 'Cuốn sách “Tôi thấy hoa vàng trên cỏ xanh” kể về tuổi thơ nghèo khó của hai anh em Thiều và Tường cùng cô bạn thân hàng xóm. Mạch truyện tự nhiên, dẫn dắt người đọc chứng kiến những rung động đầu đời của tụi nhỏ, xen vào đó là những nét đẹp của tình anh em và vài nốt trầm của sự đau đớn khi trưởng thành. Đây là một tác phẩm hay, giàu cảm xúc mà bạn không nên bỏ qua.', 'Truyện Dài, Sách Thiếu Nhi', 'img/books/Tôi Thấy Hoa Vàng Trên Cỏ Xanh.jpg', 'Nguyễn Nhật Ánh', 'Kana'),
(14, 'Hai Vạn Dặm Dưới Đáy Biển', '2021-12-20', 9.5, 29, 10, '\"Hai vạn dặm dưới đáy biển\" là một quyển sách thuộc thể loại khoa học viễn tưởng, kể về cuộc hành trình của giáo sư sinh vật học người Pháp – Pierre Aronnax cùng với người giúp việc Conseil, thợ săn cá voi Ned Land người Canada và vị thuyền trưởng Nemo trên con tàu ngầm bí ẩn Nautilus. Xuyên suốt chuyến phiêu lưu, họ đã có cơ hội chiêm ngưỡng những kỳ quan, giao tranh với nhiều loài sinh vật hung dữ dưới lòng biển và cả chiến hạm con người. Nếu là người đam mê đại dương và luôn mong muốn có một cuộc hành trình thám hiểm đến những vùng đất mới, chắc chắn quyển sách này sẽ không làm bạn thất vọng.', 'Phiêu Lưu, Hư Cấu', 'img/books/Hai Vạn Dặm Dưới Đáy Biển.jpg', 'Jules Verne', 'Sky'),
(15, 'Harry Potter Và Hòn Đá Phù Thủy', '2021-01-07', 8.3, 67, 30, '\"Harry Potter và Hòn đá phù thủy\" là tác phẩm đầu tiên trong series về thế giới phù thủy nổi tiếng Harry Potter. Trong tập đầu, câu truyện chủ yếu xoay quanh Harry Potter và hành trình nhập học của cậu tại trường phù thủy Hogwarts lừng danh, đồng thời cũng vén bức màn bí ẩn về những nguy hiểm mà cậu sẽ gặp phải khi phù thủy hắc ám Voldermort đã trở lại.', 'Phiêu Lưu, Hư Cấu', 'img/books/Harry Potter Và Hòn Đá Phù Thủy.jpg', 'J. K. Rowling', 'Joe'),
(16, 'Harry Potter Và Căn Phòng Bí Mật', '2021-04-08', 8, 72, 34, 'Tập hai của series Harry Potter mở đầu bằng hàng loạt những cuộc tấn công liên tục xảy đến với các phù thủy gốc Muggles trong trường phù thủy Hogwarts. Trong khi đang điều tra vụ việc này, Harry Potter đã vô tình phát hiện ra bí mật của những vụ án mạng vào thời điểm 50 năm trước ở trường, và những thông tin mới này cũng tiết lộ thêm về chúa tể hắc ám Voldermort và sự thật đằng sau Phòng chứa bí mật - một trong những truyền thuyết lâu đời tại ngôi trường phù thủy danh giá.', 'Phiêu Lưu, Hư Cấu', 'img/books/Harry Potter Và Căn Phòng Bí Mật.jpg', 'J. K. Rowling', 'Joe'),
(17, 'Harry Potter Và Tên Tù Nhân Ngục Azkaban', '2021-05-15', 8.4, 65, 20, '\"Harry Potter và tên tù nhân ngục Azkaban\" là quyển sách thứ ba trong series Harry Potter của nhà văn J.K.Rowling. Harry Potter và hai người bạn thân của cậu là Ron và Hermione đã phát hiện ra tên tù nhân vừa trốn thoát khỏi Azkaban - Sirius Black, vốn được cho là tay sai của chúa tể Voldermort. Tuy nhiên, sự thật đằng sau tin đồn này có vẻ khác xa hoàn toàn.', 'Phiêu Lưu, Hư Cấu', 'img/books/Harry Potter Và Tên Tù Nhân Ngục Azkaban.jpg', 'J. K. Rowling', 'Kana'),
(18, 'Harry Potter Và Chiếc Cốc Lửa ', '2021-05-23', 8.2, 59, 23, 'Trong tập thứ tư của series Harry Potter, Harry đã có cơ hội đại diện cho trường Hogwarts để tham gia giải đấu Tam Pháp Thuật, một giải đấu giữa ba trường phù thủy lớn. Tuy nhiên, giải đấu này đã có sự can thiệp đến từ một kẻ thù nguy hiểm - chúa tể Voldemort.', 'Phiêu Lưu, Hư Cấu', 'img/books/Harry Potter Và Chiếc Cốc Lửa.jpg', 'J. K. Rowling', 'Kana'),
(19, 'Harry Potter Và Hội Phượng Hoàng', '2021-06-22', 8.5, 62, 25, 'Tuy chúa tể hắc ám Voldermort đã tuyên bố sẽ trở lại trong hội thi Tam Pháp Thuật ở phần \"Harry Potter và chiếc cốc lửa\", một bộ phận trong thế giới phù thủy vẫn chưa tin tưởng vào tin tức này. Nhằm kiểm soát \"tin đồn\" này ở trường Hogwarts, bộ Pháp thuật đã cử Dolores Umbridge, một phụ tá của Bộ trưởng Bộ Pháp thuật, tới tiếp quản trường. Tuy nhiên, cách làm việc của bà lại không được học sinh và giáo viên ủng hộ, vì vậy đã dẫn đến nhiều sự phản kháng quyết liệt, trong số đó có Đoàn Quân Dumbledore do Harry Potter lập nên. Kể từ phần năm này, series Harry Potter đã chính thức bước sang một giai đoạn mới - giai đoạn với nhiều nỗi mất mát, hy sinh, sự đau khổ. ', 'Phiêu Lưu, Hư Cấu', 'img/books/Harry Potter Và Hội Phượng Hoàng.jpg', 'J. K. Rowling', 'Sky'),
(20, 'Harry Potter Và Hoàng Tử Lai', '2021-08-03', 8.7, 50, 21, 'Trong \"Harry Potter và Hoàng Tử Lai\", quá khứ của kẻ phản diện - chúa tể Voldermort đã được tiết lộ chi tiết hơn, kèm theo đó là những miêu tả sinh động về tuổi mới lớn với những xúc cảm ngây thơ, vui nhộn và nỗi căm hận của Harry đối với \"Hoàng Tử Lai\".', 'Phiêu Lưu, Hư Cấu', 'img/books/Harry Potter Và Hoàng Tử Lai.jpg', 'J. K. Rowling', 'Kana'),
(21, 'Harry Potter Và Bảo Bối Tử Thần ', '2021-08-09', 9, 74, 20, '\"Harry Potter và bảo bối tử thần\" tiếp tục cuộc tìm kiếm những Trường Sinh Linh Giá còn lại mà Harry chưa phá hủy hết. Sau cái chết của cụ Dumbledore, chúa tể Voldermort đã xâm nhập vào Bộ Pháp thuật, và Harry Potter đã trở thành kẻ bị truy nã số một của Bộ. Bộ ba Harry, Ron và Hermione không trở lại Hogwarts mà tiếp tục lên đường tìm và phá hủy các Trường Sinh Linh Giá còn lại. Trên trường, họ khám phá ra nhiều điều về quá khứ của cụ Dumbledore và những món Bảo Bối Tử thần - những bảo vật có thể đánh lừa thần chết. ', 'Phiêu Lưu, Hư Cấu', 'img/books/Harry Potter Và Bảo Bối Tử Thần.jpg', 'J. K. Rowling', 'Joe'),
(22, 'Cho Tôi Xin Một Vé Đi Tuổi Thơ', '2022-04-14', 8.5, 14, 5, '\"Cho tôi xin một vé đi tuổi thơ\" mời người đọc lên chuyến tàu quay ngược trở lại thăm tuổi thơ và tình bạn dễ thương của 4 bạn nhỏ với những trò nghịch ngợm của thằng cu Mùi, Hải cò, con Tủn và con Tí sún. Vẫn giọng văn trong vắt và dí dỏm, Nguyễn Nhật Ánh đã dẫn dắt độc giả đi theo dòng hồi tưởng của mình, trở về cái thời còn là cậu bé tám tuổi, mang đến cho người đọc một thế giới tuổi thơ hồn nhiên, đầy ắp tiếng cười, nhưng lồng vào những ngày tháng hồn nhiên đó lại là những trăn trở của người lớn. ', 'Sách Thiếu Nhi', 'img/books/Cho Tôi Xin Một Vé Đi Tuổi Thơ.jpg', 'Nguyễn Nhật Ánh', 'Joe'),
(23, 'Phía Sau Nghi Can X', '2022-12-20', 8.6, 20, 4, '\"Phía sau nghi can X\" được đánh giá là một trong những tác phẩm xuất sắc nhất của nhà văn chuyên viết thể loại trinh thán người Nhật Bản Higashino Keigo. Tác phẩm theo chân hai điều tra viên Kusanagi, Kisuya và nhà vật lý Yugawa nhằm điều tra một vụ án mạng hóc búa. Những manh mối vụn vặt, rời rạc tưởng chừng như không liên quan gì đến vụ án lại được tác giả xâu chuỗi lại một cách hợp lý, mang đến một cái kết bất ngờ, ngoài sức tưởng tượng, hứa hẹn không làm cho độc giả yêu thích thể loại trinh thám phải thất vọng.', 'Trinh Thám', 'img/books/Phía Sau Nghi Can X.jpg', 'Higashino Keigo', 'Kana'),
(24, 'Ma Thổi Đèn - Thành Cổ Tinh Tuyệt', '2022-07-24', 7.5, 40, 12, '\"Thành cổ Tinh Tuyệt\" là tác phẩm thứ n trong series Ma Thổi Đèn, vốn đã rất nổi tiếng với những ai có đam mê với thể loại truyện đạo mộ. Người đọc có cơ hội theo chân Hồ Bát Nhất, Tuyền Béo và Shirley Dương trong cuộc hành trình đi tìm ngôi thành của một quốc gia đã biến mất từ lâu trong giữa biển cát mênh mông. Bên cạnh những pha hành động liên tục đến nghẹt thở, câu truyện còn hé lộ thêm về nguồn gốc của Shirley Dương và mối liên hệ giữa di chỉ trong chuyến phiêu lưu này với những di chỉ đã khai quật trước đó.', 'Phiêu Lưu, Hư Cấu', 'img/books/Ma Thổi Đèn - Thành Cổ Tinh Tuyệt.jpg', 'Thiên Hạ Bá Xướng', 'Sky');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`bookID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `bookID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
