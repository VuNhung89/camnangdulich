<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Location::create([
            'name' => 'Hạ Long',
            'image' => '/image/halong.avif',
            'description' => 'Vịnh Hạ Long nổi tiếng với cảnh đẹp tự nhiên.',
            'transportation' => <<<HTML
<h2>Di chuyển đến Hạ Long</h2>
<p><strong>Máy bay</strong><br>
Để phục vụ lượng khách du lịch đông đảo đến Hạ Long nói riêng và Quảng Ninh nói chung và giảm tải cho sân bay Nội Bài, tỉnh Quảng Ninh đã xây dựng thêm sân bay quốc tế Vân Đồn. Từ khi đi vào hoạt động, sân bay Vân Đồn đón tiếp hàng ngàn lượt khách mỗi năm. Hoặc bạn cũng có thể bay đến sân bay Cát Bi ở Hải Phòng. Đây là hai sân bay ngay gần Hạ Long, rất thuận tiện cho du khách.</p>
<img src="https://cdn3.ivivu.com/2022/08/S%C3%A2n-bay-C%C3%A1t-Bi-ivivu-2.jpg" alt="ảnh sân bay Cát Bi">
<p><strong>Phương tiện cá nhân</strong><br>
Với các tuyến cao tốc liên tỉnh và nội tỉnh, sẽ rất dễ dàng và thuận tiện khi di chuyển bằng phương tiện cá nhân đến Hạ Long, các tuyến đường đạt chuẩn và rút ngắn thời gian hơn rất nhiều so với trước.</p>
<img src="https://cdn3.ivivu.com/2022/08/H%E1%BA%A1-Long-ivivu-2.jpg" alt="cơ sở hạ tầng ở Hạ Long">
<p><strong>Xe khách</strong><br>
Đây là phương tiện di chuyển rất phổ biến từ các tỉnh thành lân cận. Hạ Long có bến xe khách lớn là bến xe Bãi Cháy thuộc thành phố Hạ Long. Để xem thông tin chi tiết về các chuyến xe tại bến xe Bãi Cháy và các bến khác tại Quảng Ninh, bạn có thể truy cập trang web bến xe Quảng Ninh. Chỉ cần nhập điểm đi và điểm đến để tìm chuyến xe, trang web sẽ hiện ra thông tin đầy đủ dễ dàng để bạn có thể tham khảo.</p>
<img src="https://cdn3.ivivu.com/2022/08/H%E1%BA%A1-Long-ivivu-3-B%E1%BA%BFn-xe-B%C3%A3i-Ch%C3%A1y.jpg" alt="bến xe Bãi Cháy">
<h2>Phương tiện đi lại tại Hạ Long</h2>
<p><strong>Xe điện</strong><br>
Đây là phương tiện di chuyển khá phổ biến, đặc biệt là khu vực trung tâm thành phố và các địa điểm du lịch Hạ Long. Vé lên xe điện là 30.000đ/người cộng thêm tiền cước theo số kilomet. Đây là phương tiện đang được đẩy mạnh phát triển tại Hạ Long và tại nhiều điểm du lịch vì những ưu điểm của xe điện và chi phí lại rẻ.</p>
<img src="https://cdn3.ivivu.com/2022/08/H%E1%BA%A1-Long-ivivu-4.png" alt="xe điện">
<p><strong>Taxi</strong><br>
Không khó để bạn có thể bắt được taxi tại Hạ Long, nhưng giá thành taxi sẽ cao hơn các phương tiện khác, nên bạn có thể cân nhắc trước. Bạn sẽ dễ dàng có thể bắt được taxi ngay trên đường hoặc có thể gọi điện trực tiếp cho các hãng taxi như: taxi Mai Linh – 0203 3628 628, taxi Bãi Cháy – 0203 364 64 64, taxi Sao Mai – 0203 3822 822.</p>
<img src="https://cdn3.ivivu.com/2022/08/H%E1%BA%A1-Long-ivivu-5.jpg" alt="taxi">
<p><strong>Xe máy</strong><br>
Chi phí thuê xe máy tự lái ở Hạ Long giá cả rất phải chăng, với 100.000 – 200.000 đồng/ngày bạn có thể tự do đi lại khám phá bất cứ đâu tại Hạ Long. Để thuê xe bạn cần phải có CMND/CCCD, trước khi thuê xe bạn cần kiểm tra tình trạng xe trước, đây là lưu ý giúp bạn có sự chuẩn bị đầy đủ cho chuyến đi. Một số điểm cho thuê xe máy ở Hạ Long có thể kể đến như:<br>
Thuê xe máy Quảng Ninh<br>
Địa chỉ: 560 Lê Thánh Tông, P. Bạch Đằng, TP. Hạ Long, Quảng Ninh<br>
Điện thoại: 0901 272 666<br>
Cho thuê xe máy Bãi Cháy<br>
Địa chỉ: Sun World Hạ Long, Bãi Cháy, TP. Hạ Long, Quảng Ninh<br>
Điện thoại: 0978 741 713</p>
HTML,
            'booking_info' => '0987-654-321'
        ]);

        Location::create([
            'name' => 'Đà Nẵng',
            'image' => '/image/danang.avif',
            'description' => 'Thành phố biển hiện đại và sôi động.',
            'transportation' => <<<HTML
<h2>Di chuyển đến Đà Nẵng</h2>
<p><strong>Máy bay</strong><br>
Máy bay là phương tiện nhanh nhất và tiện lợi nhất. Các hãng bay khai thác nhiều chuyến đến Đà Nẵng, giá vé 500.000–2.000.000 VND/chiều, tùy điểm khởi hành và thời điểm đặt. Thời gian bay khoảng 1 tiếng. Săn vé khuyến mãi (thậm chí vé 0 VND) hoặc đặt combo vé máy bay khứ hồi và khách sạn để tiết kiệm chi phí.</p>
<img src="https://owa.bestprice.vn/images/articles/uploads/kinh-nghiem-di-chuyen-khi-du-lich-da-nang-5ebe57569cf48.jpg" alt="Sân bay Đà Nẵng">
<p><strong>Tàu hỏa</strong><br>
Tàu hỏa là lựa chọn tiết kiệm, phù hợp cho du lịch tự túc, nhưng mất 15-16 tiếng từ Hà Nội hoặc TP.HCM. Giá vé 500.000–1.200.000 VND/chiều, tùy hạng ghế. Tàu hỏa cho phép ngắm cảnh dọc đường, lý tưởng cho du khách thích sống chậm.</p>
<img src="https://owa.bestprice.vn/images/articles/uploads/kinh-nghiem-di-chuyen-khi-du-lich-da-nang-5ebe56ef7be4f.jpg" alt="Tàu hỏa đến Đà Nẵng">
<p><strong>Xe khách</strong><br>
Xe khách phù hợp cho du lịch tiết kiệm, nhưng cần sức khỏe tốt vì thời gian di chuyển dài (gần 20 tiếng). Bến xe Đà Nẵng nằm ở trung tâm, tiện lợi đến khách sạn. Các hãng uy tín như Phương Trang, The Sinh Tourist, Mai Nhung có xe giường nằm, giá vé 400.000–600.000 VND/người.</p>
<img src="https://owa.bestprice.vn/images/articles/uploads/kinh-nghiem-di-chuyen-khi-du-lich-da-nang-5ebe592098486.jpg" alt="Xe khách Đà Nẵng">
<h2>Phương tiện di chuyển tại Đà Nẵng</h2>
<p><strong>Xe máy</strong><br>
Xe máy là lựa chọn hàng đầu, tiện lợi, tự do khám phá, giá thuê 120.000–150.000 VND/ngày. Địa chỉ uy tín: Gia Huy (6 Trần Cao Vân), MOTOGO (86/26 Thi Sách), Anh Tuấn (k41/16 Tiểu La).</p>
<img src="https://owa.bestprice.vn/images/articles/uploads/kinh-nghiem-di-chuyen-khi-du-lich-da-nang-5ebe592098486.jpg" alt="Xe máy tại Đà Nẵng">
<p><strong>Taxi</strong><br>
Taxi phù hợp cho nhóm đông hoặc gia đình, dễ bắt xe, giá minh bạch qua đồng hồ. Hãng uy tín: Mai Linh (0511 3 56 56 56), Vinasun Green (0511 3 68 68 68), Tiên Sa (0511 3 79 79 79).</p>
<img src="https://owa.bestprice.vn/images/articles/uploads/kinh-nghiem-di-chuyen-khi-du-lich-da-nang-5ebe590b50dd0.jpg" alt="Taxi Đà Nẵng">
<p><strong>Xe buýt</strong><br>
Xe buýt giá rẻ, tuyến số 2 và 11 từ sân bay về trung tâm, tần suất 30-60 phút/chuyến. Nhiều tuyến nội thành khác phục vụ du khách.</p>
<p><strong>Xích lô</strong><br>
Xích lô truyền thống, chậm rãi, phù hợp ngắm cảnh, giá 100.000 VND/giờ. Tuy nhiên, không tiện vào mùa cao điểm do tắc đường, nhưng thân thiện môi trường và an toàn.</p>
HTML,
            'booking_info' => '0912-345-678'
        ]);

        Location::create([
            'name' => 'Sapa',
            'image' => '/image/sapa.avif',
            'description' => 'Thành phố mờ sương với ruộng bậc thang.',
            'transportation' => <<<HTML
<h2>Di chuyển đến Sapa</h2>
<p><strong>Xe khách</strong><br>
Xe khách là lựa chọn phổ biến với xe giường nằm đơn, đôi, chạy êm. Các hãng xe nổi tiếng như Sapa Express, Inter Bus Line, Green Bus, Hà Sơn Hải Vân có giá vé từ 180.000đ - 500.000đ tùy hãng. Nên đặt vé khứ hồi để tránh hết vé.</p>
<img src="https://owa.bestprice.vn/images/articles/uploads/di-sapa-bang-phuong-tien-gi-thuan-tien-nhat-5f21456b14e4a.jpg" alt="Xe khách đi Sapa">
<p><strong>Tàu hỏa</strong><br>
Tàu hỏa an toàn, di chuyển từ Hà Nội đến ga Lào Cai (8 giờ), sau đó đi taxi/xe ôm đến Sapa. Tàu chạy ban đêm, khung giờ 21h30 và 22h, 2 chuyến/ngày. Giá vé từ Sapaly Express, Victoria Express, Chapa Express dao động 250.000đ - 1.800.000đ tùy hạng.</p>
<img src="https://owa.bestprice.vn/images/articles/uploads/di-sapa-bang-phuong-tien-gi-thuan-tien-nhat-5f214574132b4.jpg" alt="Tàu hỏa đi Sapa">
<p><strong>Xe máy, ô tô cá nhân</strong><br>
Phương tiện cá nhân linh hoạt nhưng cần kiểm tra thời tiết, tránh mùa mưa (tháng 7-8). Tuyến đường chính: Hà Nội - Lào Cai hoặc Lai Châu. Tiền xăng xe máy khoảng 250.000đ, ô tô có thể chịu phí đường.</p>
<p><strong>Máy bay</strong><br>
Du khách ở xa bay đến sân bay Nội Bài (Hà Nội) bằng Vietnam Airlines, Jetstar Pacific, VietJet Air, Bamboo Airways, sau đó đi ô tô/tàu hỏa đến Sapa. Phương tiện này tiết kiệm thời gian và chi phí.</p>
<img src="https://owa.bestprice.vn/images/articles/uploads/di-sapa-bang-phuong-tien-gi-thuan-tien-nhat-5f21457413115.jpg" alt="Máy bay đến Hà Nội">
<h2>Phương tiện di chuyển tại Sapa</h2>
<p><strong>Thuê xe máy</strong><br>
Xe máy phù hợp để khám phá tự do, giá từ 80.000đ - 130.000đ/ngày. Địa chỉ uy tín: Mr Chinh (44 Fansipan, 0988 628 515), Long Sa Pa (0989 423 018), Trung tâm thông tin du lịch Lào Cai (2 Fansipan).</p>
<p><strong>Thuê ô tô</strong><br>
Ô tô phù hợp cho nhóm, giá từ 500.000đ, nhưng không vào được làng bản. Địa chỉ uy tín: Công ty du lịch Khám Phá Việt (31 Xuân Viên, 098 4353 577), Công ty du lịch Mai Long (Ngõ Trần Phú, 0214.3.863.862), Khách sạn Mây Sa Pa (139 Thạch Sơn, 0829 607 412).</p>
HTML,
            'booking_info' => '0912-345-678'
        ]);

        Location::create([
            'name' => 'Huế',
            'image' => '/image/hue.avif',
            'description' => 'Cố đô với nhiều di tích lịch sử.',
            'transportation' => <<<HTML
<h2>Cách di chuyển đến Huế</h2>
<p><strong>Xe khách</strong><br>
Xe khách là lựa chọn tiện lợi, an toàn với xe giường nằm và tiện ích bổ sung. Các hãng uy tín: Thủy Ngân Limousine, Camel Travel, Minh Lập, Đức Thịnh, Dương Vũ, Vân Khôi. Giá vé từ Hà Nội khoảng 250.000 - 450.000 VNĐ/vé, tùy hãng và thời điểm.</p>
<p><strong>Tàu hỏa</strong><br>
Tàu hỏa phù hợp, dù không phải ưu tiên hàng đầu. Mua vé online hoặc tại ga. Tàu SE (nhanh, 29-33 tiếng), tàu TN (chậm, 36-40 tiếng). Số hiệu chẵn (SE2, SE4) từ Nam ra Bắc, lẻ (SE7, TN1) từ Bắc vào Nam. Giá vé từ Sài Gòn khoảng 664.000 VNĐ/vé, tùy loại ghế.</p>
<img src="https://owa.bestprice.vn/images/articles/uploads/tong-hop-cac-phuong-tien-di-chuyen-khi-du-lich-hue-621d7ceeb611a.png" alt="Tàu hỏa đi Huế">
<p><strong>Máy bay</strong><br>
Máy bay là phương tiện nhanh, an toàn nhất, đến sân bay Phú Bài (Huế). Các hãng: Vietnam Airlines, Bamboo Airways, Vietjet Air. Chặng phổ biến: Hồ Chí Minh - Huế, Hà Nội - Huế. Giá vé (chưa thuế, phí) từ 49.000 - 2.250.000 VNĐ/vé, tùy điểm xuất phát và thời gian đặt.</p>
<img src="https://owa.bestprice.vn/images/articles/uploads/tong-hop-cac-phuong-tien-di-chuyen-khi-du-lich-hue-621d7d0367ef9.png" alt="Máy bay đến Huế">
<h2>Phương tiện di chuyển tại Huế</h2>
<p><strong>Xe máy</strong><br>
Xe máy tiện lợi, tiết kiệm, giá thuê 120.000 - 150.000 VNĐ/ngày, phù hợp với xe số, xe ga. Nhiều cửa hàng uy tín tại Huế.</p>
<p><strong>Taxi</strong><br>
Taxi lý tưởng cho nhóm đông, gia đình, tránh thời tiết xấu. Tiết kiệm thời gian hơn xe buýt, không phải chờ đón khách.</p>
<p><strong>Xe buýt</strong><br>
Xe buýt giá rẻ, tuyến số 2 và 11 từ sân bay Phú Bài về trung tâm, tần suất 30-60 phút/chuyến. Nhiều tuyến khác trong thành phố phục vụ du khách.</p>
<p><strong>Xe điện</strong><br>
Xe điện an toàn, nhanh, được ưa chuộng. Tài xế thân thiện, hỗ trợ tư vấn địa điểm tham quan, ăn uống.</p>
HTML,
            'booking_info' => '0933-222-111'
        ]);

        Location::create([
            'name' => 'Hội An',
            'image' => '/image/hoian.avif',
            'description' => 'Phố cổ nổi tiếng với đèn lồng và di sản.',
            'transportation' => <<<HTML
<h2>Di chuyển đến Hội An</h2>
<p><strong>Xe khách</strong><br>
Từ Hà Nội (847 km), xe khách giường nằm là lựa chọn tiện nghi. Giá vé 300.000đ - 380.000đ/vé, thời gian di chuyển 13-20 tiếng. Các hãng uy tín:<br>
- Camel Cafe: 41 chỗ, xuất phát 17h30 tại 459 Trần Khát Chân, Hà Nội, đến 137 Trần Nhân Tông, Hội An lúc 8h30, giá 320.000đ/vé/chiều (không có WC khép kín).<br>
- Queen Cafe: 38 chỗ, tiện ích đầy đủ (wifi, điều hòa, WC), xuất phát 18h00/18h30 tại 208 Trần Quang Khải, Hà Nội, đến 487 Hai Bà Trưng, Hội An lúc 8h45/9h15, giá 350.000đ/vé/chiều.<br>
- Trekking Travel: Di chuyển nhanh (13 tiếng), xuất phát 6h00 tại 01 Trần Khánh Dư, Hà Nội, đến Hội An lúc 19h00, giá 380.000đ/vé/chiều.<br>
Từ TP.HCM, giá vé 320.000đ - 480.000đ/vé, các hãng như Hoàng Long, Hạnh Cafe (0905395368), Thiên An (0866516657), The Sinh Tourist (0838389593).</p>
<img src="https://owa.bestprice.vn/images/articles/uploads/tong-hop-nhung-phuong-tien-di-chuyen-khi-di-du-lich-hoi-an-5f3116cbca775.jpg" alt="Xe khách đi Hội An">
<p><strong>Tàu hỏa</strong><br>
Hội An chưa có đường sắt, nên đi tàu đến ga Đà Nẵng hoặc Tam Kỳ, sau đó đi taxi/xe buýt đến Hội An. Thời gian di chuyển 13-20 tiếng. Giá vé: Hà Nội - Đà Nẵng 300.000đ - 650.000đ/vé, TP.HCM - Đà Nẵng 900.000đ - 1.150.000đ/vé. Tàu mang lại trải nghiệm ngắm cảnh an toàn.</p>
<p><strong>Máy bay</strong><br>
Bay đến Đà Nẵng (Vietnam Airlines, Bamboo Airways, Jetstar Pacific, Vietjet Air), sau đó di chuyển đến Hội An. Chặng phổ biến: Hà Nội (1h20), TP.HCM (1h25), Đà Lạt, Nha Trang. Giá vé 380.000đ - 3.000.000đ/vé (chưa thuế phí). Đặt vé sớm để có giá tốt.</p>
<img src="https://owa.bestprice.vn/images/articles/uploads/tong-hop-nhung-phuong-tien-di-chuyen-khi-di-lich-hoi-an-5f3116cbca87c.jpg" alt="Máy bay đến Đà Nẵng">
<h2>Cách di chuyển tại Hội An</h2>
<p><strong>Xe đạp</strong><br>
Xe đạp phổ biến, giá thuê 30.000đ/ngày, phù hợp để ngắm cảnh và chụp ảnh. Địa chỉ uy tín:<br>
- Anh Cước: 15/1 Trần Hưng Đạo, Hội An, SĐT: 0914 080 912.<br>
- Chị Yến: 617 Hai Bà Trưng, Hội An, SĐT: 0905 397 138.<br>
- Anh Cường: 599 Hai Bà Trưng, Hội An, SĐT: 0976 055 817.</p>
<p><strong>Xe máy</strong><br>
Xe máy tiện lợi, giá thuê 120.000đ - 150.000đ/ngày. Lưu ý: cấm xe máy ở một số phố từ 9h-11h và 15h-22h. Địa chỉ thuê:<br>
- Hùng Ân: 05 Đỗ Đăng Tuyển, Cẩm Châu, Hội An, SĐT: 0905 430 297.<br>
- Anh Khoa: 84 Phan Chu Trinh, Minh An, Hội An, SĐT: 0935 439 306.<br>
- Cho thuê xe máy Hội An: 111 Lý Thái Tổ, Sơn Phong, Hội An, SĐT: 0785 854 252.</p>
<img src="https://owa.bestprice.vn/images/articles/uploads/tong-hop-nhung-phuong-tien-di-chuyen-khi-di-du-lich-hoi-an-5f3118d8037ae.jpg" alt="Xe máy tại Hội An">
HTML,
            'booking_info' => '0977-777-777'
        ]);

        Location::create([
            'name' => 'Nha Trang',
            'image' => '/image/nhatrang.avif',
            'description' => 'Thành phố biển với các đảo và vịnh tuyệt đẹp.',
            'transportation' => <<<HTML
<h2>Di chuyển đến Nha Trang</h2>
<p><strong>Sân bay</strong><br>
Sân bay quốc tế Cam Ranh (Khánh Hòa) cách trung tâm Nha Trang 35km, phục vụ nhiều chuyến bay nội địa và quốc tế. Đây là lựa chọn nhanh, tiện lợi với thời gian bay ngắn.</p>
<img src="https://cdn3.ivivu.com/2022/09/S%C3%A2n-bay-Cam-Ranh-ivivu.jpg" alt="Sân bay Cam Ranh">
<p><strong>Tàu hỏa</strong><br>
Tàu hỏa an toàn, cho phép ngắm cảnh, nhưng mất 24-28 tiếng từ Hà Nội và 8-10 tiếng từ TP.HCM. Giá vé tùy hạng khoang. Ga Nha Trang cách trung tâm 10-15 phút. Mua vé trực tuyến hoặc tại ga để tránh vé giả.</p>
<img src="https://cdn3.ivivu.com/2022/09/T%C3%A0u-h%E1%BB%8Fa-ivivu.jpeg" alt="Tàu hỏa đến Nha Trang">
<p><strong>Xe khách</strong><br>
Xe khách tiết kiệm, phù hợp từ các tỉnh lân cận như Phú Yên, Ninh Thuận, Lâm Đồng, Đắk Lắk, TP.HCM. Từ TP.HCM mất 8-10 tiếng, giá vé 200.000-300.000 VNĐ/khách, nhiều hãng xe uy tín.</p>
<img src="https://cdn3.ivivu.com/2022/09/Xe-kh%C3%A1ch-ivivu-2.jpg" alt="Xe khách đến Nha Trang">
<h2>Di chuyển tại Nha Trang</h2>
<p><strong>Xe máy</strong><br>
Xe máy tiện lợi, giá thuê 50.000-200.000 VNĐ/ngày, dễ thuê tại khách sạn hoặc các tiệm trong thành phố, phù hợp khám phá tự do.</p>
<img src="https://cdn3.ivivu.com/2022/09/Thu%C3%AA-xe-m%C3%A1y-ivivu.jpg" alt="Xe máy tại Nha Trang">
<p><strong>Taxi</strong><br>
Taxi dễ bắt trên đường hoặc qua khách sạn, nhưng giá cao, không phù hợp du lịch bụi.</p>
<img src="https://cdn3.ivivu.com/2022/09/Taxi-Nha-Trang-ivivu.jpg" alt="Taxi tại Nha Trang">
<p><strong>Thuyền, cano</strong><br>
Thuyền và cano là cách duy nhất để ra các đảo, xuất phát từ bến cảng Cầu Đá. Có tàu cao tốc và tàu gỗ (12-49 chỗ).</p>
<img src="https://cdn3.ivivu.com/2022/09/Cang-cau-da-Nha-Trang-ivivu-1.jpg" alt="Bến cảng Cầu Đá">
HTML,
            'booking_info' => '0966-888-888'
        ]);

        Location::create([
            'name' => 'Đà Lạt',
            'image' => '/image/dalat.avif',
            'description' => 'Thành phố ngàn hoa với khí hậu mát mẻ và cảnh sắc thơ mộng.',
            'transportation' => <<<HTML
<h2>Di chuyển đến Đà Lạt</h2>
<p><strong>Máy bay</strong><br>
Máy bay là phương tiện di chuyển tới Đà Lạt nhanh và tiện ích nhất. Hiện tại, các hãng hàng không nội địa: Vietnam Airlines, Vietjet Air, Jetstar Pacific, Bamboo Airways đều khai thác đường bay tới Đà Lạt. Điểm khởi hành đa dạng gồm: Hà Nội, TP. Hồ Chí Minh, Đà Nẵng, Hải Phòng, giúp bạn dễ dàng chọn được chuyến bay tới đây.
<br>
Giá vé máy bay Đà Lạt hiện nay dao động từ 1.200.000đ – 1.900.000đ/vé đi một chiều Hà Nội – Đà Lạt và khoảng 600.000đ - 1.700.000đ/vé đi một chiều Hồ Chí Minh – Đà Lạt. Thời gian bay tầm 1h50ph (khởi hành từ Hà Nội), 50ph (khởi hành từ Hồ Chí Minh).
<br>
Đà Lạt có sân bay Liên Khương nằm ở ngoại thành, cách thành phố khoảng 50km nên khi đến và làm xong thủ tục thì bạn có thể di chuyển lên thành phố bằng xe bus với giá 40.000đ/vé hoặc đi taxi trung chuyển ở sân bay với giá 100.000đ - 150.000đ/người.</p>
<img src="https://owa.bestprice.vn/images/articles/uploads/kinh-nghiem-di-chuyen-di-du-lich-da-lat-gia-re-5ed358e75e6ce.jpg" alt="Sân bay Liên Khương">
<p><strong>Tàu hỏa</strong><br>
Đi Đà Lạt bằng phương tiện gì? Bên cạnh máy bay bạn có thể đi du lịch Đà Lạt bằng tàu hỏa. Nếu bạn đi tàu thì sẽ mất nhiều thời gian hơn so với đi máy bay, tuy nhiên sẽ tiết kiệm chi phí.
<br>
Để có thể đến Đà Lạt bằng tàu hỏa, bạn nhất định phải nắm rõ những thông tin như mã số tàu để phân biệt tàu nhanh hay chậm, thủ tục và các hình thức mua vé. Trước tiên, hãy tìm hiểu thông tin về các đoàn tàu và cách thức mua vé, có thể mua vé trực tiếp tại nhà ga hoặc mua vé online. Một số thông tin cơ bản bạn nên nắm được đó là:
<br>
- Thông thường, tàu hỏa sẽ có các ký hiệu như SE, TN để phân biệt được tàu nhanh, tàu chậm hoặc tàu chở hàng. Tàu mang ký hiệu SE là tàu nhanh, di chuyển trong vòng 29-33 tiếng, ký hiệu TN là tàu chậm, di chuyển trong vòng 36-40 tiếng.
<br>
- Số hiệu tàu chẵn là tàu đi từ Nam ra Bắc (VD: SE2, SE4, TN2,...); số hiệu tàu lẻ là tàu đi từ Bắc vào Nam (VD: SE3, SE7, TN1,...)
<br>
- Khi mua vé bạn cần có giấy tờ tùy thân của người đi tàu như CMND/CCCD. Nếu đặt vé online, hãy đọc kỹ và làm theo các bước hướng dẫn trên website của hãng sau đó check mã và thông tin chuyến tàu được gửi về email hoặc số điện thoại của người đi tàu. Khi ra ga tàu bạn chỉ cần mang theo mã vé được nhận để nhân viên toa tàu check vé.</p>
<img src="https://owa.bestprice.vn/images/articles/uploads/kinh-nghiem-di-chuyen-di-du-lich-da-lat-gia-re-5ed358e75e7c6.jpg" alt="Tàu hỏa">
<p>Tùy từng điều kiện thời gian và kinh phí mà bạn có thể chọn tàu nhanh hoặc chậm, loại ghế, giường,...Nếu đi Đà Lạt bằng tảu hỏa từ khu vực miền Bắc, bạn nên chọn loại vé giường nằm cứng/ mềm hoặc chọn loại vé ghế mềm. Loại vé ghế cứng dành cho người có nhu cầu di chuyển ngắn hoặc kinh phí thấp.
<br>
Giá cả luôn được public trên trang web của hãng. Giá vé tàu hỏa phụ thuộc vào loại ghế và toa mà bạn chọn (có các loại ghế mềm/cứng, giường nằm mềm/cứng, toa điều hòa/không điều hòa). Tùy vào loại ghế hay giường mà vé tàu có giá dao động từ 60.000đ - 2.000.000đ/người.
<br>
Ngoài ra, giá vé còn phụ thuộc vào nơi bạn khởi hành, càng xa điểm đến thì giá vé sẽ cao hơn. Đà Lạt không có nhà ga, vì thế bạn có thể di chuyển đến Nha Trang, sau đó bắt xe khách từ Nha Trang đi thẳng đến Đà Lạt (giá vé xe khách dao động từ 100.000đ - 150.000đ/người). Thời gian di chuyển khoảng 2 tiếng. Như vậy nếu đi tàu nhanh thì bạn sẽ tốn gần 2 ngày để lên đến Đà Lạt.</p>
<p><strong>Xe khách</strong><br>
Để di chuyển bằng xe khách đến Đà Lạt, bạn cần chuẩn bị cho mình một sức khỏe thật tốt để có thể ngồi xe khách đường dài. Giá vé xe đi Đà Lạt từ Hà Nội dao động từ 600.000đ - 700.000đ/người, di chuyển trong vòng 1.5-2 ngày tùy nhà xe. Giá vé đi từ TP. Hồ Chí Minh đến Đà Lạt khoảng 170.000đ - 230.000đ/ người, di chuyển trong vòng 6 tiếng.
Bạn có thể liên lạc trực tiếp với các nhà xe qua số điện thoại hoặc xem trên trang web để nắm được thông tin về ngày giờ khởi hành và địa điểm đưa đón. Các nhà xe sẽ đưa bạn đến thẳng bến xe liên tỉnh ở Đà Lạt hoặc đến nhà xe riêng.
</p>
<h2>Di chuyển tại Đà Lạt</h2>
<p><strong>Xe máy</strong><br>Đây là phương tiện di chuyển phổ biến tại Đà Lạt được nhiều du khách lựa chọn. Ưu điểm của chúng là tiết kiệm chi phí, giúp bạn chủ động trong chuyến đi. Đặc biệt, với những ai đi du lịch Đà Lạt tự túc, xe máy sẽ là lựa chọn hoàn hảo để bạn có thể thỏa sức vi vu mọi nơi, khám phá những điểm du lịch Đà Lạt mà mình yêu thích.
<br>
Giá thuê xe máy dao động từ 100.000đ – 150.000đ/ngày. Bạn có thể lựa chọn một số địa chỉ cho thuê xe máy trong thành phố hoặc liên hệ với các khách sạn Đà Lạt, homestay mà bạn đặt để thuê xe. Một số điểm cho thuê xe máy được nhiều du khách lựa chọn:
<br>
- Happy Day Đà Lạt: 127 Phan Bội Châu, Phường 1, Đà Lạt, Lâm Đồng.
<br>
- Cửa hàng Ngọc Anh: 2 Trần Hưng Đạo, Phường 3, Đà Lạt, Lâm Đồng.
<br>
- Mr Din: 78 Lý Tự Trọng, Phường 2, Đà Lạt, Lâm Đồng.
<br>
- Cửa hàng Minh Khang: 5A đường Thủ Khoa Huân, Phường 1, Đà Lạt, Lâm Đồng.
<br>
- Cửa hàng Thảo Vy: Lô A13, khu quy hoạch Đà Lạt, đường Nguyễn Khuyến, Phường 5, Đà Lạt, Lâm Đồng.</p>
<img src="https://owa.bestprice.vn/images/articles/uploads/kinh-nghiem-di-chuyen-di-du-lich-da-lat-gia-re-5ed358e75e885.jpeg" alt="thuê xe máy">
<p><strong>Taxi</strong><br>Nếu bạn đi theo nhóm đông người, có trẻ nhỏ hoặc người lớn tuổi đi kèm thì nên lựa chọn taxi để thuận tiện nhất. Tùy vào số lượng người đi bạn có thể lựa chọn loại xe 4 hoặc 7 chỗ ngồi. Trung bình, mức giá của taxi là 9.000đ – 10.000đ/km (quãng đường trên 20km), 11.500đ – 13.500đ/km (quãng đường dưới 20km). Bạn có thể lưu lại số điện thoại một số hãng taxi phổ biến ở Đà Lạt như:
<br>
- Taxi Phương Trang Đà Lạt: 0633 556 556 – 063 35 35 35 35
<br>
- Taxi Mai Linh Đà Lạt (063) 38 38 38 38
<br>
- Taxi Thắng Lợi: (063). 3835 835
<br>
- Đà Lạt taxi: http://dalattaxi.com.vn 063.3556655 – 3 533 222
<br>
- Taxi Anh Đào: (063). 3570570
<br>
- Taxi Đà Lạt Toserco: (063). 3830 830
<br>
Hiện nay, việc gọi taxi ở Đà Lạt khá dễ dàng, bạn có thể sử dụng điện thoại thông minh với các app đặt xe như Grab để hỗ trợ nhanh chóng, tiện lợi hơn.</p>
HTML,
            'booking_info' => '0944-555-666'
        ]);

        Location::create([
            'name' => 'Cần Thơ',
            'image' => '/image/cantho.avif',
            'description' => 'Thành phố với cảnh quan sông nước rộng lớn.',
            'transportation' => <<<HTML
<h2>Di chuyển đến Cần Thơ</h2>
<p><strong>Máy bay</strong><br>
Sân bay Nội Bài, Hà Nội là sân bay quốc tế lớn nhất Việt Nam. Chính vì vậy, có rất nhiều hãng hàng không khai thác lịch trình bay trong và ngoài nước dày đặc. Tuy nhiên, tuyến Hà Nội – Cần Thơ chỉ có hai hãng Vietnam Airlines và Vietjet Air khai thác. Lịch trình bay của hãng hàng không Vietnam Airlines và Vietjet Air có tần suất bay ổn định.
<br>
Đối với hãng Vietnam Airlines bắt đầu khởi hành từ 7h00, 13h05 và 17h30. Quãng đường bay mất khoảng hơn 2 tiếng. Đối với hãng Vietjet Air bắt đầu khởi hành từ 7h15 và 11h20. Giá vé máy bay dao động từ 800.000 – 2.000.000 đồng/người, tùy vào hãng và thời điểm bạn đặt vé.</p>
<img src="https://owa.bestprice.vn/images/articles/uploads/kinh-nghiem-di-chuyen-khi-di-du-lich-can-tho-5f7d26d62d8dd.jpg" alt="giá vé máy bay">
<p><strong>Tàu hỏa</strong><br>
Nếu du khách chọn phương tiện tàu hỏa để thực hiện chuyến du lịch của mình. Du khách sẽ xuất phát từ ga Đà Nẵng đến ga Sài Gòn. Quãng đường từ Đà Nẵng đến Sài Gòn dài 961 km. Thời gian di chuyển mất khoảng 17 tiếng. Giá vé tàu dao động từ 600.000 – 1.500.000 đồng. Tần suất tàu chạy 6 chuyến/ 1 ngày. Tùy theo thời gian và điều kiện mà du khách có thể lựa chọn cho mình một giá vé tốt nhất và đảm bảo chất lượng.
<br>
<img src="https://vegiagoc.com/Upload/images/du-lich-can-tho-01.jpg" alt="sông nước Cần Thơ">
</p>
<p><strong>Xe khách</strong><br>
Quãng đường từ thành phố Hồ Chí Minh tới Cần Thơ vào khoảng 165km, thời gian di chuyển mất 3 – 4 tiếng đi xe khách. Tại bến xe miền Tây du khách có thể tham khảo các nhà xe uy tín như: Phương Trang, Hoàng Long, Mai Linh,... Giá vé dao động chỉ từ 130.000 – 140.000 đồng/vé. Mỗi ngày đều có xe chạy vào nhiều khung giờ khác nhau từ 7 giờ sáng đến 10 giờ tối, tần suất 15-30 phút là xuất bến một lần.
</p>
<h2>Di chuyển tại Cần Thơ</h2>
<p><strong>Xe máy</strong><br>Đây là phương tiện di chuyển phổ biến tại Cần Thơ được nhiều du khách lựa chọn. Ưu điểm của chúng là tiết kiệm chi phí, giúp bạn chủ động trong chuyến đi. Đặc biệt, với những ai đi du lịch Cần Thơ tự túc, xe máy sẽ là lựa chọn hoàn hảo để bạn có thể thỏa sức vi vu mọi nơi, khám phá những điểm du lịch Cần Thơ mà mình yêu thích.
<br>
Giá thuê xe máy dao động từ 100.000đ – 150.000đ/ngày. Bạn có thể lựa chọn một số địa chỉ cho thuê xe máy trong thành phố hoặc liên hệ với các khách sạn Cần Thơ, homestay mà bạn đặt để thuê xe. Một số điểm cho thuê xe máy được nhiều du khách lựa chọn:
<ul>
    <li>Đông Hà: 145 Trần Văn Khéo, Cái Khế, Ninh Kiều, Cần Thơ.</li>
    <li>SamPan House: K13, đường 24, khu đô thị Hưng Phú, Hưng Thạnh, Cái Răng, Cần Thơ</li>
    <li>Anh Vũ Motel: D3 – 16 Trần Quang Khải, Cái Khế, Ninh Kiều, Cần Thơ.</li>
    <li>Thuê xe máy Ninh Kiều Cần Thơ:Số 2, Hùng Vương, Ninh Kiều, Cần Thơ.</li>
    <li>Giang Anh: Hẽm 51, đường 3/2, An Khánh, Ninh Kiều, Cần Thơ.</li>
</ul>
<img src="https://motogo.vn/wp-content/uploads/2021/01/thue-xe-may-can-tho-11.jpg" alt="thuê xe máy">
<p><strong>Taxi</strong><br>Nếu bạn đi theo nhóm đông người, có trẻ nhỏ hoặc người lớn tuổi đi kèm thì nên lựa chọn taxi để thuận tiện nhất. Tùy vào số lượng người đi bạn có thể lựa chọn loại xe 4 hoặc 7 chỗ ngồi. Trung bình, mức giá của taxi là 9.000đ – 10.000đ/km (quãng đường trên 20km), 11.500đ – 13.500đ/km (quãng đường dưới 20km). 
<br>
Hiện nay, việc gọi taxi ở Đà Lạt khá dễ dàng, bạn có thể sử dụng điện thoại thông minh với các app đặt xe như Grab để hỗ trợ nhanh chóng, tiện lợi hơn.</p>
<p><strong>Tàu, thuyền</strong>Để tham quan chợ nổi Cái Răng, các cồn,… du khách phải đi bằng tàu, thuyền. Tàu, thuyền thường tập trung tại bến Ninh Kiều. Du khách có thể liên hệ thuê riêng với chủ tàu, thuyền hoặc liên hệ mua tour Cần Thơ tại BestPrice bạn sẽ không phải lo lắng về vấn đề thuê tàu thuyền nữa.
<br>
Đặc biệt, khi đến tham quan Cần Thơ thì bạn không nên bỏ qua trải nghiệm trên du thuyền. Chỉ khi trải nghiệm du thuyền Cần Thơ thì bạn mới cảm nhận được sự lột xác ngoạn mục của bến Ninh Kiều. Buổi sáng bến Ninh Kiều yên tĩnh, trầm mặc. Khi màn đêm buông xuống, bến Ninh Kiều như khoác lên mình bộ áo mới, những ánh đèn hai bên bờ hắt lại tạo thành bức tranh lung linh huyền ảo tuyệt đẹp.</p>
<h2>Đặt tour du lịch Cần Thơ trọn gói</h2>
<p>Đặt tour du lịch trọn gói có rất nhiều tện lợi dành cho bạn. Với các tour này du khách sẽ không cần lo lắng về phương tiện đi lại, tìm kiếm nơi ở, địa điểm ăn uống uy tín, chất lượng vì đại lý du lịch đã sắp xếp sẵn trong lịch trình tour của bạn rồi, bạ chỉ cần "xách balo lên và đi" thôi nhé.
<br>
Thông thường các tour miền Tây trọn gói sẽ có lịch trình tham quan thêm những địa điểm du lịch để hành trình thêm phong phú, thú vị hơn. Một lưu ý nhỏ đó là bạn nên tìm hiểu kỹ và lựa chọn đại lý du lịch uy tín, chất lượng để đặt dịch vụ nhé.
<br>
Trên đây là toàn bộ kinh nghiệm di chuyển khi đi du lịch Cần Thơ mà BestPrice muốn chia sẻ với bạn. Hy vọng những thông tin hữu ích này sẽ giúp chuyến du lịch khám phá Miền Tây của bạn trở nên trọn vẹn và thú vị hơn.</p>
HTML,
            'booking_info' => '0944-555-666'
        ]);

        Location::create([
            'name' => 'Phan Thiết',
            'image' => '/image/phanthiet.avif',
            'description' => 'Thành phố có tuyến đường ven biển đẹp dài hàng chục km.',
            'transportation' => <<<HTML
<h2>Di chuyển đến Phan Thiết</h2>
<p><strong>Tàu hỏa</strong><br>
Phương tiện tàu hỏa được xem là một trong những cách đi du lịch Phan Thiết từ mọi miền phổ biến và an toàn nhất. Tàu hỏa có khả năng giúp bạn di chuyển phù hợp với túi tiền, sức khỏe đảm bảo đáp ứng nhu cầu cho chuyến du lịch gia đình, bạn bè đông người. Đây là phương tiện khá an toàn, giá cả khá mềm, không những thế, trong quá trình di chuyển, bạn có thể tranh thủ ngắm cảnh, check-in những tấm ảnh xịn xò trong suốt chuyến đi từ Sài gòn đến Phan Thiết. Trong các phương tiện di chuyển đến Phan Thiết từ Sài Gòn, tàu hỏa là phương tiện đảm bảo an toàn nhất cho bạn. Tuy nhiên, nhược điểm lớn nhất của phương tiện tàu hỏa chính là chiếm kha khá thời gian của bạn đấy nhé.
<br>
Với lựa chọn di chuyển bằng tàu hỏa, bạn nên đến Ga Sài Gòn để mua vé trước. Đối với chuyến đi từ Sài Gòn ra Phan Thiết, bạn có thể chọn tàu mang số hiệu SPT1 và SPT4. Tàu mang số hiệu SPT1 sẽ di chuyển vào buổi sáng, còn SPT4 sẽ chạy vào buổi tối những ngày cuối tuần mà thôi. Vì vậy, nếu muốn trải nghiệm đi du lịch bằng tàu hỏa, bạn nên sắp xếp lịch trình phù hợp nhé.
<br>
Thông thường, giá tàu từ Sài Gòn đến Phan Thiết chỉ tầm khoảng 100.000VNĐ/ người. Giá vé tương đối mềm, rất phù hợp cho những chuyến đi từ 5 người trở lên. Đây chắc chắn là phương tiện di chuyển nằm trong kế hoạch đi chơi tiết kiệm chi phí của nhiều bạn. Ngoài ra, một điều lưu ý lớn nhất bạn phải cẩn trọng trong kinh nghiệm du lịch Bình Thuận, khi đi tàu hỏa bạn nên chọn đúng ga xuống là Phan Thiết chứ đừng xuống ở ga Mương Mán nhé. Ga Mương Mán tương đối cách xa thành phố, nếu đến nhầm ga, bạn vừa phải tốn thêm tiền di chuyển mà tương đối phí thời gian nữa.</p>
<img src="https://mia.vn/media/uploads/blog-du-lich/tham-khao-cac-phuong-tien-di-chuyen-den-phan-thiet-tu-sai-gon-2-1657446226.jpg" alt="ga Phan Thiết">
<p><strong>Xe khách</strong><br>
Trong các phương tiện di chuyển đến Phan Thiết từ Sài Gòn, xe khách là phương tiện giúp bạn tiết kiệm thời gian nhất. Hiện nay, có rất nhiều hãng xe khách chất lượng cao cung cấp dịch vụ vận chuyển hành khách trên tuyến đường từ Sài Gòn đi Phan Thiết. Một vài hãng xe khách tiêu biểu như: Phương Trang, Hạnh Cafe, Thủy Hà Linh...
<br>
Hầu như các hãng xe khách bây giờ chuyên cung cấp nhiều dịch vụ vận chuyển hành khách giường nằm thoải mái, chất lượng tốt. Giá xe cũng tương đối rẻ, chỉ dao động trong khoảng từ 90.000VNĐ đến 150.000VNĐ. Ngoài ra, nếu muốn đi xe khách nhưng có cảm giác riêng tư, bạn nên chọn đến dịch vụ xe Limousine. Giá xe Limousine gia đình có giá tầm khoảng 250.000VNĐ đến 300.000VNĐ. Xe khách Limousine gia đình cũng sẽ mang đến cho bạn một trải nghiệm thú vị, thoải mái và tiết kiệm thời gian hơn. Do đó, xe khách là một trong các phương tiện di chuyển đến Phan Thiết từ Sài Gòn bạn cần phải note lại nếu muốn có một chuyến du lịch tiết kiệm hơn.
</p>
<img src="https://mia.vn/media/uploads/blog-du-lich/tham-khao-cac-phuong-tien-di-chuyen-den-phan-thiet-tu-sai-gon-4-1657446226.jpg" alt="du lịch Phan Thiết">
<h2>Những cung đường bạn có thể đi phượt từ Sài Gòn vào Phan Thiết</h2>
<p><strong>Cung đường 1</strong><br>
Xuất phát từ Sài Gòn, bạn bắt đầu di chuyển đến Quốc lộ 1A. Sau đó di chuyển tiếp đến Mũi Kê Gà. Bắt đầu từ địa điểm Mũi Kê Gà, bạn sẽ bắt gặp đoạn đường ven biển và hướng vào thành phố Phan Thiết. Sau khi vào được đoạn đường này, bạn chỉ cần tiếp tục đi theo hướng đã định sẵn sẽ vào được trung tâm thành phố. Tuy nhiên, cung đường này có quãng đường hơi xa một chút, nhưng bù lại bạn sẽ được ngắm nhiều cảnh đẹp thú vị hơn.<br>
Giá thuê xe máy dao động từ 100.000đ – 150.000đ/ngày. Bạn có thể lựa chọn một số địa chỉ cho thuê xe máy trong thành phố hoặc liên hệ với các khách sạn Đà Lạt, homestay mà bạn đặt để thuê xe. Một số điểm cho thuê xe máy được nhiều du khách lựa chọn:</p>
<p><strong>Cung đường 2</strong><br>
Khi xuất phát từ trung tâm Sài gòn, bạn phải đi ra đường Quốc lộ 1A để di chuyển đến địa phận tỉnh Bình Thuận. Khi tới đây, bạn rẽ trái đi vào ngã ba Suối Cát, sau đó tiếp tục di chuyển thắng vào trung tâm Phan Thiết. Đoạn đường này tương đối khá đơn giản, bạn không cần quá phụ thuộc vào Google Maps. Không những thế, cung đường đi vào ngã ba Suối Cát, giúp bạn tiết kiệm được thời gian và nhiều chi phí khác nữa. Quãng đường này không có quá nhiều cảnh đẹp hay check-in trên quãng đường số 2 nhé.
</p>
<img src="https://mia.vn/media/uploads/blog-du-lich/tham-khao-cac-phuong-tien-di-chuyen-den-phan-thiet-tu-sai-gon-3-1657446226.jpg" alt="đi phượt">
<p>Các phương tiện di chuyển đến Phan Thiết từ Sài Gòn được chuyên mục cẩm nang du lịch của MIA.vn chia sẻ tất tần tật ở trên sẽ giúp bạn khám phá được nhiều điều thú vị khác nhau. Mỗi phương tiện sẽ đều mang đến cho bạn những cảnh đẹp và trải nghiệm đặc trưng. Nếu thuộc kiểu người đam mê du lịch phượt, khám phá bản thân bạn nên chọn di chuyển bằng xe máy. Nếu thích thong dong ngắm nhìn cảnh đẹp và an toàn, tàu hỏa là phương tiện duy nhất đáp ứng nhu cầu của bạn. Ngoài ra, nếu bạn có kế hoạch đi du lịch cùng gia đình thì xe khách là lựa chọn hợp lý nhất.
<br>
Hi vọng với các phương tiện di chuyển đến Phan Thiết từ Sài Gòn, bạn sẽ sắp xếp được một tour du lịch phù hợp cho bản thân, gia đình và bạn bè thật hợp lý.
</p>
HTML,
            'booking_info' => '0944-555-666'
        ]);
    }
}
