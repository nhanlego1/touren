<?php get_header();
?>
    <div class="header1" style="height:300px;background:url(../img/bannerpage3.jpg);background-size: cover;">
        <div class="title-top">
            <h2>Host System Guide</h2>
        </div>
    </div>
    <div class="col-md-12 col-xs-12 " id="step">
        <div class='container'>
            <div class='row'>
                <div class="col-md-8  col-md-offset-2 col-xs-12  row step">
                    <ul class="progress-indicator">
                        <?php
                        $step = 1;
                        if (isset($_POST['to_step_2']) and $_POST['to_step_2'] == 'yes') {
                            $step = 2;
                        }
                        if (isset($_POST['to_step_3']) and $_POST['to_step_3'] == 'yes') {
                            $step = 3;
                        }


                        ?>
                        <?php $args = array(
                            'category_name' => 'config-step',
                            'orderby' => 'date',
                            'order' => 'DESC',
                            'posts_per_page' => 1,
                        );
                        $wp_query = new WP_Query();
                        $wp_query->query($args);
                        while ($wp_query->have_posts()):
                            $wp_query->the_post();

                            ?>
                            <li class="<?php if ($step >= 1): ?>completed<?php endif; ?>">
                                <span class="bubble"><span class="num-step">1</span></span>
                                <span
                                    class="title-step"><?php echo get_post_meta(get_the_ID(), 'step1', TRUE); ?></span>
                            </li>
                            <li class="<?php if ($step >= 2): ?>completed<?php endif; ?>">
                                <span class="bubble"><span class="num-step">2</span></span>
                                <span
                                    class="title-step"><?php echo get_post_meta(get_the_ID(), 'step2', TRUE); ?></span>
                            </li>
                            <li class="<?php if ($step >= 3): ?>completed<?php endif; ?>">
                                <span class="bubble"><span class="num-step">3</span></span>
                                <span
                                    class="title-step"><?php echo get_post_meta(get_the_ID(), 'step4', TRUE); ?></span>
                            </li>
                        <?php endwhile; ?>
                    </ul>

                </div>
            </div>
        </div>
    </div>
    <div class='row'>
        <div class="col-md-12 col-xs-12">
            <div class="tab-content">
                <div class="tab-pane active" id="tab1" style="background: url(../bg-container.jpg);">
                    <!-- container -->

                    <div class="container" style="/*max-width:769px;*/" id="wrap-host">

                        <!--  mainform -->
                        <div id="mainform">
                            <p></p>
                            <br/>
                            <h2 class="text-center"><a href="/">Become a Host (Interpreter
                                    Guide) Entry Form</a></h2>
                            <!-- <p class="step"><em>1. Enter form</em> → <span>2. Confirmation of input contents</span> → <span>3. send completely</span></p> -->
                            <div class="inner-host">
                                <?php
                                $arg_host = array(
                                    'post_type' => 'hostguide',
                                    'category_name' => 'hostguide',
                                    'post_status' => 'publish',
                                    'post_per_page' => 1,
                                );

                                $query_host = new WP_Query($arg_host);

                                while ($query_host->have_posts()) : $query_host->the_post();
                                    ?>
                                    <div class="row">
                                        <div class="col-md-8 col-md-offset-2 col-xs-12 title-info">
                                            <?php the_title(); ?>
                                        </div>
                                        <div class="col-md-8 col-md-offset-2 col-xs-12 info-host">
                                            <div><?php the_content(); ?></div>
                                        </div>
                                    </div>
                                    <?php
                                endwhile;
                                wp_reset_postdata();
                                ?>
                            </div>
                        </div>


                        <?php

                        if (isset($_POST['to_step_3']) and $_POST['to_step_3'] == 'yes'): ?>

                        <section id="contact">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="title_area">
                                            <div class="title_three">
                                                <p2>【Notes on Registration】 <br> After matching with the client (guest)
                                                    is actually established after registering on this site, <br> <br>
                                                    When actually guide you to the city or hometown you live in, Do not
                                                    qualify as a qualified interpreter guide <br> Explain and provide
                                                    guidance on the "culture, geography, history, politics, religion" of
                                                    the region and Japan based on their own knowledge / knowledge and
                                                    interpretation guide business law , It will be punished based on
                                                    travel business law. <br> Please be careful not to introduce / guide
                                                    about "Culture · Geography · History · Politics · Religion" on the
                                                    guidance when hosts do not possess interpreter guide qualifications.
                                                </p2>
                                                <br></div>
                                            <br>
                                            <p>Those who wish to register an interpreter guide can register from the
                                                form below.<br>
                                            </p>
                                            <p>In addition to Japanese, please input in interpretable language.<br><br>
                                                <p2>Age, mobile number, and address are not displayed on the site. After
                                                    the matching is established, it will be sent directly to the guest.
                                                </p2>
                                                <br>
                                                <br>

                                            <div id="mainform">

                                                <div>
                                                    <ul>
                                                        <li>I sent an e-mail.</li>
                                                        <li>Please wait for a while until it is replied.</li>
                                                        <li>Even if it is December 24 (Saturday) after 1 week, if you do
                                                            not
                                                            receive a reply, there is a possibility that it has not
                                                            arrived,
                                                            please send again.
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        </p></div>
                                </div>
                            </div>
                    </div>
                    </section>
                    <?php endif; ?>
                    <?php if (isset($_POST['to_step_3']) and $_POST['to_step_3'] == 'yes'): ?>
                        <?php
                        $c9oq = '';

                        foreach ($_POST['c9oq'] as $key => $value) {
                            if ($value != '') $c9oq .= $value;
                        }
                        $c9lr = implode(', ',$_POST['c9lr']);
                        $data_post = array(
                            'name_guest' => $_POST['t3di_guest'],
                            'phone_guest' => $_POST['t0fl_guest'],
                            'email_guest' => $_POST['t9hg_guest'],
                            'code1_guest' => $_POST['t3gq_guest'],
                            'code2_guest' => $_POST['t0sz_guest'],
                            'quan_guest' => $_POST['s5bo_guest'],
                            'tinh_guest' => $_POST['t4ii_guest'],
                            'add_guest' => $_POST['t0pi_guest'],
                            'name_host' => $_POST['t3di'],
                            'alias_host' => $_POST['paypal_account'],
                            'name2_host' => $_POST['t2wv'],
                            'code1_host' => $_POST['t3gq'],
                            'code2_host' => $_POST['t0sz'],
                            'quan_host' => $_POST['s5bo'],
                            'tinh_host' => $_POST['t4ii'],
                            'add_host' => $_POST['t0pi'],
                            'birth1_host' => $_POST['s6ib'],
                            'birth_year' => $_POST['t2ne'],
                            'birth_month' => $_POST['t9ip'],
                            'birth_day' => $_POST['t3xl'],
                            'phone_host' => $_POST['t0fl'],
                            'language' => $_POST['t7pj'],
                            'profile1' => $_POST['t1og'],
                            'profile2' => $_POST['t3mp'],
                            'time_action' => $_POST['t4jy'],
                            'email_host' => $_POST['t9hg'],
                            'time_minimum' => $_POST['t9ag'],
                            'time_salary' => $_POST['t8nd'],
                            'night_maybe' => $c9oq,
                            'salary_min_max' => $_POST['t9su'],
                            'zone1' => $_POST['s4lu'],
                            'zone2' => $_POST['s4nx'],
                            'zone3' => $_POST['s9pl'],
                            'zone4' => $_POST['s6rf'],
                            'zone5' => $_POST['s9oi'],
                            'phuong_tien' => $c9lr,
                            'career' => $_POST['t4qr'],
                            'file_zone1' => $_POST['file_zone1'],
                            'file_zone2' => $_POST['file_zone2'],
                            'file_zone3' => $_POST['file_zone3'],
                            'file_note1' => $_POST['file_note1'],
                            'file_note2' => $_POST['file_note2'],
                            'file_note3' => $_POST['file_note3'],
                            'file_eat1' => $_POST['file_eat1'],
                            'file_eat2' => $_POST['file_eat2'],
                            'file_eat3' => $_POST['file_eat3'],
                            'file_eat_note1' => $_POST['file_eat_note1'],
                            'file_eat_note2' => $_POST['file_eat_note2'],
                            'file_eat_note3' => $_POST['file_eat_note3']
                        );
                        $guide_area = '';
                        if($_POST['s4lu']){
                            $guide_area .= $_POST['s4lu'];
                        }
                        if($_POST['s9pl']){
                            $guide_area .= ', '.$_POST['s4lu'];
                        }
                        if($_POST['s6rf']){
                            $guide_area .=', '.$_POST['s6rf'];
                        }
                        if($_POST['s9oi']){
                            $guide_area .=', '.$_POST['s9oi'];
                        }
                        $content= '';
                        $content .='<table class="table table-striped course_table">
                            <thead>
                            <tr>
                                <th colspan="3" style="border: 1px solid #d4d2d2; color: #333;"><h2><font><font>Recommended
                                                gourmet that I will show! </font><font>It is!</font></font></h2>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><img src="'.wp_get_attachment_image_src($_POST['file_eat1'], 'thumbnail')[0] .'"></td>
                                <td><img src="'.wp_get_attachment_image_src($_POST['file_eat2'], 'thumbnail')[0] .'" data-pin-nopin="true"></td>
                                <td><img src="'.wp_get_attachment_image_src($_POST['file_eat3'], 'thumbnail')[0] .'"></td>
                            </tr>
                            <tr>
                                <td><font><font>'.$_POST['file_eat_note1'].'</font></font></td>
                                <td><font><font>'.$_POST['file_eat_note2'].'</font></font></td>
                                <td><font><font>'.$_POST['file_eat_note3'].'</font></font></td>
                            </tr>
                            <tr>
                                <td><font><font>-</font></font></td>
                                <td><font><font>-</font></font></td>
                                <td><font><font>-</font></font></td>
                            </tr>
                            <tr>
                                <td width="230"><font><font>-</font></font></td>
                                <td width="230"><font><font>-</font></font></td>
                                <td width="230"><font><font>-</font></font></td>
                            </tr>
                            </tbody>
                        </table>';
                        $content .='<table class="table table-striped course_table">
                            <thead>
                            <tr>
                                <th colspan="3" style="border: 1px solid #d4d2d2; color: #333;"><h2><font><font>The
                                                recommended spot I will guide! </font><font>It is!</font></font></h2>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><img src="'.wp_get_attachment_image_src($_POST['file_zone1'], 'thumbnail')[0] .'"></td>
                                <td><img src="'.wp_get_attachment_image_src($_POST['file_zone2'], 'thumbnail')[0] .'" data-pin-nopin="true"></td>
                                <td><img src="'.wp_get_attachment_image_src($_POST['file_zone3'], 'thumbnail')[0] .'"></td>
                            </tr>
                            <tr>
                                <td width="230"><font><font>'.$_POST['file_note1'].'</font></font></td>
                                <td width="230"><font><font>'.$_POST['file_note2'].'</font></font></td>
                                <td width="230"><font><font>'.$_POST['file_note3'].'</font></font></td>
                            </tr>
                            <tr>
                                <td width="230"><font><font>-</font></font></td>
                                <td><font><font>━</font></font></td>
                                <td><font><font>━</font></font></td>
                            </tr>
                            </tbody>
                        </table>';
                        $content .='<table class="table table-striped course_table">
 
                            <tbody>
                       
                            <tr>
                                <td><font><font>Guide area</font></font></td>
                                <td><font><font>'.$guide_area.'</font></font></td>
                            </tr>
                            <tr>
                                <td><font><font>supported language</font></font></td>
                                <td><font><font>'.$_POST['t7pj'].'</font></font></td>
                            </tr>
                            <tr>
                                <td><font><font>Minimum time</font></font></td>
                                <td><font><font>'.$_POST['t9ag'].'</font></font></td>
                            </tr>
                            <tr>
                                <td><font><font>transportation</font></font></td>
                                <td><font><font>'.implode(', ',$_POST['c9lr']).'</font></font></td>
                            </tr>
                            <tr>
                                <td><font><font>Can provide cars</font></font></td>
                                <td><font><font>-</font></font></td>
                            </tr>
                            <tr>
                                <td><font><font>Basic time</font></font></td>
                                <td><font><font>'.$_POST['t4jy'].'</font></font></td>
                            </tr>
                            <tr>
                                <td><font><font>Morning early / late at night</font></font></td>
                                <td><font><font>'.$_POST['t9su'].'</font></font>
                                </td>
                            </tr>
                            <tr>
                                <td><font><font>Specialty</font></font></td>
                                <td><font><font>-</font></font></td>
                            </tr>
                            <tr>
                                <td><font><font>age</font></font></td>
                                <td><font><font>-</font></font></td>
                            </tr>
                            <tr>
                                <td><font><font>Current job</font></font></td>
                                <td><font><font>-</font></font></td>
                            </tr>
                            </tbody>
                        </table>';
                        global $wpdb;
                        //create post
                        $post = array(
                            'post_author'=>1,
                            'post_content'=>$content,
                            'post_title'=>$guide_area,
                            'post_status'=>'pending',
                            'comment_status'=>'open',
                            'post_type'=>'post',

                        );
                        $post_ID = wp_insert_post( $post, $wp_error = false );
                        //set category
                        wp_set_post_categories( $post_ID, array(HOST_TERM_ID), true );
                        $meta = array(
                            'paypal_account'=>$_POST['paypal_account'],
                            'price'=>$_POST['t8nd'],
                            'guide_area' => $guide_area,
                            'host_tour_name'=> $_POST['t3di'],
                            'host_tour_language'=> $_POST['t7pj'],
                            'transportration'=>implode(',',$_POST['c9lr']),
                            'early_time'=> $c9oq,
                            '_thumbnail_id'=>$_POST['avatar'],
                        );
                        foreach($meta as $kmeta =>$vmeta){
                            add_post_meta($post_ID, $kmeta, $vmeta);
                        }
                        ?>

                    <?php endif; ?>
                    <?php
                    if (isset($_POST['to_step_2']) and $_POST['to_step_2'] == 'yes'): ?><?php
                        $c9oq = '';

                        foreach ($_POST['c9oq'] as $key => $value) {
                            if ($value != '') $c9oq .= $value;
                        }
                        $c9lr = '';
                        foreach ($_POST['c9lr'] as $key => $value) {
                            if ($value != '') $c9lr .= $value;
                        }
                        require_once(ABSPATH . 'wp-admin/includes/image.php');
                        require_once(ABSPATH . 'wp-admin/includes/file.php');
                        require_once(ABSPATH . 'wp-admin/includes/media.php');

                        if ($_FILES['avatar']['name'] != '') $attachment_id_avatar = media_handle_upload('avatar', 0); else $attachment_id_avatar = null;
                        if ($_FILES['f6et']['name'] != '') $attachment_id = media_handle_upload('f6et', 0); else $attachment_id = null;
                        if ($_FILES['f6rs']['name'] != '') $attachment_id_1 = media_handle_upload('f6rs', 0); else $attachment_id_1 = null;
                        if ($_FILES['f6hl']['name'] != '') $attachment_id_2 = media_handle_upload('f6hl', 0); else $attachment_id_2 = null;
                        if ($_FILES['f5ue']['name'] != '') $attachment_id_3 = media_handle_upload('f5ue', 0); else $attachment_id_3 = null;
                        if ($_FILES['f5vi']['name'] != '') $attachment_id_4 = media_handle_upload('f5vi', 0); else $attachment_id_4 = null;
                        if ($_FILES['f9gp']['name'] != '') $attachment_id_5 = media_handle_upload('f9gp', 0); else $attachment_id_5 = null;

                        if (is_wp_error($attachment_id) || is_wp_error($attachment_id_1) || is_wp_error($attachment_id_2) || is_wp_error($attachment_id_3) || is_wp_error($attachment_id_4) || is_wp_error($attachment_id_5)) {
                            echo 'Error';

                        }


                        ?>

                        <form action="<?php echo esc_url(home_url('/')); ?>host_entry/" method="post">
                            <input type="hidden" name="to_step_3" value="yes">
                            <fieldset>

                                <input type="hidden" name="to_step_3" value="yes">
                                <input type="hidden" name="t3di_guest" value="-">
                                <input type="hidden" name="t0fl_guest" value="-">
                                <input type="hidden" name="t9hg_guest" value="-">
                                <input type="hidden" name="t3gq_guest" value="-">
                                <input type="hidden" name="t0sz_guest" value="-">
                                <input type="hidden" name="s5bo_guest" value="-">
                                <input type="hidden" name="t4ii_guest" value="-">
                                <input type="hidden" name="t0pi_guest" value="-">
                                <input type="hidden" name="t3di" value="<?php echo $_POST['t3di']; ?>">
                                <input type="hidden" name="avatar" value="<?php echo $attachment_id_avatar ?>">
                                <input type="hidden" name="paypal_account" value="<?php echo $_POST['paypal_account']; ?>">
                                <input type="hidden" name="t2wv" value="<?php echo $_POST['t2wv']; ?>">
                                <input type="hidden" name="t3gq" value="<?php echo $_POST['t3gq']; ?>">
                                <input type="hidden" name="t0sz" value="<?php echo $_POST['t0sz']; ?>">
                                <input type="hidden" name="s5bo" value="<?php echo $_POST['s5bo']; ?>">
                                <input type="hidden" name="t4ii" value="<?php echo $_POST['t4ii']; ?>">
                                <input type="hidden" name="t0pi" value="<?php echo $_POST['t0pi']; ?>">
                                <input type="hidden" name="s6ib" value="<?php echo $_POST['s6ib']; ?>">
                                <input type="hidden" name="t2ne" value="<?php echo $_POST['t2ne']; ?>">
                                <input type="hidden" name="t9ip" value="<?php echo $_POST['t9ip']; ?>">
                                <input type="hidden" name="t3xl" value="<?php echo $_POST['t3xl']; ?>">
                                <input type="hidden" name="t0fl" value="<?php echo $_POST['t0fl']; ?>">
                                <input type="hidden" name="t7pj" value="<?php echo $_POST['t7pj']; ?>">
                                <input type="hidden" name="t1og" value="<?php echo $_POST['t1og']; ?>">
                                <input type="hidden" name="t3mp" value="<?php echo $_POST['t3mp']; ?>">
                                <input type="hidden" name="t9hg" value="<?php echo $_POST['t9hg']; ?>">
                                <input type="hidden" name="t4jy" value="<?php echo $_POST['t4jy']; ?>">
                                <input type="hidden" name="t9ag" value="<?php echo $_POST['t9ag']; ?>">
                                <input type="hidden" name="t8nd" value="<?php echo $_POST['t8nd']; ?>">
                                <input type="hidden" name="c9oq[]" value="<?php echo $_POST['c9oq'][0]; ?>">
                                <input type="hidden" name="c9oq[]" value="<?php echo $_POST['c9oq'][1]; ?>">
                                <input type="hidden" name="t9su" value="<?php echo $_POST['t9su']; ?>">
                                <input type="hidden" name="s4lu" value="<?php echo $_POST['s4lu']; ?>">
                                <input type="hidden" name="s4nx" value="<?php echo $_POST['s4nx']; ?>">
                                <input type="hidden" name="s9pl" value="<?php echo $_POST['s9pl']; ?>">
                                <input type="hidden" name="s6rf" value="<?php echo $_POST['s6rf']; ?>">
                                <input type="hidden" name="s9oi" value="<?php echo $_POST['s9oi']; ?>">
                                <input type="hidden" name="c9lr[]" value="<?php echo $_POST['c9lr'][0]; ?>">
                                <input type="hidden" name="file_zone1" value="<?php echo $attachment_id ?>">
                                <input type="hidden" name="file_zone2" value="<?php echo $attachment_id_1 ?>">
                                <input type="hidden" name="file_zone3" value="<?php echo $attachment_id_2 ?>">
                                <input type="hidden" name="file_note1" value="<?php echo $_POST['t8kg']; ?>">
                                <input type="hidden" name="file_note2" value="<?php echo $_POST['t5ue']; ?>">
                                <input type="hidden" name="file_note3" value="<?php echo $_POST['t5wp']; ?>">
                                <input type="hidden" name="file_eat1" value="<?php echo $attachment_id_3 ?>">
                                <input type="hidden" name="file_eat2" value="<?php echo $attachment_id_4 ?>">
                                <input type="hidden" name="file_eat3" value="<?php echo $attachment_id_5 ?>">
                                <input type="hidden" name="file_eat_note1" value="<?php echo $_POST['t4gt']; ?>">
                                <input type="hidden" name="file_eat_note2" value="<?php echo $_POST['t0zf']; ?>">
                                <input type="hidden" name="file_eat_note3" value="<?php echo $_POST['t8ia']; ?>">
                                <input type="hidden" name="confirm" value="done"><input type="hidden" name="id"
                                                                                        value="2">
                                <input type="hidden" name="t4qr" value="<?php echo $_POST['t4qr']; ?>">

                                <br>
                                <legend>Become a Host (Interpreter Guide) Entry Form step 2</legend>
                                <table summary="Confirmation contents">

                                    <tbody>
                                    <tr>
                                        <th>name<em class="required">※</em></th>
                                        <td>
                                            <?php echo $_POST['t3di']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Avatar<em class="required">※</em></th>
                                        <td>
                                            <?php if ($attachment_id_avatar != null) echo '<img src="' . wp_get_attachment_image_src($attachment_id_avatar, 'thumbnail')[0] . '"/>'; ?>
                                            <?php echo $_POST['avatar']; ?> </td>
                                    </tr>
                                    <tr>
                                        <th>Paypal account<em class="required">※</em></th>
                                        <td>
                                            <?php echo $_POST['paypal_account']; ?> </td>
                                    </tr>
                                    <tr>
                                        <th>Name (Romaji)</th>
                                        <td>
                                            <?php echo $_POST['t2wv']; ?>    </td>
                                    </tr>
                                    <tr>
                                        <th>Street address<em class="required">※</em></th>
                                        <td>
                                            <?php echo $_POST['t3gq']; ?>-<?php echo $_POST['t0sz']; ?><br>
                                            <?php echo $_POST['s5bo']; ?><br>
                                            <?php echo $_POST['t4ii']; ?><br>
                                            <?php echo $_POST['t0pi']; ?>                   </td>
                                    </tr>
                                    <tr>
                                        <th>Birthday<em class="required">※</em></th>
                                        <td>
                                            <?php echo $_POST['s6ib']; ?> <?php echo $_POST['t2ne']; ?>
                                            Year<?php echo $_POST['t9ip']; ?>Month<?php echo $_POST['t3xl']; ?>Day
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Cellphone number<em class="required">※</em></th>
                                        <td>
                                            <?php echo $_POST['t0fl']; ?>                 </td>
                                    </tr>
                                    <tr>
                                        <th>Supported languages<em class="required">※</em></th>
                                        <td>
                                            <?php echo $_POST['t7pj']; ?>                   </td>
                                    </tr>
                                    <tr>
                                        <th>profile<em class="required">※</em></th>
                                        <td>
                                            Profile (Please write in Japanese.): <?php echo $_POST['t1og']; ?> <br>
                                            Profile (Please write in interpretable
                                            language.): <?php echo $_POST['t3mp']; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>mail address<em class="required">※</em></th>
                                        <td>
                                            <?php echo $_POST['t9hg']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Basic guide uptime<em class="required">※</em></th>
                                        <td>
                                            <?php echo $_POST['t4jy']; ?>  </td>
                                    </tr>
                                    <tr>
                                        <th>Minimum guide time<em class="required">※</em></th>
                                        <td>
                                            <?php echo $_POST['t9ag']; ?>                </td>
                                    </tr>
                                    <tr>
                                        <th>Hourly wages for the minimum guide time<em class="required">※</em></th>
                                        <td>
                                            <?php echo $_POST['t8nd']; ?>  </td>
                                    </tr>
                                    <tr>
                                        <th>Permitted early / late night operation<em class="required">※</em></th>
                                        <td>
                                            <?php echo $c9oq; ?>       </td>
                                    </tr>
                                    <tr>
                                        <th>Hourly early in the morning / late at night</th>
                                        <td>
                                            <?php echo $_POST['t9su']; ?>      </td>
                                    </tr>
                                    <tr>
                                        <th>Guidable area<em class="required">※</em></th>
                                        <td>
                                            <?php echo $_POST['s4lu']; ?><br>
                                            <?php echo $_POST['s4nx']; ?><br>
                                            <?php echo $_POST['s9pl']; ?><br>
                                            <?php echo $_POST['s6rf']; ?><br>
                                            <?php echo $_POST['s9oi']; ?> </td>
                                    </tr>
                                    <tr>
                                        <th>Moving means at guidance<em class="required">※</em></th>
                                        <td>
                                            <?php echo $c9lr; ?>  </td>
                                    </tr>
                                    <tr>
                                        <th>Current occupation</th>
                                        <td>
                                            <?php echo $_POST['t4qr']; ?>  </td>
                                    </tr>
                                    <tr>
                                        <th>Recommended spot ①</th>
                                        <td>
                                            <?php if ($attachment_id != null) echo '<img src="' . wp_get_attachment_image_src($attachment_id, 'thumbnail')[0] . '"/>'; ?>
                                            <?php echo $_POST['t8kg']; ?>
                                            <?php if ($attachment_id_1 != null) echo '<img src="' . wp_get_attachment_image_src($attachment_id_1, 'thumbnail')[0] . '"/>'; ?>
                                            <?php echo $_POST['t5ue']; ?>
                                            <?php if ($attachment_id_2 != null) echo '<img src="' . wp_get_attachment_image_src($attachment_id_2, 'thumbnail')[0] . '"/>'; ?>
                                            <?php echo $_POST['t5wp']; ?>  </td>
                                    </tr>
                                    <tr>
                                        <th>Recommended gourmet</th>
                                        <td>
                                            <?php if ($attachment_id_3 != null) echo '<img src="' . wp_get_attachment_image_src($attachment_id_3, 'thumbnail')[0] . '"/>'; ?>
                                            <?php echo $_POST['t4gt']; ?>
                                            <?php if ($attachment_id_4 != null) echo '<img src="' . wp_get_attachment_image_src($attachment_id_4, 'thumbnail')[0] . '"/>'; ?>
                                            <?php echo $_POST['t0zf']; ?>
                                            <?php if ($attachment_id_5 != null) echo '<img src="' . wp_get_attachment_image_src($attachment_id_5
                                                    , 'thumbnail')[0] . '"/>'; ?>
                                            <?php echo $_POST['t8ia']; ?> </td>
                                    </tr>


                                    </tbody>
                                </table>
                                <p style="text-align: center;">

                                    <input type="reset" value="Redo" onclick="history.back();return false;">
                                    <input type="submit" value="Send content">
                                </p>
                            </fieldset>
                        </form>

                    <?php endif; ?>
                    <?php if (!isset($_POST['to_step_2']) && !isset($_POST['to_step_3']) && !isset($_GET['amount'])): ?>
                        <form action="<?php echo esc_url(home_url('/')); ?>host_entry/" method="post"
                              enctype="multipart/form-data" accept-charset="utf-8"
                              style="max-width:769px;margin: 0px auto;">
                            <input type="hidden" name="to_step_2" value="yes">
                            </br>
                            <fieldset>
                                <legend>Become a Host (Interpreter Guide) Entry Form</legend>
                                <table>
                                    <tbody>
                                    <tr>
                                        <th>Name<em class="required">※</em></th>
                                        <td>
                                            <!-- <p> Name<em class="required">※</em></p> -->
                                            <input type="text" id="t3di" required name="t3di" size="60" value=""
                                                   maxlength="300">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Avatar<em class="required">※</em></th>
                                        <td>
                                            <!-- <p> Name<em class="required">※</em></p> -->
                                            <input type="file" id="avatar" name="avatar" size="60" required><br>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th>Paypal Account<em class="required">※</em></th>
                                        <td>
                                            <!-- <p>Nickname<em class="required">※</em></p> -->
                                            <input type="text" id="t4kl" name="paypal_account" required size="60" value=""
                                                   maxlength="300">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Name (Romaji)</th>
                                        <td>
                                            <!-- <p>Name (Romaji)</p> -->
                                            <input type="text" id="t2wv" name="t2wv" size="60" value="" maxlength="300">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Street address<em class="required">※</em></th>
                                        <td>
                                            <!-- <p>Street address<em class="required">※</em></p> -->
                                            <span class="lside">Postal code </span><input type="number" required
                                                                                          maxlength="3"
                                                                                          oninput="maxLengthCheck3(this)"
                                                                                          id="t3gq"
                                                                                          style="height: 25px;"
                                                                                          name="t3gq" size="4" value=""
                                                                                          max="999"><span
                                                class="rside">-</span><input type="number" style="height: 25px;"
                                                                             required
                                                                             maxlength="4" id="t0sz" name="t0sz"
                                                                             size="7"
                                                                             oninput="maxLengthCheck4(this)" value=""
                                                                             max="9999"><br>
                                            <span class="lside">Prefectures </span><select id="s5bo" required
                                                                                           name="s5bo"
                                                                                           size="1">
                                                <option value="">----</option>
                                                <optgroup label="Hokkaidō">
                                                    <option value="Hokkaidō">Hokkaidō</option>
                                                </optgroup>
                                                <optgroup label="Tōhoku">
                                                    <option value="Aomori">Aomori</option>
                                                    <option value="Iwate">Iwate</option>
                                                    <option value="Miyagi">Miyagi</option>
                                                    <option value="Akita">Akita</option>
                                                    <option value="Yamagata">Yamagata</option>
                                                    <option value="Fukushima">Fukushima</option>
                                                </optgroup>
                                                <optgroup label="Kantō">
                                                    <option value="Ibaraki">Ibaraki</option>
                                                    <option value="Tochigi">Tochigi</option>
                                                    <option value="Gunma">Gunma</option>
                                                    <option value="Saitama">Saitama</option>
                                                    <option value="Chiba">Chiba</option>
                                                    <option value="Tōkyō">Tōkyō</option>
                                                    <option value="Kanagawa">Kanagawa</option>
                                                </optgroup>
                                                <optgroup label="Chūbu">
                                                    <option value="Niigata">Niigata</option>
                                                    <option value="Toyama">Toyama</option>
                                                    <option value="Ishikawa">Ishikawa</option>
                                                    <option value="Fukui">Fukui</option>
                                                    <option value="Yamanashi">Yamanashi</option>
                                                    <option value="Nagano">Nagano</option>
                                                    <option value="Gifu">Gifu</option>
                                                    <option value="Shizuoka">Shizuoka</option>
                                                    <option value="Aichi">Aichi</option>
                                                </optgroup>
                                                <optgroup label="Kansai">
                                                    <option value="Mie">Mie</option>
                                                    <option value="Shiga">Shiga</option>
                                                    <option value="Kyōto">Kyōto</option>
                                                    <option value="Ōsaka">Ōsaka</option>
                                                    <option value="Hyōgo">Hyōgo</option>
                                                    <option value="Nara">Nara</option>
                                                    <option value="Wakayama">Wakayama</option>

                                                </optgroup>
                                                <optgroup label="Chūgoku">
                                                    <option value="Tottori">Tottori</option>
                                                    <option value="Shimane">Shimane</option>
                                                    <option value="Okayama">Okayama</option>
                                                    <option value="Hiroshima">Hiroshima</option>
                                                    <option value="Yamaguchi">Yamaguchi</option>
                                                </optgroup>
                                                <optgroup label="Shikoku">
                                                    <option value="Tokushima">Tokushima</option>
                                                    <option value="Kagawa">Kagawa</option>
                                                    <option value="Ehime">Ehime</option>
                                                    <option value="Kōchi">Kōchi</option>
                                                </optgroup>
                                                <optgroup label="Kyūshū">
                                                    <option value="Fukuoka">Fukuoka</option>
                                                    <option value="Saga">Saga</option>
                                                    <option value="Nagasaki">Nagasaki</option>
                                                    <option value="Kumamoto">Kumamoto</option>
                                                    <option value="Miyazaki">Miyazaki</option>
                                                    <option value="Kagoshima">Kagoshima</option>
                                                    <option value="Okinawa">Okinawa</option>

                                                </optgroup>
                                                <optgroup label="Foreign">
                                                    <option value="Foreign">Foreign</option>

                                                </optgroup>

                                            </select><br>
                                            <span class="lside">Municipality </span><input type="text" required
                                                                                           id="t4ii"
                                                                                           name="t4ii" size="60"
                                                                                           value=""
                                                                                           maxlength="300"><br>
                                            <span class="lside">Street address building </span><input type="text"
                                                                                                      required
                                                                                                      id="t0pi"
                                                                                                      name="t0pi"
                                                                                                      size="60" value=""
                                                                                                      maxlength="300">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Birthday<em class="required">※</em></th>
                                        <td><span class="aside">※It is displayed on the site in units of ___ age to ___ years old and 5 years old</span><br>
                                            <select style="float:left" id="s6ib" name="s6ib" size="1" required>
                                                <option value="Christian era">Christian era</option>
                                                <option value="Heisei">Heisei</option>
                                                <option value="Showa">Showa</option>
                                                <option value="Showa">Showa</option>
                                                <option value="Meiji">Meiji</option>
                                            </select><select style="float:left" aria-label="Year" name="t2ne" id="t2ne"
                                                             title="Year" class="_5dba hidden" aria-controls="js_iq"
                                                             aria-haspopup="true" role="null" aria-describedby="js_ko">
                                                <option value="0" selected="1">Year</option>
                                                <option value="2058">2058</option>
                                                <option value="2057">2057</option>
                                                <option value="2056">2056</option>
                                                <option value="2055">2055</option>
                                                <option value="2054">2054</option>
                                                <option value="2053">2053</option>
                                                <option value="2052">2052</option>
                                                <option value="2051">2051</option>
                                                <option value="2050">2050</option>
                                                <option value="2049">2049</option>
                                                <option value="2048">2048</option>
                                                <option value="2047">2047</option>
                                                <option value="2046">2046</option>
                                                <option value="2045">2045</option>
                                                <option value="2044">2044</option>
                                                <option value="2043">2043</option>
                                                <option value="2042">2042</option>
                                                <option value="2041">2041</option>
                                                <option value="2040">2040</option>
                                                <option value="2039">2039</option>
                                                <option value="2038">2038</option>
                                                <option value="2037">2037</option>
                                                <option value="2036">2036</option>
                                                <option value="2035">2035</option>
                                                <option value="2034">2034</option>
                                                <option value="2033">2033</option>
                                                <option value="2032">2032</option>
                                                <option value="2031">2031</option>
                                                <option value="2030">2030</option>
                                                <option value="2029">2029</option>
                                                <option value="2028">2028</option>
                                                <option value="2027">2027</option>
                                                <option value="2026">2026</option>
                                                <option value="2025">2025</option>
                                                <option value="2024">2024</option>
                                                <option value="2023">2023</option>
                                                <option value="2022">2022</option>
                                                <option value="2021">2021</option>
                                                <option value="2020">2020</option>
                                                <option value="2019">2019</option>
                                                <option value="2018">2018</option>
                                                <option value="2017">2017</option>
                                                <option value="2016">2016</option>
                                                <option value="2015">2015</option>
                                                <option value="2014">2014</option>
                                                <option value="2013">2013</option>
                                                <option value="2012">2012</option>
                                                <option value="2011">2011</option>
                                                <option value="2010">2010</option>
                                                <option value="2009">2009</option>
                                                <option value="2008">2008</option>
                                                <option value="2007">2007</option>
                                                <option value="2006">2006</option>
                                                <option value="2005">2005</option>
                                                <option value="2004">2004</option>
                                                <option value="2003">2003</option>
                                                <option value="2002">2002</option>
                                                <option value="2001">2001</option>
                                                <option value="2000">2000</option>
                                                <option value="1999">1999</option>
                                                <option value="1998">1998</option>
                                                <option value="1997">1997</option>
                                                <option value="1996">1996</option>
                                                <option value="1995">1995</option>
                                                <option value="1994">1994</option>
                                                <option value="1993">1993</option>
                                                <option value="1992">1992</option>
                                                <option value="1991">1991</option>
                                                <option value="1990">1990</option>
                                                <option value="1989">1989</option>
                                                <option value="1988">1988</option>
                                                <option value="1987">1987</option>
                                                <option value="1986">1986</option>
                                                <option value="1985">1985</option>
                                                <option value="1984">1984</option>
                                                <option value="1983">1983</option>
                                                <option value="1982">1982</option>
                                                <option value="1981">1981</option>
                                                <option value="1980">1980</option>
                                                <option value="1979">1979</option>
                                                <option value="1978">1978</option>
                                                <option value="1977">1977</option>
                                                <option value="1976">1976</option>
                                                <option value="1975">1975</option>
                                                <option value="1974">1974</option>
                                                <option value="1973">1973</option>
                                                <option value="1972">1972</option>
                                                <option value="1971">1971</option>
                                                <option value="1970">1970</option>
                                                <option value="1969">1969</option>
                                                <option value="1968">1968</option>
                                                <option value="1967">1967</option>
                                                <option value="1966">1966</option>
                                                <option value="1965">1965</option>
                                                <option value="1964">1964</option>
                                                <option value="1963">1963</option>
                                                <option value="1962">1962</option>
                                                <option value="1961">1961</option>
                                                <option value="1960">1960</option>
                                                <option value="1959">1959</option>
                                                <option value="1958">1958</option>
                                                <option value="1957">1957</option>
                                                <option value="1956">1956</option>
                                                <option value="1955">1955</option>
                                                <option value="1954">1954</option>
                                                <option value="1953">1953</option>
                                                <option value="1952">1952</option>
                                                <option value="1951">1951</option>
                                                <option value="1950">1950</option>
                                                <option value="1949">1949</option>
                                                <option value="1948">1948</option>
                                                <option value="1947">1947</option>
                                                <option value="1946">1946</option>
                                                <option value="1945">1945</option>
                                                <option value="1944">1944</option>
                                                <option value="1943">1943</option>
                                                <option value="1942">1942</option>
                                                <option value="1941">1941</option>
                                                <option value="1940">1940</option>
                                                <option value="1939">1939</option>
                                                <option value="1938">1938</option>
                                                <option value="1937">1937</option>
                                                <option value="1936">1936</option>
                                                <option value="1935">1935</option>
                                                <option value="1934">1934</option>
                                                <option value="1933">1933</option>
                                                <option value="1932">1932</option>
                                                <option value="1931">1931</option>
                                                <option value="1930">1930</option>
                                                <option value="1929">1929</option>
                                                <option value="1928">1928</option>
                                                <option value="1927">1927</option>
                                                <option value="1926">1926</option>
                                                <option value="1925">1925</option>
                                                <option value="1924">1924</option>
                                                <option value="1923">1923</option>
                                                <option value="1922">1922</option>
                                                <option value="1921">1921</option>
                                                <option value="1920">1920</option>
                                                <option value="1919">1919</option>
                                                <option value="1918">1918</option>
                                                <option value="1917">1917</option>
                                                <option value="1916">1916</option>
                                                <option value="1915">1915</option>
                                                <option value="1914">1914</option>
                                                <option value="1913">1913</option>
                                                <option value="1912">1912</option>
                                                <option value="1911">1911</option>
                                                <option value="1910">1910</option>
                                                <option value="1909">1909</option>
                                                <option value="1908">1908</option>
                                                <option value="1907">1907</option>
                                                <option value="1906">1906</option>
                                                <option value="1905">1905</option>
                                            </select><select style="float:left" required aria-label="Month" name="t9ip"
                                                             id="t9ip" title="Month" class="_5dba">
                                                <option value="0" selected="1">Month</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                            </select><select style="float:left" required aria-label="Day" name="t3xl"
                                                             id="t3xl" title="Day" class="_5dba">
                                                <option value="0" selected="1">Day</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                <option value="13">13</option>
                                                <option value="14">14</option>
                                                <option value="15">15</option>
                                                <option value="16">16</option>
                                                <option value="17">17</option>
                                                <option value="18">18</option>
                                                <option value="19">19</option>
                                                <option value="20">20</option>
                                                <option value="21">21</option>
                                                <option value="22">22</option>
                                                <option value="23">23</option>
                                                <option value="24">24</option>
                                                <option value="25">25</option>
                                                <option value="26">26</option>
                                                <option value="27">27</option>
                                                <option value="28">28</option>
                                                <option value="29">29</option>
                                                <option value="30">30</option>
                                                <option value="31">31</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Cellphone number<em class="required">※</em></th>
                                        <td>
                                            <span class="aside">※It is not displayed on the site.</span><br>
                                            <input type="tel" id="t0fl" name="t0fl" required style="height: 25px;"
                                                   size="60"
                                                   value="" maxlength="11"><br>
                                            <span class="bside">Example： 09011112222 (No hyphen required)</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Supported languages<em class="required">※</em></th>
                                        <td>
                                        <span
                                            class="aside">Synonyms, words Multiple entries possible, comma separated</span><br>
                                            <input type="text" id="t7pj" name="t7pj" size="60" required value=""
                                                   maxlength="300">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Profile<em class="required">※</em></th>
                                        <td>
                                            <span class="aside">Profile (Please write in Japanese.)</span><br>
                                            <textarea id="t1og" name="t1og" cols="60" required rows="15"></textarea><br>
                                            <span class="aside">Profile (Please write in interpretable language.)</span><br>
                                            <textarea id="t3mp" name="t3mp" cols="60" rows="15"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Mail address<em class="required">※</em></th>
                                        <td>
                                            <input type="email" id="t9hg" name="t9hg" required style="height: 25px;"
                                                   size="60" value="" maxlength="300"><br>
                                            <span class="bside">example： info@example.com</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Basic guide uptime<em class="required">※</em></th>
                                        <td>
                                            <span class="aside">Example)9：00～18：00、10：00～17：00</span><br>
                                            <input type="text" id="t4jy" name="t4jy" required size="60" value=""
                                                   maxlength="300">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Minimum guide time<em class="required">※</em></th>
                                        <td>
                                            <span class="aside">Example) 6 hours or more ~, etc.</span><br>
                                            <input type="text" id="t9ag" required name="t9ag" size="60" value=""
                                                   maxlength="300">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Hourly wages for the minimum guide time<em class="required">※</em></th>
                                        <td>
                                            <input type="text" id="t8nd" name="t8nd" required size="60" value=""
                                                   maxlength="300">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Permitted early / late night operation<em class="required">※</em></th>
                                        <td>
                                    <span id="c9oq" class="checkbox">
                                      <label for="c9oq0"><input type="checkbox" id="c9oq0" name="c9oq[]"
                                                                value="Early in the morning　OK">Early in the morning　OK</label><label
                                            for="c9oq1"><input type="checkbox" id="c9oq1" name="c9oq[]"
                                                               value="Early in the morning　NG">Early in the morning　NG</label><label
                                            for="c9oq2"><input type="checkbox" id="c9oq2" name="c9oq[]"
                                                               value="Late at night　OK">Late at night　OK</label><label
                                            for="c9oq3"><input type="checkbox" id="c9oq3" name="c9oq[]"
                                                               value="Late at night　NG">Late at night　NG</label>
                                    </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Hourly early in the morning / late at night</th>
                                        <td>
                                            <input type="text" id="t9su" name="t9su" size="60" value="" maxlength="300">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Guidable area<em class="required">※</em></th>
                                        <td>
                                            <select id="s4lu" name="s4lu" size="1" required>
                                                <option value="">----</option>
                                                <optgroup label="Hokkaidō">
                                                    <option value="Hokkaidō">Hokkaidō</option>
                                                </optgroup>
                                                <optgroup label="Tōhoku">
                                                    <option value="Aomori">Aomori</option>
                                                    <option value="Iwate">Iwate</option>
                                                    <option value="Miyagi">Miyagi</option>
                                                    <option value="Akita">Akita</option>
                                                    <option value="Yamagata">Yamagata</option>
                                                    <option value="Fukushima">Fukushima</option>
                                                </optgroup>
                                                <optgroup label="Kantō">
                                                    <option value="Ibaraki">Ibaraki</option>
                                                    <option value="Tochigi">Tochigi</option>
                                                    <option value="Gunma">Gunma</option>
                                                    <option value="Saitama">Saitama</option>
                                                    <option value="Chiba">Chiba</option>
                                                    <option value="Tōkyō">Tōkyō</option>
                                                    <option value="Kanagawa">Kanagawa</option>
                                                </optgroup>
                                                <optgroup label="Chūbu">
                                                    <option value="Niigata">Niigata</option>
                                                    <option value="Toyama">Toyama</option>
                                                    <option value="Ishikawa">Ishikawa</option>
                                                    <option value="Fukui">Fukui</option>
                                                    <option value="Yamanashi">Yamanashi</option>
                                                    <option value="Nagano">Nagano</option>
                                                    <option value="Gifu">Gifu</option>
                                                    <option value="Shizuoka">Shizuoka</option>
                                                    <option value="Aichi">Aichi</option>
                                                </optgroup>
                                                <optgroup label="Kansai">
                                                    <option value="Mie">Mie</option>
                                                    <option value="Shiga">Shiga</option>
                                                    <option value="Kyōto">Kyōto</option>
                                                    <option value="Ōsaka">Ōsaka</option>
                                                    <option value="Hyōgo">Hyōgo</option>
                                                    <option value="Nara">Nara</option>
                                                    <option value="Wakayama">Wakayama</option>

                                                </optgroup>
                                                <optgroup label="Chūgoku">
                                                    <option value="Tottori">Tottori</option>
                                                    <option value="Shimane">Shimane</option>
                                                    <option value="Okayama">Okayama</option>
                                                    <option value="Hiroshima">Hiroshima</option>
                                                    <option value="Yamaguchi">Yamaguchi</option>
                                                </optgroup>
                                                <optgroup label="Shikoku">
                                                    <option value="Tokushima">Tokushima</option>
                                                    <option value="Kagawa">Kagawa</option>
                                                    <option value="Ehime">Ehime</option>
                                                    <option value="Kōchi">Kōchi</option>
                                                </optgroup>
                                                <optgroup label="Kyūshū">
                                                    <option value="Fukuoka">Fukuoka</option>
                                                    <option value="Saga">Saga</option>
                                                    <option value="Nagasaki">Nagasaki</option>
                                                    <option value="Kumamoto">Kumamoto</option>
                                                    <option value="Miyazaki">Miyazaki</option>
                                                    <option value="Kagoshima">Kagoshima</option>
                                                    <option value="Okinawa">Okinawa</option>

                                                </optgroup>
                                                <optgroup label="Foreign">
                                                    <option value="Foreign">Foreign</option>

                                                </optgroup>
                                            </select><br>
                                            <select id="s9pl" name="s9pl" size="1">
                                                <option value="">----</option>
                                                <option value="">----</option>
                                                <optgroup label="Hokkaidō">
                                                    <option value="Hokkaidō">Hokkaidō</option>
                                                </optgroup>
                                                <optgroup label="Tōhoku">
                                                    <option value="Aomori">Aomori</option>
                                                    <option value="Iwate">Iwate</option>
                                                    <option value="Miyagi">Miyagi</option>
                                                    <option value="Akita">Akita</option>
                                                    <option value="Yamagata">Yamagata</option>
                                                    <option value="Fukushima">Fukushima</option>
                                                </optgroup>
                                                <optgroup label="Kantō">
                                                    <option value="Ibaraki">Ibaraki</option>
                                                    <option value="Tochigi">Tochigi</option>
                                                    <option value="Gunma">Gunma</option>
                                                    <option value="Saitama">Saitama</option>
                                                    <option value="Chiba">Chiba</option>
                                                    <option value="Tōkyō">Tōkyō</option>
                                                    <option value="Kanagawa">Kanagawa</option>
                                                </optgroup>
                                                <optgroup label="Chūbu">
                                                    <option value="Niigata">Niigata</option>
                                                    <option value="Toyama">Toyama</option>
                                                    <option value="Ishikawa">Ishikawa</option>
                                                    <option value="Fukui">Fukui</option>
                                                    <option value="Yamanashi">Yamanashi</option>
                                                    <option value="Nagano">Nagano</option>
                                                    <option value="Gifu">Gifu</option>
                                                    <option value="Shizuoka">Shizuoka</option>
                                                    <option value="Aichi">Aichi</option>
                                                </optgroup>
                                                <optgroup label="Kansai">
                                                    <option value="Mie">Mie</option>
                                                    <option value="Shiga">Shiga</option>
                                                    <option value="Kyōto">Kyōto</option>
                                                    <option value="Ōsaka">Ōsaka</option>
                                                    <option value="Hyōgo">Hyōgo</option>
                                                    <option value="Nara">Nara</option>
                                                    <option value="Wakayama">Wakayama</option>

                                                </optgroup>
                                                <optgroup label="Chūgoku">
                                                    <option value="Tottori">Tottori</option>
                                                    <option value="Shimane">Shimane</option>
                                                    <option value="Okayama">Okayama</option>
                                                    <option value="Hiroshima">Hiroshima</option>
                                                    <option value="Yamaguchi">Yamaguchi</option>
                                                </optgroup>
                                                <optgroup label="Shikoku">
                                                    <option value="Tokushima">Tokushima</option>
                                                    <option value="Kagawa">Kagawa</option>
                                                    <option value="Ehime">Ehime</option>
                                                    <option value="Kōchi">Kōchi</option>
                                                </optgroup>
                                                <optgroup label="Kyūshū">
                                                    <option value="Fukuoka">Fukuoka</option>
                                                    <option value="Saga">Saga</option>
                                                    <option value="Nagasaki">Nagasaki</option>
                                                    <option value="Kumamoto">Kumamoto</option>
                                                    <option value="Miyazaki">Miyazaki</option>
                                                    <option value="Kagoshima">Kagoshima</option>
                                                    <option value="Okinawa">Okinawa</option>

                                                </optgroup>
                                                <optgroup label="Foreign">
                                                    <option value="Foreign">Foreign</option>

                                                </optgroup>
                                            </select><br>
                                            <select id="s6rf" name="s6rf" size="1">
                                                <option value="">----</option>
                                                <optgroup label="Hokkaidō">
                                                    <option value="Hokkaidō">Hokkaidō</option>
                                                </optgroup>
                                                <optgroup label="Tōhoku">
                                                    <option value="Aomori">Aomori</option>
                                                    <option value="Iwate">Iwate</option>
                                                    <option value="Miyagi">Miyagi</option>
                                                    <option value="Akita">Akita</option>
                                                    <option value="Yamagata">Yamagata</option>
                                                    <option value="Fukushima">Fukushima</option>
                                                </optgroup>
                                                <optgroup label="Kantō">
                                                    <option value="Ibaraki">Ibaraki</option>
                                                    <option value="Tochigi">Tochigi</option>
                                                    <option value="Gunma">Gunma</option>
                                                    <option value="Saitama">Saitama</option>
                                                    <option value="Chiba">Chiba</option>
                                                    <option value="Tōkyō">Tōkyō</option>
                                                    <option value="Kanagawa">Kanagawa</option>
                                                </optgroup>
                                                <optgroup label="Chūbu">
                                                    <option value="Niigata">Niigata</option>
                                                    <option value="Toyama">Toyama</option>
                                                    <option value="Ishikawa">Ishikawa</option>
                                                    <option value="Fukui">Fukui</option>
                                                    <option value="Yamanashi">Yamanashi</option>
                                                    <option value="Nagano">Nagano</option>
                                                    <option value="Gifu">Gifu</option>
                                                    <option value="Shizuoka">Shizuoka</option>
                                                    <option value="Aichi">Aichi</option>
                                                </optgroup>
                                                <optgroup label="Kansai">
                                                    <option value="Mie">Mie</option>
                                                    <option value="Shiga">Shiga</option>
                                                    <option value="Kyōto">Kyōto</option>
                                                    <option value="Ōsaka">Ōsaka</option>
                                                    <option value="Hyōgo">Hyōgo</option>
                                                    <option value="Nara">Nara</option>
                                                    <option value="Wakayama">Wakayama</option>

                                                </optgroup>
                                                <optgroup label="Chūgoku">
                                                    <option value="Tottori">Tottori</option>
                                                    <option value="Shimane">Shimane</option>
                                                    <option value="Okayama">Okayama</option>
                                                    <option value="Hiroshima">Hiroshima</option>
                                                    <option value="Yamaguchi">Yamaguchi</option>
                                                </optgroup>
                                                <optgroup label="Shikoku">
                                                    <option value="Tokushima">Tokushima</option>
                                                    <option value="Kagawa">Kagawa</option>
                                                    <option value="Ehime">Ehime</option>
                                                    <option value="Kōchi">Kōchi</option>
                                                </optgroup>
                                                <optgroup label="Kyūshū">
                                                    <option value="Fukuoka">Fukuoka</option>
                                                    <option value="Saga">Saga</option>
                                                    <option value="Nagasaki">Nagasaki</option>
                                                    <option value="Kumamoto">Kumamoto</option>
                                                    <option value="Miyazaki">Miyazaki</option>
                                                    <option value="Kagoshima">Kagoshima</option>
                                                    <option value="Okinawa">Okinawa</option>

                                                </optgroup>
                                                <optgroup label="Foreign">
                                                    <option value="Foreign">Foreign</option>

                                                </optgroup>
                                            </select><br>
                                            <select id="s9oi" name="s9oi" size="1">
                                                <option value="">----</option>
                                                <optgroup label="Hokkaidō">
                                                    <option value="Hokkaidō">Hokkaidō</option>
                                                </optgroup>
                                                <optgroup label="Tōhoku">
                                                    <option value="Aomori">Aomori</option>
                                                    <option value="Iwate">Iwate</option>
                                                    <option value="Miyagi">Miyagi</option>
                                                    <option value="Akita">Akita</option>
                                                    <option value="Yamagata">Yamagata</option>
                                                    <option value="Fukushima">Fukushima</option>
                                                </optgroup>
                                                <optgroup label="Kantō">
                                                    <option value="Ibaraki">Ibaraki</option>
                                                    <option value="Tochigi">Tochigi</option>
                                                    <option value="Gunma">Gunma</option>
                                                    <option value="Saitama">Saitama</option>
                                                    <option value="Chiba">Chiba</option>
                                                    <option value="Tōkyō">Tōkyō</option>
                                                    <option value="Kanagawa">Kanagawa</option>
                                                </optgroup>
                                                <optgroup label="Chūbu">
                                                    <option value="Niigata">Niigata</option>
                                                    <option value="Toyama">Toyama</option>
                                                    <option value="Ishikawa">Ishikawa</option>
                                                    <option value="Fukui">Fukui</option>
                                                    <option value="Yamanashi">Yamanashi</option>
                                                    <option value="Nagano">Nagano</option>
                                                    <option value="Gifu">Gifu</option>
                                                    <option value="Shizuoka">Shizuoka</option>
                                                    <option value="Aichi">Aichi</option>
                                                </optgroup>
                                                <optgroup label="Kansai">
                                                    <option value="Mie">Mie</option>
                                                    <option value="Shiga">Shiga</option>
                                                    <option value="Kyōto">Kyōto</option>
                                                    <option value="Ōsaka">Ōsaka</option>
                                                    <option value="Hyōgo">Hyōgo</option>
                                                    <option value="Nara">Nara</option>
                                                    <option value="Wakayama">Wakayama</option>

                                                </optgroup>
                                                <optgroup label="Chūgoku">
                                                    <option value="Tottori">Tottori</option>
                                                    <option value="Shimane">Shimane</option>
                                                    <option value="Okayama">Okayama</option>
                                                    <option value="Hiroshima">Hiroshima</option>
                                                    <option value="Yamaguchi">Yamaguchi</option>
                                                </optgroup>
                                                <optgroup label="Shikoku">
                                                    <option value="Tokushima">Tokushima</option>
                                                    <option value="Kagawa">Kagawa</option>
                                                    <option value="Ehime">Ehime</option>
                                                    <option value="Kōchi">Kōchi</option>
                                                </optgroup>
                                                <optgroup label="Kyūshū">
                                                    <option value="Fukuoka">Fukuoka</option>
                                                    <option value="Saga">Saga</option>
                                                    <option value="Nagasaki">Nagasaki</option>
                                                    <option value="Kumamoto">Kumamoto</option>
                                                    <option value="Miyazaki">Miyazaki</option>
                                                    <option value="Kagoshima">Kagoshima</option>
                                                    <option value="Okinawa">Okinawa</option>

                                                </optgroup>
                                                <optgroup label="Foreign">
                                                    <option value="Foreign">Foreign</option>

                                                </optgroup>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Moving means at guidance<em class="required">※</em></th>
                                        <td>

                                    <span id="c9lr" class="checkbox">
                                      <label for="c9lr0"><input type="checkbox" id="c9lr0" name="c9lr[]"
                                                                value="Private car">Private car</label>
                                      <label for="c9lr1"><input type="checkbox" id="c9lr1" name="c9lr[]"
                                                                value="Car (rental car)">Car (rental car)</label>
                                      <label for="c9lr2"><input type="checkbox" id="c9lr2" name="c9lr[]"
                                                                value="Electric train">Electric train</label>
                                      <label for="c9lr3"><input type="checkbox" id="c9lr3" name="c9lr[]" value="bus">bus</label>
                                      <label for="c9lr4"><input type="checkbox" id="c9lr4" name="c9lr[]" value="Walk">Walk</label>
                                      <label for="c9lr5"><input type="checkbox" id="c9lr5" name="c9lr[]" value="Other">Other</label>
                                    </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Current occupation</th>
                                        <td>

                                            <input type="text" id="t4qr" name="t4qr" size="60" value="" maxlength="300">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Recommended spot ①<em class="required">※</em></th>
                                        <td>
                                            <input type="file" id="f6et" name="f6et" size="60" required><br>
                                            <span class="aside">Spot name ①</span><br>
                                            <input type="text" id="t8kg" name="t8kg" size="60" value="" maxlength="300"
                                                   required><br>
                                            <input type="file" id="f6rs" name="f6rs" size="60"><br>
                                            <span class="aside">Spot name ②</span><br>
                                            <input type="text" id="t5ue" name="t5ue" size="60" value="" maxlength="300"><br>
                                            <input type="file" id="f6hl" name="f6hl" size="60"><br>
                                            <span class="aside">Spot name ③</span><br>
                                            <input type="text" id="t5wp" name="t5wp" size="60" value="" maxlength="300">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Recommended gourmet<em class="required">※</em></th>
                                        <td>
                                        <span
                                            class="aside">Example) ○○ ramen at ○ ○ store, ○ ○ rice on ○○ store, etc.</span><br>
                                            <input type="file" id="f5ue" name="f5ue" size="60" required><br>
                                            <span class="aside">Example) Recommended gourmet name / ○ ○ ramen, ○ ○ bowl of ○ ○ store, etc.</span><br>
                                            <input type="text" id="t4gt" name="t4gt" size="60" required value=""
                                                   maxlength="300"><br>
                                            <input type="file" id="f5vi" name="f5vi" size="60"><br>
                                            <span class="aside">Example) Recommended gourmet name / ○ ○ ramen, ○ ○ bowl of ○ ○ store, etc.</span><br>
                                            <input type="text" id="t0zf" name="t0zf" size="60" value="" maxlength="300"><br>
                                            <input type="file" id="f9gp" name="f9gp" size="60"><br>
                                            <span class="aside">Example) Recommended gourmet name / ○ ○ ramen, ○ ○ bowl of ○ ○ store, etc.</span><br>
                                            <input type="text" id="t8ia" name="t8ia" size="60" value="" maxlength="300">
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <p class="submit_bt_wrap">
                                    <input type="reset" value="Redo"><input type="submit"
                                                                            value="To confirmation screen">
                                </p>
                            </fieldset>
                        </form>

                    <?php endif; ?>
                    <p class="back">
                        <a href="#" onclick="history.back();return false;">← Back</a><br/>
                        <a href="#">↑ To the top of the page</a>
                    </p>
                </div>
                <!-- end mainform -->


            </div>
            <!-- end container -->

        </div>

    </div>
    </div>
    </div>
    <p style="margin:0">
        <script type="text/javascript">
            $(window).ready(function () {
                $("#t3gq_guest").jpostal({
                    postcode: [
                        "#t3gq_guest",
                        "#t0sz_guest"
                    ],
                    address: {
                        "#s5bo_guest": "%3",
                        "#t4ii_guest": "%4",
                        "#t0pi_guest": "%5",
                        '#address1_kana': '%8',
                        '#address2_kana': '%9',
                        '#address3_kana': '%10'
                    }
                });
//     $('input[type="submit"]').on("click",function(){
//            $( 'input[name="f6et"]' ).val();
//            $( 'input[name="t8kg"]' ).val();

//     });
            });
        </script>
        <script type="text/javascript">
            $(window).ready(function () {
                $("#t3gq").jpostal({
                    postcode: [
                        "#t3gq",
                        "#t0sz"
                    ],
                    address: {
                        "#s5bo": "%3",
                        "#t4ii": "%4",
                        "#t0pi": "%5",
                        '#address1_kana': '%8',
                        '#address2_kana': '%9',
                        '#address3_kana': '%10'
                    }
                });
            });
        </script>
    </p>
    <style>
        #form-host {
            margin-bottom: 150px;
        }

        .btn-form-host button {
            margin-left: 20px;
        }

        .btn-form-host {
            position: absolute;
            width: 100%;
            bottom: -70px;
        }

        .post-code .last {
            padding-right: 0;
            padding-left: 5px;
        }

        .post-code .first {
            padding-left: 0;
            padding-right: 5px;
        }

        .bubble-last {
            background: #fff !important;
        }

        .num-step-last {
            color: #2c944a !important;
            position: relative;
            z-index: 1;
            background: #fff;
            width: 20px;
            border-radius: 34px;
        }

        .title-step {
            font-size: 13px;
            color: #fff;
            text-transform: initial;
            display: block;
            padding: 5px 0 0;
        }

        .progress-indicator > li.completed .bubble, .progress-indicator > li.completed .bubble:after, .progress-indicator > li.completed .bubble:before {
            background: red;
        }

        #step {
            background: #2c944a;
            padding: 10px 0 10px 0;
        }

        .title-info {
            color: red;
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 20px;
            margin-top: 0px;
        }

        .info-host {
            border: 5px solid #fff;
            padding: 10px;
            margin-bottom: 30px;
        }

        .info-host p:first-child {
            font-size: 15px;
            border-right: 5px solid #fff;
        }

        .info-host p {
            margin-bottom: 0 !important;
        }

        #form-host {
            background: #e4f0f0;
            padding: 20px;
        }

        .btn-form-host {
            background: none;
        }

        .inner-host {
            text-align: center;
        }

        .form-horizontal .control-label {
            text-align: left !important;
            padding-top: 0;
        }

        .btn-cancel-host {
            color: #fff;
            background: #0d4886;
        }

        .btn-cancel-host:hover {
            color: rgba(255, 248, 248, 0.75);
            background: #1e67b3;
        }

        .btn-sumit-host {
            color: #fff;
            background: #820f0f;
        }

        .btn-sumit-host:hover {
            color: rgba(255, 248, 248, 0.75);
            background: #9a3535;
        }

        .content-form-host .border-bottom {
            border: none;
            border-bottom: 1px solid #cccccc;
            box-shadow: none;
            border-radius: 0px;
        }

        .content-form-host input {
            background: transparent;
        }

        .content-form-host .form-group {
            margin-bottom: 15px;
        }

        .num-step {
            color: #fff;
            margin-top: 4px;
            font-size: 12px;
            display: inline-block;
            position: relative;
            z-index: 1;
            font-weight: bold;
        }

        .progress-indicator {
            margin-bottom: -5px;
        }

        .progress-indicator.custom-complex {
            background-color: #f1f1f1;
            padding: 10px 5px;
            border: 1px solid #ddd;
            border-radius: 10px;
        }

        .progress-indicator.custom-complex > li .bubble {
            height: 12px;
            width: 99%;
            border-radius: 2px;
            box-shadow: inset -5px 0 12px rgba(0, 0, 0, 0.2);
        }

        .progress-indicator.custom-complex > li .bubble:before,
        .progress-indicator.custom-complex > li .bubble:after {
            display: none;
        }

        /* Demo for vertical bars */

        .progress-indicator.stepped.stacked {
            width: 48%;
            display: inline-block;
        }

        .progress-indicator.stepped.stacked > li {
            height: 150px;
        }

        .progress-indicator.stepped.stacked > li .bubble {
            padding: 0.1em;
        }

        .progress-indicator.stepped.stacked > li:first-of-type .bubble {
            padding: 0.5em;
        }

        .progress-indicator.stepped.stacked > li:last-of-type .bubble {
            padding: 0em;
        }

        /* Nocenter */

        .progress-indicator.nocenter.stacked > li {
            min-height: 100px;
        }

        .progress-indicator.nocenter.stacked > li span {
            display: block;
        }

        /* Demo for Timeline vertical bars */

        #timeline-speaker-example {
            background-color: #2b4a6d;
            color: white;
            padding: 1em 2em;
            text-align: center;
            border-radius: 10px;
        }

        #timeline-speaker-example .progress-indicator {
            width: 100%;
        }

        #timeline-speaker-example .bubble {
            padding: 0;
        }

        #timeline-speaker-example .progress-indicator > li {
            color: white;
        }

        #timeline-speaker-example .time {
            position: relative;
            left: -80px;
            top: 30px;
            font-size: 130%;
            text-align: right;
            opacity: 0.6;
            font-weight: 100;
        }

        #timeline-speaker-example .current-time .time {
            font-size: 170%;
            opacity: 1;
        }

        #timeline-speaker-example .stacked-text {
            top: -37px;
            left: -50px;
        }

        #timeline-speaker-example .subdued {
            font-size: 10px;
            display: block;
        }

        #timeline-speaker-example > li:hover {
            color: #ff3d54;
        }

        #timeline-speaker-example > li:hover .bubble,
        #timeline-speaker-example > li:hover .bubble:before,
        #timeline-speaker-example > li:hover .bubble:after {
            background-color: #ff3d54;
        }

        #timeline-speaker-example .current-time .sub-info {
            font-size: 60%;
            line-height: 0.2em;
            text-transform: capitalize;
            color: #6988be;
        }

        .progress-indicator > li .bubble {
            width: 25px;
            height: 25px;
        }

        .num-step-last {
            width: 25px;
        }

        .num-step {
            font-size: 16px;
            line-height: 18px;
        }

        .progress-indicator > li .bubble:after, .progress-indicator > li .bubble:before {
            top: 11px;
        }

        .completed > br {
            display: none;
        }

        @media handheld, screen and (max-width: 400px) {
            .container {
                margin: 0;
                width: 100%;
            }

            .progress-indicator.stacked {
                display: block;
                width: 100%;
            }

            .progress-indicator.stacked > li {
                height: 80px;
            }
        }

        .add p {
            display: none;
        }

        .add .form-group {
            margin-bottom: 8px;
        }

        .add .col-sm-4, .add .col-sm-8, .add .col-sm-12 {
            padding: 0;
            line-height: 24px;
        }

        .add .post-code input, .add .city input {
            height: 22px;
            border-radius: 0px;
            padding: 0px 5px 2px;
        }

        label.col-sm-12 {
            line-height: 15px;
        }

        .add .city input {

        }

        .text-danger {
            color: #f22420;
        }

        .submit_bt_wrap {
            text-align: center;
            margin-top: 20px;
        }
    </style>
<?php get_footer(); ?>