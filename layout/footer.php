<nav class="footer">
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
            <a class="highlight" href="<?php echo $d['href'];?>">
              <div class="wrapper">
                <div class="ss-img">
                  <div class="img-bg" style="background-image:url('<?php echo $d['img'];?>');"></div>
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
        <h3 class="fw-400">TO DO</h3>
      </div>
    </div>
    <div class="panel-right">
      <div class="wrapper bg-t color-white">
        <h3 class="fw-400">TO DO</h3>
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