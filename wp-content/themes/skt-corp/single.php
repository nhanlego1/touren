<?php
/**
 * The Template for displaying all single posts.
 *
 * @package SKT Corp
 */

get_header();

?>
<?php if (in_category('hostlist') || in_category('testimonial') || in_category('tourlist')): ?>
<?php while (have_posts()) :
the_post(); ?>
<div class="header1" style="height:300px;background:url(../img/banner_host_dt.png);background-size: cover;">
    <div class="title-top">
        <h2>Guide Host Detailes
        </h2>
    </div>
</div>
<div style="width:100%;background:#f6f6f6;">
    <div class='container' style="">
        <div class='row'>
            <div class="col-lg-7 col-md-7 col-sm-7">
                <div class="courseArchive_content">
                    <div class="singlecourse_ferimg_area">
                        <div class="singlecourse_ferimg">
                            <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)) ?>" alt="img">
                            <?php //echo get_the_post_thumbnail($post->ID, 'thumbnail' );?>
                        </div>
                        <div class="singlecourse_bottom">
                            <h1><b><?= get_the_title($post->ID) ?></b></h1>
                            <?php if (in_category('hostlist') || in_category('tourlist')): ?>
                                <span class="singlecourse_author">
		                       <img alt="img"
                                    src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)) ?>">Guide Area : Tokyo, Kyoto, Hokkaido <a
                                        href="<?php echo esc_url(home_url('/')); ?>list_qa" class="question">Q&amp;A</a></span>
                                <span class="singlecourse_price"><i class="fa fa-usd"
                                                                    aria-hidden="true"></i><?php echo get_post_meta($post->ID, 'price', TRUE); ?>
                                    /Per One Hour</span>
                            <?php else: ?>
                                <span class="singlecourse_author">
					                 <img alt="img"
                                          src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)) ?>"><?= get_the_title($post->ID) ?></span>
                                <span class="singlecourse_price"><?php echo get_post_meta($post->ID, 'job', TRUE); ?>
					                  </span>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="single_course_content">
                        <?php if (in_category('hostlist') || in_category('tourlist')): ?>
                            <h2><?= get_the_title($post->ID) ?></h2>
                            <p class="hidden">
                                東京ソラマチ@はショッピングやグルメのほか、水族館やプラネタリウムなどのエンターテインメントも楽しめる商業施設。30・31階のレストラン街「ソラマチダイニング
                                スカイツリービュー」には、地上150mからの絶景を眺めながら食事ができるステキなレストランがたくさんありますよ。「天空ラウンジ TOP of
                                TREE」もその１つ。間近に迫る東京スカイツリー@は大迫力。晴れた日には東京タワーや富士山も見えます。「天空ラウンジ TOP of TREE」ほか「ソラマチダイニング
                                スカイツリービュー」のレストランでは、上から下まで、東京スカイツリーの全景が見られるのが大きな魅力です。
                                そういった人々や言語を通して、文化の違いを大きく感じることも多々あり、日々発見と新鮮な驚きを得ています。この１年でアジア、東南アジア、ヨーロッパ、北中米地域の言語の仕事をすることができましたが、いずれアフリカ、中東などの仕事も行ってみたいです。プライベートでは、入社前にメキシコを訪れてきました。
                                席はすべて窓側を向いていて、どこに座っても東京スカイツリーが見えます。そんな「天空ラウンジ TOP of
                                TREE」の人気メニューは東京スカイツリーをイメージした「アミューズタワー（2,800円）」。3段トレイの上に、シェフ特製の華やかなアミューズ（オードブル）が並んでいます。季節の食材をふんだんに使った手の込んだお料理の数々は、アミューズといえどもメイン料理にも匹敵するくらいの満足感が味わえますよ。トレイは東京スカイツリーと同じようにライトアップされる仕組みで、夜はとってもロマンティック。窓の向こうに見える東京スカイツリーとのコラボレーションも最高。大事な記念日やデートはもちろん、女子会にもぴったりです！<br>
                                <br></p>
                            <p><?= the_content($post->ID) ?>
                                <br></p>
                        <?php else: ?>
                            <p><?= the_content($post->ID) ?><br></p>
                        <?php endif; ?>
                        <p></p>
                        <table class="table table-striped course_table">
                            <thead>
                            <tr>
                                <th colspan="3" style="border: 1px solid #d4d2d2; color: #333;"><h2><font><font>Recommended gourmet that I will show! </font><font>It is!</font></font></h2>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><img src="../img/ramen.jpg"></td>
                                <td><img src="../img/soba.jpg" data-pin-nopin="true"></td>
                                <td><img src="../img/curry.jpg"></td>
                            </tr>
                            <tr>
                                <td><font><font>○○ ramen at ○○○ store</font></font></td>
                                <td><font><font>Tempra soba noodle shop</font></font></td>
                                <td><font><font>OOO store soup curry</font></font></td>
                            </tr>
                            <tr>
                                <td><font><font>Soup Curry Heart Shonandai West Exit Store </font></font><br><font><font>14 kinds of </font><font>Vegetables and Mochi </font><font>Pork ¥ 1,280</font></font></td>
                                <td><font><font>Soup Curry Heart Shonandai West Exit Store </font></font><br><font><font>14 kinds of </font><font>Vegetables and Mochi </font><font>Pork ¥ 1,280</font></font></td>
                                <td><font><font>Soup Curry Heart Shonandai West Exit Store </font></font><br><font><font>
                                            14 kinds of </font><font>Vegetables and Mochi </font><font>Pork ¥ 1,280
                                        </font></font></td>
                            </tr>
                            <tr>
                                <td width="230"><font><font>Homemade ultrafine noodles are wonderful in winter feeling sharpness and delicious, does not it match the temperature of water and air? </font><font>There is no problem with compatibility with soup, it lifts it with a good feeling.
                                        </font></font></td>
                                <td width="230"><font><font>Please enjoy delicious Izumo soba and set meals prepared using local fresh ingredients.</font></font></td>
                                <td width="230"><font><font>I sticked to the deliciousness of 15 types of vegetables and fruits! </font><font>It is a curry that adds plenty of saute - on - onion, grated vegetables and fruits and finished with vegetable natural thickening and taste without using flour.
                                        </font></font></td>
                            </tr>
                            </tbody>
                        </table>
                        <p></p>
                        <table class="table table-striped course_table">
                            <thead>
                            <tr>
                                <th colspan="3" style="border: 1px solid #d4d2d2; color: #333;"><h2><font><font>The recommended spot I will guide! </font><font>It is!</font></font></h2>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><img src="../img/akarenga.jpg"></td>
                                <td><img src="../img/rainbow.jpg" data-pin-nopin="true"></td>
                                <td><img src="../img/factory.jpg"></td>
                            </tr>
                            <tr>
                                <td width="230"><font><font>Yokohama Red Brick Warehouse</font></font></td>
                                <td width="230"><font><font>Rainbow Bridge</font></font></td>
                                <td width="230"><font><font>OOO store soup curry</font></font></td>
                            </tr>
                            <tr>
                                <td width="230"><font><font>Kanagawa Prefecture Yokohama City Naka-ku Shinkan 1-1</font></font></td>
                                <td><font><font>━</font></font></td>
                                <td><font><font>━</font></font></td>
                            </tr>
                            </tbody>
                        </table>
                        <table class="table table-striped course_table">
                            <!-- <thead>
                              <tr style="border: 1px solid #d4d2d2; color: #333;">
                                <th style="color: #333; width:9%;">名前</th>
                            <th colspan="2" style="color: #333;">森純一郎</th>
                          </tr>
                            </thead> -->
                            <tbody>
                            <tr>
                                <td><font><font>nickname</font></font></td>
                                <td><font><font>JUN</font></font></td>
                            </tr>
                            <tr>
                                <td><font><font>Guide area</font></font></td>
                                <td><font><font>Tokyo, Yokohama, Saitama</font></font></td>
                            </tr>
                            <tr>
                                <td><font><font>supported language</font></font></td>
                                <td><font><font>English, Spanish</font></font></td>
                            </tr>
                            <tr>
                                <td><font><font>Minimum time</font></font></td>
                                <td><font><font>8 hours</font></font></td>
                            </tr>
                            <tr>
                                <td><font><font>transportation</font></font></td>
                                <td><font><font>Car (self-owned), bus, train</font></font></td>
                            </tr>
                            <tr>
                                <td><font><font>Can provide cars</font></font></td>
                                <td><font><font>OK</font></font></td>
                            </tr>
                            <tr>
                                <td><font><font>Basic time</font></font></td>
                                <td><font><font>9: 00 ~ 18: 00</font></font></td>
                            </tr>
                            <tr>
                                <td><font><font>Morning early / late at night</font></font></td>
                                <td><font><font>Morning early OK: 3,500 / hour late at night OK: 3,500</font></font></td>
                            </tr>
                            <tr>
                                <td><font><font>Specialty</font></font></td>
                                <td><font><font>English, Spanish</font></font></td>
                            </tr>
                            <tr>
                                <td><font><font>age</font></font></td>
                                <td><font><font>30 to 34 years old</font></font></td>
                            </tr>
                            <tr>
                                <td><font><font>Current job</font></font></td>
                                <td><font><font>A drinker</font></font></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- start related course -->
                    <div class="pay"><a href="#">Order</a></div>
                    <!--form paypal-->
                    <div class="form-paypal-adaptive">
                        <div class="order-info">
                            <h2>Please enter your information and make payment</h2>
                        </div>
                        <form method="post" id="paypalAdaptive">
                            <input type="hidden" value="<?php print get_the_title($post->ID) ?>" class="post_name"/>
                            <input type="hidden" value="<?php echo get_post_meta($post->ID, 'price', TRUE); ?>" class="post_price"/>
                            <div class="form-item">
                                <label class="require">Full Name <span>*</span></label>
                                <input type="text" name="order_name" required/>
                            </div>
                            <div class="form-item">
                                <label class="require">Stay address <span>*</span></label>
                                <input type="text" name="order_address" required/>
                            </div>
                            <div class="form-item">
                                <label class="require">Your mobile phone<span>*</span></label>
                                <input type="text" name="order_mobile" required/>
                            </div>
                            <div class="form-item">
                                <label class="require">Passport number<span>*</span></label>
                                <input type="text" name="order_passport" required/>
                            </div>
                            <div class="form-item">
                                <label class="require">Start day <span>*</span></label>
                                <input type="text" value="<?php print date('m/d/Y') ?>" name="order_starday" id="datepicker" required/>
                            </div>
                            <div class="form-item">
                                <label class="require">End day <span>*</span></label>
                                <input type="text" value="<?php print date('m/d/Y') ?>" name="order_endday" id="datepicker2" required/>
                            </div>
                            <div class="form-item">
                                <label class="require">Start time<span>*</span></label>
                                <input type="text" value="<?php print date('H:i') ?>" name="order_starttime" required/>
                            </div>
                            <div class="form-item">
                                <label class="require">End time <span>*</span></label>
                                <input type="text" value="<?php print date('H:i') ?>" name="order_endtime" required/>
                            </div>
                            <div class="form-item">
                                <label class="require">Total hours <span>*</span></label>
                                <input type="number" class="fee_hour" name="order_hour" required/>
                            </div>
                            <div class="form-item">
                                <label class="require">Total fee <span>*</span></label>
                                <input type="text" value="0" disabled class="fee_price" name="order_fee" required/>
                            </div>
                            <div class="form-item">
                                <label class="require">Meeting place<span>*</span></label>
                                <input type="text" name="order_place" required/>
                            </div>
                            <div class="form-item">
                                <label class="require">Remark</label>
                                <input type="text" name="order_remark"/>
                            </div>
                            <div class="form-item-submit">
                                <input type="submit" name="submit" value="Pay with Paypal"/>
                            </div>
                        </form>
                    </div>

                    <div class="related_post">
                        <h2>USER REVIEW</h2>
                        　　　　　　　　　　 　　　　　　　　　　 　　　　　　　　　　 　　　　　　　　　　 　　　　　　　　　　 　　　　　　　　　　
                        <table class="table table-striped course_table">
                            <thead>

                            </thead>
                            <tbody>
                            <tr colspan="7" class="content-start">
                                <td><p><?= the_content($post->ID) ?></p>

                                </td>
                            </tr>
                            <tr>
                                <td colspan="7">
                                    <!--<img src="../img/revie.jpg" alt="img"> -->
                                    <?php
                                    // If comments are open or we have at least one comment, load up the comment template
                                    if (comments_open() || '0' != get_comments_number())
                                        comments_template();
                                    ?>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="row">
                        </div>
                    </div>
                    <!-- End related course -->
                </div>
            </div>
            <?php endwhile; ?>
            <?php get_sidebar(); ?>
            <?php else: ?>
                <div class="header1"
                     style="height:300px;background:url(<?php echo esc_url(home_url('/')); ?>img/bannerblog.jpg);background-size: cover;"></div>
                <div id="primary" class="content-area">
                    <div class="site-content container">
                        <section class="site-main" id="sitemain">
                            <div class="blog-post">
                                <?php while (have_posts()) : the_post(); ?>
                                    <?php get_template_part('content', 'single'); ?>
                                    <?php skt_corp_content_nav('nav-below'); ?>
                                    <?php
                                    // If comments are open or we have at least one comment, load up the comment template
                                    if (comments_open() || '0' != get_comments_number())
                                        comments_template();
                                    ?>
                                <?php endwhile; // end of the loop. ?>
                            </div>
                        </section>
                        <?php get_sidebar(); ?>
                        <div class="clear"></div>
                    </div>
                </div>
            <?php endif; ?>
            <?php get_footer(); ?>
            <style>
                .single_course_content .rw-rating-table {
                    display: none;
                }

                .content-start p, .content-start div {
                    display: none;
                }
            </style>