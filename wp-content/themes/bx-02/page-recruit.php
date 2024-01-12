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
      <span class="c-display-l u-text-weight-b u-font-en-con">Recruit</span>
      <span class="c-display-xs"><?php the_title();?></span>
    </h1>
  </div>
</div>
<div class="o-center o-box o-box--transparent u-bg-qua u-pb-2xl">
  <h2 class="c-heading u-text-weight-b">募集要項</h2>
  <dl class="o-sidebar o-sidebar--table">
    <dt class="o-box o-box--thead o-box--ghost-thead c-content-l">勤務形態</dt>
    <dd class="o-box o-box--tbody o-box--ghost-tbody c-content-l">正社員・アルバイト</dd>
    <dt class="o-box o-box--thead o-box--ghost-thead c-content-l">給与</dt>
    <dd class="o-box o-box--tbody o-box--ghost-tbody c-content-l">
      <dl class="o-stack u-mb-m">
        <dt class="u-text-weight-b">未経験者</dt>
        <dd>時給 1500円</dd>
      </dl>
      <dl class="o-stack">
        <dt class="u-text-weight-b">経験者</dt>
        <dd>経験・能力を考慮の上、当社規定により決定</dd>
      </dl>
    </dd>
    <dt class="o-box o-box--thead o-box--ghost-thead c-content-l">諸手当</dt>
    <dd class="o-box o-box--tbody o-box--ghost-tbody c-content-l">時間外勤務手当、通勤手当、転居手当等</dd>
    <dt class="o-box o-box--thead o-box--ghost-thead c-content-l">勤務地</dt>
    <dd class="o-box o-box--tbody o-box--ghost-tbody c-content-l">
      〒<span
        class="u-font-en-con"><?php echo get_vars('company', 'zip');?></span>
      <?php echo get_vars('company', 'address');?>
    </dd>
    <dt class="o-box o-box--thead o-box--ghost-thead c-content-l">休日・休暇</dt>
    <dd class="o-box o-box--tbody o-box--ghost-tbody c-content-l">
      完全週休2日制、夏季休暇、年末年始休暇、有給休暇、リフレッシュ休暇（勤続3年毎に3日間）
    </dd>
    <dt class="o-box o-box--thead o-box--ghost-thead c-content-l">勤務時間</dt>
    <dd class="o-box o-box--tbody o-box--ghost-tbody c-content-l">
      始業時刻9:00～10:00、終業時間17:30～18:30（実労働7.5時間/1日）
    </dd>
    <dt class="o-box o-box--thead o-box--ghost-thead c-content-l">社会保険</dt>
    <dd class="o-box o-box--tbody o-box--ghost-tbody c-content-l">健康保険、厚生年金、雇用保険、労災保険</dd>
    <dt class="o-box o-box--thead o-box--ghost-thead c-content-l">その他</dt>
    <dd class="o-box o-box--tbody o-box--ghost-tbody c-content-l">
      あのイーハトーヴォのすきとおった風、夏でも底に冷たさをもつ青いそら、うつくしい森で飾られたモリーオ市、郊外のぎらぎらひかる草の波。
    </dd>
  </dl>
  <h2 class="c-sec-heading u-text-weight-b">応募フォーム</h2>
  <p class="c-content-l">必要な情報を入力して、「送信する」ボタンを押してください。</p>
  <?php if (have_posts()):?>
  <?php while (have_posts()): the_post();?>
  <?php the_content();?>
  <?php endwhile;?>
  <?php endif;?>
  <ul class="o-stack o-stack--xs u-mt-l">
    <li class="c-notes c-suppl-l">調査等のため、返信にお時間を頂くことがございます。予めご了承ください。</li>
    <li class="c-notes c-suppl-l">
      万が一、一週間経っても返信がない場合は大変お手数ですが、<a class="c-text-link c-text-link--underline"
        href="mailto:<?php echo get_vars('mail', 'primary');?>"
        target="_blank" rel="noopener"><span
          class="u-font-en-con"><?php echo get_vars('mail', 'primary');?></span></a>までご連絡ください。
    </li>
  </ul>
</div>
<?php get_footer();?>