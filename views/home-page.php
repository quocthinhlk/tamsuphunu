<?php
/**
 * template name: Trang chủ
 */
?>

<?php get_header(); ?>

<main>
	<section class="nav_slider">
		<div class="slider owl-carousel owl-loaded owl-drag">
			<?php
			if( have_rows('slider') ):
			    while( have_rows('slider') ) : the_row();
			        $image 	= get_sub_field('slider_image');
			        $title 	= get_sub_field('slider_title');
			        $sub_title 	= get_sub_field('slider_sub_title');
			        ?>
			        <div class="slide_item" style="background-image: url(<?php echo $image['url']; ?>);">
						<div class="s_header">
							<h2 class="s_header_title">
								<?php echo $title; ?>
							</h2>
							<p class="s_header_sub_title"><?php echo $sub_title; ?></p>
						</div>
					</div>
			    <?php endwhile;
			endif;
			?>
		</div>
	</section>
	<section class="section_1">
		<div class="container">
			<div class="block_header">
				<h2 class="block_title">Bí quyết làm đẹp</h2>
			</div>
			<div class="row">
				<?php $args = array(
					'post_type' => 'post',
					'posts_per_page'  =>  3,
					'tax_query' => array(
						array(
							'taxonomy' => 'category',
							'field'    => 'slug',
							'terms'    => 'bi-quyet-lam-dep',
						),
					),
				);
				$the_query = new WP_Query( $args ); ?>
				<?php if ( $the_query->have_posts() ) : ?>
					<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="p1_wrap">
								<div class="p1_feat">
									<a class="p1_flink" href="<?php echo get_permalink() ?>">
										<img class="overlay_effec" src="<?php the_post_thumbnail_url(); ?>" >
									</a>
								</div>
								<div class="p1_header">
									<p class="p1_entry_title">
										<a href="<?php echo get_permalink() ?>"><?php the_title(); ?></a>
									</p>
								</div>
								<p class="entry-summary txt_content"><?php the_excerpt(); ?></p>
								<div class="p1_footer">
									<i class="far fa-user"></i>
									<span class="meta_info_author txt_content"><?php echo get_the_author() ?></span>
									<span class="meta_info_date">
										<i class="far fa-clock"></i>
										<abbr class="date published txt_content">&nbsp;<?php echo get_the_date(); ?></abbr>
									</span>
								</div>
							</div>
						</div>
					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
					<?php else : ?>
						<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
					<?php endif; ?>
				</div>
			</div>
		</section>
		<section class="section_2">
			<div class="container">
				<div class="block_header">
					<h2 class="block_title">ĐỊA CHỈ LÀM ĐẸP</h2>
				</div>
				<div class="row">
					<?php $args = array(
						'post_type' => 'post',
						'posts_per_page'  =>  4,
						'tax_query' => array(
							array(
								'taxonomy' => 'category',
								'field'    => 'slug',
								'terms'    => 'dia-chi-lam-dep',
							),
						),
					);
					$the_query = new WP_Query( $args );
					$count =0;
					?>
					<?php if ( $the_query->have_posts() ) : ?>
						<?php while ( $the_query->have_posts() ) : $the_query->the_post(); $count++ ?>
							<?php
							if($count == 1){ ?>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<div class="p2_left">
										<div class="p2_left_top">
											<div class="p2_feat overlay_effec" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
												<a href="<?php echo get_permalink() ?>" class="p2_feat_content_title"> 
													<div class="content">
														<div class="inner">
															<p class="title"><?php the_title(); ?></p>
														</div>
													</div>
												</a>
											</div>
										<?php }else if($count == 2){ ?>
											<div class="p2_feat overlay_effec" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
												<a href="<?php echo get_permalink() ?>" class="p2_feat_content_title"> 
													<div class="content">
														<div class="inner">
															<p class="title"><?php the_title(); ?></p>
														</div>
													</div>
												</a>
											</div>
										</div>
									<?php }else if($count == 3){ ?>
										<div class="p2_left_bottom">
											<div class="p2_feat overlay_effec" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
												<a href="<?php echo get_permalink() ?>" class="p2_feat_content_title"> 
													<div class="content">
														<div class="inner">
															<p class="title"><?php the_title(); ?></p>
														</div>
													</div>
												</a>
											</div>
										</div>
									</div>
								</div>
							<?php }else if($count == 4){ ?>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<div class="p2_right">
										<div class="p2_feat overlay_effec" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
											<a href="<?php echo get_permalink() ?>" class="p2_feat_content"> 
												<div class="content">
													<div class="inner">
														<p class="title"><?php the_title(); ?></p>
														<div class="p2_right_description">
															<p class="description">
																<i class="far fa-user"></i>
																<span class="meta_info_author"><?php echo get_the_author() ?></span>
																<span class="meta_info_date">
																	<i class="far fa-clock"></i>
																	<abbr class="date published">&nbsp;<?php echo get_the_date(); ?></abbr>
																</span>
															</p>
															<p class="p2_read_more">Xem thêm <span><i class="fas fa-arrow-right"></i></span></p>
														</div>
													</div>
												</div>
											</a>
										</div>
									</div>
								</div>
							<?php }
							?>
						<?php endwhile; ?>
						<?php wp_reset_postdata(); ?>
						<?php else : ?>
							<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
						<?php endif; ?>
				</div>
			</div>
		</section>
		<section class="section_3">
			<div class="container">
				<div class="block_header">
					<h2 class="block_title">TÂM SỰ</h2>
				</div>
				<div class="row">
					<?php $args = array(
						'post_type' => 'post',
						'posts_per_page'  =>  4,
						'tax_query' => array(
							array(
								'taxonomy' => 'category',
								'field'    => 'slug',
								'terms'    => 'tam-su',
							),
						),
					);
					$the_query = new WP_Query( $args ); ?>
					<?php if ( $the_query->have_posts() ) : ?>
						<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<div class="p3_wrap">
									<div class="p3_feat">
										<a class="p3_flink" href="<?php echo get_permalink() ?>">
											<img class="overlay_effec" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
										</a>
									</div>
									<div class="p3_text">
										<div class="p1_header">
											<p class="p1_entry_title">
												<a href="<?php echo get_permalink() ?>"><?php the_title(); ?></a>
											</p>
										</div>
										<?php the_excerpt(); ?>
										<div class="p1_footer">
											<i class="far fa-user"></i>
											<span class="meta_info_author"><?php echo get_the_author() ?></span>
											<span class="meta_info_date">
												<i class="far fa-clock"></i>
												<abbr class="date published">&nbsp;<?php echo get_the_date(); ?></abbr>
											</span>
										</div>
									</div>
								</div>
							</div>
						<?php endwhile; ?>
						<?php wp_reset_postdata(); ?>
						<?php else : ?>
							<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
						<?php endif; ?>
					</div>
				</div>
			</section>
			<section class="section_4">
				<div class="cs4_wrapper">
					<div class="container">
						<div class="p4_content">

							<div class="tab_content">
								<?php 
								$rows = get_field('featured_category');
								if( $rows ) {
									$count = 0;
								    foreach( $rows as $row ) {
								    	$count++;
								        $title = $row['featured_category_title'];
								        $description = $row['featured_category_description']; ?>
								        <div id="<?php echo $count; ?>" class="cat_list_header tabs-content">
											<div class="block_header">
												<p class="tab_title"><?php echo $title; ?></p>
											</div>
											<p><?php echo $description; ?></p>
										</div>
								    <?php }
								}
								?>
							</div>

							<div id="tabs-nav" class="cat_list_items">
								<?php 
								$rows = get_field('featured_category');
								if( $rows ) {
									$count = 0;
								    foreach( $rows as $row ) {
								    	$count++;
								        $image = $row['featured_category_img'];
								        $name = $row['featured_category_name']; ?>
								        <div class="item tablinks" onclick="openTab(event, '<?php echo $count; ?>')">
											<img src="<?php echo $image['url']; ?>">
											<p><?php echo $name; ?></p>
										</div>
								    <?php }
								}
								?>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="section_5">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-sm-8 col-xs-12">
							<div class="block_header">
								<h2 class="block_title">MẸO HAY</h2>
							</div>
							<div class="p5_post">
								<?php $args = array(
									'post_type' => 'post',
									'posts_per_page'  =>  4,
									'tax_query' => array(
										array(
											'taxonomy' => 'category',
											'field'    => 'slug',
											'terms'    => 'meo-hay',
										),
									),
								);
								$the_query = new WP_Query( $args ); ?>
								<?php if ( $the_query->have_posts() ) : ?>
									<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
										<div class="post_item">
											<div class="p5_feat">
												<a class="p5_flink" href="<?php echo get_permalink() ?>">
													<img class="overlay_effec" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
												</a>
											</div>
											<div class="p5_content">
												<div class="p1_header">
													<p class="p1_entry_title">
														<a href="<?php echo get_permalink() ?>"><?php the_title(); ?></a>
													</p>
												</div>
												<?php the_excerpt(); ?>
												<div class="p1_footer">
													<i class="far fa-user"></i>
													<span class="meta_info_author"><?php echo get_the_author() ?></span>
													<span class="meta_info_date">
														<i class="far fa-clock"></i>
														<abbr class="date published">&nbsp;<?php echo get_the_date(); ?></abbr>
													</span>
												</div>
											</div>
										</div>
									<?php endwhile; ?>
									<?php wp_reset_postdata(); ?>
									<?php else : ?>
										<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
									<?php endif; ?>
								</div>
							</div>
							<?php get_sidebar(); ?>
							</div>
						</div>
					</section>
				</main>

				<?php get_footer(); ?>