	</div><!-- #content -->



	<!-- Footer -->
		<section class="mapContact" id="contact">
			<div class="mapWrapper">
				<!-- <div class="map" id="map_canvas"></div> -->
				<div class="map" id="map" >
					
				</div>
                    

                    <div class="contactBlock">
                    	<ul>
                    		<li class="contactBlock__adress">
                    				<!-- Адрес    -->
                    				<?php if ( ot_get_option( 'footer__address')){ ?>
                    			         <?php echo ot_get_option( 'footer__address' ); ?>
                    				<?php } ?>
                    		</li>
                    		<li>
                    			<span class="contactBlock__span"><?php pll_e('time-work'); ?></span>
                    				<!-- Время работы  -->
                    				<?php if ( ot_get_option( 'footer__timework')){ ?>
                    			         <?php echo ot_get_option( 'footer__timework' ); ?>
                    				<?php } ?>
                    		</li>
                    		<li>
                    				<!-- Почта    -->
                    				<?php if ( ot_get_option( 'footer__email')){ ?>
                    			         <a href="mailto:office@jurist29.ru"><?php echo ot_get_option( 'footer__email' ); ?></a>
                    				<?php } ?>
                    		</li>
                    	</ul>
                    	<ul>
                    		<li>
                    			<span class="contactBlock__span"><?php pll_e('city-phone'); ?></span>
                    					<!-- Телефон городской  -->
                    				<?php if (ot_get_option( 'phone__city' )) {?>
                    							<a  href="callto:<?php echo str_replace( array( ' ', ')','(','-' ), '', ot_get_option( 'phone__city_link' ))?>" >
                    			                    <?php echo ot_get_option( 'phone__city' ); ?>
                    			                </a>
                    			     <?php }?>
                                     <span class="contactBlock__span"></span>
                			     	<?php if (ot_get_option( 'phone__city2' )) {?>
                			     				<a  href="callto:<?php echo str_replace( array( ' ', ')','(','-' ), '', ot_get_option( 'phone__city2_link' ))?>" >
                			                         <?php echo ot_get_option( 'phone__city2' ); ?>
                			                    </a>
                			         <?php }?>


                    		</li>
                    		<li>
                    			<span class="contactBlock__span"><?php pll_e('mobile-phone'); ?></span>
                    					<!-- Телефон мобильный  -->
                    				<?php if (ot_get_option( 'phone__mobile' )) {?>
                    							<a  href="callto:<?php echo str_replace( array( ' ', ')','(','-' ), '', ot_get_option( 'phone__mobile_link' ))?>" >
                    			                    <?php echo ot_get_option( 'phone__mobile' ); ?>
                    			                </a>
                    			     <?php }?>
                    			
                    		</li>
                    		<li>
                    			<span class="contactBlock__span"><?php pll_e('fax-phone'); ?></span>
                				     <!-- Телефон- факс -->
                			     	<?php if (ot_get_option( 'fax__city' )) {?>
                			     				<a  href="callto:<?php echo str_replace( array( ' ', ')','(','-' ), '', ot_get_option( 'fax__city_link' ))?>" >
                			                         <?php echo ot_get_option( 'fax__city' ); ?>
                			                    </a>
                			         <?php }?>
                    		</li>
                    	</ul>
                    	<ul>
                    		<li>
                    			   <div class="social-block">
				   			   	    <?php
								       $social__list_item = ot_get_option('social__list_item');
								    ?>

							   	    <?php 
							   	       foreach ($social__list_item as $items__social) :
							   	       	$social__link_icon = $items__social['social__link'] ? $items__social['social__link'] : ''; 
							   	       	$social__link_upload = $items__social['social__upload'] ? $items__social['social__upload'] : ''; 
							   	    ?>          
			                  
			                           <a href="<?php echo $social__link_icon; ?>"><img src="<?php echo $social__link_upload; ?>" alt=""></a>

							   	     <?php 
							   	     endforeach;
							   	     ?>
								   </div>
                    		</li>
                    	</ul>
                    </div>


					<div class="contactBlock" style="display: none;">
			          <div>
						<span class="contactBlock__adress">
							<!-- Адрес    -->
							<?php if ( ot_get_option( 'footer__address')){ ?>
						         <?php echo ot_get_option( 'footer__address' ); ?>
							<?php } ?>
						</span>

					    <span>Время работы:
				    		<!-- Время работы  -->
				    		<?php if ( ot_get_option( 'footer__timework')){ ?>
				    	         <?php echo ot_get_option( 'footer__timework' ); ?>
				    		<?php } ?>
					    </span>
					    <span>
				    		<!-- Почта    -->
				    		<?php if ( ot_get_option( 'footer__email')){ ?>
				    	         <a href="mailto:office@jurist29.ru"><?php echo ot_get_option( 'footer__email' ); ?></a>
				    		<?php } ?>
					    </span>
					  </div>
					  <div>

							<span>Городской: 
								<!-- Телефон городской  -->
							<?php if (ot_get_option( 'phone__city' )) {?>
										<a  href="callto:<?php echo str_replace( array( ' ', ')','(','-' ), '', ot_get_option( 'phone__city_link' ))?>" >
						                    <?php echo ot_get_option( 'phone__city' ); ?>
						                </a>
						     <?php }?>

					     	<?php if (ot_get_option( 'phone__city2' )) {?>
					     				<a  href="callto:<?php echo str_replace( array( ' ', ')','(','-' ), '', ot_get_option( 'phone__city2_link' ))?>" >
					                         <?php echo ot_get_option( 'phone__city2' ); ?>
					                    </a>
					         <?php }?>
							</span>


							<span>Мобильный: 
								<!-- Телефон мобильный  -->
							<?php if (ot_get_option( 'phone__mobile' )) {?>
										<a  href="callto:<?php echo str_replace( array( ' ', ')','(','-' ), '', ot_get_option( 'phone__mobile_link' ))?>" >
						                    <?php echo ot_get_option( 'phone__mobile' ); ?>
						                </a>
						     <?php }?>
						     </span>					    
						     <span>Факс:
						     <!-- Телефон- факс -->
					     	<?php if (ot_get_option( 'fax__city' )) {?>
					     				<a  href="callto:<?php echo str_replace( array( ' ', ')','(','-' ), '', ot_get_option( 'fax__city_link' ))?>" >
					                         <?php echo ot_get_option( 'fax__city' ); ?>
					                    </a>
					         <?php }?>
							</span>
					   </div>


					   <div class="social-block">

	   			   	    <?php
					       $social__list_item = ot_get_option('social__list_item');
					    ?>


				   	    <?php 
				   	       foreach ($social__list_item as $items__social) :
				   	       	$social__link_icon = $items__social['social__link'] ? $items__social['social__link'] : ''; 
				   	       	$social__link_upload = $items__social['social__upload'] ? $items__social['social__upload'] : ''; 
				   	    ?>          
                  
                           <a href="<?php echo $social__link_icon; ?>"><img src="<?php echo $social__link_upload; ?>" alt=""></a>


				   	     <?php 
				   	     endforeach;
				   	     ?>

					   </div>
 				    </div>



			</div>
		</section>




	<footer id="colophon" class="site-footer" style="display: none;">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'lawyer' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'lawyer' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'lawyer' ), 'lawyer', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->





</div><!-- #page -->

<?php wp_footer(); ?>


</body>
</html>
