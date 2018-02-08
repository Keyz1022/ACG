<?php
/**
 * Template Name: Home page
 * @package sparkling
 */
?>

<?php
// include("header.php");
get_header();
?>
<div id="content" class="site-content">
	<div class="row top-section">
		<div class="container-fluid">
			<?php 
			echo do_shortcode('[smartslider3 slider=2]');
			?>
		</div>
	</div>
	<div class="clearfix"></div>
	<div class="container-fluid main-content-area">
		<div class="newsWrap">
			<div class="row row1">
				<div class="container">
					<h1>BẢN TIN ACG</h1>						
						<?php $catquery = new WP_Query( 'cat=37&posts_per_page=4' ); ?>
						<?php while($catquery->have_posts()) : $catquery->the_post(); ?>
						<div class="col-lg-3">
							<div class="item-news">
							<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
								<?php the_post_thumbnail( 'tin-tuc_thumb', array( 'class' => 'tin-tuc_thumb' )); ?></a>
							<h3><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
							<?php the_excerpt(__('(more…)')); ?>
							</div>
						</div>
						<?php endwhile; ?> 
						<?php wp_reset_postdata(); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="project">
			<div class="row row2">
				<div class="container">
					<h1>DỰ ÁN</h1>
					<table style="margin-bottom: 30px;">
						<tr>
							<td colspan="2" style="padding-right: 22px">
								<a href="http://localhost/vietinterview/du_an_cat/can-ho/"><img src="<?php echo get_stylesheet_directory_uri()?>/images/can_ho.jpg">
								<h3>Căn hộ</h3></a>
							</td>
							<td>
								<a href="http://localhost/vietinterview/category/du-an/dat-nen/"><img src="<?php echo get_stylesheet_directory_uri()?>/images/dat_nen.png">
								<h3>Đất nền</h3></a>
							</td>
						</tr>
						<tr>
							<td>
								<a href="http://localhost/vietinterview/category/du-an/khu-nghi-duong/"><img src="<?php echo get_stylesheet_directory_uri()?>/images/khu_nghi_duong.png">
								<h3>Khu nghỉ dưỡng</h3></a>
							</td>
							<td>
								<a href="http://localhost/vietinterview/category/du-an/biet-thu/"><img src="<?php echo get_stylesheet_directory_uri()?>/images/biet_thu.jpg">
								<h3>Biệt thự</h3></a>
							</td>
							<td>
								<a href="http://localhost/vietinterview/category/du-an/officetel-office-hotel/"><img src="<?php echo get_stylesheet_directory_uri()?>/images/office.png">
								<h3>Officetel (Office + Hotel)</h3></a>
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>

		<div class="aboutWrap">
			<div class="container">
				<div class="row row3">
					<h1>GIỚI THIỆU VỀ ACG</h1>
					<p>Công ty cổ phần đầu tư ACG Việt Nam được thành lập và hoạt động với phương châm: “Kết nối thị trường – Dẫn đường đầu tư”. ACG cam kết luôn cố gắng nỗ lực cung cấp cho khách hàng những sản phẩm dịch vụ tốt nhất. 
					ACG được thành lập dựa trên những cổ đông sáng lập có uy tín và thâm niên trong lĩnh vực: Tài chính, nhân sự, luật, bất động sản , xây dựng, cơ điện. Trong quá trình xây dựng và hoạt động ACG quyết tâm xây dựng và phát triển đội ngũ nhân sự có trình độ cao, tác phong chuyên nghiệp đáp ứng tốt nhất và tối đa yêu cầu của khách hàng trong các sản phẩm dịch vụ mà công ty kinh doanh.</p>
					<div class="md-content col-xs-12 col-lg-12">
						<div class="item item1 col-xs-12 col-md-6">
							<div class="thumb">
								<img src="<?php echo get_stylesheet_directory_uri()?>/images/icon_lichsu.png">
							</div>
							<div class="content">
								<h3>Quá trình hình thành và phát triển</h3>
								<p>Ngày 19/04/2011, Công ty Cổ phần Đầu ACG Việt Nam được thành lập theo Giấy phép Chứng nhậ Đăng ký kinh doanh số: 0105264673 do Sở Kế hoạch Đầu tư thành phố Hà Nội cấp, với vốn số vốn điều lệ là 60 tỷ VNĐ. Công ty được thành lập bởi những cổ đông có kinh nghiệm thâm niên trong lĩnh vực: Tài chính, Nhân sự, Bất động sản, Cơ điện và xây dựng và là một thành viên của mạng các Sàn giao dịch bất động sản Việt Nam, Phòng Thương mại và Công nghiệp Việt Nam – VCCI.</p>
							</div>
						</div>
						<div class="item item2 col-xs-12 col-md-6">
							<div class="thumb">
								<img src="<?php echo get_stylesheet_directory_uri()?>/images/icon_tamnhin.png">
							</div>
							<div class="content">
								<h3>Tầm nhìn</h3>
								<p>Trở thành Công ty cung cấp dịch vụ bất động sản trọn gói từ A –Z số 1 của Việt Nam.</p>
								<h3>Sứ mệnh</h3>
								<ul>
									<li>Cung cấp các giải pháp tư vấn toàn diện về dịch vụ bất động sản cho khách hàng.</li>
									<li>Trở thành đối tác tin cậy nhất của khách hàng trong lĩnh vực công ty kinh doanh.</li>
									<li>Tạo điều kiện tốt nhất để mỗi Cán bộ Nhân viên, cổ đông có cuộc sống đầy đủ về kinh tế, phát huy năng lực sáng tạo và phát triển sự nghiệp của bản thân.</li>
									<li>Là tổ chức có trách nhiệm xã hội cao, tích cực tham gia các hoạt động cộng đồng, đóng vào hoạt động xây dựng và phát triển xã hội.</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="fieldsWrap">
			<div class="container">
				<div class="row row4">
					<h1>SẢN PHẨM CHÍNH CỦA CHÚNG TÔI</h1>
					<div class="col-lg-4">
						<div class="item-fields">
							<img src="<?php echo get_stylesheet_directory_uri()?>/images/xaydung_img.png">
							<figcaption>
								<h3>Dịch vụ sàn giao dịch bất động sản</h3>
								<div class="brief">
									- Môi giới bán, cho thuê, mua, thuê bất động sản.</br>
									- Dịch vụ quản lý bất động sản</br>
									- Dịch vụ quảng cáo bất động sản</br>
									- Dịch vụ định giá bất động sản</br>
									- Tư vấn môi giới chuyển nhượng dự án bất động sản</br>
								</div>
							</figcaption>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="item-fields">
							<img src="<?php echo get_stylesheet_directory_uri()?>/images/batdongsan_img.png">
							<figcaption>
								<h3>Tài chính bất động sản</h3>
								<div class="brief">
									- Tư vấn đầu tư bất động sản</br>
									- Tư vấn hỗ trợ thủ tục ngân hàng: Cá nhân/ Doanh nghiệp</br>
									- Tư vấn phát triển dự án bất động sản</br>
								</div>
							</figcaption>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="item-fields">
							<img src="<?php echo get_stylesheet_directory_uri()?>/images/daututaichinh_img.png">
							<figcaption>
								<h3>Nội, ngoại thất, phong thủy</h3>
								<div class="brief">
								</div>
							</figcaption>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="partner">
			<div class="container">
				<div class="row row5">
					<h1>ĐỐI TÁC</h1>
					<p>Là thương hiệu hàng đầu trên thị trường bất động sản Việt Nam, công ty ACG luôn được các đối tác đánh giá cao về năng lực và uy tín kinh doanh. Công ty ACG đã trở thành đối tác tin cậy của hàng loạt công ty, tập đoàn hàng đầu trong rất nhiều lĩnh vực.</p>
					<table cellspacing="30" cellpadding="60" align="center">
						<tr>
							<td width="300px" align="center"><img src="<?php echo get_stylesheet_directory_uri()?>/images/01_vietin.png"></td>
							<td width="300px" align="center"><img src="<?php echo get_stylesheet_directory_uri()?>/images/05_vpbank.png"></td>
							<td width="300px" align="center"><img src="<?php echo get_stylesheet_directory_uri()?>/images/02_bidv.png"></td>
							<td width="300px" align="center"><img src="<?php echo get_stylesheet_directory_uri()?>/images/03_vietcombank.png"></td>
							<td width="300px" align="center"><img src="<?php echo get_stylesheet_directory_uri()?>/images/04_techcombank.png"></td>
						</tr>
						<tr>
							<td align="center"><img src="<?php echo get_stylesheet_directory_uri()?>/images/06_tpbank.png"></td>
							<td align="center"><img src="<?php echo get_stylesheet_directory_uri()?>/images/logo-gk.png"></td>
							<td align="center"><img src="<?php echo get_stylesheet_directory_uri()?>/images/07_ongandong.png"></td>
							<td align="center"><img src="<?php echo get_stylesheet_directory_uri()?>/images/15_anphong.png"></td>
							<td align="center"><img src="<?php echo get_stylesheet_directory_uri()?>/images/06_savills.jpg"></td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
// include("footer.php");
get_footer();
?>