<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package SKT Corp
 */
 global $post;
    $post_slug=$post->post_name;
?>

 <?php if( $post_slug=='hostlist'): 
//$_SESSION['page_search']='hostlist';
 $f1=$_GET['tour'];
$f2=$_GET['theme-category'];
$f3=$_GET['language'];
 ?>
<?php get_header(); ?> 
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
<div class="hr-green-1" style="margin-right: 72px;"></div>
<div class="wrapper-step">
<div class="row">
<div class="col-xs-12 col-md-12">
    <?php //echo do_shortcode( '[searchandfilter taxonomies="hokkaido-okinawa-host,theme-category-host,language-host" submit_label="Search"]' ); ?>
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
 <?=SearchHost()?>
</div>
</div>
</div>
</div>
<?php get_footer(); ?>
<div class="hidden">
<?php else: ?>
<?php 
if (isset($_GET['amount']) and $_GET['amount']!=''){
    $data_get = array('status' => 'yes',
        'money_amount'=>intval($_GET['amount']));
     global  $wpdb;
    $wpdb->update( 'host_reg', $data_get,  array( 'id' => intval($_GET['order_id'] ) ));
}
    if(isset($_POST['to_step_3']) and $_POST['to_step_3']=='yes')
    {
        $c9oq='';

        foreach ($_POST['c9oq'] as $key=>$value) {
            if($value!='') $c9oq.=$value;
        }
        $c9lr='';
        foreach ($_POST['c9lr'] as $key=>$value) {
            if($value!='') $c9lr.=$value;
        }
       $data_post = array('name_guest' => $_POST['t3di_guest'],
        'phone_guest' => $_POST['t0fl_guest'],
        'email_guest' => $_POST['t9hg_guest'],
        'code1_guest' => $_POST['t3gq_guest'],
        'code2_guest' => $_POST['t0sz_guest'],
        'quan_guest' => $_POST['s5bo_guest'],
        'tinh_guest' => $_POST['t4ii_guest'],
        'add_guest' => $_POST['t0pi_guest'],
        'name_host' => $_POST['t3di'],
        'alias_host' => $_POST['t4kl'],
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
        'email_host' => $_POST['t9hg'],
        'time_action' => $_POST['t4jy'],
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
       global  $wpdb;
       $wpdb->insert( 'host_reg', $data_post);
       $lastInsertId = $wpdb->insert_id; 
       ?>
         <div class="header1" style="height:300px;background:url(../img/bannerpage3.jpg);background-size: cover;"></div>
         <div class="container">
            <div class="row main-content">
                <div class="col-md-6 col-xs-12 col-md-offset-3 left-content">
    <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top">
    <input type="hidden" name="cmd" value="_xclick">
    <input type="hidden" name="business" value="congnn@bkindex.com">
    <input type="hidden" name="lc" value="US">
    <input type="hidden" name="item_name" value="By Tour">
    <input type="hidden" name="button_subtype" value="services">
    <input type="hidden" name="no_note" value="0">
    <input type="hidden" name="currency_code" value="USD">
    <input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHostedGuest">
    <table>
        <tr>
            <td colspan="2" style="text-align:center;">
                <input type="hidden" name="on0"  value="Package">information
            </td>
        </tr>
        <tr>
                <th>name</th>
                <td>
                                   <?php echo $_POST['t3di_guest']; ?>       
                </td>
        </tr>
         <tr>
                <th>mail address</th>
                <td>
                                  <?php echo $_POST['t9hg_guest']; ?>
                </td>
        </tr>
        <tr>
                <th>Cellphone number</th>
                <td>
                                  <?php echo $_POST['t0fl_guest']; ?>
                </td>
        </tr>
        <tr>
                <th>money</th>
                <td>
                                <input type="text" name="amount" id="amount"  value="">$
                </td>
        </tr>
      
    </table>
  <script type="text/javascript">
      $('#amount').change(function(){
        var order_id=$("#order_id").val();
        var amount=$(this).val();
        $("#return").val('http://extourjapan.lakita.vn/thankyou?order_id='+ order_id+ '&amount='+amount)
      });
  </script>
    <!-- <input type="hidden" name="option_select0" value="Monthly Membership">
    <input type="hidden" name="option_amount0" value="10.00">
    <input type="hidden" name="option_select1" value="Life Membership">
    <input type="hidden" name="option_amount1" value="100.00">
    <input type="hidden" name="option_index" value="0">-->
    <input type="hidden" name="return" id="return" value="">
    <input type="hidden" name="rm" value="2">
    <input type="hidden" name="cancel_return" value="http://extourjapan.lakita.vn/tryagain">
    <input type="hidden" name="page_style" value="TestLocal">
    <input type="hidden" name="order_id" id="order_id" value="<?php echo  $lastInsertId; ?>">
    <div style="width: 100%;
    height: 150px;
    text-align: center;
    margin-top: 15px;">
    <input type="image" src="../img/paypal.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!" value="支払う" style="
    width: 120px;
    border: none;
">
    <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
    </div>
</form>
</div></div></div>
       <?php
    }
  else{
 ?>
<?php  
 if (isset($_POST['to_step_2']) and $_POST['to_step_2']=='yes'){
    $c9oq='';
        
        foreach ($_POST['c9oq'] as $key=>$value) {
            if($value!='') $c9oq.=$value;
        }
        $c9lr='';
        foreach ($_POST['c9lr'] as $key=>$value) {
            if($value!='') $c9lr.=$value;
        }
       ?>
	   <div class="header1" style="height:300px;background:url(../img/bannerpage3.jpg);background-size: cover;"></div>
<div class='row'>
  <div class="col-md-12 col-xs-12">
<div class="tab-content">
    <div class="tab-pane active" id="tab1">
   <div class="container" style="max-width:769px;">
<div id="mainform">
    <h2><a href="/">Become a Host (Interpreter Guide) Entry Form</a></h2>
    <p class="step"><span>1. Enter form</span> → <em>2. Confirmation of input contents</em> → <span>3. send completely</span></p>
    <form action="/" method="post">
        <fieldset>
            <legend> Become a Guest Entry Form</legend>
            <input type="hidden" name="to_step_3" value="yes">
            <input type="hidden" name="t3di_guest" value="<?php echo $_POST['t3di_guest']; ?>">
            <input type="hidden" name="t0fl_guest" value="<?php echo $_POST['t0fl_guest']; ?>">
            <input type="hidden" name="t9hg_guest" value="<?php echo $_POST['t9hg_guest']; ?>">
            <input type="hidden" name="t3gq_guest" value="<?php echo $_POST['t3gq_guest']; ?>">
            <input type="hidden" name="t0sz_guest" value="<?php echo $_POST['t0sz_guest']; ?>">
            <input type="hidden" name="s5bo_guest" value="<?php echo $_POST['s5bo_guest']; ?>">
            <input type="hidden" name="t4ii_guest" value="<?php echo $_POST['t4ii_guest']; ?>">
            <input type="hidden" name="t0pi_guest" value="<?php echo $_POST['t0pi_guest']; ?>">
            <input type="hidden" name="t3di" value="<?php echo $_POST['t3di']; ?>">
            <input type="hidden" name="t4kl" value="<?php echo $_POST['t4kl'] ;?>">
            <input type="hidden" name="t2wv" value="<?php echo $_POST['t2wv']; ?>">
            <input type="hidden" name="t3gq" value="<?php echo $_POST['t3gq'] ;?>">
            <input type="hidden" name="t0sz" value="<?php echo $_POST['t0sz'] ;?>">
            <input type="hidden" name="s5bo" value="<?php echo $_POST['s5bo'] ;?>">
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
         <input type="hidden" name="file_zone1" value="<?php echo $_FILES['f6et']['name']; ?>">
          <input type="hidden" name="file_zone2" value="<?php echo $_FILES['f6rs']['name']; ?>">
           <input type="hidden" name="file_zone3" value="<?php echo $_FILES['f6hl']['name']; ?>">
           <input type="hidden" name="file_note1" value="<?php echo $_POST['t8kg']; ?>">
           <input type="hidden" name="file_note2" value="<?php echo $_POST['t5ue']; ?>">
           <input type="hidden" name="file_note3" value="<?php echo$_POST['t5wp']; ?>">
          <input type="hidden" name="file_eat1" value="<?php echo $_FILES['f5ue']['name']; ?>">
          <input type="hidden" name="file_eat2" value="<?php echo $_FILES['f5vi']['name']; ?>">
           <input type="hidden" name="file_eat3" value="<?php echo $_FILES['f9gp']['name']; ?>">
           <input type="hidden" name="file_eat_note1" value="<?php echo $_POST['t4gt']; ?>">
           <input type="hidden" name="file_eat_note2" value="<?php echo  $_POST['t0zf']; ?>">
           <input type="hidden" name="file_eat_note3" value="<?php echo $_POST['t8ia']; ?>">
            <input type="hidden" name="confirm" value="done"><input type="hidden" name="id" value="2">
             <input type="hidden" name="t4qr" value="<?php echo $_POST['t4qr']; ?>">
           <table>
                <tbody>
                <tr>
                <th>name<em class="required">※</em></th>
                <td>
                     <?php echo $_POST['t3di_guest']; ?>              
                </td>
                </tr>
                <tr>
                <th>Cellphone number<em class="required">※</em></th>
                <td>
                                  <?php echo $_POST['t0fl_guest']; ?>                 
                                                  </td>
                </tr>
                <tr>
                <th>mail address<em class="required">※</em></th>
                <td><?php echo $_POST['t9hg_guest']; ?>
                </td>
                </tr>
                <tr>
                <th>Street address<em class="required">※</em></th>
                <td>
                <span>Postal code:</span><?php echo $_POST['t3gq_guest']; ?>-<?php echo $_POST['t0sz_guest']; ?>
                 </br><span>Prefectures:</span><?php echo $_POST['s5bo_guest']; ?>
                 </br><span class="lside">Municipality</span><?php echo $_POST['t4ii_guest']; ?>
                  </br><span class="lside">Street address building</span><?php echo $_POST['t0pi_guest']; ?>
                  </td>
                </tr>
                </tbody>
                </table>
            <br>  
             <legend>Become a Host (Interpreter Guide) Entry Form</legend>  
            <table summary="Confirmation contents">
                <tbody><tr>
                    <th>name<em class="required">※</em></th>
                    <td>
                     <?php echo $_POST['t3di'] ;?></td>
                </tr>
                <tr>
                    <th>nickname<em class="required">※</em></th>
                    <td>
                        <?php echo $_POST['t4kl']; ?> </td>
                </tr>
                <tr>
                    <th>Name (Romaji)</th>
                    <td>
                       <?php echo $_POST['t2wv'] ;?>    </td>
                </tr>
                <tr>
                    <th>Street address<em class="required">※</em></th>
                    <td>
                        <?php echo $_POST['t3gq']; ?>-<?php echo $_POST['t0sz'] ;?><br>
                        <?php echo $_POST['s5bo'] ;?><br>
                       <?php echo $_POST['t4ii']; ?><br>
                        <?php echo $_POST['t0pi'] ;?>                   </td>
                </tr>
                <tr>
                    <th>Birthday<em class="required">※</em></th>
                    <td>
                        <?php echo $_POST['s6ib'];?> <?php echo $_POST['t2ne'];?>Year<?php echo $_POST['t9ip'];?>Month<?php echo $_POST['t3xl'];?>Day
                    </td>
                </tr>
                <tr>
                    <th>Cellphone number<em class="required">※</em></th>
                    <td>
                        <?php echo $_POST['t0fl'];?>                 </td>
                </tr>
                <tr>
                    <th>Supported languages<em class="required">※</em></th>
                    <td>
                        <?php echo $_POST['t7pj'];?>                   </td>
                </tr>
                <tr>
                    <th>profile<em class="required">※</em></th>
                    <td>
                       Profile (Please write in Japanese.): <?php echo $_POST['t1og'];?> <br>
                       Profile (Please write in interpretable language.): <?php echo $_POST['t3mp'];?> </td>
                </tr>
                <tr>
                    <th>mail address<em class="required">※</em></th>
                    <td>
                       <?php echo $_POST['t9hg'];?></td>
                </tr>
                <tr>
                    <th>Basic guide uptime<em class="required">※</em></th>
                    <td>
                       <?php echo $_POST['t4jy'];?>  </td>
                </tr>
                <tr>
                    <th>Minimum guide time<em class="required">※</em></th>
                    <td>
                         <?php echo $_POST['t9ag'];?>                </td>
                </tr>
                <tr>
                    <th>Hourly wages for the minimum guide time<em class="required">※</em></th>
                    <td>
                        <?php echo $_POST['t8nd'];?>  </td>
                </tr>
                <tr>
                    <th>Permitted early / late night operation<em class="required">※</em></th>
                    <td>
                    <?php echo $c9oq;?>       </td>
                </tr>
                <tr>
                    <th>Hourly early in the morning / late at night</th>
                    <td>
                        <?php echo $_POST['t9su'];?>      </td>
                </tr>
                <tr>
                    <th>Guidable area<em class="required">※</em></th>
                    <td>
                        <?php echo $_POST['s4lu'];?><br>
                       <?php echo $_POST['s4nx'];?><br>
                       <?php echo $_POST['s9pl'];?><br>
                       <?php echo $_POST['s6rf'];?><br>
                        <?php echo $_POST['s9oi'];?> </td>
                </tr>
                <tr>
                    <th>Moving means at guidance<em class="required">※</em></th>
                    <td>
                     <?php echo $c9lr;?>  </td>
                </tr>
                <tr>
                    <th>Current occupation</th>
                    <td>
                        <?php echo $_POST['t4qr'];?>  </td>
                </tr>
                 <tr>
                    <th>Recommended spot ①</th>
                    <td>
                        <?php echo $_FILES['f6et']['name']; ?>
                        <?php echo $_POST['t8kg']; ?>
                         <?php echo $_FILES['f6rs']['name']; ?>
                         <?php echo $_POST['t5ue']; ?>
                           <?php echo $_FILES['f6hl']['name']; ?>
                             <?php echo$_POST['t5wp']; ?> </td>
                </tr>
                 <tr>
                    <th>Recommended gourmet</th>
                    <td>
                       <?php echo $_FILES['f5ue']['name']; ?>
                       <?php echo $_POST['t4gt']; ?>
                      <?php echo $_FILES['f5vi']['name']; ?>
                      <?php echo  $_POST['t0zf']; ?> 
                    <?php echo $_FILES['f9gp']['name']; ?>
                      <?php echo $_POST['t8ia']; ?> </td>
                </tr>
               
              
            </tbody></table>
            <p>

                <input type="reset" value="Redo" onclick="history.back();return false;">
                <input type="submit" value="Send content">
            </p>
        </fieldset>
    </form>
</div>


         
            </div>  </div>
   
</div>
            </div>
 </div>

       <?php } else { ?>

		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'skt-corp' ),
				'after'  => '</div>',
			) );
	   }
    }
		?>

	<?php //edit_post_link( __( 'Edit', 'skt-corp' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>

<?php endif; ?>
