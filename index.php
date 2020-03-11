<?php get_header(); ?>

<div class="content">
	<div class="content-wrap">
		<?php if ( is_home() && !is_paged() ): ?>
			<?php if ( get_theme_mod('profile-image') || get_theme_mod('profile-name') || get_theme_mod('profile-description') ): ?>
				<div id="profile" class="content-wrap group">
					<div id="profile-inner">
						<?php if ( get_theme_mod('profile-name') ): ?>
							<div id="profile-name"><?php echo get_theme_mod('profile-name'); ?></div>
						<?php endif; ?>
						<?php if ( get_theme_mod('profile-image') ): ?>
							<div id="profile-image"><img src="<?php echo get_theme_mod('profile-image'); ?>" alt="" /></div>
						<?php endif; ?>
						<?php if ( get_theme_mod( 'profile-social', 'on' ) == 'on' ): ?>
							<?php typesolid_social_links() ; ?>
						<?php endif; ?>
						<?php if ( get_theme_mod('profile-description') ): ?>
							<div id="profile-description"><?php echo get_theme_mod('profile-description'); ?></div>
						<?php endif; ?>
					</div>
				</div>
			<?php endif; ?>
		<?php endif; ?>

		<?php if ( get_theme_mod('heading-enable','off') == 'on' ) : ?>
			<?php get_template_part('inc/page-title'); ?>
		<?php endif; ?>
		
		<?php get_template_part('inc/front-widgets-top'); ?>
		
		<?php if ( have_posts() ) : ?>
			
			<?php while ( have_posts() ): the_post(); ?>
				<?php get_template_part('content'); ?>
			<?php endwhile; ?>
			
			<?php get_template_part('inc/front-widgets-bottom'); ?>
			<?php get_template_part('inc/pagination'); ?>
			
		<?php endif; ?>
	</div>
</div><!--/.content-->

<?php get_sidebar(); ?>

<?php get_footer(); ?>