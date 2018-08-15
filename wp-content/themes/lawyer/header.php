<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a style="display: none;" class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'lawyer' ); ?></a>


	<header>
		<div class="headerMain cd-auto-hide-header" >
			<div class="headerMain__top">
				
				<a class="menu-link" href="#0">
				  <span class="hamburger "></span>
				  <span class="hamburger-title">меню</span>
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
							<li><a href="http://lawyer.io/o-kompanii">о компании </a></li>
							<li><a  href="http://lawyer.io/uslugi">услуги </a></li>
							<li><a  href="http://lawyer.io/kejsy">кейсы</a></li>
							<li><a  href="http://lawyer.io/kontakty">контакты</a></li>
	                        <li><a href="tel:+78182408800" class="header__info_phnmedia" >+7 (8182) 40-88-00</a></li>
	                        <li><a href="#ctaForm" class="headerMain__btn smoothscroll">Задать вопрос </a></li>
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
