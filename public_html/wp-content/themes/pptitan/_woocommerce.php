<?php
/**
 * The main template file for display page.
 *
 * @package WordPress
*/


/**
*	Get Current page object
**/
$page = get_page($post->ID);


/**
*	Get current page id
**/
$current_page_id = '';

if(isset($page->ID))
{
    $current_page_id = $page->ID;
}

get_header(); 
?>

<br class="clear"/>
</div>

<?php
//Get Page background style
$pp_shop_bg = get_option('pp_shop_bg'); 
			
if(empty($pp_shop_bg))
{
    $pp_shop_bg = get_stylesheet_directory_uri().'/example/bg.jpg';
}

wp_enqueue_script("script-static-bg", get_stylesheet_directory_uri()."/templates/script-static-bg.php?bg_url=".$pp_shop_bg, false, THEMEVERSION, true);
?>

<!-- Begin content -->
<div id="page_content_wrapper" class="fade-in two">

    <div class="inner">
    
    <!-- Begin main content -->
    <div class="inner_wrapper">
    
    	<div id="page_caption">
    		<h1 class="cufon"><?php _e( 'Our Shop', THEMEDOMAIN ); ?></h1>
    	</div>
        
        <div class="sidebar_content full_width nomargintop transparentbg">
        
        	<div class="sidebar_content <?php echo $page_class; ?>">
        	
        			<?php woocommerce_content();  ?>
        			
        	</div> 
        	
        	<div class="sidebar_wrapper">
        		<div class="sidebar">
        		
        			<div class="content">
        		
        				<ul class="sidebar_widget">
        					<?php 
		    	    			if(!is_single())
		    	    			{
		    	    				dynamic_sidebar('Shop Sidebar'); 
		    	    			}
		    	    			else
		    	    			{
			    	    			dynamic_sidebar('Single Product Sidebar'); 
		    	    			}
		    	    		?>
        				</ul>
        			
        			</div>
        	
        		</div>
        		<br class="clear"/>
        
        		<div class="sidebar_bottom"></div>
        	</div>
    
        </div>
    
    </div>
    <!-- End main content -->
</div>

<?php get_footer(); ?>
