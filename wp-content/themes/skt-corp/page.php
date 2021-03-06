<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package SKT Corp
 */

get_header();
 global $post;
    $post_slug=$post->post_title;
$bg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), $size, $icon );
?>
<?php if ( $post_slug=='tourlist'):
//$_SESSION['page_search']='tourlist';
$f1=$_GET['tour'];
$f2=$_GET['theme-category'];
$f3=$_GET['language'];
?>

<div class="header1" style="height: 328px; background: url('<?php echo esc_url(home_url('/'));?>img/bannerpage4.jpg');background-size: cover;">
    <div class="title-top">
        <h2>Experience Tour & Local activity list</h2>
    </div>
</div>
<div class="container">
            <div class="row main-content">
                 <div class="col-md-8 col-xs-12 left-content">
                    <p class="blue-1">Let's find for tours/activities </p>
                    <div class="hr-green-1"></div>
                    <p class="p-tour">Condition search is possible according to purpose</p>
                    <div class="wrapper-step ">

                            <div class="row search-tour">


                                    <?php $terms1 = get_terms([
                                        'taxonomy' => 'hokkaido-okinawa',
                                        'hide_empty' => false,
                                    ]);
                                    $terms2 = get_terms([
                                        'taxonomy' => 'theme-category',
                                        'hide_empty' => false,
                                    ]);
                                    $term3 = get_terms([
                                        'taxonomy' => 'language',
                                        'hide_empty' => false,
                                    ]);
                                     ?>
                                     <form action="" method="get" class="searchandfilter">
                                        <div class="col-xs-12 col-md-3">
                                        <select class="filter-sl" name="tour" style="width: 90%;">
                                        <?php foreach ($terms1 as $key => $term):?>
                                            <option value="<?=$term->slug?>" <?php if($term->slug==$f1) echo 'selected="selected"'; ?>><?=$term->name?></option>
                                        <?php endforeach;?>
                                        <option value="all" <?php if($f1=='all') echo 'selected="selected"'; ?>>All</option>
                                        </select><i class="fa fa-angle-right"></i>
                                        </div>
                                        <div class="col-xs-12 col-md-3">
                                        <select name="theme-category" class="filter-sl" style="width: 90%;">
                                        <option <?php if(!isset($f2) || $f2=='0') echo 'selected="selected"'; ?> value="0">Theme & Category</option>
                                        <?php foreach ($terms2 as $key => $term):?>
                                            <option value="<?=$term->slug?>" <?php if($term->slug==$f2) echo 'selected="selected"'; ?>><?=$term->name?></option>
                                        <?php endforeach;?>
                                        <option value="all" <?php if($f2=='all') echo 'selected="selected"'; ?>>All</option>
                                        </select><i class="fa fa-angle-right"></i></div>
                                        <div class="col-xs-12 col-md-2"><select name="language" class="filter-sl" style="width: 90%;">
                                        <option <?php if(!isset($f3) || $f3=='0') echo 'selected="selected"'; ?> value="0"><i class="fa fa-square" aria-hidden="true"></i>Language</option>
                                        <?php foreach ($term3 as $key => $term):?>
                                            <option value="<?=$term->slug?>" <?php if($term->slug==$f3) echo 'selected="selected"'; ?>><?=$term->name?></option>
                                        <?php endforeach;?>
                                        <option value="all" <?php if($f3=='all') echo 'selected="selected"'; ?>>All</option>
                                        </select></div>
                                        <div class="col-xs-12 col-md-2"><input type="submit" value="Search"></div>
                                    </form>






                            </div>


                        </div>


                    <!--section 1-->
                    <div class="hr-green-2"></div>
                    <div class="row article">
                        <div class="col-xs-12 col-xs-8 article-title"><ol class="breadcrumb">
                           <?php if(isset($f1)): ?>
                          <li><a href="#"><?php if($f1 =='0') echo 'All'; elseif($f1 =='all') echo 'All'; else echo getLabelTour($f1, 'hokkaido-okinawa'); ?></a> <i class="fa fa-angle-double-right" aria-hidden="true"></i></li>
                            <?php endif;?>
                             <?php if(isset($f2)): ?>
                          <li><a href="#"><?php if($f2 =='0') echo 'All';  elseif($f2 =='all') echo 'All'; else echo getLabelTour($f2, 'theme-category');?></a> <i class="fa fa-angle-double-right" aria-hidden="true"></i></li>
                            <?php endif;?>
                                  <?php if(isset($f3)): ?>
                          <li class="active"><?php if($f3 =='0') echo 'All';  elseif($f3 =='all') echo 'All'; else echo getLabelTour($f3, 'language');?></li>
                          <?php endif;?>
                        </ol></div>
                    </div>

                    <div class="article-star">
                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span><span class="glyphicon glyphicon-star" aria-hidden="true"></span><span class="glyphicon glyphicon-star" aria-hidden="true"></span><span class="glyphicon glyphicon-star" aria-hidden="true"></span><span class="glyphicon glyphicon-star" aria-hidden="true"></span><span class="red"> <strong> 5.0 </strong></span><span class="blue"> (Fountain is good value Gunma) </span>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-8 article-desc">
                            Tsukiji market whole tour and holding hands
                        </div>
                        <div class="col-xs-12 col-sm-4 text-right">
                            <!-- <span class="btn-3"> <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> Tsukiji City</span><span class="btn-3"> <span class="glyphicon glyphicon-floppy-save" aria-hidden="true"></span> Tsukiji City</span> -->
                        </div>
                    </div>
                    <div class="margin-top-23">
                        <span class="vr"></span><span> <strong> Full visit to the Tsukiji market </strong></span> &nbsp;&nbsp;&nbsp;&nbsp;
                        <span class="font-size-12">Tsukiji market whole tour and handful sushi experience tour Full visit to Tsukiji market and sushi experience tour</span>
                    </div>
                    <div class="hr-gray"></div>

                    <?=SearchTour()?>

                    <p class="blue text-underline"> <span class="glyphicon glyphicon-play red-color" aria-hidden="true"></span> <strong> Full visit to the Tsukiji market (5) </strong></p>


                    <!--section 2-->
                    <div class="hr-green-2"></div>
                    <div class="row article">
                        <div class="col-xs-12 col-xs-8 article-title">
                            <strong> Tsukiji market whole tour and holding hands </strong>
                        </div>
                        <div class="col-xs-12 col-sm-4 text-right">
                            <span class="btn-1"> Tsukiji Market</span><span class="btn-2"> Visit and hold</span>
                        </div>
                    </div>
                    <div class="article-star">
                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span><span class="glyphicon glyphicon-star" aria-hidden="true"></span><span class="glyphicon glyphicon-star" aria-hidden="true"></span><span class="glyphicon glyphicon-star" aria-hidden="true"></span><span class="glyphicon glyphicon-star" aria-hidden="true"></span><span class="red"> <strong> 5.0 </strong></span><span class="blue"> (Fountain is good value Gunma) </span>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-8 article-desc">
                           Tsukiji market whole tour and holding hands
                        </div>
                        <div class="col-xs-12 col-sm-4 text-right">
                            <span class="btn-3"> <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> Tsukiji City</span><span class="btn-3"> <span class="glyphicon glyphicon-floppy-save" aria-hidden="true"></span> Tsukiji City</span>
                        </div>
                    </div>
                    <div class="margin-top-23">
                        <span class="vr"></span><span> <strong> Full visit to the Tsukiji market </strong></span> &nbsp;&nbsp;&nbsp;&nbsp;
                        <span class="font-size-12">Tsukiji market whole tour and handful sushi experience tour Full visit to Tsukiji market and sushi experience tour</span>
                    </div>
                    <div class="hr-gray"></div>
                     <?php $args = array(
                        'category_name' => 'tourlist',
                        'orderby'=>'date',
                        'order'=>'DESC',
                        'posts_per_page' => 4,
                      );
                      $wp_query = new WP_Query();
                      $wp_query->query( $args );?>
                     <?php while ($wp_query->have_posts()) : $wp_query->the_post()?>
                         <div class="row">
                            <div class="col-xs-12 col-sm-4 col-md-3">
                                <?php echo get_the_post_thumbnail($post->ID, 'thumbnail' );?>
                            </div>
                            <div class="col-xs-12 col-sm-8 col-md-9">
                                <p class="blue text-underline"> <?php the_title(); ?></p>
                                <p class="gray"> <?php the_content(); ?></p>
                                <div class="row">
                                    <div class="col-xs-6 red">
                                        <strong><i class="fa fa-usd" aria-hidden="true"></i>  <?php echo get_post_meta(get_the_ID(), 'price', TRUE); ?></strong>
                                    </div>
                                    <div class="col-xs-6 text-right">
                                         <a href="<?php echo get_permalink( get_the_ID() ); ?>"><button class="btn my-btn"> <span class="glyphicon glyphicon-search" aria-hidden="true"></span> Tour Details </button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hr-gray"></div>
                    <?php endwhile; ?>

                    <p class="blue text-underline"> <span class="glyphicon glyphicon-play red-color" aria-hidden="true"></span> <strong> Full visit to the Tsukiji market (5) </strong></p>

                </div>

     <?php get_sidebar();?>
<?php else:?>



 <?php
          if(isset($_post['to_step_2']) and $_post['to_step_2']=='yes'){
       ?>
   <div class="container" style="max-width:769px;">
<script type="text/javascript">
// <![CDATA[
    var config = {error_pos: true};
    livevalidation.register([
        {id: 't3di', name: 'お名前', required: true, min: 0, max: 300},
        {id: 't4kl', name: 'ニックネーム', required: true, min: 0, max: 300},
        {id: 't2wv', name: '名前（ローマ字）', required: false, min: 0, max: 300},
        {id: 't3gq', name: '左番号', required: true, min: 3, max: 3, regexp: 'number'},
        {id: 't0sz', name: '右番号', required: true, min: 4, max: 4, regexp: 'number'},
        {id: 's5bo', name: '都道府県', required: true},
        {id: 't4ii', name: '市区町村', required: true, min: 0, max: 300},
        {id: 't0pi', name: '番地建物', required: false, min: 0, max: 300},
        {id: 's6ib', name: '年号', required: true},
        {id: 't2ne', name: '年', required: true, min: 0, max: 4, regexp: 'integer'},
        {id: 't9ip', name: '月', required: true, min: 0, max: 2, regexp: 'integer'},
        {id: 't3xl', name: '日', required: true, min: 0, max: 2, regexp: 'integer'},
        {id: 't0fl', name: '携帯番号', required: true, min: 0, max: 300, regexp: 'mbphone_d'},
        {id: 't7pj', name: '対応言語', required: true, min: 0, max: 300},
        {id: 't1og', name: 'プロフィール', required: true, min: 0, max: 3000},
        {id: 't3mp', name: 'プロフィール', required: true, min: 0, max: 3000},
        {id: 't9hg', name: 'メールアドレス', required: true, min: 0, max: 300, regexp: 'mailaddress'},
        {id: 't4jy', name: '基本ガイド稼働時間', required: true, min: 0, max: 300},
        {id: 't9ag', name: '最低ガイド時間', required: true, min: 0, max: 300},
        {id: 't8nd', name: '最低ガイド時間の時給', required: true, min: 0, max: 300},
        {id: 'c9oq', name: '朝早／夜遅稼働の可否', required: true, checks_min: 1, checks_max: 2},
        {id: 't9su', name: '朝早／夜遅の際の時給', required: false, min: 0, max: 300},
        {id: 's4lu', name: '案内可能エリア', required: true},
        {id: 's4nx', name: '都道府県', required: false},
        {id: 's9pl', name: '都道府県', required: false},
        {id: 's6rf', name: '都道府県', required: false},
        {id: 's9oi', name: '都道府県', required: false},
        {id: 'c9lr', name: '案内時の移動手段', required: true, checks_min: 1, checks_max: 6},
        {id: 't4qr', name: '現在の職業', required: false, min: 0, max: 300},
        {id: 'f6et', name: 'お勧めスポット①', required: true},
        {id: 't8kg', name: 'お勧めスポット名①', required: true, min: 0, max: 300},
        {id: 'f6rs', name: 'お勧めスポット②', required: true},
        {id: 't5ue', name: 'お勧めスポット名②', required: true, min: 0, max: 300},
        {id: 'f6hl', name: 'お勧めスポット③', required: true},
        {id: 't5wp', name: 'お勧めスポット名③', required: true, min: 0, max: 300},
        {id: 'f5ue', name: 'お勧めグルメ', required: true},
        {id: 't4gt', name: 'お勧めグルメ名①', required: true, min: 0, max: 300},
        {id: 'f5vi', name: 'お勧めグルメ②', required: true},
        {id: 't0zf', name: 'お勧めグルメ名②', required: true, min: 0, max: 300},
        {id: 'f9gp', name: 'お勧めグルメ③', required: true},
        {id: 't8ia', name: 'お勧めグルメ名③', required: true, min: 0, max: 300}
    ], config);
// ]]>
</script>

       <div id="mainform">
           <h2><a href="http://serve-inc.kir.jp/">ホストになる（通訳ガイド）エントリーフォーム</a></h2>
           <p class="step"><span>1. フォームの入力</span> → <em>2. 入力内容の確認</em> → <span>3. 送信完了</span></p>
           <form action="http://serve-inc.kir.jp/esform/guide_entry.php" method="post">
               <fieldset>
                   <legend>ホストになる（通訳ガイド）エントリーフォーム</legend>
                   <input type="hidden" name="t3di" value="fasdf"><input type="hidden" name="t4kl" value="ニックネーム"><input
                       type="hidden" name="t2wv" value="đasd"><input type="hidden" name="t3gq" value="312"><input
                       type="hidden" name="t0sz" value="1323"><input type="hidden" name="s5bo" value="埼玉県"><input
                       type="hidden" name="t4ii" value="312323"><input type="hidden" name="t0pi" value="31231232"><input
                       type="hidden" name="s6ib" value="西暦"><input type="hidden" name="t2ne" value="1988"><input
                       type="hidden" name="t9ip" value="2"><input type="hidden" name="t3xl" value="2"><input
                       type="hidden" name="t0fl" value="09011112222"><input type="hidden" name="t7pj"
                                                                            value="sdfasdf"><input type="hidden"
                                                                                                   name="t1og"
                                                                                                   value="ádfasdf"><input
                       type="hidden" name="t3mp" value="fasdfasdf"><input type="hidden" name="t9hg"
                                                                          value="info@example.com"><input type="hidden"
                                                                                                          name="t4jy"
                                                                                                          value="fasdf"><input
                       type="hidden" name="t9ag" value="fasdfsd"><input type="hidden" name="t8nd" value="fasdfdf"><input
                       type="hidden" name="c9oq[]" value="朝早　NG"><input type="hidden" name="c9oq[]" value="夜遅　NG"><input
                       type="hidden" name="t9su" value="fasdfasdf"><input type="hidden" name="s4lu" value="東京都"><input
                       type="hidden" name="s4nx" value="栃木県"><input type="hidden" name="s9pl" value="宮城県"><input
                       type="hidden" name="s6rf" value="北海道"><input type="hidden" name="s9oi" value="北海道"><input
                       type="hidden" name="c9lr[]" value="車（レンタカー）"><input type="hidden" name="t4qr"
                                                                           value="fasdfdf"><input type="hidden"
                                                                                                  name="f6et"
                                                                                                  value="Courses.txt"><input
                       type="hidden" name="f6et_file" value="123.16.42.87_1481718810.txt"><input type="hidden"
                                                                                                 name="f6et_type"
                                                                                                 value="text/plain"><input
                       type="hidden" name="t8kg" value="fasdf"><input type="hidden" name="f6rs"
                                                                      value="Courses.txt"><input type="hidden"
                                                                                                 name="f6rs_file"
                                                                                                 value="123.16.42.87_1481718810.txt"><input
                       type="hidden" name="f6rs_type" value="text/plain"><input type="hidden" name="t5ue"
                                                                                value="fasdfdf"><input type="hidden"
                                                                                                       name="f6hl"
                                                                                                       value="Courses.txt"><input
                       type="hidden" name="f6hl_file" value="123.16.42.87_1481718810.txt"><input type="hidden"
                                                                                                 name="f6hl_type"
                                                                                                 value="text/plain"><input
                       type="hidden" name="t5wp" value="fasdfdf"><input type="hidden" name="f5ue"
                                                                        value="Courses.txt"><input type="hidden"
                                                                                                   name="f5ue_file"
                                                                                                   value="123.16.42.87_1481718810.txt"><input
                       type="hidden" name="f5ue_type" value="text/plain"><input type="hidden" name="t4gt"
                                                                                value="fasdfdf"><input type="hidden"
                                                                                                       name="f5vi"
                                                                                                       value="Courses.txt"><input
                       type="hidden" name="f5vi_file" value="123.16.42.87_1481718810.txt"><input type="hidden"
                                                                                                 name="f5vi_type"
                                                                                                 value="text/plain"><input
                       type="hidden" name="t0zf" value="fasfdf"><input type="hidden" name="f9gp"
                                                                       value="Courses.txt"><input type="hidden"
                                                                                                  name="f9gp_file"
                                                                                                  value="123.16.42.87_1481718810.txt"><input
                       type="hidden" name="f9gp_type" value="text/plain"><input type="hidden" name="t8ia"
                                                                                value="fasdfdf"><input type="hidden"
                                                                                                       name="confirm"
                                                                                                       value="done"><input
                       type="hidden" name="id" value="2">
                   <table summary="確認内容">
                       <tbody>
                       <tr>
                           <th>お名前<em class="required">※</em></th>
                           <td>
                               fasdf
                           </td>
                       </tr>
                       <tr>
                           <th>ニックネーム<em class="required">※</em></th>
                           <td>
                               ニックネーム
                           </td>
                       </tr>
                       <tr>
                           <th>名前（ローマ字）</th>
                           <td>
                               đasd
                           </td>
                       </tr>
                       <tr>
                           <th>住所<em class="required">※</em></th>
                           <td>
                               312-1323<br>
                               埼玉県<br>
                               312323<br>
                               31231232
                           </td>
                       </tr>
                       <tr>
                           <th>生年月日<em class="required">※</em></th>
                           <td>
                               西暦1988年2月2日
                           </td>
                       </tr>
                       <tr>
                           <th>携帯番号<em class="required">※</em></th>
                           <td>
                               09011112222
                           </td>
                       </tr>
                       <tr>
                           <th>対応言語<em class="required">※</em></th>
                           <td>
                               sdfasdf
                           </td>
                       </tr>
                       <tr>
                           <th>プロフィール<em class="required">※</em></th>
                           <td>
                               ádfasdf<br>
                               fasdfasdf
                           </td>
                       </tr>
                       <tr>
                           <th>メールアドレス<em class="required">※</em></th>
                           <td>
                               info@example.com
                           </td>
                       </tr>
                       <tr>
                           <th>基本ガイド稼働時間<em class="required">※</em></th>
                           <td>
                               fasdf
                           </td>
                       </tr>
                       <tr>
                           <th>最低ガイド時間<em class="required">※</em></th>
                           <td>
                               fasdfsd
                           </td>
                       </tr>
                       <tr>
                           <th>最低ガイド時間の時給<em class="required">※</em></th>
                           <td>
                               fasdfdf
                           </td>
                       </tr>
                       <tr>
                           <th>朝早／夜遅稼働の可否<em class="required">※</em></th>
                           <td>
                               朝早　NG, 夜遅　NG
                           </td>
                       </tr>
                       <tr>
                           <th>朝早／夜遅の際の時給</th>
                           <td>
                               fasdfasdf
                           </td>
                       </tr>
                       <tr>
                           <th>案内可能エリア<em class="required">※</em></th>
                           <td>
                               東京都<br>
                               栃木県<br>
                               宮城県<br>
                               北海道<br>
                               北海道
                           </td>
                       </tr>
                       <tr>
                           <th>案内時の移動手段<em class="required">※</em></th>
                           <td>
                               車（レンタカー）
                           </td>
                       </tr>
                       <tr>
                           <th>現在の職業</th>
                           <td>
                               fasdfdf
                           </td>
                       </tr>
                       <tr>
                           <th>お勧めスポット①<em class="required">※</em></th>
                           <td>
                               Courses.txt<br>
                               fasdf<br>
                               Courses.txt<br>
                               fasdfdf<br>
                               Courses.txt<br>
                               fasdfdf
                           </td>
                       </tr>
                       <tr>
                           <th>お勧めグルメ<em class="required">※</em></th>
                           <td>
                               Courses.txt<br>
                               fasdfdf<br>
                               Courses.txt<br>
                               fasfdf<br>
                               Courses.txt<br>
                               fasdfdf
                           </td>
                       </tr>
                       </tbody>
                   </table>
                   <p>
                       <input type="reset" value="やり直す" onclick="history.back();return false;">
                       <input type="submit" value="内容を送信する">
                   </p>
               </fieldset>
           </form>
       </div>


       <div id="copyright">
           <address><a href="http://www.mt312.com/">ES-FORM</a></address>
       </div>
   </div>
          <?php } else {
              ?>
        <div class="header1" style="height:328px;background:url(<?php if($bg){ echo $bg[0];}else{ echo esc_url(home_url('/')).'/img/bg-2.jpg';}?>);background-size: cover;">
	<div class="title-top">
    <h2><?php if( $post_slug=='question'):?>Q & A<?php else: ?> <?php echo $post_slug;?> <?php endif;?>
</h2>
  </div>
</div>
              <div style="width:100%;background: url(../bg-container.jpg);">
<div class='container' style="">
<div class='row'>
<div class="col-md-7 col-xs-12 left-content">
              <p></p>
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php get_template_part( 'content', 'page' ); ?>
                    <?php
                    $bodybgurl = esc_url( get_post_meta( get_the_ID(), 'bodybgurl', true ) );
                    if( $bodybgurl != '' ){ ?>
                        <style type="text/css">body{background:url(<?php echo $bodybgurl; ?>) no-repeat center top; background-attachment:fixed; background-size:cover;}</style>
                    <?php } ?>
                <?php endwhile; // end of the loop. ?>
            <!-- blog-post -->

        <?php }?>
        </div>
        <?php get_sidebar();?>
        </div>
        </div>
        </div>

<?php endif;?>

<?php get_footer(); ?>

