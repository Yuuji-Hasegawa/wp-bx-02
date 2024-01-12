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
      <span class="c-display-l u-text-weight-b u-font-en-con">About Us</span>
      <span class="c-display-xs"><span class="u-font-logo">BLUE B NOSE</span>について</span>
    </h1>
  </div>
</div>
<div class="o-box o-box--transparent o-center u-bg-qua u-pt-2xl u-pb-2xl">
  <div class="o-sidebar">
    <div class="o-sidebar__wide">
      <h2 class="c-display-m u-text-weight-b u-mb-l u-text-primary">
        <span class="u-font-logo u-text-weight-m">BLUE B NOSE</span>について
      </h2>
      <p class="c-content-l">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ex tortor, dapibus sed elit nec, commodo
        sodales ipsum. Nunc augue mi, sagittis eget bibendum vel, venenatis lacinia ex.
      </p>
      <p class="c-content-l">
        Etiam in hendrerit metus. Mauris non massa in orci ultrices cursus. Vivamus sollicitudin odio urna, in
        tincidunt eros faucibus sed. Nulla et facilisis nisl, ut sollicitudin metus. Vivamus justo nunc,
        ullamcorper eu ex sed, rutrum semper purus. Praesent tincidunt porttitor erat quis eleifend.
      </p>
    </div>
    <div class="o-sidebar__narrow">
      <picture class="o-frame">
        <source type="image/avif"
          srcset="<?php echo get_template_directory_uri();?>/img/hero.avif" />
        <source type="image/webp"
          srcset="<?php echo get_template_directory_uri();?>/img/hero.webp" />
        <img
          src="<?php echo get_template_directory_uri();?>/img/hero.png"
          width="100%" height="100%" loading="lazy" decoding="async" fetchpriority="low" alt="" />
      </picture>
    </div>
  </div>
</div>
<div class="o-box o-box--transparent o-center u-bg-qua u-pt-2xl u-pb-2xl">
  <div class="o-sidebar">
    <div class="o-sidebar__narrow">
      <picture class="o-frame">
        <source type="image/avif"
          srcset="<?php echo get_template_directory_uri();?>/img/hero.avif" />
        <source type="image/webp"
          srcset="<?php echo get_template_directory_uri();?>/img/hero.webp" />
        <img
          src="<?php echo get_template_directory_uri();?>/img/hero.png"
          width="100%" height="100%" loading="lazy" decoding="async" fetchpriority="low" alt="" />
      </picture>
    </div>
    <div class="o-sidebar__wide">
      <h2 class="c-display-m u-text-weight-b u-mb-l u-text-primary">コンセプト</h2>
      <p class="c-content-l">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ex tortor, dapibus sed elit nec, commodo
        sodales ipsum. Nunc augue mi, sagittis eget bibendum vel, venenatis lacinia ex.
      </p>
      <p class="c-content-l">
        Etiam in hendrerit metus. Mauris non massa in orci ultrices cursus. Vivamus sollicitudin odio urna, in
        tincidunt eros faucibus sed. Nulla et facilisis nisl, ut sollicitudin metus. Vivamus justo nunc,
        ullamcorper eu ex sed, rutrum semper purus. Praesent tincidunt porttitor erat quis eleifend.
      </p>
    </div>
  </div>
</div>
<div class="o-box o-box--transparent o-center u-bg-qua u-pb-2xl">
  <h2 class="c-sec-heading u-text-weight-b">店舗情報</h2>
  <dl class="o-sidebar o-sidebar--table">
    <dt class="o-box o-box--thead o-box--ghost-thead c-content-l">店名</dt>
    <dd class="o-box o-box--tbody o-box--ghost-tbody c-content-l">
      <?php echo get_vars('company', 'name');?>
    </dd>
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
        class="u-font-en-con"><?php echo get_vars('company', 'zip');?></span><br />
      <?php echo get_vars('company', 'address');?>
    </dd>
    <dt class="o-box o-box--thead o-box--ghost-thead c-content-l">電話番号</dt>
    <dd class="o-box o-box--tbody o-box--ghost-tbody c-content-l">
      <a href="#"
        class="c-text-link c-text-link--underline"><?php echo get_vars('company', 'tel');?></a>
    </dd>
    <dt class="o-box o-box--thead o-box--ghost-thead c-content-l">アクセス</dt>
    <dd class="o-box o-box--tbody o-box--ghost-tbody c-content-l">
      <?php echo get_vars('company', 'access');?>
    </dd>
    <dt class="o-box o-box--thead o-box--ghost-thead c-content-l">駐車場</dt>
    <dd class="o-box o-box--tbody o-box--ghost-tbody c-content-l">
      <?php echo get_vars('company', 'parking');?>
    </dd>
    <dt class="o-box o-box--thead o-box--ghost-thead c-content-l">最寄駅</dt>
    <dd class="o-box o-box--tbody o-box--ghost-tbody c-content-l">
      <?php echo get_vars('company', 'station');?>
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
    <dt class="o-box o-box--thead o-box--ghost-thead c-content-l">座席数</dt>
    <dd class="o-box o-box--tbody o-box--ghost-tbody c-content-l">
      <?php echo get_vars('company', 'sheets');?>
    </dd>
    <dt class="o-box o-box--thead o-box--ghost-thead c-content-l">予約</dt>
    <dd class="o-box o-box--tbody o-box--ghost-tbody c-content-l">
      <?php echo get_vars('company', 'reserve');?>
    </dd>
    <dt class="o-box o-box--thead o-box--ghost-thead c-content-l">貸切</dt>
    <dd class="o-box o-box--tbody o-box--ghost-tbody c-content-l">
      <?php echo get_vars('company', 'rental');?>
    </dd>
    <dt class="o-box o-box--thead o-box--ghost-thead c-content-l">お支払い方法</dt>
    <dd class="o-box o-box--tbody o-box--ghost-tbody c-content-l">
      <?php echo get_pay_list();?>
    </dd>
    <dt class="o-box o-box--thead o-box--ghost-thead c-content-l">禁煙・喫煙</dt>
    <dd class="o-box o-box--tbody o-box--ghost-tbody c-content-l">
      <?php echo get_vars('company', 'smoking');?>
    </dd>
  </dl>
</div>
<?php get_footer();?>