<?php

add_theme_support('post-thumbnails');
add_action('init', 'remove_block_editor_options');
function remove_block_editor_options()
{
    remove_post_type_support('post', 'excerpt');  // 抜粋
    remove_post_type_support('post', 'trackbacks');// トラックバック
    remove_post_type_support('post', 'author');// 作成者
    remove_post_type_support('post', 'comments');// コメント
    remove_post_type_support('post', 'page-attributes'); // 表示順
    remove_post_type_support('post', 'post-formats');// 投稿フォーマット
    remove_post_type_support('page', 'page-attributes');
    remove_post_type_support('page', 'excerpt');  // 抜粋
    remove_post_type_support('page', 'trackbacks');// トラックバック
    remove_post_type_support('page', 'comments');// コメント
    remove_post_type_support('page', 'page-attributes'); // 表示順
}
add_action('init', 'create_post_type');
function create_post_type()
{
    register_post_type(
        'news',
        array(
          'labels' => array(
              'name' => 'お知らせ',
              'singular_name' => 'お知らせ',
              'add_new_item' => 'お知らせの新規追加',
              'edit_item' => 'お知らせの編集'
          ),
          'hierarchical' => false,
          'public' => true,
          'menu_position' => 9,
          'has_archive' => true,
          'menu_icon'   => 'dashicons-clipboard',
          'rewrite' => array('with_front' => false),
          'supports' => array('title','editor')
        )
    );
    register_post_type(
        'gallery',
        array(
          'labels' => array(
              'name' => 'ギャラリー',
              'singular_name' => 'ギャラリー',
              'add_new_item' => 'ギャラリーの新規追加',
              'edit_item' => 'ギャラリーの編集'
          ),
          'has_archive' => true,
          'public' => true,
          'show_ui' => true,
          'menu_position' => 14,
          'supports' => array('title','thumbnail'),
          'menu_icon'   => 'dashicons-format-gallery',
        )
    );
    register_post_type(
        'staff', /* post-type */
        array(
        'labels' => array(
            'name' => 'スタッフ',
            'singular_name' => 'スタッフ',
            'add_new_item' => 'スタッフの新規追加',
            'edit_item' => 'スタッフの編集'
        ),
        'has_archive' => true,
        'public' => true,
        'show_ui' => true,
        'menu_position' => 15,
        'supports' => array('editor','title','thumbnail'),
        'menu_icon'   => 'dashicons-id',
        )
    );
    register_post_type(
        'review', /* post-type */
        array(
        'labels' => array(
            'name' => '口コミ',
            'singular_name' => '口コミ',
            'add_new_item' => '口コミの新規追加',
            'edit_item' => '口コミの編集'
        ),
        'has_archive' => true,
        'public' => true,
        'show_ui' => true,
        'menu_position' => 16,
        'supports' => array('editor','title','thumbnail'),
        'menu_icon'   => 'dashicons-star-half',
        )
    );
}
function my_redirect_404()
{
    if (is_singular('staff') || is_singular('gallery') || is_singular('review')) {
        global $wp_query;
        $wp_query->set_404();
        status_header(404);
    }
}
add_action('template_redirect', 'my_redirect_404');
function custom_post_type_link($link, $post)
{
    if ($post->post_type === 'news') {
        return home_url('/news/' . $post->ID . '/');
    } else {
        return $link;
    }
}
add_filter('post_type_link', 'custom_post_type_link', 1, 2);
function news_rewrite_rules_array($rules)
{
    $new_rewrite_rules = array(
      'news/([0-9]+)/?$' => 'index.php?post_type=news&p=$matches[1]',
    );
    return $new_rewrite_rules + $rules;
}
add_filter('rewrite_rules_array', 'news_rewrite_rules_array');
function post_has_archive($args, $post_type)
{
    if ('post' == $post_type) {
        $args['rewrite'] = true;
        $args['has_archive'] = esc_attr('blog');
    }
    return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);

function add_my_box()
{
    $addtype = array( 'post', 'page', 'news');
    add_meta_box('meta_info', 'SEO', 'meta_info_form', $addtype, 'side');
    add_meta_box('meta_blogs', '追加情報', 'meta_blogs_form', 'post', 'normal');
    add_meta_box('meta_staff', 'スタッフ情報', 'meta_staff_form', 'staff', 'normal');
    add_meta_box('meta_review', '口コミ情報', 'meta_review_form', 'review', 'normal');
}
add_action('admin_menu', 'add_my_box');

function meta_info_form()
{
    global $post;
    $keywords = get_post_meta($post->ID, 'meta_keywords', true);
    $description = get_post_meta($post->ID, 'meta_description', true); ?>
<h3 style="font-size: 14px; margin: 0 0 8px;">キーワード</h3>
<input type="text" name="meta_keywords"
  value="<?php echo esc_html($keywords); ?>"
  style="width: 100%;margin: 0 0 8px;" />
<p style="color:#666; font-size: 13px; line-height: 1.68; margin: 0">キーワードが複数ある場合はコンマで区切ってください</p>
<h3 style="font-size: 14px; margin: 8px 0;padding: 8px 0 0;border-top:1px solid #ccd0d4;">ディスクリプション（抜粋兼用） <span
    style="color:#666; font-size: 13px">※200文字以上は省略されます。</span></h3>
<textarea id="meta_description" name="meta_description" rows="1" cols="40"
  style="width: 100%; height: 60px"><?php echo htmlspecialchars($description); ?></textarea>
<script type="text/javascript">
  jQuery(document).ready(function($) {
    var maxcount = 200;
    $('#meta_description').after(
      '<p style=\"color:#666; font-size: 13px; margin: 0\">文字数: <span id=\"description-count\"></span></p>'
    );
    $('#description-count').text($('#meta_description').val().replace(/\s+/g, '').length);
    if ($('#meta_description').val().replace(/\s+/g, '').length > maxcount) {
      $('#description-count').css('color', '#f00');
    } else {
      $('#description-count').css('color', '#666');
    }
    $('#meta_description').bind("keydown keyup keypress change", function() {
      $('#description-count').text($('#meta_description').val().replace(/\s+/g, '').length);
      if ($(this).val().replace(/\s+/g, '').length > maxcount) {
        $('#description-count').css('color', '#f00');
      } else {
        $('#description-count').css('color', '#666');
      }
    });
    $('.categorychecklist>li:first-child, .cat-checklist>li:first-child').before(
      '<p style="font-size: 14px; margin: 0 0 8px;">※ 複数選んでも、表示は1つです。</p>');
  });
</script>
<?php
}
function meta_blogs_form()
{
    global $post;
    $post_summary = get_post_meta($post->ID, 'post_summary', true);
    $recommend_url  = get_post_meta($post->ID, 'recommend_url', true);
    $recommend_txt = get_post_meta($post->ID, 'recommend_txt', true);
    $recommend_heading  = get_post_meta($post->ID, 'recommend_heading', true);
    ?>
<h3 style="font-size: 14px; margin: 0 0 8px;">前文</h3>
<textarea id="post_summary" name="post_summary" rows="1" cols="40"
  style="width: 100%; height: 60px"><?php echo htmlspecialchars($post_summary); ?></textarea>
<h3 style="font-size: 14px; margin: 0 0 8px;">オススメ記事URL</h3>
<input type="text" name="recommend_url"
  value="<?php echo esc_html($recommend_url); ?>"
  style="width: 100%;margin: 0 0 8px;" />
<h3 style="font-size: 14px; margin: 0 0 8px;">推薦文</h3>
<input type="text" name="recommend_txt"
  value="<?php echo esc_html($recommend_txt); ?>"
  style="width: 100%;margin: 0 0 8px;" />
<h3 style="font-size: 14px; margin: 0 0 8px;">オススメ見出し</h3>
<input type="text" name="recommend_heading"
  value="<?php echo esc_html($recommend_heading); ?>"
  style="width: 100%;margin: 0 0 8px;" />
<?php
}
function meta_staff_form()
{
    global $post;
    $staff_job = get_post_meta($post->ID, 'staff_job', true);
    $staff_message = get_post_meta($post->ID, 'staff_message', true);
    $staff_fb = get_post_meta($post->ID, 'staff_fb', true);
    $staff_tw = get_post_meta($post->ID, 'staff_tw', true);
    $staff_insta = get_post_meta($post->ID, 'staff_insta', true);
    $staff_url = get_post_meta($post->ID, 'staff_url', true); ?>
<h3 style="font-size: 14px; margin: 0 0 8px;">役職</h3>
<input type="text" name="staff_job"
  value="<?php echo esc_html($staff_job); ?>"
  style="width: 100%;margin: 0 0 8px;" />
<h3 style="font-size: 14px; margin: 0 0 8px;">メッセージ</h3>
<textarea id="staff_message" name="staff_message" rows="1" cols="40"
  style="width: 100%; height: 60px"><?php echo htmlspecialchars($staff_message); ?></textarea>
<h3 style="font-size: 14px; margin: 0 0 8px;">Facebook</h3>
<input type="text" name="staff_fb"
  value="<?php echo esc_html($staff_fb); ?>"
  style="width: 100%;margin: 0 0 8px;" />
<h3 style="font-size: 14px; margin: 0 0 8px;">Twitter</h3>
<input type="text" name="staff_tw"
  value="<?php echo esc_html($staff_tw); ?>"
  style="width: 100%;margin: 0 0 8px;" />
<h3 style="font-size: 14px; margin: 0 0 8px;">Instagram</h3>
<input type="text" name="staff_insta"
  value="<?php echo esc_html($staff_insta); ?>"
  style="width: 100%;margin: 0 0 8px;" />
<h3 style="font-size: 14px; margin: 0 0 8px;">URL</h3>
<input type="text" name="staff_url"
  value="<?php echo esc_html($staff_url); ?>"
  style="width: 100%;margin: 0 0 8px;" />
<?php
}
function meta_review_form()
{
    global $post;
    $review_rate = get_post_meta($post->ID, 'review_rate', true); ?>
<h3 style="font-size: 14px; margin: 0 0 8px;">レビュー（1〜5で入力してください）</h3>
<input type="text" name="review_rate"
  value="<?php echo esc_html($review_rate); ?>"
  style="width: 100%;margin: 0 0 8px;" />
<?php
}
function save_meta_info($post_id)
{
    if (isset($_POST['meta_keywords'])) {
        update_post_meta($post_id, 'meta_keywords', $_POST['meta_keywords']);
    } else {
        delete_post_meta($post_id, 'meta_keywords');
    }
    if (isset($_POST['meta_description'])) {
        update_post_meta($post_id, 'meta_description', $_POST['meta_description']);
    } else {
        delete_post_meta($post_id, 'meta_description');
    }
    if (isset($_POST['post_summary'])) {
        update_post_meta($post_id, 'post_summary', $_POST['post_summary']);
    } else {
        delete_post_meta($post_id, 'post_summary');
    }
    if (isset($_POST['recommend_url'])) {
        update_post_meta($post_id, 'recommend_url', $_POST['recommend_url']);
    } else {
        delete_post_meta($post_id, 'recommend_url');
    }
    if (isset($_POST['recommend_txt'])) {
        update_post_meta($post_id, 'recommend_txt', $_POST['recommend_txt']);
    } else {
        delete_post_meta($post_id, 'recommend_txt');
    }
    if (isset($_POST['recommend_heading'])) {
        update_post_meta($post_id, 'recommend_heading', $_POST['recommend_heading']);
    } else {
        delete_post_meta($post_id, 'recommend_heading');
    }
    if (isset($_POST['staff_job'])) {
        update_post_meta($post_id, 'staff_job', $_POST['staff_job']);
    } else {
        delete_post_meta($post_id, 'staff_job');
    }
    if (isset($_POST['staff_message'])) {
        update_post_meta($post_id, 'staff_message', $_POST['staff_message']);
    } else {
        delete_post_meta($post_id, 'staff_message');
    }
    if (isset($_POST['staff_fb'])) {
        update_post_meta($post_id, 'staff_fb', $_POST['staff_fb']);
    } else {
        delete_post_meta($post_id, 'staff_fb');
    }
    if (isset($_POST['staff_tw'])) {
        update_post_meta($post_id, 'staff_tw', $_POST['staff_tw']);
    } else {
        delete_post_meta($post_id, 'staff_tw');
    }
    if (isset($_POST['staff_insta'])) {
        update_post_meta($post_id, 'staff_insta', $_POST['staff_insta']);
    } else {
        delete_post_meta($post_id, 'staff_insta');
    }
    if (isset($_POST['staff_url'])) {
        update_post_meta($post_id, 'staff_url', $_POST['staff_url']);
    } else {
        delete_post_meta($post_id, 'staff_url');
    }
    if (isset($_POST['review_rate'])) {
        update_post_meta($post_id, 'review_rate', $_POST['review_rate']);
    } else {
        delete_post_meta($post_id, 'review_rate');
    }
}
add_action('save_post', 'save_meta_info');
?>