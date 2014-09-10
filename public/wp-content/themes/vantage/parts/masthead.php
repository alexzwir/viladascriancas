<?php
/**
 * Part Name: Default Masthead
 */
?>
<header id="masthead" class="site-header" role="banner">

	<div>
		<hgroup class="full-container">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home" class="logo"><?php vantage_display_logo(); ?></a>

			<?php if( is_active_sidebar('sidebar-header') ) : ?>

				<div id="header-sidebar">
					<?php
					// Display the header area sidebar, and tell mobile navigation that we can use menus in here
					add_filter('siteorigin_mobilenav_is_valid', '__return_true');
					dynamic_sidebar( 'sidebar-header' );
					remove_filter('siteorigin_mobilenav_is_valid', '__return_true');
					?>
				</div>

			<?php else : ?>

				<div class="support-text">
					<div class="header_adress_phone"> 
						<a href="">telefone: XX-XXXXX.XXXX</a> 
						<p>Endereço: Rua Pio X, 123.</p>
					</div>
					<?php do_action('vantage_support_text'); ?>
				</div>

			<?php endif; ?>

				<div>
					<?php get_template_part( 'parts/menu', apply_filters( 'vantage_menu_type', siteorigin_setting( 'layout_menu' ) ) ); ?>
				</div>

		</hgroup><!-- hgroup.full-container -->

		<!-- ?php get_template_part( 'parts/menu', apply_filters( 'vantage_menu_type', siteorigin_setting( 'layout_menu' ) ) ); ?-->
	</div>
</header><!-- #masthead .site-header -->