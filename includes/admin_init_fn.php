<?php
require_once('admin_init_ver.php');
$mdx_subdir_flag_init = "normal";
if(stripos(explode('//', home_url())[1], "/")){
	$mdx_subdir_flag_init = "sub";
}
$arr = array(
'mdx_install'=>$mdx_subdir_flag_init,
'mdx_night_style'=>'true',
'mdx_auto_night_style'=>'system',
'mdx_notice'=>'',
'mdx_open_side'=>'true',
'mdx_widget'=>'false',
'mdx_cookie'=>'',
'mdx_allow_scale'=>'true',
'mdx_reduce_motion'=>'true',
'mdx_img_box'=>'true',
"mdx_readmore"=>__('去围观','mdx'),
"mdx_post_money"=>'',
'mdx_read_pro'=>'true',
'mdx_pro_save'=>'true',
'mdx_auto_scroll'=>'false',
'mdx_toc'=>'true',
'mdx_toc_preview'=>'true',
'mdx_load_pro'=>'true',
'mdx_post_list_click_area'=>'title',
'mdx_post_list_1'=>'view',
'mdx_post_list_2'=>'time',
'mdx_post_list_3'=>'blank',
'mdx_post_edit_time'=>'post',
'mdx_author_card'=>'false',
"mdx_lazy_load_mode"=>'speed',
'mdx_lazyload_fallback'=>'false',
'mdx_enhanced_ajax'=>'true',
'mdx_speed_pre'=>'false',
'mdx_share_area'=>'all',
'mdx_hot_posts'=>'false',
'mdx_hot_posts_get'=>'cat',
'mdx_hot_posts_num'=>'10',
'mdx_hot_posts_cat'=>'',
'mdx_hot_posts_text'=>__('推荐文章','mdx'),
'mdx_all_posts_text'=>__('最新文章','mdx'),
'mdx_you_may_like'=>'false',
'mdx_you_may_like_way'=>'tag',
'mdx_you_may_like_text'=>__('推荐文章','mdx'),
'mdx_real_search'=>'false',
'mdx_submit_comment'=>__('发送','mdx'),
'mdx_comment_ajax'=>'true',
'mdx_comment_emj'=>'true',
'mdx_ad'=>'',
'mdx_logged_in_ad'=>'false',
'mdx_seo_key'=>'',
'mdx_auto_des'=>'true',
'mdx_seo_des'=>'',
'mdx_head_js'=>'',
'mdx_footer_js'=>'',
'mdx_icp_num'=>!empty(get_option('zh_cn_l10n_icp_num')) ? get_option('zh_cn_l10n_icp_num') : '',
'mdx_use_cdn'=>'none',
'mdx_custom_cdn_root'=>'',

'mdx_styles'=>'indigo',
'mdx_styles_hex'=>'#3f51b5',
'mdx_styles_act'=>'pink',
'mdx_act_hex'=>'#ff4081',
'mdx_styles_dark'=>'disable',
'mdx_md2'=>'false',
'mdx_md2_font'=>'false',
'mdx_login_md'=>'false',
'mdx_chrome_color'=>'true',
'mdx_title_bar'=>'false',
'mdx_tap_to_top'=>'true',
'mdx_default_style'=>'1',
'mdx_index_show'=>'0',
'mdx_post_style'=>'0',
'mdx_post_nav_style'=>'1',
'mdx_echo_post_sum'=>'true',
'mdx_post_list_img_height'=>'auto',
'mdx_post_def_img'=>'false',
'mdx_gravatar_actived'=>'false',
'mdx_link_rand_order'=>'false',
'mdx_title_med'=>'wp',
'mdx_index_img'=>get_bloginfo("template_url").'/img/def_index.jpg',
'mdx_index_img_bg'=>'false',
'mdx_side_img'=>'',
'mdx_side_info'=>'false',
'mdx_side_head'=>'',
'mdx_side_name'=>'',
'mdx_side_more'=>'',
'mdx_index_say'=>'Hello=>MDx!',
'mdx_index_say_size'=>'1',
'mdx_say_after'=>'',
'mdx_logo_way'=>'1',
'mdx_logo'=>'',
'mdx_logo_text'=>'',
'mdx_safari'=>'false',
'mdx_svg'=>'',
'mdx_svg_color'=>'',
'mdx_tags_color'=>'true',
'mdx_styles_footer'=>'1',
'mdx_footer_say'=>'Hello=>MDx!',
'mdx_footer'=>'');
update_option("mdx_all_options", $arr);
?>
