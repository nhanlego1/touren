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
            $args = array(
            		'category_name' => 'achive',
            		'post_status' => 'publish',
            		'orderby'=>'date',
            		'order'=>'DESC',
            		'posts_per_page' => 3,
            );
            
            
            $wp_query = new WP_Query();
            $wp_query->query( $args );
            while ($wp_query->have_posts()):
            	$wp_query->the_post();
            
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
        ?>
    </ul>
    <a class="see_all" href="<?php echo esc_url(home_url('/')); ?>/category/achive/">See All</a>
</div>
<!-- Start news tab content -->
<div id="news" class="tab-pane fade">
    <ul class="news_tab">
        <?php
            $args = array(
            		'category_name' => 'news',
            		'post_status' => 'publish',
            		'orderby'=>'date',
            		'order'=>'DESC',
            		'posts_per_page' => 3,
            );
            
            
            $wp_query = new WP_Query();
            $wp_query->query( $args );
            while ($wp_query->have_posts()):
            $wp_query->the_post();
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
            
        ?>
    </ul>
    <a class="see_all" href="tourlist">ツアーリスト</a>

</div>
    <!-- Start events tab content -->
<div id="events" class="tab-pane fade">
    <ul class="events_tab">
        <?php
            $args = array(
            		'category_name' => 'events',
            		'post_status' => 'publish',
            		'orderby'=>'date',
            		'order'=>'DESC',
            		'posts_per_page' => 3,
            );
            
            
            $wp_query = new WP_Query();
            $wp_query->query( $args );
            while ($wp_query->have_posts()):
            $wp_query->the_post();
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
        ?>
    </ul>
    <a class="see_all" href="<?php echo esc_url(home_url('/')); ?>/category/events/">See All</a>
<!-- <a class="see_all" href="#">See All</a> -->

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

  <?php
    $count=0;
    $args = array( 
                        'category_name' => 'hostlist', 
                        'orderby'=>'date',
                        'order'=>'DESC', 
                        'posts_per_page' => 8, 
                      );


    $wp_query = new WP_Query();
    $wp_query->query( $args );
    while ($wp_query->have_posts()){
     $wp_query->the_post();
         $count++; ?>
         <?php if($count==1):?>
            <div class="item active">
             <div class="row">
             <?php endif ?>
          <?php if ($count >=1 && $count <5):?>	
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <div class="host-avatar"><a href="<?php echo get_permalink( $post->ID );?>"><img class="host-img" src="<?php the_post_thumbnail_url() ?>" /></a><span><strong><?php the_title(); ?> </strong></span>
                                </div>
                                  
                                  <?php the_content(); ?>
                                </div>
                                <?php endif ?>
          	<?php if ($count==5):?>	
						</div>
						</div>
						<div class="item">
						<div class="row">
						<?php endif ?>
          		<?php if ($count>=5 && $count<=8):?>	
          			<div class="col-xs-12 col-sm-6 col-md-3">
                                <div class="host-avatar"><a href="<?php echo get_permalink( $post->ID );?>"><img class="host-img" src="<?php the_post_thumbnail_url() ?>" /></a><span><strong><?php the_title(); ?> </strong></span>
                                </div>
                                  
                                  <?php the_content(); ?>
                                </div>
                                <?php endif ?>
          			<?php if ($count==8):?>	
                         </div>
						</div>
          			<?php endif ?>

         
       <?php }?>

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
	
	     <?php
    $count=0;
    $args = array( 
                        'category_name' => 'testimonial', 
                        'orderby'=>'date',
                        'order'=>'DESC', 
                        'posts_per_page' => 4, 
                      );


    $wp_query = new WP_Query();
    $wp_query->query( $args );
    while ($wp_query->have_posts()){
     $wp_query->the_post();
         $count++; ?>
         <?php if($count==1):?>

             <div class="row">
             <?php endif ?>
          <?php if ($count >=1 && $count <= 2):?>	
		            <div class="col-xs-12 col-md-6">
						<div class="row">
						<div class="col-xs-3"><img class="img-responsive" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) )?>" /></div>
						<div class="col-xs-9">
						<p class="testimonial-name"><?php the_title(); ?></p>
						<p class="testimonial-job"><?php echo get_post_meta(get_the_ID(), 'job', TRUE); ?></p>
						
						<div class="hr"></div>
						<div class="row">
						<div class="col-xs-2"><img class="img-responsive" src="quote.png" /></div>
						<div class="col-xs-10 testimonial-content">
					     <?php the_content();?>
						<p class="ps text-right">Published on：<?php echo get_the_date( 'd/m/Y'); ?></p>
						<p class="sign text-right" ><a href="<?php echo get_permalink( get_the_ID() ); ?> " style="color: #a60101;">Recruitment Details</a></p>
						
						</div>
						</div>
						</div>
						</div>
					</div>
            <?php endif ?>
          	<?php if ($count==2):?>	
						</div>
						<div class="row">
						<?php endif ?>
          		<?php if ($count>=3 && $count<=4):?>	
	          			 <div class="col-xs-12 col-md-6">
							<div class="row">
							<div class="col-xs-3"><img class="img-responsive" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) )?>" /></div>
							<div class="col-xs-9">
							<p class="testimonial-name"><?php the_title(); ?></p>
							<p class="testimonial-job"><?php echo get_post_meta(get_the_ID(), 'job', TRUE); ?></p>
							
							<div class="hr"></div>
							<div class="row">
							<div class="col-xs-2"><img class="img-responsive" src="quote.png" /></div>
							<div class="col-xs-10 testimonial-content">
						     <?php the_content();?>
							<p class="ps text-right">Published on：<?php echo get_the_date( 'd/m/Y');?></p>
                            <p class="sign text-right" ><a href="<?php echo get_permalink( get_the_ID() ); ?> " style="color: #a60101;">Recruitment Details</a></p>
							
							</div>
							</div>
							</div>
							</div>
						</div>
                      <?php endif ?>
          			<?php if ($count==4):?>	
						</div>
          			<?php endif ?>

         
       <?php }?>
	</div>
</div>
</div>

<?php get_footer(); ?>