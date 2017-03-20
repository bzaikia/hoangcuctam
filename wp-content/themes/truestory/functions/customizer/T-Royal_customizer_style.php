<?php
  function truestory_css_customizer(){
?>
    <style type="text/css">
    
    .truestory-about-author-name{font-size:<?php echo get_theme_mod('author_name_size');?>px;}
    .truestory-about-author-name{color:<?php echo get_theme_mod('author_name_color');?>;}
    .truestory-about-author .truestory-aa-desc p{font-size:<?php echo get_theme_mod('author_description_size');?>px;}
    .truestory-about-author .truestory-aa-desc p{line-height:<?php echo get_theme_mod('author_description_line_height');?>px;}
    .truestory-about-author .truestory-aa-desc p{color:<?php echo get_theme_mod('description_color');?>;}
    
   
    
    
    .truestory-menu ul li a {font-size:<?php echo get_theme_mod('truestory-menu-font-size');?>px;}
    .truestory-menu ul li a {color:<?php echo get_theme_mod('truestory-menu-font-color');?>;}
    .truestory-menu{background:<?php if(get_theme_mod('truestory-menu-nav-bg')): echo get_theme_mod('truestory-menu-nav-bg'); else: ?>transparent<?php endif;?>;}
    .truestory-menu{border-color:<?php echo get_theme_mod('truestory-menu-seperation-border');?>;}
    .truestory-menu ul li{border-right:1px solid <?php if(get_theme_mod('truestory-menu-seperation-borders')): echo get_theme_mod('truestory-menu-seperation-borders'); else: ?>transparent<?php endif;?>;}
    .truestory-menu ul li:last-child{border-right: none;}
    .truestory-featured-articles {<?php if(get_theme_mod('featured_template')=='boxed'): ?>width:1100px;margin:30px auto 0 auto;<?php elseif(get_theme_mod('featured_template')=='full'): ?> width:100%; <?php else: ?> width:1100px;margin:30px auto 0 auto;<?php endif; ?>}
    .truestory-featured-articles {
        <?php if(get_theme_mod('featured_template')=='full') :?>
        <?php if(get_theme_mod('author_name') OR get_theme_mod('author_description') OR get_theme_mod('profile_picture')) :?>margin:30px auto 0 auto; 
        <?php endif; ?>
        <?php endif; ?>}


    .truestory-featured-articles_readmore{border-color:<?php if(get_theme_mod('read_more_border_bottom_color')): echo get_theme_mod('read_more_border_bottom_color'); else: ?>#C69F73<?php endif;?>;}
    .ontitle a{color:<?php if(get_theme_mod('f_title_color')): echo get_theme_mod('f_title_color'); else: ?>#000000<?php endif;?>;}
    .truestory-featured-articles-info a:first-of-type span{color:<?php if(get_theme_mod('fcat_color')): echo get_theme_mod('fcat_color'); else: ?>#ffffff<?php endif;?>;}
    .truestory-featured-articles_title{font-size:<?php if(get_theme_mod('f_title_size')): echo get_theme_mod('f_title_size'); else: ?>20<?php endif;?>px;}
    .truestory-featured-articles_readmore{font-size:<?php if(get_theme_mod('read_more_size')): echo get_theme_mod('read_more_size'); else: ?>14<?php endif;?>px;}
    .truestory-featured-articles_title-second{font-size:<?php if(get_theme_mod('f_title_size_dark')): echo get_theme_mod('f_title_size_dark'); else: ?>40<?php endif;?>px;}
    .truestory-featured-articles_title-second{color:<?php if(get_theme_mod('f_title_color_dark')): echo get_theme_mod('f_title_color_dark'); else: ?>#fff<?php endif;?>;}
    .truestory-featured-articles_body-second{font-size:<?php if(get_theme_mod('f_desc_size_dark')): echo get_theme_mod('f_desc_size_dark'); else: ?>11<?php endif;?>px;}
    .truestory-featured-articles_body-second{color:<?php if(get_theme_mod('f_desc_color_dark')): echo get_theme_mod('f_desc_color_dark'); else: ?>#fff<?php endif;?>;}
    .truestory-featured-articles_body-second{background-color:<?php if(get_theme_mod('f_desc_bg_dark')): echo get_theme_mod('f_desc_bg_dark'); else: ?>#000<?php endif;?>;}
    .truestory-featured-articles_body-second{box-shadow: 10px 0 0 <?php if(get_theme_mod('f_desc_bg_dark')): echo get_theme_mod('f_desc_bg_dark'); else: ?>#000<?php endif;?>,-10px 0 0 <?php if(get_theme_mod('f_desc_bg_dark')): echo get_theme_mod('f_desc_bg_dark'); else: ?>#000<?php endif;?>;}
    .truestory-truestory-featured-articles_readmore-second{font-size:<?php if(get_theme_mod('f_rm_size_dark')): echo get_theme_mod('f_rm_size_dark'); else: ?>12<?php endif;?>px;}
    .truestory-truestory-featured-articles_readmore-second{color:<?php if(get_theme_mod('f_rm_color_dark')): echo get_theme_mod('f_rm_color_dark'); else: ?>#fff<?php endif;?>;}
    .truestory-truestory-featured-articles_readmore-second{border-color:<?php if(get_theme_mod('f_rm_border_color_dark')): echo get_theme_mod('f_rm_border_color_dark'); else: ?>#fff<?php endif;?>;}
    .truestory-announcement{background-image:url('<?php if(get_theme_mod('truestory-special-ann-bg-image')): echo get_theme_mod('truestory-special-ann-bg-image'); else: ?>https://static.pexels.com/photos/56759/pexels-photo-56759.jpeg<?php endif;?>');}
    .truestory-ann_soft_bg{background:rgba(0, 0, 0, <?php if(get_theme_mod('truestory-special-ann-bg-image-rgba')):?><?php echo get_theme_mod('truestory-special-ann-bg-image-rgba');?><?php else: ?>0.5<?php endif;?>);}
    .truestory-announcement span{color:<?php if(get_theme_mod('truestory-special-ann-title-color')): echo get_theme_mod('truestory-special-ann-title-color'); else: ?>#ffffff<?php endif;?>;}
    .truestory-announcement span{background-color:<?php if(get_theme_mod('truestory-special-ann-title-bg-color')): echo get_theme_mod('truestory-special-ann-title-bg-color'); else: ?>#000<?php endif;?>;}
    .truestory-announcement span{font-size:<?php if(get_theme_mod('truestory-special-ann-title-size')): echo get_theme_mod('truestory-special-ann-title-size'); else: ?>20<?php endif;?>px;}
    
    .truestory-announcement p{color:<?php if(get_theme_mod('truestory-special-ann-desc-color')): echo get_theme_mod('truestory-special-ann-desc-color'); else: ?>#ffffff<?php endif;?>;}
    .truestory-announcement p{background-color:<?php if(get_theme_mod('truestory-special-ann-desc-bg-color')): echo get_theme_mod('truestory-special-ann-desc-bg-color'); else: ?>#000<?php endif;?>;}
    .truestory-announcement p{font-size:<?php if(get_theme_mod('truestory-special-ann-desc-size')): echo get_theme_mod('truestory-special-ann-desc-size'); else: ?>17<?php endif;?>px;}
    
    .truestory-full-posts_thumb-img img{border-width:0 0 <?php if(get_theme_mod('full_post_thumbnail_border-size')): echo get_theme_mod('full_post_thumbnail_border-size'); ?> 0; <?php  else: ?>4<?php endif;?>px;}
    .truestory-full-posts_thumb-img img{border-color:<?php if(get_theme_mod('full_post_thumbnail_border-color')): echo get_theme_mod('full_post_thumbnail_border-color'); else: ?>#000000<?php endif;?>;}
    .truestory-full-posts_thumb-img img{border-style:<?php if(get_theme_mod('full_post_thumbnail_border-style')): echo get_theme_mod('full_post_thumbnail_border-style'); else: ?>solid<?php endif;?>; }
    .truestory-full-posts_thumb-img img{border:none;}
    .truestory-full-posts_title a{color:<?php if(get_theme_mod('full_post_title_color')): echo get_theme_mod('full_post_title_color'); else: ?>#000000<?php endif;?>;}
    .truestory-full-posts_title a{font-size:<?php if(get_theme_mod('full_post_title_size')): echo get_theme_mod('full_post_title_size'); else: ?>35<?php endif;?>px;}
    .truestory-full-posts_title a{font-family:"lora";}
    .truestory-full-posts_date-author{font-size:<?php if(get_theme_mod('full_post_date_size')): echo get_theme_mod('full_post_date_size'); else: ?>12<?php endif;?>px;}
    .truestory-full-posts_date-author{color:<?php if(get_theme_mod('full_post_date_color')): echo get_theme_mod('full_post_date_color'); else: ?>#ffffff<?php endif;?>;}
    .truestory-full-posts_date-author{background-color:<?php if(get_theme_mod('full_post_date_bg')): echo get_theme_mod('full_post_date_bg'); else: ?>#cea525<?php endif;?>;}
    .truestory-full_posts-content{font-size:<?php if(get_theme_mod('full_post_content_size')): echo get_theme_mod('full_post_content_size'); else: ?>14<?php endif;?>px;}
    .truestory-full_posts-content{color:<?php if(get_theme_mod('full_post_content_color')): echo get_theme_mod('full_post_content_color'); else: ?>#666<?php endif;?>;}
    .post-footer,.post-footer a{color:<?php if(get_theme_mod('full_post_footer_color')): echo get_theme_mod('full_post_footer_color'); else: ?>#888<?php endif;?>;}
    .post-footer{font-size:<?php if(get_theme_mod('full_post_footer_size')): echo get_theme_mod('full_post_footer_size'); else: ?>13<?php endif;?>px;}
    .truestory-full_posts-comnum-sm,.truestory-full_posts-comment-number,.truestory-full_posts-socialmedia,.truestory-full-posts_readmoree{border-color:<?php if(get_theme_mod('full_post_footer_border_color')): echo get_theme_mod('full_post_footer_border_color'); else: ?>#e5e5e5<?php endif;?>;}
    .post-aside{font-size:<?php if(get_theme_mod('full_post_aside_font_size')): echo get_theme_mod('full_post_aside_font_size'); else: ?>13<?php endif;?>px;}
    .post-aside,.post-aside:first-letter{color:<?php if(get_theme_mod('full_post_aside_font_color')): echo get_theme_mod('full_post_aside_font_color'); else: ?>#fff<?php endif;?>;}
    .post-aside{background-color:<?php if(get_theme_mod('full_post_aside_bg_color')): echo get_theme_mod('full_post_aside_bg_color'); else: ?>#000<?php endif;?>;}
    .post-aside{border-color:<?php if(get_theme_mod('full_post_aside_border_color')): echo get_theme_mod('full_post_aside_border_color'); else: ?>#fff<?php endif;?>;}
    .post-link a{font-size:<?php if(get_theme_mod('link_font_size')): echo get_theme_mod('link_font_size'); else: ?>14<?php endif;?>px;}
    .post-link a{color:<?php if(get_theme_mod('link_font_color')): echo get_theme_mod('link_font_color'); else: ?>#000<?php endif;?>;}
    .post-link a{background-color:<?php if(get_theme_mod('link_font_bg_color')): echo get_theme_mod('link_font_bg_color'); else: ?>#fff<?php endif;?>;}
    .post-link a{box-shadow: 10px 0 0 <?php if(get_theme_mod('link_font_bg_color')): echo get_theme_mod('link_font_bg_color'); else: ?>#fff<?php endif;?>, -10px 0 0 <?php if(get_theme_mod('link_font_bg_color')): echo get_theme_mod('link_font_bg_color'); else: ?>#fff<?php endif;?>;}
    .post-link a:hover{color:<?php if(get_theme_mod('link_font_color_hover')): echo get_theme_mod('link_font_color_hover'); else: ?>#fff<?php endif;?>;}
    .post-link a:hover{background-color:<?php if(get_theme_mod('link_font_bg_color_hover')): echo get_theme_mod('link_font_bg_color_hover'); else: ?>#353535<?php endif;?>;}
    .post-link a:hover{box-shadow: 10px 0 0 <?php if(get_theme_mod('link_font_bg_color_hover')): echo get_theme_mod('link_font_bg_color_hover'); else: ?>#353535<?php endif;?>, -10px 0 0 <?php if(get_theme_mod('link_font_bg_color_hover')): echo get_theme_mod('link_font_bg_color_hover'); else: ?>#353535<?php endif;?>;}
    
    .post-link {background-color:<?php if(get_theme_mod('link_bg_color')): echo get_theme_mod('link_bg_color'); else: ?>#000<?php endif;?>;}
    .post-link {border-color:<?php if(get_theme_mod('link_border_color')): echo get_theme_mod('link_border_color'); else: ?>#fff<?php endif;?>;}
    .truestory-about-author-widget p{font-size:<?php if(get_theme_mod('sidebar-about-us_font-size')): echo get_theme_mod('sidebar-about-us_font-size'); else: ?>14<?php endif;?>px;}
    .truestory-about-author-widget p{color:<?php if(get_theme_mod('sidebar-about-us_font-color')): echo get_theme_mod('sidebar-about-us_font-color'); else: ?>#444<?php endif;?>;}
    .truestory-special_ann-widget p{font-size:<?php if(get_theme_mod('sidebar-special-ann_font-size')): echo get_theme_mod('sidebar-special-ann_font-size'); else: ?>14<?php endif;?>px;}
    .truestory-special_ann-widget p{color:<?php if(get_theme_mod('sidebar-special-ann_font-color')): echo get_theme_mod('sidebar-special-ann_font-color'); else: ?>#fff<?php endif;?>;}
    .truestory-special_ann-widget p{background-color:<?php if(get_theme_mod('sidebar-special-ann_bg-color')): echo get_theme_mod('sidebar-special-ann_bg-color'); else: ?>#000<?php endif;?>;}
    .truestory-recent-articles-info_category_author{font-size:<?php if(get_theme_mod('sidebar-special-latest-posts_info-size')): echo get_theme_mod('sidebar-special-latest-posts_info-size'); else: ?>13<?php endif;?>px;}
    .truestory-recent-articles-info_category_author,.truestory-recent-articles-info_category_author a{color:<?php if(get_theme_mod('sidebar-special-latest-posts_info-color')): echo get_theme_mod('sidebar-special-latest-posts_info-color'); else: ?>#fff<?php endif;?>;}
    .truestory-recent-articles-info_category_author{background-color:<?php if(get_theme_mod('sidebar-special-latest-posts_info-bg-color')): echo get_theme_mod('sidebar-special-latest-posts_info-bg-color'); else: ?>#000<?php endif;?>;}
    .truestory-recent-articles-info_title{font-size:<?php if(get_theme_mod('sidebar-special-latest-posts_title-size')): echo get_theme_mod('sidebar-special-latest-posts_title-size'); else: ?>30<?php endif;?>px;}
    .truestory-recent-articles-info_title{color:<?php if(get_theme_mod('sidebar-special-latest-posts_title-color')): echo get_theme_mod('sidebar-special-latest-posts_title-color'); else: ?>#000<?php endif;?>;}
    .truestory-recent-articles-info_time{color:<?php if(get_theme_mod('sidebar-special-latest-posts_date-color')): echo get_theme_mod('sidebar-special-latest-posts_date-color'); else: ?>#2e2e2e<?php endif;?>;}
    .truestory-recent-articles-info_time{font-size:<?php if(get_theme_mod('sidebar-special-latest-posts_date-size')): echo get_theme_mod('sidebar-special-latest-posts_date-size'); else: ?>13<?php endif;?>px;}
    .footer-copyrights-text{color:<?php if(get_theme_mod('footer-cr-color')): echo get_theme_mod('footer-cr-color'); else: ?>#ffffff<?php endif;?>;}
    .footer-copyrights-text{font-size:<?php if(get_theme_mod('footer-cr-size')): echo get_theme_mod('footer-cr-size'); else: ?>14<?php endif;?>px;}
    .footer-copyrights-text{background-color:<?php if(get_theme_mod('footer-cr-bg')): echo get_theme_mod('footer-cr-bg'); else: ?>transparent;<?php endif;?>;}

    .footer .instagram-pics li{background:<?php if(get_theme_mod('footer-cr-border-color')): echo get_theme_mod('footer-cr-border-color'); else: ?>#000<?php endif;?>;}
    .truestory-related_word{color:<?php if(get_theme_mod('truestory-related-title_color')): echo get_theme_mod('truestory-related-title_color'); else: ?>#2e2e2e<?php endif;?>;}
    .truestory-related_word{font-size:<?php if(get_theme_mod('truestory-related-title_size')): echo get_theme_mod('truestory-related-title_size'); else: ?>25<?php endif;?>px;}
    .truestory-related-info_title{font-size:<?php if(get_theme_mod('truestory-related-post-title_size')): echo get_theme_mod('truestory-related-post-title_size'); else: ?>25<?php endif;?>px;}
    .truestory-related-info_title{color:<?php if(get_theme_mod('truestory-related-thetitle_color')): echo get_theme_mod('truestory-related-thetitle_color'); else: ?>#000<?php endif;?>;}
    .truestory-related_info span{color:<?php if(get_theme_mod('truestory-related-author-color')): echo get_theme_mod('truestory-related-author-color'); else: ?>#545454<?php endif;?>;}
    .truestory-related_info span{font-size:<?php if(get_theme_mod('truestory-related-author-size')): echo get_theme_mod('truestory-related-author-size'); else: ?>14<?php endif;?>px;}
    .widget-color{color:green;}
    .truestory-about-author-widget{color:<?php if(get_theme_mod('sidebar-widget-title')): echo get_theme_mod('sidebar-widget-title'); else: ?>#ffffff<?php endif;?>;}
    .widget-title{font-size:<?php if(get_theme_mod('sidebar-widget-title-size')): echo esc_attr(get_theme_mod('sidebar-widget-title-size')); else: ?>13<?php endif;?>px;}
    .widget-title{color:<?php if(get_theme_mod('sidebar-widget-title-color')): echo esc_attr(get_theme_mod('sidebar-widget-title-color')); else: ?>#ffffff<?php endif;?>;}
    .widget-title{background-color:<?php if(get_theme_mod('sidebar-widget-title-bg')): echo esc_attr(get_theme_mod('sidebar-widget-title-bg')); else: ?>#000<?php endif;?>;}
    .truestory-page-header h2{font-size:<?php if(get_theme_mod('page_title_font-size')): echo get_theme_mod('page_title_font-size'); else: ?>50<?php endif;?>px;}
    .truestory-page-header h2{color:<?php if(get_theme_mod('page_title_font-color')): echo get_theme_mod('page_title_font-color'); else: ?>#ffffff<?php endif;?>;}
    .truestory-page-header h2{background-color:<?php if(get_theme_mod('page_title-bg-color')): echo get_theme_mod('page_title-bg-color'); else: ?>#000<?php endif;?>;}
    .truestory-tr_page_content{font-size:<?php if(get_theme_mod('page_font-size')): echo get_theme_mod('page_font-size'); else: ?>14<?php endif;?>px;}
    .truestory-tr_page_content{color:<?php if(get_theme_mod('page_font-color')): echo get_theme_mod('page_font-color'); else: ?>#666<?php endif;?>;}
    .footer-info{background-image:url('<?php if(get_theme_mod('truestory-footer-bg')): echo get_theme_mod('truestory-footer-bg'); else: ?>http://localhost/wordpress/wp-content/themes/truestory/images/pexels-photo.jpg<?php endif;?>');}
<?php $truestory_nav_menu=get_theme_mod('navigation-choice'); if($truestory_nav_menu == 2 ): ?>
    .about-author_board{padding-bottom: 50px;}
<?php endif; ?>
   
    

<?php $nav_choice=get_theme_mod('navigation_choice'); 
          switch ($nav_choice) {
            case '3':
              ?>
              .truestory-featured-articles-second{width:80%;  float: left; margin-left: 2%;}
              .truestory-featured-articles{width:77%;float: left;margin-left: 2%;}

              <?php
              break;
            case'1':
               ?>
               .top-horizontal-menu ul li a { color:<?php echo get_theme_mod('horizontal-menu-color'); ?>;}
               <?php
            break;

            case'2':
                ?>
                .top-horizontal-menu ul li a { color:<?php echo get_theme_mod('horizontal-menu-color'); ?>;}
                <?php 

            break;
          }
?>

<?php $switch_sidebar=get_theme_mod('truestory_switch_sidebar'); 
              
              switch ($switch_sidebar) {
                  case false:
                      ?>
                      aside {
                     
                       float: left;
                       margin: 0 0 0 3%;
                       width: 29%;
                        }  
                        .posts{
                            float: left;
                        }
                      <?php
                      break;
                  
                   case true:
                      ?>
                      .posts {
                      float: right;
                      margin: 0 0 0 3%;
                    
                       }
                     aside {
                      float: right;
                      margin: 0 0 0 0%;
                      width: 28%;
                      }
                      <?php
                      break;
                  default:
                  ?>
                  aside {
                     
                       float: left;
                       margin: 0 0 0 3%;
                       width: 29%;
                        }  
                        .posts{
                            float: left;
                        }
                  <?php
                      
                      break;
              }


?>

     .truestory-about-author-pp img {
      /*border-color:<?php echo get_theme_mod('author_picture_border_color');?>;*/
       }





 .posts,.posts-single,.truestory-posts-category{width: 68%;}
 

 @media only screen and (max-width:1088px){

      .truestory-sub_container,.truestory_sub_container_single{
        width: 1020px;
      }
      .truestory-featured-articles{
        width: 1020px;
      }
      .truestory-featured-articles-second{
        width: 1020px;
      }
      .posts{
        float: none;
        clear: both;
        width: 1020px;
        margin: 0 0 0 0%;
      }
      .posts-single{
        float: none;
        width: 1020px;
      }
      .truestory-page-single{
        width: 1020px;
        float: none;
      }
      .truestory-posts-category{
        width: 1020px;
        float: none;
      }
      aside{
        float: none;
        margin-left: 0px;
        width: 100%;
        clear: both;
        
      }
      .truestory-full-posts_quote,.latest-posts_quote {
      background: #000;
color: #fff;
padding: 0px;
font-family: "lato",sans-serif;
font-weight: 700;
font-size: 35px;
line-height: 35px;
text-decoration: none;
background-size: cover;}

    .truestory-full-posts-quote_soft-bg a,.latest-posts_quote p {

    font-size: 60px;
    line-height: 70px;
}
}

@media only screen and (max-width:1050px){

      .truestory-sub_container,.truestory_sub_container_single{
        width: 1000px;
      }
      .truestory-bellow-author-area{
        width: 1000px;
      }
      .truestory-featured-articles{
        width: 100%;
      }
      .truestory-featured-articles-second{
        width: 100%;
      }
      .posts,.posts-single,.truestory-page-single,.truestory-posts-category{
        width: 100%;
      }
}
@media only screen and (max-width:1030px){

      .truestory-sub_container,.truestory_sub_container_single{
        width: 930px;
      }
      .truestory-bellow-author-area{
        width: 930px;
      }
      .truestory-featured-articles{
        width: 100%;
      }
       .truestory-featured-articles-second{
        width: 100%;
      }
      .posts,.posts-single,.truestory-page-single,.truestory-posts-category{
        width: 100%;
      }
}
@media only screen and (max-width:1170px){
  .truestory-featured-articles-second{
    
  }
 
.fotorama-splited {
    height: 100%;
    width: 100%;
}
.fotorama-sib{
    width: 49%;
    height: 248px;
    margin-left: 0%;
    margin-top:10px;
    float: none;
    

}
.about-author-top{
    width:1000px;
    text-align:center;
}
.about-author-personal-data{
    text-align:center;
}


.truestory-sub_container,.truestory_sub_container_single{
  clear: both;
}

  }
@media only screen and (max-width:990px){

      .truestory-sub_container,.truestory_sub_container_single{
        width: 95%;
      }
      .truestory-bellow-author-area{
        width: 95%;
      }
      .truestory-featured-articles{
        width: 100%;
      }
       .truestory-featured-articles-second{
        width: 100%;
      }
      .posts,.posts-single,.truestory-page-single,.truestory-posts-category{
        width: 100%;
      }
       .truestory-featured-articles-info{
        width: 50%;
        padding-top:5.5%;
        padding-bottom:5.5%;
       }
       .inside-f-info{
    width: 90%;
    
}
.about-author-top{
width:100%;
}
.about-author-personal-data{
width:90%;
margin-left:0;
}
.about-author-personal-name{
line-height:37px;
font-size:27px;
}
.about-author-personal-desc{
font-size:15px;
}

.featured-articles_readmore{
font-size: 12px;
padding: 8px 16px;
}
.featured-articles_title {

    font-weight: 900;
    font-size: 20px;
    }

}
@media only screen and (max-width:890px){


.truestory-featured-articles-info{

top:60%;
    
}
.truestory-list-posts_thumbnail{
    display:block;
    width:100%;
}
.truestory-list-posts_major_infos{
    display:block;
    width:100%;
    margin-top:20px;
}


}
@media only screen and (max-width:825px){
    .truestory-list-posts_thumbnail {
    width: 100%;
}
    .truestory-list-posts_major_infos {
    margin-left: 2%;
    margin-top: 20px;
    width:100%;
}

}
@media only screen and (max-width:790px){

  .truestory-featured-articles_title-second{
    font-size: 30px;
  }

.truestory-related ul li {
    width: 31%;
    display: inline-table;
    margin-left: 1%;
    vertical-align: top;
}
.truestory-featured-articles-info{

top:50%;

    
}

}
@media only screen and (max-width:670px){

.truestory-featured-articles_body-second_wrapp{
   
}
.inside-f-info{
    width: 90%;
    position: absolute;
    bottom: 10%;
}

}
@media only screen and (max-width:688px){

.truestory-announcement p{
  font-size: 16px;
}
.truestory-announcement span{
  font-size: 18px;
}
.truestory-full-posts_title a{
  font-size: 32px;
}
.truestory-full-posts_date-author{
  font-size: 11px;
}
 .truestory-featured-articles-info{
  top:40%;
  width: 70%;
  padding-top:7.7%;
  padding-bottom:7.7%;
  
  }
  .truestory-related ul li{
    display: block;
    width:  100%;
    margin:20px 0 0 0;
  }
  .truestory-related ul li:first-of-type{
      margin:0 0 0 0;
  }
  .comment-respond textarea{
    width: 95%;
  }
  .comment-respond form input[type="text"]{
    width: 60%;
  }
  .truestory-aa-desc{
  width:100%;
  }
}
@media only screen and (max-width: 630px){
  .truestory-featured-articles-info{
     top: 30%;
  -webkit-transform: translateY(-40%);
  -ms-transform: translateY(-40%);
  transform: translateY(-40%);
  }
  .thefooter{
    background:black;
    background-size:cover;
    background-position: center;
  }
  .thefooter .instagram-pics li{
    width: 25%;
    margin:auto;
  }
}
@media only screen and (max-width:577px){


.truestory-full-posts_date-author{
  font-size: 11px;
}
.truestory-full_posts-content,.truestory-full_posts-socialmedia,.truestory-full_posts-socialmedia,.truestory-full_posts-comment-number{
  font-size: 12px;
}
.truestory-featured-articles_readmore{
    font-size: 14px;
  }
  .truestory-full-posts_title a{
  font-size: 30px;
}
.truestory-full-posts_readmoree{
  font-size: 12px;
}
.truestory-full-posts_title a{
  font-size: 28px;
}
}
@media only screen and (max-width: 588px){
  .truestory-featured-articles-info{
     top: 30%;
  -webkit-transform: translateY(-35%);
  -ms-transform: translateY(-35%);
  transform: translateY(-35%);
  }

    .truestory-full-posts-quote_soft-bg a,.latest-posts_quote p {

    font-size: 50px;
    line-height: 60px;
}

}
@media only screen and (max-width: 555px){
  .truestory-featured-articles-info{
     top: 25%;
  -webkit-transform: translateY(-25%);
  -ms-transform: translateY(-25%);
  transform: translateY(-25%);
  }
}
@media only screen and (max-width:500px){
  .truestory-featured-articles-info{
     top: 18%;
  -webkit-transform: translateY(-18%);
  -ms-transform: translateY(-18%);
  transform: translateY(-18%);
  }
  .truestory-featured-articles_title{
    font-size: 16px;
  }
  .truestory-related_word{
    font-size: 24px;
  }
  .truestory-full_posts-socialmedia,.truestory-full_posts-comment-number{
  float:none;
  }
}


@media only screen and (max-width: 461px){
  .truestory-featured-articles-info{
     width:100%;
     padding-bottom:11;

     }
     .featured-articles_title {
   
    font-size: 20px;
    }
    .featured-articles_readmore{
    font-size:11px;
     }
    }
@media only screen and (max-width:504px){


.truestory-announcement span{
  font-size: 17px;
}
.truestory-announcement p{
  font-size: 14px;
}
.truestory-full-posts_title a{
  font-size: 26px;
}
 .thefooter .instagram-pics li{
    width: 33.33%;
    margin:auto;
  }
.truestory-featured-articles_body-second_wrapp{
    display:none;
}
  .truestory-full-posts-quote_soft-bg a,.latest-posts_quote p {

    font-size: 40px;
    line-height: 50px;
}
}
@media only screen and (max-width:421px){
 
.truestory-announcement span{
  font-size: 15px;
}
.truestory-announcement p{
  font-size: 13px;
}
.inside-f-info{
    top: 5%;
    width: 80%;
    
  }
.truestory-featured-articles-second{
    height:300px;
}
   .truestory-featured-articles_title-second{
    font-size: 20px;
  }
  .truestory-featured-articles-title-h3-second{
    padding:30px 0 30px 0;
  }
    .truestory-featured-articles_body-second{
    line-height: 23px;
  }

  .about-author-top{

  width:350px;
  }

}
@media only screen and (max-width: 350px){
 .truestory-aa-desc{
  width:290px;
  }
  }
@media only screen and (max-width: 320px){
  .thefooter .instagram-pics li{
    width: 50%;
    margin:auto;
  }
  .footer-info{
    font-size: 14px;
    font-weight: normal;
  }
  .truestory-aa-desc{
  width:320px;
  }
  
  .footer{
  width:320px;
  text-align:center;
  }

}

@media only screen and (max-width:250px){
    .truestory-related-info_title{
        font-size: 19px;
    }
}
@media only screen and (max-width:410px){
    .truestory-related-info_title{
        font-size: 19px;
    }
}

@media only screen and (max-width: 365px){
    
.truestory-sub_container,.truestory_sub_container_single{
    width: 300px;
}
    
        .truestory-bellow-author-area{
    width: 300px;
}
        .posts{
            width:300px;
    
}

.truestory-full-posts{
    widows: 100%;
}
.truestory-full_posts-content blockquote p{
    
    padding:0 8;
    font-size:14px;
}
.truestory-full_posts-content blockquote{
    margin:0;
}
.truestory-full-posts_quote{
    font-size:28px;
}
.truestory-full-posts-quote_soft-bg,.truestory-full-posts_quote{
    padding-left:0px;
    padding-right:0px;
    outline:0px;

}
.truestory-full-posts-quote_soft-bg{

border:5px solid white ;
}
.truestory-long-posts_category{
    line-height:27px;
}
  .truestory-full-posts-quote_soft-bg a,.latest-posts_quote p {

    font-size: 30px;
    line-height: 40px;
    
}
.truestory-full-posts-quote_soft-bg a p,.latest-posts_quote p {

text-align:left;
padding:0 15px;
box-sizing:border-box;
    
}


}
@media only screen and (max-width:1508px) {
    .truestory-menu {
        position: static;
       
    }

    .truestory-menu ul {
        
        display: none;
    }

    .showing {
        max-height: 100%;
    }

    .truestory-menu ul li {
        box-sizing: border-box;
        width: 100%;
    }

    .truestory-menu ul li:hover {
        font-weight: 700;

    }

    .truestory-menu ul li ul {
        position: static;
        margin-top: 20px;
        float: left;
        display: none;
    }

    .truestory-menu ul li ul li {
        margin-top: 5px;
    }

    .handle {
        display: block;
    }

    .handle:hover .menu ul {
        display: block;
    }

    .truestory-about-author-name {
        margin-top: 3%;
    }
}




 <?php  if(get_theme_mod('truestory_disable_sidebar')): ?>
 .posts,.posts-single,.truestory-posts-category{width:100%;}
<?php endif; ?>

    </style>
    
<?php }  add_action('wp_head','truestory_css_customizer' );?>
