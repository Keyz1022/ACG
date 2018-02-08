<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package sparkling
 */
?>
		</div><!-- close .row -->
	</div><!-- close .container -->
</div><!-- close .site-content -->

	<div id="footer-area">
		<div class="container footer-inner">
			<div class="row">
				<?php get_sidebar( 'footer' ); ?>
			</div>
		</div>

		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="site-info container">
				<div class="row row-footer">
					<div class="col-lg-4">
						<div class="col1">
							<h4>KẾT NỐI VỚI ACG</h4>
							<hr/> 
							<ul>
								<li><a href="http://facebook.com/"><em class="fa fa-facebook" aria-hidden="true"></em></a></li>
								<li><a href="http://linkedin.com/"><em class="fa fa-youtube-play" aria-hidden="true"></em></a></li>
								<li><a href="http://plus.google.com/"><em class="fa fa-google-plus" aria-hidden="true"></em></a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="col2">
							<h4>ĐĂNG KÝ NHẬN BẢN TIN</h4>
							<hr/> 
							<p>Để nhận được thông tin dự án mới nhất và ưu đãi từ ACG</p>
							<input type="email" name="email" value="Địa chỉ email" class="input">
							<input type="submit" name="submit" value="Đăng Ký">
						</div>
					</div>
					<div class="col-lg-4">
						<div class="col3">
							<h4>CÔNG TY CỔ PHẦN ĐẦU TƯ VÀ TƯ VẤN ACG VIỆT NAM</h4>
							<hr/> 
							<ul>
	                            <li>
	                                <em class="fa fa-map-marker" aria-hidden="true"></em>
	                                <span>Tầng 4, Tòa nhà Báo Nông thôn ngày nay, Phố Dương Đình Nghệ, Phường Yên Hòa, Cầu Giấy, Hà Nội</span>
	                            </li>
	                            <li>
	                                <em class="fa fa-phone" aria-hidden="true"></em>
	                                <span>04. 3200 6298 - 0919 631 187</span>
	                            </li>
	                            <li class="mail">
	                                <em class="fa fa-envelope" aria-hidden="true"></em>
	                               	<a href="mailto:acgvnjsc@gmail.com">acgvnjsc@gmail.com</a>
	                            </li>
	                            <li class="web">
	                            	<em class="fa fa-globe" aria-hidden="true"></em>
	                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" target="_blank">www.acgvietnam.com.vn/</a>
	                            </li>
	                        </ul>
	                    </div>
					</div>
				</div>
			</div><!-- .site-info -->
			<div class="clearfix"></div>
			<div class="fo">
				<div class="container">
					<div class="row">
						<div class="col-lg-6">
							<p>Copyright © 2015 - 2017 ACG Vietnam jsc. All Right Reserved</p>
						</div>
						<div class="col-lg-6">
							<div class="fo-1"><a href="http://localhost/vietinterview/category/tuyen-dung/" target="_blank">Tuyển dụng</a></div>
							<div class="fo-2"><a href="http://localhost/vietinterview/" target="_self">Trang chủ</a></div>
						</div>
					</div>
				</div>
			</div>
			<div class="scroll-to-top"><i class="fa fa-angle-up"></i></div><!-- .scroll-to-top -->
		</footer><!-- #colophon -->
	</div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
