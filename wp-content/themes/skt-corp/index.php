<?php
/**
 * The template for displaying home page.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package SKT Corp
 */

get_header(); 

?>
 <?php 
          if(isset($_post['to_step_2']) and $_post['to_step_2']=='yes'){
			  exit;
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
            <input type="hidden" name="t3di" value="fasdf"><input type="hidden" name="t4kl" value="ニックネーム"><input type="hidden" name="t2wv" value="đasd"><input type="hidden" name="t3gq" value="312"><input type="hidden" name="t0sz" value="1323"><input type="hidden" name="s5bo" value="埼玉県"><input type="hidden" name="t4ii" value="312323"><input type="hidden" name="t0pi" value="31231232"><input type="hidden" name="s6ib" value="西暦"><input type="hidden" name="t2ne" value="1988"><input type="hidden" name="t9ip" value="2"><input type="hidden" name="t3xl" value="2"><input type="hidden" name="t0fl" value="09011112222"><input type="hidden" name="t7pj" value="sdfasdf"><input type="hidden" name="t1og" value="ádfasdf"><input type="hidden" name="t3mp" value="fasdfasdf"><input type="hidden" name="t9hg" value="info@example.com"><input type="hidden" name="t4jy" value="fasdf"><input type="hidden" name="t9ag" value="fasdfsd"><input type="hidden" name="t8nd" value="fasdfdf"><input type="hidden" name="c9oq[]" value="朝早　NG"><input type="hidden" name="c9oq[]" value="夜遅　NG"><input type="hidden" name="t9su" value="fasdfasdf"><input type="hidden" name="s4lu" value="東京都"><input type="hidden" name="s4nx" value="栃木県"><input type="hidden" name="s9pl" value="宮城県"><input type="hidden" name="s6rf" value="北海道"><input type="hidden" name="s9oi" value="北海道"><input type="hidden" name="c9lr[]" value="車（レンタカー）"><input type="hidden" name="t4qr" value="fasdfdf"><input type="hidden" name="f6et" value="Courses.txt"><input type="hidden" name="f6et_file" value="123.16.42.87_1481718810.txt"><input type="hidden" name="f6et_type" value="text/plain"><input type="hidden" name="t8kg" value="fasdf"><input type="hidden" name="f6rs" value="Courses.txt"><input type="hidden" name="f6rs_file" value="123.16.42.87_1481718810.txt"><input type="hidden" name="f6rs_type" value="text/plain"><input type="hidden" name="t5ue" value="fasdfdf"><input type="hidden" name="f6hl" value="Courses.txt"><input type="hidden" name="f6hl_file" value="123.16.42.87_1481718810.txt"><input type="hidden" name="f6hl_type" value="text/plain"><input type="hidden" name="t5wp" value="fasdfdf"><input type="hidden" name="f5ue" value="Courses.txt"><input type="hidden" name="f5ue_file" value="123.16.42.87_1481718810.txt"><input type="hidden" name="f5ue_type" value="text/plain"><input type="hidden" name="t4gt" value="fasdfdf"><input type="hidden" name="f5vi" value="Courses.txt"><input type="hidden" name="f5vi_file" value="123.16.42.87_1481718810.txt"><input type="hidden" name="f5vi_type" value="text/plain"><input type="hidden" name="t0zf" value="fasfdf"><input type="hidden" name="f9gp" value="Courses.txt"><input type="hidden" name="f9gp_file" value="123.16.42.87_1481718810.txt"><input type="hidden" name="f9gp_type" value="text/plain"><input type="hidden" name="t8ia" value="fasdfdf"><input type="hidden" name="confirm" value="done"><input type="hidden" name="id" value="2">
            <table summary="確認内容">
                <tbody><tr>
                    <th>お名前<em class="required">※</em></th>
                    <td>
                        fasdf                   </td>
                </tr>
                <tr>
                    <th>ニックネーム<em class="required">※</em></th>
                    <td>
                        ニックネーム                  </td>
                </tr>
                <tr>
                    <th>名前（ローマ字）</th>
                    <td>
                        đasd                    </td>
                </tr>
                <tr>
                    <th>住所<em class="required">※</em></th>
                    <td>
                        312-1323<br>
                        埼玉県<br>
                        312323<br>
                        31231232                    </td>
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
                        09011112222                 </td>
                </tr>
                <tr>
                    <th>対応言語<em class="required">※</em></th>
                    <td>
                        sdfasdf                 </td>
                </tr>
                <tr>
                    <th>プロフィール<em class="required">※</em></th>
                    <td>
                        ádfasdf<br>
                        fasdfasdf                   </td>
                </tr>
                <tr>
                    <th>メールアドレス<em class="required">※</em></th>
                    <td>
                        info@example.com                    </td>
                </tr>
                <tr>
                    <th>基本ガイド稼働時間<em class="required">※</em></th>
                    <td>
                        fasdf                   </td>
                </tr>
                <tr>
                    <th>最低ガイド時間<em class="required">※</em></th>
                    <td>
                        fasdfsd                 </td>
                </tr>
                <tr>
                    <th>最低ガイド時間の時給<em class="required">※</em></th>
                    <td>
                        fasdfdf                 </td>
                </tr>
                <tr>
                    <th>朝早／夜遅稼働の可否<em class="required">※</em></th>
                    <td>
                        朝早　NG, 夜遅　NG                    </td>
                </tr>
                <tr>
                    <th>朝早／夜遅の際の時給</th>
                    <td>
                        fasdfasdf                   </td>
                </tr>
                <tr>
                    <th>案内可能エリア<em class="required">※</em></th>
                    <td>
                        東京都<br>
                        栃木県<br>
                        宮城県<br>
                        北海道<br>
                        北海道                 </td>
                </tr>
                <tr>
                    <th>案内時の移動手段<em class="required">※</em></th>
                    <td>
                        車（レンタカー）                    </td>
                </tr>
                <tr>
                    <th>現在の職業</th>
                    <td>
                        fasdfdf                 </td>
                </tr>
                <tr>
                    <th>お勧めスポット①<em class="required">※</em></th>
                    <td>
                        Courses.txt<br>
                        fasdf<br>
                        Courses.txt<br>
                        fasdfdf<br>
                        Courses.txt<br>
                        fasdfdf                 </td>
                </tr>
                <tr>
                    <th>お勧めグルメ<em class="required">※</em></th>
                    <td>
                        Courses.txt<br>
                        fasdfdf<br>
                        Courses.txt<br>
                        fasfdf<br>
                        Courses.txt<br>
                        fasdfdf                 </td>
                </tr>
            </tbody></table>
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
       <?php } else { ?>
<?php if ( 'page' == get_option( 'show_on_front' ) && ( '' != get_option( 'page_for_posts' ) ) && $wp_query->get_queried_object_id() == get_option( 'page_for_posts' ) ) : ?>

    <div class="content-area">
        <div class="container">
            <section class="site-main" id="sitemain">
                <div class="blog-post">
					<?php
                    if ( have_posts() ) :
                        // Start the Loop.
                        while ( have_posts() ) : the_post();
                            /*
                             * Include the post format-specific template for the content. If you want to
                             * use this in a child theme, then include a file called called content-___.php
                             * (where ___ is the post format) and that will be used instead.
                             */
                            get_template_part( 'content', get_post_format() );
                    
                        endwhile;
                        // Previous/next post navigation.
                        skt_corp_pagination();
                    
                    else :
                        // If no content, include the "No posts found" template.
                         get_template_part( 'no-results', 'index' );
                    
                    endif;
                    ?>
                </div><!-- blog-post -->
            </section>
            <?php get_sidebar();?>
            <div class="clear"></div>
        </div>
    </div>

<?php else: ?>

<section id="aboutUs">
<div class="container">
<div class="row">

<!-- Start about us area -->
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 tab_left">
<div class="aboutus_area wow fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;">
<h2 class="titile">JAPAN TRAVEL GUIDE.navi！？</h2>
<p class="bg_red">Japan Travel Guide.navi is a matching portal site for interpreting guides (hosts) that will guide you to Japan, visiting foreigners (guests) and your "home town" or "town".
<b>"Take it to a delicious ramen restaurant known only to locals!"
"Because the schedule of the day is empty, I want you to guide me around the city!"
"I want to go to the countryside and experience and interact with people."
"Please introduce the spot in Japan that is not on the guide book!" </b>
It is a site for everyone who is such a foreigner. The host will help you travel in Japan with a sense of friends.Also, we will tie up with travel agencies and local governments to introduce experiential tours and activities as well as "Japan is the only thing you can only experience in Japan".
In addition, we have also introduced guest houses (guest houses) to foreigners who said "I do not have a lodging place!" Though I came to Japan with great pains. Currently, lodging in Japan is short. In particular, lack of accommodation in the metropolitan area such as "Tokyo, Osaka, Nagoya" is serious. Japan Travel Guide.navi also provides information on lodging alternatives to hotels and inns.
Please come and enjoy the charming Japanese trip! It is!</p>

</div>
</div>
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 tab_right">
<div class="newsfeed_area wow fadeInRight animated" style="visibility: visible; animation-name: fadeInRight;">
<ul id="myTab2" class="nav nav-tabs feed_tabs">
    <li class="active"><a href="#notice" data-toggle="tab">Blog</a></li>
    <li class=""><a href="#news" data-toggle="tab">News</a></li>
    <li class=""><a href="#events" data-toggle="tab">Events</a></li>
</ul>
<div class="tab-content bg_red_tab">

<!-- Start notice tab content -->
<div id="notice" class="tab-pane fade active in">
    <ul class="news_tab">
        <?php
            $arg = array(
                'post_type' => 'post',
                'category_name' => 'blogtab',
                'post_per_page' => 3,
                'order' => 'ASC',
                'post_status' => 'publish',
            );

            $list_blog = new WP_Query($arg);
            while ( $list_blog->have_posts() ) : $list_blog->the_post();
        ?>
        <li>
            <div class="media">
            <div class="media-left"><a class="news_img" href="<?php the_permalink();?>"><?php the_post_thumbnail( 'thumbnail', array( 'class' => 'media-object' ) );?></a></div>
            <div class="media-body">

            <a tabindex="0" href="blog-archive2.html"><b><?php the_title(); ?></b></a>
            <p class="food_des"><?php the_excerpt();?></p>

            </div>
            </div>
        </li>

        <?php
            endwhile; // end of the loop.
            wp_reset_postdata();
        ?>
    </ul>
</div>
<!-- Start news tab content -->
<div id="news" class="tab-pane fade">
    <ul class="news_tab">
        <?php
            $arg1 = array(
                'post_type' => 'post',
                'category_name' => 'newstab',
                'post_per_page' => 3,
                'order' => 'ASC',
                'post_status' => 'publish',
            );

            $list_news = new WP_Query($arg1);
            while ( $list_news->have_posts() ) : $list_news->the_post();
        ?>
        <li>
            <div class="media">
                <div class="media-left"><a class="news_img" href="<?php the_permalink();?>"><?php the_post_thumbnail( 'thumbnail', array( 'class' => 'media-object' ) );?></a></div>
                <div class="media-body">
                    <a tabindex="0" href="blog-archive2.html"><b><?php the_title(); ?></b></a>
                    <p class="food_des"><?php the_excerpt();?></p> <!-- <span class="feed_date">27.02.15</span> -->
                </div>
            </div>
        </li>

        <?php
            endwhile; // end of the loop.
            wp_reset_postdata();
        ?>
    </ul>
    <a class="see_all" href="tourlist">ツアーリスト</a>

</div>
    <!-- Start events tab content -->
<div id="events" class="tab-pane fade">
    <ul class="events_tab">
        <?php
            $arg2 = array(
                'post_type' => 'post',
                'category_name' => 'eventstab',
                'post_per_page' => 3,
                'order' => 'ASC',
                'post_status' => 'publish',
            );

            $list_events = new WP_Query($arg2);
            while ( $list_events->have_posts() ) : $list_events->the_post();
        ?>
        <li>
            <div class="media">
            <div class="media-left"><a class="news_img" href="<?php the_permalink();?>"><?php the_post_thumbnail( 'thumbnail', array( 'class' => 'media-object' ) );?></a></div>
            <div class="media-body">
                <a tabindex="0" href="blog-archive2.html"><b><?php the_title(); ?></b></a>
                <p class="food_des"><?php the_excerpt();?></p> <!-- <span class="feed_date">27.02.15</span> --></div>
            </div>
        </li>

        <?php
            endwhile; // end of the loop.
            wp_reset_postdata();
        ?>
    </ul>
<a class="see_all" href="#">See All</a>

</div>

</div>
</div>
</div>
</div>
</div>
</section>
<div class="container-fluid">
<div class="container">
<div class="row our-service">
<p class="service">Service<br /><span class="lines"></span></p>

</div>
<div class="row margin-top-45">
<div class="col-xs-12 col-sm-6 col-md-3 service-wrap">
<div class="text-center"><img src="service-1.png" /></div>
<p class="service-title">Interpretation guide</p>
<p class="service-detail">Japan Travel Guide. A guide (host) that can interpret from all over Japan is registered in navi. Like a friend, I will show you the city and the countryside where I live easily. Although the guide (host) is not a professional, feeling with friends, feel free! Happily! I will show you the foreigners who are visiting Japan. Please look for a nice host and enjoy the journey of Japan full of charm.</p>

</div>
<div class="col-xs-12 col-sm-6 col-md-3 service-wrap">
<div class="text-center"><img src="service-2.png" /></div>
<p class="service-title">Local tour information</p>
<p class="service-detail">T Japan Travel Guide.navi delivers experiential tours unique to Japan that never can be experienced in sightseeing tours and packaged tours, and spot information not on the guidebook. In addition, it is also possible to announce fully custom made to meet your request.</p>

</div>
<div class="col-xs-12 col-sm-6 col-md-3 service-wrap">
<div class="text-center"><img src="service-3.png" /></div>
<p class="service-title">Accommodation information</p>
<p class="service-detail">In addition to staying accommodation where you can experience homestay in the guide (host) home and villa and Japanese country life life, vacancy like air bnb (Air B & B), vacant house information is also available, Tokyo and Osaka When staying in the metropolitan area, the hotel and the inn is already full and I can not find the accommodation destination! Take a peek at the Japan Travel Guide .navi.</p>

</div>
<div class="col-xs-12 col-sm-6 col-md-3 service-wrap">
<div class="text-center"><img src="service-4.png" /></div>
<p class="service-title">Gourmet information</p>
<p class="service-detail">"Japanese food = Japanese food" chosen as the intangible cultural heritage of UNESCO is not just sushi, tempura, ramen. There is plenty of gourmet in Japan food guide, still more "cheap! Delicious! Japan Travel Guide.navi has partnered with a gourmet site" Taberkot "for foreigners visiting Japan, cheap in Japan! delicious! Japanese food information is provided.</p>

</div>
</div>
</div>
 <div class="row progress">
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="c100 p30 circle-progress">
                    <span>○○Peaple</span>
                    <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                    </div>
                </div>
                <p class="progress-name"> Guide (host) registration number </p>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="c100 p40 circle-progress">
                    <span>○○number</span>
                    <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                    </div>
                </div>
                <p class="progress-name"> Number of tour information  </p>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="c100 p50 circle-progress">
                    <span>○○number</span>
                    <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                    </div>
                </div>
                <p class="progress-name">Number of accommodation information</p>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="c100 p60 circle-progress">
                    <span>○○number</span>
                    <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                    </div>
                </div>
                <p class="progress-name"> Number of gourmet information </p>
            </div>
        </div>

<div class="host row">
<div class="our-service">
<p class="service">New Introduction of members (host)<span class="lines"></span></p>

</div>
<div class="container list-host">
<div id="carousel-example-generic1" class="carousel slide" data-ride="carousel">
<div class="carousel-inner">
<div class="item active">
<div class="row">
<div class="col-xs-12 col-sm-6 col-md-3">
<div class="host-avatar"><a href="hostlist"><img class="host-img" src="host-1.jpg" /></a>
<strong> Kyoto, Yokohama, Kobe </strong></div>
<p class="host-name">Yamaguchi urine</p>
<p class="host-name">Nyohei Yamaguchi</p>
<p class="host-salary">$ 2,000/Per One Hour</p>
<div class="host-desc">

Area : Tokyo・Yokohama

Laungage：Japanease ・English・Chinease

Transportation：Walk・Train・Bus・Car

Early morning OK &  Late night   OK

</div>

</div>
<div class="col-xs-12 col-sm-6 col-md-3">
<div class="host-avatar"><a href="hostlist"><img class="host-img" src="host-2.jpg" /></a>
<strong>Kyoto, Yokohama, Kobe </strong></div>
<p class="host-name">Yamaguchi urine</p>
<p class="host-name">Shunichirou Shimada</p>
<p class="host-salary">$ 3,000/Per One Hour</p>
<div class="host-desc">

Area : Tokyo・Yokohama

Laungage：Japanease ・English・Chinease

Transportation：Walk・Train・Bus・Car

Early morning OK &  Late night   OK

</div>

</div>
<div class="col-xs-12 col-sm-6 col-md-3">
<div class="host-avatar"><a href="hostlist"><img class="host-img" src="host-3.jpg" /></a>
<strong>Kyoto, Yokohama, Kobe </strong></div>
<p class="host-name">Yamaguchi urine</p>
<p class="host-name">Nyohei Yamaguchi</p>
<p class="host-salary">$ 4,000/Per One Hour</p>
<div class="host-desc">

Area : Tokyo・Yokohama

Laungage：Japanease ・English・Chinease

Transportation：Walk・Train・Bus・Car

Early morning OK &  Late night   OK

</div>

</div>
<div class="col-xs-12 col-sm-6 col-md-3">
<div class="host-avatar"><a href="hostlist"><img class="host-img" src="host-4.jpg" /></a>
<strong> Kyoto, Yokohama, Kobe </strong></div>
<p class="host-name">Yamaguchi urine</p>
<p class="host-name">Nyohei Yamaguchi</p>
<p class="host-salary">$4,000/Per One Hour</p>
<div class="host-desc">

Area : Tokyo・Yokohama

Laungage：Japanease ・English・Chinease

Transportation：Walk・Train・Bus・Car

Early morning OK &  Late night   OK
</div>

</div>
</div>
</div>
<div class="item">
<div class="row">
<div class="col-xs-12 col-sm-6 col-md-3">
<div class="host-avatar"><a href="hostlist"><img class="host-img" src="host-1.jpg" /></a>
<strong> Kyoto, Yokohama, Kobe </strong></div>
<p class="host-name">Yamaguchi urine</p>
<p class="host-name">Nyohei Yamaguchi</p>
<p class="host-salary">2,000 ¥ Per One Hour</p>
<div class="host-desc">

Area : Tokyo・Yokohama

Laungage：Japanease ・English・Chinease

Transportation：Walk・Train・Bus・Car

Early morning OK &  Late night   OK

</div>

</div>
<div class="col-xs-12 col-sm-6 col-md-3">
<div class="host-avatar"><a href="hostlist"><img class="host-img" src="host-2.jpg" /></a>
<strong>Kyoto, Yokohama, Kobe </strong></div>
<p class="host-name">Yamaguchi urine</p>
<p class="host-name">Shunichirou Shimada</p>
<p class="host-salary">3,000 ¥ Per One Hour</p>
<div class="host-desc">

Area : Tokyo・Yokohama

Laungage：Japanease ・English・Chinease

Transportation：Walk・Train・Bus・Car

Early morning OK &  Late night   OK

</div>

</div>
<div class="col-xs-12 col-sm-6 col-md-3">
<div class="host-avatar"><a href="hostlist"><img class="host-img" src="host-3.jpg" /></a>
<strong> Kyoto, Yokohama, Kobe </strong></div>
<p class="host-name">Yamaguchi urine</p>
<p class="host-name">Nyohei Yamaguchi</p>
<p class="host-salary">4,000 ¥ Per One Hour</p>
<div class="host-desc">

Area : Tokyo・Yokohama

Laungage：Japanease ・English・Chinease

Transportation：Walk・Train・Bus・Car

Early morning OK &  Late night   OK

</div>

</div>
<div class="col-xs-12 col-sm-6 col-md-3">
<div class="host-avatar"><a href="hostlist"><img class="host-img" src="host-4.jpg" /></a>
<strong>Kyoto, Yokohama, Kobe </strong></div>
<p class="host-name">Yamaguchi urine</p>
<p class="host-name">Nyohei Yamaguchi</p>
<p class="host-salary">4,000 ¥ Per One Hour</p>
<div class="host-desc">

Area : Tokyo・Yokohama

Laungage：Japanease ・English・Chinease

Transportation：Walk・Train・Bus・Car

Early morning OK &  Late night   OK

</div>

</div>
</div>
</div>
</div>
</div>
<a class="left carousel-control" href="#carousel-example-generic1" data-slide="prev"><span class="sr-only">Previous</span><img class="left-arr hidden-xs hidden-sm" src="left-arr.png" /> </a>
<a class="right carousel-control" href="#carousel-example-generic1" data-slide="next"> <span class="sr-only">Next</span> <img class="right-arr hidden-xs hidden-sm" src="right-arr.png" /></a>

</div>
</div>



<div class="row testimonial">
<div class="our-service margin-top-25">
<p class="service">testimonial <span class="lines"></span></p>

</div>
<div class="container">
<div class="row">
<div class="col-xs-12 col-md-6">
<div class="row">
<div class="col-xs-3"><img class="img-responsive" src="testimonial-1.png" /></div>
<div class="col-xs-9">
<p class="testimonial-name">ohnathan Doe</p>
<p class="testimonial-job">Australia</p>

<div class="hr"></div>
<div class="row">
<div class="col-xs-2"><img class="img-responsive" src="quote.png" /></div>
<div class="col-xs-10 testimonial-content">

I will go to Kyoto from April 5th to 8th. I'm looking for someone who will pick you up at Kyoto Station and will show you the day. Because the train arrives at 6 o'clock in the morning, please take it from 6 am to around 8 pm. I am Australian.
<p class="ps text-right">Published on：Nian May Day</p>
<p class="sign text-right">Recruitment Details</p>

</div>
</div>
</div>
</div>
</div>
<div class="col-xs-12 col-md-6">
<div class="row">
<div class="col-xs-3"><img class="img-responsive" src="testimonial-2.png" /></div>
<div class="col-xs-9">
<p class="testimonial-name">ohnathan Doe</p>
<p class="testimonial-job">Australia</p>

<div class="hr"></div>
<div class="row">
<div class="col-xs-2"><img class="img-responsive" src="quote.png" /></div>
<div class="col-xs-10 testimonial-content">

I will go to Kyoto from April 5th to 8th. I'm looking for someone who will pick you up at Kyoto Station and will show you the day. Because the train arrives at 6 o'clock in the morning, please take it from 6 am to around 8 pm. I am Australian.
<p class="ps text-right">Published on：Nian May Day</p>
<p class="sign text-right">Recruitment Details</p>

</div>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-xs-12 col-md-6">
<div class="row">
<div class="col-xs-3"><img class="img-responsive" src="testimonial-3.png" /></div>
<div class="col-xs-9">
<p class="testimonial-name">ohnathan Doe</p>
<p class="testimonial-job">Australia</p>

<div class="hr"></div>
<div class="row">
<div class="col-xs-2"><img class="img-responsive" src="quote.png" /></div>
<div class="col-xs-10 testimonial-content">

I will go to Kyoto from April 5th to 8th. I'm looking for someone who will pick you up at Kyoto Station and will show you the day. Because the train arrives at 6 o'clock in the morning, please take it from 6 am to around 8 pm. I am Australian.
<p class="ps text-right">Published on：Nian May Day</p>
<p class="sign text-right">Recruitment Details</p>

</div>
</div>
</div>
</div>
</div>
<div class="col-xs-12 col-md-6">
<div class="row">
<div class="col-xs-3"><img class="img-responsive" src="testimonial-4.png" /></div>
<div class="col-xs-9">
<p class="testimonial-name">ohnathan Doe</p>
<p class="testimonial-job">Australia</p>
<div class="hr"></div>
<div class="row">
<div class="col-xs-2"><img class="img-responsive" src="quote.png" /></div>
<div class="col-xs-10 testimonial-content">

I will go to Kyoto from April 5th to 8th. I'm looking for someone who will pick you up at Kyoto Station and will show you the day. Because the train arrives at 6 o'clock in the morning, please take it from 6 am to around 8 pm. I am Australian.
<p class="ps text-right">Published on：Nian May Day</p>
<p class="sign text-right">Recruitment Details</p>

</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
   
<?php endif; } ?>


<?php get_footer(); ?>