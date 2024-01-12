<?php get_header();?>
<div class="c-puton c-puton--filter">
  <picture class="o-frame o-frame--switch-l">
    <source type="image/avif"
      srcset="<?php echo get_template_directory_uri();?>/img/hero.avif" />
    <source type="image/webp"
      srcset="<?php echo get_template_directory_uri();?>/img/hero.webp" />
    <img
      src="<?php echo get_template_directory_uri();?>/img/hero.png"
      width="100%" height="100%" decoding="async" fetchpriority="high" alt="" />
  </picture>
  <div class="c-puton__inner o-cover">
    <h1 class="c-hero-copy o-cover__middle">
      <span class="c-display-m u-text-weight-b">ビジネスをもっと青く</span>
      <span class="c-display-l u-font-logo">BLUE B NOSE</span>
    </h1>
  </div>
</div>
<div class="o-box o-box--transparent u-bg-qua u-pb-2xl">
  <div class="o-center o-center--content">
    <h2 class="c-sec-heading u-text-center u-text-weight-b">店舗情報</h2>
    <dl class="o-sidebar o-sidebar--table">
      <dt class="o-box o-box--thead o-box--ghost-thead c-content-l">営業時間</dt>
      <dd class="o-box o-box--tbody o-box--ghost-tbody c-content-l">
        <ul class="o-stack">
          <li>
            <span class="o-cluster o-cluster--gap-s o-cluster--middle">
              <span class="o-icon-parent o-icon-parent--time-mark u-bg-day">
                <svg class="o-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                  <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                  <path
                    d="M361.5 1.2c5 2.1 8.6 6.6 9.6 11.9L391 121l107.9 19.8c5.3 1 9.8 4.6 11.9 9.6s1.5 10.7-1.6 15.2L446.9 256l62.3 90.3c3.1 4.5 3.7 10.2 1.6 15.2s-6.6 8.6-11.9 9.6L391 391 371.1 498.9c-1 5.3-4.6 9.8-9.6 11.9s-10.7 1.5-15.2-1.6L256 446.9l-90.3 62.3c-4.5 3.1-10.2 3.7-15.2 1.6s-8.6-6.6-9.6-11.9L121 391 13.1 371.1c-5.3-1-9.8-4.6-11.9-9.6s-1.5-10.7 1.6-15.2L65.1 256 2.8 165.7c-3.1-4.5-3.7-10.2-1.6-15.2s6.6-8.6 11.9-9.6L121 121 140.9 13.1c1-5.3 4.6-9.8 9.6-11.9s10.7-1.5 15.2 1.6L256 65.1 346.3 2.8c4.5-3.1 10.2-3.7 15.2-1.6zM160 256a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zm224 0a128 128 0 1 0 -256 0 128 128 0 1 0 256 0z"
                    fill="currentColor"></path>
                </svg>
              </span>
              <span
                class="u-font-en-con"><?php echo get_vars('company', 'dayopen');?></span>
            </span>
          </li>
          <li>
            <span class="o-cluster o-cluster--gap-s o-cluster--middle">
              <span class="o-icon-parent o-icon-parent--time-mark u-bg-night">
                <svg class="o-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                  <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                  <path
                    d="M223.5 32C100 32 0 132.3 0 256S100 480 223.5 480c60.6 0 115.5-24.2 155.8-63.4c5-4.9 6.3-12.5 3.1-18.7s-10.1-9.7-17-8.5c-9.8 1.7-19.8 2.6-30.1 2.6c-96.9 0-175.5-78.8-175.5-176c0-65.8 36-123.1 89.3-153.3c6.1-3.5 9.2-10.5 7.7-17.3s-7.3-11.9-14.3-12.5c-6.3-.5-12.6-.8-19-.8z"
                    fill="currentColor"></path>
                </svg>
              </span>
              <span
                class="u-font-en-con"><?php echo get_vars('company', 'nightopen');?></span>
            </span>
          </li>
        </ul>
      </dd>
      <dt class="o-box o-box--thead o-box--ghost-thead c-content-l">定休日</dt>
      <dd class="o-box o-box--tbody o-box--ghost-tbody c-content-l">
        <?php echo get_vars('company', 'dayoff');?>
      </dd>
      <dt class="o-box o-box--thead o-box--ghost-thead c-content-l">所在地</dt>
      <dd class="o-box o-box--tbody o-box--ghost-tbody c-content-l">
        〒<span
          class="u-font-en-con"><?php echo get_vars('company', 'zip');?></span><br /><?php echo get_vars('company', 'address');?>
      </dd>
      <dt class="o-box o-box--thead o-box--ghost-thead c-content-l">平均予算</dt>
      <dd class="o-box o-box--tbody o-box--ghost-tbody c-content-l">
        <ul class="o-stack">
          <li>
            <span class="o-cluster o-cluster--gap-s o-cluster--middle">
              <span class="o-icon-parent o-icon-parent--time-mark u-bg-day">
                <svg class="o-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                  <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                  <path
                    d="M361.5 1.2c5 2.1 8.6 6.6 9.6 11.9L391 121l107.9 19.8c5.3 1 9.8 4.6 11.9 9.6s1.5 10.7-1.6 15.2L446.9 256l62.3 90.3c3.1 4.5 3.7 10.2 1.6 15.2s-6.6 8.6-11.9 9.6L391 391 371.1 498.9c-1 5.3-4.6 9.8-9.6 11.9s-10.7 1.5-15.2-1.6L256 446.9l-90.3 62.3c-4.5 3.1-10.2 3.7-15.2 1.6s-8.6-6.6-9.6-11.9L121 391 13.1 371.1c-5.3-1-9.8-4.6-11.9-9.6s-1.5-10.7 1.6-15.2L65.1 256 2.8 165.7c-3.1-4.5-3.7-10.2-1.6-15.2s6.6-8.6 11.9-9.6L121 121 140.9 13.1c1-5.3 4.6-9.8 9.6-11.9s10.7-1.5 15.2 1.6L256 65.1 346.3 2.8c4.5-3.1 10.2-3.7 15.2-1.6zM160 256a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zm224 0a128 128 0 1 0 -256 0 128 128 0 1 0 256 0z"
                    fill="currentColor"></path>
                </svg>
              </span>
              <span
                class="u-font-en-con"><?php echo get_vars('company', 'daybud');?></span>
            </span>
          </li>
          <li>
            <span class="o-cluster o-cluster--gap-s o-cluster--middle">
              <span class="o-icon-parent o-icon-parent--time-mark u-bg-night">
                <svg class="o-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                  <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                  <path
                    d="M223.5 32C100 32 0 132.3 0 256S100 480 223.5 480c60.6 0 115.5-24.2 155.8-63.4c5-4.9 6.3-12.5 3.1-18.7s-10.1-9.7-17-8.5c-9.8 1.7-19.8 2.6-30.1 2.6c-96.9 0-175.5-78.8-175.5-176c0-65.8 36-123.1 89.3-153.3c6.1-3.5 9.2-10.5 7.7-17.3s-7.3-11.9-14.3-12.5c-6.3-.5-12.6-.8-19-.8z"
                    fill="currentColor"></path>
                </svg>
              </span>
              <span
                class="u-font-en-con"><?php echo get_vars('company', 'nightbud');?></span>
            </span>
          </li>
        </ul>
      </dd>
      <dt class="o-box o-box--thead o-box--ghost-thead c-content-l">お支払い方法</dt>
      <dd class="o-box o-box--tbody o-box--ghost-tbody c-content-l">
        <?php echo get_pay_list();?>
      </dd>
    </dl>
    <h3 class="c-ter-heading u-text-center u-text-weight-b">ご予約・お問い合わせ</h3>
    <a href="#" class="o-icon-parent o-icon-parent--text-center c-tel-link c-display-l u-full-width u-mb-s"
      target="_blank" rel="noopener">
      <svg class="o-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
        <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
        <path
          d="M511.2 387l-23.25 100.8c-3.266 14.25-15.79 24.22-30.46 24.22C205.2 512 0 306.8 0 54.5c0-14.66 9.969-27.2 24.22-30.45l100.8-23.25C139.7-2.602 154.7 5.018 160.8 18.92l46.52 108.5c5.438 12.78 1.77 27.67-8.98 36.45L144.5 207.1c33.98 69.22 90.26 125.5 159.5 159.5l44.08-53.8c8.688-10.78 23.69-14.51 36.47-8.975l108.5 46.51C506.1 357.2 514.6 372.4 511.2 387z"
          fill="currentColor"></path>
      </svg>
      <span
        class="u-font-en-con u-text-weight-b"><?php echo get_vars('company', 'tel');?></span>
    </a>
    <p class="c-content-l u-text-center">
      受付時間&nbsp;<span
        class="u-font-en-con"><?php echo get_vars('company', 'open');?>~<?php echo get_vars('company', 'close');?></span>
    </p>
  </div>
</div>
<div class="o-frame">
  <iframe class="c-lazy-map u-gray-filter"
    src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAAAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
    data-src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3279.970528685342!2d135.49183357574483!3d34.70592327291773!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e68e5570e51f%3A0xb0e6e493c405c979!2z44CSNTMwLTAwMTEg5aSn6Ziq5bqc5aSn6Ziq5biC5YyX5Yy65aSn5rex55S677yT4oiS77yR!5e0!3m2!1sja!2sjp!4v1704696233017!5m2!1sja!2sjp"
    width="100%" height="100%" style="border: 0" allowfullscreen="" loading="lazy"
    referrerpolicy="no-referrer-when-downgrade" title="Google Maps"></iframe>
</div>
<div class="o-box o-box--transparent u-bg-qua u-pb-2xl">
  <div class="o-center o-center--content">
    <h2 class="c-sec-heading u-text-center u-text-weight-b u-font-en">News</h2>
    <?php echo get_front_news();?>
  </div>
</div>
<ul class="o-grid o-grid--no-gap o-grid--quart">
  <li>
    <a class="c-puton c-puton--filter c-switch-link"
      href="<?php echo home_url('/aboutus/');?>">
      <picture class="o-frame o-frame--switch-r">
        <source type="image/avif"
          srcset="<?php echo get_template_directory_uri();?>/img/link-thumb01.avif" />
        <source type="image/webp"
          srcset="<?php echo get_template_directory_uri();?>/img/link-thumb01.webp" />
        <img
          src="<?php echo get_template_directory_uri();?>/img/link-thumb01.jpg"
          width="100%" height="100%" decoding="async" fetchpriority="high" alt="" />
      </picture>
      <div class="c-puton__inner o-cover">
        <span class="c-display-s u-text-weight-m o-cover__bottom u-pr-m u-pl-m">
          <span class="u-font-logo">BLUE B NOSE</span>について
        </span>
      </div>
    </a>
  </li>
  <li>
    <a class="c-puton c-puton--filter c-switch-link"
      href="<?php echo home_url('/menu/');?>">
      <picture class="o-frame o-frame--switch-r">
        <source type="image/avif"
          srcset="<?php echo get_template_directory_uri();?>/img/link-thumb02.avif" />
        <source type="image/webp"
          srcset="<?php echo get_template_directory_uri();?>/img/link-thumb02.webp" />
        <img
          src="<?php echo get_template_directory_uri();?>/img/link-thumb02.jpg"
          width="100%" height="100%" decoding="async" fetchpriority="high" alt="" />
      </picture>
      <div class="c-puton__inner o-cover">
        <span class="c-display-s u-text-weight-m o-cover__bottom u-pr-m u-pl-m"> メニュー </span>
      </div>
    </a>
  </li>
  <li>
    <a class="c-puton c-puton--filter c-switch-link"
      href="<?php echo home_url('/gallery/');?>">
      <picture class="o-frame o-frame--switch-r">
        <source type="image/avif"
          srcset="<?php echo get_template_directory_uri();?>/img/link-thumb03.avif" />
        <source type="image/webp"
          srcset="<?php echo get_template_directory_uri();?>/img/link-thumb03.webp" />
        <img
          src="<?php echo get_template_directory_uri();?>/img/link-thumb03.jpg"
          width="100%" height="100%" decoding="async" fetchpriority="high" alt="" />
      </picture>
      <div class="c-puton__inner o-cover">
        <span class="c-display-s u-text-weight-m o-cover__bottom u-pr-m u-pl-m"> ギャラリー </span>
      </div>
    </a>
  </li>
  <li>
    <a class="c-puton c-puton--filter c-switch-link"
      href="<?php echo home_url('/staff/');?>">
      <picture class="o-frame o-frame--switch-r">
        <source type="image/avif"
          srcset="<?php echo get_template_directory_uri();?>/img/link-thumb04.avif" />
        <source type="image/webp"
          srcset="<?php echo get_template_directory_uri();?>/img/link-thumb04.webp" />
        <img
          src="<?php echo get_template_directory_uri();?>/img/link-thumb04.jpg"
          width="100%" height="100%" decoding="async" fetchpriority="high" alt="" />
      </picture>
      <div class="c-puton__inner o-cover">
        <span class="c-display-s u-text-weight-m o-cover__bottom u-pr-m u-pl-m"> スタッフ </span>
      </div>
    </a>
  </li>
</ul>
<div class="o-box o-box--transparent u-bg-qua u-pb-2xl">
  <div class="o-center o-center--content">
    <h2 class="c-sec-heading u-text-center u-text-weight-b">お客様の声</h2>
    <?php $rate = get_review_score();?>
    <div class="o-cluster o-cluster--gap-s u-max-item u-block-center u-mb-l">
      <span class="o-cluster o-cluster--middle c-review-stars c-display-s u-text-secondary"
        data-rate="<?php echo floor($rate);?>"
        aria-label="<?php echo(floor($rate * 100) / 100);?> stars out of 5">
        <svg class="o-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
          <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
          <path
            d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z"
            fill="currentColor"></path>
        </svg>
        <svg class="o-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
          <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
          <path
            d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z"
            fill="currentColor"></path>
        </svg>
        <svg class="o-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
          <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
          <path
            d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z"
            fill="currentColor"></path>
        </svg>
        <svg class="o-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
          <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
          <path
            d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z"
            fill="currentColor"></path>
        </svg>
        <svg class="o-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
          <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
          <path
            d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z"
            fill="currentColor"></path>
        </svg>
      </span>
      <span
        class="c-display-s u-font-en-con u-text-weight-b u-text-primary"><?php echo(floor($rate * 100) / 100);?></span>
      <span class="o-icon-parent o-icon-parent--center c-display-xs">
        <svg class="o-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
          <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
          <path
            d="M256 31.1c-141.4 0-255.1 93.12-255.1 208c0 49.62 21.35 94.98 56.97 130.7c-12.5 50.37-54.27 95.27-54.77 95.77c-2.25 2.25-2.875 5.734-1.5 8.734c1.249 3 4.021 4.766 7.271 4.766c66.25 0 115.1-31.76 140.6-51.39c32.63 12.25 69.02 19.39 107.4 19.39c141.4 0 255.1-93.13 255.1-207.1S397.4 31.1 256 31.1zM127.1 271.1c-17.75 0-32-14.25-32-31.1s14.25-32 32-32s32 14.25 32 32S145.7 271.1 127.1 271.1zM256 271.1c-17.75 0-31.1-14.25-31.1-31.1s14.25-32 31.1-32s31.1 14.25 31.1 32S273.8 271.1 256 271.1zM383.1 271.1c-17.75 0-32-14.25-32-31.1s14.25-32 32-32s32 14.25 32 32S401.7 271.1 383.1 271.1z"
            fill="currentColor"></path>
        </svg>
        <span class="c-display-2xs u-text-primary u-text-weight-b"><span
            class="c-display-xs u-font-en-con"><?php echo get_review_count();?></span>件</span>
      </span>
    </div>
    <?php echo get_front_review();?>
  </div>
</div>
<div class="o-center u-pb-2xl">
  <h2 class="c-sec-heading u-text-center u-text-weight-b u-font-en">What's New</h2>
  <?php if (have_posts()):?>
  <ul class="o-grid o-grid--tri u-mb-xl">
    <?php while (have_posts()): the_post();?>
    <li>
      <a href="<?php the_permalink();?>"
        class="o-box o-stack c-link-card u-bg-qua">
        <?php echo get_thumb();?>
        <span class="o-stack o-stack--s u-pt-l u-pb-l u-pr-m u-pl-m">
          <span class="o-cluster o-cluster--middle">
            <time class="c-content-l u-font-en-con u-text-weight-m"
              datetime="<?php the_time('Y-m-d');?>"><?php the_time('Y.m.d');?></time>
            <?php echo get_loop_cat();?>
          </span>
          <span
            class="c-content-l u-text-trim u-text-trim--two-line u-text-weight-b"><?php the_title();?></span>
          <span class="c-content-m u-text-secondary">
            <span
              class="u-font-en-con u-text-weight-m"><?php echo get_views_count();?></span>回表示・読了見込<span
              class="u-font-en-con u-text-weight-m"><?php echo get_readtime();?></span>分
          </span>
        </span>
      </a>
    </li>
    <?php endwhile;?>
  </ul>
  <?php else:?>
  <p class="c-content-l">記事はまだありません。</p>
  <?php endif;?>
  <div class="u-text-center">
    <a class="o-box o-box--button o-box--rect-button o-box--primary-button o-icon-parent"
      href="<?php echo home_url('/blog/');?>">
      コンテンツ一覧
      <svg class="o-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512">
        <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc.-->
        <path
          d="M64 448c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L178.8 256L41.38 118.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160c12.5 12.5 12.5 32.75 0 45.25l-160 160C80.38 444.9 72.19 448 64 448z"
          fill="currentColor"></path>
      </svg>
    </a>
  </div>
</div>
<?php get_footer();?>