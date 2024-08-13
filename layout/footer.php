<nav class="footer" data-aos="fade-in" data-aos-delay="0">
  <div class="footer-top">
    <div class="swiper">
      <div class="swiper-wrapper">
        <?php
          foreach([
            [ 'img' => 'public/assets/app/images/highlight/01.jpg', 'title' => 'จัดซื้อจัดจ้าง', 'href' => '#' ],
            [ 'img' => 'public/assets/app/images/highlight/02.jpg', 'title' => 'รับสมัครงาน', 'href' => '#' ],
            [ 'img' => 'public/assets/app/images/highlight/03.jpg', 'title' => 'วิดีทัศน์', 'href' => '#' ],
            [ 'img' => 'public/assets/app/images/highlight/04.jpg', 'title' => 'Thailand Post Mart', 'href' => '#' ],
            [ 'img' => 'public/assets/app/images/highlight/05.jpg', 'title' => 'ร่วมประเมิน ITA', 'href' => '#' ],
          ] as $i=>$d){
        ?>
          <div class="swiper-slide">
            <a class="ss-card highlight" href="<?php echo $d['href'];?>">
              <div class="wrapper">
                <div class="ss-img">
                  <div class="img-bg" style="background-image:url('<?php echo $d['img'];?>');"></div>
                  <div class="ss-card-shine"></div>
                  <div class="line-1"></div>
                  <div class="line-2"></div>
                </div>
                <div class="tag bg-p color-white">
                  <h6 class="fw-400"><?php echo $d['title'];?></h6>
                </div>
              </div>
            </a>
          </div>
        <?php }?>
      </div>
    </div>
  </div>
  <div class="footer-middle bg-gray-04">
    <div class="panel-left bg-gray-03">
      <div class="wrapper d-flex ai-center">
        <p class="fw-400 color-white mr-3">ลงทะเบียนรับข่าวสาร</p>
        <form class="input-wrapper w-full">
          <input type="email" placeholder="กรุณากรอกอีเมล" require />
          <button class="btn btn-icon btn-p">
            <img src="public/assets/app/images/icon/paper-plane.svg" alt="Icon" />
          </button>
        </form>
      </div>
    </div>
    <div class="panel-right bg-gray-02">
      <div class="wrapper">
        <a href="#" class="btn btn-action btn-t w-full bradius-round">
          <em class="fa-solid fa-lock mr-2"></em>
          สำหรับพนักงานไปรษณีย์
        </a>
      </div>
    </div>
  </div>
  <div class="footer-body bg-p">
    <div class="panel-left">
      <div class="wrapper bg-white">
        <div class="d-flex">
          <a class="logo" href="#">
            <img src="public/assets/app/images/logo.png" alt="Logo" />
          </a>
        </div>
        <h6 class="fw-500 color-t mt-3 mb-3">บริษัท ไปรษณีย์ไทย จำกัด - สำนักงานใหญ่</h6>
        <div class="contact-lists">
          <div class="contact-item">
            <div class="icon color-p">
              <em class="fa-solid fa-location-dot"></em>
            </div>
            <div class="text">
              <p>111 ถนนแจ้งวัฒนะ แขวงทุ่งสองห้อง เขตหลักสี่ กทม. 10210-0299</p>
            </div>
          </div>
          <div class="d-flex ai-center fw-wrap">
            <div class="contact-item">
              <div class="icon color-p">
                <em class="fa-solid fa-phone"></em>
              </div>
              <div class="text">
                <p>โทรศัพท์ : <span class="p color-t fw-400">0 2831 3131</span> <span class="p xs-d-none">หรือ</span> </p>
              </div>
            </div>
            <div class="contact-item ml-1 ml-unset">
              <div class="icon color-p">
                <em class="fa-solid fa-fax"></em>
              </div>
              <div class="text">
              <p>โทรสาร : <span class="p color-t fw-400">0 2831 3550-1</span></p>
              </div>
            </div>
          </div>
          <div class="contact-item">
            <div class="icon color-p">
              <em class="fa-solid fa-envelope"></em>
            </div>
            <div class="text">
              <p>E-mail : <span class="p color-t fw-400">postalcare@thailandpost.co.th</span></p>
            </div>
          </div>
        </div>
        <div class="socials mt-4">
          <div class="wrapper">
            <a href="#" class="social fb">
              <div class="front"><em class="fa-brands fa-facebook-f"></em></div>
              <div class="back"><em class="fa-brands fa-facebook-f"></em></div>
            </a>
            <a href="#" class="social tw">
              <div class="front"><em class="fa-brands fa-twitter"></em></div>
              <div class="back"><em class="fa-brands fa-twitter"></em></div>
            </a>
            <a href="#" class="social yt">
              <div class="front"><em class="fa-brands fa-youtube"></em></div>
              <div class="back"><em class="fa-brands fa-youtube"></em></div>
            </a>
            <a href="#" class="social ig">
              <div class="front"><em class="fa-brands fa-instagram"></em></div>
              <div class="back"><em class="fa-brands fa-instagram"></em></div>
            </a>
            <a href="#" class="social ln">
              <div class="front"><em class="fa-brands fa-line"></em></div>
              <div class="back"><em class="fa-brands fa-line"></em></div>
            </a>
            <a href="#" class="social mg">
              <div class="front"><em class="fa-brands fa-facebook-messenger"></em></div>
              <div class="back"><em class="fa-brands fa-facebook-messenger"></em></div>
            </a>
          </div>
          <div class="hex-icon">
            <a class="hex hex-ig" href="https://www.instagram.com/lifeatsynerry/" target="_blank">
              <div class="wrapper"><em class="fa-brands fa-twitter"></em></div>
            </a>
            <a class="hex hex-ig hex-back" href="https://www.instagram.com/lifeatsynerry/" target="_blank">
              <div class="wrapper"><em class="fa-brands fa-twitter"></em></div>
            </a>
          </div>
          <div class="hex-icon">
            <a class="hex hex-yt" href="https://www.youtube.com/channel/UCJMXUE5qQiTcWwicqpHmPLg" target="_blank">
              <div class="wrapper"><em class="fa-brands fa-youtube"></em></div>
            </a>
            <a class="hex hex-yt hex-back" href="https://www.youtube.com/channel/UCJMXUE5qQiTcWwicqpHmPLg" target="_blank">
              <div class="wrapper"><em class="fa-brands fa-youtube"></em></div>
            </a>
          </div>
        <div class="hex-icon">
          <a class="hex hex-pr" href="https://www.pinterest.com/synerrylife/" target="_blank">
            <div class="wrapper"><em class="fa-brands fa-instagram"></em></div>
          </a>
          <a class="hex hex-pr hex-back" href="https://www.pinterest.com/synerrylife/" target="_blank">
            <div class="wrapper"><em class="fa-brands fa-instagram"></em></div>
          </a>
        </div>
        <div class="hex-icon">
          <a class="hex hex-ln" href="https://www.linkedin.com/in/synerry-corporation-thailand-co-ltd/" target="_blank">
            <div class="wrapper"><em class="fa-brands fa-line"></em></div>
          </a>
          <a class="hex hex-ln hex-back" href="https://www.linkedin.com/in/synerry-corporation-thailand-co-ltd/" target="_blank">
            <div class="wrapper"><em class="fa-brands fa-line"></em></div>
          </a>
        </div>
        <div class="hex-icon">
          <a class="hex hex-ln" href="https://www.linkedin.com/in/synerry-corporation-thailand-co-ltd/" target="_blank">
            <div class="wrapper"><em class="fa-brands fa-facebook-messenger"></em></div>
          </a>
          <a class="hex hex-ln hex-back" href="https://www.linkedin.com/in/synerry-corporation-thailand-co-ltd/" target="_blank">
            <div class="wrapper"><em class="fa-brands fa-facebook-messenger"></em></div>
          </a>
        </div>
      </div>
      </div>
    </div>
    <div class="panel-right">
      <div class="wrapper bg-t color-white">
        <div class="grids">
          <div class="grid lg-1-3 md-1-3 mt-0">
            <h6 class="color-white fw-400">ไปรษณีย์ไทย</h6>
            <div class="menu-container">
              <div class="menu">
                <div class="icon"><em class="fa-solid fa-play"></em></div>
                <a href="#" class="p title">ประวัติกิจการไปรษณีย์ไทย</a>
              </div>
              <div class="menu">
                <div class="icon"><em class="fa-solid fa-play"></em></div>
                <a href="#" class="p title">วิสัยทัศน์ พันธกิจ ค่านิยมและวัฒนธรรม</a>
              </div>
              <div class="menu">
                <div class="icon"><em class="fa-solid fa-play"></em></div>
                <a href="#" class="p title">องค์กร</a>
              </div>
              <div class="menu">
                <div class="icon"><em class="fa-solid fa-play"></em></div>
                <a href="#" class="p title">ทิศทางการดำเนินงานของ ปณท</a>
              </div>
              <div class="menu">
                <div class="icon"><em class="fa-solid fa-play"></em></div>
                <a href="#" class="p title">โครงสร้างองค์กร</a>
              </div>
              <div class="menu">
                <div class="icon"><em class="fa-solid fa-play"></em></div>
                <a href="#" class="p title">คณะกรรมการ</a>
              </div>
              <div class="menu">
                <div class="icon"><em class="fa-solid fa-play"></em></div>
                <a href="#" class="p title">ผู้บริหาร</a>
              </div>
              <div class="menu">
                <div class="icon"><em class="fa-solid fa-play"></em></div>
                <a href="#" class="p title">เครือข่ายไปรษณีย์</a>
              </div>
            </div>
          </div>  
          <div class="grid lg-1-3 md-1-3 mt-0">
            <h6 class="color-white fw-400">สินค้าและบริการ</h6>
            <div class="menu-container">
              <div class="menu">
                <div class="icon"><em class="fa-solid fa-play"></em></div>
                <a href="#" class="p title">บริการส่งพัสดุในประเทศ</a>
              </div>
              <div class="menu">
                <div class="icon"><em class="fa-solid fa-play"></em></div>
                <a href="#" class="p title">บริการส่งพัสดุต่างประเทศ</a>
              </div>
              <div class="menu">
                <div class="icon"><em class="fa-solid fa-play"></em></div>
                <a href="#" class="p title">บริการขนส่งพิเศษ</a>
              </div>
            </div>
            <a href="#" class="h6 d-block color-white fw-400 mt-3">คำถามที่พบบ่อย</a>
          </div>
          <div class="grid lg-1-3 md-1-3 mt-0">
            <h6 class="color-white fw-400">ข่าวจากไปรษณีย์ไทย</h6>
            <div class="menu-container">
              <div class="menu">
                <div class="icon"><em class="fa-solid fa-play"></em></div>
                <a href="#" class="p title">ข่าวประชาสัมพันธ์</a>
              </div>
              <div class="menu">
                <div class="icon"><em class="fa-solid fa-play"></em></div>
                <a href="#" class="p title">ข่าวจัดซื้อจัดจ้าง</a>
              </div>
              <div class="menu">
                <div class="icon"><em class="fa-solid fa-play"></em></div>
                <a href="#" class="p title">สมัครงาน - ประกาศ</a>
              </div>
              <div class="menu">
                <div class="icon"><em class="fa-solid fa-play"></em></div>
                <a href="#" class="p title">สื่อเผยแพร่</a>
              </div>
              <div class="menu">
                <div class="icon"><em class="fa-solid fa-play"></em></div>
                <a href="#" class="p title">ลิงก์ที่เกี่ยวข้อง</a>
              </div>
              <div class="menu">
                <div class="icon"><em class="fa-solid fa-play"></em></div>
                <a href="#" class="p title">ศูนย์ข้อมูลข่าวสาร</a>
              </div>
            </div>
            <p>CALL CENTER : <span class="color-p h2 fw-500">1545</span></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-bottom bg-p">
    <div class="panel">
      <p class="color-white">
        <a class="ws-nowrap color-white h-color-gray-04" href="#">นโยบายเว็บไซต์</a> | 
        <a class="ws-nowrap color-white h-color-gray-04" href="#">นโยบายการคุ้มครองข้อมูลส่วนบุคคล</a> | 
        <a class="ws-nowrap color-white h-color-gray-04" href="#">นโยบายการรักษาความมั่นคงปลอดภัยเว็บไซต์</a>
      </p>
    </div>
  </div>
</nav>