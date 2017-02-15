<?php
/**
 * Plugin Name: Easy Options Page
 * Plugin URI: http://wordpress.org/plugins/easy-options-page
 * Description: Creates Options Pages in less than 2 minutes. And with shortcodes to display the options content
 * Version: 1.5
 * Author: Joaquín Ruiz
 * Author URI: http://jokiruiz.com
 * License: GPLv2
 */


// Add settings link on plugin page
function your_plugin_easy_options_page_settings_link($links) {
    $settings_link = '<a href="options-general.php?page=options_page_plugin.php">Settings</a>';
    array_push($links, $settings_link);
    return $links;
}

$plugin = plugin_basename(__FILE__);
add_filter("plugin_action_links_$plugin", 'your_plugin_easy_options_page_settings_link' );

// create custom plugin settings menu
add_action('admin_menu', 'create_theme_options_page');
function create_theme_options_page() {
    add_options_page('Easy Options Page', 'Easy Options Page', 'administrator', 'options_page_plugin', 'build_options_page','dashicons-wordpress');
}

function build_options_page() {
    ?>
    <style>

        .easy-wysiwyg-style-head {
            color: #cdbfe3;
            text-shadow: 0 1px 0 rgba(0,0,0,.1);
            background-color: #6f5499;
        }
        .easy-wysiwyg-style-head h1 {
            color: #ffffff !important;
            font-family: HelveticaNeue, 'Helvetica Neue', Helvetica, Arial, Verdana, sans-serif;
        }
        .about-wrap .wp-badge {
            right: 15px;
            background-color: transparent;
            box-shadow: none;
        }
        .about-text {
            color: #cdbfe3 !important;
        }

        .guidelines {
            margin-top: 15px;
            background: #FFFFFF;
            border: 1px solid #E5E5E5;
            position: relative;
            box-shadow: 0 1px 1px rgba(0, 0, 0, 0.04);
            padding: 5px 15px;
        }


        .easy-more {
            margin-top: 15px;
            background: #FFFFFF;
            border: 1px solid #E5E5E5;
            position: relative;
            box-shadow: 0 1px 1px rgba(0, 0, 0, 0.04);
            padding: 5px 15px;
        }
        .easy-plugins-box {
            background-color: #EEEFFF;
            border: 1px solid #E5E5E5;
            border-top: 0 none;
            position: relative;
            box-shadow: 0 1px 1px rgba(0, 0, 0, 0.04);
            padding: 15px;
        }
        .easy-bottom {
            background-color: #52ACCC;
            color: #FFFFFF;
            border: 1px solid #FFFFFF;
            border-top: 0 none;
            position: relative;
            box-shadow: 0 1px 1px rgba(0, 0, 0, 0.04);
            padding: 5px 15px;
        }
        .easy-bottom a {
            color: #FFFFFF;
        }
        .border {
            border: 1px solid #E5E5E5;
            box-shadow: 0 1px 1px rgba(0, 0, 0, 0.04);
            padding: 20px;
        }
        .nopadding {
            padding-right: 0px !important;
        }
        #wpcontent {
            background-color: #ffffff;
        }

    </style>

    <div class="wrap about-wrap">
        <div class="row easy-wysiwyg-style-head">
            <div class="col-md-12 ">
                <h1>Easy Options Page</h1>
                <div class="about-text">Thank you for installing Easy Admin Menu! This WordPress plugin makes
                    it even easier to customize the admin area of your site.</div>
                <div class="wp-badge">EOP v1.5</div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 img-rounded border" style="margin-top:15px">
                <form method="post" action="options.php">
                    <?php settings_fields( 'easy-options-group' ); ?>
                    <?php do_settings_sections( 'easy-options-group' ); ?>
                    <div class="form-group">
                        <label for="easy_option_name">1. Options Page's Name</label>
                        <input type="text" class="form-control" id="easy_option_name" name="easy_option_name" placeholder="Option Page Name"
                               value="<?php echo get_option('easy_option_name'); ?>">
                    </div>

                    <?php
                    $arr = array("dashicons-menu","dashicons-admin-site","dashicons-dashboard","dashicons-admin-post","dashicons-admin-media",
                        "dashicons-admin-links","dashicons-admin-page","dashicons-admin-comments","dashicons-admin-appearance",
                        "dashicons-admin-plugins","dashicons-admin-users","dashicons-admin-tools","dashicons-admin-settings",
                        "dashicons-admin-network","dashicons-admin-home","dashicons-admin-generic","dashicons-admin-collapse",
                        "dashicons-welcome-write-blog","dashicons dashicons-welcome-add-page","dashicons-welcome-view-site",
                        "dashicons-welcome-widgets-menus","dashicons-welcome-comments","dashicons-welcome-learn-more",
                        "dashicons dashicons-format-aside","dashicons-format-image","dashicons-format-gallery","dashicons-format-video",
                        "dashicons-format-status","dashicons-format-quote","dashicons dashicons-format-chat","dashicons-format-audio",
                        "dashicons-camera","dashicons-images-alt","dashicons-images-alt2","dashicons-video-alt","dashicons-video-alt2",
                        "dashicons-video-alt3","dashicons-media-archive","dashicons-media-audio","dashicons-media-code","dashicons-media-default",
                        "dashicons-media-document","dashicons-media-interactive","dashicons-media-spreadsheet","dashicons-media-text",
                        "dashicons-media-video","dashicons-playlist-audio","dashicons-playlist-video","dashicons-image-crop",
                        "dashicons-image-rotate-left","dashicons-image-rotate-right","dashicons-image-flip-vertical",
                        "dashicons-image-flip-horizontal","dashicons-undo","dashicons-redo","dashicons-editor-bold","dashicons-editor-italic",
                        "dashicons-editor-ul","dashicons-editor-ol","dashicons-editor-quote","dashicons-editor-alignleft",
                        "dashicons-editor-aligncenter","dashicons-editor-alignright","dashicons-editor-insertmore","dashicons-editor-spellcheck",
                        "dashicons-editor-expand","dashicons-editor-contract","dashicons-editor-kitchensink","dashicons-editor-underline",
                        "dashicons-editor-justify","dashicons-editor-textcolor","dashicons-editor-paste-word","dashicons-editor-paste-text",
                        "dashicons-editor-removeformatting","dashicons-editor-video","dashicons-editor-customchar","dashicons-editor-outdent",
                        "dashicons-editor-indent","dashicons-editor-help","dashicons-editor-strikethrough","dashicons-editor-unlink",
                        "dashicons-editor-rtl","dashicons-editor-break","dashicons-editor-code","dashicons-editor-paragraph","dashicons-align-left",
                        "dashicons-align-right","dashicons-align-center","dashicons-align-none","dashicons-lock","dashicons-calendar",
                        "dashicons-visibility","dashicons-post-status","dashicons-edit","dashicons-trash","dashicons-external","dashicons-arrow-up",
                        "dashicons-arrow-down","dashicons-arrow-right","dashicons-arrow-left","dashicons-arrow-up-alt","dashicons-arrow-down-alt",
                        "dashicons-arrow-right-alt","dashicons-arrow-left-alt","dashicons-arrow-up-alt2","dashicons-arrow-down-alt2",
                        "dashicons-arrow-right-alt2","dashicons-arrow-left-alt2","dashicons-sort","dashicons-leftright","dashicons-randomize",
                        "dashicons-list-view","dashicons-exerpt-view","dashicons-share","dashicons-share-alt","dashicons-share-alt2",
                        "dashicons-twitter","dashicons-rss","dashicons-email","dashicons-email-alt","dashicons-facebook","dashicons-facebook-alt",
                        "dashicons-googleplus","dashicons-networking","dashicons-hammer","dashicons-art","dashicons-migrate","dashicons-performance",
                        "dashicons-universal-access","dashicons-universal-access-alt","dashicons-tickets","dashicons-nametag","dashicons-clipboard",
                        "dashicons-heart","dashicons-megaphone","dashicons-schedule","dashicons-wordpress","dashicons-wordpress-alt",
                        "dashicons-pressthis","dashicons-update","dashicons-screenoptions","dashicons-info","dashicons-cart","dashicons-feedback",
                        "dashicons-cloud","dashicons-translation","dashicons-tag","dashicons-category","dashicons-archive","dashicons-tagcloud",
                        "dashicons-text","dashicons-yes","dashicons-no","dashicons-no-alt","dashicons-plus","dashicons-plus-alt","dashicons-minus",
                        "dashicons-dismiss","dashicons-marker","dashicons-star-filled","dashicons-star-half","dashicons-star-empty","dashicons-flag",
                        "dashicons-location","dashicons-location-alt","dashicons-vault","dashicons-shield","dashicons-shield-alt","dashicons-sos",
                        "dashicons-search","dashicons-slides","dashicons-analytics","dashicons-chart-pie","dashicons-chart-bar","dashicons-chart-line",
                        "dashicons-chart-area","dashicons-groups","dashicons-businessman","dashicons-id","dashicons-id-alt","dashicons-products",
                        "dashicons-awards","dashicons-forms","dashicons-testimonial","dashicons-portfolio","dashicons-book","dashicons-book-alt",
                        "dashicons-download","dashicons-upload","dashicons-backup","dashicons-clock","dashicons-lightbulb","dashicons-microphone",
                        "dashicons-desktop","dashicons-tablet","dashicons-smartphone","dashicons-smiley");
                    ?>
                    <hr/><br/>
                    <div class="form-group">
                        <label for="easy_option_logo">2. Select the icon for your Page</label><br/>
                        <?php foreach ($arr as $ar) : ?>
                            <label class=" col-sm-1">
                                <input type="radio" name="easy_option_logo" value="<?php echo  $ar ?>" class="form-control"
                                    <?php echo  (get_option('easy_option_logo') == $ar) ? "checked" :  ""?>>
                                <div class="dashicons <?php echo  $ar ?>"></div>
                            </label>
                        <?php endforeach; ?>
                    </div>
                    <div class="clear"></div>

                    <br/><hr/><br/>

                    <div class="form-group">
                        <label for="easy_option_name">3. Specify the options</label>
                        <table id="table1" class="form-table table table-striped">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Type</th>
                                <th>Id</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            for ($i=1; $i <= get_option('easy_option_numOps'); $i++) {
                                $tableContent = get_option('easy_option_table');
                                ?>
                                <tr>
                                    <td><input type="text" name="easy_option_table[name_<?php echo  $i ?>]" value="<?php echo  $tableContent['name_'.$i] ?>" /></td>
                                    <td>
                                        <select name="easy_option_table[type_<?php echo  $i ?>]">
                                            <option value="text" <?php echo  ($tableContent['type_'.$i]=="text") ? "selected=true" : "" ?>>Text</option>
                                            <option value="image" <?php echo  ($tableContent['type_'.$i]=="image") ? "selected=true" : "" ?>>Image</option>
                                        </select>
                                    </td>
                                    <td><input type="text" name="easy_option_table[id_<?php echo  $i ?>]" value="<?php echo  $tableContent['id_'.$i] ?>" /></td>
                                    <td><input class="btn btn-danger btnDelete" type="button" value="- Delete option" /></td>
                                </tr>

                            <?php	} ?>

                            </tbody>
                        </table>
                        <input hidden type="text" value="<?php echo  get_option('easy_option_numOps');?>" id="easy_option_numOps" name="easy_option_numOps">
                        <input id="btnAdd" class="btn btn-success" value="+ Add option" type="button">
                    </div>

                    <hr/><br/>

                    <div class="form-group">
                        <label for="easy_option_name">4. Save the page</label>
                        <?php submit_button(); ?>
                    </div>
                </form>
            </div>

            <div class="col-md-4 nopadding">
                <div class="guidelines">
                    <h2>Guidelines</h2>
                    Once you press "Save Changes", the option page will appear on the bottom
                    of the admin menu with your specifications, otherwise, reload the page.
                    <br /><br />
                    To gather the information of your new options page:<br /><br />
                    <div style="margin-left:20px">
                        In your post editor, use the wp shortcode:  <br/>
                        <b>[easy_options id="option_id"]</b> <br />
                        changing "option_id" to the Id you specified in the third column.

                        <br /><br />

                        In your template, use the php function: <br/>
                        <b>$easy_options = get_option("easy_page_options");</b><br />
                        and then <b>$easy_options["option_id"];</b><br />
                        changing "option_id" to the Id you specified in the third column.
                    </div>
                </div>

                <div class="easy-box">
                    <div class="easy-more">
                        <h4>Related plugins:</h4>
                        <ul>
                            <li>
                                <a href="https://wordpress.org/plugins/easy-admin-menu/" target="_blank">· Easy Admin Menu</a>
                            </li>
                            <li>
                                <a href="https://wordpress.org/plugins/easy-login-form/" target="_blank">· Easy Login Form</a>
                            </li>
                            <li>
                                <a href="https://wordpress.org/plugins/easy-options-page/" target="_blank">· Easy Options Page</a>
                            </li>
                            <li>
                                <a href="https://wordpress.org/plugins/easy-timeout-session/" target="_blank">· Easy Timeout Session</a>
                            </li>
                            <li>
                                <a href="https://wordpress.org/plugins/easy-wysiwyg-style/" target="_blank">· Easy Wysiwyg Style</a>
                            </li>
                        </ul>
                    </div>
                    <div class="easy-plugins-box">
                        <div class="text-center">
                            <p>This plugin is Free Software and is made available free of charge.</p>
                            <p>If you like the software, please consider a donation.</p>
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top" class="">
                                <input type="hidden" name="cmd" value="_s-xclick">
                                <input type="hidden" name="hosted_button_id" value="CHXF6Q9T3YLQU">
                                <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                                <img alt="" border="0" src="https://www.paypalobjects.com/es_ES/i/scr/pixel.gif" width="1" height="1">
                            </form>
                        </div>
                    </div>
                    <div class="easy-bottom">
                        Created by <a href="http://jokiruiz.com" target="_blank">Joaquín Ruiz</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
}

add_action('admin_init', 'register_and_build_fields');

function register_and_build_fields() {
    register_setting( 'easy-options-group', 'easy_option_name' );
    register_setting( 'easy-options-group', 'easy_option_logo' );
    register_setting( 'easy-options-group', 'easy_option_table' );
    register_setting( 'easy-options-group', 'easy_option_numOps' );

}

function easy_options_scripts() {
    $currentScreen = get_current_screen();
    if(( $currentScreen->base === "settings_page_options_page_plugin") || ( $currentScreen->base === "toplevel_page_options_easy_page_plugin")) {
        wp_enqueue_script( 'jquery');
        wp_enqueue_script( 'easy-options-script-name', plugins_url( '/js/scripts.js', __FILE__ ));
        wp_enqueue_style( 'easy-options-style-name', plugins_url( '/css/styles.css', __FILE__ ));
        wp_enqueue_style( 'bootstrap', plugins_url( '/css/bootstrap.min.css', __FILE__ ));
    }
}


add_action( 'admin_enqueue_scripts', 'easy_options_scripts' );


/*******************************************************************/
/*******************************************************************/


add_action('admin_menu', 'create_user_easy_options_page');
function create_user_easy_options_page() {
    $name = (get_option('easy_option_name') != "") ? get_option('easy_option_name') : "Option Page Name 2";
    $logo = (get_option('easy_option_logo') != "") ? get_option('easy_option_logo') : "dashicons-menu";
    add_menu_page($name , $name , 'administrator', 'options_easy_page_plugin', 'build_easy_page_plugin',$logo);
    add_action( 'admin_init', 'register_user_easy_mysettings' );
}

function register_user_easy_mysettings() {
    //register our settings
    register_setting( 'easy_page_options', 'easy_page_options', 'validate_easy_setting');
}

function validate_easy_setting($easy_page_options) {
    $keys = array_keys($_FILES); $i = 0;
    foreach ( $_FILES as $image ) {   // if a files was upload

        if ($image['size']) {     // if it is an image
            if ( preg_match('/(jpg|jpeg|png|gif)$/', $image['type']) ) {
                $override = array('test_form' => false);       // save the file, and store an array, containing its location in $file
                $file = wp_handle_upload( $image, $override );  error_log(print_r($file,1));
                $easy_page_options[$keys[$i]] = $file['url'];
            } else {       // Not an image.
                $options = get_option('easy_page_options');
                $easy_page_options[$keys[$i]] = $options[$logo];       // Die and let the user know that they made a mistake.
                wp_die('No image was uploaded.');
            }
        }   // Else, the user didn't upload a file.   // Retain the image that's already on file.
        else {
            $options = get_option('easy_page_options');
            $easy_page_options[$keys[$i]] = $options[$keys[$i]];
        }
        $i++;
    }
    return $easy_page_options;
}


function build_easy_page_plugin() {
    $name = (get_option('easy_option_name') != "") ? get_option('easy_option_name') : "Option Page Name 1";
    $logo = (get_option('easy_option_logo') != "") ? get_option('easy_option_logo') : "dashicons-menu";
    ?>
    <div class="wrap about-wrap">
        <h1 style="color:#333"><?php echo  $name ?></h1>
        <small style="color:#222; float:right">Made using <a href="https://wordpress.org/plugins/easy-options-page/" target="_blank">Easy Options Page</a> </small>
        <br/><hr/>
        <div>
            <h4><?php echo  $name ?> guidelines</h4>
            <p>Fill the form and press 'Save Changes'. Once saved you can use the variables stored here using the shortcodes inside the <b>WordPress Posts</b>, or your
            <b>WordPress Theme</b> files.</p>
        </div>
        <br/>
        <div class="row border img-rounded" style="background: #ffffff">
            <div class="col-md-12 ">
                <form class="form-horizontal" method="post" action="options.php" enctype="multipart/form-data">
                    <div class="">
                        <?php settings_fields( 'easy_page_options' ); ?>
                        <?php do_settings_sections( 'easy_page_options' ); ?>
                        <?php $opt = get_option( 'easy_page_options' ); ?>
                        <?php
                        $tableContent = get_option('easy_option_table');
                        for ($i=1; $i <= get_option('easy_option_numOps'); $i++) {
                            if ($tableContent['type_'.$i]=="text") { ?>
                                <div class="form-group">
                                    <label for="easy_page_options[<?php echo  $tableContent['id_'.$i]?>]" class="col-sm-2 control-label">
                                        <?php echo  $tableContent['name_'.$i]?>
                                    </label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="easy_page_options[<?php echo  $tableContent['id_'.$i]?>]"
                                               name="easy_page_options[<?php echo  $tableContent['id_'.$i]?>]"
                                               value="<?php echo  $opt[$tableContent['id_'.$i]]; ?>">
                                        <p class="help-block">Shortcode: [easy_options id="<?php echo  $tableContent['id_'.$i] ?>"]</p>
                                    </div>
                                </div>
                            <?php }
                            else { // image ?>
                                <div class="form-group">
                                    <label for="easy_page_options[<?php echo  $tableContent['id_'.$i]?>]" class="col-sm-2 control-label">
                                        <?php echo  $tableContent['name_'.$i]?>
                                    </label>
                                    <div class="col-sm-8">
                                        <input type="file" class="form-control" id="<?php echo  $tableContent['id_'.$i]?>" name="<?php echo  $tableContent['id_'.$i]?>" />
                                        <p class="help-block">Shortcode: [easy_options id="<?php echo  $tableContent['id_'.$i] ?>"]</p>
                                    </div>
                                    <div class="col-sm-2">
                                        <img class="img-responsive" src="<?php echo $opt[$tableContent['id_'.$i]]; ?>">
                                    </div>
                                </div>
                            <?php }
                        }
                        ?>
                        <?php submit_button(); ?>
                    </div>
                </form>
            </div>
        </div>
        <hr/>
    </div>
    <?php
}

// Shortcodes
function easy_options_short_func( $atts ){
    $easy_options = get_option(easy_page_options);

    return $easy_options[$atts['id']];
}
add_shortcode( 'easy_options', 'easy_options_short_func' );


/*******************************************************************/
/*******************************************************************/



