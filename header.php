<?php

?>

<html lang="en">
    <header>
      <div class="page-content-inner">
        <a href="?controller=home&action=index" id="logo">
          <span class="first-letter">C</span>yber
          <span class="second-letter">S</span>tation
        </a>
        <div id="header_spacer"></div>
        <div class="section-right">
          <div class="header-nav menu-items">
            <a
              href="?controller=user&action=<?php echo $log_path?>"
              id="account"
            >
              RESERVE NOW
            </a>
          </div>
          <div class="header-nav menu-items">
            <a
              href="?controller=user&action=<?php echo $log_path?>"
              id="account"
            >
              CONTACT US
            </a>
          </div>
          <div class="header-nav menu-items">
            <a
              href="?controller=user&action=<?php echo $log_path?>"
              id="account"
            >
              ABOUT US
            </a>
          </div>
          <div class="header-nav menu-items">
            <a
              href="?controller=user&action=<?php echo $log_path?>"
              id="account"
            >
              LOCATIONS
            </a>
          </div>
        </div>
        <div class="header-nav languages">
          <select id="languages">
            <option disabled selected>Languages</option>
            <option>English</option>
            <option>Francais</option>
          </select>
        </div>
        <!-- <button>Hamburger</button> -->
      </div>
    </header>
</html>
