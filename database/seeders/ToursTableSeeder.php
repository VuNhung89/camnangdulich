<?php

namespace Database\Seeders;

use App\Models\Tour;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ToursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tour::create([
            'location_id' => 1,
            'title' => 'Khám phá vịnh Hạ Long',
            'description' => <<<HTML
<p><strong>Khám phá kỳ quan thiên nhiên thế giới tại Vịnh Hạ Long</strong></p>
<p>Tham gia tour 3 ngày 2 đêm để đắm mình trong vẻ đẹp hùng vĩ của Vịnh Hạ Long, Quảng Ninh – di sản UNESCO với hơn 1.900 đảo đá vôi độc đáo. Hành trình đưa bạn len lỏi qua các hang động kỳ bí, chèo kayak giữa làn nước xanh ngọc, và tận hưởng không gian sang trọng trên du thuyền 5 sao.</p>
<img src="https://special.nhandan.vn/30-nam-mot-chang-duong-di-san-Vinh-Ha-Long/assets/HLCklusX0n/things-to-do-in-ha-long-bay-banner-1-1920x1080.jpg" alt="vịnh Hạ Long">
<p><strong>Lịch trình chi tiết:</strong></p>
<ul>
    <li><strong>Ngày 1</strong>: Khởi hành từ Hà Nội, lên du thuyền, tham quan hang Sửng Sốt, đảo Titop. Thưởng thức hải sản tươi ngon và ngắm hoàng hôn.
            <img src="https://img.baoninhbinh.org.vn/DATA/ARTICLES/2024/9/14/top-6-canh-dep-ha-long-ve-dem-thu-hut-du-khach-qc--7d523.png" alt="du thuyền">
    </li>
    <li><strong>Ngày 2</strong>: Chèo kayak tại làng chài Cửa Vạn, khám phá hang Luồn, tham gia lớp nấu ăn trên du thuyền. Tối: Thư giãn với tiệc rượu dưới ánh sao.
            <img src="https://cdn.media.dulich24.com.vn/bai-viet/cam-nang-du-lich-ha-long-2025-29102653/6a4ed7a2-3135-490e-bdfe-283ada9f3d1e.jpg" alt="chèo kayak">
    </li>
    <li><strong>Ngày 3</strong>: Đón bình minh, tập Thái Cực Quyền, tham quan đảo Ngọc Vừng, trở về Hà Nội.
            <img src="https://vecaptreo.com/wp-content/uploads/2020/08/ve-cap-treo-nu-hoang-ha-long00029.jpg" alt="đón bình minh">
    </li>
</ul>
<p><strong>Điểm nhấn:</strong> Trải nghiệm ngủ đêm trên du thuyền, ngắm cảnh biển lấp lánh, và thưởng thức các món đặc sản như chả mực Hạ Long, hàu nướng phô mai.</p>
<p><strong>Phù hợp với:</strong> Gia đình, cặp đôi, nhóm bạn yêu thích thiên nhiên và khám phá.</p>
<p>Hãy đặt tour ngay hôm nay để trải nghiệm hành trình đáng nhớ tại một trong những điểm đến đẹp nhất thế giới!</p>
HTML,
            'price' => 920.78,
            'start_date' => '2025-01-28',
            'end_date' => '2025-01-30',
            'image' => '/image/halong_tour.jpg',
        ]);

        Tour::create([
            'location_id' => 7,
            'title' => 'Du lịch Đà Lạt mộng mơ',
            'description' => <<<HTML
<p><strong>Khám phá thành phố ngàn hoa Đà Lạt</strong></p>
<p>Tham gia tour 6 ngày 5 đêm để tận hưởng không khí se lạnh và cảnh sắc thơ mộng của Đà Lạt, Lâm Đồng – “tiểu Paris” của Việt Nam. Hành trình đưa bạn qua những đồi thông xanh mướt, hồ nước trong trẻo, và những vườn hoa rực rỡ, mang đến kỳ nghỉ lãng mạn và thư giãn.</p>
<img src="https://www.dulichdalat.city/media/upload/images/kinh-nghiem-du-lich-da-lat/pasted%20image%200.png" alt="Đà Lạt">
<p><strong>Lịch trình chi tiết:</strong></p>
<ul>
    <li><strong>Ngày 1-2</strong>: Tham quan Thung Lũng Tình Yêu, Đồi Chè Cầu Đất, chụp ảnh tại quảng trường Lâm Viên. Thưởng thức bánh tráng nướng và cà phê sáng.
        <img src="https://digiticket.vn/blog/wp-content/uploads/2022/01/DalaLand-Da-Lat-9.jpg" alt="ảnh Đà Lạt">
    </li>
    <li><strong>Ngày 3-4</strong>: Săn mây trên đỉnh Langbiang, khám phá Thác Datanla bằng máng trượt, thăm Làng Cù Lần. Tối: Dạo chợ đêm Đà Lạt, mua quà lưu niệm.
        <img src="https://bazantravel.com/cdn/medias/uploads/81/81292-doi-vo-anh-1-700x740.jpg" alt="săn mây">
    </li>
    <li><strong>Ngày 5-6</strong>: Tham quan Nhà thờ Con Gà, vườn dâu tây, thưởng thức lẩu gà lá é, trở về điểm xuất phát.
        <img src="https://digiticket.vn/blog/wp-content/uploads/2022/01/vuon-dau-da-lat-19.jpg" alt="vườn dâu">
    </li>
</ul>
<p><strong>Điểm nhấn:</strong> Săn mây, khám phá văn hóa bản địa, thưởng thức kem bơ, sữa đậu nành nóng.</p>
<p><strong>Phù hợp với:</strong> Cặp đôi, gia đình muốn kỳ nghỉ lãng mạn.</p>
<p>Đặt tour ngay để cảm nhận nét quyến rũ của Đà Lạt!</p>
HTML,
            'price' => 278.02,
            'start_date' => '2025-02-14',
            'end_date' => '2025-02-19',
            'image' => '/image/dalat_tour.jpg',
        ]);

        Tour::create([
            'location_id' => 4,
            'title' => 'Tham quan di tích Cố đô Huế',
            'description' => <<<HTML
<p><strong>Khám phá nét văn hóa và lịch sử tại Cố đô Huế</strong></p>
<p>Tham gia tour 3 ngày 2 đêm để khám phá Huế – cố đô Việt Nam với những di tích lịch sử và nét văn hóa đặc sắc. Hành trình đưa bạn qua các cung điện, lăng tẩm, và sông Hương thơ mộng, hòa mình vào không gian trầm mặc và thanh lịch.</p>
<img src="https://dulichconvoi.com/wp-content/uploads/2024/03/352521770_6922050131.jpg" alt="cố đô Huế">
<p><strong>Lịch trình chi tiết:</strong></p>
<ul>
    <li><strong>Ngày 1</strong>: Tham quan Đại Nội, Kinh thành Huế, tìm hiểu lịch sử triều Nguyễn. Thưởng thức bún bò Huế và bánh bèo.
            <img src="https://khamphahue.com.vn/Portals/0/Medias/Nam2022/T10/QuanTheDiTichCoDoHue-1.jpg" alt="đại nội Huế">
    </li>
    <li><strong>Ngày 2</strong>: Thăm lăng Tự Đức, lăng Khải Định, chùa Thiên Mụ. Tối: Đi thuyền trên sông Hương, nghe nhã nhạc cung đình.
            <img src="https://thanhnienviet.mediacdn.vn/91575133199802368/2025/1/2/z61862544290600f29690bad96829fbcb78c84836046b7-1735708069045333336263-1735781552473-1735781552618841423639.jpg" alt="tham quan">
    </li>
    <li><strong>Ngày 3</strong>: Khám phá chợ Đông Ba, thưởng thức chè Huế, trở về điểm xuất phát.
            <img src="https://khamphahue.com.vn/Portals/0/Hue24h/AmThuc/2021/Khamphahue_AmThucDanGian-1.jpg" alt="ẩm thực">
    </li>
</ul>
<p><strong>Điểm nhấn:</strong> Tìm hiểu lịch sử triều Nguyễn, trải nghiệm nhã nhạc cung đình, thưởng thức ẩm thực Huế tinh tế.</p>
<p><strong>Phù hợp với:</strong> Gia đình, những ai yêu thích lịch sử, văn hóa và ẩm thực truyền thống.</p>
<p>Đặt tour ngay để cảm nhận nét thanh lịch của Cố đô Huế!</p>
HTML,
            'price' => 450.00,
            'start_date' => '2025-04-10',
            'end_date' => '2025-04-12',
            'image' => '/image/hue_tour.jpeg',
        ]);

        Tour::create([
            'location_id' => 5,
            'title' => 'Dạo phố cổ Hội An về đêm',
            'description' => <<<HTML
<p><strong>Đắm mình trong ánh đèn lồng phố cổ Hội An</strong></p>
<p>Tham gia tour 3 ngày 2 đêm để khám phá Hội An, Quảng Nam – di sản văn hóa thế giới với vẻ đẹp cổ kính và huyền ảo. Hành trình đưa bạn dạo bước dưới ánh đèn lồng lung linh, thả đèn hoa đăng trên sông Hoài, và trải nghiệm văn hóa địa phương.</p>
<img src="https://drt.danang.vn/content/images/2024/09/hoi-an-ve-dem-co-gi-dep-1.jpg" alt="Hội An về đêm">
<p><strong>Lịch trình chi tiết:</strong></p>
<ul>
    <li><strong>Ngày 1</strong>: Tham quan Chùa Cầu, nhà cổ Tấn Ký, hội quán Phúc Kiến. Tối: Dạo phố cổ, thưởng thức cao lầu.
            <img src="https://tourbanahills.vn/wp-content/uploads/2023/06/hoi-quan-quang-dong.jpg" alt="hội quán Phúc Kiến">
    </li>
    <li><strong>Ngày 2</strong>: Thả đèn hoa đăng trên sông Hoài, tham gia lớp làm đèn lồng thủ công, thăm làng gốm Thanh Hà. Thưởng thức bánh mì Phượng.
            <img src="https://phuot3mien.com/wp-content/uploads/2024/04/lang-gom-thanh-ha-o-hoi-an-cam-nhan-net-tai-hoa-tu-doi-ban-tay-rmwU.jpg" alt="làng gốm">
    </li>
    <li><strong>Ngày 3</strong>: Khám phá chợ Hội An, mua quà lưu niệm, trở về điểm xuất phát.
            <img src="https://hoianmemoriesland.com/public/media//blog/195413_1.jpg" alt="chợ Hội An">
    </li>
</ul>
<p><strong>Điểm nhấn:</strong> Ánh đèn lồng rực rỡ, trải nghiệm làm đèn lồng, thưởng thức ẩm thực đặc trưng.</p>
<p><strong>Phù hợp với:</strong> Cặp đôi, gia đình, những ai yêu thích văn hóa và sự lãng mạn.</p>
<p>Đặt tour ngay để cảm nhận vẻ đẹp huyền ảo của Hội An!</p>
HTML,
            'price' => 320.75,
            'start_date' => '2025-02-02',
            'end_date' => '2025-02-04',
            'image' => '/image/hoian_tour.png',
        ]);

        Tour::create([
            'location_id' => 6,
            'title' => 'Nghỉ dưỡng tại resort Nha Trang',
            'description' => <<<HTML
<p><strong>Tận hưởng kỳ nghỉ sang trọng tại Nha Trang</strong></p>
<p>Tham gia tour 4 ngày 3 đêm để thư giãn tại Nha Trang, Khánh Hòa – thiên đường biển với bãi cát trắng và nước xanh biếc. Hành trình mang đến kỳ nghỉ đẳng cấp tại resort 5 sao, kết hợp khám phá đảo và văn hóa địa phương.</p>
<img src="https://cdn.vntrip.vn/cam-nang/wp-content/uploads/2017/04/vinpearl-nha-trang.jpg" alt="Nha Trang">
<p><strong>Lịch trình chi tiết:</strong></p>
<ul>
    <li><strong>Ngày 1</strong>: Check-in resort sát biển, thư giãn với spa, thưởng thức hải sản tại nhà hàng ven biển.
            <img src="https://static.vinwonders.com/2022/02/du-lich-nha-trang-tu-tuc-1.jpg" alt="checkin">
    </li>
    <li><strong>Ngày 2</strong>: Đi tàu đáy kính ngắm san hô ở Hòn Mun, tham quan VinWonders với các trò chơi hiện đại.
            <img src="https://statics.vinpearl.com/lan-bien-nha-trang-03_1635674598.jpg" alt="lặn biển">
    </li>
    <li><strong>Ngày 3</strong>: Thăm Tháp Bà Ponagar, khám phá văn hóa Chăm Pa, dạo chợ đêm Nha Trang, thưởng thức nem nướng Ninh Hòa.
            <img src="https://cdn.xanhsm.com/2025/02/5ee007d9-cho-dem-nha-trang-5.jpg" alt="chợ đêm">
    </li>
    <li><strong>Ngày 4</strong>: Tự do tắm biển, mua quà lưu niệm, trở về điểm xuất phát.
            <img src="https://nhatrang-tourist.com/image/cache/catalog/untitled%20folder%203/nha%20trang%20m%C3%B9a%20n%C3%A0o%20%C4%91%E1%BA%B9p%20nh%E1%BA%A5t/du-lich-nha-trang-mua-nao-dep-nhat-2-1400x875.jpg" alt="ngắm biển">
    </li>
</ul>
<p><strong>Điểm nhấn:</strong> Nghỉ dưỡng cao cấp, ngắm san hô, thưởng thức hải sản tươi ngon.</p>
<p><strong>Phù hợp với:</strong> Gia đình, cặp đôi muốn thư giãn và tận hưởng dịch vụ sang trọng.</p>
<p>Đặt tour ngay để trải nghiệm kỳ nghỉ hoàn hảo tại Nha Trang!</p>
HTML,
            'price' => 780.00,
            'start_date' => '2025-05-01',
            'end_date' => '2025-05-04',
            'image' => '/image/nhatrang_tour.jpg',
        ]);

        Tour::create([
            'location_id' => 3,
            'title' => 'Trải nghiệm săn mây ở Sapa',
            'description' => <<<HTML
<p><strong>Săn mây và khám phá văn hóa Tây Bắc tại Sapa</strong></p>
<p>Tham gia tour 4 ngày 3 đêm để chinh phục Sapa, Lào Cai – “thành phố trong mây” với cảnh quan núi non hùng vĩ và văn hóa dân tộc độc đáo. Hành trình đưa bạn săn mây trên đỉnh Fansipan, khám phá các bản làng, và thưởng thức ẩm thực đặc trưng.</p>
<img src="https://cdn.ahit.vn/thanhthanhtours/wp-content/uploads/2024/10/15002407/du-lich-sapa-cover.jpg" alt="Sapa">
<p><strong>Lịch trình chi tiết:</strong></p>
<ul>
    <li><strong>Ngày 1</strong>: Khởi hành từ Hà Nội, đến Sapa, tham quan bản Cát Cát, tìm hiểu văn hóa dân tộc H’Mông. Tối: Dạo chợ đêm Sapa.
            <img src="https://www.kynghidongduong.vn/userfiles/images/Vietnam/Sapa/ban-cat-cat-sapa-kynghidongduong.vn.jpg" alt="bản Cát Cát">
    </li>
    <li><strong>Ngày 2</strong>: Săn mây trên đỉnh Fansipan bằng cáp treo, tham quan Thác Bạc, Cổng Trời. Thưởng thức lợn cắp nách và rượu táo mèo.
            <img src="https://www.vietfuntravel.com.vn/image/data/Hinh-SaPa/981-thong-tin-cong-troi-sapa-nam-o-dau/thong-tin-cong-troi-sapa-nam-o-dau-h6.jpg" alt="cổng trời">
    </li>
    <li><strong>Ngày 3</strong>: Khám phá bản Tả Van, ruộng bậc thang, trải nghiệm làm bánh chưng với người dân địa phương.
            <img src="https://amazinghotel.com.vn/wp-content/uploads/2023/07/Optimized-ruong-bac-thang-sapa.jpg" alt="ruộng bậc thang">
    </li>
    <li><strong>Ngày 4</strong>: Ngắm bình minh, tham quan núi Hàm Rồng, trở về Hà Nội.
            <img src="https://www.kynghidongduong.vn/images/destination/img1/2_nui-ham-rong-sapa-kynghidongduong-vn.jpg" alt="núi hàm rồng">
    </li>
</ul>
<p><strong>Điểm nhấn:</strong> Săn mây huyền ảo, văn hóa dân tộc, thưởng thức thắng cố, cá hồi nướng.</p>
<p><strong>Phù hợp với:</strong> Nhóm bạn, phượt thủ, yêu thiên nhiên.</p>
<p>Đặt tour ngay để trải nghiệm Sapa kỳ diệu!</p>
HTML,
            'price' => 635.50,
            'start_date' => '2025-03-05',
            'end_date' => '2025-03-08',
            'image' => '/image/sapa_tour.jpg',
        ]);
    }
}
