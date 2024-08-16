<!DOCTYPE html>
<html lang="th">
<head>
  <?php include_once('include/header.php'); ?>
  <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
<?php include_once('layout/topnav.php'); ?>

<?php 
    $banner = [
      ['imgBg' => 'public/assets/app/images/banner/02.jpg'],
      ['imgBg' => 'public/assets/app/images/banner/02.jpg'],
      ['imgBg' => 'public/assets/app/images/banner/02.jpg'],
    ]
  ?>
  <div class="banner-01">
    <div class="swiper">
      <div class="swiper-wrapper">
        <?php foreach($banner as $d) {?>
          <div class="swiper-slide">
            <div class="img-bg" style="background-image:url('<?= $d['imgBg'] ?>');"></div>
            <div class="hero animate" style="--delay:.55s;">
                <img src="public/assets/app/images/hero/01.png" class="Hero">
              </div>
            <div class="container">
              <div class="text-wrapper animate" style="--delay:.4s;">
                <div class="wrapper">
                  <h1 class="color-white md-no-br main-title">วางใจ...<br>
                    <span class="h2">ลุยไปด้วยกัน</span>
                  </h1>
                  <p class="h4 color-white mt-2">
                    หน้าที่ขายเป็นของคุณ<br>
                    หน้าที่ส่งเป็นของเรา
                  </p>
                </div>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </div>

  <section class="section-01 ovf-unset bshadow-02" data-aos="fade-in" data-aos-delay="0">
    <div class="services">
      <a class="service ss-card bg-gray-03 color-white" href="#">
        <div class="icon">
          <img src="public/assets/app/images/icon/calculator.svg" alt="Icon" />
        </div>
        <div class="text-center mt-2">
          <p class="sm fw-300 lh-xs">คำนวณอัตราค่าบริการ</p>
        </div>
        <div class="line-3"></div>
        <div class="line-4"></div>
      </a>
      <a class="service ss-card bg-gray-02 color-white" href="#">
        <div class="icon">
          <img src="public/assets/app/images/icon/search.svg" alt="Icon" />
        </div>
        <div class="text-center mt-2">
          <p class="sm fw-300 lh-xs">ค้นหาที่ทำการไปรษณีย์</p>
        </div>
        <div class="line-3"></div>
        <div class="line-4"></div>
      </a>
      <a class="service ss-card bg-p color-white" href="#">
        <div class="icon">
          <img src="public/assets/app/images/icon/protect.svg" alt="Icon" />
        </div>
        <div class="text-center mt-2">
          <p class="sm fw-300 lh-xs">การรับประกันและ<br />การชดใช้ค่าเสียหาย</p>
        </div>
        <div class="line-3"></div>
        <div class="line-4"></div>
      </a>
      <a class="service ss-card bg-s color-white" href="#">
        <div class="icon">
          <img src="public/assets/app/images/icon/member.svg" alt="Icon" />
        </div>
        <div class="text-center mt-2">
          <p class="sm fw-300 lh-xs">สมัครสมาชิก<br />เช็คคะแนน POST Family</p>
        </div>
        <div class="line-3"></div>
        <div class="line-4"></div>
      </a>
      <a class="service ss-card lg bg-t color-white" href="#">
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
        <div class="line-3"></div>
        <div class="line-4"></div>
      </a>
    </div>
  </section>
  
  <section class="section-02 section-padding" data-aos="fade-up" data-aos-delay="150">
    <div class="pattern style-01">
      <div class="wrapper">
        <img src="public/assets/app/images/patterns/01.png" alt="Pattern">
      </div>    
    </div>
    <div class="pattern style-02">
      <div class="wrapper">
        <img src="public/assets/app/images/patterns/02.png" alt="Pattern">
      </div>    
    </div>
    <div class="container" style="z-index:2;">
      <div class="panel-left show-tablet">
        <div>
          <div class="ss-header" data-aos="" data-aos-delay="150">
            <img class="roll-in" src="public/assets/app/images/logo-red.png" alt="Icon" />
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
            <div class="ss-header" data-aos="" data-aos-delay="300">
              <img class="roll-in" src="public/assets/app/images/logo-red.png" alt="Icon" />
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
                      <div class="img-wrapper pos-relative">
                        <img src="<?= $d['img'] ?>" alt="Hero" />
                      </div>
                      <div class="text-wrapper pos-relative">
                        <h5 class="title fw-500 lh-sm color-t"><?= $d['title'] ?></h5>
                        <p class="desc sm fw-300 color-gray-01 mt-1"><?= $d['desc'] ?></p>
                        <div class="mt-2">
                          <a class="p sm fw-500 color-p h-color-t" href="<?php echo $d['href'];?>">
                            ดูรายละเอียด <em class="fa-solid fa-chevron-right text-xs"></em>
                          </a>
                        </div>
                        <div class="line-3 bg-p"></div>
                        <div class="line-4 bg-p"></div>
                      </div>
                    </div>
                  </div>
                </div>
              <?php }}?>
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php 
     $tabs01 = [
      ['title' => 'ข่าวประชาสัมพันธ์'], 
      ['title' => 'ข่าวโปรโมท'], 
    ];
  ?>
  <section class="section-03 section-padding bg-gray-05 tab-container" data-aos="fade-up" data-aos-delay="300">
    <div class="container">
      <div class="panel-header">
        <div>
          <div class="ss-header" data-aos="" data-aos-delay="450">
            <img class="roll-in" src="public/assets/app/images/logo-red.png" alt="Icon" />
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
      <div class="tabs tabs-01">
        <?php foreach($tabs01 as $i=>$d) {?>
          <div class="tab mt-2 <?= $i==0? 'active': '' ?>" data-tab="content_<?= $i ?>">
            <p class="title fw-400"><?= $d['title'] ?></p>
          </div>
        <?php } ?>
      </div>
      <div class="tab-contents mt-1">
        <?php foreach($tabs01 as $i=>$k){?>
          <div class="tab-content <?= $i==0? 'active': '' ?>" data-tab="content_<?= $i ?>">
            <div class="swiper mt-4">
              <div class="swiper-wrapper">
                <?php
                  foreach([
                    [
                      'img' => 'public/assets/app/images/content/01.jpg', 'href' => '#',
                      'title' => 'ไปรษณีย์ไทยร่วมพันธมิตร ดันโปรเจกต์คัดแยกขยะ เชิญชวนนำพลาสติก PP มารีไซเคิลเป็นกล่องสีน้ำ 5,000 ชุด มอบให้น้องๆ รร. ตชด.',
                      'date' => '5 สิงหาคม 2567'
                    ], [
                      'img' => 'public/assets/app/images/content/02.jpg', 'href' => '#',
                      'title' => 'ไปรษณีย์ไทยเอาใจคนส่งสุขไปนอกจัดเต็ม “Courier One Price” ส่งด่วนพรีเมียม ราคาสุดคุ้ม เหมาจ่าย จุได้ถึง 25 กก.',
                      'date' => '5 สิงหาคม 2567'
                    ], [
                      'img' => 'public/assets/app/images/content/03.jpg', 'href' => '#',
                      'title' => 'รมว.ดีอี ตรวจความพร้อมจุดบริการยืนยันตัวตนดิจิทัลวอลเล็ต',
                      'date' => '1 สิงหาคม 2567'
                    ], [
                      'img' => 'public/assets/app/images/content/04.jpg', 'href' => '#',
                      'title' => 'ดีอี - ไปรษณีย์ไทยเปิดจุดลงทะเบียนโครงการดิจิทัลวอลเล็ตในไปรษณีย์ 1,200 แห่ง เพิ่มความสะดวกประชาชน พร้อมให้คำ',
                      'date' => '1 สิงหาคม 2567'
                    ],
                  ] as $i=>$d){
                ?>
                  <div class="swiper-slide">
                    <a href="<?= $d['href'] ?>" class="ss-card ss-card-02">
                      <div class="ss-img square">
                        <div class="img-bg" style="background-image:url('<?= $d['img'] ?>');"></div>
                        <div class="tag bg-p color-white">
                          <h6 class="fw-400">News</h6>
                        </div>
                        <div class="line-1"></div>
                        <div class="line-2"></div>
                        <div class="hover-filter"></div>
                      </div>
                      <div class="text-container pt-4">
                        <h6 class="title fw-500 lh-sm color-t"><?= $d['title'] ?></h6>
                        <div class="ss-stats">
                          <div class="stat">
                            <div class="icon color-p">
                              <em class="fa-regular fa-clock"></em>
                            </div>
                            <div class="text color-gray-06">
                              <p class="sm"><?= $d['date'] ?></p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                <?php }?>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </section>
  
  <?php include_once('layout/footer.php'); ?>
  <?php include_once('include/script.php'); ?>
</body>
</html>