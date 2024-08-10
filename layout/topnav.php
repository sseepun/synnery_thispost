<?php
  $submenu = '<div class="submenu-dropdown level-2">
      <div class="submenu-container">
        <div class="submenu-wrapper">
          <div class="submenu">
            <a href="#">ไปรษณีย์ในประเทศไทย</a>
          </div>
          <div class="submenu">
            <a href="#">ไปรษณีย์ระหว่างต่างประเทศ</a>
          </div>
          <div class="submenu">
              <a href="#">สินค้าไปรษณีย์</a>
          </div>
        </div>
      </div>
    </div>';
?>

<nav class="topnav bg-white bshadow-03">
  <div class="topnav-wrapper">
    <div class="panel-left">
      <div class="logo-container">
        <a class="logo" href="#">
          <img src="public/assets/app/images/logo.png" alt="Logo">
        </a>
      </div>
    </div>
    <div class="panel-right bg-gray-03">
      <div class="topnav-top">
        <div class="search-container">
          <form class="pos-relative input-wrapper w-full">
            <input type="text" placeholder="ค้นหา ..." require="">
            <button class="btn btn-icon color-p color-black-theme">
              <em class="fa-solid fa-magnifying-glass"></em>
            </button>
          </form>
        </div>
        <div class="options">
          <div class="option border-right-1 border-right-1 bcolor-white">
            <div class="colors">
              <div class="color theme-btn" data-theme="0">
                <img src="public/assets/app/images/icon/color-01.png" alt="Icon" />
              </div>
              <div class="color theme-btn" data-theme="1">
                <img src="public/assets/app/images/icon/color-02.png" alt="Icon" />
              </div>
              <div class="color theme-btn mr-0" data-theme="2">
                <img src="public/assets/app/images/icon/color-03.png" alt="Icon" />
              </div>
            </div>
          </div>
          <div class="option border-right-1 bcolor-white">
            <div class="d-flex ai-center">
              <span class="p c-pointer mr-1 color-p font-size-btn" data-size="14">-</span>
              <h4 class="text c-pointer bg-p color-white font-size-btn bg-white-theme color-black-theme" data-size="16">ก</h4>
              <span class="p c-pointer ml-1 color-p font-size-btn" data-size="18">+</span>
            </div>
          </div>
          <div class="option flags pos-relative">
            <div class="flag">
              <div class="icon">
                <img src="public/assets/app/images/icon/flag.png" alt="Icon" />
              </div>
              <div class="p xs ml-2 color-t">ไทย</div>
              <div class="chev ml-1">
                <em class="fa-solid fa-chevron-down"></em>
              </div>
            </div>
            <div class="flag-dropdown border-1 bcolor-white bcolor-white-theme">
              <div class="flag-item active">
                <div class="wrapper">
                  <div class="icon">
                    <img src="public/assets/app/images/icon/flag.png" alt="Icon" />
                  </div>
                  <div class="p xs title ml-2 color-t">ไทย</div>
                </div>
              </div>
              <div class="flag-item border-top-1 bcolor-white-theme bcolor-white">
                <div class="wrapper">
                  <div class="icon">
                    <img src="public/assets/app/images/icon/us-flag.png" alt="Icon" />
                  </div>
                  <div class="p xs ml-2 title color-t">อังกฤษ</div>
                </div>
              </div>
            </div>
          </div>
          <a href="#" class="option icon color-white">
            <em class="fa-regular fa-envelope"></em>
          </a>
          <a href="#" class="option icon color-white">
            <em class="fa-solid fa-sitemap"></em>
          </a>
          <div class="option sidenav-toggle">
            <div class="hamburger">
              <div></div><div></div><div></div>
            </div>
          </div>
        </div>
      </div>
      <div class="topnav-bottom bg-p">
        <div class="menu-container" id="topnav-menu">
          <?php
              foreach([
                'สินค้าและบริการ', 'การโอน-จ่าย-ชำระเงิน', 'เกี่ยวกับเรา ', 'ข่าว', 'ติดต่อเรา', 
                'คำถามที่พบบ่อย', 'สำหรับธุรกิจและองค์กร', 'สำหรับบุคคลทั่วไป'
              ] as $i=>$d){
          ?>
              <div class="menu has-children">
                <a href="#" data-dropdown="<?= $i ?>">
                  <?= $d ?>
                </a>
                <div class="submenu-dropdown <?php if($i>5)echo 'anchor-right'; ?>">
                  <div class="submenu-container">
                    <div class="submenu-wrapper">
                      <div class="submenu has-children">
                        <a href="#">ไปรษณีย์ในประเทศไทย</a>
                        <?= $submenu ?>
                      </div>
                      <div class="submenu has-children">
                        <a href="#">ไปรษณีย์ระหว่างต่างประเทศ</a>
                        <?= $submenu ?>
                      </div>
                      <div class="submenu has-children">
                        <a href="#">สินค้าไปรษณีย์</a>
                        <?= $submenu ?>
                      </div>
                      <div class="submenu has-children">
                        <a href="#">แสตมป์และสิ่งสะสม</a>
                        <?= $submenu ?>
                      </div>
                      <div class="submenu has-children">
                        <a href="#">บริการยิดนิยม</a>
                        <?= $submenu ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <?php }?>
        </div>
      </div>
    </div>
  </div>
</nav>


<!-- Sidenav -->
<nav class="sidenav">
  <div class="wrapper">
    <a class="logo" href="#">
      <img src="public/assets/app/images/logo.png" alt="Logo">
    </a>
    <div class="sidenav-toggle">
      <div class="hamburger">
        <div></div><div></div><div></div>
      </div>
    </div>
    <div class="options">
      <div class="option">
        <div class="icon"><span class="text-lg">ก</span></div>
        <div class="dropdown">
          <div class="icon font-size-btn fw-500" data-size="14">
            <span class="text-xl">-</span>
          </div>
          <div class="icon font-size-btn fw-500" data-size="16">
            <span class="text-lg">ก</span>
          </div>
          <div class="icon font-size-btn fw-500" data-size="18">
            <span class="text-xl">+</span>
          </div>
        </div>
      </div>
      <div class="option">
        <div class="icon">C</div>
        <div class="dropdown">
          <div class="icon theme-btn" data-theme="0">C</div>
          <div class="icon theme-btn" data-theme="1">C</div>
          <div class="icon theme-btn" data-theme="2">C</div>
        </div>
      </div>
      <div class="option">
        <div class="flag" style="background-image:url('public/assets/app/images/icon/flag.png');"></div>
        <div class="dropdown">
          <a href="#">
            <div class="flag" style="background-image:url('public/assets/app/images/icon/us-flag.png');"></div>
          </a>
        </div>
      </div>
    </div>
    <div class="scroll-wrapper" data-simplebar>
      <div class="menu-container"></div>
    </div>
  </div>
</nav>
<div class="sidenav-filter"></div>

<!-- Chat -->
<nav class="chat">
  <div class="wrapper">
    <img src="public/assets/app/images/icon/chat.svg" alt="chat">
  </div>
 </nav>