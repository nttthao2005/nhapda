<?php include 'header.php'; ?>

  <div class="video-container">
      <video autoplay muted loop>
          <source src="videoplayback.mp4" type="video/mp4">
      </video>
      <div class="overlay">
          <div class="search-form container">
              <div class="row">
                  <div class="col-md-12"> 
                      <div class="input-group mb-3">
                          <input type="text" class="form-control" placeholder="Bạn muốn đi đâu?"> &nbsp;
                          <span class="input-group-text"><i class="fas fa-map-marker-alt" style="font-size: 25px;"></i></span>
                          <button class="btn" type="button">Tìm kiếm</button>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <section class="section-container">
    <div class="container">
      <div class="row align-items-center">
        <!-- Left content -->
        <div class="col-lg-6  text-center offset-lg-1">
            <h2 class="section-heading">Hãy đến với HOA CỎ !</h2>
            <p class="sub-heading">Khám phá những điều kỳ diệu của miền Trung Việt Nam cùng Hoa Cỏ! Chúng tôi chuyên giới thiệu các địa điểm du lịch hấp dẫn, danh lam thắng cảnh tuyệt đẹp, văn hóa lễ hội đặc sắc và ẩm thực địa phương phong phú của khu vực này.</p>
            <p class="">Với mỗi chuyến đi, bạn sẽ được trải nghiệm vẻ đẹp độc đáo và sự đa dạng văn hóa của miền Trung. Từ những bãi biển xinh đẹp đến các di tích lịch sử, từ những lễ hội truyền thống đầy màu sắc đến những món ăn ngon miệng, chúng tôi sẽ đồng hành cùng bạn trong hành trình khám phá vùng đất này.</p>
                    
            <!-- Highlight Box -->
            <div class="highlight-box">
              <div class="row">
                        <div class="col-6">
                  <p><i class="fas fa-camera"></i> Danh Lam thắng cảnh</p>
                  <p><i class="fas fa-theater-masks"></i> Văn hóa lễ hội đặc sắc</p>
                </div>
                <div class="col-6">
                  <p><i class="fas fa-map-marker-alt"></i> Nhiều điểm đến hấp dẫn</p>
                  <p><i class="fas fa-utensils"></i> Ẩm thực địa phương phong phú</p>
                </div>                    
              </div>
            </div>
        </div>
        
        <!-- Right image -->
        <div class="col-lg-4  text-center"> 
            <div class="travel-image">
                <img src="vidu3.png" alt="Travel Image" class="img-fluid">
            </div>
        </div>
      </div>
    </div>
  </section>

  
<!-- Các điểm đến nổi bật -->
    <section class="section-container">
        <div class="container-md">
          <h2 class="section-heading text-center"> CÁC ĐIỂM ĐẾN NỔI BẬT<i class="fas fa-route"></i></h2> <!-- Tiêu đề cho phần card -->
          <div class="row row-cols-1 row-cols-md-3 g-4 row-spacing">
            <div class="col">
              <div class="card">
                <img src="https://nld.mediacdn.vn/2020/9/20/ba-na-mo-cua-tro-lai-10-16005678342571877068250.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title"><i class="fas fa-map-marker-alt"></i> ĐÀ NẴNG</h5>
                  <a href="destination.php?location=danang" class="card-text">Xem chi tiết</a> <!-- Thay đoạn văn thành link -->
                </div>
              </div>
            </div>
            <div class="col">
                <div class="card">
                  <img src="https://dulichdemen.vn/wp-content/uploads/2023/10/pho-co-hoi-an-du-lich-de-men-vn.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-map-marker-alt"></i> HỘI AN</h5>
                    <a href="#" class="card-text">Xem chi tiết</a> <!-- Thay đoạn văn thành link -->
                  </div>
                </div>
              </div>
            <div class="col">
              <div class="card">
                <img src="https://ik.imagekit.io/tvlk/blog/2023/03/du-lich-mien-trung-8.jpg?tr=dpr-2,w-675" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title"><i class="fas fa-map-marker-alt"></i> HUẾ</h5>
                  <a href="#" class="card-text">Xem chi tiết</a> <!-- Thay đoạn văn thành link -->
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="https://baoxaydung.com.vn/stores/news_dataimages/2023/122023/13/20/in_article/image00120231213204445.jpg?rt=20231213204447" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title"><i class="fas fa-map-marker-alt"></i> NHA TRANG</h5>
                  <a href="#" class="card-text">Xem chi tiết</a> <!-- Thay đoạn văn thành link -->
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="https://ik.imagekit.io/tvlk/blog/2023/03/du-lich-mien-trung-12.jpg?tr=dpr-2,w-675" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title"><i class="fas fa-map-marker-alt"></i> PHÚ YÊN</h5>
                  <a href="#" class="card-text">Xem chi tiết</a> <!-- Thay đoạn văn thành link -->
                </div>
              </div>
            </div>
            <div class="col">
                <div class="card">
                  <img src="https://ik.imagekit.io/tvlk/blog/2023/03/du-lich-mien-trung-11.jpg?tr=dpr-2,w-675" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-map-marker-alt"></i> BÌNH ĐỊNH</h5>
                    <a href="#" class="card-text">Xem chi tiết</a> <!-- Thay đoạn văn thành link -->
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card">
                  <img src="https://res.klook.com/image/upload/fl_lossy.progressive,q_85/c_fill,w_1000/v1686739813/slys867yzmsyu5m8tvj8.webp" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-map-marker-alt"></i> QUẢNG BÌNH</h5>
                    <a href="#" class="card-text">Xem chi tiết</a> <!-- Thay đoạn văn thành link -->
                  </div>
                </div>
              </div>
          </div>
      </div>
    </section>


<!-- Những món ăn ko thể bỏ qua -->
      <section class="section-container" id="foodcard">
        <div class="container">
          <h2 class="section-heading text-center"> NHỮNG MÓN ĂN KHÔNG THỂ BỎ QUA <i class="fas fa-utensils"></i></h2>
          <div class="page" data-page="1">
            <!-- Row 1 -->
            <div class="row justify-content-center"  >
              <div class="col-md-5">
                <div class="card mb-3" style="max-width: 540px;">
                  <div class="row g-0">
                    <div class="col-md-4">
                      <img src="https://statics.vincom.com.vn/xu-huong/0-0-0-0-mon-ngon-mien-trung/image5.png" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title">CAO LẦU</h5>
                        <p class="card-text">Cao lầu là đặc sản Quảng Nam nổi bật với sợi mì dai giòn qua nhiều công đoạn chế biến tỉ mỉ. Món ăn gồm thịt heo thái mỏng, chan nước dùng, và ăn kèm húng lủi, rau đắng, tạo nên hương vị hấp dẫn không thể cưỡng lại.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-5">
                <div class="card mb-3" style="max-width: 540px;">
                  <div class="row g-0">
                    <div class="col-md-4">
                      <img src="https://statics.vincom.com.vn/xu-huong/0-0-0-0-mon-ngon-mien-trung/image15.png" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title">BÚN BÒ HUẾ</h5>
                        <p class="card-text">Bún bò Huế là món ngon miền Trung khiến du khách say mê với nước dùng hầm từ xương, đậm đà mặn mà của mắm ruốc và cay nồng từ sả. Tô bún thường có khoanh giò heo béo ngậy và miếng chả Huế sần sật.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Row 2 -->
            <div class="row justify-content-center"  >
              <div class="col-md-5">
                <div class="card mb-3" style="max-width: 540px;">
                  <div class="row g-0">
                    <div class="col-md-4">
                      <img src="https://statics.vincom.com.vn/xu-huong/0-0-0-0-mon-ngon-mien-trung/image32.png" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title">CƠM HẾN</h5>
                        <p class="card-text">Cơm hến là đặc sản miền Trung được nhiều người yêu thích, đặc biệt dành cho những ai thích ăn cay. Hến được xào với gia vị cay nồng, tạo cảm giác tê đầu lưỡi. Món ăn thường được thêm topping như tóp mỡ, đậu phộng và xoài, mang đến hương vị hấp dẫn.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-5">
                <div class="card mb-3" style="max-width: 540px;">
                  <div class="row g-0">
                    <div class="col-md-4">
                      <img src="https://statics.vincom.com.vn/xu-huong/0-0-0-0-mon-ngon-mien-trung/image31.png" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title">CHÁO LƯƠN NGHỆ AN</h5>
                        <p class="card-text">Cháo lươn là đặc sản nổi tiếng của Nghệ An, được làm từ lươn đồng tươi ngon, thịt chắc và ngọt. Để tránh vị tanh, món ăn được nấu với hành lá và rau răm, tạo nên hương vị thơm ngon, hấp dẫn.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Row 3 -->
            <div class="row justify-content-center"  >
              <div class="col-md-5">
                <div class="card mb-3" style="max-width: 540px;">
                  <div class="row g-0">
                    <div class="col-md-4">
                      <img src="https://file.hstatic.net/200000714303/file/dac-san-mat-ca-ngu-dai-duong_9a1c2d3679fa4b66a9a0853cdf6eb8f7_grande.jpg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title">MẮT CÁ NGỪ PHÚ YÊN</h5>
                        <p class="card-text">Mắt cá ngừ đại dương là món đặc sản Phú Yên không thể bỏ qua. Được chế biến tỉ mỉ, mắt cá sau khi sơ chế được hầm cùng thuốc bắc như táo tàu và kỷ tử, tạo nên hương vị ngọt thanh, bổ dưỡng và dễ chịu.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-5">
                <div class="card mb-3" style="max-width: 540px;">
                  <div class="row g-0">
                    <div class="col-md-4">
                      <img src="https://statics.vincom.com.vn/xu-huong/0-0-0-0-mon-ngon-mien-trung/image19.png" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title">BÁNH HỎI CHÁO LÒNG</h5>
                        <p class="card-text">Bánh hỏi cháo lòng là đặc sản miền Trung nổi bật với hương vị thơm ngon của gạo, sự dai giòn của lòng, tươi mới của rau sống, và vị ngọt từ nước mắm. </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="page" data-page="2" style="display: none;">
            <!-- Row 1 -->
            <div class="row justify-content-center" >
              <div class="col-md-5">
                <div class="card mb-3" style="max-width: 540px;">
                  <div class="row g-0">
                    <div class="col-md-4">
                      <img src="https://photo.znews.vn/w660/Uploaded/kbd_bcvi/2018_11_09/28468559_1973960409487441_1882579528375339681_n.jpg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title">XỎ LÒI PHÚ YÊN</h5>
                        <p class="card-text">"Xỏ lòi" là món ăn vặt đặc trưng ở Phú Yên, gồm thịt xiên, thịt gói lá lốt và chả ram nướng trên than hoa, ăn kèm rau sống và nước mắm tỏi ớt cay.Nước chấm là linh hồn của món ăn, thường rất cay và đậm đà.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-5">
                <div class="card mb-3" style="max-width: 540px;">
                  <div class="row g-0">
                    <div class="col-md-4">
                      <img src="https://mia.vn/media/uploads/blog-du-lich/banh-canh-he-phu-yen-mon-an-linh-hon-cho-cac-tin-do-me-he-1636733561.jpg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title">BÁNH CANH HẸ PHÚ YÊN</h5>
                        <p class="card-text">Bánh canh hẹ là đặc sản Phú Yên, nổi bật với màu xanh của hẹ và sợi bánh dai mềm. Món ăn gồm chả cá hấp và chiên vàng, cùng nước lèo từ cá tươi, ngọt tự nhiên mà không ngấy. Du khách nên thưởng thức để không tiếc nuối khi đến xứ “hoa vàng trên cỏ xanh.”</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Row 2 -->
            <div class="row justify-content-center" >
              <div class="col-md-5">
                <div class="card mb-3" style="max-width: 540px;">
                  <div class="row g-0">
                    <div class="col-md-4">
                      <img src="https://statics.vincom.com.vn/xu-huong/0-0-0-0-mon-ngon-mien-trung/image40.png" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title">MÌ QUẢNG</h5>
                        <p class="card-text">Mì Quảng là món ăn nổi tiếng ở Quảng Nam - Đà Nẵng, mang hương vị đặc trưng miền Trung. Tô mì đầy tôm, thịt heo, bùi béo của đậu phộng, cùng nước lèo đậm đà, ăn kèm rau sống và bánh tráng.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-5">
                <div class="card mb-3" style="max-width: 540px;">
                  <div class="row g-0">
                    <div class="col-md-4">
                      <img src="https://statics.vincom.com.vn/xu-huong/0-0-0-0-mon-ngon-mien-trung/image29.png" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title">BÁNH ÍT BÌNH ĐỊNH</h5>
                        <p class="card-text">Bánh ít lá gai là sự hòa quyện hoàn hảo giữa sự ngọt thanh của đường, dẻo thơm từ gạo nếp. Bánh ít lá gai là đặc sản Bình Định nhưng sau này cách làm bánh được phổ biến nên trở thành đặc sản chung của Việt Nam.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Row 3 -->
            <div class="row justify-content-center" >
              <div class="col-md-5">
                <div class="card mb-3" style="max-width: 540px;">
                  <div class="row g-0">
                    <div class="col-md-4">
                      <img src="https://statics.vincom.com.vn/xu-huong/0-0-0-0-mon-ngon-mien-trung/image2.png" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title">NEM CHUA THANH HÓA</h5>
                        <p class="card-text">Nem chua là đặc sản nổi tiếng của Thanh Hóa, được du khách yêu thích mang về làm quà. Món ăn có vị giòn của bì lợn, chua từ thịt lên men, và cay của ớt, cùng hương vị độc đáo từ lá đinh lăng.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-5">
                <div class="card mb-3" style="max-width: 540px;">
                  <div class="row g-0">
                    <div class="col-md-4">
                      <img src="https://statics.vincom.com.vn/xu-huong/0-0-0-0-mon-ngon-mien-trung/image11.png" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title">NEM NƯỚNG NHA TRANG</h5>
                        <p class="card-text">Nem nướng Nha Trang là món đặc sản miền Trung, làm từ thịt heo sạch nướng trên bếp than. Món ăn bao gồm nem nướng, bánh tráng cuốn, chả ram giòn, rau sống và nước chấm từ mắm nêm, đậu phộng.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="page" data-page="3" style="display: none;">
            <div class="row justify-content-center"  >
              <!-- Row 1 -->
              <div class="col-md-5">
                <div class="card mb-3" style="max-width: 540px;">
                  <div class="row g-0">
                    <div class="col-md-4">
                      <img src="https://mms.img.susercontent.com/vn-11134513-7r98o-lsvcya6jv0skef@resize_ss1242x600!@crop_w1242_h600_cT" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title">BÁNH CUỐN TÂY SƠN</h5>
                        <p class="card-text">Bánh cuốn Tây Sơn là món đặc sản ở Bình Định, gồm bánh tráng cuốn thịt xiên nướng, chả ram, trứng và rau sống. Món ăn mang hương vị đậm đà, đặc biệt nhờ nước chấm thơm ngon.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-5">
                <div class="card mb-3" style="max-width: 540px;">
                  <div class="row g-0">
                    <div class="col-md-4">
                      <img src="https://statics.vincom.com.vn/xu-huong/0-0-0-0-mon-ngon-mien-trung/image37.png" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title">CHÁO CANH</h5>
                        <p class="card-text">Cháo canh là món ăn sáng quen thuộc của người dân Quảng Bình, làm từ bột mì cắt thành sợi và nấu với xương heo, chả cá, tôm, cua. Món ăn được ăn kèm hành tây, rau thái nhỏ và mắm ớt cay, mang đến hương vị quê hương mà du khách không thể bỏ qua.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Row 2 -->
            <div class="row justify-content-center"  >
              <div class="col-md-5">
                <div class="card mb-3" style="max-width: 540px;">
                  <div class="row g-0">
                    <div class="col-md-4">
                      <img src="https://statics.vincom.com.vn/xu-huong/0-0-0-0-mon-ngon-mien-trung/image25.png" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title">CHÈ HEO QUAY</h5>
                        <p class="card-text">Description for card 4.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-5">
                <div class="card mb-3" style="max-width: 540px;">
                  <div class="row g-0">
                    <div class="col-md-4">
                      <img src="https://banhkhome.com/uploads/images/banh-canh-ca-loc.jpg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title">BÁNH CANH CÁ LÓC</h5>
                        <p class="card-text">Bánh canh, đặc biệt là bánh canh cá lóc ở Quảng Trị và Huế, được yêu thích bởi người dân và du khách. Món ăn gồm sợi bánh canh từ bột gạo và thịt cá lóc, nổi bật với độ dai và vị ngọt tự nhiên.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Row 3 -->
            <div class="row justify-content-center"  >
              <div class="col-md-5">
                <div class="card mb-3" style="max-width: 540px;">
                  <div class="row g-0">
                    <div class="col-md-4">
                      <img src="https://cdn.eva.vn/upload/3-2021/images/2021-09-15/quan-banh-hue-nam-sau-trong-hem-ban-hon-50-nam-van-tap-nap-nguoi-an-banh-beo-o-le-594035-1631691119-829-width800height600.jpg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title">CÁC MÓN BÁNH HUẾ</h5>
                        <p class="card-text">Huế nổi tiếng với nhiều món bánh đặc sắc như bánh bèo, bánh nậm, bánh bột lọc và bánh khoái. Mỗi loại bánh đều mang hương vị độc đáo, thể hiện sự phong phú của ẩm thực cố đô.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-5">
                <div class="card mb-3" style="max-width: 540px;">
                  <div class="row g-0">
                    <div class="col-md-4">
                      <img src="https://statics.vincom.com.vn/xu-huong/0-0-0-0-mon-ngon-mien-trung/image9.png" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title">BÚN CÁ NHA TRANG</h5>
                        <p class="card-text">Bún cá Nha Trang là món ngon miền Trung, nấu từ cá, nước dùng xương heo và cà chua. Món ăn có sợi bún mềm, vị ngọt thanh và kết hợp cùng rau sống, tạo hương vị đậm đà.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
          <nav aria-label="Page navigation example">
          <ul class="pagination justify-content-center">
            <li class="page-item"><a class="page-link"  onclick="showPage(1)">1</a></li>
            <li class="page-item"><a class="page-link"  onclick="showPage(2)">2</a></li>
            <li class="page-item"><a class="page-link"  onclick="showPage(3)">3</a></li>
          </ul>
        </nav>

      </div>
      </section>
      <script>
        function showPage(page) {
        // Hide all pages
          const pages = document.querySelectorAll('.page');
          pages.forEach(p => p.style.display = 'none');

          // Show selected page
          const selectedPage = document.querySelector(`.page[data-page="${page}"]`);
          if (selectedPage) {
            selectedPage.style.display = 'block';
          }
        }
      </script>

  <section class="section-container" id="vh-lh">
  <div class="container-md">
  <h2 class="section-heading text-center"> VĂN HÓA-LỄ HỘI ĐẶC SẮC <i class="fas fa-theater-masks"></i></h2>
    <div class="row row-cols-1 row-cols-md-2 g-4">
      <div class="col">
        <div class="card">
          <img src="https://binhdinh.gov.vn/publish/thumbnail/2005340/1170x658xdefault/upload/2005340/20211201/Cau_ngu_4_89526.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Lễ hội Cầu Ngư</h5>
            <p class="card-text">
                    +Thời gian: ngày đầu năm hoặc vào tháng Giêng âm lịch, tùy thuộc vào từng địa phương.<br>
                    +Địa điểm: Các tỉnh ven biển như Quảng Ngãi, Bình Định, Phú Yên, Khánh Hòa, và Thừa Thiên-Huế.<br>
                    +Ý nghĩa: Cầu nguyện cho biển bình an, ngư dân an lành và mùa đánh bắt bội thu, thể hiện lòng biết ơn với các vị thần bảo hộ.<br>
            </p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="https://bcp.cdnchinhphu.vn/334894974524682240/2022/4/5/kt-16491291184891710918981.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Lễ hội Kate</h5>
            <p class="card-text">
                    +Thời gian: ngày 1 tháng 7 âm lịch hàng năm.<br>
                    +Địa điểm: Tỉnh Ninh Thuận, chủ yếu tại các làng của người Chăm như Phan Rang, Phan Thiết, và các địa phương khác có cộng đồng người Chăm sinh sống.<br>
                    +Ý nghĩa: Tưởng nhớ các vị thần, tổ tiên và cầu nguyện cho mùa màng bội thu, gia đình ấm no.<br>
            </p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="https://giadinh.mediacdn.vn/296230595582509056/2023/1/17/hoi-vat-lang-sinh-1673937863937245019755.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Lễ hội vật Làng Sình</h5>
            <p class="card-text">
                    +Thời gian: Ngày 10 tháng Giêng âm lịch hàng năm.<br>
                    +Địa điểm: Làng Sình, xã Phú Mỹ, huyện Phú Vang, tỉnh Thừa Thiên Huế.<br>
                    +Ý nghĩa: Tưởng nhớ các vị thần, cầu mong sức khỏe, mùa màng bội thu và bình an cho cộng đồng. Lễ hội Vật Làng Sình là dịp tôn vinh thể thao và gìn giữ bản sắc văn hóa của miền Trung.<br>
            </p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="..." class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>
        </div>
      </div>
    </div>
      </div>
  </section>

    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 6"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="6" aria-label="Slide 7"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="7" aria-label="Slide 8"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://m.baotuyenquang.com.vn/media/images/2024/03/Anh-2(1).jpg" class="d-block w-100" alt="anh 1" >
                <div class="carousel-caption d-none d-md-block">
                    <h5>ĐÀ NẴNG</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://vcdn1-dulich.vnecdn.net/2022/05/22/3-Ganh-Da-Dia-Xa-An-Ninh-Dong-6856-2221-1653188298.jpg?w=0&h=0&q=100&dpr=1&fit=crop&s=SEFRlIA7eVwOR-bXNY0Inw" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>PHÚ YÊN</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://cafebiz.cafebizcdn.vn/162123310254002176/2023/1/9/thap-banh-it2-19072104-1673247089985-1673247090117864881018.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>BÌNH ĐỊNH</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://i2.ex-cdn.com/crystalbay.com/files/content/2024/06/04/cam-nang-du-lich-quang-binh-35-1807.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>QUẢNG BÌNH</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://go2joy.s3.ap-southeast-1.amazonaws.com/blog/wp-content/uploads/2022/05/07113815/khu-di-tich-ham-rong-thanh-hoa.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>THANH HÓA</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://och.vn/cms/wp-content/uploads/2021/03/12.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>NHA TRANG</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://www.elle.vn/wp-content/uploads/2023/06/16/533647/Hoa-dang-Hoi-An-pixabay-CUONG_ART.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>HỘI AN</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://i2.ex-cdn.com/crystalbay.com/files/content/2024/05/14/du-lich-ninh-thuan-17-1125.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>NINH THUẬN - BÌNH THUẬN</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <?php include 'footer.php'; ?>