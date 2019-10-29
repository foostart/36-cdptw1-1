<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1380"  >
  <div class="container">
    <div class="row">
     <!-- Swiper -->
     <div class="swiper-container">
      <div class="swiper-wrapper">
       <div class="swiper-slide">
         <div class="text-center">
          <section class='rating-widget'>  
            <!-- Rating Stars Box -->
            <div class='rating-stars'>
              <ul id='stars'>
                <li class='star' title='Poor' data-value='1'>
                  <i class='fa fa-star fa-fw'></i>
                </li>
                <li class='star' title='Fair' data-value='2'>
                  <i class='fa fa-star fa-fw'></i>
                </li>
                <li class='star' title='Good' data-value='3'>
                  <i class='fa fa-star fa-fw'></i>
                </li>
                <li class='star' title='Excellent' data-value='4'>
                  <i class='fa fa-star fa-fw'></i>
                </li>
                <li class='star' title='WOW!!!' data-value='5'>
                  <i class='fa fa-star fa-fw'></i>
                </li>
              </ul>
            </div>
            <h2 class="banner-parallax">Double Luxury Room</h2>
            <div class="banner-parallax_price"><span>$560</span> / Night (Only This Week)</div>
            <a href="#" class="btn btn-default">Book this room</a>
          </section>
        </div>
         <div class="swiper-pagination"></div>
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
      <div class="swiper-slide"> 
        <div class="text-center">
          <section class='rating-widget'>  
            <!-- Rating Stars Box -->
            <div class='rating-stars'>
              <ul id='stars'>
                <li class='star' title='Poor' data-value='1'>
                  <i class='fa fa-star fa-fw'></i>
                </li>
                <li class='star' title='Fair' data-value='2'>
                  <i class='fa fa-star fa-fw'></i>
                </li>
                <li class='star' title='Good' data-value='3'>
                  <i class='fa fa-star fa-fw'></i>
                </li>
                <li class='star' title='Excellent' data-value='4'>
                  <i class='fa fa-star fa-fw'></i>
                </li>
                <li class='star' title='WOW!!!' data-value='5'>
                  <i class='fa fa-star fa-fw'></i>
                </li>
              </ul>
            </div>
            <h2 class="banner-parallax">Single Room</h2>
            <div class="banner-parallax_price"><span>$450</span> / Morning (Every Day)</div>
            <a href="#" class="btn btn-default">Book this room</a>
          </section>
        </div>
         <div class="swiper-pagination"></div>
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>

    </div>
  </div>

</div>

</div>
</div>         

