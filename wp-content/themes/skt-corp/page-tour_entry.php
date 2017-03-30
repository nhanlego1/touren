<?php get_header(); ?>
    <div class="header1" style="height:300px;background:url(../img/bannerpage3.jpg);background-size: cover;">
        <div class="title-top">
            <h2>TOUR ENTRY FORM</h2>
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
                            <h2 class="text-center"><a href="/">TOUR ENTRY FORM</a></h2>
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

                        $data_post = array(
                            'name_guest' => $_POST['t3di_guest'],
                            'paypal_account' => $_POST['paypal_account'],
                            'phone_guest' => $_POST['t0fl_guest'],
                            'email_guest' => $_POST['t9hg_guest'],
                            'code1_guest' => $_POST['t3gq_guest'],
                            'code2_guest' => $_POST['t0sz_guest'],
                            'quan_guest' => $_POST['s5bo_guest'],
                            'tinh_guest' => $_POST['t4ii_guest'],
                            'add_guest' => $_POST['t0pi_guest'],
                            'name_tour' => $_POST['t5nm'],
                            'topic_tour' => $_POST['c5kv'],
                            'outline_tour' => $_POST['t0ym'],
                            'schedule_tour' => $_POST['t1lr'],
                            'start_tour' => $_POST['t0gb'],
                            'age_taget' => $_POST['t6en'],
                            'price_tour' => $_POST['t8sb'],
                            'include_tour' => $_POST['t3ic'],
                            'time_need' => $_POST['t2xk'],
                            'language_tour' => $_POST['t6ki'],
                            'food' => $_POST['t5gn'],
                            'pickup' => $_POST['t0fd'],
                            'holidays' => $_POST['t0mi'],
                            'minimum_performers' => $_POST['t5lx'],
                            'notes' => $_POST['t7ex'],
                            'remarks' => $_POST['t4ti'],
                            'inquiries' => $_POST['t0zz'],
                            'person_charge' => $_POST['t8ro'],
                            'zone1' => $_POST['t5kf'],
                            'zone2' => $_POST['t3hz'],
                            'zone3' => $_POST['s0sx'],
                            'zone4' => $_POST['t4bf'],
                            'zone5' => $_POST['t1yt'],
                            'phone_number' => $_POST['t4my'],
                            'mail_address' => $_POST['t0qm'],
                            'phone_number2' => $_POST['t4cf'],
                            'file_zone1' => $_POST['file_f9og'],
                            'file_zone2' => $_POST['file_f9oe'],
                            'file_zone3' => $_POST['file_f5iq'],
                            'file_zone4' => $_POST['file_f6ta'],
                            'file_zone5' => $_POST['file_f7cv']
                        );
                        global $wpdb;
                        $wpdb->insert('tour_reg', $data_post);
                        $lastInsertId = $wpdb->insert_id;
                        ?>

                        <?php endif; ?>
                    <?php
                    if (isset($_POST['to_step_2']) and $_POST['to_step_2'] == 'yes'):?><?php
                        $c5kv = '';
                        foreach ($_POST['c5kv'] as $key => $value) {
                            if ($value != '') $c5kv .= $value . " ";
                        }
                        require_once(ABSPATH . 'wp-admin/includes/image.php');
                        require_once(ABSPATH . 'wp-admin/includes/file.php');
                        require_once(ABSPATH . 'wp-admin/includes/media.php');

                        if ($_FILES['f9og']['name'] != '') $attachment_id = media_handle_upload('f9og', 0); else $attachment_id = null;
                        if ($_FILES['f9oe']['name'] != '') $attachment_id_1 = media_handle_upload('f9oe', 0); else $attachment_id_1 = null;
                        if ($_FILES['f5iq']['name'] != '') $attachment_id_2 = media_handle_upload('f5iq', 0); else $attachment_id_2 = null;
                        if ($_FILES['f6ta']['name'] != '') $attachment_id_3 = media_handle_upload('f6ta', 0); else $attachment_id_3 = null;
                        if ($_FILES['f7cv']['name'] != '') $attachment_id_4 = media_handle_upload('f7cv', 0); else $attachment_id_4 = null;

                        ?>
                        <form action="<?php echo esc_url(home_url('/')); ?>tour_entry/" method="post">
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
                                <input type="hidden" name="t5nm" value="<?php echo $_POST['t5nm']; ?>">
                                <input type="hidden" name="paypal_account" value="<?php echo $_POST['paypal_account']; ?>">
                                <input type="hidden" name="c5kv" value="<?php echo $c5kv; ?>">
                                <input type="hidden" name="t0ym" value="<?php echo $_POST['t0ym']; ?>">
                                <input type="hidden" name="t1lr" value="<?php echo $_POST['t1lr']; ?>">
                                <input type="hidden" name="t0gb" value="<?php echo $_POST['t0gb']; ?>">
                                <input type="hidden" name="t6en" value="<?php echo $_POST['t6en']; ?>">
                                <input type="hidden" name="t8sb" value="<?php echo $_POST['t8sb']; ?>">
                                <input type="hidden" name="t3ic" value="<?php echo $_POST['t3ic']; ?>">
                                <input type="hidden" name="t2xk" value="<?php echo $_POST['t2xk']; ?>">
                                <input type="hidden" name="t6ki" value="<?php echo $_POST['t6ki']; ?>">
                                <input type="hidden" name="t5gn" value="<?php echo $_POST['t5gn']; ?>">
                                <input type="hidden" name="t0fd" value="<?php echo $_POST['t0fd']; ?>">
                                <input type="hidden" name="t0mi" value="<?php echo $_POST['t0mi']; ?>">
                                <input type="hidden" name="t5lx" value="<?php echo $_POST['t5lx']; ?>">
                                <input type="hidden" name="t7ex" value="<?php echo $_POST['t7ex']; ?>">
                                <input type="hidden" name="t4ti" value="<?php echo $_POST['t4ti']; ?>">
                                <input type="hidden" name="t0zz" value="<?php echo $_POST['t0zz']; ?>">
                                <input type="hidden" name="t8ro" value="<?php echo $_POST['t8ro']; ?>">
                                <input type="hidden" name="t5kf" value="<?php echo $_POST['t5kf']; ?>">
                                <input type="hidden" name="t3hz" value="<?php echo $_POST['t3hz']; ?>">
                                <input type="hidden" name="s0sx" value="<?php echo $_POST['s0sx']; ?>">
                                <input type="hidden" name="t4bf" value="<?php echo $_POST['t4bf']; ?>">
                                <input type="hidden" name="t1yt" value="<?php echo $_POST['t1yt']; ?>">
                                <input type="hidden" name="t4my" value="<?php echo $_POST['t4my']; ?>">
                                <input type="hidden" name="t0qm" value="<?php echo $_POST['t0qm']; ?>">
                                <input type="hidden" name="t4cf" value="<?php echo $_POST['t4cf']; ?>">


                                <input type="hidden" name="file_f9og" value="<?php echo $attachment_id; ?>">
                                <input type="hidden" name="file_f9oe" value="<?php echo $attachment_id_1; ?>">
                                <input type="hidden" name="file_f5iq" value="<?php echo $attachment_id_2; ?>">
                                <input type="hidden" name="file_f6ta" value="<?php echo $attachment_id_3; ?>">
                                <input type="hidden" name="file_f7cv" value="<?php echo $attachment_id_4; ?>">
                                <br>
                                <table summary="Confirmation contents">
                                    <tbody>
                                    <tr>
                                        <th>Tour title<em class="required">※</em></th>
                                        <td>
                                            <?php echo $_POST['t5nm']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Paypal Account<em class="required">※</em></th>
                                        <td>
                                            <?php echo $_POST['paypal_account']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Tour theme<em class="required">※</em></th>
                                        <td>
                                            <?php echo $c5kv; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Tour outline · PR<em class="required">※</em></th>
                                        <td>
                                            <?php echo $_POST['t0ym']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Tour schedule image<em class="required">※</em></th>
                                        <td>
                                            <?php echo $_POST['t1lr']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Point of departure<em class="required">※</em></th>
                                        <td>
                                            <?php echo $_POST['t0gb']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Target age<em class="required">※</em></th>
                                        <td>
                                            <?php echo $_POST['t6en']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Tour fee<em class="required">※</em></th>
                                        <td>
                                            <?php echo $_POST['t8sb']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Included in price<em class="required">※</em></th>
                                        <td>
                                            <?php echo $_POST['t3ic']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Time required<em class="required">※</em></th>
                                        <td>
                                            <?php echo $_POST['t2xk']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Supported languages<em class="required">※</em></th>
                                        <td>
                                            <?php echo $_POST['t6ki']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Presence of meals<em class="required">※</em></th>
                                        <td>
                                            <?php echo $_POST['t5gn']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Pick up or not<em class="required">※</em></th>
                                        <td>
                                            <?php echo $_POST['t0fd']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Holidays<em class="required">※</em></th>
                                        <td>
                                            <?php echo $_POST['t0mi']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Minimum performers<em class="required">※</em></th>
                                        <td>
                                            <?php echo $_POST['t5lx']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Notes<em class="required">※</em></th>
                                        <td>
                                            <?php echo $_POST['t7ex']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Remarks<em class="required">※</em></th>
                                        <td>
                                            <?php echo $_POST['t4ti']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Inquiries
                                            <Company name
                                            / Organization name><em class="required">※</em></th>
                                        <td>
                                            <?php echo $_POST['t0zz']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Name of person in charge<em class="required">※</em></th>
                                        <td>
                                            <?php echo $_POST['t8ro']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Street address<em class="required">※</em></th>
                                        <td>
                                            <?php echo $_POST['t5kf']; ?>-<?php echo $_POST['t3hz']; ?><br>
                                            <?php echo $_POST['s0sx']; ?><br>
                                            <?php echo $_POST['t4bf']; ?><br>
                                            <?php echo $_POST['t1yt']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>phone number<em class="required">※</em></th>
                                        <td>
                                            <?php echo $_POST['t4my']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>mail address<em class="required">※</em></th>
                                        <td>
                                            <?php echo $_POST['t0qm']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Cellphone number<em class="required">※</em></th>
                                        <td>
                                            <?php echo $_POST['t4cf']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Image photo</th>
                                        <td>
                                            <?php if ($attachment_id != null) echo '<img src="' . wp_get_attachment_image_src($attachment_id, 'thumbnail')[0] . '"/>'; ?>
                                            <br>
                                            <?php if ($attachment_id_1 != null) echo '<img src="' . wp_get_attachment_image_src($attachment_id_1, 'thumbnail')[0] . '"/>'; ?>
                                            <br>
                                            <?php if ($attachment_id_2 != null) echo '<img src="' . wp_get_attachment_image_src($attachment_id_2, 'thumbnail')[0] . '"/>'; ?>
                                            <br>
                                            <?php if ($attachment_id_3 != null) echo '<img src="' . wp_get_attachment_image_src($attachment_id_3, 'thumbnail')[0] . '"/>'; ?>
                                            <br>
                                            <?php if ($attachment_id_4 != null) echo '<img src="' . wp_get_attachment_image_src($attachment_id_4, 'thumbnail')[0] . '"/>'; ?>
                                        </td>
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


                        <form action="<?php echo esc_url(home_url('/')); ?>tour_entry/" method="post"
                              enctype="multipart/form-data" accept-charset="utf-8">
                            <input type="hidden" name="to_step_2" value="yes">
                            <fieldset>
                                <!--<legend>Tour entry...</legend>-->
                                <table>
                                    <tbody>
                                    <tr>
                                        <th>Tour title<em class="required">※</em></th>
                                        <td>

                                            <input type="text" id="t5nm" required name="t5nm" size="60" value=""
                                                   maxlength="300">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Paypal account<em class="required">※</em></th>
                                        <td>

                                            <input type="text" id="t6nm" required name="paypal_account" size="60"
                                                   value=""
                                                   maxlength="300">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Tour theme<em class="required">※</em></th>
                                        <td>
                        
                        <span id="c5kv" class="checkbox">
                            <label for="c5kv0"><input type="checkbox" id="c5kv0" name="c5kv[]"
                                                      value="Gourmet">Gourmet</label>
                            <label for="c5kv1"><input type="checkbox" id="c5kv1" name="c5kv[]"
                                                      value="Watching Sports · Experience">Watching Sports · Experience</label>
                            <label for="c5kv2"><input type="checkbox" id="c5kv2" name="c5kv[]" value="Sightseeing">Sightseeing</label>
                            <label for="c5kv3"><input type="checkbox" id="c5kv3" name="c5kv[]" value="shopping">shopping</label>
                            <label for="c5kv4"><input type="checkbox" id="c5kv4" name="c5kv[]"
                                                      value="Show · Entertainment">Show · Entertainment</label>
                            <label for="c5kv5"><input type="checkbox" id="c5kv5" name="c5kv[]" value="amusement">amusement</label>
                            <label for="c5kv6"><input type="checkbox" id="c5kv6" name="c5kv[]" value="Experience">Experience</label>
                        </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Tour outline· PR<em class="required">※</em></th>
                                        <td>

                                            <textarea id="t0ym" required name="t0ym" cols="60" rows="6"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Tour schedule image<em class="required">※</em></th>
                                        <td>

                                            <textarea id="t1lr" name="t1lr" required cols="60" rows="6"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Point of departure<em class="required">※</em></th>
                                        <td>

                                            <input type="text" id="t0gb" required name="t0gb" size="60" value=""
                                                   maxlength="300">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Target age<em class="required">※</em></th>
                                        <td>

                                            <input type="text" id="t6en" required name="t6en" size="60" value=""
                                                   maxlength="300">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Tour fee<em class="required">※</em></th>
                                        <td>

                                            <input type="text" id="t8sb" required name="t8sb" size="60" value=""
                                                   maxlength="300">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Included in price<em class="required">※</em></th>
                                        <td>

                                            <textarea id="t3ic" required name="t3ic" cols="60" rows="6"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Time required<em class="required">※</em></th>
                                        <td>

                                            <input type="text" id="t2xk" required name="t2xk" size="60" value=""
                                                   maxlength="300">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Supported languages<em class="required">※</em></th>
                                        <td>

                                            <input type="text" id="t6ki" required name="t6ki" size="60" value=""
                                                   maxlength="300">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Presence of meals<em class="required">※</em></th>
                                        <td>

                                            <input type="text" id="t5gn" required name="t5gn" size="60" value=""
                                                   maxlength="300">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Pick up or not<em class="required">※</em></th>
                                        <td>

                                            <input type="text" id="t0fd" required name="t0fd" size="60" value=""
                                                   maxlength="300">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Holidays<em class="required">※</em></th>
                                        <td>

                                            <input type="text" id="t0mi" required name="t0mi" size="60" value=""
                                                   maxlength="300">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Minimum performers<em class="required">※</em></th>
                                        <td>

                                            <input type="text" id="t5lx" required name="t5lx" size="60" value=""
                                                   maxlength="300">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Notes<em class="required">※</em></th>
                                        <td>

                                            <textarea id="t7ex" name="t7ex" required cols="60" rows="6"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Remarks<em class="required">※</em></th>
                                        <td>

                                            <textarea id="t4ti" name="t4ti" required cols="60" rows="6"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Inquiries
                                            <Company name
                                            / Organization name><em class="required">※</em></th>
                                        <td>

                                            <input type="text" id="t0zz" required name="t0zz" size="60" value=""
                                                   maxlength="300">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Name of person in charge<em class="required">※</em></th>
                                        <td>

                                            <input type="text" id="t8ro" required name="t8ro" size="60" value=""
                                                   maxlength="300">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Street address<em class="required">※</em></th>
                                        <td>
                                            <span class="lside">Postal code</span><input type="number" id="t5kf"
                                                                                         name="t5kf"
                                                                                         size="3" style="height: 25px;"
                                                                                         value="" required maxlength="3"
                                                                                         oninput="maxLengthCheck3(this)"><span
                                                class="rside">-</span><input type="number" id="t3hz"
                                                                             style="height: 25px;"
                                                                             name="t3hz" size="4" value="" required
                                                                             maxlength="4"
                                                                             oninput="maxLengthCheck4(this)"><br>
                                            <span class="lside">Prefectures</span><select id="s0sx" required name="s0sx"
                                                                                          size="1">
                                                <option value="">----</option>
                                                <optgroup label="北海道">
                                                    <option value="北海道">北海道</option>
                                                </optgroup>
                                                <optgroup label="東北">
                                                    <option value="青森県">青森県</option>
                                                    <option value="岩手県">岩手県</option>
                                                    <option value="宮城県">宮城県</option>
                                                    <option value="秋田県">秋田県</option>
                                                    <option value="山形県">山形県</option>
                                                    <option value="福島県">福島県</option>
                                                </optgroup>
                                                <optgroup label="関東">
                                                    <option value="茨城県">茨城県</option>
                                                    <option value="栃木県">栃木県</option>
                                                    <option value="群馬県">群馬県</option>
                                                    <option value="埼玉県">埼玉県</option>
                                                    <option value="千葉県">千葉県</option>
                                                    <option value="東京都">東京都</option>
                                                    <option value="神奈川県">神奈川県</option>
                                                    <option value="山梨県">山梨県</option>
                                                </optgroup>
                                                <optgroup label="信越">
                                                    <option value="長野県">長野県</option>
                                                    <option value="新潟県">新潟県</option>
                                                </optgroup>
                                                <optgroup label="北陸">
                                                    <option value="富山県">富山県</option>
                                                    <option value="石川県">石川県</option>
                                                    <option value="福井県">福井県</option>
                                                </optgroup>
                                                <optgroup label="東海">
                                                    <option value="岐阜県">岐阜県</option>
                                                    <option value="静岡県">静岡県</option>
                                                    <option value="愛知県">愛知県</option>
                                                    <option value="三重県">三重県</option>
                                                </optgroup>
                                                <optgroup label="近畿">
                                                    <option value="滋賀県">滋賀県</option>
                                                    <option value="京都府">京都府</option>
                                                    <option value="大阪府">大阪府</option>
                                                    <option value="兵庫県">兵庫県</option>
                                                    <option value="奈良県">奈良県</option>
                                                    <option value="和歌山県">和歌山県</option>
                                                </optgroup>
                                                <optgroup label="中国">
                                                    <option value="鳥取県">鳥取県</option>
                                                    <option value="島根県">島根県</option>
                                                    <option value="岡山県">岡山県</option>
                                                    <option value="広島県">広島県</option>
                                                    <option value="山口県">山口県</option>
                                                </optgroup>
                                                <optgroup label="四国">
                                                    <option value="徳島県">徳島県</option>
                                                    <option value="香川県">香川県</option>
                                                    <option value="愛媛県">愛媛県</option>
                                                    <option value="高知県">高知県</option>
                                                </optgroup>
                                                <optgroup label="九州">
                                                    <option value="福岡県">福岡県</option>
                                                    <option value="佐賀県">佐賀県</option>
                                                    <option value="長崎県">長崎県</option>
                                                    <option value="熊本県">熊本県</option>
                                                    <option value="大分県">大分県</option>
                                                    <option value="宮崎県">宮崎県</option>
                                                    <option value="鹿児島県">鹿児島県</option>
                                                </optgroup>
                                                <optgroup label="沖縄県">
                                                    <option value="沖縄県">沖縄県</option>
                                                </optgroup>
                                                <optgroup label="海外">
                                                    <option value="海外">海外</option>
                                                </optgroup>
                                            </select><br>
                                            <span class="lside">Municipality</span><input type="text" required id="t4bf"
                                                                                          name="t4bf" size="60" value=""
                                                                                          maxlength="300"><br>
                                            <span class="lside">Street address building</span><input type="text"
                                                                                                     id="t1yt"
                                                                                                     name="t1yt"
                                                                                                     size="60"
                                                                                                     value="" required
                                                                                                     maxlength="300">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>phone number<em class="required">※</em></th>
                                        <td>

                                            <input type="number" required id="t4my" name="t4my" size="60" value=""
                                                   oninput="maxLengthCheck12(this)" maxlength="12"><br>
                                            <span class="bside">No hyphen required</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>mail address<em class="required">※</em></th>
                                        <td>

                                            <input type="text" required id="t0qm" name="t0qm" size="60" value=""
                                                   maxlength="300"><br>
                                            <span class="bside">example： info@example.com</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Cellphone number<em class="required">※</em></th>
                                        <td>
                                            <input type="number" required style="height: 25px;" id="t4cf" name="t4cf"
                                                   size="60" value="" maxlength="11"
                                                   oninput="maxLengthCheck12(this)"><br>
                                            <span class="bside">example： 09011112222 (No hyphen required)</span>
                                        </td>
                                    </tr>
                                    <script>function maxLengthCheck12(object) {
                                            if (object.value.length > object.maxLength)
                                                object.value = object.value.slice(0, object.maxLength)
                                        }
                                        function maxLengthCheck3(object) {
                                            if (object.value.length > object.maxLength)
                                                object.value = object.value.slice(0, object.maxLength)
                                        }
                                        function maxLengthCheck4(object) {
                                            if (object.value.length > object.maxLength)
                                                object.value = object.value.slice(0, object.maxLength)
                                        }
                                    </script>
                                    <tr>
                                        <th>Image photo</th>
                                        <td>
                                            <input type="file" id="f9og" name="f9og" size="60"><br>
                                            <input type="file" id="f9oe" name="f9oe" size="60"><br>
                                            <input type="file" id="f5iq" name="f5iq" size="60"><br>
                                            <input type="file" id="f6ta" name="f6ta" size="60"><br>
                                            <input type="file" id="f7cv" name="f7cv" size="60">
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
            });
        </script>
        <script type="text/javascript">
            $(window).ready(function () {
                $("#t5kf").jpostal({
                    postcode: [
                        "#t5kf",
                        "#t3hz"
                    ],
                    address: {
                        "#s0sx": "%3",
                        "#t4bf": "%4",
                        "#t1yt": "%5",
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