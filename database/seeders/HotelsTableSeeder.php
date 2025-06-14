<?php

namespace Database\Seeders;

use App\Models\Hotel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HotelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Hotel::create([
            'location_id' => 1,
            'name' => 'Khách sạn Biển Xanh',
            'address' => '123 Trần Phú, TP. Hạ Long',
            'price' => 261.430,
            'image' => '/image/halong_hotel.jpg',
            'description' => <<<HTML
<p><strong>Khách sạn Biển Xanh – Điểm nghỉ dưỡng lý tưởng tại Hạ Long</strong></p>
<img src="https://statics.vinpearl.com/kinh-nghiem-dat-phong-khach-san-o-ha-long-10_1636707649.jpg" alt="khách sạn Biển xanh">
<p>Tọa lạc trên con đường Trần Phú sôi động, Khách sạn Biển Xanh chỉ cách bãi biển Bãi Cháy vài bước chân, mang đến không gian nghỉ dưỡng gần gũi với thiên nhiên. Với thiết kế hiện đại, phòng ốc thoáng mát và đầy đủ tiện nghi, khách sạn là lựa chọn hoàn hảo cho du khách muốn khám phá Vịnh Hạ Long.</p>
<p><strong>Tiện ích nổi bật:</strong></p>
<ul>
    <li>Phòng nghỉ view biển hoặc thành phố, trang bị giường êm ái, Wi-Fi tốc độ cao.
        <img src="https://vetauthamvinhhalong.com/wp-content/uploads/2022/06/wyndham-legend-ha-long-2.jpg" alt="view biển">
    </li>
    <li>Nhà hàng phục vụ hải sản tươi sống như chả mực Hạ Long, tôm hùm nướng.
        <img src="https://vivuhalong.com/wp-content/uploads/2024/08/quan-hai-san-ha-long-0.jpg" alt="hải sản tươi sống">
    </li>
    <li>Dịch vụ đặt tour du thuyền, chèo kayak, và tham quan hang Sửng Sốt.
        <img src="https://www.tauhalong.vn/wp-content/uploads/2019/08/du-thuyen-catherine-2.jpg" alt="du thuyền">
    </li>
    <li>Quầy bar trên tầng thượng với tầm nhìn toàn cảnh vịnh.
        <img src="https://seastarscruise.com/upload_images/images/2024/07/09/bar-ha-long-3.png" alt="quầy bar">
    </li>
</ul>
<p><strong>Trải nghiệm gần đó:</strong> Dễ dàng di chuyển đến Sun World Hạ Long, chợ đêm, và bến tàu du lịch. Du khách có thể ngắm hoàng hôn tuyệt đẹp trên vịnh hoặc dạo phố cổ Hạ Long.</p>
<p><strong>Phù hợp với:</strong> Gia đình, cặp đôi, nhóm bạn muốn kết hợp nghỉ dưỡng và khám phá.</p>
<p>Đặt phòng ngay để tận hưởng kỳ nghỉ đáng nhớ tại Hạ Long!</p>
HTML
        ]);
        Hotel::create([
            'location_id' => 7,
            'name' => 'Khách sạn Hoa Đà Lạt',
            'address' => '45 Nguyễn Chí Thanh, Đà Lạt',
            'price' => 158.610,
            'image' => '/image/dalat_hotel.jpg',
            'description' => <<<HTML
<p><strong>Khách sạn Hoa Đà Lạt – Lãng mạn giữa thành phố ngàn hoa</strong></p>
<img src="https://hoadalattravel.vn/wp-content/uploads/2024/09/khach-san-view-dep-o-da-lat-28.jpeg" alt="khách sạn Hoa Đà Lạt">
<p>Nằm ngay trung tâm Đà Lạt, trên con đường Nguyễn Chí Thanh sầm uất, Khách sạn Hoa Đà Lạt chỉ cách chợ đêm và hồ Xuân Hương 5 phút đi bộ. Với phong cách kiến trúc nhẹ nhàng, ấm cúng, khách sạn mang đến cảm giác như ở nhà giữa không khí se lạnh của cao nguyên.</p>
<p><strong>Tiện ích nổi bật:</strong></p>
<ul>
    <li>Phòng nghỉ trang trí hoa tươi, view đồi thông hoặc thành phố, có lò sưởi ấm áp.
        <img src="https://baolamdong.vn/file/e7837c02845ffd04018473e6df282e92/052025/1_20250520131446.jpg" alt="phòng nghỉ">
    </li>
    <li>Quán cà phê sân vườn phục vụ kem bơ, sữa đậu nành nóng, và bánh tráng nướng.
        <img src="https://ezcloud.vn/wp-content/uploads/2024/08/quan-cafe-da-lat.webp" alt="quán cafe">
    </li>
    <li>Dịch vụ thuê xe máy, xe đạp để khám phá Thung Lũng Tình Yêu, Đồi Chè Cầu Đất.
        <img src="https://zoomtravel.vn/upload/news/thung-lung-tinh-yeu03012.jpg" alt="thung lũng tình yêu">
    </li>
    <li>Nhân viên thân thiện, hỗ trợ đặt tour săn mây Langbiang.
        <img src="https://toursanmay.vn/wp-content/uploads/2023/04/trai-nghiem-san-may-tai-thien-duong-san-may-1.jpg" alt="săn mây">
    </li>
</ul>
<p><strong>Trải nghiệm gần đó:</strong> Tham quan Nhà thờ Con Gà, quảng trường Lâm Viên, hoặc dạo chợ đêm để thưởng thức ẩm thực và mua đặc sản mứt Đà Lạt.</p>
<p><strong>Phù hợp với:</strong> Cặp đôi, gia đình nhỏ muốn tận hưởng không gian lãng mạn.</p>
<p>Đặt phòng ngay để cảm nhận hơi thở Đà Lạt!</p>

HTML
        ]);

        Hotel::create([
            'location_id' => 2,
            'name' => 'Khách sạn Ánh Dương',
            'address' => '89 Phạm Văn Đồng, Đà Nẵng',
            'price' => 199.990,
            'image' => '/image/danang_hotel.png',
            'description' => <<<HTML
<p><strong>Khách sạn Ánh Dương – Nghỉ dưỡng gần biển Mỹ Khê</strong></p>
<img src="https://3.bp.blogspot.com/-SnC8ULg-OOY/WHkbOkdhxAI/AAAAAAAAQ-4/D9kdgE_3doUQ23jxAnRmKCw9ErWxzAzkQCK4B/s1600/nhung-dia-chi-khach-san-vung-tau-dat-chuan-5-sao.jpg" alt="khách sạn Ánh Dương">
<p>Tọa lạc trên đường Phạm Văn Đồng, Khách sạn Ánh Dương cách bãi biển Mỹ Khê – một trong những bãi biển đẹp nhất thế giới – chỉ 500m. Với mức giá hợp lý và dịch vụ chu đáo, khách sạn là lựa chọn lý tưởng cho du khách muốn tận hưởng biển xanh và thành phố sôi động.</p>
<p><strong>Tiện ích nổi bật:</strong></p>
<ul>
    <li>Phòng nghỉ hiện đại, sạch sẽ, có ban công view biển hoặc cầu Rồng.
        <img src="https://www.samdihotel.vn/uploads/image/images/_I5A5276%20copy(1).jpg" alt="phòng nghỉ">
    </li>
    <li>Nhà hàng phục vụ đặc sản Đà Nẵng như mì Quảng, bánh tráng cuốn thịt heo.
        <img src="https://bazantravel.com/cdn/medias/uploads/84/84306-nha-hang-hai-cang-danang-700x466.jpg" alt="nhà hàng">
    </li>
    <li>Dịch vụ thuê xe máy, đặt tour Ngũ Hành Sơn, Bà Nà Hills, Hội An.
        <img src="https://danangsensetravel.com/view-800/at_gioi-thieu-ve-ba-na-hills_e7801426a1ba773d4ab032e36b110795.jpg" alt="Bà Nà Hill">
    </li>
    <li>Nhân viên thân thiện, hỗ trợ 24/7, cung cấp thông tin quán ăn ngon.
        <img src="https://dulichviet24h.vn/wp-content/uploads/2023/11/an-gi-o-ba-na-hills-1.jpg" alt="món ăn">
    </li>
</ul>
<p><strong>Trải nghiệm gần đó:</strong> Dạo cầu Rồng, cầu Tình Yêu, hoặc thưởng thức hải sản tươi sống tại các nhà hàng ven biển. Chợ đêm Sơn Trà chỉ cách 10 phút đi xe.</p>
<img src="https://daivietourist.vn/wp-content/uploads/2024/10/cho-dem-son-tra-3.jpg" alt="chợ đêm Sơn Trà">
<p><strong>Phù hợp với:</strong> Gia đình, nhóm bạn, khách du lịch tiết kiệm.</p>
<p>Đặt phòng ngay để khám phá Đà Nẵng năng động!</p>
HTML
        ]);
        Hotel::create([
            'location_id' => 3,
            'name' => 'Sapa Green Hotel',
            'address' => '10 Fansipan, Sapa',
            'price' => 245.000,
            'image' => '/image/sapa_hotel.jpg',
            'description' => <<<HTML
<p><strong>Sapa Green Hotel – Nơi ngắm mây núi Tây Bắc</strong></p>
<img src="https://image.vietgoing.com/hotel/01/04/medium/vietgoing_zkg2301032094.webp" alt="khách sạn">
<p>Nằm trên đường Fansipan, Sapa Green Hotel nổi bật với tầm nhìn tuyệt đẹp ra dãy Hoàng Liên Sơn và thung lũng Mường Hoa. Khách sạn mang phong cách hiện đại kết hợp nét văn hóa dân tộc, mang đến không gian ấm cúng giữa khí hậu mát mẻ của Sapa.</p>
<p><strong>Tiện ích nổi bật:</strong></p>
<ul>
    <li>Phòng nghỉ rộng rãi, trang bị lò sưởi, view núi hoặc ruộng bậc thang.
        <img src="https://media-cdn.tripadvisor.com/media/photo-s/1a/54/2a/bf/sapa-green-hotel.jpg" alt="view phòng">
    </li>
    <li>Buffet sáng phong phú với đặc sản như thắng cố, lợn cắp nách, và bánh chưng đen.
        <img src="https://oms.hotdeal.vn/images/editors/sources/000357607128/357607-khach-san-Sapa-Green-Hotel-body-16.jpg" alt="nhà hàng">
    </li>
    <li>Dịch vụ đặt tour săn mây Fansipan, thăm bản Cát Cát, Tả Van.
        <img src="https://stcd02265632633.cloud.edgevnpay.vn/website-vnpay-public/fill/2023/8/0896si7ydd251692341686052.jpg" alt="bản Cát Cát">
    </li>
    <li>Quầy bar ấm áp với rượu táo mèo và trà thảo mộc địa phương.
        <img src="https://elitetour.com.vn/files/images/Blogs/Sapa-Sky-View-Restaurant-Bar-0.jpg" alt="quầy bar">
    </li>
</ul>
<p><strong>Trải nghiệm gần đó:</strong> Khám phá núi Hàm Rồng, Thác Bạc, hoặc dạo chợ đêm Sapa để mua thổ cẩm và thưởng thức đồ nướng.</p>
<img src="https://media-cdn-v2.laodong.vn/storage/newsportal/2024/7/4/1361872/Rsz_Cho_Dem_Sapa_1.jpg?w=800&crop=auto&scale=both" alt="chợ đêm Sapa">
<p><strong>Phù hợp với:</strong> Nhóm bạn, cặp đôi, những ai yêu thiên nhiên và văn hóa bản địa.</p>
<p>Đặt phòng ngay để hòa mình vào Sapa huyền ảo!</p>
HTML
        ]);
        Hotel::create([
            'location_id' => 5,
            'name' => 'Hội An Boutique Hotel',
            'address' => '15 Bạch Đằng, Hội An',
            'price' => 310.500,
            'image' => '/image/hoian_hotel.jpg',
            'description' => <<<HTML
<p><strong>Hội An Boutique Hotel – Sắc màu phố cổ</strong></p>
<img src="https://sonhoianhotel.com/wp-content/uploads/2022/09/A7R5324-HDR-1024x683.jpg" alt="khách sạn">
<p>Nằm trên con đường Bạch Đằng thơ mộng, Hội An Boutique Hotel chỉ cách phố cổ Hội An 2 phút đi bộ, là điểm dừng chân lý tưởng để khám phá di sản văn hóa thế giới. Với thiết kế hoài cổ, khách sạn mang đến không gian thanh lịch, đậm chất Hội An.</p>
<p><strong>Tiện ích nổi bật:</strong></p>
<ul>
    <li>Phòng nghỉ trang trí đèn lồng, nội thất gỗ, view sông Hoài hoặc phố cổ.
        <img src="https://images.trvl-media.com/lodging/4000000/3850000/3844100/3844071/ea7deec9.jpg?impolicy=fcrop&w=1200&h=800&p=1&q=medium" alt="phòng nghỉ">
    </li>
    <li>Bữa sáng ngon miệng với cao lầu, bánh mì Phượng, và trái cây tươi.
        <img src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/501250434.jpg?k=ef94bfc5cf47f892cbb1fcb86038b5e71430da12062f1babd395c1c1925d1fbf&o=&hp=1" alt="nhà hàng">
    </li>
    <li>Dịch vụ thuê xe đạp miễn phí để dạo phố, đặt tour làng gốm Thanh Hà, Cù Lao Chàm.
        <img src="https://suntravelgroup.vn/media/4090/2.jpeg?width=1300&height=720&mode=crop" alt="cù lao chàm">
    </li>
    <li>Hồ bơi nhỏ xinh và sân thượng ngắm ánh đèn lồng về đêm.
        <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/29/d9/4b/0c/hoi-an-central-boutique.jpg?w=900&h=500&s=1" alt="hồ bơi">
    </li>
</ul>
<p><strong>Trải nghiệm gần đó:</strong> Thả đèn hoa đăng trên sông Hoài, thăm Chùa Cầu, hoặc dạo chợ đêm Hội An để mua quà lưu niệm.</p>
<img src="https://i2.ex-cdn.com/crystalbay.com/files/content/2024/07/31/chua-cau-hoi-an-2-0857.jpg" alt="chùa cầu">
<p><strong>Phù hợp với:</strong> Cặp đôi, gia đình yêu thích văn hóa và sự lãng mạn.</p>
<p>Đặt phòng ngay để đắm chìm trong vẻ đẹp Hội An!</p>
HTML
        ]);
        Hotel::create([
            'location_id' => 6,
            'name' => 'Sunrise Nha Trang Resort',
            'address' => '12 Trần Phú, Nha Trang',
            'price' => 520.000,
            'image' => '/image/nhatrang_hotel.jpg',
            'description' => <<<HTML
<p><strong>Sunrise Nha Trang Resort – Kỳ nghỉ sang trọng bên biển</strong></p>
<img src="https://www.vn.kayak.com/rimg/himg/38/97/60/expediav2-132173-15c1bf-239135.jpg?width=1366&height=768&crop=true" alt="resort">
<p>Tọa lạc trên đại lộ Trần Phú sầm uất, Sunrise Nha Trang Resort là khu nghỉ dưỡng 5 sao với bãi biển riêng và tầm nhìn ra vịnh Nha Trang tuyệt đẹp. Với kiến trúc Đông Dương sang trọng, resort mang đến trải nghiệm nghỉ dưỡng đẳng cấp.</p>
<p><strong>Tiện ích nổi bật:</strong></p>
<ul>
    <li>Phòng nghỉ rộng rãi, view biển, trang bị tiện nghi cao cấp như bồn tắm jacuzzi.
        <img src="https://bomanhatrang.com/wp-content/uploads/2023/03/Chill-out-room.jpg" alt="view phòng">
    </li>
    <li>Hồ bơi vô cực tuyệt đẹp, nhà hàng phục vụ hải sản tươi sống và món Âu.
        <img src="https://cdn-i.doisongphapluat.com.vn/resize/th/upload/2024/10/21/diem-ten-9-nha-hang-buffet-hai-san-ngon---re-nhat-nha-trang-13093502.jpg" alt="hải sản">
    </li>
    <li>Spa thư giãn, phòng gym hiện đại, và dịch vụ đặt tour đảo Hòn Mun, VinWonders.
        <img src="https://bevivu.com/wp-content/uploads/image7/2024/02/nha-trang-marriott-resort-spa070220241707291252.jpeg" alt="thư giãn">
    </li>
    <li>Quầy bar bãi biển với cocktail nhiệt đới và nhạc sống buổi tối.
        <img src="https://cdn1.nhatrangtoday.vn/images/photos/sailing-club-nha-trang-1.jpg" alt="club">
    </li>
</ul>
<p><strong>Trải nghiệm gần đó:</strong> Khám phá Tháp Bà Ponagar, Hòn Chồng, hoặc dạo chợ đêm Nha Trang để thưởng thức nem nướng Ninh Hòa.</p>
<img src="https://nhatrang-tourist.com/image/cache/catalog/untitled%20folder/B%C3%80I%20VI%E1%BA%BET/H%C3%B2n%20Ch%E1%BB%93ng/hon-chong-nha-trang-1-1400x875.jpg" alt="hòn chồng">
<p><strong>Phù hợp với:</strong> Gia đình, cặp đôi, khách công tác muốn nghỉ dưỡng cao cấp.</p>
<p>Đặt phòng ngay để tận hưởng kỳ nghỉ xa hoa tại Nha Trang!</p>
HTML
        ]);
    }
}
