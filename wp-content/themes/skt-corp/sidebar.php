<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package SKT Corp
 */
?>
<div id="sidebar" class="col-md-4 right-content">
    <div class="right-content-child">
                        <p class="title-head"> <strong>Recommended tour >> </strong></p>
                        <div class="right-tour row">
                            <div class="col-xs-4">
                                <img class="img-responsive" src="<?php echo esc_url(home_url('/'));?>right-list-img-1.jpg" />
                                <p class="time"> <em>27.02.15</em></p>
                            </div>
                            <div class="col-xs-8">
                                <p>
                                    <strong>                               
                                    <a href="<?php echo esc_url(home_url('/'));?>tour_details">I want to try it once! Tsukiji market whole tour and handful sushi experience tour</a>
                                    </strong>      
                                </p>
                            </div>
                        </div>
                        <div class="hr"></div>
                        <div class="right-tour row">
                            <div class="col-xs-4">
                                <img class="img-responsive" src="<?php echo esc_url(home_url('/'));?>right-list-img-2.jpg" />
                                <p class="time"> <em>28.02.15</em></p>
                            </div>
                            <div class="col-xs-8">
                                <p>
                                    <strong>                               
                                    <a href="<?php echo esc_url(home_url('/'));?>tour_details">Minamikaze Variety-rich diving with afterglow!</a>
                                    </strong>      
                                </p>
                            </div>
                        </div>
                         <div class="hr"></div>
                        <div class="right-tour row margin-bt-20">
                            <div class="col-xs-4">
                                <img class="img-responsive" src="<?php echo esc_url(home_url('/'));?>right-list-img-3.jpg" />
                                <p class="time"> <em>28.02.15</em></p>
                            </div>
                            <div class="col-xs-8">
                                <p>
                                    <strong>                               
                                    <a href="<?php echo esc_url(home_url('/'));?>tour_details">A hot spring is a good value! Gunma Kusatsu hot spring</a>
                                    </strong>      
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="right-content-child margin-top-30">
                        <p class="title-head"> <strong>Link >> </strong></p>
                        <div>
                             <a href="http://www.taberukoto.net/"> <img class="img-responsive" src="<?php echo esc_url(home_url('/'));?>right-list-img-4.jpg"/></a>
                        </div>
                        <p class="txt-right"> 
                           Gourmet site for foreign visitors "Tabel cotto"
                        </p>
                        <div class="margin-top-40">
                            <a href="http://tabippo.net/">  <img class="img-responsive" src="<?php echo esc_url(home_url('/'));?>right-list-img-5.jpg"/></a>
							<p class="txt-right"> 
                           Around the world "TABIPPO"
                        </p>
                        </div>
                        <div class="margin-top-40">
                            <a href="http://mcha.jp/"> <img class="img-responsive" src="<?php echo esc_url(home_url('/'));?>right-list-img-6.jpg"/></a>
							<p class="txt-right"> 
                          Web magazine for foreigners visiting Japan tourists "MATCHA"
                        </p>
                        </div>
                        <div class="margin-top-40">
                            <a href="http://www.ayumu.ch/index.html"> <img class="img-responsive" src="<?php echo esc_url(home_url('/'));?>right-list-img-7.jpg"/></a>
							<p class="txt-right"> 
                          Free people "Ayumu Takahashi"
                        </p>
                        </div>
                        <div class="margin-top-40">
                            <a href="http://www.minpakugyou.com/"> <img class="img-responsive" src="<?php echo esc_url(home_url('/'));?>right-list-img-8.jpg"/></a>
							<p class="txt-right"> 
                         Japan Personal Housing Association
                        </p>
                        </div>
                    </div>
                    
                   
    <?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>
      <!--<aside id="archives" class="widget">
            <h3 class="widget-title"><?php _e( 'Archives', 'skt-corp' ); ?></h3>
            <ul>
                <?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
            </ul>
        </aside>
        <aside id="meta" class="widget">
            <h3 class="widget-title"><?php _e( 'Meta', 'skt-corp' ); ?></h3>
            <ul>
                <?php wp_register(); ?>
                <li><?php wp_loginout(); ?></li>
                <?php wp_meta(); ?>
            </ul>
        </aside>  -->
    <?php endif; // end sidebar widget area ?>
	
</div><!-- sidebar -->
</div>
</div>
</div>