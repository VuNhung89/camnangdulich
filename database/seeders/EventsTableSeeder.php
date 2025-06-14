<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Event::create([
            'title' => 'Lễ hội Chùa Hương',
            'location' => 'Mỹ Đức, Hà Nội.',
            'image' => '/image/chua-huong.webp',
            'description' => <<<HTML
<p><strong>Lễ hội Chùa Hương - Nét đẹp đặc trưng của miền Bắc dịp Tết</strong></p>
<img src="https://lh3.googleusercontent.com/0bVnhSBPQaLvibwc9DBa0LVva7TSY0vJZDmrXHsEVyEb3o0N6XaVO9aScmfQa6egLWda-t0tkzhzYOXtquPmOtDEGwjeFBcPMqznhrB6j83LqHsHxtMpltZd50NSuv54lHyBCqRRvwX8St2xdGl2tA" alt="chùa Hương">
<p>Nhắc đến những lễ hội lớn nhất của miền Bắc dịp Tết, chúng ta không thể bỏ qua lễ hội chùa Hương - Lễ hội được ví von như “hành trình về đất Phật” và nhận được sự quan tâm của đông đảo khách du lịch. Hãy cùng Vietjet tìm hiểu thêm về lễ hội chùa Hương để hiểu vì sao đây là điểm đến mà bạn không thể bỏ qua khi du lịch dịp Tết nhé.</p>
<p><strong>1. Giới thiệu về lễ hội chùa Hương</strong>Hằng năm, khi hoa mơ nở trắng núi rừng Hương Sơn là lúc hàng triệu Phật tử bốn phương nô nức thi nhau trẩy hội mùa xuân, tạo nên một không khí vừa linh thiêng vừa nhộn nhịp.
    Lễ hội chùa Hương gắn liền với tín ngưỡng dân gian thờ Chúa Ba. Tương truyền rằng công chúa Diệu Thiện tu hành 9 năm tại Hương Sơn, sau đó đắc đạo thành Phật để phổ độ chúng sanh. Thời điểm mà công chúa Diệu Thiện đắc đạo cũng chính là giữa mùa Xuân, trăm hoa đua nở, cây cỏ xanh tươi, vạn vật tương sinh tương ái.

Tháng 3 năm 1770, Chúa Trịnh Sâm trong chuyến tuần du tại Trấn Sơn Nam đã đến chùa Hương Tích vãn cảnh, thắp hương và đề lên cửa động 5 chữ “Nam Thiên Đệ Nhất Động”. Điều này đã biến động Hương Tích trở thành một di tích lớn, tạo tiền đề cho sự hình thành lễ Chùa Hương sau này. Đến năm 1896, niên hiệu Thành Thái thứ 8, lễ hội chùa Hương mới chính thức được tổ chức như một lễ hội thực thụ và là một trong những lễ hội lớn nhất Việt Nam.
<br>
Ý nghĩa lễ hội chùa Hương nằm trọn vẹn trong phần lễ và phần hội. Phần lễ thể hiện cho tín ngưỡng thờ cúng của tổng thể các tôn giáo Việt Nam lúc bây giờ, bao gồm Phật Giáo, Nho Giáo và Đạo giáo. Phần hội Chùa Hương thể hiện sự kết nối, hòa quyện giữa con người và thiên nhiên, gia tăng sức mạnh đoàn kết dân tộc. Ngoài ra, lễ hội chùa Hương còn thể hiện khát vọng của con người Việt Nam chất phác, mong muốn hòa hợp giữa thực và mơ, tục và tiên, hành động và trao quyền.</p>
<p><strong>Lễ hội chùa Hương diễn ra ở đâu?</strong> Lễ chùa Hương diễn ra trên địa bàn xã Hương Sơn, thuộc địa phận huyện Mỹ Đức, tỉnh Hà Tây. Xã Hương Sơn bao gồm 6 thôn: Tiên Mai, Phú Yên, Hội Xá, Đục Khê, Yến Vĩ và Hạ Đoàn.</p>
<p><strong>Chi tiết về lễ hội chùa Hương</strong>Phần lễ của lễ hội chùa Hương rất đặc sắc và thể hiện trọn vẹn tín ngưỡng thờ cúng dân gian của người miền Bắc nói riêng. 

Hội chùa Hương bắt đầu vào mùng 6 tháng Giêng (âm lịch) với lễ khai sơn hay còn gọi lễ mở cửa rừng ở làng Yến Vỹ và Phú Yên. Nghi lễ khai sơn vốn là nghi lễ nông nghiệp của người Việt cổ để tạ thần núi, tạ chúa sơn lâm và cầu mong một năm mưa thuận gió hòa, gặp nhiều may mắn. Ngày nay, lễ khai sơn chứa hàm ý mới là mở cửa chùa, khai lễ. Buổi lễ sẽ trưng bày hương, đèn, nến, hoa, hoa quả, đồ chay…, sau đó các vị tăng ni mặc áo cà sa tiến hành cúng bái theo nghi thức. 

Ngoài ra, trong ngày khai hội cũng có lễ hội dâng hương để tưởng nhớ các vị tướng của vua Hùng do nhà chức trách của địa phương tổ chức.
<br>
Phần hội của lễ hội chùa Hương cũng đặc sắc không kém và là phần thu hút đông đảo du khách tham gia. Cụ thể, phần hội sẽ bao gồm nhiều hoạt động văn hóa, vui chơi giải trí diễn ra trên các tuyến đường, thôn làng của xã Hương Tích. Chẳng hạn như chèo thuyền, leo núi, hát chầu văn… 

Vào những ngày này, khi đi dọc trên các bến đò hay tuyến đường của Hương Tích, du khách luôn luôn nghe được những làn điệu dân ca hát chèo, hát xẩm rất độc đáo và thú vị. Lễ chùa Hương ngày càng tấp nập và đông vui đến tháng 3 mới “hạ nhiệt”.
</p>
<img src="https://lh5.googleusercontent.com/oQ_AhXTOI9u4lgVc85nk8TDhZrNMZqqYSqkfj8jVhuaEl5HBzTRgRvnvNRNAFIyh4fL8IhBye3OueIWv42VfH8ra0P8r7ynvRkOerSycKO9zq3z7C7AmNks6jKNBoZRpARXZ12l8N4yfjSkV6lpExQ" alt="lễ hội">
<p><strong>Kinh nghiệm đi lễ hội chùa Hương</strong> Nếu đây là lần đầu bạn tham gia trải nghiệm lễ hội chùa Hương thì đây là những “mách nhỏ” rất hữu ích mà bạn nên “bỏ túi” để phòng thân:
<br>
Theo dõi và cập nhật thông tin mua vé tham quan trực tuyến theo quy định mới của Ban Tổ chức.
<br>
Chuẩn bị đồ lễ tại nhà thay vì mua sắm trước chùa vì dễ bị người bán “chặt chém”.
<br>
Chuẩn bị đồ ăn nhẹ, nước uống, thuốc men gọn nhẹ… để chủ động hơn cho chuyến vui chơi.
<br>
Lựa chọn trang phục kín đáo, gọn gàng, lịch sự và tối màu để phù hợp với không gian chùa chiền tôn nghiêm, đồng thời cũng dễ dàng để di chuyển và thăm thú nhiều nơi hơn.
<br>
Vì mùa xuân miền Bắc khá dễ mưa và lạnh nên bạn hãy tìm hiểu trước thời tiết để chuẩn bị đồ bảo hộ cho mình.
<br>
Tự giữ gìn và bảo quản tư trang cẩn thận để không bị kể xấu lợi dụng móc túi, trộm cắp.
<br>
Nếu ở xa và di chuyển bằng máy bay thì bạn nên đặt vé từ sớm.</p>
HTML,
            'date' => '2025-02-15',
        ]);
        Event::create([
            'title' => 'Tết Nguyên Đán Hội An',
            'location' => 'Hội An',
            'image' => '/image/tet_hoian.jpg',
            'description' => <<<HTML
<p><strong>Hội An có gì vào dịp Tết Nguyên đán Ất Tỵ 2025?</strong></p>
<img src="https://hoiana.com/wp-content/uploads/2025/01/hoi-an-8104131_1280.webp" alt="tết Hội An">
<p>Tết Hội An 2025 là thời điểm phố cổ khoác lên mình vẻ đẹp rực rỡ và tràn đầy sức sống, trở thành điểm đến không thể bỏ lỡ cho những ai muốn tận hưởng không khí lễ hội truyền thống. Đây là lúc người dân địa phương cùng du khách khắp nơi hội tụ về phố Hội để thư giãn, vui chơi và đón nhận những điều may mắn đầu năm. Trong bài viết này, hãy cùng khám phá 10 hoạt động không thể bỏ lỡ tại Hội An trong dịp Tết 2025 để chuyến du xuân của bạn thêm phần trọn vẹn!</p>
<p><strong>Tết Hội An 2025 Diễn Ra Khi Nào</strong> 
Tết Nguyên Đán 2025, còn gọi là Tết Ất Tỵ, là dịp lễ quan trọng nhất trong năm đối với người Việt Nam, đánh dấu sự khởi đầu của năm mới theo lịch âm. Theo lịch dương, mùng 1 Tết Âm lịch 2025 rơi vào Thứ Tư, ngày 29/1/2025 dương lịch.
<br>
Tại Hội An, không khí Tết thường bắt đầu từ những ngày cuối tháng Chạp, khi người dân tất bật chuẩn bị cho năm mới. Các hoạt động chào mừng Tết Nguyên Đán thường diễn ra từ ngày 21/1 đến 7/2/2025, với nhiều chương trình văn hóa phong phú dành cho cả người dân và du khách.
</p>
<p><strong> Nếu bạn còn băn khoăn về những địa điểm du lịch Hội An  và trải nghiệm phù hợp trong dịp Tết Hội An. Dưới đây là các hoạt động không nên bỏ lỡ tại phố cổ Hội An.</p>
<p><strong>Tham Gia Lễ Hội Hoa Xuân – Bờ Hồ Trảng Kèo</strong> Dịp tết Ất Tỵ, hội chợ Hoa Xuân Hội An năm 2025 dự kiến diễn ra từ ngày 13/1/2025 (tức ngày 14 tháng Chạp) đến ngày 28/1/2025 (tức ngày 29 tháng Chạp) tại khu vực bờ Hồ Trảng Kèo, phường Cẩm Hà. Với tổng diện tích từ 6.000 đến 8.000 m², sự kiện năm nay được tổ chức với quy mô khoảng 500 gian hàng (mỗi gian hàng có diện tích 24m²). 
<br>
Hội chợ sẽ trưng bày và bán đa dạng các sản phẩm như hoa, cây cảnh, đồ gỗ mỹ nghệ, đồ trang trí, hàng Tết, và ẩm thực, hứa hẹn mang đến không khí rộn ràng và trải nghiệm mua sắm đặc sắc cho người dân và du khách.
</p>
<p><strong>Tham Quan Phố Cổ Hội An – Trung tâm Hội An, Quảng Nam</strong>
Phố cổ Hội An trong dịp Tết Nguyên Đán 2025 là bức tranh hoàn mỹ của sự hòa quyện giữa vẻ đẹp cổ kính và không khí rộn ràng mùa xuân. Những con đường nhỏ hẹp quen thuộc trở nên sạch sẽ, gọn gàng hơn, được tô điểm bởi những chậu hoa cúc vàng rực, cây quất sai trĩu quả và những cây cảnh tươi tốt.
<br>
Những ngôi nhà cổ vốn trầm mặc, nay như bừng tỉnh trong sắc xuân rộn ràng. Đèn lồng tỏa sáng, hoa mai khoe sắc, kết hợp với sự ấm cúng của những nghi lễ truyền thống đã tạo nên một Hội An vừa cổ kính, vừa rực rỡ trong những ngày đầu năm.
<br>
Tất cả những điều ấy làm nên một Hội An dịp Tết vừa gần gũi, vừa độc đáo. Dạo bước trong phố cổ, bạn không chỉ chiêm ngưỡng vẻ đẹp lung linh của không gian nơi đây mà còn cảm nhận được sự giao thoa giữa truyền thống và hiện đại, giữa sự rộn ràng của lễ hội và sự an yên trong tâm hồn.
</p>
<p><strong>Thả Đèn Hoa Đăng vào dịp Tết – Sông Hoài</strong>
Trong dịp Tết Nguyên Đán 2025, du khách có thể tham gia thả đèn hoa đăng Hội An vào đêm Giao thừa (28/1/2025) và các ngày đầu năm mới. Hoạt động bắt đầu từ khoảng 18h00 và kéo dài đến 22h00. Địa điểm chính là trên sông Hoài, đoạn từ cầu An Hội đến cầu Cẩm Nam, nơi dòng sông được thắp sáng bởi hàng nghìn chiếc đèn lồng và hoa đăng lung linh. 
<br>
Du khách có thể mua đèn hoa đăng từ những người bán dọc bờ sông với giá khoảng 5.000 VNĐ/chiếc. Sau khi thắp nến và cầu nguyện, nhẹ nhàng thả đèn xuống sông, gửi gắm những ước nguyện tốt đẹp cho bản thân và gia đình. Để có trải nghiệm đặc biệt hơn, bạn có thể thuê thuyền với giá từ 150.000 VNĐ/thuyền (cho 1-3 khách) để thả đèn từ giữa sông, tận hưởng không gian yên bình và ngắm nhìn phố cổ từ một góc nhìn khác.
</p>
<p><strong>Thưởng Thức Đặc Sản Hội An – Nhiều địa điểm</strong>
Du lịch Hội An dịp Tết Nguyên Đán 2025, du khách không thể bỏ qua cơ hội thưởng thức những món đặc sản Hội An nổi tiếng như cao lầu, cơm gà Hội An, mì Quảng hay bánh mì Hội An , mang đậm hương vị truyền thống và đặc trưng của vùng đất phố cổ. 
<br>
Điểm đặc biệt của Hội An là ngay cả trong dịp Tết Nguyên Đán, hầu hết các quán ăn vẫn mở cửa để phục vụ khách du lịch. Kể cả vào ngày cuối năm, đêm giao thừa hay mùng 1 Tết, bạn vẫn có thể tìm được những địa điểm ẩm thực hoạt động. Một số nơi nếu tạm nghỉ cũng sẽ mở cửa trở lại từ mùng 2, đảm bảo du khách không bỏ lỡ cơ hội thưởng thức ẩm thực Hội An ngay cả trong những ngày đầu năm mới.
</p>
<p><strong>Ghé Thăm Chùa Cầu – Phố Cổ Hội An</strong>
Chùa Cầu Hội An còn gọi là cầu Nhật Bản, là cây cầu cổ duy nhất còn lại tại Hội An, được xây dựng vào cuối thế kỷ 16 hoặc đầu thế kỷ 17 bởi các thương nhân Nhật Bản. Ban đầu, cây cầu được dựng lên để kết nối hai khu phố nhằm thuận tiện cho việc giao thương, nhưng qua nhiều thế kỷ, nơi đây đã trở thành biểu tượng văn hóa đặc trưng của Hội An.

Cầu dài 18m, bắc qua một lạch nước nhỏ chảy ra sông Thu Bồn, như một dải lụa mềm mại uốn mình giữa không gian yên bình của phố cổ. Phong cách kiến trúc “trên nhà dưới cầu” mang đậm dấu ấn Nhật Bản nhưng đã được biến tấu để phù hợp với văn hóa Việt Nam, tạo nên vẻ đẹp độc đáo và đầy sức sống.
</p>
<p><strong>Tham Quan Làng Gốm Thanh Hà – Phường Thanh Hà</strong>Làng gốm Thanh Hà nằm bên bờ sông Thu Bồn, cách trung tâm phố cổ Hội An khoảng 3 km về phía tây. Được hình thành từ thế kỷ 15-16, làng gốm này đã trải qua nhiều thăng trầm và hiện vẫn duy trì sản xuất, trở thành điểm đến hấp dẫn cho những ai muốn tìm hiểu về văn hóa và lịch sử địa phương.
<br>
Trong những ngày đầu xuân, làng gốm Thanh Hà thường tổ chức các hoạt động đón Tết, tạo không khí vui tươi và ấm áp. Du khách có thể tham gia trải nghiệm tự tay làm gốm dưới sự hướng dẫn của các nghệ nhân lành nghề, từ khâu nhào nặn đất sét đến tạo hình và trang trí sản phẩm.
<br>
Ngoài ra, du khách còn có thể tham quan Công viên Đất nung Thanh Hà, nơi trưng bày nhiều tác phẩm nghệ thuật độc đáo được làm từ gốm, bao gồm các mô hình thu nhỏ của những công trình kiến trúc nổi tiếng trên thế giới như Nhà Trắng, Kim Tự Tháp, Nhà thờ Đức Bà Paris, Tháp nghiêng Pisa.
</p>
HTML,
            'date' => '2025-01-29',
        ]);
        Event::create([
            'title' => 'Festival Áo Dài',
            'location' => 'Huế',
            'image' => '/image/aodai_festival.jpeg',
            'description' => <<<HTML
<p><strong>Tuần lễ Áo dài cộng đồng 2025 sắp diễn ra tại Huế</strong></p>
<img src="https://hafoodtours.com/wp-content/uploads/2018/01/Ao-Dai-Festival.jpg" alt="lễ hội áo dài truyền thống">
<p>Ngày 3.6, Sở Văn hóa và Thể thao TP Huế cho biết, Tuần lễ Áo dài cộng đồng 2025 sẽ khai mạc bằng chương trình nghệ thuật “Áo dài Huế” vào tối 6.6 tại cung An Định.
<br>
Trong khuôn khổ tuần lễ sẽ có nhiều hoạt động như hội thảo, quảng diễn, trình diễn nghệ thuật. Các điểm nhấn gồm: không gian trưng bày nghề may áo dài truyền thống; hoạt động đạp xe “Áo dài qua phố”; hành trình “Áo dài về nguồn” tại lăng Trường Thái và lăng vua Minh Mạng; chương trình nghệ thuật “Sắc màu văn hóa” và diễu hành “Việt Phong hội tụ”.
<br>
Ngoài ra còn có triển lãm, trình diễn bộ sưu tập áo dài ứng dụng nghệ thuật Điềm Phùng Thị; trình diễn “Áo dài với sản phẩm gốm Phước Tích”; phiên chợ quê kết hợp diễu hành “Áo dài về với di sản”; đêm hội “Áo dài - niềm vui của em”; lễ dâng hoa, dâng hương tại lăng Trường Thái; diễu hành tri ân Võ vương Nguyễn Phúc Khoát và Hoàng đế Minh Mạng.
<br>
Tuần lễ là hoạt động hưởng ứng Đề án “Huế - Kinh đô Áo dài”, nằm trong chuỗi sự kiện Năm Du lịch quốc gia và Festival Huế, nhằm khai thác giá trị văn hóa áo dài Huế, góp phần xây dựng thương hiệu du lịch đặc trưng.</p>
HTML,
            'date' => '2025-06-06',
        ]);
    }
}
