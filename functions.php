<?php
    function head() {
        echo '<nav class="navigation">
        <div class="div-logo">
          <a href="index.php">
            <img class="logo" src="images/logo.jpg" alt="logo" />
          </a>
        </div>
        <div class="div-navigation">
          <ul>
            <li>
              <a href="band.php">About</a>
            </li>
            <li><a href="#">News</a></li>
            <li><a href="#">Gallery</a></li>
            <li><a href="#">Shop</a></li>
          </ul>
        </div>
        <div class="div-link">
            <a href="https://www.instagram.com/fifthpiece_official/" target="_blank"><i class="gg-instagram"></i></a>
        </div>
    </nav>';
    }
    function david($name, $instrument, $nick) {
        $link = '<img src="images/' . strtolower($nick) . '.jpg" alt = "' . $nick . '">';
        echo '<div class="david">
        <div class="podaci">
          <p class="imeiprezime">' . $name . '</p>
          <p>' . $instrument . '</p>
        </div>
        <div class="slika_david">
          ' . $link . '
        </div>
      </div>';
    }
?>