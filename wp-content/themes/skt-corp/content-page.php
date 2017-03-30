<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package SKT Corp
 */
global $post;
$post_slug = $post->post_name;
?>

<?php if ($post_slug == 'hostlist'):
//$_SESSION['page_search']='hostlist';
$f1 = $_GET['tour'];
$f2 = $_GET['theme-category'];
$f3 = $_GET['language'];
?>
<?php get_header(); ?>
<div class="header1"
     style="height: 328px; background: url('<?php echo esc_url(home_url('/')); ?>img/bannerpage3.jpg'); background-size: cover;">
    <div class="title-top">
        <h2>Host list</h2>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="container">
            <div class="row main-content">
                <div class="col-md-7 col-xs-12 left-content">
                    <p class="blue-1">Let's find the host you like</p>
                    <div class="hr-green-1" style="margin-right: 72px;"></div>
                    <div class="wrapper-step">
                        <div class="row">
                            <div class="col-xs-12 col-md-12">
                                <?php //echo do_shortcode( '[searchandfilter taxonomies="hokkaido-okinawa-host,theme-category-host,language-host" submit_label="Search"]' );
                                ?>
                                <?php $terms1 = get_terms([
                                    'taxonomy' => 'hokkaido-okinawa-host',
                                    'hide_empty' => false,
                                ]);
                                $terms2 = get_terms([
                                    'taxonomy' => 'theme-category-host',
                                    'hide_empty' => false,
                                ]);
                                $term3 = get_terms([
                                    'taxonomy' => 'language-host',
                                    'hide_empty' => false,
                                ]);
                                ?>
                                <form action="" method="get" class="searchandfilter">

                                    <div class="row search-host">
                                        <div class="col-xs-12 col-md-3">
                                            <select class="filter-sl" name="tour" style="width: 90%;">
                                                <?php foreach ($terms1 as $key => $term): ?>
                                                    <option
                                                        value="<?= $term->slug ?>" <?php if ($term->slug == $f1) echo 'selected="selected"'; ?>><?= $term->name ?></option>
                                                <?php endforeach; ?>
                                                <option
                                                    value="all" <?php if ($f1 == 'all') echo 'selected="selected"'; ?>>
                                                    All
                                                </option>
                                            </select><i class="fa fa-angle-right"></i>
                                        </div>
                                        <div class="col-xs-12 col-md-3">
                                            <select name="theme-category" class="filter-sl" style="width: 90%;">
                                                <option <?php if (!isset($f2) || $f2 == '0') echo 'selected="selected"'; ?>
                                                    value="0">Theme & Category
                                                </option>
                                                <?php foreach ($terms2 as $key => $term): ?>
                                                    <option
                                                        value="<?= $term->slug ?>" <?php if ($term->slug == $f2) echo 'selected="selected"'; ?>><?= $term->name ?></option>
                                                <?php endforeach; ?>
                                                <option
                                                    value="all" <?php if ($f2 == 'all') echo 'selected="selected"'; ?>>
                                                    All
                                                </option>
                                            </select><i class="fa fa-angle-right"></i></div>
                                        <div class="col-xs-12 col-md-2"><select name="language" class="filter-sl"
                                                                                style="width: 90%;">
                                                <option <?php if (!isset($f3) || $f3 == '0') echo 'selected="selected"'; ?>
                                                    value="0"><i class="fa fa-square" aria-hidden="true"></i>Language
                                                </option>
                                                <?php foreach ($term3 as $key => $term): ?>
                                                    <option
                                                        value="<?= $term->slug ?>" <?php if ($term->slug == $f3) echo 'selected="selected"'; ?>><?= $term->name ?></option>
                                                <?php endforeach; ?>
                                                <option
                                                    value="all" <?php if ($f3 == 'all') echo 'selected="selected"'; ?>>
                                                    All
                                                </option>
                                            </select></div>
                                        <div class="col-xs-12 col-md-2"><input type="submit" value="Search"></div>
                                    </div>
                                </form>


                            </div>
                        </div>
                    </div>
                    <!--section 1-->
                </div>
            </div>
        </div>
        <div class="container list-host">
            <div class="row host" style="background: none;">
                <?= SearchHost() ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
<?php endif; ?>
