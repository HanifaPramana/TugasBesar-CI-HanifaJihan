<?php $this->load->view('user/header') ?>

		<div id="colorlib-services">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
						<h2>Detail Menginap</h2>
						<p>Anda telah tinggal <?php echo $list->lama_tinggal ?> Bulan</p>
						<p>Yang telah anda bayar <?php echo (int) $list->jumlah_lunas ?> Bulan</p>
						<p>Anda menunggak <?php echo $tunggak = $list->lama_tinggal-$list->jumlah_lunas ?> Bulan</p>
						<?php if ($tunggak > 0): ?>
							<h1>Pembayaran</h1>
						<?php echo form_open('Home/bayar'); ?>
						<div class="form-group">
							<label for="">Jumlah Bulan</label>
							<select name="jumlah_bulan" id="" class="form-control">
								<?php 
								$i = 1;
								while ($i<=$tunggak) {
								    ?>
									<option value="<?php echo $i ?>"><?php echo $i ?></option>
								    <?php
								    $i++;
								} ?>
							</select>
						</div>
						<input type="submit" value="bayar" class="btn btn-primary">
						<?php echo form_close(); ?>
						<?php endif ?>
					</div>
				</div>
			</div>
		</div>
		<div id="colorlib-services">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
						<h2>List Pembayaran</h2>
						<table class="table table-hover table-inverse">
							<thead>
								<tr>
									<th>No_Pembayaran</th>
									<th>Jumlah Bulan</th>
									<th>Status</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($data_pembayaran as $value): ?>
									<tr>
										<td><?php echo $value->no_pembayaran ?></td>
										<td><?php echo $value->jumlah_bulan ?></td>
										<td><?php echo ($value->status == 0 ? 'belum' : 'lunas') ?></td>
										<td>
											<a href="<?php echo base_url('Home/pembayaran/'.$value->id) ?>" class="btn btn-primary">Detail</a>
										</td>
									</tr>
								<?php endforeach ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>

		<div id="colorlib-work">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-4 no-gutters text-center animate-box">
						<a href="work.html" class="work-entry" style="background-image: url(<?php echo base_url('assets_user/') ?>images/work-1.jpg);">
							<div class="desc">
								<div class="display-t">
									<div class="display-tc">
										<span>Illustration</span>
										<h2>Work Name</h2>
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-4 no-gutters text-center animate-box">
						<a href="work.html" class="work-entry" style="background-image: url(<?php echo base_url('assets_user/') ?>images/work-2.jpg);">
							<div class="desc">
								<div class="display-t">
									<div class="display-tc">
										<span>Illustration</span>
										<h2>Work Name</h2>
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-4 no-gutters text-center animate-box">
						<a href="work.html" class="work-entry" style="background-image: url(<?php echo base_url('assets_user/') ?>images/work-3.jpg);">
							<div class="desc">
								<div class="display-t">
									<div class="display-tc">
										<span>Illustration</span>
										<h2>Work Name</h2>
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-4 no-gutters text-center animate-box">
						<a href="work.html" class="work-entry" style="background-image: url(<?php echo base_url('assets_user/') ?>images/work-4.jpg);">
							<div class="desc">
								<div class="display-t">
									<div class="display-tc">
										<span>Illustration</span>
										<h2>Work Name</h2>
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-4 no-gutters text-center animate-box">
						<a href="work.html" class="work-entry" style="background-image: url(<?php echo base_url('assets_user/') ?>images/work-5.jpg);">
							<div class="desc">
								<div class="display-t">
									<div class="display-tc">
										<span>Illustration</span>
										<h2>Work Name</h2>
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-4 no-gutters text-center animate-box">
						<a href="work.html" class="work-entry" style="background-image: url(<?php echo base_url('assets_user/') ?>images/work-6.jpg);">
							<div class="desc">
								<div class="display-t">
									<div class="display-tc">
										<span>Illustration</span>
										<h2>Work Name</h2>
									</div>
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>


		
		<footer id="colorlib-footer">
			<div class="newsletter">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="newsletter-flex">
								<div class="one-forth">
									<div class="display-tc">
										<form class="form-inline qbstp-header-subscribe">
											<div class="col-three-forth">
												<div class="form-group">
													<input type="text" class="form-control" id="email" placeholder="Enter your email">
												</div>
											</div>
											<div class="col-one-third">
												<div class="form-group">
													<button type="submit" class="btn btn-primary">Subscribe</button>
												</div>
											</div>
										</form>
									</div>
								</div>
								<div class="three-forth">
									<div class="display-tc">
										<h2>Subscribe to update for our Newsletter</h2>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row row-pb-md">
					<div class="col-md-3 colorlib-widget">
						<h4>About Landing</h4>
						<p>Far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics</p>
						<p>
							<ul class="colorlib-social-icons">
								<li><a href="#"><i class="icon-twitter"></i></a></li>
								<li><a href="#"><i class="icon-facebook"></i></a></li>
								<li><a href="#"><i class="icon-linkedin"></i></a></li>
								<li><a href="#"><i class="icon-dribbble"></i></a></li>
							</ul>
						</p>
					</div>
					<div class="col-md-3 colorlib-widget">
						<h4>Information</h4>
						<p>
							<ul class="colorlib-footer-links">
								<li><a href="#"><i class="icon-check"></i> About</a></li>
								<li><a href="#"><i class="icon-check"></i> Privacy</a></li>
								<li><a href="#"><i class="icon-check"></i> Terms &amp; Condition</a></li>
								<li><a href="#"><i class="icon-check"></i> Contact</a></li>
							</ul>
						</p>
					</div>

					<div class="col-md-3 colorlib-widget">
						<h4>Recent Blog</h4>
						<div class="f-blog">
							<a href="blog.html" class="blog-img" style="background-image: url(<?php echo base_url('assets_user/') ?>images/blog-1.jpg);">
							</a>
							<div class="desc">
								<h2><a href="blog.html">Become a Creative</a></h2>
								<p class="admin"><span>20 March 2018</span></p>
							</div>
						</div>
						<div class="f-blog">
							<a href="blog.html" class="blog-img" style="background-image: url(<?php echo base_url('assets_user/') ?>images/blog-2.jpg);">
							</a>
							<div class="desc">
								<h2><a href="blog.html">Become a Creative</a></h2>
								<p class="admin"><span>20 March 2018</span></p>
							</div>
						</div>
						<div class="f-blog">
							<a href="blog.html" class="blog-img" style="background-image: url(<?php echo base_url('assets_user/') ?>images/blog-3.jpg);">
							</a>
							<div class="desc">
								<h2><a href="blog.html">Become a Creative</a></h2>
								<p class="admin"><span>20 March 2018</span></p>
							</div>
						</div>
					</div>

					<div class="col-md-3 colorlib-widget">
						<h4>Contact Info</h4>
						<ul class="colorlib-footer-links">
							<li>291 South 21th Street, <br> Suite 721 New York NY 10016</li>
							<li><a href="tel://1234567920"><i class="icon-phone"></i> + 1235 2355 98</a></li>
							<li><a href="mailto:info@yoursite.com"><i class="icon-envelope"></i> info@yoursite.com</a></li>
							<li><a href="http://luxehotel.com"><i class="icon-location4"></i> yourwebsite.com</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="copy">
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center">
							<p>
								<small class="block"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
									Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart3" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
									<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></small><br> 
									<small class="block">Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a>, <a href="http://pexels.com/" target="_blank">Pexels</a></small>
								</p>
							</div>
						</div>
					</div>
				</div>
			</footer>
		</div>

		<div class="gototop js-top">
			<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
		</div>

		<!-- jQuery -->
		<script src="<?php echo base_url('assets_user/') ?>js/jquery.min.js"></script>
		<!-- jQuery Easing -->
		<script src="<?php echo base_url('assets_user/') ?>js/jquery.easing.1.3.js"></script>
		<!-- Bootstrap -->
		<script src="<?php echo base_url('assets_user/') ?>js/bootstrap.min.js"></script>
		<!-- Waypoints -->
		<script src="<?php echo base_url('assets_user/') ?>js/jquery.waypoints.min.js"></script>
		<!-- Stellar Parallax -->
		<script src="<?php echo base_url('assets_user/') ?>js/jquery.stellar.min.js"></script>
		<!-- Flexslider -->
		<script src="<?php echo base_url('assets_user/') ?>js/jquery.flexslider-min.js"></script>
		<!-- Owl carousel -->
		<script src="<?php echo base_url('assets_user/') ?>js/owl.carousel.min.js"></script>
		<!-- Magnific Popup -->
		<script src="<?php echo base_url('assets_user/') ?>js/jquery.magnific-popup.min.js"></script>
		<script src="<?php echo base_url('assets_user/') ?>js/magnific-popup-options.js"></script>
		<!-- Counters -->
		<script src="<?php echo base_url('assets_user/') ?>js/jquery.countTo.js"></script>
		<!-- Main -->
		<script src="<?php echo base_url('assets_user/') ?>js/main.js"></script>

	</body>
	</html>

