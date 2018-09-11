<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
<!-- 	<div class="loader">
		<div class="loader_inner"></div>
	</div> -->

<div id="page" class="site">
	<a style="display: none;" class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'lawyer' ); ?></a>


	<header>
		<div class="headerMain cd-auto-hide-header">
			<div class="headerMain__top" id="header__tip">
	            	
					<a class="menu-link" href="#0">
					  <span class="hamburger "></span>
		              <span class="hamburger-title"><?php pll_e('menu','nation'); ?></span>
					</a>     
	            				

					<nav class="menu">
						<ul>
		                    <li>
							     <a class="objectMenu" href="<?php echo home_url(); ?>"></a>
		                      	 <object
			                       type="image/svg+xml"
			                       data="<?php echo get_template_directory_uri() ?>/img/svg-files/logoSvgMobile.svg">
			                       <img src="<?php echo get_template_directory_uri() ?>/img/svg-files/logoSvgMobile.png">
		                      	 </object>			
		                    </li>
							<li><a href="http://lawyer.io/o-kompanii"><?php pll_e('menu-item-1' ); ?> </a></li>
							<li><a  href="http://lawyer.io/uslugi"><?php pll_e('menu-item-2' ); ?> </a></li>
							<li><a  href="http://lawyer.io/kejsy"><?php pll_e('menu-item-3' ); ?></a></li>
							<li><a  href="http://lawyer.io/kontakty"><?php pll_e('menu-item-4' ); ?></a></li>
	                        <li><a href="tel:+78182408800" class="header__info_phnmedia" >+7 (8182) 40-88-00</a></li>
	                        <li><a href="#ctaForm" class="headerMain__btn smoothscroll"><?php pll_e('menu-item-btn' ); ?> </a></li>
						   	<li>
   						        <ul  class="languages" id="languages__tip">
   		                           <?php pll_the_languages(array(
   						  	       	// 'show_flags'=>2,
   						  	       	'show_names'=>1
   						  	       )); ?> 
   						  	    </ul>
						   	</li>
						</ul>
					</nav> 

					<div class="headerMain__top_cta">
					   <a class="header_phone" href="tel:+78182408800"  > <i class="material-icons">phone</i>+7 (8182) 40-88-00</a>	
				        
				    </div>

			

			</div>
		</div>
	</header> 
    <!--  Тут начинается контент для страницы main-page -->
	<div id="content" class="site-content">
