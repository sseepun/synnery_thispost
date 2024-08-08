<!DOCTYPE html>
<html lang="th">
<head>
  <?php include_once('include/header.php'); ?>
  <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
  <img class="img" src="public/assets/app/images/banner/01.jpg" alt="Banner" />
  <h3 class="fw-400">TO DO</h3>

  <section class="section-01 ovf-unset bshadow-02">
    <div class="services">
      <a class="service bg-gray-03 color-white" href="#">
        <div class="icon">
          <img src="public/assets/app/images/icon/calculator.svg" alt="Icon" />
        </div>
        <div class="text-center mt-2">
          <p class="sm fw-300 lh-xs">คำนวณอัตราค่าบริการ</p>
        </div>
      </a>
      <a class="service bg-gray-02 color-white" href="#">
        <div class="icon">
          <img src="public/assets/app/images/icon/search.svg" alt="Icon" />
        </div>
        <div class="text-center mt-2">
          <p class="sm fw-300 lh-xs">ค้นหาที่ทำการไปรษณีย์</p>
        </div>
      </a>
      <a class="service bg-p color-white" href="#">
        <div class="icon">
          <img src="public/assets/app/images/icon/protect.svg" alt="Icon" />
        </div>
        <div class="text-center mt-2">
          <p class="sm fw-300 lh-xs">การรับประกันและ<br />การชดใช้ค่าเสียหาย</p>
        </div>
      </a>
      <a class="service bg-s color-white" href="#">
        <div class="icon">
          <img src="public/assets/app/images/icon/member.svg" alt="Icon" />
        </div>
        <div class="text-center mt-2">
          <p class="sm fw-300 lh-xs">สมัครสมาชิก<br />เช็คคะแนน POST Family</p>
        </div>
      </a>
      <a class="service lg bg-t color-white" href="#">
        <div class="wrapper">
          <div class="d-flex ai-center w-full">
            <img src="public/assets/app/images/icon/target.svg" alt="Icon" 
              class="d-block mr-2" style="height:1.25rem; width:auto;"
            />
            <p class="fw-300">ตรวจสอบสถานะ EMS และไปรษณีย์ลงทะเบียน</p>
          </div>
          <div class="d-flex w-full mt-2">
            <input type="email" class="w-full" placeholder="กรุณาใส่หมายเลขการฝากส่ง" require />
            <button class="btn btn-icon btn-p">
              <img src="public/assets/app/images/icon/paper-plane.svg" alt="Icon" />
            </button>
          </div>
        </div>
      </a>
    </div>
  </section>
  
  <section class="section-02 section-padding">
    <div class="container">
      <div class="panel-left show-tablet">
        <div>
          <div class="ss-header">
            <img src="public/assets/app/images/logo-red.png" alt="Icon" />
            <p class="fw-400 lh-xxs color-p">THAILAND POST SERVICES</p>
          </div>
          <h3 class="fw-600 lh-xs color-t">บริการยอดนิยม</h3>
        </div>
        <div class="btns d-flex ai-end">
          <a href="#" class="btn btn-action btn-t bradius-round">
            บริการทั้งหมด
          </a>
        </div>
      </div>
    </div>
    <div class="container expand-right">
      <div class="panels">
        <div class="panel-left hide-tablet">
          <div>
            <div class="ss-header">
              <img src="public/assets/app/images/logo-red.png" alt="Icon" />
              <p class="fw-400 lh-xxs color-p">THAILAND POST SERVICES</p>
            </div>
            <h3 class="fw-600 lh-xs color-t">บริการยอดนิยม</h3>
          </div>
          <div class="btns d-flex ai-end">
            <a href="#" class="btn btn-action btn-mw-01 btn-t bradius-round">
              บริการทั้งหมด
            </a>
          </div>
        </div>
        <div class="panel-right">
          <div class="swiper">
            <div class="swiper-wrapper">
              <?php
                foreach([1,2] as $j){
                  foreach([
                    [
                      'img' => 'public/assets/app/images/service/01.png', 'href' => '#',
                      'title' => 'ไปรษณีย์ด่วนพิเศษ',
                      'desc' => 'มั่นใจถึงปลายทางในวันรุ่งขึ้น',
                    ], [
                      'img' => 'public/assets/app/images/service/02.png', 'href' => '#',
                      'title' => 'POST FAMILY',
                      'desc' => 'รู้ใจใกล้ชิด รับสิทธิ์ตรงใจ เอกสิทธิ์เฉพาะผู้ใช้บริการไปรษณีย์',
                    ], [
                      'img' => 'public/assets/app/images/service/03.png', 'href' => '#',
                      'title' => 'Pre Post',
                      'desc' => 'ทำรายการฝากส่งล่วงหน้า <br /> ไปไปรษณีย์ไม่ต้องรอคิว',
                    ], [
                      'img' => 'public/assets/app/images/service/04.png', 'href' => '#',
                      'title' => 'ไปรษณีย์ลงทะเบียน',
                      'desc' => 'ส่งประหยัดในประเทศ <br /> เริ่มต้นที่ 16 บาท',
                    ],
                  ] as $i=>$d){
              ?>
                <div class="swiper-slide">
                  <div class="ss-card ss-card-01 bg-white">
                    <div class="wrapper bshadow-01">
                      <div class="img-wrapper">
                        <img src="<?= $d['img'] ?>" alt="Hero" />
                      </div>
                      <div class="text-wrapper">
                        <h5 class="title fw-500 lh-sm color-t"><?= $d['title'] ?></h5>
                        <p class="desc sm fw-300 color-gray-01 mt-1"><?= $d['desc'] ?></p>
                        <div class="mt-2">
                          <a class="p sm fw-500 color-p h-color-t" href="<?php echo $d['href'];?>">
                            ดูรายละเอียด <em class="fa-solid fa-chevron-right text-xs"></em>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              <?php }}?>
            </div>
            <h3 class="fw-400">TO DO</h3>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-03 section-padding bg-gray-05">
    <div class="container">
      <div class="panel-header">
        <div>
          <div class="ss-header">
            <img src="public/assets/app/images/logo-red.png" alt="Icon" />
            <p class="fw-400 lh-xxs color-p">THAILAND POST SERVICES</p>
          </div>
          <h3 class="fw-600 lh-xs color-t">ข่าวสารจากไปรษณีย์ไทย</h3>
        </div>
        <div class="btns d-flex ai-end">
          <a href="#" class="btn btn-action btn-t bradius-round">
            อ่านข่าวทั้งหมด
          </a>
        </div>
      </div>
      <h3 class="fw-400">TO DO</h3>
    </div>
  </section>
  
  <?php include_once('layout/footer.php'); ?>
  <?php include_once('include/script.php'); ?>
</body>
</html>