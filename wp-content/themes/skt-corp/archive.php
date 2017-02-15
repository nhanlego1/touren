<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package SKT Corp
 */

get_header(); ?>


  <?php if (is_tax( 'language' ) ||is_tax('theme-category') ||  is_tax('hokkaido-okinawa')):
$_SESSION['page_search']='tourlist';

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
                    <div class="wrapper-step">
                        
                        <div class="row">
                            <div class="col-xs-12 col-md-12">


                            <form action="" method="get" class="searchandfilter">
                            <div>
                                    <select name="x"  class="postform">
                                        <option value="0" selected="selected">Tour</option>
                                        <option class="level-0" value="12">hokkaido～Okinawa</option>
                                         <option class="level-0" value="0" >All</option>
                                    </select>

                                    <select name="y" class="postform">
                                            <option class="level-0" value="18">Amusement</option>
                                            <option class="level-0" value="19">Culture, Art</option>
                                            <option class="level-0" value="14">Groumet</option>
                                            <option class="level-0" value="16">Shopping</option>
                                            <option class="level-0" value="17">Show, Entateinment</option>
                                            <option class="level-0" value="9">Sightseeing</option>
                                            <option class="level-0" value="15">Sport</option>
                                            <option class="level-0" value="0" >All</option>
                                    </select>
                                   <select name="z" class="postform">
                                        <option value="0" selected="selected">Language</option>

                                        <option class="level-0" value="13">Chinease</option>
                                        <option class="level-0" value="7">English</option>
                                        <option class="level-0" value="0" >All</option>
                                    </select>
                                    <input type="submit" value="Search">
                                </div>
                               </form>



                            <form action="" method="get" class="searchandfilter hidden">
                            <div>
                                    <ul><li><select name="ofhokkaido-okinawa" id="ofhokkaido-okinawa" class="postform">
                                        <option value="0" selected="selected">Tour</option>

                                        <option class="level-0" value="12">hokkaido～Okinawa</option>
                                         <option class="level-0" value="0" >All</option>
                                    </select>
                                    <input type="hidden" name="ofhokkaido-okinawa_operator" value="and"></li><li><select name="oftheme-category" id="oftheme-category" class="postform">
                                            <option class="level-0" value="18">Amusement</option>
                                            <option class="level-0" value="19">Culture, Art</option>
                                            <option class="level-0" value="14">Groumet</option>
                                            <option class="level-0" value="16">Shopping</option>
                                            <option class="level-0" value="17">Show, Entateinment</option>
                                            <option class="level-0" value="9">Sightseeing</option>
                                            <option class="level-0" value="15">Sport</option>
                                            <option class="level-0" value="0" >All</option>
                                    </select>
                                    <input type="hidden" name="oftheme-category_operator" value="and"></li><li><select name="oflanguage" id="oflanguage" class="postform">
                                        <option value="0" selected="selected">Language</option>

                                        <option class="level-0" value="13">Chinease</option>
                                        <option class="level-0" value="7">English</option>
                                        <option class="level-0" value="0" >All</option>
                                    </select>
                                    <input type="hidden" name="oflanguage_operator" value="and"></li><li><input type="hidden" name="ofsubmitted" value="1">
                                    <input type="submit" value="Search">
                                </li></ul></div>
                               </form>
                            </div>
                        </div>
                    </div>

                    <!--section 1-->
                    <div class="hr-green-2"></div>
                    <div class="row article">
                        <div class="col-xs-12 col-xs-8 article-title"><ol class="breadcrumb">
                          <li><a href="#">Tokyo</a> <i class="fa fa-angle-double-right" aria-hidden="true"></i></li>
                          <li><a href="#">Groumet</a> <i class="fa fa-angle-double-right" aria-hidden="true"></i></li>
                          <li class="active">English</li>
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

                    <?php $count =0; ?>
                     <?php while ( have_posts() ) : the_post(); $count++;?>
                         <div class="row">
                            <div class="col-xs-12 col-sm-4 col-md-3">
                                <?php echo get_the_post_thumbnail($post->ID, 'thumbnail' );?>
                            </div>
                            <div class="col-xs-12 col-sm-8 col-md-9">
                                <p class="blue text-underline"> <?php the_title(); ?></p>
                                <p class="gray"> <?php the_content(); ?></p>
                                <div class="row">
                                    <div class="col-xs-6 red">
                                        <strong><i class="fa fa-usd" aria-hidden="true"></i> 35 </strong>
                                    </div>
                                    <div class="col-xs-6 text-right">
                                        <button class="btn my-btn"> <span class="glyphicon glyphicon-search" aria-hidden="true"></span> Tour Details </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hr-gray"></div>
                    <?php endwhile; ?>
                    <?php if($count==0 ):?>
                         <div class="row">
                            <div class="col-xs-12 col-sm-8 col-md-9">
                                <p class="blue text-underline"> Not found!</p>
                            </div>
                        </div>
                        <div class="hr-gray"></div>
                    <?php endif; ?>
                  
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
                                        <strong><i class="fa fa-usd" aria-hidden="true"></i> 35 </strong>
                                    </div>
                                    <div class="col-xs-6 text-right">
                                        <button class="btn my-btn"> <span class="glyphicon glyphicon-search" aria-hidden="true"></span> Tour Details </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hr-gray"></div>
                    <?php endwhile; ?>
                  
                    <p class="blue text-underline"> <span class="glyphicon glyphicon-play red-color" aria-hidden="true"></span> <strong> Full visit to the Tsukiji market (5) </strong></p>

                </div>

     <?php get_sidebar();?>


 <?php elseif(is_tax( 'language-host' ) ||is_tax('theme-category-host') ||  is_tax('hokkaido-okinawa-host')):  
$_SESSION['page_search']='hostlist';
 ?>

     <div class="header1" style="height: 328px; background: url('<?php echo esc_url(home_url('/'));?>img/bannerpage3.jpg'); background-size: cover;">
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
<div class="hr-green-1"></div>
<div class="wrapper-step">
<div class="row">
<div class="col-xs-12 col-md-12">
        <form action="" method="post" class="searchandfilter">
                    <div>
                        <ul><li><select name="ofhokkaido-okinawa-host" id="ofhokkaido-okinawa-host" class="postform">
    <option value="0" selected="selected">Host</option>
    <option class="level-0" value="0">All</option>
    <option class="level-0" value="23">hokkaido～Okinawa</option>
</select>
<input type="hidden" name="ofhokkaido-okinawa-host_operator" value="and"></li><li><select name="oftheme-category-host" id="oftheme-category-host" class="postform">
    <option value="0">Theme &amp; Category</option>
    <option class="level-0" value="30" selected="selected">Amusement</option>
    <option class="level-0" value="31">Culture, Art</option>
    <option class="level-0" value="25">Groumet</option>
    <option class="level-0" value="28">Shopping</option>
    <option class="level-0" value="29">Show, Entateinment</option>
    <option class="level-0" value="27">Sightseeing</option>
    <option class="level-0" value="26">Sport</option>
    <option class="level-0" value="0">All</option>
</select>
<input type="hidden" name="oftheme-category-host_operator" value="and"></li><li><select name="oflanguage-host" id="oflanguage-host" class="postform">
    <option value="0" selected="selected">Language</option>
    <option class="level-0" value="34">Chinease</option>
    <option class="level-0" value="33">English</option>
    <option class="level-0" value="35">Japanease</option>
    <option class="level-0" value="0">All</option>
</select>
<input type="hidden" name="oflanguage-host_operator" value="and"></li><li><input type="hidden" name="ofsubmitted" value="1">
                            <input type="submit" value="Search">
                        </li></ul></div>
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
<?php $count =0; ?>
                     <?php while ( have_posts() ) : the_post(); $count++;?>
                                <div class="col-xs-12 col-sm-6 col-md-3">
                                <div class="host-avatar"><a href="../host_details"><img class="host-img" src="<?php the_post_thumbnail_url() ?>" /></a></div>
                                <strong><?php the_title(); ?> </strong>
                                 <?php the_content(); ?>
                                </div>
                    <?php endwhile; ?>
                           <?php if($count==0 ):?>
                         <div class="col-xs-12 col-sm-6 col-md-3">                      
                                <p class="blue text-underline"> Not found!</p>
                        </div>
                    <?php endif; ?>
</div>
</div>
</div>
</div>
    <?php else: ?>
<div class="content-area">
    <div class="container">
        <section class="site-main" id="sitemain">
            <?php if ( have_posts() ) : ?>
                <header class="page-header">
                    <h1 class="page-title">
                        <?php
                            if ( is_category() ) :
                                single_cat_title();

                            elseif ( is_tag() ) :
                                single_tag_title('Tag: ');

                            elseif ( is_author() ) :
                                /* Queue the first post, that way we know
                                 * what author we're dealing with (if that is the case).
                                */
                                the_post();
                                printf( __( 'Author: %s', 'skt-corp' ), '<span class="vcard">' . get_the_author() . '</span>' );
                                /* Since we called the_post() above, we need to
                                 * rewind the loop back to the beginning that way
                                 * we can run the loop properly, in full.
                                 */
                                rewind_posts();

                            elseif ( is_day() ) :
                                printf( __( 'Day: %s', 'skt-corp' ), '<span>' . get_the_date() . '</span>' );
    
                            elseif ( is_month() ) :
                                printf( __( 'Month: %s', 'skt-corp' ), '<span>' . get_the_date( 'F Y' ) . '</span>' );
    
                            elseif ( is_year() ) :
                                printf( __( 'Year: %s', 'skt-corp' ), '<span>' . get_the_date( 'Y' ) . '</span>' );
    
                            elseif ( is_tax( 'post_format', 'post-format-aside' ) ) :
                                _e( 'Asides', 'skt-corp' );
    
                            elseif ( is_tax( 'post_format', 'post-format-image' ) ) :
                                _e( 'Images', 'skt-corp');
    
                            elseif ( is_tax( 'post_format', 'post-format-video' ) ) :
                                _e( 'Videos', 'skt-corp' );
    
                            elseif ( is_tax( 'post_format', 'post-format-quote' ) ) :
                                _e( 'Quotes', 'skt-corp' );
    
                            elseif ( is_tax( 'post_format', 'post-format-link' ) ) :
                                _e( 'Links', 'skt-corp' );
    
                            else :
                                _e( 'Archives', 'skt-corp' );
    
                            endif;
                        ?>
                    </h1>
                    <?php
                        // Show an optional term description.
                        $term_description = term_description();
                        if ( ! empty( $term_description ) ) :
                            printf( '<div class="taxonomy-description">%s</div>', $term_description );
                        endif;
                    ?>
                </header><!-- .page-header -->
                <div class="blog-post">
                    <?php /* Start the Loop */ ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                        <?php get_template_part( 'content', get_post_format() ); ?>
                    <?php endwhile; ?>
                </div>
                <?php skt_corp_custom_blogpost_pagination($wp_query); ?>
            <?php else : ?>
                <?php get_template_part( 'no-results', 'archive' ); ?>
            <?php endif; ?>
        </section>
        <?php get_sidebar();?>
        <div class="clear"></div>
    </div>
</div>
<?php endif;?>
<?php get_footer(); ?>