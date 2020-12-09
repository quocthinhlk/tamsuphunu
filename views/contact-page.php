<?php
/**
 * template name: Liên hệ
 */
?>

<?php get_header(); ?>
<div class="wp_bread_crumb">
	<div class="bread_crumb">
		<div class="container">
			<h1 class="header">Liên hệ</h1>
			<div class="breadcrumb"><a href="<?php echo get_bloginfo('url') ?>">Trang chủ</a> &nbsp;  <span>»</span> &nbsp; <span class="current-item">Liên hệ</span></div>
		</div>
	</div>
</div>
<div class="bg-gray section-space contact_page">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-xs-12">
				<div class="contact">
					<div class="row section-title">
						<div class="col-md-12">
							<h3 class="text-center">Liên hệ với chúng tôi</h3>
							<h4 class="site_title">Tâm sự phụ nữ</h4>
							<p class="address_p"><i class="fas fa-home"></i><strong>Địa chỉ:</strong><?php the_field('footer_address', 'option'); ?></p>
							<p class="address_p"><i class="fas fa-phone-alt"></i><strong>Hotline:</strong><?php the_field('footer_phone', 'option'); ?></p>
							<p class="address_p"><i class="fas fa-envelope"></i><strong>Email:</strong><?php the_field('footer_email', 'option'); ?></p>
						</div>
					</div>

				</div>
			</div>
			<div class="col-md-6 col-xs-12">
				<div class="form">
					<div class="row section-title">
						<div class="col-md-12">
							<h3 class="text-center">Liên hệ giải đáp</h3>
						</div>
					</div>
					<form class="col-md-12 center-block form-active clearfix " data-client-email-field="E-mail" data-client-name-field="Name" data-title="New email from your website" method="post">
						<div class="col-md-6">
							<input class="form-field" name="Name" placeholder="Tên" type="text">
						</div>
						<div class="col-md-6">
							<input class="form-field" data-required="no" name="Phone" placeholder="Điện thoại" type="text">
						</div>
						<div class="col-md-6">
							<input class="form-field" name="E-mail" placeholder="Email" type="email">
						</div>
						<div class="col-md-6">
							<input class="form-field" name="Subject" placeholder="Tiêu đề" type="text">
						</div>
						<div class="col-md-12">
							<textarea class="form-field" cols="5" name="message" placeholder="Nội dung" rows="10"></textarea>
						</div>
						<div class="col-md-12 text-center">
							<button class="button " type="button"><span>Gửi</span></button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="contact_map">
	<?php the_field('embed_location'); ?>
</div>
<?php get_footer(); ?>